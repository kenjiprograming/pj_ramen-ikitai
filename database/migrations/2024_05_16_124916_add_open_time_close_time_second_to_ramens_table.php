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
        Schema::table('ramens', function (Blueprint $table) {
            $table->string('time_open_2')->nullable();
            $table->string('time_close_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ramens', function (Blueprint $table) {
            $table->dropColumn('time_open_2');
            $table->dropColumn('time_close_2');
        });
    }
};
