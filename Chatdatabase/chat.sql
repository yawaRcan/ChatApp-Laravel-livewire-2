-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 08:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

CREATE TABLE `conversation` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `last_message` text NOT NULL,
  `last_time_message` varchar(255) NOT NULL,
  `is_friend` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`id`, `sender_id`, `receiver_id`, `last_message`, `last_time_message`, `is_friend`, `created_at`) VALUES
(112, 23, 4, 'Hi! I\'d like to be friends. 😊', '2023-07-24 12:44:44', 1, '2023-07-24 07:44:44'),
(114, 23, 2, 'Hi! I\'d like to be friends. 😊', '2023-07-24 13:51:56', 1, '2023-07-24 08:51:56'),
(115, 4, 23, 'Hi! I\'d like to be friends. 😊', '2023-07-25 11:16:13', 0, '2023-07-25 06:16:13'),
(117, 23, 22, 'Hi! I\'d like to be friends. 😊', '2023-08-28 06:42:20', 1, '2023-08-28 01:42:20'),
(119, 3, 23, 'Hi! I\'d like to be friends. 😊', '2023-09-21 17:31:27', 0, '2023-09-21 12:31:27'),
(122, 2, 4, 'Hi! I\'d like to be friends. 😊', '2023-09-30 13:03:10', 0, '2023-09-30 08:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'Andorra'),
(5, 'Angola'),
(6, 'Antigua and Barbuda'),
(7, 'Argentina'),
(8, 'Armenia'),
(9, 'Australia'),
(10, 'Austria'),
(11, 'Azerbaijan'),
(12, 'Bahamas'),
(13, 'Bahrain'),
(14, 'Bangladesh'),
(15, 'Barbados'),
(16, 'Belarus'),
(17, 'Belgium'),
(18, 'Belize'),
(19, 'Benin'),
(20, 'Bhutan'),
(21, 'Bolivia'),
(22, 'BosniaHerzegovina'),
(23, 'Botswana'),
(24, 'Brazil'),
(25, 'Brunei'),
(26, 'Bulgaria'),
(27, 'Burkina Faso'),
(28, 'Burundi'),
(29, 'Cabo Verde'),
(30, 'Cambodia'),
(31, 'Cameroon'),
(32, 'Canada'),
(33, 'Central African Republic'),
(34, 'Chad'),
(35, 'Chile'),
(36, 'China'),
(37, 'Colombia'),
(38, 'Comoros'),
(39, 'Congo'),
(40, 'Costa Rica'),
(41, 'Croatia'),
(42, 'Cuba'),
(43, 'Cyprus'),
(44, 'Czech Republic'),
(45, 'Denmark'),
(46, 'Djibouti'),
(47, 'Dominica'),
(48, 'Dominican Republic'),
(49, 'East Timor'),
(50, 'Ecuador'),
(51, 'Egypt'),
(52, 'El Salvador'),
(53, 'Equatorial Guinea'),
(54, 'Eritrea'),
(55, 'Estonia'),
(56, 'Eswatini'),
(57, 'Ethiopia'),
(58, 'Fiji'),
(59, 'Finland'),
(60, 'France'),
(61, 'Gabon'),
(62, 'Gambia'),
(63, 'Georgia'),
(64, 'Germany'),
(65, 'Ghana'),
(66, 'Greece'),
(67, 'Grenada'),
(68, 'Guatemala'),
(69, 'Guinea'),
(70, 'Guinea-Bissau'),
(71, 'Guyana'),
(72, 'Haiti'),
(73, 'Honduras'),
(74, 'Hungary'),
(75, 'Iceland'),
(76, 'India'),
(77, 'Indonesia'),
(78, 'Iran'),
(79, 'Iraq'),
(80, 'Ireland'),
(81, 'Israel'),
(82, 'Italy'),
(83, 'Jamaica'),
(84, 'Japan'),
(85, 'Jordan'),
(86, 'Kazakhstan'),
(87, 'Kenya'),
(88, 'Kiribati'),
(89, 'Korea, North'),
(90, 'Korea, South'),
(91, 'Kosovo'),
(92, 'Kuwait'),
(93, 'Kyrgyzstan'),
(94, 'Laos'),
(95, 'Latvia'),
(96, 'Lebanon'),
(97, 'Lesotho'),
(98, 'Liberia'),
(99, 'Libya'),
(100, 'Liechtenstein'),
(101, 'Lithuania'),
(102, 'Luxembourg'),
(103, 'Madagascar'),
(104, 'Malawi'),
(105, 'Malaysia'),
(106, 'Maldives'),
(107, 'Mali'),
(108, 'Malta'),
(109, 'Marshall Islands'),
(110, 'Mauritania'),
(111, 'Mauritius'),
(112, 'Mexico'),
(113, 'Micronesia'),
(114, 'Moldova'),
(115, 'Monaco'),
(116, 'Mongolia'),
(117, 'Montenegro'),
(118, 'Morocco'),
(119, 'Mozambique'),
(120, 'Myanmar'),
(121, 'Namibia'),
(122, 'Nauru'),
(123, 'Nepal'),
(124, 'Netherlands'),
(125, 'New Zealand'),
(126, 'Nicaragua'),
(127, 'Niger'),
(128, 'Nigeria'),
(129, 'North Macedonia'),
(130, 'Norway'),
(131, 'Oman'),
(132, 'Pakistan'),
(133, 'Palau'),
(134, 'Panama'),
(135, 'Papua Guinea'),
(136, 'Paraguay'),
(137, 'Peru'),
(138, 'Philippines'),
(139, 'Poland'),
(140, 'Portugal'),
(141, 'Qatar'),
(142, 'Romania'),
(143, 'Russia'),
(144, 'Rwanda'),
(145, 'Saint Kitts Nevis'),
(146, 'Saint Lucia'),
(147, 'Saint Vincent the Grenadines'),
(148, 'Samoa'),
(149, 'San Marino'),
(150, 'Sao Tome Principe'),
(151, 'Saudi Arabia'),
(152, 'Senegal'),
(153, 'Serbia'),
(154, 'Seychelles'),
(155, 'Sierra Leone'),
(156, 'Singapore'),
(157, 'Slovakia'),
(158, 'Slovenia'),
(159, 'Solomon Islands'),
(160, 'Somalia'),
(161, 'South Africa'),
(162, 'South Sudan'),
(163, 'Spain'),
(164, 'Sri Lanka'),
(165, 'Sudan'),
(166, 'Suriname'),
(167, 'Sweden'),
(168, 'Switzerland'),
(169, 'Syria'),
(170, 'Taiwan'),
(171, 'Tajikistan'),
(172, 'Tanzania'),
(173, 'Thailand'),
(174, 'Togo'),
(175, 'Tonga'),
(176, 'Trinidad Tobago'),
(177, 'Tunisia'),
(178, 'Turkey'),
(179, 'Turkmenistan'),
(180, 'Tuvalu'),
(181, 'Uganda'),
(182, 'Ukraine'),
(183, 'United Arab Emirates'),
(184, 'United Kingdom'),
(185, 'United States'),
(186, 'Uruguay'),
(187, 'Uzbekistan'),
(188, 'Vanuatu'),
(189, 'Vatican City'),
(190, 'Venezuela'),
(191, 'Vietnam'),
(192, 'Yemen'),
(193, 'Zambia'),
(194, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `conversation__id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `is_read` int(11) NOT NULL DEFAULT 0,
  `message_time` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'msg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `conversation__id`, `sender_id`, `receiver_id`, `is_read`, `message_time`, `message`, `type`) VALUES
(4, 0, 23, 4, 0, '2023-07-24 12:45:22', 'Hello Jawad It\'s is yawar', 'text'),
(5, 0, 4, 23, 0, '2023-07-24 12:45:44', 'Hey, Yawar it is jawad', 'text'),
(6, 0, 23, 4, 0, '2023-07-24 13:45:16', 'Hey Mere Jan ', 'text'),
(7, 0, 23, 2, 0, '2023-07-24 14:02:52', 'Hi Faizan', 'text'),
(8, 0, 23, 2, 0, '2023-07-24 14:02:57', 'how are you doing', 'text'),
(9, 0, 2, 23, 0, '2023-07-24 14:03:51', 'Hey', 'text'),
(10, 0, 4, 23, 0, '2023-07-25 10:19:16', 'today is my interview', 'text'),
(11, 0, 23, 4, 0, '2023-07-25 10:20:09', 'ok good luck', 'text'),
(12, 0, 4, 23, 0, '2023-07-25 10:56:48', 'Hi Pusjer roy', 'text'),
(13, 0, 23, 4, 0, '2023-07-25 10:57:18', '324234234234234', 'text'),
(14, 0, 4, 23, 0, '2023-07-25 10:57:30', '345435435345345', 'text'),
(15, 0, 23, 4, 0, '2023-07-25 10:57:48', 'oooooooo', 'text'),
(16, 0, 23, 4, 0, '2023-07-25 10:58:27', '234234234234234', 'text'),
(17, 0, 23, 4, 0, '2023-07-25 11:00:39', 'fldskgldfs;glk;\n', 'text'),
(18, 0, 4, 23, 0, '2023-07-25 11:07:34', 'sdfgsdfgdfs234234234', 'text'),
(19, 0, 23, 4, 0, '2023-07-25 11:08:37', '34343434343434343434343434', 'text'),
(20, 0, 23, 4, 0, '2023-07-25 11:09:06', 'werwerwerwewer', 'text'),
(21, 0, 23, 4, 0, '2023-07-25 11:09:42', '435345345435', 'text'),
(22, 0, 23, 4, 0, '2023-07-25 11:11:59', '7676767676767', 'text'),
(23, 0, 23, 4, 0, '2023-07-25 11:14:11', ' 😂 😂 😁 😀24234234234', 'text'),
(24, 0, 4, 23, 0, '2023-07-25 11:14:37', ' 😂 😂 😂', 'text'),
(25, 0, 23, 4, 0, '2023-07-25 11:15:16', '666 🐶 🐶 🐶', 'text'),
(26, 0, 23, 2, 0, '2023-07-28 15:23:59', 'hu', 'text'),
(27, 0, 22, 23, 0, '2023-08-28 06:43:12', 'ok', 'text'),
(28, 0, 23, 22, 0, '2023-08-28 06:43:36', 'ok\n', 'text'),
(29, 0, 23, 22, 0, '2023-09-07 09:29:19', 'hi zulkarnain\n', 'text'),
(30, 0, 23, 4, 0, '2023-09-07 09:29:51', 'cds,cbdbdjb\n', 'text'),
(31, 0, 23, 4, 0, '2023-09-07 09:30:05', 'bcbbckdcbd', 'text'),
(32, 0, 23, 4, 0, '2023-09-07 09:30:30', ' 😎 😍', 'text'),
(33, 0, 3, 2, 0, '2023-09-21 17:32:42', 'xxxxasasas', 'text'),
(34, 0, 2, 3, 0, '2023-09-21 17:33:03', 'dsdssdsd', 'text'),
(35, 0, 3, 2, 0, '2023-09-21 17:33:31', 'zxzxzxzx', 'text'),
(36, 0, 3, 2, 0, '2023-09-29 16:16:43', 'hi', 'text'),
(37, 0, 3, 2, 0, '2023-09-29 16:16:55', 'hi   ', 'text'),
(38, 0, 3, 2, 0, '2023-09-29 16:16:58', '', 'text'),
(39, 0, 3, 2, 0, '2023-09-29 16:17:12', 'ji', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0 COMMENT '0 = friend request \r\n1 =general',
  `is_read` int(11) NOT NULL DEFAULT 0 COMMENT '0 = unread 1 = read',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `receiver_id`, `sender_id`, `message`, `type`, `is_read`, `created_at`) VALUES
(30, 4, 23, 'want to be friend with you', 0, 1, '2023-07-24 12:44:47'),
(31, 2, 23, 'want to be friend with you', 0, 1, '2023-07-24 13:51:58'),
(32, 22, 23, 'want to be friend with you', 0, 1, '2023-08-28 06:42:24'),
(33, 3, 2, 'want to be friend with you', 0, 1, '2023-09-21 17:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('yawar@gmail.com', '$2y$10$YXHa0sf1iQ7fG78JH.lQ6.cFowyoG0sG5AlVNkdrjJ3hXlmQbjeMW', '2023-07-06 03:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `attachment` text NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `str_password` varchar(255) NOT NULL DEFAULT '1234567890',
  `phone` varchar(255) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `insta` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `str_password`, `phone`, `bio`, `city`, `country`, `about`, `image`, `fb`, `twitter`, `insta`, `whatsapp`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Faizan', 'a@gmail.com', NULL, '$2y$10$6R8SoMDvItjtyjWbijh0L.EN/Vkuaqogjt0Ep3cm/ins8qDMXQo1q', '$2y$10$6R8SoMDvItjtyjWbijh0L.EN/Vkuaqogjt0Ep3cm/ins8qDMXQo1q', '03189437982', 'Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Wikipedia\n', 'Islamabad', 'Pakistan', 'Graphic Designer', 'http://127.0.0.1:8000/uploads/profilePicture/64b92e4316efe.jpg', NULL, NULL, NULL, NULL, NULL, '2023-06-16 01:03:11', '2023-06-16 01:03:11'),
(3, 'Hammad', 'b@gmail.com', NULL, '$2y$10$pO4mQjpmXf9eLxB1xXAQmOnFK5JS7D62X6zsxjqgGD3p/sW9aNbLG', '12345678', '0318903201', 'Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Wikipedia\n', 'Lahore', 'Pakistan', 'Mobile App Developer', 'http://127.0.0.1:8000/uploads/profilePicture/64b92e9490efd.jpg', NULL, NULL, NULL, NULL, NULL, '2023-06-16 01:03:46', '2023-06-16 01:03:46'),
(4, 'Jawad', 'c@gmail.com', NULL, '$2y$10$cQyhKIuFAQjEd/HF/vPYT.XD5rB5V2GfvW1.OETctdXHnGGe1PF06', '12345678', '0319098732', 'Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Wikipedia\n', 'Karachi', 'Pakistan', 'UI/UX', 'http://127.0.0.1:8000/uploads/profilePicture/64b92f7346520.jpg', NULL, NULL, NULL, NULL, NULL, '2023-06-16 01:04:20', '2023-06-16 01:04:20'),
(5, 'Abbas', 'd@gmail.com', NULL, '$2y$10$6UFelTMAEBM9b1P2R.4ffOaDHtCmTFcbWZK05vcQUwtqLUXdUTPJO', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-16 01:04:55', '2023-06-16 01:04:55'),
(6, 'Yousaf', 'e@gmail.com', NULL, '$2y$10$tmOQnk18Csl3kw.duGJXPOUVm5lkV3hvsLR9tDnksHWPtnFOrLLK2', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-16 01:05:32', '2023-06-16 01:05:32'),
(7, 'Jahangir', 'f@gmail.com', NULL, '$2y$10$hNfMzVPAg4ZxiB8YLQG9.OoDe2QiZa6lACphDAhWP7f1I5w2q0Opu', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-16 01:06:17', '2023-06-16 01:06:17'),
(8, 'Shahid Khan', 'g@gmail.com', NULL, '$2y$10$/Ccd9nxp.O3bydxDSNBsCOZOvvorRoTAtOAnsFnZimf2R/tBqD/NK', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-16 01:06:48', '2023-06-16 01:06:48'),
(9, 'shahrukhan', 'h@gmail.com', NULL, '$2y$10$JeOSlBUZfBkHqy62fPBomOhR1BjT0x3gnesVzsF/nPZTDCezLjbfa', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-16 01:07:18', '2023-06-16 01:07:18'),
(10, 'akshakumar', 'i@gmail.com', NULL, '$2y$10$mdM0pCF1uOsiFfuFxi5NBu.yuQQTHxTx0jexiySIGR4bQYOUmvoNa', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-16 01:07:57', '2023-06-16 01:07:57'),
(11, 'Salman Khan', 'j@gmail.com', NULL, '$2y$10$iUvTaTW1Dmv0XWEfxLONxu9xXnVji4W9d8e0rs1jUMxgOSCvR1GOy', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-16 01:08:42', '2023-06-16 01:08:42'),
(12, 'Shahid Kappor', 'k@gmail.com', NULL, '$2y$10$3g4JD/Yh1K5eJeIXgs8rNu0xCQLGQ65qyJuYvSxkwHtwDOG06NYIu', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-16 01:09:09', '2023-06-16 01:09:09'),
(13, 'Imran Khan', 'l@gmail.com', NULL, '$2y$10$ewIzrLpPPiUDW2gD9FYaVOAevQVjEJvTyMLcDIqK.bS1g4t5MZYly', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-16 01:09:47', '2023-06-16 01:09:47'),
(14, 'yawarahmadkhan', 'yawar@gmail.com', NULL, '$2y$10$W4XRvLc8z3DMfRFngonxeeTQtCvnEjm9QXRc0Z3u1bt.WS6gKPGuu', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-06 03:41:52', '2023-07-06 03:41:52'),
(15, 'Haider', 'haider@gmail.com', NULL, '$2y$10$vSha2kTltTkj3jDlcj538eytE/Nb7keBV/EgqSVlw35Q1TscowzIy', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-07 03:47:56', '2023-07-07 03:47:56'),
(22, 'zulkarnian', 'zulki12334567@gmail.com', NULL, '$2y$10$l4Mnvkqp/GrsXdI0BlunbukmlVukSNCLZKKHC7Bd0cXtXPkB4kkbu', '111111111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-23 13:43:27', '2023-07-23 13:43:27'),
(23, 'roy', 'yawarkhan963@gmail.com', '2023-07-24 05:07:07', '$2y$10$IW9qLH8rGfNPPkdv3xxKB.NhmeEnupjYtT4aK63wg4aj/yFpRfeXO', '111111111', '03119294828', 'laravel developer', 'peshawar', 'pakistan', 'software engineer', 'http://127.0.0.1:8000/uploads/profilePicture/64be505c4b502.jpg', NULL, NULL, NULL, NULL, NULL, '2023-07-24 05:06:30', '2023-07-24 05:07:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
