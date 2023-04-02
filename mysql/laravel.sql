-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 ديسمبر 2022 الساعة 15:05
-- إصدار الخادم: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- بنية الجدول `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `services`
--

INSERT INTO `services` (`id`, `name_en`, `name_ar`, `created_at`, `updated_at`) VALUES
(1, 'real-estate', 'عقارات ', NULL, NULL),
(2, 'construction', 'إنشاءات', NULL, NULL),
(3, 'services', 'خدمات ', NULL, NULL),
(4, 'investments', 'استثمارات ', NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `sub_services`
--

CREATE TABLE `sub_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` decimal(8,2) DEFAULT NULL,
  `min_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `sub_services`
--

INSERT INTO `sub_services` (`id`, `name_en`, `name_ar`, `cost`, `min_duration`, `max_duration`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 'real-estate development ', 'تطوير', NULL, NULL, NULL, 1, NULL, NULL),
(2, 'decorations', 'الديكورات', NULL, NULL, NULL, 2, NULL, NULL),
(3, 'maintenance', 'الصيانة', NULL, NULL, NULL, 3, NULL, NULL),
(4, 'Equipment and furnishing', 'التجهيز والتأثيث ', NULL, NULL, NULL, 3, NULL, NULL),
(7, 'transportation', 'الشحن والنقل ', NULL, NULL, NULL, 3, NULL, NULL),
(8, 'Operation', 'التشغيل ', NULL, NULL, NULL, 3, NULL, NULL),
(9, 'Property Management', 'إدارة أملاك ', NULL, NULL, NULL, 3, NULL, NULL),
(10, 'Janitorial work', 'أعمال النظافة ', NULL, NULL, NULL, 3, NULL, NULL),
(11, 'Construction', ' التشييد والبناء', NULL, NULL, NULL, 2, NULL, NULL),
(12, 'Finishing and restoration', ' التشطيب والترميم', NULL, NULL, NULL, 2, NULL, NULL),
(13, 'Demolition, removal and excavations', ' الهدم والإزالة والحفريات', NULL, NULL, NULL, 2, NULL, NULL),
(14, 'Buy', 'شراء', NULL, NULL, NULL, 1, NULL, NULL),
(15, 'sale', 'بيع', NULL, NULL, NULL, 1, NULL, NULL),
(16, 'investment', ' استثمار', NULL, NULL, NULL, 1, NULL, NULL),
(17, 'Building facades', 'واجهات المباني ', NULL, NULL, NULL, 2, NULL, NULL),
(18, 'elevators', 'المصاعد ', NULL, NULL, NULL, 2, NULL, NULL),
(19, 'pricing', 'تثمين ', NULL, NULL, NULL, 1, NULL, NULL),
(20, 'mediation', 'وساطة', NULL, NULL, NULL, 1, NULL, NULL),
(21, 'Companies Management', 'إدارة شركات ', NULL, NULL, NULL, 4, NULL, NULL),
(22, 'Run restaurants', 'تشغيل المطاعم ', NULL, NULL, NULL, 4, NULL, NULL),
(23, 'Marketing', 'التسويق ', NULL, NULL, NULL, 4, NULL, NULL),
(24, 'production', 'الإنتاج ', NULL, NULL, NULL, 4, NULL, NULL),
(25, 'financing', 'التمويل ', NULL, NULL, NULL, 4, NULL, NULL),
(26, 'tenders', 'مناقصات ', NULL, NULL, NULL, 4, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_services`
--
ALTER TABLE `sub_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_services_service_id_foreign` (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_services`
--
ALTER TABLE `sub_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `sub_services`
--
ALTER TABLE `sub_services`
  ADD CONSTRAINT `sub_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
