# 🍗 AYAM GEPREK BANG PUN - Website Kuliner Modern & Pemesanan Online

Website resmi dan sistem pemesanan online modern untuk **AYAM GEPREK BANG PUN**, kuliner ayam geprek terfavorit di **Jl. Wismarini, Pringsewu, Lampung** dengan Owner **Bang Pun**.

Website ini dibangun menggunakan **PHP, SQLite/MySQL, Tailwind CSS, FontAwesome 6, dan Vanilla JavaScript**, dirancang agar responsif untuk perangkat HP (smartphone) dan laptop/desktop dengan palet warna dominan **Merah, Hitam, Putih, dan Kuning/Gold**.

---

## 🌟 Fitur Utama Website

### 1. Beranda (Landing Page)
- **Nama Usaha & Branding:** AYAM GEPREK BANG PUN
- **Slogan:** *"Pedas Nampol, Gurih Meresap, Selera Juara Pringsewu!"*
- **Foto Ayam Geprek HD:** Tampilan hidangan berkualitas tinggi dengan efek animasi mikro dan lencana *Best Seller*.
- **Tombol CTA:** Tombol interaktif "Pesan Sekarang" dan "Lihat Menu".
- **Info Singkat:** 100% Ayam Segar & Halal, Level Pedas 0–5+, Buka Setiap Hari (10.00 – 22.00 WIB).

### 2. Menu Makanan & Kustomisasi Rasa
- **Pilihan Menu Lengkap:**
  - **Paket Geprek:** Paket Original, Sambal Ijo, Mozarella Leleh, Sambal Matah Bali, Keju Cheddar, Paket Sultan Komplit.
  - **Ala Carte:** Ayam Geprek Original & Mozarella (tanpa nasi).
  - **Topping & Tambahan:** Kulit Crispy, Kol Goreng Crispy, Tahu & Tempe, Telur Ceplok/Dadar, Nasi Putih Pulen.
  - **Minuman Segar:** Es Teh Manis Jumbo, Es Jeruk Peras Murni, Es Kopi Susu Gula Aren Bang Pun, Air Mineral.
- **Kustomisasi Level Pedas & Sambal:**
  - Pilihan Level 0 (Tanpa Cabai) s/d Level 5 (Pedas Gila / Meledak).
  - Pilihan Sambal: Sambal Bawang Original, Sambal Ijo Segar, Sambal Matah Bali, Sambal Korek Rawit.
  - Pilihan Potongan Ayam: Campur, Paha, atau Dada Fillet.
  - Pilihan Topping tambahan dengan update harga otomatis.
- **Filter Kategori & Pencarian Langsung (Live Search):** Pelanggan dapat memfilter kategori dan mencari menu secara instan tanpa reload halaman.

### 3. Keranjang Belanja (Shopping Cart Drawer)
- Slide-out panel keranjang di sisi kanan layar.
- Menampilkan rincian menu beserta kustomisasi level pedas, sambal, potongan ayam, dan topping.
- Fitur penambahan kuantitas (+), pengurangan (-), dan penghapusan menu.
- Data tersimpan otomatis di *LocalStorage* sehingga tidak hilang saat berpindah halaman.
- Indikator keranjang melayang (*floating bottom bar*) khusus tampilan HP / Mobile.

### 4. Formulir Pemesanan & Alamat
- Input Nama Lengkap Pelanggan & Nomor WhatsApp.
- **Pilihan Tipe Pemesanan:**
  - **Bungkus (Takeaway)**
  - **Makan di Tempat (Dine In):** Dilengkapi input nomor meja.
  - **Pesan Antar (Delivery):** Dilengkapi input alamat pengiriman area Pringsewu & patokan.
- Catatan khusus pesanan (misal: "Sambal tolong dipisah").

### 5. Pembayaran & Rincian Tagihan
- Menampilkan subtotal harga menu, ongkos kirim (khusus delivery), dan total pembayaran.
- **Pilihan Metode Pembayaran:**
  - **COD / Tunai:** Bayar di kasir atau ke kurir saat makanan tiba.
  - **QRIS:** Scan via GoPay, OVO, Dana, ShopeePay, LinkAja, BCA, BRImo, dll.
  - **Transfer Bank:** Rekening resmi BCA / BRI Bang Pun.

### 6. Integrasi WhatsApp Otomatis
- Saat pelanggan menyelesaikan pemesanan, sistem otomatis menyusun format pesan WhatsApp yang rapi dan profesional lengkap dengan emoji.
- Terhubung langsung ke nomor resmi WhatsApp Bang Pun (`wa.me`) dengan 1 klik.
- Pesanan secara bersamaan tersimpan di database toko dengan kode pesanan unik (contoh: `AGP-20261121-XXXX`).

### 7. Lacak Status Pesanan Real-time
- Pelanggan dapat mengecek status pesanan mereka kapan saja dengan memasukkan kode pesanan atau nomor WhatsApp.
- Menampilkan tahapan: *Menunggu Konfirmasi*, *Sedang Dimasak*, *Selesai*, atau *Dibatalkan*.

### 8. Tentang Kami & Kontak Toko
- **Profil Usaha:** Kisah berdirinya Ayam Geprek Bang Pun di Pringsewu oleh Bang Pun.
- **Alamat:** Jl. Wismarini, Pringsewu, Lampung.
- **Jam Operasional:** 10.00 - 22.00 WIB (Buka Setiap Hari).
- **Kontak:** WhatsApp & tautan langsung ke Google Maps untuk navigasi arah.

