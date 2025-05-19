<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Routing\Controller as BaseController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/product', function () {
//     return view('product');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/logout', function () {
//     return view('logout');
// });

Route::get('/', [HomeController::class, 'index'])->name('gotohome');
Route::get('/contact', [HomeController::class, 'contact'])->name('gotocontact');

Route::get('/product', [ProductController::class, 'index'])->name('gotoproduct');

// Create
Route::get('/product/create', [ProductController::class, 'create'])->name('gotocreate');
Route::post('/product', [ProductController::class, 'store'])->name('create');

// Update
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('editdata');
Route::post('/update/{id}', [ProductController::class, 'update'])->name('updatedata');

// Delete
Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('delete');

