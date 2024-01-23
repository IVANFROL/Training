@extends('layouts.adminapp')

@section('content')
    <form action="{{ route('updateSliderImage') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="tp-fullscreen">
            <ul>
                <li data-transition="fade">
                    <!-- Изображение слайда -->
                    <img src="style/images/art/slider-bg1.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />

                    <!-- Содержимое слайда -->
                    <div class="tp-caption large sfb text-center" data-x="center" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut">Quality. Flexibility. Customizability</div>
                    <div class="tp-caption medium sfb text-center" data-x="center" data-y="348" data-speed="900" data-start="1500" data-easing="Sine.easeOut">great solution for your business, portfolio, blog or any other purpose website</div>
                    <div class="tp-caption sfb" data-x="center" data-y="420" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100">
                        <input type="file" name="slider_image">
                        <button type="submit" class="btn btn-large btn-border">Update Image</button>
                    </div>
                </li>
                <!-- Добавьте аналогичный код для других слайдов -->
            </ul>

            <!-- Дополнительный код слайдера -->
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
        <!-- /.tp-fullscreen-container -->
    </form>
@endsection
