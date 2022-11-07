<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\AdminnistradorController;
use App\Http\Controllers\LugaresController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoutController;

#region: Otra forma
/* Login 
Route::view('login', 'auth/login')
->middleware('guest')
->name('login.index');

Route::post('/registro', [RegistroController::class, 'store'])
->middleware('guest')
->name('registro.store');*/

/* Registro 
Route::view('/registro', 'auth/registro')
->middleware('guest')
->name('registro.index');

Route::post('/login', [SesionController::class, 'store'])
->middleware('guest')
->name('login.store');

Route::get('/logout', [SesionController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');*/
#endregion

////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////INICIO DE SESIÓN//////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* Sin iniciar sesión */
Route::middleware('guest')->group(function () {
    
    Route::view('/', 'index')
        ->name('index');

    Route::view('/login', 'auth/login')
        ->name('login.index');
    
    Route::post('/registro', [RegistroController::class, 'store'])
        ->name('registro.store');

    Route::view('/registro', 'auth/registro')
        ->name('registro.index');

    Route::post('/login', [SesionController::class, 'store'])
        ->name('login.store');
});

/* Sesión iniciada */
Route::middleware('auth')->group(function () {
    
    Route::get('/logout', [LogoutController::class, 'destroy'])
        ->name('login.destroy');

    Route::view('home/profile', 'profile')
        ->name('auth.profile');

    Route::view('home/edit/{user:id}', 'auth/edit')
        ->name('auth.edit');

    Route::put('/updatename/profile/{user:id}', [UserController::class, 'UpdateName'])
        ->name('auth.updatename');

    Route::put('/updateimage/profile/{user:id}', [UserController::class, 'UpdateImage'])
        ->name('auth.updateimage');

    Route::put('/updateemail/profile/{user:id}', [UserController::class, 'UpdateEmail'])
        ->name('auth.updateemail');

    Route::put('/updatepassword/profile/{user:id}', [UserController::class, 'UpdatePassword'])
        ->name('auth.updatepassword');

    //Route::put('updatebackground/profile/{id}', [UserController::class, 'UpdateBackground'])->name('auth.updatebackground');
    Route::any('updatebackground/profile/{id}', [UserController::class, 'UpdateBackground'])
        ->name('auth.updatebackground');;
});

/* Sesión de admin */
Route::middleware('auth.admin')->group(function () {
    Route::get('/admin', [AdminnistradorController::class, 'index'])
        ->name('admin.index');

    Route::get('admin/{lugar:id}/edit', [LugaresController::class,'edit'])
        ->name('lugares.edit');

    Route::put('admin/{lugar:id}', [LugaresController::class, 'update'])
        ->name('lugares.update');

    Route::delete('admin/{lugar:id}', [LugaresController::class, 'destroy'])
        ->name('lugares.destroy');
});   