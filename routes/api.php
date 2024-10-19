<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::resource('students', \App\Http\Controllers\API\StudentController::class);
Route::resource('experiences', \App\Http\Controllers\API\ExperienceController::class);
Route::resource('educations', \App\Http\Controllers\API\EducationController::class);
Route::resource('projects', \App\Http\Controllers\API\ProjectsController::class);

