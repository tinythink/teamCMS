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

Route::get('/', function () {
    return view('welcome');
})->name('root');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::any('/common/prompt', 'CommonController@prompt')->name('prompt');
Route::any('/common/uploadImg', 'CommonController@uploadImg');
/**
 * Home前端用户界面相关的路由
 */
Route::group(['namespace' => 'Admin'], function () {

    Route::get('/test', 'registerController@register');
    Route::any('admin/login', 'LoginController@login');
    Route::any('admin/doLogin', 'LoginController@doLogin');
    Route::any('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('pages', 'PageController');
    Route::resource('open', 'OpenController');
    Route::any('link/{platform}', 'DashboardController@linkPlatform');
});


Route::get('/openlist', 'Api\OpenController@index');