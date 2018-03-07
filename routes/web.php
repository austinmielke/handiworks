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

Route::get('/', 'PagesController@getHome');

Route::get('/patterns', 'PatternsController@list');

Route::get('/patterns/{id}', 'PatternsController@show');

Route::get('/about', 'PagesController@getAbout');

Route::get('/contact', 'PagesController@getContact');

Route::get('/contact/design', 'PagesController@getContactDesign');

Route::get('/contact/teaching', 'PagesController@getContactTeaching');

Route::get('/contact/sample', 'PagesController@getContactSample');

Route::get('/contact/custom', 'PagesController@getContactCustom');

Route::get('/contact/editing', 'PagesController@getContactEditing');

Route::get('/contact/repair', 'PagesController@getContactRepair');

Route::post('/contact', 'PagesController@postContact');
