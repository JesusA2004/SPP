document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('header');
    const clientesContainer = document.querySelector('.cliente-slider');
    const title = document.querySelector('#title');
    const submenuContainer = document.querySelector('.has-submenu');
    const filosofiaSubmenu = document.getElementById('filosofia-submenu');
    const filosofiaArrow = document.getElementById('arrow');

    // Smooth Scroll Mejorado con Easing Elástico
    const smoothScroll = (target) => {
        const targetElement = document.querySelector(target);
        if (!targetElement) return;

        const headerHeight = header.offsetHeight;
        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;
        const startPosition = window.pageYOffset;
        const distance = targetPosition - startPosition;
        const duration = Math.min(600, Math.max(300, Math.abs(distance * 0.3)));
        let startTime = null;

        const easing = t => {
            const c4 = (2 * Math.PI) / 3;
            return t === 0 ? 0 : 
                t === 1 ? 1 : 
                Math.pow(2, -10 * t) * Math.sin((t * 10 - 0.75) * c4) + 1;
        };

        const animateScroll = (timestamp) => {
            if (!startTime) startTime = timestamp;
            const progress = timestamp - startTime;
            const percentage = Math.min(progress / duration, 1);
            
            window.scrollTo(0, startPosition + distance * easing(percentage));

            if (progress < duration) {
                requestAnimationFrame(animateScroll);
            } else {
                resetAnimations(targetElement);
            }
        };

        requestAnimationFrame(animateScroll);
    };

    // Sistema de Animaciones
    const resetAnimations = (section) => {
        const elements = section.querySelectorAll('.empresa-item, .service-item, .cliente-item');
        elements.forEach((el) => {
            el.style.transform = 'translateY(30px)';
            el.style.opacity = '0';
            setTimeout(() => {
                el.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94), opacity 0.6s';
                el.style.transform = 'translateY(0)';
                el.style.opacity = '1';
            }, 50);
        });
    };

    // Observer para animaciones
    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                animateSectionElements(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('section').forEach(section => {
        sectionObserver.observe(section);
    });

    // Animación escalonada de elementos
    const animateSectionElements = (section) => {
        const elements = section.querySelectorAll('.empresa-item, .service-item, .cliente-item');
        elements.forEach((el, index) => {
            setTimeout(() => {
                el.style.transform = 'translateY(0)';
                el.style.opacity = '1';
            }, index * 120);
        });
    };

    // Control de Eventos
    document.querySelectorAll('nav a[href^="#"], .hero button').forEach(element => {
        element.addEventListener('click', (e) => {
            e.preventDefault();
            const target = element.getAttribute('href');
            if (target.startsWith('#')) {
                smoothScroll(target);
                history.pushState(null, null, target);
            }
            createClickWave(e);
        });
    });

    // Efecto de Onda Dinámico
    const createClickWave = (e) => {
        const wave = document.createElement('div');
        wave.className = 'click-wave';
        wave.style.cssText = `
            left: ${e.clientX}px;
            top: ${e.clientY}px;
            background: radial-gradient(circle, rgba(255,204,0,0.4) 0%, transparent 70%);
        `;
        document.body.appendChild(wave);
        setTimeout(() => wave.remove(), 1000);
    };

    // Control del Submenú Mejorado
    let submenuTimeout;
    submenuContainer.addEventListener('mouseenter', () => {
        clearTimeout(submenuTimeout);
        filosofiaSubmenu.classList.add('visible');
        filosofiaArrow.classList.add('rotate');
    });

    submenuContainer.addEventListener('mouseleave', () => {
        submenuTimeout = setTimeout(() => {
            filosofiaSubmenu.classList.remove('visible');
            filosofiaArrow.classList.remove('rotate');
        }, 300);
    });

    document.addEventListener('click', (e) => {
        if (!submenuContainer.contains(e.target)) {
            filosofiaSubmenu.classList.remove('visible');
            filosofiaArrow.classList.remove('rotate');
        }
    });

    // Slider de Clientes Optimizado
    const slider = document.querySelector('.cliente-slider');
    const items = document.querySelectorAll('.cliente-item');
    const prevButton = document.querySelector('.cliente-prev');
    const nextButton = document.querySelector('.cliente-next');
    let currentIndex = 0;
    let autoSlideInterval;

    const showSlide = (index) => {
        slider.style.transform = `translateX(-${index * 100}%)`;
    };

    const nextSlide = () => {
        currentIndex = (currentIndex + 1) % items.length;
        showSlide(currentIndex);
    };

    const prevSlide = () => {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        showSlide(currentIndex);
    };

    const startAutoSlide = () => {
        autoSlideInterval = setInterval(nextSlide, 5000);
    };

    const resetAutoSlide = () => {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    };

    prevButton.addEventListener('click', () => {
        resetAutoSlide();
        prevSlide();
    });

    nextButton.addEventListener('click', () => {
        resetAutoSlide();
        nextSlide();
    });

    showSlide(currentIndex);
    startAutoSlide();

    // Inicialización del botón "Saber Más"
    document.getElementById("saberMas").addEventListener("click", function() {
        smoothScroll("#empresa");
    });
    
});

