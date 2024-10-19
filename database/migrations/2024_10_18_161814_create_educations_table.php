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
        Schema::create('educations', function (Blueprint $table) {
            $table->id(); // Education jadvalida ID ustuni
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // student_id (foreign key referencing students table)
            $table->string('name'); // name (string)
            $table->text('description'); // description (text)
            $table->timestamp('start_date')->nullable(); // start_date (timestamp)
            $table->timestamp('end_date')->nullable(); // end_date (timestamp)
            $table->timestamps(); // created_at va updated_at maydonlari
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};
