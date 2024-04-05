-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2024 at 07:09 PM
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
-- Database: `codespace`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL,
  `item_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `item_img`) VALUES
(1, 'img/BotanicalCandle.jpg'),
(2, 'img/DriedBotanicalCandle.jpg'),
(3, 'img/FiveElements.jpg'),
(4, 'img/ColourfulCube.jpg'),
(5, 'img/TealightsHandcrafted.jpg'),
(6, 'img/BlackCarved.jpg'),
(7, 'img/WoodenCandleHolderTimber.jpg'),
(8, 'img/WoodenCandleStickHolder.jpg'),
(9, 'img/NestingTealightHolder.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `quantity` int(10) NOT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`item_id`, `user_id`, `total`, `order_date`, `quantity`, `payment_id`) VALUES
(1, 1, 45.00, '2024-03-22 12:18:27', 0, 0),
(2, 1, 15.00, '2024-03-22 13:55:14', 0, 0),
(3, 4, 55.00, '2024-03-22 17:36:23', 0, 0),
(4, 1, 15.00, '2024-03-22 17:46:40', 0, 0),
(5, 14, 80.00, '2024-02-01 10:56:49', 0, 0),
(6, 12, 40.00, '2024-04-10 14:22:04', 0, 0),
(7, 1, 75.00, '2024-03-26 13:21:16', 0, 0),
(8, 1, 10.00, '2024-03-26 13:26:37', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_content`
--

