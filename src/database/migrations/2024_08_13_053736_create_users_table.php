<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->string('uuid', 16)->default('0')->comment('UUID');
            $table->string('name')->comment('ニックネーム');
            $table->string('email')->comment('メールアドレス');
            $table->dateTime('email_verified_at')->nullable()->comment('メールアドレス確認日時');
            $table->string('password')->nullable()->comment('パスワード');
            $table->string('reset_password')->nullable()->comment('再発行パスワード');
            $table->dateTime('reset_password_expiry')->nullable()->comment('再発行パスワード有効期限');
            $table->rememberToken()->comment('ログイン記憶トークン');
            $table->dateTime('created_at')->nullable()->comment('登録日');
            $table->dateTime('updated_at')->nullable()->comment('更新日時');
            $table->dateTime('deleted_at')->nullable()->comment('論理削除日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
