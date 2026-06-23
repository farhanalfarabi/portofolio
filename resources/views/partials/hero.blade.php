<!-- ═══ 00 · HERO ═══════════════════════════════════════════════════════ -->
<section id="section-00"
  class="relative min-h-screen w-full flex flex-col justify-center items-start pt-32 overflow-hidden">

  <!-- Background portrait — swaps automatically with dark mode -->
  <div class="absolute inset-0 z-0">

    <!-- Light mode photo: fade from left so text is readable -->
    <img alt="Portrait" class="dark:hidden w-full h-full object-cover object-center" src="{{ asset('images/foto/hero-light.png') }}" />
    <!-- Dark mode photo: full bleed, no mask — overlay handles text legibility -->
    <img alt="Portrait" class="hidden dark:block w-full h-full object-cover object-center" src="{{ asset('images/foto/hero-dark.png') }}" />

    <!-- Light mode overlay: warm fade from left only -->
    <div class="dark:hidden absolute inset-0"
      style="background:linear-gradient(to right, #fcf9f0 28%, rgba(252,249,240,0.7) 50%, transparent 75%);"></div>
    <div class="dark:hidden absolute inset-0" style="background:linear-gradient(to top, #fcf9f0 0%, transparent 30%);">
    </div>

    <!-- Dark mode overlay: deep dark from left + bottom, matching screenshot -->
    <div class="hidden dark:block absolute inset-0"
      style="background:linear-gradient(to right, #090b10 25%, rgba(9,11,16,0.75) 50%, transparent 80%);"></div>
    <div class="hidden dark:block absolute inset-0"
      style="background:linear-gradient(to top, #090b10 0%, transparent 35%);"></div>

  </div>

  <!-- Content -->
  <div class="relative z-10 px-4 md:px-margin-page max-w-7xl mx-auto w-full">
    <div class="flex flex-col gap-6 max-w-2xl fade-up">

      <span class="font-label-caps text-label-caps text-secondary dark:text-accent-gold/80 tracking-[0.3em]">FULLSTACK DEV · UI/UX · TEACHER</span>

      <h1 class="hero-title">
        Farhan<br />Alfaraby
      </h1>

      <p class="font-body-lg text-body-lg text-on-surface-variant dark:text-white/60 max-w-md leading-relaxed">
        I build modern web systems, design clean user experiences, and teach coding to the next generation of developers.
      </p>

      <div class="mt-4 flex flex-wrap gap-4">
        <a href="https://wa.me/6282244866589" target="_blank" rel="noopener noreferrer"
          class="flex items-center gap-3 bg-primary dark:bg-white/10 dark:border dark:border-white/20 text-surface dark:text-white px-8 py-4 rounded-full group hover:opacity-90 transition-all duration-300">
          <span class="font-label-caps text-label-caps">GET IN TOUCH</span>
          <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
        </a>
        <a href="#section-02"
          class="flex items-center gap-3 border border-outline dark:border-white/20 px-8 py-4 rounded-full hover:border-primary dark:hover:border-white/60 transition-all duration-300">
          <span class="font-label-caps text-label-caps text-on-surface dark:text-white/70">VIEW WORK</span>
        </a>
      </div>

    </div>
  </div>

</section>

<!-- ═══ MARQUEE TICKER ═════════════════════════════════════════════ -->
<div class="w-full py-6 border-y border-border-low-contrast dark:border-white/10 bg-surface overflow-hidden">
  <div class="animate-marquee whitespace-nowrap">
    <div class="flex items-center gap-16 px-8">
      <span class="font-label-caps text-label-caps text-outline dark:text-white/40">DISCIPLINES</span>
      <span class="font-headline-lg text-[32px] text-primary dark:text-white opacity-20 font-semibold">FULLSTACK DEV</span>
      <span class="material-symbols-outlined text-accent-gold">star</span>
      <span class="font-headline-lg text-[32px] text-primary dark:text-white opacity-20 font-semibold">UI/UX DESIGN</span>
      <span class="material-symbols-outlined text-accent-gold">star</span>
      <span class="font-headline-lg text-[32px] text-primary dark:text-white opacity-20 font-semibold">CODING EDUCATION</span>
      <span class="material-symbols-outlined text-accent-gold">star</span>
      <span class="font-headline-lg text-[32px] text-primary dark:text-white opacity-20 font-semibold">MOBILE APP DEV</span>
      <span class="material-symbols-outlined text-accent-gold">star</span>
    </div>
    <div class="flex items-center gap-16 px-8" aria-hidden="true">
      <span class="font-label-caps text-label-caps text-outline dark:text-white/40">DISCIPLINES</span>
      <span class="font-headline-lg text-[32px] text-primary dark:text-white opacity-20 font-semibold">FULLSTACK DEV</span>
      <span class="material-symbols-outlined text-accent-gold">star</span>
      <span class="font-headline-lg text-[32px] text-primary dark:text-white opacity-20 font-semibold">UI/UX DESIGN</span>
      <span class="material-symbols-outlined text-accent-gold">star</span>
      <span class="font-headline-lg text-[32px] text-primary dark:text-white opacity-20 font-semibold">CODING EDUCATION</span>
      <span class="material-symbols-outlined text-accent-gold">star</span>
      <span class="font-headline-lg text-[32px] text-primary dark:text-white opacity-20 font-semibold">MOBILE APP DEV</span>
      <span class="material-symbols-outlined text-accent-gold">star</span>
    </div>
  </div>
</div>
