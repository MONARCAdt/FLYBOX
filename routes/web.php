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

Route::get('registro_paquetes', function () {
    return view('/registro_paquetes');
})->name('registro_paquetes');

Route::get('servicio', function () {
    return view('/servicio');
})->name('servicio');

Route::get('crear-paquete', function () {
    return view('/crear-paquete');
})->name('crear-paquete');

Route::get('profile', function () {
    return view('/profile');
})->name('profile');

Route::get('npedidos', function () {
    return view('/npedidos');
})->name('npedidos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
    Route::get('/package-logs', [PackageLogController::class, 'package-logs'])->name('package-logs');
    Route::resource('Packagelogs', PackageLogController::class);
});

require __DIR__.'/auth.php';