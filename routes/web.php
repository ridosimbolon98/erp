<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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
});