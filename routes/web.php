<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
});

// Route::get('products', [ProductsController::class, 'index']);
// Route::get('products/create', [ProductsController::class, 'create']);
// Route::post('products', [ProductsController::class, 'store']);

Route::resource('/product', ProductController::class);

