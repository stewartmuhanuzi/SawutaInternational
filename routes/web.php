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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('echarts', 'ProductController@get_all_products_for_pie_chart');

// Route::get('/revenue', function () {
//     return view('revenue.index');
// });
// Route::get('/dash', function () {
//     return view('dashboard.index');
// });

// Route::get('/sale', function () {
//     return view('product.sale');
// });

Route::resource('/vendor', 'VendorController');
Route::resource('/product', 'ProductController');
Route::resource('/sale', 'SaleController');
Route::resource('/category', 'CategoryController');



Route::get('/', function () {
    return view('home.main');
});

Route::get('/s', function () {
    return view('form');
});

Route::get('/inventory', function () {
    return view('inventory.index');
});

Route::get('/reports', function () {
    return view('report.report-index');
});

