<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonController;

Route::get('/',[PersonController::class,'show']);
Route::post('/',[PersonController::class,'store']);
Route::get('/dashboard',[PersonController::class,'dashboard']);
Route::get('/reset',[PersonController::class,'password']);
