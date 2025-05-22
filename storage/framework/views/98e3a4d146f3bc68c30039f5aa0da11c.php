<?php $__env->startSection('content'); ?>
<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="page-title">
            <h3>Create Role</h3>
        </div>
        <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
            <div class="widget-content widget-content-area br-8">
                <form action="<?php echo e(route('roles.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group mb-4">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="display_name">Display Name</label>
                        <input type="text" name="display_name" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="permissions">Permissions</label>
                        <div class="mb-3">
                            <button type="button" class="btn btn-sm btn-success" onclick="checkAllPermissions()">
                                <i class="fas fa-check-square"></i> Check All
                            </button>
                            <button type="button" class="btn btn-sm btn-danger" onclick="clearAllPermissions()">
                                <i class="fas fa-square"></i> Clear All
                            </button>
                        </div>
                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model => $modelPermissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card mb-3 col-md-8">
                                <div class="card-header">
                                    <?php echo e(ucfirst($model)); ?> Permissions
                                </div>
                                <div class="card-body">
                                    <?php $__currentLoopData = $modelPermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-check">
                                            <input type="checkbox" name="permissions[]" value="<?php echo e($permission->id); ?>"
                                                class="form-check-input permission-checkbox">
                                            <label class="form-check-label"><?php echo e($permission->display_name); ?></label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        function checkAllPermissions() {
            const checkboxes = document.querySelectorAll('.permission-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = true;
            });
        }

        function clearAllPermissions() {
            const checkboxes = document.querySelectorAll('.permission-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\projects\green-tire\resources\views/roles/create.blade.php ENDPATH**/ ?>