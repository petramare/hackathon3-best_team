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
        Schema::create('owners', function (Blueprint $table) {
            $table->bigIncrements('id');                         // add column 'id' that will be AI PK
            $table->string('first_name')->nullable();                           // create a string column 'first_name'
            $table->string('surname')->nullable();  
            $table->string('email')->nullable();                          // create a string column 'surname'
            $table->string('phone')->nullable();                // create a string column 'phone'
            $table->text('address')->nullable();                       // create a text column 'address'
            $table->nullableTimestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
