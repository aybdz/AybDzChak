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
Auth::routes();

Route::get('/', 'Auth\LoginController@index')->name('welcome');
Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::middleware('web')->group(function () {

	Route::get('/dashboard', 'Controller@dashboard')->name('dashboard');
	Route::get('/home', 'HomeController@index')->name('home');

	// product route 
	Route::get('/products', 'ProductController@index')->name('products');
	Route::get('/AddProduct/{id}', 'ProductController@showIndex')->name('AddProduct');
	Route::post('/deleteProduct', 'ProductController@removeProduct')->name('deleteProduct');
	Route::post('/StoreProduct', 'ProductController@store')->name('StoreProduct');
	Route::post('/AddStock', 'ProductController@AddStock')->name('AddStock');
	// histoque 
	Route::get('/details/{id}', 'ProductController@showDetails')->name('details');

	// users route
	Route::get('/users', 'UserController@index')->name('users');
	Route::post('/addUser', 'UserController@addUser')->name('addUser');
	Route::post('/editUser', 'UserController@editUser')->name('editUser');
	Route::post('/deleteUser', 'UserController@removeUser')->name('deleteUser');
	Route::get('/user/{id}', 'UserController@showUser')->name('user');


	// profile route
	Route::get('/updateUser', 'UserController@updateUser');
	Route::get('/profile','UserController@profile')->name('profile');




	// clients route
	Route::get('/clients', 'ClientController@index')->name('clients');
	Route::post('/addClient', 'ClientController@addClient')->name('addClient');
	Route::post('/editClient', 'ClientController@editClient')->name('editClient');
	Route::post('/deleteClient', 'ClientController@removeClient')->name('deleteClient');
	Route::get('/client/{id}', 'ClientController@showClient')->name('Client');

	// Orders route
	Route::get('/orders', 'OrderController@index')->name('orders');
	Route::get('/order/{id}', 'OrderController@showOrder')->name('order');
	Route::get('/cancelOrder', 'OrderController@cancelOrder')->name('cancelOrder');
	Route::post('/confirmerCommande', 'OrderController@store');
	Route::post('/ClientCommande', 'OrderController@storeForClient');
	Route::post('/addCart', 'OrderController@addCart')->name('addCart');
	Route::post('/addCartStock', 'OrderController@addCartStock')->name('addCartStock');
	Route::post('/deleteItem', 'OrderController@deleteItem')->name('deleteItem');

	// credit 
	Route::post('/addCredit', 'CreditController@store');


	// statistics
	Route::get('/statistics','StatisticsController@ShowStatistics')->name('statistics');

	// statistics
});

