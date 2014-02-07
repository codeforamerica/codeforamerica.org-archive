#!/usr/bin/env python
''' Build this site based on recent successful Travis CI build.

With Travis (https://travis-ci.org) configured on a Jekyll repository, use
this script within a scheduled cron job to automatically build the most-recently
passed commit.

Requires a writeable checkout directory.

Sample usage in a shell script:

    #!/bin/bash -e
    source /etc/profile.d/rvm.sh

    git --work-tree /home/u/cfa --git-dir /home/u/cfa/.git pull -q
    curl -s https://api.travis-ci.org/repos/codeforamerica/codeforamerica.org/builds \
       | LC_ALL="en_US.UTF-8" /path/to/build-it.py /home/u/cfa /var/www/cfa

'''
from subprocess import check_call, check_output, PIPE
from os import chdir
from sys import argv, stdin
from json import load

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

    builds = load(stdin)
    build = [b for b in builds if b['result'] == 0][0]

    print '-->', 'Build %(number)s - %(finished_at)s' % build

    commit = build['commit']
    checkout_dir, build_dir = argv[1:]

    try:
        chdir(checkout_dir)
        branch = current_branch()

        checkout_ref(commit)
        jekyll_build(build_dir)
    
    except Exception, e:
        print 'ERR', e

    finally:
        checkout_ref(branch)
