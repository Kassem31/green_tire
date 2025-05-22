    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">

            <div class="navbar-nav theme-brand flex-row  text-center">
                <div class="nav-logo" style="margin-left: 0.2rem">
                    <div class="nav-item theme-logo" style="font-size: 1.6rem !important;">
                        
                        <a href="<?php echo e(route('dashboard')); ?>">

                            
                            <img src="<?php echo e(asset('/src/assets/img/prometeon-icon.png')); ?>" class="navbar-logo"
                                alt="logo">
                                <span class="mobile-hidden-xs">rometeon</span>
                    </div>
                    <div class="nav-item theme-text">
                        <a href="<?php echo e(route('dashboard')); ?>" class="nav-link"></a>
                    </div>
                </div>
                <div class="nav-item sidebar-toggle">
                    <div class="btn-toggle sidebarCollapse" id="sidebar-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevrons-left">
                            <polyline points="11 17 6 12 11 7"></polyline>
                            <polyline points="18 17 13 12 18 7"></polyline>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">

                <?php
                    $currentRoute = Route::currentRouteName();
                    $isActive = in_array($currentRoute, ['dashboard']);
                ?>
                <li class="menu <?php echo e($isActive ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('dashboard')); ?>" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span>Dashboard</span>
                        </div>
                    </a>
                </li>

                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $currentRoute = Route::currentRouteName();
                        $currentRouteBase = explode('.', $currentRoute)[0];
                        $isActive = $currentRouteBase == $menu->route;
                    ?>
                    <li class="menu <?php echo e($isActive ? 'active' : ''); ?>">
                        <a href="#<?php echo e($menu->id); ?>" data-bs-toggle="collapse" aria-expanded="true"
                            class="dropdown-toggle">
                            <div class="">
                                <?php echo $menu->svg_content; ?>

                                <span><?php echo e($menu->name); ?></span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="<?php echo e($menu->id); ?>"
                            data-bs-parent="#accordionExample">
                            <?php $__currentLoopData = $menu->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="<?php echo e($currentRouteBase == explode('.', $submenu->route)[0] ? 'active' : ''); ?>">
                                    
                                    <!-- Assuming you have permission field -->
                                    <a href="<?php echo e(route($submenu->route)); ?>"><?php echo e($submenu->name); ?></a>
                                    
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

        </nav>
    </div>
    <!--  END SIDEBAR  -->
<?php /**PATH D:\projects\green-tire\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>