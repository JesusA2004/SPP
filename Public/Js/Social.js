document.addEventListener('DOMContentLoaded', () => {
    const socialButtons = document.querySelectorAll('.social-btn');

    socialButtons.forEach(button => {
        // Efecto de hover: agrandar ligeramente el botón
        button.addEventListener('mouseenter', () => {
            button.style.transition = 'transform 0.3s ease';
            button.style.transform = 'scale(1.2)';
        });
        
        button.addEventListener('mouseleave', () => {
            button.style.transition = 'transform 0.3s ease';
            button.style.transform = 'scale(1)';
        });
        
        // Efecto de clic: breve rebote
        button.addEventListener('click', () => {
            button.style.transition = 'transform 0.1s ease';
            button.style.transform = 'scale(0.9)';
            setTimeout(() => {
                button.style.transform = 'scale(1)';
            }, 100);
        });
    });
});
