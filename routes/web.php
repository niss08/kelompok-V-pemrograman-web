<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\MyApplicationController;
use App\Http\Controllers\MyJobController;
use Illuminate\Support\Facades\Route;

Route::resource('', HomeController::class)->only('index') ;
Route::resource('PROFILE', ProfileController::class)->only('index') ;

