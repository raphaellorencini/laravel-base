#!/bin/bash

#composer install
#dockerize -template /var/www/docker/app/.env:/var/www/.env
chmod -R 777 /var/www/.env
php artisan config:clear
php artisan optimize:clear
#php artisan key:generate
#php artisan config:cache
php artisan migrate
php-fpm

tail -f dev/nul