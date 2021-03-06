-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2021 at 02:42 AM
-- Server version: 10.1.48-MariaDB-0+deb9u2
-- PHP Version: 7.3.13-1+0~20191218.50+debian9~1.gbp23c2da

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esubmission_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_mm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `name_mm`, `division_id`, `created_at`, `updated_at`) VALUES
(1, 'Myitkyina District', 'မြစ်ကြီးနားခရိုင်', 1, '2020-12-15 17:41:03', '2021-01-27 07:24:58'),
(2, 'Mohnyin District', 'မိုးညှင်းခရိုင်', 1, '2020-12-15 17:41:03', '2021-01-27 07:25:20'),
(3, 'Bhamw District', 'ဗန်းမော်ခရိုင်', 1, '2020-12-15 17:41:03', '2021-01-27 07:25:55'),
(4, 'Putao District', 'ပူတာအိုခရိုင်', 1, '2020-12-15 17:41:03', '2021-01-27 07:26:13'),
(5, 'Bhamaw', '', 1, '2020-12-15 17:41:03', '2020-12-15 17:41:03'),
(6, 'Monywa District', 'မုံရွာခရိုင်', 2, '2020-12-15 17:41:03', '2021-01-27 07:27:42'),
(7, 'Sagaing District', 'စစ်ကိုင်းခရိုင်', 2, '2020-12-15 17:41:03', '2021-01-27 07:27:58'),
(8, 'Shwebo District', 'ရွှေဘိုခရိုင်', 2, '2020-12-15 17:41:03', '2021-01-27 07:28:14'),
(9, 'Katha District', 'ကသာခရိုင်', 2, '2020-12-15 17:41:03', '2021-01-27 07:28:26'),
(10, 'Kale District', 'ကလေးခရိုင်', 2, '2020-12-15 17:41:03', '2021-01-27 07:28:49'),
(11, 'Mawlaik District', 'မော်လိုက်ခရိုင်', 2, '2020-12-15 17:41:03', '2021-01-27 07:29:07'),
(12, 'Khantee District', 'ခန္တီးခရိုင်', 2, '2020-12-15 17:41:03', '2021-01-27 07:29:32'),
(13, 'Homalin District', 'ဟုမ္မလင်းခရိုင်', 2, '2020-12-15 17:41:03', '2021-01-27 07:30:00'),
(14, 'Tamu District', 'တမူးခရိုင်', 2, '2020-12-15 17:41:03', '2021-01-27 07:30:14'),
(15, 'Kaw Lin District', 'ကောလင်းခရိုင်', 2, '2020-12-15 17:41:03', '2021-01-27 07:31:03'),
(16, 'Falam District', 'ဖလမ်းခရိုင်', 3, '2020-12-15 17:41:03', '2021-01-27 07:31:56'),
(17, 'Mindat District', 'မင်းတပ်ခရိုင်', 3, '2020-12-15 17:41:03', '2021-01-27 07:33:04'),
(18, 'Thayet District', 'သရက်ခရိုင်', 4, '2020-12-15 17:41:03', '2021-01-27 07:34:00'),
(19, 'Magwe District', 'မကွေးခရိုင်', 4, '2020-12-15 17:41:03', '2021-01-27 07:34:19'),
(20, 'Gangaw District', 'ဂန့်ဂေါခရိုင်', 4, '2020-12-15 17:41:03', '2021-01-27 07:35:04'),
(21, 'Minbu District', 'မင်းဘူးခရိုင်', 4, '2020-12-15 17:41:03', '2021-01-27 07:35:25'),
(22, 'Pakokku District', 'ပခုက္ကူခရိုင်', 4, '2020-12-15 17:41:03', '2021-01-27 07:35:42'),
(23, 'Mandalay District', 'မန္တလေးခရိုင်', 5, '2020-12-15 17:41:03', '2021-01-27 07:36:13'),
(24, 'Myingyan District', 'မြင်းခြံခရိုင်', 5, '2020-12-15 17:41:03', '2021-01-27 07:36:36'),
(25, 'Kyaukse District', 'ကျောက်ဆည်ခရိုင်', 5, '2020-12-15 17:41:03', '2021-01-27 07:36:57'),
(26, 'Pyin Oo Lwin District', 'ပြင်ဦးလွင်ခရိုင်', 5, '2020-12-15 17:41:03', '2021-01-27 07:37:42'),
(27, 'Meikhtila District', 'မိတ္ထီလာခရိုင်', 5, '2020-12-15 17:41:03', '2021-01-27 07:40:08'),
(28, 'Yamethin District', 'ရမည်းသင်းခရိုင်', 5, '2020-12-15 17:41:03', '2021-01-27 07:40:27'),
(29, 'Nyaung-U District', 'ညောင်ဦးခရိုင်', 5, '2020-12-15 17:41:03', '2021-01-27 07:40:59'),
(30, 'Lauk Kaing District', 'လောက်ကိုင်ခရိုင်', 6, '2020-12-15 17:41:03', '2021-01-27 07:41:59'),
(31, 'Linkhe District', 'လင်းခေးခရိုင်', 6, '2020-12-15 17:41:03', '2021-01-27 07:42:26'),
(32, 'Konelone', '', 6, '2020-12-15 17:41:03', '2020-12-15 17:41:03'),
(33, 'Konlon', '', 6, '2020-12-15 17:41:03', '2020-12-15 17:41:03'),
(34, 'Taunggyi District', 'တောင်ကြီးခရိုင်', 6, '2020-12-15 17:41:03', '2021-01-27 07:45:11'),
(35, 'Loilem District', 'လွိုင်လင်ခရိုင်', 6, '2020-12-15 17:41:03', '2021-01-27 07:45:45'),
(36, 'Muse District', 'မူဆယ်ခရိုင်', 6, '2020-12-15 17:41:03', '2021-01-27 07:46:01'),
(37, 'Tachileik District', 'တာချီလိတ်ခရိုင်', 6, '2020-12-15 17:41:03', '2021-01-27 07:46:26'),
(38, 'Kyaingtong District', 'ကျိုင်းတုံခရိုင်', 6, '2020-12-15 17:41:03', '2021-01-27 07:46:54'),
(39, 'Kyaukme District', 'ကျောက်မဲခရိုင်', 6, '2020-12-15 17:41:03', '2021-01-27 07:47:10'),
(40, 'Lashio District', 'လားရှိုးခရိုင်', 6, '2020-12-15 17:41:03', '2021-01-27 07:47:23'),
(41, 'Laukking', '', 6, '2020-12-15 17:41:03', '2020-12-15 17:41:03'),
(42, 'Monghsat District', 'မိုင်းဆတ်ခရိုင်', 6, '2020-12-15 17:41:03', '2021-01-27 07:48:21'),
(43, 'Minephat', '', 6, '2020-12-15 17:41:03', '2020-12-15 17:41:03'),
(44, 'Minepyat', '', 6, '2020-12-15 17:41:03', '2020-12-15 17:41:03'),
(45, 'Kyaukphyu District', 'ကျောက်ဖြူခရိုင်', 7, '2020-12-15 17:41:03', '2021-01-27 07:49:23'),
(46, 'Kyaukphyu', '', 7, '2020-12-15 17:41:03', '2020-12-15 17:41:03'),
(47, 'Maungdaw District', 'မောင်တောခရိုင်', 7, '2020-12-15 17:41:03', '2021-01-27 07:49:53'),
(48, 'Thandwae District', 'သံတွဲခရိုင်', 7, '2020-12-15 17:41:03', '2021-01-27 07:50:21'),
(49, 'Sittwe District', 'စစ်တွေခရိုင်', 7, '2020-12-15 17:41:03', '2021-01-27 07:50:38'),
(50, 'Buteeaung', '', 7, '2020-12-15 17:41:03', '2020-12-15 17:41:03'),
(51, 'Mrauk-U District', 'မြောက်ဦးခရိုင်', 7, '2020-12-15 17:41:03', '2021-01-27 07:51:46'),
(52, 'Bago District', 'ပဲခူးခရိုင်', 8, '2020-12-15 17:41:03', '2021-01-27 07:52:03'),
(53, 'Thayarwaddy District', 'သာယာဝတီခရိုင်', 8, '2020-12-15 17:41:03', '2021-01-27 07:52:38'),
(54, 'Taungoo District', 'တောင်ငူခရိုင်', 8, '2020-12-15 17:41:03', '2021-01-27 07:52:53'),
(55, 'Pyay District', 'ပြည်ခရိုင်', 8, '2020-12-15 17:41:03', '2021-01-27 07:53:07'),
(56, '8156', '', 8, '2020-12-15 17:41:03', '2020-12-15 17:41:03'),
(57, 'Loikaw District', 'လွိုင်ကော်ခရိုင်', 9, '2020-12-15 17:41:03', '2021-01-27 07:53:56'),
(58, 'Bawlakhe District', 'ဘော်လခဲခရိုင်', 9, '2020-12-15 17:41:03', '2021-01-27 07:54:20'),
(59, 'Pathein District', 'ပုသိမ်ခရိုင်', 10, '2020-12-15 17:41:03', '2021-01-27 07:54:47'),
(60, 'Hinthada District', 'ဟင်္သာတခရိုင်', 10, '2020-12-15 17:41:03', '2021-01-27 07:55:34'),
(61, 'Maubin District', 'မအူပင်ခရိုင်', 10, '2020-12-15 17:41:03', '2021-01-27 07:55:53'),
(62, 'Myaungmya District', 'မြောင်းမြခရိုင်', 10, '2020-12-15 17:41:03', '2021-01-27 07:56:24'),
(63, 'Pharpone District', 'ဖျာပုံခရိုင်', 10, '2020-12-15 17:41:03', '2021-01-27 07:56:59'),
(64, 'Labutta District', 'လပွတ္တာခရိုင်', 10, '2020-12-15 17:41:03', '2021-01-27 07:57:48'),
(66, 'Mawlamyine District', 'မော်လမြိုင်ခရိုင်', 12, '2020-12-15 17:41:03', '2021-01-27 07:58:25'),
(67, 'Thaton District', 'သထုံခရိုင်', 12, '2020-12-15 17:41:03', '2021-01-27 07:58:44'),
(68, 'Hpa An  District', 'ဘားအံခရို်င', 13, '2020-12-15 17:41:03', '2021-01-27 07:59:17'),
(69, 'Kawkareik District', 'ကော့ကရိတ်ခရိုင်', 13, '2020-12-15 17:41:03', '2021-01-27 07:59:52'),
(70, 'Myawaddy District', 'မြဝတီခရို်င', 13, '2020-12-15 17:41:03', '2021-01-27 08:00:09'),
(71, 'Dawei District', 'ထားဝယ်ခရိုင်', 14, '2020-12-15 17:41:03', '2021-01-27 08:01:02'),
(72, 'Myeik District', 'မြိတ်ခရိုင်', 14, '2020-12-15 17:41:03', '2021-01-27 08:01:13'),
(73, 'Kawthaung District', 'ကော့သောင်းခရိုင်', 14, '2020-12-15 17:41:03', '2021-01-27 08:01:36'),
(74, 'Dewei', '', 14, '2020-12-15 17:41:03', '2020-12-15 17:41:03'),
(75, 'North District', 'မြောက်ပိုင်းခရိုင်', 11, '2020-12-15 17:41:03', '2021-01-27 08:03:14'),
(76, 'East District', 'အရှေ့ပိုင်းခရိုင်', 11, '2020-12-15 17:41:03', '2021-01-27 08:03:39'),
(77, 'South District', 'တောင်ပိုင်းခရိုင်', 11, '2020-12-15 17:41:03', '2021-01-27 08:04:03'),
(78, 'West District', 'အနောက်ပိုင်းခရိုင်', 11, '2020-12-15 17:41:03', '2021-01-27 08:04:28'),
(79, 'Dakkhina District', 'ဒက္ခိဏခရိုင်', 15, '2020-12-15 17:41:03', '2021-01-27 08:05:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_division_id_foreign` (`division_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
