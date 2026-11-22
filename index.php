<?php
/**
 * Main Landing Page - AYAM GEPREK BANG PUN
 * Website Pemesanan Online Kuliner Modern & Profesional
 */
require_once __DIR__ . '/config/functions.php';

$pdo = getDbConnection();
$settings = getAllSettings();

// Ambil semua menu makanan aktif
$stmt = $pdo->query("SELECT * FROM menus WHERE is_available = 1 ORDER BY sort_order ASC, id ASC");
$allMenus = $stmt->fetchAll();

// Kategori unik
$categories = ['Semua', 'Paket Geprek', 'Ala Carte', 'Topping & Tambahan', 'Minuman Segar'];

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- 1. HERO SECTION (BERANDA) -->
<section id="beranda" class="relative overflow-hidden hero-gradient text-white py-16 sm:py-24 lg:py-28">
    <!-- Background Decor Elements -->
    <div class="absolute inset-0 bg-pattern-dots opacity-20 pointer-events-none"></div>
    <div class="absolute top-1/4 -left-20 w-80 h-80 bg-red-600/30 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-amber-500/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column: Copywriting & CTA -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <!-- Location & Owner Pill -->
                <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-zinc-800/80 border border-zinc-700/80 backdrop-blur-md shadow-sm">
                    <span class="w-2.5 h-2.5 rounded-full bg-amber-400 animate-ping"></span>
                    <span class="text-xs font-bold text-amber-300">
                        <i class="fa-solid fa-location-dot mr-1"></i> Jl. Wismarini, Pringsewu, Lampung
                    </span>
                    <span class="text-zinc-500">•</span>
                    <span class="text-xs text-zinc-300 font-medium">Owner: Bang Pun</span>
                </div>

                <!-- Main Headline -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight leading-[1.1]">
                    AYAM GEPREK <br>
                    <span class="text-gradient-fire">BANG PUN</span>
                </h1>

                <!-- Slogan & Subtext -->
                <p class="text-lg sm:text-xl font-bold text-amber-400 flex items-center justify-center lg:justify-start">
                    <i class="fa-solid fa-pepper-hot mr-2 text-red-500"></i>
                    <?= htmlspecialchars($settings['store_slogan'] ?? 'Pedas Nampol, Gurih Meresap, Selera Juara Pringsewu!') ?>
                </p>

                <p class="text-sm sm:text-base text-zinc-300 max-w-xl mx-auto lg:mx-0 leading-relaxed font-normal">
                    Nikmati sensasi ayam goreng krispi renyah dengan balutan sambal uleg dadakan cabai asli dan bumbu rempah khas Bang Pun. Pilih level pedas favoritmu mulai dari Level 0 hingga Level 5 Meledak!
                </p>

                <!-- CTA Action Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                    <a href="#menu" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 rounded-2xl bg-gradient-to-r from-red-600 via-red-600 to-amber-500 hover:from-red-700 hover:to-amber-600 text-white font-black text-base shadow-xl shadow-red-600/40 hover:shadow-red-600/60 transition active:scale-95 group">
                        <i class="fa-solid fa-fire text-amber-300 mr-2.5 group-hover:animate-bounce"></i>
                        <span>Pesan Sekarang</span>
                    </a>
                    <a href="#menu" class="w-full sm:w-auto inline-flex items-center justify-center px-7 py-4 rounded-2xl bg-zinc-900/90 hover:bg-zinc-800 text-white font-bold text-base border border-zinc-700/80 transition shadow-md">
                        <i class="fa-solid fa-book-open mr-2 text-zinc-400"></i>
                        <span>Lihat Daftar Menu</span>
                    </a>
                </div>

                <!-- Quick Key Highlights -->
                <div class="grid grid-cols-3 gap-3 pt-6 border-t border-zinc-800/80 max-w-lg mx-auto lg:mx-0">
                    <div class="text-center lg:text-left">
                        <span class="text-xl sm:text-2xl font-black text-amber-400 block leading-tight">100%</span>
                        <span class="text-[11px] text-zinc-400 font-medium">Ayam Segar & Halal</span>
                    </div>
                    <div class="text-center lg:text-left">
                        <span class="text-xl sm:text-2xl font-black text-red-500 block leading-tight">Level 0-5</span>
                        <span class="text-[11px] text-zinc-400 font-medium">Pedas Nampol</span>
                    </div>
                    <div class="text-center lg:text-left">
                        <span class="text-xl sm:text-2xl font-black text-amber-400 block leading-tight">10-22 WIB</span>
                        <span class="text-[11px] text-zinc-400 font-medium">Buka Setiap Hari</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Hero Showcase Image -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    <!-- Glow Behind Image -->
                    <div class="absolute -inset-4 bg-gradient-to-tr from-red-600 to-amber-400 rounded-3xl blur-2xl opacity-40 animate-pulse"></div>

                    <!-- Main Image Card -->
                    <div class="relative rounded-3xl overflow-hidden border-2 border-zinc-700/60 shadow-2xl bg-zinc-900 group">
                        <img src="https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?w=800&auto=format&fit=crop&q=80" alt="Ayam Geprek Bang Pun Crispy" class="w-full h-80 sm:h-96 object-cover transform group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/20 to-transparent"></div>

                        <!-- Floating Best Seller Badge -->
                        <div class="absolute top-4 right-4 bg-red-600 text-white text-xs font-black px-3.5 py-1.5 rounded-full shadow-lg flame-badge flex items-center">
                            <i class="fa-solid fa-crown text-amber-300 mr-1.5"></i> Best Seller Pringsewu
                        </div>

                        <!-- Floating Price & Description -->
                        <div class="absolute bottom-4 left-4 right-4 bg-zinc-900/90 backdrop-blur-md p-4 rounded-2xl border border-zinc-700/70">
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-xs font-extrabold text-amber-400 block">PAKET GEPREK ORIGINAL</span>
                                    <h3 class="text-sm font-bold text-white leading-tight">Ayam Krispi + Nasi + Sambal Bawang</h3>
                                </div>
                                <div class="text-right">
                                    <span class="text-xs text-zinc-400 block line-through">Rp 18.000</span>
                                    <span class="text-base font-black text-red-500">Rp 15.000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Mini Card: Level Pedas Indicator -->
                    <div class="absolute -bottom-6 -left-6 bg-zinc-900/95 border border-zinc-700 p-3.5 rounded-2xl shadow-xl hidden sm:flex items-center space-x-3 backdrop-blur-md">
                        <div class="w-10 h-10 rounded-xl bg-red-600/20 text-red-500 flex items-center justify-center text-lg">
                            <i class="fa-solid fa-pepper-hot"></i>
                        </div>
                        <div>
                            <span class="text-[11px] text-zinc-400 block font-medium">Pilihan Sambal Uleg</span>
                            <span class="text-xs font-black text-white">Bawang • Ijo • Matah • Korek</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 2. KEUNGGULAN SECTION -->
