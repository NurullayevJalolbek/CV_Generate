<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            DB::table('languages')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $language = new Language();
        $language->name = $request->input('name');
        $language->level = $request->input('level');
        $language->save();

        return response()->json([$language], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            DB::table('languages')->where('id', $id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $language = Language::findOrFail($id);
        $language->update([
            'name' => $request->input('name'),
            'level' => $request->input('level')
        ]);

        return response()->json([$language], 201);
    }








    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            DB::table('languages')->where('id', $id)->delete()
        ], 204);

    }
}
