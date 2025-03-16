<?php
// Incluye la configuración de rutas (ajusta la ruta según tu proyecto)
require_once __DIR__ . '/Config/Routes.php';
?>

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

    <!-- Sección empresa -->
    <section id="empresa" class="sobre-nosotros">
        <div class="empresa-container">
            <h2 class="section-title">Filosofía Empresarial</h2>
            <br>
            <p align="center">
                Nuestra filosofía, que marca la personalidad y la actuación de la organización y que nos diferencia de las demás es la siguiente: 
            <p>
            <div class="items-container">
                <div class="empresa-item">
                    <img src="<?php echo IMG_URL; ?>/mision.png" alt="mision">
                    <h3 class="empresa-title">Misión</h3>
                    <p class="empresa-text" id="mision">
                        Nos concentraremos en la prestación de Servicios de Seguridad Privada para satisfacer las necesidades de nuestros clientes en base a la Calidad, Precios y variedad de nuestros servicios. 
                        Realizaremos nuestras actividades con responsabilidad y eficiencia a efecto de obtener resultados que mantengan el equilibrio con nuestro crecimiento a largo plazo, que beneficien a las personas integrantes de la organización, logrando con ello cumplir nuestro compromiso con la sociedad.
                    </p>
                </div>
                <div class="empresa-item">
                    <img src="<?php echo IMG_URL; ?>/vision.png" alt="vision">
                    <h3 class="empresa-title">Visión</h3>
                    <p class="empresa-text" id="vision">
                    Servicios de Protección Profesional S.A. de C.V. será una organización reconocida por colaborador(es), competidores, clientes y público en general. 
                        Seremos la organización líder en la prestación de Servicios de Seguridad Privada. 
                        Nuestra premisa será la innovación, creatividad, competitividad y el trabajo en equipo de nuestros colaborador(es), buscando en todo momento la mejora continua en nuestras actividades, para alcanzar la calidad total<, así como nuestra capacidad para y responder debidamente a los cambios y para crear oportunidades.
                    </p>
                </div>

                <div class="empresa-item">
                    <img src="<?php echo IMG_URL; ?>/valores.png" alt="valores">
                    <h3 class="empresa-title">Valores</h3>
                    <ul class="empresa-text valores-list">
                        <li>🔹Disciplina </li>
                        <li>🔹Respeto </li>
                        <li>🔹Profesionalismo</li>
                        <li>🔹Responsabilidad</li>
                        <li>🔹Vocación de servicio</li>
                        <li>🔹Honestidad</li>
                        <li>🔹Trabajo en equipo</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Clientes Distinguidos -->
    <section id="clientes">
        <h2 class="section-titleClientes" align="center">Clientes Distinguidos</h2>
        <p align="justify">
                En Servicios de Protección Profesional, nos enorgullece contar con la confianza de empresas y organizaciones que han depositado su seguridad en nuestras manos. Nuestro compromiso es brindar protección con los más altos estándares de calidad y profesionalismo.
        </p>
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
                        <img src="<?php echo IMG_URL; ?>/floraplant.png" alt="Cliente 6">
                    </div>
                </div>
                <div class="cliente-item">
                    <div class="cliente-card">
                        <img src="<?php echo IMG_URL; ?>/floramundo.png" alt="Cliente 7">
                    </div>
                    <div class="cliente-card">
                        <img src="<?php echo IMG_URL; ?>/doster.png" alt="Cliente 8">
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
                <img src="<?php echo IMG_URL; ?>/guardiasSegu.png" alt="Guardias de seguridad" class="service-img">
                <h3>Guardias de seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button onclick="window.location.href='detalle-guardias.php'">Ver más</button>
            </div>
            <div class="service-item">
                <img src="<?php echo IMG_URL; ?>/cercasServ.png" alt="Cercas eléctricas" class="service-img">
                <h3>Cercas eléctricas</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button onclick="window.location.href='detalle-cercas.php'">Ver más</button>
            </div>
            <div class="service-item">
                <img src="<?php echo IMG_URL; ?>/camarasSegu.png" alt="Sistemas de videovigilancia" class="service-img">
                <h3>Sistemas de videovigilancia</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button onclick="window.location.href='detalle-videovigilancia.php'">Ver más</button>
            </div>
            <div class="service-item">
                <img src="<?php echo IMG_URL; ?>/escoltaServ.png" alt="Monitoreo 24/7" class="service-img">
                <h3>Escolta</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button onclick="window.location.href='detalle-monitoreo.php'">Ver más</button>
            </div>
        </div>
    </section>

    <!-- Espacio adicional entre secciones -->
    <div class="section-spacing"></div>

    <!-- Sección Cotizar -->
    <section id="cotizar">
        <h2 class="section-title">Contáctanos completando nuestro formulario y descubre por qué nuestros clientes confían en Servicios de Protección Profesional.</h2>
        <form method="POST" action="Config/Mail.php" class="cotizar-form">
            <div class="input-container">
                <label for="nameuser">Nombre Completo</label>
                <input type="text" placeholder="Ingresa tu nombre completo" required id="nameuser" name="nameuser">
            </div>

            <div class="input-container">
                <label for="correo">Correo Electrónico</label>
                <input type="email" placeholder="Ingresa tu correo electrónico" required id="correo" name="correo">
            </div>

            <div class="input-container">
                <label for="telefono">Teléfono</label>
                <input type="number" placeholder="Ingresa tu teléfono" required id="telefono" name="telefono">
            </div>

            <div class="input-container">
                <label for="empresa">Nombre de la empresa, evento o actividad</label>
                <input type="text" placeholder="Ej. Mi Empresa, Evento de Boda, Reunión Corporativa" required id="empresa" name="empresa">
            </div>

            <div class="input-container">
                <label for="descripcion">Descripción de Servicios</label>
                <textarea placeholder="Cuéntanos sobre tus necesidades o el tipo de servicio que requieres" rows="4" id="descripcion" name="descripcion"></textarea>
            </div>
            
            <button type="submit">Enviar cotización</button>
        </form>

        <!-- Mostrar mensaje solo después de enviar el formulario -->
        <?php if (isset($_GET['mensaje'])): ?>
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
