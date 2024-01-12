<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('content');
});
Route::get('/admin', function () {
    return view('starter_kit_blank_page');
});
