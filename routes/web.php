<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'pages.users.welcome');

// admin routes

Route::view('/admin/dashboard', 'pages.admin.panel')->name('panel');
Route::view('/admin/dashboard/categories', 'pages.admin.add-categories')->name('add-categories');
Route::view('/admin/dashboard/products', 'pages.admin.add-products')->name('add-products');
Route::post('/add-category', [categoryController::class, 'addCategory']);
Route::post('/add-product', [productController::class, 'addProduct']);
Route::get('/admin/dashboard/products', [productController::class, 'getCategory'])->name('add-products');

// user routes

Route::get('/', [categoryController::class, 'getCategories']);
Route::view('/single-product/{id}/{category}', 'pages.users.single-product');
Route::get('/single-product/{id}/{category}', [productController::class, 'getSingleProduct']);