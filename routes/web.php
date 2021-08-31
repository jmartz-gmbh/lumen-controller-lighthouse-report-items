<?php

use Illuminate\Support\Facades\Route;

Route::get('/report/{hash}/type/{type}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\LighthouseReportItemsController@hashType'
]);
