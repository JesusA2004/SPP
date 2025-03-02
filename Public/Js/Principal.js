// Principal.js

document.addEventListener('DOMContentLoaded', () => {
  // Efecto de scroll suave al dar clic en los enlaces del menú
  const navLinks = document.querySelectorAll('nav a[href^="#"]');
  navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href').substring(1);
      const targetSection = document.getElementById(targetId);
      if (targetSection) {
        targetSection.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  // Botón "SABER MÁS" que lleva a la sección "empresa"
  const saberMasBtn = document.querySelector('.hero button');
  if (saberMasBtn) {
    saberMasBtn.addEventListener('click', () => {
      const empresaSection = document.getElementById('empresa');
      if (empresaSection) {
        empresaSection.scrollIntoView({ behavior: 'smooth' });
      }
    });
  }
});
