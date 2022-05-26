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
    return view('yes.index');
})->name('index');

Route::get('/terminus/presentation', function () {
    return view('terminus.presentation');
})->name('terminus.presentation');

Route::get('/contact', function() {
    return view('yes.contact');
})->name('contact');


Route::post('/message', 'VisiteurController@create')->name('message.a.yes');
Route::post('/new-letter', 'VisiteurController@new_letter')->name('new-letter');