<section id="keunggulan" class="py-16 bg-white border-b border-zinc-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-black tracking-wider uppercase text-red-600 bg-red-50 px-3 py-1 rounded-full border border-red-200">
                Kenapa Harus Bang Pun?
            </span>
            <h2 class="text-2xl sm:text-3xl font-black text-zinc-900 mt-2">
                Rahasia Kenikmatan Ayam Geprek Pringsewu
            </h2>
            <p class="text-xs sm:text-sm text-zinc-600 mt-2">
                Dibuat dengan bahan-bahan segar setiap hari untuk memastikan kepuasan setiap gigitan.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Feature 1 -->
            <div class="p-6 rounded-2xl bg-stone-50 border border-zinc-200/80 hover:border-red-500 hover:shadow-lg transition-all group">
                <div class="w-12 h-12 rounded-xl bg-red-100 text-red-600 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition">
                    <i class="fa-solid fa-pepper-hot"></i>
                </div>
                <h3 class="text-base font-bold text-zinc-900">Sambal Uleg Dadakan</h3>
                <p class="text-xs text-zinc-600 mt-1.5 leading-relaxed">
                    Cabai rawit segar langsung diuleg dadakan saat Anda memesan. Segar, pedasnya berasa, tanpa bahan pengawet.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="p-6 rounded-2xl bg-stone-50 border border-zinc-200/80 hover:border-red-500 hover:shadow-lg transition-all group">
                <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition">
                    <i class="fa-solid fa-drumstick-bite"></i>
                </div>
                <h3 class="text-base font-bold text-zinc-900">Ayam Krispi Bumbu Meresap</h3>
                <p class="text-xs text-zinc-600 mt-1.5 leading-relaxed">
                    Daging ayam pilihan dimarinasi bumbu rahasia hingga ke serat terdalam. Kulit renyah kriuk tahan lama!
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="p-6 rounded-2xl bg-stone-50 border border-zinc-200/80 hover:border-red-500 hover:shadow-lg transition-all group">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition">
                    <i class="fa-solid fa-bowl-rice"></i>
                </div>
                <h3 class="text-base font-bold text-zinc-900">Porsi Mengenyangkan</h3>
                <p class="text-xs text-zinc-600 mt-1.5 leading-relaxed">
                    Nasi putih pulen hangat disajikan dalam porsi mantap. Harga ramah di kantong pelajar, mahasiswa, dan keluarga.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="p-6 rounded-2xl bg-stone-50 border border-zinc-200/80 hover:border-red-500 hover:shadow-lg transition-all group">
                <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition">
                    <i class="fa-solid fa-motorcycle"></i>
                </div>
                <h3 class="text-base font-bold text-zinc-900">Pesan Cepat via WhatsApp</h3>
                <p class="text-xs text-zinc-600 mt-1.5 leading-relaxed">
                    Pesan langsung lewat web, otomatis terhubung ke WhatsApp kasir toko. Bisa makan di tempat atau pesan antar ke rumah.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 3. MENU MAKANAN & MINUMAN (FITUR 2) -->
