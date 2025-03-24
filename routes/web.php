<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//routes of all the pages........................................................................

//welcome
Route::get('/', function () {
    return view('welcome');
});

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//first
Route::get('/first', function () {
    return view('first');
})->middleware(['auth', 'verified'])->name('first');

//second
Route::get('/second', function () {
    return view('second');
})->middleware(['auth', 'verified'])->name('second');

//Third
Route::get('/third', function () {
    return view('third');
})->middleware(['auth', 'verified'])->name('third');

//Fourth
Route::get('/fourth', function () {
    return view('fourth');
})->middleware(['auth', 'verified'])->name('fourth');

//middleware profile............................................................................

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';