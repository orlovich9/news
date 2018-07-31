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

Route::get('/', 'MainController@show')->name('main');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('success', '\App\Http\Controllers\Auth\RegisterController@success')->middleware('success');
Route::get('profile/{id}', 'UserProfile@show')->name('profile')->middleware('is_current_user');
Route::post('profile/{id}', 'UserProfile@update')->middleware('throttle:5');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'MainController@show')->middleware('is_auth')->name('admin.main');
    Route::post('login', 'Auth\LoginController@login')->name('admin.login');
    Route::get('lock', 'MainController@showLock')->name('admin.lock')->middleware('lock');
    Route::get('menu', 'MenuController@show')->name('admin.menu');
    Route::post('menu', 'MenuController@createOrUpdateMenu');
    Route::post('menu-delete', 'MenuController@deleteMenuItem');
});

Auth::routes();
