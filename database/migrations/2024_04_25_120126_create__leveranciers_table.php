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
        Schema::create('leveranciers', function (Blueprint $table) {
            $table->id('id'); // Primary Key
            $table->string('name');
            $table->string('contact_person');
            $table->string('supplier_number');
            $table->string('mobile');
            $table->foreignId('contacts_id')->nullable()->constrained();;
            $table->timestamps();

           
            

            // Assuming 'contacts' is the table name and 'Id' is the primary key in 'contacts' table
            //$table->foreign('contact_id')->references('id')->on('contacts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Leveranciers');
    }
};
