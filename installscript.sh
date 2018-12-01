#!/usr/bin/env bash
git clone https://github.com/Slackers3308/Code
echo "Enter your nginx http directory (or press enter for /var/www/html):"
read nginxdir
if [ -z "$nginxdir" ]; then
	nginxdir = "/var/www/html"
fi
sudo cp -r Code/* $nginxdir

rm -rf Code/

sudo mysql < $nginxdir/setupdb.sql
