<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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

Route::middleware(['auth'])->group(function () {
    Route::controller(CategoryController::class)->group(function () {
        Route::get('categories', 'index')->name('categories.index');
        Route::post('categories', 'store')->name('categories.store');
        Route::get('categories/create', 'create')->name('categories.create');
        Route::get('categories/{category}/edit', 'edit')->name('categories.edit');
        Route::put('categories/{category}', 'update')->name('categories.update');
        Route::get('categories/{category}', 'show')->name('categories.show');
    });
    Route::controller(ProductController::class)->group(function () {
        Route::get('products', 'index')->name('products.index');
        Route::post('products', 'store')->name('products.store');
        Route::get('products/create', 'create')->name('products.create');
        Route::get('products/{product}/edit', 'edit')->name('products.edit');
        Route::put('products/{product}', 'update')->name('products.update');
        Route::get('products/{product}', 'show')->name('products.show');
        Route::delete('products/{product}', 'destroy')->name('products.delete');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
