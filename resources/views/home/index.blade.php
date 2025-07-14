<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asentamiento Taíno - Patrimonio Cultural</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary: #2c5e62;
            --secondary: #e9c46a;
            --accent: #e76f51;
            --dark: #264653;
            --light: #f8f9fa;
            --text: #333333;
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
            background-color: var(--light);
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
            box-shadow: 0 10px 25px rgba(231, 111, 81, 0.3);
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
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 70px;
            font-size: 2.8rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 5px;
            background: linear-gradient(to right, var(--secondary), var(--accent));
            border-radius: 5px;
        }

        /* Banner Section */
        .banner {
            background: linear-gradient(135deg, rgba(44, 94, 98, 0.95) 0%, rgba(38, 70, 83, 0.95) 100%);
            color: white;
            padding: 30px 0;
            position: relative;
            height: 180px;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M0,0 Q50,30 100,0 L100,100 Q50,70 0,100 Z" fill="rgba(233, 196, 106, 0.1)"/></svg>');
            background-size: cover;
            opacity: 0.3;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .logo {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, var(--secondary), var(--accent));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            color: white;
            border: 3px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            z-index: 2;
        }

        .site-title {
            font-size: 2.8rem;
            letter-spacing: 1px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        .site-subtitle {
            font-size: 1.1rem;
            font-weight: 300;
            margin-top: 8px;
            letter-spacing: 2px;
            opacity: 0.9;
        }

        /* Navigation Menu */
        nav {
            background-color: white;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 30px;
            height: 80px;
        }

        .nav-logo {
            color: var(--primary);
            font-size: 1.8rem;
            font-weight: 700;
            display: none;
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            color: var(--dark);
            text-decoration: none;
            padding: 28px 22px;
            display: block;
            font-weight: 500;
            transition: var(--transition);
            position: relative;
            font-size: 1.05rem;
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
            background-color: white;
            min-width: 240px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
            border-radius: 12px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(15px);
            transition: var(--transition);
            z-index: 1000;
            padding: 15px 0;
            top: 100%;
        }

        .dropdown-item {
            padding: 14px 25px;
            display: block;
            color: var(--text);
            text-decoration: none;
            transition: var(--transition);
            font-size: 1rem;
        }

        .dropdown-item:hover {
            background-color: rgba(231, 111, 81, 0.05);
            color: var(--accent);
            padding-left: 30px;
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

        /* Hero Slider */
        .hero-slider {
            height: 90vh;
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
            padding: 0 50px;
            color: white;
            transform: translateY(50px);
            opacity: 0;
            transition: transform 1s ease, opacity 1s ease;
        }

        .slide.active .slide-content {
            transform: translateY(0);
            opacity: 1;
        }

        .slide-title {
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 25px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
        }

        .slide-subtitle {
            font-size: 1.3rem;
            margin-bottom: 35px;
            max-width: 600px;
            opacity: 0.9;
            font-weight: 300;
        }

        .slider-nav {
            position: absolute;
            bottom: 50px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 15px;
            z-index: 10;
        }

        .slider-dot {
            width: 14px;
            height: 14px;
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
            width: 60px;
            height: 60px;
            border-radius: 50%;
            font-size: 1.3rem;
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
            left: 40px;
        }

        .next-btn {
            right: 40px;
        }

        /* Three Columns Section */
        .features-section {
            background-color: white;
            position: relative;
        }

        .features-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }

        .feature-card {
            background: linear-gradient(to bottom, white, #f8f9fa);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .feature-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.12);
        }

        .feature-icon {
            height: 200px;
            background: linear-gradient(135deg, var(--primary), var(--dark));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
        }

        .feature-content {
            padding: 35px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .feature-title {
            font-size: 1.7rem;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .feature-description {
            margin-bottom: 25px;
            color: #555;
            flex-grow: 1;
        }

        /* Featured Content Section */
        .featured-section {
            background: linear-gradient(to bottom, #f8f9fa, #eef0f3);
            position: relative;
            overflow: hidden;
        }

        .featured-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 60px;
            position: relative;
            z-index: 2;
        }

        .featured-img {
            flex: 1;
            min-width: 350px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
            position: relative;
        }

        .featured-img::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            width: 150px;
            height: 150px;
            background: var(--secondary);
            border-radius: 20px;
            z-index: -1;
        }

        .featured-img::after {
            content: '';
            position: absolute;
            bottom: -20px;
            right: -20px;
            width: 150px;
            height: 150px;
            background: var(--accent);
            border-radius: 20px;
            z-index: -1;
        }

        .featured-img img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            display: block;
            border-radius: 20px;
        }

        .featured-content {
            flex: 1;
            min-width: 350px;
        }

        .featured-title {
            font-size: 2.8rem;
            margin-bottom: 25px;
            color: var(--dark);
            line-height: 1.2;
        }

        .featured-text {
            margin-bottom: 25px;
            font-size: 1.1rem;
            color: #555;
        }

        .featured-list {
            list-style: none;
            margin-bottom: 35px;
        }

        .featured-list li {
            margin-bottom: 15px;
            position: relative;
            padding-left: 35px;
            font-size: 1.1rem;
        }

        .featured-list li::before {
            content: '\f00c';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: var(--accent);
            background: rgba(231, 111, 81, 0.1);
            width: 26px;
            height: 26px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Video Background Section */
        .video-section {
            position: relative;
            height: 80vh;
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
            background: rgba(38, 70, 83, 0.85);
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 30px;
        }

        .video-content {
            max-width: 900px;
        }

        .video-title {
            font-size: 3.5rem;
            margin-bottom: 30px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
        }

        .video-text {
            font-size: 1.3rem;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 300;
            opacity: 0.9;
        }

        .play-btn {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
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

        /* Brands Section */
        .partners-section {
            padding: 100px 0;
            background-color: white;
            position: relative;
            overflow: hidden;
        }

        .partners-title {
            text-align: center;
            margin-bottom: 70px;
            font-size: 2.5rem;
            color: var(--dark);
        }

        .partners-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 60px;
        }

        .partner-logo {
            height: 80px;
            filter: grayscale(100%) opacity(0.7);
            transition: var(--transition);
        }

        .partner-logo:hover {
            filter: grayscale(0%) opacity(1);
            transform: translateY(-10px);
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--dark), var(--primary));
            color: rgba(255, 255, 255, 0.8);
            padding: 100px 0 40px;
            position: relative;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
            margin-bottom: 60px;
        }

        .footer-col h3 {
            color: white;
            font-size: 1.6rem;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--accent);
            border-radius: 3px;
        }

        .footer-col p {
            margin-bottom: 25px;
            line-height: 1.8;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 15px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-links a:hover {
            color: var(--secondary);
            transform: translateX(5px);
        }

        .footer-links a i {
            color: var(--accent);
            font-size: 0.9rem;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1.2rem;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--accent);
            transform: translateY(-5px);
        }

        .copyright {
            text-align: center;
            padding-top: 40px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0.7;
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .section-title {
                font-size: 2.5rem;
            }

            .slide-title {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 992px) {
            .nav-menu {
                position: fixed;
                top: 0;
                left: -100%;
                flex-direction: column;
                background-color: white;
                width: 300px;
                height: 100vh;
                text-align: left;
                transition: var(--transition);
                box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
                padding: 100px 30px 30px;
                z-index: 1000;
            }

            .nav-menu.active {
                left: 0;
            }

            .mobile-toggle {
                display: block;
            }

            .nav-item {
                margin-bottom: 10px;
            }

            .nav-link {
                padding: 15px 0;
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
                margin-top: 10px;
                padding: 0;
            }

            .dropdown-item {
                padding: 12px 0 12px 20px;
                color: #777;
            }

            .dropdown-item:hover {
                background-color: transparent;
                padding-left: 25px;
            }

            .nav-item:hover .dropdown-menu {
                display: block;
            }

            .hero-slider {
                height: 80vh;
            }

            .slide-title {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            .banner {
                height: 160px;
            }

            .logo {
                width: 70px;
                height: 70px;
                font-size: 30px;
            }

            .site-title {
                font-size: 2rem;
            }

            .slide-title {
                font-size: 2.5rem;
            }

            .slide-subtitle {
                font-size: 1.1rem;
            }

            .video-title {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .featured-title {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 576px) {
            .container {
                padding: 0 20px;
            }

            .banner {
                height: 140px;
            }

            .site-title {
                font-size: 1.8rem;
            }

            .slide-content {
                padding: 0 30px;
            }

            .slide-title {
                font-size: 2rem;
            }

            .video-title {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .play-btn {
                width: 70px;
                height: 70px;
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
    <!-- Banner Section -->
    <header class="banner">
        <div class="container">
            <div class="logo-container">
                <div class="logo">
                    <i class="fas fa-mountain-sun"></i>
                </div>
                <div>
                    <h1 class="site-title">Asentamiento Taíno</h1>
                    <p class="site-subtitle">PATRIMONIO ANCESTRAL</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation Menu -->
    <nav>
        <div class="container nav-container">
            <button class="mobile-toggle">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Cultura</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Historia Taína</a></li>
                        <li><a href="#" class="dropdown-item">Arte y Simbolismo</a></li>
                        <li><a href="#" class="dropdown-item">Creencias Espirituales</a></li>
                        <li><a href="#" class="dropdown-item">Arquitectura</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Explorar</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Sitios Arqueológicos</a></li>
                        <li><a href="#" class="dropdown-item">Colección Digital</a></li>
                        <li><a href="#" class="dropdown-item">Recorridos Virtuales</a></li>
                        <li><a href="#" class="dropdown-item">Mapa Interactivo</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Artefactos</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Cerámica</a></li>
                        <li><a href="#" class="dropdown-item">Herramientas</a></li>
                        <li><a href="#" class="dropdown-item">Joyas</a></li>
                        <li><a href="#" class="dropdown-item">Esculturas</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Investigación</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Slider -->
    <section class="hero-slider">
        <div class="slide active"
            style="background-image: url('https://images.unsplash.com/photo-1567599753824-17d1bb5ed9fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1800&q=80');">
            <div class="slide-content">
                <h2 class="slide-title">Descubre la Herencia Taína</h2>
                <p class="slide-subtitle">Explora el legado de una de las culturas más fascinantes del Caribe
                    precolombino</p>
                <a href="#" class="btn">Explorar Ahora</a>
            </div>
        </div>
        <div class="slide"
            style="background-image: url('https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=1800&q=80');">
            <div class="slide-content">
                <h2 class="slide-title">Artefactos Ancestrales</h2>
                <p class="slide-subtitle">Colección única de cerámica y herramientas utilizadas por nuestros ancestros
                </p>
                <a href="#" class="btn btn-outline">Ver Colección</a>
            </div>
        </div>
        <div class="slide"
            style="background-image: url('https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1800&q=80');">
            <div class="slide-content">
                <h2 class="slide-title">Arqueología Viva</h2>
                <p class="slide-subtitle">Participa en nuestras expediciones y descubre los secretos del pasado</p>
                <a href="#" class="btn">Únete a Nosotros</a>
            </div>
        </div>

        <button class="slider-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
        <button class="slider-btn next-btn"><i class="fas fa-chevron-right"></i></button>

        <div class="slider-nav">
            <div class="slider-dot active"></div>
            <div class="slider-dot"></div>
            <div class="slider-dot"></div>
        </div>
    </section>

    <!-- Three Columns Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title">Nuestros Pilares</h2>
            <div class="features-container">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-hands-holding-circle"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Preservación</h3>
                        <p class="feature-description">Protegemos y conservamos los sitios arqueológicos taínos
                            utilizando tecnología de vanguardia para garantizar que las generaciones futuras puedan
                            aprender de este patrimonio invaluable.</p>
                        <a href="#" class="btn btn-outline">Conoce Nuestro Trabajo</a>
                    </div>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Educación</h3>
                        <p class="feature-description">Desarrollamos programas educativos innovadores para todas las
                            edades, llevando la historia y cultura taína a escuelas, universidades y comunidades.</p>
                        <a href="#" class="btn btn-outline">Explorar Programas</a>
                    </div>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Comunidad</h3>
                        <p class="feature-description">Trabajamos con comunidades indígenas y locales para revitalizar
                            tradiciones y conectar a las personas con sus raíces ancestrales a través de talleres y
                            eventos culturales.</p>
                        <a href="#" class="btn btn-outline">Involúcrate</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Content Section -->
    <section class="featured-section">
        <div class="container">
            <div class="featured-container">
                <div class="featured-img">
                    <img src="https://images.unsplash.com/photo-1566936737687-8f392a237b8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Arte Taíno">
                </div>
                <div class="featured-content">
                    <h2 class="featured-title">Simbolismo en el Arte Taíno</h2>
                    <p class="featured-text">El arte taíno refleja una profunda conexión con la naturaleza y el cosmos,
                        expresada a través de símbolos y patrones que han sobrevivido por siglos.</p>

                    <ul class="featured-list">
                        <li>Petroglifos que representan deidades y eventos cosmológicos</li>
                        <li>Cerámica con diseños geométricos complejos</li>
                        <li>Duho: asientos ceremoniales tallados en madera</li>
                        <li>Amuletos de piedra y concha con significado espiritual</li>
                    </ul>

                    <p class="featured-text">Nuestra exposición permanente ofrece una experiencia inmersiva en el mundo
                        simbólico de los taínos, con más de 200 artefactos auténticos.</p>
                    <a href="#" class="btn">Visitar Exposición</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Background Section -->
    <section class="video-section">
        <video class="video-bg" autoplay muted loop>
            <source
                src="https://player.vimeo.com/external/392580164.sd.mp4?s=8b3e3d9e5c3c84a4d3c8f8a3c3e3d3e5&profile_id=164&oauth2_token_id=57447761"
                type="video/mp4">
            Tu navegador no soporta videos HTML5.
        </video>
        <div class="video-overlay">
            <div class="video-content">
                <h2 class="video-title">Reviviendo Nuestras Raíces</h2>
                <p class="video-text">Sumérgete en la historia y cultura taína a través de experiencias inmersivas que
                    combinan tecnología moderna con sabiduría ancestral.</p>
                <div class="play-btn">
                    <i class="fas fa-play"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="partners-section">
        <div class="container">
            <h2 class="partners-title">Instituciones Colaboradoras</h2>
            <div class="partners-container">
                <img src="https://via.placeholder.com/200x80?text=Museo+del+Hombre" alt="Museo del Hombre"
                    class="partner-logo">
                <img src="https://via.placeholder.com/200x80?text=UNESCO" alt="UNESCO" class="partner-logo">
                <img src="https://via.placeholder.com/200x80?text=Universidad+Caribe" alt="Universidad Caribe"
                    class="partner-logo">
                <img src="https://via.placeholder.com/200x80?text=Instituto+Arqueológico" alt="Instituto Arqueológico"
                    class="partner-logo">
                <img src="https://via.placeholder.com/200x80?text=Patrimonio+Cultural" alt="Patrimonio Cultural"
                    class="partner-logo">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3>Asentamiento Taíno</h3>
                    <p>Dedicados a la preservación, investigación y difusión de la herencia cultural taína para las
                        generaciones presentes y futuras.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h3>Explorar</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Colección Digital</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Recorridos Virtuales</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Investigaciones</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Eventos</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Galería Multimedia</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Recursos</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Biblioteca Digital</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Material Educativo</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Publicaciones</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Artículos Académicos</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Glosario Taíno</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Contacto</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Camino Ancestral 123, Caribe Central</p>
                    <p><i class="fas fa-phone"></i> +1 809 123 4567</p>
                    <p><i class="fas fa-envelope"></i> contacto@asentamientotaino.org</p>
                    <p><i class="fas fa-clock"></i> Martes a Domingo: 9:00 AM - 6:00 PM</p>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2023 Asentamiento Taíno. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navMenu = document.querySelector('.nav-menu');

        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            mobileToggle.innerHTML = navMenu.classList.contains('active') ?
                '<i class="fas fa-times"></i>' :
                '<i class="fas fa-bars"></i>';
        });

        // Slider Functionality
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.slider-dot');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');

        let currentSlide = 0;
        const slideCount = slides.length;

        function goToSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            slides[index].classList.add('active');
            dots[index].classList.add('active');
            currentSlide = index;
        }

        function nextSlide() {
            let nextIndex = (currentSlide + 1) % slideCount;
            goToSlide(nextIndex);
        }

        function prevSlide() {
            let prevIndex = (currentSlide - 1 + slideCount) % slideCount;
            goToSlide(prevIndex);
        }

        // Event Listeners
        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                goToSlide(index);
            });
        });

        // Auto slide
        setInterval(nextSlide, 7000);

        // Video Play Button
        const playBtn = document.querySelector('.play-btn');
        const video = document.querySelector('.video-bg');

        playBtn.addEventListener('click', () => {
            if (video.paused) {
                video.play();
                playBtn.innerHTML = '<i class="fas fa-pause"></i>';
            } else {
                video.pause();
                playBtn.innerHTML = '<i class="fas fa-play"></i>';
            }
        });

        // Animation on scroll
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe elements that should animate
        document.querySelectorAll('.feature-card, .featured-container, .section-title').forEach(el => {
            el.classList.add('animate-on-scroll');
            observer.observe(el);
        });
    </script>
</body>

</html>
