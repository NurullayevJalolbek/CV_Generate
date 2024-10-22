<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function destroy(int $studentId, int $skillId): \Illuminate\Http\JsonResponse
    {
        $deleted = DB::table('skill_students')
            ->where('student_id', $studentId)
            ->where('skill_id', $skillId)
            ->delete();

        return response()->json([$deleted], 404);
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill_students');
    }
};
