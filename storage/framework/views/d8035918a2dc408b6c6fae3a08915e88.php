<?php $__env->startSection('content'); ?>
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Create User</h3>

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if(session('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('profile.storeUser')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group mb-4">
                        <label for="name">Name</label>
                        <input id="name" type="text" name="name" placeholder="Enter Name" class="form-control"
                            required="">
                    </div>

                    <div class="form-group mb-4">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"
                            value="<?php echo e(old('email')); ?>">
                    </div>

                    <div class="form-group mb-4">
                        <label for="is_active">Is Active:</label>
                        <div class="responsive-checkbox-wrapper">
                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1"
                                <?php echo e(old('is_active') ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="is_active">User account is active</label>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="role">Role:</label>
                        <select class="form-control" id="role_select" name="role_id" class="form-control"
                            placeholder="Select a role..." autocomplete="off">
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['role_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="d-flex flex-column flex-md-row gap-2 mt-4">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="<?php echo e(route('users.index')); ?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('src/plugins/src/tomSelect/tom-select.base.js')); ?>"></script>
    <script src="<?php echo e(asset('src/plugins/src/tomSelect/custom-tom-select.js')); ?>"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new TomSelect("#category-select", {
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                },
            });
        });
    </script>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\projects\green-tire\resources\views/users/create.blade.php ENDPATH**/ ?>