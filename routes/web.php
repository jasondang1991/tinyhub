<?php


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
Auth::routes();
Route::get('/', function() {
    return view('homepage');
})->name('homepage');
Route::get('admin/product/listProduct', 'ProductController@listProduct')->name('listProduct');
Route::get('admin/product/createProduct', 'ProductController@createProduct');
Route::get('admin/product/categories', 'ProductController@categories');
Route::get('admin/index', function(){
    return view('admin.index');
});

Route::get('admin/customer/listCustomer', 'CustomerController@listCustomer');

Route::get('admin/order/listOrder', 'OrderController@listOrder');

Route::get('admin/listUsers', 'UserController@listUsers');


Route::get('profile', function(){
    return view('home');
});
Route::get('home', 'RoleController@role');

Route::post('admin', 'RoleController@role' );

Route::get('admin', function(){
    return redirect()->route('listProduct');
})->middleware('role')->middleware('auth');

Route::get('contact-us', function(){
    return view('contact-us');
});
Route::get('cart' , 'CartController@cart');
Route::get('checkout' , function(){
    return view('users.cart.checkout');
})->middleware('auth');
Route::get('order-review' , function(){
    return view('users.cart.order-review');
});
Route::get('report' , function(){
    return view('users.cart.report');
})->name('print');
Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('homepage');
})->name('logout');

Route::get('brand', function(){
    return view('brand');
});

Route::get('search' , function(){
    return view('search');
});
//nana
Route::get('productDetails', function(){
    return view('users.products.in-ear.productDetails');
});
Route::get('productList',function(){
    return view('users.products.productList');
});

// Blank Page Route Section
Route::get('about-us', 'BlankPageController@about')->name('about-us');
Route::get('shipping-policy', function(){
    return view('shipping-policy');
});
Route::get('guarantee',function(){
    return view('guarantee');
})->name('guarantee');

Route::get('payment', function(){
    return view('payment');
});
route::get('products',function(){
    return view('users.in-ear.products');
});
Route::get('product-detail', function(){
    return view('users.in-ear.product-detail');
});

Route::get('report-product' , function(){
    return view('users.products.report');
});

