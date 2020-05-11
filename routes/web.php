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

Route::group(['prefix'=>'ppdb'],function(){
    Route::view('/data1','ppdb.data1');
    Route::post('/data1','PendaftaranController@data1');
    Route::view('/data2','ppdb.data2');
    Route::post('/data2','PendaftaranController@data2');
    Route::view('/data3','ppdb.data3');
    Route::post('/data3','PendaftaranController@data3');
    Route::view('/data4','ppdb.data4');
    Route::post('/data4','PendaftaranController@data4');
    Route::view('/rapot','ppdb.rapot');
    Route::post('/rapot','PendaftaranController@rapot');
    Route::get('/laporan','PendaftaranController@laporan');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
