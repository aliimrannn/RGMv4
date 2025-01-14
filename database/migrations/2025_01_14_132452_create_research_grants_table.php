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
        Schema::create('research_grants', function (Blueprint $table) {
            $table->id('Grant_ID'); // Primary Key
            $table->string('ProjectTitle');
            $table->integer('GrantAmount');
            $table->string('GrantProvider');
            $table->date('StartDate');
            $table->integer('DurationMonth');
            $table->date('EndDate');
            $table->unsignedBigInteger('Academician_ID'); // Foreign Key
            $table->timestamps();
    
            // Foreign Key Constraint
            $table->foreign('Academician_ID')->references('Academician_ID')->on('academicians')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research_grants');
    }
};
