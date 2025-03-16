<?php
require_once __DIR__ . '/../Config/Routes.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios de Protección Profesional</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Liter:wght@300;400;700&family=Inter+Tight:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Index.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Inicio.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Filosofia.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Submenu.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Responsive.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Servicios.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Cotizar.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/ClientesD.css">
  <style>
    /* =========================================================
       VARIABLES Y CONFIGURACIÓN BASE
       ========================================================= */
    :root {
      --primary-color: #2A2A72;
      --secondary-color: #009FFD;
      --accent-color: #FF0076;
      --text-light: #ffffff;
      --bg-dark: rgba(0, 0, 0, 0.95);
      --easing: cubic-bezier(0.68, -0.55, 0.265, 1.55);
      --header-height: 80px;
    }

    /* =========================================================
       RESET Y ESTILOS BASE
       ========================================================= */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Roboto', sans-serif;
      line-height: 1.6;
      margin-top: var(--header-height);
    }

    /* =========================================================
       HEADER
       ========================================================= */
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: var(--bg-dark);
      padding: 10px 20px;
      z-index: 1000;
      display: flex;
      justify-content: space-between;
      align-items: center;
      backdrop-filter: blur(10px);
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
      height: var(--header-height);
    }
    header a {
      text-decoration: none;
    }
    /* Logo */
    header img {
      height: 60px;
      width: auto;
      transition: transform 0.4s var(--easing);
      z-index: 1001;
    }
    header img:hover {
      transform: scale(1.05) rotate(-2deg);
    }

    /* =========================================================
       MENÚ HAMBURGUESA
       ========================================================= */
    .hamburger {
      display: none;
      background: none;
      border: none;
      cursor: pointer;
      padding: 10px;
      z-index: 1002;
      margin-left: auto;
      transition: transform 0.3s var(--easing);
    }
    .hamburger span {
      display: block;
      width: 30px;
      height: 3px;
      background: var(--text-light);
      margin: 5px 0;
      transition: all 0.4s var(--easing);
      transform-origin: center;
    }
    /* Animación cuando está activo */
    .hamburger.active span:nth-child(1) {
      transform: translateY(8px) rotate(45deg);
    }
    .hamburger.active span:nth-child(2) {
      opacity: 0;
      transform: scaleX(0);
    }
    .hamburger.active span:nth-child(3) {
      transform: translateY(-8px) rotate(-45deg);
    }

    /* =========================================================
       MENÚ PRINCIPAL
       ========================================================= */
    .menu-principal {
      display: flex;
      gap: 1.5rem;
      margin: 0;
      padding: 0;
      transition: all 0.4s var(--easing);
    }
    .menu-item {
      color: var(--text-light);
      text-decoration: none;
      font-size: 1.1rem;
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 10px 15px;
      position: relative;
      transition: all 0.3s var(--easing);
      border-radius: 5px;
    }
    .menu-item::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      width: 0;
      height: 2px;
      background: var(--secondary-color);
      transition: all 0.3s var(--easing);
    }
    .menu-item:hover {
      color: var(--secondary-color);
      background: rgba(255, 255, 255, 0.05);
    }
    .menu-item:hover::after {
      width: 100%;
      left: 0;
    }

    /* =========================================================
       SUBMENÚS
       ========================================================= */
    .has-submenu {
      position: relative;
    }
    .menu-desplegable {
      position: relative;
    }
    .contenido {
      position: absolute;
      top: 100%;
      left: 0;
      background: var(--bg-dark);
      min-width: 260px;
      opacity: 0;
      visibility: hidden;
      transform: translateY(10px);
      transition: all 0.3s var(--easing);
      border-radius: 8px;
      padding: 10px 0;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      z-index: 1000;
    }
    .contenido.visible {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }
    .arrow {
      font-size: 0.8em;
      margin-left: 8px;
      transition: transform 0.3s var(--easing);
    }
    .arrow.rotate {
      transform: rotate(180deg);
    }

    /* =========================================================
       SUBMENÚ SERVICIOS - ESPECÍFICO
       ========================================================= */
    #servicios-submenu {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 15px;
      padding: 15px;
    }
    .submenu-itemServ {
      display: flex;
      align-items: center;
      gap: 15px;
      padding: 12px;
      color: var(--text-light);
      text-decoration: none;
      border-radius: 8px;
      transition: all 0.3s var(--easing);
      background: rgba(255, 255, 255, 0.05);
    }
    .submenu-itemServ img {
      width: 50px;
      height: 50px;
      object-fit: contain;
      transition: transform 0.3s var(--easing);
    }
    .submenu-itemServ:hover {
      background: rgba(255, 255, 255, 0.1);
      transform: translateY(-3px);
    }
    .submenu-itemServ:hover img {
      transform: scale(1.1);
    }

    /* =========================================================
       RESPONSIVE
       ========================================================= */
    @media (max-width: 768px) {
      .hamburger {
        display: block;
      }
      .menu-principal {
        position: fixed;
        top: var(--header-height);
        right: -100%;
        width: 85%;
        max-width: 300px;
        height: calc(100vh - var(--header-height));
        background: var(--bg-dark);
        flex-direction: column;
        padding: 20px;
        overflow-y: auto;
        transition: right 0.4s var(--easing);
      }
      .menu-principal.active {
        right: 0;
      }
      .menu-item {
        width: 100%;
        padding: 15px 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
      }
      .has-submenu .contenido {
        position: static;
        background: transparent;
        box-shadow: none;
        opacity: 1 !important;
        visibility: visible !important;
        transform: none !important;
        max-height: 0;
        overflow: hidden;
        padding: 0;
        transition: max-height 0.3s var(--easing);
      }
      .has-submenu .contenido.visible {
        max-height: 500px;
        padding: 10px 0 0 20px;
      }
      #servicios-submenu {
        grid-template-columns: 1fr;
      }
      .submenu-itemServ {
        padding: 10px;
      }
      .submenu-itemServ img {
        width: 40px;
        height: 40px;
      }
      header {
        padding: 10px 15px !important;
        gap: 15px;
      }
      header > a:first-child {
        flex: 0 0 auto !important;
        max-width: 180px;
      }
      .hamburger {
        order: 1 !important;
        margin-left: auto !important;
        padding: 8px;
      }
    }
    /* Efectos de hover en dispositivos que los soportan */
    @media (hover: hover) {
      .has-submenu:hover .contenido {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
      }
      .menu-item:hover {
        transform: translateY(-2px);
      }
    }
    .no-scroll {
      overflow: hidden;
    }
  </style>
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
        <div class="has-submenu">
          <div class="menu-desplegable">
            <span class="menu-item submenu-toggle">Nuestros servicios <span class="arrow">▼</span></span>
            <div class="contenido" id="servicios-submenu">
              <a href="../Views/guardiaSegu.php" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/guardias.png" alt="GuardiasSeguridad">
                Guardias de seguridad intramuros
              </a>
              <a href="../Views/Escolta.php" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/escolta.png" alt="Escolta">
                Escolta
              </a>
              <a href="../Views/CCTV.php" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/cctv.png" alt="CCTV">
                Instalación de Circuitos Cerrados de Televisión
              </a>
              <a href="../Views/cercasNavajas.php" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/cercas.png" alt="Cercas">
                Instalación de Cercas Eléctricas y navajas
              </a>
            </div>
          </div>
        </div>
        <a href="#cotizar" class="menu-item">Cotizar</a>
        <a href="#contacto" class="menu-item">Contacto</a>
      </div>
    </nav>
  </header>
  
  <script>
    // JavaScript mejorado
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
  </script>
</body>
</html>
