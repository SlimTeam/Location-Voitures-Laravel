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
    return view('welcome');
});

Route::get('offer/new', function () {
    return view('new-offer');
});
Route::get('demand/new', function () {
    return view('new-demand');
});
Route::get('demand/search/{id}', 'DemandController@searchForDemand');
Route::get('admin', 'AdminController@index');

Route::post('offer/create', 'OfferController@create');
Route::post('demand/create', 'DemandController@create');

Route::get('interval/new/{id}', function ($id) {
    return view('new-interval', array('id' =>  $id));
});
