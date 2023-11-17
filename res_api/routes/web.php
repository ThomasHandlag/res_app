<?php

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

Route::get('/', [App\Http\Controllers\LinuxController::class, 'index'])->name("home");

Route::post('/store', [App\Http\Controllers\LinuxController::class, 'store']);

Route::get('/create', [App\Http\Controllers\LinuxController::class, 'createForm']);
Route::get('/delete', [App\Http\Controllers\LinuxController::class, 'delete'])->name("delete");
