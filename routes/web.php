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

Route::get('/', ['as' => 'landing', 'uses' => 'Landing\LandingController@index']);

Auth::routes();
Route::get('/logout', function() {
    Auth::logout();
    Session::flush();
    return Redirect::to('/');
});

Route::resource('microposts','MicroPostsController');
Route::resource('eMessages','MessagesController');

Route::group(['prefix' => 'dash', 'middleware'=> 'auth'], function(){

    Route::group(['prefix' => 'messages'], function () {
        Route::get('/', ['as' => 'messages.index', 'uses' =>'MessagesController@index']);
        Route::get('/edit/{id}', ['as' => 'messages.edit', 'uses' => 'MessagesController@edit']);
    });
    //TODO почитай как правильно роуты именовать где использовать get а где post

    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', ['as' => 'micropost.index', 'uses' =>'MicroPostsController@index']);
        Route::get('/create', ['as' => 'micropost.create', 'uses' => 'MicroPostsController@create']);
        Route::get('/edit/{id}', ['as' => 'micropost.edit', 'uses' => 'MicroPostsController@edit']);
        Route::post('/update', ['as' => 'micropost.update', 'uses' => 'MicroPostsController@update']);
        Route::post('/', ['as'=> 'micropost.store', 'uses' => 'MicroPostsController@store']);
        Route::get('/delete/{id}', ['as' => 'micropost.delete', 'uses' => 'MicroPostsController@destroy']);
    });

    Route::get('/home', 'HomeController@index')->name('home');
});



