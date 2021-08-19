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

Route::get('/', function () {
    return view('welcome');
});
//view profile forany user
Route::get('/profile/{user_id}','usersController@profile')->name('profile');
//update any users profile 
Route::PUT('/update-user-profile','usersController@updateprofile')->name('update-user');

//admin view users
Route::get('/users','usersController@users')->name('users');
//admin view artists
Route::get('/artists','usersController@artists')->name('artists');

//all arts except for the artist logged in
Route::get('/all-Arts','artsController@index')->name('all-Arts');
//my arts
Route::get('/arts/{user_id}','artscontroller@arts')->name('arts');
//artist can create an art
Route::get('createArt','artsController@create')->name('createArt');
//artist can upload art route
Route::post('/uploadart','artsController@store')->name('artupload');

//show single art
Route::get('/art/{id}','artsController@show')->name('show-art');


//art shopping cart
Route::post('/shopping-cart/{id}','shoppingcartController@cart')->name('add-to-cart');
// Route::get('/mycart','shoppingcartController@mycart')->name('my-cart');
//other cart
Route::get('/cart','shoppingcartController@my_cart')->name('mycart');
Route::post('/cart-remove/{id}','shoppingcartController@cart_remove')->name('cart-remove');

//payment via mpesa
Route::post('pay-via-mpesa-online','MpesaController@stk')->name('stk');

//auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
