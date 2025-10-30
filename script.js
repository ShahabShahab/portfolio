document.addEventListener('DOMContentLoaded', function () {
  // Smooth scroll for in-page links
  document.querySelectorAll('a[href^="#"]').forEach(function (link) {
    link.addEventListener('click', function (e) {
      const id = this.getAttribute('href');
      const el = document.querySelector(id);
      if (!el) return;
      e.preventDefault();
      el.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });

  // Header blur on scroll
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 100) {
      header.style.background = 'rgba(255,255,255,0.95)';
      header.style.backdropFilter = 'blur(10px)';
    } else {
      header.style.background = '#fff';
      header.style.backdropFilter = 'none';
    }
  });

  // Animate stat numbers
  const stats = document.querySelectorAll('.stat-number');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        animateNumber(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5, rootMargin: '0px 0px -100px 0px' });
  stats.forEach((s) => observer.observe(s));

  function animateNumber(el) {
    const raw = el.textContent;
    const target = parseInt(raw);
    const hasPlus = raw.includes('+');
    const hasPct = raw.includes('%');
    const duration = 1200;
    const step = target / (duration / 16);
    let current = 0;
    const timer = setInterval(() => {
      current += step;
      if (current >= target) {
        el.textContent = String(target) + (hasPlus ? '+' : '') + (hasPct ? '%' : '');
        clearInterval(timer);
      } else {
        el.textContent = String(Math.floor(current)) + (hasPlus ? '+' : '') + (hasPct ? '%' : '');
      }
    }, 16);
  }

  // Ripple effect for buttons
  const buttons = document.querySelectorAll('.cta-button');
  buttons.forEach((btn) => {
    btn.addEventListener('click', function (e) {
      const ripple = document.createElement('span');
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;
      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = x + 'px';
      ripple.style.top = y + 'px';
      ripple.className = 'ripple';
      this.appendChild(ripple);
      setTimeout(() => ripple.remove(), 600);
    });
  });

  // Load animation
  window.addEventListener('load', function () {
    document.body.classList.add('loaded');
  });
});

// Inject minimal CSS for ripple + fade-in
const style = document.createElement('style');
style.textContent = `
  .cta-button{position:relative;overflow:hidden}
  .ripple{position:absolute;border-radius:50%;background:rgba(255,255,255,0.3);transform:scale(0);animation:ripple-animation .6s linear;pointer-events:none}
  @keyframes ripple-animation{to{transform:scale(4);opacity:0}}
  body{opacity:0;transition:opacity .5s ease}
  body.loaded{opacity:1}
`;
document.head.appendChild(style);


