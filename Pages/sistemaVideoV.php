<?php
// Configuración de rutas
require_once __DIR__ . '/../Config/Routes.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios de Protección Profesional</title>
  
  <!-- Fuentes -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Liter:wght@300;400;700&family=Inter+Tight:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <!-- CSS principal (solo para secciones centrales) -->
  <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Header.css">
  <link rel="stylesheet" href="<?php echo CSS_URL; ?>/PaginaServicio.css">
</head>
<body>

  <!-- HEADER -->
  <header>
    <a href="../index.php">
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
              <a href="escolta.php" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/escolta.png" alt="Escolta">
                Escolta
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
  <!-- FIN HEADER -->
  <a href="https://wa.me/7772980092" class="whatsapp-float" target="_blank" title="Contáctanos por WhatsApp">
    <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp"/>
  </a>
  
  <!-- ========================================
       Sección: Servicio Integral de Videovigilancia CCTV
  ======================================== -->
  <section class="servicio-descripcion">
    <div class="container">
      <!-- Sección Introducción + Imagen -->
      <div class="intro-section">
        <div class="intro-content">
          <h2>Instalación de Circuitos Cerrados de Televisión (CCTV).</h2>
          <br>
          <div class="card card-intro">
            <h3>Servicio Integral de Videovigilancia CCTV</h3>
            <p>Nuestro objetivo es mantener vigiladas las 24 horas del día diferentes áreas a resguardar. Este sistema permite la grabación de los 
            acontecimientos ocurridos y sirve como evidencia de las anomalías que llegasen a ocurrir.</p>
            <br>
            <a href="../index.php?servicio=videovigilancia&descripcion=Servicio%20Integral%20de%20Videovigilancia%20CCTV#cotizar" class="btn-cotizar">Cotizar</a>
          </div>
        </div>
        <img src="<?php echo IMG_URL; ?>/camaras.png" alt="Sistema CCTV" class="intro-image">
      </div>

      <!-- NUEVA SECCIÓN: 3 cajas con efecto holograma -->
      <div class="caracteristicas-container">
        <!-- Bloque 1 -->
        <div class="caracteristica-box box1">
          <h3>Monitoreo en Tiempo Real</h3>
          <p>Supervisión continua las 24 horas del día con acceso remoto y almacenamiento seguro.</p>
        </div>
        <!-- Bloque 2 -->
        <div class="caracteristica-box box2">
          <h3>Detección de movimiento</h3>
          <p>Alertas automáticas ante cualquier actividad sospechosa, brindando una respuesta rápida.</p>
        </div>
        <!-- Bloque 3 -->
        <div class="caracteristica-box box3">
          <h3>Integración Inteligente</h3>
          <p>Compatible con sistemas de alarma y control de acceso para mayor seguridad.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================
       Sección: Galería de Instalaciones
  ======================================== -->
  <section class="servicio-galeria">
    <div class="container">
      <div class="section-title">
        <h2>Nuestras instalaciones CCTV</h2>
      </div>
      
      <div class="galeria-grid">
        <div class="item">
          <p>Instalación Comercial</p>
          <img src="<?php echo IMG_URL; ?>/cctvCentroComercial.jpg" alt="Instalación comercial">
        </div>
        <div class="item">
          <p>Instalación Residencial</p>
          <img src="<?php echo IMG_URL; ?>/cctvResidencial.png" alt="Instalación residencial">
        </div>
        <div class="item">
          <p>Tecnología Night Vision</p>
          <img src="<?php echo IMG_URL; ?>/cctvNightVision.png" alt="Tecnología night vision">
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================
       Sección: Supervisión operativa
  ======================================== -->
  <section class="servicio-descripcion">
    <div class="container">
      <div class="section-title">
          <h2>Soporte y Beneficios</h2>
          <img src="<?php echo IMG_URL; ?>/iconoSupervision.png" alt="Icono Supervisión">
      </div>
      <!-- Grid principal con tarjetas -->
      <div class="card-grid">
        <!-- Tarjeta: Instalación y Soporte -->
        <div class="card card-installation">
          <h3>Instalación y Soporte</h3>
          <p>
            Nuestro equipo especializado diseña la mejor estrategia de instalación y ofrece mantenimiento preventivo y correctivo para asegurar el funcionamiento ininterrumpido de tus sistemas.
          </p>
        </div>
        <!-- Tarjeta: Beneficios -->
        <div class="card card-benefits">
          <h3>Beneficios</h3>
          <p>
            Obtén asesoramiento personalizado, soluciones escalables y la integración de tecnologías emergentes, asegurando una inversión de alta calidad.
          </p>
        </div>
        <!-- Tarjeta: Centro de Monitoreo -->
        <div class="card card-monitoring">
          <h3>Centro de Monitoreo 24/7</h3>
          <p>
            Contamos con un centro de monitoreo activo las 24 horas, gestionado por profesionales que responden de inmediato a cualquier incidente.
          </p>
        </div>
      </div>
      <div align="center">
        <a href="../index.php?servicio=videovigilancia&descripcion=Servicio%20Integral%20de%20Videovigilancia%20CCTV#cotizar" class="btn-cotizar">Cotizar</a>
      </div>
    </div>
  </section>

  <script src="<?php echo JS_URL; ?>/Servicios.js"></script>
  <script src="<?php echo JS_URL; ?>/Header.js"></script>
  
  <?php include '../Includes/FooterServicios.php'; ?>
</body>
</html>
