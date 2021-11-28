<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\CustomController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\ProductController;

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

//Route::get('/', function () {
//    return view('shop.creativelayers.themes.techno-html.index-v7');
//});

Route::get('/', function () {
    return view('site.index');
});

Route::get('/administration', function () {
    return view('admin.index');
});


//Admin Routs

Route::get('/admin',[AdminController::class, 'index'])->name('table.admin');

Route::get('/admin_add',[AdminController::class, 'create'])->name('add.admin');

Route::post('/admins',[AdminController::class, 'store'])->name('store.admin');

Route::get('/admin_edit/{id}',[AdminController::class, 'edit']);

Route::put('/adminss',[AdminController::class, 'update'])->name('update.admin');

//Category Routs

Route::get('/product',[ProductController::class, 'index'])->name('table.product');
//
Route::get('/product_add',[ProductController::class, 'create'])->name('add.product');
//
Route::post('/product',[ProductController::class, 'store'])->name('store.product');
//
//Route::get('/admin_edit/{id}',[AdminController::class, 'edit']);
//
//Route::put('/adminss',[AdminController::class, 'update'])->name('update.admin');















//Auth Routs
Route::get('/dashboard',[CustomController::class, 'dashboard']);

Route::get('/login',[CustomController::class, 'index'])->name('login');

Route::get('/register',[CustomController::class, 'register'])->name('register-user');

Route::post('/custom_register',[CustomController::class, 'customRegister'])->name('register.custom');

Route::post('/custom_login',[CustomController::class, 'customLogin'])->name('login.custom');

Route::get('/logout',[CustomController::class, 'logOut'])->name('user.logout');


