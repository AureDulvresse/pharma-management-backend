<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('medicaments', function (Blueprint $table) {
            $table->id('medicament_id');
            $table->string('designation');
            $table->float('unit_price');
            $table->integer('quantity_available')->unsigned()->default(0);
            $table->string('lot_number');
            $table->date('expiration_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicaments');
    }
};
