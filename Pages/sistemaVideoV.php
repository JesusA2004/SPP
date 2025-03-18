<?php
// Configuración de rutas
require_once __DIR__ . '/Config/Routes.php';

// Nuevo header para páginas de servicio
include '../SPP/Includes/Header.php'; 
?>

<!-- CSS específico del servicio -->
<link rel="stylesheet" href="<?php echo CSS_URL; ?>/PaginaServicio.css">

<section class="servicio-hero" style="background-image: url('<?php echo IMG_URL; ?>/cctv-banner.jpg');">
    <div class="hero-content">
        <h1>Videovigilancia CCTV</h1>
        <p>Protección inteligente las 24 horas</p>
    </div>
</section>

<section class="servicio-descripcion">
    <div class="container">
        <h2>¿Por qué elegir nuestros sistemas de CCTV?</h2>
        <div class="grid-descripcion">
            <div class="text-content">
                <p>Ofrecemos sistemas de videovigilancia con:</p>
                <ul class="features-list">
                    <li>🔄 Monitoreo en tiempo real</li>
                    <li>📹 Cámaras de alta resolución (4K/8MP)</li>
                    <li>🔇 Tecnología anti-vandalismo</li>
                    <li>📱 Acceso remoto desde cualquier dispositivo</li>
                </ul>
            </div>
            <div class="image-content">
                <img src="<?php echo IMG_URL; ?>/cctv-diagrama.jpg" alt="Diagrama CCTV">
            </div>
        </div>
    </div>
</section>

<section class="servicio-galeria">
    <h2>Nuestras instalaciones CCTV</h2>
    <div class="galeria-grid">
        <img src="<?php echo IMG_URL; ?>/cctv-ejemplo1.jpg" alt="Instalación comercial">
        <img src="<?php echo IMG_URL; ?>/cctv-ejemplo2.jpg" alt="Instalación residencial">
        <img src="<?php echo IMG_URL; ?>/cctv-ejemplo3.jpg" alt="Tecnología night vision">
    </div>
</section>

<!-- JS específico del servicio -->
<script src="<?php echo JS_URL; ?>/Servicios.js"></script>

<?php include '../SPP/Includes/Footer.php'; ?>
