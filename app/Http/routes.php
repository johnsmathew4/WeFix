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


use App\Location;

Route::get('/', function () {
    $location=Location::all();
    return view('welcome')->with('location', $location);
});



Route::get('/profile', 'RoleController@index');

Route::get('/count/{id}', 'ProController@rater');




Route::get('/date',['as' => 'date', 'uses' => 'ProController@date']);





Route::group(['middleware'=>'auth'] ,function()
  {


    Route::get('/profile', 'RoleController@index');

    Route::group(['middleware'=>'wefixer'] ,function() {
        
        


        Route::get('/wefixer','WefixController@index');

        Route::get('/wefixer/profile/{id}',['as' => 'wefixer.profile', 'uses' => 'WefixController@profile']);
        Route::get('/wefix/edit',['as' => 'wefix.edit', 'uses' => 'WefixController@edit_profile']);

        Route::post('/wefixer/edited',['as' => 'wefix.edited', 'uses' => 'WefixController@edited_profile']);
        Route::post('/wefixer/accept/{id}',['as' => 'accept', 'uses' => 'WefixController@accept']);
        Route::post('/wefixer/reject/{id}',['as' => 'reject', 'uses' => 'WefixController@reject']);
        Route::post('/wefixer/active/{id}',['as' => 'active', 'uses' => 'WefixController@active']);

    });

      Route::get('/wefix/inactive',function()
      {
          if(Auth::user()->role_id==0 && Auth::user()->isactive==0)

          return view('wefixer.inactive');

          return redirect('/');
      } );

      Route::group(['middleware'=>'user'] ,function() {


          Route::get('/user'  ,function(){
              return view('user.index');


          });

          Route::get('/user/{pro}',['as' => 'user.profession', 'uses' => 'ProController@show']);

          Route::get('/user/profile/{id}',['as' => 'user.profile', 'uses' => 'ProController@profile']);

          Route::post('/user/profile/{id}',['as' => 'user.feeding', 'uses' => 'ProController@store']);
          Route::patch('/user/profile/{id}',['as' => 'user.feed.edit', 'uses' => 'ProController@edit']);
          Route::delete('/user/profile/{id}',['as' => 'user.feed.delete', 'uses' => 'ProController@delete']);

          Route::post('/user/profile/{id}',['as' => 'user.feeding', 'uses' => 'ProController@store']);
          Route::post('/user/order/{id}/{date}',['as' => 'user.pay', 'uses' => 'ProController@pay']);

          Route::get('/users/order',['as' => 'user.order', 'uses' => 'ProController@order']);

          Route::get('/users/edit',['as' => 'user.edit', 'uses' => 'ProController@edit_profile']);

          Route::post('/users/edited',['as' => 'user.edited', 'uses' => 'ProController@edited_profile']);

          Route::post('/users/finish/{id}',['as' => 'finish', 'uses' => 'ProController@finish']);

      });




      Route::group(['middleware'=>'admin'] ,function() {



          Route::get('/admin',['as' => 'admin', 'uses' => 'Admin@index']);

          Route::get('/admin/location',['as' => 'admin.location', 'uses' => 'Admin@location']);


          Route::post('/admin/location',['as' => 'admin.add', 'uses' => 'Admin@store']);
          Route::delete('/admin/location/{id}',['as' => 'admin.location.delete', 'uses' => 'Admin@location_delete']);

          Route::get('/admin/inactive',['as' => 'admin.inactive', 'uses' => 'Admin@inactive']);

          Route::delete('/admin/inactive/{id}',['as' => 'admin.wefixer.delete', 'uses' => 'Admin@wefixer_delete']);
          Route::post('/admin/inactive/{id}',['as' => 'admin.wefixer.active', 'uses' => 'Admin@wefixer_active']);

          Route::get('/admin/active',['as' => 'admin.active', 'uses' => 'Admin@active']);

          Route::post('/admin/active/{id}',['as' => 'admin.wefixer.inactive', 'uses' => 'Admin@wefixer_inactive']);

          Route::get('/admin/user',['as' => 'admin.user', 'uses' => 'Admin@user']);


      });







});











Route::get('registeruser', function()
{
    $location=Location::all();
    return view('auth.registeruser')->with('location', $location);

}
    );



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





