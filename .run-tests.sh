#!/bin/sh -e
jekyll build
./.test-httpd.py
