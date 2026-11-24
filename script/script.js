
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              red: '#FD3A2D',
              fiery: '#FE5F2F',
              tangerine: '#FE8330',
              mango: '#FFA832',
              yellow: '#FFCC33',
              cream: '#FFFDF8',
              ink: '#1F120E'
            }
          },
          fontFamily: {
            condensed: ['Anton', 'Oswald', 'sans-serif'],
            oswald: ['Oswald', 'sans-serif'],
            sans: ['Plus Jakarta Sans', 'sans-serif'],
          }
        }
      }
    }
  
    // Konfigurasi Toko Amaria-N Donuts Banyumas
    const STORE_WHATSAPP = '6281216497059';
    const STORE_EMAIL = ''; // Isi email resmi di sini jika sudah tersedia
    const STORE_MAP_QUERY = 'Amaria N Donuts Banyumas';

    // Database Menu Terstruktur dengan Sub-Kategori (Jenis Produk)
    const menuProducts = [
      // ==========================================
      // 1. KATEGORI DONAT (3 JENIS SUB-KATEGORI)
      // ==========================================
      // Jenis 1: Donat Classic & Glaze
      {
        id: 1,
        name: "Original Honey Glaze",
        category: "donat",
        subCategory: "Donat Classic & Glaze",
        label: "🍯 CLASSIC FAVORITE",
        badgeColor: "#FE8330",
        price: 9000,
        image: "https://images.unsplash.com/photo-1551024709-8f23befc6f87?auto=format&fit=crop&w=800&q=80",
        description: "Donat empuk klasik berbalut lapisan glaze madu tipis yang mengkilap dan manis pas."
      },
      {
        id: 2,
        name: "Sugar Snow Bomb",
        category: "donat",
        subCategory: "Donat Classic & Glaze",
        label: "❄️ SUPER EMPUK",
        badgeColor: "#FE5F2F",
        price: 9000,
        image: "https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?auto=format&fit=crop&w=800&q=80",
        description: "Taburan gula halus dingin melimpah di atas adonan fluffy yang lembut di setiap gigitan."
      },
      {
        id: 3,
        name: "Cinnamon Sugar Crunch",
        category: "donat",
        subCategory: "Donat Classic & Glaze",
        label: "✨ AROMATIC",
        badgeColor: "#FFA832",
        price: 10000,
        image: "https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=800&q=80",
        description: "Perpaduan wangi kayu manis hangat dan gula aren kristal yang renyah."
      },

      // Jenis 2: Donat Premium Topping
      {
        id: 4,
        name: "Tiramisu Almond Crunch",
        category: "donat",
        subCategory: "Donat Premium Topping",
        label: "🔥 BEST SELLER",
        badgeColor: "#FD3A2D",
        price: 12000,
        image: "https://images.unsplash.com/photo-1585325701165-351af916e537?auto=format&fit=crop&w=800&q=80",
        description: "Glaze krim tiramisu lumer berpadu taburan almond panggang renyah yang bikin nagih."
      },
      {
        id: 5,
        name: "Matcha Kyoto Glaze",
        category: "donat",
        subCategory: "Donat Premium Topping",
        label: "🍵 FAVORIT MAHASISWA",
        badgeColor: "#FE5F2F",
        price: 12000,
        image: "https://images.unsplash.com/photo-1612203945745-2274880572e9?auto=format&fit=crop&w=800&q=80",
        description: "Aroma matcha premium Jepang yang manis-pahit seimbang di atas donat super empuk."
      },
      {
        id: 6,
        name: "Choco Hazelnut Melt",
        category: "donat",
        subCategory: "Donat Premium Topping",
        label: "🍫 EXTRA LUMER",
        badgeColor: "#FD3A2D",
        price: 13000,
        image: "https://images.unsplash.com/photo-1551024601-bec78aea704b?auto=format&fit=crop&w=800&q=80",
        description: "Celupan cokelat hazelnut pekat dengan taburan choco chips melimpah."
      },

      // Jenis 3: Donat Bomboloni (Isian Lumer)
      {
        id: 7,
        name: "Vanilla Custard Bomboloni",
        category: "donat",
        subCategory: "Donat Bomboloni Lumer",
        label: "💥 FULL FILLING",
        badgeColor: "#FE5F2F",
        price: 13000,
        image: "https://images.unsplash.com/photo-1626094309830-abbb0c99da4a?auto=format&fit=crop&w=800&q=80",
        description: "Donat bulat tanpa lubang dengan isian krim vanilla susu lumer yang meledak di mulut."
      },
      {
        id: 8,
        name: "Strawberry Jam Burst",
        category: "donat",
        subCategory: "Donat Bomboloni Lumer",
        label: "🍓 SEGER MANIS",
        badgeColor: "#FD3A2D",
        price: 13000,
        image: "https://images.unsplash.com/photo-1533910534207-90f31029a78e?auto=format&fit=crop&w=800&q=80",
        description: "Isian selai stroberi homemade asam-manis segar dengan balutan gula halus."
      },

      // ==========================================
      // 2. KATEGORI MINUMAN (2 JENIS SUB-KATEGORI)
      // ==========================================
      // Jenis 1: Coffee Series
      {
        id: 9,
        name: "Iced Caramel Macchiato",
        category: "minuman",
        subCategory: "Coffee Series",
        label: "☕ TEMAN NUGAS",
        badgeColor: "#FD3A2D",
        price: 18000,
        image: "https://images.unsplash.com/photo-1461023058943-07fcbe16d735?auto=format&fit=crop&w=800&q=80",
        description: "Perpaduan espresso bold, susu segar creamy, dan saus karamel manis gurih."
      },
      {
        id: 10,
        name: "Kopi Susu Gula Aren Banyumas",
        category: "minuman",
        subCategory: "Coffee Series",
        label: "🔥 SIGNATURE KOPI",
        badgeColor: "#FE5F2F",
        price: 16000,
        image: "https://images.unsplash.com/photo-1517701604599-bb29b565090c?auto=format&fit=crop&w=800&q=80",
        description: "Kopi susu kekinian dengan manis alami gula aren asli Banyumas yang legit."
      },

      // Jenis 2: Non-Coffee & Refreshing
      {
        id: 11,
        name: "Thai Tea Creamy Original",
        category: "minuman",
        subCategory: "Non-Coffee & Creamy",
        label: "🧊 SEGER POLL",
        badgeColor: "#FE8330",
        price: 15000,
        image: "https://images.unsplash.com/photo-1556679343-c7306c1976bc?auto=format&fit=crop&w=800&q=80",
        description: "Teh Thailand autentik super creamy dan menyegarkan, pasangan pas makan donat."
      },
      {
        id: 12,
        name: "Iced Choco Belgian",
        category: "minuman",
        subCategory: "Non-Coffee & Creamy",
        label: "🍫 CHOCO LOVERS",
        badgeColor: "#FD3A2D",
        price: 17000,
        image: "https://images.unsplash.com/photo-1572490122747-3968b75cc699?auto=format&fit=crop&w=800&q=80",
        description: "Cokelat dingin pekat yang rich, creamy, dan langsung bikin mood balik lagi."
      },

      // ==========================================
      // 3. KATEGORI PAKET (2 JENIS SUB-KATEGORI)
      // ==========================================
      // Jenis 1: Paket Box Donat
      {
        id: 13,
        name: "Box Nongkrong Mix 6 Pcs",
        category: "paket",
        subCategory: "Paket Box Donat",
        label: "🎁 HEMAT BARENG",
        badgeColor: "#FD3A2D",
        quantity: "6 Pcs Donat",
        price: 55000,
        image: "https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?auto=format&fit=crop&w=800&q=80",
        description: "Isi 6 donat bebas pilih varian classic maupun premium! Pas buat sharing bareng bestie."
      },
      {
        id: 14,
        name: "Party Box Ultah 12 Pcs",
        category: "paket",
        subCategory: "Paket Box Donat",
        label: "🎉 CUSTOM UCAPAN",
        badgeColor: "#FE5F2F",
        quantity: "12 Pcs Donat",
        price: 105000,
        image: "https://images.unsplash.com/photo-1579372786545-d24232daf58c?auto=format&fit=crop&w=800&q=80",
        description: "12 donat spesial dengan gratis tulisan cokelat & kartu ucapan custom untuk perayaan."
      },

      // Jenis 2: Paket Combo Donat + Minuman
      {
        id: 15,
        name: "Combo Nugas Hemat (2 Donat + 1 Minum)",
        category: "paket",
        subCategory: "Paket Combo Donat + Minuman",
        label: "⚡ PAKET MAHASISWA",
        badgeColor: "#FE8330",
        quantity: "2 Donat + 1 Minuman",
        price: 34000,
        image: "https://images.unsplash.com/photo-1551024709-8f23befc6f87?auto=format&fit=crop&w=800&q=80",
        description: "Paket komplit anti lapar! Bebas pilih 2 donat varian apa saja + 1 Kopi Susu / Thai Tea."
      },
      {
        id: 16,
        name: "Combo Bestie Berdua (4 Donat + 2 Minum)",
        category: "paket",
        subCategory: "Paket Combo Donat + Minuman",
        label: "💛 DUO HEMAT",
        badgeColor: "#FD3A2D",
        quantity: "4 Donat + 2 Minuman",
        price: 65000,
        image: "https://images.unsplash.com/photo-1585325701165-351af916e537?auto=format&fit=crop&w=800&q=80",
        description: "Nongkrong berdua makin seru dengan 4 donat favorit + 2 cup minuman dingin pilihanmu."
      }
    ];

    const categoryDescriptions = {
      donat: "Pilih jenis donat favoritmu mulai dari Classic Glaze, Premium Topping, hingga Bomboloni lumer!",
      minuman: "Pilihan Coffee Series dan Non-Coffee segar racikan Amaria-N untuk menemani donatmu.",
      paket: "Paket hemat berisi Box Donat maupun Combo lengkap Donat + Minuman untuk setiap momen!"
    };

    function formatRupiah(value) {
      return Number(value).toLocaleString('id-ID');
    }

    // Render Menu dengan Pengelompokan Sub-Kategori & Judul di Setiap Jenis Produk
    function renderCategoryMenu(category = "donat") {
      const container = document.getElementById("menu-sections-container");
      const description = document.getElementById("menu-category-description");
      if (!container) return;

      const filteredProducts = menuProducts.filter(product => product.category === category);

      if (description) {
        description.textContent = categoryDescriptions[category] || "";
      }

      document.querySelectorAll(".category-tab").forEach(button => {
        button.setAttribute("aria-pressed", String(button.dataset.category === category));
      });

      container.innerHTML = "";

      if (filteredProducts.length === 0) {
        container.innerHTML = `
          <p class="rounded-2xl border-2 border-[#1F120E] bg-white p-10 text-center font-bold text-[#1F120E]">
            Varian kategori ini sedang disiapkan. Cek WhatsApp admin yuk!
          </p>
        `;
        return;
      }

      // Kelompokkan produk berdasarkan subCategory secara berurutan
      const groupedBySubCategory = [];
      filteredProducts.forEach(product => {
        const subTitle = product.subCategory || "Varian Pilihan";
        let group = groupedBySubCategory.find(g => g.title === subTitle);
        if (!group) {
          group = { title: subTitle, items: [] };
          groupedBySubCategory.push(group);
        }
        group.items.push(product);
      });

      // Render setiap grup sub-kategori dengan judul + garis pemisah + grid produk
      groupedBySubCategory.forEach(group => {
        const sectionEl = document.createElement("section");
        sectionEl.className = "space-y-4 sm:space-y-6";

        // Judul Sub-Kategori + Garis Horizontal
        const headerEl = document.createElement("div");
        headerEl.className = "flex items-center gap-3 sm:gap-4";
        headerEl.innerHTML = `
          <h2 class="font-display text-xl tracking-wide text-[#1F120E] sm:shrink-0 sm:text-3xl">
            ${group.title}
          </h2>
          <span class="h-[2px] flex-1 bg-[#1F120E]/20"></span>
          <span class="shrink-0 rounded-full border border-[#1F120E] bg-[#FFCC33] px-2.5 py-0.5 text-[10px] font-extrabold text-[#1F120E] sm:px-3 sm:text-xs">
            ${group.items.length} Varian
          </span>
        `;
        sectionEl.appendChild(headerEl);

        // Grid Kartu Produk Responsif (1 col < 400px, 2 cols mobile/tablet, 3 cols desktop)
        const gridEl = document.createElement("div");
        gridEl.className = "grid grid-cols-1 gap-4 min-[400px]:grid-cols-2 sm:gap-6 xl:grid-cols-3";

        group.items.forEach(product => {
          const card = document.createElement("article");
          card.className = "viral-card flex min-w-0 flex-col overflow-hidden rounded-2xl bg-white sm:rounded-3xl";

          const message = `Halo Amaria-N Donuts Banyumas! Saya mau pesan *${product.name}* (${group.title} - Rp${formatRupiah(product.price)}). Apakah ready hari ini?`;
          const whatsappURL = `https://wa.me/${STORE_WHATSAPP}?text=${encodeURIComponent(message)}`;

          const quantityBadge = product.quantity
            ? `<div class="mt-2.5 inline-flex items-center gap-1.5 rounded-lg border border-[#1F120E] bg-[#FFCC33]/60 px-2 py-0.5 text-[10px] font-extrabold text-[#1F120E] sm:mt-3 sm:px-2.5 sm:py-1 sm:text-xs">
                 <i class="fa-solid fa-box-open text-[#FD3A2D]"></i> ${product.quantity}
               </div>`
            : "";

          card.innerHTML = `
            <div class="relative overflow-hidden border-b-2 border-[#1F120E] bg-[#FFF6EB]">
              <img
                class="menu-image w-full"
                src="${product.image}"
                alt="${product.name}"
                loading="lazy"
                onerror="this.onerror=null;this.src='https://placehold.co/600x520/FFA832/1F120E?text=AMARIA-N+DONUTS'"
              />
              <span
                style="background-color: ${product.badgeColor || '#FD3A2D'}"
                class="absolute left-2.5 top-2.5 rounded-lg border-2 border-[#1F120E] px-2 py-0.5 text-[9px] font-extrabold uppercase tracking-wider text-white shadow-[2px_2px_0px_#1F120E] sm:left-3.5 sm:top-3.5 sm:rounded-xl sm:px-3 sm:py-1 sm:text-[10px]"
              >
                ${product.label || "AMARIA SELECTION"}
              </span>
            </div>

            <div class="flex flex-1 flex-col justify-between p-3.5 sm:p-6">
              <div>
                <h3 class="font-display text-lg leading-tight tracking-wide text-[#1F120E] sm:text-2xl">
                  ${product.name}
                </h3>
                <p class="mt-1.5 line-clamp-3 text-[11px] font-medium leading-relaxed text-[#1F120E]/75 sm:mt-2 sm:line-clamp-none sm:text-sm">
                  ${product.description}
                </p>
                ${quantityBadge}
              </div>

              <div class="mt-4 border-t-2 border-dashed border-[#1F120E]/15 pt-3 sm:mt-5 sm:pt-4">
                <div class="flex flex-col gap-2.5 min-[480px]:flex-row min-[480px]:items-center min-[480px]:justify-between">
                  <div>
                    <span class="block text-[9px] font-extrabold uppercase tracking-wider text-[#1F120E]/50 sm:text-[10px]">Harga</span>
                    <b class="font-display text-lg text-[#FD3A2D] sm:text-2xl">Rp${formatRupiah(product.price)}</b>
                  </div>
                  <a
                    href="${whatsappURL}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-viral inline-flex w-full items-center justify-center gap-1.5 rounded-xl px-3 py-2 text-[11px] font-extrabold uppercase tracking-wider min-[480px]:w-auto sm:gap-2 sm:px-4 sm:py-2.5 sm:text-xs"
                  >
                    <i class="fa-brands fa-whatsapp text-sm sm:text-base"></i>
                    Pesan
                  </a>
                </div>
              </div>
            </div>
          `;

          gridEl.appendChild(card);
        });

        sectionEl.appendChild(gridEl);
        container.appendChild(sectionEl);
      });
    }

    // Update Jumlah Item per Kategori Utama (Desktop & Mobile Badges)
    function updateMenuCounts() {
      const counts = {
        donat: '.donut-count-badge',
        minuman: '.drink-count-badge',
        paket: '.package-count-badge'
      };

      Object.entries(counts).forEach(([category, selector]) => {
        const total = menuProducts.filter(p => p.category === category).length;
        document.querySelectorAll(selector).forEach(el => {
          el.textContent = `(${total})`;
        });
      });
    }

    // =========================================================
    // MULTI-VIEW ROUTING: HALAMAN UTAMA vs HALAMAN MENU TERPISAH
    // =========================================================
    const viewHome = document.getElementById('view-home');
    const viewMenu = document.getElementById('view-menu');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    function closeMobileMenu() {
      if (!mobileMenu || !mobileMenuButton) return;
      mobileMenu.classList.add('hidden');
      mobileMenuButton.setAttribute('aria-expanded', 'false');
      mobileMenuButton.innerHTML = '<i class="fa-solid fa-bars text-lg"></i>';
    }

    function updateNavbarHighlight(route, section = null) {
      document.querySelectorAll('.nav-item').forEach(link => {
        const linkRoute = link.dataset.route;
        const linkSection = link.dataset.section || null;
        const isActive = (route === 'menu' && linkRoute === 'menu') ||
                         (route === 'home' && linkRoute === 'home' && linkSection === section);
        link.classList.toggle('active-nav', isActive);
      });
    }

    function navigateTo(route, options = {}) {
      const { section = null, category = 'donat', updateHash = true } = options;

      if (route === 'menu') {
        viewHome.classList.add('hidden');
        viewMenu.classList.remove('hidden');
        renderCategoryMenu(category);
        updateNavbarHighlight('menu');

        if (updateHash && window.location.hash !== '#menu') {
          history.replaceState(null, '', '#menu');
        }
        window.scrollTo({ top: 0, behavior: 'smooth' });
      } else {
        viewMenu.classList.add('hidden');
        viewHome.classList.remove('hidden');
        updateNavbarHighlight('home', section);

        if (section) {
          if (updateHash) history.replaceState(null, '', `#${section}`);
          const targetEl = document.getElementById(section);
          if (targetEl) {
            setTimeout(() => {
              targetEl.scrollIntoView({ behavior: 'smooth' });
            }, 30);
          }
        } else {
          if (updateHash) history.replaceState(null, '', '#home');
          window.scrollTo({ top: 0, behavior: 'smooth' });
        }
      }

      closeMobileMenu();
    }

    // Event Listener Semua Link Navigasi Halaman
    document.querySelectorAll('[data-route]').forEach(el => {
      el.addEventListener('click', event => {
        event.preventDefault();
        const route = el.dataset.route;
        const section = el.dataset.section || null;
        const category = el.dataset.menuCat || 'donat';
        navigateTo(route, { section, category });
      });
    });

    // Event Listener Tab Kategori di Halaman Menu
    document.querySelectorAll('.category-tab').forEach(button => {
      button.addEventListener('click', () => {
        renderCategoryMenu(button.dataset.category);
      });
    });

    // Navigasi Mobile Toggle
    if (mobileMenuButton && mobileMenu) {
      mobileMenuButton.addEventListener('click', () => {
        const isOpen = !mobileMenu.classList.contains('hidden');
        mobileMenu.classList.toggle('hidden');
        mobileMenuButton.setAttribute('aria-expanded', String(!isOpen));
        mobileMenuButton.innerHTML = isOpen
          ? '<i class="fa-solid fa-bars text-lg"></i>'
          : '<i class="fa-solid fa-xmark text-lg"></i>';
      });
    }

    // Handle Browser Hash Change (#menu vs #home / #vibe / #stores / #contact)
    window.addEventListener('hashchange', () => {
      const hash = window.location.hash.replace('#', '');
      if (hash === 'menu') {
        navigateTo('menu', { updateHash: false });
      } else if (['vibe', 'stores', 'contact'].includes(hash)) {
        navigateTo('home', { section: hash, updateHash: false });
      } else {
        navigateTo('home', { updateHash: false });
      }
    });

    // Konfigurasi Email Opsional
    const emailAddressText = document.getElementById('email-address-text');
    const emailContactLink = document.getElementById('email-contact-link');

    if (STORE_EMAIL.trim() && emailAddressText && emailContactLink) {
      emailAddressText.textContent = STORE_EMAIL;
      emailAddressText.classList.remove('text-[#1F120E]/60');
      emailAddressText.classList.add('text-[#FD3A2D]', 'font-subdisplay', 'text-xl');
      emailContactLink.href = `mailto:${STORE_EMAIL}`;
      emailContactLink.classList.remove('hidden');
      emailContactLink.classList.add('inline-flex');
    }

    // Google Maps Embed Banyumas
    const mapFrame = document.getElementById('store-map');
    if (mapFrame) {
      mapFrame.src = `https://www.google.com/maps?q=${encodeURIComponent(STORE_MAP_QUERY)}&output=embed`;
    }

    // Tahun Footer Otomatis
    const currentYear = document.getElementById('current-year');
    if (currentYear) {
      currentYear.textContent = new Date().getFullYear();
    }

    // Inisialisasi Awal Berdasarkan Hash URL
    updateMenuCounts();
    const initialHash = window.location.hash.replace('#', '');
    if (initialHash === 'menu') {
      navigateTo('menu', { updateHash: false });
    } else if (['vibe', 'stores', 'contact'].includes(initialHash)) {
      navigateTo('home', { section: initialHash, updateHash: false });
    } else {
      navigateTo('home', { updateHash: false });
    }
