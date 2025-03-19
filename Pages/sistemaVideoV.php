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
              <a href="../index.php#empresa" class="submenu-item">Misión</a>
              <a href="../index.php#empresa" class="submenu-item">Visión</a>
              <a href="../index.php#clientes" class="submenu-item">Clientes Distinguidos</a>
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

    <!-- ========================================
       Sección: Servicio de Videovigilancia
  ======================================== -->
  <section class="servicio-descripcion">
    <div class="container">
      <div class="section-title">
        <h2>Servicio Integral de Videovigilancia CCTV</h2>
      </div>

      <br>

      <!-- Sección Introducción + Imagen -->
      <div class="intro-section">
        <div class="intro-content">
          <div class="card card-intro">
            <h3>Introducción</h3>
            <p>Nuestro servicio de videovigilancia CCTV está diseñado para brindarte la máxima seguridad...</p>
          </div>
        </div>
        <img src="<?php echo IMG_URL; ?>/camaras.png" alt="Sistema CCTV" class="intro-image">
      </div>

      <!-- Grid principal con tarjetas -->
      <div class="card-grid">
      </div>
    </div>
  </section>
  
        <!-- Tarjeta 2: Características Principales -->
        <div class="card card-features">
          <h3>Características Principales</h3>
          <ul class="features-list">
            <li>🔄 <strong>Monitoreo en tiempo real</strong></li>
            <li>📹 <strong>Cámaras de alta resolución (4K/8MP)</strong></li>
            <li>🔇 <strong>Tecnología anti-vandalismo</strong></li>
            <li>📱 <strong>Acceso remoto seguro</strong></li>
            <li>🔒 <strong>Sistemas de almacenamiento avanzados</strong></li>
            <li>⚙️ <strong>Integración total</strong></li>
          </ul>
        </div>

        <!-- Tarjeta 3: Proceso de Instalación y Soporte -->
        <div class="card card-installation">
          <h3>Instalación y Soporte</h3>
          <p>
            Nuestro equipo especializado realiza un estudio previo para diseñar la mejor estrategia de instalación, 
            garantizando una cobertura óptima. Desde la configuración inicial hasta el soporte post-venta, te ofrecemos 
            mantenimiento preventivo y correctivo para asegurar el funcionamiento ininterrumpido de tus sistemas.
          </p>
        </div>

        <!-- Tarjeta 4: Beneficios Adicionales -->
        <div class="card card-benefits">
          <h3>Beneficios</h3>
          <p>
            Al elegir nuestro servicio, obtendrás asesoramiento personalizado, un sistema escalable y la posibilidad 
            de integrar tecnologías emergentes en seguridad, asegurando una inversión duradera y de alta calidad.
          </p>
        </div>

        <!-- Tarjeta 5: Centro de Monitoreo -->
        <div class="card card-monitoring">
          <h3>Centro de Monitoreo 24/7</h3>
          <p>
            Contamos con un centro de monitoreo activo las 24 horas del día, 
            gestionado por profesionales que responden de manera inmediata a cualquier incidente.
          </p>
        </div>

        <!-- Tarjeta 6: Planes Flexibles -->
        <div class="card card-plans">
          <h3>Planes Flexibles</h3>
          <p>
            Ofrecemos distintos planes de servicio adaptados a tus necesidades y presupuesto. 
            Desde soluciones residenciales hasta proyectos empresariales de gran escala.
          </p>
        </div>

      </div><!-- Fin .card-grid -->

      <!-- Ejemplo de otra fila de tarjetas (opcional) -->
      <div class="card-grid">
        <!-- Tarjeta 7: Protocolos de Seguridad -->
        <div class="card card-protocols">
          <h3>Protocolos de Seguridad</h3>
          <p>
            Implementamos protocolos avanzados para la protección de tus datos e imágenes, 
            cumpliendo con las normativas de privacidad y garantizando la confidencialidad.
          </p>
        </div>
        
        <!-- Tarjeta 8: Mantenimiento Remoto -->
        <div class="card card-remote-maintenance">
          <h3>Mantenimiento Remoto</h3>
          <p>
            Gracias a nuestras herramientas de diagnóstico remoto, podemos resolver incidencias 
            sin necesidad de desplazarnos, ahorrándote tiempo y costes adicionales.
          </p>
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
      
      <!-- Ejemplo de Galería Estática (Grid) -->
      <div class="galeria-grid">
        <img src="<?php echo IMG_URL; ?>/cctv-ejemplo1.jpg" alt="Instalación comercial">
        <img src="<?php echo IMG_URL; ?>/cctv-ejemplo2.jpg" alt="Instalación residencial">
        <img src="<?php echo IMG_URL; ?>/cctv-ejemplo3.jpg" alt="Tecnología night vision">
        <!-- Agrega más imágenes si lo deseas -->
      </div>
      
      <!-- SUGERENCIAS para presentar la galería de forma moderna:
        1) Carrusel con flechas (usando librerías como Swiper, Flickity o Glide.js).
        2) Lightbox o Modal (al hacer clic, se abre la imagen en grande con efectos).
        3) Masonry Layout (estilo Pinterest) para un diseño fluido e irregular.
        4) Slideshow automático (con o sin miniaturas).
      -->
    </div>
  </section>

  <script src="<?php echo JS_URL; ?>/Servicios.js"></script>
  <script src="<?php echo JS_URL; ?>/Header.js"></script>
  
  <?php include '../Includes/FooterServicios.php'; ?>
</body>
</html>
