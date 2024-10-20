<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
//use App\Http\Requests\StoreStudentRequest;
//use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'nt_id' => 'required|integer',
            'photo' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'biography' => 'nullable|string',
        ]);

        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->nt_id = $request->nt_id;
        $student->photo = $request->photo;
        $student->profession = $request->profession;
        $student->phone = $request->phone;
        $student->biography = $request->biography;

        $student->save();
        return response()->json($student, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student): \Illuminate\Http\JsonResponse
    {
        return response()->json($student, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'nt_id' => 'required|integer',
            'photo' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'biography' => 'nullable|string',
        ]);

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->nt_id = $request->nt_id;
        $student->photo = $request->photo;
        $student->profession = $request->profession;
        $student->phone = $request->phone;
        $student->biography = $request->biography;

        $student->save();

        return response()->json($student, 201);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student): \Illuminate\Http\JsonResponse
    {
        $student->delete();

        return response()->json(null, 204);
    }

}
