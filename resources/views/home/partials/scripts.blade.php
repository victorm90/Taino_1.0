<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.js"></script>
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
    /* FUNCIONALIDAD DEL SLIDER */
    /* ====================== */
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.slider-dot');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    let currentSlide = 0;
    const slideCount = slides.length;

    // Función para cambiar a un slide específico
    function goToSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        slides[index].classList.add('active');
        dots[index].classList.add('active');
        currentSlide = index;
    }

    // Navegación al siguiente slide
    function nextSlide() {
        let nextIndex = (currentSlide + 1) % slideCount;
        goToSlide(nextIndex);
    }

    // Navegación al slide anterior
    function prevSlide() {
        let prevIndex = (currentSlide - 1 + slideCount) % slideCount;
        goToSlide(prevIndex);
    }

    // Event listeners para botones y puntos de navegación
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
        });
    });

    // Cambio automático de slides cada 7 segundos
    setInterval(nextSlide, 7000);

    /* ====================== */
    /* CONTROL DE VIDEO */
    /* ====================== */
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

    /* ====================== */
    /* CARRUSEL DE LOGOS */
    /* ====================== */
    const swiper = new Swiper('.swiper', {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            576: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 40
            }
        }
    });

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
    document.querySelectorAll('.feature-card, .featured-container, .section-title').forEach(el => {
        el.classList.add('animate-on-scroll');
        observer.observe(el);
    });
</script>
