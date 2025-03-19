document.addEventListener("DOMContentLoaded", function() {
    // Seleccionamos la sección de descripción
    const servicioDesc = document.querySelector('.servicio-descripcion');
    
    if ('IntersectionObserver' in window && servicioDesc) {
      // Configuramos el observer para activar la animación cuando el 30% del elemento es visible
      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if(entry.isIntersecting){
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      observer.observe(servicioDesc);
    } else if (servicioDesc) {
      // Fallback para navegadores que no soporten IntersectionObserver
      servicioDesc.classList.add('visible');
    }
  });
  