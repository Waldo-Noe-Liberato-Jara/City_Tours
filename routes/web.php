<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LugaresController;

Route::view('/', 'index')
    ->middleware('guest')
    ->name('index');

Route::view('home', 'home')
    ->middleware('auth')
    ->name('home.index');

/*  RUTAS DE INICIO DE SESIÓN*/
require __DIR__.'/auth.php';

/* RUTAS DE LA PÁGINA */
Route::get('home/lugares', [LugaresController::class, 'index'])
    ->middleware('auth')
    ->name('lugares.index');

Route::any('home/search', [LugaresController::class, 'search'])
    ->middleware('auth')
    ->name('lugares.search');

Route::get('home/search/{letra}', [LugaresController::class, 'search_letter'])
    ->middleware('auth')
    ->name('lugares.search_letter');

Route::get('home/lugares/create', [LugaresController::class, 'create'])
    ->middleware('auth.admin')
    ->name('lugares.create');

Route::post('home/lugares/lugar', [LugaresController::class, 'store'])
    ->middleware('auth.admin')
    ->name('lugares.store');

Route::get('home/lugares/{lugar:id}', [LugaresController::class, 'show'])
    ->middleware('auth')
    ->name('lugares.show');

Route::view('home/acerca', 'tourist_places/acerca')
    ->middleware('auth')
    ->name('home.acerca');