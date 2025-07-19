<!DOCTYPE html>
<html lang="es" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg"
    data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Iniciar Sesión | Nación Taína</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="Plataforma de gestión cultural" name="description">
    <meta content="Nación Taína" name="author">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/images/CSB.png') }}">
    <!-- Layout config Js -->
    <script src="{{ asset('admin/js/layout.js') }}"></script>
    <!-- Icons CSS -->
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <!-- StarCode CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/starcode2.css') }}">

    <style>
        :root {
            --primary: #0D6F6C;
            --primary-dark: #094d4a;
            --primary-light: #1c9d98;
            --dark: #070708;
            --accent: #C73D33;
            --accent-hover: #b0352c;
            --light: #F3F3F3;
            --light-bg: #FCFDFD;
            --text: #333333;
            --text-light: #5a5a5a;
            --border: #d1d5db;
            --error: #e53e3e;
            --success: #38a169;
            --transition: all 0.3s ease-in-out;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: var(--light-bg);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="%23f3f3f3"/><path d="M0 50 Q 25 40, 50 50 T 100 50" stroke="%230d6f6c" stroke-width="0.5" stroke-opacity="0.1" fill="none"/></svg>');
            background-size: cover;
        }

        .login-container {
            max-width: 1200px;
            width: 100%;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            display: flex;
            background: white;
        }

        .login-brand {
            flex: 1;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            padding: 4rem 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .brand-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background:
                radial-gradient(circle at 10% 20%, rgba(255, 255, 255, 0.3) 0%, transparent 15%),
                radial-gradient(circle at 90% 80%, rgba(255, 255, 255, 0.3) 0%, transparent 15%);
        }

        .brand-logo {
            width: 120px;
            height: 120px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
            z-index: 2;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .brand-logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            padding: 15px;
        }

        .login-form {
            flex: 1;
            padding: 4rem 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .form-header {
            margin-bottom: 2.5rem;
            text-align: center;
        }

        .form-header h1 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .form-header p {
            color: var(--text-light);
            font-size: 1.1rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text);
            font-size: 0.95rem;
        }

        .form-input {
            width: 100%;
            padding: 0.85rem 1.25rem;
            border: 1px solid var(--border);
            border-radius: 10px;
            font-size: 1rem;
            transition: var(--transition);
            background: var(--light-bg);
        }

        .form-input.error {
            border-color: var(--error);
            background-color: rgba(229, 62, 62, 0.05);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(13, 111, 108, 0.15);
        }

        .input-icon {
            position: absolute;
            right: 15px;
            top: 40px;
            color: var(--text-light);
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 40px;
            cursor: pointer;
            color: var(--text-light);
        }

        .remember {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .remember input {
            margin-right: 10px;
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
        }

        .remember label {
            color: var(--text);
            font-size: 0.95rem;
        }

        .btn {
            padding: 0.9rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            width: 100%;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(13, 111, 108, 0.3);
        }

        .btn-primary:disabled {
            background: #94a3b8;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 2rem 0;
            color: var(--text-light);
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid var(--border);
        }

        .divider span {
            padding: 0 1rem;
            font-size: 0.9rem;
        }

        .forgot-password {
            text-align: center;
            margin-top: 1rem;
            font-size: 0.95rem;
        }

        .forgot-password a {
            color: var(--primary);
            text-decoration: none;
            transition: var(--transition);
        }

        .forgot-password a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .signup-link {
            text-align: center;
            margin-top: 2rem;
            font-size: 0.95rem;
            color: var(--text-light);
        }

        .signup-link a {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
        }

        .signup-link a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .alert {
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            animation: fadeIn 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-success {
            background: rgba(56, 161, 105, 0.1);
            border: 1px solid rgba(56, 161, 105, 0.3);
            color: var(--success);
        }

        .alert-error {
            background: rgba(229, 62, 62, 0.1);
            border: 1px solid rgba(229, 62, 62, 0.3);
            color: var(--error);
        }

        .alert-icon {
            margin-right: 0.75rem;
            font-size: 1.25rem;
            min-width: 24px;
            text-align: center;
        }

        .error-message {
            color: var(--error);
            font-size: 0.85rem;
            margin-top: 0.25rem;
            display: block;
            animation: shake 0.3s ease-in-out;
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            75% {
                transform: translateX(5px);
            }
        }

        .loading-spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 10px;
            vertical-align: middle;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }

            .login-brand {
                padding: 2.5rem 1.5rem;
                border-radius: 20px 20px 0 0;
            }

            .login-form {
                padding: 2.5rem 1.5rem;
                border-radius: 0 0 20px 20px;
            }

            .brand-logo {
                width: 90px;
                height: 90px;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-brand">
            <div class="brand-pattern"></div>
            <div class="brand-logo">
                <img src="{{ asset('admin/images/CSB.png') }}" alt="Logo de Nación Taína">
            </div>
            <h2 style="font-size: 2rem; margin-bottom: 1rem; z-index: 2;">Nación Taína</h2>
            <p style="max-width: 350px; line-height: 1.6; z-index: 2;">Bienvenido a la plataforma de gestión de recursos
                culturales</p>
            <div style="margin-top: 2rem; font-size: 0.9rem; opacity: 0.9; z-index: 2;">
                <p>© {{ date('Y') }} Nación Taína. Todos los derechos reservados.</p>
            </div>
        </div>

        <div class="login-form">
            <div class="form-header">
                <h1>Iniciar Sesión</h1>
                <p>Ingresa tus credenciales para acceder al sistema</p>
            </div>

            <!-- Mensajes de error/success del servidor -->
            @if (session('error'))
                <div class="alert alert-error">
                    <span class="alert-icon">⚠️</span>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    <span class="alert-icon">✅</span>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <!-- Mensajes de validación -->
            @if ($errors->any())
                <div class="alert alert-error">
                    <span class="alert-icon">⚠️</span>
                    <span>Por favor corrige los siguientes errores:</span>
                    <ul class="mt-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="loginForm" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="login" class="form-label">Usuario o Correo Electrónico</label>
                    <input type="text" id="login" name="login"
                        class="form-input @error('login') error @enderror" placeholder="usuario@ejemplo.com"
                        autocomplete="username" value="{{ old('login') }}" required>
                    <span class="input-icon">👤</span>
                    @error('login')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" id="password" name="password"
                        class="form-input @error('password') error @enderror" placeholder="••••••••"
                        autocomplete="current-password" required>
                    <span class="password-toggle" id="togglePassword">👁️</span>
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="remember">
                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Recordar sesión</label>
                </div>

                <button type="submit" class="btn btn-primary" id="submitBtn">
                    <span id="submitText">Iniciar Sesión</span>
                    <span id="submitLoader" class="loading-spinner" style="display: none;"></span>
                </button>
            </form>

            <div class="forgot-password">
                <a href="{{-- {{ route('password.request') }} --}}">¿Olvidaste tu contraseña?</a>
            </div>

            <div class="signup-link">
                ¿No tienes una cuenta? <a href="{{-- {{ route('register') }} --}}">Regístrate ahora</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');
            const togglePassword = document.getElementById('togglePassword');
            const passwordField = document.getElementById('password');
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const submitLoader = document.getElementById('submitLoader');

            // Mostrar/ocultar contraseña
            togglePassword.addEventListener('click', function() {
                const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordField.setAttribute('type', type);
                this.textContent = type === 'password' ? '👁️' : '🔒';
            });

            // Validación del formulario en el frontend
            loginForm.addEventListener('submit', function(e) {
                // Limpiar errores previos
                document.querySelectorAll('.error-message').forEach(el => {
                    el.style.display = 'none';
                });

                document.querySelectorAll('.form-input').forEach(input => {
                    input.classList.remove('error');
                });

                const login = document.getElementById('login').value.trim();
                const password = passwordField.value.trim();

                let valid = true;
                const loginError = document.querySelector('#login + .error-message');
                const passwordError = document.querySelector('#password + .error-message');

                // Validar usuario/correo
                if (!login) {
                    showError('login', 'Por favor ingresa tu usuario o correo electrónico');
                    valid = false;
                } else if (!isValidLogin(login)) {
                    showError('login', 'Ingresa un usuario o correo electrónico válido');
                    valid = false;
                }

                // Validar contraseña
                if (!password) {
                    showError('password', 'Por favor ingresa tu contraseña');
                    valid = false;
                } else if (password.length < 5) {
                    showError('password', 'La contraseña debe tener al menos 5 caracteres');
                    valid = false;
                }

                if (!valid) {
                    e.preventDefault();
                } else {
                    // Mostrar loader y deshabilitar botón
                    submitText.textContent = 'Autenticando...';
                    submitLoader.style.display = 'inline-block';
                    submitBtn.disabled = true;
                }
            });

            // Función para mostrar errores
            function showError(fieldId, message) {
                const input = document.getElementById(fieldId);
                const errorElement = input.nextElementSibling.nextElementSibling;

                input.classList.add('error');
                errorElement.textContent = message;
                errorElement.style.display = 'block';

                // Scroll al primer error
                if (fieldId === 'login') {
                    errorElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            }

            // Función para validar usuario/correo
            function isValidLogin(login) {
                // Validar como email o como nombre de usuario (al menos 3 caracteres)
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const usernameRegex = /^[a-zA-Z0-9_]{3,}$/;
                return emailRegex.test(login) || usernameRegex.test(login);
            }

            // Restaurar estado del botón si hay errores del servidor
            if (document.querySelector('.alert-error')) {
                submitText.textContent = 'Iniciar Sesión';
                submitLoader.style.display = 'none';
                submitBtn.disabled = false;
            }
        });
    </script>
</body>

</html>
