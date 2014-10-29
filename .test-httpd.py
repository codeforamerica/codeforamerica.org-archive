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

class TestApache (unittest.TestCase):
    
    def setUp(self):
        ''' Run Apache in a subprocess on a random port number.
        
            Create a temporary directory to hold ServerRoot and configuration.
        '''
        self.root = mkdtemp()
        self.port = randrange(0x1000, 0x10000)
        
        #
        # Look for Apache modules, write a configuration file.
        #
        for mod_path in ('/usr/lib/apache2/modules', '/usr/libexec/apache2'):
            if not exists(join(mod_path, 'mod_dir.so')):
                continue
        
            doc_root = join(dirname(abspath(__file__)), '_site')
            log_config_so_path = join(mod_path, 'mod_log_config.so')
            log_config_prefix = '' if exists(log_config_so_path) else '#'
            vars = dict(DocumentRoot=doc_root, ModulesPath=mod_path,
                        Port=self.port, MLCP=log_config_prefix)

            with open(join(self.root, 'httpd.conf'), 'w') as file:
                file.write(config.format(**vars))
        
        if not exists(join(self.root, 'httpd.conf')):
            raise RuntimeError('Did not make httpd.conf')
        
        #
        # Look for Apache executable and start it up.
        #
        for httpd_path in ('/usr/sbin/httpd', '/usr/sbin/apache2'):
            if not exists(httpd_path):
                continue

            httpd_cmd = (httpd_path, '-d', self.root, '-f', 'httpd.conf', '-X')

        self.httpd = Popen(httpd_cmd, stderr=PIPE, stdout=PIPE)
        sleep(.5)
    
    def tearDown(self):
        ''' Kill Apache and delete ServerRoot.
        '''
        self.httpd.kill()
        rmtree(self.root)

    def test_home(self):
        ''' Test a basic 200 OK response from the home page.
        '''
        conn = HTTPConnection('0.0.0.0', self.port)
        conn.request('GET', '/')
        resp = conn.getresponse()
        
        assert resp.status == 200
    
    def test_redirects(self):
        ''' Check a selection of HTTP redirect pairs.
        '''
        pairs = [('/accelerator', '/companies/accelerator-faq/'),
                 ('/incubator', '/companies/incubator-faq/'),
                 ('/projects', '/apps/'), ('/brigade/projects', '/brigade/projects'),
                 ('/focus', '/our-work/focus-areas/'),
                 ('/governments/capabilities', '/governments/principles/'),
                 ('/governments/capabilities/index.html', '/governments/principles/index.html'),
                 ('/governments/capabilities/open-data', '/governments/principles/open-data/'),
                 
                 # This actually goes to BSD, but we check for it anyway.
                 ('/donate', '/page/contribute/default'),
                 ]
        
        for (start_path, end_path) in pairs:
            url = 'http://0.0.0.0:{0}{1}'.format(self.port, start_path)
        
            while True:
                _, url_host, url_path, _, _, _ = urlparse(url)
                conn = HTTPConnection(*url_host.split(':'))
                conn.request('GET', url_path)
                resp = conn.getresponse()
                conn.close()
        
                if resp.status not in range(300, 399):
                    break

                url = urljoin(url, resp.getheader('location'))
                _, new_host, url_path, _, _, _ = urlparse(url)
                
                # Stop if we go off-site
                if new_host != url_host:
                    break

            assert end_path == url_path, '{0} instead of {1} from {2}'.format(url_path, end_path, start_path)
    
if __name__ == '__main__':
    unittest.main()
