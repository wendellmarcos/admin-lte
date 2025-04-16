<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
        return view('home');
    });
});

Route::get('/users',[UserController::class, 'index']);
