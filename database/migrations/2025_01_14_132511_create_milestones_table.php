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
        Schema::create('milestones', function (Blueprint $table) {
            $table->id('Milestone_ID'); // Primary Key
            $table->string('Name');
            $table->date('TargetCompletionDate');
            $table->string('Status');
            $table->text('Remarks')->nullable();
            $table->string('Deliverable');
            $table->timestamp('DateUpdated');
            $table->unsignedBigInteger('Grant_ID'); // Foreign Key
            $table->timestamps();
    
            // Foreign Key Constraint
            $table->foreign('Grant_ID')->references('Grant_ID')->on('research_grants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('milestones');
    }
};
