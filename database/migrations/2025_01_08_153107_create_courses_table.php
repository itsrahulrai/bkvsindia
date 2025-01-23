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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('courses')->onDelete('set null');
            $table->string('name')->nullable(); 
            $table->string('slug')->nullable()->unique(); 
            $table->string('duration')->nullable(); 
            $table->string('mode')->nullable(); 
            $table->string('eligibility')->nullable(); 
            $table->string('fees')->nullable();  
            $table->string('image')->nullable();  
            $table->string('thumbnail')->nullable();  
            $table->longText('content')->nullable();  
            $table->longText('sidecontent')->nullable();  
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('skill_level', ['beginner ', 'intermediate','high '])->default('beginner');
            $table->enum('price', ['free ', 'paid'])->default('paid');
            $table->timestamps();
        });
    }

 


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
