#!/bin/sh
set -e

# Cria o banco de dados se não existir
mkdir -p /var/www/html/database
if [ ! -f /var/www/html/database/database.sqlite ]; then
    touch /var/www/html/database/database.sqlite
fi

# Configura o ambiente padrão se não estiver definido
export DB_CONNECTION=${DB_CONNECTION:-sqlite}
export DB_DATABASE=${DB_DATABASE:-/var/www/html/database/database.sqlite}
export SESSION_DRIVER=${SESSION_DRIVER:-file}
export CACHE_STORE=${CACHE_STORE:-file}
export QUEUE_CONNECTION=${QUEUE_CONNECTION:-database}

# Executa migrações
php artisan migrate --force || true

# Limpa caches prévios para garantir leitura dinâmica das variáveis de ambiente
php artisan config:clear || true
php artisan route:clear || true
php artisan view:clear || true

# Ajusta permissões para o usuário www-data
chown -R www-data:www-data /var/www/html/database /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/database /var/www/html/storage /var/www/html/bootstrap/cache

# Inicia o Supervisor (que vai iniciar o Nginx, PHP-FPM e o Queue Worker)
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