<section id="menu" class="py-16 sm:py-24 bg-stone-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-8">
            <div>
                <span class="text-xs font-black tracking-wider uppercase text-red-600 bg-red-50 px-3 py-1 rounded-full border border-red-200">
                    Daftar Menu & Harga
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-zinc-900 mt-2">
                    Pilihan Menu Lezat Bang Pun
                </h2>
                <p class="text-xs sm:text-sm text-zinc-600 mt-1">
                    Semua menu siap disajikan panas dan fresh. Klik menu untuk memilih level pedas dan topping!
                </p>
            </div>

            <!-- Live Search Bar -->
            <div class="mt-4 md:mt-0 relative w-full md:w-72">
                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-zinc-400 text-xs">
                    <i class="fa-solid fa-search"></i>
                </span>
                <input type="text" oninput="App.searchMenu(this)" placeholder="Cari ayam, sambal, minuman..." class="w-full text-xs pl-9 pr-3.5 py-3 bg-white border border-zinc-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:outline-none shadow-xs">
            </div>
        </div>

        <!-- Category Tabs -->
        <div class="flex items-center space-x-2 overflow-x-auto pb-4 scrollbar-none mb-8">
            <button type="button" onclick="App.filterMenu('all', this)" class="category-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-xs transition bg-red-600 text-white shadow-md">
                <i class="fa-solid fa-utensils mr-1.5"></i> Semua Menu
            </button>
            <button type="button" onclick="App.filterMenu('Paket Geprek', this)" class="category-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-xs transition bg-white text-zinc-700 hover:bg-zinc-100 border border-zinc-200">
                <i class="fa-solid fa-fire mr-1.5 text-red-500"></i> Paket Geprek
            </button>
            <button type="button" onclick="App.filterMenu('Ala Carte', this)" class="category-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-xs transition bg-white text-zinc-700 hover:bg-zinc-100 border border-zinc-200">
                <i class="fa-solid fa-drumstick-bite mr-1.5 text-amber-500"></i> Ala Carte
            </button>
            <button type="button" onclick="App.filterMenu('Topping & Tambahan', this)" class="category-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-xs transition bg-white text-zinc-700 hover:bg-zinc-100 border border-zinc-200">
                <i class="fa-solid fa-cheese mr-1.5 text-yellow-500"></i> Topping & Tambahan
            </button>
            <button type="button" onclick="App.filterMenu('Minuman Segar', this)" class="category-btn whitespace-nowrap px-5 py-2.5 rounded-xl font-bold text-xs transition bg-white text-zinc-700 hover:bg-zinc-100 border border-zinc-200">
                <i class="fa-solid fa-glass-water mr-1.5 text-blue-500"></i> Minuman Segar
            </button>
        </div>

        <!-- Search Empty State -->
        <div id="search-empty-state" class="hidden py-16 text-center text-zinc-500">
            <i class="fa-solid fa-cookie-bite text-4xl mb-3 text-zinc-300"></i>
            <h3 class="text-base font-bold text-zinc-800">Menu Tidak Ditemukan</h3>
            <p class="text-xs text-zinc-500 mt-1">Coba kata kunci lain seperti "geprek", "nasi", atau "teh".</p>
        </div>

        <!-- Menu Grid -->
        <div id="menu-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($allMenus as $menu): ?>
                <?php
                $menuJson = htmlspecialchars(json_encode([
                    'id' => $menu['id'],
                    'name' => $menu['name'],
                    'price' => (int)$menu['price'],
                    'description' => $menu['description'],
                    'image' => $menu['image'],
                    'has_spice_level' => (int)$menu['has_spice_level'],
                    'category' => $menu['category']
                ]), ENT_QUOTES, 'UTF-8');
                ?>
                <div class="menu-item-card menu-card bg-white rounded-3xl overflow-hidden border border-zinc-200/90 shadow-sm flex flex-col justify-between"
                     data-category="<?= htmlspecialchars($menu['category']) ?>"
                     data-name="<?= htmlspecialchars($menu['name']) ?>"
                     data-desc="<?= htmlspecialchars($menu['description'] ?? '') ?>">
                    
                    <!-- Menu Image & Badge -->
                    <div class="relative h-48 overflow-hidden bg-zinc-900">
                        <img src="<?= htmlspecialchars($menu['image'] ?? 'assets/images/aqua.jpg') ?>" 
                             alt="<?= htmlspecialchars($menu['name']) ?>" 
                             loading="lazy"
                             onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?w=600&auto=format&fit=crop&q=80';"
                             class="menu-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-zinc-950/60 via-transparent to-transparent"></div>

                        <!-- Badge jika ada -->
                        <?php if (!empty($menu['badge'])): ?>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full text-[11px] font-black uppercase tracking-wider bg-red-600 text-white shadow-md">
                                <i class="fa-solid fa-star text-amber-300 mr-1 text-[10px]"></i> <?= htmlspecialchars($menu['badge']) ?>
                            </span>
                        <?php endif; ?>

                        <!-- Kategori Tag -->
                        <span class="absolute bottom-3 left-3 px-2.5 py-0.5 rounded-lg text-[10px] font-bold bg-zinc-900/80 text-zinc-300 backdrop-blur-xs">
                            <?= htmlspecialchars($menu['category']) ?>
                        </span>
                    </div>

                    <!-- Menu Info -->
                    <div class="p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-base font-extrabold text-zinc-900 leading-snug">
                                <?= htmlspecialchars($menu['name']) ?>
                            </h3>
                            <p class="text-xs text-zinc-500 mt-1.5 line-clamp-2 leading-relaxed">
                                <?= htmlspecialchars($menu['description'] ?? '') ?>
                            </p>
                        </div>

                        <!-- Price & Action Button -->
                        <div class="pt-4 mt-4 border-t border-zinc-100 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] text-zinc-400 block font-semibold">Harga</span>
                                <span class="text-base font-black text-red-600"><?= formatRupiah($menu['price']) ?></span>
                            </div>

                            <!-- Button: Customise if spice level, else direct add -->
                            <button type="button" 
                                    onclick='App.openCustomizeModal(<?= $menuJson ?>)' 
                                    class="inline-flex items-center px-4 py-2 rounded-xl bg-red-600 hover:bg-red-700 text-white text-xs font-extrabold shadow-md shadow-red-600/20 hover:shadow-red-600/40 transition active:scale-95">
                                <i class="fa-solid fa-plus mr-1.5"></i>
                                <span>Pesan</span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 4. CARA PEMESANAN PRAKTIS -->
