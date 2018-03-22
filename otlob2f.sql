-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 08:10 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otlob2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'macroni', 'ClassicMacaroniSalad_200_xl_1520446670.jpg', NULL, '2018-02-26 06:43:38', '2018-03-07 16:17:51'),
(2, 'frfishes', 'Tilapia_zillii_Kineret_1520458608.jpg', NULL, '2018-02-26 06:51:40', '2018-03-07 19:36:48'),
(3, 'ARsalats', 'landscape-1498859760-chinese-chicken-salad-1_1520448286.jpg', NULL, '2018-02-26 06:52:24', '2018-03-07 16:44:46'),
(5, 'flafel', '23JPFLEX2-articleLarge_1520446934.jpg', NULL, '2018-02-26 06:55:03', '2018-03-07 16:22:14'),
(6, 'sandwitches', '2111767321001_5633550647001_5633286787001-vs_1518722960_1519642754.jpg', NULL, '2018-02-26 08:59:14', '2018-02-26 08:59:14'),
(7, 'ARsoup', '2_1520178555.PNG', NULL, '2018-03-04 13:49:15', '2018-03-04 13:49:15'),
(13, 'ARicee cream', '220px-Ice_Cream_dessert_02_1519678333_1520449124.jpg', NULL, '2018-03-06 17:37:34', '2018-03-07 16:58:44'),
(14, 'meat', 'Wilmington-NC-Restaurants_1519097000_1519678050_1520373115.jpg', NULL, '2018-03-06 19:51:55', '2018-03-06 19:51:55'),
(15, 'pizza', 'gallery-img1_1518994206_1519676695_1520412341.jpg', NULL, '2018-03-07 06:45:41', '2018-03-07 06:45:41'),
(16, 'sweets', '2f946641ff45b8cc6fb0fa6528aaba6b--handmade-christmas-christmas-gifts_1519642584_1520428033.jpg', NULL, '2018-03-07 11:07:13', '2018-03-07 11:07:13'),
(17, 'sweets', '2f946641ff45b8cc6fb0fa6528aaba6b--handmade-christmas-christmas-gifts_1519642584_1520440146.jpg', NULL, '2018-03-07 11:07:36', '2018-03-07 14:29:06'),
(18, 'chicken soup', '5-star-restaurant-on_1518872471_1520428408.jpg', NULL, '2018-03-07 11:13:28', '2018-03-07 11:13:28'),
(19, 'chicken soup', 'restaurant_2999753b_1519096838_1519635144_1520440086.jpg', NULL, '2018-03-07 14:28:06', '2018-03-07 14:28:06'),
(20, 'soups', '2_1520440461.PNG', NULL, '2018-03-07 14:34:21', '2018-03-07 14:34:21'),
(21, 'mosweets', '2f946641ff45b8cc6fb0fa6528aaba6b--handmade-christmas-christmas-gifts_1519642584_1520444869.jpg', NULL, '2018-03-07 15:47:49', '2018-03-07 15:47:49'),
(22, 'fishes', 'Tilapia_zillii_Kineret_1520458412.jpg', NULL, '2018-03-07 19:33:32', '2018-03-07 19:33:32'),
(23, 'ha-fishes', 'Tilapia_zillii_Kineret_1520492094.jpg', NULL, '2018-03-08 04:54:54', '2018-03-08 04:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `name`, `description`, `image`, `cat_id`, `remember_token`, `created_at`, `updated_at`, `quantity`) VALUES
(7, 'Chicken Caesar Salad', 'Crispy iceberg lettuce, with a kick of Freshly grilled all-white chicken mea', 'salad1_1520178043.PNG', 3, NULL, '2018-03-04 13:40:43', '2018-03-04 13:40:43', 5),
(8, 'Buffalo Chicken Salad', 'Sliced fried chicken breast covered with spicy buffalo sauce with lettuce', 'salad2_1520178423.PNG', 3, NULL, '2018-03-04 13:47:03', '2018-03-04 13:47:03', 5),
(9, 'Peri Peri Chicken Salad', 'Sliced tender grilled spicy peri peri chicken breast with lettuce, cherry', 'salade3_1520178506.PNG', 3, NULL, '2018-03-04 13:48:26', '2018-03-04 13:48:26', 10),
(10, 'chicken soup', 'chicken soupchicken soupchicken soup', 'easy-chicken-noodle-soup-23912-1_1520448482.jpg', 7, NULL, '2018-03-04 13:50:44', '2018-03-07 16:48:02', 15),
(11, 'delcious ice cream', 'delcious ice cream', 'landscape-1497238977-delish-mason-jar-ice-cream-3_1520449491.jpg', 13, NULL, '2018-03-06 18:08:44', '2018-03-07 17:04:51', 12),
(13, 'shwrma', 'ggggggg', 'gallery-img4_1519096881_1519677636_1520374492.jpg', 14, NULL, '2018-03-06 20:14:52', '2018-03-06 20:14:52', 12),
(14, 'fish Parmesan', 'Fried fish breast with Italian parmesan breading covered with a rich tomato sauce, melted mozzarella and parmesan cheese', 'Tilapia_zillii_Kineret_1520448036.jpg', 2, NULL, '2018-03-07 11:15:16', '2018-03-07 16:40:36', 12),
(15, 'meat soup', 'meat soupmeat soupmeat soup', '2_1520441067.PNG', 20, NULL, '2018-03-07 14:44:27', '2018-03-07 14:44:27', 12),
(16, 'bescots', 'bescotsbescotsbescots', '220px-Ice_Cream_dessert_02_1519678333_1520445014.jpg', 21, NULL, '2018-03-07 15:49:23', '2018-03-07 15:50:14', 12),
(17, 'Chicken Sweet and Sour', 'A Chinese favorite of stir-fried chicken breast cubes with colored peppers, onions, and pineapples stirred in our signature sweet and', '12_1520447468.PNG', 1, NULL, '2018-03-07 16:30:31', '2018-03-07 16:31:08', 15),
(18, 'Japanese Chicken Katsu', 'Fried chicken breast served on sauteed carrots and green beans along with the japanese curry sauce and Egyptian white rice on the side.', '11_1520447568.PNG', 1, NULL, '2018-03-07 16:32:36', '2018-03-07 16:32:48', 14),
(19, 'fish Fatta With Yogurt Sauce', 'Fatta served with yellow long grain rice and crunchy bread along with the delicious yogurt sauce on the side.', '3255188063_b12760a10e_1520448158.jpg', 2, NULL, '2018-03-07 16:42:38', '2018-03-07 16:42:38', 15),
(20, 'Falafel Sandwich', 'Falafel with sesame, mix spices, rocca and oriental salad', '23JPFLEX2-articleLarge_1520448361.jpg', 5, NULL, '2018-03-07 16:46:01', '2018-03-07 16:46:01', 12),
(21, 'Creamy Mushroom soup', 'Blended fresh mushrooms and cream soup and served with croutons.', '1_1520448789.PNG', 7, NULL, '2018-03-07 16:53:09', '2018-03-07 16:53:09', 16),
(22, 'delichous fish', 'delichous fishdelichous fishdelichous fish', '3255188063_b12760a10e_1520458523.jpg', 2, NULL, '2018-03-07 19:35:23', '2018-03-07 19:35:23', 12),
(23, 'delichous fish', 'delichous fishdelichous fish', '3255188063_b12760a10e_1520492164.jpg', 23, NULL, '2018-03-08 04:56:04', '2018-03-08 04:56:04', 16),
(24, 'like fish', 'dffffff', '5-star-restaurant-on_1518872471_1520492209.jpg', 23, NULL, '2018-03-08 04:56:49', '2018-03-08 04:56:49', 12);

-- --------------------------------------------------------

--
-- Table structure for table `meal_ord`
--

CREATE TABLE `meal_ord` (
  `id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `meal_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meal_ord`
--

INSERT INTO `meal_ord` (`id`, `quantity`, `order_id`, `meal_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 1, 63, 7, NULL, '2018-03-05 14:53:12', '2018-03-05 14:53:12'),
(13, 1, 63, 8, NULL, '2018-03-05 14:53:12', '2018-03-05 14:53:12'),
(14, 1, 65, 7, NULL, '2018-03-05 20:25:42', '2018-03-05 20:25:42'),
(15, 2, 66, 7, NULL, '2018-03-06 06:19:14', '2018-03-06 06:19:14'),
(16, 2, 66, 8, NULL, '2018-03-06 06:19:14', '2018-03-06 06:19:14'),
(17, 1, 67, 7, NULL, '2018-03-06 08:00:10', '2018-03-06 08:00:10');

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
(31, '2018_02_20_180722_add_admin_to_meals_table', 1),
(32, '2014_10_12_000000_create_users_table', 2),
(33, '2014_10_12_100000_create_password_resets_table', 2),
(34, '2018_02_12_095955_create_resturants_table', 2),
(35, '2018_02_12_100040_create_categories_table', 2),
(36, '2018_02_12_100133_create_rest_cat_table', 2),
(37, '2018_02_12_100159_create_meals_table', 2),
(38, '2018_02_12_100237_create_orders_table', 2),
(39, '2018_02_12_100259_create_meal_ord_table', 2),
(40, '2018_02_12_100341_create_size_table', 2),
(41, '2018_02_20_175132_add_price_to_meals_table', 2),
(42, '2018_03_07_132925_create_contact_us_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `billing_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_province` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_postalcode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_phone` int(100) NOT NULL,
  `billing_name_on_card` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_subtotal` int(200) NOT NULL,
  `billing_tax` int(11) NOT NULL,
  `billing_total` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `billing_email`, `billing_name`, `billing_address`, `billing_city`, `billing_province`, `billing_postalcode`, `billing_phone`, `billing_name_on_card`, `billing_subtotal`, `billing_tax`, `billing_total`, `user_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(63, 'ester@gamil.com', 'hhhhhhh', 'iiiiiiiiiiiii', 'uuuuuuuuuu', 'oooooooooooo', '444444', 55555, 'iiiiiiiiiiiii', 25, 5, 30, 9, NULL, '2018-03-05 14:53:12', '2018-03-05 14:53:12'),
(64, 'ester@gamil.com', 'hhhhhhh', 'iiiiiiiiiiiii', 'uuuuuuuuuu', 'oooooooooooo', '444444', 55555, 'iiiiiiiiiiiii', 25, 5, 30, 9, NULL, '2018-03-05 14:53:23', '2018-03-05 14:53:23'),
(65, 'ester@gamil.com', 'ester', 'abo teg', 'assuit', 'assuit', '71111', 1111, 'xvvcc', 10, 2, 12, 9, NULL, '2018-03-05 20:25:42', '2018-03-05 20:25:42'),
(66, 'ester@gamil.com', 'aaaaaaaaaa', 'cvvvvvvvvvvv', 'yyyyyyyyy', 'eeeeeeee', '71111', 44444, 'rrrrrrrrrr', 50, 11, 61, 9, NULL, '2018-03-06 06:19:14', '2018-03-06 06:19:14'),
(67, 'admin@gmail.com', 'adddddddd', 'vvvvvvvvvvv', 'hhhhhhhhhhhhh', 'lllllllllllllll', '711111', 154, 'cccccccc', 10, 2, 12, 1, NULL, '2018-03-06 08:00:10', '2018-03-06 08:00:10');

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
-- Table structure for table `resturants`
--

CREATE TABLE `resturants` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `delivary_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resturants`
--

INSERT INTO `resturants` (`id`, `name`, `street`, `phone`, `delivary_time`, `image`, `manager_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'arabyata', 'Azhar', 9876554, 'one hour', '2783_rsr001_00_p_1024x768_1518872693_1519636774_1520445651.jpg', 11, NULL, '2018-02-26 06:35:41', '2018-03-07 16:00:51'),
(2, 'mackdonalds', 'Azhar', 9778676, '60', 'best-restaurants-los-angeles-salts-cure-interior-2-2017_1518872741_1519634362_1520443416.jpg', 2, NULL, '2018-02-26 06:37:01', '2018-03-07 15:23:36'),
(3, 'betaa', 'Gomhoriya', 87676546, 'one hour', '5-star-restaurant-on_1518872471_1520361740.jpg', 9, NULL, '2018-02-26 06:38:13', '2018-03-06 16:42:20'),
(4, 'hamza elsory', 'Azhar', 78677877, 'one hour', 'fb-share_1518872802_1520444556.jpg', 11, NULL, '2018-02-26 06:39:22', '2018-03-07 15:42:36'),
(5, 'kentackey', 'Azhar', 8576347, 'one hour', 'bar-buffet_1520444477.jpg', 10, NULL, '2018-02-26 06:40:53', '2018-03-07 15:41:17'),
(7, 'justin', 'yousry ragheb', 7777, '45', 'fb-share_1518872802_1520444498.jpg', 6, NULL, '2018-03-06 16:06:11', '2018-03-07 15:41:38'),
(8, 'abo amaar', 'seti', 45896, '30', 'restaurants-santa-barbara_1519099243_1520444532.jpg', 11, NULL, '2018-03-06 19:50:26', '2018-03-07 15:42:12'),
(9, 'momen', 'gomhorya', 124589, '60', 'images_1520444811.jpg', 14, NULL, '2018-03-07 15:46:51', '2018-03-07 15:46:51'),
(10, 'freinds', 'gomhorya', 655895, '60', '5-star-restaurant-on_1518872471_1520458137.jpg', 15, NULL, '2018-03-07 19:28:57', '2018-03-07 19:28:57'),
(11, 'haya', 'gomhorya', 12565, '60', '5-star-restaurant-on_1518872471_1520491977.jpg', 16, NULL, '2018-03-08 04:52:57', '2018-03-08 04:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `rest_cat`
--

CREATE TABLE `rest_cat` (
  `rest_id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rest_cat`
--

INSERT INTO `rest_cat` (`rest_id`, `cat_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 5, NULL, '2018-02-26 09:03:53', '2018-02-26 09:03:53'),
(5, 1, NULL, '2018-02-26 09:04:09', '2018-02-26 09:04:09'),
(1, 1, NULL, '2018-02-26 18:54:13', '2018-02-26 18:54:13'),
(1, 2, NULL, '2018-02-26 18:54:37', '2018-02-26 18:54:37'),
(1, 3, NULL, '2018-02-26 18:55:57', '2018-02-26 18:55:57'),
(1, 5, NULL, '2018-02-26 18:56:28', '2018-02-26 18:56:28'),
(1, 7, NULL, '2018-03-04 13:49:43', '2018-03-04 13:49:43'),
(3, 13, NULL, '2018-03-06 17:47:27', '2018-03-06 17:47:27'),
(8, 14, NULL, '2018-03-06 19:52:39', '2018-03-06 19:52:39'),
(2, 2, NULL, '2018-03-07 10:59:29', '2018-03-07 10:59:29'),
(3, 13, NULL, '2018-03-07 11:00:04', '2018-03-07 11:00:04'),
(3, 2, NULL, '2018-03-07 11:14:26', '2018-03-07 11:14:26'),
(9, 21, NULL, '2018-03-07 15:48:18', '2018-03-07 15:48:18'),
(10, 2, NULL, '2018-03-07 19:33:57', '2018-03-07 19:33:57'),
(11, 23, NULL, '2018-03-08 04:55:07', '2018-03-08 04:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `meal_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`type`, `price`, `meal_id`, `remember_token`, `created_at`, `updated_at`, `id`) VALUES
('small', 10, 7, NULL, NULL, NULL, 1),
('small', 15, 8, NULL, NULL, NULL, 2),
('large', 20, 9, NULL, NULL, NULL, 3),
('medium', 20, 10, NULL, NULL, NULL, 4),
('small', 10, 7, NULL, NULL, NULL, 6),
('medium', 20, 8, NULL, NULL, NULL, 7),
('small', 12, 11, NULL, NULL, NULL, 8),
('small', 12, 14, NULL, NULL, NULL, 11),
('small', 12, 15, NULL, NULL, NULL, 12),
('medium', 15, 16, NULL, NULL, NULL, 13),
('medium', 14, 17, NULL, NULL, NULL, 14),
('large', 14, 18, NULL, NULL, NULL, 15),
('small', 14, 19, NULL, NULL, NULL, 16),
('small', 14, 20, NULL, NULL, NULL, 17),
('medium', 20, 21, NULL, NULL, NULL, 18),
('small', 25, 22, NULL, NULL, NULL, 19),
('medium', 20, 22, NULL, NULL, NULL, 20),
('small', 16, 24, NULL, NULL, NULL, 21);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` int(11) DEFAULT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `building_no` int(11) DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `account_number`, `street`, `zipcode`, `building_no`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$9E508uhi3yBB5y/0jnTFO.f8JahfBRbQlKVkNpVeoUXTs08kN1Qc.', 'admin@gmail.com', NULL, NULL, NULL, NULL, 1, 'zCtKMTHACkjzZ1tQKDPPP2vPEDCh6DLtaBY6IpCpSqt5B6fhBrYuF0jbAR9o', '2018-02-21 02:22:39', '2018-02-21 02:22:39'),
(2, 'doaa', '$2y$10$w4lhRPiotcVyrzSeNvgqUuEEiHjCpcpo8MSDbhbrqQFVOqJxM9.O.', 'doaa.eldahab.iti@gmail.com', NULL, NULL, NULL, NULL, 0, 'POqGgUONZUqpuTV3bggfOKadWAW2ZRPFckwwCLeseAi9DTLgM5IgkeR4dB2C', '2018-02-26 05:52:39', '2018-02-26 05:52:39'),
(4, 'mohamad', '$2y$10$N5ZK0Y/cW8h6tXS8Fc9u0euWoX0k4rwLdLMQk0OGHrBu6B2Yyha9a', 'asd2@yahoo.com', NULL, NULL, NULL, NULL, 0, NULL, '2018-02-26 06:10:14', '2018-02-26 06:10:14'),
(5, 'asd3', '$2y$10$itY.0uWZvsxeRN3b4kwSGO8R6ieFF5wqPjMsGO0RTTOedDMBGRRoC', 'asdf@yuahoo.com', NULL, NULL, NULL, NULL, 0, NULL, '2018-02-26 06:17:50', '2018-02-26 06:17:50'),
(9, 'ester', '$2y$10$W.DzPnbyqQ3r.Fy.DyPZSeIpzqgLnVVD1SPJY.J8EtdHRyyzjYnqK', 'ester@gamil.com', NULL, NULL, NULL, NULL, 2, 'srTgfYLmjc6ehgK4xxc0nCK1Z3qYgoZNpMmOEXzjZNIaCAgRvnM9lLDS8EXe', '2018-03-05 06:41:39', '2018-03-05 06:41:39'),
(10, 'nesreen', '$2y$10$jH.gIs4053hR3aQKmXOJ0eFgz5CzIY5os6KuW3XAQiZcd4P6RXLIO', 'nesr@gmail.com', NULL, NULL, NULL, NULL, 2, 'zyiGnqkctSSPJwTCVY7NUBoSWwkXi3NFjGPnk5pgHUeCIpme6z6GBtWvMeQm', '2018-03-06 14:48:01', '2018-03-06 14:48:01'),
(11, 'sara', '$2y$10$INMb9/oFHxDBJAXr7/8NsuTN693kD2.Evi5xaAq7e4KSZyyR8AtoC', 'sara@gmail.com', NULL, NULL, NULL, NULL, 2, 'wCcNK36RKwTGOUIln8YCqOUo6FhU8klzFETL1BFAK09N7It7LRe0Bnn231bm', '2018-03-06 14:53:30', '2018-03-06 14:53:30'),
(12, 'mora', '$2y$10$9msn5um4ml0KCVSzbIFWVuSaMX1lZPcWfVLW6XUmZVGH/lAE3ghMK', 'mora@gmail.com', NULL, NULL, NULL, NULL, 0, 'uGWzRKyk8kO5PSAoxAOjgcg63sNIuTMn9AZCwUMjEGDQRjqenN4uP9aBAlrX', '2018-03-06 18:58:03', '2018-03-06 18:58:03'),
(14, 'aya', '$2y$10$77VPTo/Laeq/5OgsyKnnb.NU27d9YovajBc3n1btE2T5eqx2VSSUK', 'aya@yahoo.com', NULL, NULL, NULL, NULL, 2, 'rZSjt7o0duo3H0Po6Bb5MYYd9dLow8jtLtankjuAg0WsoY8Bke17oIHCBC42', '2018-03-07 15:45:25', '2018-03-07 15:45:25'),
(15, 'rdwa', '$2y$10$W3zf.oHpPjg9ow4bEfXI6O74gbdusw1mmqcymnHHEsF92M7gV5vTO', 'radwa@yahoo.com', NULL, NULL, NULL, NULL, 2, '2iqpcoJWf0waW3nePBSFyR9OOWI0BlpSMKJ8juIVQm72c2jy5zTmCYkGalMr', '2018-03-07 19:25:18', '2018-03-07 19:25:18'),
(16, 'ahmed', '$2y$10$LxbQH9Jbai3x4PhLFspqR.jLfqnHbqwV5qRoCbVnT5hM/sLXKDqoG', 'ahmes@yahoo.com', NULL, NULL, NULL, NULL, 2, 'H0AjbdA0CBWLxts944V1SrvdEgEesZyEcaMlpVPkMwtHgXthjDWLPWedlFBB', '2018-03-08 04:51:03', '2018-03-08 04:51:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meals_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `meal_ord`
--
ALTER TABLE `meal_ord`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meal_ord_order_id_foreign` (`order_id`),
  ADD KEY `meal_ord_meal_id_foreign` (`meal_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `resturants`
--
ALTER TABLE `resturants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `rest_cat`
--
ALTER TABLE `rest_cat`
  ADD KEY `rest_cat_rest_id_foreign` (`rest_id`),
  ADD KEY `rest_cat_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `size_meal_id_foreign` (`meal_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `meal_ord`
--
ALTER TABLE `meal_ord`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `resturants`
--
ALTER TABLE `resturants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `meals`
--
ALTER TABLE `meals`
  ADD CONSTRAINT `meals_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `meal_ord`
--
ALTER TABLE `meal_ord`
  ADD CONSTRAINT `meal_ord_meal_id_foreign` FOREIGN KEY (`meal_id`) REFERENCES `meals` (`id`),
  ADD CONSTRAINT `meal_ord_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `rest_cat`
--
ALTER TABLE `rest_cat`
  ADD CONSTRAINT `rest_cat_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `rest_cat_rest_id_foreign` FOREIGN KEY (`rest_id`) REFERENCES `resturants` (`id`);

--
-- Constraints for table `size`
--
ALTER TABLE `size`
  ADD CONSTRAINT `size_meal_id_foreign` FOREIGN KEY (`meal_id`) REFERENCES `meals` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
