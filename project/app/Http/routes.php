<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Anonymous navigation routes
Route::get('/',				'MainController@loadHomepage');
Route::get('/products',		'MainController@loadProducts');
Route::get('/products/{id}','MainController@loadProductDetails');

// Shopping cart routes
Route::get('/shoppingItems', ['middleware' => 'auth', 'uses' =>  'ShoppingCartController@listShoppingItems']);
Route::post('/shoppingItems', ['middleware' => 'auth', 'uses' =>  'ShoppingCartController@addShoppingItem']);
Route::patch('/shoppingItems', ['middleware' => 'auth', 'uses' =>  'ShoppingCartController@updateShoppingItem']);
Route::delete('/shoppingItems/{productId}', ['middleware' => 'auth', 'uses' =>  'ShoppingCartController@removeShoppingItem']);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

/*Route::post('/addShoppingItem', ['middleware' => 'auth', 'uses' =>  'ShoppingCartController@addsShoppingItem'])
//Route::get('/', 	['middleware' => 'auth', 'uses' =>  'MainController@loadHomepage']);
//Route::get('/test', 'MainController@loadProducersWithProducts');


Route::get('/productDetails', function () {
    return view('productDetails');
});

Route::get('/login', function () {
    return view('login');
});
*/
