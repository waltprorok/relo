#!/bin/bash
#php artisan down
git reset --hard
git pull
php artisan migrate --force
export COMPOSER_ALLOW_SUPERUSER=1
composer install --prefer-dist --no-dev --optimize-autoloader --no-interaction
#sudo chown -R www-data:www-data storage bootstrap/cache
#sudo chmod -R 775 storage bootstrap/cache
php artisan optimize:clear
php artisan event:clear
npm ci
npm run build
php artisan route:cache
php artisan view:cache
php artisan event:cache
php artisan config:cache
#php artisan queue:restart
#php artisan up
