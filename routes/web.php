<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageLogController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('/dashboard');
})->name('dashboard');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('registro_paquetes', function () {
        return view('/registro_paquetes');
    })->name('registro_paquetes');
    
    Route::get('servicio', function () {
        return view('/servicio');
    })->name('servicio');
    
    Route::get('paqueteria', function () {
        return view('/paqueteria');
    })->name('paqueteria');
    
    Route::get('rastreador', function () {
        return view('/rastreador');
    })->name('rastreador');
    
    Route::get('vision_mision', function () {
        return view('/vision_mision');
    })->name('vision_mision');
    
    Route::get('profile', function () {
        return view('edit');
    })->name('profile');
    
    Route::get('npedidos', function () {
        return view('/npedidos');
    })->name('npedidos');

    Route::post('/package-log', [PackageLogController::class, 'store'])->name('package-log.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::post('/package-log', [PackageLogController::class, 'store'])->name('package-log.store');
});

require __DIR__.'/auth.php';