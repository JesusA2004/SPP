// footer.js

document.addEventListener('DOMContentLoaded', function() {
    const mapButton = document.querySelector('.map-button');
    
    if (mapButton) {
        mapButton.addEventListener('click', function() {
            window.open("https://maps.app.goo.gl/LnJZDmwcRwxpAj4n7");
        });
    }

    link.addEventListener('click', (e) => {
        e.preventDefault();
        const target = document.querySelector(link.getAttribute('href'));
        target.scrollIntoView({ behavior: 'smooth' });
    });
    
});
