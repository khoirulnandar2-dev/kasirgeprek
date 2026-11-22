-- SQL Dump untuk AYAM GEPREK BANG PUN
-- Kompatibel dengan MySQL / MariaDB (XAMPP phpMyAdmin)

CREATE DATABASE IF NOT EXISTS `ayamgeprek_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `ayamgeprek_db`;

-- 1. Tabel Settings
CREATE TABLE IF NOT EXISTS `settings` (
  `setting_key` VARCHAR(64) NOT NULL PRIMARY KEY,
  `setting_value` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `settings` (`setting_key`, `setting_value`) VALUES
('store_name', 'AYAM GEPREK BANG PUN'),
('store_slogan', 'Pedas Nampol, Gurih Meresap, Selera Juara Pringsewu!'),
('owner_name', 'Bang Pun'),
('store_address', 'Jl. Wismarini, Pringsewu, Lampung'),
('store_phone', '081278901234'),
('store_wa', '6281278901234'),
('store_hours', '10.00 - 22.00 WIB'),
('delivery_fee', '5000'),
('bank_name', 'BCA (Bank Central Asia)'),
('bank_account', '8210-987-654 a.n. Bang Pun'),
('bank_bri', 'BRI: 0123-01-098765-50-1 a.n. Bang Pun'),
('qris_enabled', '1'),
('store_description', 'Ayam Geprek Bang Pun hadir di Pringsewu menyajikan ayam goreng crispy gurih berbalut sambal uleg dadakan dengan racikan rempah istimewa. Pilihan level pedas 0 hingga 5+ siap mengguncang lidah pecinta pedas sejati!')
ON DUPLICATE KEY UPDATE `setting_value` = VALUES(`setting_value`);

-- 2. Tabel Admins (Default: admin / admin123)
CREATE TABLE IF NOT EXISTS `admins` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `admins` (`username`, `password`, `name`) VALUES
('admin', '$2y$10$wU0544fDkY6/m09xY7mR.u9p54P2sZzC3y1xGqWcZgUvXjR8zF8aW', 'Bang Pun')
ON DUPLICATE KEY UPDATE `username` = VALUES(`username`);

-- 3. Tabel Menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `category` VARCHAR(50) NOT NULL,
  `name` VARCHAR(150) NOT NULL,
  `description` TEXT NULL,
  `price` INT NOT NULL,
  `image` TEXT NULL,
  `badge` VARCHAR(50) DEFAULT NULL,
  `has_spice_level` TINYINT(1) DEFAULT 1,
  `is_available` TINYINT(1) DEFAULT 1,
  `sort_order` INT DEFAULT 0,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `menus` (`category`, `name`, `description`, `price`, `image`, `badge`, `has_spice_level`, `is_available`, `sort_order`) VALUES
('Paket Geprek', 'Paket Geprek Original Mantap', 'Ayam goreng krispi gurih digeprek dengan Sambal Bawang uleg dadakan + Nasi Putih pulen hangat + Lalapan mentimun & kemangi segar.', 15000, 'https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?w=600&auto=format&fit=crop&q=80', 'Best Seller', 1, 1, 1),
('Paket Geprek', 'Paket Geprek Sambal Ijo Segar', 'Ayam geprek renyah dengan cabai hijau pilihan, tomat segar, dan perasan jeruk limo yang harum dan pedas gurih + Nasi Pulen + Lalap.', 16000, 'https://images.unsplash.com/photo-1626645738196-c2a7c87a8f58?w=600&auto=format&fit=crop&q=80', 'Favorit', 1, 1, 2),
('Paket Geprek', 'Paket Geprek Mozarella Leleh', 'Ayam geprek sambal pedas dibalut keju mozarella leleh yang dipanggang torch wangi smokey + Nasi Putih + Lalapan. Sensasi pedas gurih lumer!', 21000, 'https://images.unsplash.com/photo-1528735602780-2552fd46c7af?w=600&auto=format&fit=crop&q=80', 'Sensasi Keju', 1, 1, 3),
('Paket Geprek', 'Paket Geprek Sambal Matah Bali', 'Ayam krispi digeprek lalu disiram sambal matah khas Bali dengan irisan serai wangi, daun jeruk, bawang merah, dan cabai rawit segar + Nasi.', 17000, 'https://images.unsplash.com/photo-1569058242253-92a9c755a0ec?w=600&auto=format&fit=crop&q=80', 'Rekomendasi', 1, 1, 4),
('Paket Geprek', 'Paket Geprek Tabur Keju Cheddar', 'Ayam krispi sambal pedas ditaburi limpahan keju cheddar parut gurih asin yang melimpah + Nasi Putih hangat + Lalapan.', 18000, 'https://images.unsplash.com/photo-1626082929158-b6ec26a457c1?w=600&auto=format&fit=crop&q=80', 'Spesial', 1, 1, 5),
('Paket Geprek', 'Paket Sultan Bang Pun Komplit', 'Paket super puas: Nasi + Ayam Geprek Jumbo + Sambal Bawang + Tahu Goreng + Tempe Goreng + Kol Crispy + Es Teh Manis Jumbo!', 25000, 'https://images.unsplash.com/photo-1589302168068-964664d93dc0?w=600&auto=format&fit=crop&q=80', 'Super Hemat', 1, 1, 6),
('Ala Carte', 'Ayam Geprek Original (Tanpa Nasi)', 'Ayam goreng krispi bumbu meresap digeprek dengan sambal uleg pilihanmu. Porsi pas untuk lauk sendiri.', 12000, 'https://images.unsplash.com/photo-1562967914-608f82629710?w=600&auto=format&fit=crop&q=80', NULL, 1, 1, 7),
('Ala Carte', 'Ayam Geprek Mozarella (Tanpa Nasi)', '1 potong ayam krispi pedas dengan lelehan keju mozarella tebal di atasnya tanpa nasi.', 17000, 'https://images.unsplash.com/photo-1528735602780-2552fd46c7af?w=600&auto=format&fit=crop&q=80', NULL, 1, 1, 8),
('Topping & Tambahan', 'Kulit Ayam Crispy Gurih', 'Kulit ayam digoreng garing renyah keemasan dengan bumbu rempah spesial Bang Pun. Sangat kriuk!', 8000, 'https://images.unsplash.com/photo-1569058242253-92a9c755a0ec?w=600&auto=format&fit=crop&q=80', 'Wajib Coba', 0, 1, 9),
('Topping & Tambahan', 'Kol Goreng Crispy Gurih', 'Kol manis segar digoreng krispi dengan cita rasa manis gurih khas teman santap ayam geprek.', 5000, 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600&auto=format&fit=crop&q=80', 'Terlaris', 0, 1, 10),
('Topping & Tambahan', 'Tahu & Tempe Goreng Krispi', '2 potong tahu dan 2 potong tempe bumbu kuning digoreng hangat renyah.', 5000, 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600&auto=format&fit=crop&q=80', NULL, 0, 1, 11),
('Topping & Tambahan', 'Telur Dadar / Ceplok Crispy', 'Telur digoreng krispi dengan pinggiran renda renyah dan gurih.', 5000, 'https://images.unsplash.com/photo-1525351484163-7529414344d8?w=600&auto=format&fit=crop&q=80', NULL, 0, 1, 12),
('Topping & Tambahan', 'Nasi Putih Pulen Hangat', '1 porsi nasi putih pulen harum beras pilihan lokal Pringsewu.', 4000, 'https://images.unsplash.com/photo-1589302168068-964664d93dc0?w=600&auto=format&fit=crop&q=80', NULL, 0, 1, 13),
('Minuman Segar', 'Es Teh Manis Jumbo', 'Es teh melati segar manis pas porsi gelas jumbo, pelepas dahaga dan penawar pedas terbaik!', 4000, 'https://images.unsplash.com/photo-1517256064527-09c73fc73e38?w=600&auto=format&fit=crop&q=80', 'Favorit', 0, 1, 14),
('Minuman Segar', 'Es Jeruk Peras Murni', 'Perasan jeruk segar asli tanpa perisa buatan, perpaduan manis asam yang sangat menyegarkan tenggorokan.', 6000, 'https://images.unsplash.com/photo-1621263764928-df1444c5e859?w=600&auto=format&fit=crop&q=80', 'Segar Alami', 0, 1, 15),
('Minuman Segar', 'Es Kopi Susu Gula Aren Bang Pun', 'Perpaduan kopi robusta Lampung harum dengan susu creamy dan legitnya gula aren asli.', 10000, 'https://images.unsplash.com/photo-1517701550927-30cf4ba1dba5?w=600&auto=format&fit=crop&q=80', 'Kopi Lampung', 0, 1, 16),
('Minuman Segar', 'Air Mineral Dingin 600ml', 'Air mineral botol dingin bersih menyegarkan.', 4000, 'assets/images/aqua.jpg', NULL, 0, 1, 17);

-- 4. Tabel Orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `order_code` VARCHAR(32) NOT NULL UNIQUE,
  `customer_name` VARCHAR(100) NOT NULL,
  `customer_phone` VARCHAR(25) NOT NULL,
  `order_type` VARCHAR(20) NOT NULL,
  `table_number` VARCHAR(20) DEFAULT NULL,
  `delivery_address` TEXT DEFAULT NULL,
  `payment_method` VARCHAR(30) NOT NULL,
  `notes` TEXT DEFAULT NULL,
  `subtotal` INT NOT NULL,
  `delivery_fee` INT DEFAULT 0,
  `total_amount` INT NOT NULL,
  `status` VARCHAR(20) DEFAULT 'pending',
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 5. Tabel Order Items
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `order_id` INT NOT NULL,
  `menu_id` INT DEFAULT NULL,
  `menu_name` VARCHAR(150) NOT NULL,
  `price` INT NOT NULL,
  `quantity` INT NOT NULL,
  `spice_level` VARCHAR(50) DEFAULT NULL,
  `sambal_type` VARCHAR(50) DEFAULT NULL,
  `toppings` TEXT DEFAULT NULL,
  `chicken_cut` VARCHAR(50) DEFAULT NULL,
  `item_notes` TEXT DEFAULT NULL,
  `subtotal` INT NOT NULL,
  FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
