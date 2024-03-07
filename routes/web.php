<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\chartController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\postController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
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

Route::view('/', 'pages.users.welcome')->name('login');

// admin routes

Route::view('/admin/dashboard', 'pages.admin.panel')->name('panel')->middleware(['auth', 'admin']);
Route::view('/admin/dashboard/categories', 'pages.admin.add-categories')->name('add-categories')->middleware(['auth', 'admin']);
Route::view('/admin/dashboard/manage-products', 'pages.admin.manage-products')->name('add-categories')->middleware(['auth', 'admin']);
Route::view('/admin/dashboard/products', 'pages.admin.add-products')->name('add-products')->middleware(['auth', 'admin']);
Route::view('admin/dashboard/analytics', 'pages.admin.analytics')->middleware(['auth', 'admin']);
Route::post('/add-category', [categoryController::class, 'addCategory'])->middleware(['auth', 'admin']);
Route::post('/add-product', [productController::class, 'addProduct'])->middleware(['auth', 'admin']);
Route::get('/admin/dashboard/products', [productController::class, 'getCategory'])->name('add-products')->middleware(['auth', 'admin']);
Route::get('/admin/dashboard/manage-products', [productController::class, 'getProducts'])->name('add-products')->middleware(['auth', 'admin']);
Route::post('/update-data/{id}', [productController::class, 'updateDelete'])->middleware(['auth', 'admin']);
Route::get('/admin/dashboard/analytics', [chartController::class, 'makeChart'])->middleware(['auth', 'admin']);

// user routes

Route::get('/', [categoryController::class, 'getCategories'])->name('login');
Route::view('/single-product/{id}/{category}', 'pages.users.single-product');
Route::view('/single-user-product/{id}', 'pages.users.single-user-product')->middleware('auth');
Route::get('/single-user-product/{id}', [postController::class, 'getSingleProduct'])->middleware('auth');
Route::view('/sell', 'pages.users.sell');
Route::get('/single-product/{id}/{category}', [productController::class, 'getSingleProduct']);
Route::get('/sell', [postController::class, 'getCategory']);
Route::post('/sign-up', [userController::class, 'registerUser']);
Route::post('/logout', [userController::class, 'signOut']);
Route::post('/login', [userController::class, 'signIn']);
Route::post('/post-add', [postController::class, 'addPost']);
Route::post('/send-mail', [mailController::class, 'sendMail']);
Route::view('/single-category/{category}', 'pages.users.category');
Route::get('/single-category/{category}', [postController::class, 'getProducts']);