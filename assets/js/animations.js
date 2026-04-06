/* ============================================
   ANIMATIONS.JS — Scroll Reveal & Counters
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

  /* --- Scroll Reveal (fade-up, wipe-right) --- */
  const animatedElements = document.querySelectorAll('[data-animate]');

  /* Classes that wrap images — never hide these with opacity:0 */
  const imageWrapperClasses = ['gallery-item', 'ba-panel', 'about-img-wrap', 'service-img-wrap', 'split', 'split-reverse'];

  function isImageWrapper(el) {
    if (el.querySelector('img')) return true;
    return imageWrapperClasses.some(cls => el.classList.contains(cls));
  }

  if (animatedElements.length) {
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          entry.target.style.opacity = '';
          entry.target.style.transform = '';
          entry.target.style.transition = '';
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    animatedElements.forEach(el => {
      if (isImageWrapper(el)) {
        /* Make image wrappers immediately visible — skip animation */
        el.classList.add('in-view');
      } else {
        revealObserver.observe(el);
      }
    });
  }

  /* --- Stagger Grid Children --- */
  const staggerGrids = document.querySelectorAll('[data-stagger]');

  if (staggerGrids.length) {
    const staggerObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const children = entry.target.children;
          Array.from(children).forEach((child, i) => {
            const delay = Math.min(i * 100, 400);
            child.style.transitionDelay = `${delay}ms`;
            child.classList.add('in-view');
          });
          staggerObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    staggerGrids.forEach(grid => staggerObserver.observe(grid));
  }

  /* --- Stat Counter Animated Count-Up --- */
  const counters = document.querySelectorAll('[data-count]');

  if (counters.length) {
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const target = parseInt(el.getAttribute('data-count'), 10);
          const suffix = el.getAttribute('data-suffix') || '';
          const prefix = el.getAttribute('data-prefix') || '';
          const duration = 2000;
          const start = performance.now();

          function updateCounter(now) {
            const elapsed = now - start;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(eased * target);
            el.textContent = prefix + current.toLocaleString() + suffix;

            if (progress < 1) {
              requestAnimationFrame(updateCounter);
            } else {
              el.textContent = prefix + target.toLocaleString() + suffix;
            }
          }

          requestAnimationFrame(updateCounter);
          counterObserver.unobserve(el);
        }
      });
    }, { threshold: 0.15 });

    counters.forEach(counter => counterObserver.observe(counter));
  }

});
