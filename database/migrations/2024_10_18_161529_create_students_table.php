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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // ID (bigint primary key)
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('nt_id');
            $table->string('photo'); // photo (string)
            $table->string('profession'); // profession (string)
            $table->string('phone', 50); // phone (varchar(50))
            $table->text('biography'); // biography (text)
            $table->timestamps(); // created_at va updated_at maydonlari
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
