<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/logs', function () {
    return view('logs');
})->middleware(['auth'])->name('logs');

Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('barangs', BarangController::class);
    Route::post('barangs/{barang}/entry', [BarangController::class, 'entry'])->name('barangs.entry');
    Route::post('barangs/{barang}/exit', [BarangController::class, 'exit'])->name('barangs.exit');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/barangs/search', [BarangController::class, 'searchAndExit'])->name('barangs.search');
});

require __DIR__.'/auth.php';
