<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class SocialNetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json([SocialNetwork::all()]);
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
        return SocialNetwork::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): \Illuminate\Http\JsonResponse
    {
        $socialNetwork = SocialNetwork::find($id);

        $socialNetwork->update([
            'name' => $request->input('name'),
            'url' => $request->input('url'),
        ]);

        return response()->json([$socialNetwork], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\JsonResponse
    {
        $socialNetwork = SocialNetwork::find($id);

        $socialNetwork->delete();
        return response()->json(null, 204);
    }

}
