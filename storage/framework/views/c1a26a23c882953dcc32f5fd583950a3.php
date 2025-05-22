<!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">

                <div class="navbar-nav theme-brand flex-row  text-center">
                    <div class="nav-logo">
                        <div class="nav-item theme-logo">
                            <a href="<?php echo e(route('dashboard')); ?>">
                                
                                <img src="<?php echo e(asset('src/assets/img/logo/logo.jpg')); ?>" class="navbar-logo" alt="logo"> </a>
                        </div>
                        <div class="nav-item theme-text">
                            <a href="<?php echo e(route('dashboard')); ?>" class="nav-link"> Prometeon </a>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>

                    <?php
                        $currentRoute = Route::currentRouteName();
                        $currentRouteBase = explode('.', $currentRoute)[0];
                        $isActive = in_array($currentRouteBase, ['observations']);
                    ?>
                    <li class="menu <?php echo e($isActive ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('observations.index')); ?>" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                                <span>Observations</span>
                            </div>
                        </a>
                    </li>

                    <?php
                        $currentRoute = Route::currentRouteName();
                        $currentRouteBase = explode('.', $currentRoute)[0];
                        $isActive = in_array($currentRouteBase, ['repair-steps']);
                    ?>
                    <li class="menu <?php echo e($isActive ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('repair-steps.index')); ?>" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool">
                                    <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                                </svg>
                                <span>Repair Steps</span>
                            </div>
                        </a>
                    </li>

                    <?php
                        $currentRoute = Route::currentRouteName();
                        $currentRouteBase = explode('.', $currentRoute)[0];
                        $isActive = in_array($currentRouteBase, ['inspection-transactions']);
                        $isExpandedInspection = in_array($currentRoute, ['inspection-transactions.index', 'repair-transactions.pending']);
                    ?>
                    <li class="menu <?php echo e($isActive ? 'active' : ''); ?>">
                        <a href="#inspection-menu" data-bs-toggle="collapse" aria-expanded="<?php echo e($isExpandedInspection ? 'true' : 'false'); ?>"
                            class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                </svg>
                                <span>Inspection Transactions</span>
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
                        <ul class="collapse submenu list-unstyled <?php echo e($isExpandedInspection ? 'show' : ''); ?>" id="inspection-menu"
                            data-bs-parent="#accordionExample">
                            <li class="<?php echo e($currentRoute == 'inspection-transactions.index' ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('inspection-transactions.index')); ?>"> All Transactions </a>
                            </li>
                            <li class="<?php echo e($currentRoute == 'repair-transactions.pending' ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('repair-transactions.pending')); ?>"> Pending Transactions </a>
                            </li>
                        </ul>
                    </li>

                    <?php
                        $currentRoute = Route::currentRouteName();
                        $currentRouteBase = explode('.', $currentRoute)[0];
                        $isActive = in_array($currentRouteBase, ['profile', 'roles']);
                    ?>
                    <li class="menu <?php echo e($isActive ? 'active' : ''); ?>">
                        <a href="#user-management" data-bs-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-0.645 -0.645 18 18"
                                    id="User-Circle-Single--Streamline-Core" height="18" width="18">
                                    <desc>User Circle Single Streamline Icon: https://streamlinehq.com</desc>
                                    <g id="user-circle-single--circle-geometric-human-person-single-user">
                                        <path id="Vector" fill="#ffffffcc"
                                            d="M8.355 9.54857142857143c1.6479760071428575 0 2.9839285714285717 -1.3359525642857144 2.9839285714285717 -2.9839285714285717S10.002976007142859 3.5807142857142864 8.355 3.5807142857142864 5.37107142857143 4.916666850000001 5.37107142857143 6.564642857142858 6.7070239928571445 9.54857142857143 8.355 9.54857142857143Z"
                                            stroke-width="1.29"></path>
                                        <path id="Intersect" fill="#ffffffcc"
                                            d="M13.453221000000001 14.203022571428573C12.089804357142858 15.392655214285716 10.306572835714288 16.11321428571429 8.355011935714286 16.11321428571429c-1.951572835714286 0 -3.7348401642857145 -0.7205590714285716 -5.098256807142858 -1.9101917142857145C4.304591485714286 12.485473285714287 6.1958889642857145 11.338928571428573 8.355011935714286 11.338928571428573c2.159111035714286 0 4.0503727071428575 1.1465447142857144 5.098209064285715 2.864094Z"
                                            stroke-width="1.29"></path>
                                        <path id="Subtract" fill="#fefeffd1" fill-rule="evenodd"
                                            d="M3.2567431928571433 14.203022571428573C4.304579550000001 12.485473285714287 6.1958889642857145 11.338928571428573 8.355 11.338928571428573c2.159111035714286 0 4.050384642857144 1.1465447142857144 5.098221000000001 2.864094C15.083281500000002 12.780762857142859 16.11321428571429 10.688181492857144 16.11321428571429 8.355 16.11321428571429 4.070257607142858 12.639802071428573 0.5967857142857144 8.355 0.5967857142857144 4.070257607142858 0.5967857142857144 0.5967857142857144 4.070257607142858 0.5967857142857144 8.355c0 2.3331814928571433 1.029932785714286 4.425762857142858 2.659957478571429 5.848022571428572ZM8.355 9.54857142857143c1.6479760071428575 0 2.9839285714285717 -1.3359525642857144 2.9839285714285717 -2.9839285714285717S10.002976007142859 3.5807142857142864 8.355 3.5807142857142864 5.37107142857143 4.916666850000001 5.37107142857143 6.564642857142858 6.7070239928571445 9.54857142857143 8.355 9.54857142857143Z"
                                            clip-rule="evenodd" stroke-width="1.29"></path>
                                        <path id="Vector_2" stroke="#222222" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.355 9.54857142857143c1.6479760071428575 0 2.9839285714285717 -1.3359525642857144 2.9839285714285717 -2.9839285714285717S10.002976007142859 3.5807142857142864 8.355 3.5807142857142864 5.37107142857143 4.916666850000001 5.37107142857143 6.564642857142858 6.7070239928571445 9.54857142857143 8.355 9.54857142857143Z"
                                            stroke-width="1.29"></path>
                                        <path id="Vector_3" stroke="#222222" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3.2584261285714287 14.203500000000002c0.5326193142857144 -0.8742910714285715 1.2811915071428572 -1.5968792142857147 2.1737442214285716 -2.0981792142857145 0.8925527142857145 -0.5014193571428571 1.899067628571429 -0.7647689571428572 2.9228057785714285 -0.7647689571428572 1.02373815 0 2.0302530642857146 0.2633496 2.9228057785714285 0.7647689571428572 0.8925885214285716 0.5013000000000001 1.6410771642857145 1.223888142857143 2.1737680928571432 2.0981792142857145"
                                            stroke-width="1.29"></path>
                                        <path id="Vector_4" stroke="#222222" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.355 16.11321428571429c4.284802071428572 0 7.758214285714287 -3.4734122142857147 7.758214285714287 -7.758214285714287C16.11321428571429 4.070257607142858 12.639802071428573 0.5967857142857144 8.355 0.5967857142857144 4.070257607142858 0.5967857142857144 0.5967857142857144 4.070257607142858 0.5967857142857144 8.355c0 4.284802071428572 3.473471892857143 7.758214285714287 7.758214285714287 7.758214285714287Z"
                                            stroke-width="1.29"></path>
                                    </g>
                                </svg>
                                <span>User Management</span>
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
                        <ul class="collapse submenu list-unstyled" id="user-management"
                            data-bs-parent="#accordionExample">
                            <li class="<?php echo e($currentRouteBase == 'users' ? 'active' : ''); ?>">
                                <?php if (true) : ?>
                                    <a href="<?php echo e(route('users.index')); ?>"> Users </a>
                                <?php endif; // app('laratrust')->permission ?>
                            </li>
                            <li class="<?php echo e($currentRouteBase == 'roles' ? 'active' : ''); ?>">
                                <?php if (true) : ?>
                                    <a href="<?php echo e(route('roles.index')); ?>"> Roles </a>
                                <?php endif; // app('laratrust')->permission ?>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!--  END SIDEBAR  -->
<?php /**PATH E:\Projects\green-tire\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>