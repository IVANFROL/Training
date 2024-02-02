<div class="outer-wrap inverse-wrapper">
    <div id="video-wrap" class="video-wrap">
        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <video preload="metadata" playsinline autoplay muted loop>
                <source src="<?php echo e(asset('style/video/videoparallax/' . $video->filename)); ?>" type="video/mp4">
                <source src="<?php echo e(asset('style/video/videoparallax/' . $video->filename)); ?>" type="video/webm">
            </video>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="content-overlay container">
            <div class="headline text-center">
                <h2>Video Parallax</h2>
                <p class="lead">For better visualization of your company</p>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /var/www/html/resources/views/main/videoparallax.blade.php ENDPATH**/ ?>