<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Raw;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/first', [TestController::class, 'first']);

Route::get('/second', [TestController::class, 'second']);


Route::get('/', [MainController::class, 'showIndex'])->name('home');

Route::get('/array', [MainController::class, 'showArray'])->name('array');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::get('/products/{product}/', [ProductController::class , 'show'])->name('products.show');

Route::delete('/products/{product}/', [ProductController::class, 'delete'])->name('products.delete');