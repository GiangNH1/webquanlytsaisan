-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2020 lúc 04:07 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webquanlytaisan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `asset`
--

CREATE TABLE `asset` (
  `assetid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `assetname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `configuration` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `roomid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `asset`
--

INSERT INTO `asset` (`assetid`, `assetname`, `configuration`, `roomid`, `status`) VALUES
('MVT_FPT', 'Máy vi tính FPT Elead', '- Bộ xử lý: tốc độ CPU 2.30 GHz\r\n- Bộ nhớ, RAM, ổ cứng: RAM 4GB, ổ cứng HDD 500GB\r\n- Hệ điều hành: windown 7', 'PKHOA', 'Đang hoạt động'),
('MVT1', 'Máy vi tính VTB loại 1', '- Bộ xử lý: tốc độ CPU 2.30 GHz\r\n- Bộ nhớ, RAM, ổ cứng: RAM 4GB, ổ cứng HDD 500GB\r\n- Hệ điều hành: windown 7', 'PH101', 'Đang hoạt đông'),
('MVT1', 'Máy vi tính VTB loại 1', '- Bộ xử lý: tốc độ CPU 2.30 GHz\r\n- Bộ nhớ, RAM, ổ cứng: RAM 4GB, ổ cứng HDD 500GB\r\n- Hệ điều hành: windown 7', 'PH103', 'Đang hoạt động'),
('MVT2', 'Máy vi tính VTB loại 2', '- Bộ xử lý: tốc độ CPU 2.30 GHz\r\n- Bộ nhớ, RAM, ổ cứng: RAM 4GB, ổ cứng HDD 500GB\r\n- Hệ điều hành: windown 7', 'PH101', 'Đang hoạt động'),
('MVT2', 'Máy vi tính VTB loại 2', '- Bộ xử lý: tốc độ CPU 2.30 GHz\r\n- Bộ nhớ, RAM, ổ cứng: RAM 4GB, ổ cứng HDD 500GB\r\n- Hệ điều hành: windown 7', 'PH103', 'Đang hoạt động'),
('MVT2', 'Máy vi tính VTB loại 2', '- Bộ xử lý: tốc độ CPU 2.30 GHz\r\n- Bộ nhớ, RAM, ổ cứng: RAM 4GB, ổ cứng HDD 500GB\r\n- Hệ điều hành: windown 7', 'PH104', 'Đang hoạt động'),
('MVTHP', 'Máy vi tính xác tay HP 530S', '- Bộ xử lý: tốc độ CPU 2.30 GHz\r\n- Bộ nhớ, RAM, ổ cứng: RAM 4GB, ổ cứng HDD 500GB\r\n- Hệ điều hành: windown 7', 'PKHOA', 'Đang hoạt động'),
('MVTHP3', 'Máy vi tính HP compaq loại 3', '- Bộ xử lý: tốc độ CPU 2.30 GHz\r\n- Bộ nhớ, RAM, ổ cứng: RAM 4GB, ổ cứng HDD 500GB\r\n- Hệ điều hành: windown 7', 'PH101', 'Đang hoạt động'),
('MVTHP3', 'Máy vi tính HP compaq loại 3', '- Bộ xử lý: tốc độ CPU 2.30 GHz\r\n- Bộ nhớ, RAM, ổ cứng: RAM 4GB, ổ cứng HDD 500GB\r\n- Hệ điều hành: windown 7', 'PKHOA', 'Đang hoạt động'),
('MVTVietcom', 'Máy vi tính Vietcom (khối)', '- Bộ xử lý: tốc độ CPU 2.30 GHz\r\n- Bộ nhớ, RAM, ổ cứng: RAM 4GB, ổ cứng HDD 500GB\r\n- Hệ điều hành: windown 7', 'PH103', 'Đang hoạt động');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `borrowroom`
--

CREATE TABLE `borrowroom` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `roomid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dateregist` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `datestart` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `daystart` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `formlesson` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tolesson` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `borrowroom`
--

INSERT INTO `borrowroom` (`username`, `roomid`, `dateregist`, `datestart`, `daystart`, `formlesson`, `tolesson`, `status`) VALUES
('anhthu', 'PH103', '2020-06-24', '2020-06-24', 'Sáng', 'Tiết 1', 'Tiết 2', 'was handled');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `newsid` int(11) NOT NULL,
  `contents` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `postingdate` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`newsid`, `contents`, `postingdate`, `status`) VALUES
