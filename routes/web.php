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
    return view('layouts.layout');
})->name('home');

Route::get('/about', function () {
    return view('layouts.layout');
})->name('about');

Route::get('/contact', function () {
    return view('layouts.layout');
})->name('contact');

Route::get('/job', 'JobController@index')->name('job.index');

Route::post('/job', 'JobController@store')->name('job.store');

Route::get('/job/create', 'JobController@create')->name('job.create');

Route::get('/job/{job}', 'JobController@show')->name('job.show');

Route::get('/job/{job}/edit', 'JobController@edit')->name('job.edit');

Route::put('/job/{job}', 'JobController@update')->name('job.update');

Route::post('/filter', 'JobController@jobFilter')->name('filter');