### 9. Dashboard Admin & Kasir Kedai
- **Akses Login:** Terproteksi session & hashing password modern.
- **Ringkasan (Overview):** Total Omset Hari Ini, Total Pendapatan, Pesanan Aktif, dan Menu Terlaris.
- **Kelola Pesanan Pelanggan:**
  - Filter pesanan berdasarkan status (Semua, Menunggu, Dimasak, Selesai, Batal).
  - Ubah status pesanan secara instan dengan dropdown.
  - Fitur kirim pesan WhatsApp konfirmasi ke pelanggan dalam 1 klik (*Sedang Dimasak* / *Pesanan Siap*).
- **Cetak Struk Kasir / Invoice:** Layout struk siap cetak untuk printer thermal (58mm/80mm) atau printer biasa.
- **Kelola Menu & Harga (CRUD):** Tambah menu baru, edit harga/nama/foto, hapus menu, dan tombol cepat ganti ketersediaan stok (*Tersedia* / *Habis*).
- **Pengaturan Kedai:** Ubah nomor WhatsApp toko tujuan pesanan, alamat, jam operasional, ongkir, nomor rekening, dan kata sandi admin.

---

## 🔑 Kredensial Login Admin

- **URL Login Admin:** `http://localhost/ayamgeprek/admin/login.php`
- **Username:** `admin`
- **Password:** `admin123`

*(Kata sandi dapat diubah kapan saja di menu Dashboard Admin > Pengaturan Toko)*

---

## 🚀 Cara Menjalankan Website

### Opsi A: Menggunakan XAMPP (Apache)
1. Letakkan folder project ini di dalam direktori `htdocs` XAMPP Anda:
   ```
   d:\xampp\htdocs\ayamgeprek
   ```
   *(atau `c:\xampp\htdocs\ayamgeprek`)*
2. Buka aplikasi **XAMPP Control Panel** dan klik **Start** pada modul **Apache**.
3. Buka browser dan akses alamat:
   - **Halaman Pembeli:** [http://localhost/ayamgeprek/](http://localhost/ayamgeprek/)
   - **Halaman Admin:** [http://localhost/ayamgeprek/admin/](http://localhost/ayamgeprek/admin/)

### Opsi B: Menggunakan PHP Built-in Server
Jika tidak ingin menyalakan Apache XAMPP, Anda dapat menjalankannya langsung melalui terminal/command prompt:
```bash
cd d:\xampp\htdocs\ayamgeprek
php -S localhost:8000
```
Buka browser di:
- **Halaman Pembeli:** [http://localhost:8000/](http://localhost:8000/)
- **Halaman Admin:** [http://localhost:8000/admin/](http://localhost:8000/admin/)

---

## 🗄️ Database

Secara default, website ini menggunakan **SQLite** (PDO SQLite) yang sudah terintegrasi secara otomatis di file `data/database.sqlite`. Anda **tidak perlu membuat database manual** di phpMyAdmin, semua tabel dan 17 menu awal langsung siap digunakan begitu website dibuka!

Jika ingin menggunakan **MySQL**:
1. Buat database baru di phpMyAdmin bernama `ayamgeprek_db`.
2. Import file `database.sql` yang sudah disediakan.
3. Buka file `config/database.php` dan ubah:
   ```php
   define('DB_DRIVER', 'mysql');
   ```

---

## 📁 Struktur Direktori Project

```
ayamgeprek/
├── admin/                     # Dashboard Pengelola & Kasir
│   ├── index.php              # Ringkasan omset & statistik
│   ├── login.php              # Halaman login admin
│   ├── logout.php             # Logout session admin
│   ├── orders.php             # Kelola pesanan pelanggan
│   ├── order_detail.php       # Rincian pesanan & notifikasi WA
│   ├── invoice.php            # Cetak struk printer thermal kasir
│   ├── menu.php               # Kelola menu, harga, & stok
│   ├── settings.php           # Pengaturan toko & ganti password
│   ├── auth_check.php         # Proteksi middleware login
│   ├── admin_navbar.php       # Topbar & navigasi admin
│   └── admin_footer.php       # Footer admin
├── api/                       # REST API Backend
│   ├── order.php              # Simpan pesanan & generate link WhatsApp
│   └── track.php              # Cari status pesanan pelanggan
├── assets/                    # Asset Front-end
│   ├── css/
│   │   └── style.css          # Desain tema, palet warna, animasi
│   └── js/
│       ├── app.js             # Logika interaksi, filter, checkout, lacak
│       └── cart.js            # Keranjang belanja & sinkronisasi UI
├── config/                    # Konfigurasi Sistem
│   ├── database.php           # Koneksi PDO (SQLite / MySQL) & auto-seeder
│   └── functions.php          # Helper format rupiah, WhatsApp, sanitize
├── data/                      # File database SQLite & session
│   └── database.sqlite
├── includes/                  # Komponen Modular Front-End
│   ├── header.php             # Meta tag, Tailwind CDN, Fonts
│   ├── navbar.php             # Header sticky & logo Bang Pun
│   ├── modal_customize.php    # Modal pilihan level pedas & topping
│   ├── modal_cart.php         # Drawer keranjang belanja
│   ├── modal_checkout.php     # Modal formulir data & pembayaran
│   ├── modal_track.php        # Modal lacak status pesanan
│   └── footer.php             # Footer informasi, alamat, & WhatsApp
├── database.sql               # Dump SQL untuk MySQL / phpMyAdmin
├── index.php                  # Halaman utama pembeli
└── README.md                  # Dokumentasi panduan lengkap
```

---

## 📍 Kontak Usaha

- **Nama Usaha:** AYAM GEPREK BANG PUN
- **Pemilik (Owner):** Bang Pun
- **Alamat Kedai:** Jl. Wismarini, Pringsewu, Lampung
- **Jam Buka:** 10.00 – 22.00 WIB (Setiap Hari)
- **WhatsApp:** 0812-7890-1234
