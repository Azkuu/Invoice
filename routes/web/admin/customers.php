<?php

/**
 * prefix: admin/customer
 * naemspace: Admin\Customers
 * name: admin.customers.
 */
Route::get('/', 'CustomersController@index')->name('dashboard');
 Route::get('/create', 'CustomersController@create')->name('create');
 Route::post('/store', 'CustomersController@store')->name('store');
