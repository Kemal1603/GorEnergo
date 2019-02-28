<?php

/*Admin Routes*/
 Auth::routes();
Route::get('/admin',                    'AdminController@index')    ->name('admin')->middleware('admin');
Route::get('/admin/services',           'AdminController@services') ->name('admin')->middleware('admin');
Route::get('/admin/products',           'AdminController@products') ->name('admin')->middleware('admin');


/*Page Routes*/
Route::get('/',                         'PagesController@index');


/*Product Routes*/
Route::get ('/products',                'ProductsController@index');
Route::get ('/product/create',          'ProductsController@create')->middleware('admin');
Route::post('/product',                 'ProductsController@store') ->middleware('admin');
Route::get ('/product/{product}/edit',  'ProductsController@edit')  ->middleware('admin');
Route::post('/product/{product}',       'ProductsController@update')->middleware('admin');
Route::get ('/product/{product}/delete','ProductsController@delete')->middleware('admin');
Route::get ('/product/{slug}',          'ProductsController@show')  ->middleware('admin');

/*Service Routes*/
Route::get ('/services',                'ServicesController@index');
Route::get ('/service/create',          'ServicesController@create')->middleware('admin');
Route::post('/service',                 'ServicesController@store') ->middleware('admin');
Route::get ('/service/{service}/edit',  'ServicesController@edit')  ->middleware('admin');
Route::post('/service/{service}',       'ServicesController@update')->middleware('admin');
Route::get ('/service/{service}/delete','ServicesController@delete')->middleware('admin');
Route::get ('/service/{slug}',          'ServicesController@show')  ->middleware('admin');