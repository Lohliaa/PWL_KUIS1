<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\PelangganController;


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

// Route::get('/',function (){return view('index');});

Route::get('/',[HomeController::class, 'index']);
Route::get('/suplier',[SuplierController::class, 'index'])->name('suplier');
Route::get('/pelanggan',[PelangganController::class, 'index'])->name('pelanggan');
