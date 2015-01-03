#!/usr/bin/env python
from tempfile import mkdtemp
from os.path import join, exists
from subprocess import Popen, PIPE
from argparse import ArgumentParser
from shutil import rmtree
from time import sleep
from os import mkdir

parser = ArgumentParser(description='Serve Jekyll site')

parser.add_argument('--watch', dest='watch', action='store_true',
                    help='Watch for changes and rebuild.')

config = '''
LoadModule rewrite_module {ModulesPath}/mod_rewrite.so
LoadModule alias_module {ModulesPath}/mod_alias.so
LoadModule dir_module {ModulesPath}/mod_dir.so
LoadModule mime_module {ModulesPath}/mod_mime.so

<IfModule {ModulesPath}/mod_log_config.so>
    LoadModule log_config_module {ModulesPath}/mod_log_config.so
</IfModule>

<IfModule {ModulesPath}/mod_authz_core.so>
    LoadModule authz_core_module {ModulesPath}/mod_authz_core.so
</IfModule>

<IfModule {ModulesPath}/mod_unixd.so>
    LoadModule unixd_module {ModulesPath}/mod_unixd.so
</IfModule>

Listen 0.0.0.0:{Port}
PidFile "{ServerRoot}/httpd.pid"
#LockFile "{ServerRoot}/accept.lock"
Mutex file:{ServerRoot}
DocumentRoot "{DocumentRoot}"

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
    '''
    for mod_path in ('/usr/lib/apache2/modules', '/usr/libexec/apache2'):
        if not exists(join(mod_path, 'mod_dir.so')):
            continue
    
        vars = dict(DocumentRoot=doc_root, ModulesPath=mod_path,
                    Port=port, ServerRoot=root)

        with open(join(root, 'httpd.conf'), 'w') as file:
            file.write(config.format(**vars))
    
    if not exists(join(root, 'httpd.conf')):
        raise RuntimeError('Did not make httpd.conf')

def run_apache(root, port, watch):
    ''' Look for Apache executable and start it up.
    '''
    try:
        doc_root = join(root, '_site')
        mkdir(doc_root)
        mkdir(join(root, 'logs'))

        write_config(doc_root, root, port)

        for httpd_path in ('/usr/sbin/httpd', '/usr/sbin/apache2'):
            if not exists(httpd_path):
                continue

            httpd_cmd = (httpd_path, '-d', root, '-f', 'httpd.conf',
                         '-DFOREGROUND', '-DNO_DETACH')

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
