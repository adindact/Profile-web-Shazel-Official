<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
    return view('home');
});

Route::get('/createProduct', function () {
    return view('createProduct');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/product', function () {
    return view('product');
});

route::post('/admin-prosesCreateProduct', [App\Http\Controllers\AdminController::class, 'processCreateProduct'])->name('admin.prosesCreateProduct');

Route::get('/product', [App\Http\Controllers\AdminController::class, 'showProduct'])->name('showProduct');

