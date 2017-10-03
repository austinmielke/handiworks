<?php

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

Route::get('/', 'HomeController');

Route::get('/patterns', 'PatternsController');

// https://api.ravelry.com/patterns/search.json?designer=handiworks-ltd

Route::get('/about', 'AboutController');

Route::get('/contact', 'ContactController');
