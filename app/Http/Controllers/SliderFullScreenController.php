<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Photo;
use App\Models\Video;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Storage;
use Nette\Utils\Image;

class SliderFullScreenController extends Controller
{
    public function editFullScreen()
    {
        $slides = Photo::all();
        $videos = Video::all();

        return view('editfullscreen', compact('slides', 'videos'));
    }

    public function updateSliderImage(Request $request)
    {
        // Проверка, является ли файл загруженным изображением
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Получение оригинального имени файла
            $originalName = $request->image->getClientOriginalName();

            // Сохранение изображения на сервере с уникальным именем
            $imagePath = $request->image->storeAs('public/images', $originalName);

            // Создание нового объекта изображения или обновление существующего
            $image = Image::firstOrNew(['id' => $request->input('image_id')]);
            $image->filename = $imagePath;
            $image->save();

            // Сохранение текстов вместе с изображением
            $image->text()->create([
                'text1' => $request->input('text1'),
                'text2' => $request->input('text2'),
                'text3' => $request->input('text3')
            ]);

            return redirect()->back()->with('success', 'Image successfully uploaded.');
        }

        return redirect()->back()->with('error', 'Error uploading image.');
    }


    public function showFullScreen()
    {
        $slides = session('slider_images', []);
        $videos = Video::all();

        return view('content', compact('slides', 'videos'));
    }

    public function deleteAllSliderPhotos()
    {
        // Получите все фотографии слайдера
        $slides = Photo::all();

        foreach ($slides as $slide) {
            Storage::delete($slide->filename);
            $slide->delete();
        }

        return redirect()->back()->with('success', 'All slider photos deleted.');
    }


    public function create()
    {
        $video = Video::latest()->first();
        $slides = Photo::all();
        return view('editvideoparallax', compact('video', 'video'));
    }

    public function storeVideo(Request $request)
    {
        // Проверка, является ли файл загруженным видео
        if ($request->hasFile('video') && $request->file('video')->isValid()) {
            // Получение оригинального имени файла
            $originalName = $request->video->getClientOriginalName();

            // Сохранение нового видео на сервере с уникальным именем
            $videoPath = $request->video->storeAs('public/style/video/videoparallax/', $originalName);

            // Удаление предыдущего видео, если оно существует
            $previousVideo = Video::latest()->first();
            if ($previousVideo) {
                Storage::delete($previousVideo->filename);
                $previousVideo->delete();
            }

            // Создание нового видео
            $newVideo = new Video();
            $newVideo->filename = $videoPath;
            $newVideo->source = $request->input('source');
            $newVideo->save();

            return redirect()->back()->with('success', 'Video successfully uploaded.');
        }

        return redirect()->back()->with('error', 'Error uploading video.');
    }
}
