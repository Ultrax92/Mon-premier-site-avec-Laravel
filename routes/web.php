<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');

// Routes pour les animaux
Route::get('/animal/create', [AnimalController::class, 'create'])->name('animal.create');
Route::get('/animal/{id}', [AnimalController::class, 'show'])->name('animal.show')->whereNumber('id');
Route::get('/animal/{id}/update', [AnimalController::class, 'update'])->name('animal.update');
Route::get('/animal/{id}/delete', [AnimalController::class, 'delete'])->name('animal.delete');
