<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('{any?}', function () {
    return Inertia::render('app');
})->where('any', '.*')->name('app');
// Route::post('api/login', [App\Http\Controllers\API\V1\AuthController::class, 'login']);

// Route::get('dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';
