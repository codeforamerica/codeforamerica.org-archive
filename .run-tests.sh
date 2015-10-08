#!/bin/sh -e
jekyll build
./.test-httpd.py
find _site -type f | egrep "(people/|brigade-training/|peer-network-training/).*html$" | xargs rm
percy snapshot _site --threads 2
