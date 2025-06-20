document.addEventListener('DOMContentLoaded', function() {
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  
  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', function() {
      mobileMenu.classList.toggle('hidden');
    });
  }
  
  // Set active navigation
  setActiveNav();
  
  // Initialize smooth scrolling
  initSmoothScrolling();
  
  // Initialize animations
  initAnimations();
});

// Active navigation highlighting
function setActiveNav() {
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  const navLinks = document.querySelectorAll('.nav-link');
  
  navLinks.forEach(link => {
    link.classList.remove('active');
    const href = link.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === 'index.html')) {
      link.classList.add('active');
    }
  });
}

// Smooth scrolling for anchor links
function initSmoothScrolling() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });
}

// Initialize animations on scroll
function initAnimations() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };
  
  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-fade-in');
      }
    });
  }, observerOptions);
  
  // Observe elements that should animate on scroll
  document.querySelectorAll('.hover-lift').forEach(el => {
    observer.observe(el);
  });
}

// Utility functions
function toggleMobileMenu() {
  const mobileMenu = document.getElementById('mobile-menu');
  if (mobileMenu) {
    mobileMenu.classList.toggle('hidden');
  }
}

// Form handling (if needed)
function handleContactForm(event) {
  event.preventDefault();
  // Add contact form logic here
  console.log('Contact form submitted');
}

// Newsletter subscription (if needed)
function handleNewsletterSignup(event) {
  event.preventDefault();
  // Add newsletter signup logic here
  console.log('Newsletter signup submitted');
}
// Modal handling
  function openModal(title, content) {
    document.getElementById('modalTitle').innerText = title;
    document.getElementById('modalContent').innerText = content;

    const modal = document.getElementById('resourceModal');
    const box = document.getElementById('modalBox');

    modal.classList.remove('hidden');
    modal.classList.add('flex');

    // Timeout agar transisi berjalan setelah render
    setTimeout(() => {
      box.classList.remove('scale-95', 'opacity-0');
      box.classList.add('scale-100', 'opacity-100');
    }, 10);
}

  function closeModal() {
    const modal = document.getElementById('resourceModal');
    const box = document.getElementById('modalBox');

    // Transisi keluar
    box.classList.remove('scale-100', 'opacity-100');
    box.classList.add('scale-95', 'opacity-0');

    // Tunggu animasi selesai baru sembunyikan modal
    setTimeout(() => {
      modal.classList.remove('flex');
      modal.classList.add('hidden');
    }, 300);
}