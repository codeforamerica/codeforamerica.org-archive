#!/bin/sh -e
jekyll build
./.test-httpd.py
percy snapshot _site --repo "codeforamerica/codeforamerica.org" --autoload_remote_resources
