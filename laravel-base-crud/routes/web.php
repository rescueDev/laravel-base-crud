<?php

use Illuminate\Support\Facades\Route;


//rotta che mostra tutte le periferiche
Route::get('/devices', 'DeviceController@index')->name('devices');

//rotta che mostra il singolo device
Route::get('/device/{id}', 'DeviceController@show')->name('device-show');
