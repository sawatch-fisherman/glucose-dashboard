# 複製環境セットアップ用シェルスクリプト（第三者用）
# このスクリプトは、既にプロジェクトが存在する状態で、第三者が環境をセットアップするためのものです。プロジェクトを新規作成せずに、既存のプロジェクトを使用します。

#!/bin/sh

# Dockerコンテナのビルドと起動
docker compose build
docker compose up -d

# 依存パッケージのインストール
docker compose exec app composer install

# 環境設定ファイルのコピー
docker compose exec app cp .env.example .env

# アプリケーションキーの生成
docker compose exec app php artisan key:generate

# ストレージリンクの作成
docker compose exec app php artisan storage:link

# ディレクトリの権限設定
docker compose exec app chmod -R 777 storage bootstrap/cache

# データベースのマイグレーション
docker compose exec app php artisan migrate:fresh

# npmパッケージのインストール
docker compose exec app npm install
