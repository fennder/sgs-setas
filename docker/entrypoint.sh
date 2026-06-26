#!/bin/sh
set -e

cd /var/www/html

if [ ! -f .env ] && [ -f .env.example ]; then
  cp .env.example .env
fi

if [ ! -f vendor/autoload.php ]; then
  echo "ERROR: vendor/autoload.php not found. Install PHP dependencies before starting the container."
  echo "Run composer install on the host or use a Composer 2 container, then restart."
  exit 1
fi

if [ -f .env ]; then
  if ! grep -q '^APP_KEY=' .env || grep -q '^APP_KEY=SomeRandomString' .env; then
    php artisan key:generate --force
  fi
fi

chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache || true

exec "$@"
