<style>
    /* ======================== */
    /* VARIABLES Y RESET GLOBAL */
    /* ======================== */
    :root {
        --primary: #0D6F6C;
        /* Verde azulado principal */
        --dark: #070708;
        /* Negro profundo */
        --accent: #C73D33;
        /* Rojo terracota */
        --light: #F3F3F3;
        /* Gris claro */
        --light-bg: #FCFDFD;
        /* Blanco con tono cálido */
        --text: #333333;
        /* Texto principal */
        --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        color: var(--text);
        background-color: var(--light-bg);
        line-height: 1.7;
        overflow-x: hidden;
        scroll-behavior: smooth;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        color: var(--dark);
    }

    .container {
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 30px;
    }

    .btn {
        display: inline-block;
        padding: 14px 32px;
        background-color: var(--accent);
        color: white;
        text-decoration: none;
        border-radius: 50px;
        font-weight: 600;
        transition: var(--transition);
        border: 2px solid var(--accent);
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
    }

    .btn:hover {
        background-color: transparent;
        color: var(--accent);
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(199, 61, 51, 0.3);
    }

    .btn-outline {
        background-color: transparent;
        color: var(--accent);
        border-color: var(--accent);
    }

    .btn-outline:hover {
        background-color: var(--accent);
        color: white;
    }

    section {
        padding: 80px 0;
        /* Padding reducido */
    }

    .section-title {
        text-align: center;
        margin-bottom: 60px;
        font-size: 2.5rem;
        position: relative;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(to right, var(--primary), var(--accent));
        border-radius: 5px;
    }
   

    /* ================== */
    /* NAVEGACIÓN CON ICONOS */
    /* ================== */
    nav {
        background-color: var(--light-bg);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 30px;
        height: 70px;
    }

    .nav-menu {
        display: flex;
        list-style: none;
    }

    .nav-item {
        position: relative;
    }

    /* Iconos añadidos a los enlaces */
    .nav-link {
        color: var(--dark);
        text-decoration: none;
        padding: 22px 18px;
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 500;
        transition: var(--transition);
        position: relative;
        font-size: 1.05rem;
    }

    .nav-link i {
        font-size: 0.9rem;
        width: 20px;
        text-align: center;
    }

    .nav-link:hover {
        color: var(--accent);
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 3px;
        background-color: var(--accent);
        transition: var(--transition);
        border-radius: 3px;
    }

    .nav-link:hover::after {
        width: 70%;
    }

    .dropdown-menu {
        position: absolute;
        background-color: var(--light-bg);
        min-width: 240px;
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(12px);
        transition: var(--transition);
        z-index: 1000;
        padding: 12px 0;
        top: 100%;
    }

    .dropdown-item {
        padding: 12px 22px;
        display: flex;
        align-items: center;
        gap: 10px;
        color: var(--text);
        text-decoration: none;
        transition: var(--transition);
        font-size: 0.95rem;
    }

    .dropdown-item i {
        width: 18px;
        text-align: center;
    }

    .dropdown-item:hover {
        background-color: rgba(199, 61, 51, 0.05);
        color: var(--accent);
        padding-left: 25px;
    }

    .nav-item:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .mobile-toggle {
        display: none;
        background: none;
        border: none;
        color: var(--primary);
        font-size: 1.8rem;
        cursor: pointer;
        z-index: 1001;
    }

    /* ======================== */
    /* SLIDER (ALTURA REDUCIDA) */
    /* ======================== */
    .hero-slider {
        height: 70vh;
        /* Altura reducida de 90vh a 70vh */
        position: relative;
        overflow: hidden;
    }

    .slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 1.2s ease-in-out;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
    }

    .slide.active {
        opacity: 1;
        z-index: 1;
    }

    .slide-content {
        max-width: 700px;
        padding: 0 40px;
        color: white;
        transform: translateY(40px);
        opacity: 0;
        transition: transform 1s ease, opacity 1s ease;
    }

    .slide.active .slide-content {
        transform: translateY(0);
        opacity: 1;
    }

    .slide-title {
        font-size: 3.2rem;
        line-height: 1.1;
        margin-bottom: 20px;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
    }

    .slide-subtitle {
        font-size: 1.1rem;
        margin-bottom: 30px;
        max-width: 600px;
        opacity: 0.9;
        font-weight: 300;
    }

    .slider-nav {
        position: absolute;
        bottom: 40px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 12px;
        z-index: 10;
    }

    .slider-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: var(--transition);
    }

    .slider-dot.active {
        background-color: white;
        transform: scale(1.3);
    }

    .slider-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.2);
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        font-size: 1.2rem;
        cursor: pointer;
        transition: var(--transition);
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        backdrop-filter: blur(5px);
    }

    .slider-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: translateY(-50%) scale(1.1);
    }

    .prev-btn {
        left: 30px;
    }

    .next-btn {
        right: 30px;
    }

    /* ================== */
    /* SECCIÓN DE CARACTERÍSTICAS */
    /* ================== */
    .features-section {
        background-color: white;
        position: relative;
    }

    .features-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .feature-card {
        background: linear-gradient(to bottom, white, var(--light));
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.06);
        transition: var(--transition);
        position: relative;
        z-index: 2;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .feature-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
        height: 180px;
        background: linear-gradient(135deg, var(--primary), var(--dark));
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 3.5rem;
    }

    .feature-content {
        padding: 30px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .feature-title {
        font-size: 1.6rem;
        margin-bottom: 18px;
        color: var(--primary);
    }

    .feature-description {
        margin-bottom: 22px;
        color: #555;
        flex-grow: 1;
        font-size: 0.95rem;
    }

    /* ======================= */
    /* SECCIÓN DE CONTENIDO DESTACADO */
    /* ======================= */
    .featured-section {
        background: linear-gradient(to bottom, var(--light), var(--light-bg));
        position: relative;
        overflow: hidden;
    }

    .featured-container {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 50px;
        position: relative;
        z-index: 2;
    }

    .featured-img {
        flex: 1;
        min-width: 320px;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
        position: relative;
    }

    .featured-img::before {
        content: '';
        position: absolute;
        top: -15px;
        left: -15px;
        width: 120px;
        height: 120px;
        background: var(--accent);
        opacity: 0.3;
        border-radius: 18px;
        z-index: -1;
    }

    .featured-img::after {
        content: '';
        position: absolute;
        bottom: -15px;
        right: -15px;
        width: 120px;
        height: 120px;
        background: var(--primary);
        opacity: 0.3;
        border-radius: 18px;
        z-index: -1;
    }

    .featured-img img {
        width: 100%;
        height: 450px;
        object-fit: cover;
        display: block;
        border-radius: 18px;
    }

    .featured-content {
        flex: 1;
        min-width: 320px;
    }

    .featured-title {
        font-size: 2.4rem;
        margin-bottom: 22px;
        color: var(--dark);
        line-height: 1.2;
    }

    .featured-text {
        margin-bottom: 22px;
        font-size: 1rem;
        color: #555;
    }

    .featured-list {
        list-style: none;
        margin-bottom: 30px;
    }

    .featured-list li {
        margin-bottom: 12px;
        position: relative;
        padding-left: 32px;
        font-size: 1rem;
    }

    .featured-list li::before {
        content: '\f00c';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 2px;
        color: var(--accent);
        background: rgba(199, 61, 51, 0.1);
        width: 24px;
        height: 24px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* ============================== */
    /* SECCIÓN DE VIDEO (FONDO Y ALTURA REDUCIDA) */
    /* ============================== */
    .video-section {
        position: relative;
        height: 60vh;
        /* Altura reducida */
        overflow: hidden;
        display: flex;
        align-items: center;
    }

    .video-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
    }

    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(7, 7, 8, 0.85);
        /* Fondo oscuro sobre el video */
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        padding: 25px;
    }

    .video-content {
        max-width: 800px;
    }

    .video-title {
        font-size: 2.8rem;
        margin-bottom: 25px;
        text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        line-height: 1.2;
    }

    .video-text {
        font-size: 1.1rem;
        margin-bottom: 35px;
        max-width: 650px;
        margin-left: auto;
        margin-right: auto;
        font-weight: 300;
        opacity: 0.9;
    }

    .play-btn {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        cursor: pointer;
        transition: var(--transition);
        margin: 0 auto;
        backdrop-filter: blur(5px);
        border: 2px solid rgba(255, 255, 255, 0.2);
    }

    .play-btn:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: scale(1.1);
    }

    /* ================= */
    /* SECCIÓN DE SOCIOS */
    /* ================= */
    .partners-section {
        padding: 80px 0;
        background-color: white;
        position: relative;
        overflow: hidden;
    }

    .partners-title {
        text-align: center;
        margin-bottom: 60px;
        font-size: 2.2rem;
        color: var(--dark);
    }

    .partners-container {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 40px;
    }

    .swiper {
        width: 100%;
        height: 150px;
        padding: 20px 0;
    }

    .swiper-slide {
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        background: rgba(243, 243, 243, 0.5);
        border-radius: 12px;
        transition: var(--transition);
        height: 100px;
    }

    .swiper-slide:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .partner-logo {
        max-width: 180px;
        max-height: 70px;
        filter: grayscale(100%) opacity(0.7);
        transition: var(--transition);
    }

    .swiper-slide:hover .partner-logo {
        filter: grayscale(0%) opacity(1);
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: var(--primary);
        background: rgba(255, 255, 255, 0.9);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: var(--transition);
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background: var(--primary);
        color: white;
        transform: scale(1.1);
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 1.4rem;
        font-weight: bold;
    }

    /* ========================= */
    /* FOOTER (REDISEÑO COMPACTO) */
    /* ========================= */
    footer {
        background: linear-gradient(135deg, var(--dark), var(--primary));
        color: rgba(255, 255, 255, 0.8);
        padding: 70px 0 30px;
        /* Padding reducido */
        position: relative;
    }

    .footer-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 40px;
        margin-bottom: 50px;
    }

    .footer-col h3 {
        color: white;
        font-size: 1.5rem;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 12px;
    }

    .footer-col h3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 45px;
        height: 3px;
        background: var(--accent);
        border-radius: 3px;
    }

    .footer-col p {
        margin-bottom: 20px;
        line-height: 1.8;
        font-size: 0.95rem;
    }

    .footer-links {
        list-style: none;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 0.95rem;
    }

    .footer-links a:hover {
        color: white;
        transform: translateX(5px);
    }

    .footer-links a i {
        color: var(--accent);
        font-size: 0.8rem;
    }

    .social-links {
        display: flex;
        gap: 12px;
        margin-top: 20px;
    }

    .social-links a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        font-size: 1.1rem;
        transition: var(--transition);
    }

    .social-links a:hover {
        background-color: var(--accent);
        transform: translateY(-4px);
    }

    .copyright {
        text-align: center;
        padding-top: 30px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        opacity: 0.7;
        font-size: 0.85rem;
    }

    /* ======================== */
    /* DISEÑO RESPONSIVE */
    /* ======================== */
    @media (max-width: 1200px) {
        .section-title {
            font-size: 2.2rem;
        }

        .slide-title {
            font-size: 2.8rem;
        }

        .featured-title {
            font-size: 2.2rem;
        }
    }

    @media (max-width: 992px) {
        .nav-menu {
            position: fixed;
            top: 0;
            left: -100%;
            flex-direction: column;
            background-color: white;
            width: 280px;
            height: 100vh;
            text-align: left;
            transition: var(--transition);
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
            padding: 90px 25px 25px;
            z-index: 1000;
        }

        .nav-menu.active {
            left: 0;
        }

        .mobile-toggle {
            display: block;
        }

        .nav-item {
            margin-bottom: 8px;
        }

        .nav-link {
            padding: 12px 0;
        }

        .dropdown-menu {
            position: static;
            opacity: 1;
            visibility: visible;
            transform: none;
            box-shadow: none;
            background-color: transparent;
            width: 100%;
            display: none;
            margin-top: 8px;
            padding: 0;
        }

        .dropdown-item {
            padding: 10px 0 10px 18px;
            color: #777;
        }

        .dropdown-item:hover {
            background-color: transparent;
            padding-left: 22px;
        }

        .nav-item:hover .dropdown-menu {
            display: block;
        }

        .hero-slider {
            height: 60vh;
        }

        .slide-title {
            font-size: 2.4rem;
        }

        .video-section {
            height: 50vh;
        }
    }

    @media (max-width: 768px) {
        .banner {
            height: 140px;
        }

        .logo {
            width: 65px;
            height: 65px;
            font-size: 26px;
        }

        .site-title {
            font-size: 2rem;
        }

        .slide-title {
            font-size: 2rem;
        }

        .slide-subtitle {
            font-size: 1rem;
        }

        .video-title {
            font-size: 2rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .featured-title {
            font-size: 1.8rem;
        }

        .play-btn {
            width: 65px;
            height: 65px;
            font-size: 1.6rem;
        }

        .swiper {
            height: 130px;
        }

        .swiper-slide {
            height: 90px;
        }
    }

    @media (max-width: 576px) {
        .container {
            padding: 0 20px;
        }

        .banner {
            height: 120px;
        }

        .site-title {
            font-size: 1.6rem;
        }

        .site-subtitle {
            font-size: 0.85rem;
        }

        .slide-content {
            padding: 0 20px;
        }

        .slide-title {
            font-size: 1.6rem;
        }

        .video-title {
            font-size: 1.6rem;
        }

        .section-title {
            font-size: 1.8rem;
        }

        .featured-img,
        .featured-content {
            min-width: 100%;
        }

        .hero-slider {
            height: 50vh;
        }

        .swiper-button-next,
        .swiper-button-prev {
            display: none;
        }
    }
</style>
