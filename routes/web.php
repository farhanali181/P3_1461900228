<?php

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

Route::get('/', [App\Http\Controllers\Tampilan::class, 'index228'])->name('index228');
Route::get('/{id}', [App\Http\Controllers\Tampilan::class, 'ubah228'])->name('ubah228');
Route::post('/ubah/{id}', [App\Http\Controllers\Tampilan::class, 'ubah228'])->name('ubah228');