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
    return view('index');
});
Route::get('/footer', function () { 
    return view('includes/footer');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/theme', function () {
    return view('tests/theme');
});

Route::get('/services', function () {
    return view('services');
});


Route::get('/postjob/show', 'JobsController@index')->name('postjob.show');
Route::get('/postjob/create', 'PostJobController@create')->name('postjob.create');
Route::get('/postjob/show', 'PostJobController@show')->name('postjob.show');
Route::post('/postjob/store', 'PostJobController@store')->name('postjob.store');

Route::get('/postjob/{job}', 'PostJobController@viewjob');
Route::get('/postjob/{job}/edit', 'PostJobController@edit');
Route::put('/postjob/{job}', 'PostJobController@update');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Dashboard Routes
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


Route::get('/contact', 'ContactController@create')-> name('contact');
Route::post('/contact', 'ContactController@store')->name('contact.store');	


Route::post('get-states-options', 'LocationController@getStatesOption')->name('get_state_option_by_country');



//Categories routes
Route::get('/cat',['as'=>'dashboard_categories', 'uses'=>'CategoriesController@index']);
Route::post('/cat/store',['uses'=>'CategoriesController@store'])->name('categories.store');

Route::get('/profile', 'ProfileController@index')->name('profile');
