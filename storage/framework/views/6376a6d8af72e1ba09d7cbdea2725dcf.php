<?php if (true) : ?>
    <form action="<?php echo e(route($route, $param)); ?>" method="POST" style="display:inline;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="button" class="btn btn-danger btn-sm delete-button"
            data-url="<?php echo e(route($route, $param)); ?>">Delete</button>
    </form>
<?php endif; // app('laratrust')->permission ?>
<?php /**PATH E:\Projects\green-tire\resources\views/components/delete-button.blade.php ENDPATH**/ ?>