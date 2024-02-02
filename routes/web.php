<?php


use App\Http\Controllers\VideoController;
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
Route::get('/', [SliderFullScreenController::class, 'showFullScreen'])->name('fullscreen');
Route::delete('/admin/delete-slider/{id}', [SliderFullScreenController::class, 'deleteSliderImage'])->name('admin.deleteSliderImage');

Route::get('/editvideoparallax', [SliderFullScreenController::class, 'create'])->name('admin.video.create');
Route::post('/editvideoparallax', [SliderFullScreenController::class, 'store'])->name('admin.video.store');
Route::delete('/delete-uploaded-video', [SliderFullScreenController::class, 'deleteUploadedVideo'])->name('delete.uploaded.video');
Route::post('/admin/store-video', [SliderFullScreenController::class, 'storeVideo'])->name('admin.storeVideo');

Route::post('/admin/delete-all-slider-photos', 'SliderFullScreenController@deleteAllSliderPhotos')->name('admin.deleteAllSliderPhotos');
