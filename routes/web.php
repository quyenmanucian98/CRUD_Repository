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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('customers')->group(function () {
    Route::get('/list', 'CustomerController@listCustomer')->name('customers.list');
    Route::get('/formAdd', 'CustomerController@formAdd')->name('customers.formAdd');
    Route::post('/add', 'CustomerController@add')->name('customers.add');
    Route::get('/edit/{id}', 'CustomerController@edit')->name('customers.edit');
    Route::post('/update/{id}', 'CustomerController@update')->name('customers.update');
    Route::get('/delete/{id}', 'CustomerController@delete')->name('customers.delete');
});
