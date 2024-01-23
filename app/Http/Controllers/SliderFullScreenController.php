<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SliderFullScreenController extends Controller
{
    public function editFullScreen()
    {
        return view('editfullscreen');
    }

    public function updateSliderImage(Request $request)
    {
        // Получение загруженного изображения
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Сохранение изображения в нужной папке, например, в public/style/images/art/slider-bg1.jpg
            $image->move('style/images/art/', 'slider-bg1.jpg');
        }

        // Ваша логика для обновления других данных о слайде

        return redirect()->back();
    }

}
