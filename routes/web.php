<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReviewController;
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
// <<<<<<< Updated upstream
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/tabel', function () {
    return view('template-tabel');
});

Route::get('/review', function () {
    return view('review');
});

route::post('/admin-prosesCreateProduct', [App\Http\Controllers\AdminController::class, 'processCreateProduct'])->name('admin.prosesCreateProduct');

Route::get('/product', [App\Http\Controllers\AdminController::class, 'showProduct'])->name('showProduct');

Route::resource('login', App\Http\Controllers\LoginController::class)->names('login');

Route::resource('register', App\Http\Controllers\RegisterController::class)->names('register');

Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/review', [ReviewController::class, 'showReviewForm'])->name('show.review.form');
Route::post('/review/submit', [ReviewController::class, 'submitReview'])->name('submit.review');
