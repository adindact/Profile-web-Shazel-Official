<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ForgotPasswordController;

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


Route::get('/createProduct', function () {
    return view('createProduct');
});
// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/product', function () {
    return view('product');
});
Route::get('/layanan', function () {
    return view('layanan');
});
Route::get('/lihatdata', function () {
    return view('lihatdata');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/tabel', function () {
    return view('template-tabel');
});
// Route::get('/review', function () {
//     return view('review');
// });
Route::get('/crudreview', function () {
    return view('crudreview')->middleware('reviewMiddleware');
});

route::post('/admin-prosesCreateProduct', [App\Http\Controllers\AdminController::class, 'processCreateProduct'])->name('admin.prosesCreateProduct');
route::post('/product', [App\Http\Controllers\AdminController::class, 'processCreateProduct'])->name('admin.prosesCreateProduct');
Route::get('/product', [App\Http\Controllers\AdminController::class, 'showProduct'])->name('showProduct');
Route::get('/product/{product:kode}', [App\Http\Controllers\AdminController::class, 'showOneProduct'])->name('showOneProduct');
Route::get('/dataProduct', [App\Http\Controllers\AdminController::class, 'adminShowProduct'])->name('admin.ShowProduct');
Route::get('/dataUsers', [App\Http\Controllers\AdminController::class, 'adminShowUsers'])->name('admin.ShowUsers');

// Route::get('/lihatdata', [App\Http\Controllers\AdminController::class, 'adminUsers'])->name('admin.Users');
Route::resource('login', App\Http\Controllers\LoginController::class)->names('login');
Route::resource('register', App\Http\Controllers\RegisterController::class)->names('register');
Route::get('/forgotpassword', [ForgotPasswordController::class, 'showForgetForm'])->name('forgotpassword.show');
Route::post('/forgotpassword', [ForgotPasswordController::class, 'updatePassword'])->name('forgotpassword.update');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::get('/product/{product}/update', [App\Http\Controllers\AdminController::class, 'updateProduct'])->name('updateProduct');
Route::patch('/productUpdate/{kode}', [App\Http\Controllers\AdminController::class, 'processUpdateProduct'])->name('admin.prosesUpdateProduct');
Route::delete('/product/{product:kode}', [App\Http\Controllers\AdminController::class, 'deleteProduct'])->name('admin.deleteProduct');
Route::delete('/users/{users:id}', [App\Http\Controllers\AdminController::class, 'deleteUsers'])->name('admin.deleteUsers');

// Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
// Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
// Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::post('/create-review', [App\Http\Controllers\ReviewController::class, 'processCreateReview'])->name('CreateReview')->middleware('reviewMiddleware');
Route::get('/review', [App\Http\Controllers\ReviewController::class, 'showReview'])->name('showReview')->middleware('reviewMiddleware');
Route::get('/', function () {
    // Buat instance dari ReviewController
    $reviewController = new ReviewController();

    // Panggil metode showReview dari instance ReviewController
    $reviews = $reviewController->showReview();

    return view('home', compact('reviews'));
});
