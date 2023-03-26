<?php

use App\Http\Controllers\PoiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/pois', [PoiController::class, 'index'])
        ->name('poi.index')->middleware('auth');

Route::get('/pois/{id}/edit', [PoiController::class, 'edit'])
        ->name('poi.edit')->middleware('auth');

Route::patch('/pois/{id}', [PoiController::class, 'update'])
        ->name('poi.update')->middleware('auth');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/', [UserController::class, 'login'])->name('login');

Route::post('/users/login', [UserController::class, 'authenticate']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
