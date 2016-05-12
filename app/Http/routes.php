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


Route::get('test', 'TestController@index');
Route::get('admin', function (){
    return redirect('admin/index');
});


Route::group(['middleware' => 'auth'], function() {
    Route::get('admin/createBlog', 'BlogController@showCreateBlog');
    Route::post('admin/createBlog', 'BlogController@create');
    Route::post('blog/show/{id}/replies', 'BlogController@createReply');
    Route::get('admin/index', 'BlogsController@showBlogList');
    Route::post ('admin/index', 'IndexController@showAdminOperate');
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





