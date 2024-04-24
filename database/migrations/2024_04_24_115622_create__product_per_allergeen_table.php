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
        Schema::create('ProductPerAllergeen', function (Blueprint $table) {
            $table->id('Id'); // Primary Key
            $table->unsignedBigInteger('ProductId'); // Foreign Key
            $table->unsignedBigInteger('AllergeenId'); // Foreign Key
            $table->timestamps();

            // Assuming 'products' is the table name and 'Id' is the primary key in 'products' table
            $table->foreign('ProductId')->references('Id')->on('products');

            // Assuming 'allergenen' is the table name and 'Id' is the primary key in 'allergenen' table
            $table->foreign('AllergeenId')->references('Id')->on('allergenen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProductPerAllergeen');
    }

};
