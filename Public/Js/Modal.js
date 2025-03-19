document.addEventListener("DOMContentLoaded", function() {
    var modal = document.getElementById("modalSucces");
    
    if (modal) {
      modal.style.display = "block";
    }
    
    window.cerrarModal = function() {
      if (modal) {
        modal.style.display = "none";
        // Remover el parámetro de la URL para que al refrescar no se muestre el modal
        window.history.replaceState(null, null, window.location.pathname + window.location.hash);
      }
    };
  
    // Cerrar modal al hacer click fuera del contenido
    window.addEventListener("click", function(event) {
      if (event.target === modal) {
        cerrarModal();
      }
    });
  });
  