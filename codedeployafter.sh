#!/bin/bash
chown -R webapp:webapp /var/www/html/blog
cd /var/www/html/blog/blog
php artisan envi DB_HOST>>/home/ec2-user/art.txt
/usr/bin/composer.phar install
