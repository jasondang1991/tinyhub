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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/product/listProduct', 'ProductController@listProduct')->name('listProduct');
Route::get('admin/product/createProduct', 'ProductController@createProduct');
Route::get('admin/product/categories', 'ProductController@categories');


Route::get('admin/customer/listCustomer', 'CustomerController@listCustomer');

Route::get('admin/order/listOrder', 'OrderController@listOrder');

Route::get('admin/listUsers', 'UserController@listUsers');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/login' , 'HomeController@auLogin');
Route::post('tinyhub', 'RoleController@role' );
<<<<<<< HEAD
Route::get('tinyhub')->middleware('auth')->middleware('role');
=======
>>>>>>> ba9cdf2b385ce13c78f3c2cbf0152d3c44e321da
