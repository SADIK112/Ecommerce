<?php

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

// Frontend...

Route::get('/' , 'HomeController@index');


// Category routes...

//admin login..
Route::get('/admin' , 'AdminController@index');
//admin logout..
Route::get('/logout' , 'SuperAdminController@logout');
//dashboard..
Route::get('/dashboard' , 'SuperAdminController@index');
//admin-dashboard..
Route::post('/admin-dashboard' , 'AdminController@dashboard');
//add-category
Route::get('/add-category' , 'CategoryController@index');
//all-category
Route::get('/all-category' , 'CategoryController@all_category');
//save-category
Route::post('/save-category' , 'CategoryController@save_category');
//edit-category
Route::get('/edit-category/{category_id}' , 'CategoryController@edit_category');
//delete-category
Route::get('/delete-category/{category_id}' , 'CategoryController@delete_category');
//update-category
Route::post('/update-category/{category_id}' , 'CategoryController@update_category');
//Unactive-category
Route::get('/unactive-category/{category_id}' , 'CategoryController@unactive_category');
//Active-category
Route::get('/active-category/{category_id}' , 'CategoryController@active_category');

// Manufacture Routes and brands..

//add-manufacture
Route::get('/add-manufacture' , 'ManufactureController@index');
//save-manufacture
Route::post('/save-manufacture' , 'ManufactureController@save_manufacture');
//all-manufacture
Route::get('/all-manufacture' , 'ManufactureController@all_manufacture');
//edit-manufacture
Route::get('/edit-manufacture/{manufacture_id}' , 'ManufactureController@edit_manufacture');
//update-manufacture
Route::post('/update-manufacture/{manufacture_id}' , 'ManufactureController@update_manufacture');
//Unactive-manufacture
Route::get('/unactive-manufacture/{manufacture_id}' , 'ManufactureController@unactive_manufacture');
//Active-manufacture
Route::get('/active-manufacture/{manufacture_id}' , 'ManufactureController@active_manufacture');
//delete-manufacture
Route::get('/delete-manufacture/{manufacture_id}' , 'ManufactureController@delete_manufacture');

// Products routes...

//add-product
Route::get('/add-product' , 'ProductController@index');
//save-product
Route::post('/save-product' , 'ProductController@save_product');
//all-product
Route::get('/all-product' , 'ProductController@all_product');
//edit-product
Route::get('/edit-product/{product_id}' , 'ProductController@edit_product');
//update-product
Route::post('/update-product/{product_id}' , 'ProductController@update_product');
//Unactive-product
Route::get('/unactive-product/{product_id}' , 'ProductController@unactive_product');
//Active-product
Route::get('/active-product/{product_id}' , 'ProductController@active_product');

// Slider routes...

//add-slider
Route::get('/add-slider' , 'SliderController@index');
//save-slider
Route::post('/save-slider' , 'SliderController@save_slider');
//all-slider
Route::get('/all-slider' , 'SliderController@all_slider');
//Unactive-slider
Route::get('/unactive-slider/{slider_id}' , 'SliderController@unactive_slider');
//Active-slider
Route::get('/active-slider/{slider_id}' , 'SliderController@active_slider');
//delete-slider
Route::get('/delete-slider/{slider_id}' , 'SliderController@delete_slider');

// Product by Category..

Route::get('/product_by_category/{category_id}' , 'HomeController@show_product_by_category');
Route::get('/product_by_manufacture/{manufacture_id}' , 'HomeController@show_product_by_manufacture');
Route::get('/view-product/{product_id}' , 'HomeController@view_product');
Route::post('/add-to-cart' , 'CartController@add_to_cart');
Route::get('/show-cart' , 'CartController@show_cart');
Route::get('/delete-to-cart/{rowId}' , 'CartController@delete_cart');
Route::post('/update-cart' , 'CartController@update_cart');

// Checkout routes...

Route::get('/login-checkout' , 'CheckoutController@login_check');
Route::post('/customer-registration' , 'CheckoutController@customer_registration');
Route::get('/checkout' , 'CheckoutController@checkout');
Route::post('/save-shipping-details' , 'CheckoutController@save_shipping_details');
Route::post('/customer-login' , 'CheckoutController@customer_login');
Route::get('/customer-logout' , 'CheckoutController@customer_logout');
Route::get('/payment' , 'CheckoutController@payment');

Route::post('/order-place' , 'CheckoutController@order_place');

Route::get('/manage-order' , 'CheckoutController@manage_order');