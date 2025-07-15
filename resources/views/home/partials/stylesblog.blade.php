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
        /* SLIDER DE POSTS DESTACADOS - ETIQUETA Y TÍTULO EN IMAGEN */
        /* ============================= */
        .featured-slider {
            padding: 80px 0;
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

        .featured-slider-container {
            max-width: 1000px;
            margin: 0 auto;
            position: relative;
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
            height: 500px;
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

        /* Contenedor de etiqueta y título dentro de la imagen */
        .slide-overlay-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 30px;
            background: linear-gradient(transparent, rgba(0,0,0,0.7));
            z-index: 2;
        }

        .slide-category {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 8px 22px;
            border-radius: 50px;
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 15px;
            align-self: flex-start;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .slide-title {
            font-size: 2.2rem;
            margin-bottom: 20px;
            line-height: 1.3;
            color: white;
            transition: var(--transition);
            background-color: rgba(255, 255, 255, 0.15);
            display: inline-block;
            padding: 15px 25px;
            border-radius: 10px;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
        }

        .slide-content {
            padding: 35px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .slide-excerpt {
            margin-bottom: 30px;
            color: #555;
            line-height: 1.8;
            flex-grow: 1;
            font-size: 1.1rem;
        }

        .slide-meta {
            display: flex;
            align-items: center;
            gap: 25px;
            font-size: 1rem;
            color: #777;
            border-top: 1px solid rgba(0, 0, 0, 0.08);
            padding-top: 20px;
            margin-top: auto;
        }

        .slide-meta span {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .swiper-button-next, .swiper-button-prev {
            color: var(--primary);
            background: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            transition: var(--transition);
            z-index: 10;
        }

        .swiper-button-next:hover, .swiper-button-prev:hover {
            background: var(--primary);
            color: white;
            transform: scale(1.1);
        }

        .swiper-button-next::after, .swiper-button-prev::after {
            font-size: 1.6rem;
            font-weight: bold;
        }

        .swiper-pagination {
            position: relative;
            margin-top: 40px;
        }

        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: #ddd;
            opacity: 1;
            transition: var(--transition);
        }

        .swiper-pagination-bullet-active {
            background: var(--primary);
            transform: scale(1.2);
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

       /* ======================== */
        /* ESTILOS PARA LA SECCIÓN DE ÚLTIMAS ENTRADAS */
        /* ======================== */
        .recent-entries-section {
            padding: 100px 0;
            background: linear-gradient(to bottom, rgba(243, 243, 243, 0.7), rgba(255, 255, 255, 0.9));
            position: relative;
            overflow: hidden;
        }
        
        .recent-entries-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" opacity="0.03"><path d="M10,50 Q25,30 50,50 T90,50" fill="none" stroke="%230D6F6C" stroke-width="2"/></svg>');
            background-size: 300px;
            opacity: 0.1;
        }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 50px;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            border-radius: 5px;
        }
        
        .view-all-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 30px;
            background: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .view-all-btn:hover {
            background: var(--accent);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(199, 61, 51, 0.3);
        }
        
        .entries-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }
        
        .entry-card {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .entry-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12);
        }
        
        .entry-image {
            height: 220px;
            position: relative;
            overflow: hidden;
        }
        
        .entry-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .entry-card:hover .entry-image img {
            transform: scale(1.05);
        }
        
        .entry-category {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--accent);
            color: white;
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 2;
        }
        
        .entry-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .entry-title {
            font-size: 1.6rem;
            margin-bottom: 15px;
            line-height: 1.3;
            color: var(--dark);
            transition: var(--transition);
        }
        
        .entry-title:hover {
            color: var(--accent);
        }
        
        .entry-meta {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
            color: #777;
            font-size: 0.95rem;
        }
        
        .entry-meta span {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .entry-excerpt {
            margin-bottom: 25px;
            color: #555;
            line-height: 1.8;
            flex-grow: 1;
        }
        
        .entry-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid rgba(0, 0, 0, 0.08);
            padding-top: 20px;
            margin-top: auto;
        }
        
        .entry-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .entry-tag {
            display: inline-block;
            padding: 6px 16px;
            background-color: rgba(13, 111, 108, 0.1);
            color: var(--primary);
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 500;
            transition: var(--transition);
        }
        
        .entry-tag:hover {
            background-color: var(--primary);
            color: white;
        }
        
        .read-more {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .read-more:hover {
            color: var(--accent);
            gap: 12px;
        }

        /* ======================== */
        /* PAGINACIÓN PROFESIONAL */
        /* ======================== */
        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        
        .pagination {
            display: flex;
            list-style: none;
            gap: 10px;
            background: white;
            border-radius: 50px;
            padding: 10px 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .page-item {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            color: var(--dark);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            border: 2px solid transparent;
        }
        
        .page-link:hover {
            background-color: rgba(13, 111, 108, 0.1);
            color: var(--primary);
        }
        
        .page-link.active {
            background-color: var(--primary);
            color: white;
            border-color: var(--dark);
        }
        
        .page-link.prev, .page-link.next {
            background: var(--light);
            width: auto;
            padding: 0 20px;
            border-radius: 50px;
        }
        
        .page-link.prev:hover, .page-link.next:hover {
            background: var(--primary);
            color: white;
        }
        
        .page-link.disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }
        
        .page-link.disabled:hover {
            background: transparent;
            color: var(--dark);
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
        /* RESPONSIVE */
        /* ======================== */
       @media (max-width: 1200px) {
            .section-title {
                font-size: 2.2rem;
            }
            
            .slide-title {
                font-size: 2rem;
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
            
            .slide-image {
                height: 450px;
            }

            .pagination {
                padding: 8px 15px;
            }
            
            .page-link {
                width: 40px;
                height: 40px;
                font-size: 0.95rem;
            }
            
            .page-link.prev, .page-link.next {
                padding: 0 15px;
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

            .section-title {
                font-size: 2rem;
            }
            
            .slide-title {
                font-size: 1.8rem;
                padding: 12px 20px;
            }
            
            .slide-image {
                height: 400px;
            }
            
            .swiper-button-next, .swiper-button-prev {
                width: 50px;
                height: 50px;
            }
            
            .slide-overlay-content {
                padding: 20px;
            }

             .pagination {
                gap: 5px;
                padding: 6px 12px;
            }
            
            .page-link {
                width: 35px;
                height: 35px;
                font-size: 0.9rem;
            }
            
            .page-link.prev, .page-link.next {
                font-size: 0.85rem;
                padding: 0 12px;
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

            .section-title {
                font-size: 1.8rem;
            }
            
            .slide-title {
                font-size: 1.6rem;
                padding: 10px 15px;
            }
            
            .slide-image {
                height: 350px;
            }
            
            .slide-content {
                padding: 25px;
            }
            
            .slide-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .swiper-button-next, .swiper-button-prev {
                display: none;
            }
            
            .slide-overlay-content {
                padding: 15px;
            }

            .pagination {
                flex-wrap: wrap;
                justify-content: center;
                border-radius: 18px;
            }
            
            .page-link.prev, .page-link.next {
                width: 100%;
                margin-top: 10px;
                order: 3;
            }
        }

        @media (max-width: 992px) {
            .entries-container {
                gap: 30px;
            }
            
            .section-header h2 {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 768px) {
            .recent-entries-section {
                padding: 70px 0;
            }
            
            .section-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .section-header h2 {
                font-size: 2rem;
            }
            
            .entry-title {
                font-size: 1.5rem;
            }
        }
        
        @media (max-width: 576px) {
            .entries-container {
                grid-template-columns: 1fr;
            }
            
            .entry-image {
                height: 200px;
            }
            
            .section-header h2 {
                font-size: 1.8rem;
            }
            
            .entry-content {
                padding: 25px;
            }
        }
    </style>