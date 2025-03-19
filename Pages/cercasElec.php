<?php
// Configuración de rutas
require_once __DIR__ . '/../Config/Routes.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instalación de Cercas Electrificadas</title>
  
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
              <a href="../Views/sistemaVideoV.php" class="submenu-itemServ">
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
       Sección: Instalación de Cercas
  ======================================== -->
  <section class="servicio-descripcion">
    <div class="container">
      <div class="section-title">
        <h2>Instalación Profesional de Cercas Electrificadas</h2>
      </div>

      <br>

      <!-- Sección Introducción + Imagen -->
      <div class="intro-section">
        <div class="intro-content">
          <div class="card card-intro">
            <h3>Protección Perimetral Inteligente</h3>
            <p>Sistemas de seguridad perimetral de alta eficacia con tecnología electrificada y elementos disuasivos para protección integral de propiedades.</p>
          </div>
        </div>
        <img src="<?php echo IMG_URL; ?>/cercas.png" alt="Cercas eléctricas" class="intro-image">
      </div>

      <!-- Grid principal con tarjetas -->
      <div class="card-grid">
        <!-- Tarjeta 2: Características Principales -->
        <div class="card card-features">
          <h3>Características Técnicas</h3>
          <ul class="features-list">
            <li>⚡ <strong>Energía regulable (3,000-10,000V)</strong></li>
            <li>🔒 <strong>Sistema anti-manipulación</strong></li>
            <li>🌧️ <strong>Resistente a condiciones climáticas</strong></li>
            <li>📡 <strong>Integración con alarmas</strong></li>
            <li>🛡️ <strong>Materiales de grado industrial</strong></li>
            <li>📱 <strong>Control remoto opcional</strong></li>
          </ul>
        </div>

        <!-- Tarjeta 3: Tipos de Cercas -->
        <div class="card card-installation">
          <h3>Variantes Disponibles</h3>
          <p>
            ◉ Cercas electrificadas estándar<br>
            ◉ Sistemas con navajas anti-trepe<br>
            ◉ Cercas invisibles (hilo conductor)<br>
            ◉ Sistemas solares autónomos<br>
            ◉ Cercas para áreas especiales (piscinas, jardines)<br>
            ◉ Sistemas híbridos (eléctrico + convencional)
          </p>
        </div>

        <!-- Tarjeta 4: Beneficios -->
        <div class="card card-benefits">
          <h3>Ventajas Clave</h3>
          <p>
            • Disuasión visual y física<br>
            • Bajo mantenimiento<br>
            • Larga vida útil<br>
            • Adaptable a cualquier terreno<br>
            • Certificación internacional<br>
            • Garantía extendida
          </p>
        </div>

        <!-- Tarjeta 5: Proceso de Instalación -->
        <div class="card card-monitoring">
          <h3>Metodología de Trabajo</h3>
          <p>
            1. Evaluación de riesgos<br>
            2. Diseño personalizado<br>
            3. Instalación certificada<br>
            4. Pruebas de funcionamiento<br>
            5. Capacitación al usuario<br>
            6. Mantenimiento programado
          </p>
        </div>

        <!-- Tarjeta 6: Seguridad y Normativas -->
        <div class="card card-plans">
          <h3>Cumplimiento Normativo</h3>
          <p>
            • Certificación CE<br>
            • Normas IEC 60335-2-76<br>
            • Protección contra descargas<br>
            • Señalización certificada<br>
            • Aislantes de alta resistencia
          </p>
        </div>

      </div>

      <!-- Otras tarjetas -->
      <div class="card-grid">
        <!-- Tarjeta 7: Componentes -->
        <div class="card card-protocols">
          <h3>Componentes Incluidos</h3>
          <p>
            - Electrificador de alto rendimiento<br>
            - Aislantes cerámicos/poliméricos<br>
            - Cable de acero inoxidable<br>
            - Postes galvanizados<br>
            - Sistema de puesta a tierra<br>
            - Señalización de seguridad
          </p>
        </div>
        
        <!-- Tarjeta 8: Mantenimiento -->
        <div class="card card-remote-maintenance">
          <h3>Servicio Post-Instalación</h3>
          <p>
            • Revisiones trimestrales<br>
            • Limpieza profesional<br>
            • Actualización de componentes<br>
            • Reparaciones urgentes 24/7<br>
            • Monitoreo remoto opcional
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
        <h2>Proyectos Realizados</h2>
      </div>
      
      <div class="galeria-grid">
        <img src="<?php echo IMG_URL; ?>/cerca-residencial.jpg" alt="Instalación residencial">
        <img src="<?php echo IMG_URL; ?>/cerca-industrial.jpg" alt="Protección industrial">
        <img src="<?php echo IMG_URL; ?>/cerca-navajas.jpg" alt="Sistema con navajas">
      </div>
    </div>
  </section>

  <script src="<?php echo JS_URL; ?>/Servicios.js"></script>
  <script src="<?php echo JS_URL; ?>/Header.js"></script>
  
  <?php include '../Includes/FooterServicios.php'; ?>
</body>
</html>