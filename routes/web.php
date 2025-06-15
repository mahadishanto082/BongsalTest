<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('{any?}', function () {
    return view('app');
  
})->where('any', '.*')->name('app');

Route::post(('register'), [
    App\Http\Controllers\Auth\RegisteredUserController::class, 'store'
])->name('register');

Route::get('login', [
    App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'
])->name('Login');

Route::post('login', [
    App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store'
])->name('Login.store');

Route::get ('Dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Route::post('api/register', [
//     App\Http\Controllers\Auth\RegisteredUserController::class, 'store'
// ])->name('register');

// Route::get('dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';
