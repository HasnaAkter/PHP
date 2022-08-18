<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\subController;




Route:: get ('/home',[HomeController::class,'home']);
Route::get('/about',[subController::class,'about']);