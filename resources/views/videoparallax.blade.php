<div class="outer-wrap inverse-wrapper">
    <div id="video-wrap" class="video-wrap">
        @foreach($videos as $video)
            <video preload="metadata" playsinline autoplay muted loop>
                <source src="{{ asset('style/video/videoparallax/' . $video->filename) }}" type="video/mp4">
            </video>
        @endforeach
        <div class="content-overlay container">
            <div class="headline text-center">
                <h2>Video Parallax</h2>
                <p class="lead">For better visualization of your company</p>
            </div>
        </div>
    </div>
</div>

