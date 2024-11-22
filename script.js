document.addEventListener('DOMContentLoaded', function() {
    // Vérification de GSAP et ScrollTrigger
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        console.error('GSAP ou ScrollTrigger n\'est pas chargé. Veuillez inclure les bibliothèques nécessaires.');
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    const sections = document.querySelectorAll('.fullscreen-section');
    const state = {
        currentSection: 0,
        isScrolling: false,
        touchStartY: 0
    };

    function hideLoadingOverlay() {
        const loadingOverlay = document.getElementById('loading-overlay');
        if (loadingOverlay) {
            loadingOverlay.style.opacity = '0';
            setTimeout(() => {
                loadingOverlay.style.display = 'none';
            }, 500);
        }
    }

    // Initialisation principale
    function init() {
        const allSections = document.querySelectorAll('.fullscreen-video, .fullscreen-section');
        if (allSections.length === 0) {
            console.error("Aucune section trouvée");
            return;
        }

        allSections[0].classList.add('active');
        // setupEventListeners();
        initAnimations();
        initLazyLoading();
        initHeaderBehavior();
        initMobileMenu();
        initScrollIndicator();
        initPromoPopups();
        initCountdown();
        initGameShowcase();
        addIcons();
        improveUX();
        initParticles();
        hideLoadingOverlay();
        // initSmoothScroll();
        console.log('Initialisation terminée');
    }

    // Configuration des écouteurs d'événements
    // function setupEventListeners() {
    //     window.addEventListener('wheel', handleWheel, { passive: false });
    //     window.addEventListener('keydown', handleKeydown);
    //     window.addEventListener('touchstart', (e) => state.touchStartY = e.touches[0].clientY, { passive: false });
    //     window.addEventListener('touchend', handleTouchEnd);
    // }

    // Gestion du défilement par molette et touches clavier
    // function handleWheel(event) {
    //     event.preventDefault();
    //     if (state.isScrolling) return;
    //     const direction = event.deltaY > 0 ? 1 : -1;
    //     changeSection(direction);
    // }

    // function handleKeydown(event) {
    //     if (state.isScrolling) return;
    //     if (event.key === 'ArrowDown') changeSection(1);
    //     if (event.key === 'ArrowUp') changeSection(-1);
    // }

    // function handleTouchEnd(e) {
    //     const touchEndY = e.changedTouches[0].clientY;
    //     if (state.touchStartY > touchEndY + 50) changeSection(1);
    //     else if (state.touchStartY < touchEndY - 50) changeSection(-1);
    // }

    function changeSection(direction) {
        const allSections = document.querySelectorAll('.fullscreen-video, .fullscreen-section');
        const currentIndex = Array.from(allSections).findIndex(section => section.getBoundingClientRect().top >= 0);
        let newIndex = currentIndex + direction;

        if (newIndex >= 0 && newIndex < allSections.length && !state.isScrolling) {
            scrollToSection(newIndex, allSections);
        }
    }

    function scrollToSection(index, sections) {
        if (state.isScrolling) return;
        state.isScrolling = true;
        const targetSection = sections[index];

        gsap.to(window, {
            duration: 1,
            scrollTo: { y: targetSection, autoKill: false },
            ease: "power3.inOut",
            onComplete: () => {
                state.isScrolling = false;
                state.currentSection = index;
                updateActiveNavLink(index);
            }
        });
    }

    // Initialisation des animations avec ScrollTrigger
    function initAnimations() {
        const sectionContents = document.querySelectorAll('.section-content');
        
        sectionContents.forEach((content) => {
            gsap.set(content, { y: 50, opacity: 0 });

            ScrollTrigger.create({
                trigger: content,
                start: "top 80%",
                onEnter: () => {
                    gsap.to(content, { 
                        y: 0, 
                        opacity: 1,
                        duration: 0.8, 
                        ease: "power3.out"
                    });
                },
                once: true
            });
        });

        // Autres animations existantes...
    }

    // Lazy loading des images
    function initLazyLoading() {
        const lazyImages = document.querySelectorAll('img[data-src]');
        const lazyLoadObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    observer.unobserve(img);
                }
            });
        });
        lazyImages.forEach(img => lazyLoadObserver.observe(img));
    }

    // Comportement du header
    function initHeaderBehavior() {
        const header = document.querySelector('.floating-header');
        window.addEventListener('scroll', () => {
            const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
            header.classList.toggle('full', scrollPosition > window.innerHeight * 0.7);
        });
    }

    // Menu mobile
    function initMobileMenu() {
        const menuToggle = document.querySelector('.menu-toggle');
        const nav = document.querySelector('nav');
        
        if (!menuToggle || !nav) return;
        
        // Remove any existing event listeners
        const newMenuToggle = menuToggle.cloneNode(true);
        menuToggle.parentNode.replaceChild(newMenuToggle, menuToggle);
        
        newMenuToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            newMenuToggle.classList.toggle('active');
            nav.classList.toggle('show');
            document.body.style.overflow = nav.classList.contains('show') ? 'hidden' : '';
        });
    
        // Close menu when clicking on links
        const navLinks = nav.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                newMenuToggle.classList.remove('active');
                nav.classList.remove('show');
                document.body.style.overflow = '';
            });
        });
    
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (nav.classList.contains('show') && !nav.contains(e.target) && !newMenuToggle.contains(e.target)) {
                newMenuToggle.classList.remove('active');
                nav.classList.remove('show');
                document.body.style.overflow = '';
            }
        });
    }
    

    // Indicateur de défilement
    function initScrollIndicator() {
        const scrollIndicator = document.createElement('div');
        scrollIndicator.classList.add('scroll-indicator');
        scrollIndicator.innerHTML = '<span>Scroll</span><i class="fas fa-chevron-down"></i>';
        document.body.appendChild(scrollIndicator);

        gsap.to(scrollIndicator, {
            y: 10,
            repeat: -1,
            yoyo: true,
            duration: 1,
            ease: "power1.inOut"
        });

        window.addEventListener('scroll', () => {
            scrollIndicator.style.opacity = '0';
            setTimeout(() => scrollIndicator.remove(), 500);
        }, { once: true });
    }

    // Popups promotionnels
    function initPromoPopups() {
        const popups = document.querySelectorAll('.promo-popup');
        let currentPopupIndex = 0;

        function showNextPopup() {
            if (currentPopupIndex < popups.length) {
                const popup = popups[currentPopupIndex];
                popup.classList.add('active');
                currentPopupIndex++;

                setTimeout(() => {
                    closePopup(popup);
                }, 5000); // Réduit à 5 secondes
            } else {
                currentPopupIndex = 0;
                setTimeout(showNextPopup, 15000); // Réduit à 15 secondes
            }
        }

        function closePopup(popup) {
            popup.classList.add('closing');
            popup.addEventListener('animationend', () => {
                popup.classList.remove('active', 'closing');
                setTimeout(showNextPopup, 2000); // Réduit à 2 secondes
            }, { once: true });
        }

        popups.forEach(popup => {
            const closeButton = popup.querySelector('.close-popup');
            if (closeButton) {
                closeButton.addEventListener('click', () => closePopup(popup));
            }
        });

        setTimeout(showNextPopup, 5000); // Commence après 5 secondes
    }

    // Mise à jour du lien de navigation actif
    function updateActiveNavLink(index) {
        const navLinks = document.querySelectorAll('.nav-link');
        const allSections = document.querySelectorAll('.fullscreen-video, .fullscreen-section');
        navLinks.forEach((link, i) => {
            link.classList.toggle('active', allSections[index].id === link.getAttribute('href').substring(1));
        });
    }

    // Ajoutez cette fonction après initPromoPopups()
    function initCountdown() {
        const countdownElement = document.getElementById('countdown-timer');
        if (!countdownElement) return;

        countdownElement.style.opacity = '1';

        const endDate = new Date("2025-01-01T00:00:00").getTime();
        let countdownInterval;

        const daysElement = document.getElementById('days');
        const hoursElement = document.getElementById('hours');
        const minutesElement = document.getElementById('minutes');
        const secondsElement = document.getElementById('seconds');

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = endDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (daysElement) daysElement.textContent = days.toString().padStart(2, '0');
            if (hoursElement) hoursElement.textContent = hours.toString().padStart(2, '0');
            if (minutesElement) minutesElement.textContent = minutes.toString().padStart(2, '0');
            if (secondsElement) secondsElement.textContent = seconds.toString().padStart(2, '0');

            if (distance < 0) {
                clearInterval(countdownInterval);
                if (countdownElement) countdownElement.innerHTML = "L'événement a commencé!";
            }
        }

        updateCountdown();
        countdownInterval = setInterval(updateCountdown, 1000);
    }

    function initGameShowcase() {
        const gamePosters = document.querySelectorAll('.game-poster');
        gamePosters.forEach(poster => {
            gsap.set(poster, { scale: 0.8 });
            gsap.to(poster, {
                scale: 1,
                duration: 0.8,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: poster,
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            });
        });
    }

    function addIcons() {
        const featureItems = document.querySelectorAll('.feature-item');
        const icons = ['fas fa-trophy', 'fas fa-gamepad', 'fas fa-users', 'fas fa-calendar-alt'];
        
        featureItems.forEach((item, index) => {
            const icon = document.createElement('i');
            icon.className = icons[index % icons.length] + ' feature-icon';
            item.insertBefore(icon, item.firstChild);
        });

        const rewardItems = document.querySelectorAll('.reward-item');
        rewardItems.forEach(item => {
            const icon = document.createElement('i');
            icon.className = 'fas fa-gift reward-icon';
            item.insertBefore(icon, item.firstChild);
        });
    }

    function improveUX() {
        // Ajouter un effet de survol aux boutons CTA
        const ctaButtons = document.querySelectorAll('.cta-button');
        ctaButtons.forEach(button => {
            button.addEventListener('mouseover', () => {
                gsap.to(button, { scale: 1.05, duration: 0.3 });
            });
            button.addEventListener('mouseout', () => {
                gsap.to(button, { scale: 1, duration: 0.3 });
            });
        });

        // Ajouter un effet de parallaxe au fond
        const parallaxBg = document.querySelector('.parallax-bg');
        if (parallaxBg) {
            window.addEventListener('scroll', () => {
                const scrollPosition = window.pageYOffset;
                parallaxBg.style.transform = `translateY(${scrollPosition * 0.5}px)`;
            });
        }
    }

    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    gsap.to(window, {
                        duration: 1,
                        scrollTo: { y: targetElement, autoKill: false },
                        ease: "power3.inOut"
                    });
                }
            });
        });
    }

    // Appel de la fonction init
    init();

    // Forcer la fermeture de l'overlay après 5 secondes maximum
    setTimeout(hideLoadingOverlay, 5000);

    // Attendez que le contenu soit chargé avant d'initialiser les animations
    window.addEventListener('load', () => {
        initAnimations();
        hideLoadingOverlay();
    });
});


