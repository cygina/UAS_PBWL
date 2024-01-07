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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/customer', [App\Http\Controllers\Customercntrl::class, 'index']);
Route::get('/customer/create', [App\Http\Controllers\Customercntrl::class, 'create']);
Route::post('/customer', [App\Http\Controllers\Customercntrl::class, 'store']);
Route::get('/customer/edit/{id}', [App\Http\Controllers\Customercntrl::class, 'edit']);
Route::patch('/customer/{id}', [App\Http\Controllers\Customercntrl::class, 'update']);
Route::delete('/customer/{id}', [App\Http\Controllers\Customercntrl::class, 'destroy']);

Route::get('/produk', [App\Http\Controllers\Produkcntrl::class, 'index']);
Route::get('/produk/create', [App\Http\Controllers\Produkcntrl::class, 'create']);
Route::post('/produk', [App\Http\Controllers\Produkcntrl::class, 'store']);
Route::get('/produk/edit/{id}', [App\Http\Controllers\Produkcntrl::class, 'edit']);
Route::patch('/produk/{id}', [App\Http\Controllers\Produkcntrl::class, 'update']);
Route::delete('/produk/{id}', [App\Http\Controllers\Produkcntrl::class, 'destroy']);

Route::get('/order', [App\Http\Controllers\Ordercntrl::class, 'index']);
Route::get('/order/create', [App\Http\Controllers\Ordercntrl::class, 'create']);
Route::post('/order', [App\Http\Controllers\Ordercntrl::class, 'store']);
Route::get('/order/edit/{id}', [App\Http\Controllers\Ordercntrl::class, 'edit']);
Route::patch('/order/{id}', [App\Http\Controllers\Ordercntrl::class, 'update']);
Route::delete('/order/{id}', [App\Http\Controllers\Ordercntrl::class, 'destroy']);