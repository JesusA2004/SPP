<?php
require_once __DIR__ . '/../Config/Routes.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios de Protección Profesional</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Liter:wght@300;400;700&family=Inter+Tight:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Index.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Inicio.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Filosofia.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Submenu.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Responsive.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Servicios.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Cotizar.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/ClientesD.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Header.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Modal.css">
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
              <a href="#servicios" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/todosServicios.png" alt="TodosServicios">
                Todos los servicios
              </a>
              <a href="../SPP/Pages/guardiaSegu.php" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/guardias.png" alt="GuardiasSeguridad">
                Guardias de seguridad intramuros
              </a>
              <a href="../SPP/Pages/escolta.php" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/escolta.png" alt="Escolta">
                Escolta
              </a>
              <a href="../SPP/Pages/sistemaVideoV.php" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/cctv.png" alt="CCTV">
                Instalación de Circuitos Cerrados de Televisión
              </a>
              <a href="../SPP/Pages/cercasElec.php" class="submenu-itemServ">
                <img src="<?php echo IMG_URL; ?>/cercas.png" alt="Cercas">
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
  
  <script src="<?php echo JS_URL; ?>/Header.js">    
  </script>
