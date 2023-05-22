<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('/bukan_admin/home/home');
});

Route::get('/about-us', function () {
    return view('/bukan_admin/about-us/about-us');
});

Route::get('/register', [AuthController::class, "register"])->name('register');
Route::get('/login', [AuthController::class, "login"])->name('login');
Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::post('/register', [AuthController::class, "doRegister"])->name('do.register');
Route::post('/login', [AuthController::class, "doLogin"])->name('do.login');

Route::get('/product', [ProductController::class, 'index'])->name('products.index');


Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('/product2', [\App\Http\Controllers\ProductController::class, 'index2'])->name('products.index2');
