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
        Schema::table('column_name_settings', function (Blueprint $table) {
            $table->foreign(['user_id'], 'FK_column_name_settings_users')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('column_name_settings', function (Blueprint $table) {
            $table->dropForeign('FK_column_name_settings_users');
        });
    }
};
