<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageLogController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PdfController;


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
    
    Route::get('paqueteria', function () {
        return view('/paqueteria');
    })->name('paqueteria');
    
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
    
    Route::get('perfil', function () {
        return view('perfil');
    })->name('perfil');
    
    Route::get('npedidos', function () {
        return view('/npedidos');
    })->name('npedidos');

    Route::get('tarifaenvio', function () {
        return view('/tarifaenvio');
    })->name('tarifaenvio');

    Route::get('inicio', function () {
        return view('/inicio');
    })->name('inicio');

    Route::get('descargar-pdf', function () {
        return view('/descargar-pdf');
    })->name('descargar-pdf');

    Route::get('/paquete/{numero_guia}', 'PaqueteController@mostrar');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::post('/package-logs', [PackageLogController::class, 'store'])->name('package-log.store');
    Route::get('/buscar-paquete', [PackageLogController::class, 'buscarPaquete'])->name('buscar-paquete');
    Route::post('/profile/update', [PackageLogController::class, 'updateProfile'])->name('profile.update');
    Route::get('/perfil/editar', [PerfilController::class, 'edit'])->name('perfil.edit');
    Route::put('/perfil', [PerfilController::class, 'update'])->name('perfil.update');
    Route::get('download-pdf', [PackageLogController::class, 'generar_pdf'])->name('pdf_envio');
});

require __DIR__.'/auth.php';