<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><?php echo e(__('Pending Transactions')); ?></h5>
                    <div>
                        <a href="<?php echo e(route('inspection-transactions.index')); ?>" class="btn btn-secondary btn-sm me-2"><?php echo e(__('All Transactions')); ?></a>
                        <a href="<?php echo e(route('inspection-transactions.create')); ?>" class="btn btn-primary btn-sm"><?php echo e(__('Create New')); ?></a>
                    </div>
                </div>

                <div class="card-body">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('ID')); ?></th>
                                    <th><?php echo e(__('Barcode')); ?></th>
                                    <th><?php echo e(__('Tire Type')); ?></th>
                                    <th><?php echo e(__('Building Date')); ?></th>
                                    <th><?php echo e(__('Machine')); ?></th>
                                    <th><?php echo e(__('Created At')); ?></th>
                                    <th><?php echo e(__('Actions')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $pendingTransactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($transaction->id); ?></td>
                                        <td><?php echo e($transaction->barcode); ?></td>
                                        <td><?php echo e($transaction->tireType->name_en); ?></td>
                                        <td><?php echo e($transaction->building_date ? $transaction->building_date->format('Y-m-d') : 'N/A'); ?></td>
                                        <td><?php echo e($transaction->machine ?? 'N/A'); ?></td>
                                        <td><?php echo e($transaction->created_at->format('Y-m-d H:i')); ?></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="<?php echo e(route('inspection-transactions.show', $transaction)); ?>" class="btn btn-info btn-sm"><?php echo e(__('View')); ?></a>
                                                <a href="<?php echo e(route('inspection-transactions.edit', $transaction)); ?>" class="btn btn-warning btn-sm"><?php echo e(__('Edit')); ?></a>
                                                <form action="<?php echo e(route('inspection-transactions.destroy', $transaction)); ?>" method="POST" class="d-inline" onsubmit="return confirm('<?php echo e(__('Are you sure you want to delete this transaction?')); ?>')">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><?php echo e(__('Delete')); ?></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="7" class="text-center"><?php echo e(__('No pending transactions found.')); ?></td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\green-tire\resources\views/inspection-transactions/pending.blade.php ENDPATH**/ ?>