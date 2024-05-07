<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;


Route::get('/', [DashboardController::class , 'index'])->name('dashboard');

Route::get('/register', [AuthController::class , 'register']) ->name('register');
Route::post('/register', [AuthController::class , 'store']) ->name('register.create');

Route::get('/login', [AuthController::class , 'login']) ->name('login');
Route::post('/login', [AuthController::class , 'authoticate']) ->name('login.create');



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