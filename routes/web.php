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
    return view('startPage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/postjob/show', 'JobsController@index')->name('postjob.show');

Route::get('/postjob/create', 'PostJobController@create')->name('postjob.create');
Route::get('/postjob/show', 'PostJobController@displayPost');
Route::post('/postjob/store', 'PostJobController@store')->name('postjob.store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/contact', 'ContactController@create')-> name('contact');

Route::post('/contact', 'ContactController@store')->name('contact.store');	

