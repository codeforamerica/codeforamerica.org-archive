#!/usr/bin/env python
from tempfile import mkdtemp
from os.path import join, abspath, dirname
from urlparse import urljoin, urlparse
from httplib import HTTPConnection
from random import randrange
from shutil import rmtree
from time import sleep

from httpd import run_apache_forever, build_site

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
        doc_root = join(dirname(abspath(__file__)), '_site')
        
        self.httpd = run_apache_forever(doc_root, self.root, self.port, False)
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
                 ('/procurement', '/governments/principles/procurement/'),
                 ('/governments/capabilities/procurement', '/governments/principles/procurement/'),
                 ('/team', '/about/team/'),
                 ('/projects', '/apps/'),
                 ('/fellows/job-description', '/geeks/fellowship-faq/'),
                 ('/fellows/apply', '/geeks/fellowship-apply/'),
                 ('/fellows/alumni-fellows', '/geeks/our-geeks/alumni-fellows/'),
                 ('/alumni-fellows', '/geeks/our-geeks/alumni-fellows/'),
                 ('/fellows/2011-fellows', '/geeks/our-geeks/2011-fellows/'),
                 ('/2011-fellows', '/geeks/our-geeks/2011-fellows/'),
                 ('/fellows/2012-fellows', '/geeks/our-geeks/2012-fellows/'),
                 ('/2012-fellows', '/geeks/our-geeks/2012-fellows/'),
                 ('/fellows/2013-fellows', '/geeks/our-geeks/2013-fellows/'),
                 ('/2013-fellows', '/geeks/our-geeks/2013-fellows/'),
                 ('/fellows/2014-fellows', '/geeks/our-geeks/2014-fellows/'),
                 ('/2014-fellows', '/geeks/our-geeks/2014-fellows/'),
                 ('/startups', '/about/companies/'),
                 ('/fellowship', '/about/fellowship/'),
               # ('/fellows', '/about/fellowship/'),
                 ('/procurement', '/governments/principles/procurement/'),
                 ('/austin', '/governments/austin/'),
                 ('/honolulu', '/governments/honolulu/'),
                 ('/alex-pandel', '/people/alex-pandel/'),
                 ('/alex-yule', '/people/alex-yule/'),
                 ('/cities', '/governments/'),
                 ('/cities/2015-partners', '/governments/2015-partners/'),
                 ('/codeacross-2014', '/events/codeacross-2014/'),
                 ('/codeacross', '/events/codeacross-2015/'),
                 ('/02-18-2014', '/peer-network-training/02-18-2014/'),
                 ('/brigade12-12-2013', '/brigade-training/brigade12-12-2013/'),
                 ('/09-19-2013', '/brigade-training/09-19-2013/'),
                 ('/blog/meettheauthors', '/peer-network-training/meettheauthors/'),
                 ('/09-24-2013', '/peer-network-training/09-24-2013/'),
                 ('/blog/08-22-2013', '/peer-network-training/08-22-2013/'),
                 ('/08-07-2013', '/peer-network-training/08-07-2013/'),
                 ('/blog/ask-a-fellow-2013', '/peer-network-training/ask-a-fellow-2013/'),

                 ('/accelerator', '/companies/accelerator-faq/'),
                 ('/accelerator-2013', '/companies/accelerator-faq/'),
                 ('/accelerator-2', '/companies/accelerator-faq/'),
                 ('/startups/accelerator', '/companies/accelerator-faq/'),
                 ('/incubator', '/companies/incubator-faq/'),
                 ('/incubator-2', '/companies/incubator-faq/'),
                 ('/startups/incubator-2', '/companies/incubator-faq/'),
                 ('/who-we-are', '/about/team/'),
                 ('/donors', '/supporters/'),
                 ('/how-to-help', '/geeks/'),
                 ('/code-across-america', '/events/codeacross-2012/'),
                 ('/fellows/faq', '/geeks/fellowship-faq/'),
                 ('/fellows/training', '/geeks/fellowship-faq/'),
                 ('/fellows/institute', '/geeks/fellowship-faq/'),
                 ('/governments/expectations-of-our-city-partners', '/governments/fellowship/'),
                 ('/2012-city-videos', '/communications/testimonial/'),
                 ('/geeks/fellows/alumni-fellows', '/geeks/our-geeks/alumni-fellows/'),
                 ('/fellows/current-fellows', '/geeks/our-geeks/2013-fellows/'),
                 ('/fellows/alumni-fellows/2013-fellows', '/geeks/our-geeks/2013-fellows/'),
                 ('/geeks/our-startups', '/companies/our-companies/'),
                 ('/geeks/accelerator-faq', '/companies/accelerator-faq/'),
                 ('/geeks/accelerator-apply', '/companies/accelerator-apply/'),
                 ('/geeks/fellowship', '/about/fellowship/'),
                 ('/governments/city-impact', '/about/fellowship/'),
                 ('/the-program', '/about/fellowship/'),
               # ('/about/fellowship', '/governments/fellowship/'),
                 ('/governments/fellowship-faq', '/governments/fellowship/'),
                 ('/governments/2013-apply-now', '/governments/fellowship/'),
                 ('/governments/apply', '/forms/governments/fellowship/apply/'),
                 ('/governments/apply-now', '/forms/governments/fellowship/apply/'),
                 ('/governments/fellowship-apply', '/forms/governments/fellowship/apply/'),
                 ('/forms/governments/fellowship/interest', '/forms/governments/fellowship/apply/'),
                 ('/city-alumni', '/governments/alumni/'),
                 ('/cfa-2012', '/governments/alumni/'),
                 ('/2012', '/governments/alumni/'),
                 ('/governments/faqs-cities-applying-to-program', '/governments/fellowship/'),
                 ('/civic-data-standards', '/governments/data-standards-faq/'),
                 ('/application-info', '/governments/fellowship/'),
                 ('/application-questions', '/governments/fellowship/'),
                 ('/governments/call-for-applications', '/governments/fellowship/'),
                 ('/2013-partners', '/governments/alumni/'),
                 ('/city-current', '/governments/alumni/'),
                 ('/governments/current', '/governments/alumni/'),
                 ('/2013-partners/kansas-city', '/governments/kansascity/'),
                 ('/2013-partners/louisville', '/governments/louisville/'),
                 ('/2013-partners/las-vegas', '/governments/lasvegas/'),
                 ('/city-current/kansas-city', '/governments/kansascity/'),
                 ('/city-current/louisville', '/governments/louisville/'),
                 ('/city-current/las-vegas', '/governments/lasvegas/'),
                 ('/2012-partners/austin', '/governments/austin/'),
                 ('/2012-partners/chicago', '/governments/chicago/'),
                 ('/2012-partners/detroit', '/governments/detroit/'),
               # ('/2012-city-finalists', '/2012-city-finalists/'),
                 ('/2012-city-finalists/chicago', '/governments/chicago/'),
                 ('/2012-city-finalists/detroit', '/governments/detroit/'),
                 ('/city-alumni/boston', '/governments/boston/'),
                 ('/city-alumni/chicago', '/governments/chicago/'),
                 ('/city-alumni/philadelphia', '/governments/philadelphia/'),
                 ('/governments/summit-county', '/governments/summitcounty/'),
                 ('/focus', '/our-work/focus-areas/'),
                 ('/projects/new-york-city-hhc-accelerator/', '/projects/new-york-city-hhs-accelerator/'),
                 ('/companies/newsletter', '/companies/'),
                 ('/talent', '/our-work/initiatives/talent/'),
                 ('/health', '/our-work/focus-areas/health/'),
                 ('/safety-justice', '/our-work/focus-areas/safety-justice/'),
                 ('/economic-development', '/our-work/focus-areas/economic-development/'),
                 
                 # # This actually goes to BSD, but we check for it anyway.
                 # ('/donate', '/page/contribute/default'),
                 ]
        
        for (start_path, end_path) in pairs:
            url = 'http://0.0.0.0:{0}{1}'.format(self.port, start_path)
        
            for i in range(100):
                if i > 10:
                    raise Exception('Too many redirects from {0}, now at {1}'.format(start_path, url_path))
            
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
    build_site(join(dirname(abspath(__file__)), '_site'), False)
    unittest.main()
