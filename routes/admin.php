<?php

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('/categoria')->group(function () {
    Route::get('/', [CategoriaController::class, 'index'])->name('admin.categoria');
    Route::post('/store', [CategoriaController::class, 'store'])->name('admin.categoria.store');
    Route::put('/update/{categoria}', [CategoriaController::class, 'update'])->name('admin.categoria.update');
    Route::get('/edit/{categoria}', [CategoriaController::class, 'editData'])->name('admin.categoria.edit');
    Route::delete('/destroy/{categoria}', [CategoriaController::class, 'destroy'])->name('admin.categoria.destroy');
});
