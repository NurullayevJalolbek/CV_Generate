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
        Schema::create('skill_students', function (Blueprint $table) {
            $table->id(); // ID (bigint primary key)
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // foreign key to students table
            $table->foreignId('skill_id')->constrained('skills')->onDelete('cascade'); // foreign key to skills table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill_students');
    }
};
