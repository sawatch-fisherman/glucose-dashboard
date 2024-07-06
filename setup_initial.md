# 環境の初期設定用（初回セットアップ用）

# 実施方法
本作業は手動で実施する。shell化は不可能。

# このファイルについて
初回に環境を構築するためのものです。
プロジェクトを新規作成し、必要な設定を行います。

## 前提条件
Laravelコンテナのソース(/src)配下は空であること。

## 流れ
- Dockerコンテナのビルドと起動
→コンテナを作成する。３つのコンテナが作成される
- appコンテナにLaravelをインストール
- appコンテナにnode.jsをインストール


# Dockerコンテナのビルドと起動
docker compose build
docker compose up -d

# appコンテナにLaravelをインストール
## Laravel 11のInstall
docker compose exec app composer create-project --prefer-dist laravel/laravel="^11.0" .

## .evnの編集 その1
### 権限を変更
docker compose exec app chmod -R 777 .env

### .envのDBを変更
### Laravel11から初期がsqliteを指定されているため修正する
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=phper
DB_PASSWORD=secret631

### 言語とタイムゾーンを設定
APP_TIMEZONE=Asia/Tokyo
APP_LOCALE=ja
APP_FALLBACK_LOCALE=ja
APP_FAKER_LOCALE=ja_JP


## 細かい設定
## 本設定を実行しないと localhost でTOPページにアクセスしてもエラーとなる

### アプリケーションキーの生成
docker compose exec app php artisan key:generate

### ストレージリンクの作成
docker compose exec app php artisan storage:link

### ディレクトリの権限設定
docker compose exec app chmod -R 777 storage bootstrap/cache

### データベースのマイグレーション
docker compose exec app php artisan migrate:fresh



# Laravel + Vue3のための設定
## Laravel Breeze をインストール 
composer require laravel/breeze --dev

## Vueを使ったInertia.js をインストール
php artisan breeze:install vue

## vite.config.jsの設定
## docker環境の場合、下記を追記する必要がある。追加しない場合、真っ白なページが表示される。

```javascript:vite.config.js
    server: {
        host: true,
        hmr: {
            host: 'localhost',
        },
    }
```

# npmパッケージのインストール
docker compose exec app npm install



# devの実行
npm run dev




