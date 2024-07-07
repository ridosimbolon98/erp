<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengecekanController;
use App\Http\Controllers\PengambilanController;
use App\Http\Controllers\TandaTerimaController;
use App\Http\Controllers\StatusPerbaikanController;

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

Route::get('/', [DashboardController::class, 'show'])->middleware(['auth']);
Route::controller(AuthController::class)->group(function(){
    Route::get('/registration','registration');
    Route::post('/registration','registerUser')->name('register-user');
    Route::get('/login', 'index')->name('login');
    Route::post('/authenticate','loginUser')->name('authenticate');
    Route::get('/logout','logout')->name('logout');
});



Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    // Route::get('/dashboard', [DashboardController::class, 'show'])->middleware(['can:view dashboard']);
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
    Route::get('/setting/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::post('/setting/profile', [DashboardController::class, 'updateProfile'])->name('update.profile');
    
    // Master Data
    Route::get('/master/unit', [UnitController::class, 'index'])->name('master.unit');
    Route::post('/master/unit', [UnitController::class, 'store'])->name('master.unit');
    Route::post('/master/unit/update', [UnitController::class, 'update'])->name('master.unit.update');
    Route::get('/master/pelanggan', [CustomerController::class, 'index'])->name('master.pelanggan');
    Route::post('/master/pelanggan', [CustomerController::class, 'store'])->name('master.pelanggan');
    Route::post('/master/pelanggan/update', [CustomerController::class, 'update'])->name('master.pelanggan.update');
    Route::post('/master/pelanggan/disabled/{id}', [CustomerController::class, 'disabled'])->name('master.pelanggan.disabled');
    
    // Pengaturan User
    Route::get('/pengaturan/user', [UserController::class, 'index'])->name('pengaturan.user');
    Route::post('/pengaturan/user', [UserController::class, 'store_user'])->name('pengaturan.user.store');
    Route::post('/pengaturan/user/update', [UserController::class, 'update_user'])->name('pengaturan.user.update');
    Route::get('/pengaturan/role', [UserController::class, 'roles'])->name('pengaturan.role');
    Route::post('/pengaturan/role', [UserController::class, 'store_role'])->name('pengaturan.role.store');
    Route::delete('/pengaturan/role/delete/{id}', [UserController::class, 'delete_role'])->name('pengaturan.role.delete');
    
    // Tanda Terima Unit
    Route::get('/ttu', [TandaTerimaController::class, 'ttu'])->name('ttu');
    Route::post('/ttu/cari', [TandaTerimaController::class, 'cari_ttu'])->name('ttu.cari');
    Route::post('/ttu', [TandaTerimaController::class, 'store'])->name('ttu.store');
    
    // Pengecekan Unit
    Route::get('/pengecekan', [PengecekanController::class, 'pengecekan_unit'])->name('pengecekan');
    Route::post('/pengecekan', [PengecekanController::class, 'store'])->name('pengecekan.store');
    
    // Pengambilan Unit
    Route::get('/pengambilan', [PengambilanController::class, 'pengambilan_unit'])->name('pengambilan');
    Route::post('/pengambilan', [PengambilanController::class, 'store'])->name('pengambilan.store');
    
    // Return Unit
    Route::get('/return', [ReturnController::class, 'return_unit'])->name('return');
    Route::post('/return', [ReturnController::class, 'store'])->name('return.store');

    // Status perbaikan
    Route::get('/perbaikan/antrian', [StatusPerbaikanController::class, 'status_perbaikan_antrian'])->name('perbaikan.antrian');
    Route::get('/perbaikan/konfirmasi', [StatusPerbaikanController::class, 'status_perbaikan_menunggu_konfirmasi'])->name('perbaikan.konfirmasi');
    Route::get('/perbaikan/pengecekan', [StatusPerbaikanController::class, 'status_perbaikan_pengecekan'])->name('perbaikan.pengecekan');
    Route::get('/perbaikan/proses', [StatusPerbaikanController::class, 'status_perbaikan_proses'])->name('perbaikan.proses');
    Route::get('/perbaikan/selesai', [StatusPerbaikanController::class, 'status_perbaikan_selesai'])->name('perbaikan.selesai');
    Route::get('/perbaikan/dibatalkan', [StatusPerbaikanController::class, 'status_perbaikan_dibatalkan'])->name('perbaikan.dibatalkan');
    Route::get('/perbaikan/riwayat', [StatusPerbaikanController::class, 'status_perbaikan_riwayat'])->name('perbaikan.riwayat');

});