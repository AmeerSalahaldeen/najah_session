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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/redirect', 'SocialAuthController@redirect');

Route::get('/callback', 'SocialAuthController@callback');


Route::resource('checkpoints', 'CheckPointsController');

Route::resource('subscriptions', 'SubscriptionsController');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'acl'], 'is' => 'administrator'], function () {
	Route::get('users/{id}/enable', 'UsersController@enable');
	Route::get('users/{id}/disable', 'UsersController@disable');
    Route::resource('users', 'UsersController');
});
