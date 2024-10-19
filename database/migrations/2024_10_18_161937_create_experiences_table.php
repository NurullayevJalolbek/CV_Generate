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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id(); // ID (bigint primary key)
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // student_id (foreign key referencing students table)
            $table->string('name'); // name (string)
            $table->text('description'); // description (text)
            $table->timestamp('start_data')->nullable(); // start_data (timestamp)
            $table->timestamp('end_data')->nullable(); // end_data (timestamp)
            $table->timestamps(); // created_at va updated_at maydonlari
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('language_experiences');
    }
};
