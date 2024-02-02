<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Forms File Upload</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    

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
        <form action="<?php echo e(route('admin.updateSliderImage')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div id="content" class="main-content">
                <div class="container">
                    <div class="container">

                        <div id="navSection" data-spy="affix" class="nav  sidenav">
                            <div class="sidenav-content">
                                <a href="#fuSingleFile" class="active nav-link">Single File</a>
                                <a href="#fuMultipleFile" class="nav-link">Multiple File</a>
                            </div>
                        </div>

                        <div class="row layout-top-spacing">

                            <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Single File Upload</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" name="image" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>

                                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                                    <script src="plugins/file-upload/file-upload-with-preview.min.js"></script>
                                    <script>
                                        $(document).ready(function() {
                                            // Инициализация плагина для загрузки файлов с предварительным просмотром
                                            var firstUpload = new FileUploadWithPreview('myFirstImage');

                                            // Обработка события загрузки файла
                                            $('form').on('submit', function(e) {
                                                e.preventDefault();

                                                // Отправка формы
                                                $.ajax({
                                                    url: $(this).attr('action'),
                                                    method: 'POST',
                                                    data: new FormData(this),
                                                    processData: false,
                                                    contentType: false,
                                                    success: function(response) {
                                                        console.log(response);
                                                        // Дополнительная логика после успешной загрузки
                                                    },
                                                    error: function(error) {
                                                        console.log(error);
                                                        // Дополнительная логика при ошибке загрузки
                                                    }
                                                });
                                            });
                                        });
                                    </script>

                                    <form action="<?php echo e(route('admin.updateSliderImage')); ?>" method="POST" enctype="multipart/form-data">
                            <button type="submit" name="time" class="mb-4 btn btn-primary">Загрузить</button>
        </form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2>Slider Actions</h2>
                                            <form action="<?php echo e(route('admin.deleteAllSliderPhotos')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete all slider photos?')">Delete All Photos</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="text-sections">
                                    <div class="text-section">
                                        <label>Text 1</label>
                                        <textarea name="text1" class="form-control"></textarea>
                                    </div>
                                    <div class="text-section">
                                        <label>Text 2</label>
                                        <textarea name="text2" class="form-control"></textarea>
                                    </div>
                                    <div class="text-section">
                                        <label>Text 3</label>
                                        <textarea name="text3" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/editfullscreen.blade.php ENDPATH**/ ?>