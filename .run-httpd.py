#!/usr/bin/env python
from tempfile import mkdtemp
from argparse import ArgumentParser

from httpd import run_apache_with_jekyll

parser = ArgumentParser(description='Serve Jekyll site')

parser.add_argument('--watch', dest='watch', action='store_true',
                    help='Watch for changes and rebuild.')

def main():
    '''
    '''
    args = parser.parse_args()
    run_apache_with_jekyll(mkdtemp(prefix='codeforamerica.org-'), 4000, args.watch)
    
if __name__ == '__main__':
    exit(main())
