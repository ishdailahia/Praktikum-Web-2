<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WelcomeController;
use App\Models\JenisKendaraan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', [WelcomeController::class, 'index'])->middleware(['auth', 'verified'])->name('welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
    Route::get('/create', [WelcomeController::class, 'create'])->name('peminjaman.create');
    Route::post('/', [WelcomeController::class, 'store'])->name('peminjaman.store');

});

    Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    // admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    
    
    Route::resource('admin/kendaraan', KendaraanController::class);
    Route::get('admin/kendaraan', [KendaraanController::class, 'kendaraan'])->name('admin.kendaraan.index');
    Route::get('admin/kendaraan/create', [KendaraanController::class, 'create'])->name('admin.kendaraan.create');
    Route::post('admin/kendaraan', [KendaraanController::class, 'store'])->name('admin.kendaraan.store');
    Route::get('admin/kendaraan/{id}', [KendaraanController::class, 'show'])->name('admin.kendaraan.show');
    Route::get('admin/kendaraan/{id}/edit', [KendaraanController::class, 'edit'])->name('admin.kendaraan.edit');
    Route::put('admin/kendaraan/{id}', [KendaraanController::class, 'update'])->name('admin.kendaraan.update');
    Route::delete('admin/kendaraan/{id}', [KendaraanController::class, 'destroy'])->name('admin.kendaraan.destroy');

    
    Route::resource('admin/pembayaran', PembayaranController::class);
    Route::get('admin/pembayaran', [PembayaranController::class, 'pembayaran'])->name('admin.pembayaran.index');
    Route::get('admin/pembayaran/create', [PembayaranController::class, 'create'])->name('admin.pembayaran.create');
    Route::post('admin/pembayaran', [PembayaranController::class, 'store'])->name('admin.pembayaran.store');
    Route::get('admin/pembayaran/{id}', [PembayaranController::class, 'show'])->name('admin.pembayaran.show');
    Route::get('admin/pembayaran/{id}/edit', [PembayaranController::class, 'edit'])->name('admin.pembayaran.edit');
    Route::put('admin/pembayaran/{id}', [PembayaranController::class, 'update'])->name('admin.pembayaran.update');
    Route::delete('admin/pembayaran/{id}', [PembayaranController::class, 'destroy'])->name('admin.pembayaran.destroy');


    Route::resource('admin/peminjaman', PeminjamanController::class);
    Route::get('admin/peminjaman', [PeminjamanController::class, 'peminjaman'])->name('admin.peminjaman.index');
    Route::get('admin/peminjaman/create', [PeminjamanController::class, 'create'])->name('admin.peminjaman.create');
    Route::post('admin/peminjaman', [PeminjamanController::class, 'store'])->name('admin.peminjaman.store');
    Route::get('admin/peminjaman/{id}', [PeminjamanController::class, 'show'])->name('admin.peminjaman.show');
    Route::get('admin/peminjaman/{id}/edit', [PeminjamanController::class, 'edit'])->name('admin.peminjaman.edit');
    Route::put('admin/peminjaman/{id}', [PeminjamanController::class, 'update'])->name('admin.peminjaman.update');
    Route::delete('admin/peminjaman/{id}', [PeminjamanController::class, 'destroy'])->name('admin.peminjaman.destroy');
   
    Route::resource('admin/armada', ArmadaController::class);
    Route::get('admin/armada', [ArmadaController::class, 'armada'])->name('admin.armada.index');
    Route::get('admin/armada/create', [ArmadaController::class, 'create'])->name('admin.armada.create');
    Route::post('admin/armada', [ArmadaController::class, 'store'])->name('admin.armada.store');
    Route::get('admin/armada/{id}', [ArmadaController::class, 'show'])->name('admin.armada.show');
    Route::get('admin/armada/{id}/edit', [ArmadaController::class, 'edit'])->name('admin.armada.edit');
    Route::put('admin/armada/{id}', [ArmadaController::class, 'update'])->name('admin.armada.update');
    Route::delete('admin/armada/{id}', [ArmadaController::class, 'destroy'])->name('admin.armada.destroy');
});

require __DIR__.'/auth.php';