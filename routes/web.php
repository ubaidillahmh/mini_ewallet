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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function(){

    Route::get('/person', 'UserController@index')->name('person');
    Route::post('/person/topup', 'UserController@topup')->name('person.topup');

    Route::get('/transfer', 'TransferController@index')->name('transfer');
    Route::post('/transfer/send', 'TransferController@transfer')->name('transfer.send');
});