<section class="py-16 bg-white border-y border-zinc-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-black tracking-wider uppercase text-amber-600 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">
                Mudah & Cepat
            </span>
            <h2 class="text-2xl sm:text-3xl font-black text-zinc-900 mt-2">
                4 Langkah Mudah Pesan di Bang Pun
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-5 bg-stone-50 rounded-2xl border border-zinc-200 text-center relative">
                <span class="w-8 h-8 rounded-full bg-red-600 text-white text-sm font-black flex items-center justify-center mx-auto mb-3 shadow-md">1</span>
                <h4 class="font-extrabold text-sm text-zinc-900">Pilih Menu & Level</h4>
                <p class="text-xs text-zinc-500 mt-1">Pilih ayam geprek, level pedas (0-5), jenis sambal, dan topping favoritmu.</p>
            </div>
            <div class="p-5 bg-stone-50 rounded-2xl border border-zinc-200 text-center relative">
                <span class="w-8 h-8 rounded-full bg-red-600 text-white text-sm font-black flex items-center justify-center mx-auto mb-3 shadow-md">2</span>
                <h4 class="font-extrabold text-sm text-zinc-900">Periksa Keranjang</h4>
                <p class="text-xs text-zinc-500 mt-1">Lihat ringkasan pesanan, pilih tipe santap (bungkus, makan di tempat, atau diantar).</p>
            </div>
            <div class="p-5 bg-stone-50 rounded-2xl border border-zinc-200 text-center relative">
                <span class="w-8 h-8 rounded-full bg-red-600 text-white text-sm font-black flex items-center justify-center mx-auto mb-3 shadow-md">3</span>
                <h4 class="font-extrabold text-sm text-zinc-900">Isi Data & Bayar</h4>
                <p class="text-xs text-zinc-500 mt-1">Ketik nama, no WhatsApp, alamat/meja, dan pilih metode bayar (COD, QRIS, Transfer).</p>
            </div>
            <div class="p-5 bg-stone-50 rounded-2xl border border-zinc-200 text-center relative">
                <span class="w-8 h-8 rounded-full bg-red-600 text-white text-sm font-black flex items-center justify-center mx-auto mb-3 shadow-md">4</span>
                <h4 class="font-extrabold text-sm text-zinc-900">Kirim ke WhatsApp</h4>
                <p class="text-xs text-zinc-500 mt-1">Sistem langsung menghubungkan pesanan ke WhatsApp Bang Pun untuk segera dimasak!</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. TENTANG KAMI SECTION (FITUR 7) -->
