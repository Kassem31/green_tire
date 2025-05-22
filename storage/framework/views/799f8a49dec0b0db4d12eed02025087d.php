<?php $__env->startSection('content'); ?>
    


    <!--  BEGIN CONTENT AREA  -->
        
    <!--  END CONTENT AREA  -->
    <!-- END MAIN CONTAINER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?php echo e(asset('src/plugins/src/apex/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('src/assets/js/dashboard/dash_1.js')); ?>"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\projects\green-tire\resources\views/dashboard.blade.php ENDPATH**/ ?>