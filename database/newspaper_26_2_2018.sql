-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 12:28 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newspaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(10) UNSIGNED NOT NULL,
  `add_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_position` tinyint(4) NOT NULL,
  `add_lifetime` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `add_image`, `add_title`, `add_description`, `add_rate`, `add_position`, `add_lifetime`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'C:\\xampp\\tmp\\php3EBA.tmp', 'Pran', 'Pran RFL plastic add.', '5000', 1, 30, 2, '2018-02-26 04:28:52', '2018-02-26 04:28:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_parent_id` int(10) DEFAULT NULL,
  `category_lang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_image`, `category_name`, `category_slug`, `category_parent_id`, `category_lang`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Bangladesh', 'bangladesh', NULL, 'EN', '2018-02-26 04:13:52', '2018-02-26 04:13:52', NULL),
(2, NULL, 'International', 'international', NULL, 'EN', '2018-02-26 04:15:11', '2018-02-26 04:15:11', NULL),
(3, NULL, 'Economy', 'economy', NULL, 'EN', '2018-02-26 04:15:45', '2018-02-26 04:15:45', NULL),
(4, NULL, 'Sports', 'sports', NULL, 'EN', '2018-02-26 04:16:17', '2018-02-26 04:16:17', NULL),
(5, NULL, 'Entertainment', 'entertainment', NULL, 'EN', '2018-02-26 04:16:48', '2018-02-26 04:16:48', NULL),
(6, NULL, 'Features', 'features', NULL, 'EN', '2018-02-26 04:17:11', '2018-02-26 04:17:11', NULL),
(7, NULL, 'Life Style', 'life-style', NULL, 'EN', '2018-02-26 04:17:50', '2018-02-26 04:17:50', NULL),
(8, NULL, 'Photo', 'photo', NULL, 'EN', '2018-02-26 04:18:13', '2018-02-26 04:18:13', NULL),
(9, NULL, 'Video', 'video', NULL, 'EN', '2018-02-26 04:18:35', '2018-02-26 04:18:35', NULL),
(10, NULL, 'Technology', 'technology', NULL, 'EN', '2018-02-26 04:19:21', '2018-02-26 04:19:21', NULL),
(11, NULL, 'Education', 'education', NULL, 'EN', '2018-02-26 04:19:46', '2018-02-26 04:19:46', NULL),
(12, NULL, 'Art and Literature', 'art-and-literature', NULL, 'EN', '2018-02-26 04:20:35', '2018-02-26 04:20:35', NULL),
(13, NULL, 'Others', 'others', NULL, 'EN', '2018-02-26 04:21:17', '2018-02-26 04:21:17', NULL),
(14, NULL, 'Opinion', 'opinion', NULL, 'EN', '2018-02-26 04:30:28', '2018-02-26 04:30:28', NULL),
(15, NULL, 'Business', 'business', NULL, 'EN', '2018-02-26 04:43:21', '2018-02-26 04:43:21', NULL),
(16, NULL, 'Showbiz', 'showbiz', NULL, 'EN', '2018-02-26 04:44:03', '2018-02-26 04:44:03', NULL),
(17, NULL, 'Home', 'home', NULL, 'EN', '2018-02-26 04:45:16', '2018-02-26 04:45:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`) VALUES
(1, 'US', 'United States'),
(2, 'CA', 'Canada'),
(3, 'AF', 'Afghanistan'),
(4, 'AL', 'Albania'),
(5, 'DZ', 'Algeria'),
(6, 'DS', 'American Samoa'),
(7, 'AD', 'Andorra'),
(8, 'AO', 'Angola'),
(9, 'AI', 'Anguilla'),
(10, 'AQ', 'Antarctica'),
(11, 'AG', 'Antigua and/or Barbuda'),
(12, 'AR', 'Argentina'),
(13, 'AM', 'Armenia'),
(14, 'AW', 'Aruba'),
(15, 'AU', 'Australia'),
(16, 'AT', 'Austria'),
(17, 'AZ', 'Azerbaijan'),
(18, 'BS', 'Bahamas'),
(19, 'BH', 'Bahrain'),
(20, 'BD', 'Bangladesh'),
(21, 'BB', 'Barbados'),
(22, 'BY', 'Belarus'),
(23, 'BE', 'Belgium'),
(24, 'BZ', 'Belize'),
(25, 'BJ', 'Benin'),
(26, 'BM', 'Bermuda'),
(27, 'BT', 'Bhutan'),
(28, 'BO', 'Bolivia'),
(29, 'BA', 'Bosnia and Herzegovina'),
(30, 'BW', 'Botswana'),
(31, 'BV', 'Bouvet Island'),
(32, 'BR', 'Brazil'),
(33, 'IO', 'British lndian Ocean Territory'),
(34, 'BN', 'Brunei Darussalam'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodia'),
(39, 'CM', 'Cameroon'),
(40, 'CV', 'Cape Verde'),
(41, 'KY', 'Cayman Islands'),
(42, 'CF', 'Central African Republic'),
(43, 'TD', 'Chad'),
(44, 'CL', 'Chile'),
(45, 'CN', 'China'),
(46, 'CX', 'Christmas Island'),
(47, 'CC', 'Cocos (Keeling) Islands'),
(48, 'CO', 'Colombia'),
(49, 'KM', 'Comoros'),
(50, 'CG', 'Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'ID', 'Indonesia'),
(101, 'IR', 'Iran (Islamic Republic of)'),
(102, 'IQ', 'Iraq'),
(103, 'IE', 'Ireland'),
(104, 'IL', 'Israel'),
(105, 'IT', 'Italy'),
(106, 'CI', 'Ivory Coast'),
(107, 'JM', 'Jamaica'),
(108, 'JP', 'Japan'),
(109, 'JO', 'Jordan'),
(110, 'KZ', 'Kazakhstan'),
(111, 'KE', 'Kenya'),
(112, 'KI', 'Kiribati'),
(113, 'KP', 'Korea, Democratic People\'s Republic of'),
(114, 'KR', 'Korea, Republic of'),
(115, 'XK', 'Kosovo'),
(116, 'KW', 'Kuwait'),
(117, 'KG', 'Kyrgyzstan'),
(118, 'LA', 'Lao People\'s Democratic Republic'),
(119, 'LV', 'Latvia'),
(120, 'LB', 'Lebanon'),
(121, 'LS', 'Lesotho'),
(122, 'LR', 'Liberia'),
(123, 'LY', 'Libyan Arab Jamahiriya'),
(124, 'LI', 'Liechtenstein'),
(125, 'LT', 'Lithuania'),
(126, 'LU', 'Luxembourg'),
(127, 'MO', 'Macau'),
(128, 'MK', 'Macedonia'),
(129, 'MG', 'Madagascar'),
(130, 'MW', 'Malawi'),
(131, 'MY', 'Malaysia'),
(132, 'MV', 'Maldives'),
(133, 'ML', 'Mali'),
(134, 'MT', 'Malta'),
(135, 'MH', 'Marshall Islands'),
(136, 'MQ', 'Martinique'),
(137, 'MR', 'Mauritania'),
(138, 'MU', 'Mauritius'),
(139, 'TY', 'Mayotte'),
(140, 'MX', 'Mexico'),
(141, 'FM', 'Micronesia, Federated States of'),
(142, 'MD', 'Moldova, Republic of'),
(143, 'MC', 'Monaco'),
(144, 'MN', 'Mongolia'),
(145, 'ME', 'Montenegro'),
(146, 'MS', 'Montserrat'),
(147, 'MA', 'Morocco'),
(148, 'MZ', 'Mozambique'),
(149, 'MM', 'Myanmar'),
(150, 'NA', 'Namibia'),
(151, 'NR', 'Nauru'),
(152, 'NP', 'Nepal'),
(153, 'NL', 'Netherlands'),
(154, 'AN', 'Netherlands Antilles'),
(155, 'NC', 'New Caledonia'),
(156, 'NZ', 'New Zealand'),
(157, 'NI', 'Nicaragua'),
(158, 'NE', 'Niger'),
(159, 'NG', 'Nigeria'),
(160, 'NU', 'Niue'),
(161, 'NF', 'Norfork Island'),
(162, 'MP', 'Northern Mariana Islands'),
(163, 'NO', 'Norway'),
(164, 'OM', 'Oman'),
(165, 'PK', 'Pakistan'),
(166, 'PW', 'Palau'),
(167, 'PA', 'Panama'),
(168, 'PG', 'Papua New Guinea'),
(169, 'PY', 'Paraguay'),
(170, 'PE', 'Peru'),
(171, 'PH', 'Philippines'),
(172, 'PN', 'Pitcairn'),
(173, 'PL', 'Poland'),
(174, 'PT', 'Portugal'),
(175, 'PR', 'Puerto Rico'),
(176, 'QA', 'Qatar'),
(177, 'RE', 'Reunion'),
(178, 'RO', 'Romania'),
(179, 'RU', 'Russian Federation'),
(180, 'RW', 'Rwanda'),
(181, 'KN', 'Saint Kitts and Nevis'),
(182, 'LC', 'Saint Lucia'),
(183, 'VC', 'Saint Vincent and the Grenadines'),
(184, 'WS', 'Samoa'),
(185, 'SM', 'San Marino'),
(186, 'ST', 'Sao Tome and Principe'),
(187, 'SA', 'Saudi Arabia'),
(188, 'SN', 'Senegal'),
(189, 'RS', 'Serbia'),
(190, 'SC', 'Seychelles'),
(191, 'SL', 'Sierra Leone'),
(192, 'SG', 'Singapore'),
(193, 'SK', 'Slovakia'),
(194, 'SI', 'Slovenia'),
(195, 'SB', 'Solomon Islands'),
(196, 'SO', 'Somalia'),
(197, 'ZA', 'South Africa'),
(198, 'GS', 'South Georgia South Sandwich Islands'),
(199, 'ES', 'Spain'),
(200, 'LK', 'Sri Lanka'),
(201, 'SH', 'St. Helena'),
(202, 'PM', 'St. Pierre and Miquelon'),
(203, 'SD', 'Sudan'),
(204, 'SR', 'Suriname'),
(205, 'SJ', 'Svalbarn and Jan Mayen Islands'),
(206, 'SZ', 'Swaziland'),
(207, 'SE', 'Sweden'),
(208, 'CH', 'Switzerland'),
(209, 'SY', 'Syrian Arab Republic'),
(210, 'TW', 'Taiwan'),
(211, 'TJ', 'Tajikistan'),
(212, 'TZ', 'Tanzania, United Republic of'),
(213, 'TH', 'Thailand'),
(214, 'TG', 'Togo'),
(215, 'TK', 'Tokelau'),
(216, 'TO', 'Tonga'),
(217, 'TT', 'Trinidad and Tobago'),
(218, 'TN', 'Tunisia'),
(219, 'TR', 'Turkey'),
(220, 'TM', 'Turkmenistan'),
(221, 'TC', 'Turks and Caicos Islands'),
(222, 'TV', 'Tuvalu'),
(223, 'UG', 'Uganda'),
(224, 'UA', 'Ukraine'),
(225, 'AE', 'United Arab Emirates'),
(226, 'GB', 'United Kingdom'),
(227, 'UM', 'United States minor outlying islands'),
(228, 'UY', 'Uruguay'),
(229, 'UZ', 'Uzbekistan'),
(230, 'VU', 'Vanuatu'),
(231, 'VA', 'Vatican City State'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Virgin Islands (British)'),
(235, 'VI', 'Virgin Islands (U.S.)'),
(236, 'WF', 'Wallis and Futuna Islands'),
(237, 'EH', 'Western Sahara'),
(238, 'YE', 'Yemen'),
(239, 'YU', 'Yugoslavia'),
(240, 'ZR', 'Zaire'),
(241, 'ZM', 'Zambia'),
(242, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_name` varchar(64) NOT NULL,
  `language_short_name` varchar(4) NOT NULL,
  `status` tinyint(4) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `language_name`, `language_short_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'English', 'EN', 2, '2018-02-26 04:09:35', '2018-02-26 04:09:35'),
(2, 'Bangla', 'BN', 2, '2018-02-26 04:09:50', '2018-02-26 04:09:50'),
(3, 'Hindi', 'HN', 3, '2018-02-26 04:10:08', '2018-02-26 04:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `visitor_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `media_type` tinyint(3) UNSIGNED NOT NULL,
  `media_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_description` text COLLATE utf8mb4_unicode_ci,
  `media_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_visable` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_30_041257_create_tags_table', 1),
(4, '2017_11_30_041431_create_media_table', 1),
(5, '2017_11_30_163730_create_categories_table', 1),
(6, '2017_11_30_164646_create_settings_table', 1),
(7, '2017_11_30_165217_create_news_table', 1),
(8, '2017_12_01_041322_create_likes_table', 1),
(9, '2017_12_01_041407_create_advertisements_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_lang` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_medias` text COLLATE utf8mb4_unicode_ci,
  `news_posted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `is_fetured` tinyint(3) NOT NULL DEFAULT '0',
  `is_rss` tinyint(4) NOT NULL DEFAULT '0',
  `rss_url` text COLLATE utf8mb4_unicode_ci,
  `rss_media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rss_media_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewed` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_image` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `page_title` varchar(128) CHARACTER SET latin1 NOT NULL,
  `page_slug` varchar(128) CHARACTER SET latin1 NOT NULL,
  `page_details` text CHARACTER SET latin1 NOT NULL,
  `status` tinyint(4) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pullings`
--

CREATE TABLE `pullings` (
  `id` int(9) NOT NULL,
  `language` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `yes` int(5) DEFAULT NULL,
  `no` int(5) DEFAULT NULL,
  `no_comments` int(5) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pullings`
--

INSERT INTO `pullings` (`id`, `language`, `question`, `yes`, `no`, `no_comments`, `status`, `published_at`, `created_at`, `updated_at`) VALUES
(4, 'BN', 'এখনকার পরিবেশে সুষ্ঠু নির্বাচন নিয়ে আশার আলো দেখা যাচ্ছে না—এম হাফিজউদ্দিন খানের এ বক্তব্যের সঙ্গে আপনি কি একমত?', NULL, NULL, NULL, 1, '2018-02-25 18:00:00', '2018-02-26 04:37:21', '2018-02-26 04:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `rss_links`
--

CREATE TABLE `rss_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `rss_provider` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rss_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rss_category` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rss_country` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rss_lang` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rss_priority` tinyint(4) DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rss_links`
--

INSERT INTO `rss_links` (`id`, `rss_provider`, `rss_link`, `rss_category`, `rss_country`, `rss_lang`, `rss_priority`, `status`, `created_at`, `updated_at`) VALUES
(1, 'The Daily Star Frontpage', 'http://www.thedailystar.net/frontpage/rss.xml', 'Home', 'BD', 'EN', 1, 2, '2018-02-15 19:53:13', '2018-02-26 04:48:08'),
(2, 'Prothom-alo', 'http://www.prothomalo.com/feed/', 'Home', 'BD', 'BN', 1, 2, '2018-02-15 21:56:52', '2018-02-26 04:53:11'),
(3, 'The Daily Star - Bussiness', 'http://www.thedailystar.net/business/rss.xml', 'Business', 'BD', 'EN', 1, 2, '2018-02-26 05:01:10', '2018-02-26 05:01:10'),
(4, 'BDnews24.com', 'http://bangla.bdnews24.com/?widgetName=rssfeed&widgetId=1151&getXmlFeed=true', 'Home', 'BD', 'BN', 1, 2, '2018-02-26 05:10:14', '2018-02-26 05:10:14'),
(5, 'The Daily Star - Sports', 'http://www.thedailystar.net/sports/rss.xml', 'Sports', 'BD', 'EN', 2, 2, '2018-02-26 05:25:56', '2018-02-26 05:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `event` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_slug` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_lang` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_title`, `tag_slug`, `tag_lang`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Road accident', 'road-accident', 'EN', '2018-02-26 04:25:31', '2018-02-26 04:25:31', NULL),
(2, 'Bangladesh', 'bangladesh', 'EN', '2018-02-26 04:25:55', '2018-02-26 04:25:55', NULL),
(3, 'Life Style', 'life-style', 'EN', '2018-02-26 04:26:29', '2018-02-26 04:26:29', NULL),
(4, 'Death', 'death', 'EN', '2018-02-26 04:27:00', '2018-02-26 04:27:00', NULL),
(5, 'MWC 2018', 'mwc-2018', 'EN', '2018-02-26 04:27:26', '2018-02-26 04:27:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timezones`
--

CREATE TABLE `timezones` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_iso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `timezones`
--

INSERT INTO `timezones` (`id`, `country_iso`, `code`) VALUES
(1, 'AD', 'Europe/Andorra'),
(2, 'AE', 'Asia/Dubai'),
(3, 'AF', 'Asia/Kabul'),
(4, 'AG', 'America/Antigua'),
(5, 'AI', 'America/Anguilla'),
(6, 'AL', 'Europe/Tirane'),
(7, 'AM', 'Asia/Yerevan'),
(8, 'AO', 'Africa/Luanda'),
(9, 'AQ', 'Antarctica/McMurdo'),
(10, 'AQ', 'Antarctica/Rothera'),
(11, 'AQ', 'Antarctica/Palmer'),
(12, 'AQ', 'Antarctica/Mawson'),
(13, 'AQ', 'Antarctica/Davis'),
(14, 'AQ', 'Antarctica/Casey'),
(15, 'AQ', 'Antarctica/Vostok'),
(16, 'AQ', 'Antarctica/DumontDUrville'),
(17, 'AQ', 'Antarctica/Syowa'),
(18, 'AQ', 'Antarctica/Troll'),
(19, 'AR', 'America/Argentina/Buenos_Aires'),
(20, 'AR', 'America/Argentina/Cordoba'),
(21, 'AR', 'America/Argentina/Salta'),
(22, 'AR', 'America/Argentina/Jujuy'),
(23, 'AR', 'America/Argentina/Tucuman'),
(24, 'AR', 'America/Argentina/Catamarca'),
(25, 'AR', 'America/Argentina/La_Rioja'),
(26, 'AR', 'America/Argentina/San_Juan'),
(27, 'AR', 'America/Argentina/Mendoza'),
(28, 'AR', 'America/Argentina/San_Luis'),
(29, 'AR', 'America/Argentina/Rio_Gallegos'),
(30, 'AR', 'America/Argentina/Ushuaia'),
(31, 'AS', 'Pacific/Pago_Pago'),
(32, 'AT', 'Europe/Vienna'),
(33, 'AU', 'Australia/Lord_Howe'),
(34, 'AU', 'Antarctica/Macquarie'),
(35, 'AU', 'Australia/Hobart'),
(36, 'AU', 'Australia/Currie'),
(37, 'AU', 'Australia/Melbourne'),
(38, 'AU', 'Australia/Sydney'),
(39, 'AU', 'Australia/Broken_Hill'),
(40, 'AU', 'Australia/Brisbane'),
(41, 'AU', 'Australia/Lindeman'),
(42, 'AU', 'Australia/Adelaide'),
(43, 'AU', 'Australia/Darwin'),
(44, 'AU', 'Australia/Perth'),
(45, 'AU', 'Australia/Eucla'),
(46, 'AW', 'America/Aruba'),
(47, 'AX', 'Europe/Mariehamn'),
(48, 'AZ', 'Asia/Baku'),
(49, 'BA', 'Europe/Sarajevo'),
(50, 'BB', 'America/Barbados'),
(51, 'BD', 'Asia/Dhaka'),
(52, 'BE', 'Europe/Brussels'),
(53, 'BF', 'Africa/Ouagadougou'),
(54, 'BG', 'Europe/Sofia'),
(55, 'BH', 'Asia/Bahrain'),
(56, 'BI', 'Africa/Bujumbura'),
(57, 'BJ', 'Africa/Porto-Novo'),
(58, 'BL', 'America/St_Barthelemy'),
(59, 'BM', 'Atlantic/Bermuda'),
(60, 'BN', 'Asia/Brunei'),
(61, 'BO', 'America/La_Paz'),
(62, 'BQ', 'America/Kralendijk'),
(63, 'BR', 'America/Noronha'),
(64, 'BR', 'America/Belem'),
(65, 'BR', 'America/Fortaleza'),
(66, 'BR', 'America/Recife'),
(67, 'BR', 'America/Araguaina'),
(68, 'BR', 'America/Maceio'),
(69, 'BR', 'America/Bahia'),
(70, 'BR', 'America/Sao_Paulo'),
(71, 'BR', 'America/Campo_Grande'),
(72, 'BR', 'America/Cuiaba'),
(73, 'BR', 'America/Santarem'),
(74, 'BR', 'America/Porto_Velho'),
(75, 'BR', 'America/Boa_Vista'),
(76, 'BR', 'America/Manaus'),
(77, 'BR', 'America/Eirunepe'),
(78, 'BR', 'America/Rio_Branco'),
(79, 'BS', 'America/Nassau'),
(80, 'BT', 'Asia/Thimphu'),
(81, 'BW', 'Africa/Gaborone'),
(82, 'BY', 'Europe/Minsk'),
(83, 'BZ', 'America/Belize'),
(84, 'CA', 'America/St_Johns'),
(85, 'CA', 'America/Halifax'),
(86, 'CA', 'America/Glace_Bay'),
(87, 'CA', 'America/Moncton'),
(88, 'CA', 'America/Goose_Bay'),
(89, 'CA', 'America/Blanc-Sablon'),
(90, 'CA', 'America/Toronto'),
(91, 'CA', 'America/Nipigon'),
(92, 'CA', 'America/Thunder_Bay'),
(93, 'CA', 'America/Iqaluit'),
(94, 'CA', 'America/Pangnirtung'),
(95, 'CA', 'America/Resolute'),
(96, 'CA', 'America/Atikokan'),
(97, 'CA', 'America/Rankin_Inlet'),
(98, 'CA', 'America/Winnipeg'),
(99, 'CA', 'America/Rainy_River'),
(100, 'CA', 'America/Regina'),
(101, 'CA', 'America/Swift_Current'),
(102, 'CA', 'America/Edmonton'),
(103, 'CA', 'America/Cambridge_Bay'),
(104, 'CA', 'America/Yellowknife'),
(105, 'CA', 'America/Inuvik'),
(106, 'CA', 'America/Creston'),
(107, 'CA', 'America/Dawson_Creek'),
(108, 'CA', 'America/Vancouver'),
(109, 'CA', 'America/Whitehorse'),
(110, 'CA', 'America/Dawson'),
(111, 'CC', 'Indian/Cocos'),
(112, 'CD', 'Africa/Kinshasa'),
(113, 'CD', 'Africa/Lubumbashi'),
(114, 'CF', 'Africa/Bangui'),
(115, 'CG', 'Africa/Brazzaville'),
(116, 'CH', 'Europe/Zurich'),
(117, 'CI', 'Africa/Abidjan'),
(118, 'CK', 'Pacific/Rarotonga'),
(119, 'CL', 'America/Santiago'),
(120, 'CL', 'Pacific/Easter'),
(121, 'CM', 'Africa/Douala'),
(122, 'CN', 'Asia/Shanghai'),
(123, 'CN', 'Asia/Urumqi'),
(124, 'CO', 'America/Bogota'),
(125, 'CR', 'America/Costa_Rica'),
(126, 'CU', 'America/Havana'),
(127, 'CV', 'Atlantic/Cape_Verde'),
(128, 'CW', 'America/Curacao'),
(129, 'CX', 'Indian/Christmas'),
(130, 'CY', 'Asia/Nicosia'),
(131, 'CZ', 'Europe/Prague'),
(132, 'DE', 'Europe/Berlin'),
(133, 'DE', 'Europe/Busingen'),
(134, 'DJ', 'Africa/Djibouti'),
(135, 'DK', 'Europe/Copenhagen'),
(136, 'DM', 'America/Dominica'),
(137, 'DO', 'America/Santo_Domingo'),
(138, 'DZ', 'Africa/Algiers'),
(139, 'EC', 'America/Guayaquil'),
(140, 'EC', 'Pacific/Galapagos'),
(141, 'EE', 'Europe/Tallinn'),
(142, 'EG', 'Africa/Cairo'),
(143, 'EH', 'Africa/El_Aaiun'),
(144, 'ER', 'Africa/Asmara'),
(145, 'ES', 'Europe/Madrid'),
(146, 'ES', 'Africa/Ceuta'),
(147, 'ES', 'Atlantic/Canary'),
(148, 'ET', 'Africa/Addis_Ababa'),
(149, 'FI', 'Europe/Helsinki'),
(150, 'FJ', 'Pacific/Fiji'),
(151, 'FK', 'Atlantic/Stanley'),
(152, 'FM', 'Pacific/Chuuk'),
(153, 'FM', 'Pacific/Pohnpei'),
(154, 'FM', 'Pacific/Kosrae'),
(155, 'FO', 'Atlantic/Faroe'),
(156, 'FR', 'Europe/Paris'),
(157, 'GA', 'Africa/Libreville'),
(158, 'GB', 'Europe/London'),
(159, 'GD', 'America/Grenada'),
(160, 'GE', 'Asia/Tbilisi'),
(161, 'GF', 'America/Cayenne'),
(162, 'GG', 'Europe/Guernsey'),
(163, 'GH', 'Africa/Accra'),
(164, 'GI', 'Europe/Gibraltar'),
(165, 'GL', 'America/Godthab'),
(166, 'GL', 'America/Danmarkshavn'),
(167, 'GL', 'America/Scoresbysund'),
(168, 'GL', 'America/Thule'),
(169, 'GM', 'Africa/Banjul'),
(170, 'GN', 'Africa/Conakry'),
(171, 'GP', 'America/Guadeloupe'),
(172, 'GQ', 'Africa/Malabo'),
(173, 'GR', 'Europe/Athens'),
(174, 'GS', 'Atlantic/South_Georgia'),
(175, 'GT', 'America/Guatemala'),
(176, 'GU', 'Pacific/Guam'),
(177, 'GW', 'Africa/Bissau'),
(178, 'GY', 'America/Guyana'),
(179, 'HK', 'Asia/Hong_Kong'),
(180, 'HN', 'America/Tegucigalpa'),
(181, 'HR', 'Europe/Zagreb'),
(182, 'HT', 'America/Port-au-Prince'),
(183, 'HU', 'Europe/Budapest'),
(184, 'ID', 'Asia/Jakarta'),
(185, 'ID', 'Asia/Pontianak'),
(186, 'ID', 'Asia/Makassar'),
(187, 'ID', 'Asia/Jayapura'),
(188, 'IE', 'Europe/Dublin'),
(189, 'IL', 'Asia/Jerusalem'),
(190, 'IM', 'Europe/Isle_of_Man'),
(191, 'IN', 'Asia/Kolkata'),
(192, 'IO', 'Indian/Chagos'),
(193, 'IQ', 'Asia/Baghdad'),
(194, 'IR', 'Asia/Tehran'),
(195, 'IS', 'Atlantic/Reykjavik'),
(196, 'IT', 'Europe/Rome'),
(197, 'JE', 'Europe/Jersey'),
(198, 'JM', 'America/Jamaica'),
(199, 'JO', 'Asia/Amman'),
(200, 'JP', 'Asia/Tokyo'),
(201, 'KE', 'Africa/Nairobi'),
(202, 'KG', 'Asia/Bishkek'),
(203, 'KH', 'Asia/Phnom_Penh'),
(204, 'KI', 'Pacific/Tarawa'),
(205, 'KI', 'Pacific/Enderbury'),
(206, 'KI', 'Pacific/Kiritimati'),
(207, 'KM', 'Indian/Comoro'),
(208, 'KN', 'America/St_Kitts'),
(209, 'KP', 'Asia/Pyongyang'),
(210, 'KR', 'Asia/Seoul'),
(211, 'KW', 'Asia/Kuwait'),
(212, 'KY', 'America/Cayman'),
(213, 'KZ', 'Asia/Almaty'),
(214, 'KZ', 'Asia/Qyzylorda'),
(215, 'KZ', 'Asia/Aqtobe'),
(216, 'KZ', 'Asia/Aqtau'),
(217, 'KZ', 'Asia/Oral'),
(218, 'LA', 'Asia/Vientiane'),
(219, 'LB', 'Asia/Beirut'),
(220, 'LC', 'America/St_Lucia'),
(221, 'LI', 'Europe/Vaduz'),
(222, 'LK', 'Asia/Colombo'),
(223, 'LR', 'Africa/Monrovia'),
(224, 'LS', 'Africa/Maseru'),
(225, 'LT', 'Europe/Vilnius'),
(226, 'LU', 'Europe/Luxembourg'),
(227, 'LV', 'Europe/Riga'),
(228, 'LY', 'Africa/Tripoli'),
(229, 'MA', 'Africa/Casablanca'),
(230, 'MC', 'Europe/Monaco'),
(231, 'MD', 'Europe/Chisinau'),
(232, 'ME', 'Europe/Podgorica'),
(233, 'MF', 'America/Marigot'),
(234, 'MG', 'Indian/Antananarivo'),
(235, 'MH', 'Pacific/Majuro'),
(236, 'MH', 'Pacific/Kwajalein'),
(237, 'MK', 'Europe/Skopje'),
(238, 'ML', 'Africa/Bamako'),
(239, 'MM', 'Asia/Rangoon'),
(240, 'MN', 'Asia/Ulaanbaatar'),
(241, 'MN', 'Asia/Hovd'),
(242, 'MN', 'Asia/Choibalsan'),
(243, 'MO', 'Asia/Macau'),
(244, 'MP', 'Pacific/Saipan'),
(245, 'MQ', 'America/Martinique'),
(246, 'MR', 'Africa/Nouakchott'),
(247, 'MS', 'America/Montserrat'),
(248, 'MT', 'Europe/Malta'),
(249, 'MU', 'Indian/Mauritius'),
(250, 'MV', 'Indian/Maldives'),
(251, 'MW', 'Africa/Blantyre'),
(252, 'MX', 'America/Mexico_City'),
(253, 'MX', 'America/Cancun'),
(254, 'MX', 'America/Merida'),
(255, 'MX', 'America/Monterrey'),
(256, 'MX', 'America/Matamoros'),
(257, 'MX', 'America/Mazatlan'),
(258, 'MX', 'America/Chihuahua'),
(259, 'MX', 'America/Ojinaga'),
(260, 'MX', 'America/Hermosillo'),
(261, 'MX', 'America/Tijuana'),
(262, 'MX', 'America/Santa_Isabel'),
(263, 'MX', 'America/Bahia_Banderas'),
(264, 'MY', 'Asia/Kuala_Lumpur'),
(265, 'MY', 'Asia/Kuching'),
(266, 'MZ', 'Africa/Maputo'),
(267, 'NA', 'Africa/Windhoek'),
(268, 'NC', 'Pacific/Noumea'),
(269, 'NE', 'Africa/Niamey'),
(270, 'NF', 'Pacific/Norfolk'),
(271, 'NG', 'Africa/Lagos'),
(272, 'NI', 'America/Managua'),
(273, 'NL', 'Europe/Amsterdam'),
(274, 'NO', 'Europe/Oslo'),
(275, 'NP', 'Asia/Kathmandu'),
(276, 'NR', 'Pacific/Nauru'),
(277, 'NU', 'Pacific/Niue'),
(278, 'NZ', 'Pacific/Auckland'),
(279, 'NZ', 'Pacific/Chatham'),
(280, 'OM', 'Asia/Muscat'),
(281, 'PA', 'America/Panama'),
(282, 'PE', 'America/Lima'),
(283, 'PF', 'Pacific/Tahiti'),
(284, 'PF', 'Pacific/Marquesas'),
(285, 'PF', 'Pacific/Gambier'),
(286, 'PG', 'Pacific/Port_Moresby'),
(287, 'PG', 'Pacific/Bougainville'),
(288, 'PH', 'Asia/Manila'),
(289, 'PK', 'Asia/Karachi'),
(290, 'PL', 'Europe/Warsaw'),
(291, 'PM', 'America/Miquelon'),
(292, 'PN', 'Pacific/Pitcairn'),
(293, 'PR', 'America/Puerto_Rico'),
(294, 'PS', 'Asia/Gaza'),
(295, 'PS', 'Asia/Hebron'),
(296, 'PT', 'Europe/Lisbon'),
(297, 'PT', 'Atlantic/Madeira'),
(298, 'PT', 'Atlantic/Azores'),
(299, 'PW', 'Pacific/Palau'),
(300, 'PY', 'America/Asuncion'),
(301, 'QA', 'Asia/Qatar'),
(302, 'RE', 'Indian/Reunion'),
(303, 'RO', 'Europe/Bucharest'),
(304, 'RS', 'Europe/Belgrade'),
(305, 'RU', 'Europe/Kaliningrad'),
(306, 'RU', 'Europe/Moscow'),
(307, 'RU', 'Europe/Simferopol'),
(308, 'RU', 'Europe/Volgograd'),
(309, 'RU', 'Europe/Samara'),
(310, 'RU', 'Asia/Yekaterinburg'),
(311, 'RU', 'Asia/Omsk'),
(312, 'RU', 'Asia/Novosibirsk'),
(313, 'RU', 'Asia/Novokuznetsk'),
(314, 'RU', 'Asia/Krasnoyarsk'),
(315, 'RU', 'Asia/Irkutsk'),
(316, 'RU', 'Asia/Chita'),
(317, 'RU', 'Asia/Yakutsk'),
(318, 'RU', 'Asia/Khandyga'),
(319, 'RU', 'Asia/Vladivostok'),
(320, 'RU', 'Asia/Sakhalin'),
(321, 'RU', 'Asia/Ust-Nera'),
(322, 'RU', 'Asia/Magadan'),
(323, 'RU', 'Asia/Srednekolymsk'),
(324, 'RU', 'Asia/Kamchatka'),
(325, 'RU', 'Asia/Anadyr'),
(326, 'RW', 'Africa/Kigali'),
(327, 'SA', 'Asia/Riyadh'),
(328, 'SB', 'Pacific/Guadalcanal'),
(329, 'SC', 'Indian/Mahe'),
(330, 'SD', 'Africa/Khartoum'),
(331, 'SE', 'Europe/Stockholm'),
(332, 'SG', 'Asia/Singapore'),
(333, 'SH', 'Atlantic/St_Helena'),
(334, 'SI', 'Europe/Ljubljana'),
(335, 'SJ', 'Arctic/Longyearbyen'),
(336, 'SK', 'Europe/Bratislava'),
(337, 'SL', 'Africa/Freetown'),
(338, 'SM', 'Europe/San_Marino'),
(339, 'SN', 'Africa/Dakar'),
(340, 'SO', 'Africa/Mogadishu'),
(341, 'SR', 'America/Paramaribo'),
(342, 'SS', 'Africa/Juba'),
(343, 'ST', 'Africa/Sao_Tome'),
(344, 'SV', 'America/El_Salvador'),
(345, 'SX', 'America/Lower_Princes'),
(346, 'SY', 'Asia/Damascus'),
(347, 'SZ', 'Africa/Mbabane'),
(348, 'TC', 'America/Grand_Turk'),
(349, 'TD', 'Africa/Ndjamena'),
(350, 'TF', 'Indian/Kerguelen'),
(351, 'TG', 'Africa/Lome'),
(352, 'TH', 'Asia/Bangkok'),
(353, 'TJ', 'Asia/Dushanbe'),
(354, 'TK', 'Pacific/Fakaofo'),
(355, 'TL', 'Asia/Dili'),
(356, 'TM', 'Asia/Ashgabat'),
(357, 'TN', 'Africa/Tunis'),
(358, 'TO', 'Pacific/Tongatapu'),
(359, 'TR', 'Europe/Istanbul'),
(360, 'TT', 'America/Port_of_Spain'),
(361, 'TV', 'Pacific/Funafuti'),
(362, 'TW', 'Asia/Taipei'),
(363, 'TZ', 'Africa/Dar_es_Salaam'),
(364, 'UA', 'Europe/Kiev'),
(365, 'UA', 'Europe/Uzhgorod'),
(366, 'UA', 'Europe/Zaporozhye'),
(367, 'UG', 'Africa/Kampala'),
(368, 'UM', 'Pacific/Johnston'),
(369, 'UM', 'Pacific/Midway'),
(370, 'UM', 'Pacific/Wake'),
(371, 'US', 'America/New_York'),
(372, 'US', 'America/Detroit'),
(373, 'US', 'America/Kentucky/Louisville'),
(374, 'US', 'America/Kentucky/Monticello'),
(375, 'US', 'America/Indiana/Indianapolis'),
(376, 'US', 'America/Indiana/Vincennes'),
(377, 'US', 'America/Indiana/Winamac'),
(378, 'US', 'America/Indiana/Marengo'),
(379, 'US', 'America/Indiana/Petersburg'),
(380, 'US', 'America/Indiana/Vevay'),
(381, 'US', 'America/Chicago'),
(382, 'US', 'America/Indiana/Tell_City'),
(383, 'US', 'America/Indiana/Knox'),
(384, 'US', 'America/Menominee'),
(385, 'US', 'America/North_Dakota/Center'),
(386, 'US', 'America/North_Dakota/New_Salem'),
(387, 'US', 'America/North_Dakota/Beulah'),
(388, 'US', 'America/Denver'),
(389, 'US', 'America/Boise'),
(390, 'US', 'America/Phoenix'),
(391, 'US', 'America/Los_Angeles'),
(392, 'US', 'America/Metlakatla'),
(393, 'US', 'America/Anchorage'),
(394, 'US', 'America/Juneau'),
(395, 'US', 'America/Sitka'),
(396, 'US', 'America/Yakutat'),
(397, 'US', 'America/Nome'),
(398, 'US', 'America/Adak'),
(399, 'US', 'Pacific/Honolulu'),
(400, 'UY', 'America/Montevideo'),
(401, 'UZ', 'Asia/Samarkand'),
(402, 'UZ', 'Asia/Tashkent'),
(403, 'VA', 'Europe/Vatican'),
(404, 'VC', 'America/St_Vincent'),
(405, 'VE', 'America/Caracas'),
(406, 'VG', 'America/Tortola'),
(407, 'VI', 'America/St_Thomas'),
(408, 'VN', 'Asia/Ho_Chi_Minh'),
(409, 'VU', 'Pacific/Efate'),
(410, 'WF', 'Pacific/Wallis'),
(411, 'WS', 'Pacific/Apia'),
(412, 'YE', 'Asia/Aden'),
(413, 'YT', 'Indian/Mayotte'),
(414, 'ZA', 'Africa/Johannesburg'),
(415, 'ZM', 'Africa/Lusaka'),
(416, 'ZW', 'Africa/Harare');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` tinyint(4) UNSIGNED NOT NULL DEFAULT '1',
  `user_ip` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_image`, `user_name`, `user_mobile`, `user_location`, `user_type`, `user_ip`, `user_status`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Foysal', NULL, NULL, 1, NULL, 0, 'admin@gmail.com', '$2y$10$u37m.b9iV10X7hV7dDtCROneUSge4EWUPbSjz.v1lQM4zd1ST5BEW', 'zamIdJY8zqaAcNV6sTMMckDQ0VO6R9bu1dCWzpweN93JwMSXiGIwzlixuSLL', '2017-12-04 09:04:33', '2017-12-04 09:04:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pullings`
--
ALTER TABLE `pullings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rss_links`
--
ALTER TABLE `rss_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timezones`
--
ALTER TABLE `timezones`
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
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pullings`
--
ALTER TABLE `pullings`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rss_links`
--
ALTER TABLE `rss_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `timezones`
--
ALTER TABLE `timezones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=417;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
