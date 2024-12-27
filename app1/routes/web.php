<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [HomeController::class, 'about']);
// Route::get('/contact', [HomeController::class, 'contact']);


Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/about', 'about');
    Route::get('/contact', 'contact');
});


