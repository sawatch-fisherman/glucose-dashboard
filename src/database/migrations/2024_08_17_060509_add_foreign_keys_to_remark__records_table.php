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
        Schema::table('remark__records', function (Blueprint $table) {
            $table->foreign(['user_id'], 'remark__records_ibfk_1')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('remark__records', function (Blueprint $table) {
            $table->dropForeign('remark__records_ibfk_1');
        });
    }
};
