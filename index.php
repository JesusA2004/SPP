<?php
// Incluye la configuración de rutas
require_once __DIR__ . '/Config/Routes.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios de Protección Profesional</title>
    <!-- Enlaza el archivo de estilos usando la ruta definida -->
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Liter:wght@300;400;700&family=Inter+Tight:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Menú -->
    <?php include '../SPP/Includes/Header.php'; ?>

    <!-- Sección Inicio -->
    <section id="inicio" class="hero">
        <!-- Video de fondo -->
        <video autoplay muted loop id="bg-video">
            <source src="<?php echo VIDEO_URL; ?>/SPPInicio.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
        <!-- Contenido del hero -->
        <img src="<?php echo IMG_URL; ?>/logoGrande.png" alt="Logo de la empresa" class="hero-logo">
        <h1>Servicios de Protección Profesional</h1>
        <p>Somos una empresa dedicada a la protección y vigilancia de bienes muebles e inmuebles,  con <b><span class="highlightInicio">más de 20 años de experiencia</span></b>, nuestra ventaja competitiva es generar la confianza en nuestros clientes a través de una excelente calidad en nuestros servicios.</p>
        <button>SABER MÁS</button>
    </section>

    <!-- Sección Empresa -->
    <section id="empresa">
        <h2 class="section-title">Nuestra Empresa</h2>
        <div class="empresa-container">
            <div class="empresa-item">
                <h3 class="empresa-title">Misión</h3>
                <p class="empresa-text">
                    Nos concentraremos en la prestación de <span class="highlight">Servicios de Seguridad Privada</span> para satisfacer las necesidades de nuestros clientes en base a la <span class="highlight">Calidad</span>, <span class="highlight">Precios</span> y variedad de nuestros servicios. 
                    Realizaremos nuestras actividades con <span class="highlight">responsabilidad</span> y <span class="highlight">eficiencia</span> a efecto de obtener resultados que mantengan el equilibrio con nuestro <span class="highlight">crecimiento a largo plazo</span>, que beneficien a las personas integrantes de la organización, logrando con ello cumplir nuestro <span class="highlight">compromiso con la sociedad</span>.
                </p>
            </div>
            <div class="empresa-item">
                <h3 class="empresa-title">Visión</h3>
                <p class="empresa-text">
                    <span class="highlight">Servicios de Protección Profesional S.A. de C.V.</span> será una <span class="highlight">organización reconocida</span> por empleados, competidores, clientes y público en general. 
                    Seremos la organización <span class="highlight">líder</span> en la prestación de <span class="highlight">Servicios de Seguridad Privada</span>. 
                    Nuestra premisa será la <span class="highlight">innovación</span>, <span class="highlight">creatividad</span>, <span class="highlight">competitividad</span> y el <span class="highlight">trabajo en equipo</span> de nuestros empleados, buscando en todo momento la <span class="highlight">mejora continua</span> en nuestras actividades, para alcanzar la <span class="highlight">calidad total</span>, así como nuestra capacidad para <span class="highlight">anticipar</span> y <span class="highlight">responder debidamente a los cambios</span> y para <span class="highlight">crear oportunidades</span>.
                </p>
            </div>
        </div>
    </section>

    <!-- Sección Servicios -->
    <section id="servicios">
        <h2 class="section-title">Nuestros servicios</h2>
        <div class="services-grid">
            <div class="service-item">
                <h3>Guardias de seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="service-item">
                <h3>Cercas eléctricas</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

        </div>
    </section>

    <!-- Sección Contacto -->
    <section id="cotizar">
        <h2 class="section-title">Cotizar</h2>
        <form>
            <input type="text" placeholder="Nombre completo" required>
            <input type="email" placeholder="Correo electrónico" required>
            <input type="tel" placeholder="Teléfono">
            <input type="text" placeholder="Empresa">
            <textarea placeholder="Detalla tus servicios a solicitar" rows="4"></textarea>
            <button type="submit">ENVIAR</button>
        </form>
    </section>

    <script src="<?php echo JS_URL; ?>/Principal.js"></script>
    
</body>

<?php include '../SPP/Includes/Footer.php'; ?>

</html>
