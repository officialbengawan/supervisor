<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengawasController;
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
Route::get('/', [pengawasController::class, 'Dashboard']);
Route::get('/penyedia', [pengawasController::class, 'penyedia']);
