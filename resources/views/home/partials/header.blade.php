<header class="banner">
        <div class="container">
            <!-- Menú de usuario -->
            <div class="user-menu">
                <!-- Estado: Usuario no autenticado -->
                <a href="{{ route('login') }}" class="menu-link" id="login-link">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Iniciar Sesión</span>
                </a>
                
                <!-- Estado: Usuario autenticado (normal) - oculto inicialmente -->
                <div class="user-indicator" id="user-indicator" style="display: none;">
                    <div class="avatar">U</div>
                    <div>Usuario</div>
                    <div class="role">usuario</div>
                    <div class="dropdown-content">
                        <a href="#"><i class="fas fa-user"></i> Perfil</a>
                        <a href="#"><i class="fas fa-cog"></i> Configuración</a>
                        <a href="#" id="logout-link"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
                    </div>
                </div>
                
                <!-- Estado: Usuario autenticado (admin) - oculto inicialmente -->
                <div class="user-indicator" id="admin-indicator" style="display: none;">
                    <div class="avatar">A</div>
                    <div>Admin</div>
                    <div class="role admin">admin</div>
                    <div class="dropdown-content">
                        <a href="#"><i class="fas fa-user"></i> Perfil</a>
                        <a href="#" id="dashboard-link"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                        <a href="#"><i class="fas fa-users-cog"></i> Administración</a>
                        <a href="#" id="admin-logout-link"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
                    </div>
                </div>
            </div>

            <div class="logo-container">
                <div class="logo-wrapper">
                    <div class="logo">                   
                        <img src="{{ asset('admin/images/logo1.jpg') }}"
                        alt="Logo de TAÍNO" class="logo-image">
                    </div>
                </div>
                <div class="title-container">
                    <h1 class="site-title">Nación Taíno de Borikén</h1>
                    <p class="site-subtitle">PATRIMONIO ANCESTRAL</p>

                    <div class="cultural-elements">
                        <div class="cultural-element"></div>
                        <div class="cultural-element"></div>
                        <div class="cultural-element"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<style>
    :root {
        --primary: #0D6F6C;
        --dark: #070708;
        --accent: #C73D33;
        --light: #F3F3F3;
        --light-bg: #FCFDFD;
        --text: #333333;
        --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: var(--light-bg);
        color: var(--text);
        line-height: 1.6;
    }

    /* ================= */
    /* BANNER PROFESIONAL */
    /* ================= */
    .banner {
        background: linear-gradient(135deg, var(--dark) 0%, var(--primary) 100%);
        color: white;
        padding: 0;
        position: relative;
        height: 300px;
        display: flex;
        align-items: center;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
    }

    .banner::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background:
            radial-gradient(circle at 20% 30%, rgba(13, 111, 108, 0.5) 0%, transparent 25%),
            radial-gradient(circle at 80% 70%, rgba(199, 61, 51, 0.3) 0%, transparent 30%);
        pointer-events: none;
        z-index: 1;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        position: relative;
        z-index: 2;
    }

    .logo-container {
        display: flex;
        align-items: center;
        gap: 2rem;
        width: 100%;
    }

    .logo-wrapper {
        flex: 0 0 300px;
        position: relative;
    }

    .logo {
        width: 110%;
        height: 260px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-radius: 0 50px 50px 0;
        position: relative;
        left: -2rem;
        background: linear-gradient(90deg, rgba(7, 7, 8, 0.8) 0%, rgba(13, 111, 108, 0.6) 100%);
        box-shadow:
            10px 0 30px rgba(0, 0, 0, 0.3),
            inset 0 0 50px rgba(0, 0, 0, 0.4);
        clip-path: polygon(0 0, 100% 0, 90% 100%, 0 100%);
    }

    .logo-image {
        width: 160%;
        height: 130%;
        object-fit: contain;
        display: block;
        filter: grayscale(40%) contrast(110%);
        transition: var(--transition);
        padding: 5px;
    }

    .logo:hover .logo-image {
        transform: scale(1.05);
        filter: grayscale(0%) contrast(120%);
    }

    .title-container {
        flex: 1;
        padding: 2rem;
        background: rgba(7, 7, 8, 0.6);
        border-radius: 20px;
        backdrop-filter: blur(5px);
        border: 1px solid rgba(199, 61, 51, 0.2);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .site-title {
        color: transparent;
        font-size: 3.5rem;
        font-weight: 800;
        letter-spacing: 1px;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        position: relative;
        line-height: 1.1;
        background: linear-gradient(135deg, var(--light) 0%, var(--primary) 50%, var(--accent) 100%);
        -webkit-background-clip: text;
        background-clip: text;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }

    .site-subtitle {
        color: var(--light);
        font-size: 1.2rem;
        font-weight: 300;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-top: 1rem;
        position: relative;
        padding-left: 15px;
    }

    .site-subtitle::before {
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 8px;
        height: 8px;
        background: var(--accent);
        border-radius: 50%;
    }

    .cultural-elements {
        display: flex;
        gap: 15px;
        margin-top: 25px;
    }

    .cultural-element {
        width: 50px;
        height: 5px;
        background: var(--accent);
        border-radius: 3px;
        position: relative;
    }

    .cultural-element:nth-child(2) {
        background: var(--primary);
    }

    .cultural-element:nth-child(3) {
        background: var(--light);
    }

    .cultural-element::after {
        content: "";
        position: absolute;
        top: 50%;
        right: -10px;
        transform: translateY(-50%);
        width: 10px;
        height: 10px;
        background: inherit;
        border-radius: 50%;
    }

    /* ================= */
    /* MENÚ DE USUARIO */
    /* ================= */
    .user-menu {
        position: absolute;
        top: 25px;
        right: 30px;
        z-index: 10;
        display: flex;
        gap: 15px;
    }

    .menu-link {
        color: var(--light);
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 8px 15px;
        border-radius: 30px;
        background: rgba(7, 7, 8, 0.5);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(199, 61, 51, 0.3);
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .menu-link:hover {
        background: var(--accent);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .menu-link.admin {
        background: rgba(199, 61, 51, 0.2);
    }

    .menu-link.admin:hover {
        background: rgba(199, 61, 51, 0.8);
    }

    .user-indicator {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 6px 15px;
        background: rgba(7, 7, 8, 0.5);
        backdrop-filter: blur(10px);
        border-radius: 30px;
        border: 1px solid rgba(13, 111, 108, 0.3);
    }

    .user-indicator .avatar {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary), var(--accent));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        color: white;
    }

    .user-indicator .role {
        font-size: 0.75rem;
        background: var(--primary);
        padding: 2px 8px;
        border-radius: 15px;
        text-transform: uppercase;
        font-weight: 600;
    }

    .user-indicator .role.admin {
        background: var(--accent);
    }

    .dropdown-content {
        position: absolute;
        top: 100%;
        right: 0;
        background: var(--dark);
        border-radius: 10px;
        padding: 10px 0;
        min-width: 180px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: var(--transition);
        z-index: 20;
    }

    .user-indicator:hover .dropdown-content {
        opacity: 1;
        visibility: visible;
        transform: translateY(5px);
    }

    .dropdown-content a {
        display: block;
        padding: 10px 20px;
        color: var(--light);
        text-decoration: none;
        transition: var(--transition);
        font-size: 0.9rem;
    }

    .dropdown-content a:hover {
        background: rgba(255, 255, 255, 0.1);
        padding-left: 25px;
    }

    .dropdown-content a i {
        margin-right: 8px;
        width: 18px;
        text-align: center;
    }

    /* Responsive */
    @media (max-width: 1100px) {
        .site-title {
            font-size: 3rem;
        }

        .logo {
            height: 220px;
        }
    }

    @media (max-width: 900px) {
        .banner {
            height: auto;
            padding: 2rem 0;
        }

        .logo-container {
            flex-direction: column;
            gap: 2rem;
        }

        .logo-wrapper {
            flex: 0 0 auto;
            width: 100%;
        }

        .logo {
            height: 200px;
            border-radius: 0;
            left: 0;
            clip-path: none;
        }

        .title-container {
            margin: 0 2rem;
        }

        .site-title {
            font-size: 2.8rem;
            text-align: center;
        }

        .site-subtitle {
            text-align: center;
            padding-left: 0;
        }

        .site-subtitle::before {
            display: none;
        }

        .cultural-elements {
            justify-content: center;
        }

        .user-menu {
            position: relative;
            top: 0;
            right: 0;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 10px;
        }
    }

    @media (max-width: 600px) {
        .site-title {
            font-size: 2.2rem;
        }

        .logo {
            height: 180px;
        }

        .title-container {
            padding: 1.5rem;
        }

        .user-menu {
            flex-wrap: wrap;
        }
    }

    @media (max-width: 480px) {
        .site-title {
            font-size: 1.8rem;
        }

        .site-subtitle {
            font-size: 1rem;
        }

        .cultural-element {
            width: 35px;
        }

        .menu-link span {
            display: none;
        }

        .menu-link i {
            margin-right: 0;
        }
    }

    /* Contenido de muestra */
    .content {
        max-width: 1200px;
        margin: 3rem auto;
        padding: 0 2rem;
    }

    .content h2 {
        color: var(--primary);
        font-size: 2.2rem;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 10px;
    }

    .content h2::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 80px;
        height: 4px;
        background: var(--accent);
        border-radius: 2px;
    }

    .content p {
        margin-bottom: 1.5rem;
        font-size: 1.1rem;
        line-height: 1.8;
    }

    .features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .feature {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: var(--transition);
        border: 1px solid rgba(13, 111, 108, 0.1);
    }

    .feature:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .feature i {
        font-size: 2.5rem;
        color: var(--primary);
        margin-bottom: 1rem;
    }

    .feature h3 {
        color: var(--dark);
        margin-bottom: 1rem;
    }

    /* Estado de autenticación */
    .auth-state {
        text-align: center;
        padding: 20px;
        background: rgba(13, 111, 108, 0.1);
        border-radius: 10px;
        margin: 30px 0;
    }

    .toggle-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 15px;
    }

    .toggle-btn {
        padding: 10px 20px;
        background: var(--primary);
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 500;
        transition: var(--transition);
    }

    .toggle-btn:hover {
        background: var(--dark);
        transform: translateY(-3px);
    }

    .toggle-btn.logout {
        background: var(--accent);
    }
