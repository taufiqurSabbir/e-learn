<?php

use App\Http\Controllers\Frontend;
use App\Http\Controllers\login_res;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(Frontend::class)->group(function (){
    Route::get('/','home')->name('home');
    Route::get('about','about')->name('about');
    Route::get('course','course')->name('course');
    Route::get('contact','contact')->name('contact');
});

Route::controller(login_res::class)->group(function (){
    Route::get('/login','login_index' )->name('login.index');
    Route::post('/login','login_submit' )->name('login.submit');
    Route::get('/registation','res_index' )->name('registation.index');
    Route::post('/registation','res_submit' )->name('registation.submit');
});



