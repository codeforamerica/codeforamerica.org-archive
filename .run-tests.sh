#!/bin/sh -e
jekyll build
python .test-httpd.py
