-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 10, 2022 lúc 04:27 PM
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
-- Cơ sở dữ liệu: `myproject`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `displayhomepage` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `displayhomepage`) VALUES
(37, 0, 'Gạch lát nền', '', 1),
(36, 34, 'Gạch men mờ', 'Gạch men mờ hạn chế được nguy cơ trơn trợt', 1),
(35, 34, 'Gạch men bóng', 'Gạch men bóng mang sang sự sang trọng, tinh tế cho không gian nhà ở của bạn', 1),
(34, 0, 'Gạch men', '', 0),
(38, 37, 'Gạch giả gỗ', 'Gạch giả vân gỗ giá rẻ được ưa chuộng bởi độ bền cao, khả năng chống cháy tốt, chống mối mọt', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `sdt` varchar(500) NOT NULL,
  `tieude` varchar(500) NOT NULL,
  `ghichu` varchar(500) NOT NULL,
  `readed` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `sdt`, `tieude`, `ghichu`, `readed`, `date`) VALUES
(6, 'test chức năng', '111111111', 'test chức năng', 'Chỉ là test chức năng', 0, '2022-05-08 10:39:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `verification_code` varchar(500) NOT NULL,
  `Is_verified` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `phone`, `password`, `verification_code`, `Is_verified`) VALUES
(7, 'Đỗ Vinh Quang', 'conlondat5@gmail.com', 'Số 85 , ngõ 401, đường Xuân Đỉnh, phường Xuân Đỉnh, quận Bắc Từ Liêm', '123124124', '202cb962ac59075b964b07152d234b70', '192d378ea488', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `content` text NOT NULL,
  `hot` int(11) NOT NULL DEFAULT 0,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `photo` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `name`, `description`, `content`, `hot`, `datetime`, `photo`) VALUES
