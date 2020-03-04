-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 01:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mulauthprac`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_top_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_img_one` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_img_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_img_three` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_three_img_one` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_three_img_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_three_img_three` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_five_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_img_one` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_img_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_img_three` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_img_four` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_img_five` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_img_six` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_img_seven` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_img_eight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_img_one` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_img_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_img_three` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_img_four` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_img_five` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_top_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_top_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_sub_title_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_sub_des_one` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_sub_title_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_sub_des_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_sub_title_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_sub_des_three` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_three_des_one` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_three_des_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_three_des_three` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_five_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_img_title_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_img_title_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_img_title_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_img_title_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_img_title_five` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `page_top_img`, `sec_two_img_one`, `sec_two_img_two`, `sec_two_img_three`, `sec_three_img_one`, `sec_three_img_two`, `sec_three_img_three`, `sec_five_img`, `sec_six_img_one`, `sec_six_img_two`, `sec_six_img_three`, `sec_six_img_four`, `sec_six_img_five`, `sec_six_img_six`, `sec_six_img_seven`, `sec_six_img_eight`, `location_img_one`, `location_img_two`, `location_img_three`, `location_img_four`, `location_img_five`, `page_top_title`, `page_top_des`, `sec_two_title`, `sec_two_sub_title_one`, `sec_two_sub_des_one`, `sec_two_sub_title_two`, `sec_two_sub_des_two`, `sec_two_sub_title_three`, `sec_two_sub_des_three`, `sec_three_des_one`, `sec_three_des_two`, `sec_three_des_three`, `sec_five_des`, `location_des`, `location_img_title_one`, `location_img_title_two`, `location_img_title_three`, `location_img_title_four`, `location_img_title_five`, `created_at`, `updated_at`) VALUES
(2, '104237group-of-people-in-dress-suits-776615.jpg', '104237pen.svg', '104237pen.svg', '104237pen.svg', '104237adult-black-and-white-dark-face-412840.jpg', '104237adult-black-and-white-dark-face-412840.jpg', '104237adult-black-and-white-dark-face-412840.jpg', '104237adult-black-and-white-dark-face-412840.jpg', '104237064636bank.jpg', '104237064636Bkash.jpeg', '104237064636rocket.jpg', '104237mastercard.svg', '104237american-express.svg', '104237visa.svg', '104237paypal.svg', '104237american-express.svg', '104237sun.svg', '104237teddy-bear.svg', '10423721019129741579605849.svg', '104237pen.svg', '115449boy-and-girl-sitting-on-bench-toy-1767434.jpg', 'About Clipping Path Bangladesh', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus earum molestias debitis aspernatur sunt, explicabo sed architecto aperiam beatae. Doloremque in doloribus', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati, possimus! Eaque veniam debitis, facilis repellendus, laboriosam iusto voluptatum inventore voluptates saepe labore consequuntur perferendis fuga.', 'Lorem ipsum dolor sit amet.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati, possimus! Eaque veniam debitis, facilis repellendus, laboriosam iusto voluptatum inventore voluptates saepe labore consequuntur perferendis fuga.', 'Lorem ipsum dolor sit amet.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati, possimus! Eaque veniam debitis, facilis repellendus, laboriosam iusto voluptatum inventore voluptates saepe labore consequuntur perferendis fuga.', '<h2 style=\"margin: 2rem; font-weight: 700; line-height: 1.1; font-size: 3rem; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(44, 60, 98);\">Lorem ipsum dolor sit amet.</h2><p style=\"color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; margin: 2rem; font-size: 1.8rem; text-align: justify;\">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio harum atque voluptatum consequatur hic aperiam necessitatibus odio, consectetur molestiae officiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sint veniam mollitia, corrupti assumenda ratione, iure ex recusandae illum quam illo iste impedit beatae similique! Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore beatae fugit illum suscipit temporibus a veritatis non deleniti, iure tempora blanditiis commodi ex rem porro dolor assumenda totam id eum? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem repellendus temporibus, iste quibusdam aperiam rem totam non tenetur accusantium ab alias ipsum incidunt sapiente, a voluptatum repellat odio conse nihil vel ex sapiente animi provident quas consectetur quos eveniet optio molestiae cupiditate autem! Accusantium quae possimus laudantium mollitia quod laboriosam, temporibus minus sit nobis magnam id in maiores autem error consequatur provident dolore a! Quo eaque, soluta eligendi minus ipsa, praesentium dolor nostrum illum assumenda quas iure, enim debitis. Animi!</p>', 'Lorem ipsum dolor <b>sit amet.\r\n</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio harum atque voluptatum consequatur hic aperiam necessitatibus odio, consectetur molestiae officiis.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sint veniam mollitia, corrupti assumenda ratione, iure ex recusandae illum quam illo iste impedit beatae similique!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Labore beatae fugit illum suscipit temporibus a veritatis non deleniti, iure tempora blanditiis commodi ex rem porro dolor assumenda totam id eum?\r\n\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem repellendus temporibus, iste quibusdam aperiam rem totam non tenetur accusantium ab alias ipsum incidunt sapiente, a voluptatum repellat odio conse nihil vel ex sapiente animi provident quas consectetur quos eveniet optio molestiae cupiditate autem! Accusantium quae possimus laudantium mollitia quod laboriosam, temporibus minus sit nobis magnam id in maiores autem error consequatur provident dolore a! Quo eaque, soluta eligendi minus ipsa, praesentium dolor nostrum illum assumenda quas iure, enim debitis. Animi!', 'Lorem ipsum dolor sit amet.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Optio harum atque voluptatum consequatur hic aperiam necessitatibus odio, consectetur molestiae officiis.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sint veniam mollitia, corrupti assumenda ratione, iure ex recusandae illum quam illo iste impedit beatae similique!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Labore beatae fugit illum suscipit temporibus a veritatis non deleniti, iure tempora blanditiis commodi ex rem porro dolor assumenda totam id eum?\r\n\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem repellendus temporibus, iste quibusdam aperiam rem totam non tenetur accusantium ab alias ipsum incidunt sapiente, a voluptatum repellat odio conse nihil vel ex sapiente animi provident quas consectetur quos eveniet optio molestiae cupiditate autem! Accusantium quae possimus laudantium mollitia quod laboriosam, temporibus minus sit nobis magnam id in maiores autem error consequatur provident dolore a! Quo eaque, soluta eligendi minus ipsa, praesentium dolor nostrum illum assumenda quas iure, enim debitis. Animi!', 'Lorem ipsum dolor sit amet.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Optio harum atque voluptatum consequatur hic aperiam necessitatibus odio, consectetur molestiae officiis.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sint veniam mollitia, corrupti assumenda ratione, iure ex recusandae illum quam illo iste impedit beatae similique!', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, consequuntur necessitatibus? Voluptatem iste obcaecati ea odit doloribus harum facilis fugit!', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', '2020-02-26 16:42:37', '2020-03-03 17:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `first_name`, `last_name`, `address`, `phone`, `profile_img`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'galaxyglobalit@gmail.com', NULL, '$2y$10$avei.tKdW/dzMhMN30Gijet1WbHp0WXzbeLsAQE6XhBDpWfywP9mq', 'Md. Faysal', 'Ahamed', '2/3 New circular Road,West Malibagh,Dhaka-1217', '01710021328', '105734sir.jpg', NULL, '2020-02-16 14:44:04', '2020-03-02 17:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `attachefile`
--

CREATE TABLE `attachefile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `atach_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_title` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `blog_title`, `description`, `blog_img`, `publication_status`, `created_at`, `updated_at`) VALUES
(11, 'do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '102309action-blur-car-child.jpg', 1, '2020-02-29 16:16:21', '2020-02-29 17:21:45'),
(12, 'Lorem ipsum dolor sit amet,', 'consectetur adipisicing elit, sed', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '102350adult-books-business-coffee-374016.jpg', 1, '2020-02-29 16:23:33', '2020-02-29 17:21:18'),
(13, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt', 'ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '102435ring.jpg', 1, '2020-02-29 16:24:35', '2020-02-29 16:26:12'),
(14, 'gfagg', 'agg', 'aggag', '124656selective-photograph-of-a-wall-with-grafitti-1194420.jpg', 1, '2020-02-29 18:46:56', '2020-02-29 18:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `catwiseservice`
--

CREATE TABLE `catwiseservice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_img_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_img_under_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `try_our_service_under_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_cpbd_under_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_content_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `related_srvc_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `related_srvc_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `related_srvc_three` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `related_srvc_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `related_srvc_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_img_side_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `our_wrk_actn_img_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `our_wrk_actn_img_two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `our_wrk_actn_img_three` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `our_wrk_actn_img_four` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `related_srvc_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_sample_img_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_sample_img_two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_sample_img_three` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catwiseservice`
--

INSERT INTO `catwiseservice` (`id`, `service_id`, `page_title`, `page_img_text`, `page_img_under_des`, `try_our_service_under_des`, `why_cpbd_under_des`, `page_content_des`, `related_srvc_one`, `related_srvc_two`, `related_srvc_three`, `related_srvc_name`, `related_srvc_des`, `page_img`, `page_img_side_img`, `our_wrk_actn_img_one`, `our_wrk_actn_img_two`, `our_wrk_actn_img_three`, `our_wrk_actn_img_four`, `related_srvc_img`, `page_sample_img_one`, `page_sample_img_two`, `page_sample_img_three`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, '8', 'jjjjjjjjj', 'hahah', '<p>hadhdah</p>', '<p>hahdah</p>', '<p>haha</p>', '<p>haha</p>', 'ahdhdah', 'hahah', 'ha', 'haha', 'haha\"\"', '043055accessory-bag-briefcase-buckle-1152077.jpg', '140941clock.svg', '140941desk.svg', '140941clock.svg', '140941like (1) (1).svg', '140941like (1).svg', '140941like (1).svg', '140941teddy-bear.svg', '140941desk.svg', '140941like (1) (1).svg', 1, '2020-03-01 20:09:41', '2020-03-02 11:12:32'),
(5, '9', 'gagsa', 'gags', '<p>gasgsadg</p>', '<p>gsagasg</p>', '<p>gasag</p>', '<p>gasgsa</p>', 'gasgas', 'gsagas', 'gasg', 'gasdga', 'gasg', '051129group-of-people-in-dress-suits-776615.jpg', '051129multicolored-abstract-painting-1266808.jpg', '051129person-holding-midnight-black-samsung-galaxy-s8-turn-on-near-1092671.jpg', '051129person-in-beige-top-on-mountain-cliff-1134188.jpg', '051129person-in-beige-top-on-mountain-cliff-1134188.jpg', '051129balance-blur-boulder-close-up-355863.jpg', '051129balance-blur-boulder-close-up-355863.jpg', '051129multicolored-abstract-painting-1266808.jpg', '051129Free_Trials_Hero.jpg', '051129group-of-people-in-dress-suits-776615.jpg', 1, '2020-03-02 11:11:29', '2020-03-02 11:11:29'),
(7, '14', 'Image Background Removal Services', 'Make product photos pop with affordable and quick image background removal.', '38% of online consumers want to see products on a white background. And for busy ecommerce retailers with thousands of SKUs, getting a white background on all those photos can be a cumbersome task. Save time so you and your team can focus on growing your business and making sales — not spending countless hours editing photos.Many online marketplaces, like Amazon and eBay, recommend or even require product photos on a white background. And image background removal services aren’t just for white backgrounds. We can accommodate for single-color backgrounds that match your brand aesthetic, and it can also allow us to add a contextual background for ads, seasonal selling and other creative product photos. Because we use hand-drawn clipping paths when we do photo background removal, we capture every last detail of your product and compel consumers to click the buy button.With more than 8.5 million images edited to this date, we’re committed to delivering expertly edited photos, every time.', '<p><span style=\"color: rgb(0, 155, 151); font-family: &quot;Great Vibes&quot;, cursive; font-size: 50px; text-align: center;\">Perfect service for those looking to post on Amazon and meet their photo requirements and making a clean-looking catalog of items with no backgrounds.</span></p>', '<p><span style=\"color: rgb(0, 155, 151); font-family: &quot;Great Vibes&quot;, cursive; font-size: 50px; text-align: center;\">I had Clipping Path India silo 8 images for me, cutting them out of their background. They did all 8 images PERFECTLY, and turnaround was less than 12 hours! The price can’t be beat also.</span></p>', '<div class=\"content-header\" style=\"color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><h2 class=\"content-title\" style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 30px; font-family: inherit; color: rgb(51, 73, 124);\">IMAGE BACKGROUND REMOVAL SERVICES AT CLIPPING PATH INDIA</h2></div><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">What is image background removal?</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Background removal is isolating the subject of a photo or image and wiping the rest of the image clean. This accomplishes a cleaner, simpler look and emphasizes the subject of the image. Background removal services are commonly used in the ecommerce space. Product photos with white backgrounds have become the industry norm, and many popular online marketplaces require white backgrounds.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Image background removal is not only for white backgrounds, though. You can also add a single-color background, or add a “contextual” background.</p><div class=\"row\" style=\"color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" style=\"width: 495px; min-height: 1px; float: left;\"><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">How to remove the background from an image</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">There is no one way to remove the background from an image. It all depends on what the subject of the image is and how advanced the photo editor’s skills are. At Clipping Path India, we mostly use clipping path to achieve image background removal, but there are also instances where we’ll use advanced Photoshop masking, such as when the image has hair or fur.</p><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">Clipping path background removal:</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">Hand-drawn clipping paths will achieve the best result with natural-looking lines that will enhance the realistic qualities of your product photos. Use the Pen Tool in Photoshop to remove the background, and don’t forget to zoom in so you capture the smallest details.</p><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">Advanced Photoshop background removal:</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">If you have hair or fur in the photo, play around with some of the Photoshop tools and techniques available to you. The background eraser tool, magic eraser tool and the color separation technique — or a combination of more than one — can all help you achieve a photo that will make shoppers want to buy your products.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">If you’re doing the background removal yourself, it’s important to remember to remain consistent with the other product photos on your website or seller profile. And especially if you’re selling on a third-party site like Amazon or eBay, it’s essential to abide by their product photo guidelines. (We’ve created a&nbsp;<a href=\"\" style=\"color: rgb(51, 122, 183);\">reference to product photo requirements for online marketplaces&nbsp;</a>to get you started.)</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">When you want to add some color to the background, consider how those colors may affect online shoppers. Are they complementary to the colors of the product? Will they persuade shoppers to buy? Do they resonate with your brand? You might also need to add color to the background of white or transparent products.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\"><a href=\"\" style=\"color: rgb(51, 122, 183);\">Learn how to remove the background from an image with hair &gt;</a></p></div><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" style=\"width: 495px; min-height: 1px; float: left;\"><img src=\"file:///C:/Users/nice/Desktop/clipping%20path%20(2)/project-2%20cliping%20path/svg/polo-shirt.svg\" alt=\"\" style=\"border: 0px; padding-top: 50px; width: 465px; height: 300px;\">&nbsp;<img src=\"file:///C:/Users/nice/Desktop/clipping%20path%20(2)/project-2%20cliping%20path/svg/teddy-bear.svg\" alt=\"\" style=\"border: 0px; padding-top: 50px; width: 465px; height: 300px;\">&nbsp;<img src=\"file:///C:/Users/nice/Desktop/clipping%20path%20(2)/project-2%20cliping%20path/svg/desk.svg\" alt=\"\" style=\"border: 0px; padding-top: 50px; width: 465px; height: 300px;\"></div></div><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">Who needs image background removal services?</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">In short, any ecommerce retailer can benefit from image background removal services. It’s a tedious task to undertake, especially on large batches of images. Attention to detail is essential to achieving edited photos that look realistic and will convince consumers to purchase.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Image background removal allows ecommerce companies to isolate the product and remove any distractions from the frame. It also helps create a uniform, consistent look to all product photos on your site. This, in turn, creates a predictable and easy user interface that will help online consumers view and purchase your products.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">There’s a use for image background removal in print, too. Catalogs have a clean, consistent look free of distractions. If you’re creating technical documentation or user manuals, you can remove irrelevant subjects from the image and create visuals that complement the words on the page. This helps customers use your product more easily.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Whether you have a single image or a huge batch from your latest photoshoot, professional photo background removal services can help you focus on what really matters in your business: moving the needle.</p><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">When to use background removal</h3><ul style=\"margin-bottom: 10px; color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">To comply with requirements of online marketplaces, such as Amazon and eBay</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">When the background is distracting or takes focus away from the subject of the image</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Showcase the details of your product and make it stand out</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Draw attention to an object in the foreground</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">If you need to isolate and show specific features of a product or object</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Create a uniform background on multiple images, such as a product catalog or ecommerce store</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">To achieve a transparent background</li></ul><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">When not to use background removal</h3><ul style=\"margin-bottom: 10px; color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">The existing background provides great context for the object</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">If you can use lighting and backdrops to create white background product photos when you shoot</li></ul><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">Image background removal services at Clipping Path India</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">After testing a variety of tools and techniques, we have found that we can achieve the best-looking product photos with clipping path or advanced Photoshop masking. We continuously test new techniques and tools to make sure we’re using the latest and most advanced methods.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Our professionally trained graphic designers have years of experience in providing image background removal services. We’re masters of Photoshop’s Pen Tool, which allows us to define highly precise clipping paths. We zoom in to your images by as much as 300% when drawing each clipping path. This enables us to have sufficient anchor points to retain the natural shape of the object. Having too many or too few anchor points can result in an inadequate photo cut-out and images that don’t look lifelike. Unlike many other photo background removal services, we do everything by hand. We also avoid using tools like Magic Wand for quick selection and path creation. We’ve seen, firsthand, the results of automations and tools and how it can hurt your reputation and your brand.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Today’s consumers demand quality, and so do we at Clipping Path India. We pride ourselves on the quality of the finished product — no matter how many images you need edited.</p>', 'ga', 'gag', 'ga', 'gag', 'gag\"', '073801adult-books-business-coffee-374016.jpg', '073801teddy-bear.svg', '073801action-blur-car-child.jpg', '073801balance-blur-boulder-close-up-355863.jpg', '073801analog-watch-analogue-chrome-classic-592815.jpg', '073801group-of-people-sitting-on-sofa-while-discussing-2962135.jpg', '073801three-children-sitting-on-stairs-1212805.jpg', '054647boy-and-girl-sitting-on-bench-toy-1767434.jpg', '054647person-holding-midnight-black-samsung-galaxy-s8-turn-on-near-1092671.jpg', '054647group-of-people-in-dress-suits-776615.jpg', 1, '2020-03-02 11:46:47', '2020-03-02 13:38:01'),
(8, '2', 'Clipping path services', 'Make product photos pop with affordable and quick image background removal.', '38% of online consumers want to see products on a white background. And for busy ecommerce retailers with thousands of SKUs, getting a white background on all those photos can be a cumbersome task. Save time so you and your team can focus on growing your business and making sales — not spending countless hours editing photos.Many online marketplaces, like Amazon and eBay, recommend or even require product photos on a white background. And image background removal services aren’t just for white backgrounds. We can accommodate for single-color backgrounds that match your brand aesthetic, and it can also allow us to add a contextual background for ads, seasonal selling and other creative product photos. Because we use hand-drawn clipping paths when we do photo background removal, we capture every last detail of your product and compel consumers to click the buy button.With more than 8.5 million images edited to this date, we’re committed to delivering expertly edited photos, every time.', '<p><span style=\"color: rgb(0, 155, 151); font-family: &quot;Great Vibes&quot;, cursive; font-size: 50px; text-align: center;\">Perfect service for those looking to post on Amazon and meet their photo requirements and making a clean-looking catalog of items with no backgrounds.</span></p>', '<p><span style=\"color: rgb(0, 155, 151); font-family: &quot;Great Vibes&quot;, cursive; font-size: 50px; text-align: center;\">I had Clipping Path India silo 8 images for me, cutting them out of their background. They did all 8 images PERFECTLY, and turnaround was less than 12 hours! The price can’t be beat also.</span></p>', '<div class=\"content-header\" style=\"color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><h2 class=\"content-title\" style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 30px; font-family: inherit; color: rgb(51, 73, 124);\">IMAGE BACKGROUND REMOVAL SERVICES AT CLIPPING PATH INDIA</h2></div><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">What is image background removal?</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Background removal is isolating the subject of a photo or image and wiping the rest of the image clean. This accomplishes a cleaner, simpler look and emphasizes the subject of the image. Background removal services are commonly used in the ecommerce space. Product photos with white backgrounds have become the industry norm, and many popular online marketplaces require white backgrounds.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Image background removal is not only for white backgrounds, though. You can also add a single-color background, or add a “contextual” background.</p><div class=\"row\" style=\"color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" style=\"width: 495px; min-height: 1px; float: left;\"><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">How to remove the background from an image</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">There is no one way to remove the background from an image. It all depends on what the subject of the image is and how advanced the photo editor’s skills are. At Clipping Path India, we mostly use clipping path to achieve image background removal, but there are also instances where we’ll use advanced Photoshop masking, such as when the image has hair or fur.</p><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">Clipping path background removal:</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">Hand-drawn clipping paths will achieve the best result with natural-looking lines that will enhance the realistic qualities of your product photos. Use the Pen Tool in Photoshop to remove the background, and don’t forget to zoom in so you capture the smallest details.</p><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">Advanced Photoshop background removal:</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">If you have hair or fur in the photo, play around with some of the Photoshop tools and techniques available to you. The background eraser tool, magic eraser tool and the color separation technique — or a combination of more than one — can all help you achieve a photo that will make shoppers want to buy your products.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">If you’re doing the background removal yourself, it’s important to remember to remain consistent with the other product photos on your website or seller profile. And especially if you’re selling on a third-party site like Amazon or eBay, it’s essential to abide by their product photo guidelines. (We’ve created a&nbsp;<a href=\"\" style=\"color: rgb(51, 122, 183);\">reference to product photo requirements for online marketplaces&nbsp;</a>to get you started.)</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">When you want to add some color to the background, consider how those colors may affect online shoppers. Are they complementary to the colors of the product? Will they persuade shoppers to buy? Do they resonate with your brand? You might also need to add color to the background of white or transparent products.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\"><a href=\"\" style=\"color: rgb(51, 122, 183);\">Learn how to remove the background from an image with hair &gt;</a></p></div><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" style=\"width: 495px; min-height: 1px; float: left;\"><img src=\"file:///C:/Users/nice/Desktop/clipping%20path%20(2)/project-2%20cliping%20path/svg/polo-shirt.svg\" alt=\"\" style=\"border: 0px; padding-top: 50px; width: 465px; height: 300px;\">&nbsp;<img src=\"file:///C:/Users/nice/Desktop/clipping%20path%20(2)/project-2%20cliping%20path/svg/teddy-bear.svg\" alt=\"\" style=\"border: 0px; padding-top: 50px; width: 465px; height: 300px;\">&nbsp;<img src=\"file:///C:/Users/nice/Desktop/clipping%20path%20(2)/project-2%20cliping%20path/svg/desk.svg\" alt=\"\" style=\"border: 0px; padding-top: 50px; width: 465px; height: 300px;\"></div></div><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">Who needs image background removal services?</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">In short, any ecommerce retailer can benefit from image background removal services. It’s a tedious task to undertake, especially on large batches of images. Attention to detail is essential to achieving edited photos that look realistic and will convince consumers to purchase.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Image background removal allows ecommerce companies to isolate the product and remove any distractions from the frame. It also helps create a uniform, consistent look to all product photos on your site. This, in turn, creates a predictable and easy user interface that will help online consumers view and purchase your products.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">There’s a use for image background removal in print, too. Catalogs have a clean, consistent look free of distractions. If you’re creating technical documentation or user manuals, you can remove irrelevant subjects from the image and create visuals that complement the words on the page. This helps customers use your product more easily.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Whether you have a single image or a huge batch from your latest photoshoot, professional photo background removal services can help you focus on what really matters in your business: moving the needle.</p><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">When to use background removal</h3><ul style=\"margin-bottom: 10px; color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">To comply with requirements of online marketplaces, such as Amazon and eBay</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">When the background is distracting or takes focus away from the subject of the image</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Showcase the details of your product and make it stand out</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Draw attention to an object in the foreground</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">If you need to isolate and show specific features of a product or object</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Create a uniform background on multiple images, such as a product catalog or ecommerce store</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">To achieve a transparent background</li></ul><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">When not to use background removal</h3><ul style=\"margin-bottom: 10px; color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">The existing background provides great context for the object</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">If you can use lighting and backdrops to create white background product photos when you shoot</li></ul><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">Image background removal services at Clipping Path India</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">After testing a variety of tools and techniques, we have found that we can achieve the best-looking product photos with clipping path or advanced Photoshop masking. We continuously test new techniques and tools to make sure we’re using the latest and most advanced methods.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Our professionally trained graphic designers have years of experience in providing image background removal services. We’re masters of Photoshop’s Pen Tool, which allows us to define highly precise clipping paths. We zoom in to your images by as much as 300% when drawing each clipping path. This enables us to have sufficient anchor points to retain the natural shape of the object. Having too many or too few anchor points can result in an inadequate photo cut-out and images that don’t look lifelike. Unlike many other photo background removal services, we do everything by hand. We also avoid using tools like Magic Wand for quick selection and path creation. We’ve seen, firsthand, the results of automations and tools and how it can hurt your reputation and your brand.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Today’s consumers demand quality, and so do we at Clipping Path India. We pride ourselves on the quality of the finished product — no matter how many images you need edited.</p>', 'Image masking', 'Background removal', 'Edit credits', 'Image masking', 'Save time from tedious, time-consuming background removal for subjects with hair or fur.\"\"\"\"', '063441adult-books-business-coffee-374016.jpg', '063441boy-and-girl-sitting-on-bench-toy-1767434.jpg', '063441accessory-bag-briefcase-buckle-1152077.jpg', '063441action-blur-car-child.jpg', '063441action-blur-car-child-386009.jpg', '063441balance-blur-boulder-close-up-355863.jpg', '063441relationship.svg', '063441pen.svg', '063441polo-shirt.svg', '063441polo-shirt.svg', 1, '2020-03-02 12:34:41', '2020-03-02 13:16:11'),
(9, '4', 'Image Masking Services', 'Make product photos pop with affordable and quick image background removal.', '38% of online consumers want to see products on a white background. And for busy ecommerce retailers with thousands of SKUs, getting a white background on all those photos can be a cumbersome task. Save time so you and your team can focus on growing your business and making sales — not spending countless hours editing photos.\r\n\r\nMany online marketplaces, like Amazon and eBay, recommend or even require product photos on a white background. And image background removal services aren’t just for white backgrounds. We can accommodate for single-color backgrounds that match your brand aesthetic, and it can also allow us to add a contextual background for ads, seasonal selling and other creative product photos. Because we use hand-drawn clipping paths when we do photo background removal, we capture every last detail of your product and compel consumers to click the buy button.\r\n\r\nWith more than 8.5 million images edited to this date, we’re committed to delivering expertly edited photos, every time.', '<p><span style=\"color: rgb(0, 155, 151); font-family: &quot;Great Vibes&quot;, cursive; font-size: 50px; text-align: center;\">Perfect service for those looking to post on Amazon and meet their photo requirements and making a clean-looking catalog of items with no backgrounds.</span></p>', '<p><span style=\"color: rgb(0, 155, 151); font-family: &quot;Great Vibes&quot;, cursive; font-size: 50px; text-align: center;\">I had Clipping Path India silo 8 images for me, cutting them out of their background. They did all 8 images PERFECTLY, and turnaround was less than 12 hours! The price can’t be beat also.</span></p>', '<div class=\"content-header\" style=\"color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><h2 class=\"content-title\" style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 30px; font-family: inherit; color: rgb(51, 73, 124);\">IMAGE BACKGROUND REMOVAL SERVICES AT CLIPPING PATH INDIA</h2></div><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">What is image background removal?</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Background removal is isolating the subject of a photo or image and wiping the rest of the image clean. This accomplishes a cleaner, simpler look and emphasizes the subject of the image. Background removal services are commonly used in the ecommerce space. Product photos with white backgrounds have become the industry norm, and many popular online marketplaces require white backgrounds.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Image background removal is not only for white backgrounds, though. You can also add a single-color background, or add a “contextual” background.</p><div class=\"row\" style=\"color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" style=\"width: 495px; min-height: 1px; float: left;\"><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">How to remove the background from an image</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">There is no one way to remove the background from an image. It all depends on what the subject of the image is and how advanced the photo editor’s skills are. At Clipping Path India, we mostly use clipping path to achieve image background removal, but there are also instances where we’ll use advanced Photoshop masking, such as when the image has hair or fur.</p><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">Clipping path background removal:</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">Hand-drawn clipping paths will achieve the best result with natural-looking lines that will enhance the realistic qualities of your product photos. Use the Pen Tool in Photoshop to remove the background, and don’t forget to zoom in so you capture the smallest details.</p><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">Advanced Photoshop background removal:</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">If you have hair or fur in the photo, play around with some of the Photoshop tools and techniques available to you. The background eraser tool, magic eraser tool and the color separation technique — or a combination of more than one — can all help you achieve a photo that will make shoppers want to buy your products.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">If you’re doing the background removal yourself, it’s important to remember to remain consistent with the other product photos on your website or seller profile. And especially if you’re selling on a third-party site like Amazon or eBay, it’s essential to abide by their product photo guidelines. (We’ve created a&nbsp;<a href=\"\" style=\"color: rgb(51, 122, 183);\">reference to product photo requirements for online marketplaces&nbsp;</a>to get you started.)</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">When you want to add some color to the background, consider how those colors may affect online shoppers. Are they complementary to the colors of the product? Will they persuade shoppers to buy? Do they resonate with your brand? You might also need to add color to the background of white or transparent products.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\"><a href=\"\" style=\"color: rgb(51, 122, 183);\">Learn how to remove the background from an image with hair &gt;</a></p></div><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" style=\"width: 495px; min-height: 1px; float: left;\"><img src=\"file:///C:/Users/nice/Desktop/clipping%20path%20(2)/project-2%20cliping%20path/svg/polo-shirt.svg\" alt=\"\" style=\"border: 0px; padding-top: 50px; width: 465px; height: 300px;\">&nbsp;<img src=\"file:///C:/Users/nice/Desktop/clipping%20path%20(2)/project-2%20cliping%20path/svg/teddy-bear.svg\" alt=\"\" style=\"border: 0px; padding-top: 50px; width: 465px; height: 300px;\">&nbsp;<img src=\"file:///C:/Users/nice/Desktop/clipping%20path%20(2)/project-2%20cliping%20path/svg/desk.svg\" alt=\"\" style=\"border: 0px; padding-top: 50px; width: 465px; height: 300px;\"></div></div><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">Who needs image background removal services?</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">In short, any ecommerce retailer can benefit from image background removal services. It’s a tedious task to undertake, especially on large batches of images. Attention to detail is essential to achieving edited photos that look realistic and will convince consumers to purchase.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Image background removal allows ecommerce companies to isolate the product and remove any distractions from the frame. It also helps create a uniform, consistent look to all product photos on your site. This, in turn, creates a predictable and easy user interface that will help online consumers view and purchase your products.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">There’s a use for image background removal in print, too. Catalogs have a clean, consistent look free of distractions. If you’re creating technical documentation or user manuals, you can remove irrelevant subjects from the image and create visuals that complement the words on the page. This helps customers use your product more easily.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Whether you have a single image or a huge batch from your latest photoshoot, professional photo background removal services can help you focus on what really matters in your business: moving the needle.</p><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">When to use background removal</h3><ul style=\"margin-bottom: 10px; color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">To comply with requirements of online marketplaces, such as Amazon and eBay</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">When the background is distracting or takes focus away from the subject of the image</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Showcase the details of your product and make it stand out</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Draw attention to an object in the foreground</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">If you need to isolate and show specific features of a product or object</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Create a uniform background on multiple images, such as a product catalog or ecommerce store</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">To achieve a transparent background</li></ul><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">When not to use background removal</h3><ul style=\"margin-bottom: 10px; color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">The existing background provides great context for the object</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">If you can use lighting and backdrops to create white background product photos when you shoot</li></ul><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">Image background removal services at Clipping Path India</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">After testing a variety of tools and techniques, we have found that we can achieve the best-looking product photos with clipping path or advanced Photoshop masking. We continuously test new techniques and tools to make sure we’re using the latest and most advanced methods.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Our professionally trained graphic designers have years of experience in providing image background removal services. We’re masters of Photoshop’s Pen Tool, which allows us to define highly precise clipping paths. We zoom in to your images by as much as 300% when drawing each clipping path. This enables us to have sufficient anchor points to retain the natural shape of the object. Having too many or too few anchor points can result in an inadequate photo cut-out and images that don’t look lifelike. Unlike many other photo background removal services, we do everything by hand. We also avoid using tools like Magic Wand for quick selection and path creation. We’ve seen, firsthand, the results of automations and tools and how it can hurt your reputation and your brand.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; padding-top: 10px; padding-bottom: 10px;\">Today’s consumers demand quality, and so do we at Clipping Path India. We pride ourselves on the quality of the finished product — no matter how many images you need edited.</p>', 'service-1', 'service-2', 'service-3', 'Service Name', '<p>Save time from tedious, time-consuming background removal for subjects with hair or fur.</p>', '074452person-in-beige-top-on-mountain-cliff-1134188.jpg', '074452boy-and-girl-sitting-on-bench-toy-1767434.jpg', '074452accessory-bag-briefcase-buckle-1152077.jpg', '074452action-blur-car-child.jpg', '074452adult-black-and-white-dark-face-412840.jpg', '074452group-of-people-sitting-on-sofa-while-discussing-2962135.jpg', '074452ring.jpg', '074452Free_Trials_Hero.jpg', '074452group-of-people-in-dress-suits-776615.jpg', '074452balance-blur-boulder-close-up-355863.jpg', 1, '2020-03-02 13:44:52', '2020-03-02 13:44:52'),
(10, '7', 'Drop Shadow Service', 'Make product photos pop with affordable and quick image background removal.', 'agagahhaha', '<p>afag</p>', '<p>agagag</p>', '<p>gaga</p>', 'gaga', 'gaga', 'agaga', 'gagag', '<p>gagaga</p>', '075725multicolored-abstract-painting-1012982.jpg', '075725three-children-sitting-on-stairs-1212805.jpg', '075725multicolored-abstract-painting-1266808.jpg', '075725group-of-people-sitting-on-sofa-while-discussing-2962135.jpg', '075725analog-watch-analogue-chrome-classic-592815.jpg', '075725boy-and-girl-sitting-on-bench-toy-1767434.jpg', '075725multicolored-abstract-painting-1012982.jpg', '075725person-holding-midnight-black-samsung-galaxy-s8-turn-on-near-1092671.jpg', '075725group-of-people-in-dress-suits-776615.jpg', '075725boy-and-girl-sitting-on-bench-toy-1767434.jpg', 1, '2020-03-02 13:57:25', '2020-03-02 13:57:25'),
(11, '5', 'Product Photo Editing', 'Make product photos pop with affordable and quick image background removal.', 'hahah', '<p>haha</p>', '<p>haha</p>', '<p>hahda</p>', 'haha', 'hah', 'hah', 'hah', '<p>haha</p>\"\"', '080042multicolored-abstract-painting-1266808.jpg', '080042multicolored-abstract-painting-1012982.jpg', '080042person-holding-midnight-black-samsung-galaxy-s8-turn-on-near-1092671.jpg', '080042person-in-beige-top-on-mountain-cliff-1134188.jpg', '080042boy-and-girl-sitting-on-bench-toy-1767434.jpg', '080042Free_Trials_Hero.jpg', '080042group-of-people-sitting-on-sofa-while-discussing-2962135.jpg', '080042analog-watch-analogue-chrome-classic-592815.jpg', '080042accessory-bag-briefcase-buckle-1152077.jpg', '080042accessory-bag-briefcase-buckle-1152077.jpg', 1, '2020-03-02 14:00:42', '2020-03-03 17:46:29'),
(12, '6', 'Vector Conversion', 'Sell more products online with product photos edited to convert.', 'agahga', '<p>agag</p>', '<p>gagg</p>', '<p>gag</p>', 'gag', 'gag', 'gaga', 'gag', '<p>gag</p>\"', '080343balance-blur-boulder-close-up-355863.jpg', '080343balance-blur-boulder-close-up-355863.jpg', '080343accessory-bag-briefcase-buckle-1152077.jpg', '080343action-blur-car-child-386009.jpg', '080343action-blur-car-child.jpg', '080343adult-black-and-white-dark-face-412840.jpg', '080343Free_Trials_Hero.jpg', '080343multicolored-abstract-painting-1266808.jpg', '080343person-holding-midnight-black-samsung-galaxy-s8-turn-on-near-1092671.jpg', '080343boy-and-girl-sitting-on-bench-toy-1767434.jpg', 0, '2020-03-02 14:03:43', '2020-03-03 17:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `clpngpbd`
--

CREATE TABLE `clpngpbd` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qlty_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qlty_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qlty_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clpngpbd`
--

INSERT INTO `clpngpbd` (`id`, `qlty_title`, `qlty_des`, `qlty_img`, `price_title`, `price_des`, `price_img`, `time_title`, `time_des`, `time_img`, `created_at`, `updated_at`) VALUES
(1, 'Quality', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '061507business-and-finance.svg', 'Price', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '061550pentagon.svg', 'Time', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '061544clock.svg', '2020-02-20 12:03:22', '2020-02-22 14:21:35');

-- --------------------------------------------------------

--
-- Table structure for table `cmtdmw`
--

CREATE TABLE `cmtdmw` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cmtdmw`
--

INSERT INTO `cmtdmw` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '<h2 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; padding: 3rem 3rem 0px;\">Committed to making the world a better place</h2>', '<p><span style=\"text-align: center;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non, error saepe et sint mollitia esse cum quasi, perferendis, minima expedita tempore architecto facilis sunt optio.</span></p>', '050959relationship.svg', '2020-02-22 11:01:21', '2020-03-03 16:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `cpburoes`
--

CREATE TABLE `cpburoes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desone` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `destwo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cpburoes`
--

INSERT INTO `cpburoes` (`id`, `title`, `desone`, `destwo`, `created_at`, `updated_at`) VALUES
(2, '<h2 class=\"content-title\" style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 3rem; font-family: &quot;Alegreya Sans&quot;, sans-serif; color: rgb(44, 60, 98); padding-bottom: 3rem;\">Clipping Path Bangladesh -- Your Outsourced Image - Editing Solution</h2>', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 1.8rem; padding-bottom: 2rem; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 51, 51);\">Outsourcing is a multi-billion dollar industry today. It offers busy entrepreneurs and professionals the ability to get more done in less time. Whether that means impressing your clients or selling lots of products on your ecommerce store, we have the knowledge and expertise to provide whatever your image-editing needs may be.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 1.8rem; padding-bottom: 2rem; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 51, 51);\">Clipping Path India is an offshore graphic design studio with more than 300 Photoshop DTP professionals in three countries. We work around the clock to provide high-quality image-editing services and help you meet all your deadlines</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 1.8rem; padding-bottom: 2rem; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 51, 51);\">We specialize in high-quality, hand-drawn clipping path, advanced Photoshop mask, shadow effect, retouching and other Photoshop services.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 1.8rem; padding-bottom: 2rem; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 51, 51);\">We take pride in the fact that we\'re able to offer competitive pricing without sacrificing quality in our work. Our customers have come to not only trust us but also rely on us when they have a large project, tight deadlines and any other image-editing needs for digital or print photos.</p>', '<p><q style=\"font-size: 5rem; color: rgb(0, 155, 151); font-family: &quot;Great Vibes&quot;, cursive; text-align: center;\">Very eager to please and good service! Can definitely recommend them and would use them and would use them any time agein&nbsp;</q><br style=\"color: rgb(51, 51, 51); font-family: sans-serif; font-size: 17.5px; text-align: center;\"><cite style=\"color: rgb(0, 155, 151); font-family: &quot;Great Vibes&quot;, cursive; font-size: 4.5rem; text-align: center;\">--Eveline</cite></p>', '2020-02-22 11:38:05', '2020-02-22 11:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryorder`
--

CREATE TABLE `deliveryorder` (
  `delivryordr_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `update_file` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deliveryorder`
--

INSERT INTO `deliveryorder` (`delivryordr_id`, `order_id`, `user_id`, `update_file`, `created_at`, `updated_at`) VALUES
(5, 5, 1, '111704anik.zip', '2020-02-13 17:17:04', '2020-02-13 17:17:04'),
(6, 4, 1, '111722tushar.zip', '2020-02-13 17:17:22', '2020-02-13 17:17:22'),
(7, 3, 1, '111750fahad.zip', '2020-02-13 17:17:50', '2020-02-13 17:17:50'),
(8, 2, 1, '111808sohanur.zip', '2020-02-13 17:18:08', '2020-02-13 17:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fsthqaie`
--

CREATE TABLE `fsthqaie` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fsthqaie`
--

INSERT INTO `fsthqaie` (`id`, `category`, `description`, `image`, `created_at`, `updated_at`) VALUES
(15, 'Clipping Path', '38% of consumers want to see product photos with white backgrounds, but editing all those images takes a ton of time. Clipping Path India’s hand-drawn clipping path image-editing services save valuable time you could be using to grow your business and generate more revenue.', '123712test.jpg', '2020-02-20 18:35:43', '2020-03-03 16:09:49'),
(16, 'Drop shadow', '38% of consumers want to see product photos with white backgrounds, but editing all those images takes a ton of time. Clipping Path India’s hand-drawn clipping path image-editing services save valuable time you could be using to grow your business and generate more revenue.', '123756bag.jpg', '2020-02-20 18:35:50', '2020-03-03 16:10:38'),
(17, 'Ghost mannequin', 'A mannequin requires a one-time investment, whereas live models can be expensive. Not to mention, ghost mannequins are easier to style and fit. But consumers want to see products on real people — and that’s where the ghost mannequin comes in.', '123851balance-blur-boulder-close-up-355863.jpg', '2020-02-20 18:35:55', '2020-03-03 16:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `getintouch`
--

CREATE TABLE `getintouch` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `getintouch`
--

INSERT INTO `getintouch` (`id`, `first_name`, `last_name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Fazley', 'Rabbi', 'fazleyrabbicse@gmail.com', 'I am fazley Rabbi.', '2020-02-27 10:08:11', '2020-02-27 10:08:11'),
(2, 'Md. Fazley', 'Rabbi', 'fazleyrabbicse@gmail.com', 'I am Fazley Rabbi.', '2020-02-27 11:05:30', '2020-02-27 11:05:30'),
(3, 'fahad', 'hasan', 'fazleyrabbicse@gmail.com', 'Fahad al hasan.', '2020-02-27 11:29:28', '2020-02-27 11:29:28'),
(5, 'ali', 'haider', 'fazleyrabbicse@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-02-27 11:31:59', '2020-02-27 11:31:59'),
(7, 'afaf', 'fafa', 'fazleyrabbicse@gmail.com', 'fafaf', '2020-03-03 17:23:38', '2020-03-03 17:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `gnrlstng`
--

CREATE TABLE `gnrlstng` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `navbar_color` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_color` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_color` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tweeter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotr_btm_txt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gnrlstng`
--

INSERT INTO `gnrlstng` (`id`, `name`, `logo`, `favicon`, `color`, `navbar_color`, `header_color`, `footer_color`, `address`, `mobile`, `email`, `currency`, `top_text`, `facebook`, `tweeter`, `google_plus`, `linkin`, `youtube`, `footer_text`, `fotr_btm_txt`, `created_at`, `updated_at`) VALUES
(14, 'Cliping Path', '072141logo.png', '072141fav.ico', '#8080ff', '#8080ff', '#ff8000', '#ff8000', '2/3 New circular Road,West Malibagh,Dhaka-1217', '017100213285', 'galaxyglobalit@gmail.com', 'BD', '<p><br></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'https://www.facebook.com/', 'https://twitter.com/', 'https://gsuite.google.com/intl/en_sg', 'https://bd.linkedin.com/', 'https://www.youtube.com/', '<p><br></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;COPYRIGHT@ 2020 All right reserve by Galaxy Global IT</p>', '2020-02-16 17:28:35', '2020-03-03 14:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tweeter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brows_help_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ask_beacon_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_img_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_top_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pagetop_sub_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brows_help_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `askbeacon_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gettouch_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_email_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_des_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `fb`, `tweeter`, `pinterest`, `brows_help_img`, `linkedin`, `ask_beacon_img`, `sm_img`, `sm_img_two`, `page_top_title`, `pagetop_sub_title`, `brows_help_des`, `askbeacon_des`, `gettouch_des`, `sub_email_des`, `sm_des`, `sm_des_two`, `created_at`, `updated_at`) VALUES
(1, '053101facebook (2).svg', '053101twitter.svg', '053101pinterest.svg', '053101group-of-people-sitting-on-sofa-while-discussing-2962135.jpg', '053101linkedIn.svg', '053101confused.svg', '053101group-of-people-sitting-on-sofa-while-discussing-2962135.jpg', '053101confused.svg', 'Find the Support You Need', 'Clipping Path India help section', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aspernatur, dolor eius assuum, dosnerspiciatis unde! Mollitia, saepe vel.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aspernatur, dolor eius assuum, dosnerspiciatis unde! Mollitia, saepe vel.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi, voluptas in? Debitis Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, tenetur!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo sapiente saepe recusandae ullam laborum, repellat eum dicta neque ratione nisi.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aspernatur, dolor eius assuum, dosnerspiciatis unde! Mollitia, saepe vel.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aspernatur, dolor eius assuum, dosnerspiciatis unde! Mollitia, saepe vel.', '2020-02-25 11:31:01', '2020-02-25 11:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `howitwork`
--

CREATE TABLE `howitwork` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fb_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desk_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bnf_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bnf_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unknown_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unknown_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `howitwork`
--

INSERT INTO `howitwork` (`id`, `fb_img`, `fb_title`, `desk_img`, `desk_title`, `bnf_img`, `bnf_title`, `mail_img`, `mail_title`, `unknown_img`, `unknown_title`, `time_img`, `time_title`, `created_at`, `updated_at`) VALUES
(9, '134405fb.svg', 'Facebook-Request a quote for the images  you need edited', '134428desk.svg', 'Desk-Request a quote for the images you need edited', '134454business-and-finance.svg', 'BNF-Request a quote for the images you need edited', '134513mail.svg', 'Mail-Request a quote for the images you need edited', '13454921019129741579605849.svg', 'Unknown-Request a quote for the images you need edited', '133802time-and-date.svg', 'Time-Request a quote for the images you need edited success', '2020-02-19 19:38:02', '2020-02-22 15:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `iespricing`
--

CREATE TABLE `iespricing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dlr_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bkash_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rocket_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tp_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_top_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ec_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ec_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `save_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `std_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_friendly` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_friendly_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `save_money` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `save_money_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valid_for` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valid_for_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_as_go_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iespricing`
--

INSERT INTO `iespricing` (`id`, `dlr_img`, `paypal_img`, `bank_img`, `bkash_img`, `rocket_img`, `tp_title`, `page_top_des`, `ec_des`, `ec_title`, `save_time`, `std_des`, `business_friendly`, `business_friendly_des`, `save_money`, `save_money_des`, `valid_for`, `valid_for_des`, `pay_as_go_des`, `created_at`, `updated_at`) VALUES
(1, '063332dollar.svg', '064636paypal.png', '064636bank.jpg', '064636Bkash.jpeg', '064636rocket.jpg', 'Image-editing Service Pricing', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque hic ab nesciunt, obcaecati omnis est doloribus officia nam molestias dolores eveniet accusantium atque, amet molestiae?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi dicta exercitationem, minus dolore eum pariatur fugiat sint asperiores molestias maxime.', 'WHY USE EDIT CREDITS', 'SAVE TIME', 'Lorem, ipsum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione quo consectetur, vel provident repellendus maiores!', 'BUSINESS FRIENDLY', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'SAVE MONEY', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero omnis, earum quis libero facilis voluptatibus dolorum suscipit. Reiciendis inventore in mollitia voluptate illo voluptatibus, aperiam unde neque ad laboriosam pariatur nisi ratione corrupti consequatur cupiditate?', 'VALID FOR 1 YEAR', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem excepturi repellendus quisquam repellat nulla itaque dolorem rerum. Sequi sed velit nisi laborum accusantium ipsum ratione deserunt aut perspiciatis, eligendi fugiat, corporis provident beatae autem vero?', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, rerum eveniet repellat dolor eius corporis id necessitatibus provident! Magni, omnis quaerat? Porro omnis dicta modi, cum magnam eligendi officiis eaque magni unde nulla fuga earum, veritatis sit ut? Iusto soluta voluptas nemo commodi vero deleniti voluptates est! Doloremque, magnam atque.', '2020-02-24 12:12:49', '2020-02-24 12:46:36');

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
(6, '2014_10_12_000000_create_users_table', 3),
(7, '2014_10_12_100000_create_password_resets_table', 3),
(8, '2019_08_19_000000_create_failed_jobs_table', 3),
(9, '2020_01_16_073354_create_admins_table', 3),
(10, '2020_01_18_103843_create_attachefile_table', 4),
(11, '2020_01_19_113024_create_services_table', 4),
(12, '2020_01_20_070725_create_order_table', 5),
(13, '2020_01_20_082635_create_orderservice_table', 6),
(14, '2020_01_20_124429_create_order_table', 7),
(15, '2020_01_25_093957_create_deliveryorder_table', 8),
(17, '2020_01_26_050346_create_package_table', 9),
(18, '2020_02_02_120716_create_payment_table', 10),
(19, '2020_02_02_121038_create_tranection_table', 11),
(20, '2020_02_12_054250_create_gnrlstng_table', 12),
(21, '2020_02_12_103848_create_gnrlstng_table', 13),
(22, '2020_02_13_095649_create_order_table', 14),
(23, '2020_02_19_044236_create_topsec_table', 15),
(24, '2020_02_19_092516_create_howitwork_table', 16),
(25, '2020_02_19_093003_create_pricing_table', 17),
(26, '2020_02_19_093327_create_clpngpbd_table', 18),
(27, '2020_02_19_093542_create_seeurrk_table', 19),
(28, '2020_02_19_093745_create_fsthqaie_table', 20),
(29, '2020_02_19_094051_create_cmtdmw_table', 21),
(30, '2020_02_19_094248_create_cpburoes_table', 22),
(31, '2020_02_19_094512_create_rdolp_table', 23),
(32, '2020_02_19_094740_create_taqs_table', 24),
(33, '2020_02_22_115610_create_orderquote_table', 25),
(34, '2020_02_24_053613_create_iespricing_table', 26),
(35, '2020_02_25_045841_create_help_table', 27),
(36, '2020_02_25_085224_create_cpservice_table', 28),
(37, '2020_02_25_112329_create_cpservice_table', 29),
(38, '2020_02_26_100757_create_about_table', 30),
(39, '2020_02_26_120455_create_termcondition_table', 31),
(40, '2020_02_26_125238_create_privacypolicy_table', 32),
(41, '2020_02_27_035805_create_getintouch_table', 33),
(42, '2020_02_27_054453_create_subscribe_table', 34),
(43, '2020_02_29_053844_create_ourwork_table', 35),
(44, '2020_02_29_071218_create_blog_table', 36),
(45, '2020_02_29_121032_create_servicepage_table', 37),
(46, '2020_03_01_100741_create_catwiseservice_table', 38);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `ran_order_id` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` tinyint(4) DEFAULT NULL,
  `resize_image` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_width` int(11) DEFAULT NULL,
  `image_height` int(11) DEFAULT NULL,
  `attache_zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `set_margin` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `ran_order_id`, `payment_id`, `package_id`, `amount`, `address`, `currency`, `order_status`, `status`, `first_name`, `last_name`, `email`, `quantity`, `resize_image`, `image_width`, `image_height`, `attache_zip`, `set_margin`, `additional_comment`, `created_at`, `updated_at`) VALUES
(1, 1, '1FXk4kP6q8k', 114, 15, '7879654', '2/3 New circular Road,West Malibagh,Dhaka-1217', 'BDT', 'Processing', 1, 'Md. Fazley Rabbi', 'FR', 'fazleyrabbicse@gmail.com', NULL, NULL, NULL, NULL, '100646fazley.zip', NULL, NULL, NULL, '2020-02-15 16:02:07'),
(2, 1, '1C2dQ5Bz3sm', 115, 13, '32145', '2/3 New Circular Road,West Malibagh,Dhaka-1217', 'BDT', 'Processing', 1, 'Md. Fazley Rabbi', 'Sohanur', 'fazleyrabbicse@gmail.com', NULL, NULL, NULL, NULL, '103533suhanur.zip', NULL, NULL, '2020-02-13 10:35:33', '2020-02-15 16:02:07'),
(3, 1, '1e7rk04tGW3', 116, 13, '32145', 'Jatrabasri', 'BDT', 'Processing', 1, 'Md. Fazley Rabbi', 'Fahad', 'fazleyrabbicse@gmail.com', 50, 'Yes', 50, 50, '103657fahad.zip', 'Yes', 'I am Fahad.', '2020-02-13 10:36:57', '2020-02-15 16:02:07'),
(4, 1, '1S4awSV15A2', 117, 13, '32145', 'Banosssri', 'BDT', 'Processing', 1, 'Tushar', 'SR', 'fazleyrabbicse@gmail.com', 60, '0', 50, 50, '103832tushar.zip', 'Yes', 'I am Tushar.', '2020-02-13 10:38:32', '2020-02-15 16:02:07'),
(5, 1, '1JCjgedKAQL', 118, 13, '32145', 'Norail', 'BDT', 'Processing', 1, 'Anik', 'Ahamed', 'fazleyrabbicse@gmail.com', NULL, NULL, NULL, NULL, '103921anik.zip', NULL, NULL, '2020-02-13 10:39:21', '2020-02-15 16:02:07'),
(6, 3, '3uMcXhM4WHG', 119, 10, '2500', 'fhdfh', 'BDT', 'Processing', 1, 'Suranur', 'ggdg', 'ohidujjamanfahad987@gmail.com', 1, 'Yes', 50, 50, '092802fazley.zip', 'Yes', 'fdsfgsgfsg', '2020-02-15 09:28:02', '2020-02-15 16:02:07'),
(7, 3, '3O6ePr12sHa', 120, 10, '2500', 'hsh', 'BDT', 'Processing', 1, 'Suranur', 'hdh', 'ohidujjamanfahad987@gmail.com', NULL, NULL, NULL, NULL, '095115bigtest.zip', NULL, NULL, '2020-02-15 09:51:15', '2020-02-15 16:02:07'),
(8, 3, '3wHS1aM8z7o', 121, 10, '2500', 'gfagag', 'BDT', 'Processing', 1, 'Suranur', 'fafafa', 'ohidujjamanfahad987@gmail.com', 1, NULL, NULL, NULL, '100741bigtest.zip', NULL, NULL, '2020-02-15 10:07:41', '2020-02-15 16:07:49'),
(9, 3, '3A6dSFb7ZI8', 122, 10, '2500', 'hdjhdj', 'BDT', 'Processing', 1, 'Suranur', 'dhfh', 'ohidujjamanfahad987@gmail.com', NULL, NULL, NULL, NULL, '100827bigtest.zip', NULL, NULL, '2020-02-15 10:08:27', '2020-02-15 16:08:43'),
(10, 3, '3N4BYE6cSQt', 123, 10, '2500', 'jfjfj', 'BDT', 'Processing', 1, 'Suranur', 'hfhfh', 'ohidujjamanfahad987@gmail.com', NULL, NULL, NULL, NULL, '101501bigtest.zip', NULL, NULL, '2020-02-15 10:15:01', '2020-02-15 16:15:49'),
(11, 3, '3AqmPayo1SB', 124, 10, '2500', 'gag', 'BDT', 'Processing', 1, 'Suranur', 'fag', 'ohidujjamanfahad987@gmail.com', NULL, NULL, NULL, NULL, '101730bigtest.zip', NULL, NULL, '2020-02-15 10:17:30', '2020-02-15 16:31:14'),
(12, 3, '33TItA5oLmb', 126, 10, '2500', 'gfhfgh', 'BDT', 'Processing', 1, 'Suranur', 'faf', 'ohidujjamanfahad987@gmail.com', 55, 'Yes', 456, 55, '102428fazley.zip', NULL, 'fghfghfgh', '2020-02-15 10:24:28', '2020-02-15 16:31:14'),
(13, 3, '3dtyNfFjTR5', 127, 10, '2500', 'faf', 'BDT', 'Processing', 1, 'Suranur', 'fafaf', 'ohidujjamanfahad987@gmail.com', NULL, NULL, NULL, NULL, '103143fazley.zip', NULL, NULL, '2020-02-15 10:31:43', '2020-02-15 17:00:23'),
(14, 1, '140223Toiph', 129, 14, '456789', 'fafaf', 'BDT', 'Processing', 1, 'Ali Saheb', 'gag', 'user@gmail.com', NULL, NULL, NULL, NULL, '123210fazley.zip', NULL, NULL, '2020-02-16 12:32:10', '2020-02-16 18:47:26'),
(15, 1, '1D8w68MDWTu', 130, 14, '456789', 'gaga', 'BDT', 'Processing', 1, 'Ali Saheb', 'fgag', 'user@gmail.com', NULL, NULL, NULL, NULL, '040013bigtest.zip', NULL, NULL, '2020-02-23 04:00:13', '2020-02-23 10:04:23'),
(16, 1, '19LLae2j60H', 131, 15, '7879654', 'sgsgs', 'BDT', 'Processing', 1, 'Ali Saheb', 'stgsg', 'user@gmail.com', NULL, NULL, NULL, NULL, '045229bigtest.zip', NULL, NULL, '2020-02-23 04:52:29', '2020-02-23 10:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `orderquote`
--

CREATE TABLE `orderquote` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `service_id` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderquote`
--

INSERT INTO `orderquote` (`id`, `order_id`, `quantity`, `service_id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(7, 'qou04JgND1', 1, 9, 'fazleyrabbicse@gmail.com', 1, '2020-02-23 10:41:24', '2020-02-23 11:01:53'),
(8, 'Gj0xEzkin3', 5, 2, 'fazleyrabbicse@gmail.com', 1, '2020-02-23 10:49:38', '2020-02-23 11:01:53'),
(9, 'nRl72HwF7x', 1, 14, 'fazleyrabbicse@gmail.com', 1, '2020-02-23 11:13:59', '2020-02-23 12:57:05'),
(10, 'mezJBl3ER4', 1, 9, 'fazleyrabbicse@gmail.com', 1, '2020-02-23 11:14:19', '2020-02-23 12:57:05'),
(11, 'gy27xdkFrO', 1, 8, 'fazleyrabbicse@gmail.com', 1, '2020-02-23 11:14:39', '2020-02-23 12:57:05'),
(12, '3bdeszq3f4', 1, 14, 'fazleyrabbicse@gmail.com', 1, '2020-02-23 11:15:44', '2020-02-23 12:57:05'),
(13, 'FmoXpelQ7u', 6, 3, 'fazleyrabbicse@gmail.com', 1, '2020-02-23 11:20:54', '2020-02-23 12:57:05'),
(14, 'rCI5MtjzYJ', 2, 6, 'fazleyrabbicse@gmail.com', 1, '2020-02-23 15:30:21', '2020-02-24 10:26:26'),
(15, 'czljc3nWTO', 2, 9, 'fazleyrabbicse@gmail.com', 1, '2020-02-24 12:51:57', '2020-02-24 12:52:05'),
(16, 'rZ1H6SVH9Z', 2, 14, 'fazleyrabbicse@gmail.com', 1, '2020-02-24 13:28:47', '2020-02-25 12:55:13'),
(17, 'CWrYSp8Up0', 1, 9, 'fazleyrabbicse@gmail.com', 1, '2020-02-24 13:29:02', '2020-02-25 12:55:13'),
(18, '725B7I1ktN', 1, 7, 'fazleyrabbicse@gmail.com', 1, '2020-02-25 10:12:41', '2020-02-25 12:55:13'),
(19, 'drZgey0uMJ', 4, 7, 'fazleyrabbicse@gmail.com', 1, '2020-02-25 20:46:00', '2020-02-26 14:29:51'),
(20, 'Dsotcdai6l', 1, 15, 'fazleyrabbicse@gmail.com', 1, '2020-02-25 20:57:33', '2020-02-26 14:29:51'),
(21, 'egAqUx0jU7', 1, 6, 'fazleyrabbicse@gmail.com', 1, '2020-02-26 11:02:02', '2020-02-26 14:29:51'),
(22, 'c7jtJBf5f4', 1, 14, 'fazleyrabbicse@gmail.com', 1, '2020-02-27 18:43:39', '2020-02-27 19:04:43'),
(23, 'wGu4u8XguO', 1, 2, 'fazleyrabbicse@gmail.com', 1, '2020-03-02 13:31:58', '2020-03-02 14:11:06'),
(24, 'KY2eLgAM3P', 10, 8, 'fazleyrabbicse@gmail.com', 1, '2020-03-03 14:58:55', '2020-03-03 14:59:38'),
(25, 'aMxyX9acxB', 2, 14, 'fazleyrabbicse@gmail.com', 1, '2020-03-03 15:00:00', '2020-03-03 15:00:09'),
(26, 'sviWY33N6y', 5, 4, 'fazleyrabbicse@gmail.com', 1, '2020-03-03 15:01:03', '2020-03-03 15:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `orderservice`
--

CREATE TABLE `orderservice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `service_id` varchar(1191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderservice`
--

INSERT INTO `orderservice` (`id`, `order_id`, `service_id`, `created_at`, `updated_at`) VALUES
(377, 300, '7', '2020-02-11 14:47:26', '2020-02-11 14:47:26'),
(378, 301, '4', '2020-02-11 15:08:49', '2020-02-11 15:08:49'),
(379, 302, '6', '2020-02-11 15:11:30', '2020-02-11 15:11:30'),
(380, 303, '5', '2020-02-11 15:16:10', '2020-02-11 15:16:10'),
(381, 303, '4', '2020-02-11 15:16:10', '2020-02-11 15:16:10'),
(382, 303, '3', '2020-02-11 15:16:10', '2020-02-11 15:16:10'),
(383, 303, '2', '2020-02-11 15:16:10', '2020-02-11 15:16:10'),
(384, 304, '15', '2020-02-11 15:17:00', '2020-02-11 15:17:00'),
(385, 304, '14', '2020-02-11 15:17:00', '2020-02-11 15:17:00'),
(386, 304, '9', '2020-02-11 15:17:00', '2020-02-11 15:17:00'),
(387, 305, '7', '2020-02-11 15:17:43', '2020-02-11 15:17:43'),
(388, 305, '6', '2020-02-11 15:17:44', '2020-02-11 15:17:44'),
(389, 306, '14', '2020-02-11 15:18:32', '2020-02-11 15:18:32'),
(390, 306, '9', '2020-02-11 15:18:32', '2020-02-11 15:18:32'),
(391, 307, '4', '2020-02-11 17:26:52', '2020-02-11 17:26:52'),
(392, 308, '2', '2020-02-11 17:56:31', '2020-02-11 17:56:31'),
(393, 1, '7', '2020-02-13 16:06:46', '2020-02-13 16:06:46'),
(394, 1, '6', '2020-02-13 16:06:46', '2020-02-13 16:06:46'),
(395, 1, '5', '2020-02-13 16:06:46', '2020-02-13 16:06:46'),
(396, 2, '15', '2020-02-13 16:35:33', '2020-02-13 16:35:33'),
(397, 2, '14', '2020-02-13 16:35:33', '2020-02-13 16:35:33'),
(398, 3, '3', '2020-02-13 16:36:57', '2020-02-13 16:36:57'),
(399, 3, '2', '2020-02-13 16:36:57', '2020-02-13 16:36:57'),
(400, 4, '8', '2020-02-13 16:38:32', '2020-02-13 16:38:32'),
(401, 4, '7', '2020-02-13 16:38:32', '2020-02-13 16:38:32'),
(402, 5, '8', '2020-02-13 16:39:21', '2020-02-13 16:39:21'),
(403, 5, '7', '2020-02-13 16:39:21', '2020-02-13 16:39:21'),
(404, 6, '6', '2020-02-15 15:28:02', '2020-02-15 15:28:02'),
(405, 7, '14', '2020-02-15 15:51:15', '2020-02-15 15:51:15'),
(406, 8, '2', '2020-02-15 16:07:41', '2020-02-15 16:07:41'),
(407, 9, '3', '2020-02-15 16:08:27', '2020-02-15 16:08:27'),
(408, 10, '4', '2020-02-15 16:15:01', '2020-02-15 16:15:01'),
(409, 11, '14', '2020-02-15 16:17:30', '2020-02-15 16:17:30'),
(410, 12, '9', '2020-02-15 16:24:28', '2020-02-15 16:24:28'),
(411, 13, '3', '2020-02-15 16:31:43', '2020-02-15 16:31:43'),
(412, 14, '2', '2020-02-16 18:32:10', '2020-02-16 18:32:10'),
(413, 15, '14', '2020-02-23 10:00:13', '2020-02-23 10:00:13'),
(414, 16, '2', '2020-02-23 10:52:29', '2020-02-23 10:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `ourwork`
--

CREATE TABLE `ourwork` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_top_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_three_img_one` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_three_img_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_three_img_three` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_three_img_four` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_three_img_five` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_three_img_six` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_three_img_seven` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_three_img_eight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_img_one` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_img_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_img_three` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_top_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_top_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_title_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_title_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_title_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_title_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_title_five` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_title_six` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_title_seven` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_title_eight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_title_nine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_two_title_ten` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_title_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_title_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_title_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_des_one` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_des_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_six_des_three` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_five_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourwork`
--

INSERT INTO `ourwork` (`id`, `page_top_img`, `sec_three_img_one`, `sec_three_img_two`, `sec_three_img_three`, `sec_three_img_four`, `sec_three_img_five`, `sec_three_img_six`, `sec_three_img_seven`, `sec_three_img_eight`, `sec_six_img_one`, `sec_six_img_two`, `sec_six_img_three`, `page_top_title`, `page_top_des`, `sec_two_title_one`, `sec_two_title_two`, `sec_two_title_three`, `sec_two_title_four`, `sec_two_title_five`, `sec_two_title_six`, `sec_two_title_seven`, `sec_two_title_eight`, `sec_two_title_nine`, `sec_two_title_ten`, `sec_six_title_one`, `sec_six_title_two`, `sec_six_title_three`, `sec_six_des_one`, `sec_six_des_two`, `sec_six_des_three`, `sec_five_des`, `created_at`, `updated_at`) VALUES
(5, '063124adult-books-business-coffee-374016.jpg', '063446action-blur-car-child.jpg', '063446action-blur-car-child-386009.jpg', '063446accessory-bag-briefcase-buckle-1152077.jpg', '063446analog-watch-analogue-chrome-classic-592815.jpg', '063446multicolored-abstract-painting-1266808.jpg', '065120selective-photograph-of-a-wall-with-grafitti-1194420.jpg', '063446boy-and-girl-sitting-on-bench-toy-1767434.jpg', '063446accessory-bag-briefcase-buckle-1152077.jpg', '063446facebook.svg', '063446mail.svg', '063446teddy-bear.svg', 'See our work', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem', 'hfads', 'fdahgafds', 'fasdga', 'hykhjk', 'hjkhjk', 'hjkh', 'khjkh', 'kj', 'hkjhhjk', 'hjkhk', 'hjkhjk', 'kjh', 'jjk', 'hahdhs', 'fhgkf', 'f', 'Lorem ipsum dolor sit amet.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Optio harum atque voluptatum consequatur hic aperiam necessitatibus odio, consectetur molestiae officiis.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sint veniam mollitia, corrupti assumenda ratione, iure ex recusandae illum quam illo iste impedit beatae similique!', '2020-02-29 12:29:11', '2020-02-29 12:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pkg_id` bigint(20) UNSIGNED NOT NULL,
  `pkg_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pkg_id`, `pkg_name`, `description`, `amount`, `publication_status`, `created_at`, `updated_at`) VALUES
(9, 'Sundarbon', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1500', 1, '2020-02-03 17:54:47', '2020-02-03 17:54:47'),
(10, 'Final Package', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2500', 1, '2020-02-03 18:05:28', '2020-02-05 09:24:06'),
(11, 'Sundarban', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '15894', 1, '2020-02-05 09:21:05', '2020-02-24 10:27:06'),
(12, 'Suddny', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '65987', 1, '2020-02-05 09:21:37', '2020-02-05 09:21:37'),
(13, 'Bandarban', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '32145', 1, '2020-02-05 09:22:02', '2020-02-05 09:22:02'),
(14, 'Rangpur', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '456789', 1, '2020-02-05 09:22:29', '2020-02-05 09:22:29'),
(15, 'Sopnopuri', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '7879654', 1, '2020-02-05 09:23:37', '2020-02-05 09:23:37');

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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(101, 'bkash', 'pending', '2020-02-11 08:47:26', '2020-02-11 08:47:26'),
(102, 'bkash', 'pending', '2020-02-11 09:08:49', '2020-02-11 09:08:49'),
(103, 'rocket', 'pending', '2020-02-11 09:11:30', '2020-02-11 09:11:30'),
(104, 'bkash', 'pending', '2020-02-11 09:16:09', '2020-02-11 09:16:09'),
(105, 'rocket', 'pending', '2020-02-11 09:16:59', '2020-02-11 09:16:59'),
(106, 'bank', 'pending', '2020-02-11 09:17:43', '2020-02-11 09:17:43'),
(107, 'paypal', 'pending', '2020-02-11 09:18:32', '2020-02-11 09:18:32'),
(108, 'bank', 'pending', '2020-02-11 11:26:52', '2020-02-11 11:26:52'),
(109, 'rocket', 'pending', '2020-02-11 11:56:31', '2020-02-11 11:56:31'),
(110, 'paypal', 'pending', '2020-02-13 09:45:26', '2020-02-13 09:45:26'),
(111, 'paypal', 'pending', '2020-02-13 09:46:51', '2020-02-13 09:46:51'),
(112, 'paypal', 'pending', '2020-02-13 09:52:47', '2020-02-13 09:52:47'),
(113, 'paypal', 'pending', '2020-02-13 09:58:23', '2020-02-13 09:58:23'),
(114, 'paypal', 'pending', '2020-02-13 10:06:46', '2020-02-13 10:06:46'),
(115, 'bkash', 'pending', '2020-02-13 10:35:33', '2020-02-13 10:35:33'),
(116, 'rocket', 'pending', '2020-02-13 10:36:57', '2020-02-13 10:36:57'),
(117, 'bank', 'pending', '2020-02-13 10:38:31', '2020-02-13 10:38:31'),
(118, 'paypal', 'pending', '2020-02-13 10:39:21', '2020-02-13 10:39:21'),
(119, 'bkash', 'pending', '2020-02-15 09:28:02', '2020-02-15 09:28:02'),
(120, 'rocket', 'pending', '2020-02-15 09:51:15', '2020-02-15 09:51:15'),
(121, 'bank', 'pending', '2020-02-15 10:07:41', '2020-02-15 10:07:41'),
(122, 'bank', 'pending', '2020-02-15 10:08:27', '2020-02-15 10:08:27'),
(123, 'bank', 'pending', '2020-02-15 10:15:01', '2020-02-15 10:15:01'),
(124, 'bank', 'pending', '2020-02-15 10:17:30', '2020-02-15 10:17:30'),
(125, 'bank', 'pending', '2020-02-15 10:23:11', '2020-02-15 10:23:11'),
(126, 'bank', 'pending', '2020-02-15 10:24:28', '2020-02-15 10:24:28'),
(127, 'bank', 'pending', '2020-02-15 10:31:42', '2020-02-15 10:31:42'),
(128, 'bank', 'pending', '2020-02-16 12:30:50', '2020-02-16 12:30:50'),
(129, 'bank', 'pending', '2020-02-16 12:32:10', '2020-02-16 12:32:10'),
(130, 'rocket', 'pending', '2020-02-23 04:00:13', '2020-02-23 04:00:13'),
(131, 'bank', 'pending', '2020-02-23 04:52:29', '2020-02-23 04:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cp_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_sub_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ds_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ds_title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ds_sub_title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gm_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gm_title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gm_sub_title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `cp_img`, `cp_title`, `cp_sub_title`, `ds_img`, `ds_title`, `ds_sub_title`, `gm_img`, `gm_title`, `gm_sub_title`, `created_at`, `updated_at`) VALUES
(1, '050820pen.svg', 'Clipping path', 'Starting at $0.49 USD/image', '050911polo-shirt.svg', 'Drop Shadow', 'Starting at $0.22 USD/image', '050939business-and-finance.svg', 'Ghost mannequin', 'Starting at $0.99 USD/image', '2020-02-20 10:49:26', '2020-02-22 14:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `privacypolicy`
--

CREATE TABLE `privacypolicy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacypolicy`
--

INSERT INTO `privacypolicy` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Privacy & Policy', '<div class=\"content-header\" style=\"color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><h2 class=\"content-title\" style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 30px; font-family: inherit; color: rgb(51, 73, 124);\"><br></h2><div><ul style=\"margin-bottom: 10px;\"><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum laborum soluta</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae.</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, voluptas!</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, voluptas!</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, voluptas!</li></ul><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">When not to use image masking</h3><ul style=\"margin-bottom: 10px;\"><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, praesentium.</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, soluta?</li></ul><p style=\"color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse facilis similique corporis consequatur architecto, eaque porro, nisi labore consectetur doloremque distinctio, error beatae modi hic soluta quisquam ea at. Vitae?</p><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">Color change image editing at Clipping Path Bangladesh</h3><p style=\"color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus veritatis ullam aliquid perferendis! Fuga exercitationem, eum ullam id ipsam nihil! Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, magnam!</p><p style=\"color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus veritatis ullam aliquid perferendis! Fuga exercitationem, eum ullam id ipsam nihil! Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, magnam!</p><p style=\"color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus veritatis ullam aliquid perferendis! Fuga exercitationem, eum ullam id ipsam nihil! Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, magnam!</p><p style=\"color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus veritatis ullam aliquid perferendis! Fuga exercitationem, eum ullam id ipsam nihil! Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, magnam!</p></div></div>', '2020-02-26 18:59:50', '2020-02-26 19:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `rdolp`
--

CREATE TABLE `rdolp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bnb_title` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bnb_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bnb_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desk_title` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desk_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desk_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `taddy_title` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taddy_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taddy_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rdolp`
--

INSERT INTO `rdolp` (`id`, `title`, `bnb_title`, `bnb_des`, `bnb_img`, `desk_title`, `desk_des`, `desk_img`, `taddy_title`, `taddy_des`, `taddy_img`, `created_at`, `updated_at`) VALUES
(2, 'Read our latest product photo tips', 'COMMERCIAL PHOTOGRAPHY', 'How to Charge for Photo Editing: a Guide to Setting Rates', '071508business-and-finance.svg', 'COMMERCIAL PHOTOGRAPHY', 'How to Charge for Photo Editing: a Guide to Setting Rates\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '071520desk.svg', 'COMMERCIAL PHOTOGRAPHY', 'How to Charge for Photo Editing: a Guide to Setting Rates', '071527teddy-bear.svg', '2020-02-22 13:12:13', '2020-02-22 13:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `seeurrk`
--

CREATE TABLE `seeurrk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dscrptn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bnb_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `clock_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pen_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `polo_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sun_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `teddy_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tnd_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seeurrk`
--

INSERT INTO `seeurrk` (`id`, `dscrptn`, `bnb_img`, `clock_img`, `desk_img`, `fb_img`, `mail_img`, `pen_img`, `polo_img`, `sun_img`, `teddy_img`, `tnd_img`, `created_at`, `updated_at`) VALUES
(1, 'Please see our  work.', '071553sun.svg', '070922desk.svg', '070922fnf.svg', '071608time-and-date.svg', '070922mail.svg', '070922pen.svg', '070922polo-shirt.svg', '070922sun.svg', '070922teddy-bear.svg', '070922time-and-date.svg', '2020-02-20 13:09:22', '2020-02-20 13:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `title`, `publication_status`, `updated_at`, `created_at`) VALUES
(2, 'Clipping path', 1, '2020-01-19 06:04:40', '2020-01-19 06:04:40'),
(4, 'Image masking', 1, '2020-01-19 06:04:57', '2020-01-19 06:04:57'),
(5, 'Product photo-editing', 1, '2020-02-29 17:26:26', '2020-01-19 06:05:05'),
(6, 'Vector conversion', 1, '2020-03-03 17:47:36', '2020-01-19 06:05:14'),
(7, 'Drop shadow', 1, '2020-02-29 17:25:41', '2020-01-19 06:05:26'),
(8, 'Color variants', 1, '2020-02-29 17:25:29', '2020-01-19 06:05:37'),
(9, 'Photo retouching', 1, '2020-02-29 17:26:37', '2020-01-19 06:05:45'),
(14, 'Background Removal', 1, '2020-02-29 17:24:49', '2020-01-29 12:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `created_at`, `updated_at`) VALUES
(4, 'ohidujjamanfahad987@gmail.com', '2020-02-27 12:24:00', '2020-02-27 12:24:00'),
(7, 'shuhanshuvo85@gmail.com', '2020-02-27 17:20:59', '2020-02-27 17:20:59'),
(9, 'fazleyrabby007@gmail.com', '2020-02-27 17:24:58', '2020-02-27 17:24:58'),
(10, 'shahidulislamgtc@gmail.com', '2020-02-27 17:32:02', '2020-02-27 17:32:02'),
(11, 'fazleyrabbicse@gmail.com', '2020-02-27 17:32:23', '2020-02-27 17:32:23'),
(12, 'shinakdha7@gmail.com', '2020-02-27 17:48:04', '2020-02-27 17:48:04'),
(13, 'sr.tushar.pro@gmail.com', '2020-02-27 19:17:39', '2020-02-27 19:17:39'),
(14, 'fazleyarabbi@yahoo.com.au', '2020-03-03 17:19:12', '2020-03-03 17:19:12'),
(15, 'kafjonrabbi@live.com', '2020-03-03 17:19:20', '2020-03-03 17:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `taqs`
--

CREATE TABLE `taqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taqs_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taqs_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taqs_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taqs_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taqs_five` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taqs_six` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taqs_seven` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taqs_eight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taqs_nine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taqs_ten` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taqs_eleven` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taqs_twelve` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taqs`
--

INSERT INTO `taqs` (`id`, `taqs_one`, `taqs_two`, `taqs_three`, `taqs_four`, `taqs_five`, `taqs_six`, `taqs_seven`, `taqs_eight`, `taqs_nine`, `taqs_ten`, `taqs_eleven`, `taqs_twelve`, `created_at`, `updated_at`) VALUES
(1, 'image-editing', 'commercial photography', 'photography', 'Photoshop', 'How to', 'tips', 'ecommerce', 'ecommerce tips', 'selling online', 'photography tips', 'Outsourcing', 'background removal', '2020-02-22 13:50:20', '2020-02-22 13:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `termcondition`
--

CREATE TABLE `termcondition` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `termcondition`
--

INSERT INTO `termcondition` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Term & Condition', '<div class=\"content-header\" style=\"color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><h2 class=\"content-title\" style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 30px; font-family: inherit; color: rgb(51, 73, 124);\"><span style=\"font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 24px;\">What are color variants?</span></h2></div><div class=\"row\" style=\"color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" style=\"width: 495px; min-height: 1px; float: left;\"><p style=\"color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed praesentium excepturi voluptate facere nostrum, at consequatur quidem aperiam nobis consectetur ipsum, deserunt exercitationem ex eaque, cupiditate labore dolorum id? Aspernatur nesciunt labore assumenda? Aspernatur, sunt.</p><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">How to do color variants</h3><p style=\"color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, aspernatur vitae? Reprehenderit modi dolorum rerum veniam doloribus veritatis ea dignissimos!</p><p style=\"color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore dolorum vitae vel, iste sed fugit laborum at culpa adipisci nulla!</p><p style=\"color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 16px; padding-top: 10px; padding-bottom: 10px;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum nostrum excepturi, omnis repellat laboriosam quisquam dolore quam commodi soluta saepe!</p></div><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" style=\"width: 495px; min-height: 1px; float: left;\"></div></div><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">When to use color variants</h3><ul style=\"margin-bottom: 10px; color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum laborum soluta</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae.</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, voluptas!</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, voluptas!</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, voluptas!</li></ul><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">When not to use image masking</h3><ul style=\"margin-bottom: 10px; color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14px;\"><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, praesentium.</li><li style=\"font-size: 18px; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, soluta?</li></ul><p style=\"color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 10px; padding-bottom: 10px;\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse facilis similique corporis consequatur architecto, eaque porro, nisi labore consectetur doloremque distinctio, error beatae modi hic soluta quisquam ea at. Vitae?</p><h3 style=\"margin-top: 20px; margin-bottom: 10px; line-height: 1.1; font-size: 24px; font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(51, 73, 124); padding-top: 10px; padding-bottom: 10px;\">Color change image editing at Clipping Path Bangladesh</h3><p style=\"color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 10px; padding-bottom: 10px;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus veritatis ullam aliquid perferendis! Fuga exercitationem, eum ullam id ipsam nihil! Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, magnam!</p><p style=\"color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 10px; padding-bottom: 10px;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus veritatis ullam aliquid perferendis! Fuga exercitationem, eum ullam id ipsam nihil! Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, magnam!</p><p style=\"color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 10px; padding-bottom: 10px;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus veritatis ullam aliquid perferendis! Fuga exercitationem, eum ullam id ipsam nihil! Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, magnam!</p><p style=\"color: rgb(44, 60, 98); font-family: &quot;Josefin Sans&quot;, sans-serif; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 10px; padding-bottom: 10px;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus veritatis ullam aliquid perferendis! Fuga exercitationem, eum ullam id ipsam nihil! Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, magnam!</p><div><br></div>', '2020-02-26 18:14:01', '2020-02-26 18:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `topsec`
--

CREATE TABLE `topsec` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `top_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topsec`
--

INSERT INTO `topsec` (`id`, `top_title`, `sub_title`, `image`, `color`, `created_at`, `updated_at`) VALUES
(2, 'Galaxy Global IT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '084811group-of-people-in-dress-suits-776615.jpg', '#8000ff', '2020-02-19 11:11:49', '2020-03-03 14:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `tranection`
--

CREATE TABLE `tranection` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `sender_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `random_trx_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tranection`
--

INSERT INTO `tranection` (`id`, `user_id`, `sender_number`, `trx_id`, `random_trx_id`, `bank_number`, `payment_type`, `payment_status`, `amount`, `created_at`, `updated_at`) VALUES
(63, 1, '01710021328', 'ASDBV1234XZ', '1txb7HyXfcb', NULL, 'bkash', '0', '7879654', '2020-02-11 09:16:13', '2020-02-11 09:16:13'),
(64, 1, '01710021328', 'MBBN155AS', '1ZMWTFP9jJO', NULL, 'rocket', '1', '7879654', '2020-02-11 09:17:04', '2020-02-11 09:17:04'),
(65, 1, NULL, NULL, '1QukSEPQRjB', 'BS65465465', 'bank', '0', '7879654', '2020-02-11 09:17:47', '2020-02-11 09:17:47'),
(66, 1, NULL, NULL, '1rAlw3RaDMg', NULL, 'paypal', '1', '7879654', '2020-02-11 09:18:35', '2020-02-11 09:18:35'),
(68, 1, '464', '64646', '1e9EM8tMbEa', NULL, 'rocket', '0', '456789', '2020-02-11 11:56:35', '2020-02-11 11:56:35'),
(69, 1, NULL, NULL, '1D6QDq4hgN1', NULL, 'paypal', '1', '7879654', '2020-02-13 10:06:51', '2020-02-13 10:06:51'),
(70, 1, '01710021328', 'ASDDSA125CX', '1clJHi9Cil0', NULL, 'bkash', '0', '32145', '2020-02-13 10:35:36', '2020-02-13 10:35:36'),
(71, 1, '01713869303', 'MNB124ZXC', '1dKi3p8IwB4', NULL, 'rocket', '0', '32145', '2020-02-13 10:37:00', '2020-02-13 10:37:00'),
(72, 1, NULL, NULL, '11H6jo48879', '12975665', 'bank', '0', '32145', '2020-02-13 10:38:36', '2020-02-13 10:38:36'),
(73, 1, NULL, NULL, '1ugDXc4CDDg', NULL, 'paypal', '1', '32145', '2020-02-13 10:39:25', '2020-02-13 10:39:25'),
(74, 3, '46464', '64646', '3RrBbQT04sB', NULL, 'bkash', '0', '2500', '2020-02-15 09:28:09', '2020-02-15 09:28:09'),
(75, 3, '46', '646', '3HioHzLa6r6', NULL, 'rocket', '0', '2500', '2020-02-15 09:51:19', '2020-02-15 09:51:19'),
(76, 3, NULL, NULL, '3uQG4A84vH5', '464664', 'bank', '0', '2500', '2020-02-15 10:07:45', '2020-02-15 10:07:45'),
(77, 3, NULL, NULL, '3x6AVvaq7N6', '6464', 'bank', '0', '2500', '2020-02-15 10:08:30', '2020-02-15 10:08:30'),
(78, 3, NULL, NULL, '3ORfzievlIA', '466', 'bank', '0', '2500', '2020-02-15 10:15:05', '2020-02-15 10:15:05'),
(79, 3, NULL, NULL, '3dxdYSiRS3n', '446', 'bank', '0', '2500', '2020-02-15 10:17:33', '2020-02-15 10:17:33'),
(80, 3, NULL, NULL, '31kVE95BoGy', 'fghfghfgh', 'bank', '1', '2500', '2020-02-15 10:24:31', '2020-02-15 10:24:31'),
(81, 3, NULL, NULL, '3L1HCeeIVs4', 'afaf', 'bank', '1', '2500', '2020-02-15 10:31:47', '2020-02-15 10:31:47'),
(82, 1, NULL, NULL, '1VCfjvk6EXe', '4646', 'bank', '1', '456789', '2020-02-16 12:32:16', '2020-02-16 12:32:16'),
(83, 1, '4864646', 'VCDSDFF4564', '1YjIBcGb4tl', NULL, 'rocket', '0', '456789', '2020-02-23 04:00:18', '2020-02-23 04:00:18'),
(84, 1, NULL, NULL, '1yzZNl1A4KP', '35464', 'bank', '0', '7879654', '2020-02-23 04:52:33', '2020-02-23 04:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_email_ver` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `first_name`, `last_name`, `company`, `address`, `city`, `country`, `profile_img`, `zip`, `phone`, `is_email_ver`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ali Saheb', 'user@gmail.com', NULL, '$2y$10$PL0uocvUQNtk0YyAvIYPaOfDVmj1vWTfCRQY8tIdyqCf49xgxEhuW', 'ali', 'saheb', 'GGI', '2/3 New circular Road,West Malibagh,Dhaka-1217', 'Dhaka', 'Bangladesh', '055756ali.jpg', '1217', '01710021328', NULL, NULL, '2020-01-20 00:43:51', '2020-02-18 11:51:18'),
(6, 'Jubayer', 'orphanjubu@gmail.com', NULL, '$2y$10$5YuO5UtXsiShvch/6RYNu.bT6bsF/99Z5M.PLcsbjB7KH7uzuBiM6', NULL, NULL, NULL, NULL, NULL, NULL, '054601Capture.PNG', NULL, NULL, NULL, NULL, '2020-02-19 11:42:23', '2020-02-19 11:46:01'),
(7, 'Fazley Rabbi', 'kafjonrabbi@live.com', NULL, '$2y$10$6L9yOWt1mBIvybgv7PSHcOKVIJ/jZ8.DcGF3NgFU0FBwgACH4DtUa', 'hadh', 'hah', 'hha', '2/3 New circular Road,West Malibagh,Dhaka-1217', NULL, 'hgah', '113626three-children-sitting-on-stairs-1212805.jpg', '5466', '54364', NULL, NULL, '2020-03-03 17:35:25', '2020-03-03 17:36:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `attachefile`
--
ALTER TABLE `attachefile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catwiseservice`
--
ALTER TABLE `catwiseservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clpngpbd`
--
ALTER TABLE `clpngpbd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmtdmw`
--
ALTER TABLE `cmtdmw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpburoes`
--
ALTER TABLE `cpburoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveryorder`
--
ALTER TABLE `deliveryorder`
  ADD PRIMARY KEY (`delivryordr_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fsthqaie`
--
ALTER TABLE `fsthqaie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getintouch`
--
ALTER TABLE `getintouch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gnrlstng`
--
ALTER TABLE `gnrlstng`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `howitwork`
--
ALTER TABLE `howitwork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iespricing`
--
ALTER TABLE `iespricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orderquote`
--
ALTER TABLE `orderquote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderservice`
--
ALTER TABLE `orderservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourwork`
--
ALTER TABLE `ourwork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pkg_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacypolicy`
--
ALTER TABLE `privacypolicy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rdolp`
--
ALTER TABLE `rdolp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeurrk`
--
ALTER TABLE `seeurrk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taqs`
--
ALTER TABLE `taqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termcondition`
--
ALTER TABLE `termcondition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topsec`
--
ALTER TABLE `topsec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tranection`
--
ALTER TABLE `tranection`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attachefile`
--
ALTER TABLE `attachefile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `catwiseservice`
--
ALTER TABLE `catwiseservice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `clpngpbd`
--
ALTER TABLE `clpngpbd`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cmtdmw`
--
ALTER TABLE `cmtdmw`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cpburoes`
--
ALTER TABLE `cpburoes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deliveryorder`
--
ALTER TABLE `deliveryorder`
  MODIFY `delivryordr_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fsthqaie`
--
ALTER TABLE `fsthqaie`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `getintouch`
--
ALTER TABLE `getintouch`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gnrlstng`
--
ALTER TABLE `gnrlstng`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `howitwork`
--
ALTER TABLE `howitwork`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `iespricing`
--
ALTER TABLE `iespricing`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orderquote`
--
ALTER TABLE `orderquote`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orderservice`
--
ALTER TABLE `orderservice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=415;

--
-- AUTO_INCREMENT for table `ourwork`
--
ALTER TABLE `ourwork`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pkg_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `privacypolicy`
--
ALTER TABLE `privacypolicy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rdolp`
--
ALTER TABLE `rdolp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seeurrk`
--
ALTER TABLE `seeurrk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `taqs`
--
ALTER TABLE `taqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `termcondition`
--
ALTER TABLE `termcondition`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topsec`
--
ALTER TABLE `topsec`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tranection`
--
ALTER TABLE `tranection`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
