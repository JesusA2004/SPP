<?php
// Configuración de rutas
require_once __DIR__ . '/../Config/Routes.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios de Guardias de Seguridad</title>
  
  <!-- Fuentes -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Liter:wght@300;400;700&family=Inter+Tight:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <!-- CSS principal -->
  <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Header.css">
  <link rel="stylesheet" href="<?php echo CSS_URL; ?>/PaginaServicio.css">
</head>
<body>

  <!-- Header sin cambios -->
  <header>
    <a href="../index.php">
      <img src="<?php echo IMG_URL; ?>/logo.png" alt="Logo de la empresa">
    </a>
    <button class="hamburger" aria-label="Abrir menú">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <nav>
      <div class="menu-principal">
        <a href="../index.php#inicio" class="menu-item">Inicio</a>
        <div class="has-submenu">
          <div class="menu-desplegable">
            <span class="menu-item">Filosofía Empresarial <span class="arrow">▼</span></span>
            <div class="contenido" id="filosofia-submenu">
              <a href="#empresa" class="submenu-item">
                  <img src="<?php echo IMG_URL; ?>/misionHeader.png" alt="mision">
                  Misión
              </a>
              <a href="#empresa" class="submenu-item">
                  <img src="<?php echo IMG_URL; ?>/visionHeader.png" alt="vision">
                  Visión
              </a>
              <a href="#empresa" class="submenu-item">
                  <img src="<?php echo IMG_URL; ?>/valoresHeader.png" alt="valores">
                  Valores
              </a>
              <a href="#clientes" class="submenu-item">
                  <img src="<?php echo IMG_URL; ?>/clientesHeader.png" alt="clientes">
                  Clientes Distinguidos
              </a>
            </div>
          </div>
        </div>
        <div class="has-submenu">
          <div class="menu-desplegable">
            <span class="menu-item submenu-toggle">Nuestros servicios <span class="arrow">▼</span></span>
            <div class="contenido" id="servicios-submenu">
              <a href="../index.php#servicios" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/todosServicios.png" alt="TodosServicios">
                Todos los servicios
              </a>
              <a href="guardiaSegu.php" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/guardias.png" alt="GuardiasSeguridad">
                Guardias de seguridad intramuros
              </a>
              <a href="escolta.php" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/escolta.png" alt="Escolta">
                Escolta
              </a>
              <a href="sistemaVideoV.php" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/cctv.png" alt="CCTV">
                Instalación de Circuitos Cerrados de Televisión
              </a>
            </div>
          </div>
        </div>
        <a href="../index.php#cotizar" class="menu-item">Cotizar</a>
        <a href="../index.php#contacto" class="menu-item">Contacto</a>
      </div>
    </nav>
  </header>

  <!-- ========================================
       Sección: Servicio de Guardias de Seguridad
  ======================================== -->
  <section class="servicio-descripcion">
    <div class="container">
      <!-- Sección Introducción + Imagen -->
      <div class="intro-section">
        <div class="intro-content">
          <h2>Servicio de Guardias de Seguridad Profesionales</h2>
          <br>
          <div class="card card-intro">
            <h3>Protección Humana Especializada</h3>
            <p>Nuestro servicio de guardias de seguridad ofrece protección física profesional las 24 horas, combinando presencia disuasiva con respuesta inmediata ante cualquier eventualidad.</p>
            <br>
            <a href="../index.php?servicio=GuardiasDeSeguridad&descripcion=Protección%20Humana%20Especializada%20las%2024%20horas#cotizar" class="btn-cotizar">Cotizar</a>
          </div>
        </div>
        <img src="<?php echo IMG_URL; ?>/guardias.png" alt="Guardias de seguridad" class="intro-image">
      </div>

      <!-- NUEVA SECCIÓN: 3 cajas con efecto holograma -->
      <div class="caracteristicas-container">
        <!-- Caja 1 -->
        <div class="caracteristica-box box1">
          <h3>Vigilancia Constante</h3>
          <p>Personal capacitado en monitoreo continuo.</p>
        </div>
        <!-- Caja 2 -->
        <div class="caracteristica-box box2">
          <h3>Respuesta Inmediata</h3>
          <p>Acciones rápidas ante cualquier situación.</p>
        </div>
        <!-- Caja 3 -->
        <div class="caracteristica-box box3">
          <h3>Integridad y Confianza</h3>
          <p>Compromiso con la seguridad y profesionalismo.</p>
        </div>
      </div>
  
    </div>
  </section>

  <!-- ========================================
       Sección: Galería
  ======================================== -->
  <section class="servicio-galeria">
    <div class="container">
      <div class="section-title">
        <h2>Guardias en Acción</h2>
      </div>
        
      <div class="galeria-grid">
        <div class="item">
          <p>Guardias en Sector Comercial</p>
          <img src="<?php echo IMG_URL; ?>/guardias-comercial.jpg" alt="Guardias en sector comercial">
        </div>
        <div class="item">
          <p>Guardias en Sector Residencial</p>
          <img src="<?php echo IMG_URL; ?>/guardias-residencial.jpg" alt="Guardias en sector residencial">
        </div>
        <div class="item">
          <p>Guardias en Eventos</p>
          <img src="<?php echo IMG_URL; ?>/guardias-evento.jpg" alt="Guardias en eventos">
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================
       Sección: Supervisión Operativa
  ======================================== -->
  <section class="servicio-descripcion">
    <div class="container">
      <div class="section-title">
          <h2>Supervisión Operativa</h2>
          <img src="<?php echo IMG_URL; ?>/iconoSupervision.png" alt="Icono Supervisión">
      </div>
      <!-- Grid principal con tarjetas -->
      <div class="card-grid">
        <!-- Tarjeta 1: Supervisión en Sitio -->
        <div class="card card-features">
          <h3>Supervisión en Sitio</h3>
          <br>
          <p>La supervisión de nuestros guardias se realiza directamente en el lugar, garantizando una respuesta inmediata y eficaz.</p>
        </div>

        <!-- Tarjeta 2: Monitoreo Remoto -->
        <div class="card card-features">
          <h3>Monitoreo Remoto</h3>
          <br>
          <p>Combinamos la presencia física con tecnología avanzada para monitorear y gestionar cualquier eventualidad en tiempo real.</p>
        </div>

        <!-- Tarjeta 3: Coordinación con Autoridades -->
        <div class="card card-features">
          <h3>Coordinación con Autoridades</h3>
          <br>
          <p>Mantenemos comunicación constante con entidades de seguridad para reforzar la protección y respuesta ante emergencias.</p>
        </div>
      </div>
    </div>
    <div align = "center">
      <a href="../index.php?servicio=GuardiasDeSeguridad&descripcion=Protección%20Humana%20Especializada%20las%2024%20horas#cotizar" class="btn-cotizar">Cotizar</a>
    </div>
    <br><br>
    </div>
  </section>

  <script src="<?php echo JS_URL; ?>/Servicios.js"></script>
  <script src="<?php echo JS_URL; ?>/Header.js"></script>
  
  <?php include '../Includes/FooterServicios.php'; ?>
</body>
</html>
