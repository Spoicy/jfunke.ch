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
    return view('webpage', [
        'title' => 'Homepage',
        'template' => 'pages/home',
        'nav' => 'hHome'
    ]);
});

Route::get('/about/', function () {
    return view('webpage', [
        'title' => 'About me',
        'template' => 'pages/about',
        'nav' => 'hAbout'
    ]);
});

Route::get('/portfolio/', function () {
    return view('webpage', [
        'title' => 'Portfolio',
        'template' => 'pages/portfolio',
        'nav' => 'hPortfolio'
    ]);
});