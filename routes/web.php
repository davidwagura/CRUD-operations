<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ProductController;

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


Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::post('/product', [ProductController::class, 'store'])->name('product.store');

Route::get('/product', [ProductController::class, 'create'])->name('product.create');


Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');

Route::put('/product/{product}/update', [ProductController::class, 'update' ])->name('product.update');

Route::delete('/product/{product}/delete', [ProductController::class, 'delete'])->name('product.delete');

Route::get('/product/add', [ProductController::class, 'add'])->name('product.add');



// cars



Route::get('/new-car', [CarController::class, 'index'])->name('new.index');

Route::post('/new-car', [ CarController::class, 'store'])->name('new.store');



Route::get('/new/{car}/edit', [CarController::class, 'edit'])->name('car.edit');

Route::put('/new/{car}/update', [CarController::class, 'update' ])->name('car.update');

Route::delete('/new/{car}/delete', [CarController::class, 'delete'])->name('new.delete');

Route::get('/new/add', [CarController::class, 'create'])->name('new.add');
