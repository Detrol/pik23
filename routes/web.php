<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome')->name('home');
Route::view('/tjanster', 'services')->name('services');
Route::view('/vanliga-fragor', 'faq')->name('faq');
Route::view('/miljovanligt', 'miljovanligt')->name('miljovanligt');
Route::view('/garanti', 'guarantee')->name('guarantee');
