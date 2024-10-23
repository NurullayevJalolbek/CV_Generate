<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LanguageStudentController extends Controller
{
    public function attachLanguageStudent(Request $request): JsonResponse
    {
        $studentId = $request->input('student_id');
        $languageId = $request->input('language_id');

        $student = Student::find($studentId);
        $language = Language::find($languageId);

        $student->languages()->attach($languageId);

        return response()->json([
            'message' => 'Language attached successfully',
            'status' => 'success',
            'student_id' => $studentId,
            'language_id' => $languageId
        ]);
    }


    public  function  detachLanguageStudent()
    {
        //
    }
}
