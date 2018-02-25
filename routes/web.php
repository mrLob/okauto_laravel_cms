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

Route::group(['middleware'=> 'auth'], function(){
    Route::get('/dash/messages', 'MessagesController@index')->name('messages');
    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', ['as' => 'micropost.index', 'uses' =>'MicroPostsController@index']);
        Route::get('/create', ['as' => 'micropost.create', 'uses' => 'MicroPostsController@create']);
        Route::get('/update', ['as' => 'micropost.update', 'uses' => 'MicroPostsController@update']);
        Route::post('/', ['as'=> 'micropost.store', 'uses' => 'MicroPostsController@store']);
    });
    Route::get('/dash/home', 'HomeController@index')->name('home');
});

