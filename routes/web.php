<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/articles', 'ArticlesController@create');
Route::get('/users',function(){
    return 'Users!';
});

Route::get('users','UserController@getIndex');

Route::get('/foo', array('https', function(){
    return "happy!!!!";
}));

Route::get('hello',function(){
    return 'hello usrs!';
});
