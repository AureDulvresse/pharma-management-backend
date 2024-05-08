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
        Schema::create('horaire_personnels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger($column = 'user_id');
            $table->foreign($column = 'user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date($column = 'day_of_week');
            $table->time($column = 'begin_hour');
            $table->time($column = 'end_hour');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horaire_personnels');
    }
};
