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

Auth::routes();

Route::get('/', function () {
    return redirect(url('/chat'));
});

Route::group(['middleware' => ['auth']], function () {
    //Route::get('/home', 'HomeController@index')->name('home');

    /*
    |--------------------------------------------------------------------------
    | Users Routes
    |--------------------------------------------------------------------------
    */
    Route::resource('users', 'UserController');

    /*
    |--------------------------------------------------------------------------
    | Roles Routes
    |--------------------------------------------------------------------------
    */
    Route::resource('roles', 'RoleController');

    /*
    |--------------------------------------------------------------------------
    | Chat Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/chat', 'ChatController@index');

    /*
    |--------------------------------------------------------------------------
    | Departaments Routes
    |--------------------------------------------------------------------------
    */
    Route::resource('/departaments', 'DepartamentController');

    /*
    |--------------------------------------------------------------------------
    | Channels Routes
    |--------------------------------------------------------------------------
    */
    Route::get('channels', 'ChannelController@index')->name('channels.index');
    Route::get('channels/create', 'ChannelController@create');
    Route::post('/channels/store', 'ChannelController@store')->name('channels.store');

    /*
    |--------------------------------------------------------------------------
    | Reports Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/reports', 'ReportController@index');
});
