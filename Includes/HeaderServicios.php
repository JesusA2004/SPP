<header class="header-services">
    <nav>
        <a href="<?php echo BASE_URL; ?>">
            <img src="<?php echo IMG_URL; ?>/logoPequeño.png" alt="Logo SPP">
        </a>
        <div class="nav-services">
            <a href="<?php echo BASE_URL; ?>#servicios">← Volver a Servicios</a>
            <a href="<?php echo BASE_URL; ?>#cotizar">Cotizar</a>
        </div>
    </nav>
</header>

<style>
.header-services {
    background: rgba(0, 0, 0, 0.9);
    padding: 1rem 2rem;
    position: sticky;
    top: 0;
    z-index: 1000;
}

.nav-services {
    display: flex;
    gap: 2rem;
    align-items: center;
}

.nav-services a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s;
}
</style>