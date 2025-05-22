<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/src/table/datatable/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/css/light/table/datatable/dt-global_style.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/css/dark/table/datatable/dt-global_style.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/src/table/datatable/extensions/responsive/responsive.dataTables.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/css/light/table/datatable/responsive.bootstrap5.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/css/dark/table/datatable/responsive.bootstrap5.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/assets/css/responsive-table.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/assets/css/filter-column.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/assets/css/pagination.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="layout-px-spacing">
    
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Repair Transactions</h3>
            </div>

            <div class="d-flex flex-wrap gap-2">
                <a href="<?php echo e(route('inspection-transactions.create')); ?>" class="btn btn-primary me-2">Add Inspection</a>
                <a href="<?php echo e(route('repair-transactions.pending')); ?>" class="btn btn-warning">Pending Transactions</a>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <form method="GET" action="<?php echo e(route('inspection-transactions.index')); ?>" class="mb-4">
                        <div class="row align-items-end mb-2">
                            <div class="col-md-2 col-12 filter-column mb-2">
                                <label for="filter-barcode" class="form-label">Barcode</label>
                                <input type="text" id="filter-barcode" name="barcode" class="form-control"
                                    placeholder="Filter by Barcode" value="<?php echo e(request('barcode')); ?>">
                            </div>
                            <div class="col-md-2 col-12 filter-column mb-2">
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
                            <div class="col-md-2 col-12 filter-column mb-2">
                                <label for="filter-decision" class="form-label">Decision</label>
                                <select id="filter-decision" name="decision" class="form-control">
                                    <option value="">All Decisions</option>
                                    <option value="Repair" <?php echo e(request('decision') == 'Repair' ? 'selected' : ''); ?>>Repair</option>
                                    <option value="Scrap" <?php echo e(request('decision') == 'Scrap' ? 'selected' : ''); ?>>Scrap</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-12 filter-column mb-2">
                                <label for="filter-date" class="form-label">Building Date</label>
                                <input type="date" id="filter-date" name="building_date" class="form-control"
                                    value="<?php echo e(request('building_date')); ?>">
                            </div>
                            <div class="col-md-2 col-12 filter-column mb-2">
                                <label for="filter-machine" class="form-label">Machine</label>
                                <input type="text" id="filter-machine" name="machine" class="form-control"
                                    placeholder="Filter by Machine" value="<?php echo e(request('machine')); ?>">
                            </div>
                            <div class="col-md-2 col-12 filter-column mb-2">
                                <label for="filter-status" class="form-label">Status</label>
                                <select id="filter-status" name="status" class="form-control">
                                    <option value="">All Statuses</option>
                                    <option value="repaired" <?php echo e(request('status') == 'repaired' ? 'selected' : ''); ?>>Repaired</option>
                                    <option value="pending" <?php echo e(request('status') == 'pending' ? 'selected' : ''); ?>>Pending Repair</option>
                                    <option value="scrap" <?php echo e(request('status') == 'scrap' ? 'selected' : ''); ?>>Scrapped</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-2 d-flex justify-content-center" style="margin-bottom: 0.6rem;">
                                <?php if (isset($component)) { $__componentOriginal011a65c6f2edc828af851aefc994efc1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal011a65c6f2edc828af851aefc994efc1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filter-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filter-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $attributes = $__attributesOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__attributesOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $component = $__componentOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__componentOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
                            </div>
                        </div>
                        
                        
                    </form>

                    <div class="table-responsive">
                    <table id="zero-config" class="table dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Barcode</th>
                                <th>Tire Type</th>
                                <th>Decision</th>
                                <th>Building Date</th>
                                <th>Machine</th>
                                <th class="text-center">Status</th>
                                <th class="text-center no-sort">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $inspectionTransactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td data-th="Barcode"><?php echo e($transaction->barcode); ?></td>
                                <td data-th="Tire Type"><?php echo e($transaction->tireType->name_en); ?></td>
                                <td data-th="Decision"><?php echo e($transaction->decision); ?></td>
                                <td data-th="Building Date"><?php echo e($transaction->building_date ? $transaction->building_date->format('Y-m-d') :
                                    'N/A'); ?></td>
                                <td data-th="Machine"><?php echo e($transaction->machine ?? 'N/A'); ?></td>
                                <td class="text-center" data-th="Status">
                                    <?php if($transaction->is_repaired): ?>
                                    <span class="badge bg-success">Repaired</span>
                                    <?php elseif(strtolower($transaction->decision) === 'repair'): ?>
                                    <span class="badge bg-warning">Pending Repair</span>
                                    <?php elseif(strtolower($transaction->decision) === 'scrap'): ?>
                                    <span class="badge bg-danger">Scrapped</span>
                                    <?php else: ?>
                                    <span class="badge bg-secondary"><?php echo e($transaction->decision); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center" data-th="Actions">
                                    <div class="d-flex flex-wrap justify-content-center button-group gap-1">
                                        <!-- Show Button -->
                                        <?php if (isset($component)) { $__componentOriginalb83656ea86204f1ef049a4bd3e20bb5c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb83656ea86204f1ef049a4bd3e20bb5c = $attributes; } ?>
<?php $component = App\View\Components\ShowButton::resolve(['route' => 'inspection-transactions.show','param' => $transaction->id,'name' => 'inspection'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('show-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ShowButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb83656ea86204f1ef049a4bd3e20bb5c)): ?>
<?php $attributes = $__attributesOriginalb83656ea86204f1ef049a4bd3e20bb5c; ?>
<?php unset($__attributesOriginalb83656ea86204f1ef049a4bd3e20bb5c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb83656ea86204f1ef049a4bd3e20bb5c)): ?>
<?php $component = $__componentOriginalb83656ea86204f1ef049a4bd3e20bb5c; ?>
<?php unset($__componentOriginalb83656ea86204f1ef049a4bd3e20bb5c); ?>
<?php endif; ?>

                                        <?php if(strtolower($transaction->decision) === 'repair' && !$transaction->is_repaired): ?>
                                        <a href="<?php echo e(route('repair-transactions.create', ['inspection_id' => $transaction->id])); ?>"
                                            class="btn btn-success btn-icon btn-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Add Repair Steps">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool">
                                                <path
                                                    d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z">
                                                </path>
                                            </svg>
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    </div>
                    <div class="pagination-wrapper">
                        <?php echo $__env->make('vendor.pagination.info', ['paginator' => $inspectionTransactions], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php echo e($inspectionTransactions->appends(request()->query())->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    
</div>
<!--  END CONTENT AREA  -->
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
                "sInfo": "Showing _START_ to _END_ of _TOTAL_ entries",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [10, 25, 50, 100],
            "pageLength": 10,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "paging": false, // Disable DataTables pagination as we're using Laravel's
            "responsive": {
                details: false
            },
            "columnDefs": [
                { 
                    "targets": [5,6],
                    "orderable": false,
                    "className": "text-center"
                }
            ],
            "order": [[0, "asc"]]
        });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                })
            });
</script>
<?php endif; ?>

<?php if(session('error')): ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
                const isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

                Swal.fire({
                    icon: 'error',
                    title: '<?php echo e(session('error')); ?>',
                    background: isDarkMode ? '#333' : '#fff',
                    color: isDarkMode ? '#fff' : '#000'
                });

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
                    const newColorScheme = event.matches ? 'dark' : 'light';
                    Swal.update({
                        background: newColorScheme === 'dark' ? '#333' : '#fff',
                        color: newColorScheme === 'dark' ? '#fff' : '#000'
                    });
                });
            });
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\projects\green-tire\resources\views/inspection-transactions/index.blade.php ENDPATH**/ ?>