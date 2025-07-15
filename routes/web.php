<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotiBlogController;

Route::get('/', [HomeController::class, 'index'])->name('inicio');

Route::get('/blog', [NotiBlogController::class, 'index'])->name('blog');