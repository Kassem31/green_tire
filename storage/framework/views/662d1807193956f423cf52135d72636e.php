<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><?php echo e(__('Inspection Transaction Details')); ?></h5>
                    <div>
                        <a href="<?php echo e(route('inspection-transactions.edit', $inspectionTransaction)); ?>" class="btn btn-primary btn-sm"><?php echo e(__('Edit')); ?></a>
                        <a href="<?php echo e(route('inspection-transactions.index')); ?>" class="btn btn-secondary btn-sm"><?php echo e(__('Back to List')); ?></a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th width="30%"><?php echo e(__('ID')); ?></th>
                                <td><?php echo e($inspectionTransaction->id); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo e(__('Barcode')); ?></th>
                                <td><?php echo e($inspectionTransaction->barcode); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo e(__('Tire Type')); ?></th>
                                <td><?php echo e($inspectionTransaction->tireType->name_en); ?> (<?php echo e($inspectionTransaction->tireType->name_ar); ?>)</td>
                            </tr>
                            <tr>
                                <th><?php echo e(__('Decision')); ?></th>
                                <td><?php echo e($inspectionTransaction->decision); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo e(__('Is Repaired')); ?></th>
                                <td><?php echo e($inspectionTransaction->is_repaired ? 'Yes' : 'No'); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo e(__('Building Date')); ?></th>
                                <td><?php echo e($inspectionTransaction->building_date ? $inspectionTransaction->building_date->format('Y-m-d') : 'N/A'); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo e(__('Machine')); ?></th>
                                <td><?php echo e($inspectionTransaction->machine ?? 'N/A'); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo e(__('Operator Name')); ?></th>
                                <td><?php echo e($inspectionTransaction->operator_name ?? 'N/A'); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo e(__('Operator Code')); ?></th>
                                <td><?php echo e($inspectionTransaction->operator_code ?? 'N/A'); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo e(__('Created At')); ?></th>
                                <td><?php echo e($inspectionTransaction->created_at->format('Y-m-d H:i:s')); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo e(__('Updated At')); ?></th>
                                <td><?php echo e($inspectionTransaction->updated_at->format('Y-m-d H:i:s')); ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <h5 class="mt-4 mb-3"><?php echo e(__('Observations')); ?></h5>
                    <?php if($inspectionTransaction->observations->count() > 0): ?>
                        <ul class="list-group">
                            <?php $__currentLoopData = $inspectionTransaction->observations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $observation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="list-group-item"><?php echo e($observation->name_en); ?> (<?php echo e($observation->name_ar); ?>)</li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php else: ?>
                        <p><?php echo e(__('No observations recorded.')); ?></p>
                    <?php endif; ?>

                    <?php if($inspectionTransaction->repairTransaction): ?>
                        <h5 class="mt-4 mb-3"><?php echo e(__('Repair Information')); ?></h5>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th width="30%"><?php echo e(__('Repair ID')); ?></th>
                                    <td><?php echo e($inspectionTransaction->repairTransaction->id); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('Repair Decision')); ?></th>
                                    <td><?php echo e($inspectionTransaction->repairTransaction->decision); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('Repair Date')); ?></th>
                                    <td><?php echo e($inspectionTransaction->repairTransaction->created_at->format('Y-m-d H:i:s')); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\projects\green-tire\resources\views/inspection-transactions/show.blade.php ENDPATH**/ ?>