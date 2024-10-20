<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
//use App\Http\Requests\StoreProjectsRequest;
//use App\Http\Requests\UpdateProjectsRequest;
use App\Models\Project;
use Illuminate\Http\Request;
class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Project::all());
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
            'student_id' => 'required|exists:students,id', // Talaba ID mavjud bo'lishi kerak
            'name' => 'required|string|max:255', // Nomi talab qilinadi va maksimal uzunligi 255
            'description' => 'nullable|string', // Tavsif ixtiyoriy, agar bo'lsa matn bo'lishi kerak
            'source_link' => 'nullable|url', // Manba havolasi ixtiyoriy, agar bo'lsa URL bo'lishi kerak
            'demo_link' => 'nullable|url', // Demo havolasi ixtiyoriy, agar bo'lsa URL bo'lishi kerak
        ]);

        $project = new Project();
        $project->student_id = $request->student_id;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->source_link = $request->source_link;
        $project->demo_link = $request->demo_link;

        $project->save();


        return response()->json([$project], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(Project $project): \Illuminate\Http\JsonResponse
    {
        return response()->json($project);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'student_id' => 'required|exists:students,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'source_link' => 'nullable|url',
            'demo_link' => 'nullable|url',
        ]);

        $project->student_id = $request->student_id;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->source_link = $request->source_link;
        $project->demo_link = $request->demo_link;

        $project->save();

        return response()->json($project);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project): \Illuminate\Http\JsonResponse
    {
        $project->delete();

        return response()->json(null, 204);
    }


}
