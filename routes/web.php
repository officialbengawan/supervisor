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
// login
Route::get('/login', [pengawasController::class, 'login']);
// Dashboard
Route::get('/', [pengawasController::class, 'Dashboard']);
// user management
Route::get('/user_management', [pengawasController::class, 'user_management']);
// Penyedia
Route::get('/role_management', [pengawasController::class, 'role_management']);
// banner
Route::get('/banner', [pengawasController::class, 'banner']);
// provider
Route::get('/provider', [pengawasController::class, 'provider']);
// Product
Route::get('/product', [pengawasController::class, 'product']);
// Satdik
Route::get('/satdik', [pengawasController::class, 'satdik']);
// book_teks
Route::get('/book_teks', [pengawasController::class, 'book_teks']);
// book_non_teks
Route::get('/book_non_teks', [pengawasController::class, 'book_non_teks']);
// negotiation
Route::get('/negotiation', [pengawasController::class, 'negotiation']);
// order_list
Route::get('/order_list', [pengawasController::class, 'order_list']);
// activity_history
Route::get('/activity_history', [pengawasController::class, 'activity_history']);
// chats
Route::get('/chats', [pengawasController::class, 'chats']);
// login
Route::get('/message', [pengawasController::class, 'message']);