<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/delete', function () {
    return view('destroy');
});
// Route::get('/', 'App\Http\Controllers\CustomerController@index')->middleware('auth');

Route::post('/login','App\Http\Controllers\UserController@login')->name('login');
Route::post('/register','App\Http\Controllers\UserController@register')->name('register');
Route::post('/logout', 'App\Http\Controllers\UserController@logout')->name('logout');

Route::get('/', 'App\Http\Controllers\CustomerController@index')->name('index');
Route::get('/create', 'App\Http\Controllers\CustomerController@create')->name('create');
Route::post('store/', 'App\Http\Controllers\CustomerController@store')->name('store');
Route::get('show/{customer}', 'App\Http\Controllers\CustomerController@show')->name('show');
Route::get('edit/{customer}', 'App\Http\Controllers\CustomerController@edit')->name('edit');
Route::put('edit/{customer}','App\Http\Controllers\CustomerController@update')->name('update');
Route::get('delete/{customer}','App\Http\Controllers\CustomerController@delete')->name('delete');
Route::delete('/{customer}','App\Http\Controllers\CustomerController@destroy')->name('destroy');
