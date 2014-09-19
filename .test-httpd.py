#!/usr/bin/env python
from tempfile import mkdtemp
from os.path import join, abspath, dirname, exists
from urlparse import urljoin, urlparse
from httplib import HTTPConnection
from subprocess import Popen, PIPE
from shutil import rmtree
from time import sleep
from os import mkdir

import unittest

config = '''
LoadModule log_config_module {ModulesPath}/mod_log_config.so
LoadModule rewrite_module {ModulesPath}/mod_rewrite.so
LoadModule alias_module {ModulesPath}/mod_alias.so
LoadModule dir_module {ModulesPath}/mod_dir.so

Listen {Port}
PidFile logs/httpd.pid
LockFile logs/accept.lock
DocumentRoot "{DocumentRoot}"
CustomLog "|tee /dev/stderr" "%h %l %u %t \\"%r\\" %>s %b"
ErrorLog "|tee /dev/stderr"

<Directory "{DocumentRoot}">
    Options +FollowSymLinks
    AllowOverride Options FileInfo Indexes
</Directory>
'''

class TestApache (unittest.TestCase):
    
    def setUp(self):
        self.root = mkdtemp()
        self.port = 8888
        
        for mod_path in ('/usr/lib/apache2/modules', '/usr/libexec/apache2'):
            if not exists(join(mod_path, 'mod_dir.so')):
                continue
        
            doc_root = dirname(abspath(__file__))
            vars = dict(DocumentRoot=doc_root, ModulesPath=mod_path, Port=self.port)

            with open(join(self.root, 'httpd.conf'), 'w') as file:
                file.write(config.format(**vars))
        
        if not exists(join(self.root, 'httpd.conf')):
            raise RuntimeError('Did not make httpd.conf')
        
        mkdir(join(self.root, 'logs'))

        httpd = ('httpd', '-d', self.root, '-f', 'httpd.conf', '-X')
        self.httpd = Popen(httpd, stderr=PIPE, stdout=PIPE)
        sleep(.5)
    
    def test_home(self):
        conn = HTTPConnection('127.0.0.1', self.port)
        conn.request('GET', '/')
        resp = conn.getresponse()
        
        assert resp.status == 200
    
    def test_redirects(self):
        pairs = [('/accelerator', '/geeks/accelerator-faq/'),
                 ('/incubator', '/geeks/incubator-faq/'),
                 ('/projects', '/apps/'), ('/brigade/projects', '/brigade/projects')]
        
        for (start_path, end_path) in pairs:
            url = urljoin('http://127.0.0.1:{0}/'.format(self.port), start_path)
        
            while True:
                _, url_host, url_path, _, _, _ = urlparse(url)
                conn = HTTPConnection(*url_host.split(':'))
                conn.request('GET', url_path)
                resp = conn.getresponse()
                conn.close()
        
                if resp.status in range(300, 399):
                    url = urljoin(url, resp.getheader('location'))
                    continue

                break

            assert end_path == url_path
    
    def tearDown(self):
        self.httpd.kill()
        rmtree(self.root)

if __name__ == '__main__':
    unittest.main()
