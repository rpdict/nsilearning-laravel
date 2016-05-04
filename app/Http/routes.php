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



Route::get('/', function(){
    return view('welcome');
});

Route::get('blog', 'BlogsController@index');
Route::get('/blog/show/{id}', 'BlogsController@showPost');





Route::group(['middleware' => 'auth','guest'], function() {
    Route::get('blog/create', 'BlogController@showCreateBlog');
    Route::post('/blog/create', 'BlogController@create');
    Route::post('/blog/show/{slug}/replies', 'BlogController@createReply');
});



Route::get('user/{id}', function ($id) {
    return view('greeting', ['name' => $id]);
});


Route::get('aaa', 'UsersController@store');


Route::get('/about', 'UsersController@About');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');



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





