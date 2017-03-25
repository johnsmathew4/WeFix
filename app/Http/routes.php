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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/profile', 'RoleController@index');








Route::group(['middleware'=>'wefixer'] ,function() {


    Route::get('/wefixer', function () {

        return view('wefixer.index');
    });

});
















Route::get('/user'  ,function(){
return view('user.index');
   

});

Route::get('/user/{pro}',['as' => 'user.profession', 'uses' => 'ProController@show']);

Route::get('/user/profile/{id}',['as' => 'user.profile', 'uses' => 'ProController@profile']);

Route::post('/user/profile/{id}',['as' => 'user.feeding', 'uses' => 'ProController@store']);
Route::patch('/user/profile/{id}',['as' => 'user.feed.edit', 'uses' => 'ProController@edit']);
Route::delete('/user/profile/{id}',['as' => 'user.feed.delete', 'uses' => 'ProController@delete']);

Route::post('/user/profile/{id}',['as' => 'user.feeding', 'uses' => 'ProController@store']);
Route::post('/user/order/{id}',['as' => 'user.pay', 'uses' => 'ProController@pay']);

Route::get('/users/order',['as' => 'user.order', 'uses' => 'ProController@order']);
















Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@showLoginForm']);
Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@login']);
Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@logout']);

// Registration Routes...
Route::get('register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@showRegistrationForm']);
Route::post('register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@register']);

// Password Reset Routes...
Route::get('password/reset/{token?}', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@showResetForm']);
Route::post('password/email', ['as' => 'auth.password.email', 'uses' => 'Auth\PasswordController@sendResetLinkEmail']);
Route::post('password/reset', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@reset']);





