<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group([ "controller" => UserController::class ], function(){
    Route::get('/', 'index')->name('home');
    Route::get('/register', 'create')->name('create');
    Route::post('/register', 'store')->name('store');
});
