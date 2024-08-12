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
        Schema::create('glucose_records', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->string('user_uuid', 16)->default('0')->comment('ユーザーUUID');
            $table->unsignedInteger('col')->default(0)->comment('列');
            $table->date('date')->nullable()->comment('年月日');
            $table->time('time')->nullable()->comment('日時');
            $table->unsignedInteger('cgm_value')->nullable()->comment('CGM');
            $table->unsignedInteger('smbg_value')->nullable()->comment('SMBG');
            $table->dateTime('created_at')->comment('登録日');
            $table->dateTime('updated_at')->nullable()->comment('更新日時');
            $table->dateTime('deleted_at')->nullable()->comment('論理削除日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('glucose_records');
    }
};
