-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 16, 2023 lúc 09:20 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `x-shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ma_kh` varchar(20) NOT NULL,
  `noi_dung` varchar(2000) NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `ma_hh`, `ma_kh`, `noi_dung`, `ngay_bl`) VALUES
(35, 2, 'admin', 'quá đẹp', '2022-10-18'),
(36, 1, 'admin', 'đẹp', '2022-10-18'),
(39, 3, 'admin', 'bền', '2022-10-18'),
(42, 4, 'admin', '100d', '2022-10-18'),
(43, 5, 'admin', 'hàng đẹp', '2022-10-18'),
(47, 2, 'admin', 'sản phẩm đẹp', '2022-10-18'),
(48, 2, 'admin', 'bên chất lượng', '2022-10-18'),
(49, 6, 'admin', 'hay', '2022-10-18'),
(50, 6, 'admin', 'áo đẹp', '2022-10-19'),
(51, 8, 'admin', 'đẹp', '2022-10-20'),
(52, 4, 'admin', 'đẹp', '2022-10-25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(60) NOT NULL,
  `don_gia` float NOT NULL,
  `giam_gia` float DEFAULT NULL,
  `hinh` varchar(100) DEFAULT NULL,
  `dac_biet` tinyint(1) NOT NULL DEFAULT 0,
  `luot_xem` int(11) NOT NULL DEFAULT 0,
  `ngay_nhap` date NOT NULL DEFAULT current_timestamp(),
  `mo_ta` varchar(4000) DEFAULT NULL,
  `ma_loai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `dac_biet`, `luot_xem`, `ngay_nhap`, `mo_ta`, `ma_loai`) VALUES
(1, 'LEVENTS® PLAY LOGO SHORTPANT', 17, NULL, 'q1.jpg', 0, 1107, '2022-09-24', '<strong  style=\"font-family: Mergeblack;\">Thông tin</strong>\r\n</br></br>\r\n+ LEVENTS® PLAY LOGO SHORT</br>\r\nMATERIAL: LÌ VEN FABRIC – Phiên bản chất vải dày dặn, mềm mịn, không bị nhăn.</br>\r\nSIZE: 1/2/3/4</br>\r\nSản phẩm thuộc bộ sưu tập Spring/ Summer 2022</br>\r\n\r\n</br><hr>\r\n<strong  style=\"font-family: Mergeblack;\">Bảng size</strong>\r\n</br></br>\r\nForm áo được Fit size theo form và tiêu chuẩn tương đối của người Việt Nam, nếu bạn đang cân nhắc giữa hai size, nên chọn size lớn hơn.\r\n</br>\r\nSize 1: Chiều cao từ 1m50 – 1m65, cân nặng trên 55kg</br>\r\nSize 2: Chiều cao từ 1m65 – 1m72, cân nặng dưới 65kg</br>\r\nSize 3: Chiều cao từ 1m70 – 1m77, cân nặng dưới 80kg</br>\r\nSize 4: Chiều cao trên 1m72, cân nặng dưới 95kg.\r\n', 6),
(2, 'LEVENTS® TRAVEL HOODIE', 29, NULL, 'j1.jpg', 1, 1040, '2022-09-24', '<strong  style=\"font-family: Mergeblack;\">Thông tin</strong>\r\n</br></br>\r\n+ LEVENTS® TRAVEL HOODIE</br>\r\nMATERIAL: NỈ</br>\r\nSIZE: 2/3/4</br>\r\nSản phẩm thuộc bộ sưu tập Spring/ Summer Collection 2022\r\n</br><hr>\r\n<strong  style=\"font-family: Mergeblack;\">Bảng size</strong>\r\n</br></br>\r\nForm áo được Fit size theo form và tiêu chuẩn tương đối của người Việt Nam, nếu bạn đang cân nhắc giữa hai size, nên chọn size lớn hơn.</br>\r\nSize 2: Chiều cao từ 1m65 – 1m72, cân nặng dưới 65kg</br>\r\nSize 3: Chiều cao từ 1m70 – 1m77, cân nặng dưới 80kg</br>\r\nSize 4: Chiều cao trên 1m72, cân nặng dưới 95kg\r\n\r\n', 3),
(3, 'LEVENTS® MINI POPULAR POLO', 18, NULL, 'p4.jpg', 1, 619, '2022-09-24', '<strong  style=\"font-family: Mergeblack;\">Thông tin</strong>\r\n</br></br>\r\n+ LEVENTS® MINI POPULAR POLO</br>\r\nMATERIAL: LÌ VEN ORIGINAL  –  Phiên bản bề mặt vải không đổ lông mang cảm giác thoáng mát</br>\r\nSIZE: 1/2/3/4</br>\r\nSản phẩm thuộc bộ sưu tập Spring/ Summer 2022\r\n</br><hr>\r\n<strong  style=\"font-family: Mergeblack;\">Bảng size</strong>\r\n</br></br>\r\nForm áo được Fit size theo form và tiêu chuẩn tương đối của người Việt Nam, nếu bạn đang cân nhắc giữa hai size, nên chọn size lớn hơn.</br>\r\n\r\nSize 1: Chiều cao từ 1m50 – 1m65, cân nặng trên 55kg</br>\r\nSize 2: Chiều cao từ 1m65 – 1m72, cân nặng dưới 65kg</br>\r\nSize 3: Chiều cao từ 1m70 – 1m77, cân nặng dưới 80kg</br>\r\nSize 4: Chiều cao trên 1m72, cân nặng dưới 95kg.</br>\r\n', 5),
(4, 'LEVENTS® TRAVEL TEE', 18, NULL, 't5.jpg', 1, 2032, '2022-09-24', '<strong  style=\"font-family: Mergeblack;\">Thông tin</strong>\r\n</br></br>\r\n+ LEVENTS® PLAY LOGO SHORT</br>\r\nMATERIAL: LÌ VEN FABRIC – Phiên bản chất vải dày dặn, mềm mịn, không bị nhăn.</br>\r\nSIZE: 1/2/3/4</br>\r\nSản phẩm thuộc bộ sưu tập Spring/ Summer 2022</br>\r\n\r\n</br><hr>\r\n<strong  style=\"font-family: Mergeblack;\">Bảng size</strong>\r\n</br></br>\r\nForm áo được Fit size theo form và tiêu chuẩn tương đối của người Việt Nam, nếu bạn đang cân nhắc giữa hai size, nên chọn size lớn hơn.\r\n</br>\r\nSize 1: Chiều cao từ 1m50 – 1m65, cân nặng trên 55kg</br>\r\nSize 2: Chiều cao từ 1m65 – 1m72, cân nặng dưới 65kg</br>\r\nSize 3: Chiều cao từ 1m70 – 1m77, cân nặng dưới 80kg</br>\r\nSize 4: Chiều cao trên 1m72, cân nặng dưới 95kg.\r\n', 4),
(5, 'LEVENTS® SPORTY JACKET/ BLACK', 27, NULL, 'j2.jpg', 1, 567, '2022-10-01', '<strong  style=\"font-family: Mergeblack;\">Thông tin</strong>\r\n</br></br>\r\n+ LEVENTS® PLAY LOGO SHORT</br>\r\nMATERIAL: LÌ VEN FABRIC – Phiên bản chất vải dày dặn, mềm mịn, không bị nhăn.</br>\r\nSIZE: 1/2/3/4</br>\r\nSản phẩm thuộc bộ sưu tập Spring/ Summer 2022</br>\r\n\r\n</br><hr>\r\n<strong style=\"font-family: Mergeblack;\">Bảng size</strong>\r\n</br></br>\r\nForm áo được Fit size theo form và tiêu chuẩn tương đối của người Việt Nam, nếu bạn đang cân nhắc giữa hai size, nên chọn size lớn hơn.\r\n</br>\r\nSize 1: Chiều cao từ 1m50 – 1m65, cân nặng trên 55kg</br>\r\nSize 2: Chiều cao từ 1m65 – 1m72, cân nặng dưới 65kg</br>\r\nSize 3: Chiều cao từ 1m70 – 1m77, cân nặng dưới 80kg</br>\r\nSize 4: Chiều cao trên 1m72, cân nặng dưới 95kg.\r\n', 3),
(6, 'LEVENTS® BASIC SWEATER', 24, NULL, 's3.jpg', 1, 1134, '2022-10-01', '<strong  style=\"font-family: Mergeblack;\">Thông tin</strong>\r\n</br></br>\r\n+ LEVENTS® PLAY LOGO SHORT</br>\r\nMATERIAL: LÌ VEN FABRIC – Phiên bản chất vải dày dặn, mềm mịn, không bị nhăn.</br>\r\nSIZE: 1/2/3/4</br>\r\nSản phẩm thuộc bộ sưu tập Spring/ Summer 2022</br>\r\n\r\n</br><hr>\r\n<strong style=\"font-family: Mergeblack;\">Bảng size</strong>\r\n</br></br>\r\nForm áo được Fit size theo form và tiêu chuẩn tương đối của người Việt Nam, nếu bạn đang cân nhắc giữa hai size, nên chọn size lớn hơn.\r\n</br>\r\nSize 1: Chiều cao từ 1m50 – 1m65, cân nặng trên 55kg</br>\r\nSize 2: Chiều cao từ 1m65 – 1m72, cân nặng dưới 65kg</br>\r\nSize 3: Chiều cao từ 1m70 – 1m77, cân nặng dưới 80kg</br>\r\nSize 4: Chiều cao trên 1m72, cân nặng dưới 95kg.\r\n', 7),
(7, 'LEVENTS® | DORAEMON MINI CAT POLO', 20, NULL, 'p5.jpg', 1, 11, '2022-09-30', '<strong  style=\"font-family: Mergeblack;\">Thông tin</strong>\r\n</br></br>\r\n+ LEVENTS® PLAY LOGO SHORT</br>\r\nMATERIAL: LÌ VEN FABRIC – Phiên bản chất vải dày dặn, mềm mịn, không bị nhăn.</br>\r\nSIZE: 1/2/3/4</br>\r\nSản phẩm thuộc bộ sưu tập Spring/ Summer 2022</br>\r\n\r\n</br><hr>\r\n<strong style=\"font-family: Mergeblack;\">Bảng size</strong>\r\n</br></br>\r\nForm áo được Fit size theo form và tiêu chuẩn tương đối của người Việt Nam, nếu bạn đang cân nhắc giữa hai size, nên chọn size lớn hơn.\r\n</br>\r\nSize 1: Chiều cao từ 1m50 – 1m65, cân nặng trên 55kg</br>\r\nSize 2: Chiều cao từ 1m65 – 1m72, cân nặng dưới 65kg</br>\r\nSize 3: Chiều cao từ 1m70 – 1m77, cân nặng dưới 80kg</br>\r\nSize 4: Chiều cao trên 1m72, cân nặng dưới 95kg.\r\n', 5),
(8, 'LEVENTS® | DORAEMON FAMOUS CAT TEE', 18, NULL, 't10.jpg', 1, 2340, '2022-09-30', '<strong  style=\"font-family: Mergeblack;\">Thông tin</strong>\r\n</br></br>\r\n+ LEVENTS® PLAY LOGO SHORT</br>\r\nMATERIAL: LÌ VEN FABRIC – Phiên bản chất vải dày dặn, mềm mịn, không bị nhăn.</br>\r\nSIZE: 1/2/3/4</br>\r\nSản phẩm thuộc bộ sưu tập Spring/ Summer 2022</br>\r\n\r\n</br><hr>\r\n<strong style=\"font-family: Mergeblack;\">Bảng size</strong>\r\n</br></br>\r\nForm áo được Fit size theo form và tiêu chuẩn tương đối của người Việt Nam, nếu bạn đang cân nhắc giữa hai size, nên chọn size lớn hơn.\r\n</br>\r\nSize 1: Chiều cao từ 1m50 – 1m65, cân nặng trên 55kg</br>\r\nSize 2: Chiều cao từ 1m65 – 1m72, cân nặng dưới 65kg</br>\r\nSize 3: Chiều cao từ 1m70 – 1m77, cân nặng dưới 80kg</br>\r\nSize 4: Chiều cao trên 1m72, cân nặng dưới 95kg.\r\n', 4),
(11, 'LEVENTS® FUNNY CROCODILE TEE', 18, NULL, 't8.jpg', 1, 3434, '2022-10-04', '<strong  style=\"font-family: Mergeblack;\">Thông tin</strong>\r\n</br></br>\r\n+ LEVENTS® TRAVEL HOODIE</br>\r\nMATERIAL: NỈ</br>\r\nSIZE: 2/3/4</br>\r\nSản phẩm thuộc bộ sưu tập Spring/ Summer Collection 2022\r\n</br><hr>\r\n<strong  style=\"font-family: Mergeblack;\">Bảng size</strong>\r\n</br></br>\r\nForm áo được Fit size theo form và tiêu chuẩn tương đối của người Việt Nam, nếu bạn đang cân nhắc giữa hai size, nên chọn size lớn hơn.</br>\r\nSize 2: Chiều cao từ 1m65 – 1m72, cân nặng dưới 65kg</br>\r\nSize 3: Chiều cao từ 1m70 – 1m77, cân nặng dưới 80kg</br>\r\nSize 4: Chiều cao trên 1m72, cân nặng dưới 95kg\r\n\r\n', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `ma_kh` varchar(20) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `mat_khau` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `vai_tro` tinyint(1) NOT NULL DEFAULT 0,
  `kich_hoat` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`ma_kh`, `ho_ten`, `mat_khau`, `email`, `hinh`, `vai_tro`, `kich_hoat`) VALUES
('admin', 'Trần Bích Triệu', 'trieu', 'trieutran989@gmail.com', 'hanoimoi.com.vn-uploads-images-lequyen-2023-01-_1-3-.jpg', 1, 1),
('trieutran123', 'trieutran123', 'trieucute', 'trieutran989@gmail.com', 'uploads.20220421_100217.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(3, 'Jacket'),
(4, 'T-Shirt'),
(5, 'Polo'),
(6, 'Short'),
(7, 'Sweater'),
(37, 'đasa'),
(38, 'đasa');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `ma_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hanghoa` (`ma_hh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ma_kh` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
