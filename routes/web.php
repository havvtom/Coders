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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/customers', 'CustomersController@index')->name('customers.index');
Route::get('/customers/create', 'CustomersController@create')->name('customers.create');
Route::post('/customers', 'CustomersController@store')->name('customers.store');
Route::get('/customers/{customer}', 'CustomersController@show')->name('customers.show');
Route::get('/customers/{customer}/edit', 'CustomersController@edit')->name('customers.edit');
Route::patch('/customers/{customer}', 'CustomersController@update')->name('customers.update');
Route::delete('/customers/{customer}', 'CustomersController@destroy')->name('customers.destroy');