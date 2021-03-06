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

Auth::routes();


Route::get('/advertisements', 'AdvertisementController@index')->name('advertisements');
Route::get('/advertisements/create', 'AdvertisementController@create')->name('createAdvertisement');
Route::get('/advertisements/{id}', 'AdvertisementController@show')->name('showAdvertisement');
Route::post('/advertisements/store', 'AdvertisementController@store')->name('storeAdvertisement');
Route::post('/advertisements/deactive', 'AdvertisementController@deactive')->name('deactiveAdvertisement');
Route::post('/advertisements/active', 'AdvertisementController@active')->name('activeAdvertisement');

Route::get('/userPanel/advertisements', 'UserPanelController@showAdvertisements')->name('userPanelShowAdvertisements');

//dump(Route::getRoutes());
