#!/bin/sh
set -e

# Create SQLite database file if it doesn't exist
mkdir -p /var/www/html/database
if [ ! -f /var/www/html/database/database.sqlite ]; then
    touch /var/www/html/database/database.sqlite
fi

# Ensure storage & database permissions for www-data
chown -R www-data:www-data /var/www/html/database /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 777 /var/www/html/database /var/www/html/database/database.sqlite /var/www/html/storage /var/www/html/bootstrap/cache

# Fallback APP_KEY if not passed in environment
if [ -z "$APP_KEY" ]; then
    export APP_KEY="base64:XSrT5c9vVHkhwgib/Qebbe3glTappimygaMmpKYPPnw="
fi

# Ensure reliable production environment variables
export DB_CONNECTION=sqlite
export DB_DATABASE=/var/www/html/database/database.sqlite
export SESSION_DRIVER=file
export CACHE_STORE=file
export QUEUE_CONNECTION=database

# Run migrations safely
php artisan migrate --force || true

# Cache Laravel configs, routes & views for maximum performance
php artisan config:clear || true
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Start Queue Worker in background
nohup php artisan queue:work --daemon > storage/logs/queue.log 2>&1 &

# Start Supervisor (which manages Nginx and PHP-FPM)
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
