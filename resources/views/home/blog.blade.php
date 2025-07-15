<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Cultural - Asentamiento Taíno</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        /* ======================== */
        /* VARIABLES Y RESET GLOBAL */
        /* ======================== */
        :root {
            --primary: #0D6F6C;
            --dark: #070708;
            --accent: #C73D33;
            --light: #F3F3F3;
            --light-bg: #FCFDFD;
            --text: #333333;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --gold: #D4AF37;
            --earth: #8D6E63;
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

    /* ================= */
    /* BANNER CON ONDULACIONES */
    /* ================= */
    .banner {
        background: linear-gradient(135deg, var(--primary) 0%, rgba(13, 111, 108, 0.95) 100%);
        color: white;
        padding: 25px 0;
        position: relative;
        height: 160px;
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
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M0,0 Q50,30 100,0 L100,100 Q50,70 0,100 Z" fill="rgba(255, 255, 255, 0.1)"/></svg>');
        background-size: cover;
        opacity: 0.3;
    }

    .banner::after {
        content: "";
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 100%;
        height: 40px;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="%23FCFDFD"></path></svg>');
        background-size: 100% 100%;
        background-repeat: no-repeat;
        z-index: 10;
    }

    .logo-container {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .logo {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--primary), var(--accent));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
        color: white;
        border: 3px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        z-index: 2;
    }

    .site-title {
        font-size: 2.4rem;
        letter-spacing: 1px;
        text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        position: relative;
    }

    .site-subtitle {
        font-size: 1rem;
        font-weight: 300;
        margin-top: 8px;
        letter-spacing: 2px;
        opacity: 0.9;
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

        /* ============================= */
        /* NUEVO SLIDER DE POSTS DESTACADOS */
        /* ============================= */
        .featured-slider {
            padding: 60px 0;
            background: linear-gradient(to bottom, rgba(13, 111, 108, 0.05), var(--light-bg));
            position: relative;
            overflow: hidden;
        }

        .featured-slider::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" opacity="0.03"><path d="M25,10 Q50,25 75,10 L75,90 Q50,75 25,90 Z" fill="%230D6F6C"/></svg>');
            background-size: 300px;
            opacity: 0.3;
            z-index: 0;
        }

        .swiper-slide {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            height: auto;
            display: flex;
            flex-direction: column;
        }

        .swiper-slide:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12);
        }

        .slide-image {
            height: 280px;
            overflow: hidden;
            position: relative;
        }

        .slide-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .swiper-slide:hover .slide-image img {
            transform: scale(1.05);
        }

        .slide-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .slide-category {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 15px;
            align-self: flex-start;
        }

        .slide-title {
            font-size: 1.6rem;
            margin-bottom: 15px;
            line-height: 1.3;
            color: var(--dark);
            transition: var(--transition);
        }

        .slide-excerpt {
            margin-bottom: 20px;
            color: #555;
            line-height: 1.7;
            flex-grow: 1;
        }

        .slide-meta {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 0.9rem;
            color: #777;
            border-top: 1px solid rgba(0, 0, 0, 0.08);
            padding-top: 15px;
            margin-top: auto;
        }

        .slide-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .swiper-button-next, .swiper-button-prev {
            color: var(--primary);
            background: rgba(255, 255, 255, 0.9);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }

        .swiper-button-next:hover, .swiper-button-prev:hover {
            background: var(--primary);
            color: white;
        }

        .swiper-button-next::after, .swiper-button-prev::after {
            font-size: 1.4rem;
            font-weight: bold;
        }

        /* ============================= */
        /* FILTRO DE ETIQUETAS AVANZADO */
        /* ============================= */
        .tags-filter-section {
            padding: 60px 0;
            background-color: var(--light-bg);
        }

        .tags-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .filter-controls {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .filter-select {
            padding: 12px 20px;
            border: 2px solid #eaeaea;
            border-radius: 50px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            background-color: white;
            min-width: 200px;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%230D6F6C' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 16px;
            padding-right: 45px;
            cursor: pointer;
        }

        .filter-select:focus {
            outline: none;
            border-color: var(--primary);
        }

        .filter-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .filter-btn:hover {
            background: var(--dark);
        }

        .tags-cloud-advanced {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 30px;
        }

        .tag-advanced {
            display: inline-flex;
            padding: 10px 22px;
            background-color: rgba(13, 111, 108, 0.08);
            color: var(--primary);
            border-radius: 50px;
            font-size: 0.95rem;
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition);
            border: 2px solid transparent;
            cursor: pointer;
            align-items: center;
            gap: 8px;
        }

        .tag-advanced:hover {
            background-color: var(--primary);
            color: white;
            transform: translateY(-3px);
        }

        .tag-advanced.active {
            background-color: var(--primary);
            color: white;
            border-color: var(--dark);
        }

        .tag-advanced i {
            font-size: 0.9rem;
        }

        .selected-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 25px;
            padding: 20px;
            background: rgba(199, 61, 51, 0.05);
            border-radius: 12px;
        }

        .selected-tag {
            display: inline-flex;
            padding: 8px 16px;
            background-color: var(--accent);
            color: white;
            border-radius: 50px;
            font-size: 0.9rem;
            align-items: center;
            gap: 8px;
        }

        .selected-tag .remove-tag {
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            padding: 0;
            font-size: 1.1rem;
        }

        /* ============================= */
        /* COLUMNAS DE ÚLTIMAS ENTRADAS */
        /* ============================= */
        .columns-section {
            padding: 60px 0;
            background: linear-gradient(to bottom, var(--light-bg), rgba(243, 243, 243, 0.7));
        }

        .columns-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }

        .column {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.06);
            transition: var(--transition);
        }

        .column:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        }

        .column-header {
            padding: 25px 30px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            color: white;
        }

        .column-title {
            font-size: 1.8rem;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .column-title i {
            font-size: 1.5rem;
        }

        .column-content {
            padding: 30px;
        }

        .column-post {
            display: flex;
            gap: 20px;
            padding: 20px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
        }

        .column-post:last-child {
            border-bottom: none;
        }

        .column-post-image {
            width: 120px;
            height: 100px;
            border-radius: 12px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .column-post-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .column-post:hover .column-post-image img {
            transform: scale(1.05);
        }

        .column-post-content {
            flex-grow: 1;
        }

        .column-post-title {
            font-size: 1.2rem;
            margin-bottom: 8px;
            transition: var(--transition);
        }

        .column-post-title:hover {
            color: var(--accent);
        }

        .column-post-meta {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 0.85rem;
            color: #777;
            margin-bottom: 10px;
        }

        .column-post-excerpt {
            font-size: 0.95rem;
            color: #555;
            line-height: 1.6;
        }

        .column-link {
            display: inline-block;
            margin-top: 25px;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .column-link:hover {
            color: var(--accent);
            gap: 12px;
        }

        /* ============================= */
        /* SECCIÓN DE TIMELINE HISTÓRICA */
        /* ============================= */
        .timeline-section {
            padding: 80px 0;
            background: linear-gradient(to bottom, rgba(243, 243, 243, 0.7), rgba(215, 204, 200, 0.1));
            position: relative;
        }

        .timeline-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" opacity="0.03"><path d="M10,50 Q25,30 50,50 T90,50" fill="none" stroke="%230D6F6C" stroke-width="2"/></svg>');
            background-size: 300px;
            opacity: 0.2;
        }

        .timeline {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
            padding: 40px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--earth);
            left: 50%;
            margin-left: -2px;
            border-radius: 2px;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 60px;
            width: 100%;
        }

        .timeline-item:nth-child(odd) {
            padding-right: calc(50% + 30px);
            text-align: right;
        }

        .timeline-item:nth-child(even) {
            padding-left: calc(50% + 30px);
        }

        .timeline-dot {
            position: absolute;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--gold);
            border: 4px solid var(--earth);
        }

        .timeline-item:nth-child(odd) .timeline-dot {
            right: calc(-10px - 2px);
        }

        .timeline-item:nth-child(even) .timeline-dot {
            left: calc(-10px - 2px);
        }

        .timeline-content {
            background: white;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }

        .timeline-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary), var(--accent));
        }

        .timeline-date {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--gold);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .timeline-title {
            font-size: 1.6rem;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .timeline-desc {
            color: #555;
            line-height: 1.7;
        }

        /* ======================== */
        /* RESPONSIVE ADICIONAL */
        /* ======================== */
        @media (max-width: 992px) {
            .columns-container {
                grid-template-columns: 1fr;
            }
            
            .timeline::before {
                left: 30px;
            }
            
            .timeline-item:nth-child(odd),
            .timeline-item:nth-child(even) {
                padding: 0 0 0 70px;
                text-align: left;
            }
            
            .timeline-item:nth-child(odd) .timeline-dot,
            .timeline-item:nth-child(even) .timeline-dot {
                left: 20px;
            }
        }

        @media (max-width: 768px) {
            .tags-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .filter-controls {
                width: 100%;
                flex-wrap: wrap;
            }
            
            .filter-select {
                flex-grow: 1;
            }
        }
    </style>
</head>

<body>
    <!-- Banner Section header -->
     @include('home.partials.header')

    <!-- Navigation Menu -->
     @include('home.partials.menu')

    <!-- Nuevo Slider de Posts Destacados -->
    <section class="featured-slider">
        <div class="container">
            <h2 class="section-title">Tesoros Culturales Destacados</h2>
            <div class="swiper featured-slider-container">
                <div class="swiper-wrapper">
                    <!-- Post 1 -->
                    <div class="swiper-slide">
                        <div class="slide-image">
                            <img src="https://images.unsplash.com/photo-1567599753824-17d1bb5ed9fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Descubrimientos arqueológicos">
                        </div>
                        <div class="slide-content">
                            <span class="slide-category">Arqueología</span>
                            <h3 class="slide-title">Descubrimientos en el Valle Sagrado</h3>
                            <p class="slide-excerpt">Nuevas excavaciones revelan estructuras ceremoniales que cambian nuestra comprensión de la organización social taína...</p>
                            <div class="slide-meta">
                                <span><i class="fas fa-user"></i> Dr. Carlos Rivera</span>
                                <span><i class="fas fa-calendar"></i> 15 Oct, 2023</span>
                                <span><i class="fas fa-comment"></i> 24 Comentarios</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Post 2 -->
                    <div class="swiper-slide">
                        <div class="slide-image">
                            <img src="https://images.unsplash.com/photo-1566936737687-8f392a237b8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Simbolismo taíno">
                        </div>
                        <div class="slide-content">
                            <span class="slide-category">Arte</span>
                            <h3 class="slide-title">Simbolismo en la Cerámica Taína</h3>
                            <p class="slide-excerpt">Análisis profundo de patrones geométricos y su conexión con la cosmovisión ancestral...</p>
                            <div class="slide-meta">
                                <span><i class="fas fa-user"></i> Dra. María López</span>
                                <span><i class="fas fa-calendar"></i> 12 Sep, 2023</span>
                                <span><i class="fas fa-comment"></i> 18 Comentarios</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Post 3 -->
                    <div class="swiper-slide">
                        <div class="slide-image">
                            <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Petroglifos Taínos">
                        </div>
                        <div class="slide-content">
                            <span class="slide-category">Espiritualidad</span>
                            <h3 class="slide-title">Petroglifos de la Montaña Sagrada</h3>
                            <p class="slide-excerpt">Complejas representaciones de deidades que revelan nueva información sobre la espiritualidad taína...</p>
                            <div class="slide-meta">
                                <span><i class="fas fa-user"></i> Prof. José Martínez</span>
                                <span><i class="fas fa-calendar"></i> 28 Ago, 2023</span>
                                <span><i class="fas fa-comment"></i> 32 Comentarios</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Post 4 -->
                    <div class="swiper-slide">
                        <div class="slide-image">
                            <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Artefactos Taínos">
                        </div>
                        <div class="slide-content">
                            <span class="slide-category">Artefactos</span>
                            <h3 class="slide-title">Joyas Rituales Recién Descubiertas</h3>
                            <p class="slide-excerpt">Exclusivo: Colección de joyas ceremoniales encontradas en la región oriental revelan técnicas avanzadas...</p>
                            <div class="slide-meta">
                                <span><i class="fas fa-user"></i> Dra. Ana Rodríguez</span>
                                <span><i class="fas fa-calendar"></i> 5 Ago, 2023</span>
                                <span><i class="fas fa-comment"></i> 15 Comentarios</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Post 5 -->
                    <div class="swiper-slide">
                        <div class="slide-image">
                            <img src="https://images.unsplash.com/photo-1567599753824-17d1bb5ed9fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Agricultura Taína">
                        </div>
                        <div class="slide-content">
                            <span class="slide-category">Historia</span>
                            <h3 class="slide-title">Técnicas Agrícolas Precolombinas</h3>
                            <p class="slide-excerpt">Sistema de montículos "conucos" que creaba un ecosistema sostenible con cultivos como la yuca y el maíz...</p>
                            <div class="slide-meta">
                                <span><i class="fas fa-user"></i> Dr. Miguel Santana</span>
                                <span><i class="fas fa-calendar"></i> 22 Jul, 2023</span>
                                <span><i class="fas fa-comment"></i> 28 Comentarios</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <!-- Sección de Etiquetas y Filtro -->
    <section class="tags-filter-section">
        <div class="container">
            <div class="tags-header">
                <h2 class="section-title">Explorar por Temáticas</h2>
                <div class="filter-controls">
                    <select class="filter-select">
                        <option>Ordenar por: Más Recientes</option>
                        <option>Ordenar por: Más Populares</option>
                        <option>Ordenar por: Más Comentados</option>
                    </select>
                    <button class="filter-btn">
                        <i class="fas fa-filter"></i> Filtrar
                    </button>
                </div>
            </div>
            
            <div class="tags-cloud-advanced">
                <a href="#" class="tag-advanced active">
                    <i class="fas fa-mountain"></i> Arqueología
                </a>
                <a href="#" class="tag-advanced">
                    <i class="fas fa-paint-brush"></i> Arte
                </a>
                <a href="#" class="tag-advanced">
                    <i class="fas fa-pray"></i> Espiritualidad
                </a>
                <a href="#" class="tag-advanced">
                    <i class="fas fa-tools"></i> Herramientas
                </a>
                <a href="#" class="tag-advanced">
                    <i class="fas fa-seedling"></i> Agricultura
                </a>
                <a href="#" class="tag-advanced">
                    <i class="fas fa-language"></i> Lengua
                </a>
                <a href="#" class="tag-advanced">
                    <i class="fas fa-gem"></i> Joyas
                </a>
                <a href="#" class="tag-advanced">
                    <i class="fas fa-utensils"></i> Alimentación
                </a>
            </div>
            
            <div class="selected-tags">
                <span class="selected-tag">
                    Arqueología <button class="remove-tag"><i class="fas fa-times"></i></button>
                </span>
                <span class="selected-tag">
                    Herramientas <button class="remove-tag"><i class="fas fa-times"></i></button>
                </span>
            </div>
        </div>
    </section>

    <!-- Sección de Columnas con Últimas Entradas -->
    <section class="columns-section">
        <div class="container">
            <div class="columns-container">
                <!-- Columna 1: Investigaciones Recientes -->
                <div class="column">
                    <div class="column-header">
                        <h3 class="column-title"><i class="fas fa-microscope"></i> Investigaciones Recientes</h3>
                    </div>
                    <div class="column-content">
                        <div class="column-post">
                            <div class="column-post-image">
                                <img src="https://images.unsplash.com/photo-1566936737687-8f392a237b8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Petroglifos">
                            </div>
                            <div class="column-post-content">
                                <h4 class="column-post-title">Nueva Interpretación de los Petroglifos</h4>
                                <div class="column-post-meta">
                                    <span><i class="fas fa-user"></i> Dra. Elena Morales</span>
                                    <span><i class="fas fa-calendar"></i> 3 Nov, 2023</span>
                                </div>
                                <p class="column-post-excerpt">Revelaciones sobre los símbolos astronómicos encontrados en las montañas centrales...</p>
                            </div>
                        </div>
                        
                        <div class="column-post">
                            <div class="column-post-image">
                                <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Cerámica">
                            </div>
                            <div class="column-post-content">
                                <h4 class="column-post-title">Técnicas de Cocción en Cerámica Taína</h4>
                                <div class="column-post-meta">
                                    <span><i class="fas fa-user"></i> Prof. Luis Hernández</span>
                                    <span><i class="fas fa-calendar"></i> 28 Oct, 2023</span>
                                </div>
                                <p class="column-post-excerpt">Análisis de los hornos encontrados en el asentamiento de Caguana revela técnicas avanzadas...</p>
                            </div>
                        </div>
                        
                        <div class="column-post">
                            <div class="column-post-image">
                                <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Artefactos">
                            </div>
                            <div class="column-post-content">
                                <h4 class="column-post-title">Reconstrucción de Herramientas Agrícolas</h4>
                                <div class="column-post-meta">
                                    <span><i class="fas fa-user"></i> Dr. Carlos Jiménez</span>
                                    <span><i class="fas fa-calendar"></i> 20 Oct, 2023</span>
                                </div>
                                <p class="column-post-excerpt">Proyecto experimental recrea las herramientas usadas en el cultivo de yuca...</p>
                            </div>
                        </div>
                        
                        <a href="#" class="column-link">
                            Ver todas las investigaciones <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Columna 2: Descubrimientos Recientes -->
                <div class="column">
                    <div class="column-header">
                        <h3 class="column-title"><i class="fas fa-compass"></i> Descubrimientos Recientes</h3>
                    </div>
                    <div class="column-content">
                        <div class="column-post">
                            <div class="column-post-image">
                                <img src="https://images.unsplash.com/photo-1567599753824-17d1bb5ed9fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Excavación">
                            </div>
                            <div class="column-post-content">
                                <h4 class="column-post-title">Plaza Ceremonial en Valle Sagrado</h4>
                                <div class="column-post-meta">
                                    <span><i class="fas fa-user"></i> Equipo Arqueológico</span>
                                    <span><i class="fas fa-calendar"></i> 15 Oct, 2023</span>
                                </div>
                                <p class="column-post-excerpt">Estructura circular con alineación astronómica descubierta en las excavaciones del mes pasado...</p>
                            </div>
                        </div>
                        
                        <div class="column-post">
                            <div class="column-post-image">
                                <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Estatuilla">
                            </div>
                            <div class="column-post-content">
                                <h4 class="column-post-title">Estatuilla de Cemí Encontrada</h4>
                                <div class="column-post-meta">
                                    <span><i class="fas fa-user"></i> Dra. Sofía Ramírez</span>
                                    <span><i class="fas fa-calendar"></i> 8 Oct, 2023</span>
                                </div>
                                <p class="column-post-excerpt">Figura ritual en perfecto estado de conservación encontrada en cueva ceremonial...</p>
                            </div>
                        </div>
                        
                        <div class="column-post">
                            <div class="column-post-image">
                                <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Herramientas">
                            </div>
                            <div class="column-post-content">
                                <h4 class="column-post-title">Conjunto de Herramientas de Pesca</h4>
                                <div class="column-post-meta">
                                    <span><i class="fas fa-user"></i> Dr. Roberto Méndez</span>
                                    <span><i class="fas fa-calendar"></i> 1 Oct, 2023</span>
                                </div>
                                <p class="column-post-excerpt">Descubrimiento revela técnicas avanzadas de pesca costera en comunidades taínas...</p>
                            </div>
                        </div>
                        
                        <a href="#" class="column-link">
                            Ver todos los descubrimientos <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Timeline Histórica -->
    <section class="timeline-section">
        <div class="container">
            <h2 class="section-title">Cronología de la Cultura Taína</h2>
            <div class="timeline">
                <!-- Año 1200 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date"><i class="fas fa-calendar-day"></i> 1200 d.C.</div>
                        <h3 class="timeline-title">Asentamientos en las Antillas Mayores</h3>
                        <p class="timeline-desc">Los taínos se establecen en La Española, Puerto Rico y Cuba, desarrollando complejas estructuras sociales y agrícolas. Crean los primeros bateyes ceremoniales.</p>
                    </div>
                </div>
                
                <!-- Año 1400 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date"><i class="fas fa-calendar-day"></i> 1400 d.C.</div>
                        <h3 class="timeline-title">Apogeo Cultural</h3>
                        <p class="timeline-desc">La cultura taína alcanza su máximo desarrollo con redes comerciales entre islas, elaborados sistemas agrícolas y complejas creencias espirituales. Se desarrolla el arte de la cerámica y la talla en madera.</p>
                    </div>
                </div>
                
                <!-- Año 1492 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date"><i class="fas fa-calendar-day"></i> 1492 d.C.</div>
                        <h3 class="timeline-title">Llegada de Colón</h3>
                        <p class="timeline-desc">El 12 de octubre, Cristóbal Colón desembarca en Guanahaní (San Salvador), iniciando el contacto entre Europa y las civilizaciones taínas. Se inicia un período de intercambio cultural y conflicto.</p>
                    </div>
                </div>
                
                <!-- Año 1510 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date"><i class="fas fa-calendar-day"></i> 1510-1530 d.C.</div>
                        <h3 class="timeline-title">Declive Demográfico</h3>
                        <p class="timeline-desc">Las enfermedades traídas por los europeos y los sistemas de trabajo forzado reducen la población taína en un 90%. Muchos aspectos culturales comienzan a desaparecer o se fusionan con otras culturas.</p>
                    </div>
                </div>
                
                <!-- Año 1950 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date"><i class="fas fa-calendar-day"></i> 1950 d.C.</div>
                        <h3 class="timeline-title">Redescubrimiento Arqueológico</h3>
                        <p class="timeline-desc">Expediciones científicas redescubren importantes yacimientos taínos, comenzando una nueva era de investigación y preservación de la herencia cultural.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ... (El resto de tus secciones existentes) ... -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script>
        /* ====================== */
        /* TOGGLE MENÚ MÓVIL */
        /* ====================== */
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navMenu = document.querySelector('.nav-menu');

        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            mobileToggle.innerHTML = navMenu.classList.contains('active') ?
                '<i class="fas fa-times"></i>' :
                '<i class="fas fa-bars"></i>';
        });

        /* ====================== */
        /* SLIDER DE POSTS DESTACADOS */
        /* ====================== */
        const featuredSlider = new Swiper('.featured-slider-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1200: {
                    slidesPerView: 3,
                }
            }
        });

        /* ====================== */
        /* FILTRO DE ETIQUETAS */
        /* ====================== */
        const tagElements = document.querySelectorAll('.tag-advanced');
        const selectedTagsContainer = document.querySelector('.selected-tags');
        
        tagElements.forEach(tag => {
            tag.addEventListener('click', function(e) {
                e.preventDefault();
                this.classList.toggle('active');
                
                updateSelectedTags();
            });
        });
        
        // Actualizar etiquetas seleccionadas
        function updateSelectedTags() {
            // Limpiar contenedor
            selectedTagsContainer.innerHTML = '';
            
            // Obtener etiquetas activas
            const activeTags = document.querySelectorAll('.tag-advanced.active');
            
            if(activeTags.length > 0) {
                activeTags.forEach(tag => {
                    const tagName = tag.textContent.trim();
                    const tagElement = document.createElement('span');
                    tagElement.className = 'selected-tag';
                    tagElement.innerHTML = `
                        ${tagName} 
                        <button class="remove-tag">
                            <i class="fas fa-times"></i>
                        </button>
                    `;
                    
                    // Evento para eliminar etiqueta
                    tagElement.querySelector('.remove-tag').addEventListener('click', function() {
                        tag.classList.remove('active');
                        updateSelectedTags();
                    });
                    
                    selectedTagsContainer.appendChild(tagElement);
                });
            } else {
                selectedTagsContainer.innerHTML = '<p>Seleccione al menos una etiqueta para filtrar</p>';
            }
        }
        
        // Inicializar etiquetas seleccionadas
        updateSelectedTags();

        /* ====================== */
        /* ANIMACIÓN AL SCROLL */
        /* ====================== */
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

        // Observar elementos que deben animarse
        document.querySelectorAll('.swiper-slide, .column, .timeline-item').forEach(el => {
            el.classList.add('animate-on-scroll');
            observer.observe(el);
        });
    </script>
</body>
</html>