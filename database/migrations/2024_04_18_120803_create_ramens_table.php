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
        Schema::create('ramens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('address');
            $table->string('type');
            $table->string('taste');
            $table->string('time_open');
            $table->string('time_close');
            $table->string('date_open');
            $table->string('day_close');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ramens');
    }
};
