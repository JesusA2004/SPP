document.addEventListener('DOMContentLoaded', function() {
    const mapButton = document.querySelector('.map-button');
    
    if (mapButton) {
        mapButton.addEventListener('click', function() {
            window.open("https://maps.app.goo.gl/LnJZDmwcRwxpAj4n7");
        });
    }

    // Asegurarse de que footerLinks está bien definido
    const footerLinks = document.querySelectorAll('.footer-link');

    // Verifica si hay enlaces antes de intentar recorrerlos
    if (footerLinks.length > 0) {
        footerLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const target = document.querySelector(link.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    }
});
