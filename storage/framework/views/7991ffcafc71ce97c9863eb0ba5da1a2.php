<?php $__env->startSection('content'); ?>
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Repair Transaction Details</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="d-flex justify-content-end mb-4">
                        <a href="<?php echo e(route('repair-transactions.edit', $repairTransaction)); ?>" class="btn btn-primary mr-2">Edit</a>
                        <a href="<?php echo e(route('repair-transactions.index')); ?>" class="btn btn-secondary">Back to List</a>
                    </div>

                    <!-- Repair Transaction Info -->
                    <div class="form-group mb-4">
                        <h5>Repair Transaction Information:</h5>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th width="30%">ID</th>
                                    <td><?php echo e($repairTransaction->id); ?></td>
                                </tr>
                                <tr>
                                    <th>Decision</th>
                                    <td>
                                        <?php if($repairTransaction->decision === 'repair'): ?>
                                            <span class="badge bg-success">Repair</span>
                                        <?php elseif($repairTransaction->decision === 'scrap'): ?>
                                            <span class="badge bg-danger">Scrap</span>
                                        <?php else: ?>
                                            <span class="badge bg-warning">Pending</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created Date</th>
                                    <td><?php echo e($repairTransaction->created_at->format('Y-m-d H:i:s')); ?></td>
                                </tr>
                                <tr>
                                    <th>Updated Date</th>
                                    <td><?php echo e($repairTransaction->updated_at->format('Y-m-d H:i:s')); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Inspection Info -->
                    <div class="form-group mb-4">
                        <h5>Inspection Information:</h5>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th width="30%">Barcode</th>
                                    <td><?php echo e($repairTransaction->inspectionTransaction->barcode); ?></td>
                                </tr>
                                <tr>
                                    <th>Tire Type</th>
                                    <td><?php echo e($repairTransaction->inspectionTransaction->tireType->name_en); ?></td>
                                </tr>
                                <tr>
                                    <th>Inspection Decision</th>
                                    <td><?php echo e($repairTransaction->inspectionTransaction->decision); ?></td>
                                </tr>
                                <tr>
                                    <th>Building Date</th>
                                    <td>
                                        <?php echo e($repairTransaction->inspectionTransaction->building_date ?
                                           $repairTransaction->inspectionTransaction->building_date->format('Y-m-d') : 'N/A'); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th>Machine</th>
                                    <td><?php echo e($repairTransaction->inspectionTransaction->machine ?? 'N/A'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-2">
                            <a href="<?php echo e(route('inspection-transactions.show', $repairTransaction->inspectionTransaction->id)); ?>"
                               class="btn btn-info btn-sm">
                                View Full Inspection Details
                            </a>
                        </div>
                    </div>

                    <!-- Repair Steps -->
                    <div class="form-group mb-4">
                        <h5>Repair Steps:</h5>
                        <?php if($repairTransaction->repairSteps->count() > 0): ?>
                            <ul class="list-group">
                                <?php $__currentLoopData = $repairTransaction->repairSteps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item"><?php echo e($step->name_en); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php else: ?>
                            <p>No repair steps have been added.</p>
                        <?php endif; ?>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\green-tire\resources\views/repair-transactions/show.blade.php ENDPATH**/ ?>