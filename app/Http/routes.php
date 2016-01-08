<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

	Route::get('/','Front@index');
	Route::get('/products','Front@products');
	Route::get('/products/details/{id}','Front@product_details');
	Route::get('/products/categories/{name}','Front@product_categories');
	Route::get('/products/brands/{name}/','Front@product_brands');
	Route::get('/blog','Front@blog');
	Route::get('/blog/post/{id}','Front@blog_post');
	Route::post('/contact-us','ContactController@SubmitContactUsForm');
	Route::get('/contact-us','Front@GetContactUsForm');	

// Authentication routes...
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');

	//cart routes

	Route::auth();

	Route::group(['middleware' => ['auth']], function () {

	Route::get('/cart', 'CartController@cart');
	Route::post('/cart', 'CartController@cart');
	//Route::post('/cart-remove-item', 'CartController@cart_remove_item');
	Route::get('/clear-cart', 'CartController@clear_cart');
	Route::get('/checkout','CartController@checkout');
	
});

});

