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
        Schema::create('Magzijn', function (Blueprint $table) {
            $table->id('id'); // Primary Key
            $table->foreignId('products_id')->nullable()->constrained();;
            $table->string('verpakkingsEenheid');
            $table->integer('aantalAanwezig')->nullable();
            $table->timestamps();
    
           
        });
    }
};
