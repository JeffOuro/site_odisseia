#!/bin/sh
set -e

# Em Nixpacks, a pasta principal é /app
APP_DIR="/app"

# Cria o banco SQLite se não existir
if [ ! -f $APP_DIR/database/database.sqlite ]; then
    touch $APP_DIR/database/database.sqlite
fi

export DB_CONNECTION=sqlite
export DB_DATABASE=$APP_DIR/database/database.sqlite

cd $APP_DIR

# Executa migrações
php artisan migrate --force || true

# Otimizações de cache para produção
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Inicia o Queue Worker em background para processar os envios do WhatsApp
nohup php artisan queue:work --daemon > $APP_DIR/storage/logs/queue.log 2>&1 &

# Inicia os servidores padrão do Nixpacks (PHP-FPM e Caddy)
php-fpm -y /etc/php-fpm.conf &
exec caddy run --config /etc/caddy/Caddyfile --adapter caddyfile
