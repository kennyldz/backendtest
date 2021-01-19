<?php

use Illuminate\Support\Facades\Route;


Route::get('/','App\Http\Controllers\HomePage@index')->name('HomePage');

Route::resource('person','App\Http\Controllers\PersonController');
Route::resource('address','App\Http\Controllers\AddressController');
