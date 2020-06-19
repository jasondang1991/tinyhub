<?php

use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', function() {
    return redirect()->route('homepage');
});
Route::get('/tinyhub', function () {
    return view('homepage');
})->name('homepage');

Route::get('admin/product/listProduct', 'ProductController@listProduct')->name('listProduct');
Route::get('admin/product/createProduct', 'ProductController@createProduct');
Route::get('admin/product/categories', 'ProductController@categories');


Route::get('admin/customer/listCustomer', 'CustomerController@listCustomer');

Route::get('admin/order/listOrder', 'OrderController@listOrder');

Route::get('admin/listUsers', 'UserController@listUsers');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('login' , function(){
    return view('auth.login');
})->name('login');
Route::get('register' , function (){
    return view('auth.register');
})->name('register');
Route::post('admin', 'RoleController@role' );

Route::get('admin', function(){
    return redirect()->route('listProduct');
})->middleware('role')->middleware('auth');


Route::get('cart' , 'CartController@cart');
Route::get('checkout' , function(){
    return view('users.cart.checkout');
})->middleware('auth');
Route::get('invoice' , function(){
    return view('users.cart.invoice');
});

Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('homepage');
});

//nana
Route::get('productDetails', function(){
    return view('users.products.in-ear.productDetails');
});
Route::get('productList',function(){
    return view('users.products.productList');
});

// Blank Page Route Section
Route::get('/about-us', 'BlankPageController@about')->name('about-us');
Route::get('/shipping-policy', 'BlankPageController@shippingPolicy')->name('shipping-policy');
route::get('/guarantee',function(){
    return view("guarantee");
})->name('guarantee');

