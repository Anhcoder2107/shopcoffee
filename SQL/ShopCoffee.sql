-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 01, 2024 lúc 03:10 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopcoffee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `ctegory_name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `frist_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dinnertable`
--

CREATE TABLE `dinnertable` (
  `dinnerTable_id` int(11) NOT NULL,
  `number_table` int(11) DEFAULT NULL,
  `number_customer` int(11) DEFAULT NULL,
  `dinnerTable_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `feedback_content` text DEFAULT NULL,
  `evaluate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `dinnerTable_id` int(11) NOT NULL,
  `number` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `payment_method` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `order_status` varchar(20) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `price` float NOT NULL,
  `thumbnail` varchar(50) DEFAULT NULL,
  `unit` varchar(20) NOT NULL,
  `expiry_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`, `description`, `price`, `thumbnail`, `unit`, `expiry_date`) VALUES
(1, NULL, 'Daniella Homenick', 'For really this morning I\'ve nothing to do: once or twice, half hoping that the hedgehog had unrolled itself, and began to feel a little queer, won\'t you?\' \'Not a bit,\' she thought it would be.', 836321000, 'https://via.placeholder.com/360x360.png/00ee22?tex', 'temporibus', '1991-12-21'),
(2, NULL, 'tra sua', 'tra vi sua', 3, 'http://localhost/shopcoffee/product/create', '3', '2024-03-01'),
(3, NULL, 'tra da', 'tra vi da', 1, 'http://localhost/shopcoffee/product/create', '-2', '2024-02-29'),
(4, NULL, 'tra gung', 'tra vi gung', 2, 'http://localhost/shopcoffee/product/create', '2', '2024-01-31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotions`
--

CREATE TABLE `promotions` (
  `promotion_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `promotion_content` text DEFAULT NULL,
  `promotion_date` datetime DEFAULT NULL,
  `promotion_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staffs`
--

CREATE TABLE `staffs` (
  `staff_id` int(11) NOT NULL,
  `frist_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` text DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `userPassword` varchar(255) DEFAULT NULL,
  `position` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user`, `email`, `userPassword`, `position`) VALUES
(1, 'Trịnh Nhật Anh', 'trinhnhatanh27@gmail.com', '$2y$10$nP8KIInJ76gVhDmQKpJ6W.SKJxipsFLoJeBwxYTuFJE/l.S7XdXvu', '0'),
(4, 'Trịnh Nhật Anh', 'trinhnhatanh37@gmail.com', '$2y$10$hvdEItJEJECXxagwIw2d..esUwqry.qGDCWiGpD2HYXCVdUzCz2Zi', '0'),
(5, 'trinh nhat anh', 'trinhnhatanh47@gmail.com', '$2y$10$H35g0JaVVLWVQxnoIu7z1OLT26h0zwSz/zR27RbYnbmnmccMTgoEK', '0'),
(6, 'Trịnh Nhật Anh', 'trinhnhatanh57@gmail.com', '$2y$10$RFUNRSTUK3KPiUTeKMrV8unGL2CNQZAuMyhJziRKyJaGeSGzw2UDy', '0'),
(7, 'My', 'trinhnhatanh67@gmail.com', '$2y$10$IeX1BFuHXTj6zshSniKOG.owyGkXCxb7AqkLPDyd8PPT5ZNvrzcr2', '0'),
(8, 'Nguyen Thi Khanh Linh', 'trinhnhatanh77@gmail.com', '$2y$10$VRaZYRFijyZOBcfhEMh.NeQj1J8XLenmsJb/X7OgGi4god8BvY1S.', '0'),
(9, 'Anhcoder', 'trinhnhatanh78@gmail.com', '$2y$10$DA5TWdrpMTMIox6U4nhuR.2YPUHop2RH9bcnqxJ9ow/SxqYogMc0m', '0'),
(10, 'trinhnhatanh78@gmail.com', 'as', '$2y$10$Y2cMPENhCY5xZb0VSgNaXuCIfae4yA3BJPbqSt/I6tSJ9D6Uai5eK', '0'),
(11, 'trinhnhatanh78@gmail.com', 'sa', '$2y$10$VofidbFwuYHGGTMNgjRfCelpEn5/ZdLRv6QmK1Qg9KD4QadrBgSyu', '0'),
(12, 'trinhnhatanh78', 'trinhnhatanh79@gmail.com', '$2y$10$TFaGlJAXWziI8HySkPPf1OTEt/hEdC2UUhtg64vPtsJKEz2PpjKBa', '0'),
(13, 'admin', 'admin@admin.com', 'admin123', '0'),
(14, 'admin', 'admin@gmail.com', '$2y$10$FRDiTUszI8wxcZBKKTzCmOMJihcLe2/vkvq0rQrrQDJwylBJABnS6', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `Email` (`email`);

--
-- Chỉ mục cho bảng `dinnertable`
--
ALTER TABLE `dinnertable`
  ADD PRIMARY KEY (`dinnerTable_id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `CustomerID` (`customer_id`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `ProductID` (`product_id`),
  ADD KEY `DinnerTableID` (`dinnerTable_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `CustomerID` (`customer_id`),
  ADD KEY `StaffID` (`staff_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `CategoryID` (`category_id`);

--
-- Chỉ mục cho bảng `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`promotion_id`),
  ADD KEY `ProductID` (`product_id`);

--
-- Chỉ mục cho bảng `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `Email` (`email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `orderdetail_ibfk_3` FOREIGN KEY (`dinnerTable_id`) REFERENCES `dinnertable` (`dinnerTable_id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`staff_id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Các ràng buộc cho bảng `promotions`
--
ALTER TABLE `promotions`
  ADD CONSTRAINT `promotions_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
