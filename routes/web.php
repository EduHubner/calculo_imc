<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CalculoIMC;

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

Route::get('/', [CalculoIMC::class, 'index']);

Route::get('/resultado', [CalculoIMC::class, 'imc']);