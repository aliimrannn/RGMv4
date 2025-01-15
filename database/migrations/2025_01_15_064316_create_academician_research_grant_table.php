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
        Schema::create('academician_research_grant', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Academician_ID'); // FK for academicians
            $table->unsignedBigInteger('Grant_ID');       // FK for research grants
            $table->timestamps();

            $table->foreignId('Academician_ID')->constrained()->onDelete('cascade');
            $table->foreignId('Grant_ID')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academician_research_grant');
    }
};
