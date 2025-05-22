<?php $__env->startSection('content'); ?>
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Repair Step Details</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="form-group mb-4">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" id="id" name="id" value="<?php echo e($repairStep->id); ?>"
                            readonly>
                    </div>

                    <div class="form-group mb-4">
                        <label for="name_ar">Name (Arabic):</label>
                        <input type="text" class="form-control" id="name_ar" name="name_ar" value="<?php echo e($repairStep->name_ar); ?>"
                            readonly>
                    </div>

                    <div class="form-group mb-4">
                        <label for="name_en">Name (English):</label>
                        <input type="text" class="form-control" id="name_en" name="name_en" value="<?php echo e($repairStep->name_en); ?>"
                            readonly>
                    </div>

                    <div class="form-group mb-4">
                        <label for="created_at">Created At:</label>
                        <input type="text" class="form-control" id="created_at" name="created_at"
                            value="<?php echo e($repairStep->created_at->format('Y-m-d H:i:s')); ?>" readonly>
                    </div>

                    <div class="form-group mb-4">
                        <label for="created_by">Created By:</label>
                        <input type="text" class="form-control" id="created_by" name="created_by"
                            value="<?php echo e($repairStep->creator ? $repairStep->creator->name : 'N/A'); ?>" readonly>
                    </div>

                    <div class="form-group mb-4">
                        <label for="updated_at">Updated At:</label>
                        <input type="text" class="form-control" id="updated_at" name="updated_at"
                            value="<?php echo e($repairStep->updated_at->format('Y-m-d H:i:s')); ?>" readonly>
                    </div>

                    <div class="form-group mb-4">
                        <label for="updated_by">Updated By:</label>
                        <input type="text" class="form-control" id="updated_by" name="updated_by"
                            value="<?php echo e($repairStep->updater ? $repairStep->updater->name : 'N/A'); ?>" readonly>
                    </div>

                    <div class="form-group mb-4">
                        <a href="<?php echo e(route('repair-steps.index')); ?>" class="btn btn-secondary">Back to Repair Steps</a>
                        <a href="<?php echo e(route('repair-steps.edit', $repairStep->id)); ?>" class="btn btn-primary">Edit Repair Step</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\projects\green-tire\resources\views/repair-steps/show.blade.php ENDPATH**/ ?>