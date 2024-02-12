<?php

use App\Http\Controllers\categoryController;
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

Route::post('/add-category', [categoryController::class, 'addCategory']);

// user routes

Route::get('/', [categoryController::class, 'getCategories']);
