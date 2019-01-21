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


Auth::routes();
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/', 'PagesController@index');




/*Page Routes*/
Route::get('/', 'PagesController@index');





/*Product Routes*/
Route::get('/product', 'ProductsController@show');

Route::get('/products/products', 'ProductsController@index')->middleware('admin');

Route::get('/products/create', 'ProductsController@create')->middleware('admin');

Route::post('/products', 'ProductsController@store')->middleware('admin');

Route::get('/products/{product_id}/edit', 'ProductsController@edit')->middleware('admin');

Route::post('/products/{edited_product}', 'ProductsController@update')->middleware('admin');

Route::get('/products/{product_id}/delete', 'ProductsController@delete')->middleware('admin');

Route::get('/products/{slug}/{product}/about', 'ProductsController@about')->middleware('admin');





/*Service Routes*/

Route::get('/service', 'ServicesController@show');

Route::get('/services/services', 'ServicesController@index')->middleware('admin');

Route::get('/services/create', 'ServicesController@create')->middleware('admin');

Route::post('/services', 'ServicesController@store')->middleware('admin');

Route::get('/services/{service_id}/edit', 'ServicesController@edit')->middleware('admin');

Route::post('/services/{edited_service}', 'ServicesController@update')->middleware('admin');

Route::get('/services/{service_id}/delete', 'ServicesController@delete')->middleware('admin');

Route::get('/services/{slug}/{service}/about', 'ServicesController@about')->middleware('admin');