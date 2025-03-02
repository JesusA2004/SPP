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
</head>
<body>
    <!-- Menú -->
    <nav>
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#empresa">Empresa</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>

    <!-- Sección Inicio -->
    <section id="inicio" class="hero">
        <h1>Servicios de Protección Profesional</h1>
        <p>Somos una empresa dedicada a la protección y vigilancia de bienes muebles e inmuebles, con más de 20 años de experiencia...</p>
        <button>SABER MÁS</button>
    </section>

    <!-- Sección Empresa -->
    <section id="empresa">
        <h2 class="section-title">Nuestra empresa</h2>
        <h3>Visión</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
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
            <!-- Agrega más service-item según tus necesidades -->
        </div>
    </section>

    <!-- Sección Contacto -->
    <section id="contacto">
        <h2 class="section-title">Contáctanos</h2>
        <form>
            <input type="text" placeholder="Nombre completo" required>
            <input type="email" placeholder="Correo electrónico" required>
            <input type="tel" placeholder="Teléfono">
            <input type="text" placeholder="Empresa">
            <textarea placeholder="Detalla tus servicios a solicitar" rows="4"></textarea>
            <button type="submit">ENVIAR</button>
        </form>
    </section>

    <!-- Enlaza el archivo JavaScript usando la ruta definida -->
    <script src="<?php echo JS_URL; ?>/Principal.js"></script>
</body>

<?php include '../SPP/Includes/Footer.php'; ?>

</html>
