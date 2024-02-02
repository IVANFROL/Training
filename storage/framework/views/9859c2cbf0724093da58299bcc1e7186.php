<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <form action="<?php echo e(route('admin.updateSliderImage')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div>
            <label for="image">Загрузить изображение:</label>
            <input type="file" name="image" id="image">
        </div>
        <div>
            <label for="caption">Описание слайда:</label>
            <input type="text" name="caption" id="caption">
        </div>
        <!--  Другие поля для ввода информации о слайде -->

        <button type="submit" name="time" class="mb-4 btn btn-primary">Загрузить</button>
    </form>

    <h3>Загруженные фотографии:</h3>
    <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <img src="<?php echo e(asset('style/images/art/slider/' . $slide->filename)); ?>" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            <form action="<?php echo e(route('admin.deleteSliderImage', $slide->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="delete-button">Удалить</button>
            </form>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>






































<?php echo $__env->make('layouts.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user/Документы/Project/training/resources/views/editfullscreen.blade.php ENDPATH**/ ?>