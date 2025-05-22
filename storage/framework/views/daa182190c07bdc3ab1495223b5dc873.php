<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <?php echo $__env->make('partials.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body class="layout-boxed alt-menu" data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="140">
    <?php echo $__env->make('partials.loader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container sidebar-closed sbar-open" id="container">

            <div class="overlay"></div>
            <div class="cs-overlay"></div>
            <div class="search-overlay"></div>

            <?php echo $__env->make('partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <?php echo $__env->make('partials.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <div id="content" class="main-content">
                <?php echo $__env->yieldContent('content'); ?>
                <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        </div>
    </div>
    <!--  END MAIN CONTAINER  -->

    <!-- Sidebar Menu Scripts -->
    <?php echo $__env->yieldPushContent('scripts'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fix for sidebar dropdown menus
            var dropdownMenus = document.querySelectorAll('.dropdown-toggle[data-bs-toggle="collapse"]');

            dropdownMenus.forEach(function(menu) {
                menu.addEventListener('click', function(e) {
                    // Handle the dropdown click event
                    let targetId = this.getAttribute('href');
                    let targetEl = document.querySelector(targetId);

                    if (targetEl) {
                        // Toggle the 'show' class
                        if (targetEl.classList.contains('show')) {
                            targetEl.classList.remove('show');
                            this.setAttribute('aria-expanded', 'false');
                        } else {
                            // Close any other open menus first
                            let openMenus = document.querySelectorAll('.collapse.submenu.show');
                            openMenus.forEach(function(openMenu) {
                                if (openMenu.id !== targetId.substring(1)) {
                                    openMenu.classList.remove('show');
                                    let toggle = document.querySelector('[href="#' + openMenu.id + '"]');
                                    if (toggle) {
                                        toggle.setAttribute('aria-expanded', 'false');
                                    }
                                }
                            });

                            // Open this menu
                            targetEl.classList.add('show');
                            this.setAttribute('aria-expanded', 'true');
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
<?php /**PATH D:\projects\green-tire\resources\views/layouts/app.blade.php ENDPATH**/ ?>