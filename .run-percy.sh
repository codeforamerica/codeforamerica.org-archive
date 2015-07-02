#!/bin/sh -e
jekyll build
percy snapshot _site --autoload_remote_resources
