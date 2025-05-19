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

        // 2) Validación de teléfono al enviar formulario
    const form = document.getElementById("cotizarForm");
    const telefonoInput = document.getElementById("telefono");

    form.addEventListener("submit", function(event) {
      // Quitar espacios o caracteres no numéricos
      const soloDigitos = telefonoInput.value.replace(/\D/g, "");
      if (soloDigitos.length !== 10) {
        event.preventDefault();

        // Bootstrap 5: marcar el campo como inválido y mostrar feedback
        telefonoInput.classList.add("is-invalid");
        telefonoInput.focus();
      } else {
        // limpio cualquier estado de error previo
        telefonoInput.classList.remove("is-invalid");
      }
    });

    // Al escribir, quitamos el estado de error en vivo
    telefonoInput.addEventListener("input", function() {
      const soloDigitos = telefonoInput.value.replace(/\D/g, "");
      if (soloDigitos.length === 10) {
        telefonoInput.classList.remove("is-invalid");
      }
    });
});
