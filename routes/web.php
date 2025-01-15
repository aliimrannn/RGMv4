<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademicianController;
use App\Http\Controllers\ResearchGrantController;
use App\Http\Controllers\MilestoneController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('academicians', AcademicianController::class);

Route::resource('research-grants', ResearchGrantController::class);

Route::resource('milestones', MilestoneController::class);
