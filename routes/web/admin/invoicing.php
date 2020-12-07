<?php

/**
 * Invoicing route
 * name:admin.invoicing
 * prefix:admin/invoicing
 */

Route::get('/', 'InvoicingController@index')->name('dashboard');
Route::get('/create', 'InvoicingController@create')->name('create');

Route::post('/store', 'InvoicingController@store')->name('store');



Route::prefix('settings')->namespace('Settings')->name('settings.')->group(function () {
    Route::get('/', 'SettingsController@index')->name('dashboard');
});
