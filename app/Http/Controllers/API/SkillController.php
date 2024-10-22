<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            DB::table('skills')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $skill = new Skill();
        $skill->name = $request->input('name');
        $skill->save();

        return response()->json([$skill], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\Support\Collection
    {
        return DB::table('skills')->where('id', $id)->get();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): \Illuminate\Http\JsonResponse
    {
        $skill = Skill::find($id);

        $skill->update([
            'name' => $request->input('name'),
        ]);

        return response()->json([$skill], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\JsonResponse
    {
        DB::table('skills')->where('id',$id)->delete();

        return response()->json(null, 204);
    }
}
