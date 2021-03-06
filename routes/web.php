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
    return view('welcome');
});

Route::get('/admin',function (){
    return view('admin.dashboard');
});

Route::get('/product',function (){
    return view('admin.adminPage.product');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('{anypath}','HomeController@index')->where( 'path', '([A-z\d-\/_.]+)? ');
