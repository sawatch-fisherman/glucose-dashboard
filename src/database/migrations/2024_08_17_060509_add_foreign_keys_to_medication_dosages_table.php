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
        Schema::table('medication_dosages', function (Blueprint $table) {
            $table->foreign(['glucose_records_id'], 'FK_medication_dosages_glucose_records')->references(['id'])->on('glucose_records')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['medication_id'], 'FK_medication_dosages_medication_settings')->references(['id'])->on('medication_settings')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medication_dosages', function (Blueprint $table) {
            $table->dropForeign('FK_medication_dosages_glucose_records');
            $table->dropForeign('FK_medication_dosages_medication_settings');
        });
    }
};
