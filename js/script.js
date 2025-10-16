// Header hide/show on scroll
let lastScrollTop = 0;
const header = document.querySelector('.header');

window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop && scrollTop > 100) {
        // Scrolling down
        header.style.transform = 'translateY(-100%)';
    } else {
        // Scrolling up
        header.style.transform = 'translateY(0)';
    }

    lastScrollTop = scrollTop;
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Mobile menu toggle
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    hamburger.classList.toggle('active');
});

// Fade-in animation on scroll
const observerOptions = {
    threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

document.querySelectorAll('.fade-in').forEach(el => {
    observer.observe(el);
});

// Hero slider (if needed, but CSS animation is used)

// Countdown timer for deals
function startCountdown(endTime, elementId) {
    const countdownElement = document.getElementById(elementId);

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = endTime - now;

        if (distance > 0) {
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            countdownElement.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
        } else {
            countdownElement.innerHTML = "EXPIRED";
        }
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
}

// Countdown initialization moved to DOMContentLoaded

// Deal of the Day popup
function showDealPopup() {
    const popup = document.createElement('div');
    popup.className = 'deal-popup';
    popup.innerHTML = `
        <div class="popup-content">
            <span class="close-popup">&times;</span>
            <h3>Deal of the Day!</h3>
            <p>Get 50% off on selected items. Limited time offer!</p>
            <a href="top-deals.php" class="btn">Grab Deal</a>
        </div>
    `;
    document.body.appendChild(popup);

    popup.querySelector('.close-popup').addEventListener('click', () => {
        popup.remove();
    });
}

// Show popup after 5 seconds
setTimeout(showDealPopup, 5000);

// Copy coupon code
function copyCoupon(code) {
    navigator.clipboard.writeText(code).then(() => {
        alert('Coupon code copied: ' + code);
    });
}

// Scroll to top button
const scrollTopBtn = document.createElement('button');
scrollTopBtn.innerHTML = '↑';
scrollTopBtn.className = 'scroll-top-btn';
document.body.appendChild(scrollTopBtn);

scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        scrollTopBtn.style.display = 'block';
    } else {
        scrollTopBtn.style.display = 'none';
    }
});

// Newsletter form handling
const newsletterForm = document.querySelector('.newsletter-form');
if (newsletterForm) {
    newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const name = newsletterForm.querySelector('input[type="text"]').value;
        const email = newsletterForm.querySelector('input[type="email"]').value;

        // Simulate form submission
        alert(`Thank you ${name}! You've been subscribed with ${email}.`);
        newsletterForm.reset();
    });
}

// Filter and sort for categories page
function filterOffers(category) {
    const offers = document.querySelectorAll('.offer-card');
    offers.forEach(offer => {
        if (category === 'all' || offer.dataset.category === category) {
            offer.style.display = 'block';
        } else {
            offer.style.display = 'none';
        }
    });
}

function sortOffers(criteria) {
    const offersContainer = document.querySelector('.offers');
    const offers = Array.from(document.querySelectorAll('.offer-card'));

    offers.sort((a, b) => {
        if (criteria === 'name') {
            return a.querySelector('.offer-title').textContent.localeCompare(b.querySelector('.offer-title').textContent);
        } else if (criteria === 'discount') {
            const discountA = parseInt(a.querySelector('.discount-badge').textContent);
            const discountB = parseInt(b.querySelector('.discount-badge').textContent);
            return discountB - discountA;
        }
        return 0;
    });

    offers.forEach(offer => offersContainer.appendChild(offer));
}

// Dark mode toggle
const themeBtn = document.getElementById('theme-toggle');
const body = document.body;

themeBtn.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    const icon = themeBtn.querySelector('i');
    if (body.classList.contains('dark-mode')) {
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
    } else {
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');
    }
});

// Enhanced animations
document.addEventListener('DOMContentLoaded', () => {
    // Initialize countdowns for top-deals page
    if (document.getElementById('countdown1')) {
        const endTime1 = new Date().getTime() + (24 * 60 * 60 * 1000); // 24 hours from now
        startCountdown(endTime1, 'countdown1');
    }
    if (document.getElementById('countdown2')) {
        const endTime2 = new Date().getTime() + (12 * 60 * 60 * 1000); // 12 hours from now
        startCountdown(endTime2, 'countdown2');
    }
    if (document.getElementById('countdown3')) {
        const endTime3 = new Date().getTime() + (48 * 60 * 60 * 1000); // 48 hours from now
        startCountdown(endTime3, 'countdown3');
    }
    if (document.getElementById('countdown4')) {
        const endTime4 = new Date().getTime() + (36 * 60 * 60 * 1000); // 36 hours from now
        startCountdown(endTime4, 'countdown4');
    }
    if (document.getElementById('countdown5')) {
        const endTime5 = new Date().getTime() + (18 * 60 * 60 * 1000); // 18 hours from now
        startCountdown(endTime5, 'countdown5');
    }
    if (document.getElementById('countdown6')) {
        const endTime6 = new Date().getTime() + (30 * 60 * 60 * 1000); // 30 hours from now
        startCountdown(endTime6, 'countdown6');
    }

    // Add loading animation to buttons
    document.querySelectorAll('.btn').forEach(btn => {
        btn.addEventListener('click', function() {
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
        });
    });

    // Add hover effects to cards
    document.querySelectorAll('.category-card, .offer-card, .blog-post, .affiliate-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) rotate(1deg)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) rotate(0deg)';
        });
    });

    // Add particle effect to hero section
    const hero = document.querySelector('.hero');
    for (let i = 0; i < 50; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 10 + 's';
        particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
        hero.appendChild(particle);
    }

    // Removed rainbow text effect on headings to avoid blurring

    // Add floating animation to affiliate icons
    document.querySelectorAll('.affiliate-icon').forEach(icon => {
        icon.style.animation = 'bounce 2s infinite';
    });
});
