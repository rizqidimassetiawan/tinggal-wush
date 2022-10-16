<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PanelController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('welcome');
});

Route::middleware('guest')->group(function(){
   Route::controller(AuthController::class)->group(function(){
        Route::get('/login','index')->name('login');
        Route::post('/login/authentication','authentication')->name('auth');
   }); 
});

Route::middleware('auth')->group(function(){
    Route::controller(PanelController::class)->group(function(){
        Route::get('/dashboard','dashboard')->name('dashboard')->middleware('levels:super');
        Route::get('/default','default')->name('default');
        Route::post('/logout',[AuthController::class,'logout'])->name('logout');
    });
    Route::post('/logout',[AuthController::class,'logout']);
});