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
    <nav>
      <ul>
        <li><a href="#inicio">Inicio</a></li>
        <li class="has-submenu" id="has-submenu">
          <a href="javascript:void(0)" onclick="toggleFilosofiaMenu(event)">
            Filosofía Empresarial <span class="arrow" id="arrow">&#9660;</span>
          </a>
          <ul class="submenu" id="filosofia-submenu">
            <li><a href="#mision" onclick="scrollToEmpresa(event, 'mision')">Misión</a></li>
            <li><a href="#vision" onclick="scrollToEmpresa(event, 'vision')">Visión</a></li>
            <li><a href="#clientes">Clientes Distinguidos</a></li>
          </ul>
        </li>
        <li><a href="#servicios">Servicios</a></li>
        <li><a href="#cotizar">Cotizar</a></li>
        <li><a href="#contacto">Contacto</a></li>
      </ul>
    </nav>
  </header>

    <script>
        // Función para alternar el submenú
        function toggleFilosofiaMenu(e) {
            e.preventDefault();
            const submenu = document.getElementById('filosofia-submenu');
            const arrow = document.getElementById('arrow');

            submenu.classList.toggle('visible');
            arrow.classList.toggle('rotate');

            e.stopPropagation();
        }

        // Función de scroll suave usando scrollIntoView
        function smoothScroll(selector) {
            const target = document.querySelector(selector);
            if (!target) return;
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });

            // Actualiza la URL sin recargar la página
            history.pushState(null, null, selector);
        }

        // Función para determinar el destino según el tamaño de pantalla
        function scrollToEmpresa(e, anchorId) {
            e.preventDefault();
            const isMobile = window.innerWidth < 768;
            const targetId = isMobile ? anchorId : 'empresa';
            smoothScroll('#' + targetId);
        }

        // Aplica scroll suave a los enlaces del header que tengan href="#algo"
        document.querySelectorAll('header a[href^="#"]').forEach(anchor => {
            if (anchor.getAttribute('href') === 'javascript:void(0)') return;
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                smoothScroll(targetId);
            });
        });

        // Permite que el botón de "atrás" en el navegador funcione correctamente
        window.addEventListener('popstate', function () {
            if (location.hash) {
                smoothScroll(location.hash);
            }
        });
    </script>

</body>
</html>
