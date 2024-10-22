<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkillStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json([DB::table('skill_students')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $studentId, int $skillId): \Illuminate\Http\JsonResponse
    {
        $deleted = DB::table('skill_students')
            ->where('student_id', $studentId)
            ->where('skill_id', $skillId)
            ->delete();
        return response()->json([$deleted], 204); // 404 Not Found
    }


}
