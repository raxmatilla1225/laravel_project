<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\CustomController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\UserController;
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

//Route::get('/layout', function () {
//    return view('site.table.first_category');
//});

Route::get('/', function () {
    return view('site.index');
})->name('techno.store');

Route::get('product/{id}',[ProductController::class, 'show_table'])->name('product.table');

Route::get('/product_info/{id}',[ProductController::class,'show'])->name('show.product');









//Route::get("/product/{id}",function ($id){
//
//    $products = \Illuminate\Support\Facades\DB::select("select p.id,p.name,p.price,p.image from products p inner join categories c on p.c_id = c.id");
//    $data =[];
//    foreach ($products as $product){
//        $data['id'] = $product->id;
//        $data['name'] = $product->name;
//        $data['price'] = $product->price;
//        $data['image'] = $product->image;
//    }
//
//    return view("site.table.product",['data'=>$data]);
//
//});









































































//ADMINKA
Route::get('/administration', function () {
    return view('admin.index');
});


//-----------
//Admin Routs

Route::get('/admin',[AdminController::class, 'index'])->name('table.admin');

Route::get('/admin_add',[AdminController::class, 'create'])->name('add.admin');

Route::post('/admins',[AdminController::class, 'store'])->name('store.admin');

Route::get('/admin_edit/{id}',[AdminController::class, 'edit']);

Route::put('/adminss',[AdminController::class, 'update'])->name('update.admin');

//End Admin Routs
//-----------






//-----------
//User Routs

//Route::get('/user',[UserController::class, 'index'])->name('table.user');

//Route::get('/user_add',[UserController::class, 'create'])->name('add.user');

//Route::post('/users',[UserController::class, 'store'])->name('store.user');

//Route::get('/user_edit/{id}',[UserController::class, 'edit']);

//Route::put('/userss',[UserController::class, 'update'])->name('update.user');

//End User Routs
//-----------






//-----------
//Category Routs

Route::get('/category',[CategoryController::class, 'index'])->name('table.category');

Route::get('/category_add',[CategoryController::class, 'create'])->name('add.category');

Route::post('/categories',[CategoryController::class, 'store'])->name('store.category');

Route::get('/category_edit/{id}',[CategoryController::class, 'edit']);

Route::put('/categoriess',[CategoryController::class, 'update'])->name('update.category');

//End Category Routs
//-----------




//-----------
//Product Routs

Route::get('/product',[ProductController::class, 'index'])->name('table.product');

Route::get('/product_add',[ProductController::class, 'create'])->name('add.product');

Route::post('/product',[ProductController::class, 'store'])->name('store.product');

Route::get('/product_edit/{id}',[ProductController::class, 'edit']);

Route::put('/productss',[ProductController::class, 'update'])->name('update.product');

//End Product Routs
//-----------















//Auth Routs
Route::get('/dashboard',[CustomController::class, 'dashboard']);

Route::get('/login',[CustomController::class, 'index'])->name('login');

Route::get('/register',[CustomController::class, 'register'])->name('register-user');

Route::post('/custom_register',[CustomController::class, 'customRegister'])->name('register.custom');

Route::post('/custom_login',[CustomController::class, 'customLogin'])->name('login.custom');

Route::get('/logout',[CustomController::class, 'logOut'])->name('user.logout');



