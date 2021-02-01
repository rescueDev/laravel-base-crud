<?php

use Illuminate\Support\Facades\Route;


//rotta che mostra tutte le periferiche
Route::get('/devices', 'DeviceController@index')->name('devices');

//rotta che mostra il singolo device
Route::get('/device/{id}', 'DeviceController@show')->name('device-show');


//creo rotta per gestire creazione del device
Route::get('/new/device', 'DeviceController@create')->name('new-device');

//creo rotta con metodo post del form
Route::post('/new/device/store', 'DeviceController@store')->name('device-store');
