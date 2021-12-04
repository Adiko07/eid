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

Route::get('/', function () {
    return view('visitor/index');
})->name('home');

Route::get('/portfolio', function () {
    return view('visitor/portfolio');
})->name('realisation');

Route::get('/demarrer', function () {
    return view('visitor/starter');
})->name('starter');

Route::get('/création-site-internet', function () {
    return view('visitor/serviceWeb');
})->name('siteWeb');

Route::get('/création-d-application-mobile', function () {
    return view('visitor/serviceApp');
})->name('application');
