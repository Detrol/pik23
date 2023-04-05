<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/tjanster', [HomeController::class, 'services'])->name('services');
Route::get('/vanliga-fragor', [HomeController::class, 'faq'])->name('faq');
Route::get('/miljovanligt', [HomeController::class, 'miljovanligt'])->name('miljovanligt');
Route::get('/garanti', [HomeController::class, 'guarantee'])->name('guarantee');
Route::get('/priser', [HomeController::class, 'prices'])->name('prices');

Route::get('/fonsterputs-hus', [HomeController::class, 'hus'])->name('hus');
Route::get('/fonsterputs-lagenhet', [HomeController::class, 'lagenhet'])->name('lagenhet');
Route::get('/fonsterputs-kontor', [HomeController::class, 'kontor'])->name('kontor');
Route::get('/fonsterputs-trapphus', [HomeController::class, 'trapphus'])->name('trapphus');
Route::get('/fonsterputs-skyltfonster', [HomeController::class, 'skyltfonster'])->name('skyltfonster');

Route::post('/form_mail', [HomeController::class, 'form_mail'])->name('form_mail');

Route::get('/generate_xml', [HomeController::class, 'xml'])->name('xml');
