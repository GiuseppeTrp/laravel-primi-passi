<?php

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

Route::get('/', function () {
    return view('HomePage');
    
})->name('HomePage');

Route::get('/FirstPage', function () {
    return view('FirstPage');
})->name('FirstPage');


Route::get('/SecondPage', function () {
    return view('SecondPage');
})->name('SecondPage');

Route::get('/ThirdPage', function () {
    return view('ThirdPage');
})->name('ThirdPage');

