<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderFullScreenController;

Route::get('/', function () {
    return view('content');
});

Route::get('/admin', function () {
    return view('starter_kit_blank_page');
});

Route::get('/editfullscreen', [SliderFullScreenController::class, 'editFullScreen'])->name('editfullscreen');
Route::post('/updatesliderimage', [SliderFullScreenController::class, 'updateSliderImage'])->name('admin.updateSliderImage');

