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
      <div class="section-title">
        <h2>Servicio de Escoltas Profesionales</h2>
      </div>

      <br>

      <!-- Sección Introducción + Imagen -->
      <div class="intro-section">
        <div class="intro-content">
          <div class="card card-intro">
            <h3>Protección Ejecutiva Personalizada</h3>
            <p>Nuestro servicio de escoltas ofrece protección móvil de alto nivel para personas y bienes, con profesionales entrenados en técnicas avanzadas de seguridad ejecutiva.</p>
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
          <p>Escultas altamente capacitados para protección en movimiento.</p>
        </div>
        <!-- Caja 3 -->
        <div class="caracteristica-box box3">
          <h3>Respuesta Efectiva</h3>
          <p>Acciones rápidas y coordinadas ante cualquier eventualidad.</p>
        </div>
      </div>
      <!-- FIN NUEVA SECCIÓN -->

      <!-- Grid principal con tarjetas -->
      <div class="card-grid">
        <!-- Tarjeta 2: Características Principales -->
        <div class="card card-features">
          <h3>Nuestros Protocolos</h3>
          <ul class="features-list">
            <li>🛡️ <strong>Evaluación de riesgo personalizada</strong></li>
            <li>🚗 <strong>Movilidad blindada disponible</strong></li>
            <li>📡 <strong>Comunicación encriptada 24/7</strong></li>
            <li>🎯 <strong>Tácticas evasivas y defensivas</strong></li>
            <li>🔒 <strong>Protección en movimiento</strong></li>
            <li>🤝 <strong>Coordinación con autoridades</strong></li>
          </ul>
        </div>

        <!-- Tarjeta 3: Proceso de Protección -->
        <div class="card card-installation">
          <h3>Metodología de Trabajo</h3>
          <p>
            1. Análisis de perfil y evaluación de riesgo<br>
            2. Diseño de rutas seguras y alternativas<br>
            3. Implementación de protocolos de emergencia<br>
            4. Monitoreo constante del entorno<br>
            5. Informes detallados de cada operación
          </p>
        </div>

        <!-- Tarjeta 4: Beneficios -->
        <div class="card card-benefits">
          <h3>Ventajas Clave</h3>
          <p>
            • Escoltas certificados y con experiencia<br>
            • Tecnología de protección integrada<br>
            • Respuesta inmediata ante amenazas<br>
            • Discreción absoluta<br>
            • Cobertura nacional e internacional
          </p>
        </div>

        <!-- Tarjeta 5: Tipos de Servicio -->
        <div class="card card-monitoring">
          <h3>Modalidades de Protección</h3>
          <p>
            ◉ Protección ejecutiva individual<br>
            ◉ Custodia familiar<br>
            ◉ Escolta vehicular<br>
            ◉ Protección para eventos<br>
            ◉ Traslado de valores<br>
            ◉ Escolta corporativa
          </p>
        </div>

        <!-- Tarjeta 6: Equipamiento -->
        <div class="card card-plans">
          <h3>Equipamiento Especializado</h3>
          <p>
            • Dispositivos de localización GPS<br>
            • Sistemas de comunicación cifrada<br>
            • Vehículos blindados opcionales<br>
            • Equipo táctico de protección<br>
            • Tecnología anti-secuestro
          </p>
        </div>

      </div>

      <!-- Otras tarjetas -->
      <div class="card-grid">
        <!-- Tarjeta 7: Capacitación -->
        <div class="card card-protocols">
          <h3>Capacitación Continua</h3>
          <p>
            Nuestros escoltas reciben entrenamiento constante en:<br>
            - Conducción evasiva<br>
            - Primeros auxilios avanzados<br>
            - Manejo de situaciones críticas<br>
            - Protección contra ataques armados
          </p>
        </div>
        
        <!-- Tarjeta 8: Tecnología Integrada -->
        <div class="card card-remote-maintenance">
          <h3>Sistemas de Apoyo</h3>
          <p>
            • Monitoreo satelital<br>
            • Análisis de inteligencia previo<br>
            • Coordinación con centros de mando<br>
            • Actualización de rutas en tiempo real<br>
            • Botón de pánico conectado a central
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
        <h2>Operaciones de Protección</h2>
      </div>
      
      <div class="galeria-grid">
        <img src="<?php echo IMG_URL; ?>/escolta-vehicular.jpg" alt="Protección vehicular">
        <img src="<?php echo IMG_URL; ?>/escolta-evento.jpg" alt="Seguridad en eventos">
        <img src="<?php echo IMG_URL; ?>/escolta-ejecutivo.jpg" alt="Protección ejecutiva">
      </div>
    </div>
  </section>

  <script src="<?php echo JS_URL; ?>/Servicios.js"></script>
  <script src="<?php echo JS_URL; ?>/Header.js"></script>
  
  <?php include '../Includes/FooterServicios.php'; ?>
</body>
</html>
