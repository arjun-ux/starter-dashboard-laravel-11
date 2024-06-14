<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/unauthorized', function(){
    return view('unauthorized');
})->name('unauthorized');
// login
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin'])->name('doLogin');
// registrasi user
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'doRegister'])->name('doRegister');

Route::middleware('role:admin,user')->group(function(){
    // dashboard
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    // user
    Route::get('/user', [UserController::class, 'index'])->name('users');
});
