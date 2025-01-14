<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademicianController;
use App\Http\Controllers\ResearchGrantController;
use App\Http\Controllers\MilestoneController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('academicians', AcademicianController::class);
Route::resource('research-grants', ResearchGrantController::class);
Route::resource('milestones', MilestoneController::class);