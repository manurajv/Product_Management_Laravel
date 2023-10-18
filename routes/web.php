<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products.index')->middleware('auth');


Route::get('/', [ProductController::class, 'index']);
Route::get('/product/{id}', 'ProductController@show')->middleware('auth');
// Define other routes for create, update, delete, and user registration

Route::get('/product/{id}', 'ProductController@show')
    ->middleware('auth')
    ->name('product.show');

// Product Routes

// Show product creation form for logged-in users
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware('auth');

// Store a newly created product in the database for logged-in users
Route::post('/products', [ProductController::class, 'store'])->name('products.store')->middleware('auth');

// Show the product editing form for logged-in users
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');

// Update a product in the database for logged-in users
Route::patch('/products/{id}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');

// Delete a product from the database for logged-in users
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show')->middleware('auth');




