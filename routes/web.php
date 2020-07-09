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
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

//////////////////admin
Route::group(['prefix' => 'admin/', 'middleware' => 'role'], function () {
    
        //users
        Route::get('users/listUsers', 'UserController@listUsers');
        Route::get('users/updateUser/{id}' , 'UserController@updateUser');
        Route::post('users/postUpdateUser', 'UserController@postUpdateUser');

        //customer
        Route::get('customer/listCustomer', 'CustomerController@listCustomer');;
        Route::get('customer/updateCustomer/{id}', 'CustomerController@updateCustomer');
        Route::post('customer/postUpdateCustomer/{id}', 'CustomerController@postUpdateCustomer');

        //feedback
        Route::get('feedback/feedbackList', 'FeedbackController@feedbackList');
        Route::get('feedback/deleteFeedback/{id}', 'FeedbackController@deleteFeedback');
        Route::get('feedback/doneFeedback/{id}' , 'FeedbackController@doneFeedback');
        Route::get('feedback/pendingFeedback/{id}', 'FeedbackController@pendingFeedback');
        Route::get('feedback/onStatusFeedback/{id}', 'FeedbackController@onStatus');
        Route::get('feedback/offStatusFeedback/{id}', 'FeedbackController@offStatus');

        //product
        Route::get('product/listProduct', 'ProductController@listProduct');
        Route::get('product/createProduct', 'ProductController@createProduct');
        Route::post('product/postCreate', 'ProductController@postCreate');
        Route::get('product/updateProduct/{id}', 'ProductController@updateProduct');
        Route::get('product/detailsProduct/{id}', 'ProductController@detailsProduct');
        Route::post('product/postUpdate/{id}', 'ProductController@postUpdate');
        Route::get('product/deleteProduct/{id}', 'ProductController@deleteProduct');
        

        //category
        Route::get('category/categories', 'CategoryController@categories');
        Route::get('category/createCategories', 'CategoryController@createCate');
        Route::post('category/postCate', 'CategoryController@postCate');
        Route::get('category/updateCategories/{id}', 'CategoryController@updateCates');
        Route::post('category/postUpdateCate/{id}', 'CategoryController@postUpdateCate');

        //brands
        Route::get('brands/listBrands' , 'BrandsController@listBrands');
        Route::get('brands/createBrands' , 'BrandsController@createBrand');
        Route::post('brands/postBrands' , 'BrandsController@postBrands');
        Route::get('brands/updateBrands/{id}' , 'BrandsController@updateBrands');
        Route::post('brands/postUpdateBrands/{id}' , 'BrandsController@postUpdateBrands');

        //order
        Route::get('order/listOrder', 'OrderController@listOrder');
        Route::get('order/onOrderStatus/{id}', 'OrderController@onOrderStatus');
        Route::get('order/listOrderDetails/{id}', 'CartController@orderDetails');
        Route::get('order/deleteOrder/{id}', 'OrderController@deleteOrder');
        Route::get('admin/order/onOrderStatus', 'OrderController@onOrderStatus111');

        //comment
        Route::get('comment/listComment', 'CommentController@listComment');
        Route::get('comment/onCommentStatus/{id}', 'CommentController@onCommentStatus');
        Route::get('comment/offCommentStatus/{id}', 'CommentController@offCommentStatus');
        Route::get('comment/deleteComment/{id}', 'CommentController@deleteComment');

        //banner
        Route::get('banners/listBanner' , 'BannerController@listBanner');
        Route::get('banners/deleteBanners/{id}', 'BannerController@deleteBanners');
        Route::get('banners/createBanner', function (){
            return view('admin.banners.createBanner');
        });
        Route::post('banners/postCreateBanners', 'BannerController@postCreateBanners');
        Route::get('banners/postCreateBanners', function(){
            return abort(404);
        });
        Route::get('banners/updateBanners/{id}', 'BannerController@updateBanners');
        Route::post('banners/postUpdateBanners', 'BannerController@postUpdateBanners');
        Route::get('banners/postUpdateBanners', function(){
            return abort(404);
        });
        //index
        Route::get('index', 'AdminController@index');

        //profile admin
        Route::get('profile/{id}', 'UserController@profileAdmin');
        route::get('profile/{id}/{idcommment}','UserController@deleteCommentAdmin');
        route::post('profileUpdate/{id}','UserController@postUpdateProfileAdmin');

        //ajax Register
        Route::get('ajaxRegisterEmail/{email}', 'AjaxController@registerEmail');
        Route::get('ajaxRegisterPhone/{phone}', 'AjaxController@registerPhone');

        });
