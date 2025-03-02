// footer.js

document.addEventListener('DOMContentLoaded', function() {
    const mapButton = document.querySelector('.map-button');
    
    if (mapButton) {
        mapButton.addEventListener('click', function() {
            // Aquí puedes enlazar tu mapa de Google, por ejemplo:
            window.open("https://goo.gl/maps/xxxxxxxx");
        });
    }
});
