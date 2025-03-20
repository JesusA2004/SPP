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
      <!-- Sección Introducción + Imagen -->
      <div class="intro-section">
        <div class="intro-content">
        <h2>Instalación Profesional de Cercas Electrificadas</h2>
        <br>
          <div class="card card-intro">
            <h3>Protección Perimetral Inteligente</h3>
            <p>Resguardar y proteger tu casa, edificio, empresa o local de posibles intrusos y/o delincuentes mediante la delimitación del perímetro por medio del tendido de alambres electrificados o alambres resistentes con navajas de lámina de acero galvanizadas </p>
            <br>
            <a href="../index.php#cotizar" class="btn-cotizar">Cotizar</a>
          </div>
        </div>
        <img src="<?php echo IMG_URL; ?>/instalacionCercas.png" alt="Cercas eléctricas" class="intro-image">
      </div>

      <!-- NUEVA SECCIÓN: 3 cajas con efecto holograma -->
      <div class="caracteristicas-container">
        <!-- Caja 1 -->
        <div class="caracteristica-box box1">
          <h3>Energía Óptima</h3>
          <p>Suministro regulable para máxima eficiencia.</p>
        </div>
        <!-- Caja 2 -->
        <div class="caracteristica-box box2">
          <h3>Sistema Anti-Manipulación</h3>
          <p>Protección avanzada contra intervenciones no autorizadas.</p>
        </div>
        <!-- Caja 3 -->
        <div class="caracteristica-box box3">
          <h3>Resistencia Total</h3>
          <p>Diseñadas para soportar condiciones climáticas extremas.</p>
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
          <div class="item">
            <p>Instalación Residencial</p>
            <img src="<?php echo IMG_URL; ?>/cercaResidencial.jpg" alt="Instalación residencial">
          </div>
          <div class="item">
            <p>Protección Industrial</p>
            <img src="<?php echo IMG_URL; ?>/cercaIndustria.jpg" alt="Protección industrial">
          </div>
          <div class="item">
            <p>Sistema con Navajas</p>
            <img src="<?php echo IMG_URL; ?>/cercaNavajas.png" alt="Sistema con navajas">
          </div>
        </div>
      </div>
  </section>


  <section class="servicio-descripcion">
      <!-- Grid principal con tarjetas -->
      <div class="card-grid">
        <!-- Tarjeta 2: Características Técnicas -->
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

      </div>

    </div>
  </section>

  <script src="<?php echo JS_URL; ?>/Servicios.js"></script>
  <script src="<?php echo JS_URL; ?>/Header.js"></script>
  
  <?php include '../Includes/FooterServicios.php'; ?>
</body>
</html>
