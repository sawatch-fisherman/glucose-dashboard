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
        Schema::create('column_name_settings', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->string('user_uuid', 16)->nullable()->default('0')->comment('ユーザーUUID');
            $table->string('main_item1')->nullable()->default('朝')->comment('メイン項目1');
            $table->string('sub_item1_1')->nullable()->default('前')->comment('サブ項目1-1');
            $table->string('sub_item1_2')->nullable()->default('後')->comment('サブ項目1-2');
            $table->string('main_item2')->nullable()->default('昼')->comment('メイン項目1');
            $table->string('sub_item2_1')->nullable()->default('前')->comment('サブ項目1-1');
            $table->string('sub_item2_2')->nullable()->default('後')->comment('サブ項目1-2');
            $table->string('main_item3')->nullable()->default('夕')->comment('メイン項目1');
            $table->string('sub_item3_1')->nullable()->default('前')->comment('サブ項目1-1');
            $table->string('sub_item3_2')->nullable()->default('後')->comment('サブ項目1-2');
            $table->string('remarks')->nullable()->default('メモ')->comment('備考');
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
        Schema::dropIfExists('column_name_settings');
    }
};
