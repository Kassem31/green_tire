<?php if (Auth::check() && (Auth::user()->is_super_admin || app('laratrust')->hasPermission('edit_' . $name))) : ?>
    <a href="<?php echo e(route($route, $param)); ?>" class="btn btn-warning btn-sm" title="Edit <?php echo e(ucfirst($name)); ?>">
        <i class="fas fa-edit"></i> <span>Edit</span>
    </a>
<?php endif; // app('laratrust')->permission ?>
<?php /**PATH D:\projects\green-tire\resources\views/components/edit-button.blade.php ENDPATH**/ ?>