#!/usr/bin/env python
''' Build this site based on recent successful Travis CI build.

With Travis (https://travis-ci.org) configured on a Jekyll repository, use
this script within a scheduled cron job to automatically build the most-recently
passed commit.

Requires a writeable checkout directory and lock file.

Usage:

    build-it.py <checkout dir> <build dir> <lock file>

Sample usage in a shell script:

    #!/bin/bash -e
    source /etc/profile.d/rvm.sh

    git --work-tree /home/u/cfa --git-dir /home/u/cfa/.git pull -q
    curl -s https://api.travis-ci.org/repos/codeforamerica/codeforamerica.org/builds \
       | LC_ALL="en_US.UTF-8" /path/to/build-it.py /home/u/cfa /var/www/cfa /home/u/cfa.lock

'''
from contextlib import contextmanager
from subprocess import call, check_call, check_output, PIPE
from fcntl import flock, LOCK_EX, LOCK_UN
from datetime import datetime
from os import chdir
from sys import argv, stdin
from json import load

@contextmanager
def locked_file(path):
    ''' Create a file, lock it, then unlock it. Use as a context manager.
    '''
    #debug('Locking ' + path)
    
    try:
        file = open(path, 'a+')
        flock(file, LOCK_EX)
        
        yield file

    finally:
        #debug('Unlocking ' + path)
        flock(file, LOCK_UN)

def missing_ref(ref):
    return call(('git', 'cat-file', 'commit', ref), stdout=PIPE) != 0

def current_branch():
    ref = check_output('git symbolic-ref HEAD'.split())
    return ref.strip().split('/')[-1]

def checkout_ref(ref):
    print '    git checkout', ref
    return check_call(('git', 'checkout', '-q', ref), stdout=PIPE)

def jekyll_build(dir):
    print '    jekyll build to', dir
    check_call(('jekyll', 'build', '-d', dir), stdout=PIPE)

if __name__ == '__main__':

    checkout_dir, build_dir, lock_path = argv[1:]
    
    print '==>', datetime.now(), build_dir, '=', checkout_dir, '+', lock_path
    
    chdir(checkout_dir)

    for build in load(stdin):
        if build['result'] > 0:
            print '-->', 'Skipping %(number)s - returned %(result)s' % build
            continue
        
        if missing_ref(build['commit']):
            print '-->', 'Skipping %(number)s - missing %(commit)s' % build
            continue

        with locked_file(lock_path) as lock_file:
            lock_file.seek(0)
            previous_commit = lock_file.read().strip()
            
            if previous_commit == build['commit']:
                print '-->', 'Skipping %(number)s - already have %(commit)s' % build
        
            else:
                print '-->', 'Build %(number)s - %(finished_at)s' % build

                try:
                    branch = current_branch()
                    checkout_ref(build['commit'])
                    jekyll_build(build_dir)

                    lock_file.seek(0)
                    lock_file.truncate()
                    lock_file.write(build['commit'])
    
                except Exception, e:
                    print 'ERR', e

                finally:
                    checkout_ref(branch)
    
        break
