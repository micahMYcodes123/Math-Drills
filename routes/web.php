<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;


Route::get('/', [DashboardController::class , 'index']);

Route::get('/register', [AuthController::class , 'register']) ->name('register');
Route::post('/register', [AuthController::class , 'store']);




Route::get('/random', function(){

    return view('web.random');
});

Route::get('/add', function(){

    return view('web.add');
});

Route::get('/divi', function(){

    return view('web.divi');
});

Route::get('/sub', function(){

    return view('web.sub');
});

Route::get('/multi', function(){

    return view('web.multi');
});