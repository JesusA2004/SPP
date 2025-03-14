<?php
// Incluye la configuración de rutas (ajusta la ruta según tu proyecto)
require_once __DIR__ . '/Config/Routes.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios de Protección Profesional</title>

    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Index.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Header.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Inicio.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Filosofia.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Submenu.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Responsive.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Servicios.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Cotizar.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/ClientesD.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Liter:wght@300;400;700&family=Inter+Tight:wght@700&display=swap" rel="stylesheet">
</head>
<body>

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
        <p align="justify">
            Somos una empresa dedicada a la protección y vigilancia de bienes muebles e inmuebles, 
            con <b><span class="highlightInicio">más de 20 años de experiencia</span></b>, 
            nuestra ventaja competitiva es generar la confianza en nuestros clientes a través de 
            una excelente calidad en nuestros servicios.
        </p>
        <button id="saberMas">SABER MÁS</button>
    </section>

    <!-- Espacio adicional entre secciones -->
    <div class="section-spacing"></div>

    <section id="empresa">
        <h2 class="section-title">Filosofía empresarial</h2>
        <div class="empresa-container">
            <div class="empresa-item">
                <h3 class="empresa-title" id="mision">Misión</h3>
                <p class="empresa-text">
                    Nos concentraremos en la prestación de <span class="highlight">Servicios de Seguridad Privada</span> para satisfacer las necesidades de nuestros clientes en base a la <span class="highlight">Calidad</span>, <span class="highlight">Precios</span> y variedad de nuestros servicios. 
                    Realizaremos nuestras actividades con <span class="highlight">responsabilidad</span> y <span class="highlight">eficiencia</span> a efecto de obtener resultados que mantengan el equilibrio con nuestro <span class="highlight">crecimiento a largo plazo</span>, que beneficien a las personas integrantes de la organización, logrando con ello cumplir nuestro <span class="highlight">compromiso con la sociedad</span>.
                </p>
            </div>
            <div class="empresa-item">
                <h3 class="empresa-title" id="vision">Visión</h3>
                <p class="empresa-text">
                    <span class="highlight">Servicios de Protección Profesional S.A. de C.V.</span> será una <span class="highlight">organización reconocida</span> por empleados, competidores, clientes y público en general. 
                    Seremos la organización <span class="highlight">líder</span> en la prestación de <span class="highlight">Servicios de Seguridad Privada</span>. 
                    Nuestra premisa será la <span class="highlight">innovación</span>, <span class="highlight">creatividad</span>, <span class="highlight">competitividad</span> y el <span class="highlight">trabajo en equipo</span> de nuestros empleados, buscando en todo momento la <span class="highlight">mejora continua</span> en nuestras actividades, para alcanzar la <span class="highlight">calidad total</span>, así como nuestra capacidad para <span class="highlight">anticipar</span> y <span class="highlight">responder debidamente a los cambios</span> y para <span class="highlight">crear oportunidades</span>.
                </p>
            </div>
        </div>
    </section>

    <!-- Sección Clientes Distinguidos -->
    <section id="clientes">
        <h2 class="section-title" align="center">Clientes Distinguidos</h2>
        <br>
        <div class="clientes-container">
            <button class="cliente-prev">&#10094;</button>
            <div class="cliente-slider">
                <div class="cliente-item">
                    <div class="cliente-card">
                        <img src="<?php echo IMG_URL; ?>/morena.jpg" alt="Cliente 1">
                    </div>
                    <div class="cliente-card">
                        <img src="<?php echo IMG_URL; ?>/impepac.png" alt="Cliente 2">
                    </div>
                </div>
                <div class="cliente-item">
                    <div class="cliente-card">
                        <img src="<?php echo IMG_URL; ?>/procivac.png" alt="Cliente 3">
                        <h3>PROCIVAC</h3>
                    </div>
                    <div class="cliente-card">
                        <img src="<?php echo IMG_URL; ?>/RAN.png" alt="Cliente 4">
                    </div>
                </div>
                <div class="cliente-item">
                    <div class="cliente-card">
                        <img src="<?php echo IMG_URL; ?>/invest.jpg" alt="Cliente 5">
                    </div>
                    <div class="cliente-card">
                        <img src="<?php echo IMG_URL; ?>/cliente6.jpg" alt="Cliente 6">
                    </div>
                </div>
                <div class="cliente-item">
                    <div class="cliente-card">
                        <img src="<?php echo IMG_URL; ?>/cliente7.jpg" alt="Cliente 7">
                    </div>
                    <div class="cliente-card">
                        <img src="<?php echo IMG_URL; ?>/cliente8.jpg" alt="Cliente 8">
                    </div>
                </div>
            </div>
            <button class="cliente-next">&#10095;</button>
        </div>
    </section>

    <!-- Espacio adicional entre secciones -->
    <div class="section-spacing"></div>

    <!-- Sección Servicios con 4 cards y con imagen descriptiva en cada una -->
    <section id="servicios">
        <h2 class="section-title">Nuestros Servicios</h2>
        <div class="services-grid">
            <div class="service-item">
                <img src="<?php echo IMG_URL; ?>/guardias.jpg" alt="Guardias de seguridad" class="service-img">
                <h3>Guardias de seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button onclick="window.location.href='detalle-guardias.php'">Ver más</button>
            </div>
            <div class="service-item">
                <img src="<?php echo IMG_URL; ?>/cercas.jpg" alt="Cercas eléctricas" class="service-img">
                <h3>Cercas eléctricas</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button onclick="window.location.href='detalle-cercas.php'">Ver más</button>
            </div>
            <div class="service-item">
                <img src="<?php echo IMG_URL; ?>/videovigilancia.jpg" alt="Sistemas de videovigilancia" class="service-img">
                <h3>Sistemas de videovigilancia</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button onclick="window.location.href='detalle-videovigilancia.php'">Ver más</button>
            </div>
            <div class="service-item">
                <img src="<?php echo IMG_URL; ?>/monitoreo.jpg" alt="Monitoreo 24/7" class="service-img">
                <h3>Monitoreo 24/7</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button onclick="window.location.href='detalle-monitoreo.php'">Ver más</button>
            </div>
        </div>
    </section>

    <!-- Espacio adicional entre secciones -->
    <div class="section-spacing"></div>

    <!-- Sección Cotizar -->
    <section id="cotizar">
        <h2 class="section-title">Cotizar</h2>
        <form method="POST" action="Config/Mail.php" class="cotizar-form">
            <input type="text" placeholder="Nombre completo" required id="nameuser" name="nameuser">

            <input type="email" placeholder="Correo electrónico" required id="correo" name="correo">

            <input type="tel" placeholder="Teléfono" required id="telefono" name="telefono">

            <input type="text" placeholder="Empresa" required id="empresa" name="empresa">

            <textarea placeholder="Detalla tus servicios a solicitar" rows="4" id="descripcion" name="descripcion"></textarea>
            
            <button type="submit">ENVIAR</button>
        </form>

        <!-- Mostrar mensaje solo después de enviar el formulario -->
        <?php
            if (isset($_GET['mensaje'])): 
            ?>
                <div id="modalSucces" class="modal">
                    <div class="modal-contenido">
                        <span class="cerrar" onclick="cerrarModal()">&times;</span>
                        <p>
                            <?php 
                                if ($_GET['mensaje'] == 'success') {
                                    echo "✅ Registro exitoso. Se ha enviado un correo con los detalles de tu solicitud.";
                                } elseif ($_GET['mensaje'] == 'error') {
                                    echo "❌ Hubo un error al enviar el correo. Inténtalo de nuevo más tarde.";
                                }
                            ?>
                        </p>
                    </div>
                </div>
        <?php endif; ?>
    </section>

    <!-- Script principal (ajusta la ruta si es necesario) -->
    <script src="<?php echo JS_URL; ?>/Principal.js"></script>

    <?php include '../SPP/Includes/Footer.php'; ?>

</body>
</html>
