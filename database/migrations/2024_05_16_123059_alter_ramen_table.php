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
            $table->string('url');
            $table->string('date_open')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ramens', function (Blueprint $table) {
            $table->dropColumn('url');
            $table->string('date_open')->nullable(false)->change();
        });
    }
};
