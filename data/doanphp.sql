-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 13, 2022 lúc 02:54 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doanphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `matkhau`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `noidung`, `hinhanh`, `class`) VALUES
(1, 'Sản phẩm chính hãng<br>cam kết về sản phẩm và sức khỏe', 'images/banner/ck1.png', 'bn'),
(2, 'Giá cả hợp lí<br>nhập khẩu và phân phối trực tiếp', 'images/banner/ck2.png', 'bn'),
(3, 'An toàn tài chính<br>giao hàng và thu tiền tận nơi', 'images/banner/ck3.png', 'bn'),
(4, 'Tư vấn nhiệt tình<br>đội ngủ tư vấn có chuyên môn', 'images/banner/ck4.png', 'bn bnend');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucadmin`
--

CREATE TABLE `danhmucadmin` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucadmin`
--

INSERT INTO `danhmucadmin` (`id`, `tendanhmuc`, `link`) VALUES
(1, 'Quản Lí Sản Phẩm', 'quan-li-san-pham.php'),
(2, 'Quản Lí User', 'quan-li-user.php'),
(3, 'Quản Lí Danh Mục', 'quan-li-danh-muc.php'),
(5, 'Đổi mật khẩu', 'doi-mat-khau-admin.php'),
(6, 'Thoát', 'dang-xuat-admin.php'),
(7, 'Thống kê', 'thong-ke-admin.php');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `madanhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`madanhmuc`, `tendanhmuc`) VALUES
(1, 'Omega'),
(2, 'Longines'),
(3, 'Tissot'),
(4, 'Hamilton'),
(5, 'Hublot'),
(6, 'Versace'),
(7, 'Salvatore Ferragamo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `idgiohang` int(11) NOT NULL,
  `khachhang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sanpham` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` double(100,2) NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydat` timestamp NOT NULL DEFAULT current_timestamp(),
  `trangthai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '12345',
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vohieuhoa` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'K'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`username`, `fullname`, `password`, `address`, `phone`, `vohieuhoa`) VALUES
('1', 'Hiệp', '1', 'TEST', '0123456789', 'K'),
('ducnhomtruong', 'Đức', '1234567', 'Quangnam', '0352598764', 'K'),
('lethanhduc', 'Lê Thành Đức', '12345', 'Đà Nẵng', '13123213', 'K'),
('thanhduc', 'Đức', '1234567', 'Gia Lai', '0352598744', 'K');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsuthanhtoan`
--

