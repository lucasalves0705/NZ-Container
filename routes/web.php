<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::resourceVerbs([
    'create' => 'criar',
    'edit' => 'editar',
]);

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/produtos', function () {
    return redirect()->route('product.index');
})->name('products');

Route::get('produtos/{category}', [ProductController::class, 'productCategory'])->name('productCategory');

Route::resource('/produto', ProductController::class)
    ->parameters(['produto' => 'product'])
    ->names('product');

Route::resource('/categoria', CategoryController::class)
    ->parameters(['categoria' => 'category'])
    ->names('category');
