#!/bin/sh -e
jekyll build
percy snapshot _site --repo "codeforamerica/codeforamerica.org" --autoload_remote_resources