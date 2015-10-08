#!/bin/sh -e
jekyll build
./.test-httpd.py
# For percy testing, remove a lot of files we don't need to regression test, then send to percy
jekyll build --config _config.yml,_config-testing.yml && find _site -type f | egrep "(people/|brigade-training/|peer-network-training/|summit/schedule/|summit/speakers/|geeks/our-geeks/alumni-fellows/).*\.html$" | xargs rm
percy snapshot _site --threads 2
