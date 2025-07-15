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
                delay: 7000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
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