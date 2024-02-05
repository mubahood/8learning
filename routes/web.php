<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;




Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/register', [AccountController::class, 'register'])->name('register');

Route::get('/auth/login', [AccountController::class, 'login'])->name('login');
Route::get('login', function () {
    return redirect('/auth/login');
});

Route::post('/register', [AccountController::class, 'register_post'])
    /* ->middleware(RedirectIfAuthenticated::class) */;

Route::post('/login', [AccountController::class, 'login_post'])
    /* ->middleware(RedirectIfAuthenticated::class) */;

/* Route::get('/dashboard', [AccountController::class, 'dashboard'])
    ->middleware(Authenticate::class); */


Route::get('/account-details', [AccountController::class, 'account_details'])
    ->middleware(Authenticate::class);

Route::post('/account-details', [AccountController::class, 'account_details_post'])
    ->middleware(Authenticate::class);

Route::get('/logout', [AccountController::class, 'logout']);