(17, 'Gạch VITTO PERCELAIN 100x100cm nâng tầm không gian sống đẳng cấp', '<p>Những cảm nhận ch&acirc;n thật về chất liệu cao cấp, thiết kế theo mạch cảm hứng hiện đại trong bộ sưu tập Gạch Porcelain 100x100cm của Vitto sẽ đem đến sự trải nghiệm ho&agrave;n hảo cho những kh&aacute;ch h&agrave;ng đam m&ecirc; kh&ocirc;ng gian sống đẳng cấp.</p>\r\n', '<h2>1.&nbsp;Những gi&aacute; trị ưu việt thiết lập kh&ocirc;ng gian sống</h2>\r\n\r\n<p>Kh&ocirc;ng gian sống hiện đại ng&agrave;y nay l&agrave; sự kết hợp ho&agrave;n hảo giữa gi&aacute; trị thẩm mỹ v&agrave; gi&aacute; trị bền vững của vật liệu x&acirc;y dựng. Ch&iacute;nh v&igrave; vậy, Vitto tự tin mang đến tuyệt t&aacute;c gạch khổ lớn trong bộ sưu tập gạch Porcelain 100x100cm lấy cảm hứng từ đ&aacute; nguy&ecirc;n khối tự nhi&ecirc;n cho những kh&ocirc;ng gian kiến tr&uacute;c đẳng cấp.</p>\r\n\r\n<p><img alt=\"vitto-percelain-100x100cm-h1\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/vitto-percelain-100x100cm-h1.png\" />Kh&ocirc;ng gian trở n&ecirc;n tho&aacute;ng đ&atilde;ng, rộng r&atilde;i hơn với gạch Porcelain 100x100cm</p>\r\n\r\n<p>D&ograve;ng gạch Porcelain của Vitto nổi tiếng bởi lớp xương đ&aacute; với kết cấu vững chắc c&ugrave;ng khả năng chịu lực cao, ch&iacute;nh v&igrave; vậy đặc điểm của d&ograve;ng gạch n&agrave;y đ&aacute;p ứng được những y&ecirc;u cầu khắt khe của những nh&agrave; thiết kế cũng như người sử dụng, đặc biệt ph&ugrave; hợp cho c&aacute;c kh&ocirc;ng gian kiến tr&uacute;c bền vững. Tại Vitto, những nghi&ecirc;n cứu thị trường gi&uacute;p ch&uacute;ng t&ocirc;i nắm bắt được xu hướng thiết kế kh&ocirc;ng gian sống ng&agrave;y nay được thiết lập từ nhiều gi&aacute; trị ưu việt như t&iacute;nh hiện đại, sang trọng v&agrave; thẩm mỹ. Bộ sưu tập Gạch Porcelain 100x100cm của Vitto với thiết kế bề mặt v&acirc;n đ&aacute; lấy cảm hứng từ đ&aacute; tự nhi&ecirc;n tự tin l&agrave; giải ph&aacute;p tối ưu cho những dự &aacute;n x&acirc;y dựng vừa v&agrave; lớn.</p>\r\n\r\n<p><img alt=\"vitto-percelain-100x100cm-h2\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/vitto-percelain-100x100cm-h2.png\" />Gam m&agrave;u v&agrave;ng của gạch Porcelain 100x100cm kết hợp với nội thất mang đến kh&ocirc;ng gian ấm c&uacute;ng</p>\r\n\r\n<h2>2.&nbsp;&nbsp;Đẳng cấp tạo n&ecirc;n những gi&aacute; trị bền vững</h2>\r\n\r\n<p>Để đem đến cảm nhận ch&acirc;n thật nhất về vẻ đẹp tinh tế v&agrave; sang trọng của những đường v&acirc;n đ&aacute; tự nhi&ecirc;n, bề mặt gạch Gạch Porcelain 100x100cm sử dụng lớp men&nbsp;kim cương h&igrave;nh th&agrave;nh từ 100% thủy tinh tinh khiết nhập khẩu từ T&acirc;y Ban Nha, nổi tiếng l&agrave; lớp men c&oacute; độ b&oacute;ng cao (96-98%), lớp men d&agrave;y 0.5mm gi&uacute;p gạch c&oacute; độ cứng tốt hơn so với gạch men b&oacute;ng thường. Ngo&agrave;i ra, với c&ocirc;ng nghệ mở men gi&uacute;p bề mặt gạch của Vitto c&oacute; được những đường nứt tự nhi&ecirc;n, bề mặt gạch Porcelain 100x100cm giữ trọn được vẻ đẹp sinh động của đường n&eacute;t v&acirc;n đ&aacute;, tạo điểm nhấn tuyệt vời v&agrave; sang trong cho kh&ocirc;ng gian kiến tr&uacute;c.</p>\r\n\r\n<p><img alt=\"vitto-percelain-100x100cm-h3\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/vitto-percelain-100x100cm-h3.png\" />Gạch Porcelain 100x100cm tạo cảm gi&aacute;c liền mạch như sử dụng đ&aacute; nguy&ecirc;n khối tự nhi&ecirc;n</p>\r\n\r\n<p>K&iacute;ch thước gạch 100x100cm cũng l&agrave; loại k&iacute;ch thước l&yacute; tưởng nhất hiện nay bởi t&iacute;nh ứng dụng cao trong c&aacute;c dự &aacute;n x&acirc;y dựng, c&oacute; thể ph&ugrave; hợp với cả thiết kế kh&ocirc;ng gian vừa phải như nh&agrave; ở, c&ocirc;ng ty, hội trường đến lớn hơn như trung t&acirc;m thương mại, sảnh kh&aacute;ch sạn&hellip; Gạch Porcelain 100x100cm của Vitto kết hợp 4 gam m&agrave;u trang nh&atilde;, thanh lịch: Trắng, ghi, n&acirc;u v&agrave; v&agrave;ng mang đến sự lựa chọn đa dạng, dễ ứng dụng nhưng vẫn tạo n&ecirc;n được điểm nhấn sang trọng bởi những đường v&acirc;n đ&aacute; sắc n&eacute;t, tinh tế. Với những ưu điểm vượt trội về c&ocirc;ng nghệ sản xuất cũng như thiết kế bề mặt, gạch Porcelain 100x100cm của Vitto kh&ocirc;ng chỉ c&oacute; độ bền, t&iacute;nh thẩm mỹ cao m&agrave; c&ograve;n kh&ocirc;ng b&aacute;m bẩn, gi&uacute;p người sử dụng dễ d&agrave;ng vệ sinh, lau ch&ugrave;i.</p>\r\n\r\n<p><img alt=\"vitto-percelain-100x100cm-h4\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/vitto-percelain-100x100cm-h4.png\" />Ứng dụng đa dạng của gạch Porcelain 100x100cm trong c&aacute;c c&ocirc;ng tr&igrave;nh kiến tr&uacute;c</p>\r\n\r\n<p>Gạch Porcelain 100x100cm kh&ocirc;ng dừng lại ở việc gắn liền với những t&iacute;nh ưu việt thiết lập kh&ocirc;ng gian sống m&agrave; c&ograve;n ch&uacute; trọng v&agrave;o việc tạo dựng kh&ocirc;ng gian trải nghiệm ho&agrave;n hảo với gi&aacute; trị bền vững th&ocirc;ng qua sự thẩm thấu cảm x&uacute;c từ những đường n&eacute;t tinh xảo của thẩm mỹ thị gi&aacute;c. Với sự ph&aacute;t triển vượt bậc của c&ocirc;ng nghệ sản xuất, Vitto tự tin mang đến những bộ sưu tập gạch men ho&agrave;n hảo đ&aacute;p ứng mọi nhu cầu tr&ecirc;n thị trường gạch ốp l&aacute;t.</p>\r\n', 1, '2022-05-08 05:49:12', '1651988952_vitto-percelain-100x100cm-h1.png'),
(16, 'Gạch Vitto Porcelain mạ vàng: kiệt tác cho không gian sang trọng', '<p>Sự s&aacute;ng tạo thẩm mỹ c&oacute; thể thay đổi theo từng thời kỳ, nhưng sự sang trọng sẽ lu&ocirc;n l&agrave; đ&iacute;ch đến m&agrave; nhiều nh&agrave; thiết kế hướng tới. Vitto tự h&agrave;o mang đến d&ograve;ng gạch Porcelain mạ v&agrave;ng như một lời khẳng định địa vị, phản &aacute;nh gi&aacute; trị cho bản th&acirc;n người sử dụng.</p>\r\n', '<h2>1.&nbsp;T&ocirc;n vinh những g&igrave; tinh hoa nhất</h2>\r\n\r\n<p>Để đạt được sự sang trọng, việc lựa chọn vật liệu x&acirc;y dựng ngay từ đầu nếu được ch&uacute; trọng v&agrave; chọn lọc kh&eacute;o l&eacute;o sẽ t&ocirc;n vinh trọn vẹn n&eacute;t tinh hoa của thiết kế. D&ograve;ng gạch Porcelain mạ v&agrave;ng của Vitto được xem l&agrave; một trong những chi tiết &ldquo;đắt gi&aacute;&rdquo; nhất l&agrave;m n&ecirc;n gi&aacute; trị thẩm mỹ kh&ocirc;ng gian kiến tr&uacute;c.</p>\r\n\r\n<p>Gạch Porcelain mạ v&agrave;ng được Vitto sản xuất với hai loại k&iacute;ch thước 80x80cm v&agrave; 60x120cm, thuộc d&ograve;ng gạch khổ lớn được tin d&ugrave;ng v&agrave; ưa chuộng hơn cả trong c&aacute;c ứng dụng kiến tr&uacute;c hiện đại. L&agrave; kết quả của việc nghi&ecirc;n cứu v&agrave; chọn lọc kỹ c&agrave;ng qua c&aacute;c kh&acirc;u xử l&yacute; kỹ thuật để tạo n&ecirc;n được lớp xương đ&aacute; Porcelain kết cấu vững chắc c&ugrave;ng khả năng chịu lực cao, gạch mạ v&agrave;ng Vitto tự tin đ&aacute;p ứng được những y&ecirc;u cầu khắt khe của những nh&agrave; thiết kế cũng như chủ đầu tư, đặc biệt ph&ugrave; hợp cho c&aacute;c kh&ocirc;ng gian kiến tr&uacute;c bền vững.</p>\r\n\r\n<p><img alt=\"vitto-porcelain-ma-vang-h1\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/vitto-porcelain-ma-vang-h1.jpg\" /></p>\r\n\r\n<p>N&eacute;t tinh hoa của gạch Porcelain mạ v&agrave;ng Vitto nằm ở c&ocirc;ng nghệ men bề mặt: men kim cương. Men kim cương được sử dụng tại Tập đo&agrave;n Vitto l&agrave; loại men h&igrave;nh th&agrave;nh từ 100% thủy tinh tinh khiết nhập khẩu từ T&acirc;y Ban Nha. Men kim cương nổi tiếng l&agrave; lớp men c&oacute; độ b&oacute;ng cao (khoảng 96-98%), lớp men d&agrave;y 0.5mm gi&uacute;p gạch c&oacute; độ cứng tốt hơn so với gạch men b&oacute;ng k&iacute;nh th&ocirc;ng thường. Ngo&agrave;i ra, với c&ocirc;ng nghệ mở men gi&uacute;p bề mặt gạch của Vitto c&oacute; được những đường nứt tự nhi&ecirc;n c&ugrave;ng việc ứng dụng c&ocirc;ng nghệ xi mạ ch&acirc;n kh&ocirc;ng PVD &ndash; c&ocirc;ng nghệ tạo ra lớp xi mạ đồng chất từ v&agrave;ng Dubai v&agrave; bạc Italy&ndash; hai chất liệu sang trọng, xa xỉ bậc nhất thế giới tr&ecirc;n bề mặt gạch, mang đến n&eacute;t thiết kế độc đ&aacute;o, đắt gi&aacute;. Hiện nay,&nbsp;Vitto tự h&agrave;o&nbsp;l&agrave; đơn vị duy nhất trong nước &aacute;p dụng c&ocirc;ng&nbsp;nghệ mạ v&agrave;ng tr&ecirc;n gạch men.</p>\r\n\r\n<p><img alt=\"vitto-porcelain-ma-vang-h2\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/vitto-porcelain-ma-vang-h2.jpg\" /></p>\r\n\r\n<p>Gạch Porcelain mạ v&agrave;ng Vitto đem đến c&aacute;c t&iacute;nh năng ưu việt với sự bền vững trong kỹ thuật, n&eacute;t đẹp tinh hoa trong thẩm mỹ c&ugrave;ng những ưu điểm khi sử dụng gạch: lớp men b&oacute;ng kh&ocirc;ng b&aacute;m bẩn ngay cả tại c&aacute;c vết nứt, khả năng chịu được m&agrave;i m&ograve;n cao.</p>\r\n\r\n<h2>2.&nbsp;Sự tinh tế chuẩn mực</h2>\r\n\r\n<p>Sự sang trọng ng&agrave;y nay tập trung v&agrave;o t&ocirc;n vinh bản chất trọng t&acirc;m: phản &aacute;nh được tri thức cũng như gu thẩm mỹ, t&iacute;nh s&aacute;ng tạo của những nh&agrave; thiết kế kh&oacute; t&iacute;nh. Được thiết kế dựa tr&ecirc;n định nghĩa của sự tinh tế chuẩn mực n&agrave;y, gạch Porcelain mạ v&agrave;ng Vitto hướng tới việc t&ocirc;n l&ecirc;n được gi&aacute; trị cũng như chất sang trọng, đẳng cấp của kh&ocirc;ng gian kiến tr&uacute;c hiện đại.</p>\r\n\r\n<p><img alt=\"vitto-porcelain-ma-vang-h3\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/vitto-porcelain-ma-vang-h3.jpg\" /></p>\r\n\r\n<p>Tr&ecirc;n những ứng dụng thực tế, gạch Porcelain mạ v&agrave;ng Vitto kh&ocirc;ng chỉ&nbsp;ph&ugrave; hợp sử dụng cho&nbsp;nhiều loại h&igrave;nh kh&ocirc;ng gian kiến tr&uacute;c c&oacute; mặt s&agrave;n lớn như: trung t&acirc;m thương mại, kh&aacute;ch sạn, nh&agrave; h&agrave;ng&hellip; m&agrave; c&ograve;n được tin d&ugrave;ng tại c&aacute;c kh&ocirc;ng gian nh&agrave; ở sang trọng, tinh tế nhằm t&ocirc;n vinh l&ecirc;n được địa vị của gia chủ. Sự hạn chế c&aacute;c đường chiết mạch kết hợp với chất liệu cao cấp khi sử dụng gạch Porcelain mạ v&agrave;ng Vitto sẽ gi&uacute;p kh&ocirc;ng gian được mở rộng ra v&agrave; đạt độ thẩm mỹ cao, c&aacute;i đẹp cao cấp chứa đựng đầy n&eacute;t tinh tế chuẩn mực.</p>\r\n\r\n<p><img alt=\"vitto-porcelain-ma-vang-h4\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/vitto-porcelain-ma-vang-h4.jpg\" /></p>\r\n\r\n<p>Gạch Porcelain mạ v&agrave;ng k&iacute;ch thước 80x80cm, 60x120cm l&agrave; một trong những sản phẩm mang ti&ecirc;u chuẩn đặc trưng thương hiệu của Vitto, mở ra một kh&ocirc;ng gian thiết kế cao cấp v&agrave; sang trọng bậc nhất. Người sử dụng chắc chắn sẽ được tận hưởng v&agrave; thỏa m&atilde;n cảm x&uacute;c nghệ thuật lẫn gi&aacute; trị sống sang trọng khi lựa chọn sử dụng d&ograve;ng gạch mạ v&agrave;ng của Vitto.</p>\r\n', 1, '2022-05-08 05:48:23', '1651988903_vitto-porcelain-ma-vang-h1.jpg'),
(18, 'Sáng tạo nghê thuật từ gạch ốp tường Vitto Wall Art', '<p>Gạch ốp tường l&agrave; một trong những vật liệu quan trọng g&oacute;p phần t&ocirc;n l&ecirc;n vẻ đẹp của kh&ocirc;ng gian kiến tr&uacute;c. Ch&iacute;nh v&igrave; vậy, d&ograve;ng sản phẩm Vitto - Wall Art được ra đời để đ&aacute;p ứng nhu cầu dẫn đầu của những nh&agrave; thiết kế kh&oacute; t&iacute;nh nhất.</p>\r\n', '<h3>1.&nbsp;Dẫn đầu c&ocirc;ng nghệ: Thiết kế với tỷ lệ v&agrave;ng</h3>\r\n\r\n<p>Gạch ốp tường đ&atilde; trở th&agrave;nh xu hướng lựa chọn cho kiến tr&uacute;c hiện đại với những ti&ecirc;u chuẩn về việc định h&igrave;nh một kh&ocirc;ng gian sang trọng, đầy t&iacute;nh thẩm mỹ. D&ograve;ng sản phẩm Wall Art của Vitto tự h&agrave;o l&agrave; một trong những d&ograve;ng sản phẩm gạch ốp cao cấp sử dụng c&ocirc;ng nghệ sản xuất h&agrave;ng đầu tại thị trường gạch men Việt.</p>\r\n\r\n<p>Từng vi&ecirc;n gạch ốp tường trong d&ograve;ng sản phẩm Wall Art của Vitto được thiết kế dựa theo c&ocirc;ng thức tỷ lệ v&agrave;ng, hướng đến t&iacute;nh thẩm mĩ cao, kiến tạo v&agrave; n&acirc;ng tầm c&aacute;i đẹp th&ocirc;ng qua sự h&agrave;i h&ograve;a v&agrave; c&acirc;n đối. Ch&iacute;nh v&igrave; vậy, d&ograve;ng sản phẩm n&agrave;y thường được sử dụng cho những kh&ocirc;ng gian đẳng cấp, sang trọng.</p>\r\n\r\n<p>D&ograve;ng sản phẩm gạch ốp tường Wall Art của Vitto c&oacute; 2 k&iacute;ch thước 30x60cm, 30x80cm linh hoạt, ph&ugrave; hợp với nhiều loại tỷ lệ kh&ocirc;ng gian kiến tr&uacute;c, từ kh&ocirc;ng gian nhỏ đến kh&ocirc;ng gian rộng lớn. Ngo&agrave;i c&aacute;c c&ocirc;ng nghệ bề mặt thường được ứng dụng phổ biến như: Men Sugar m&agrave;i lướt v&agrave; Matt mịn hiện đại, Vitto tự h&agrave;o l&agrave; đơn vị duy nhất trong nước &aacute;p dụng c&ocirc;ng nghệ sản xuất gạch men m&agrave;i si&ecirc;u b&oacute;ng tr&ecirc;n chất liệu gạch ốp Ceramic. Kh&aacute;ch h&agrave;ng khi sử dụng d&ograve;ng sản phẩm gạch ốp tường Wall Art sẽ thấy được c&aacute;c t&iacute;nh năng ưu t&uacute; với độ chống thấm tuyệt đối, kh&ocirc;ng b&aacute;m bẩn v&agrave; dễ d&agrave;ng vệ sinh lau ch&ugrave;i.</p>\r\n\r\n<p><img alt=\"vitto-wall-art-01\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/vitto-wall-art-01.jpg\" />Tường ph&ograve;ng ngủ nh&atilde; nhặn, ấm c&uacute;ng với gạch ốp Vitto - Wall Art c&ocirc;ng nghệ men Sugar m&agrave;i lướt</p>\r\n\r\n<p><img alt=\"vitto-wall-art-02\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/vitto-wall-art-02.jpg\" />Ph&ograve;ng kh&aacute;ch hiện đại c&ugrave;ng gạch ốp Vitto - Wall Art c&ocirc;ng nghệ men Matt mịn</p>\r\n\r\n<p><img alt=\"vitto-wall-art-03\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/vitto-wall-art-03.jpg\" />Ph&ograve;ng bếp s&aacute;ng tạo với gạch ốp Vitto - Wall Art c&ocirc;ng nghệ men si&ecirc;u b&oacute;ng m&agrave;i mặt</p>\r\n\r\n<h3>2.&nbsp;Dẫn đầu xu hướng: N&acirc;ng tầm chất lượng cuộc sống</h3>\r\n\r\n<p>Khi c&aacute;c phong c&aacute;ch kiến tr&uacute;c v&agrave; nội thất đơn giản nhưng vẫn giữ được n&eacute;t thanh lịch, tinh tế l&ecirc;n ng&ocirc;i; c&aacute;c chi tiết cầu kỳ, rườm r&agrave; trong kh&ocirc;ng gian sẽ được giản lược tối ưu bằng c&aacute;ch sử dụng gạch ốp tường c&oacute; thiết kế bền đẹp. Ch&iacute;nh yếu tố n&agrave;y gi&uacute;p d&ograve;ng sản phẩm gạch ốp tường Wall Art của Vitto trở th&agrave;nh một trong những d&ograve;ng sản phẩm dẫn đầu về xu hướng n&acirc;ng tầm chất lượng cuộc sống.</p>\r\n\r\n<p><img alt=\"vitto-wall-art-04\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/vitto-wall-art-04.jpg\" />Sự kết hợp giữa họa tiết thi&ecirc;n nhi&ecirc;n v&agrave; h&igrave;nh học đang l&agrave; xu hướng thiết kế hiện đại</p>\r\n\r\n<p>Được lấy cảm hứng chủ đạo từ thi&ecirc;n nhi&ecirc;n kết hợp những đường n&eacute;t, mảng, &ocirc; khối tu&acirc;n theo một trật tự nhất định, d&ograve;ng sản phẩm Wall Art của Vitto kh&ocirc;ng chỉ đơn thuẩn l&agrave; những thiết kế gạch ốp tường trang tr&iacute;, t&ocirc; điểm kh&ocirc;ng gian v&agrave; c&ograve;n trở th&agrave;nh điểm nhấn đắt gi&aacute;, đem lại x&uacute;c cảm tinh tế cho người sử dụng. Một kh&ocirc;ng gian kiến tr&uacute;c được thiết kế với bố cục c&acirc;n đối, hợp l&yacute; kết hợp h&agrave;i h&ograve;a c&ugrave;ng gạch ốp tường Wall Art của Vitto sẽ l&agrave; sự lựa chọn th&ocirc;ng minh, s&aacute;ng tạo gi&uacute;p n&acirc;ng tầm đẳng cấp v&agrave; chất lượng cuộc sống.</p>\r\n\r\n<h3>3.&nbsp;Lựa chọn dẫn đầu, lựa chọn kh&aacute;c biệt</h3>\r\n\r\n<p><img alt=\"vitto-wall-art-05\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/vitto-wall-art-05.jpg\" />Những thiết kế s&aacute;ng tạo gi&uacute;p ghi đậm dấu ấn c&aacute; nh&acirc;n của người sử dụng</p>\r\n\r\n<p>Với c&ocirc;ng nghệ sản xuất c&ugrave;ng thiết kế xứng tầm danh hiệu Tập đo&agrave;n gạch men h&agrave;ng đầu Việt Nam, d&ograve;ng sản phẩm gạch ốp Wall Art của Vitto tự tin mang đến kh&ocirc;ng gian kiến tr&uacute;c cao cấp, sang trọng những dấu ấn thể hiện được c&aacute; t&iacute;nh, gu thẩm mỹ của người sử dụng. Kh&aacute;ch h&agrave;ng lựa chọn sử dụng gạch ốp Vitto - Wall Art cũng ch&iacute;nh l&agrave; lựa chọn sự kh&aacute;c biệt, lựa chọn đẳng cấp dẫn đầu.</p>\r\n', 1, '2022-05-08 05:52:58', '1651989178_vitto-wall-art-01.jpg'),
(19, 'Gạch lát nền Vitto: Mang hơi thở thiên nhiên đến không gian sống của bạn', '<p>Sự tươi mới đến từ những thiết kế tr&agrave;n đầy sức sống mang hơi thở thi&ecirc;n nhi&ecirc;n của THE GARDEN &ndash; Bộ sưu tập gạch l&aacute;t nền mới nhất của Vitto chắc chắn sẽ l&agrave; sự lựa chọn th&ocirc;ng minh cho kh&ocirc;ng gian ngoại cảnh của bạn.</p>\r\n', '<p>Kh&ocirc;ng gian sống hiện đại ng&agrave;y nay kh&ocirc;ng đơn thuần chỉ tập trung v&agrave;o thiết kế nội thất m&agrave; c&ograve;n ch&uacute; trọng tới sự s&aacute;ng tạo kh&ocirc;ng gian ngoại cảnh để tăng t&iacute;nh độc đ&aacute;o cho kiến tr&uacute;c tổng thể.&nbsp;Một lối đi được l&aacute;t gạch tinh tế trải d&agrave;i tới khu vườn của bạn hay một g&oacute;c s&acirc;n vườn tr&agrave;n ngập sức sống thi&ecirc;n nhi&ecirc;n đem lại cảm gi&aacute;c thư th&aacute;i, h&agrave;i h&ograve;a lu&ocirc;n l&agrave; nơi nghỉ ngơi thư gi&atilde;n tuyệt vời. Nắm bắt được xu hướng n&agrave;y, Bộ sưu tập THE GARDEN sẽ mang vẻ đẹp tự nhi&ecirc;n đến kh&ocirc;ng gian sống hiện đại bằng những thiết kế m&ocirc; phỏng thi&ecirc;n nhi&ecirc;n ch&acirc;n thực</p>\r\n\r\n<p><img alt=\"gach-lat-nen-vitto-2020-h1\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/gach-lat-nen-vitto-2020-h1.jpg\" style=\"height:351px; width:350px\" /><img alt=\"gach-lat-nen-vitto-2020-h2\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/gach-lat-nen-vitto-2020-h2.jpg\" style=\"height:350px; width:400px\" /></p>\r\n\r\n<p>Họa tiết, hoa văn h&igrave;nh c&acirc;y cỏ tự nhi&ecirc;n kết hợp với họa tiết đ&aacute; sỏi tạo cảm gi&aacute;c tươi mới, gần gũi với thi&ecirc;n nhi&ecirc;n.</p>\r\n\r\n<p><img alt=\"gach-lat-nen-vitto-2020-h3\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/gach-lat-nen-vitto-2020-h3.jpg\" style=\"height:350px; width:351px\" /><img alt=\"gach-lat-nen-vitto-2020-h4\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/gach-lat-nen-vitto-2020-h4.jpg\" style=\"float:left; height:350px; width:350px\" /></p>\r\n\r\n<p><img alt=\"gach-lat-nen-vitto-2020-h5\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/gach-lat-nen-vitto-2020-h5.jpg\" style=\"height:350px; width:351px\" /><img alt=\"gach-lat-nen-vitto-2020-h6\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/gach-lat-nen-vitto-2020-h6.jpg\" style=\"height:350px; width:350px\" /></p>\r\n\r\n<p><img alt=\"gach-lat-nen-vitto-2020-h7\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/gach-lat-nen-vitto-2020-h7.jpg\" style=\"height:350px; width:400px\" /><img alt=\"gach-lat-nen-vitto-2020-h8\" src=\"https://gachonline.vn/images/tin-tuc/2020/7/resized/gach-lat-nen-vitto-2020-h8.jpg\" style=\"height:350px; width:399px\" /></p>\r\n\r\n<p>Ngo&agrave;i việc đem lại t&iacute;nh thẩm mỹ cao với bề mặt phủ sugar kết hợp c&ugrave;ng những m&agrave;u sắc tươi mới tạo n&ecirc;n hiệu ứng lấp l&aacute;nh, thu h&uacute;t &aacute;nh nh&igrave;n người d&ugrave;ng, Bộ sưu tập THE GARDEN vẫn đ&aacute;p ứng được những y&ecirc;u cầu kỹ thuật về đảm bảo độ bền vững v&agrave; an to&agrave;n tối ưu: c&oacute; khả năng chống trầy xước, chịu được t&aacute;c động thời tiết c&ugrave;ng thiết kế sử dụng khu&ocirc;n định h&igrave;nh, kh&ocirc;ng lo&nbsp;trơn trượt, tr&aacute;nh việc h&igrave;nh th&agrave;nh r&ecirc;u mốc, dễ vệ sinh&hellip;</p>\r\n\r\n<p>&nbsp;Với những đặc điểm tối ưu, Bộ sưu tập THE GARDEN của Vitto sẽ đem đến một kh&ocirc;ng gian thư th&aacute;i nhưng kh&ocirc;ng k&eacute;m phần tinh tế cho mọi thiết kế ngoại cảnh độc đ&aacute;o nhất.</p>\r\n', 1, '2022-05-08 05:59:24', '1651989209_gach-lat-nen-vitto-2020-h1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(51, 27, 60, 1, 120000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `paymethod` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `date`, `price`, `status`, `paymethod`) VALUES
(27, 7, '2022-05-08', 117600, 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `panel`
--

CREATE TABLE `panel` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `location` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `panel`
--

INSERT INTO `panel` (`id`, `photo`, `location`) VALUES
(1, '1651949514_1651914618_58340140__367355583__1898142018.jpg', 1),
(2, '1651915905_67094.jpg', 2),
(3, '1651916507_dance-floor-tile-1.jpg', 3),
(4, '1651916133_tile-types.jpg', 4),
(5, '1651916237_nitco-floor-tiles-500x500.jpg', 5),
(6, '1651951245_Chevron-Floor-Tiles-Service-Page-Banner.jpg', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `content` text NOT NULL,
  `shortdescription` varchar(500) NOT NULL,
  `hot` int(11) NOT NULL DEFAULT 0,
  `photo` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `pricediscount` float NOT NULL,
  `discount` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `img1` varchar(500) NOT NULL,
  `img2` varchar(500) NOT NULL,
  `color` varchar(500) NOT NULL,
  `material` varchar(500) NOT NULL,
  `madein` varchar(500) NOT NULL,
  `size` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `content`, `shortdescription`, `hot`, `photo`, `price`, `pricediscount`, `discount`, `category_id`, `img1`, `img2`, `color`, `material`, `madein`, `size`) VALUES
(53, 'Gạch mờ Terrazo đá mài 60x60 CMC 6813', '<h2>Gạch mờ terrazo nh&agrave; m&aacute;y CMC</h2>\r\n\r\n<p>Miễn ph&iacute; giao h&agrave;ng nội th&agrave;nh số lượng tr&ecirc;n 40m2</p>\r\n', '<h2><span style=\"color:#ffffff\">Gạch b&oacute;ng đ&aacute; mờ terrazo gi&aacute; tốt HCM</span></h2>\r\n\r\n<h3><span style=\"color:#ffffff\">Gạch l&aacute;t nền 60x60 nh&aacute;m mờ</span></h3>\r\n\r\n<p><span style=\"color:#ffffff\"><img alt=\"gạch đá mờ terrazo giá rẻ\" src=\"https://gachtonkho.net/vientin/Uploads/images/tick-green.png\" /><strong>Gạch terrazo 60x60 CMC 6813</strong>&nbsp;l&agrave; sản phẩm gạch ốp l&aacute;t hiệu ứng 3D. Chất liệu bột đ&aacute;, bề mặt nh&aacute;m mờ, gi&uacute;p cho vi&ecirc;n gạch c&oacute; độ b&aacute;m ch&acirc;n, chống trơn trượt, chống thấm, l&agrave;m cho vi&ecirc;n gạch giữ được m&agrave;u sắc bền l&acirc;u theo thời gian.</span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><img alt=\"gạch đá mờ terrazo giá rẻ\" src=\"https://gachtonkho.net/vientin/Uploads/images/tick-green.png\" /><strong>Gạch mờ terrazo</strong>&nbsp;phong c&aacute;ch hiện đại, m&agrave;u sắc đơn giản, phủ lớp đ&aacute; m&agrave;i. Đang l&agrave; sản phẩm b&aacute;n chạy nhất hiện nay cho c&aacute;c c&ocirc;ng tr&igrave;nh decor qu&aacute;n cafe, tr&agrave; sữa, nh&agrave; ở hiện đại.</span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><img alt=\"gạch đá mờ giá rẻ\" src=\"https://gachtonkho.net/vientin/Uploads/images/tick-green.png\" /><strong><u><em>Gạch đ&aacute; mờ 60x60 CMC 6813</em></u></strong>&nbsp;thường được sử dụng l&aacute;t ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ, l&aacute;t nền qu&aacute;n cafe, ốp tường nh&agrave; tắm, quầy bar..</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '', 1, '1651910433_gach-mo-terrazo-da-mai-60x60-cmc-6813.jpg', 250000, 237500, 5, 36, '', '', 'Nhiều màu sắc', 'Gạch men', 'Việt nam', '60x60cm'),
(54, 'Gạch terrazo đá mờ 60x60 giá rẻ', '<p>&nbsp;</p>\r\n\r\n<p>Miễn ph&iacute; giao h&agrave;ng nội th&agrave;nh số lượng tr&ecirc;n 40m2</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<h2>Gạch đ&aacute; mờ terrazo gi&aacute; rẻ tại tphcm</h2>\r\n\r\n<h3>Gạch l&aacute;t nền 60x60 nh&aacute;m mờ</h3>\r\n\r\n<p><img alt=\"gạch đá mờ terrazo giá rẻ\" src=\"https://gachtonkho.net/vientin/Uploads/images/tick-green.png\" /><strong>Gạch terrazo đ&aacute; mờ 60x60</strong>&nbsp;l&agrave; sản phẩm được ưa chuộng sử dụng nhiều nhất cho c&aacute;c c&ocirc;ng tr&igrave;nh. Chất liệu bột đ&aacute;, bề mặt nh&aacute;m mờ, gi&uacute;p cho vi&ecirc;n gạch c&oacute; độ b&aacute;m ch&acirc;n, chống trơn trượt, chống thấm, l&agrave;m cho vi&ecirc;n gạch giữ được m&agrave;u sắc bền l&acirc;u theo thời gian.</p>\r\n\r\n<p><img alt=\"gạch đá mờ terrazo giá rẻ\" src=\"https://gachtonkho.net/vientin/Uploads/images/tick-green.png\" /><strong>Gạch mờ terrazo</strong>&nbsp;phong c&aacute;ch hiện đại, m&agrave;u sắc đơn giản, phủ lớp đ&aacute; m&agrave;i. Đang l&agrave; sản phẩm b&aacute;n chạy nhất hiện nay cho c&aacute;c c&ocirc;ng tr&igrave;nh decor qu&aacute;n cafe, tr&agrave; sữa, nh&agrave; ở hiện đại.</p>\r\n\r\n<p><img alt=\"gạch đá mờ giá rẻ\" src=\"https://gachtonkho.net/vientin/Uploads/images/tick-green.png\" /><strong><u><em>Gạch đ&aacute; mờ 60x60</em></u></strong>&nbsp;thường được sử dụng l&aacute;t ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ, l&aacute;t nền qu&aacute;n cafe, ốp tường nh&agrave; tắm, quầy bar..</p>\r\n', '', 1, '1651910798_gach-terrazo-da-mo-60x60-gia-re.jpg', 25000, 22500, 10, 36, '', '', 'Nhiều màu sắc', 'Gạch men', 'Việt nam', '60x60cm'),
(55, 'Gạch bóng mờ 60x60 nhám', '<p>Miễn ph&iacute; giao h&agrave;ng nội th&agrave;nh số lượng tr&ecirc;n 40m2</p>\r\n', '', '', 1, '1651911267_gach-lat-nen-da-mo-60x60-8262.jpg', 300000, 300000, 0, 36, '', '', 'Nhiều màu sắc', 'Nhám', 'Việt nam', '60x60cm'),
(56, 'Gạch đồng chất đá mờ 60x60', '<p>Miễn ph&iacute; giao h&agrave;ng nội th&agrave;nh số lượng tr&ecirc;n 40m2</p>\r\n', '<h3>Gạch l&aacute;t nền 60x60 nh&aacute;m mờ</h3>\r\n\r\n<p><img alt=\"gạch đá mờ giá rẻ\" src=\"https://gachtonkho.net/vientin/Uploads/images/tick-green.png\" /><strong>Gạch đồng chất đ&aacute; mờ 60x60</strong>&nbsp;l&agrave; sản phẩm được ưa chuộng sử dụng nhiều nhất cho c&aacute;c c&ocirc;ng tr&igrave;nh. Chất liệu bột đ&aacute;, bề mặt nh&aacute;m mờ, gi&uacute;p cho vi&ecirc;n gạch c&oacute; độ b&aacute;m ch&acirc;n, chống trơn trượt, chống thấm, l&agrave;m cho vi&ecirc;n gạch giữ được m&agrave;u sắc bền l&acirc;u theo thời gian.</p>\r\n\r\n<p><img alt=\"gạch đá mờ giá rẻ\" src=\"https://gachtonkho.net/vientin/Uploads/images/tick-green.png\" /><strong>Gạch mờ</strong>&nbsp;phong c&aacute;ch giả cổ, m&agrave;u sắc đơn giản như t&ocirc;ng m&agrave;u x&aacute;m trắng, x&aacute;m xi măng, x&aacute;m ghi, n&acirc;u đậm, tạo vẻ tối giản cho c&ocirc;ng tr&igrave;nh nhưng kh&ocirc;ng hề l&agrave;m mất vẻ đặc biệt của n&oacute;.</p>\r\n\r\n<p><img alt=\"gạch đá mờ giá rẻ\" src=\"https://gachtonkho.net/vientin/Uploads/images/tick-green.png\" /><strong><u><em>Gạch đ&aacute; mờ 60x60</em></u></strong>&nbsp;thường được sử dụng l&aacute;t s&acirc;n ngo&agrave;i trời, s&acirc;n thượng, hoặc nh&agrave; xe. L&aacute;t nền qu&aacute;n cafe, l&aacute;t nền nh&agrave;.</p>\r\n', '', 1, '1651911793_gach-lat-nen-da-mo-60x60-6666.jpg', 100000, 100000, 0, 36, '', '', 'Nhiều màu sắc', 'Gạch men', 'Việt nam', '60x60cm'),
(57, 'Đá lát nèn 60x60 màu vàng bóng', '<p>Gạch l&aacute;t nền gi&aacute; rẻ</p>\r\n', '<p><strong>Gạch l&aacute;t nền 60x60&nbsp;</strong>t&ocirc;ng m&agrave;u v&agrave;ng v&acirc;n đ&aacute; đậm, ph&ugrave; hợp l&aacute;t nền cho ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ hoặc ốp mặt tiền. T&ocirc; điểm cho ng&ocirc;i nh&agrave; bạn th&ecirc;m sang trọng.</p>\r\n\r\n<p>Gạch 60x60 m&agrave;u v&agrave;ng ph&ugrave; hợp cho kh&aacute;ch h&agrave;ng mệnh Kim. Sử dụng gạch nền 60x60 v&agrave;ng sẽ l&agrave;m cho kh&ocirc;ng gian trong ph&ograve;ng th&ecirc;m phần sang trọng, đẹp mắt.</p>\r\n', '', 1, '1651911950_da-lat-nen-60x60-mau-vang-bong.jpg', 50000, 50000, 0, 35, '', '', 'Nhiều màu sắc', 'Đá porcelain, chống trầy, chống thấm', 'Việt nam', '60x60cm'),
(58, 'Gạch giả đá 60x60 bóng kiếng Vitto 5156', '<h2>Gạch l&aacute;t nền 60x60 Vitto</h2>\r\n', '<p>Gạch b&oacute;ng kiếng 60x60 5156 bề mặt b&oacute;ng, xương đ&aacute; pocerlain, ph&ugrave; hợp l&aacute;t nền cho ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ hoặc ốp mặt tiền. L&aacute;t s&agrave;n rất đẹp</p>\r\n', '', 1, '1651912075_gach-gia-da-60x60-bong-kieng-vitto-5156.jpg', 200000, 196000, 2, 35, '', '', 'Nhiều màu sắc', 'Đá porcelain, chống trầy, chống thấm.', 'Việt nam', '60x60cm'),
(59, 'Gạch vân đá lát nền 5D 60x60 KHL6335', '<h2>Gạch v&acirc;n đ&aacute; l&aacute;t nền 5D 60x60 KHL6335</h2>\r\n', '<p><strong>Gạch v&acirc;n đ&aacute; l&aacute;t nền 5d khl6335</strong><strong>&nbsp;</strong>đang l&agrave; sản phẩm được ưa chuộng sử dụng nhiều nhất cho c&aacute;c c&ocirc;ng tr&igrave;nh.</p>\r\n\r\n<p>Chất liệu bột đ&aacute;, bề mặt được phủ một lớp men b&oacute;ng để gi&uacute;p cho vi&ecirc;n gạch trở n&ecirc;n b&oacute;ng như gương soi, th&ecirc;m một lớp phủ nano tr&ecirc;n bề mặt vi&ecirc;n gạch, l&agrave;m cho vi&ecirc;n gạch giữ được m&agrave;u sắc bền l&acirc;u theo thời gian, chống thấm chống trầy, dễ vệ sinh.</p>\r\n', '', 1, '1651912706_gach-van-da-lat-nen-5d-60x60-khl6335.jpg', 60000, 59400, 1, 35, '', '', 'Nhiều màu sắc', 'Đá porcelain, chống trầy, chống thấm.', 'Việt nam', '60x60cm'),
(60, 'Nền nhà gạch 60x60 bóng kiếng', '<h2>Gạch trắng kh&oacute;i 60x60 b&oacute;ng kiếng ốp l&aacute;t</h2>\r\n', '<p><strong>Nền nh&agrave; gạch 60x60 b&oacute;ng kiếng&nbsp;</strong>đang l&agrave; sản phẩm được ưa chuộng sử dụng nhiều nhất cho c&aacute;c c&ocirc;ng tr&igrave;nh. Chất liệu bột đ&aacute;, bề mặt được phủ một lớp men b&oacute;ng để gi&uacute;p cho vi&ecirc;n gạch trở n&ecirc;n b&oacute;ng như gương soi, th&ecirc;m một lớp phủ nano tr&ecirc;n bề mặt vi&ecirc;n gạch, l&agrave;m cho vi&ecirc;n gạch giữ được m&agrave;u sắc bền l&acirc;u theo thời gian, chống thấm chống trầy, dễ vệ sinh.</p>\r\n', '', 0, '1651912774_nen-nha-gach-60x60-bong-kieng.jpg', 120000, 117600, 2, 35, '', '', 'Nhiều màu sắc', 'Đá porcelain, chống trầy, chống thấm.', 'Việt nam', '60x60cm'),
(61, 'Gạch nền vân gỗ 60x60 mờ', '<h3>Gạch l&aacute;t nền giả v&acirc;n gỗ 60x60</h3>\r\n', '<p><strong>Gạch nền v&acirc;n gỗ 60x60 mờ</strong><strong>&nbsp;</strong>được d&ugrave;ng để thay thế s&agrave;n gỗ c&ocirc;ng nghiệp. C&oacute; thể d&ugrave;ng để l&aacute;t nền, ốp tường, trang tr&iacute; cho hầu hết c&aacute;c khu vực từ ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ, đại sảnh, kh&aacute;ch sạn. Với thiết kế hiện đại, tạo cảm gi&aacute;c như s&agrave;n gỗ thật 100%. C&ocirc;ng năng chống thấm tốt, th&acirc;n thiện với m&ocirc;i trường, chống ch&aacute;y, chống mối mọt. L&agrave; sản phẩm vượt trội, tối ưu h&oacute;a hơn so với s&agrave;n gạch gỗ c&ocirc;ng nghiệp.</p>\r\n', '', 1, '1651913067_gach-nen-van-go-60x60-mo.jpg', 350000, 343000, 2, 38, '', '', 'Nhiều màu sắc', 'Đá', 'Việt nam', '100x100cm'),
(62, 'Gạch lát nền vân gỗ Prime 60x60 17013', '<h3>Gạch l&aacute;t nền giả v&acirc;n gỗ 60x60 b&oacute;ng kiếng to&agrave;n phần</h3>\r\n', '<p><strong>Gạch l&aacute;t nền v&acirc;n gỗ Prime 60x60 17013</strong><strong>&nbsp;</strong>được d&ugrave;ng để thay thế s&agrave;n gỗ c&ocirc;ng nghiệp. C&oacute; thể d&ugrave;ng để l&aacute;t nền, ốp tường, trang tr&iacute; cho hầu hết c&aacute;c khu vực từ ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ, đại sảnh, kh&aacute;ch sạn. Với thiết kế hiện đại, tạo cảm gi&aacute;c như s&agrave;n gỗ thật 100%. C&ocirc;ng năng chống thấm tốt, th&acirc;n thiện với m&ocirc;i trường, chống ch&aacute;y, chống mối mọt. L&agrave; sản phẩm vượt trội, tối ưu h&oacute;a hơn so với s&agrave;n gạch gỗ c&ocirc;ng nghiệp.</p>\r\n', '', 1, '1651913288_gach-lat-nen-prime-60x60-17013.jpg', 200000, 200000, 0, 38, '', '', 'Nhiều màu sắc', 'Đá bóng kính toàn phần', 'Việt nam', '60x60cm'),
(63, 'Gạch giả gỗ mờ lát nền phòng ngủ 60x60 Prime', '<h3>&nbsp;Gạch l&aacute;t nền v&acirc;n gỗ 60x60</h3>\r\n', '<p><a href=\"https://gachtonkho.net/gach-bong-kieng-lat-nen-60x60-gia-re-p2761.html\"><strong><em><u>Gạch 60x60 gi&aacute; rẻ</u></em></strong></a>&nbsp;l&agrave; gạch tồn từ kho của nh&agrave; m&aacute;y gạch, gạch thanh l&yacute;, gạch loại 2, loại 3, gạch lỗi m&agrave;u sắc. D&ograve;ng gạch n&agrave;y rất th&iacute;ch hợp cho c&aacute;c c&ocirc;ng tr&igrave;nh nh&agrave; trọ, nh&agrave; cho thu&ecirc;, nh&agrave; b&aacute;n, nh&agrave; cấp 4, nh&agrave;m tiết kiệm chi ph&iacute; x&acirc;y dựng m&agrave; vẫn đạt hiệu quả cao.</p>\r\n', '', 0, '1651913781_gach-gia-go-mo--60x60-17008.jpg', 345000, 334650, 3, 38, '', '', 'Nâu', 'Đá bóng kính toàn phần', 'Việt nam', '80x80cm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `location` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `photo`, `location`) VALUES
(31, '1651915449_Tiles-Main-Banner-2-1203x495.jpg', 1),
(32, '1651917790_1563605268-1518441243-slide-3.png', 1),
(35, '1651950682_f5e95b_0d3e413f3341425b8f9a3900cd05f2ad.jpg', 2),
(37, '1651950702_f5e95b_461e74fdb5f04246870dcc1c59c0290a.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `photo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `photo`) VALUES
(29, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1651997427_Ảnh chụp màn hình 2022-04-27 005532.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `panel`
--
ALTER TABLE `panel`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `panel`
--
ALTER TABLE `panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
