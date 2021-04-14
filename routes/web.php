<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
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

Route::get('/', function () {
    return view('welcome');


Auth::routes();



Route::get('/orders', [App\Http\Controllers\OrderResources::class, 'index'])->name('orders');

Route::get('/ordersProduct', [App\Http\Controllers\OrderProuductResources::class, 'index'])->name('ordersProduct');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/posts', postController::Class);
