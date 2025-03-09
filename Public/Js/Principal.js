document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('header');

    // Smooth Scroll Avanzado
    const smoothScroll = (target) => {
        const targetElement = document.querySelector(target);
        if (!targetElement) return;

        const headerHeight = header.offsetHeight;
        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;
        const startPosition = window.pageYOffset;
        const distance = targetPosition - startPosition;
        const duration = Math.min(800, Math.abs(distance * 0.8));
        let startTime = null;

        const animateScroll = (timestamp) => {
            if (!startTime) startTime = timestamp;
            const progress = timestamp - startTime;
            const percentage = Math.min(progress / duration, 1);

            // Easing personalizado
            const easing = t => t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;

            window.scrollTo(0, startPosition + distance * easing(percentage));

            if (progress < duration) {
                requestAnimationFrame(animateScroll);
            } else {
                // Restaurar animaciones después de hacer scroll
                resetAnimations(targetElement);
            }
        };

        requestAnimationFrame(animateScroll);
    };

    // Reiniciar animaciones cuando una sección vuelve a estar visible
    const resetAnimations = (section) => {
        const elements = section.querySelectorAll('.empresa-item, .service-item, .cliente-item');
        elements.forEach((el) => {
            el.style.transform = 'translateY(50px)';
            el.style.opacity = '0';
            setTimeout(() => {
                el.style.transition = 'transform 0.8s ease-out, opacity 0.8s';
                el.style.transform = 'translateY(0)';
                el.style.opacity = '1';
            }, 100);
        });
    };

    // Animaciones de entrada con Intersection Observer
    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                animateSectionElements(entry.target);
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('section').forEach(section => {
        sectionObserver.observe(section);
    });

    // Animaciones de los elementos internos de cada sección
    const animateSectionElements = (section) => {
        const elements = section.querySelectorAll('.empresa-item, .service-item, .cliente-item');
        elements.forEach((el, index) => {
            setTimeout(() => {
                el.style.transition = 'transform 0.8s ease-out, opacity 0.8s';
                el.style.transform = 'translateY(0)';
                el.style.opacity = '1';
            }, index * 150);
        });
    };

    // Navegación suave y restauración de animaciones
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

    // Efecto de onda al hacer clic
    const createClickWave = (e) => {
        const wave = document.createElement('div');
        wave.className = 'click-wave';
        wave.style.left = `${e.clientX}px`;
        wave.style.top = `${e.clientY}px`;
        document.body.appendChild(wave);

        setTimeout(() => wave.remove(), 1000);
    };

    // Control del submenú de filosofía
    const filosofiaSubmenu = document.getElementById('filosofia-submenu');
    const filosofiaArrow = document.getElementById('arrow');
    const submenuContainer = document.getElementById('has-submenu');

    submenuContainer.addEventListener('click', (e) => {
        e.preventDefault();
        filosofiaSubmenu.classList.toggle('visible');
        filosofiaArrow.classList.toggle('rotate');
        e.stopPropagation();
    });

    // Cerrar el submenú al hacer clic fuera de él
    document.addEventListener('click', (e) => {
        if (!filosofiaSubmenu.contains(e.target) && !submenuContainer.contains(e.target)) {
            filosofiaSubmenu.classList.remove('visible');
            filosofiaArrow.classList.remove('rotate');
        }
    });

    // Evitar que los clics dentro del submenú cierren el menú
    filosofiaSubmenu.addEventListener('click', (e) => {
        e.stopPropagation();
    });
});
