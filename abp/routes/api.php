<?php

use  Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('auth/register', 'App\Http\Controllers\Auth\AuthController@register');
Route::post('auth/login', 'App\Http\Controllers\Auth\AuthController@login');

Route::group(['middleware'=> ['auth:sanctum']], function (){
    Route::get('auth/me', 'App\Http\Controllers\Auth\AuthController@me');
    Route::post('auth/logout', 'App\Http\Controllers\Auth\AuthController@logout');
});
