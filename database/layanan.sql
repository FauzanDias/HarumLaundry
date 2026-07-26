-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2026 at 08:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harumlaundry`
--

-- --------------------------------------------------------

-- --
-- -- Table structure for table `layanan`
-- --

-- CREATE TABLE `layanan` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `nama` varchar(255) NOT NULL,
--   `satuan` varchar(255) NOT NULL DEFAULT 'satuan',
--   `waktu_cuci` varchar(255) NOT NULL DEFAULT 'waktu',
--   `harga` decimal(10,2) NOT NULL,
--   `deskripsi` text DEFAULT NULL,
--   `is_active` tinyint(1) NOT NULL DEFAULT 1,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nama`, `satuan`, `waktu_cuci`, `harga`, `deskripsi`, `is_active`, `created_at`, `updated_at`) VALUES
-- (1, 'Cuci Lipat', 'kg', '3 Hari', 7000.00, 'Layanan Kiloan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
-- (2, 'Cuci Lipat', 'kg', '2 Hari', 8000.00, 'Layanan Kiloan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
-- (3, 'Cuci Lipat', 'kg', '1 Hari', 10000.00, 'Layanan Kiloan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
-- (4, 'Cuci Lipat', 'kg', '6 jam', 20000.00, 'Layanan Kiloan - Harga Dasar (6 Jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
-- (5, 'Cuci Lipat', 'kg', '3 jam', 30000.00, 'Layanan Kiloan - Harga Dasar (3 Jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),


(6, 'Cuci Lipat Setrika', 'kg', '3 Hari', 9000.00, 'Layanan Kiloan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(7, 'Cuci Lipat Setrika', 'kg', '2 Hari', 12000.00, 'Layanan Kiloan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(8, 'Cuci Lipat Setrika', 'kg', '1 Hari', 15000.00, 'Layanan Kiloan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(9, 'Cuci Lipat Setrika', 'kg', '6 jam', 25000.00, 'Layanan Kiloan - Harga Dasar (6 Jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(10, 'Cuci Lipat Setrika', 'kg', '3 jam', 35000.00, 'Layanan Kiloan - Harga Dasar (3 Jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),


(11, 'Setrika Harum', 'kg', '3 Hari', 7000.00, 'Layanan Kiloan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(12, 'Setrika Harum', 'kg', '2 Hari', 8000.00, 'Layanan Kiloan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(13, 'Setrika Harum', 'kg', '1 Hari', 10000.00, 'Layanan Kiloan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(14, 'Setrika Harum', 'kg', '6 jam', 20000.00, 'Layanan Kiloan - Harga Dasar (6 Jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(15, 'Setrika Harum', 'kg', '3 jam', 25000.00, 'Layanan Kiloan - Harga Dasar (3 Jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),


(16, 'Baju Bayi Lipat Setrika', 'kg', '3 Hari', 12000.00, 'Layanan Kiloan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(17, 'Baju Bayi Lipat Setrika', 'kg', '2 Hari', 17000.00, 'Layanan Kiloan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(18, 'Baju Bayi Lipat Setrika', 'kg', '1 Hari', 22000.00, 'Layanan Kiloan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(19, 'Baju Bayi Lipat Setrika', 'kg', '6 jam', 35000.00, 'Layanan Kiloan - Harga Dasar (6 Jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(20, 'Baju Bayi Lipat Setrika', 'kg', '3 jam', 45000.00, 'Layanan Kiloan - Harga Dasar (3 Jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),


(21, 'Pakaian Anak Cuci Lipat', 'kg', '3 Hari', 10000.00, 'Layanan Kiloan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(22, 'Pakaian Anak Cuci Lipat', 'kg', '2 Hari', 12000.00, 'Layanan Kiloan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(23, 'Pakaian Anak Cuci Lipat', 'kg', '1 Hari', 15000.00, 'Layanan Kiloan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(24, 'Pakaian Anak Cuci Lipat', 'kg', '6 jam', 25000.00, 'Layanan Kiloan - Harga Dasar (6 Jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(25, 'Pakaian Anak Cuci Lipat', 'kg', '3 jam', 35000.00, 'Layanan Kiloan - Harga Dasar (3 Jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),


(26, 'Pakaian Anak Cuci Lipat Setrika', 'kg', '3 Hari', 11000.00, 'Layanan Kiloan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(27, 'Pakaian Anak Cuci Lipat Setrika', 'kg', '2 Hari', 13000.00, 'Layanan Kiloan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(28, 'Pakaian Anak Cuci Lipat Setrika', 'kg', '1 Hari', 20000.00, 'Layanan Kiloan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(29, 'Pakaian Anak Cuci Lipat Setrika', 'kg', '6 jam', 30000.00, 'Layanan Kiloan - Harga Dasar (6 Jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(30, 'Pakaian Anak Cuci Lipat Setrika', 'kg', '3 jam', 38000.00, 'Layanan Kiloan - Harga Dasar (3 Jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),


(31, 'Gorden', 'kg', '3 Hari', 15000.00, 'Layanan Kiloan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(32, 'Gorden', 'kg', '2 Hari', 20000.00, 'Layanan Kiloan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(33, 'Gorden', 'kg', '1 Hari', 30000.00, 'Layanan Kiloan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(34, 'Gorden', 'kg', '6 jam', 50000.00, 'Layanan Kiloan - Harga Dasar (6 Jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(35, 'Gorden', 'kg', '3 jam', 60000.00, 'Layanan Kiloan - Harga Dasar (3 Jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),


-- 1. Bed Cover No. 1
(36, 'Bed Cover No. 1', 'pcs', '3 Hari', 40000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(37, 'Bed Cover No. 1', 'pcs', '2 Hari', 45000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(38, 'Bed Cover No. 1', 'pcs', '1 Hari', 50000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(39, 'Bed Cover No. 1', 'pcs', '8 jam', 60000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(40, 'Bed Cover No. 1', 'pcs', '6 jam', 65000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 2. Bed Cover No. 2
(41, 'Bed Cover No. 2', 'pcs', '3 Hari', 35000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(42, 'Bed Cover No. 2', 'pcs', '2 Hari', 40000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(43, 'Bed Cover No. 2', 'pcs', '1 Hari', 45000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(44, 'Bed Cover No. 2', 'pcs', '8 jam', 50000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(45, 'Bed Cover No. 2', 'pcs', '6 jam', 55000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 3. Bed Cover No. 3
(46, 'Bed Cover No. 3', 'pcs', '3 Hari', 30000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(47, 'Bed Cover No. 3', 'pcs', '2 Hari', 35000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(48, 'Bed Cover No. 3', 'pcs', '1 Hari', 40000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(49, 'Bed Cover No. 3', 'pcs', '8 jam', 45000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(50, 'Bed Cover No. 3', 'pcs', '6 jam', 50000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 4. Sprei King Size (220/200)
(51, 'Sprei King Size (220/200)', 'pcs', '3 Hari', 35000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(52, 'Sprei King Size (220/200)', 'pcs', '2 Hari', 40000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(53, 'Sprei King Size (220/200)', 'pcs', '1 Hari', 45000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(54, 'Sprei King Size (220/200)', 'pcs', '8 jam', 50000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(55, 'Sprei King Size (220/200)', 'pcs', '6 jam', 55000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 5. Sprei No. 1 (180/200)
(56, 'Sprei No. 1 (180/200)', 'pcs', '3 Hari', 20000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(57, 'Sprei No. 1 (180/200)', 'pcs', '2 Hari', 25000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(58, 'Sprei No. 1 (180/200)', 'pcs', '1 Hari', 30000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(59, 'Sprei No. 1 (180/200)', 'pcs', '8 jam', 35000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(60, 'Sprei No. 1 (180/200)', 'pcs', '6 jam', 45000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 6. Sprei No. 2 (160/200)
(61, 'Sprei No. 2 (160/200)', 'pcs', '3 Hari', 16000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(62, 'Sprei No. 2 (160/200)', 'pcs', '2 Hari', 21000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(63, 'Sprei No. 2 (160/200)', 'pcs', '1 Hari', 26000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(64, 'Sprei No. 2 (160/200)', 'pcs', '8 jam', 31000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(65, 'Sprei No. 2 (160/200)', 'pcs', '6 jam', 41000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 7. Sprei No. 3 (120/200)
(66, 'Sprei No. 3 (120/200)', 'pcs', '3 Hari', 12000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(67, 'Sprei No. 3 (120/200)', 'pcs', '2 Hari', 17000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(68, 'Sprei No. 3 (120/200)', 'pcs', '1 Hari', 22000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(69, 'Sprei No. 3 (120/200)', 'pcs', '8 jam', 27000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(70, 'Sprei No. 3 (120/200)', 'pcs', '6 jam', 37000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 8. Selimut Jumbo/Tebal
(71, 'Selimut Jumbo/Tebal', 'pcs', '3 Hari', 25000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(72, 'Selimut Jumbo/Tebal', 'pcs', '2 Hari', 25000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(73, 'Selimut Jumbo/Tebal', 'pcs', '1 Hari', 30000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(74, 'Selimut Jumbo/Tebal', 'pcs', '8 jam', 35000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(75, 'Selimut Jumbo/Tebal', 'pcs', '6 jam', 35000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 9. Selimut No. 1
(76, 'Selimut No. 1', 'pcs', '3 Hari', 20000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(77, 'Selimut No. 1', 'pcs', '2 Hari', 20000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(78, 'Selimut No. 1', 'pcs', '1 Hari', 25000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(79, 'Selimut No. 1', 'pcs', '8 jam', 30000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(80, 'Selimut No. 1', 'pcs', '6 jam', 30000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 10. Selimut No. 2
(81, 'Selimut No. 2', 'pcs', '3 Hari', 15000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(82, 'Selimut No. 2', 'pcs', '2 Hari', 15000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(83, 'Selimut No. 2', 'pcs', '1 Hari', 20000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(84, 'Selimut No. 2', 'pcs', '8 jam', 25000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(85, 'Selimut No. 2', 'pcs', '6 jam', 25000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 11. Selimut No. 3
(86, 'Selimut No. 3', 'pcs', '3 Hari', 15000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(87, 'Selimut No. 3', 'pcs', '2 Hari', 15000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(88, 'Selimut No. 3', 'pcs', '1 Hari', 20000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(89, 'Selimut No. 3', 'pcs', '8 jam', 25000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(90, 'Selimut No. 3', 'pcs', '6 jam', 25000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 12. Handuk Kecil (30/60)
(91, 'Handuk Kecil (30/60)', 'pcs', '3 Hari', 5000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(92, 'Handuk Kecil (30/60)', 'pcs', '2 Hari', 5000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(93, 'Handuk Kecil (30/60)', 'pcs', '1 Hari', 8000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(94, 'Handuk Kecil (30/60)', 'pcs', '8 jam', 12000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(95, 'Handuk Kecil (30/60)', 'pcs', '6 jam', 12000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 13. Handuk Sedang (50/100,40/80)
(96, 'Handuk Sedang (50/100,40/80)', 'pcs', '3 Hari', 8000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(97, 'Handuk Sedang (50/100,40/80)', 'pcs', '2 Hari', 8000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(98, 'Handuk Sedang (50/100,40/80)', 'pcs', '1 Hari', 12000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(99, 'Handuk Sedang (50/100,40/80)', 'pcs', '8 jam', 15000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(100, 'Handuk Sedang (50/100,40/80)', 'pcs', '6 jam', 15000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 14. Handuk Standart (70/140, 60/120)
(101, 'Handuk Standart (70/140, 60/120)', 'pcs', '3 Hari', 10000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(102, 'Handuk Standart (70/140, 60/120)', 'pcs', '2 Hari', 10000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(103, 'Handuk Standart (70/140, 60/120)', 'pcs', '1 Hari', 15000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(104, 'Handuk Standart (70/140, 60/120)', 'pcs', '8 jam', 25000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(105, 'Handuk Standart (70/140, 60/120)', 'pcs', '6 jam', 25000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 15. Handuk Besar (80/160)
(106, 'Handuk Besar (80/160)', 'pcs', '3 Hari', 15000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(107, 'Handuk Besar (80/160)', 'pcs', '2 Hari', 15000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(108, 'Handuk Besar (80/160)', 'pcs', '1 Hari', 20000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(109, 'Handuk Besar (80/160)', 'pcs', '8 jam', 30000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(110, 'Handuk Besar (80/160)', 'pcs', '6 jam', 30000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 16. Handuk Jumbo (90/180)
(111, 'Handuk Jumbo (90/180)', 'pcs', '3 Hari', 20000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(112, 'Handuk Jumbo (90/180)', 'pcs', '2 Hari', 20000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(113, 'Handuk Jumbo (90/180)', 'pcs', '1 Hari', 25000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(114, 'Handuk Jumbo (90/180)', 'pcs', '8 jam', 35000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(115, 'Handuk Jumbo (90/180)', 'pcs', '6 jam', 35000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 17. Boneka Mini
(116, 'Boneka Mini', 'pcs', '3 Hari', 5000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(117, 'Boneka Mini', 'pcs', '2 Hari', 10000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(118, 'Boneka Mini', 'pcs', '1 Hari', 15000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(119, 'Boneka Mini', 'pcs', '8 jam', 25000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(120, 'Boneka Mini', 'pcs', '6 jam', 35000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 18. Boneka Kecil (20x10)
(121, 'Boneka Kecil (20x10)', 'pcs', '3 Hari', 10000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(122, 'Boneka Kecil (20x10)', 'pcs', '2 Hari', 15000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(123, 'Boneka Kecil (20x10)', 'pcs', '1 Hari', 20000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(124, 'Boneka Kecil (20x10)', 'pcs', '8 jam', 30000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(125, 'Boneka Kecil (20x10)', 'pcs', '6 jam', 40000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 19. Boneka Sedang (30x20)
(126, 'Boneka Sedang (30x20)', 'pcs', '3 Hari', 20000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(127, 'Boneka Sedang (30x20)', 'pcs', '2 Hari', 25000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(128, 'Boneka Sedang (30x20)', 'pcs', '1 Hari', 30000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(129, 'Boneka Sedang (30x20)', 'pcs', '8 jam', 40000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(130, 'Boneka Sedang (30x20)', 'pcs', '6 jam', 50000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 20. Boneka Besar (40x30)
(131, 'Boneka Besar (40x30)', 'pcs', '3 Hari', 30000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(132, 'Boneka Besar (40x30)', 'pcs', '2 Hari', 35000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(133, 'Boneka Besar (40x30)', 'pcs', '1 Hari', 40000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(134, 'Boneka Besar (40x30)', 'pcs', '8 jam', 50000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(135, 'Boneka Besar (40x30)', 'pcs', '6 jam', 60000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 21. Boneka Jumbo
(136, 'Boneka Jumbo', 'pcs', '3 Hari', 50000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(137, 'Boneka Jumbo', 'pcs', '2 Hari', 55000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(138, 'Boneka Jumbo', 'pcs', '1 Hari', 60000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(139, 'Boneka Jumbo', 'pcs', '8 jam', 70000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(140, 'Boneka Jumbo', 'pcs', '6 jam', 80000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 22. Boneka Extra Jumbo
(141, 'Boneka Extra Jumbo', 'pcs', '3 Hari', 75000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(142, 'Boneka Extra Jumbo', 'pcs', '2 Hari', 80000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(143, 'Boneka Extra Jumbo', 'pcs', '1 Hari', 85000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(144, 'Boneka Extra Jumbo', 'pcs', '8 jam', 95000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(145, 'Boneka Extra Jumbo', 'pcs', '6 jam', 105000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 23. Tas Kecil
(146, 'Tas Kecil', 'pcs', '3 Hari', 15000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(147, 'Tas Kecil', 'pcs', '2 Hari', 20000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(148, 'Tas Kecil', 'pcs', '1 Hari', 25000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(149, 'Tas Kecil', 'pcs', '8 jam', 35000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(150, 'Tas Kecil', 'pcs', '6 jam', 45000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 24. Tas Sedang
(151, 'Tas Sedang', 'pcs', '3 Hari', 20000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(152, 'Tas Sedang', 'pcs', '2 Hari', 25000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(153, 'Tas Sedang', 'pcs', '1 Hari', 30000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(154, 'Tas Sedang', 'pcs', '8 jam', 40000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(155, 'Tas Sedang', 'pcs', '6 jam', 50000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),

-- 25. Tas Besar
(156, 'Tas Besar', 'pcs', '3 Hari', 30000.00, 'Layanan Satuan - Harga Dasar (3 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(157, 'Tas Besar', 'pcs', '2 Hari', 35000.00, 'Layanan Satuan - Harga Dasar (2 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(158, 'Tas Besar', 'pcs', '1 Hari', 40000.00, 'Layanan Satuan - Harga Dasar (1 Hari)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(159, 'Tas Besar', 'pcs', '8 jam', 50000.00, 'Layanan Satuan - Harga Dasar (8 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05'),
(160, 'Tas Besar', 'pcs', '6 jam', 60000.00, 'Layanan Satuan - Harga Dasar (6 jam)', 1, '2026-07-22 09:51:05', '2026-07-22 09:51:05');

-- Update AUTO_INCREMENT agar ID selanjutnya otomatis mulai dari 161
ALTER TABLE `layanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