</style>

<script>
    // Estados de autenticación
    let isAuthenticated = false;
    let isAdmin = false;

    // Elementos del DOM
    const loginLink = document.getElementById('login-link');
    const userIndicator = document.getElementById('user-indicator');
    const adminIndicator = document.getElementById('admin-indicator');
    const loginBtn = document.getElementById('login-btn');
    const adminBtn = document.getElementById('admin-btn');
    const logoutBtn = document.getElementById('logout-btn');
    const authStatus = document.getElementById('auth-status');
    const dashboardLink = document.getElementById('dashboard-link');
    const logoutLink = document.getElementById('logout-link');
    const adminLogoutLink = document.getElementById('admin-logout-link');

    // Funciones para manejar la autenticación
    function loginAsUser() {
        isAuthenticated = true;
        isAdmin = false;
        updateAuthUI();
    }

    function loginAsAdmin() {
        isAuthenticated = true;
        isAdmin = true;
        updateAuthUI();
    }

    function logout() {
        isAuthenticated = false;
        isAdmin = false;
        updateAuthUI();
    }

    function updateAuthUI() {
        if (isAuthenticated) {
            loginLink.style.display = 'none';
            logoutBtn.style.display = 'block';

            if (isAdmin) {
                userIndicator.style.display = 'none';
                adminIndicator.style.display = 'flex';
                authStatus.textContent = 'Estás autenticado como Administrador';
                authStatus.innerHTML += ' <i class="fas fa-crown"></i>';
            } else {
                userIndicator.style.display = 'flex';
                adminIndicator.style.display = 'none';
                authStatus.textContent = 'Estás autenticado como Usuario';
            }
        } else {
            loginLink.style.display = 'flex';
            userIndicator.style.display = 'none';
            adminIndicator.style.display = 'none';
            logoutBtn.style.display = 'none';
            authStatus.textContent = 'Actualmente no estás autenticado';
        }
    }

    // Event Listeners
    loginBtn.addEventListener('click', loginAsUser);
    adminBtn.addEventListener('click', loginAsAdmin);
    logoutBtn.addEventListener('click', logout);
    logoutLink.addEventListener('click', logout);
    adminLogoutLink.addEventListener('click', logout);

    // Pequeña animación para los elementos culturales
    document.addEventListener('DOMContentLoaded', function() {
        const elements = document.querySelectorAll('.cultural-element');

        elements.forEach((el, index) => {
            setTimeout(() => {
                el.style.transform = 'scaleX(1.2)';
                setTimeout(() => {
                    el.style.transform = 'scaleX(1)';
                }, 300);
            }, index * 300);
        });

        // Simular clic en el dashboard para demostración
        dashboardLink.addEventListener('click', function(e) {
            e.preventDefault();
            alert(
                'Acceso al Dashboard Administrativo:\nAquí los administradores pueden gestionar todos los aspectos del sistema.'
                );
        });
    });
</script>