(1, 'Bảng phân công coi thi, bố trí phòng thi tuần 48', '2020-05-19', 'Mới');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notification`
--

CREATE TABLE `notification` (
  `notificationid` int(11) NOT NULL,
  `sender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `receiver` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contents` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sendate` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `notification`
--

INSERT INTO `notification` (`notificationid`, `sender`, `receiver`, `contents`, `sendate`, `status`) VALUES
(7, 'admin', 'user', 'cam ơn', '2020-06-12', 'đã gửi'),
(8, 'admin', 'user', 'ok', '2020-06-12', 'đã gửi'),
(9, 'admin', 'anhthu', 'Phòng thực hành bạn đăng ký đã được phê duyệt', '2020-06-23', 'đã xem'),
(10, 'admin', 'anhthu', 'Phòng thực hành bạn đăng ký đã được phê duyệt', '2020-06-24', 'đã gửi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `roomid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `roomname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `function` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`roomid`, `roomname`, `location`, `function`, `note`) VALUES
('PA1_401', 'Phòng A1_401', 'Khu A1', 'Phòng hiệu bộ', 'Trống'),
('PA1_402', 'Phòng A1_402', 'Khu A1', 'Phòng hiệu bộ', 'Trống'),
('PA1_403', 'Phòng A1_403', 'Khu A1', 'Phòng hiệu bộ', 'Trống'),
('PA1_404', 'Phòng A1_404', 'Khu A1', 'Phòng hiệu bộ', 'Trống'),
('PDOIGV', 'Phòng Đợi Giảng Viên', 'Tầng 1', 'Phòng đợi giảng viên', ''),
('PH101', 'Phòng H101', 'Tầng 1', 'phòng thực hành', 'Cơ sở dữ liệu'),
('PH103', 'Phòng H103', 'Tầng 1', 'phòng thực hành', 'Công Nghệ Phần Mềm'),
('PH104', 'Phòng H104', 'Tầng 1', 'phòng thực hành', 'Trống'),
('PH201', 'Phòng H201', 'Tầng 2', 'phòng thực hành', 'Lập Trình C, C++'),
('PH202', 'Phòng H202', 'Tầng 2', 'phòng thực hành', 'Trống'),
('PH203', 'Phòng H203', 'Tầng 2', 'phòng thực hành', 'Trống'),
('PH204', 'Phòng H204', 'Tầng 2', 'phòng thực hành', 'Trống'),
('PH301', 'Phòng H301', 'Tầng 3', 'phòng thực hành', 'Photoshop '),
('PH302', 'Phòng H302', 'Tầng 3', 'phòng thực hành', 'Trống'),
('PH303', 'Phòng H303', 'Tầng 3', 'phòng thực hành', 'CISCO'),
('PH304', 'Phòng H304', 'Tầng 3', 'phòng thực hành', 'Trống'),
('Phongkhac', 'Phòng 101', 'Tầng 1', 'Phòng hiệu bộ', 'Trống'),
('PKHO', 'phòng kho', 'Tầng 1', 'phòng kho', 'phòng kho'),
('PKHOA', 'Phòng Khoa', 'Tầng 1', 'văn phòng khoa', 'Văn Phòng Khoa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tools`
--

CREATE TABLE `tools` (
  `toolid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `toolname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `roomid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tools`
--

INSERT INTO `tools` (`toolid`, `toolname`, `roomid`, `amount`, `status`) VALUES
('Abc', 'abc', 'PH101', 1, ''),
('BLVG', 'Bàn làm việc gỗ Hòa Phát', 'PH101', 1, ''),
('BVT1', 'Bàn vi tính 1 hộc', 'PH101', 28, ''),
('GI', 'Ghế Inox', 'PH101', 19, ''),
('GTG', 'Ghế tựa gỗ', 'PH101', 1, ''),
('MCD', 'Máy chiếu điện HPEC', 'PH101', 1, ''),
('MDH', 'Máy điều hòa Samsung', 'PH101', 2, ''),
('MI', 'Máy in', 'PH101', 1, 'hư cáp'),
('MI2900', 'Máy in canon 2900', 'PH101', 1, ''),
('MI6200', 'Máy in canon 6200', 'PH101', 2, ''),
('MI810', 'Máy in canon 810', 'PH101', 1, ''),
('MTG', 'Máy trợ giảng TA50', 'PH101', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `fullname`, `password`, `role`, `address`, `phone`, `email`, `img`) VALUES
('admin', 'admin1', 'admin', 'admin', 'TP Quang Ngai Son Tinh Giang ', '0329849797', 'giang51@gmail.com.vn', 'admin.jpg'),
('anhthu', 'Bùi Nguyễn Anh Thư', 'anhthu', 'user', 'TP Quảng Ngãi', '0329849797', 'buianhthu1998@gmail.com', 'user.jpg'),
('datdo', 'Đỗ Đức Đạt', 'datdo', 'user', 'TP Quảng Ngãi', '0329849797', 'datdo124@gmail.com', 'user.jpg'),
('duclan', 'Võ Đức	Lân', 'duclan', 'admin', 'TP Quảng Ngãi', '0979121318', 'vdlan84@gmail.com', 'user.jpg'),
('khanhbao', 'Phạm Khánh	Bảo', 'khanhbao', 'user', 'TP Quảng Ngãi', '0979121318', 'pkbao@pdu.edu.vn', ''),
('trinhan', 'Nguyễn Trí Nhân', 'trinhan', 'admin', 'TP Quảng Ngãi', '0919367857', 'nguyentrinhan70@gmail.com', ''),
('user', 'Nguyen Hong Giang', 'user', 'user', 'Tinh Giang- Son Tinh - Quang Ngai', '0329849797', 'giang51@gmail.com', 'user.jpg'),
('vantoan', 'Nguyễn Văn	Toán', 'vantoan', 'user', 'TP Quảng Ngãi', '0365588665', 'toan.fiit@gmail.com', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`assetid`,`roomid`),
  ADD KEY `asset_ibfk_1` (`roomid`);

--
-- Chỉ mục cho bảng `borrowroom`
--
ALTER TABLE `borrowroom`
  ADD PRIMARY KEY (`roomid`,`datestart`,`daystart`),
  ADD KEY `username` (`username`),
  ADD KEY `roomid` (`roomid`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Chỉ mục cho bảng `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notificationid`),
  ADD KEY `sender` (`sender`,`receiver`),
  ADD KEY `notification_rêciver` (`receiver`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomid`);

--
-- Chỉ mục cho bảng `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`toolid`,`roomid`),
  ADD KEY `roomid` (`roomid`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `notification`
--
ALTER TABLE `notification`
  MODIFY `notificationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `asset`
--
ALTER TABLE `asset`
  ADD CONSTRAINT `asset_ibfk_1` FOREIGN KEY (`roomid`) REFERENCES `room` (`roomid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `borrowroom`
--
ALTER TABLE `borrowroom`
  ADD CONSTRAINT `FK_borrowroom_room` FOREIGN KEY (`roomid`) REFERENCES `room` (`roomid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_borrowroom_user` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `nitification_sender` FOREIGN KEY (`sender`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tools`
--
ALTER TABLE `tools`
  ADD CONSTRAINT `tools_ibfk_1` FOREIGN KEY (`roomid`) REFERENCES `room` (`roomid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
