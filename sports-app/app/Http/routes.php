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

//Route::get('/', 'MainPageController@index');

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
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'MainPageController@index');
    Route::get('/activity', 'ActivityController@index');
    Route::get('/account', 'AccountController@index');
    Route::post('/account', 'AccountController@editAccount');
    Route::get('/exercise', 'ExerciseController@index');
    Route::get('/person', 'PersonController@index');
    Route::get('/friend', 'FriendController@index');
});
