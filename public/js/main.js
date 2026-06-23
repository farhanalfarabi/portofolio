/* ═══════════════════════════════════════════════════════════════
   Init — All components are already loaded via Laravel Blade
════════════════════════════════════════════════════════════════ */
function init() {
  initCursorGlow();
  initScrollReveal();
  initNavHighlight();
  initThemeToggle();
  initScrollHeader();
  initProductsTab();
}

/* ─── Cursor glow ─────────────────────────────────────────────── */
function initCursorGlow() {
  const glow = document.getElementById('cursor-glow');
  if (!glow) return;
  document.addEventListener('mousemove', e => {
    glow.style.left = e.clientX + 'px';
    glow.style.top = e.clientY + 'px';
  });
}

/* ─── Scroll reveal ───────────────────────────────────────────── */
function initScrollReveal() {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) e.target.classList.add('visible');
    });
  }, { threshold: 0.08 });

  document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
}

/* ─── Active section nav highlight ───────────────────────────── */
function initNavHighlight() {
  const sections = document.querySelectorAll('section[id^="section-"]');
  const navItems = document.querySelectorAll('.nav-item');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const num = e.target.id.replace('section-', '');

      navItems.forEach(a => {
        const active = a.dataset.section === num;

        a.classList.toggle('active', active);
        a.classList.toggle('opacity-40', !active);
        a.classList.toggle('opacity-100', active);

        const numSpan = a.querySelector('.nav-collapsed .nav-num');
        const dotSpan = a.querySelector('.nav-collapsed .nav-dot');

        if (numSpan) {
          numSpan.classList.toggle('text-accent-gold', active);
          numSpan.classList.toggle('text-outline', !active);
        }
        if (dotSpan) {
          dotSpan.classList.toggle('text-accent-gold', active);
          dotSpan.classList.toggle('text-outline', !active);
        }
      });
    });
  }, { threshold: 0.05, rootMargin: "-20% 0px -20% 0px" });

  sections.forEach(s => observer.observe(s));
}

/* ─── Dark / light toggle ─────────────────────────────────────── */
function initThemeToggle() {
  const btn = document.getElementById('theme-toggle');
  const icon = document.getElementById('theme-icon');
  if (!btn || !icon) return;

  let dark = false;
  btn.addEventListener('click', () => {
    dark = !dark;
    document.documentElement.classList.toggle('dark', dark);
    icon.textContent = dark ? 'dark_mode' : 'light_mode';
    // Re-evaluate header state after theme switch
    updateHeader();
  });
}

/* ─── Scroll-aware header ─────────────────────────────────────── */
function initScrollHeader() {
  updateHeader();
  window.addEventListener('scroll', updateHeader, { passive: true });
}

function updateHeader() {
  const header    = document.getElementById('site-header');
  const nameEl    = document.getElementById('header-name');
  const rightEl   = document.getElementById('header-right');
  if (!header || !nameEl || !rightEl) return;

  const dark      = document.documentElement.classList.contains('dark');
  const scrolled  = window.scrollY > 80;

  header.classList.toggle('scrolled', scrolled);

  if (scrolled) {
    // Filled state — glass pill
    const bg  = dark ? 'rgba(14,12,10,0.85)' : 'rgba(252,249,240,0.85)';
    const bdr = dark ? 'rgba(255,255,255,0.12)' : 'rgba(20,16,12,0.15)';

    [nameEl, rightEl].forEach(el => {
      el.style.backgroundColor = bg;
      el.style.backdropFilter   = 'blur(16px)';
      el.style.borderColor      = bdr;
      el.style.removeProperty('color'); // Rely on responsive classes
    });
    header.style.top = '1.5rem';
  } else {
    // Transparent state — no background
    [nameEl, rightEl].forEach(el => {
      el.style.backgroundColor = 'transparent';
      el.style.backdropFilter   = 'none';
      el.style.removeProperty('borderColor'); // Let styles handle it
      el.style.removeProperty('color'); // Let styles handle it
    });
    header.style.top = '2rem';
  }
}

/* ─── Product Card Tabs ───────────────────────────────────────── */
function initProductsTab() {
  const tabs = document.querySelectorAll('[data-product-tab]');
  const cards = document.querySelectorAll('[data-product]');
  if (!tabs.length || !cards.length) return;

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const targetId = tab.dataset.productTab;

      // Update tabs active state classes
      tabs.forEach(t => {
        const numSpan = t.querySelector('.product-tab-num');
        const titleSpan = t.querySelector('.product-tab-title');
        const isActive = t.dataset.productTab === targetId;

        // Toggle border class
        t.classList.toggle('border-primary', isActive);
        t.classList.toggle('border-border-low-contrast/30', !isActive);

        // Toggle number color class
        if (numSpan) {
          if (isActive) {
            numSpan.classList.remove('text-secondary');
            numSpan.classList.add('text-accent-gold');
          } else {
            numSpan.classList.remove('text-accent-gold');
            numSpan.classList.add('text-secondary');
          }
        }

        // Toggle title color class
        if (titleSpan) {
          if (isActive) {
            titleSpan.classList.remove('text-primary/50', 'dark:text-white/40');
            titleSpan.classList.add('text-secondary', 'dark:text-[#e5bfa2]');
          } else {
            titleSpan.classList.remove('text-secondary', 'dark:text-[#e5bfa2]');
            titleSpan.classList.add('text-primary/50', 'dark:text-white/40');
          }
        }
      });

      // Update cards active state
      cards.forEach(card => {
        const isTarget = card.dataset.product === targetId;
        card.classList.toggle('hidden', !isTarget);
        if (isTarget) {
          // Re-trigger scroll reveal fade-up animation smoothly
          card.classList.add('visible');
        }
      });
    });
  });
}

/* ─── Bootstrap ───────────────────────────────────────────────── */
// Components are loaded via Laravel Blade, so we just initialize
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', init);
} else {
  init();
}
