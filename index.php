<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#FD3A2D" />
  <meta name="description" content="Amaria-N Donuts — Toko donat kekinian paling nagih di Banyumas! Adonan super empuk, topping melimpah, dan minuman segar buat nemenin nongkrong & nugas." />
  <title>AMARIA-N DONUTS | Donat Kekinian Paling Nagih di Banyumas</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts: Anton & Oswald (Condensed Bold Headings) + Plus Jakarta Sans (Clean Sans Body) -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="stylesheet" href="style/style.css">
</head>
<body class="antialiased selection:bg-[#FFCC33] selection:text-[#1F120E]">

  <!-- =========================================================
       TOP PROMO BAR
  ========================================================= -->
  <div class="bg-[#1F120E] px-4 py-2 text-center text-xs font-bold tracking-wide text-[#FFCC33]">
    <span class="inline-flex items-center gap-2">
      <span class="inline-block h-2 w-2 animate-ping rounded-full bg-[#FD3A2D]"></span>
      BANYUMAS SWEET SPOT • FRESHLY GLAZED TIAP HARI • BUKA 09.00–21.00 WIB
    </span>
  </div>

  <!-- =========================================================
       STICKY NAVBAR
  ========================================================= -->
  <header class="sticky top-0 z-50 border-b-2 border-[#1F120E] bg-[#FFFDF8]/95 backdrop-blur-md">
    <div class="mx-auto flex h-[76px] max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
      <!-- Brand Logo -->
      <a href="#home" data-route="home" class="group flex items-center gap-3" aria-label="Amaria-N Donuts Beranda">
        <span class="flex h-11 w-11 items-center justify-center rounded-2xl border-2 border-[#1F120E] bg-viral-gradient text-white shadow-[3px_3px_0px_#1F120E] transition-transform group-hover:rotate-6">
          <i class="fa-solid fa-cookie-bite text-xl"></i>
        </span>
        <div class="leading-none">
          <span class="font-display block text-2xl tracking-wide text-[#1F120E] sm:text-[1.7rem]">
            AMARIA<span class="text-[#FD3A2D]">-N</span> DONUTS
          </span>
          <span class="mt-0.5 block text-[10px] font-extrabold uppercase tracking-[0.2em] text-[#FE5F2F]">
            Banyumas Viral Donuts
          </span>
        </div>
      </a>

      <!-- Desktop Navigation -->
      <nav class="hidden items-center gap-8 text-sm font-extrabold uppercase tracking-wider text-[#1F120E] md:flex" aria-label="Navigasi utama">
        <a href="#home" data-route="home" class="nav-item active-nav transition-colors hover:text-[#FD3A2D]">Home</a>
        <a href="#vibe" data-route="home" data-section="vibe" class="nav-item transition-colors hover:text-[#FD3A2D]">Kenapa Hype?</a>
        <a href="#menu" data-route="menu" class="nav-item transition-colors hover:text-[#FD3A2D]">Menu</a>
        <a href="#stores" data-route="home" data-section="stores" class="nav-item transition-colors hover:text-[#FD3A2D]">Outlet Banyumas</a>
        <a href="#contact" data-route="home" data-section="contact" class="nav-item transition-colors hover:text-[#FD3A2D]">Kontak</a>
      </nav>

      <!-- Desktop WhatsApp CTA -->
      <div class="hidden items-center gap-3 sm:flex">
        <a href="https://wa.me/6281216497059?text=Halo%20Amaria-N%20Donuts%20Banyumas%2C%20mau%20tanya%20menu%20donat%20yang%20ready%20hari%20ini%20dong!" target="_blank" rel="noopener noreferrer" class="btn-viral inline-flex items-center gap-2 rounded-full px-5 py-2.5 text-xs font-extrabold uppercase tracking-wider">
          <i class="fa-brands fa-whatsapp text-base"></i> Order WA
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <button id="mobile-menu-button" class="flex h-11 w-11 items-center justify-center rounded-xl border-2 border-[#1F120E] bg-[#FFCC33] text-[#1F120E] shadow-[3px_3px_0px_#1F120E] md:hidden" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="mobile-menu">
        <i class="fa-solid fa-bars text-lg"></i>
      </button>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="hidden border-t-2 border-[#1F120E] bg-[#FFFDF8] px-5 py-5 md:hidden">
      <nav class="flex flex-col gap-3.5 text-base font-extrabold uppercase tracking-wide text-[#1F120E]" aria-label="Navigasi mobile">
        <a href="#home" data-route="home" class="mobile-nav-link rounded-xl px-3 py-2 hover:bg-[#FFCC33]/40">Home</a>
        <a href="#vibe" data-route="home" data-section="vibe" class="mobile-nav-link rounded-xl px-3 py-2 hover:bg-[#FFCC33]/40">Kenapa Hype?</a>
        <a href="#menu" data-route="menu" class="mobile-nav-link rounded-xl bg-[#FFCC33]/30 px-3 py-2 text-[#FD3A2D]">Menu Lengkap</a>
        <a href="#stores" data-route="home" data-section="stores" class="mobile-nav-link rounded-xl px-3 py-2 hover:bg-[#FFCC33]/40">Outlet Banyumas</a>
        <a href="#contact" data-route="home" data-section="contact" class="mobile-nav-link rounded-xl px-3 py-2 hover:bg-[#FFCC33]/40">Kontak</a>
        <a href="https://wa.me/6281216497059?text=Halo%20Amaria-N%20Donuts%20Banyumas%2C%20saya%20ingin%20order." target="_blank" rel="noopener noreferrer" class="btn-viral mt-2 inline-flex items-center justify-center gap-2 rounded-full px-5 py-3.5 text-sm font-extrabold">
          <i class="fa-brands fa-whatsapp text-lg"></i> Chat WhatsApp Sekarang
        </a>
      </nav>
    </div>
  </header>

  <main>
    <!-- =========================================================
         VIEW 1: MAIN LANDING PAGE (#home)
    ========================================================= -->
    <div id="view-home" class="page-view">
      <!-- HERO SECTION (EDITORIAL CONDENSED + LAYERED PRODUCT PHOTO) -->
      <section id="home" class="hero-pattern relative overflow-hidden border-b-2 border-[#1F120E] pt-8 pb-16 sm:pt-12 sm:pb-24 lg:pt-16 lg:pb-28">
      <div class="pointer-events-none absolute top-1/3 -right-20 h-96 w-96 rounded-full bg-[#FD3A2D]/20 blur-3xl"></div>

      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Top Location & Vibe Pill -->
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
          <div class="inline-flex items-center gap-2.5 rounded-full border-2 border-[#1F120E] bg-[#FFCC33] px-4 py-1.5 text-xs font-extrabold uppercase tracking-wider text-[#1F120E] shadow-[3px_3px_0px_#1F120E]">
            <i class="fa-solid fa-fire text-[#FD3A2D]"></i> #1 Donat Kekinian di Banyumas
          </div>
          <div class="hidden items-center gap-2 text-xs font-extrabold uppercase tracking-widest text-[#1F120E]/75 sm:flex">
            <span>Purwokerto</span>
            <span class="text-[#FD3A2D]">•</span>
            <span>Banyumas</span>
            <span class="text-[#FE8330]">•</span>
            <span>Fresh Baked</span>
          </div>
        </div>

        <!-- Layered Editorial Hero Grid -->
        <div class="relative grid items-center gap-10 lg:grid-cols-12 lg:gap-6">
          <!-- Left Column: Massive Condensed Typography -->
          <div class="relative z-20 lg:col-span-7">
            <h1 class="font-display text-[3.65rem] text-[#1F120E] sm:text-[5.2rem] md:text-[6.2rem] lg:text-[6.6rem] xl:text-[7.2rem]">
              <span class="block">DONAT</span>
              <span class="block text-viral-gradient drop-shadow-[2px_2px_0px_rgba(31,18,14,0.12)]">PALING NAGIH</span>
              <span class="mt-1 inline-flex flex-wrap items-center gap-3">
                <span>DI BANYUMAS</span>
                <span class="inline-block -rotate-3 rounded-2xl border-2 border-[#1F120E] bg-[#FFCC33] px-3 py-1 font-display text-3xl text-[#1F120E] shadow-[4px_4px_0px_#1F120E] sm:text-5xl">
                  2026!
                </span>
              </span>
            </h1>

            <p class="mt-6 max-w-xl text-base font-medium leading-relaxed text-[#1F120E]/85 sm:text-lg">
              Lagi butuh <span class="font-extrabold text-[#FD3A2D]">mood booster</span> habis kelas, lembur kerja, atau nongkrong bareng bestie?
              <strong class="font-extrabold text-[#1F120E]">Amaria-N Donuts</strong> hadir dengan adonan super empuk, lumer di mulut, dan topping melimpah yang bikin susah berhenti ngunyah!
            </p>

            <!-- Hero CTAs -->
            <div class="mt-8 flex flex-col gap-4 sm:flex-row sm:items-center">
              <a href="#menu" data-route="menu" class="btn-viral inline-flex items-center justify-center gap-3 rounded-2xl px-8 py-4 text-sm font-extrabold uppercase tracking-wider sm:text-base">
                <i class="fa-solid fa-donut text-lg"></i> Lihat Halaman Menu <i class="fa-solid fa-arrow-right"></i>
              </a>
              <a href="#stores" data-route="home" data-section="stores" class="btn-yellow inline-flex items-center justify-center gap-2.5 rounded-2xl px-7 py-4 text-sm font-extrabold uppercase tracking-wider sm:text-base">
                <i class="fa-solid fa-location-dot text-[#FD3A2D]"></i> Cek Lokasi Banyumas
              </a>
            </div>

            <!-- Social Proof / Quick Stats Strip -->
            <div class="mt-10 grid max-w-lg grid-cols-3 gap-3 rounded-2xl border-2 border-[#1F120E] bg-white p-4 shadow-[5px_5px_0px_#FE8330]">
              <div>
                <p class="font-display text-2xl text-[#FD3A2D] sm:text-3xl">100%</p>
                <p class="text-[11px] font-bold text-[#1F120E]/75 sm:text-xs">Fresh Tiap Hari</p>
              </div>
              <div class="border-x-2 border-[#1F120E]/15 px-3">
                <p class="font-display text-2xl text-[#FE5F2F] sm:text-3xl">MELIMPAH</p>
                <p class="text-[11px] font-bold text-[#1F120E]/75 sm:text-xs">Glaze & Topping</p>
              </div>
              <div>
                <p class="font-display text-2xl text-[#FFA832] sm:text-3xl">FRIENDLY</p>
                <p class="text-[11px] font-bold text-[#1F120E]/75 sm:text-xs">Harga Mahasiswa</p>
              </div>
            </div>
          </div>

          <!-- Right Column: Layered Viral Donut Photography & Overlapping Typography -->
          <div class="relative z-10 mx-auto w-full max-w-lg lg:col-span-5 lg:-ml-8 lg:max-w-none">
            <!-- Decorative Layered Back Card -->
            <div class="absolute -inset-2 rotate-3 rounded-[2.2rem] border-2 border-[#1F120E] bg-viral-gradient shadow-[8px_8px_0px_#1F120E]"></div>

            <!-- Main Product Photo Frame -->
            <div class="relative overflow-hidden rounded-[2rem] border-[3px] border-[#1F120E] bg-[#FFCC33] p-2.5 shadow-[8px_8px_0px_#1F120E]">
              <div class="relative overflow-hidden rounded-[1.5rem] border-2 border-[#1F120E]">
                <img
                  src="https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?auto=format&fit=crop&w=1100&q=85"
                  alt="Koleksi Donat Viral Amaria-N Donuts Banyumas"
                  class="h-[370px] w-full object-cover sm:h-[460px] lg:h-[500px]"
                  fetchpriority="high"
                  onerror="this.onerror=null;this.src='https://placehold.co/800x900/FD3A2D/FFFFFF?text=AMARIA-N+DONUTS'"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-[#1F120E]/85 via-[#1F120E]/15 to-transparent"></div>

                <!-- Overlapping Condensed Typography Inside Photo -->
                <div class="absolute bottom-0 left-0 right-0 p-5 sm:p-7">
                  <span class="inline-block rounded-lg border border-[#1F120E] bg-[#FFCC33] px-3 py-1 text-[10px] font-extrabold uppercase tracking-widest text-[#1F120E]">
                    SWEET CRAVING ALERT
                  </span>
                  <p class="font-display mt-2 text-3xl text-white sm:text-4xl">
                    SOFT DOUGH.<br />
                    <span class="text-[#FFCC33]">CRAZY TOPPINGS.</span>
                  </p>
                </div>
              </div>
            </div>

            <!-- Floating Sticker Badge 1 (Top Right) -->
            <div class="animate-sticker-1 absolute -top-5 -right-2 z-30 flex h-24 w-24 flex-col items-center justify-center rounded-full border-[2.5px] border-[#1F120E] bg-[#FD3A2D] p-2 text-center text-white shadow-[4px_4px_0px_#1F120E] sm:-right-5 sm:h-28 sm:w-28">
              <span class="text-[10px] font-extrabold uppercase tracking-wider text-[#FFCC33]">BEST</span>
              <span class="font-display text-xl leading-none sm:text-2xl">SELLER</span>
              <span class="mt-0.5 text-[9px] font-bold">BANYUMAS</span>
            </div>

            <!-- Floating Sticker Badge 2 (Bottom Left) -->
            <div class="animate-sticker-2 absolute -bottom-5 -left-2 z-30 flex items-center gap-3 rounded-2xl border-[2.5px] border-[#1F120E] bg-white px-4 py-3 shadow-[5px_5px_0px_#1F120E] sm:-left-6">
              <span class="flex h-11 w-11 items-center justify-center rounded-xl border-2 border-[#1F120E] bg-[#FFA832] text-xl text-[#1F120E]">
                <i class="fa-solid fa-bolt"></i>
              </span>
              <div>
                <p class="font-subdisplay text-sm font-bold text-[#1F120E]">BIKIN MOOD NAIK!</p>
                <p class="text-[11px] font-semibold text-[#1F120E]/70">Teman nugas & nongkrong</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         INFINITE VIRAL MARQUEE STRIP
    ========================================================= -->
    <div class="border-b-2 border-[#1F120E] bg-viral-gradient py-3.5 text-white">
      <div class="marquee-wrapper">
        <div class="marquee-track font-display text-2xl tracking-wider sm:text-3xl">
          <span class="mx-5">FRESHLY GLAZED EVERYDAY</span>
          <span class="text-[#FFCC33]">★</span>
          <span class="mx-5">AMARIA-N DONUTS BANYUMAS</span>
          <span class="text-[#1F120E]">★</span>
          <span class="mx-5">ADONAN SUPER EMPUK</span>
          <span class="text-[#FFCC33]">★</span>
          <span class="mx-5">TOPPING LUMER MELIMPAH</span>
          <span class="text-[#1F120E]">★</span>
          <span class="mx-5">COFFE & DONUTS VIBES</span>
          <span class="text-[#FFCC33]">★</span>
        </div>
        <div class="marquee-track font-display text-2xl tracking-wider sm:text-3xl" aria-hidden="true">
          <span class="mx-5">FRESHLY GLAZED EVERYDAY</span>
          <span class="text-[#FFCC33]">★</span>
          <span class="mx-5">AMARIA-N DONUTS BANYUMAS</span>
          <span class="text-[#1F120E]">★</span>
          <span class="mx-5">ADONAN SUPER EMPUK</span>
          <span class="text-[#FFCC33]">★</span>
          <span class="mx-5">TOPPING LUMER MELIMPAH</span>
          <span class="text-[#1F120E]">★</span>
          <span class="mx-5">COFFE & DONUTS VIBES</span>
          <span class="text-[#FFCC33]">★</span>
        </div>
      </div>
    </div>

    <!-- =========================================================
         VIBE / STORY SECTION ("KENAPA HARUS AMARIA-N?")
    ========================================================= -->
    <section id="vibe" class="border-b-2 border-[#1F120E] bg-[#FFFDF8] py-16 sm:py-24">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
          <div>
            <span class="inline-block rounded-lg border-2 border-[#1F120E] bg-[#FFA832] px-3 py-1 text-xs font-extrabold uppercase tracking-widest text-[#1F120E]">
              THE AMARIA-N VIBE
            </span>
            <h2 class="font-display mt-3 text-4xl text-[#1F120E] sm:text-6xl">
              BUKAN DONAT BIASA.<br />
              <span class="text-[#FD3A2D]">INI MOOD BOOSTER KAMU!</span>
            </h2>
          </div>
          <p class="max-w-md text-sm font-medium leading-relaxed text-[#1F120E]/80 sm:text-base">
            Diracik khusus buat anak muda, mahasiswa, dan pekerja di Banyumas yang doyan camilan manis estetik tanpa bikin kantong menjerit.
          </p>
        </div>

        <!-- Bento Grid Layout -->
        <div class="mt-12 grid gap-6 md:grid-cols-12">
          <!-- Big Feature Card 1 -->
          <div class="viral-card flex flex-col justify-between rounded-3xl bg-[#FFCC33] p-7 sm:p-9 md:col-span-7">
            <div>
              <div class="flex items-center justify-between">
                <span class="flex h-14 w-14 items-center justify-center rounded-2xl border-2 border-[#1F120E] bg-white text-2xl text-[#FD3A2D] shadow-[3px_3px_0px_#1F120E]">
                  <i class="fa-solid fa-cloud"></i>
                </span>
                <span class="rounded-full border-2 border-[#1F120E] bg-white px-3.5 py-1 text-xs font-extrabold uppercase">
                  01 / TEXTURE
                </span>
              </div>
              <h3 class="font-display mt-6 text-3xl text-[#1F120E] sm:text-4xl">
                EMPUKNYA KAYAK AWAN, NGGAK SERET DI TENGGOROKAN!
              </h3>
              <p class="mt-3 text-sm font-semibold leading-relaxed text-[#1F120E]/85 sm:text-base">
                Adonan donat Amaria-N diproses dengan teknik khusus sehingga teksturnya lembut, fluffy, dan tetap empuk bahkan sampai malam hari. Cocok banget buat nemenin skripsi atau lemburan!
              </p>
            </div>
            <div class="mt-6 flex flex-wrap gap-2">
              <span class="rounded-lg border border-[#1F120E] bg-white/90 px-3 py-1 text-xs font-extrabold">#FluffyDough</span>
              <span class="rounded-lg border border-[#1F120E] bg-white/90 px-3 py-1 text-xs font-extrabold">#AntiSeret</span>
              <span class="rounded-lg border border-[#1F120E] bg-white/90 px-3 py-1 text-xs font-extrabold">#FreshlyBaked</span>
            </div>
          </div>

          <!-- Visual Photo Card 2 -->
          <div class="viral-card relative overflow-hidden rounded-3xl bg-[#FD3A2D] md:col-span-5">
            <img
              src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?auto=format&fit=crop&w=800&q=85"
              alt="Donat topping melimpah Amaria-N"
              class="h-full min-h-[280px] w-full object-cover"
              loading="lazy"
              onerror="this.onerror=null;this.src='https://placehold.co/600x600/FE5F2F/FFFFFF?text=GLAZE+MELIMPAH'"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-[#1F120E]/90 via-transparent to-transparent"></div>
            <div class="absolute bottom-5 left-5 right-5 text-white">
              <span class="rounded-md bg-[#FD3A2D] px-2.5 py-1 text-[10px] font-extrabold uppercase tracking-wider">GENEROUS GLAZE</span>
              <p class="font-display mt-2 text-2xl sm:text-3xl">TOPPING LUMER SAMPAI GIGITAN TERAKHIR</p>
            </div>
          </div>

          <!-- Card 3: Coffee & Drinks Pairing -->
          <div class="viral-card rounded-3xl bg-white p-7 md:col-span-4">
            <span class="flex h-12 w-12 items-center justify-center rounded-2xl border-2 border-[#1F120E] bg-[#FE8330] text-xl text-white shadow-[3px_3px_0px_#1F120E]">
              <i class="fa-solid fa-mug-hot"></i>
            </span>
            <h3 class="font-display mt-5 text-2xl text-[#1F120E] sm:text-3xl">
              COMBO MAUT: DONAT + ES KOPI
            </h3>
            <p class="mt-2.5 text-sm font-medium leading-relaxed text-[#1F120E]/75">
              Manisnya donat ketemu segarnya Iced Caramel Macchiato & Creamy Thai Tea. Pasangan paling pas buat recharge energi!
            </p>
          </div>

          <!-- Card 4: Student & Young Worker Friendly -->
          <div class="viral-card rounded-3xl bg-[#FE5F2F] p-7 text-white md:col-span-4">
            <span class="flex h-12 w-12 items-center justify-center rounded-2xl border-2 border-[#1F120E] bg-[#FFCC33] text-xl text-[#1F120E] shadow-[3px_3px_0px_#1F120E]">
              <i class="fa-solid fa-wallet"></i>
            </span>
            <h3 class="font-display mt-5 text-2xl text-white sm:text-3xl">
              RAMAH KANTONG ANAK KOST
            </h3>
            <p class="mt-2.5 text-sm font-medium leading-relaxed text-white/90">
              Mulai 12 ribuan aja udah dapet donat premium! Tersedia juga paket box buat traktiran ulang tahun, rapat BEM, atau kumpul kantor.
            </p>
          </div>

          <!-- Card 5: Banyumas Pride -->
          <div class="viral-card rounded-3xl bg-white p-7 md:col-span-4">
            <span class="flex h-12 w-12 items-center justify-center rounded-2xl border-2 border-[#1F120E] bg-[#FD3A2D] text-xl text-white shadow-[3px_3px_0px_#1F120E]">
              <i class="fa-solid fa-heart"></i>
            </span>
            <h3 class="font-display mt-5 text-2xl text-[#1F120E] sm:text-3xl">
              BANGGA LOKAL BANYUMAS
            </h3>
            <p class="mt-2.5 text-sm font-medium leading-relaxed text-[#1F120E]/75">
              Dibuat fresh dengan penuh cinta di Banyumas. Siap jadi destinasi wajib jajan manis anak Purwokerto & sekitarnya!
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         MENU TEASER BANNER (MENGARAHKAN KE HALAMAN MENU TERPISAH)
    ========================================================= -->
    <section class="relative border-b-2 border-[#1F120E] bg-[#FFF6EB] py-16 sm:py-20">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="viral-card relative overflow-hidden rounded-[2.2rem] bg-viral-gradient p-8 text-white sm:p-12">
          <div class="grid items-center gap-8 lg:grid-cols-12">
            <div class="lg:col-span-8">
              <span class="inline-flex items-center gap-2 rounded-full border-2 border-[#1F120E] bg-[#FFCC33] px-4 py-1 text-xs font-extrabold uppercase tracking-widest text-[#1F120E]">
                <i class="fa-solid fa-sparkles text-[#FD3A2D]"></i> KATALOG LENGKAP AMARIA-N
              </span>
              <h2 class="font-display mt-4 text-4xl text-white drop-shadow-[3px_3px_0px_#1F120E] sm:text-6xl">
                PENASARAN SAMA VARIAN DONAT, MINUMAN & PAKET BOX KAMI?
              </h2>
              <p class="mt-3 max-w-2xl text-sm font-semibold leading-relaxed text-white/95 sm:text-base">
                Cek katalog lengkap mulai dari Donat Classic, Premium Filling, Bomboloni, Coffee & Non-Coffee segar, hingga Paket Combo hemat buat rame-rame!
              </p>
              <div class="mt-7 flex flex-wrap gap-3">
                <a href="#menu" data-route="menu" class="btn-yellow inline-flex items-center gap-3 rounded-2xl px-7 py-4 text-sm font-extrabold uppercase tracking-wider sm:text-base">
                  <i class="fa-solid fa-book-open text-[#FD3A2D]"></i> Buka Halaman Menu <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="#menu" data-route="menu" data-menu-cat="paket" class="inline-flex items-center gap-2 rounded-2xl border-2 border-[#1F120E] bg-white px-6 py-4 text-sm font-extrabold uppercase tracking-wider text-[#1F120E] shadow-[4px_4px_0px_#1F120E] transition hover:-translate-y-0.5">
                  🎁 Lihat Paket Hemat
                </a>
              </div>
            </div>

            <div class="grid grid-cols-3 gap-3 lg:col-span-4 lg:grid-cols-1">
              <a href="#menu" data-route="menu" data-menu-cat="donat" class="flex items-center justify-between rounded-2xl border-2 border-[#1F120E] bg-white p-4 text-[#1F120E] shadow-[4px_4px_0px_#1F120E] transition hover:-translate-x-1">
                <span class="flex items-center gap-3 font-extrabold uppercase">
                  <span class="text-2xl">🍩</span>
                  <span class="font-subdisplay text-lg">Varian Donat</span>
                </span>
                <i class="fa-solid fa-chevron-right text-[#FD3A2D]"></i>
              </a>
              <a href="#menu" data-route="menu" data-menu-cat="minuman" class="flex items-center justify-between rounded-2xl border-2 border-[#1F120E] bg-white p-4 text-[#1F120E] shadow-[4px_4px_0px_#1F120E] transition hover:-translate-x-1">
                <span class="flex items-center gap-3 font-extrabold uppercase">
                  <span class="text-2xl">🥤</span>
                  <span class="font-subdisplay text-lg">Minuman Segar</span>
                </span>
                <i class="fa-solid fa-chevron-right text-[#FD3A2D]"></i>
              </a>
              <a href="#menu" data-route="menu" data-menu-cat="paket" class="flex items-center justify-between rounded-2xl border-2 border-[#1F120E] bg-white p-4 text-[#1F120E] shadow-[4px_4px_0px_#1F120E] transition hover:-translate-x-1">
                <span class="flex items-center gap-3 font-extrabold uppercase">
                  <span class="text-2xl">🎁</span>
                  <span class="font-subdisplay text-lg">Paket & Box</span>
                </span>
                <i class="fa-solid fa-chevron-right text-[#FD3A2D]"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         STORES & LOCATION SECTION (BANYUMAS)
    ========================================================= -->
    <section id="stores" class="border-b-2 border-[#1F120E] bg-[#FFFDF8] py-16 sm:py-24">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-10 flex flex-col justify-between gap-4 md:flex-row md:items-end">
          <div>
            <span class="inline-block rounded-lg border-2 border-[#1F120E] bg-[#FE8330] px-3 py-1 text-xs font-extrabold uppercase tracking-widest text-white">
              MAMPIR YUK!
            </span>
            <h2 class="font-display mt-3 text-4xl text-[#1F120E] sm:text-6xl">
              TEMUKAN OUTLET <span class="text-[#FD3A2D]">AMARIA-N DI BANYUMAS.</span>
            </h2>
          </div>
          <p class="max-w-md text-sm font-medium text-[#1F120E]/75">
            Cek titik lokasi kami di Google Maps atau klik tombol WhatsApp untuk minta shareloc langsung ke admin!
          </p>
        </div>

        <div class="grid gap-8 lg:grid-cols-12">
          <!-- Google Map Container -->
          <div class="viral-card overflow-hidden rounded-3xl bg-white p-2.5 lg:col-span-7">
            <iframe
              id="store-map"
              title="Peta lokasi Amaria-N Donuts Banyumas"
              src="https://www.google.com/maps?q=Amaria%20N%20Donuts%20Banyumas&output=embed"
              class="h-[340px] w-full rounded-2xl border-2 border-[#1F120E] sm:h-[430px]"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              allowfullscreen
            ></iframe>
          </div>

          <!-- Store Details Cards -->
          <div class="flex flex-col justify-between gap-5 lg:col-span-5">
            <!-- Location Card -->
            <div class="viral-card rounded-3xl bg-white p-6">
              <div class="flex items-start gap-4">
                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border-2 border-[#1F120E] bg-[#FD3A2D] text-xl text-white shadow-[3px_3px_0px_#1F120E]">
                  <i class="fa-solid fa-location-dot"></i>
                </span>
                <div>
                  <span class="text-[11px] font-extrabold uppercase tracking-widest text-[#FE5F2F]">AREA LAYANAN & OUTLET</span>
                  <h3 class="font-display mt-1 text-2xl text-[#1F120E]">BANYUMAS & PURWOKERTO</h3>
                  <p class="mt-2 text-xs font-medium leading-relaxed text-[#1F120E]/75 sm:text-sm">
                    Melayani pembelian langsung, take-away, serta pengiriman area Banyumas & Purwokerto. Hubungi admin untuk titik patokan akurat!
                  </p>
                  <a href="https://www.google.com/maps/search/?api=1&query=Amaria%20N%20Donuts%20Banyumas" target="_blank" rel="noopener noreferrer" class="mt-3 inline-flex items-center gap-1.5 text-xs font-extrabold uppercase tracking-wider text-[#FD3A2D] hover:underline">
                    Buka di Aplikasi Maps <i class="fa-solid fa-arrow-up-right-from-square"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- Operating Hours Card -->
            <div class="viral-card rounded-3xl bg-[#FFCC33] p-6">
              <div class="flex items-start gap-4">
                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border-2 border-[#1F120E] bg-white text-xl text-[#1F120E] shadow-[3px_3px_0px_#1F120E]">
                  <i class="fa-regular fa-clock"></i>
                </span>
                <div>
                  <span class="text-[11px] font-extrabold uppercase tracking-widest text-[#1F120E]/75">JAM BUKA SETIAP HARI</span>
                  <h3 class="font-display mt-1 text-3xl text-[#1F120E]">09.00 – 21.00 WIB</h3>
                  <p class="mt-1 text-xs font-bold text-[#1F120E]/80">Senin s/d Minggu (Tetap Buka Weekend!)</p>
                  <span class="mt-3 inline-flex items-center gap-1.5 rounded-full border border-[#1F120E] bg-emerald-400 px-3 py-1 text-[10px] font-extrabold uppercase text-[#1F120E]">
                    <span class="h-2 w-2 rounded-full bg-[#1F120E]"></span> Ready Fresh Everyday
                  </span>
                </div>
              </div>
            </div>

            <!-- Shareloc CTA -->
            <a href="https://wa.me/6281216497059?text=Halo%20Amaria-N%20Donuts%2C%20boleh%20minta%20shareloc%20outlet%20Banyumas-nya%20kak%3F" target="_blank" rel="noopener noreferrer" class="btn-viral flex items-center justify-center gap-3 rounded-2xl px-6 py-4 text-sm font-extrabold uppercase tracking-wider">
              <i class="fa-brands fa-whatsapp text-xl"></i> Minta Shareloc Via WhatsApp
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         CONTACT & VIRAL CTA BANNER SECTION
    ========================================================= -->
    <section id="contact" class="bg-[#FFF6EB] py-16 sm:py-24">
      <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <span class="inline-block rounded-lg border-2 border-[#1F120E] bg-[#FFCC33] px-3 py-1 text-xs font-extrabold uppercase tracking-widest text-[#1F120E]">
            SAY HELLO!
          </span>
          <h2 class="font-display mt-3 text-4xl text-[#1F120E] sm:text-6xl">
            JANGAN SAMPAI <span class="text-[#FD3A2D]">KEHABISAN STOK!</span>
          </h2>
          <p class="mx-auto mt-3 max-w-xl text-sm font-medium text-[#1F120E]/75 sm:text-base">
            Mau booking donat favoritmu sebelum sold out atau tanya promo mahasiswa? Langsung chat tim Amaria-N Donuts!
          </p>
        </div>

        <!-- Contact Cards Grid -->
        <div class="mt-10 grid gap-6 md:grid-cols-2">
          <!-- WhatsApp Card -->
          <article class="viral-card rounded-3xl bg-white p-7 sm:p-9">
            <div class="flex items-center justify-between">
              <span class="flex h-14 w-14 items-center justify-center rounded-2xl border-2 border-[#1F120E] bg-[#25D366] text-3xl text-white shadow-[4px_4px_0px_#1F120E]">
                <i class="fa-brands fa-whatsapp"></i>
              </span>
              <span class="rounded-full border border-[#1F120E] bg-[#FFCC33] px-3 py-1 text-[10px] font-extrabold uppercase">Fast Response</span>
            </div>
            <h3 class="font-display mt-6 text-3xl text-[#1F120E]">CHAT WHATSAPP ADMIN</h3>
            <p class="mt-2 text-sm font-medium leading-relaxed text-[#1F120E]/75">
              Tanya varian ready hari ini, pemesanan paket box, info ongkir area Banyumas/Purwokerto, dan shareloc outlet.
            </p>
            <p class="font-subdisplay mt-4 text-2xl font-bold text-[#FD3A2D]">+62 812-1649-7059</p>
            <a href="https://wa.me/6281216497059?text=Halo%20Amaria-N%20Donuts%20Banyumas%2C%20saya%20mau%20order%20donatnya!" target="_blank" rel="noopener noreferrer" class="btn-viral mt-6 inline-flex w-full items-center justify-center gap-2 rounded-2xl px-6 py-4 text-sm font-extrabold uppercase tracking-wider sm:w-auto">
              <i class="fa-brands fa-whatsapp text-lg"></i> Mulai Chat Sekarang
            </a>
          </article>

          <!-- Email / Collaboration Card -->
          <article class="viral-card rounded-3xl bg-white p-7 sm:p-9">
            <div class="flex items-center justify-between">
              <span class="flex h-14 w-14 items-center justify-center rounded-2xl border-2 border-[#1F120E] bg-[#FFA832] text-2xl text-[#1F120E] shadow-[4px_4px_0px_#1F120E]">
                <i class="fa-regular fa-envelope"></i>
              </span>
              <span class="rounded-full border border-[#1F120E] bg-[#FFF6EB] px-3 py-1 text-[10px] font-extrabold uppercase">Collab & Event</span>
            </div>
            <h3 class="font-display mt-6 text-3xl text-[#1F120E]">EVENT & SPONSORSHIP</h3>
            <p class="mt-2 text-sm font-medium leading-relaxed text-[#1F120E]/75">
              Punya event kampus di Purwokerto, komunitas, atau butuh partner konsumsi manis? Hubungi kami lewat email atau WhatsApp.
            </p>
            <p id="email-address-text" class="mt-4 text-sm font-extrabold text-[#1F120E]/60">
              Email resmi segera hadir — hubungi via WhatsApp untuk respon kilat!
            </p>
            <a id="email-contact-link" href="#contact" class="btn-yellow mt-6 hidden items-center justify-center gap-2 rounded-2xl px-6 py-4 text-sm font-extrabold uppercase tracking-wider">
              <i class="fa-regular fa-envelope"></i> Kirim Email
            </a>
          </article>
        </div>

        <!-- Explosive Viral Gradient Banner -->
        <div class="mt-12 rounded-[2.2rem] border-[3px] border-[#1F120E] bg-viral-gradient p-8 text-center text-white shadow-[8px_8px_0px_#1F120E] sm:p-12">
          <span class="inline-block rounded-full border-2 border-[#1F120E] bg-[#FFCC33] px-4 py-1 text-xs font-extrabold uppercase tracking-widest text-[#1F120E]">
            BANYUMAS SWEETEST HANGOUT
          </span>
          <h2 class="font-display mt-4 text-4xl text-white drop-shadow-[3px_3px_0px_#1F120E] sm:text-6xl">
            HIDUP UDAH PAHIT, DONATNYA JANGAN!
          </h2>
          <p class="mx-auto mt-3 max-w-xl text-sm font-semibold text-white/95 sm:text-base">
            Amankan kotak kebahagiaanmu hari ini di Amaria-N Donuts Banyumas. Sekali gigit, langsung jatuh cinta!
          </p>
          <div class="mt-7 flex flex-wrap justify-center gap-4">
            <a href="https://wa.me/6281216497059?text=Halo%20Amaria-N%20Donuts%2C%20saya%20mau%20amankan%20donat%20hari%20ini!" target="_blank" rel="noopener noreferrer" class="btn-yellow inline-flex items-center gap-2.5 rounded-2xl px-8 py-4 text-sm font-extrabold uppercase tracking-wider sm:text-base">
              <i class="fa-brands fa-whatsapp text-xl text-[#FD3A2D]"></i> Amankan Donatmu Sekarang
            </a>
          </div>
        </div>
      </div>
    </section>
    </div>

    <!-- =========================================================
         VIEW 2: DEDICATED MENU PAGE (DI LUAR HALAMAN UTAMA)
    ========================================================= -->
    <div id="view-menu" class="hidden min-h-screen bg-[#FFFDF8]">
      <!-- Top Breadcrumb / Back Bar -->
      <div class="border-b-2 border-[#1F120E] bg-[#FFF6EB]">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-3 px-4 py-3.5 sm:px-6 lg:px-8">
          <button type="button" data-route="home" class="inline-flex items-center gap-2 rounded-xl border-2 border-[#1F120E] bg-white px-4 py-2 text-xs font-extrabold uppercase tracking-wider text-[#1F120E] shadow-[3px_3px_0px_#1F120E] transition hover:bg-[#FFCC33]">
            <i class="fa-solid fa-arrow-left text-[#FD3A2D]"></i> Kembali ke Beranda
          </button>
          <div class="flex items-center gap-2 text-xs font-extrabold uppercase tracking-wider text-[#1F120E]/70">
            <span>Beranda</span>
            <i class="fa-solid fa-chevron-right text-[10px] text-[#FD3A2D]"></i>
            <span class="text-[#FD3A2D]">Halaman Menu</span>
          </div>
        </div>
      </div>

      <!-- 2-Column Layout: Left Category Sidebar + Right Sub-Categorized Product Grid -->
      <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 sm:py-14 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-[265px_minmax(0,1fr)] lg:gap-12">

          <!-- LEFT SIDEBAR: KATEGORI -->
          <aside class="flex flex-col lg:border-r-2 lg:border-[#1F120E]/15 lg:pr-8">
            <div class="mb-5 lg:mb-7">
              <span class="inline-block rounded-md border border-[#1F120E] bg-[#FFCC33] px-2.5 py-0.5 text-[10px] font-extrabold uppercase tracking-widest text-[#1F120E]">
                OUR COLLECTION
              </span>
              <h2 class="font-display mt-2 text-3xl text-[#1F120E] sm:text-4xl">
                KATEGORI
              </h2>
            </div>

            <!-- Category Tabs (Vertical on Desktop, Horizontal Scroll on Mobile) -->
            <div class="flex gap-3 overflow-x-auto pb-2 lg:flex-col lg:overflow-visible lg:pb-0" role="tablist" aria-label="Pilih Kategori Menu">
              <button
                type="button"
                class="category-tab flex shrink-0 items-center justify-between gap-3 rounded-2xl px-4 py-3.5 text-left text-sm font-extrabold uppercase tracking-wide lg:w-full lg:px-5 lg:py-4"
                data-category="donat"
                aria-pressed="true"
              >
                <span class="flex items-center gap-3">
                  <span class="text-xl">🍩</span>
                  <span>Donat</span>
                </span>
                <span id="donut-count" class="rounded-full bg-black/10 px-2.5 py-0.5 text-xs font-extrabold"></span>
              </button>

              <button
                type="button"
                class="category-tab flex shrink-0 items-center justify-between gap-3 rounded-2xl px-4 py-3.5 text-left text-sm font-extrabold uppercase tracking-wide lg:w-full lg:px-5 lg:py-4"
                data-category="minuman"
                aria-pressed="false"
              >
                <span class="flex items-center gap-3">
                  <span class="text-xl">🥤</span>
                  <span>Minuman</span>
                </span>
                <span id="drink-count" class="rounded-full bg-black/10 px-2.5 py-0.5 text-xs font-extrabold"></span>
              </button>

              <button
                type="button"
                class="category-tab flex shrink-0 items-center justify-between gap-3 rounded-2xl px-4 py-3.5 text-left text-sm font-extrabold uppercase tracking-wide lg:w-full lg:px-5 lg:py-4"
                data-category="paket"
                aria-pressed="false"
              >
                <span class="flex items-center gap-3">
                  <span class="text-xl">🎁</span>
                  <span>Paket</span>
                </span>
                <span id="package-count" class="rounded-full bg-black/10 px-2.5 py-0.5 text-xs font-extrabold"></span>
              </button>
            </div>

            <!-- Sidebar Brand Card (Desktop) -->
            <div class="mt-auto hidden pt-10 lg:block">
              <div class="rounded-2xl border-2 border-[#1F120E] bg-[#FFF6EB] p-5 shadow-[4px_4px_0px_#FE8330]">
                <span class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-[#FD3A2D]">MADE WITH LOVE</span>
                <p class="font-display mt-1.5 text-2xl text-[#1F120E]">AMARIA-N DONUTS</p>
                <p class="mt-1.5 text-xs font-semibold leading-relaxed text-[#1F120E]/75">
                  Freshly glazed setiap hari di Banyumas. Pesan langsung via WhatsApp sebelum kehabisan!
                </p>
              </div>
            </div>
          </aside>

          <!-- RIGHT MAIN CATALOG CONTENT -->
          <div class="min-w-0">
            <!-- Header Area (Matching Reference Layout with Bold Condensed Typography) -->
            <div class="flex flex-wrap items-start justify-between gap-4 border-b-2 border-[#1F120E]/15 pb-8">
              <div>
                <span class="inline-flex items-center gap-2 rounded-full border-2 border-[#1F120E] bg-[#FD3A2D] px-3.5 py-1 text-[11px] font-extrabold uppercase tracking-widest text-white shadow-[2px_2px_0px_#1F120E]">
                  <i class="fa-solid fa-fire text-[#FFCC33]"></i> FRESHLY MADE EVERYDAY
                </span>
                <h1 class="font-display mt-3 text-5xl text-[#1F120E] sm:text-6xl lg:text-7xl">
                  OUR <span class="text-viral-gradient">PRODUCT</span>
                </h1>
                <p id="menu-category-description" class="mt-3 max-w-xl text-sm font-semibold leading-relaxed text-[#1F120E]/75 sm:text-base">
                  Temukan berbagai varian donat favorit Amaria-N Donuts dengan adonan empuk dan topping melimpah.
                </p>
              </div>

              <!-- Decorative Brand Mark (Top Right like reference) -->
              <div class="hidden flex-col items-center rounded-2xl border-2 border-[#1F120E] bg-[#FFCC33] px-4 py-3 text-center shadow-[4px_4px_0px_#1F120E] sm:flex">
                <span class="font-subdisplay text-xs font-bold tracking-[0.25em] text-[#1F120E]">AMARIA</span>
                <span class="mt-1 text-2xl leading-none text-[#FD3A2D]">✦</span>
              </div>
            </div>

            <!-- Sub-Categorized Sections Container (Rendered Dynamically) -->
            <div id="menu-sections-container" class="mt-8 space-y-12">
              <!-- Each sub-type renders here with its own Title + Divider + Product Grid -->
            </div>

            <!-- Bottom WhatsApp & Custom Order Note -->
            <div class="mt-14 flex flex-col items-center justify-between gap-4 rounded-3xl border-2 border-[#1F120E] bg-[#FFCC33] p-6 shadow-[6px_6px_0px_#1F120E] sm:flex-row">
              <div class="flex items-center gap-3.5 text-center sm:text-left">
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border-2 border-[#1F120E] bg-white text-xl text-[#FD3A2D]">
                  <i class="fa-solid fa-heart"></i>
                </span>
                <p class="text-xs font-extrabold text-[#1F120E] sm:text-sm">
                  Temukan rasa favoritmu dan pesan langsung melalui WhatsApp atau request custom box untuk acara spesialmu!
                </p>
              </div>
              <a href="https://wa.me/6281216497059?text=Halo%20Amaria-N%20Donuts%20Banyumas%2C%20saya%20mau%20pesan%20dari%20halaman%20menu!" target="_blank" rel="noopener noreferrer" class="btn-viral shrink-0 rounded-xl px-5 py-3 text-xs font-extrabold uppercase tracking-wider">
                <i class="fa-brands fa-whatsapp mr-1.5 text-base"></i> Chat Admin
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>

  <!-- =========================================================
       FOOTER
  ========================================================= -->
  <footer class="border-t-2 border-[#1F120E] bg-[#1F120E] px-4 py-12 text-white sm:px-6 lg:px-8">
    <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-6 sm:flex-row">
      <div class="text-center sm:text-left">
        <a href="#home" data-route="home" class="font-display inline-flex items-center gap-2.5 text-3xl tracking-wide text-white">
          <i class="fa-solid fa-cookie-bite text-[#FFCC33]"></i>
          AMARIA<span class="text-[#FD3A2D]">-N</span> DONUTS
        </a>
        <p class="mt-2 max-w-md text-xs font-medium text-stone-400">
          Donat kekinian paling nagih di Banyumas. Adonan super empuk, topping melimpah, dan minuman segar untuk setiap momen manismu.
        </p>
      </div>

      <div class="flex flex-wrap justify-center gap-6 text-xs font-extrabold uppercase tracking-wider text-stone-300">
        <a href="#home" data-route="home" class="hover:text-[#FFCC33]">Home</a>
        <a href="#vibe" data-route="home" data-section="vibe" class="hover:text-[#FFCC33]">Vibe</a>
        <a href="#menu" data-route="menu" class="hover:text-[#FFCC33]">Menu</a>
        <a href="#stores" data-route="home" data-section="stores" class="hover:text-[#FFCC33]">Outlet</a>
        <a href="#contact" data-route="home" data-section="contact" class="hover:text-[#FFCC33]">Kontak</a>
      </div>
    </div>

    <div class="mx-auto my-8 h-px max-w-7xl bg-white/15"></div>

    <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-3 text-center text-xs text-stone-400 sm:flex-row">
      <p>&copy; <span id="current-year"></span> Amaria-N Donuts Banyumas. Hak Cipta Dilindungi.</p>
      <p class="font-bold text-[#FFA832]">Made with <i class="fa-solid fa-heart text-[#FD3A2D]"></i> in Banyumas, Jawa Tengah</p>
    </div>
  </footer>

  <!-- =========================================================
       FLOATING WHATSAPP BUTTON
  ========================================================= -->
  <a
    href="https://wa.me/6281216497059?text=Halo%20Amaria-N%20Donuts%20Banyumas%2C%20saya%20ingin%20bertanya."
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Chat WhatsApp Amaria-N Donuts"
    class="fixed bottom-5 right-5 z-40 flex h-14 w-14 items-center justify-center rounded-2xl border-2 border-[#1F120E] bg-[#25D366] text-3xl text-white shadow-[4px_4px_0px_#1F120E] transition-transform hover:-translate-y-1 hover:scale-105"
  >
    <i class="fa-brands fa-whatsapp"></i>
  </a>

  <!-- =========================================================
       JAVASCRIPT LOGIC (MULTI-PAGE ROUTING, SUB-CATEGORIZED MENU)
  ========================================================= -->
  <script src="script/script.js"></script>
</body>
</html>