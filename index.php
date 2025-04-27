<?php
// Incluye la configuración de rutas (ajusta la ruta según tu proyecto)
require_once __DIR__ . '/Config/Routes.php';
?>

    <?php include '../SPP/Includes/Header.php'; ?>
    <!-- Botón de WhatsApp Flotante -->
    <a href="https://wa.me/7772980092" class="whatsapp-float" target="_blank" title="Contáctanos por WhatsApp">
        <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp"/>
    </a>

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
                        Nuestra premisa será la innovación, creatividad, competitividad y el trabajo en equipo de nuestros colaborador(es), buscando en todo momento la mejora continua en nuestras actividades, para alcanzar la calidad total, así como nuestra capacidad para anticipar y responder debidamente a los cambios del entorno y para crear oportunidades.
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

    <!-- Espacio adicional entre secciones -->
    <div class="section-spacing"></div>
    <br>

    <!-- Sección Clientes Distinguidos -->
    <section id="clientes" class="py-5 position-relative">
        <div class="container">
            <h2 class="section-titleClientes text-center mb-4">Clientes Distinguidos</h2>
            <p class="text-jus">
            En Servicios de Protección Profesional, nos enorgullece contar con la confianza de empresas y organizaciones que han depositado su seguridad en nuestras manos. Nuestro compromiso es brindar protección con los más altos estándares de calidad y profesionalismo.
            </p>

            <div class="position-relative">
            <div id="clientesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner">

                <?php
                    $clientes = ['CFE','TJA','PROCIVAC','impepac','floraplant','floramundo','doster','invest2'];
                    foreach($clientes as $i => $c):
                    $active = $i === 0 ? ' active' : '';
                ?>
                    <div class="carousel-item<?= $active ?>">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                        <div class="cliente-card mx-auto">
                            <img src="<?php echo IMG_URL . '/' . $c; ?>.png"
                                class="img-fluid"
                                alt="<?php echo $c; ?>">
                        </div>
                        </div>
                    </div>
                    </div>
                <?php endforeach; ?>

                </div>
            </div>

            <!-- Botón Anterior -->
            <button class="carousel-control-prev position-absolute top-50 start-0 translate-middle-y"
                    type="button"
                    data-bs-target="#clientesCarousel"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>

            <!-- Botón Siguiente -->
            <button class="carousel-control-next position-absolute top-50 end-0 translate-middle-y"
                    type="button"
                    data-bs-target="#clientesCarousel"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
            </div>
        </div>
    </section>

    <!-- Espacio adicional entre secciones -->
    <div class="section-spacing"></div>
    <br>

    <!-- Sección Servicios -->
    <section id="servicios" class="py-5 bg-light servicios">
        <div class="container">
            <h2 class="text-center mb-4 section-title">Nuestros Servicios</h2>
            <p class="text-center text-muted mb-5">
                Nuestra organización proporciona servicios de Seguridad Privada a dependencias de gobierno, plazas 
                comerciales, residenciales, organizaciones privadas tanto industrias como prestadoras de servicios en los siguientes rubros:
            </p>
            <div class="row">
                <!-- Servicio 1 -->
                <div class="col-12 col-md-6 mb-4">
                    <div class="card h-100 shadow descripcion-servicios">
                        <img src="<?php echo IMG_URL; ?>/guardiasSegu.png" class="card-img-top" alt="Guardias de Seguridad">
                        <div class="card-body text-center">
                            <h5 class="card-title">Guardias de Seguridad Intramuros</h5>
                            <p class="card-text">Proporcionamos servicios de guardias de seguridad intramuros para proteger su propiedad las 24 horas.</p>
                            <a href="Pages/guardiaSegu.php" class="btn-ver-mas">Ver más</a>
                        </div>
                    </div>
                </div>
                <!-- Servicio 2 -->
                <div class="col-12 col-md-6 mb-4">
                    <div class="card h-100 shadow descripcion-servicios">
                        <img src="<?php echo IMG_URL; ?>/escoltaServ.png" class="card-img-top" alt="Escolta">
                        <div class="card-body text-center">
                            <h5 class="card-title">Escolta</h5>
                            <p class="card-text">Brindamos servicios de escolta para personas o bienes de alto valor.</p>
                            <a href="Pages/escolta.php" class="btn-ver-mas">Ver más</a>
                        </div>
                    </div>
                </div>
                <!-- Servicio 3 -->
                <div class="col-12 col-md-6 mb-4">
                    <div class="card h-100 shadow descripcion-servicios">
                        <img src="<?php echo IMG_URL; ?>/camarasSegu.png" class="card-img-top" alt="CCTV">
                        <div class="card-body text-center">
                            <h5 class="card-title">Instalación de CCTV</h5>
                            <p class="card-text">Instalación de sistemas de cámaras de vigilancia para mayor seguridad en su propiedad.</p>
                            <a href="Pages/sistemaVideoV.php" class="btn-ver-mas">Ver más</a>
                        </div>
                    </div>
                </div>
                <!-- Servicio 4 -->
                <div class="col-12 col-md-6 mb-4">
                    <div class="card h-100 shadow descripcion-servicios">
                        <img src="<?php echo IMG_URL; ?>/cercasServ.png" class="card-img-top" alt="Cercas Eléctricas">
                        <div class="card-body text-center">
                            <h5 class="card-title">Instalación de Cercas Eléctricas</h5>
                            <p class="card-text">Ofrecemos la instalación de cercas eléctricas y de navajas para máxima protección.</p>
                            <a href="Pages/cercasElec.php" class="btn-ver-mas">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Espacio adicional entre secciones -->
    <div class="section-spacing"></div>
    <br>

    <!-- Sección Cotizar -->
    <section id="cotizar">
        <div class="cotizar-container">
            <br><br>
            <!-- Imagen a la izquierda -->
            <div class="cotizar-image">
                <img id="cotizarImg" src="<?php echo IMG_URL; ?>/seccionCotizar1.jpg" alt="Cotizar">
            </div>

            <div class="cotizar-form-container">
                <h2 class="section-title">Contáctanos completando nuestro formulario y descubre por qué nuestros clientes confían en Servicios de Protección Profesional.</h2>

                <!-- Formulario a la derecha -->
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
                        <textarea placeholder="Cuéntanos sobre tus necesidades o el tipo de servicio que requieres" rows="4" id="descripcion" name="descripcion"><?php echo isset($_GET['descripcion']) ? htmlspecialchars($_GET['descripcion']) : ''; ?></textarea>
                    </div>
                    
                    <button type="submit" class="botonEnviar">Enviar cotización</button>
                </form>
            </div>
        </div>

        <!-- Mostrar mensaje solo después de enviar el formulario -->
        <?php if (isset($_GET['mensaje']) && ($_GET['mensaje'] == 'success' || $_GET['mensaje'] == 'error')): ?>
            <div id="modalSucces" class="modal">
                <div class="modal-contenido">
                <span class="cerrar" onclick="cerrarModal()">&times;</span>
                
                <div class="modal-header">
                    <?php if ($_GET['mensaje'] == 'success'): ?>
                    <!-- Ícono de check -->
                    <img src="https://cdn-icons-png.flaticon.com/512/845/845646.png" alt="Check icon">
                    <h2>¡Registro Exitoso!</h2>
                    <p>¡Gracias!, nos pondremos en contacto contigo en breve. Los datos enviados son: </p>
                    <?php else: ?>
                    <!-- Ícono de error -->
                    <img src="https://cdn-icons-png.flaticon.com/512/845/845646.png" alt="Error icon" style="filter: hue-rotate(150deg);">
                    <h2>¡Ups, ocurrió un error!</h2>
                    <p>No se pudo enviar tu solicitud en este momento</p>
                    <?php endif; ?>
                </div>
                
                <?php if ($_GET['mensaje'] == 'success'): ?>
                    <div class="modal-body">
                    <p><span>Nombre:</span> <?php echo htmlspecialchars($_GET['nameuser'] ?? ''); ?></p>
                    <p><span>Correo:</span> <?php echo htmlspecialchars($_GET['correo'] ?? ''); ?></p>
                    <p><span>Teléfono:</span> <?php echo htmlspecialchars($_GET['telefono'] ?? ''); ?></p>
                    <p><span>Empresa:</span> <?php echo htmlspecialchars($_GET['empresa'] ?? ''); ?></p>
                    <p><span>Descripción:</span> <?php echo htmlspecialchars($_GET['descripcion'] ?? ''); ?></p>
                    </div>
                <?php endif; ?>
                
                <button class="botonConfirmacion" onclick="cerrarModal()">Continuar</button>
                </div>
            </div>
        <?php endif; ?>
    </section>          

    <!-- Script principal (ajusta la ruta si es necesario) -->
    <script src="<?php echo JS_URL; ?>/Principal.js"></script>
    <script src="<?php echo JS_URL; ?>/Modal.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let imagenes = [
                "<?php echo IMG_URL; ?>/seccionCotizar1.jpg",
                "<?php echo IMG_URL; ?>/seccionCotizar2.png",
                "<?php echo IMG_URL; ?>/seccionCotizar3.png"
            ];
            
            let index = 0;
            let imgElement = document.getElementById("cotizarImg");

            setInterval(() => {
                imgElement.style.opacity = "0"; // Desvanecer la imagen actual

                setTimeout(() => {
                    index = (index + 1) % imagenes.length;
                    imgElement.src = imagenes[index] + "?t=" + new Date().getTime(); // Forzar la recarga
                    imgElement.style.opacity = "1"; // Hacer visible la nueva imagen
                }, 500); // Tiempo suficiente para la transición de opacidad
            }, 4000); // Cambia la imagen cada 4 segundos
        });
    </script>

    <?php include '../SPP/Includes/Footer.php'; ?>

</body>
</html>
