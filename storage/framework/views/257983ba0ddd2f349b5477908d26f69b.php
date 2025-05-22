<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/src/table/datatable/datatables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/css/light/table/datatable/dt-global_style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/css/dark/table/datatable/dt-global_style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/src/table/datatable/extensions/responsive/responsive.dataTables.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/css/light/table/datatable/responsive.bootstrap5.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/css/dark/table/datatable/responsive.bootstrap5.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/assets/css/responsive-table.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/assets/css/filter-column.css')); ?>">
<?php $__env->stopSection(); ?>

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
                            <div class="col-md-3 col-12 filter-column mb-2">
                                <label for="filter-barcode" class="form-label">Inspection Barcode</label>
                                <input type="text" id="filter-barcode" name="barcode" class="form-control"
                                    placeholder="Filter by Barcode" value="<?php echo e(request('barcode')); ?>">
                            </div>
                            <div class="col-md-3 col-12 filter-column mb-2">
                                <label for="filter-tire-type" class="form-label">Tire Type</label>
                                <select id="filter-tire-type" name="tire_type_id" class="form-control">
                                    <option value="">All Tire Types</option>
                                    <?php $__currentLoopData = $tireTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tireType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tireType->id); ?>"
                                            <?php echo e(request('tire_type_id') == $tireType->id ? 'selected' : ''); ?>>
                                            <?php echo e($tireType->name_en); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-3 col-12 filter-column mb-2">
                                <label for="filter-date-from" class="form-label">Date From</label>
                                <input type="date" id="filter-date-from" name="date_from" class="form-control"
                                    value="<?php echo e(request('date_from')); ?>">
                            </div>
                            <div class="col-md-3 col-12 filter-column mb-2">
                                <label for="filter-date-to" class="form-label">Date To</label>
                                <input type="date" id="filter-date-to" name="date_to" class="form-control"
                                    value="<?php echo e(request('date_to')); ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3 d-flex justify-content-center justify-content-md-start gap-2">
                                <button type="submit" class="btn btn-primary" style="margin-left: 1rem">
                                    <i class="fas fa-filter"></i> Filter
                                </button>
                                <a href="<?php echo e(route('repair-transactions.pending')); ?>" class="btn btn-outline-secondary">
                                    <i class="fas fa-sync-alt"></i> Reset
                                </a>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('ID')); ?></th>
                                    <th><?php echo e(__('Inspection Barcode')); ?></th>
                                    <th><?php echo e(__('Tire Type')); ?></th>
                                    <th><?php echo e(__('Decision')); ?></th>
                                    <th><?php echo e(__('Created At')); ?></th>
                                    <th class="text-center no-sort"><?php echo e(__('Actions')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $pendingTransactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td data-th="ID"><?php echo e($loop->iteration); ?></td>
                                        <td data-th="Inspection Barcode"><?php echo e($transaction->inspectionTransaction->barcode); ?></td>
                                        <td data-th="Tire Type"><?php echo e($transaction->inspectionTransaction->tireType->name_en); ?></td>
                                        <td data-th="Decision">
                                            <span class="badge bg-warning"><?php echo e($transaction->decision); ?></span>
                                        </td>
                                        <td data-th="Created At"><?php echo e($transaction->created_at->format('Y-m-d')); ?></td>
                                        <td class="text-center" data-th="Actions">
                                            <div class="d-flex flex-wrap justify-content-center button-group gap-1">
                                                <a href="<?php echo e(route('repair-transactions.show', $transaction)); ?>"
                                                    class="btn btn-info btn-sm"><?php echo e(__('View')); ?></a>
                                                <a href="<?php echo e(route('repair-transactions.edit', $transaction)); ?>"
                                                    class="btn btn-warning btn-sm"><?php echo e(__('Edit')); ?></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            <?php echo e(__('No pending repair transactions found.')); ?>

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

<?php $__env->startSection('scripts'); ?>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo e(asset('src/plugins/src/global/vendors.min.js')); ?>"></script>
    <script src="<?php echo e(asset('src/assets/js/custom.js')); ?>"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo e(asset('src/plugins/src/table/datatable/datatables.js')); ?>"></script>
    <script src="<?php echo e(asset('src/plugins/src/table/datatable/extensions/responsive/dataTables.responsive.min.js')); ?>"></script>
    <script>
        $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 10,
            "lengthChange": false,
            "searching": false,
            "responsive": {
                details: false
            },
            "columnDefs": [
                { 
                    "targets": [5],
                    "orderable": false,
                    "className": "text-center"
                }
            ],
            "order": [[0, "asc"]]
        });
    </script>

    <?php if(session('success')): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

                const ToastSuccess = Swal.mixin({
                    toast: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                    timer: 4000,
                    timerProgressBar: true,
                    background: isDarkMode ? '#333' : '#fff',
                    color: isDarkMode ? '#fff' : '#000',
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });

                ToastSuccess.fire({
                    icon: 'success',
                    title: '<?php echo e(session('success')); ?>'
                });

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
                    const newColorScheme = event.matches ? 'dark' : 'light';
                    ToastSuccess.update({
                        background: newColorScheme === 'dark' ? '#333' : '#fff',
                        color: newColorScheme === 'dark' ? '#fff' : '#000'
                    });
                });
            });
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\projects\green-tire\resources\views/repair-transactions/pending.blade.php ENDPATH**/ ?>