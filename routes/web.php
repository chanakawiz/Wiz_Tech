<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PageController;
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


    Route::get('/', [PageController::class, 'homepage'])->name('home-page');
    Route::post('/contact-us', [ContactUsController::class, 'contactusPost'])->name('home-page');
