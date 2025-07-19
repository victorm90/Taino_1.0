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
    <style>
        /* Sistema de alertas mejorado */
        #alerts-container {
            position: fixed;
            top: 90px;
            right: 24px;
            z-index: 1100;
            max-width: 380px;
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .alert {
            position: relative;
            display: flex;
            align-items: flex-start;
            padding: 18px 20px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            background-color: white;
            border-left: 4px solid;
            transform: translateX(100%);
            opacity: 0;
            animation: slideIn 0.35s forwards, fadeIn 0.35s forwards;
        }

        .alert-success {
            border-left-color: #10b981;
            background-color: #f0fdf4;
        }

        .alert-error {
            border-left-color: #ef4444;
            background-color: #fef2f2;
        }

        .alert-warning {
            border-left-color: #f59e0b;
            background-color: #fffbeb;
        }

        .alert-info {
            border-left-color: #3b82f6;
            background-color: #eff6ff;
        }

        .alert-custom {
            border-left-color: #8b5cf6;
            background-color: #f5f3ff;
        }

        .alert-icon-container {
            margin-right: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .alert-icon {
            width: 26px;
            height: 26px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .alert-icon svg {
            width: 100%;
            height: 100%;
        }

        .alert-content {
            flex: 1;
            min-width: 0;
        }

        .alert-title {
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 6px;
            color: #1f2937;
            letter-spacing: -0.2px;
        }

        .alert-message {
            font-size: 14px;
            line-height: 1.5;
            color: #4b5563;
        }

        .alert-close {
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            margin-left: 12px;
            color: #9ca3af;
            transition: color 0.2s ease;
        }

        .alert-close:hover {
            color: #6b7280;
        }

        .alert-close svg {
            width: 18px;
            height: 18px;
        }

        .alert-create {
            border-left-color: #10b981;
            /* Verde */
            background-color: #f0fdf4;
        }

        .alert-edit {
            border-left-color: #3b82f6;
            /* Azul */
            background-color: #eff6ff;
        }

        .alert-delete {
            border-left-color: #ef4444;
            /* Rojo */
            background-color: #fef2f2;
        }

        @keyframes slideIn {
            to {
                transform: translateX(0);
            }
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        .alert.slide-out {
            animation: slideOut 0.4s forwards, fadeOut 0.4s forwards;
        }

        @keyframes slideOut {
            to {
                transform: translateX(100%);
            }
        }

        @keyframes fadeOut {
            to {
                opacity: 0;
            }
        }
    </style>

    @livewireStyles
</head>

<body
    class="text-base bg-body-bg text-body font-public dark:text-zink-100 dark:bg-zink-800 group-data-[skin=bordered]:bg-body-bordered group-data-[skin=bordered]:dark:bg-zink-700">

    <div id="alerts-container"></div>

    <div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">

        {{-- Menu Sidebar --}}
        @include('dashboard.partials.sidebar')
        <!-- Left Sidebar End -->

        <div id="sidebar-overlay" class="absolute inset-0 z-[1002] bg-slate-500/30 hidden"></div>

        <!-- ======= Header ======= -->
        @include('dashboard.partials.header')

        <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
            <div
                class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
                @yield('contenido')
            </div>

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
    <script src="{{ asset('admin/libs/%40popperjs/core/umd/popper.min.js') }}"></script>
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

    <!-- list js-->
    <script src="{{ asset('admin/libs/list.js/list.min.js') }}"></script>
    <script src="{{ asset('admin/libs/list.pagination.js/list.pagination.min.js') }}"></script>
    <script src="{{ asset('admin/libs/flatpickr/flatpickr.min.js') }}"></script>
    <!-- Sweet Alerts js -->
    <script src="{{ asset('admin/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- listjs init -->
    <script src="{{ asset('admin/js/pages/listjs.init.js') }}"></script>

    <script>
        // Iconos SVG optimizados para sistema profesional
        const alertIcons = {
            success: `<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>`,
            error: `<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 14L12 12M12 12L14 10M12 12L10 10M12 12L14 14M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#ef4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>`,
            warning: `<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 9V12M12 15H12.01M5.07183 19H18.9282C20.4678 19 21.4301 17.3333 20.6603 16L13.7321 4C12.9623 2.66667 11.0378 2.66667 10.268 4L3.33978 16C2.56998 17.3333 3.53223 19 5.07183 19Z" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>`,
            info: `<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 16H12V12H11M12 8H12.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#3b82f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>`,
            custom: `<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 7H13M11 11H13M11 15H13M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3Z" stroke="#8b5cf6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>`,
            create: `<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 4V20M4 12H20" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>`,
            edit: `<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11 4H4C3.44772 4 3 4.44772 3 5V20C3 20.5523 3.44772 21 4 21H19C19.5523 21 20 20.5523 20 20V13M11 4L17 10M11 4V10H17M17 10L21 14" stroke="#3b82f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>`,
            delete: `<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5 7H19M10 11V17M14 11V17M4 7H20M15 7V4C15 3.44772 14.5523 3 14 3H10C9.44772 3 9 3.44772 9 4V7H15ZM6 7H18V20C18 20.5523 17.5523 21 17 21H7C6.44772 21 6 20.5523 6 20V7Z" stroke="#ef4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>`
        };

        // Función mejorada para mostrar alertas
        window.showAlert = function(type, title, message) {
            const alertsContainer = document.getElementById('alerts-container');
            if (!alertsContainer) {
                console.warn("Contenedor de alertas no encontrado");
                return;
            }

            // Crear elemento de alerta
            const alertEl = document.createElement('div');
            alertEl.className = `alert alert-${type}`;

            // Plantilla de alerta profesional
            alertEl.innerHTML = `
                <div class="alert-icon-container">
                    <div class="alert-icon">${alertIcons[type] || alertIcons.info}</div>
                </div>
                
                <div class="alert-content">
                    <div class="alert-title">${title}</div>
                    <div class="alert-message">${message}</div>
                </div>
                
                <button class="alert-close">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            `;

            // Agregar al contenedor
            alertsContainer.appendChild(alertEl);

            // Cerrar automáticamente después de 5 segundos
            const timeout = setTimeout(() => {
                closeAlert(alertEl);
            }, 5000);

            // Botón de cierre manual
            const closeBtn = alertEl.querySelector('.alert-close');
            closeBtn.addEventListener('click', () => {
                clearTimeout(timeout);
                closeAlert(alertEl);
            });
        };

        // Función para cerrar alerta con animación suave
        function closeAlert(alertEl) {
            if (!alertEl) return;

            alertEl.classList.add('slide-out');
            setTimeout(() => {
                if (alertEl && alertEl.parentNode) {
                    alertEl.parentNode.removeChild(alertEl);
                }
            }, 400);
        }

        // Manejar mensajes flash de Laravel al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            // Mensajes flash de Laravel
            @if (Session::has('success'))
                showAlert('success', 'Éxito', `{{ Session::get('success') }}`);
            @endif

            @if (Session::has('create'))
                showAlert('create', 'Creado', `{{ Session::get('create') }}`);
            @endif

            @if (Session::has('edit'))
                showAlert('edit', 'Editado', `{{ Session::get('edit') }}`);
            @endif

            @if (Session::has('delete'))
                showAlert('delete', 'Eliminado', `{{ Session::get('delete') }}`);
            @endif

            @if (Session::has('error'))
                showAlert('error', 'Error', `{{ Session::get('error') }}`);
            @endif

            @if (Session::has('warning'))
                showAlert('warning', 'Advertencia', `{{ Session::get('warning') }}`);
            @endif

            @if (Session::has('info'))
                showAlert('info', 'Información', `{{ Session::get('info') }}`);
            @endif
        });
    </script>

    @livewireScripts
</body>

</html>
