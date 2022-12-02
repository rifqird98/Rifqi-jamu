<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JamuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\DashboardControlller::class, 'index']);
Route::get('detail/{id}', [App\Http\Controllers\DashboardControlller::class, 'detail'])->name('detail');

Route::resource('jamu', JamuController::class);
Route::resource('category', CategoryController::class);
Route::resource('post', PostController::class);
Route::resource('produk', ProdukController::class);
Route::resource('user', UserController::class);