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
        Schema::create('ProductPerLeverancier', function (Blueprint $table) {
            $table->id('id'); // Primary Key
            $table->foreignId('leveranciers_id')->constrained();;
            $table->foreignId('products_id')->constrained();;
            $table->date('datumlevering');
            $table->integer('aantal');
            $table->date('datumEerstvolgendelevering')->nullable;
            $table->timestamps();

            // Assuming 'leveranciers' is the table name and 'Id' is the primary key in 'leveranciers' table

            // Assuming 'products' is the table name and 'Id' is the primary key in 'products' table
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProductPerLeverancier');
    }
};
