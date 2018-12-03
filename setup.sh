#!/bin/bash


/bin/sed -i "s/\;date\.timezone\ \=/date\.timezone\ \=\ ${DATE_TIMEZONE}/" /etc/php/7.0/apache2/php.ini
/usr/sbin/postfix start
service apache2 start
/usr/bin/mysqld_safe
