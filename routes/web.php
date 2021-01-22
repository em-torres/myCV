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

Route::livewire('/', 'pages.home')->name('home');

Route::livewire('/login', 'auth.login')->name('login');
Route::livewire('/logout', 'auth.logout')->name('logout');
Route::livewire('/register', 'auth.register')->name('register');

Route::livewire('/admin', 'pages.admin.home')->name('admin');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
