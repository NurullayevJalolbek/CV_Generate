<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::resource('students', \App\Http\Controllers\API\StudentController::class);

Route::resource('experiences', \App\Http\Controllers\API\ExperienceController::class);

Route::resource('educations', \App\Http\Controllers\API\EducationController::class);

Route::resource('projects', \App\Http\Controllers\API\ProjectsController::class);

Route::apiResource('languages', \App\Http\Controllers\API\LanguageController::class);

Route::apiResource('socialNetworks', \App\Http\Controllers\API\SocialNetworkController::class);

Route::apiResource('skills', \App\Http\Controllers\API\SkillController::class);

Route::delete('SocialNetworkStudents/{socialNetworkId}/{studentId}', [\App\Http\Controllers\API\SocialNetworkStudentController::class, 'destroy']);
Route::get('SocialNetworkStudents', [\App\Http\Controllers\API\SocialNetworkStudentController::class, 'index']);

Route::delete('SkillStudent/{StudentId}/{SkillId}', [\App\Http\Controllers\API\SkillStudentController::class, 'destroy']);
Route::get('SkillStudent', [\App\Http\Controllers\API\SkillStudentController::class, 'index']);


Route::delete('languageStudents/{studentId}/{languageId}', [\App\Http\Controllers\API\LanguageStudentController::class, 'destroy']);
Route::get('languageStudents', [\App\Http\Controllers\API\LanguageStudentController::class, 'index']);






