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

Route::redirect('/', 'home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('messages','MessageController')->only(['create','store','show']);

Route::get('notifications', 'NotificationController@index')->name('notifications.index');
Route::put('notifications/{id}','NotificationController@read')->name('notifications.read');
Route::delete('notifications/{id}','NotificationController@destroy')->name('notifications.destroy');

