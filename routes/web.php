<?php

use App\Http\Controllers\PoiController;
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

Route::get('/', [PoiController::class, 'index'])
        ->name('poi.index');

Route::get('/pois/{id}/edit', [PoiController::class, 'edit'])
        ->name('poi.edit');

Route::patch('/pois/{id}', [PoiController::class, 'update'])
        ->name('poi.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