CREATE TABLE `lichsuthanhtoan` (
  `idLS` int(11) NOT NULL,
  `nhanvien` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `khachhang` int(11) NOT NULL,
  `ngayTT` date NOT NULL DEFAULT current_timestamp(),
  `thoiGian` time NOT NULL DEFAULT current_timestamp(),
  `tongTien` double(100,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lichsuthanhtoan`
--

INSERT INTO `lichsuthanhtoan` (`idLS`, `nhanvien`, `khachhang`, `ngayTT`, `thoiGian`, `tongTien`) VALUES
(3, 'vudung', 6, '2021-12-29', '21:27:48', 14590000.00),
(4, 'vudung', 6, '2021-12-29', '21:45:16', 175080000.00),
(5, 'thanhduc', 6, '2021-12-29', '22:02:13', 9490000.00),
(6, 'thanhduc', 6, '2021-12-29', '22:35:53', 9490000.00),
(7, 'thanhduc', 6, '2021-12-29', '22:55:51', 9490000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphukien`
--

CREATE TABLE `loaiphukien` (
  `maloaipk` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenloaipk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiphukien`
--

INSERT INTO `loaiphukien` (`maloaipk`, `tenloaipk`) VALUES
('D1', 'Dây'),
('K1', 'Khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maloaisp` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `tenloaisp` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloaisp`, `tenloaisp`) VALUES
('GM', 'Cao cấp'),
('SV', 'Độc quyền');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phukien`
--

CREATE TABLE `phukien` (
  `mapk` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenpk` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kichthuoc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` double(10,2) NOT NULL,
  `loaipk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phukien`
--

INSERT INTO `phukien` (`mapk`, `tenpk`, `hinhanh`, `kichthuoc`, `gia`, `loaipk`, `soluong`) VALUES
('D001', 'Dây Đồng Hồ Da Cá Sấu 2 Mặt (Màu Đen)', 'https://salt.tikicdn.com/cache/400x400/ts/product/c6/d4/a5/6c62c0f2e81f09296f2f26abd5858ef6.png.webp', 'Size 20mm', 180000.00, 'D1', 30),
('D002', 'Dây đồng hồ da bò sáp handmade AL105 - Size 20/ Size 22; 100% da bò thật, BH 3 năm', 'https://salt.tikicdn.com/cache/400x400/ts/product/81/28/f3/07d40986a1f0b126687b69d340cbd6a1.jpg.webp', '20MM', 275000.00, 'D1', 12),
('D003', 'Dây Da Đồng Hồ Nam, 100% Da Bò Thật, Kiểu Dáng Vintage Phẳng Mỏng', 'https://salt.tikicdn.com/cache/400x400/ts/product/4c/de/b7/4509bf2cb8bc31c4c5062c3d1c655106.jpg.webp', '20-18mm', 724000.00, 'D1', 7),
('D004', 'Dây da Epos DD E-D 22BR', 'https://www.dangquangwatch.vn/upload/product/442906468_d%C3%A2y-da-epos2.jpg', '20mm', 3500000.00, 'D1', 9),
('D005', 'Dây D DM W 14', 'https://www.dangquangwatch.vn/upload/product/205348583_1546412289_D-DM-W-14.jpg', '18mm', 2100000.00, 'D1', 12),
('D006', 'Dây da atlantic D AT-L397.02.24G', 'https://www.dangquangwatch.vn/upload/product/637326163_day-da-atlantic-D%20AT-L397.02.24G.jpg', '20 mm', 275000.00, 'D1', 3),
('K001', 'HỘP PHILIPPE AUGUSTE 2 NGĂN XOAY WW2-0/D', 'https://www.dangquangwatch.vn/upload/product/193525268_hopdonghoco18.jpg', '12 × 12 × 9 cm', 2200000.00, 'K1', 17),
('K002', 'TỦ Philippe Auguste 6 NGĂN XOAY 7 NGĂN BÀY WW6-7/E', 'https://www.dangquangwatch.vn/upload/product/1637730194_hopdungdongho74.jpg', '20 × 20 × 15 cm', 5700000.00, 'K1', 29),
('K003', 'Hộp Đựng Đồng Hồ 10 Ngăn Vỏ Gỗ Veneer Ash Cao Cấp – Mã 510VA', 'https://trungbox.vn/wp-content/uploads/2018/12/Hop-Dung-Dong-Ho-10-Ngan-Vo-Go-Veneer-Ash-Cao-Cap-Ma-510VA-TrungBox-Hinh-1.jpg', '30 x 22 x 8.5 (cm)', 899000.00, 'K1', 37),
('K004', 'HỘP PHILIPPE AUGUSTE 2 NGĂN XOAY WW2-0/C', 'https://www.dangquangwatch.vn/upload/product/221869409_hopdonghoco27.jpg', '15-15-10cm', 2000000.00, 'K1', 22),
('K005', 'Hộp đựng đồng hồ gỗ 2 chiếc', 'https://hopdonghohcm.com/wp-content/uploads/2019/08/hop-dung-dong-ho-2-chiec-go.jpg', '12x12x9 cm', 210000.00, 'K1', 27),
('K006', 'Hộp Đựng Đồng Hồ 6 Ngăn Vỏ Gỗ Sơn Mài', 'https://trungbox.vn/wp-content/uploads/2020/03/Hop-Dung-Dong-Ho-6-Ngan-Vo-Go-Son-Mai-Cao-Cap-Ma-518-TrungBox.jpg', '31.5 x 12.5 x 8 (cm)', 369000.00, 'K1', 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `rangePrice` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `price`
--

INSERT INTO `price` (`id`, `rangePrice`, `status`) VALUES
(1, '0-15 Triệu', 1),
(2, '15-20 Triệu', 1),
(3, '20-25 Triệu', 1),
(4, 'Trên 25 Triệu', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duongkinhmat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chatlieuday` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguondien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chatlieumat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trongluong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namsx` int(11) DEFAULT NULL,
  `gia` double(100,2) NOT NULL,
  `madanhmuc` int(11) NOT NULL,
  `loaisanpham` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `gioithieu` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `hinhanh`, `duongkinhmat`, `chatlieuday`, `gioitinh`, `nguondien`, `chatlieumat`, `trongluong`, `hang`, `namsx`, `gia`, `madanhmuc`, `loaisanpham`, `gioithieu`, `soluong`) VALUES
('HBLB', 'Hublot Bing Bang Limited Edition', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzWIgZ5KdcOvPdaGpKoCKy6ak9xQbYwG1hP3jotJJYT7UO61Z_baafgf5khZeLMCBHRao&usqp=CAU', '42mm', 'Cao su cao cấp', 'Nam, Nữ', 'Pin(Quarts)', 'Kính cứng', '1.1 kg', 'Hublot', 2017, 17000000.00, 5, 'GM', 'Cái tên Hublot được đặt theo hình dáng của chiếc đồng hồ, là một từ tiếng Pháp. Hublot có nghĩa là cửa sổ ở thành tàu, mặt số của chiếc đồng hồ này cũng dễ làm cho ta liên tưởng tới chi tiết đó.\r\nVào tháng 4/2005, Hublot đã tạo nên một chấn động lớn với mẫu đồng hồ Big Bang. Dòng đồng hồ Chronograph này được thiết kế bởi Jean-Claude Biver - người đồng sở hữu thương hiệu Blancpain.', 5),
('HLBB', 'Hublot Bing Bang Genever', 'https://thoitranghanoi.vn/admin/webroot/uploads/images/dong-ho-hublot-nam-chinh-hang-511-ox-7180-lr.jpg', '42mm', 'Cao su Cao cấp', 'Nam', 'Pin (Quarts)', 'Kính Sapphire', '1kg', 'Hublot', 2020, 15540000.00, 5, 'GM', 'Cái tên Hublot được đặt theo hình dáng của chiếc đồng hồ, là một từ tiếng Pháp. Hublot có nghĩa là cửa sổ ở thành tàu, mặt số của chiếc đồng hồ này cũng dễ làm cho ta liên tưởng tới chi tiết đó.\r\nVào tháng 4/2005, Hublot đã tạo nên một chấn động lớn với mẫu đồng hồ Big Bang. Dòng đồng hồ Chronograph này được thiết kế bởi Jean-Claude Biver - người đồng sở hữu thương hiệu Blancpain.', 5),
('HM-3256', 'HA', 'https://donghomytan.vn/wp-content/uploads/2018/01/dong-ho-h32565595.jpg', '43 mm', 'Da tổng hợp', 'Nam, Nữ', 'Pin (Quarts)', 'Kính sapphire', '1kg', 'Hamilton', 2018, 1500000.00, 4, 'GM', '															', 3),
('LT0W2-GM21', 'Versace V-Flare Watch, 28mm', 'https://cdn2.jomashop.com/media/catalog/product/v/e/versace-vmotif-quartz-white-silver-dial-ladies-watch-vere01820.jpg', '42 mm', 'Thép không gỉ', 'Nam', 'Pin (Quartz)', 'Kính Sapphire', '1kg', 'Versace', 2019, 21000000.00, 6, 'GM', '									Versace thể hiện một khái niệm về chất lượng, độ chính xác, độ tin cậy cao kết hợp với sự thanh lịch và độc đáo trong thiết kế. Một trong những mục tiêu chính của họ là tạo ra các thiết kế và mô hình mới hoàn toàn, phù hợp với sự thay đổi của thị hiếu khách hàng, đồng thời giữ giá cả cạnh tranh. Versace hứa hẹn sẽ đem đến cho khách hàng những sản phẩm hoàn hảo, chuẩn mực cùng với thiết kế độc đáo, sang trọng.						', 20),
('LT215-NK22', 'Longines DolceVita 20.80 X 32.00 mm', 'https://likewatch.com/cdn/show/images/product/large/2021/07/dong-ho-likewatch-longines-dolcevita-2080-x-3200-mm-12946293763740.png_720x0x16', '45mm\r\n', 'Thép không rỉ', 'Nữ', '\r\nPin', '\r\nKính khoáng Mineral', '1.90kg', 'Longines', 2019, 14590000.00, 2, 'SV', '																		Xu hướng thiết kế chính của đồng hồ Longines là đơn giản và thanh lịch. Longinesn luôn chú trọng đến việc đổi mới và tạo sự phong phú cho các mẫu thiết kế. Các chi tiết cũng được Longines đầu tư kỹ lưỡng trong khâu chế tác.											', 27),
('LT258-K241', 'American Classic Lady Hamilton Vintage Quartz 14,5x28,4mm', 'https://likewatch.com/cdn/show/images/product/large/2021/06/dong-ho-likewatch-american-classic-lady-hamilton-vintage-quartz-145x284mm-8363473466328.png_720x0x16', '39mm', 'Thép không rỉ', 'Nam', 'Pin\r\n', 'Kính saphire', '1.2 Kg', 'Hamilton', 2018, 9990000.00, 4, 'SV', 'Sản phẩm đồng hồ mang thương hiệu  Hamilton với nhiều mẫu mã năng động, trẻ trung nhưng không kém phần tinh tế và sang trọng, phù hợp với tất cả mọi người hoạt động ở nhiều lĩnh vực từ dân văn phòng đến doanh nhân', 23),
('LT563-N12U', 'Hamilton Khaki Aviation Pilot Pioneer Chrono Quartz Watch, 41mm', 'https://likewatch.com/cdn/show/images/product/large/219653457a8020b9368b3162d631e172.jpg_720x0x19', '45mm', 'Da tổng hợp', 'Nam, Nữ', 'Pin (Quartz)\r\n', 'Kính khoáng Mineral', '1 kg', 'Hamilton', 2019, 9490000.00, 4, 'SV', 'Sản phẩm đồng hồ mang thương hiệu  Hamilton với nhiều mẫu mã năng động, trẻ trung nhưng không kém phần tinh tế và sang trọng, phù hợp với tất cả mọi người hoạt động ở nhiều lĩnh vực từ dân văn phòng đến doanh nhân', 9),
('LT563-T7B4', 'LONGINES\nHydroConquest, 39mm', 'https://likewatch.com/cdn/show/images/product/large/47080f5564449d46dedb019322b049be.jpg_720x0x19', '39.5mm', 'Thép không gỉ', 'Nam', 'Pin', 'Kính saphire', '1.3 Kg ', 'LONGINES', 2017, 5990000.00, 2, 'SV', 'Xu hướng thiết kế chính của đồng hồ Longines là đơn giản và thanh lịch. Longinesn luôn chú trọng đến việc đổi mới và tạo sự phong phú cho các mẫu thiết kế. Các chi tiết cũng được Longines đầu tư kỹ lưỡng trong khâu chế tác.	', 20),
('LT563-T7B6', 'Hublot Big Bang Linen Midsize Watch, 41mm', 'https://likewatch.com/cdn/show/images/product/large/c67097a9808b0eea411cb344d8a7f9d3.jpg_720x0x19', '40mm', 'Da tổng hợp', 'Nữ', 'Pin (Quartz)\r\n', 'Kính cứng', '0.6 Kg', 'Hublot', 2018, 9490000.00, 5, 'SV', '\r\n Từ những thiết kế “retro” cho đồng hồ, họ tin rằng những sản phẩm “thời gian” đó sẽ không bao giờ có dấu hiệu thoái trào. Nói một cách đơn giản, đó là lời cam kết giữa thiết kế trường tồn và chất lượng bền bỉ.', 20),
('LT563-T7B9', 'OMEGA\nSeamaster Diver 300m Quartz 28mm', 'https://likewatch.com/cdn/show/images/product/large/2021/09/dong-ho-likewatch-seamaster-diver-300m-quartz-28mm-2782492634634.png_720x0x19', '42mm', 'Thép không gỉ', 'Nam', 'Pin (Quartz)\r\n', 'Windows 10 Home', '1.2 kg', 'OMEGA ', 2018, 17900000.00, 1, 'SV', 'OMEGA là thương hiệu đồng hồ luôn đi liền với sự xuất sắc, đổi mới và chính xác. Công ty đã liên tục giữ vững được vị trí top đầu trong làng đồng hồ bởi tinh thần tiên phong, được thể hiện bằng các cuộc chinh phục cả về đại dương cũng như không gian', 20),
('LT694-N12U', 'OMEGA\nDe Ville Prestige Quartz 27.4 mm', 'https://likewatch.com/cdn/show/images/product/large/2021/09/dong-ho-likewatch-de-ville-prestige-quartz-274-mm-11311013454305.png_720x0x19', '42mm', 'Thép không gỉ', 'Nữ', 'Pin (Quartz)\r\n\r\n', 'Kính cứng', '1.1 Kg', 'OMEGA', 2018, 14990000.00, 1, 'SV', 'OMEGA là thương hiệu đồng hồ luôn đi liền với sự xuất sắc, đổi mới và chính xác. Công ty đã liên tục giữ vững được vị trí top đầu trong làng đồng hồ bởi tinh thần tiên phong, được thể hiện bằng các cuộc chinh phục cả về đại dương cũng như không gian', 11),
('LT8GM-UY21', 'Hamilton Broadway Day Date Quartz Watcha, 40mm', 'https://likewatch.com/cdn/show/images/product/large/06cd8f13775742135b8c2413fe9f66c9.jpg_720x0x19', '40mm', 'Da tổng hợp', 'Nam, Nữ', 'Pin (Quartz)', 'Kính cứng', '1 Kg', 'Hamilton', 2019, 35900000.00, 4, 'GM', 'Sản phẩm đồng hồ mang thương hiệu  Hamilton với nhiều mẫu mã năng động, trẻ trung nhưng không kém phần tinh tế và sang trọng, phù hợp với tất cả mọi người hoạt động ở nhiều lĩnh vực từ dân văn phòng đến doanh nhân', 21),
('LT8U7-72H2', 'Hamilton American Classic Lady Quartz Watch, 14.5 x 28.4mm', 'https://likewatch.com/cdn/show/images/product/large/3e370970491211e48bbfa60d3ccf8b0e.jpg_720x0x19', '38mm', 'Thép không gỉ', 'Nữ', 'Pin (Quarts)', 'Kính cứng', '0.9 kg', 'Hamilton', 2018, 25900000.00, 4, 'GM', 'Sản phẩm đồng hồ mang thương hiệu  Hamilton với nhiều mẫu mã năng động, trẻ trung nhưng không kém phần tinh tế và sang trọng, phù hợp với tất cả mọi người hoạt động ở nhiều lĩnh vực từ dân văn phòng đến doanh nhân\r\n\r\n', 50),
('LT997-M21O', 'OMEGAOmega De Ville Prestige Co‑Axial, 39.5 mm', 'https://likewatch.com/cdn/show/images/product/large/2021/06/dong-ho-likewatch-american-classic-lady-hamilton-vintage-quartz-145x284mm-8363473466328.png_720x0x16', '40 mm', 'Thép không gỉ', 'Nam', 'Pin (Quarts)', 'Kính saphire', '1 Kg', 'Omega', 2018, 2590999.00, 1, 'SV', 'OMEGA là thương hiệu đồng hồ luôn đi liền với sự xuất sắc, đổi mới và chính xác. Công ty đã liên tục giữ vững được vị trí top đầu trong làng đồng hồ bởi tinh thần tiên phong, được thể hiện bằng các cuộc chinh phục cả về đại dương cũng như không gian			', 20),
('LTG72-T6H2', 'SALVATORE FERRAGAMO\nGANCINO WATCH 22mm', 'https://likewatch.com/cdn/show/images/product/large/2021/04/dong-ho-likewatch-gancino-watch-22mm-6351769833900.jpg_720x0x19', '40 mm', 'Da tổng hợp', 'Nữ', 'Pin (Quarts)', 'Kính Sapphire', '1 kg', 'SALVATORE', 2018, 23490000.00, 7, 'GM', 'Với chiếc đồng hồ vừa thời trang, sang trọng này sẽ giúp phái đẹp tự tin khẳng định mình khi tiếp xúc, gặp gỡ mọi người xung quanh. Bạn có thể diện chiếc đồng hồ trong nhiều dịp khác nhau khi đi chơi, gặp đối tác khách hàng.', 21),
('LTJ5Y-ZJBE', 'Longines Conquest V.H.P, 41mm', 'https://likewatch.com/cdn/show/images/product/large/2020/12/dong-ho-likewatch-longines-conquest-vhp-41mm-2321715359379.jpg_720x0x19', '39 mm', 'Da tổng hợp', 'Nam, Nữ', 'Pin (Quarts)', 'Kính Sapphire', '1 kg', 'Longines', 2019, 14590000.00, 2, 'SV', 'Xu hướng thiết kế chính của đồng hồ Longines là đơn giản và thanh lịch. Longinesn luôn chú trọng đến việc đổi mới và tạo sự phong phú cho các mẫu thiết kế. Các chi tiết cũng được Longines đầu tư kỹ lưỡng trong khâu chế tác.', 3),
('TS1853', 'Tissot Automatic 1853', 'https://qwatch.vn/thumb/300x300/2/upload/sanpham/t109.410.16.053.00_1-9384.jpg', '42mm', 'Da tổng hợp', 'Nam, Nữ', 'Pin (Quarts)', 'Kính Sapphire', '1kg', 'Tissot', 2013, 10000000.00, 3, 'GM', 'Tissot là một trong số những thương hiệu đồng hồ sang trọng đến từ Thụy Sĩ.[2] Thương hiệu được thành lập tại thị trấn Le Locle, Thụy Sĩ bởi nghệ nhân chế tác đồng hồ Charles-Felicien và con trai Charles-Emile Tissot vào năm 1853.[3]\r\n\r\nThương hiệu Tissot hoàn toàn không hề liên quan đến đến một thương hiệu sản xuất đồng hồ Thụy Sĩ khác là Mathey-Tissot. Thương hiệu Tissot hiện nay là một trong số những thương hiệu con của tập đoàn đồng hồ lớn nhất thế giới - Swatch Group.', 5),
('TSBAL', 'Tissot Ballade III', 'https://donghoduyanh.com/images/products/2020/03/17/large/tissot_ballade_iii_automatic_t97248351.jpg', '42mm', 'Thép không gỉ', 'Nam', 'Pin (Quarts)', 'Kính Sapphire', '1kg', 'Tissot', 2015, 12000000.00, 3, 'GM', 'Tissot là một trong số những thương hiệu đồng hồ sang trọng đến từ Thụy Sĩ.[2] Thương hiệu được thành lập tại thị trấn Le Locle, Thụy Sĩ bởi nghệ nhân chế tác đồng hồ Charles-Felicien và con trai Charles-Emile Tissot vào năm 1853.[3]\r\n\r\nThương hiệu Tissot hoàn toàn không hề liên quan đến đến một thương hiệu sản xuất đồng hồ Thụy Sĩ khác là Mathey-Tissot. Thương hiệu Tissot hiện nay là một trong số những thương hiệu con của tập đoàn đồng hồ lớn nhất thế giới - Swatch Group.', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `idslide` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`idslide`, `url`, `date`) VALUES
(1, 'images/slide/slide_1.jpg', '2019-12-24 10:58:50'),
(2, 'images/slide/slide_2.jpg', '2019-12-24 11:00:36'),
(3, 'images/slide/slide_3.jpg', '2019-12-24 11:00:56'),
(4, 'images/slide/slide_4.jpg', '2019-12-24 11:02:15'),
(5, 'images/slide/slide_5.jpg', '2019-12-24 11:02:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `Id` int(11) NOT NULL,
  `ngaydat` varchar(30) NOT NULL,
  `donhang` int(11) NOT NULL,
  `danhthu` int(20) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`Id`, `ngaydat`, `donhang`, `danhthu`, `soluongban`) VALUES
(1, '2021-10-21', 2, 123213321, 2),
(2, '2021-1-20', 3, 231411112, 7),
(3, '2021-10-26', 2, 123213321, 2),
(4, '2021-11-10', 3, 23141323, 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmucadmin`
--
ALTER TABLE `danhmucadmin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`madanhmuc`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idgiohang`),
  ADD KEY `fk_khachhanng` (`khachhang`),
  ADD KEY `fk_sp` (`sanpham`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `lichsuthanhtoan`
--
ALTER TABLE `lichsuthanhtoan`
  ADD PRIMARY KEY (`idLS`),
  ADD KEY `fk_nhanviene` (`nhanvien`),
  ADD KEY `fk_kh` (`khachhang`);

--
-- Chỉ mục cho bảng `loaiphukien`
--
ALTER TABLE `loaiphukien`
  ADD PRIMARY KEY (`maloaipk`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maloaisp`);

--
-- Chỉ mục cho bảng `phukien`
--
ALTER TABLE `phukien`
  ADD PRIMARY KEY (`mapk`),
  ADD KEY `FK_phukien_loaipk` (`loaipk`);

--
-- Chỉ mục cho bảng `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `fk_loaisanpham` (`loaisanpham`),
  ADD KEY `fk_madanhmuc` (`madanhmuc`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`idslide`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `danhmucadmin`
--
ALTER TABLE `danhmucadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `madanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idgiohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `lichsuthanhtoan`
--
ALTER TABLE `lichsuthanhtoan`
  MODIFY `idLS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `idslide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `fk_khachhanng` FOREIGN KEY (`khachhang`) REFERENCES `khachhang` (`username`),
  ADD CONSTRAINT `fk_sp` FOREIGN KEY (`sanpham`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `phukien`
--
ALTER TABLE `phukien`
  ADD CONSTRAINT `FK_phukien_loaipk` FOREIGN KEY (`loaipk`) REFERENCES `loaiphukien` (`maloaipk`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_loaisanpham` FOREIGN KEY (`loaisanpham`) REFERENCES `loaisanpham` (`maloaisp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_madanhmuc` FOREIGN KEY (`madanhmuc`) REFERENCES `danhmucsanpham` (`madanhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
