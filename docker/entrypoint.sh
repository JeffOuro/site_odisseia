#!/bin/bash

echo "Starting deployment script..."

# Run migrations (don't exit on failure)
php artisan migrate --force || echo "Migration failed"

# Start queue worker in background
php artisan queue:work &

# Start PHP-FPM in background
php-fpm -y /etc/php-fpm.conf &

# Start Caddy in foreground (keeps container alive)
echo "Starting Caddy..."
exec caddy run --config /etc/caddy/Caddyfile --adapter caddyfile
