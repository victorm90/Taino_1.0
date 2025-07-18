<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        parent::boot();

        // Añadir esto en el método boot
        Route::bind('categoria', function ($value) {
            return \App\Models\Categoria::where('id', $value)
                ->orWhere('slug', $value)
                ->firstOrFail();
        });
    }
}
