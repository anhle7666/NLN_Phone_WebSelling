-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2022 lúc 06:23 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ban_hang`
--
CREATE DATABASE IF NOT EXISTS `ban_hang` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `ban_hang`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh`
--

CREATE TABLE `anh` (
  `idSP` int(11) NOT NULL,
  `idMau` int(11) NOT NULL,
  `idAnh` int(11) NOT NULL,
  `linkAnh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenAnh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `anh`
--

INSERT INTO `anh` (`idSP`, `idMau`, `idAnh`, `linkAnh`, `tenAnh`) VALUES
(1, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/235838/samsung-galaxy-s22-ultra-1-1.jpg', NULL),
(1, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/235838/samsung-galaxy-s22-ultra-do-4.jpg', NULL),
(1, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/235838/samsung-galaxy-s22-ultra-do-5.jpg', NULL),
(1, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/235838/samsung-galaxy-s22-ultra-do-6.jpg', NULL),
(1, 1, 5, 'https://cdn.tgdd.vn/Products/Images/42/235838/samsung-galaxy-s22-ultra-2-1.jpg', NULL),
(1, 1, 6, 'https://cdn.tgdd.vn/Products/Images/42/235838/samsung-galaxy-s22-ultra-3-1.jpg', NULL),
(1, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/235838/galaxy-s22-ultra-white-7.jpg', NULL),
(1, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/235838/galaxy-s22-ultra-white-10.jpg', NULL),
(1, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/235838/galaxy-s22-ultra-white-4.jpg', NULL),
(1, 3, 1, 'https://cdn.tgdd.vn/Products/Images/42/235838/galaxy-s22-ultra-black-7.jpg', NULL),
(1, 3, 2, 'https://cdn.tgdd.vn/Products/Images/42/235838/galaxy-s22-ultra-black-10.jpg', NULL),
(1, 3, 3, 'https://cdn.tgdd.vn/Products/Images/42/235838/galaxy-s22-ultra-black-4.jpg', NULL),
(1, 4, 1, 'https://cdn.tgdd.vn/Products/Images/42/235838/samsung-galaxy-s22-ultra-xanh-reu-1-1.jpg', NULL),
(1, 4, 2, 'https://cdn.tgdd.vn/Products/Images/42/235838/samsung-galaxy-s22-ultra-xanh-reu-2-1.jpg', NULL),
(1, 4, 3, 'https://cdn.tgdd.vn/Products/Images/42/235838/samsung-galaxy-s22-ultra-xanh-reu-3-1.jpg', NULL),
(1, 4, 4, 'https://cdn.tgdd.vn/Products/Images/42/235838/samsung-galaxy-s22-ultra-xanh-reu-4-1.jpg', NULL),
(1, 4, 5, 'https://cdn.tgdd.vn/Products/Images/42/235838/samsung-galaxy-s22-ultra-xanh-reu-5-1.jpg', NULL),
(1, 4, 6, 'https://cdn.tgdd.vn/Products/Images/42/235838/samsung-galaxy-s22-ultra-xanh-reu-6-1.jpg', NULL),
(1, 4, 7, 'https://cdn.tgdd.vn/Products/Images/42/235838/samsung-galaxy-s22-ultra-xanh-reu-7-1.jpg', NULL),
(1, 4, 8, 'https://cdn.tgdd.vn/Products/Images/42/235838/samsung-galaxy-s22-ultra-xanh-reu-9-1.jpg', NULL),
(2, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-xanh-1.jpg', NULL),
(2, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-xanh-2.jpg', NULL),
(2, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-trang-1-1.jpg', NULL),
(2, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-trang-2-1.jpg', NULL),
(2, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-trang-3-1.jpg', NULL),
(2, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-trang-4-1.jpg', NULL),
(2, 2, 5, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-trang-6.jpg', NULL),
(2, 2, 6, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-trang-8.jpg', NULL),
(2, 2, 7, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-8.jpeg', NULL),
(2, 3, 1, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-1-1.jpg', NULL),
(2, 3, 2, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-6.jpg', NULL),
(2, 3, 3, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-9.jpg', NULL),
(2, 3, 4, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-11.jpg', NULL),
(2, 3, 5, 'https://cdn.tgdd.vn/Products/Images/42/242439/Kit/samsung-galaxy-s22-plus-note.jpg', NULL),
(2, 4, 1, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-den-1-1.jpg', NULL),
(2, 4, 2, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-den-4-1.jpg', NULL),
(2, 4, 3, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-den-5-1.jpg', NULL),
(2, 4, 4, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-den-6.jpg', NULL),
(2, 4, 5, 'https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-den-9.jpg', NULL),
(3, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-den-1.jpg', NULL),
(3, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-den-2.jpg', NULL),
(3, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-den-4.jpg', NULL),
(3, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-den-6.jpg', NULL),
(3, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-1-1.jpg', NULL),
(3, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/246196/Kit/samsung-galaxy-a53-note.jpg', NULL),
(3, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-4-1.jpg', NULL),
(3, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-5.jpg', NULL),
(3, 2, 5, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-6.jpg', NULL),
(3, 2, 6, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-7.jpg', NULL),
(3, 2, 7, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-9.jpg', NULL),
(3, 2, 8, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-2-1.jpg', NULL),
(3, 3, 1, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-cam-1-1.jpg', NULL),
(3, 3, 2, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-cam-4-1.jpg', NULL),
(3, 3, 3, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-cam-5-1.jpg', NULL),
(3, 4, 1, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-trang-1.jpg', NULL),
(3, 4, 2, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-trang-2.jpg', NULL),
(3, 4, 3, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-trang-4.jpg', NULL),
(3, 4, 4, 'https://cdn.tgdd.vn/Products/Images/42/246196/samsung-galaxy-a53-trang-6.jpg', NULL),
(4, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-trang-1-1.jpg', NULL),
(4, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-trang-4.jpg', NULL),
(4, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-trang-5.jpg', NULL),
(4, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-trang-6.jpg', NULL),
(4, 1, 5, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-trang-9.jpg', NULL),
(4, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-1.jpg', NULL),
(4, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-4.jpg', NULL),
(4, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-5.jpg', NULL),
(4, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-6.jpg', NULL),
(4, 2, 5, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-7.jpg', NULL),
(4, 3, 1, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-1-3.jpg', NULL),
(4, 3, 2, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-4-3.jpg', NULL),
(4, 3, 3, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-5-3.jpg', NULL),
(4, 3, 4, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-6-3.jpg', NULL),
(4, 3, 5, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-7-3.jpg', NULL),
(4, 4, 1, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-xanh-1.jpg', NULL),
(4, 4, 2, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-xanh-4.jpg', NULL),
(4, 4, 3, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-xanh-5.jpg', NULL),
(4, 4, 4, 'https://cdn.tgdd.vn/Products/Images/42/233090/samsung-galaxy-s21-fe-xanh-6.jpg', NULL),
(5, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-xanh-xa-1.jpg', NULL),
(5, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-xanh-xa-2.jpg', NULL),
(5, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-xanh-xa-3.jpg', NULL),
(5, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-xanh-xa-4.jpg', NULL),
(5, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-xam-1.jpg', NULL),
(5, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-xam-2.jpg', NULL),
(5, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-xam-3.jpg', NULL),
(5, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-xam-10.jpg', NULL),
(5, 3, 1, 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-1-1.jpg', NULL),
(5, 3, 2, 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-4-1.jpg', NULL),
(5, 3, 3, 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-5-1.jpg', NULL),
(5, 3, 4, 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-6-1.jpg', NULL),
(5, 4, 1, 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro1.jpg', NULL),
(5, 4, 2, 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro6.jpg', NULL),
(5, 4, 3, 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro11.jpg', NULL),
(6, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-den-1-1-org.jpg', NULL),
(6, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-den-2-org.jpg', NULL),
(6, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-den-3-org.jpg', NULL),
(6, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-den-4-org.jpg', NULL),
(6, 1, 5, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-den-5-1-org.jpg', NULL),
(6, 1, 6, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-den-7-org.jpg', NULL),
(6, 1, 7, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-den-10-org.jpg', NULL),
(6, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-do-1-1-org.jpg', NULL),
(6, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-do-2-org.jpg', NULL),
(6, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-do-3-org.jpg', NULL),
(6, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-2.jpg', NULL),
(6, 2, 5, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-1.jpg', NULL),
(6, 2, 6, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-3.jpg', NULL),
(6, 2, 7, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-7.jpg', NULL),
(6, 2, 8, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-8.jpg', NULL),
(6, 3, 1, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-xanh-la-1-org.jpg', NULL),
(6, 3, 2, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-xanh-la-2-org.jpg', NULL),
(6, 3, 3, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-xanh-la-3-org.jpg', NULL),
(6, 3, 4, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-xanh-la-4-org.jpg', NULL),
(6, 3, 5, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-xanh-la-5-org.jpg', NULL),
(6, 3, 6, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-xanh-la-7-org.jpg', NULL),
(6, 3, 7, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-xanh-la-10-org.jpg', NULL),
(6, 4, 1, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-trang-1-org.jpg', NULL),
(6, 4, 2, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-trang-2-1-org.jpg', NULL),
(6, 4, 3, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-trang-3-1-org.jpg', NULL),
(6, 4, 4, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-trang-4-1-org.jpg', NULL),
(6, 4, 5, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-trang-5-org.jpg', NULL),
(6, 4, 6, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-trang-6-org.jpg', NULL),
(6, 4, 7, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-trang-10-org.jpg', NULL),
(6, 5, 1, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-vang-1-org.jpg', NULL),
(6, 5, 2, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-vang-2-1-org.jpg', NULL),
(6, 5, 3, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-vang-3-1-org.jpg', NULL),
(6, 5, 4, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-vang-4-1-org.jpg', NULL),
(6, 5, 5, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-vang-5-org.jpg', NULL),
(6, 5, 6, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-vang-6-org.jpg', NULL),
(6, 5, 7, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-vang-10-org.jpg', NULL),
(6, 6, 1, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-tim-1-1-org.jpg', NULL),
(6, 6, 2, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-tim-2-1-org.jpg', NULL),
(6, 6, 3, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-tim-3-1-org.jpg', NULL),
(6, 6, 4, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-tim-4-1-org.jpg', NULL),
(6, 6, 5, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-tim-5-org.jpg', NULL),
(6, 6, 6, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-tim-6-org.jpg', NULL),
(6, 6, 7, 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-tim-10-org.jpg', NULL),
(7, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/236588/realme-8-5g-xd-1-org.jpg', NULL),
(7, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/236588/realme-8-5g-xd-4-org.jpg', NULL),
(7, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/236588/realme-8-5g-xd-5-org.jpg', NULL),
(7, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/236588/realme-8-5g-xd-6-org.jpg', NULL),
(7, 1, 5, 'https://cdn.tgdd.vn/Products/Images/42/236588/realme-8-5g-xd-10-org.jpg', NULL),
(7, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/236588/realme-8-5g-den-1-org.jpg', NULL),
(7, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/236588/realme-8-5g-den-4-org.jpg', NULL),
(7, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/236588/realme-8-5g-den-5-org.jpg', NULL),
(7, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/236588/realme-8-5g-den-6-org.jpg', NULL),
(7, 2, 5, 'https://cdn.tgdd.vn/Products/Images/42/236588/realme-8-5g-den-10-org.jpg', NULL),
(8, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/255513/realme-9-pro-plus-1-1.jpg', NULL),
(8, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/255513/realme-9-pro-plus-2-1.jpg', NULL),
(8, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/255513/realme-9-pro-plus-3-1.jpg', NULL),
(8, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/255513/realme-9-pro-plus-4-1.jpg', NULL),
(8, 1, 5, 'https://cdn.tgdd.vn/Products/Images/42/255513/realme-9-pro-plus-5-1.jpg', NULL),
(8, 1, 6, 'https://cdn.tgdd.vn/Products/Images/42/255513/realme-9-pro-plus-6-1.jpg', NULL),
(8, 1, 7, 'https://cdn.tgdd.vn/Products/Images/42/255513/realme-9-pro-plus-10-1.jpg', NULL),
(9, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/236186/oppo-reno6-den-1-org.jpg', NULL),
(9, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/236186/oppo-reno6-den-2-org.jpg', NULL),
(9, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/236186/oppo-reno6-den-3-org.jpg', NULL),
(9, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/236186/oppo-reno6-den-6-org.jpg', NULL),
(9, 1, 5, 'https://cdn.tgdd.vn/Products/Images/42/236186/oppo-reno6-den-10-org.jpg', NULL),
(10, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/274381/oppo-a96-4g-glr-den-1.jpg', NULL),
(10, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/274381/oppo-a96-4g-glr-den-4.jpg', NULL),
(10, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/274381/oppo-a96-4g-glr-den-5.jpg', NULL),
(10, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/274381/oppo-a96-4g-glr-den-6.jpg', NULL),
(10, 1, 5, 'https://cdn.tgdd.vn/Products/Images/42/274381/oppo-a96-4g-glr-den-10.jpg', NULL),
(10, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/274381/oppo-a96-4g-glr-hong-1.jpg', NULL),
(10, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/274381/oppo-a96-4g-glr-hong-4.jpg', NULL),
(10, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/274381/oppo-a96-4g-glr-hong-5.jpg', NULL),
(10, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/274381/oppo-a96-4g-glr-hong-6.jpg', NULL),
(10, 2, 5, 'https://cdn.tgdd.vn/Products/Images/42/274381/oppo-a96-4g-glr-hong-10.jpg', NULL),
(11, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/269831/xiaomi-redmi-note-11-1-3.jpg', NULL),
(11, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/269831/xiaomi-redmi-note-11-4.jpg', NULL),
(11, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/269831/xiaomi-redmi-note-11-5.jpg', NULL),
(11, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/269831/xiaomi-redmi-note-11-6.jpg', NULL),
(11, 1, 5, 'https://cdn.tgdd.vn/Products/Images/42/269831/xiaomi-redmi-note-11-9.jpg', NULL),
(11, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/269831/xiaomi-redmi-note-11-1-2.jpg', NULL),
(11, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/269831/xiaomi-redmi-note-11-4-1.jpg', NULL),
(11, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/269831/xiaomi-redmi-note-11-5-1.jpg', NULL),
(11, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/269831/xiaomi-redmi-note-11-6-1.jpg', NULL),
(11, 3, 1, 'https://cdn.tgdd.vn/Products/Images/42/269831/xiaomi-redmi-note-11-4gb-128gb-1.jpg', NULL),
(11, 3, 2, 'https://cdn.tgdd.vn/Products/Images/42/269831/xiaomi-redmi-note-11-4gb-128gb-4.jpg', NULL),
(11, 3, 3, 'https://cdn.tgdd.vn/Products/Images/42/269831/xiaomi-redmi-note-11-4gb-128gb-5.jpg', NULL),
(11, 3, 4, 'https://cdn.tgdd.vn/Products/Images/42/269831/xiaomi-redmi-note-11-4gb-128gb-6.jpg', NULL),
(12, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/229228/xiaomi-redmi-note-10-pro-1-1-org.jpg', NULL),
(12, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/229228/xiaomi-redmi-note-10-pro-4-1-org.jpg', NULL),
(12, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/229228/xiaomi-redmi-note-10-pro-5-1-org.jpg', NULL),
(12, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/229228/xiaomi-redmi-note-10-pro-6-1-org.jpg', NULL),
(12, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/229228/xiaomi-redmi-note-10-pro-xam-1-org.jpg', NULL),
(12, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/229228/xiaomi-redmi-note-10-pro-xam-4-org.jpg', NULL),
(12, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/229228/xiaomi-redmi-note-10-pro-xam-5-org.jpg', NULL),
(12, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/229228/xiaomi-redmi-note-10-pro-xam-6-org.jpg', NULL),
(12, 3, 1, 'https://cdn.tgdd.vn/Products/Images/42/229228/xiaomi-redmi-note-10-pro-1-2-org.jpg', NULL),
(12, 3, 2, 'https://cdn.tgdd.vn/Products/Images/42/229228/xiaomi-redmi-note-10-pro-4-3-org.jpg', NULL),
(12, 3, 3, 'https://cdn.tgdd.vn/Products/Images/42/229228/xiaomi-redmi-note-10-pro-5-2-org.jpg', NULL),
(12, 3, 4, 'https://cdn.tgdd.vn/Products/Images/42/229228/xiaomi-redmi-note-10-pro-6-3-org.jpg', NULL),
(13, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-xanh-1.jpg', NULL),
(13, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-xanh-4.jpg', NULL),
(13, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-xanh-5.jpg', NULL),
(13, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-xanh-6.jpg', NULL),
(13, 1, 5, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-xanh-10.jpg', NULL),
(13, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-1-1.jpg', NULL),
(13, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-4-1.jpg', NULL),
(13, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-5-1.jpg', NULL),
(13, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-6-1.jpg', NULL),
(13, 3, 1, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-1-3.jpg', NULL),
(13, 3, 2, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-4-3.jpg', NULL),
(13, 3, 3, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-5-3.jpg', NULL),
(13, 3, 4, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-6-3.jpg', NULL),
(13, 4, 1, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-xanh-xa-1.jpg', NULL),
(13, 4, 2, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-xanh-xa-2.jpg', NULL),
(13, 4, 3, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-xanh-xa-3.jpg', NULL),
(13, 5, 1, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-1-2.jpg', NULL),
(13, 5, 2, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-4-2.jpg', NULL),
(13, 5, 3, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-5-2.jpg', NULL),
(13, 5, 4, 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-6-2.jpg', NULL),
(14, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-1-2.jpg', NULL),
(14, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-4-1.jpg', NULL),
(14, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-5-1.jpg', NULL),
(14, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-6.jpg', NULL),
(14, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-den-1-1-org.jpg', NULL),
(14, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-den-4-org.jpg', NULL),
(14, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-den-5-1-org.jpg', NULL),
(14, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-den-6-org.jpg', NULL),
(14, 3, 1, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-la-1-1-org.jpg', NULL),
(14, 3, 2, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-la-4-org.jpg', NULL),
(14, 3, 3, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-la-5-1-org.jpg', NULL),
(14, 3, 4, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-la-6-org.jpg', NULL),
(14, 4, 1, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-duong-1-1-org.jpg', NULL),
(14, 4, 2, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-duong-4-1-org.jpg', NULL),
(14, 4, 3, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-duong-5-1-org.jpg', NULL),
(14, 4, 4, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-duong-6-org.jpg', NULL),
(14, 5, 1, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-do-1-1-org.jpg', NULL),
(14, 5, 2, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-do-4-org.jpg', NULL),
(14, 5, 3, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-do-5-1-org.jpg', NULL),
(14, 5, 4, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-do-9-org.jpg', NULL),
(14, 6, 1, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-trang-1-1-org.jpg', NULL),
(14, 6, 2, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-trang-4-org.jpg', NULL),
(14, 6, 3, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-trang-5-1-org.jpg', NULL),
(14, 6, 4, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-trang-9-org.jpg', NULL),
(15, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/246195/samsung-galaxy-a73-5g-xanh-1.jpg', NULL),
(15, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/246195/samsung-galaxy-a73-5g-xanh-2.jpg', NULL),
(15, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/246195/samsung-galaxy-a73-5g-xanh-4.jpg', NULL),
(15, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/246195/samsung-galaxy-a73-5g-xanh-6.jpg', NULL),
(15, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/246195/samsung-galaxy-a73-1-1.jpg', NULL),
(15, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/246195/samsung-galaxy-a73-2.jpg', NULL),
(15, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/246195/samsung-galaxy-a73-3.jpg', NULL),
(15, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/246195/samsung-galaxy-a73-4.jpg', NULL),
(15, 2, 5, 'https://cdn.tgdd.vn/Products/Images/42/246195/samsung-galaxy-a73-5.jpg', NULL),
(15, 2, 6, 'https://cdn.tgdd.vn/Products/Images/42/246195/samsung-galaxy-a73-6.jpg', NULL),
(15, 3, 1, 'https://cdn.tgdd.vn/Products/Images/42/246195/samsung-galaxy-a73-5g-1.jpg', NULL),
(15, 3, 2, 'https://cdn.tgdd.vn/Products/Images/42/246195/samsung-galaxy-a73-5g-2.jpg', NULL),
(15, 3, 3, 'https://cdn.tgdd.vn/Products/Images/42/246195/samsung-galaxy-a73-5g-3.jpg', NULL),
(15, 3, 4, 'https://cdn.tgdd.vn/Products/Images/42/246195/samsung-galaxy-a73-5g-4.jpg', NULL),
(16, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/262650/samsung-galaxy-a23-4g-1.jpg', NULL),
(16, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/262650/samsung-galaxy-a23-4g-4.jpg', NULL),
(16, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/262650/samsung-galaxy-a23-4g-5.jpg', NULL),
(16, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/262650/samsung-galaxy-a23-4g-6.jpg', NULL),
(16, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/262650/samsung-galaxy-a23-1-1.jpg', NULL),
(16, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/262650/samsung-galaxy-a23-2-1.jpg', NULL),
(16, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/262650/samsung-galaxy-a23-4-1.jpg', NULL),
(16, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/262650/samsung-galaxy-a23-5-1.jpg', NULL),
(16, 3, 1, 'https://cdn.tgdd.vn/Products/Images/42/262650/samsung-galaxy-a23-1.jpg', NULL),
(16, 3, 2, 'https://cdn.tgdd.vn/Products/Images/42/262650/samsung-galaxy-a23-4.jpg', NULL),
(16, 3, 3, 'https://cdn.tgdd.vn/Products/Images/42/262650/samsung-galaxy-a23-5.jpg', NULL),
(16, 3, 4, 'https://cdn.tgdd.vn/Products/Images/42/262650/samsung-galaxy-a23-6.jpg', NULL),
(17, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-den-1-1.jpg', NULL),
(17, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-den-2.jpg', NULL),
(17, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-den-3.jpg', NULL),
(17, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-den-4.jpg', NULL),
(17, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-tim-1-1.jpg', NULL),
(17, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-tim-2.jpg', NULL),
(17, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-tim-3.jpg', NULL),
(17, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-tim-4.jpg', NULL),
(17, 3, 1, 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-vang-1-2.jpg', NULL),
(17, 3, 2, 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-vang-2-1.jpg', NULL),
(17, 3, 3, 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-vang-3-1.jpg', NULL),
(17, 4, 1, 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-bac-1-2.jpg', NULL),
(17, 4, 2, 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-bac-2.jpg', NULL),
(17, 4, 3, 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-bac-3.jpg', NULL),
(18, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-den-22.jpg', NULL),
(18, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-den-3.jpg', NULL),
(18, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-den-1.jpg', NULL),
(18, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-trang-1-1.jpg', NULL),
(18, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-trang-2.jpg', NULL),
(18, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-trang-3.jpg', NULL),
(18, 3, 1, 'https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-xanh-duong-1-1.jpg', NULL),
(18, 3, 2, 'https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-xanh-duong-3.jpg', NULL),
(18, 3, 3, 'https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-xanh-duong-4.jpg', NULL),
(18, 4, 1, 'https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-do-1-1.jpg', NULL),
(18, 4, 2, 'https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-do-2.jpg', NULL),
(18, 4, 3, 'https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-do-3.jpg', NULL),
(18, 5, 1, 'https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-tim-1-2.jpg', NULL),
(18, 5, 2, 'https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-tim-2-1.jpg', NULL),
(18, 5, 3, 'https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-tim-3-1.jpg', NULL),
(19, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/279066/xiaomi-12t-pro-den-1.jpg', NULL),
(19, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/279066/xiaomi-12t-pro-den-4.jpg', NULL),
(19, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/279066/xiaomi-12t-pro-den-5.jpg', NULL),
(19, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/279066/xiaomi-12t-pro-den-6.jpg', NULL),
(19, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/279066/xiaomi-12t-pro-1.jpg', NULL),
(19, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/279066/xiaomi-12t-pro-4.jpg', NULL),
(19, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/279066/xiaomi-12t-pro-5.jpg', NULL),
(19, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/279066/xiaomi-12t-pro-6.jpg', NULL),
(20, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/271734/xiaomi-redmi-10a-1-2.jpg', NULL),
(20, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/271734/xiaomi-redmi-10a-4.jpg', NULL),
(20, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/271734/xiaomi-redmi-10a-5.jpg', NULL),
(20, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/271734/xiaomi-redmi-10a-6.jpg', NULL),
(20, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/271734/xiaomi-redmi-10a-xanh--1.jpg', NULL),
(20, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/271734/xiaomi-redmi-10a-1-1.jpg', NULL),
(20, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/271734/xiaomi-redmi-10a-6-1.jpg', NULL),
(20, 3, 1, 'https://cdn.tgdd.vn/Products/Images/42/271734/xiaomi-redmi-10a-bac--3.jpg', NULL),
(20, 3, 2, 'https://cdn.tgdd.vn/Products/Images/42/271734/xiaomi-redmi-10a-bac--4.jpg', NULL),
(20, 3, 3, 'https://cdn.tgdd.vn/Products/Images/42/271734/xiaomi-redmi-10a-bac--5.jpg', NULL),
(21, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/270360/oppo-a76-4g-1.jpg', NULL),
(21, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/270360/oppo-a76-4g-4.jpg', NULL),
(21, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/270360/oppo-a76-4g-5.jpg', NULL),
(21, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/270360/oppo-a76-4g-6.jpg', NULL),
(21, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/270360/oppo-a76-4g-1-2.jpg', NULL),
(21, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/270360/oppo-a76-4g-4-1.jpg', NULL),
(21, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/270360/oppo-a76-4g-5-1.jpg', NULL),
(21, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/270360/oppo-a76-4g-6-1.jpg', NULL),
(22, 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/271719/vivo-t1-5g-den-1.jpg', NULL),
(22, 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/271719/vivo-t1-5g-den-4.jpg', NULL),
(22, 1, 3, 'https://cdn.tgdd.vn/Products/Images/42/271719/vivo-t1-5g-den-5.jpg', NULL),
(22, 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/271719/vivo-t1-5g-den-6.jpg', NULL),
(22, 1, 5, 'https://cdn.tgdd.vn/Products/Images/42/271719/vivo-t1-5g-den-7.jpg', NULL),
(22, 2, 1, 'https://cdn.tgdd.vn/Products/Images/42/271719/vivo-t1-5g-1-1.jpg', NULL),
(22, 2, 2, 'https://cdn.tgdd.vn/Products/Images/42/271719/vivo-t1-5g-4.jpg.', NULL),
(22, 2, 3, 'https://cdn.tgdd.vn/Products/Images/42/271719/vivo-t1-5g-5.jpg', NULL),
(22, 2, 4, 'https://cdn.tgdd.vn/Products/Images/42/271719/vivo-t1-5g-6.jpg', NULL),
(22, 2, 5, 'https://cdn.tgdd.vn/Products/Images/42/271719/vivo-t1-5g-7.jpg', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bo_nho`
--

CREATE TABLE `bo_nho` (
  `idBoNho` int(11) NOT NULL,
  `boNho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bo_nho`
--

INSERT INTO `bo_nho` (`idBoNho`, `boNho`) VALUES
(1, 16),
(2, 32),
(3, 64),
(4, 128),
(5, 256),
(6, 512),
(7, 1024);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_hd`
--

CREATE TABLE `chi_tiet_hd` (
  `idHD` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `idMau` int(11) NOT NULL,
  `idRam` int(11) NOT NULL,
  `idBoNho` int(11) NOT NULL,
  `SLMua` int(11) NOT NULL,
  `giaBan` int(11) NOT NULL,
  `thue` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_hd`
--

INSERT INTO `chi_tiet_hd` (`idHD`, `idSP`, `idMau`, `idRam`, `idBoNho`, `SLMua`, `giaBan`, `thue`) VALUES
(1, 1, 1, 5, 4, 1, 21692999, 0),
(1, 3, 4, 5, 4, 2, 9990000, 0),
(1, 5, 3, 4, 6, 1, 31191999, 0),
(1, 22, 2, 5, 4, 1, 8490000, 0),
(2, 4, 3, 5, 5, 1, 18990000, 0),
(2, 6, 4, 3, 3, 1, 13591999, 0),
(3, 13, 1, 4, 5, 1, 29591999, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_sp`
--

CREATE TABLE `chi_tiet_sp` (
  `idSP` int(11) NOT NULL,
  `idMau` int(11) NOT NULL,
  `idRam` int(11) NOT NULL,
  `idBoNho` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `SL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_sp`
--

INSERT INTO `chi_tiet_sp` (`idSP`, `idMau`, `idRam`, `idBoNho`, `gia`, `SL`) VALUES
(1, 1, 5, 4, 30990000, 10),
(1, 1, 7, 5, 33990000, 10),
(1, 1, 7, 6, 36990000, 10),
(1, 2, 5, 4, 30990000, 10),
(1, 2, 7, 5, 33990000, 10),
(1, 2, 7, 6, 36990000, 10),
(1, 3, 5, 4, 30990000, 10),
(1, 3, 7, 5, 33990000, 10),
(1, 3, 7, 6, 36990000, 10),
(1, 4, 5, 4, 30990000, 10),
(1, 4, 7, 5, 33990000, 10),
(1, 4, 7, 6, 36990000, 10),
(2, 1, 5, 4, 25990000, 10),
(2, 1, 5, 5, 27490000, 5),
(2, 2, 5, 4, 25990000, 10),
(2, 2, 5, 5, 27490000, 5),
(2, 3, 5, 4, 25990000, 10),
(2, 3, 5, 5, 27490000, 5),
(2, 4, 5, 4, 25990000, 10),
(2, 4, 5, 5, 27490000, 5),
(3, 1, 5, 4, 9990000, 10),
(3, 2, 5, 4, 9990000, 10),
(3, 3, 5, 4, 9990000, 10),
(3, 4, 5, 4, 9990000, 10),
(4, 1, 5, 4, 16990000, 10),
(4, 1, 5, 5, 18990000, 10),
(4, 2, 5, 4, 16990000, 10),
(4, 2, 5, 5, 18990000, 10),
(4, 3, 5, 4, 16990000, 10),
(4, 3, 5, 5, 18990000, 10),
(4, 4, 5, 4, 16990000, 10),
(4, 4, 5, 5, 18990000, 10),
(5, 1, 4, 4, 30990000, 10),
(5, 1, 4, 5, 33490000, 10),
(5, 1, 4, 6, 38990000, 10),
(5, 1, 4, 7, 41990000, 20),
(5, 2, 4, 4, 30990000, 10),
(5, 2, 4, 5, 33490000, 10),
(5, 2, 4, 6, 38990000, 10),
(5, 2, 4, 7, 41990000, 20),
(5, 3, 4, 4, 30990000, 10),
(5, 3, 4, 5, 33490000, 10),
(5, 3, 4, 6, 38990000, 10),
(5, 3, 4, 7, 41990000, 20),
(5, 4, 4, 4, 30990000, 10),
(5, 4, 4, 5, 33490000, 10),
(5, 4, 4, 6, 38990000, 10),
(5, 4, 4, 7, 41990000, 20),
(6, 1, 3, 3, 16990000, 20),
(6, 1, 3, 4, 16990000, 50),
(6, 2, 3, 3, 16990000, 20),
(6, 2, 3, 4, 16990000, 50),
(6, 3, 3, 3, 16990000, 20),
(6, 3, 3, 4, 16990000, 50),
(6, 4, 3, 3, 16990000, 20),
(6, 4, 3, 4, 16990000, 50),
(6, 5, 3, 3, 16990000, 20),
(6, 5, 3, 4, 16990000, 50),
(6, 6, 3, 3, 16990000, 20),
(6, 6, 3, 4, 16990000, 50),
(7, 1, 5, 4, 7990000, 15),
(7, 2, 5, 4, 7990000, 15),
(8, 1, 5, 4, 9990000, 10),
(9, 1, 5, 4, 12990000, 5),
(10, 1, 5, 4, 6990000, 10),
(10, 2, 5, 4, 6990000, 10),
(11, 1, 3, 3, 4690000, 10),
(11, 1, 3, 4, 4990000, 10),
(11, 1, 4, 4, 5490000, 10),
(11, 2, 3, 3, 4690000, 10),
(11, 2, 3, 4, 4990000, 10),
(11, 2, 4, 4, 5490000, 10),
(11, 3, 3, 3, 4690000, 10),
(11, 3, 3, 4, 4990000, 10),
(11, 3, 4, 4, 5490000, 10),
(12, 1, 5, 4, 7490000, 5),
(12, 2, 5, 4, 7490000, 5),
(12, 3, 5, 4, 7490000, 5),
(13, 1, 4, 4, 33990000, 10),
(13, 1, 4, 5, 36990000, 9),
(13, 1, 4, 7, 45490000, 15),
(13, 2, 4, 4, 33990000, 10),
(13, 2, 4, 5, 36990000, 10),
(13, 2, 4, 7, 45490000, 15),
(13, 3, 4, 4, 33990000, 10),
(13, 3, 4, 5, 36990000, 10),
(13, 3, 4, 6, 41490000, 10),
(13, 3, 4, 7, 45490000, 15),
(13, 4, 4, 4, 33990000, 10),
(13, 4, 4, 5, 36990000, 10),
(13, 5, 4, 4, 33990000, 10),
(13, 5, 4, 5, 36990000, 10),
(13, 5, 4, 6, 41490000, 10),
(13, 5, 4, 7, 45490000, 15),
(14, 1, 3, 3, 19990000, 10),
(14, 1, 3, 5, 23890000, 10),
(14, 2, 3, 3, 19990000, 10),
(14, 2, 3, 4, 21990000, 10),
(14, 3, 3, 3, 19990000, 10),
(14, 3, 3, 4, 21990000, 10),
(14, 3, 3, 5, 23890000, 10),
(14, 4, 3, 3, 19990000, 10),
(14, 4, 3, 4, 21990000, 10),
(14, 4, 3, 5, 23890000, 10),
(14, 5, 3, 3, 19990000, 10),
(14, 5, 3, 4, 21990000, 10),
(14, 5, 3, 5, 23890000, 10),
(14, 6, 3, 3, 19990000, 10),
(14, 6, 3, 4, 21990000, 10),
(15, 1, 5, 4, 11990000, 8),
(15, 2, 5, 4, 11990000, 8),
(15, 3, 5, 4, 11990000, 8),
(16, 1, 3, 4, 5690000, 10),
(16, 2, 3, 4, 5690000, 10),
(16, 3, 3, 4, 5690000, 10),
(17, 1, 4, 4, 33990000, 3),
(17, 1, 4, 5, 36990000, 5),
(17, 1, 4, 7, 49990000, 3),
(17, 2, 4, 4, 33990000, 3),
(17, 2, 4, 5, 36990000, 5),
(17, 3, 4, 4, 33990000, 3),
(17, 3, 4, 5, 36990000, 5),
(17, 4, 4, 4, 33990000, 3),
(17, 4, 4, 5, 36990000, 5),
(18, 1, 4, 4, 27990000, 10),
(18, 1, 4, 5, 30990000, 10),
(18, 1, 4, 6, 36990000, 5),
(18, 2, 4, 4, 27990000, 10),
(18, 2, 4, 5, 30990000, 10),
(18, 2, 4, 6, 36990000, 5),
(18, 3, 4, 4, 27990000, 10),
(18, 3, 4, 5, 30990000, 10),
(18, 3, 4, 6, 36990000, 5),
(18, 4, 4, 4, 27990000, 10),
(18, 4, 4, 5, 30990000, 10),
(18, 5, 4, 4, 27990000, 10),
(18, 5, 4, 5, 30990000, 10),
(18, 5, 4, 6, 36990000, 5),
(19, 1, 7, 5, 16990000, 10),
(19, 2, 7, 5, 16990000, 10),
(20, 1, 1, 2, 2890000, 10),
(20, 2, 1, 2, 2890000, 10),
(20, 3, 1, 2, 2890000, 10),
(21, 1, 4, 4, 5990000, 10),
(21, 2, 4, 4, 5990000, 10),
(22, 1, 5, 4, 8490000, 10),
(22, 2, 5, 4, 8490000, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuong_trinh_khuyen_mai`
--

CREATE TABLE `chuong_trinh_khuyen_mai` (
  `idKM` int(11) NOT NULL,
  `idSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuong_trinh_khuyen_mai`
--

INSERT INTO `chuong_trinh_khuyen_mai` (`idKM`, `idSP`) VALUES
(1, 1),
(1, 2),
(1, 11),
(2, 1),
(2, 3),
(2, 4),
(2, 12),
(2, 14),
(3, 1),
(3, 5),
(3, 6),
(3, 13),
(4, 7),
(4, 8),
(5, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `idDM` int(11) NOT NULL,
  `tenDM` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`idDM`, `tenDM`) VALUES
(1, 'Iphone'),
(2, 'SamSung'),
(3, 'Xiaomi'),
(4, 'Oppo'),
(5, 'Realme'),
(6, 'Huawei'),
(7, 'Vivo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `SDT` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idSP` int(11) NOT NULL,
  `idMau` int(11) NOT NULL,
  `idRam` int(11) NOT NULL,
  `idBoNho` int(11) NOT NULL,
  `SLMua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gio_hang`
--

INSERT INTO `gio_hang` (`SDT`, `idSP`, `idMau`, `idRam`, `idBoNho`, `SLMua`) VALUES
('0911971536', 5, 2, 4, 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hdh`
--

CREATE TABLE `hdh` (
  `idHDH` int(11) NOT NULL,
  `tenHDH` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hdh`
--

INSERT INTO `hdh` (`idHDH`, `tenHDH`) VALUES
(1, 'Android 5.0 Lollipop'),
(2, 'Android 6.0 Marshmallow'),
(3, 'Android 7.0 Nougat'),
(4, 'Android 8 Oreo'),
(5, 'Android 9 Pie'),
(6, 'Android 10'),
(7, 'Android 11'),
(8, 'Android 12'),
(9, 'IOS 12'),
(10, 'IOS 13'),
(11, 'IOS 14'),
(12, 'IOS 15'),
(13, 'IOS 16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `idHD` int(11) NOT NULL,
  `idTK` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuongThucTT` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diaChiGiaoHang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayTao` date NOT NULL,
  `ngayGiao` date DEFAULT NULL,
  `idTrangThai` int(11) NOT NULL,
  `phiVC` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`idHD`, `idTK`, `phuongThucTT`, `diaChiGiaoHang`, `ngayTao`, `ngayGiao`, `idTrangThai`, `phiVC`) VALUES
(1, '0911971536', 'Thanh toán tiền mặt khi nhận hàng', 'KTX A, CTU, đường 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ', '2022-10-28', NULL, 0, 12000),
(2, '0866617242', 'Thanh toán bằng ví MoMo', 'KTX A, CTU, đường 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ', '2022-10-29', NULL, 3, 12000),
(3, '0859091199', 'Thanh toán bằng thẻ tín dụng', 'Tổ 2, ấp 7, xã VHH Bắc, Gò Quao  Kiên Giang', '2022-11-01', NULL, 2, 12000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `idKM` int(11) NOT NULL,
  `heSoGiam` float DEFAULT NULL,
  `tenKH` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `BD` datetime NOT NULL,
  `KT` datetime NOT NULL,
  `ND` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idLoaiKM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`idKM`, `heSoGiam`, `tenKH`, `BD`, `KT`, `ND`, `idLoaiKM`) VALUES
(1, 0.1, 'giảm 10%', '2022-10-07 13:37:25', '2023-10-07 13:37:25', NULL, 1),
(2, 0.15, 'giảm 15%', '2021-10-07 13:37:25', '2022-09-07 13:37:25', NULL, 1),
(3, 0.2, 'giảm 20%', '2022-10-07 13:37:25', '2023-10-07 13:37:25', NULL, 1),
(4, 0.25, 'giảm 25%', '2022-10-07 13:37:25', '2023-10-07 13:37:25', NULL, 1),
(5, 0.3, 'giảm 30%', '2022-10-07 13:37:25', '2023-10-07 13:37:25', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaikm`
--

CREATE TABLE `loaikm` (
  `idLoaiKM` int(11) NOT NULL,
  `tenLoaiKM` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaikm`
--

INSERT INTO `loaikm` (`idLoaiKM`, `tenLoaiKM`) VALUES
(1, 'giảm giá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mau`
--

CREATE TABLE `mau` (
  `idMau` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `mau` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mau`
--

INSERT INTO `mau` (`idMau`, `idSP`, `mau`) VALUES
(1, 1, 'Đỏ'),
(1, 2, 'Xanh lá'),
(1, 3, 'Đen'),
(1, 4, 'Trắng'),
(1, 5, 'Xanh lá'),
(1, 6, 'Đen'),
(1, 7, 'Xanh Dương'),
(1, 8, 'Xanh Dương'),
(1, 9, 'Đen'),
(1, 10, 'Đen'),
(1, 11, 'Xám'),
(1, 12, 'Vàng đồng'),
(1, 13, 'Xanh Dương'),
(1, 14, 'Tím'),
(1, 15, 'Xanh lá'),
(1, 16, 'Cam'),
(1, 17, 'Đen'),
(1, 18, 'Đen'),
(1, 19, 'Đen'),
(1, 20, 'Xám'),
(1, 21, 'Đen'),
(1, 22, 'Đen'),
(2, 1, 'Trắng'),
(2, 2, 'Trắng'),
(2, 3, 'Xanh dương'),
(2, 4, 'Xám'),
(2, 5, 'Xám'),
(2, 6, 'Đỏ'),
(2, 7, 'Đen'),
(2, 10, 'Hồng'),
(2, 11, 'Xanh dương đậm'),
(2, 12, 'Xám'),
(2, 13, 'Bạc'),
(2, 14, 'Đen'),
(2, 15, 'Xám'),
(2, 16, 'Đen'),
(2, 17, 'Tím'),
(2, 18, 'Trắng'),
(2, 19, 'Bạc'),
(2, 20, 'Xanh Dương'),
(2, 21, 'Xanh lá'),
(2, 22, 'Xanh'),
(3, 1, 'Đen'),
(3, 2, 'Hồng'),
(3, 3, 'Cam'),
(3, 4, 'Tím'),
(3, 5, 'Xanh dương'),
(3, 6, 'Xanh lá'),
(3, 11, 'Xanh dương nhạt'),
(3, 12, 'Xanh dương'),
(3, 13, 'Xám'),
(3, 14, 'Xanh lá'),
(3, 15, 'Trắng'),
(3, 16, 'Xanh Dương'),
(3, 17, 'Vàng'),
(3, 18, 'Xanh Dương'),
(3, 20, 'Bạc'),
(4, 1, 'Xanh lá'),
(4, 2, 'Đen'),
(4, 3, 'Trắng'),
(4, 4, 'Xanh lá'),
(4, 5, 'Vàng đồng'),
(4, 6, 'Trắng'),
(4, 13, 'Xanh Lá'),
(4, 14, 'Xanh dương'),
(4, 17, 'Bạc'),
(4, 18, 'Đỏ'),
(5, 6, 'Vàng'),
(5, 13, 'Vàng Đồng'),
(5, 14, 'Đỏ'),
(5, 18, 'Tím nhạt'),
(6, 6, 'Tím'),
(6, 14, 'Trắng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nsx`
--

CREATE TABLE `nsx` (
  `idNSX` int(11) NOT NULL,
  `tenNSX` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nsx`
--

INSERT INTO `nsx` (`idNSX`, `tenNSX`) VALUES
(1, 'Apple'),
(2, 'SamSung'),
(3, 'Xiaomi'),
(4, 'Oppo'),
(5, 'Vivo'),
(6, 'Huawei'),
(7, 'Realme');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ram`
--

CREATE TABLE `ram` (
  `idRam` int(11) NOT NULL,
  `RAM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ram`
--

INSERT INTO `ram` (`idRam`, `RAM`) VALUES
(1, 2),
(2, 3),
(3, 4),
(4, 6),
(5, 8),
(6, 10),
(7, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `idSP` int(11) NOT NULL,
  `tenSP` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `moTa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idDM` int(11) NOT NULL,
  `idNSX` int(11) NOT NULL,
  `idHDH` int(11) NOT NULL,
  `cpu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` int(11) DEFAULT NULL,
  `camTruoc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camSau` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTManHinh` float DEFAULT NULL,
  `doPhanGiai` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SIM` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mangDiDong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`idSP`, `tenSP`, `moTa`, `idDM`, `idNSX`, `idHDH`, `cpu`, `pin`, `camTruoc`, `camSau`, `KTManHinh`, `doPhanGiai`, `SIM`, `mangDiDong`) VALUES
(1, 'Samsung Galaxy S22 Ultra', 'Galaxy S22 Ultra 5G chiếc smartphone cao cấp nhất trong bộ 3 Galaxy S22 series mà Samsung đã cho ra mắt. Tích hợp bút S Pen hoàn hảo trong thân máy, trang bị vi xử lý mạnh mẽ cho các tác vụ sử dụng vô cùng mượt mà và nổi bật hơn với cụm camera không viền độc đáo mang đậm dấu ấn riêng.', 2, 2, 8, ' Snapdragon 8 Gen 1', 5000, ' 40 MP', 'Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP', 6.8, 'Dynamic AMOLED 2X6.8\"Quad HD+ (2K+)', '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM', 5),
(2, 'Samsung Galaxy S22+', 'Samsung Galaxy S22+ 5G 128GB được Samsung cho ra mắt với với ngoại hình không có quá nhiều thay đổi nhưng được nâng cấp đáng kể về thông số cấu hình bên trong và thời gian sử dụng, chắc hẳn sẽ mang lại những trải nghiệm thú vị dành cho bạn.', 2, 2, 8, ' Snapdragon 8 Gen 1', 4500, '10 MP', 'Chính 50 MP & Phụ 12 MP, 10 MP', 6.6, 'Dynamic AMOLED 2X6.6\"Full HD+', '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM', 5),
(3, 'Samsung Galaxy A53', 'Samsung Galaxy A53 5G 128GB trình làng với một thiết kế hiện đại, hiệu năng ổn định cùng một màn hình hiển thị sắc nét, hỗ trợ tần số quét cao giúp bạn có được những phút giây giải trí cực kỳ đã mắt, hay thỏa mãn đam mê nhiếp ảnh trong bạn nhờ trang bị camera có độ phân giải cao.', 2, 2, 8, 'Exynos 1280', 5000, '32 MP', 'Chính 64 MP & Phụ 12 MP, 5 MP, 5 MP', 6.5, 'Full HD+ (1080 x 2400 Pixels)', '2 Nano SIM (SIM 2 chung khe thẻ nhớ)', 5),
(4, 'Samsung Galaxy S21 FE', 'Samsung Galaxy S21 FE 5G xuất hiện với 1 ngoại hình tinh tế, cụm camera thông minh hoạt động đầy ấn tượng và cấu hình mạnh mẽ từ chip Exynos 2100 nhà Samsung, chắc chắn sẽ thu phục cảm tình của bạn trên từng trải nghiệm.', 2, 2, 8, 'Exynos 2100', 4500, '32 MP', 'Chính 12 MP & Phụ 12 MP, 8 MP', 6.4, 'Dynamic AMOLED 2X, Full HD+', '2 Nano SIM', 5),
(5, 'iPhone 13 Pro', 'Mỗi lần ra mắt phiên bản mới là mỗi lần iPhone chiếm sóng trên khắp các mặt trận và lần này cái tên khiến vô số người \"sục sôi\" là iPhone 13 Pro, chiếc điện thoại thông minh vẫn giữ nguyên thiết kế cao cấp, cụm 3 camera được nâng cấp, cấu hình mạnh mẽ cùng thời lượng pin lớn ấn tượng. ', 1, 1, 12, 'Apple A15 Bionic', 3100, '12 MP', '3 camera 12 MP', 6.1, 'OLED, Super Retina XDR', '1 Nano SIM và 1 eSIM', 5),
(6, 'iPhone 11', 'Được xem là một trong những phiên bản iPhone \"giá rẻ\" của bộ 3 iPhone 11 series nhưng iPhone 11 vẫn sở hữu cho mình rất nhiều ưu điểm mà hiếm có một chiếc smartphone nào khác sở hữu.', 1, 1, 12, 'Apple A13 Bionic', 3100, '12 MP', '2 camera 12 MP', 6.1, 'IPS LCD, Liquid Retina', '1 Nano SIM  1 eSIM', 4),
(7, 'Realme 8 5G', 'Không dừng lại ở Realme 8 và Realme 8 Pro, hãng điện thoại Realme tiếp tục gây ấn tượng khi ra mắt Realme 8 5G. Mẫu điện thoại sở hữu cấu hình phần cứng mới và hỗ trợ kết nối 5G hiện đại mang đến cho bạn những trải nghiệm tuyệt vời với tốc độ mạng cực nhanh dù ở bất cứ đâu. ', 5, 7, 7, 'MediaTek Dimensity 700', 5000, '16 MP', 'Chính 48 MP & Phụ 2 MP, 2 MP', 6.5, 'IPS LCD, Full HD+', '2 Nano SIM', 5),
(8, 'Realme 9 Pro+', 'Realme 9 Pro+ 5G - chiếc smartphone tầm trung của Realme đã được ra mắt, máy có một thiết kế đầy màu sắc, cụm 3 camera với cảm biến IMX766 giúp bạn có được những bức ảnh sinh động.', 5, 7, 8, 'MediaTek Dimensity 920 5G', 4500, '16 MP', 'Chính 50 MP & Phụ 8 MP, 2 MP', 6.4, 'Super AMOLED, Full HD+', '2 Nano SIM', 5),
(9, 'OPPO Reno6', 'Sau khi ra mắt OPPO Reno5 chưa lâu thì OPPO lại cho ra mẫu smartphone mới mang tên OPPO Reno6 với hàng loạt cải tiến mới về ngoại hình bên ngoài lẫn hiệu năng bên trong, mang đến trải nghiệm vượt bật cho người dùng.', 4, 4, 7, 'MediaTek Dimensity 900 5G', 4300, '32 MP', 'Chính 64 MP & Phụ 8 MP, 2 MP', 6.4, 'AMOLED6., Full HD+', ' Nano SIM', 5),
(10, 'OPPO A96 ', 'OPPO A96 là cái tên được nhắc đến khá nhiều trên các diễn đàn công nghệ hiện nay, nhờ sở hữu một ngoại hình hết sức bắt mắt cùng hàng loạt các thông số ấn tượng trong phân khúc giá như hiệu năng cao, camera chụp ảnh sắc nét.', 4, 4, 7, 'Snapdragon 680', 5000, '16 MP', 'Chính 50 MP & Phụ 2 MP', 6.6, 'IPS LCD, Full HD+', '2 Nano SIM', 4),
(11, 'Xiaomi Redmi Note 11', 'Điện thoại Redmi được mệnh danh là dòng sản phẩm quốc dân ngon - bổ  - rẻ của Xiaomi và Redmi Note 11 cũng không phải ngoại lệ, máy sở hữu một hiệu năng ổn định, màn hình 90 Hz mượt mà, cụm camera AI đến 50 MP cùng một mức giá vô cùng tốt.', 3, 3, 7, 'Snapdragon 680', 5000, '13 MP', 'Chính 50 MP & Phụ 8 MP, 2 MP, 2 MP', 6.4, 'AMOLED, Full HD+', '2 Nano SIM', 4),
(12, 'Xiaomi Redmi Note 10 Pro', 'Kế thừa và nâng cấp từ thế hệ trước, Xiaomi đã cho ra mắt điện thoại Xiaomi Redmi Note 10 Pro (8GB/128GB) sở hữu một thiết kế cao cấp, sang trọng bên cạnh cấu hình vô cùng mạnh mẽ, hứa hẹn mang đến sự cạnh tranh lớn trong phân khúc smartphone tầm trung.', 3, 3, 7, 'Snapdragon 732G', 5000, '16 MP', 'Chính 108 MP & Phụ 8 MP, 5 MP, 2 MP', 6.7, 'AMOLED, Full HD+', '2 Nano SIM', 4),
(13, 'iPhone 13 Pro Max', 'Điện thoại iPhone 13 Pro Max - siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.', 1, 1, 12, ' Apple A15 Bionic', 4300, '12 MP', '3 camera 12 MP', 6.7, 'OLED, Super Retina XDR', '1 Nano SIM & 1 eSIM', 5),
(14, 'iPhone 12', 'Trong những tháng cuối năm 2020, Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bứt phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 ', 1, 1, 12, 'Apple A14 Bionic', 2800, '12 MP', '2 camera 12 MP', 6.1, 'OLED, Super Retina XDR', '1 Nano SIM & 1 eSIM', 5),
(15, 'Samsung Galaxy A73 5G', 'được xem là sản phẩm nổi bật nhất dòng Galaxy A 2022 mới ra mắt, máy trang bị bộ thông số kỹ thuật ấn tượng về phần hiệu năng, chất lượng màn hình và nổi bật nhất trong số đó là camera khi nó đem lại bức ảnh có độ phân giải lên đến 108 MP.', 2, 2, 8, 'Snapdragon 778G 5G', 5000, '32 MP', 'Chính 108 MP & Phụ 12 MP, 5 MP, 5 MP', 6.7, 'Super AMOLED Plus, Full HD+', '2 Nano SIM (SIM 2 chung khe thẻ nhớ)', 5),
(16, 'Samsung Galaxy A23 4GB', 'Samsung Galaxy A23 4GB sở hữu bộ thông số kỹ thuật khá ấn tượng trong phân khúc, máy có một hiệu năng ổn định, cụm 4 camera thông minh cùng một diện mạo trẻ trung phù hợp cho mọi đối tượng người dùng.', 2, 2, 8, 'Snapdragon 680', 5000, '8 MP', 'Chính 50 MP & Phụ 5 MP, 2 MP, 2 MP', 6.6, 'PLS TFT LCD, Full HD+', '2 Nano SIM', 4),
(17, 'iPhone 14 Pro Max', 'Cuối cùng thì chiếc iPhone 14 Pro Max cũng đã chính thức lộ diện tại sự kiện ra mắt thường niên vào ngày 08/09 đến từ nhà Apple, kết thúc bao lời đồn đoán bằng một bộ thông số cực kỳ ấn tượng cùng vẻ ngoài đẹp mắt sang trọng. Từ ngày 14/10/2022 người dùng đã có thể mua sắm các sản phẩm iPhone 14 series với đầy đủ phiên bản', 1, 1, 13, 'Apple A16 Bionic 6 nhân', 4300, '12 MP', 'Chính 48 MP & Phụ 12 MP, 12 MP', 6.7, 'OLED, Super Retina XDR', '1 Nano SIM và 1 eSIM', 5),
(18, 'iPhone 14 Plus', 'iPhone 14 Plus thu hút mọi ánh nhìn trong sự kiện Far Out diễn ra ngày 8/9 nhờ có vẻ ngoài cao cấp, trang bị bộ xử lý mạnh mẽ, cụm camera kép đặc trưng cho khả năng chụp ảnh cực nét cùng màn hình chất lượng cao cho bạn tận hưởng cảm giác sử dụng smartphone tuyệt vời hơn. Từ ngày 14/10/2022 người dùng đã có thể mua sắm các sản phẩm iPhone 14 series đầy đủ phiên bản', 1, 1, 13, 'Apple A15 Bionic', 4300, '12 MP', '2 camera 12 MP', 6.7, 'OLED, Super Retina XDR', '1 Nano SIM và 1 eSIM', 5),
(19, 'Xiaomi 12T Pro', 'Cuối cùng Xiaomi 12T Pro cũng đã chính thức lộ diện trên thị trường sau hàng loạt thông tin rò rỉ về thông số, đúng như dự đoán thì độ phân giải trên camera của phiên bản này được nhà sản xuất nâng cấp lên đến 200 MP, giúp máy trở thành thiết bị có khả năng ghi hình sắc nét thuộc top đầu giới smartphone, đi kèm với đó là màn hình chất lượng cùng bộ vi xử lý mạnh mẽ xứng tầm flagship.', 3, 3, 8, 'Snapdragon 8+ Gen 1', 5000, '20 MP', 'Chính 200 MP & Phụ 8 MP, 2 MP', 6.7, 'AMOLED, 1.5K', '2 Nano SIM', 5),
(20, 'Xiaomi Redmi 10A ', 'Xiaomi Redmi 10A ra mắt tại thị trường Việt Nam vào tháng 07/2022, với ưu điểm là sở hữu pin trâu cùng một màn hình kích thước lớn giúp máy trở thành một smartphone lý tưởng cho những bạn đang tìm mua một thiết bị phục vụ nghe gọi hay xem phim cả ngày. Cùng với đó là giá thành phải chăng để người dùng có thể dễ dàng tiếp cận và mua sắm.', 3, 3, 7, 'MediaTek Helio G25', 5000, '5 MP', 'Chính 13 MP và Phụ 2 MP', 6.5, 'IPS LCD, HD+', '2 Nano SIM', 4),
(21, 'OPPO A76', 'OPPO A76 4G ra mắt với thiết kế trẻ trung, hiệu năng ổn định, màn hình 90 Hz mượt mà cùng viên pin trâu cho thời gian sử dụng lâu dài phù hợp cho mọi đối tượng người dùng.', 4, 4, 7, 'Snapdragon 680', 5000, '8 MP', 'Chính 13 MP và Phụ 2 MP', 6.6, 'IPS LCD, HD+', '2 Nano SIM', 4),
(22, 'Vivo T1 5G', 'Ngay từ khi công bố thông số kỹ thuật đầy đủ cùng mức giá bán, Vivo T1 5G bỗng dưng trở thành cái tên được cộng đồng game thủ nhắc đến rất nhiều nhờ có hiệu năng cực cao nhưng giá thành trang bị lại cực kỳ hợp lý. Đi kèm với đó là nhiều công nghệ tối ưu game tân tiến giúp quá trình chơi game của bạn được diễn ra mượt mà.', 7, 5, 8, 'Snapdragon 778G 5G', 4700, '16 MP', 'Chính 64 MP và Phụ 8 MP, 2 MP', 6.4, 'AMOLED, Full HD+', '2 Nano SIM', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `SDT` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoTen` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MK` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diaChi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loaiTK` tinyint(1) NOT NULL,
  `trangThai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`SDT`, `hoTen`, `MK`, `diaChi`, `email`, `loaiTK`, `trangThai`) VALUES
('0123456789', 'CT250_01_04', '1e48c4420b7073bc11916c6c1de226bb', 'Trường CNTT và TT, 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ', '', 0, 0),
('0859091199', 'Nguyễn Thị Hồng Loan', 'e10adc3949ba59abbe56e057f20f883e', 'Tổ 2, ấp 7, xã VHH Bắc, Gò Quao  Kiên Giang', '', 1, 0),
('0866617242', 'Trương Hiếu Nghĩa', 'e10adc3949ba59abbe56e057f20f883e', 'KTX A, CTU, đường 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ', '', 1, 0),
('0911971536', 'Trương Hoài An', 'e10adc3949ba59abbe56e057f20f883e', 'KTX A, CTU, đường 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ', '', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanh_toan`
--

CREATE TABLE `thanh_toan` (
  `phuongThucTT` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanh_toan`
--

INSERT INTO `thanh_toan` (`phuongThucTT`) VALUES
('Thanh toán bằng thẻ tín dụng'),
('Thanh toán bằng ví MoMo'),
('Thanh toán qua cổng Paypal'),
('Thanh toán tiền mặt khi nhận hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trang_thai_hd`
--

CREATE TABLE `trang_thai_hd` (
  `idTrangThai` int(11) NOT NULL,
  `trangThai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trang_thai_hd`
--

INSERT INTO `trang_thai_hd` (`idTrangThai`, `trangThai`) VALUES
(0, 'Chờ thanh toán'),
(1, 'Đang xử lý'),
(2, 'Đang vận chuyển'),
(3, 'Đã giao'),
(4, 'Đã huỷ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh`
--
ALTER TABLE `anh`
  ADD PRIMARY KEY (`idSP`,`idMau`,`idAnh`),
  ADD KEY `idMau` (`idMau`,`idSP`);

--
-- Chỉ mục cho bảng `bo_nho`
--
ALTER TABLE `bo_nho`
  ADD PRIMARY KEY (`idBoNho`);

--
-- Chỉ mục cho bảng `chi_tiet_hd`
--
ALTER TABLE `chi_tiet_hd`
  ADD PRIMARY KEY (`idHD`,`idSP`,`idMau`,`idRam`,`idBoNho`),
  ADD KEY `idSP` (`idSP`,`idMau`,`idRam`,`idBoNho`);

--
-- Chỉ mục cho bảng `chi_tiet_sp`
--
ALTER TABLE `chi_tiet_sp`
  ADD PRIMARY KEY (`idSP`,`idMau`,`idRam`,`idBoNho`),
  ADD KEY `idMau` (`idMau`),
  ADD KEY `idRam` (`idRam`),
  ADD KEY `idBoNho` (`idBoNho`);

--
-- Chỉ mục cho bảng `chuong_trinh_khuyen_mai`
--
ALTER TABLE `chuong_trinh_khuyen_mai`
  ADD PRIMARY KEY (`idKM`,`idSP`),
  ADD KEY `idSP` (`idSP`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`idDM`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`SDT`,`idSP`,`idMau`,`idRam`,`idBoNho`),
  ADD KEY `idBoNho` (`idBoNho`),
  ADD KEY `idMau` (`idMau`),
  ADD KEY `idRam` (`idRam`),
  ADD KEY `idSP` (`idSP`);

--
-- Chỉ mục cho bảng `hdh`
--
ALTER TABLE `hdh`
  ADD PRIMARY KEY (`idHDH`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`idHD`),
  ADD KEY `idTK` (`idTK`),
  ADD KEY `idTT` (`phuongThucTT`),
  ADD KEY `trangThai` (`idTrangThai`);

--
-- Chỉ mục cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`idKM`),
  ADD KEY `idLoaiKM` (`idLoaiKM`);

--
-- Chỉ mục cho bảng `loaikm`
--
ALTER TABLE `loaikm`
  ADD PRIMARY KEY (`idLoaiKM`);

--
-- Chỉ mục cho bảng `mau`
--
ALTER TABLE `mau`
  ADD PRIMARY KEY (`idMau`,`idSP`),
  ADD KEY `idSP` (`idSP`);

--
-- Chỉ mục cho bảng `nsx`
--
ALTER TABLE `nsx`
  ADD PRIMARY KEY (`idNSX`);

--
-- Chỉ mục cho bảng `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`idRam`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`idSP`),
  ADD KEY `idDM` (`idDM`),
  ADD KEY `idHDH` (`idHDH`),
  ADD KEY `idNSX` (`idNSX`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`SDT`);

--
-- Chỉ mục cho bảng `thanh_toan`
--
ALTER TABLE `thanh_toan`
  ADD PRIMARY KEY (`phuongThucTT`);

--
-- Chỉ mục cho bảng `trang_thai_hd`
--
ALTER TABLE `trang_thai_hd`
  ADD PRIMARY KEY (`idTrangThai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bo_nho`
--
ALTER TABLE `bo_nho`
  MODIFY `idBoNho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `idDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `hdh`
--
ALTER TABLE `hdh`
  MODIFY `idHDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `idHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `idKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loaikm`
--
ALTER TABLE `loaikm`
  MODIFY `idLoaiKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nsx`
--
ALTER TABLE `nsx`
  MODIFY `idNSX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `ram`
--
ALTER TABLE `ram`
  MODIFY `idRam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `idSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anh`
--
ALTER TABLE `anh`
  ADD CONSTRAINT `anh_ibfk_1` FOREIGN KEY (`idMau`,`idSP`) REFERENCES `mau` (`idMau`, `idSP`),
  ADD CONSTRAINT `anh_ibfk_2` FOREIGN KEY (`idSP`) REFERENCES `san_pham` (`idSP`);

--
-- Các ràng buộc cho bảng `chi_tiet_hd`
--
ALTER TABLE `chi_tiet_hd`
  ADD CONSTRAINT `chi_tiet_hd_ibfk_1` FOREIGN KEY (`idSP`,`idMau`,`idRam`,`idBoNho`) REFERENCES `chi_tiet_sp` (`idSP`, `idMau`, `idRam`, `idBoNho`),
  ADD CONSTRAINT `chi_tiet_hd_ibfk_2` FOREIGN KEY (`idHD`) REFERENCES `hoa_don` (`idHD`);

--
-- Các ràng buộc cho bảng `chi_tiet_sp`
--
ALTER TABLE `chi_tiet_sp`
  ADD CONSTRAINT `chi_tiet_sp_ibfk_1` FOREIGN KEY (`idSP`) REFERENCES `san_pham` (`idSP`),
  ADD CONSTRAINT `chi_tiet_sp_ibfk_2` FOREIGN KEY (`idMau`) REFERENCES `mau` (`idMau`),
  ADD CONSTRAINT `chi_tiet_sp_ibfk_3` FOREIGN KEY (`idRam`) REFERENCES `ram` (`idRam`),
  ADD CONSTRAINT `chi_tiet_sp_ibfk_4` FOREIGN KEY (`idBoNho`) REFERENCES `bo_nho` (`idBoNho`);

--
-- Các ràng buộc cho bảng `chuong_trinh_khuyen_mai`
--
ALTER TABLE `chuong_trinh_khuyen_mai`
  ADD CONSTRAINT `chuong_trinh_khuyen_mai_ibfk_1` FOREIGN KEY (`idKM`) REFERENCES `khuyen_mai` (`idKM`),
  ADD CONSTRAINT `chuong_trinh_khuyen_mai_ibfk_2` FOREIGN KEY (`idSP`) REFERENCES `san_pham` (`idSP`);

--
-- Các ràng buộc cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `gio_hang_ibfk_1` FOREIGN KEY (`SDT`) REFERENCES `tai_khoan` (`SDT`),
  ADD CONSTRAINT `gio_hang_ibfk_2` FOREIGN KEY (`idBoNho`) REFERENCES `chi_tiet_sp` (`idBoNho`),
  ADD CONSTRAINT `gio_hang_ibfk_3` FOREIGN KEY (`idMau`) REFERENCES `chi_tiet_sp` (`idMau`),
  ADD CONSTRAINT `gio_hang_ibfk_4` FOREIGN KEY (`idRam`) REFERENCES `chi_tiet_sp` (`idRam`),
  ADD CONSTRAINT `gio_hang_ibfk_5` FOREIGN KEY (`idSP`) REFERENCES `chi_tiet_sp` (`idSP`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`idTK`) REFERENCES `tai_khoan` (`SDT`),
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`phuongThucTT`) REFERENCES `thanh_toan` (`phuongThucTT`),
  ADD CONSTRAINT `hoa_don_ibfk_3` FOREIGN KEY (`idTrangThai`) REFERENCES `trang_thai_hd` (`idTrangThai`);

--
-- Các ràng buộc cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD CONSTRAINT `khuyen_mai_ibfk_1` FOREIGN KEY (`idLoaiKM`) REFERENCES `loaikm` (`idLoaiKM`);

--
-- Các ràng buộc cho bảng `mau`
--
ALTER TABLE `mau`
  ADD CONSTRAINT `mau_ibfk_1` FOREIGN KEY (`idSP`) REFERENCES `san_pham` (`idSP`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`idDM`) REFERENCES `danh_muc` (`idDM`),
  ADD CONSTRAINT `san_pham_ibfk_2` FOREIGN KEY (`idHDH`) REFERENCES `hdh` (`idHDH`),
  ADD CONSTRAINT `san_pham_ibfk_3` FOREIGN KEY (`idNSX`) REFERENCES `nsx` (`idNSX`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
