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
        Schema::create('Contacts', function (Blueprint $table) {
            $table->id('id'); // Primary Key
            $table->string('Straat');
            $table->string('Huisnummer');
            $table->string('Postcode');
            $table->string('Stad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Contacts');
    }
};
