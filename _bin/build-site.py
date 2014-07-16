#!/usr/bin/env python
''' Build this site based on recent successful Travis CI build.

With Travis (https://travis-ci.org) configured on a Jekyll repository, use
this script within a scheduled cron job to automatically build the most-recently
passed commit.

Requires a build directory, writeable checkout directory and lock file.
Expects piped JSON input from Travis CI, with a list of recent builds:

    https://api.travis-ci.org/docs/#/repos/:owner_name/:name/builds

Sample usage:

    <travis JSON> | build-it.py <checkout dir> <build dir> <lock file>

Typical usage in a shell script:

    #!/bin/bash -e
    source /etc/profile.d/rvm.sh

    git --work-tree /home/u/cfa --git-dir /home/u/cfa/.git pull -q
    curl -s https://api.travis-ci.org/repos/codeforamerica/codeforamerica.org/builds \
       | LC_ALL="en_US.UTF-8" /path/to/build-it.py /home/u/cfa /var/www/cfa /home/u/cfa.lock

The environment variable LC_ALL above is used to handle this Jekyll bug:

    https://github.com/jekyll/jekyll/issues/960#issuecomment-31343130
'''
from contextlib import contextmanager
from subprocess import call, check_call, check_output, PIPE
from fcntl import flock, LOCK_EX, LOCK_UN
from operator import itemgetter
from datetime import datetime
from os import chdir
from sys import argv, stdin
from json import load

@contextmanager
def locked_file(path):
    ''' Create a file, lock it, then unlock it. Use as a context manager.
    '''
    try:
        file = open(path, 'a+')
        flock(file, LOCK_EX)
        
        yield file

    finally:
        flock(file, LOCK_UN)

def missing_ref(ref):
    return call(('git', 'cat-file', 'commit', ref), stdout=PIPE) != 0

def read_commit(file):
    file.seek(0)
    return file.read().strip()

def current_branch():
    ref = check_output('git symbolic-ref HEAD'.split())
    return ref.strip().split('/')[-1]

def checkout_ref(ref):
    print '    git checkout', ref
    return check_call(('git', 'checkout', '-q', ref), stdout=PIPE)

def jekyll_build(dir):
    print '    jekyll build to', dir
    check_call(('jekyll', 'build', '-d', dir), stdout=PIPE)

def write_commit(file, commit):
    file.seek(0)
    file.truncate()
    file.write(commit)

if __name__ == '__main__':

    checkout_dir, build_dir, lock_path, state_file = argv[1:5]
    
    print '==>', datetime.now(), build_dir, '=', checkout_dir, '+', lock_path
    
    chdir(checkout_dir)

    builds = sorted(load(stdin), key=itemgetter('finished_at'), reverse=True)
    
    for build in builds:
        if build['result'] is None:
            print '   ', 'Skipping %(number)s - returned %(result)s' % build
            continue
        
        if missing_ref(build['commit']):
            print '   ', 'Skipping %(number)s - missing %(commit)s' % build
            continue

        if build['result'] != 0:
            with open(state_file, 'w') as state:
                print >> state, 'Failed Travis build %(number)s' % build
    
            print '   ', 'Skipping %(number)s - errored %(result)s' % build
            continue
        
        with locked_file(lock_path) as lock_file:
            previous_commit = read_commit(lock_file)
            
            if previous_commit == build['commit']:
                print '   ', 'Stopping at %(number)s - already have %(commit)s' % build
                break
        
            print '-->', 'Build %(number)s - %(finished_at)s' % build

            try:
                branch = current_branch()
                checkout_ref(build['commit'])
                jekyll_build(build_dir)
                
                write_commit(lock_file, build['commit'])

            except Exception, e:
                with open(state_file, 'w') as state:
                    print >> state, 'Failed to build %(commit)s,' % build,
                    print >> state, e
    
                print 'ERR', e
            
            else:
                with open(state_file, 'w') as state:
                    print >> state, 'OK'
    
            finally:
                checkout_ref(branch)

        break
