<!DOCTYPE html>
<html lang="es" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg"
    data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="StarCode Kh" name="author">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href=""> --}}
    <!-- Layout config Js -->
    <script src="{{ asset('admin/js/layout.js') }}"></script>
    <!-- Icons CSS -->
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <!-- StarCode CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/starcode2.css') }}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body
    class="text-base bg-body-bg text-body font-public dark:text-zink-100 dark:bg-zink-800 group-data-[skin=bordered]:bg-body-bordered group-data-[skin=bordered]:dark:bg-zink-700">
    <div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">

        {{-- Menu Sidebar --}}
        @include('dashboard.partials.sidebar')
        <!-- Left Sidebar End -->
        
        <div id="sidebar-overlay" class="absolute inset-0 z-[1002] bg-slate-500/30 hidden"></div>

         <!-- ======= Header ======= -->
         @include('dashboard.partials.header')        

        <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

            @yield('contenido')

            {{-- Menu Footer --}}
            @include('dashboard.partials.footer')
        </div>
    </div>
    <!-- end main content -->

    <div class="fixed items-center hidden bottom-6 right-12 h-header group-data-[navbar=hidden]:flex">
        <button data-drawer-target="customizerButton" type="button"
            class="inline-flex items-center justify-center w-12 h-12 p-0 transition-all duration-200 ease-linear rounded-md shadow-lg text-sky-50 bg-sky-500">
            <i data-lucide="settings" class="inline-block w-5 h-5"></i>
        </button>
    </div>

    {{-- Menu Sidebar Derecho --}}
    @include('dashboard.partials.sidebar2')

    <script src='{{ asset('admin/libs/choices.js/public/assets/scripts/choices.min.js') }}'></script>
    {{-- <script src="{{ asset('admin/libs/%40popperjs/core/umd/popper.min.js') }}"></script> --}}
    <script src="{{ asset('admin/libs/tippy.js/tippy-bundle.umd.min.js') }}"></script>
    <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('admin/libs/lucide/umd/lucide.js') }}"></script>
    <script src="{{ asset('admin/js/starcode.bundle.js') }}"></script>
    <!--apexchart js-->
    <script src="{{ asset('admin/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!--dashboard ecommerce init js-->
    <script src="{{ asset('admin/js/pages/dashboards-ecommerce.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/js/app.js') }}"></script>

    @livewireScripts
</body>

</html>
