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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\green-tire\resources\views/dashboard.blade.php ENDPATH**/ ?>