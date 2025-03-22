<?php
// Configuración de rutas
require_once __DIR__ . '/../Config/Routes.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicio de Escoltas Profesionales</title>
  
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
              <a href="../index.php#empresa" class="submenu-item">
                <img src="<?php echo IMG_URL; ?>/misionHeader.png" alt="mision">
                Misión
              </a>
              <a href="../index.php#empresa" class="submenu-item">
                <img src="<?php echo IMG_URL; ?>/visionHeader.png" alt="vision">
                Visión
              </a>
              <a href="../index.php#empresa" class="submenu-item">
                <img src="<?php echo IMG_URL; ?>/valoresHeader.png" alt="valores">
                Valores
              </a>
              <a href="../index.php#clientes" class="submenu-item">
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
              <a href="sistemaVideoV.php" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/cctv.png" alt="CCTV">
                Instalación de Circuitos Cerrados de Televisión
              </a>
              <a href="cercasElec.php" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/cercas.png" alt="Cercas">
                Instalación de Cercas Eléctricas y navajas
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
       Sección: Servicio de Escoltas
  ======================================== -->
  <section class="servicio-descripcion">
    <div class="container">
      <!-- Sección Introducción + Imagen -->
      <div class="intro-section">
        <div class="intro-content">
          <h2>Servicio de Escoltas Profesionales</h2>
          <br>
          <div class="card card-intro">
            <h3>Protección Ejecutiva Personalizada</h3>
            <p>Nuestro servicio de escoltas ofrece protección móvil de alto nivel para personas y bienes, con profesionales entrenados en técnicas avanzadas de seguridad ejecutiva.</p>
            <br>
            <a href="../index.php?servicio=Escolta&descripcion=Protección%20Personalizada%20y%20segura%20en%20todo%20momento#cotizar" class="btn-cotizar">Cotizar</a>
          </div>
        </div>
        <img src="<?php echo IMG_URL; ?>/escolta.png" alt="Escoltas profesionales" class="intro-image">
      </div>

      <!-- NUEVA SECCIÓN: 3 cajas con efecto holograma -->
      <div class="caracteristicas-container">
        <!-- Caja 1 -->
        <div class="caracteristica-box box1">
          <h3>Evaluación Precisa</h3>
          <p>Análisis detallado de riesgos para cada operación.</p>
        </div>
        <!-- Caja 2 -->
        <div class="caracteristica-box box2">
          <h3>Protección Móvil</h3>
          <p>Escoltas altamente capacitados para protección en movimiento.</p>
        </div>
        <!-- Caja 3 -->
        <div class="caracteristica-box box3">
          <h3>Respuesta Efectiva</h3>
          <p>Acciones rápidas y coordinadas ante cualquier eventualidad.</p>
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
        <h2>Operaciones de Protección</h2>
      </div>
      
      <div class="galeria-grid">
        <div class="item">
          <p>Protección Vehicular</p>
          <img src="<?php echo IMG_URL; ?>/escolta-vehicular.jpg" alt="Protección vehicular">
        </div>
        <div class="item">
          <p>Seguridad en Eventos</p>
          <img src="<?php echo IMG_URL; ?>/escolta-evento.jpg" alt="Seguridad en eventos">
        </div>
        <div class="item">
          <p>Protección Ejecutiva</p>
          <img src="<?php echo IMG_URL; ?>/escolta-ejecutivo.jpg" alt="Protección ejecutiva">
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================
       Sección: Protocolo y Metodología
  ======================================== -->
  <section class="servicio-descripcion">
    <div class="container">
      <div class="section-title">
          <h2>Protocolo y Metodología</h2>
          <img src="<?php echo IMG_URL; ?>/iconoSupervision.png" alt="Icono Supervisión">
      </div>
      <!-- Grid principal con tarjetas -->
      <div class="card-grid">
        <!-- Tarjeta: Protocolos de Seguridad -->
        <div class="card card-features">
          <h3>Protocolos de Seguridad</h3>
          <p>
            • Evaluación de riesgo personalizada<br>
            • Implementación de medidas de seguridad avanzadas<br>
            • Uso de tecnología en la comunicación y monitoreo
          </p>
        </div>

        <!-- Tarjeta: Movilidad y Respuesta -->
        <div class="card card-features">
          <h3>Movilidad y Respuesta</h3>
          <p>
            • Vehículos de alta seguridad y blindados<br>
            • Respuesta inmediata ante amenazas<br>
            • Coordinación con unidades móviles especializadas
          </p>
        </div>

        <!-- Tarjeta: Coordinación y Apoyo -->
        <div class="card card-features">
          <h3>Coordinación y Apoyo</h3>
          <p>
            • Comunicación encriptada 24/7<br>
            • Colaboración con autoridades locales y nacionales<br>
            • Soporte continuo durante la operación
          </p>
        </div>
      </div>
      <div align="center">
        <a href="../index.php?servicio=Escolta&descripcion=Protección%20Personalizada%20y%20segura%20en%20todo%20momento#cotizar" class="btn-cotizar">Cotizar</a>
      </div>
      <br><br>
    </div>
  </section>

  <script src="<?php echo JS_URL; ?>/Servicios.js"></script>
  <script src="<?php echo JS_URL; ?>/Header.js"></script>
  
  <?php include '../Includes/FooterServicios.php'; ?>
</body>
</html>
