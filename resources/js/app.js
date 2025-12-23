import './bootstrap';
import * as bootstrap from 'bootstrap';
import jQuery from 'jquery';
window.$ = jQuery;

// Activer tous les tooltips
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation des tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Initialisation des popovers
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });

    // Animation au défilement
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.animate-on-scroll');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight;
            
            if (elementPosition < screenPosition - 100) {
                element.classList.add('visible');
            }
        });
    };

    // Exécuter l'animation au chargement et au défilement
    animateOnScroll();
    window.addEventListener('scroll', animateOnScroll);

    // Gestion du menu mobile
    const navbarToggler = document.querySelector('.navbar-toggler');
    if (navbarToggler) {
        navbarToggler.addEventListener('click', function() {
            document.body.classList.toggle('mobile-menu-open');
        });
    }

    // Gestion du formulaire de contact
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validation simple
            let valid = true;
            const fields = contactForm.querySelectorAll('input, textarea');
            
            fields.forEach(field => {
                if (field.required && !field.value.trim()) {
                    field.classList.add('is-invalid');
                    valid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            });
            
            if (valid) {
                // Soumission du formulaire via AJAX
                const formData = new FormData(contactForm);
                
                fetch('/contact', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Afficher un message de succès
                        const successAlert = document.createElement('div');
                        successAlert.className = 'alert alert-success mt-3';
                        successAlert.textContent = 'Votre message a été envoyé avec succès!';
                        contactForm.reset();
                        contactForm.parentNode.insertBefore(successAlert, contactForm.nextSibling);
                        
                        // Supprimer le message après 5 secondes
                        setTimeout(() => {
                            successAlert.remove();
                        }, 5000);
                    } else {
                        // Afficher un message d'erreur
                        const errorAlert = document.createElement('div');
                        errorAlert.className = 'alert alert-danger mt-3';
                        errorAlert.textContent = 'Une erreur est survenue. Veuillez réessayer.';
                        contactForm.parentNode.insertBefore(errorAlert, contactForm.nextSibling);
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                });
            }
        });
    }
});