<section id="tentang" class="py-16 sm:py-24 bg-zinc-900 text-white relative overflow-hidden">
    <!-- Glow -->
    <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-red-600/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left: Foto Usaha & Owner -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    <div class="rounded-3xl overflow-hidden border-2 border-zinc-700 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1569058242253-92a9c755a0ec?w=800&auto=format&fit=crop&q=80" alt="Tentang Kami Ayam Geprek Bang Pun" class="w-full h-80 sm:h-96 object-cover">
                    </div>
                    <div class="absolute -bottom-5 -right-5 bg-gradient-to-tr from-red-600 to-amber-500 text-white p-5 rounded-3xl shadow-xl">
                        <span class="text-2xl font-black block leading-none">100%</span>
                        <span class="text-xs font-bold uppercase tracking-wider">Cita Rasa Otentik</span>
                    </div>
                </div>
            </div>

            <!-- Right: Profil AYAM GEPREK BANG PUN -->
            <div class="lg:col-span-7 space-y-6">
                <span class="text-xs font-black tracking-wider uppercase text-amber-400 bg-amber-400/10 px-3 py-1 rounded-full border border-amber-400/20">
                    Profil Usaha Kuliner
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-white leading-tight">
                    Tentang <span class="text-gradient-fire">AYAM GEPREK BANG PUN</span>
                </h2>
                <p class="text-sm text-zinc-300 leading-relaxed">
                    Berawal dari kecintaan terhadap kuliner pedas nusantara, <strong>Bang Pun</strong> mendirikan usaha kuliner ayam geprek di <strong>Jl. Wismarini, Pringsewu, Lampung</strong> dengan komitmen menghadirkan hidangan ayam geprek yang tidak hanya pedas membakar lidah, tetapi juga kaya akan rempah alami yang gurih meresap hingga ke tulang.
                </p>
                <p class="text-sm text-zinc-300 leading-relaxed">
                    Setiap porsi ayam digoreng dalam kondisi fresh setiap hari dengan tepung racikan rahasia bertekstur krispi renyah. Sambal yang kami sajikan menggunakan cabai rawit merah segar yang diuleg dadakan saat pesanan masuk, berpadu minyak bawang gurih atau keju mozarella leleh yang dibakar wangi.
                </p>
                <div class="pt-4 grid grid-cols-2 sm:grid-cols-3 gap-4 border-t border-zinc-800 text-xs">
                    <div>
                        <span class="text-zinc-500 block">Pemilik Usaha</span>
                        <strong class="text-white text-sm">Bang Pun</strong>
                    </div>
                    <div>
                        <span class="text-zinc-500 block">Lokasi Kedai</span>
                        <strong class="text-white text-sm">Pringsewu, Lampung</strong>
                    </div>
                    <div>
                        <span class="text-zinc-500 block">Jam Operasional</span>
                        <strong class="text-amber-400 text-sm">10.00 - 22.00 WIB</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. KONTAK & LOKASI (FITUR 8) -->
