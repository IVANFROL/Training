<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">


            <!-- CONTENT AREA -->

            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="widget widget-content-area br-4">
                        <div class="widget-one">

                            <h6>Это страница загрузки фотографий на Слайдер</h6>

                            <p class="mb-0 mt-3">Что разум человека может постигнуть и во что он может поверить, того он способен достичь.</p>

                        </div>
                    </div>
                </div>
            </div>
    <form action="<?php echo e(route('admin.storeVideo')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="video">Choose Video:</label>
            <input type="file" class="form-control" name="video" id="video">
        </div>
        <div class="form-group">
            <label for="source">Video Source:</label>
            <input type="text" class="form-control" name="source" id="source">
        </div>
        <button type="submit" class="btn btn-primary">Upload Video</button>
    </form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/editvideoparallax.blade.php ENDPATH**/ ?>