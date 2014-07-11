s3cmd -r --delete-removed --cf-invalidate --acl-public --add-header 'Cache-Control: max-age=1500' --force --progress sync _site/ s3://annual.codeforamerica.org
