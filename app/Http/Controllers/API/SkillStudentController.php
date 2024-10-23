<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SkillStudentController extends Controller
{
    public function attachSkillStudent(Request $request): JsonResponse
    {
        $studentId = $request->input('student_id');
        $skillId = $request->input('skill_id');

        $student = Student::find($studentId);

        $skill = Skill::find($skillId);

        $student->skills()->attach($skillId);

        return response()->json([
            'message' => 'Skill attached successfully',
            'status' => 'success',
            'student_id' => $studentId,
            'skill_id' => $skillId
        ]);
    }


    public function detachSkillStudent(Request $request, $studentID, $skillID): JsonResponse
    {
        $student = Student::find($studentID);
        $skill = Skill::find($skillID);

        $student->skills()->detach($skillID);

        return response()->json([
            'status' => 'success',
            'student_id' => $studentID,
            'skill_id' => $skillID
        ]);
    }

}
