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
        Schema::create('social_network_students', function (Blueprint $table) {
            $table->id(); // ID (bigint primary key)
            $table->foreignId('social_network_id')->constrained('social_networks')->onDelete('cascade'); // foreign key to social_networks table
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // foreign key to students table
            $table->string('username'); // username in the social network
            $table->primary(['social_network_id', 'student_id']); // Combination of social_network_id and student_id as primary key
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_network_students');
    }
};
