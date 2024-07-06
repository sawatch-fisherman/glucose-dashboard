# 環境の初期設定用シェルスクリプト（初回セットアップ用）
# このスクリプトは、初回に環境を構築するためのものです。プロジェクトを新規作成し、必要な設定を行います。

#!/bin/sh

# Dockerコンテナのビルドと起動
docker compose build
docker compose up -d

# プロジェクトディレクトリのクリア
docker compose exec app rm -rf ./*

# Laravel 11の新規プロジェクト作成
docker compose exec app composer create-project --prefer-dist laravel/laravel="^11.0" .

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
