// Principal.js
document.addEventListener('DOMContentLoaded', () => {
  // Configuración inicial
  const header = document.querySelector('header');
  const videoHero = document.querySelector('#bg-video');
  
  // Smooth Scroll Avanzado con easing personalizado
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
          
          // Función de easing personalizada (easeInOutCubic)
          const easing = t => t<.5 ? 4*t*t*t : (t-1)*(2*t-2)*(2*t-2)+1;
          
          window.scrollTo(0, startPosition + distance * easing(percentage));
          
          if (progress < duration) {
              requestAnimationFrame(animateScroll);
          }
      };

      requestAnimationFrame(animateScroll);
  };

  // Animaciones de secciones con Intersection Observer
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

  // Animación de elementos internos de la sección
  const animateSectionElements = (section) => {
      const elements = section.querySelectorAll('.empresa-item, .service-item, .cliente-item');
      elements.forEach((el, index) => {
          setTimeout(() => {
              el.style.transform = 'translateY(0)';
              el.style.opacity = '1';
          }, index * 150);
      });
  };

  // Controladores de eventos
  const setupEventListeners = () => {
      // Navegación suave
      document.querySelectorAll('nav a[href^="#"], .hero button').forEach(element => {
          element.addEventListener('click', (e) => {
              e.preventDefault();
              const target = element.getAttribute('href');
              if (target === '#empresa' && element.tagName === 'BUTTON') {
                  smoothScroll('#empresa');
              } else if (target.startsWith('#')) {
                  smoothScroll(target);
              }
              
              // Efecto de onda de clic
              createClickWave(e);
          });
      });

      // Scroll Parallax
      window.addEventListener('scroll', updateParallax);
  };

  // Efecto de onda al hacer clic
  const createClickWave = (e) => {
      const wave = document.createElement('div');
      wave.className = 'click-wave';
      wave.style.left = `${e.clientX}px`;
      wave.style.top = `${e.clientY}px`;
      document.body.appendChild(wave);
      
      setTimeout(() => wave.remove(), 1000);
  };

  // Inicialización
  setupEventListeners();
});

// Control del submenú de filosofía
function toggleFilosofiaMenu(e) {
  e.preventDefault();
  const submenu = document.getElementById('filosofia-submenu');
  const arrow = document.querySelector('.has-submenu .arrow');
  
  submenu.classList.toggle('active');
  arrow.classList.toggle('rotated');
  
  // Cerrar al hacer clic fuera
  document.addEventListener('click', function closeMenu(event) {
      if (!event.target.closest('.has-submenu')) {
          submenu.classList.remove('active');
          arrow.classList.remove('rotated');
          document.removeEventListener('click', closeMenu);
      }
  }, { once: true });
}