<?php
require_once __DIR__ . '/../Config/Routes.php';
?>

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
