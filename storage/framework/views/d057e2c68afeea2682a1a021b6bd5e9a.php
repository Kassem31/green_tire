<?php if (Auth::check() && (Auth::user()->is_super_admin || app('laratrust')->hasPermission('show_' . $name))) : ?>
    <a href="<?php echo e(route($route, $param)); ?>" class="btn btn-info btn-sm" title="Show <?php echo e(ucfirst($name)); ?>">
        <i class="fas fa-eye"></i> <span>Show</span>
    </a>
<?php endif; // app('laratrust')->permission ?>
<?php /**PATH D:\projects\green-tire\resources\views/components/show-button.blade.php ENDPATH**/ ?>