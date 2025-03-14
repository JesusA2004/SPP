<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios de Protección Profesional</title>
  <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Header.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <a href="index.php">
      <img src="<?php echo IMG_URL; ?>/logo.png" alt="Logo de la empresa">
    </a>
    
    <!-- Botón Hamburguesa -->
    <button class="hamburger" aria-label="Abrir menú">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <nav>
      <div class="menu-principal">
        <a href="#inicio" class="menu-item">Inicio</a>
        
        <div class="has-submenu">
          <div class="menu-desplegable">
            <span class="menu-item">Filosofía Empresarial <span class="arrow">▼</span></span>
            <div class="contenido" id="filosofia-submenu">
              <a href="#mision" class="submenu-item">Misión</a>
              <a href="#vision" class="submenu-item">Visión</a>
              <a href="#clientes" class="submenu-item">Clientes Distinguidos</a>
            </div>
          </div>
        </div>
        
        <a href="#servicios" class="menu-item">Servicios</a>
        <a href="#cotizar" class="menu-item">Cotizar</a>
        <a href="#contacto" class="menu-item">Contacto</a>
      </div>
    </nav>
  </header>

  <script>
    // Control del Menú Hamburguesa
    const hamburger = document.querySelector('.hamburger');
    const menuPrincipal = document.querySelector('.menu-principal');
    const submenuTrigger = document.querySelector('.has-submenu');
    const submenuContent = document.getElementById('filosofia-submenu');
    const arrow = document.querySelector('.arrow');

    // Alternar menú hamburguesa
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      menuPrincipal.classList.toggle('active');
      document.body.classList.toggle('no-scroll');
    });

    // Control del submenú
    submenuTrigger.addEventListener('click', (e) => {
      e.preventDefault();
      submenuContent.classList.toggle('visible');
      arrow.classList.toggle('rotate');
    });

    // Cerrar menú al hacer clic fuera
    document.addEventListener('click', (e) => {
      if (!e.target.closest('nav') && !e.target.closest('.hamburger')) {
        menuPrincipal.classList.remove('active');
        hamburger.classList.remove('active');
        document.body.classList.remove('no-scroll');
      }
    });

    // Cerrar menú al hacer clic en un enlace
    document.querySelectorAll('.menu-principal a').forEach(link => {
      link.addEventListener('click', () => {
        menuPrincipal.classList.remove('active');
        hamburger.classList.remove('active');
        document.body.classList.remove('no-scroll');
      });
    });
  </script>
</body>
</html>
