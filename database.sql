-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP DATABASE IF EXISTS `electronic_store`;
-- Dumping database structure for electronic_store
CREATE DATABASE IF NOT EXISTS `electronic_store` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `electronic_store`;

-- Dumping structure for table electronic_store.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table electronic_store.categories: ~6 rows (approximately)
INSERT INTO `categories` (`id`, `name`) VALUES
	(1, 'Laptops'),
	(2, 'Desktops'),
	(3, 'Tablets'),
	(4, 'Smartphones'),
	(5, 'Peripherals'),
	(6, 'Accessories');

-- Dumping structure for table electronic_store.discounts
CREATE TABLE IF NOT EXISTS `discounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table electronic_store.discounts: ~3 rows (approximately)
INSERT INTO `discounts` (`id`, `name`, `discount`) VALUES
	(1, 'First Discount', 0.10),
	(2, 'Second Discount', 0.15),
	(3, 'Third Discount', 0.20);

-- Dumping structure for table electronic_store.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `path` varchar(255) DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table electronic_store.images: ~0 rows (approximately)

-- Dumping structure for table electronic_store.orderdetails
CREATE TABLE IF NOT EXISTS `orderdetails` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `price` float DEFAULT NULL,
  `qty` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table electronic_store.orderdetails: ~0 rows (approximately)

-- Dumping structure for table electronic_store.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table electronic_store.orders: ~0 rows (approximately)

-- Dumping structure for table electronic_store.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `description` text,
  `price` float DEFAULT NULL,
  `qty_stock` int DEFAULT NULL,
  `in_stock` tinyint(1) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `new_price` float DEFAULT NULL,
  `discount_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `discount_id` (`discount_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table electronic_store.products: ~32 rows (approximately)
INSERT INTO `products` (`id`, `name`, `brand`, `description`, `price`, `qty_stock`, `in_stock`, `date`, `new_price`, `discount_id`, `category_id`) VALUES
	(1, 'Laptop', 'Dell', 'Powerful laptop with high-performance features.', 1200, 50, 1, '2023-01-01', 1100, 1, 1),
	(2, 'Smartphone', 'Samsung', 'Latest Samsung smartphone with advanced camera features.', 800, 30, 1, '2023-01-02', 750, 2, 2),
	(3, 'Wireless Mouse', 'Logitech', 'Ergonomic wireless mouse for comfortable use.', 25, 100, 1, '2023-01-03', NULL, NULL, 3),
	(4, 'Desktop Computer', 'HP', 'High-end desktop computer for gaming and professional use.', 1500, 20, 1, '2023-01-04', 1400, 1, 1),
	(5, 'Headphones', 'Sony', 'Noise-canceling headphones with premium sound quality.', 150, 50, 1, '2023-01-05', NULL, NULL, 4),
	(6, 'Tablet', 'Apple', 'Compact tablet with a retina display for multimedia consumption.', 600, 40, 1, '2023-01-06', 550, 2, 2),
	(7, 'External Hard Drive', 'Seagate', '1TB external hard drive for additional storage.', 70, 80, 1, '2023-01-07', NULL, NULL, 5),
	(8, 'Gaming Mouse', 'Razer', 'Precision gaming mouse with customizable RGB lighting.', 50, 60, 1, '2023-01-08', NULL, NULL, 3),
	(9, 'Smartwatch', 'Fitbit', 'Fitness tracker and smartwatch for health monitoring.', 120, 30, 1, '2023-01-09', 110, 2, 6),
	(11, 'Graphics Card', 'NVIDIA', 'High-performance graphics card for gaming enthusiasts.', 400, 15, 1, '2023-01-11', 380, 1, 1),
	(14, 'Wireless Keyboard', 'Microsoft', 'Slim and comfortable wireless keyboard for efficient typing.', 40, 80, 1, '2023-01-14', NULL, NULL, 3),
	(15, 'Fitness Earbuds', 'Bose', 'Sweat-resistant earbuds for workouts and active lifestyles.', 90, 40, 1, '2023-01-15', 85, 2, 4),
	(16, 'UltraWide Monitor', 'LG', 'Curved UltraWide monitor for immersive gaming and productivity.', 600, 10, 1, '2023-01-16', 580, 1, 1),
	(18, 'Power Bank', 'Anker', 'High-capacity power bank for charging devices on the go.', 30, 60, 1, '2023-01-18', NULL, NULL, 5),
	(19, 'Wireless Charger', 'Belkin', 'Qi-compatible wireless charger for smartphones and accessories.', 25, 40, 1, '2023-01-19', NULL, NULL, 2),
	(20, 'Mechanical Keyboard', 'Corsair', 'RGB mechanical keyboard with customizable key switches.', 120, 20, 1, '2023-01-20', NULL, NULL, 3),
	(21, 'Camera', 'Canon', 'High-resolution camera for photography and videography.', 800, 15, 1, '2023-01-21', 780, 1, 1),
	(23, 'Bluetooth Earphones', 'Sennheiser', 'Wireless Bluetooth earphones with premium audio quality.', 100, 40, 1, '2023-01-23', NULL, NULL, 4),
	(24, 'Gaming Laptop', 'ASUS', 'High-performance gaming laptop with dedicated graphics.', 1300, 10, 1, '2023-01-24', 1200, 1, 1),
	(27, 'VR Headset', 'Oculus', 'Virtual reality headset for immersive gaming and experiences.', 300, 20, 1, '2023-01-27', 280, 1, 1),
	(28, 'Portable SSD', 'WD', 'Fast and compact portable SSD for data storage on the go.', 120, 35, 1, '2023-01-28', NULL, NULL, 5),
	(32, 'Bluetooth Mouse', 'Microsoft', 'Compact and wireless Bluetooth mouse for easy navigation.', 30, 50, 1, '2023-02-02', NULL, NULL, 3),
	(34, 'Solar Charger', 'Goal Zero', 'Portable solar charger for eco-friendly device charging.', 50, 40, 1, '2023-02-04', NULL, NULL, 5),
	(35, 'Ultrabook', 'Lenovo', 'Slim and lightweight ultrabook for on-the-go productivity.', 900, 15, 1, '2023-02-05', 880, 1, 1),
	(36, 'Wireless Gaming Controller', 'SteelSeries', 'Wireless gaming controller for PC and gaming consoles.', 45, 30, 1, '2023-02-06', NULL, NULL, 3),
	(39, 'Fitness Tracker', 'Garmin', 'Water-resistant fitness tracker for activity and health monitoring.', 70, 40, 1, '2023-02-09', NULL, NULL, 6),
	(40, 'Wireless Earbuds', 'Apple', 'True wireless earbuds with seamless integration with Apple devices.', 150, 25, 1, '2023-02-10', 140, 2, 4),
	(43, 'Wireless Charging Pad', 'Spigen', 'Qi-compatible wireless charging pad for smartphones.', 20, 50, 1, '2023-02-13', NULL, NULL, 2),
	(44, 'In-Ear Monitors', 'Shure', 'Professional in-ear monitors for musicians and audio enthusiasts.', 250, 15, 1, '2023-02-14', NULL, NULL, 4),
	(45, 'Game Console', 'Sony PlayStation', 'Latest gaming console for a cutting-edge gaming experience.', 400, 10, 1, '2023-02-15', 380, 1, 1),
	(47, 'Graphic Drawing Tablet', 'Wacom', 'Professional graphic drawing tablet for digital artists and designers.', 200, 20, 1, '2023-02-17', NULL, NULL, 3),
	(49, 'Cordless Phone', 'Panasonic', 'Digital cordless phone with answering machine and caller ID.', 50, 25, 1, '2023-02-19', NULL, NULL, 2);

-- Dumping structure for table electronic_store.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postal_code` varchar(10) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `number` varchar(15) DEFAULT NULL,
  `role` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table electronic_store.users: ~3 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `password`, `city`, `country`, `address`, `postal_code`, `phone`, `number`, `role`) VALUES
	(1, 'Amir', 'user1@gmail.com', '$2y$10$Rdd5gNAFJP7CBilXghAMwO8xSb1yanETyC4UPXoTYQvnzxCMdDjHy', 'Sfax', 'Tunisia', 'Gremda', '3062', '98653221', '7', 1),
	(2, 'Karim', 'user2@gmail.com', '$2y$10$Rdd5gNAFJP7CBilXghAMwO8xSb1yanETyC4UPXoTYQvnzxCMdDjHy', 'Sfax', 'Tunisia', 'Gremda', '3062', '78451256', '15', 1),
	(3, 'Hassen', 'user3@gmail.com', '$2y$10$Rdd5gNAFJP7CBilXghAMwO8xSb1yanETyC4UPXoTYQvnzxCMdDjHy', 'Sfax', 'Tunisia', 'Gremda', '3062', '96766935', '15', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
