/* ============================================
   EFFECTS.JS — UI Interactions & Tracking
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

  /* --- Ripple Effect (optional — add .ripple class to buttons) --- */
  document.querySelectorAll('.ripple').forEach(btn => {
    btn.addEventListener('click', function(e) {
      const rect = this.getBoundingClientRect();
      const ripple = document.createElement('span');
      ripple.classList.add('ripple-effect');
      const size = Math.max(rect.width, rect.height);
      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = (e.clientX - rect.left - size / 2) + 'px';
      ripple.style.top = (e.clientY - rect.top - size / 2) + 'px';
      this.appendChild(ripple);
      ripple.addEventListener('animationend', () => ripple.remove());
    });
  });

  /* --- Ticker Pause on Hover (handled in CSS, JS backup) --- */
  document.querySelectorAll('.ticker-strip').forEach(strip => {
    const track = strip.querySelector('.ticker-track');
    if (track) {
      strip.addEventListener('mouseenter', () => track.style.animationPlayState = 'paused');
      strip.addEventListener('mouseleave', () => track.style.animationPlayState = 'running');
    }
  });

  /* --- Mobile Menu Toggle + Scroll Lock --- */
  const hamburger = document.querySelector('.hamburger');
  const mobileMenu = document.querySelector('.mobile-menu');

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => {
      const isOpen = mobileMenu.classList.toggle('open');
      hamburger.classList.toggle('active');
      hamburger.setAttribute('aria-expanded', isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        hamburger.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      });
    });
  }

  /* --- Navbar Scroll Class --- */
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    const scrollThreshold = 80;
    let navTicking = false;

    window.addEventListener('scroll', () => {
      if (!navTicking) {
        requestAnimationFrame(() => {
          if (window.scrollY > scrollThreshold) {
            navbar.classList.add('scrolled');
          } else {
            navbar.classList.remove('scrolled');
          }
          navTicking = false;
        });
        navTicking = true;
      }
    });
  }

  /* --- Back-to-Top Button --- */
  const backToTop = document.querySelector('.back-to-top');
  if (backToTop) {
    let bttTicking = false;

    window.addEventListener('scroll', () => {
      if (!bttTicking) {
        requestAnimationFrame(() => {
          if (window.scrollY > 300) {
            backToTop.classList.add('visible');
          } else {
            backToTop.classList.remove('visible');
          }
          bttTicking = false;
        });
        bttTicking = true;
      }
    });

    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* --- Typed.js Hero Headline --- */
  const typedTarget = document.getElementById('typed-services');
  if (typedTarget && typeof Typed !== 'undefined') {
    new Typed('#typed-services', {
      strings: ['Tree Removal', 'Stump Grinding', 'Lot Clearing', 'Forestry Mulching', 'Land Development'],
      typeSpeed: 55,
      backSpeed: 35,
      backDelay: 2000,
      loop: true,
      showCursor: true,
      cursorChar: '|'
    });
  }

  /* --- FAQ Accordion --- */
  document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.faq-item');
      const isActive = item.classList.contains('active');

      // Close all
      document.querySelectorAll('.faq-item.active').forEach(openItem => {
        openItem.classList.remove('active');
        openItem.querySelector('.faq-answer').style.maxHeight = '0';
      });

      // Open clicked (if it wasn't already open)
      if (!isActive) {
        item.classList.add('active');
        const answer = item.querySelector('.faq-answer');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });

  /* --- GA4 Event Stubs: Click-to-Call Tracking --- */
  document.querySelectorAll('a[href^="tel:"]').forEach(el => {
    el.addEventListener('click', () => {
      if (typeof gtag !== 'undefined') {
        gtag('event', 'phone_call', { event_category: 'contact', event_label: el.href });
      }
    });
  });

  /* --- GA4 Event Stubs: Form Submission Tracking --- */
  document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', () => {
      if (typeof gtag !== 'undefined') {
        gtag('event', 'form_submit', { event_category: 'contact', event_label: window.location.pathname });
      }
    });
  });

});
