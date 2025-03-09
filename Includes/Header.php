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
                <li class="has-submenu">
                    <a href="javascript:void(0)" onclick="toggleFilosofiaMenu(event)">
                        Filosofía Empresarial
                        <span class="arrow">&#9660;</span> 
                    </a>
                    <ul class="submenu" id="filosofia-submenu">
                        <li><a href="#mision">Misión</a></li>
                        <li><a href="#vision">Visión</a></li>
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
        // Función mejorada para el submenú
        function toggleFilosofiaMenu(e) {
            e.preventDefault();
            const submenu = document.getElementById('filosofia-submenu');
            const arrow = document.querySelector('.has-submenu .arrow');
            
            submenu.classList.toggle('visible');
            arrow.classList.toggle('rotate');
            
            // Cierra otros submenús si existen
            document.querySelectorAll('.submenu').forEach(otherSubmenu => {
                if (otherSubmenu !== submenu && otherSubmenu.classList.contains('visible')) {
                    otherSubmenu.classList.remove('visible');
                    otherSubmenu.previousElementSibling.querySelector('.arrow').classList.remove('rotate');
                }
            });
        }

        // Cerrar submenú al hacer clic fuera
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.has-submenu')) {
                document.querySelectorAll('.submenu').forEach(submenu => {
                    submenu.classList.remove('visible');
                    submenu.previousElementSibling.querySelector('.arrow').classList.remove('rotate');
                });
            }
        });

        // Scroll suave mejorado con offset para el header fijo
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                const headerHeight = document.querySelector('header').offsetHeight;
                const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;

                window.scrollTo({
                    top: elementPosition - headerHeight,
                    behavior: 'smooth'
                });

                // Actualiza la URL sin recargar
                history.pushState(null, null, targetId);
            });
        });

        // Efecto de hover suave para los enlaces
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transition = 'all 0.3s ease';
            });
        });
        </script>
</body>
</html>