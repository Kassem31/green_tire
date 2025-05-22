<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
    @yield('styles')
</head>

<body class="layout-boxed alt-menu" data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="140">
    @include('partials.loader')
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container sidebar-closed sbar-open" id="container">

            <div class="overlay"></div>
            <div class="cs-overlay"></div>
            <div class="search-overlay"></div>

            @include('partials.navbar')

            @include('partials.sidebar')

            <div id="content" class="main-content">
                @yield('content')
                @include('partials.footer')
            </div>
        </div>
    </div>
    <!--  END MAIN CONTAINER  -->

    <!-- Sidebar Menu Scripts -->
    @stack('scripts')
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
