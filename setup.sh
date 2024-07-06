# 初期設定
docker compose build
docker compose up -d
docker compose exec app composer install
docker compose exec app cp .env.example .env
docker compose exec app php artisan key:generate
docker compose exec app php artisan storage:link
docker compose exec app chmod -R 777 storage bootstrap/cache
docker compose exec app php artisan migrate:fresh
docker compose exec app npm install
