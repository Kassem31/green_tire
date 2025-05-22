<?php $__env->startSection('content'); ?>
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Observation Details</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="form-group mb-4">
                        <label for="name_ar">Name (Arabic):</label>
                        <input type="text" class="form-control" id="name_ar" name="name_ar" value="<?php echo e($observation->name_ar); ?>"
                            readonly>
                    </div>

                    <div class="form-group mb-4">
                        <label for="name_en">Name (English):</label>
                        <input type="text" class="form-control" id="name_en" name="name_en" value="<?php echo e($observation->name_en); ?>"
                            readonly>
                    </div>

                    <div class="form-group mb-4">
                        <a href="<?php echo e(route('observations.index')); ?>" class="btn btn-secondary">Back to Observations</a>
                        <a href="<?php echo e(route('observations.edit', $observation->id)); ?>" class="btn btn-primary">Edit Observation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\projects\green-tire\resources\views/observations/show.blade.php ENDPATH**/ ?>