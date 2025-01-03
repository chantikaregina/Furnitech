<?php

use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [UserLoginController::class, 'login'])->name('login');


Route::get('/', [HomeController::class, 'home'])->name('home');