CREATE TABLE `order_content` (
  `content_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` decimal(8,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_content`
--

INSERT INTO `order_content` (`content_id`, `order_id`, `item_id`, `quantity`, `price`) VALUES
(1, 3, 1, 1, 15.00),
(2, 3, 3, 2, 10.00),
(3, 3, 4, 2, 10.00),
(4, 4, 1, 1, 15.00),
(5, 5, 3, 1, 10.00),
(7, 6, 2, 1, 15.00),
(8, 6, 4, 2, 10.00),
(9, 6, 6, 1, 5.00),
(10, 7, 1, 1, 15.00),
(11, 7, 2, 4, 15.00),
(12, 8, 4, 1, 10.00);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_amount` decimal(6,2) NOT NULL,
  `account_no` int(10) NOT NULL,
  `bsb_no` int(10) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(11) UNSIGNED NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `item_price` decimal(8,2) NOT NULL,
  `product_item_id` int(11) DEFAULT NULL,
  `img_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `item_desc`, `item_price`, `product_item_id`, `img_id`) VALUES
(1, 'Handmade Botanical Candle With Lavender And Daisies', 15.00, 2, 1),
(2, 'Dried Botanical Candle Handcrafted', 15.00, 2, 2),
(3, 'Hand Crafted Five Element Candles', 10.00, 1, 3),
(4, 'Handmade Pillar Colourful Candle', 10.00, 4, 4),
(6, 'Hand Crafted - Black', 5.00, 3, 6),
(7, 'Wooden Timber Candle Holder', 50.00, 8, 7),
(17, 'Test candle', 25.55, 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_items`
--

CREATE TABLE `product_items` (
  `product_item_ID` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_items`
--

INSERT INTO `product_items` (`product_item_ID`, `product_name`) VALUES
(1, 'Stick Candles'),
(2, 'Botanical Candle'),
(3, 'Carved'),
(4, 'Pillar'),
(5, 'Tea Lights'),
(6, 'Tea Light Holder'),
(7, 'Candle Stick Holder'),
(8, 'Candle Holder');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `reg_date` date NOT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `reg_date`, `payment_id`) VALUES
(1, 'Yasemin', 'Hasip', 'yas@email.com', '12345', '2024-02-16', 0),
(2, 'Joe', 'Bloggs', 'JB@email.co.uk', '12345', '2024-02-17', 0),
(3, 'Jane', 'Doe', 'JD@email.com', '12345', '2024-03-18', 0),
(4, 'John', 'Doe', 'john.doe@example.com', 'password123', '2024-03-21', 0),
(5, 'Jane', 'Smith', 'jane.smith@example.com', 'password456', '2024-03-21', 0),
(6, 'Alice', 'Johnson', 'alice.johnson@example.com', 'password789', '2024-03-21', 0),
(7, 'Bob', 'Brown', 'bob.brown@example.com', 'passwordABC', '2024-03-21', 0),
(8, 'Emily', 'Davis', 'emily.davis@example.com', 'passwordDEF', '2024-03-21', 0),
(9, 'Michael', 'Wilson', 'michael.wilson@example.com', 'passwordGHI', '2024-03-21', 0),
(10, 'Sarah', 'Taylor', 'sarah.taylor@example.com', 'passwordJKL', '2024-03-21', 0),
(11, 'David', 'Martinez', 'david.martinez@example.com', 'passwordMNO', '2024-03-21', 0),
(12, 'Jessica', 'Anderson', 'jessica.anderson@example.com', 'passwordPQR', '2024-03-21', 0),
(13, 'Matthew', 'Thomas', 'matthew.thomas@example.com', 'passwordSTU', '2024-03-21', 0),
(14, 'Laura', 'Garcia', 'laura.garcia@example.com', 'passwordVWX', '2024-03-21', 0),
(15, 'Daniel', 'Rodriguez', 'daniel.rodriguez@example.com', 'passwordYZA', '2024-03-21', 0),
(16, 'Ashley', 'Lopez', 'ashley.lopez@example.com', 'passwordBCD', '2024-03-21', 0),
(17, 'Christopher', 'Hernandez', 'christopher.hernandez@example.com', 'passwordEFG', '2024-03-21', 0),
(18, 'Amanda', 'Hill', 'amanda.hill@example.com', 'passwordHIJ', '2024-03-21', 0),
(19, 'Andrew', 'Young', 'andrew.young@example.com', 'passwordKLM', '2024-03-21', 0),
(20, 'Megan', 'King', 'megan.king@example.com', 'passwordNOP', '2024-03-21', 0),
(21, 'Kevin', 'Wright', 'kevin.wright@example.com', 'passwordQRS', '2024-04-21', 0),
(22, 'Rachel', 'Scott', 'rachel.scott@example.com', 'passwordTUV', '2024-04-02', 0),
(23, 'Justin', 'Nguyen', 'justin.nguyen@example.com', 'passwordWXY', '2024-04-19', 0),
(24, 'Yasemin', 'Hasip', 'yasH@email.co.uk', '12345', '2024-03-27', 0),
(25, 'John', 'Smith', 'JS@email.com', '12345', '2024-03-30', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_images`
-- (See below for the actual view)
--
CREATE TABLE `view_images` (
`img_id` int(11)
,`item_img` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_orders`
-- (See below for the actual view)
--
CREATE TABLE `view_orders` (
`item_id` int(10) unsigned
,`user_id` int(10) unsigned
,`total` decimal(8,2)
,`order_date` datetime
,`quantity` int(10)
,`payment_id` int(10) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_order_content`
-- (See below for the actual view)
--
CREATE TABLE `view_order_content` (
`content_id` int(10) unsigned
,`order_id` int(10) unsigned
,`item_id` int(10) unsigned
,`quantity` int(10) unsigned
,`price` decimal(8,2) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_payment`
-- (See below for the actual view)
--
CREATE TABLE `view_payment` (
`payment_id` int(10) unsigned
,`payment_amount` decimal(6,2)
,`account_no` int(10)
,`bsb_no` int(10)
,`user_id` int(10) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_products`
-- (See below for the actual view)
--
CREATE TABLE `view_products` (
`item_id` int(11) unsigned
,`item_desc` varchar(200)
,`item_price` decimal(8,2)
,`product_item_id` int(11)
,`img_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_product_items`
-- (See below for the actual view)
--
CREATE TABLE `view_product_items` (
`product_item_ID` int(11)
,`product_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_users`
-- (See below for the actual view)
--
CREATE TABLE `view_users` (
`user_id` int(10) unsigned
,`first_name` varchar(20)
,`last_name` varchar(20)
,`email` varchar(60)
,`password` varchar(20)
,`reg_date` date
,`payment_id` int(10) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_user_orders`
-- (See below for the actual view)
--
CREATE TABLE `view_user_orders` (
`user_id` int(10) unsigned
,`order_Item_Id` int(10) unsigned
,`order_date` datetime
,`total` decimal(8,2)
,`item_id` int(10) unsigned
,`quantity` int(10) unsigned
,`price` decimal(8,2) unsigned
,`order_id` int(10) unsigned
,`product_name` varchar(100)
,`product_item_id` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `view_images`
--
DROP TABLE IF EXISTS `view_images`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_images`  AS SELECT `images`.`img_id` AS `img_id`, `images`.`item_img` AS `item_img` FROM `images` ;

-- --------------------------------------------------------

--
-- Structure for view `view_orders`
--
DROP TABLE IF EXISTS `view_orders`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_orders`  AS SELECT `orders`.`item_id` AS `item_id`, `orders`.`user_id` AS `user_id`, `orders`.`total` AS `total`, `orders`.`order_date` AS `order_date`, `orders`.`quantity` AS `quantity`, `orders`.`payment_id` AS `payment_id` FROM `orders` ;

-- --------------------------------------------------------

--
-- Structure for view `view_order_content`
--
DROP TABLE IF EXISTS `view_order_content`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_order_content`  AS SELECT `order_content`.`content_id` AS `content_id`, `order_content`.`order_id` AS `order_id`, `order_content`.`item_id` AS `item_id`, `order_content`.`quantity` AS `quantity`, `order_content`.`price` AS `price` FROM `order_content` ;

-- --------------------------------------------------------

--
-- Structure for view `view_payment`
--
DROP TABLE IF EXISTS `view_payment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_payment`  AS SELECT `payment`.`payment_id` AS `payment_id`, `payment`.`payment_amount` AS `payment_amount`, `payment`.`account_no` AS `account_no`, `payment`.`bsb_no` AS `bsb_no`, `payment`.`user_id` AS `user_id` FROM `payment` ;

-- --------------------------------------------------------

--
-- Structure for view `view_products`
--
DROP TABLE IF EXISTS `view_products`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_products`  AS SELECT `products`.`item_id` AS `item_id`, `products`.`item_desc` AS `item_desc`, `products`.`item_price` AS `item_price`, `products`.`product_item_id` AS `product_item_id`, `products`.`img_id` AS `img_id` FROM `products` ;

-- --------------------------------------------------------

--
-- Structure for view `view_product_items`
--
DROP TABLE IF EXISTS `view_product_items`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_product_items`  AS SELECT `product_items`.`product_item_ID` AS `product_item_ID`, `product_items`.`product_name` AS `product_name` FROM `product_items` ;

-- --------------------------------------------------------

--
-- Structure for view `view_users`
--
DROP TABLE IF EXISTS `view_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_users`  AS SELECT `users`.`user_id` AS `user_id`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`email` AS `email`, `users`.`password` AS `password`, `users`.`reg_date` AS `reg_date`, `users`.`payment_id` AS `payment_id` FROM `users` ;

-- --------------------------------------------------------

--
-- Structure for view `view_user_orders`
--
DROP TABLE IF EXISTS `view_user_orders`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_user_orders`  AS SELECT `u`.`user_id` AS `user_id`, `o`.`item_id` AS `order_Item_Id`, `o`.`order_date` AS `order_date`, `o`.`total` AS `total`, `oc`.`item_id` AS `item_id`, `oc`.`quantity` AS `quantity`, `oc`.`price` AS `price`, `oc`.`order_id` AS `order_id`, `pi`.`product_name` AS `product_name`, `pi`.`product_item_ID` AS `product_item_id` FROM (((`orders` `o` join `order_content` `oc` on(`oc`.`order_id` = `o`.`item_id`)) join `product_items` `pi` on(`oc`.`item_id` = `pi`.`product_item_ID`)) join `users` `u` on(`u`.`user_id` = `o`.`user_id`)) ORDER BY `u`.`user_id` ASC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `order_content`
--
ALTER TABLE `order_content`
  ADD PRIMARY KEY (`content_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `fk_product_name` (`product_item_id`),
  ADD KEY `fk_item_img` (`img_id`);

--
-- Indexes for table `product_items`
--
ALTER TABLE `product_items`
  ADD PRIMARY KEY (`product_item_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `payment_id` (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_content`
--
ALTER TABLE `order_content`
  MODIFY `content_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `item_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_items`
--
ALTER TABLE `product_items`
  MODIFY `product_item_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `order_content`
--
ALTER TABLE `order_content`
  ADD CONSTRAINT `order_content_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`item_id`),
  ADD CONSTRAINT `order_content_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `products` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `orders` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_item_img` FOREIGN KEY (`img_id`) REFERENCES `images` (`img_id`),
  ADD CONSTRAINT `fk_product_name` FOREIGN KEY (`product_item_id`) REFERENCES `product_items` (`product_item_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
