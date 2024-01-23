@extends('layouts.adminapp')

@section('content')
    @include('admin.container')

    <form action="{{ route('admin.updateSliderImage') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="image">Загрузить изображение:</label>
            <input type="file" name="image" id="image">
        </div>
        <div>
            <label for="caption">Описание слайда:</label>
            <input type="text" name="caption" id="caption">
        </div>
        <!--  Другие поля для ввода информации о слайде -->

        <button type="submit">Загрузить</button>
    </form>
@endsection


