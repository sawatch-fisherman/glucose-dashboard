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
        Schema::create('medication_settings', function (Blueprint $table) {
            $table->comment('薬設定');
            $table->bigIncrements('id')->comment('ID');
            $table->unsignedBigInteger('user_id')->default(0)->index('fk_medication_settings_users')->comment('ユーザーUUID');
            $table->string('name')->comment('薬名');
            $table->float('dosage_unit')->unsigned()->default(0)->comment('投薬の単位');
            $table->string('medication_abbr', 2)->comment('薬の略称');
            $table->dateTime('created_at')->comment('登録日');
            $table->dateTime('updated_at')->comment('更新日時');
            $table->dateTime('deleted_at')->nullable()->comment('論理削除日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medication_settings');
    }
};
