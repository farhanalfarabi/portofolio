<!-- ═══ 06 · CONTACT ═══════════════════════════════════════════════ -->
<section
  id="section-06"
  class="py-stack-xl px-4 md:px-margin-page bg-surface text-primary"
>
  <div
    class="max-w-7xl mx-auto border border-outline-variant/30 bg-[#f5f2eb] dark:bg-[#1a1511] dark:border-outline/20 rounded-[40px] p-8 md:p-16 relative overflow-hidden"
  >
    <!-- Top row / sub-header -->
    <div
      class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 gap-4 fade-up"
    >
      <div
        class="flex items-center gap-3 font-label-caps text-[11px] tracking-[0.25em] text-secondary/70 dark:text-[#cec5bd]/70"
      >
        <span>06</span>
        <span class="w-12 h-[1px] bg-secondary/30 dark:bg-[#cec5bd]/20"></span>
        <span>CONTACT &amp; AVAILABILITY</span>
      </div>
      <div
        class="font-label-caps text-[10px] tracking-wider px-3 py-1 rounded-full border border-secondary/30 dark:border-[#cec5bd]/30 text-secondary/70 dark:text-[#cec5bd]/70"
      >
        VOL. 06 - '26
      </div>
    </div>

    <!-- Main Heading & Paragraph -->
    <div class="mb-12 max-w-3xl fade-up">
      <h2
        class="font-headline-lg text-display-xl-mobile md:text-[64px] md:leading-none text-primary dark:text-surface-bright mb-6 font-semibold leading-tight"
      >
        Let's build
        <span class="font-headline-lg-italic italic text-secondary-fixed-dim"
          >something good.</span
        >
      </h2>
      <p
        class="font-body-lg text-[18px] text-on-surface-variant dark:text-[#cec5bd] leading-relaxed"
      >
        Open to freelance collaborations, training sessions, and fullstack
        development projects where <strong>craft and ownership</strong> matter.
        Available in Pasuruan, Bogor, or remote. Reply within 24h.
      </p>
    </div>

    <!-- Contact Cards Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch fade-up">
      <!-- Left Card: Send a Note (Dashed Border) -->
      <div
        class="lg:col-span-7 border-2 border-dashed border-secondary/20 dark:border-outline/20 rounded-3xl p-8 bg-[#faf8f5]/30 dark:bg-[#1e1914]/40 flex flex-col justify-between"
      >
        <form id="contact-form" class="space-y-6" action="{{ route('contact.store') }}" method="POST">
          @csrf
          <!-- Box Header -->
          <div
            class="flex justify-between items-center font-label-caps text-[10px] tracking-widest text-secondary/50 dark:text-[#cec5bd]/50"
          >
            <span>¶ SEND A NOTE</span>
            <span>DIRECT SUBMISSION</span>
          </div>

          <!-- Success / Error Message -->
          <div id="form-message" class="hidden px-4 py-3 rounded-xl font-label-caps text-[11px] tracking-widest"></div>

          <!-- Fields -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label
                class="font-label-caps text-[10px] tracking-widest text-secondary/60 dark:text-[#cec5bd]/60 block mb-1"
                >NAME</label
              >
              <input
                type="text"
                name="name"
                id="contact-name"
                required
                class="w-full bg-[#faf8f5] dark:bg-[#1c1713] border border-secondary/20 dark:border-outline/20 rounded-xl px-4 py-3 font-body-md text-body-md text-primary dark:text-surface-bright placeholder:text-secondary/30 dark:placeholder:text-[#cec5bd]/20 focus:border-secondary focus:ring-0 focus:outline-none transition-all duration-200"
              />
            </div>
            <div>
              <label
                class="font-label-caps text-[10px] tracking-widest text-secondary/60 block mb-1"
                >EMAIL</label
              >
              <input
                type="email"
                name="email"
                id="contact-email"
                required
                class="w-full bg-[#faf8f5] dark:bg-[#1c1713] border border-secondary/20 dark:border-outline/20 rounded-xl px-4 py-3 font-body-md text-body-md text-primary dark:text-surface-bright placeholder:text-secondary/30 dark:placeholder:text-[#cec5bd]/20 focus:border-secondary focus:ring-0 focus:outline-none transition-all duration-200"
              />
            </div>
          </div>

          <div>
            <label
              class="font-label-caps text-[10px] tracking-widest text-secondary/60 dark:text-[#cec5bd]/60 block mb-1"
              >NOTE</label
            >
            <textarea
              rows="4"
              name="note"
              id="contact-note"
              required
              placeholder="Tell me about the role, team, and what you'd want me leading."
              class="w-full bg-[#faf8f5] dark:bg-[#1c1713] border border-secondary/20 dark:border-outline/20 rounded-xl px-4 py-3 font-body-md text-body-md text-primary dark:text-surface-bright placeholder:text-secondary/40 dark:placeholder:text-[#cec5bd]/20 focus:border-secondary focus:ring-0 focus:outline-none transition-all duration-200 resize-none"
            ></textarea>
          </div>

          <!-- Actions -->
          <div class="flex flex-wrap items-center gap-4 pt-2">
            <button
              type="submit"
              id="submit-btn"
              class="flex items-center gap-2 bg-[#1c1c17] text-white dark:bg-[#fcf9f0] dark:text-primary px-6 py-3.5 rounded-full font-label-caps text-[11px] tracking-widest hover:opacity-90 transition-all duration-200 group disabled:opacity-50"
            >
              <span id="submit-label">SEND MESSAGE</span>
              <span
                class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform"
                >arrow_right_alt</span
              >
            </button>

            <a
              href="https://wa.me/6282244866589"
              target="_blank"
              rel="noopener noreferrer"
              class="flex items-center gap-2 bg-[#faf8f5] dark:bg-[#1e1914] border border-secondary/20 dark:border-outline/20 text-primary dark:text-surface-bright px-6 py-3.5 rounded-full font-label-caps text-[11px] tracking-widest hover:bg-[#f5f2eb] dark:hover:bg-[#25201b] transition-all duration-200"
            >
              <span>BOOK A CALL</span>
              <span class="material-symbols-outlined text-[16px]"
                >calendar_today</span
              >
            </a>

          </div>
        </form>

        <script>
        document.getElementById('contact-form').addEventListener('submit', async function(e) {
          e.preventDefault();

          const btn = document.getElementById('submit-btn');
          const label = document.getElementById('submit-label');
          const msg = document.getElementById('form-message');

          btn.disabled = true;
          label.textContent = 'SENDING...';
          msg.classList.add('hidden');

          try {
            const res = await fetch(this.action, {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json',
              },
              body: JSON.stringify({
                name:  document.getElementById('contact-name').value,
                email: document.getElementById('contact-email').value,
                note:  document.getElementById('contact-note').value,
              })
            });

            const data = await res.json();

            if (res.ok && data.success) {
              msg.textContent = 'Message sent! I will reply within 24h.';
              msg.className = 'px-4 py-3 rounded-xl font-label-caps text-[11px] tracking-widest bg-secondary/10 text-secondary dark:bg-[#cec5bd]/10 dark:text-[#cec5bd]';
              this.reset();
            } else {
              const errors = data.errors ? Object.values(data.errors).flat().join(' ') : 'Something went wrong.';
              msg.textContent = errors;
              msg.className = 'px-4 py-3 rounded-xl font-label-caps text-[11px] tracking-widest bg-error/10 text-error';
            }
          } catch (err) {
            msg.textContent = 'Network error. Please try again.';
            msg.className = 'px-4 py-3 rounded-xl font-label-caps text-[11px] tracking-widest bg-error/10 text-error';
          } finally {
            btn.disabled = false;
            label.textContent = 'SEND MESSAGE';
          }
        });
        </script>
      </div>

      <!-- Right Card: Correspondence (Solid Border) -->
      <div
        class="lg:col-span-5 border border-secondary/20 dark:border-outline/20 rounded-3xl p-8 bg-[#faf8f5]/40 dark:bg-[#1e1914]/50 flex flex-col justify-between"
      >
        <div class="space-y-8">
          <!-- Box Header -->
          <div
            class="flex justify-between items-center font-label-caps text-[10px] tracking-widest text-secondary/50 dark:text-[#cec5bd]/50"
          >
            <span>¶ CORRESPONDENCE</span>
            <span>FOUR CHANNELS</span>
          </div>

          <!-- Channels List -->
          <div class="space-y-6">
            <!-- Email -->
            <a
              href="mailto:farhansakri@gmail.com"
              class="flex justify-between items-center py-2 border-b border-secondary/15 dark:border-outline/10 group"
            >
              <div class="flex items-center gap-4">
                <span
                  class="font-label-caps text-[10px] tracking-widest text-secondary/40 dark:text-[#cec5bd]/40"
                  >EMAIL</span
                >
                <span
                  class="font-body-md text-primary dark:text-surface-bright font-medium group-hover:text-secondary dark:group-hover:text-accent-gold transition-colors"
                  >farhansakri@gmail.com</span
                >
              </div>
              <span
                class="material-symbols-outlined text-[18px] text-secondary/40 dark:text-[#cec5bd]/40 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-secondary dark:group-hover:text-accent-gold transition-all"
                >north_east</span
              >
            </a>

            <!-- WhatsApp -->
            <a
              href="https://wa.me/6282244866589"
              target="_blank"
              rel="noopener noreferrer"
              class="flex justify-between items-center py-2 border-b border-secondary/15 dark:border-outline/10 group"
            >
              <div class="flex items-center gap-4">
                <span
                  class="font-label-caps text-[10px] tracking-widest text-secondary/40 dark:text-[#cec5bd]/40"
                  >WHATSAPP</span
                >
                <span
                  class="font-body-md text-primary dark:text-surface-bright font-medium group-hover:text-secondary dark:group-hover:text-accent-gold transition-colors"
                  >+62 822-4486-6589</span
                >
              </div>
              <span
                class="material-symbols-outlined text-[18px] text-secondary/40 dark:text-[#cec5bd]/40 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-secondary dark:group-hover:text-accent-gold transition-all"
                >north_east</span
              >
            </a>

            <!-- LinkedIn -->
            <a
              href="https://www.linkedin.com/in/farhan-alfarabi-a1a457280/"
              target="_blank"
              rel="noopener noreferrer"
              class="flex justify-between items-center py-2 border-b border-secondary/15 dark:border-outline/10 group"
            >
              <div class="flex items-center gap-4">
                <span
                  class="font-label-caps text-[10px] tracking-widest text-secondary/40 dark:text-[#cec5bd]/40"
                  >LINKEDIN</span
                >
                <span
                  class="font-body-md text-primary dark:text-surface-bright font-medium group-hover:text-secondary dark:group-hover:text-accent-gold transition-colors"
                  >linkedin.com/in/farhan-alfarabi-a1a457280</span
                >
              </div>
              <span
                class="material-symbols-outlined text-[18px] text-secondary/40 dark:text-[#cec5bd]/40 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-secondary dark:group-hover:text-accent-gold transition-all"
                >north_east</span
              >
            </a>

            <!-- GitHub -->
            <a
              href="https://github.com/farhanalfarabi"
              target="_blank"
              rel="noopener noreferrer"
              class="flex justify-between items-center py-2 border-b border-secondary/15 dark:border-outline/10 group"
            >
              <div class="flex items-center gap-4">
                <span
                  class="font-label-caps text-[10px] tracking-widest text-secondary/40 dark:text-[#cec5bd]/40"
                  >GITHUB</span
                >
                <span
                  class="font-body-md text-primary dark:text-surface-bright font-medium group-hover:text-secondary dark:group-hover:text-accent-gold transition-colors"
                  >github.com/farhanalfarabi</span
                >
              </div>
              <span
                class="material-symbols-outlined text-[18px] text-secondary/40 dark:text-[#cec5bd]/40 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-secondary dark:group-hover:text-accent-gold transition-all"
                >north_east</span
              >
            </a>

            <!-- Medium -->
            <a
              href="https://medium.com/@farhansakri"
              target="_blank"
              rel="noopener noreferrer"
              class="flex justify-between items-center py-2 border-b border-secondary/15 dark:border-outline/10 group"
            >
              <div class="flex items-center gap-4">
                <span
                  class="font-label-caps text-[10px] tracking-widest text-secondary/40 dark:text-[#cec5bd]/40"
                  >MEDIUM</span
                >
                <span
                  class="font-body-md text-primary dark:text-surface-bright font-medium group-hover:text-secondary dark:group-hover:text-accent-gold transition-colors"
                  >medium.com/@farhansakri</span
                >
              </div>
              <span
                class="material-symbols-outlined text-[18px] text-secondary/40 dark:text-[#cec5bd]/40 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-secondary dark:group-hover:text-accent-gold transition-all"
                >north_east</span
              >
            </a>

            <!-- Located -->
            <div class="flex items-start gap-4 py-2">
              <span
                class="font-label-caps text-[10px] tracking-widest text-secondary/40 dark:text-[#cec5bd]/40"
                >LOCATED</span
              >
              <span
                class="font-body-md text-primary dark:text-surface-bright font-medium"
                >Pasuruan, Jawa Timur</span
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

