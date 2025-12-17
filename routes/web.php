<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BukuController;

/*
|--------------------------------------------------------------------------
| LANDING
|--------------------------------------------------------------------------
*/
Route::get('/', [LandingController::class, 'index'])->name('landing');

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'loginPage'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

/*
|--------------------------------------------------------------------------
| REGISTER
|--------------------------------------------------------------------------
*/
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register')
    ->middleware('guest');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.process');

/*
|--------------------------------------------------------------------------
| DASHBOARD (LOGIN REQUIRED)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/dashboard/pustakawan', function () {
        return view('dashboard.pustakawan.index');
    })->name('dashboard.pustakawan');

    Route::get('/dashboard/user', function () {
        return view('dashboard.user');
    })->name('dashboard.user');

    Route::resource(
        '/dashboard/pustakawan/buku',
        BukuController::class
    )->names('buku');
});

Route::middleware('auth')->group(function () {
    Route::resource('buku', BukuController::class)->except(['show', 'edit', 'create']);
});
