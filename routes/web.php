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

Route::get('/', function () {
    return view('home', [
        'page' => 'home',
        'title' => 'Home'
    ]);
});

Route::get('/patterns', function () {
    $page = 'patterns';
    return view('patterns', [
        'page' => 'patterns',
        'title' => 'Patterns'
    ]);
});

Route::get('/about', function () {
    $page = 'about';
    return view('about', [
        'page' => 'about',
        'title' => 'About the Artist'
    ]);
});

Route::get('/contact', function () {
    $page = 'contact';
    return view('contact', [
        'page' => 'contact',
        'title' => 'Contact the Artist'
    ]);
});
