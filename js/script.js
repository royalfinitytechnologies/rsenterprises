/**
 * Interactive Scripting for RS Enterprises
 */

document.addEventListener('DOMContentLoaded', function() {
    // 1. Mobile Navigation Menu Toggle
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navToggle.classList.toggle('open');
            navMenu.classList.toggle('open');
            
            // Prevent scroll on body when menu is open
            if (navMenu.classList.contains('open')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
        
        // Close menu when clicking a link
        const navLinks = navMenu.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navToggle.classList.remove('open');
                navMenu.classList.remove('open');
                document.body.style.overflow = '';
            });
        });
    }

    // 2. Header Scroll Shadow Effect
    const header = document.querySelector('.main-header');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.style.boxShadow = '0 10px 30px -10px rgba(15, 23, 42, 0.08)';
            header.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
        } else {
            header.style.boxShadow = 'none';
            header.style.backgroundColor = 'rgba(255, 255, 255, 0.85)';
        }
    });

    // 3. Dynamic Form Field Styling on selection
    const serviceSelect = document.getElementById('form-service');
    const formControls = document.querySelectorAll('.form-control');
    
    if (serviceSelect) {
        serviceSelect.addEventListener('change', function() {
            const selectedVal = serviceSelect.value;
            
            // Apply corresponding theme accent borders to controls depending on interest
            formControls.forEach(control => {
                if (selectedVal === 'Scrap Sell') {
                    control.classList.add('scrap-focus');
                } else {
                    control.classList.remove('scrap-focus');
                }
            });
        });
    }
});
