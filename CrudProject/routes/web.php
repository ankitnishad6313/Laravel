<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group([ "controller" => UserController::class ], function(){
    Route::get('/', 'index')->name('home');
    Route::get('/register', 'create')->name('create');
    Route::post('/register', 'store')->name('store');
    Route::get('/user-show/{id}', 'show')->name('show');
    Route::get('/user-edit/{id}', 'edit')->name('edit');
    Route::post('/user-edit/{id}', 'update')->name('update');
    Route::delete('/user-destroy/{id}', 'destroy')->name('destroy');
    Route::get('/trash', 'trash')->name('trash');
    Route::get('/user-restore/{id}', 'restore')->name('restore');
    Route::delete('/user-force-destroy/{id}', 'forceDestroy')->name('force-destroy');
});
