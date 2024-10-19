<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
//use App\Http\Requests\StoreExperienceRequest;
//use App\Http\Requests\UpdateExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json([Experience::all()]);
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
            'student_id' => 'required|exists:students,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_data' => 'nullable|date',
            'end_data' => 'nullable|date|after_or_equal:start_data',
        ]);

        $experience = new Experience();
        $experience->student_id = $request->student_id;
        $experience->name = $request->name;
        $experience->description = $request->description;
        $experience->start_data = $request->start_data;
        $experience->end_data = $request->end_data;

        $experience->save();

        return response()->json($experience, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience): \Illuminate\Http\JsonResponse
    {
        return response()->json($experience);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExperienceRequest $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
