<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReviewController;
<<<<<<< HEAD
use App\Http\Controllers\CRUDReviewController;
=======
use App\Http\Controllers\ForgotPasswordController;
>>>>>>> 4db09e70d43146f824926a97c4a5b527eb5e0fbe
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
// Route::get('/home', function () {
//     return view('home');
// // <<<<<<< Updated upstream
// });
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

Route::get('/crudreview', function () {
    return view('crudreview');
});


route::post('/admin-prosesCreateProduct', [App\Http\Controllers\AdminController::class, 'processCreateProduct'])->name('admin.prosesCreateProduct');


route::post('/product', [App\Http\Controllers\AdminController::class, 'processCreateProduct'])->name('admin.prosesCreateProduct');
Route::get('/product', [App\Http\Controllers\AdminController::class, 'showProduct'])->name('showProduct');
Route::get('/product/{product:kode}', [App\Http\Controllers\AdminController::class, 'showOneProduct'])->name('showOneProduct');
Route::get('/dataProduct', [App\Http\Controllers\AdminController::class, 'adminShowProduct'])->name('admin.ShowProduct');

Route::resource('login', App\Http\Controllers\LoginController::class)->names('login');

Route::resource('register', App\Http\Controllers\RegisterController::class)->names('register');

Route::get('/forgotpassword', [ForgotPasswordController::class, 'showForgetForm'])->name('forgotpassword.show');
Route::post('/forgotpassword', [ForgotPasswordController::class, 'updatePassword'])->name('forgotpassword.update');

Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/product/{product}/update', [App\Http\Controllers\AdminController::class, 'updateProduct'])->name('updateProduct');
Route::patch('/productUpdate/{kode}', [App\Http\Controllers\AdminController::class, 'processUpdateProduct'])->name('admin.prosesUpdateProduct');

Route::delete('/product/{product:kode}', [App\Http\Controllers\AdminController::class, 'deleteProduct'])->name('admin.deleteProduct');

<<<<<<< HEAD
Route::post('/submit-crudreview', [CRUDReviewController::class, 'submitReview'])->name('submit.crudreview');
=======
>>>>>>> 4db09e70d43146f824926a97c4a5b527eb5e0fbe


