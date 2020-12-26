<?php

/**
 * prefix: admin/company
 * namepsace: Admin\Company
 */

 Route::prefix('data')->namespace('Data')->group(function () {
     Route::get('/details', 'CompanyDetailsController@details');
 });
