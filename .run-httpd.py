#!/usr/bin/env python
from tempfile import mkdtemp
from os.path import join, exists
from subprocess import Popen, PIPE, check_output
from argparse import ArgumentParser
from shutil import rmtree
from time import sleep
from re import compile
from os import mkdir

parser = ArgumentParser(description='Serve Jekyll site')

parser.add_argument('--watch', dest='watch', action='store_true',
                    help='Watch for changes and rebuild.')

config = '''
LoadModule rewrite_module {ModulesPath}/mod_rewrite.so
LoadModule alias_module {ModulesPath}/mod_alias.so
LoadModule dir_module {ModulesPath}/mod_dir.so
LoadModule mime_module {ModulesPath}/mod_mime.so

<IfDefine Unixd>
    LoadModule unixd_module {ModulesPath}/mod_unixd.so
</IfDefine>

<IfDefine MpmEvent>
    LoadModule mpm_event_module {ModulesPath}/mod_mpm_event.so
</IfDefine>

<IfDefine Version2.2>
    LoadModule log_config_module {ModulesPath}/mod_log_config.so
    LockFile "{ServerRoot}/accept.lock"
</IfDefine>

<IfDefine Version2.4>
    LoadModule authz_core_module {ModulesPath}/mod_authz_core.so
    Mutex file:{ServerRoot}
</IfDefine>

Listen 0.0.0.0:{Port}
PidFile "{ServerRoot}/httpd.pid"
DocumentRoot "{DocumentRoot}"
TypesConfig {MimeTypes}

<Directory "{DocumentRoot}">
    Options +FollowSymLinks
    AllowOverride Options FileInfo Indexes
</Directory>
'''

def build_site(destination, watch):
    '''
    '''
    command = 'jekyll', 'build', '-d', destination
    
    if watch:
        command += ('--watch', )
    
    Popen(command).wait()
    print 'Built to', destination

def write_config(doc_root, root, port):
    ''' Look for Apache modules, write a configuration file.
    
        Return module directory.
    '''
    mod_paths = '/usr/lib/apache2/modules', '/usr/libexec/apache2'
    mime_paths = '/etc/apache2/mime.types', '/etc/mime.types'
    
    mod_path = filter(exists, mod_paths)[0]
    mime_path = filter(exists, mime_paths)[0]

    vars = dict(DocumentRoot=doc_root, ModulesPath=mod_path,
                Port=port, ServerRoot=root, MimeTypes=mime_path)

    with open(join(root, 'httpd.conf'), 'w') as file:
        file.write(config.format(**vars))
        
    if not exists(join(root, 'httpd.conf')):
        raise RuntimeError('Did not make httpd.conf')
    
    return mod_path

def apache_version(httpd_path):
    ''' Return major, minor version tuple.
    '''
    pattern = compile(r'^Server version: Apache/(\d+)\.(\d+)\.(\d+)\b')
    match = pattern.match(check_output((httpd_path, '-v')))
    major, minor, patch = [int(match.group(i)) for i in (1, 2, 3)]

    return major, minor

def run_apache(root, port, watch):
    ''' Look for Apache executable and start it up.
    '''
    try:
        doc_root = join(root, '_site')
        mkdir(doc_root)
        mkdir(join(root, 'logs'))

        mod_path = write_config(doc_root, root, port)
        httpd_paths = '/usr/sbin/httpd', '/usr/sbin/apache2'
        httpd_path = filter(exists, httpd_paths)[0]

        version_param = '-DVersion{}.{}'.format(*apache_version(httpd_path))
        
        httpd_cmd = (httpd_path, '-d', root, '-f', 'httpd.conf',
                     '-DFOREGROUND', '-DNO_DETACH', version_param)
        
        if exists(join(mod_path, 'mod_unixd.so')):
            httpd_cmd += ('-DUnixd', )

        if exists(join(mod_path, 'mod_mpm_event.so')):
            httpd_cmd += ('-DMpmEvent', )

        stderr = open(join(root, 'stderr'), 'w')
        stdout = open(join(root, 'stdout'), 'w')

        try:
            httpd = Popen(httpd_cmd, stderr=stderr, stdout=stdout)
            print 'Running at http://127.0.0.1:{}'.format(port)
            build_site(doc_root, watch)
            sleep(7 * 86400)
        finally:
            httpd.kill()

    except KeyboardInterrupt:
        rmtree(root)

def main():
    '''
    '''
    args = parser.parse_args()
    run_apache(mkdtemp(prefix='codeforamerica.org-'), 4000, args.watch)
    
if __name__ == '__main__':
    exit(main())
