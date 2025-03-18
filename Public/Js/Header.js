document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const menuPrincipal = document.querySelector('.menu-principal');
    const submenuTriggers = document.querySelectorAll('.has-submenu');

    // Control del menú hamburguesa
    hamburger.addEventListener('click', function(e) {
      e.stopPropagation();
      this.classList.toggle('active');
      menuPrincipal.classList.toggle('active');
      document.body.classList.toggle('no-scroll');
    });

    // Control de submenús
    submenuTriggers.forEach(trigger => {
      trigger.addEventListener('click', function(e) {
        if (window.innerWidth <= 768) {
          e.preventDefault();
          const submenu = this.querySelector('.contenido');
          const arrow = this.querySelector('.arrow');
          submenu.classList.toggle('visible');
          arrow.classList.toggle('rotate');
        }
      });
    });

    // Cerrar menús al hacer clic fuera
    document.addEventListener('click', function(e) {
      if (!e.target.closest('nav') && !e.target.closest('.hamburger')) {
        hamburger.classList.remove('active');
        menuPrincipal.classList.remove('active');
        document.body.classList.remove('no-scroll');
        document.querySelectorAll('.contenido').forEach(sub => sub.classList.remove('visible'));
        document.querySelectorAll('.arrow').forEach(arr => arr.classList.remove('rotate'));
      }
    });

    // Hover para desktop
    if (window.innerWidth > 768) {
      document.querySelectorAll('.has-submenu').forEach(item => {
        item.addEventListener('mouseenter', () => {
          item.querySelector('.contenido').classList.add('visible');
          item.querySelector('.arrow').classList.add('rotate');
        });
        item.addEventListener('mouseleave', () => {
          item.querySelector('.contenido').classList.remove('visible');
          item.querySelector('.arrow').classList.remove('rotate');
        });
      });
    }
  });