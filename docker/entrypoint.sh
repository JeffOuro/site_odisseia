#!/bin/sh
set -e

# Cria o banco de dados se não existir
mkdir -p /var/www/html/database
if [ ! -f /var/www/html/database/database.sqlite ]; then
    touch /var/www/html/database/database.sqlite
fi

# Configura o ambiente
export DB_CONNECTION=sqlite
export DB_DATABASE=/var/www/html/database/database.sqlite
export SESSION_DRIVER=file
export CACHE_STORE=file
export QUEUE_CONNECTION=database

# Ajusta permissões
chown -R www-data:www-data /var/www/html/database /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/database /var/www/html/storage /var/www/html/bootstrap/cache

# Executa migrações
php artisan migrate --force || true

# Otimizações
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Inicia o Supervisor (que vai iniciar o Nginx, PHP-FPM e o Queue Worker)
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
