-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 04:07 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ustora_shopping_mall`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Asus', 'One day very famous laptop', 1, '2021-12-05 09:04:05', '2021-12-13 06:22:01'),
(2, 'Samsung Galaxy s5', 'A Fashionable Brand', 0, '2021-12-05 09:10:31', '2021-12-13 06:19:51'),
(3, 'LG Leon', 'Very old model', 1, '2021-12-05 09:12:10', '2021-12-07 10:04:27'),
(4, 'Nokia Lumia', 'Once upon a time, very popular Brand', 0, '2021-12-05 09:34:26', '2021-12-13 06:20:02'),
(5, 'Samsung gallaxy note 4', 'A Brand phone', 0, '2021-12-05 21:32:20', '2021-12-13 06:19:57'),
(6, 'iPhone', 'A costly smart phone', 0, '2021-12-07 11:15:10', '2021-12-13 06:20:15'),
(8, 'lenovo', 'LENOVO IDEAPAD 81', 1, '2021-12-10 10:40:10', '2021-12-10 10:43:19'),
(9, 'Tuatara car', 'The SSC Tuatara Claims', 1, '2021-12-10 10:53:42', '2021-12-10 10:53:42'),
(10, 'Dell', 'Dell XPS  An Highly Advanced New', 1, '2021-12-11 21:56:02', '2021-12-11 23:47:26'),
(11, 'APPLE', 'Modern Minimalist Graphic Design.', 1, '2021-12-11 21:59:51', '2021-12-11 23:47:05'),
(12, 'Apache', 'update brand', 1, '2021-12-11 23:46:31', '2021-12-11 23:46:31'),
(13, 'Hero', 'Very comportable bike', 0, '2021-12-11 23:48:31', '2021-12-13 06:13:52'),
(14, 'Toyota', 'GENESIS IMPRESSES WITH SLEEKER', 1, '2021-12-12 00:04:57', '2021-12-12 00:04:57'),
(15, 'Easy', 'famous brand', 1, '2021-12-12 02:01:05', '2021-12-12 02:01:05'),
(16, 'NIKON', 'NIKON CORPORATION, NIKON D5300', 1, '2022-06-13 01:29:49', '2022-06-13 01:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', 'very nice', 0, '2021-12-04 23:09:22', '2021-12-05 23:06:22'),
(2, 'Laptop', 'Very Fashionable laptop', 1, '2021-12-04 23:41:43', '2021-12-05 01:37:17'),
(3, 'Car', 'very fashion', 1, '2021-12-04 23:48:45', '2021-12-04 23:48:45'),
(4, 'Desktop', 'Desktop is very friendly useable', 1, '2021-12-05 00:50:58', '2021-12-08 09:18:53'),
(6, 'Bike', 'Very altra modern bike are coming', 1, '2021-12-09 02:33:47', '2021-12-10 10:41:51'),
(7, 'T-Shirts', 'Couple T-Shirts', 1, '2021-12-12 01:59:06', '2021-12-12 01:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(23, 'Araf', 'Islam Fabin', 'asulymoon84@gmail.com', '$2y$10$L4InHCXIuRO1yxkCBM1jZOnmQBsZngLRaHLolHEW5kFZayObjFs.O', '65456456', 'Noakhali', '2022-06-23 22:51:09', '2022-06-23 22:51:09'),
(24, 'Araf', 'Islam Fabin', 'ustora84@gmail.com', '$2y$10$7463YHBKd7Z7noggn6OauuRjzadoJKxvLXS8A6mBKcgbmtsdT2HdG', '456345', 'Noakhali', '2022-06-28 20:02:53', '2022-06-28 20:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_05_043639_create_categories_table', 2),
(6, '2021_12_05_144658_create_brands_table', 3),
(7, '2021_12_09_021115_create_products_table', 4),
(8, '2021_12_14_121605_create_customers_table', 5),
(9, '2022_06_13_141350_create_sliders_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,3) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_quantity`, `short_description`, `long_description`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 2, 11, 'Apple\'s MacBook', 200000.000, 55, 'Apple\'s MacBook Air takes laptop reliability crown\r\nConsumer Reports\' survey shows that just 7 out of every 100 Airs breaks down in the first three years, the lowest rate of all notebooks', '<p><img alt=\"macbook air\" src=\"https://images.techhive.com/images/article/2014/12/macbook_air-100538062-large.jpg?auto=webp&amp;quality=85,70\" /></p>\r\n\r\n<p>Apple</p>\r\n\r\n<ul>\r\n	<li>&nbsp;\r\n	<p>&nbsp;</p>\r\n	</li>\r\n	<li>&nbsp;\r\n	<p><a href=\"https://www.computerworld.com/resources/228402/securing-cloud-native-apps-and-ci-cd-pipelines-at-scale\">Securing Cloud-Native Apps and CI/CD Pipelines at Scale</a></p>\r\n	</li>\r\n	<li><a href=\"https://www.computerworld.com/resources/228453/roadmap-to-intelligent-assisted-support\"><img src=\"https://idg.blueconic.net/rest/contentStores/d90c9555-d728-4305-91b5-a476232189d4/items/www.computerworld.com%252Fresources%252F228453%252Froadmap-to-intelligent-assisted-support/image?etag=1639284510327\" /></a>\r\n	<p><a href=\"https://www.computerworld.com/resources/228453/roadmap-to-intelligent-assisted-support\">Roadmap to Intelligent Assisted Support</a></p>\r\n	</li>\r\n</ul>\r\n\r\n<p><a href=\"https://www.computerworld.com/resources\">SEE ALL WHITE PAPERS</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Apple&#39;s MacBook Air is the most reliable laptop on the market, according to a survey of nearly 60,000 American consumers conducted recently by&nbsp;<em>Consumer Reports</em>.</p>\r\n\r\n<p>The ultra-light notebook has an estimated failure rate of 7% within the first three years of ownership, according to the publication&#39;s poll of people who purchased a laptop in the last five years.</p>\r\n\r\n<p>Apple&#39;s other primary line of laptops, the pricier MacBook Pro, came in with a failure rate of 9%. Combined, Apple&#39;s mobile PCs turned in a failure rate of 10%, the lowest of any OEM (original equipment manufacturer).</p>\r\n\r\n<p><strong>[ Related:&nbsp;<a href=\"https://www.computerworld.com/article/3318243/apple-mac/apples-place-is-in-the-enterprise.html\">Apple&#39;s place is in the enterprise</a>&nbsp;]</strong></p>', 'product-image/Apple\'s MacBook.jpg', 1, '2021-12-10 00:00:50', '2021-12-13 06:24:00'),
(2, 2, 3, 'Dell Laptop', 5200000.000, 520, 'Acer TravelMate P648-M-73LE 14\" Core i7 6500U Notebook\r\nHp Probook 1040 G3 Intel Core I7-6600u 14.0 Qhd LED Touch Webcam Intel HD\r\nDell Xps 13 9350 I7-6560u 13.3\" Notebook Bundle - Gold\r\nHP Elite X2 1012 G1 4g Laptop L5h09ea\r\nApple MacBook Pro MJLQ2 15\" Retina Intel Core i7 Notebook\r\nHP Omen By 17-W203NI 1TP03EA\r\nAsus Zenbook Ux310uq - 13.3\" 90nb0cl1-m05660\r\nHP Omen By 15-AX202NI 1DM32EA', '<p>Product Detail</p>\r\n\r\n<p>We sale Brand New Laptop,with 2 years international warranty from the Manufacturer.<br />\r\n<br />\r\nMacbook Pro 17&rdquo; i7 2.20GHz<br />\r\nHP Pavilion DV7-3160US 17.3-Inch Laptop (Black)<br />\r\nToshiba Qosmio X500 18.4 inch Laptop<br />\r\nASUS Republic of Gamers G73JH-A1 17-Inch Gaming Laptop<br />\r\nAlienware Laptops<br />\r\nProline Laptops<br />\r\nGigabyte Laptops<br />\r\nMecer Laptops<br />\r\nToshiba Laptops<br />\r\nHP G62 Laptop<br />\r\nHP 250 G5<br />\r\nHP Spectre<br />\r\nHP Pavilion i7 gaming laptop<br />\r\nDELL LATITUDE E6430<br />\r\nLenovo Y5070 Intel Core i7-4720HQ Gaming Laptop<br />\r\nApple MacBook Pro13 inch<br />\r\nMSI GP72 7RE Leopard Pro<br />\r\nHP15-ay005ni<br />\r\nAsus i7-6700<br />\r\nDell Xps 13 9350 I7-6560u 13.3&quot; Notebook<br />\r\nAsus VivoBook Pro N552VW-XO174T 15.6&quot; Core i7<br />\r\nLenovo ThinkPad T460S 14.0&quot; Intel Core i7 Notebook<br />\r\nHP Elitebook Folio G1 Core M5 Notebook<br />\r\nDell Latitude E7470 14&quot; Intel Core i5 Notebook<br />\r\nHP Zbook Studio G3 6TH Gen Workstation Notebook Intel Xeon E3-1545V5 2.9GHZ 16GB<br />\r\nLenovo Thinkpad X1 Carbon 6TH Gen Ultrabook Intel Dual I7-6500U 2.50GHZ 8GB 512GB 1</p>\r\n\r\n<p><br />\r\n<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p><img src=\"https://www.tradeford.com/pimages/l/6/860326.jpg\" /></p>', 'product-image/hp.jpg', 1, '2021-12-10 10:36:05', '2021-12-13 07:14:31'),
(3, 2, 8, 'lenovo', 520000.000, 520, 'LENOVO IDEAPAD 81Y4002RUS GAMING LATOP', '<p><a href=\"https://ovalo24miami.com/wp-content/uploads/LENOVO-IDEAPAD-81Y4002RUS-GAMING-LATOP-1.jpg\"><img alt=\"\" src=\"https://ovalo24miami.com/wp-content/uploads/LENOVO-IDEAPAD-81Y4002RUS-GAMING-LATOP-1.jpg\" style=\"height:600px; width:600px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Product images are referential,&nbsp;<a href=\"https://ovalo24miami.com/terms-and-conditions/\">see Terms and Conditions</a></p>\r\n\r\n<h1>LENOVO IDEAPAD 81Y4002RUS GAMING LATOP</h1>\r\n\r\n<p><strong>Part Number:</strong>&nbsp;81Y4002RUS<strong>Condition:&nbsp;</strong>NEW</p>\r\n\r\n<p>INTEL CORE I7 I7-10750H, 8GB RAM MEMORY, 512GB SOLID STATE DRIVE, NVIDIA GEFOR</p>', 'product-image/lenovo.jpg', 1, '2021-12-10 10:49:31', '2021-12-10 10:49:31'),
(4, 3, 14, 'Genesis', 2500000.000, 15000, 'The SSC Tuatara Claims \"Fastest Car in the World\" Title (Again)', '<p><a href=\"http://genesis.com/\" onclick=\"return phoenixTrackClickEvent(this, event);\" target=\"_blank\">Genesis</a>&nbsp;has just unveiled exterior images of the all-new G90 flagship sedan and it might be our favorite sedan of the year.</p>\r\n\r\n<p><img alt=\"Genesis\" src=\"https://airows.com/.image/t_share/MTg1NzI0MDEwOTAwNzU5OTU2/342.png\" style=\"height:805px; width:1340px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"http://genesis.com/\" onclick=\"return phoenixTrackClickEvent(this, event);\" target=\"_blank\">Genesis</a></p>\r\n\r\n<p>The sleek, modern luxury sedan&nbsp;leads with ultra-thin headlamps and a single panel clamshell hood fused to the fenders for a streamlined visual impression with reduced gaps.&nbsp;The wheels,</p>', 'product-image/Genesis.jpg', 1, '2021-12-10 10:56:51', '2021-12-12 00:06:52'),
(5, 2, 1, 'ASUS', 250000.000, 250, 'ASUS Laptop L510 Ultra Thin Laptop, 15.6” FHD Display, Intel Celeron N4020 Processor, 4GB RAM, 128GB Storage, Windows 10 Home in S Mode, 1 Year Microsoft 365, Star Black, L510MA-DS04', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Price:</td>\r\n			<td>$272.00$272.00</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>$99.09 Shipping &amp; Import Fees Deposit to Bangladesh&nbsp;<a href=\"javascript:void(0)\">Details&nbsp;</a></p>\r\n\r\n<p>Available at a lower price from&nbsp;<a href=\"https://www.amazon.com/gp/offer-listing/B08XB41YVQ/ref=dp_olp_pn\">other sellers</a>&nbsp;that may not offer free Prime shipping.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Series</td>\r\n			<td>L510MA-DS04</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>ASUS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Specific Uses For Product</td>\r\n			<td>Personal, Gaming, Business</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Screen Size</td>\r\n			<td>15.6</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Operating System</td>\r\n			<td>Windows 10 Home</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CPU Manufacturer</td>\r\n			<td>Intel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Card Description</td>\r\n			<td>Integrated</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Color</td>\r\n			<td>Black</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hard Disk Size</td>\r\n			<td>128 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Processor Count</td>\r\n			<td>1</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><a href=\"javascript:void(0)\">See more</a></p>\r\n\r\n<hr />\r\n<h1>About this item</h1>\r\n\r\n<ul>\r\n	<li>Efficient Intel Celeron N4020 Processor (4M Cache, up to 2.8 GHz)</li>\r\n	<li>15.6&rdquo; FHD (1920x1080) Display</li>\r\n	<li>128GB eMMC Flash Storage and 4GB DDR4 RAM</li>\r\n	<li>Comes with Windows 10 in S mode and a FREE upgrade to Windows 11 (when available1)</li>\r\n	<li>Slim and Portable: 0.72&rdquo; thin and weighs only 3.59 lbs (battery included)</li>\r\n</ul>\r\n\r\n<p>&rsaquo;&nbsp;<a href=\"https://www.amazon.com/ASUS-Display-Processor-Microsoft-L510MA-DS04/dp/B08XB41YVQ#productDetails\">See more product details</a></p>\r\n\r\n<p><a href=\"https://www.amazon.com/ASUS-Display-Processor-Microsoft-L510MA-DS04/dp/B08XB41YVQ#HLCXComparisonWidget_feature_div\">Compare with similar items</a></p>\r\n\r\n<p><a href=\"https://www.amazon.com/gp/offer-listing/B08XB41YVQ/ref=dp_olp_NEW_mbc?ie=UTF8&amp;condition=NEW\">New (4) from&nbsp;$272.00</a></p>\r\n\r\n<hr />\r\n<p>There is a newer model of this item:</p>\r\n\r\n<p><a href=\"https://www.amazon.com/ASUS-L510-Business-Computer-Processor-dp-B09H2ZCG7N/dp/B09H2ZCG7N/ref=dp_ob_image_ce\"><img alt=\"ASUS L510 15.6&quot; FHD Ultra Thin Windows 10 Pro Business Laptop Computer, Intel Celeron N4020 Processor, 4GB DDR4 RAM, 128GB eMMC, Backlit Keyboard, 1 Year Office 365, 32GB Flash Drive\" src=\"https://m.media-amazon.com/images/I/81QFAyYgn4L._SR75,75_.jpg\" /></a></p>\r\n\r\n<p><a href=\"https://www.amazon.com/ASUS-L510-Business-Computer-Processor-dp-B09H2ZCG7N/dp/B09H2ZCG7N/ref=dp_ob_title_ce\">ASUS L510 15.6&quot; FHD Ultra Thin Windows 10 Pro Business Laptop Computer, Intel Celeron N4020 Processor, 4GB DDR4 RAM, 128GB eMMC, Backlit Keyboard, 1 Year Office 365, 32GB Flash Drive</a><br />\r\n$359.00<br />\r\n&nbsp;<a href=\"https://www.amazon.com/product-reviews/B09H2ZCG7N/ref=dp_ob_custreviews_ce_cm_cr_acr_txt?showViewpoints=1\">(1)</a><br />\r\nIn Stock.</p>', 'product-image/ASUS.jpg', 1, '2021-12-11 22:04:40', '2021-12-11 23:44:31'),
(6, 6, 12, 'Tvs Apache', 250000.000, 650, 'Bad News! TVS again increased the prices of Apache bike models, know how much the prices increased', '<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://navbharattimes.indiatimes.com/photo/msid-85031797,imgsize-209110/pic.jpg\" style=\"width:1920px\" /></p>\r\n\r\n<h3>Highlights</h3>\r\n\r\n<ul>\r\n	<li>Bumper sales of TVS Apache bikes in India</li>\r\n	<li>Bike with great looks and powerful features</li>\r\n	<li>The craze about this bike among the youth</li>\r\n</ul>\r\n\r\n<p><strong>New Delhi.<br />\r\nTVS Apache Bikes Variants Price Hike:&nbsp;</strong>TVS Motor Company has once again increased the prices of all models and variants of its popular bike TVS Apache, which is bad news for Apache bike lovers. This time TVS has increased the prices of Apache bike models from Rs 3000 to Rs 5000, so those who want to buy this cool bike of TVS, their pocket is going to be a big burden. Let us tell you which models of TVS Apache were priced earlier and what are the new prices now?</p>\r\n\r\n<p>read this also-<a href=\"https://navbharattimes.indiatimes.com/auto/car-bikes/electric-cars-in-india-price-features-tata-mahindra-mg-hyundai-electric-cars-sale-hike-bcz-of-petrol-price/articleshow/85030773.cms\"><strong>Electric Car: These electric cars will get rid of expensive petrol and diesel, price starts from 4.50 lakhs</strong></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>just look at the increased prices</strong><br />\r\nThere are bumper sales of TVS Apache bike models in India. Equipped with a great sporty look and powerful features, this bike is quite popular among the youth. Talking about the prices of these bikes, the price of drum and disc variants of TVS Apache RTR 160 has gone up to Rs 1,06,365 and Rs 1,09,365 respectively after an increase of Rs 3000. At the same time, the price of TVS Apache RTR 180 model has increased by Rs 3500 and now its price has gone up to Rs 1,13,065.</p>', 'product-image/Tvs Apache.jpg', 1, '2021-12-11 23:52:31', '2021-12-11 23:52:31'),
(7, 6, 12, 'Apache X21', 250000.000, 2563, 'TVS Apache X21 Racer Concept', '<p>&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Sports</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Engine cc (Displacement)</td>\r\n			<td>212.4 cc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Maximum Power</td>\r\n			<td>Not Announced</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Maximum Torque</td>\r\n			<td>Not Announced</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Number of Cylinders</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Number of Gears</td>\r\n			<td>5</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>TVS Apache X21 Racer Concept: Pros &amp; Cons</p>\r\n\r\n<p>Pros</p>\r\n\r\n<ul>\r\n	<li>Fuel Injection\r\n	<ul>\r\n		<li><a href=\"javascript:void(0);\">&nbsp;Agree</a></li>\r\n		<li><a href=\"javascript:void(0);\">&nbsp;Disagree</a></li>\r\n	</ul>\r\n	(31 of 33 agree)</li>\r\n	<li>All-Digital Instrument Console\r\n	<ul>\r\n		<li><a href=\"javascript:void(0);\">&nbsp;Agree</a></li>\r\n		<li><a href=\"javascript:void(0);\">&nbsp;Disagree</a></li>\r\n	</ul>\r\n	(27 of 28 agree)</li>\r\n	<li>Powerful Engine\r\n	<ul>\r\n		<li><a href=\"javascript:void(0);\">&nbsp;Agree</a></li>\r\n		<li><a href=\"javascript:void(0);\">&nbsp;Disagree</a></li>\r\n	</ul>\r\n	(26 of 26 agree)</li>\r\n	<li>Efficient Braking System\r\n	<ul>\r\n		<li><a href=\"javascript:void(0);\">&nbsp;Agree</a></li>\r\n		<li><a href=\"javascript:void(0);\">&nbsp;Disagree</a></li>\r\n	</ul>\r\n	(23 of 25 agree)</li>\r\n</ul>\r\n\r\n<p>Cons</p>\r\n\r\n<p><img alt=\"TVS Apache X21 Racer Concept\" src=\"https://ic1.maxabout.us/autos/tw_india//T/2016/2/tvs-apache-x21-racer-concept-front-3-quarter-2.jpg/thumb/380\" /></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>TVS X21 Racer Concept was showcased at 2016 Auto Expo. It is powered by a 212.4 cc, single cylinder engine that is liquid cooled and fuel injected. The undisclosed amount of power makes it good for 0-100 kmph in just 8.7 seconds and top speed of 148 kmph. It still uses the 5-speed gearbox and carries 280 mm/240 mm of front as well as rear disc brake. It was showcased with Michelin tyres and still needs a lot of research for a road legal design on its advanced frame. Once on road, it will rival Pulsar 220F in its segment.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'product-image/Apache X21.jpg', 1, '2021-12-11 23:57:36', '2021-12-11 23:57:36'),
(8, 3, 9, 'Telsa mortors', 450000.000, 4500, 'Namecheap Shared Hosting Features Zero Downtime, Unlimited Websites &\r\nUnmetered Bandwidth', '<h2>File Specifications:</h2>\r\n\r\n<ul>\r\n	<li>Resolution:&nbsp;1288x825</li>\r\n	<li>Name:\r\n	<h1>Download Black Model X Tesla Motors Modern Car Png - Tesla Model X Background, Transparent Png</h1>\r\n	</li>\r\n	<li>License:&nbsp;Personal Use</li>\r\n	<li>File Format:&nbsp;PNG</li>\r\n	<li><img alt=\"Download Black Model X Tesla Motors Modern Car Png - Tesla Model X Background, Transparent Png \" src=\"https://www.pngfind.com/pngs/m/14-142547_download-black-model-x-tesla-motors-modern-car.png\" /></li>\r\n	<li>\r\n	<h2>About:</h2>\r\n\r\n	<p>Download Black Model X Tesla Motors Modern Car Png - Tesla Model X Background, Transparent Png is a hd free transparent png image, which is classified into jewellery model png,tesla logo png,model png. If it is valuable to you, please share it.</p>\r\n	</li>\r\n	<li>File Size:&nbsp;912 KB</li>\r\n</ul>', 'product-image/Telsa mortors.png', 1, '2021-12-12 00:15:11', '2021-12-12 00:15:11'),
(9, 3, 14, 'vector', 530000.000, 523, 'vector, wallpaper, modern, car, cars, vehicle, cool', '<h1>vector, wallpaper, modern, car, cars, vehicle, cool</h1>\r\n\r\n<p><a href=\"http://www.desktopwallpaperhd.net/view/vector-wallpaper-modern-car-cars-vehicle-cool-143245.html\" target=\"_blank\"><img alt=\"\" src=\"http://www.desktopwallpaperhd.net/thumbs/14/d/vector-wallpaper-modern-car-cars-vehicle-cool-143245.jpg\" /></a></p>\r\n\r\n<p>vector wallpaper modern car cars vehicle cool</p>\r\n\r\n<p>1920 x 1200, 114kb</p>\r\n\r\n<p>Tags:&nbsp;<a href=\"http://www.desktopwallpaperhd.net/tag/vector.html\">vector</a>&nbsp;wallpaper&nbsp;<a href=\"http://www.desktopwallpaperhd.net/tag/modern.html\">modern</a>&nbsp;<a href=\"http://www.desktopwallpaperhd.net/tag/car.html\">car</a>&nbsp;cars&nbsp;<a href=\"http://www.desktopwallpaperhd.net/tag/vehicle.html\">vehicle</a>&nbsp;<a href=\"http://www.desktopwallpaperhd.net/tag/cool.html\">cool</a></p>\r\n\r\n<p>Image:&nbsp;<a href=\"http://www.desktopwallpaperhd.net/wallpapers/14/d/vector-wallpaper-modern-car-cars-vehicle-cool-143245.jpg\">Vector Wallpaper Modern Car Cars Vehicle Cool</a></p>\r\n\r\n<p>Category:&nbsp;<a href=\"http://www.desktopwallpaperhd.net/vector-hd-wallpapers.html\">Vector</a><br />\r\n<small>Image type:&nbsp;JPG</small></p>\r\n\r\n<p><a href=\"http://www.desktopwallpaperhd.net/view/vector-wallpaper-modern-car-cars-vehicle-cool-143245.html\" target=\"_blank\">Download</a></p>\r\n\r\n<p>PC: To set the image as wallpaper, click on image. After that right click on big image and choose &#39;Set as</p>', 'product-image/vector.jpg', 1, '2021-12-12 01:55:41', '2021-12-12 01:55:41'),
(10, 7, 15, 'CoupleT-shirt', 1000.000, 523, 'Add a new t-shirt collection.Briar Standard Semi Cotton Couple T-ShirtsOnly at Rs.660/-Best PriceFree Shipping\r\nDownload App:https://play.google.com/store/apps/details?id=com.shopping.store.zebtek', '<h1>Couple T-Shirts</h1>\r\n\r\n<p>₹ 660/&nbsp;pair&nbsp;Get Latest Price</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Minimum Order Quantity</td>\r\n			<td>1 pair</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Add a new t-shirt collection.Briar Standard Semi Cotton Couple T-ShirtsOnly at Rs.660/-Best PriceFree Shipping<br />\r\nDownload App:https://play.google.com/store/apps/details id=com.shopping.store.zebtek</p>\r\n\r\n<p>View Complete Details</p>', 'product-image/CoupleT-shirt.jpeg', 1, '2021-12-12 02:04:14', '2021-12-12 02:04:14'),
(11, 4, 11, 'Apple', 60000.000, 530, 'A desktop computer is a computer that fits on or under a desk. They utilize peripheral devices for interaction, such as a keyboard and mouse for input, and display devices like a monitor, projector, or television. Desktop computers can have a horizontal or vertical (tower) form factor, or be combined with a monitor to create an All-in-One computer. Unlike a laptop, which is portable, desktop computers are generally made to stay at one location.', '<h2><img alt=\"Desktop computer.\" src=\"https://www.computerhope.com/jargon/d/desktop-computer.jpg\" style=\"height:263px; width:350px\" /></h2>\r\n\r\n<p>A&nbsp;<strong>desktop computer</strong>&nbsp;is a&nbsp;<a href=\"https://www.computerhope.com/jargon/c/computer.htm\">computer</a>&nbsp;that fits on or under a</p>\r\n\r\n<h2>Desktop computer overview</h2>\r\n\r\n<p>Below is a picture of the main parts (<a href=\"https://www.computerhope.com/jargon/c/component.htm\">components</a>) that help make up a computer. In the picture, you can see a desktop computer,&nbsp;<a href=\"https://www.computerhope.com/jargon/f/fpdispla.htm\">flat-panel display</a>,&nbsp;<a href=\"https://www.computerhope.com/jargon/s/speaker.htm\">speakers</a>,&nbsp;<a href=\"https://www.computerhope.com/jargon/k/keyboard.htm\">keyboard</a>, and&nbsp;<a href=\"https://www.computerhope.com/jargon/m/mouse.htm\">mouse</a>. We&#39;ve also labeled each of the&nbsp;<a href=\"https://www.computerhope.com/jargon/i/inputdev.htm\">input devices</a>&nbsp;and&nbsp;<a href=\"https://www.computerhope.com/jargon/o/outputde.htm\">output devices</a>.</p>\r\n\r\n<p><img alt=\"Desktop computer\" src=\"https://www.computerhope.com/cdn/big/computer.jpg\" style=\"height:560px; width:686px\" /></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.computerhope.com/issues/ch000997.htm\">What does the inside of a computer look like?</a></li>\r\n</ul>\r\n\r\n<h2>When did the first desktops appear?</h2>\r\n\r\n<p>The first desktop computer was the&nbsp;<a href=\"https://www.computerhope.com/comp/hp.htm\">Hewlett Packard</a>&nbsp;9100A, introduced in&nbsp;<a href=\"https://www.computerhope.com/history/1968.htm\">1968</a>. Since then, there were many millions of desktop computers released and used throughout the world.</p>\r\n\r\n<p>Note</p>\r\n\r\n<p>There is not a specific person who is responsible for creating the desktop computers we use today. Over their evolution, many individuals and companies have made significant contributions. For a complete history of computers, see:&nbsp;<a href=\"https://www.computerhope.com/issues/ch000984.htm\">When was the first computer invented?</a></p>', 'product-image/Apple.jpg', 1, '2021-12-12 02:11:07', '2021-12-12 02:11:07'),
(12, 4, 10, 'dell', 45000.000, 85, 'Origins\r\n\r\nApple II computer\r\nPrior to the widespread use of microprocessors, a computer that could fit on a desk was considered remarkably small; the type of computers most commonly used were minicomputers, which were extremely large. Early computers took up the space of a whole room. Minicomputers generally fit into one or a few refrigerator-sized racks.', '<p>&nbsp;</p>\r\n\r\n<p>A&nbsp;<strong>desktop computer</strong>&nbsp;is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Personal_computer\">personal computer</a>&nbsp;designed for regular use at a single location on or near a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Desk\">desk</a>&nbsp;due to its size and power requirements. The most common configuration has a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_case\">case</a>&nbsp;that houses the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Power_supply_unit_(computer)\">power supply</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Motherboard\">motherboard</a>&nbsp;(a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Printed_circuit_board\">printed circuit board</a>&nbsp;with a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Microprocessor\">microprocessor</a>&nbsp;as the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Central_processing_unit\">central processing unit</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_memory\">memory</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bus_(computing)\">bus</a>, certain&nbsp;<a href=\"https://en.wikipedia.org/wiki/Peripherals\">peripherals</a>&nbsp;and other electronic components),&nbsp;<a href=\"https://en.wikipedia.org/wiki/Disk_storage\">disk storage</a>&nbsp;(usually one or more&nbsp;<a href=\"https://en.wikipedia.org/wiki/Hard_disk_drive\">hard disk drives</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Solid_state_drive\">solid state drives</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Optical_disc_drive\">optical disc drives</a>, and in early models a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Floppy_disk_drive\">floppy disk drive</a>); a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_keyboard\">keyboard</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_mouse\">mouse</a>&nbsp;for&nbsp;<a href=\"https://en.wikipedia.org/wiki/Input_(computer_science)\">input</a>; and a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_monitor\">computer monitor</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_speakers\">speakers</a>, and, often, a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Printer_(computing)\">printer</a>&nbsp;for output. The case may be oriented&nbsp;<a href=\"https://en.wikipedia.org/wiki/Horizontal_and_vertical\">horizontally or vertically</a>&nbsp;and placed either underneath, beside, or on top of a desk.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://en.wikipedia.org/wiki/Desktop_computer#mw-head\">Jump to navigation</a><a href=\"https://en.wikipedia.org/wiki/Desktop_computer#searchInput\">Jump to search</a></p>\r\n\r\n<p><a href=\"https://en.wikipedia.org/wiki/File:Computer_lab_showing_desktop_PCs_warwick.jpg\"><img alt=\"\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/Computer_lab_showing_desktop_PCs_warwick.jpg/220px-Computer_lab_showing_desktop_PCs_warwick.jpg\" style=\"height:155px; width:220px\" /></a></p>\r\n\r\n<p>A computer lab with desktop PCs with flat-panel monitors</p>\r\n\r\n<p><a href=\"https://en.wikipedia.org/wiki/File:Desktop_computer_clipart_-_Yellow_theme.svg\"><img alt=\"\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Desktop_computer_clipart_-_Yellow_theme.svg/220px-Desktop_computer_clipart_-_Yellow_theme.svg.png\" style=\"height:159px; width:220px\" /></a></p>', 'product-image/dell.jpg', 1, '2021-12-12 02:15:12', '2021-12-12 02:15:12'),
(13, 6, 14, 'Ducati motorcycles', 300.000, 300, '“I was trying to understand what quality really means, in a physical and personal way—and how it correlates to advancements in technology,” says Jay. “That’s not exclusive to electric vehicles by any means, but it’s why I felt so strongly about using electric power.” (Source: Bikeexif)', '<p><img alt=\"\" src=\"https://www.financialexpress.com/wp-content/uploads/2019/11/haas-custom-electric-motorcycle-baresteel-stingray-main.jpg\" style=\"height:440px; width:660px\" /></p>\r\n\r\n<p>1/6</p>\r\n\r\n<p>A beautifully crafted body can make a massive difference. Take, for example, Ducati motorcycles &ndash; even if you are a Kawasaki or Honda or Aprillia fan, you&#39;d still agree that Ducati does build some very gorgeous looking motorcycles. Custom motorcycles open a range of avenues for the builder as to what the end result should look like and Canadian builder Jay Donovan of Baresteel Design has clearly made use of all he could for the Stingray. (Source: Bikeexif)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.financialexpress.com/wp-content/uploads/2019/11/haas-custom-electric-motorcycle-baresteel-stingray-chain.jpg\" style=\"height:440px; width:660px\" /></p>', 'product-image/Ducati motorcycles.jpg', 1, '2022-06-18 08:20:14', '2022-06-27 09:25:19');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `heading`, `description`, `link`, `link_name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Harley', 'Slider upload testing', '#', 'Read More', 'uploads/Harley.jpg', 1, '2022-06-13 10:42:17', '2022-06-18 09:05:06'),
(2, 'Bike', 'A collection of the top 52 Cool Bike wallpapers', '#', 'Read More', 'uploads/1655196601.jpg', 0, '2022-06-14 02:50:01', '2022-06-18 09:05:46'),
(3, 'Woman', 'Woman resting on workout at the gym stock photo', '#', 'Read More', 'uploads/1655196794.jpg', 1, '2022-06-14 02:53:14', '2022-06-14 02:53:14'),
(4, 'Ducati', 'Alien but gorgeous motorcycle design – you won’t believe it’s electric', '##', 'Read More', 'uploads/Ducati.jpg', 1, '2022-06-14 03:16:56', '2022-06-27 09:18:26'),
(5, 'bruce', 'bruce-dixon-FyMj92RdUok-unsplash', '#', 'Read More', 'uploads/1655258328.jpg', 0, '2022-06-14 19:58:48', '2022-06-27 09:18:16'),
(6, 'mike', 'mike-von-3MvlGhagq4E-unsplash', '#', 'Read More', 'uploads/1655259592.jpg', 0, '2022-06-14 20:19:56', '2022-06-18 09:04:49'),
(7, 'Super Duke', 'A biker girl wearing black leather jacket sitting on her superbike outside a building.', '#', 'Ktm Super Duke', 'uploads/Super Duke.jpg', 1, '2022-06-14 20:32:11', '2022-06-18 20:28:37'),
(8, 'Pk Bikes', 'Most Beautiful Super Bikes In The World Pk Bikes Collection 2019', '#', 'Read More', 'uploads/Slide.jpg', 1, '2022-06-18 06:52:44', '2022-06-27 09:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'u-Stora', 'ustora_shopping_mall@gmail.com', NULL, '$2y$10$WPnUGNBlMpC/vb/CnI.GoerLm7QBF/qG1PuUxXU4lW7lGGwDF1H3O', 'ARmJYLasZRXdeMIAZxViH5O9mVvqN8FbCE628plFNH3dpMpKj9qa1NF6bzV4', '2021-12-03 22:30:31', '2021-12-03 22:30:31'),
(2, 'U-stora', 'ustora84@gmail.com', NULL, '$2y$10$E2l.dfYoUs1UE7srol.CuOAy1cLKARfXO1kWI4nD5VHtF2bRqjCue', NULL, '2022-06-13 01:20:45', '2022-06-13 01:20:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
