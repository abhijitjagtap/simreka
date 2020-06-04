<?php

use Illuminate\Support\Facades\Route;

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
   // return view('welcome');
   return redirect()->route('login');
});

Auth::routes();

Route::get('/admin', 'Admin\AdminController@index')->name('admin')->middleware('admin');
Route::get('/simreka', 'Simreka\SimrekaController@index')->name('simreka')->middleware('simreka');
Route::get('/user', 'User\UserController@index')->name('user')->middleware('user');
Route::get('/setting', 'User\SettingController@index')->name('setting')->middleware('user');
Route::get('/admin/setting', 'Admin\SettingController@index')->name('adminsetting')->middleware('admin');





