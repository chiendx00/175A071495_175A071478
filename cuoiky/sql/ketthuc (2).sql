-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2020 lúc 09:57 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ketthuc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accountgv`
--

CREATE TABLE `accountgv` (
  `idaccountgv` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `idgiangvien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `accountgv`
--

INSERT INTO `accountgv` (`idaccountgv`, `username`, `password`, `idgiangvien`) VALUES
(1, 'nguyenVanA@wru.vn', '001', 1),
(2, 'NguyenVanB@wru.vn', '002', 2),
(3, 'NguyenVanC@wru.vn', '003', 3),
(4, 'NguyenVanD@wru.vn', '004', 4),
(5, 'nguyenvanE@wru.vn', '005', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accountsv`
--

CREATE TABLE `accountsv` (
  `idaccountsv` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `idsinhvien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `accountsv`
--

INSERT INTO `accountsv` (`idaccountsv`, `username`, `password`, `idsinhvien`) VALUES
(1, 'TranVanA@wru.vn', '101', 1),
(2, 'TranThiB@wru.vn', '102', 2),
(3, 'TranVanC@wru.vn', '103', 3),
(4, 'TranThiD@wru.vn', '104', 4),
(5, 'LeThiA@wru.vn', '105', 5),
(6, 'LeVanC@wru.vn', '106', 6),
(7, 'HoVanA@wru.vn', '107', 7),
(8, 'TruongVanA@wru.vn', '108', 8),
(9, 'LyVanE@wru.vn', '109', 9),
(10, 'DuongThiF@wru.vn', '110', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemdanh`
--

CREATE TABLE `diemdanh` (
  `iddiemdanh` int(11) NOT NULL,
  `idsinhvien` int(11) NOT NULL,
  `idhocphan` int(11) NOT NULL,
  `ngay` date NOT NULL,
  `comat` varchar(30) NOT NULL,
  `ghichu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `diemdanh`
--

INSERT INTO `diemdanh` (`iddiemdanh`, `idsinhvien`, `idhocphan`, `ngay`, `comat`, `ghichu`) VALUES
(1, 1, 1, '2019-11-02', '', ''),
(2, 2, 1, '2019-11-02', '', ''),
(3, 3, 1, '2019-11-02', '', ''),
(4, 4, 2, '2020-10-01', '', ''),
(5, 5, 2, '2020-10-01', '', ''),
(6, 6, 2, '2020-10-01', '', ''),
(7, 7, 3, '2020-10-01', '', ''),
(8, 8, 3, '2020-10-01', '', ''),
(9, 9, 3, '2020-10-01', '', ''),
(10, 10, 3, '2020-10-01', '', ''),
(11, 1, 4, '2020-10-01', '', ''),
(12, 4, 4, '2020-10-01', '', ''),
(13, 10, 4, '2020-10-01', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `idgiangvien` int(11) NOT NULL,
  `tengiangvien` varchar(30) DEFAULT NULL,
  `idnganhhoc` int(11) NOT NULL,
  `idmonhoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`idgiangvien`, `tengiangvien`, `idnganhhoc`, `idmonhoc`) VALUES
(1, 'nguyen Van A', 1, 1),
(2, 'Nguyen Van B', 2, 2),
(3, 'Nguyen Van C', 3, 3),
(4, 'Nguyen Van D', 4, 4),
(5, 'Nguyen Van E', 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphan`
--

CREATE TABLE `hocphan` (
  `idhocphan` int(11) NOT NULL,
  `tenhocphan` varchar(30) DEFAULT NULL,
  `idlop` int(11) NOT NULL,
  `idthoigian` int(11) NOT NULL,
  `idgiangvien` int(11) NOT NULL,
  `idmonhoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hocphan`
--

INSERT INTO `hocphan` (`idhocphan`, `tenhocphan`, `idlop`, `idthoigian`, `idgiangvien`, `idmonhoc`) VALUES
(0, 'Lap Trinh-Th2', 0, 2, 1, 1),
(1, 'Lap Trinh-Th1', 1, 1, 1, 1),
(2, 'Ket Cau Sat-CT1', 2, 2, 2, 2),
(3, 'Tai Chinh-TC1', 3, 3, 3, 3),
(4, 'Mac-Lenin-all', 1, 4, 4, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphan_sinhvien`
--

CREATE TABLE `hocphan_sinhvien` (
  `idhp_sv` int(11) NOT NULL,
  `idhocphan` int(11) NOT NULL,
  `idsinhvien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hocphan_sinhvien`
--

INSERT INTO `hocphan_sinhvien` (`idhp_sv`, `idhocphan`, `idsinhvien`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `idlop` int(11) NOT NULL,
  `tenlop` varchar(30) DEFAULT NULL,
  `idnganhhoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`idlop`, `tenlop`, `idnganhhoc`) VALUES
(0, 'th2', 1),
(1, 'Th1', 1),
(2, 'CT1', 2),
(3, 'KT1', 3),
(4, 'CT2', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `idmonhoc` int(11) NOT NULL,
  `tenmon` varchar(30) DEFAULT NULL,
  `idnganhhoc` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`idmonhoc`, `tenmon`, `idnganhhoc`) VALUES
(0, 'Lap Trinh C#', 1),
(1, 'Lap Trinh Java', 1),
(2, 'Ket Cau Sat', 2),
(3, 'Tai Chinh', 3),
(4, 'mac-lenin', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganhhoc`
--

CREATE TABLE `nganhhoc` (
  `idnganhhoc` int(11) NOT NULL,
  `tennganhhoc` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nganhhoc`
--

INSERT INTO `nganhhoc` (`idnganhhoc`, `tennganhhoc`) VALUES
(1, 'CNTT'),
(2, 'Cong Trinh'),
(3, 'Kinh Te'),
(4, 'Chinh Tri'),
(6, 'LOL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `idsinhvien` int(11) NOT NULL,
  `tensinhvien` varchar(30) DEFAULT NULL,
  `idlop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`idsinhvien`, `tensinhvien`, `idlop`) VALUES
(1, 'Tran Van A', 1),
(2, 'Tran Thi B', 1),
(3, 'Tran van C', 1),
(4, 'Tran Thi D', 2),
(5, 'Le Thi A', 2),
(6, 'Le Van C', 2),
(7, 'Ho Van A', 3),
(8, 'Truong Van A', 3),
(9, 'Ly Van E', 3),
(10, 'Duong Thi F', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoigian`
--

CREATE TABLE `thoigian` (
  `idthoigian` int(11) NOT NULL,
  `namhoc` varchar(10) DEFAULT NULL,
  `hocki` char(5) DEFAULT NULL,
  `giaidoan` char(5) DEFAULT NULL,
  `thoigianbatdau` date DEFAULT NULL,
  `thoigianketthuc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thoigian`
--

INSERT INTO `thoigian` (`idthoigian`, `namhoc`, `hocki`, `giaidoan`, `thoigianbatdau`, `thoigianketthuc`) VALUES
(1, '2019-2020', '1', '1', '2019-11-01', '2019-12-01'),
(2, '2019-2020', '1', '2', '2020-01-01', '2020-02-01'),
(3, '2019-2020', '2', '1', '2020-03-01', '2020-04-01'),
(4, '2019-2020', '2', '2', '2020-05-01', '2020-06-01');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accountgv`
--
ALTER TABLE `accountgv`
  ADD PRIMARY KEY (`idaccountgv`);

--
-- Chỉ mục cho bảng `accountsv`
--
ALTER TABLE `accountsv`
  ADD PRIMARY KEY (`idaccountsv`);

--
-- Chỉ mục cho bảng `diemdanh`
--
ALTER TABLE `diemdanh`
  ADD PRIMARY KEY (`iddiemdanh`),
  ADD KEY `idsinhvien` (`idsinhvien`),
  ADD KEY `idhocphan` (`idhocphan`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`idgiangvien`),
  ADD KEY `idmonhoc` (`idmonhoc`);

--
-- Chỉ mục cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  ADD PRIMARY KEY (`idhocphan`),
  ADD KEY `idlop` (`idlop`),
  ADD KEY `idthoigian` (`idthoigian`),
  ADD KEY `idgiangvien` (`idgiangvien`);

--
-- Chỉ mục cho bảng `hocphan_sinhvien`
--
ALTER TABLE `hocphan_sinhvien`
  ADD PRIMARY KEY (`idhp_sv`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`idlop`),
  ADD KEY `idnganhhoc` (`idnganhhoc`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`idmonhoc`);

--
-- Chỉ mục cho bảng `nganhhoc`
--
ALTER TABLE `nganhhoc`
  ADD PRIMARY KEY (`idnganhhoc`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`idsinhvien`),
  ADD KEY `idlop` (`idlop`);

--
-- Chỉ mục cho bảng `thoigian`
--
ALTER TABLE `thoigian`
  ADD PRIMARY KEY (`idthoigian`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diemdanh`
--
ALTER TABLE `diemdanh`
  ADD CONSTRAINT `diemdanh_ibfk_1` FOREIGN KEY (`idsinhvien`) REFERENCES `sinhvien` (`idsinhvien`),
  ADD CONSTRAINT `diemdanh_ibfk_2` FOREIGN KEY (`idhocphan`) REFERENCES `hocphan` (`idhocphan`);

--
-- Các ràng buộc cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`idmonhoc`) REFERENCES `monhoc` (`idmonhoc`);

--
-- Các ràng buộc cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  ADD CONSTRAINT `hocphan_ibfk_1` FOREIGN KEY (`idlop`) REFERENCES `lop` (`idlop`),
  ADD CONSTRAINT `hocphan_ibfk_2` FOREIGN KEY (`idthoigian`) REFERENCES `thoigian` (`idthoigian`),
  ADD CONSTRAINT `hocphan_ibfk_3` FOREIGN KEY (`idgiangvien`) REFERENCES `giangvien` (`idgiangvien`);

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`idnganhhoc`) REFERENCES `nganhhoc` (`idnganhhoc`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`idlop`) REFERENCES `lop` (`idlop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
