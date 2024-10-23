<?php

use App\Http\Controllers\API\EducationController;
use App\Http\Controllers\API\ExperienceController;
use App\Http\Controllers\API\LanguageController;
use App\Http\Controllers\API\LanguageStudentController;
use App\Http\Controllers\API\ProjectsController;
use App\Http\Controllers\API\SkillController;
use App\Http\Controllers\API\SkillStudentController;
use App\Http\Controllers\API\SocialNetworkController;
use App\Http\Controllers\API\SocialNetworkStudentController;
use App\Http\Controllers\API\StudentController;
use Illuminate\Support\Facades\Route;



Route::resource('students', StudentController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('students', StudentController::class);

    Route::resource('experiences', ExperienceController::class);

    Route::resource('educations', EducationController::class);

    Route::resource('projects', ProjectsController::class);

    Route::apiResource('languages', LanguageController::class);

    Route::apiResource('socialNetworks', SocialNetworkController::class);

    Route::apiResource('skills', SkillController::class);


    Route::post('SocialNetworkStudents/{ID}/socialNetwork/attach', [SocialNetworkStudentController::class, 'attachSocialNetwork']);
    Route::delete('SocialNetworkStudents/{studentID}/social_network_id/{ID}', [SocialNetworkStudentController::class, 'detachSocialNetwork']);


    Route::post('SkillStudent', [SkillStudentController::class, 'attachSkillStudent']);
    /*
     * TODO: Delete SkillStudent
     */
    Route::delete('SkillStudent/studentID/{studentID}/skillID/{skillID}', [SkillStudentController::class, 'detachSkillStudent']);


    Route::post('languageStudents', [LanguageStudentController::class, 'attachLanguageStudent']);

    /*
     * TODO: Delete LanguageStudent
     */
    Route::delete('languageStudents/{studentId}/{languageId}', [LanguageStudentController::class, 'detachLanguageStudent']);

});



