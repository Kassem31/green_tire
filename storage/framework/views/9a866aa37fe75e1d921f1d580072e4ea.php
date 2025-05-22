<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/src/table/datatable/datatables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/css/light/table/datatable/dt-global_style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/css/dark/table/datatable/dt-global_style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/plugins/src/table/datatable/extensions/responsive/responsive.dataTables.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/assets/css/responsive-table.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('src/assets/css/filter-column.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Users</a></li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">

                <?php if (isset($component)) { $__componentOriginalbe773232faa3ab8840df69ab660327c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe773232faa3ab8840df69ab660327c2 = $attributes; } ?>
<?php $component = App\View\Components\AddButton::resolve(['model' => 'users','name' => 'user'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('add-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AddButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbe773232faa3ab8840df69ab660327c2)): ?>
<?php $attributes = $__attributesOriginalbe773232faa3ab8840df69ab660327c2; ?>
<?php unset($__attributesOriginalbe773232faa3ab8840df69ab660327c2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbe773232faa3ab8840df69ab660327c2)): ?>
<?php $component = $__componentOriginalbe773232faa3ab8840df69ab660327c2; ?>
<?php unset($__componentOriginalbe773232faa3ab8840df69ab660327c2); ?>
<?php endif; ?>
                


                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <form method="GET" action="<?php echo e(route('users.index')); ?>" class="mb-3">
                            <div class="row">
                                <div class="col-md-4 col-12 filter-column">
                                    <input type="text" name="name" class="form-control" placeholder="Filter by Name"
                                        value="<?php echo e(request('name')); ?>">
                                </div>
                                <div class="col-md-4 col-12 d-flex">
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th class="text-center no-sort">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td data-th="Name"><?php echo e($user['name']); ?></td>
                                            <td data-th="Email"><?php echo e($user['email']); ?></td>
                                            <td data-th="Role"><?php echo e(implode(', ', $user->getRoleNames())); ?></td>
                                            <td class="text-center" data-th="Actions">
                                                <div class="d-flex flex-wrap justify-content-center button-group gap-1">
                                                    <!-- Show Button -->
                                                    <?php if (isset($component)) { $__componentOriginalb83656ea86204f1ef049a4bd3e20bb5c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb83656ea86204f1ef049a4bd3e20bb5c = $attributes; } ?>
<?php $component = App\View\Components\ShowButton::resolve(['route' => 'users.show','param' => $user['id'],'name' => 'user'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                                    <!-- Edit Button -->
                                                    <?php if (isset($component)) { $__componentOriginal5f8db95e16827ebd3500ce550edd117e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5f8db95e16827ebd3500ce550edd117e = $attributes; } ?>
<?php $component = App\View\Components\EditButton::resolve(['route' => 'users.edit','param' => $user['id'],'name' => 'user'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('edit-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\EditButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5f8db95e16827ebd3500ce550edd117e)): ?>
<?php $attributes = $__attributesOriginal5f8db95e16827ebd3500ce550edd117e; ?>
<?php unset($__attributesOriginal5f8db95e16827ebd3500ce550edd117e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f8db95e16827ebd3500ce550edd117e)): ?>
<?php $component = $__componentOriginal5f8db95e16827ebd3500ce550edd117e; ?>
<?php unset($__componentOriginal5f8db95e16827ebd3500ce550edd117e); ?>
<?php endif; ?>
                                                    <!-- Delete Button -->
                                                    <div style="margin-top: 0.08rem">
                                                    <?php if (isset($component)) { $__componentOriginal2550ac35d7599d92e03b1bde3934d26a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2550ac35d7599d92e03b1bde3934d26a = $attributes; } ?>
<?php $component = App\View\Components\DeleteButton::resolve(['route' => 'users.destroy','param' => $user['id'],'name' => 'user'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('delete-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\DeleteButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2550ac35d7599d92e03b1bde3934d26a)): ?>
<?php $attributes = $__attributesOriginal2550ac35d7599d92e03b1bde3934d26a; ?>
<?php unset($__attributesOriginal2550ac35d7599d92e03b1bde3934d26a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2550ac35d7599d92e03b1bde3934d26a)): ?>
<?php $component = $__componentOriginal2550ac35d7599d92e03b1bde3934d26a; ?>
<?php unset($__componentOriginal2550ac35d7599d92e03b1bde3934d26a); ?>
<?php endif; ?>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!--  END CONTENT AREA  -->
<?php $__env->stopSection(); ?>
<!-- END MAIN CONTAINER -->
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
                    "targets": [3],
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

    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
    <script>
        document.querySelectorAll('.delete-button').forEach(button => {
            button.addEventListener('click', function() {
                const deleteUrl = this.getAttribute('data-url');
                const isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)')
                    .matches;

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    background: isDarkMode ? '#333' : '#fff',
                    color: isDarkMode ? '#fff' : '#000'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Create and submit the form to delete the user
                        const form = document.createElement('form');
                        form.method = 'POST';
                        form.action = deleteUrl;

                        const csrfToken = document.createElement('input');
                        csrfToken.type = 'hidden';
                        csrfToken.name = '_token';
                        csrfToken.value = '<?php echo e(csrf_token()); ?>';

                        const methodInput = document.createElement('input');
                        methodInput.type = 'hidden';
                        methodInput.name = '_method';
                        methodInput.value = 'DELETE';

                        form.appendChild(csrfToken);
                        form.appendChild(methodInput);
                        document.body.appendChild(form);
                        form.submit();

                    }
                })
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\projects\green-tire\resources\views/users/index.blade.php ENDPATH**/ ?>