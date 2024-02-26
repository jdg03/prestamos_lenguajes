<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\prestamoControlller;
use App\Http\Controllers\amortizacionController;



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

Route::get('/', [prestamoControlller::class,'inicio'])->name('inicio');

Route::get('/crearPrestamo', [prestamoControlller::class,'crearPrestamo'])->name('crear.prestamo');
Route::post('/guardarPrestamo', [prestamoControlller::class,'guardarPrestamo'])->name('guardar.prestamo');


Route::get('/amortizacion/{prestamoId}',[amortizacionController::class, 'getAmortizacion'])->name('ver.amortizacion');
