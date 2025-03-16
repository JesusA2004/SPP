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
        
        <div class="has-submenu">
          <div class="menu-desplegable">
            <span class="menu-item submenu-toggle">
              Nuestros servicios <span class="arrow">▼</span>
            </span>
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
                <img src="<?php echo IMG_URL; ?>/cercas.png" alt="cercas">
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

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const submenuToggles = document.querySelectorAll(".submenu-toggle");

      submenuToggles.forEach((toggle) => {
        toggle.addEventListener("click", function () {
          const submenu = this.nextElementSibling;
          const arrow = this.querySelector(".arrow");

          // Cerrar otros submenús antes de abrir el actual
          document.querySelectorAll(".contenido").forEach((menu) => {
            if (menu !== submenu) {
              menu.classList.remove("visible");
            }
          });

          document.querySelectorAll(".arrow").forEach((arr) => {
            if (arr !== arrow) {
              arr.classList.remove("rotate");
            }
          });

          // Alternar la visibilidad del submenú actual
          submenu.classList.toggle("visible");
          arrow.classList.toggle("rotate");
        });
      });

      // Cerrar submenú si se hace clic fuera de él
      document.addEventListener("click", function (event) {
        if (!event.target.closest(".has-submenu")) {
          document.querySelectorAll(".contenido").forEach((menu) => {
            menu.classList.remove("visible");
          });
          document.querySelectorAll(".arrow").forEach((arrow) => {
            arrow.classList.remove("rotate");
          });
        }
      });
    });
  </script>

</body>
</html>
