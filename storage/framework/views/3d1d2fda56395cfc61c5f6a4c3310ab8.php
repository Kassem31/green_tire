<?php $__env->startSection('content'); ?>
<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="page-title">
            <h3>Pending Repair Transactions</h3>
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
                    <a href="<?php echo e(route('repair-transactions.index')); ?>" class="btn btn-secondary">All Repair
                        Transactions</a>
                </div>

                <!-- Filter Form -->
                <form method="GET" action="<?php echo e(route('repair-transactions.pending')); ?>" class="mb-4">
                    <div class="row align-items-end mb-2">

                        <div class="col-md-3 mb-2">
                            <label for="filter-barcode" class="form-label">Inspection Barcode</label>
                            <input type="text" id="filter-barcode" name="barcode" class="form-control"
                                placeholder="Filter by Barcode" value="<?php echo e(request('barcode')); ?>">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="filter-tire-type" class="form-label">Tire Type</label>
                            <select id="filter-tire-type" name="tire_type_id" class="form-control">
                                <option value="">All Tire Types</option>
                                <?php $__currentLoopData = $tireTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tireType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tireType->id); ?>" <?php echo e(request('tire_type_id') == $tireType->id ? 'selected' : ''); ?>>
                                        <?php echo e($tireType->name_en); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    
                        <div class="col-md-3 mb-2">
                            <label for="filter-date-from" class="form-label">Date From</label>
                            <input type="date" id="filter-date-from" name="date_from" class="form-control"
                                value="<?php echo e(request('date_from')); ?>">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="filter-date-to" class="form-label">Date To</label>
                            <input type="date" id="filter-date-to" name="date_to" class="form-control"
                                value="<?php echo e(request('date_to')); ?>">
                        </div>
                        <div class="col-md-2 mb-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-filter"></i> Filter
                            </button>
                            <a href="<?php echo e(route('repair-transactions.pending')); ?>" class="btn btn-outline-secondary">
                                <i class="fas fa-sync-alt"></i> Reset
                            </a>
                        </div>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><?php echo e(__('ID')); ?></th>
                                <th><?php echo e(__('Inspection Barcode')); ?></th>
                                <th><?php echo e(__('Tire Type')); ?></th>
                                <th><?php echo e(__('Decision')); ?></th>
                                <th><?php echo e(__('Created At')); ?></th>
                                <th><?php echo e(__('Actions')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $pendingTransactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($transaction->inspectionTransaction->barcode); ?></td>
                                <td><?php echo e($transaction->inspectionTransaction->tireType->name_en); ?></td>
                                <td>
                                    <span class="badge bg-warning"><?php echo e($transaction->decision); ?></span>
                                </td>
                                <td><?php echo e($transaction->created_at->format('Y-m-d')); ?></td>
                                <td>

                                    <a href="<?php echo e(route('repair-transactions.show', $transaction)); ?>"
                                        class="btn btn-info btn-sm"><?php echo e(__('View')); ?></a>
                                    <a href="<?php echo e(route('repair-transactions.edit', $transaction)); ?>"
                                        class="btn btn-warning btn-sm"><?php echo e(__('Edit')); ?></a>
                                    
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" class="text-center"><?php echo e(__('No pending repair transactions found.')); ?>

                                </td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\green-tire\resources\views/repair-transactions/pending.blade.php ENDPATH**/ ?>