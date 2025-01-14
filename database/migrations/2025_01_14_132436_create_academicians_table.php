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
        Schema::create('academicians', function (Blueprint $table) {
            $table->id('Academician_ID'); // Primary Key
            $table->string('Name');
            $table->string('StaffID')->unique();
            $table->string('Position');
            $table->string('Email')->unique();
            $table->string('College');
            $table->string('Department');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academicians');
    }
};
