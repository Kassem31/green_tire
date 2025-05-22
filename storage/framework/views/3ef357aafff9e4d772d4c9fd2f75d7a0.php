<?php if (Auth::check() && (Auth::user()->is_super_admin || app('laratrust')->hasPermission('delete_' . $name))) : ?>
    <form action="<?php echo e(route($route, $param)); ?>" method="POST" style="display:inline;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="button" class="btn btn-danger btn-sm delete-button"
            data-url="<?php echo e(route($route, $param)); ?>" title="Delete <?php echo e(ucfirst($name)); ?>">
            <i class="fas fa-trash"></i> <span>Delete</span>
        </button>
    </form>
<?php endif; // app('laratrust')->permission ?>
<?php /**PATH D:\projects\green-tire\resources\views/components/delete-button.blade.php ENDPATH**/ ?>