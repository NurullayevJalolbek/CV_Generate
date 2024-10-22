<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SocialNetworkStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): \Illuminate\Http\JsonResponse
    {

        return response()->json([
            DB::table('social_network_students')->get()
        ], 201);


    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $socialNetworkStudent = DB::table('social_network_students')->insert([
            'student_id' => $request->input('student_id'),
            'social_network_id' => $request->input('social_network_id'),
            'username' => $request->input('username'),
        ]);
        return response()->json([$socialNetworkStudent], 201);
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
    public function destroy(string $socialNetworkId, string $studentId): \Illuminate\Http\JsonResponse
    {
        $deleted = DB::table('social_network_students')
            ->where('social_network_id', $socialNetworkId)
            ->where('student_id', $studentId)
            ->delete();


        return response()->json([$deleted], 204); // 404 Not Found
    }


}
