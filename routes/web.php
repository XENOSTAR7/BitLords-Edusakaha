<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignInController;

Route::get('/', function () {return view('welcome');});

Route::get('/index',[SignInController::class,'display_index']);

Route::get('/signup',[SignInController::class,'display_sign_up']);

Route::get('/signin',[SignInController::class,'display_sign_in']);

