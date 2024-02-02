<div class="tp-fullscreen-container revolution">
    <div class="tp-fullscreen">
        <ul>
            <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li data-transition="fade">
                    <img src="<?php echo e(asset('style/images/art/slider/' . $slide)); ?>" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption large sfr" data-x="30" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut">Free updates &amp; <br>
                        premium support</div>
                    <div class="tp-caption medium sfr" data-x="30" data-y="403" data-speed="900" data-start="1500" data-easing="Sine.easeOut">You will have access to all updates and free support</div>
                    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut" data-endspeed="100"><a href="#" class="btn btn-large">Purchase Now</a></div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>





































<?php /**PATH /home/user/Документы/Project/training/resources/views/fullscreen.blade.php ENDPATH**/ ?>