<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SocialNetwork;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SocialNetworkStudentController extends Controller
{
    public function attachSocialNetwork(Request $request, $studentID): JsonResponse
    {
        $student = Student::findOrFail($studentID);

        $social = SocialNetwork::query()->findOrFail($request->get('social_network_id'));

        $username = $request->get('username');

        $student->socialNetworks()->attach($social->id, ['username' => $username]);

        return response()->json([
            'message' => 'Success',
            'status' => 'active',
            'social' => $social,
            'username' => $username
        ]);
    }



    public function detachSocialNetwork(Request $request, Student $student): JsonResponse
    {
        $social = SocialNetwork::query()->find($request->get('social_network_id'));


        $username = $request->get('username');

        $student->socialNetworks()->wherePivot('username', $username)->detach($social->id);

        return response()->json([
            'message' => 'Success',
            'status' => 'detached',
            'social' => $social,
            'username' => $username
        ]);
    }


}
