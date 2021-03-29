<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PostController::class, 'home'])->name('home');
Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('show');

Route::get('/dashboard', [App\Http\Controllers\PostController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/create', [App\Http\Controllers\PostController::class, 'create'])->middleware(['auth'])->name('create');
Route::post('/dashboard/create', [App\Http\Controllers\PostController::class, 'store'])->middleware(['auth'])->name('store');

Route::get('/dashboard/edit/{post}', [App\Http\Controllers\PostController::class, 'edit'])->middleware(['auth'])->name('edit');
Route::put('/dashboard/edit/{post}', [App\Http\Controllers\PostController::class, 'update'])->middleware(['auth'])->name('update');

Route::delete('/dashboard/delete/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->middleware(['auth'])->name('delete');


require __DIR__.'/auth.php';
