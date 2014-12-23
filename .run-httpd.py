#!/usr/bin/env python
from tempfile import mkdtemp
from os.path import join, abspath, dirname, exists
from urlparse import urljoin, urlparse
from httplib import HTTPConnection
from subprocess import Popen, PIPE
from random import randrange
from shutil import rmtree
from time import sleep

import unittest

config = '''
{MLCP}LoadModule log_config_module {ModulesPath}/mod_log_config.so
LoadModule rewrite_module {ModulesPath}/mod_rewrite.so
LoadModule alias_module {ModulesPath}/mod_alias.so
LoadModule dir_module {ModulesPath}/mod_dir.so

Listen 0.0.0.0:{Port}
PidFile httpd.pid
LockFile accept.lock
DocumentRoot "{DocumentRoot}"
CustomLog "|tee /dev/stderr" "%h %l %u %t \\"%r\\" %>s %b"
ErrorLog "|tee /dev/stderr"

<Directory "{DocumentRoot}">
    Options +FollowSymLinks
    AllowOverride Options FileInfo Indexes
</Directory>
'''

def build_site(destination):
    '''
    '''
    Popen(('jekyll', 'build', '-d', destination)).wait()
    print 'Built to', destination

def write_config(doc_root, root, port):
    ''' Look for Apache modules, write a configuration file.
    '''
    for mod_path in ('/usr/lib/apache2/modules', '/usr/libexec/apache2'):
        if not exists(join(mod_path, 'mod_dir.so')):
            continue
    
        log_config_so_path = join(mod_path, 'mod_log_config.so')
        log_config_prefix = '' if exists(log_config_so_path) else '#'
        vars = dict(DocumentRoot=doc_root, ModulesPath=mod_path,
                    Port=port, MLCP=log_config_prefix)

        with open(join(root, 'httpd.conf'), 'w') as file:
            file.write(config.format(**vars))
    
    if not exists(join(root, 'httpd.conf')):
        raise RuntimeError('Did not make httpd.conf')

def run_apache(root, port):
    ''' Look for Apache executable and start it up.
    '''
    try:
        doc_root = join(root, '_site')

        build_site(doc_root)
        write_config(doc_root, root, port)

        for httpd_path in ('/usr/sbin/httpd', '/usr/sbin/apache2'):
            if not exists(httpd_path):
                continue

            httpd_cmd = (httpd_path, '-d', root, '-f', 'httpd.conf', '-X')

        try:
            httpd = Popen(httpd_cmd, stderr=PIPE, stdout=PIPE)
            print 'Running at http://127.0.0.1:{}'.format(port)
            sleep(7 * 86400)
        finally:
            httpd.kill()

    except KeyboardInterrupt:
        rmtree(root)

def main():
    '''
    '''
    run_apache(mkdtemp(prefix='codeforamerica.org-'), 4000)
    
if __name__ == '__main__':
    exit(main())
