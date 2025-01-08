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
        Schema::create('centers', function (Blueprint $table) {
            $table->id();
            $table->string('center_code')->unique(); 
            $table->string('institute_name');
            $table->string('director');
            $table->string('mobile'); 
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->integer('space_available')->nullable();
            $table->integer('number_of_lab_rooms')->nullable();
            $table->string('state');
            $table->string('city');
            $table->text('address');
            $table->string('address1')->nullable();
            $table->text('message')->nullable(); 
            $table->enum('status', ['pending', 'active', 'inactive'])->default('pending');
            $table->date('date')->nullable(); 
            $table->string('pincode'); 
            $table->string('website')->nullable();
            $table->timestamps(); 
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centers');
    }
};