<section class="py-16 bg-white border-b border-zinc-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-black tracking-wider uppercase text-red-600 bg-red-50 px-3 py-1 rounded-full border border-red-200">
                Temukan Kami
            </span>
            <h2 class="text-2xl sm:text-3xl font-black text-zinc-900 mt-2">
                Alamat & Kontak Langsung
            </h2>
            <p class="text-xs sm:text-sm text-zinc-600 mt-2">
                Datang langsung ke kedai kami atau hubungi kami untuk pesan antar dan katering acara.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Box Alamat -->
            <div class="p-6 rounded-3xl bg-stone-50 border border-zinc-200 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="w-12 h-12 rounded-2xl bg-red-600 text-white flex items-center justify-center text-xl shadow-md shadow-red-600/30">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <h3 class="text-base font-extrabold text-zinc-900">Alamat Kedai</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        <?= htmlspecialchars($settings['store_address'] ?? 'Jl. Wismarini, Pringsewu, Lampung') ?>
                    </p>
                </div>
                <a href="https://www.google.com/maps/search/?api=1&query=Jl.+Wismarini+Pringsewu+Lampung" target="_blank" class="mt-6 inline-flex items-center text-xs font-bold text-red-600 hover:text-red-700">
                    <span>Lihat di Google Maps</span>
                    <i class="fa-solid fa-arrow-right ml-1.5"></i>
                </a>
            </div>

            <!-- Box Jam Buka -->
            <div class="p-6 rounded-3xl bg-stone-50 border border-zinc-200 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="w-12 h-12 rounded-2xl bg-amber-500 text-white flex items-center justify-center text-xl shadow-md shadow-amber-500/30">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h3 class="text-base font-extrabold text-zinc-900">Jam Operasional</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Buka setiap hari mulai pukul <strong><?= htmlspecialchars($settings['store_hours'] ?? '10.00 - 22.00 WIB') ?></strong> tanpa libur. Siap melayani santap siang maupun malam!
                    </p>
                </div>
                <span class="mt-6 inline-flex items-center text-xs font-bold text-emerald-600">
                    <i class="fa-solid fa-circle-check mr-1.5"></i> Buka Hari Ini
                </span>
            </div>

            <!-- Box WhatsApp -->
            <div class="p-6 rounded-3xl bg-stone-50 border border-zinc-200 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-600 text-white flex items-center justify-center text-xl shadow-md shadow-emerald-600/30">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <h3 class="text-base font-extrabold text-zinc-900">Nomor WhatsApp</h3>
                    <p class="text-xs text-zinc-600 leading-relaxed">
                        Pemesanan cepat, katering porsi besar, atau konsultasi menu langsung hubungi nomor resmi kami.
                    </p>
                </div>
                <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $settings['store_wa'] ?? '6281278901234') ?>" target="_blank" class="mt-6 inline-flex items-center px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition shadow-sm w-fit">
                    <i class="fa-brands fa-whatsapp mr-1.5 text-sm"></i>
                    <span>Chat <?= htmlspecialchars($settings['store_phone'] ?? '0812-7890-1234') ?></span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
