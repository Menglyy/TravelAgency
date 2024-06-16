<?php

use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/', [DetailController::class, 'home'])->name('home');
//use for all route
Route::resource('details', DetailController::class);
// Details resource routes
// Route::get('/details', [DetailController::class, 'index'])->name('details.index');
// Route::get('/details/create', [DetailController::class, 'create'])->name('details.create');
// Route::post('/details', [DetailController::class, 'store'])->name('details.store');
// Route::get('/details/{detail}', [DetailController::class, 'show'])->name('details.show');
// Route::get('/details/{detail}/edit', [DetailController::class, 'edit'])->name('details.edit');
// Route::put('/details/{detail}', [DetailController::class, 'update'])->name('details.update');
// Route::patch('/details/{detail}', [DetailController::class, 'update'])->name('details.update');
// Route::delete('/details/{detail}', [DetailController::class, 'destroy'])->name('details.destroy');
