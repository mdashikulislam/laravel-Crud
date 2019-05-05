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

Route::get('/','HomeController@home');
Route::get('/single/{id}','HomeController@single');

Route::group(['prefix' => '/admin'],function (){
    Route::get('/login','AdminController@index')->name('admin.login');
    Route::post('/register','AdminController@callingRegister')->name('admin.register');
    Route::get('/register','AdminController@getRegister')->name('admin.register');
    Route::post('/dashboard','AdminController@dashboard')->name('admin.dashboard');
    Route::get('/dashboard','AdminController@callingDashboard')->name('admin.dashboard');
    Route::get('/addscholarship','AdminController@callingScholarship')->name('admin.add');
    Route::post('/addscholarship','AdminController@addScholarship')->name('admin.add');
    Route::get('/viewscholarship','AdminController@viewScholarship')->name('admin.view');
    Route::post('/regist','AdminInfoController@store')->name('admin.adduser');
});
