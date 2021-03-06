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

/*Main page*/
Route::get('/', 'MainController@show')->name('main');

/*Logout*/
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

/*Success page after registration*/
Route::get('success', '\App\Http\Controllers\Auth\RegisterController@success')->middleware('success');

/*Profile page*/
Route::get('profile/{id}', 'UserProfile@show')->name('profile');
Route::post('profile', 'UserProfile@update')->middleware('throttle:5')->name('update_profile');

/*Admin folder*/
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    /*Admin login page*/
    Route::get('login', 'Auth\LoginController@login')->name('admin.login');
    Route::post('login', 'Auth\LoginController@login');

    Route::group(['middleware' => 'is_admin'], function() {

        /*Admin folder main page*/
        Route::get('/', 'MainController@show')->name('admin.main');

        /*Admin folder lockscreen*/
        Route::get('lock', 'MainController@showLock')->name('admin.lock')->middleware('lock');

        /*Admin folder menu creation page*/
        Route::get('menu', 'MenuController@show')->name('admin.menu');
        Route::post('menu', 'MenuController@createOrUpdateMenu');
        Route::post('menu-delete', 'MenuController@deleteMenuItem');

        /*Admin folder users page*/
        Route::get('users', 'UsersController@show')->name('admin.users');
        Route::post('users', 'UsersController@createOrUpdateUsers');
        Route::post('users-delete', 'UsersController@delete');
    });
});

Auth::routes();
