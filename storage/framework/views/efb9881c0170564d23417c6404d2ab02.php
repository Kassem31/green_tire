<?php $__env->startSection('content'); ?>
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Edit User</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="form-group mb-4">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="<?php echo e($user->name); ?>">
                        </div>

                        <div class="form-group mb-4">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="<?php echo e($user->email); ?>">
                        </div>


                        <div class="form-group mb-4">
                            <label for="role">Role:</label>
                            <select class="form-control" id="role_select" name="role_id" class="form-control"
                                placeholder="Select a role..." autocomplete="off">
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($role->id); ?>"
                                        <?php echo e($user->roles->contains($role->id) ? 'selected' : ''); ?>>
                                        <?php echo e($role->name); ?>

                                    </option>
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

                        <div class="form-group mb-4">
                            <label for="is_active">Is Active:</label>
                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1"
                                <?php echo e($user->is_active ? 'checked' : ''); ?>>
                        </div>

                        <div class="form-group mb-4">
                            <a href="<?php echo e(route('users.index')); ?>" class="btn btn-secondary">Back to Users</a>
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\projects\green-tire\resources\views/users/edit.blade.php ENDPATH**/ ?>