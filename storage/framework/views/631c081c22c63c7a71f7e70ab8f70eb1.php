<?php $__env->startSection('content'); ?>
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Repair Transactions</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(session('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="d-flex justify-content-between mb-3">
                        <a href="<?php echo e(route('repair-transactions.pending')); ?>" class="btn btn-warning">Pending Repair Transactions</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('ID')); ?></th>
                                    <th><?php echo e(__('Inspection Barcode')); ?></th>
                                    <th><?php echo e(__('Tire Type')); ?></th>
                                    <th><?php echo e(__('Decision')); ?></th>
                                    <th><?php echo e(__('Repair Steps')); ?></th>
                                    <th><?php echo e(__('Created At')); ?></th>
                                    <th><?php echo e(__('Actions')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $repairTransactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($transaction->id); ?></td>
                                        <td><?php echo e($transaction->inspectionTransaction->barcode); ?></td>
                                        <td><?php echo e($transaction->inspectionTransaction->tireType->name_en); ?></td>
                                        <td>
                                            <?php if($transaction->decision === 'repair'): ?>
                                                <span class="badge bg-success"><?php echo e($transaction->decision); ?></span>
                                            <?php elseif($transaction->decision === 'scrap'): ?>
                                                <span class="badge bg-danger"><?php echo e($transaction->decision); ?></span>
                                            <?php else: ?>
                                                <span class="badge bg-warning"><?php echo e($transaction->decision); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($transaction->repairSteps->count()); ?></td>
                                        <td><?php echo e($transaction->created_at->format('Y-m-d')); ?></td>
                                        <td>
                                                <a href="<?php echo e(route('repair-transactions.show', $transaction)); ?>" class="btn btn-info btn-sm"><?php echo e(__('View')); ?></a>
                                                <a href="<?php echo e(route('repair-transactions.edit', $transaction)); ?>" class="btn btn-warning btn-sm"><?php echo e(__('Edit')); ?></a>
                                                <form action="<?php echo e(route('repair-transactions.destroy', $transaction)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this repair transaction?')">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><?php echo e(__('Delete')); ?></button>
                                                </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="7" class="text-center"><?php echo e(__('No repair transactions found.')); ?></td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\projects\green-tire\resources\views/repair-transactions/index.blade.php ENDPATH**/ ?>