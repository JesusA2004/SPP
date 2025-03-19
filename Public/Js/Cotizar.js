document.addEventListener("DOMContentLoaded", function() {
    let imagenes = [
        IMG_URL + "/seccionCotizar1.jpg",
        IMG_URL + "/seccionCotizar2.png",
        IMG_URL + "/seccionCotizar3.png"
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
