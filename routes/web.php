<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\TagController;

Route::get('/', function () {
    return auth()->check() ? redirect('/dashboard') : redirect('/login');
});

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function() {
    Route::resource('categories', CategoryController::class);
    Route::resource('links', LinkController::class);
    Route::resource('tags', TagController::class);
});
