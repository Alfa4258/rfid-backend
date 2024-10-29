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
        Schema::create('bib', function (Blueprint $table) {
            $table->id(); 
            $table->string('bib_number'); 
            $table->string('first_name'); 
            $table->string('last_name'); 
            $table->enum('gender', ['male', 'female', 'other']); 
            $table->date('date_of_birth'); 
            $table->text('address')->nullable(); 
            $table->string('city'); 
            $table->string('province'); 
            $table->string('country'); 
            $table->string('email')->unique(); 
            $table->string('cellphone'); 
            $table->string('category'); 
            $table->time('start_time')->nullable();
            $table->time('finish_time')->nullable();
            $table->string('average_pace')->nullable();
            $table->json('splits')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bib');
    }
};
