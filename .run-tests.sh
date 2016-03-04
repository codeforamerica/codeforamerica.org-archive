#!/bin/sh -e
jekyll build
./.test-httpd.py
# Rebuild the site with some CSS we want for percy testing
# jekyll build --config _config.yml,_config-testing.yml
# Things that aren't important to use to visual regression test
# find _site -type f | egrep "(people/|brigade-training/|peer-network-training/|apps/.*/).*\.html$" | xargs rm
# Things that are timing out on percy for now
# find _site -type f | egrep "(summit/schedule/|summit/speakers/|geeks/our-geeks/alumni-fellows/).*\.html$" | xargs rm
# Send to percy
# percy snapshot _site --threads 2
