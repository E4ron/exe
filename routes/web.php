<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');

Route::prefix('/login')->group(function() {
    Route::get('/', [PageController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'login'])->name('login.fun');
});

Route::prefix('/register')->group(function() { 
    Route::get('/', [PageController::class, 'register'])->name('register');
    Route::post('/', [AuthController::class, 'register'])->name('register.fun');
});

Route::middleware('auth')->group(function (){
    Route::get('\logout',[AuthController::class, 'logout'])->name('logout');

    Route::middleware('access:admin')->prefix('admin')->group(function() {
        Route::get('/',[AdminController::class, 'index'])->name('admin');



    });


}); 