<?php $__env->startSection('content'); ?>
    

    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-12">
                <div class="alert bg-light-primary">
                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile me-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                        <h5 class="alert-heading mb-0">Welcome, <?php echo e(Auth::user()->name); ?>!</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

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