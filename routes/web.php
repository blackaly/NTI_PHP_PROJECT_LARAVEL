<?php

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

Route::get('/', function () {
    return view('welcome');
});


// User Route

Route::view("register", "user.login-register");


Route::post("/doRegister", "registerController@getUserLogAndRegister");
Route::get("logout", "registerController@logout");

Route::get("index", "ramMainIndexController@sliderView");
Route::get("/product/ram/{id}", "ramMainIndexController@slider");
Route::get("/shopping-cart", "ramMainIndexController@cart");

Route::any("/product/done", "ramMainIndexController@cartPostOperation");

Route::get("/checkout", "ramMainIndexController@checkout");



/***********************************************************************************/
/* --> */     Route::post("/doCheckout", "ramMainIndexController@checkoutPost");
/* --> */     Route::post("/doCheckout", "ramMainIndexController@customerAddress" );
/* --> */     Route::post("/doCheckout", "ramMainIndexController@order" );
/***********************************************************************************/





// Admin Route

Route::view("admin/index", "admin.index");
Route::view("admin/add/admin", "admin.pages.forms.adminForm.adminForm");


Route::resource('admin/role', roleController::class);
Route::resource('admin/admin', adminController::class);
Route::resource('admin/product', productController::class);
Route::resource('admin/supplier', supplierController::class);
Route::resource('admin/ram-product', ramProductController::class);

Route::get("admin/login", "adminController@login")->name("login"); 
Route::post("admin/doLogin", "adminController@doLogin");