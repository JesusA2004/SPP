document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.querySelector('.hamburger');
  const menuPrincipal = document.querySelector('.menu-principal');
  const submenuTriggers = document.querySelectorAll('.has-submenu');

  // Si no existen en el DOM, salimos para evitar errores.
  if (!hamburger || !menuPrincipal) {
    console.warn("No se encontró '.hamburger' o '.menu-principal' en el DOM.");
    return;
  }

  // Control del menú hamburguesa
  hamburger.addEventListener('click', function(e) {
    e.stopPropagation();
    this.classList.toggle('active');
    menuPrincipal.classList.toggle('active');
    document.body.classList.toggle('no-scroll');
  });

  // Control de submenús en modo responsive (pantallas <= 768px)
  submenuTriggers.forEach(trigger => {
    trigger.addEventListener('click', function(e) {
      if (window.innerWidth <= 768) {
        // Evitamos el toggle si se hace clic directamente en un enlace
        // (para permitir la navegación)
        if (e.target.tagName !== 'A' && !e.target.closest('a')) {
          e.preventDefault();
          const submenu = this.querySelector('.contenido');
          const arrow = this.querySelector('.arrow');
          
          // Verificamos que existan antes de usarlos
          if (submenu) {
            submenu.classList.toggle('visible');
          }
          if (arrow) {
            arrow.classList.toggle('rotate');
          }
        }
      }
    });
  });

  // Cerrar menús al hacer clic fuera de <nav> y del botón hamburguesa
  document.addEventListener('click', function(e) {
    if (!e.target.closest('nav') && !e.target.closest('.hamburger')) {
      hamburger.classList.remove('active');
      menuPrincipal.classList.remove('active');
      document.body.classList.remove('no-scroll');

      // Cerramos también todos los submenús abiertos
      const allSubmenus = document.querySelectorAll('.contenido.visible');
      allSubmenus.forEach(sub => sub.classList.remove('visible'));

      // Quitamos la rotación de las flechas
      const allArrows = document.querySelectorAll('.arrow.rotate');
      allArrows.forEach(arr => arr.classList.remove('rotate'));
    }
  });

  // Hover para desktop (sólo si la ventana es mayor a 768px)
  if (window.innerWidth > 768) {
    submenuTriggers.forEach(item => {
      item.addEventListener('mouseenter', () => {
        const submenu = item.querySelector('.contenido');
        const arrow = item.querySelector('.arrow');
        if (submenu) {
          submenu.classList.add('visible');
        }
        if (arrow) {
          arrow.classList.add('rotate');
        }
      });

      item.addEventListener('mouseleave', () => {
        const submenu = item.querySelector('.contenido');
        const arrow = item.querySelector('.arrow');
        if (submenu) {
          submenu.classList.remove('visible');
        }
        if (arrow) {
          arrow.classList.remove('rotate');
        }
      });
    });
  }
});
