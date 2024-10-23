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
//        return response()->json([
//            'studentID' => $studentID,
//            'request'=>$request->get('social_network_id')
//        ]);
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


    public function detachSocialNetwork(Request $request, Student $studentID, $social_network_id): JsonResponse
    {
        $social = SocialNetwork::query()->find($social_network_id);

        $studentID->socialNetworks()->detach($social->id);

        return response()->json([
            'message' => 'Success',
            'status' => 'detached',
            'social' => $social,
            'studentID' => $studentID->id

        ]);

    }


}
