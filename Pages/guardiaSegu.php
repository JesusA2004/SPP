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
  
  <!-- Fuentes (se mantienen igual) -->
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

  <!-- Header se mantiene igual -->
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
              <a href="escolta.php" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/escolta.png" alt="Escolta">
                Escolta
              </a>
              <a href="../Views/sistemaVideoV.php" class="submenu-itemServ">
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
       Sección: Servicio de Guardias de Seguridad
  ======================================== -->
  <section class="servicio-descripcion">
    <div class="container">
      <div class="section-title">
        <h2>Servicio de Guardias de Seguridad Profesionales</h2>
      </div>

      <br>

      <!-- Sección Introducción + Imagen -->
      <div class="intro-section">
        <div class="intro-content">
          <div class="card card-intro">
            <h3>Protección Humana Especializada</h3>
            <p>Nuestro servicio de guardias de seguridad ofrece protección física profesional las 24 horas, combinando presencia disuasiva con respuesta inmediata ante cualquier eventualidad.</p>
          </div>
        </div>
        <img src="<?php echo IMG_URL; ?>/guardias.png" alt="Guardias de seguridad" class="intro-image">
      </div>

      <!-- Grid principal con tarjetas -->
      <div class="card-grid">
        <!-- Tarjeta 2: Características Principales -->
        <div class="card card-features">
          <h3>Nuestros Diferenciales</h3>
          <ul class="features-list">
            <li>🛡️ <strong>Personal altamente capacitado</strong></li>
            <li>⏱️ <strong>Respuesta inmediata 24/7</strong></li>
            <li>📡 <strong>Sistemas de comunicación integrados</strong></li>
            <li>📋 <strong>Protocolos actualizados de seguridad</strong></li>
            <li>🎯 <strong>Entrenamiento continuo en tácticas defensivas</strong></li>
            <li>🤝 <strong>Servicio personalizado por sector</strong></li>
          </ul>
        </div>

        <!-- Tarjeta 3: Selección y Capacitación -->
        <div class="card card-installation">
          <h3>Proceso de Selección</h3>
          <p>
            Todos nuestros guardias pasan por rigurosos procesos de selección que incluyen:
            - Verificación de antecedentes
            - Pruebas psicológicas
            - Entrenamiento físico y técnico
            - Capacitación en primeros auxilios y manejo de crisis
          </p>
        </div>

        <!-- Tarjeta 4: Beneficios -->
        <div class="card card-benefits">
          <h3>Ventajas Clave</h3>
          <p>
            • Presencia disuasiva visible<br>
            • Manejo profesional de conflictos<br>
            • Atención al cliente especializada<br>
            • Reportes detallados de incidentes<br>
            • Flexibilidad en turnos y cobertura
          </p>
        </div>

        <!-- Tarjeta 5: Supervisión Continua -->
        <div class="card card-monitoring">
          <h3>Sistema de Supervisión</h3>
          <p>
            Implementamos un estricto sistema de supervisión múltiple que incluye:
            - Rondas de verificación aleatorias
            - Sistemas de geolocalización
            - Monitoreo mediante aplicaciones móviles
            - Reportes digitales en tiempo real
          </p>
        </div>

        <!-- Tarjeta 6: Planes de Servicio -->
        <div class="card card-plans">
          <h3>Modalidades de Servicio</h3>
          <p>
            ◉ Guardia fija (puestos específicos)<br>
            ◉ Rondas periódicas (patrullaje)<br>
            ◉ Eventos especiales<br>
            ◉ Custodia ejecutiva<br>
            ◉ Servicio mixto (guardia + tecnología)
          </p>
        </div>

      </div>

      <!-- Otras tarjetas -->
      <div class="card-grid">
        <!-- Tarjeta 7: Equipamiento -->
        <div class="card card-protocols">
          <h3>Equipamiento Estándar</h3>
          <p>
            • Uniformes profesionales<br>
            • Equipos de comunicación digital<br>
            • Kit de primeros auxilios<br>
            • Linternas tácticass<br>
            • Chalecos reflectivos
          </p>
        </div>
        
        <!-- Tarjeta 8: Tecnología Integrada -->
        <div class="card card-remote-maintenance">
          <h3>Tecnología de Apoyo</h3>
          <p>
            Nuestros guardias trabajan con:
            - Aplicación móvil de reportes
            - Sistemas de alerta instantánea
            - Cámaras body-worn
            - Dispositivos de localización GPS
          </p>
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
        <h2>Nuestros Guardias en Acción</h2>
      </div>
      
      <div class="galeria-grid">
        <img src="<?php echo IMG_URL; ?>/guardias-comercial.jpg" alt="Protección comercial">
        <img src="<?php echo IMG_URL; ?>/guardias-residencial.jpg" alt="Seguridad residencial">
        <img src="<?php echo IMG_URL; ?>/guardias-evento.jpg" alt="Custodia de eventos">
      </div>
    </div>
  </section>

  <script src="<?php echo JS_URL; ?>/Servicios.js"></script>
  <script src="<?php echo JS_URL; ?>/Header.js"></script>
  
  <?php include '../Includes/FooterServicios.php'; ?>
</body>
</html>