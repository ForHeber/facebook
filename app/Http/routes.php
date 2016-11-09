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
//Route::get('/redirect', 'SocialAuthController@redirect');
//Route::get('/callback', 'SocialAuthController@callback');

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
   {
       /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
       Route::get('/', function()
       {
           return View::make('hello');
       });

       Route::get('test',function(){
           return View::make('test');
       });
   });

Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('post', 'PostController');