//end admin

/////////////Blank page
//Feedback
Route::get('contact-us', function () {
    return view('contact-us');
})->name('contact-us');
//about-us
Route::get('about-us', function () {
    return view('about-us');
})->name('about-us');
//shipping-policy
Route::get('shipping-policy', function () {
    return view('shipping-policy');
})->name('shipping-policy');
//payment
Route::get('payment', function () {
    return view('payment');
})->name('payment');
//guarantee
Route::get('guarantee', function () {
    return view('guarantee');
})->name('guarantee');
//brand
Route::get('brand', [
    'as' => 'brand',
    'uses' => 'BrandsController@getBrands']);

//search
Route::get('search', [
        'as' => 'search',
        'uses' => 'SearchKeyController@getSearch'
]);

//logout
Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('homepage');
})->name('logout');
//feedback
Route::post('feedback/postFeedback', 'FeedbackController@postFeedback');


//////////////////////////// User 
//profile user
Route::group(['prefix' => 'users/' ], function () {
    Route::get('profile/{id}', 'UserController@profileUser');
    Route::get('profile/{id}/{idcommment}','UserController@deleteCommentUser');
    Route::post('profileUpdate/{id}','UserController@postUpdateProfileUser');
    ///comment
    Route::post('product/createCommentUser/{idProduct}/{idCustomer}', 'ProductController@postCommentUser'); 
    });

       
//////////////category
Route::get('category',[ 
    'as' => 'category',
    'uses' => 'CategoryController@category']);
    
// Route::get('category', 'CategoryController@getcategories');
Route::post('category/search', 'CategoryController@search');
Route::get('category/search' ,'CategoryController@category' );
//search cate
Route::get('searchCate/{in}', 'CategoryController@filterCate');
//search brands
Route::get('searchBrand/{in}', 'CategoryController@filterBrand');
//search Price
Route::get('searchPrice', 'CategoryController@filterPrice');
//example product
Route::get('product-detail/{id}', [
    'as' => 'product-detail',
    'uses' => 'ProductController@productDetails']);

// //example image product
//Route::get('product-detail/{id}', 'ProductController@imageProduct');
// check cart
Route::get('cart', 'CartController@cart');
//buy now
Route::post('cart/shopping', 'CartController@shoppingCart');
Route::get('cart/shopping', 'CartController@cart');
//add cart
Route::post('cart/addCart/{id}', 'CartController@addCart');
Route::get('cart/addCart/{a}', function () {
    return abort(404);
})->where('a', '[A-Za-z0-9]+');
// incre item
Route::post('cart/shopping/increItem', 'CartController@increCart');
//decre item
Route::post('cart/shopping/decreItem', 'CartController@decreCart');
//remove item
// Route::post('cart/shopping/removeItem', 'CartController@removeItem');
Route::get('cart/shopping/removeItem/{id}', 'CartController@removeItem');
//check out cart
Route::get('checkout' , 'CartController@checkout')->middleware('auth');
//order review
Route::post('cart/shopping/order-review', 'CartController@orderReview');
Route::get('cart/shopping/order-review', function () {
    return abort(404);
});
//thank you
Route::post('thank-you' , 'CartController@thankyou');
//check report
Route::get('cart/shopping/orderDetails/{id}', 'CartController@orderDetails');

/////////////////////////end cart



