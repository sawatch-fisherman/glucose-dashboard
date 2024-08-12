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
        Schema::create('medication_dosages', function (Blueprint $table) {
            $table->comment('投薬量');
            $table->bigIncrements('id')->comment('ID');
            $table->unsignedBigInteger('glucose_records_id')->default(0)->comment('血糖値記録ID');
            $table->unsignedBigInteger('medication_id')->default(0)->comment('薬ID');
            $table->float('dosage_amount')->unsigned()->default(0)->comment('投薬量');
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
        Schema::dropIfExists('medication_dosages');
    }
};
