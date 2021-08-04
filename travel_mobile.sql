-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 09:12 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2021_07_16_084644_create_social_facebook_accounts_table', 2),
(9, '2021_07_16_090343_add_facebook_id_column_in_users_table', 3),
(10, '2021_07_17_081918_add_google_id_column_in_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` varchar(500) NOT NULL,
  `blog_pic` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`blog_id`, `title`, `content`, `blog_pic`, `created_at`, `updated_at`) VALUES
(2, 'THUÊ XE Ô TÔ - NHỮNG ĐIỀU BẠN CẦN LƯU Ý ĐỂ LỰA CHỌN ĐƯỢC CHIẾC XE PHÙ HỢP NHẤT CHO CHUYẾN ĐI CỦA MÌNH', 'Luôn mang lại cho du khách sự linh động, thoải mái, cùng nhiều trải nghiệm thú vị, dịch vụ thuê xe đang trở nên ngày càng phổ biến trong những năm trở lại đây. Tuy nhiên, việc thuê một chiếc xe không phù hợp có thể khiến cho hành trình của bạn gặp phải những rắc rối không đáng có. Vì vậy, hãy để Mioto chia sẻ một số kinh nghiệm quý giá', '21.jpg', '2021-08-02 21:20:20', '2021-08-02 21:23:18'),
(3, 'Vui chơi dễ dàng hơn bao giờ hết cùng dịch vụ thuê xe du lịch', 'Xóa bỏ nỗi lo chưa có xe riêng hay chưa có bằng lái, các dịch vụ cho thuê xe du lịch ra đời, trở thành người bạn đồng hành tuyệt vời trong mỗi chuyến đi của bạn.', '33.jpg', '2021-08-02 23:02:22', '2021-08-02 23:02:22'),
(4, 'ĐIỂM MẶT NHỮNG MẪU XE HẠNG B ĐÁNG MUA NHẤT NĂM 2021 TRONG TẦM GIÁ 500 ĐẾN 600 TRIỆU ĐỒNG', 'Xe hạng B hay còn được gọi là xe gia đình cỡ nhỏ, thường có 3 đến 5 cửa, gồm 4 ghế ngồi và được phép chở tối đa 5 người. Những bản hatchback ở phân khúc này thường có chiều dài là 3.900 mm, trong khi chiều dài của bản sedan thường là khoảng 4.200 mm. Với ngoại hình nhỏ gọn, những chiếc xe hạng B duy trì lợi thế trên những con', '25.jpg', '2021-08-02 23:08:07', '2021-08-02 23:08:07'),
(5, 'NHỮNG MẪU XE BÁN TẢI NỔI BẬT TRONG TẦM GIÁ 600 TRIỆU', 'Với sự thuận tiện về ứng dụng và hiện đại về thiết kế, trang thiết bị, dòng xe bán tải ngày càng được ưa chuộng tại Việt Nam. Xe bán tải, hay còn gọi là xe Pick-up, rất phổ biến tại Việt Nam và các quốc gia đang phát triển bởi tính đa dụng trong đời sống hàng ngày', '30.jpg', '2021-08-02 23:13:40', '2021-08-02 23:13:40'),
(6, 'CÙNG MIOTO PHÂN BIỆT CÁC PHÂN KHÚC XE Ô TÔ TẠI THỊ TRƯỜNG VIỆT NAM', 'Mỗi quốc gia sẽ có những tiêu chí riêng để xếp loại các phân khúc xe ô tô. Nếu thị trường Mỹ dựa vào kích thước khung xe và động cơ, thị trường Nhật phân theo pháp luật, tạp chí chuyên ngành và các nhà chế tạo ô tô, thì ở Việt Nam, 3 yếu tố cơ bản để phân biệt các mẫu xe chính là dung tích động cơ, kích thước và giá cả.', '36.jpg', '2021-08-02 23:16:47', '2021-08-02 23:16:47'),
(7, 'Thuê xe ô tô du lịch và những kinh nghiệm cần biết', 'Hiện nay, một trong những xu hướng du lịch được rất nhiều người ưa chuộng là sử dụng phương tiện ô tô tự lái. Hình thức du lịch bằng ô tô ngày càng trở nên phổ biến nhờ sở hữu nhiều ưu điểm tiện lợi vượt trội. Trong bài viết dưới đây, TravelMobile sẽ hướng dẫn bạn những kinh nghiệm cần “bỏ túi” trước khi bắt đầu cuộc hành trình du lịch bằng ô tô tự lái của mình.', '47.jpg', '2021-08-02 23:21:38', '2021-08-02 23:21:38'),
(8, 'Những tính năng an toàn trên xe ô tô mà bạn không nên bỏ lỡ!', 'Đã bao giờ bạn “đau đầu” giữa hàng loạt các tính năng an toàn xuất hiện ngày càng đa dạng trên xe ô tô của mình chưa? Trong bài viết sau đây, Mioto sẽ giúp bạn tìm hiểu cách thức hoạt động cũng như vai trò của từng tính năng để bảo vệ bản thân khỏi những trường hợp đáng tiếc khi tham gia giao thông.', '3.jpg', '2021-08-02 23:29:17', '2021-08-02 23:29:17'),
(9, 'Mua bảo hiểm ô tô và những điều cần biết?', 'Khi tiến hành những bước đầu tiên để sở hữu một chiếc ô tô cho riêng mình, chắc chắn có rất nhiều thứ bạn cần phải chuẩn bị, đặc biệt là bảo hiểm cho ô tô. Trong quá trình sử dụng, chiếc xe của bạn có thể gặp phải một số các tình huống không mong muốn như va chạm, trầy xước hay hỏng móp,… Số tiền bỏ ra để trùng tu và sửa chữa có thể', '52.jpg', '2021-08-02 23:35:20', '2021-08-02 23:35:20'),
(10, 'Những dấu hiệu dự báo phanh xe của bạn đã không còn an toàn', 'Nếu đã sử dụng chiếc xe mình trong một khoảng thời gian dài, dù không có điều gì bất thường thì bạn cũng nên kiểm tra ngay hệ thống phanh của mình vì sau 4 năm trở đi, rất có thể hệ thống phanh của bạn đã gặp những sự cố tiềm ẩn nguy hiểm.', '9.jpg', '2021-08-02 23:37:04', '2021-08-02 23:37:04'),
(11, 'Chống say xe ô tô hiệu quả', 'Tùy theo cơ địa mỗi người, có người rất ổn khi di chuyển bằng xe ô tô, nhưng đối với một vài người đây là cực hình khi liên tục bị buồn nôn chóng mặt khi xe di chuyển. Luyện tập cho tiền đình bớt nhạy cảm là cách dứt điểm nhất cho những người say xe. Dười đây là một vài cách có thể áp dụng ngay.', '56.jpg', '2021-08-02 23:38:31', '2021-08-02 23:38:31'),
(12, 'Kinh nghiệm để bớt nhọc nhằn khi điều khiển xe ô tô giờ cao điểm', 'Kẹt trong dòng người giữa Sài Gòn là điều không mấy dễ chịu. Điều đó còn tệ hơn nếu bạn đang vội và đi ô tô vì những người đi xe máy liên tục luồn lách tranh giành lối đi của bạn. Lô cốt mọc lên chiếm dụng lòng đường khiến bạn quãng đường của bạn bị bó hẹp, chỉ có thể đi những con đường lớn và liên tục kẹt trong dòng người giờ cao điểm.', '60.jpg', '2021-08-02 23:40:27', '2021-08-02 23:40:27'),
(13, 'Kính xe bị mờ khi trời mưa? Đây là những cách giải quyết đơn giản nhất', 'Thời tiết đã bắt đầu vào hạ, một mùa mưa lại sắp đến kéo theo ngập đường, ùn tắc. Hơn nữa, khi lái xe trong điều kiện thời tiết mưa to, kính xe ô tô sẽ bị ố mờ do mất cân bằng nhiệt độ giữa thời tiết bên ngoài và không gian bên trong xe. Điều này gây ảnh hưởng đến tầm nhìn của tài xế rất nhiều.', '64.jpg', '2021-08-02 23:42:10', '2021-08-02 23:42:10'),
(14, 'Xe ô tô để lâu không sử dụng nên làm gì?', 'Vì một lý do nào đó mà bạn không sử dụng chiếc xe ô tô của mình nữa, để yên trong một khoảng thời gian dài không sử dụng. Nếu không cất giữ đúng cách và hợp lý, xe của bạn sẽ hao mòn nhanh và gặp những hỏng hóc không mong muốn. Dưới đây là một số mẹo nhỏ để giúp bạn tránh những hỏng hóc và xe vẫn hoạt động bình thường', '67.jpg', '2021-08-02 23:53:41', '2021-08-02 23:53:41'),
(15, 'Kinh nghiệm chọn xe cho phái đẹp', 'Đã qua rồi cái thời phụ nữ lúc nào cũng phải lui bước về sau để \"nâng khăn sửa túi\", nhường lại những việc lớn cho người đàn ông đảm nhiệm. Chị em thời nay văn minh, tiến bộ, có thể tự làm chủ cuộc đời mình, tự mua nhà, mua xe mà không nhất thiết phải có người đàn ông sánh bước. Vì vậy việc phái nữ lựa chọn cho mình một chiếc xe', '71.png', '2021-08-02 23:56:51', '2021-08-02 23:56:51'),
(16, 'Lẫy chuyển số trên vô lăng có công dụng gì?', 'Vô lăng trên những xe đời mới thường có nút Paddle Shift, chuyển số dễ dàng bằng nút bấm trên vô lăng. Tuy vậy không nhiều người sử dụng và hiểu được hết công năng và tính ứng dụng của nó mang lại.', '79.jpg', '2021-08-03 00:02:46', '2021-08-03 00:02:46'),
(17, 'Tổng hợp những cách \"giữ gìn\" ô tô để bán lại được giá', 'Không như ở Mỹ chỉ xem xe hơi là một phương tiện di chuyển và dễ dàng sở hữu, Việt Nam là nơi giá xe ô tô bị đẩy lên rất cao vì những loại thuế má khác nhau, khiến xe hơi trở thành một tài sản rất giá trị trong đời nhiều người. Vì vậy chọn được một chiếc xe giữ giá và giữ cho xe bán được giá là mối quan tâm hàng đầu của nhiều người.', '84.jpg', '2021-08-03 00:07:59', '2021-08-03 00:07:59'),
(18, 'Động cơ xăng và động cơ dầu khác nhau như thế nào?', 'Khi mua xe hay thuê xe tự lái, bạn sẽ thấy những thông tin như mấy chỗ, số sàn hay số tự động, và đặc biệt là xe chạy động cơ xăng, hay xe chạy động cơ dầu. Đây là điều khiến không ít người băn khoăn và khó lựa chọn. Vậy đâu là điểm khác nhau giữa động cơ xăng và động cơ dầu?', '89.jpg', '2021-08-03 00:17:02', '2021-08-03 00:17:02'),
(19, 'Điều hòa ô tô và những lưu ý ai cũng nên biết', 'Không chỉ đơn giản là tăng giảm và điều hòa nhiệt độ dễ chịu trên xe ô tô, người sử dụng điều hòa xe hơi cần biết những lưu ý sau để sử dụng điều hòa ô tô vừa hiệu quả vừa tiết kiệm, đồng thời còn đảm bảo sức khỏe cho người ngồi trên xe.', '93.jpg', '2021-08-03 00:19:30', '2021-08-03 00:19:30'),
(20, 'Thói quen chết người khi nhắn tin lúc đang lái xe', 'Nhiều người thường xem nhẹ việc nhắn tin khi lái xe vì nghĩ chỉ một tin nhắn ngắn không thể gây ảnh hưởng gì nhiều đến quá trình điều khiển. Họ tự tin tay thì trên vô lăng, tay kia lại gõ phím liên hồi, mắt đảo lên đảo xuống vừa nhìn đường vừa nhìn màn hình điện thoại. Nhiều nghiên cứu đã cho thấy hành động nhắn tin khi đang lái xe có liên quan trực tiếp gây ra các vụ tai nạn giao thông thảm khốc.', '96.jpg', '2021-08-03 00:22:46', '2021-08-03 00:22:46'),
(21, 'Ô tô hết bình phải xử lý như thế nào?', 'Bình ắc quy là bộ phận phát điện chính của xe giúp xe có thể đề máy và cung cấp điện cho những tiện ích khác trên xe hoạt động. Nếu tài xế để xe lâu không sử dụng hoặc để quên cho các tiện ích như đầu DVD, đèn pha hoạt động thâu đêm suốt sáng sẽ gây hết bình và khiến cho chiếc xe của bạn không nổ máy được.', '101.jpg', '2021-08-03 00:33:25', '2021-08-03 00:33:25'),
(22, 'Phái nữ nên quan tâm đến những tính năng gì khi chọn xe?', 'So với những người đàn ông, phái nữ luôn dịu dàng và mỏng manh, không có nhiều sức vóc. Vì vậy việc chọn lựa một chiếc xe với những tính năng thông minh chắc chắn sẽ giúp các nàng dễ dàng điều khiển và', '71.png', '2021-08-03 00:34:34', '2021-08-03 00:34:34'),
(23, 'Những lỗi hay mắc phải khi tham gia giao thông', 'Khi tiến hành thuê xe tự lái, bạn phải đảm bảo mình sẽ tuân thủ đúng luật giao thông khi lưu thông trên đường để tránh các tình huống khó xử. Tuy nhiên, thực tế đã chứng minh được rằng các tài xế rất dễ mắc phải 5 lỗi khi tham gia giao thông. Các Travelers hãy cùng tìm hiểu trong bài viết sau để tránh nhé!', '107.jpg', '2021-08-03 00:36:57', '2021-08-03 00:36:57'),
(24, 'Động cơ ô tô ngày càng yếu và hỏng hóc? Đâu là lý do?', 'Động cơ là bộ phận quan trọng nhất, được ví như trái tim của mỗi chiếc ô tô. Nếu động cơ của bạn đang trong tình trạng yếu dần đều hoặc hỏng hóc vặt liên tục, rất cỏ thể bạn đã mắc phải những lỗi dưới đây khiến tình trạng của động cơ bị xuống cấp.', '111.jpg', '2021-08-03 00:39:39', '2021-08-03 00:39:39'),
(25, 'Những bộ phận ít được vệ sinh thường xuyên trên xe ôtô', 'Xe ô tô là một tài sản giá trị lớn chỉ sau căn nhà của bạn. Ô tô được ví như một ngôi nhà di động mà bạn và gia đình sẽ sinh hoạt tạm thời khi di chuyển đến một nơi nào đó. Dân gian thường có câu \"Nhà sạch thì mát, bát sạch ngon cơm\" nên việc vệ sinh mọi ngóc ngách ô tô cũng cần thiết như vệ sinh chính ngôi nhà,', '115.jpg', '2021-08-03 01:33:28', '2021-08-03 01:33:28'),
(26, 'Không quen tay khi lái xe lạ? Đây là những điều bạn cần lưu ý!', 'Khi mượn xe của bạn bè hay thuê xe tự lái trên Mioto, bạn phải sử dụng một chiếc xe không quen thuộc vì mỗi xe có một thiết kế và cách sử dụng tương đối khác nhau. Dù là một tài xế lâu năm hay mới tập chạy thì việc phải điều khiển một chiếc xe lạ sẽ it nhiều khiến bạn hơi bỡ ngỡ. Dưới đây là một vài lưu ý vào mẹo nhỏ có thể giúp bạn', '119.jpg', '2021-08-03 04:53:05', '2021-08-03 04:53:05'),
(27, 'Làm thế nào để lái xe ô tô đường dài đúng tư thế, không gây mệt mỏi?', 'Đối với những trường hợp lái xe đường dài, chắc chắn 100% các tài xế sẽ cảm thấy mỏi lưng, mỏi cổ và cảm giác căng thẳng. Nguyên nhân dẫn đến kết quả này là vì tài xế đã không ngồi đúng tư thế khoa học, gây khó khăn trong quá trình lái xe. Trong bài viết sau đây, TravelMobile sẽ hướng dẫn bạn tư thế lái xe “chuẩn” để bắt đầu một cuộc hành trình mới tốt nhất', '122.jpg', '2021-08-03 04:57:32', '2021-08-03 04:57:32'),
(28, 'Lùi xe ô tô không đơn giản như bạn nghĩ! 6 nguyên tắc cực dễ nhớ dưới đây sẽ giúp bạn!', 'Những ai mới lái ô tô đều có cảm giác chung là ô tô khá bít bùng và khó quan sát phía sau. Việc lùi xe ô tô thường là thao tác đòi hỏi nhiều kinh nghiệm và khả năng điều khiển linh hoạt của người lái. Nắm ngay 6 điều dưới đây để lùi xe dễ dàng, an toàn không gây xây xướt cho xe, cũng như giữ an toàn cho chính bạn', '125.jpg', '2021-08-03 05:01:14', '2021-08-03 05:01:14'),
(29, 'Bị CSGT \"tuýt còi\" và những nguyên tắc cần biết', 'Khi di chuyển lưu thông trên đường, việc bị cảnh sát giao thông ra hiệu dừng xe là điều không ai mong muốn. Tuy vậy, ít ai có thể tránh khỏi việc này. CSGT tuýt còi bạn khi xe của bạn có dấu hiệu vi phạm luật giao thông. Vì vậy, một ít hiểu biết về luật pháp và nhưng nguyên tắc ứng xử cần lưu ý sau đây sẽ giúp bạn hiểu rõ về các quyền hạn của mình để tránh bị phạt oan khi gặp CSGT', '130.jpg', '2021-08-03 05:02:43', '2021-08-03 05:02:43'),
(30, 'Công dụng tuyệt vời của seat belt khi ngồi trên ôtô', 'Seat belt (Dây an toàn) là thứ có mặt trên mọi chiếc xe từ siêu sang đến bình dân giá rẻ. Ngoài việc đảm bảo an toàn cho người ngồi trên xe, đây có là một chi tiết quan trọng bạn cần lưu ý để tránh vi phạm luật an toàn giao thông khi lưu thông trên đường.', '133.jpg', '2021-08-03 05:03:40', '2021-08-03 05:03:40'),
(31, 'Những nguy hiểm chết người khi không bảo dưỡng ôtô thường xuyên', 'Những bác tài lâu năm thường phải hiểu rất rõ về chiếc xe của mình và tình trạng hiện tại của chúng vì trên mỗi chuyến xe là tính mạng của rất nhiều người và cả chính bác tài. Nhưng với những người lái xe thông thường, họ thường không có nhiều kinh nghiệm trong việc “lắng nghe” chiếc xe của mình, để những hỏng hóc ngày càng trầm trọng hơn', '67.jpg', '2021-08-03 05:06:18', '2021-08-03 05:06:18'),
(32, '7 điều cần lưu ý để giữ nội thất sạch sẽ', 'Ngoại thất sạch sẽ, chỉnh chu, bóng bẩy thì nhìn thích mắt thật, nhưng điều đó không quan trọng bằng nội thất- nơi tiếp xúc trực tiếp với bạn, nơi bạn và gia đình sinh hoạt tạm thời cho đến khi tới điểm đến. Chính vì vậy, không gian này cần được giữ sạch sẽ tinh tươm và không có mùi để tránh gây ra những bệnh truyền nhiễm.', '123.jpg', '2021-08-03 05:08:14', '2021-08-03 05:08:14'),
(33, '4 điều “đau đầu” khi sử dụng ô tô ở đô thị', 'Ôtô là tài sản rất lớn của cuộc sống mỗi người, chỉ sau căn nhà che nắng che mưa. Việc sở hữu một chiếc ô tô tốn không ít chi phí và là mơ ước của rất nhiều người. Ngoài những tiện lợi mà một chiếc xế hộp mang lại cho gia đình bạn, đằng sau nó là những vấn đề về chi phí phát sinh khá đau đầu cho chủ xe.', '136.jpg', '2021-08-03 05:11:21', '2021-08-03 05:11:21'),
(34, 'Làm thế nào để tránh gây tai nạn thảm khốc như “Ngã tư hàng xanh”', 'Theo rất nhiều báo chí đã đưa tin, vụ tai nạn xe điên liên hoàn tại Ngã tư hàng xanh là do vướng giày cao gót vào chân ga, nhầm chân ga thành chân phanh. Việc sử dụng xe số tự động dù tiện lợi nhưng cũng dễ khiến người lái nhầm chân phanh và chân ga và vô tình dẫn đến những tai nạn thảm khốc', '1.jpg', '2021-08-03 05:12:27', '2021-08-03 05:12:27'),
(35, 'Mua xe cũ cần kiểm tra kĩ những chi tiết nào?', 'Mua xe cũ có thể tiết kiệm cho bạn hàng đống chi phí. Tuy vậy, đây cũng là một việc khá rủi ro nếu bạn không có nhiều kinh nghiệm trong lĩnh vực xe. Mioto sẽ đem đến cho bạn những kiến thức kiểm tra tổng quát và những chi tiết bạn nên chú ý khi mua xe cũ', '10.jpg', '2021-08-03 05:15:08', '2021-08-03 05:15:08'),
(36, 'Hãy lưu ý những điều này khi đưa xe đi đổ xăng', 'Đổ xăng tưởng chừng rất đơn giản, nhưng luôn có những điều bạn phải tuân thủ để tránh gây ra nguy hiểm cho chính mình', '142.jpg', '2021-08-03 05:16:30', '2021-08-03 05:16:30'),
(37, '8 lời khuyên bảo vệ ô tô khỏi mất cắp', 'Xe hơi là tài sản lớn, đôi khi giá trị bằng cả căn nhà nên việc bảo vệ tối đa cho xế cưng của bạn là điều hiển nhiên. Và làm sao để chống trộm cắp xe hơi hay phụ tùng trên xe là điều khiến nhiều người phải đau đầu suy nghĩ.', '28.jpg', '2021-08-03 05:20:38', '2021-08-03 05:20:38'),
(38, 'Làm thế nào để xe của bạn luôn trong tình trạng tốt nhất?', 'Việc “chăm sóc” cho tài sản giá trị (có khi lên đến hàng tỷ đồng)- chiếc oto của bạn là việc cần thiết và cũng khá đơn giản để thực hiện.\r\n\r\nTất nhiên không kể đến việc sửa chữa vào bảo trì xe là những việc cần có chuyên môn, kinh nghiệm và tay nghề lâu năm, bạn nên nhờ đến các kĩ thuật viên để giúp bạn làm việc này.', '11.jpg', '2021-08-03 05:22:45', '2021-08-03 05:22:45'),
(39, 'Cần phải chuẩn bị gì khi mua ô tô cũ?', 'Mua xe hơi cũ, second hand hay thậm chí là đã qua vài đời chủ không đơn giản chỉ “tiền trao cháo múc” như mua xe mới nguyên đai nguyên kiện. Nếu không hiểu biết và cân nhắc những thủ tục, giấy tờ pháp lý sẽ khiến bạn gặp nhiều rắc rối sau này.', '154.jpg', '2021-08-03 05:24:00', '2021-08-03 05:24:00'),
(40, 'Sự thật về việc xe số tự động ngốn xăng so với số sàn?', 'Vấn đề số tự động hay số sàn của xe phụ thuộc vào ý thích của mỗi người khi chọn lựa. Người ta hay bảo số tự động dễ chạy hơn số sàn và nhiều người gặp trở ngại trong việc chạy xe số sàn.', '143.jpg', '2021-08-03 05:25:09', '2021-08-03 05:25:09'),
(41, 'Cân nhắc khi mua ô tô mới', 'Hẳn khi ra quyết định mua ôtô, ai cũng trải qua những việc rất đau đầu bởi ôtô là một tài sản giá trị lớn, đỏi hỏi người dùng phải cân nhắc kĩ lưỡng. Không chỉ cần giá xe vừa túi tiền, tính năng đủ dùng để phục vụ nhu cầu đi lại, mà xa hơn là cân nhắc giá trí bán lại khi không dùng nữa hoặc muốn nâng cấp. Đây là 10 gợi ý để người tiêu dùng cân nhắc khi quyết định tậu xe hơi mới', '38.jpg', '2021-08-03 05:28:32', '2021-08-03 05:28:32'),
(42, 'Thuê xe hơi du lịch - tại sao không?', 'Tại sao bạn không chọn cho mình một cách du lịch hoàn toàn khác đi bằng cách thuê xe hơi du lịch bằng hình thức tự lái? Đây là cách chưa phổ biến lắm nhưng đang trở thành trào lưu, một xu hướng du lịch trải nghiệm mới của giới trẻ.', '39.jpg', '2021-08-03 05:30:45', '2021-08-03 05:30:45'),
(43, '5 cách đơn giản để vệ sinh xe', 'Bài viết này cung cấp cho bạn 5 bước đơn giản mà hiệu quả để chiếc xe bạn luôn mới và tốt nhất.', '161.jpg', '2021-08-03 05:33:13', '2021-08-03 05:33:13'),
(44, 'Quan tâm đến xe tự lái khi tìm kiếm không gian riêng, tại sao không?', 'Để biến mất khỏi thành phố vài ngày, di chuyển lòng vòng nhiều địa điểm du lịch, thăm hỏi họ hàng xa, đi chơi nghỉ dưỡng, hẳn nhiên các phương tiện công cộng chưa bao giờ không nằm trong top lựa chọn của đa số người tại TP.HCM cả.', '164.jpg', '2021-08-03 05:36:43', '2021-08-03 05:36:43'),
(45, 'Các dòng xe đáng trải nghiệm', 'Bạn biết lái xe, bạn đam mê làm chủ tốc độ, bạn có ao ước rằng cuối tuần sẽ vu vi cùng gia đình hay bạn bè, người yêu. Chạy trốn khỏi đô thị phồn hoa tấp nập trong vài ngày để lấy năng lượng tiếp tục chiến đấu. Mong muốn sở hữu một chiếc xe hơi để thỏa mãn thú tiêu khiển.', '165.jpg', '2021-08-03 05:39:07', '2021-08-03 05:39:07'),
(46, 'Cùng tìm hiểu những công viên nước hoành tráng và đáng đi nhất Việt Nam', 'Bạn đã đi công viên nước nhiều rồi, nhưng bạn đã biết đến những công viên hoành tráng và đáng đi nhất Việt Nam chưa? Khám phá ngay bên dưới xem bạn đã khám phá được bao nhiêu chỗ rồi nhé!', '166.jpg', '2021-08-03 05:41:04', '2021-08-03 05:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_car_mfg`
--

CREATE TABLE `tb_car_mfg` (
  `mfg_id` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `nation` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_car_mfg`
--

INSERT INTO `tb_car_mfg` (`mfg_id`, `name`, `logo`, `nation`, `website`) VALUES
('AUD', 'AUDI', 'logo-audi.png', 'England', 'https://www.audi.vn/'),
('BAI', 'BAIC', 'logo-BAICMotor.png', 'China', 'http://www.baicmotor.com/en/index.html'),
('BEN', 'BENTLEY', 'logo-bentley.png', 'England', 'https://www.Bentley.com'),
('BMW', 'BMW', 'logo-bmw.png', 'Germary', 'https://www.bmw.vn/'),
('CHE', 'CHEVROLET', 'logo-chevrolet.png', 'USA', 'https://www.chevrolet.com/'),
('DAE', 'DAEWOO', 'logo-deawoo.png', 'Korea', 'https://www.autoparts.co.kr/'),
('DAI', 'DAIHATSU', 'logo-daihatsu.png', 'Japan', 'https://www.daihatsu.com/'),
('DON', 'DONGFENGH', 'logo-Dongfeng.png', 'China', 'http://www.dongfeng.com'),
('FIA', 'FIAT', 'logo-fiat.png', 'Italia', 'https://www.fiat.com/'),
('FOR', 'FORD', 'logo-ford.png', 'USA', 'https://www.ford.com.vn/'),
('GEE', 'GEELY', 'logo-geely.png', 'China', 'https://www.Geely.com/'),
('HAI', 'HAIMA', 'logo-Haima.png', 'China', ''),
('HON', 'HONDA', 'logo-honda.png', 'Japan', 'https://www.honda.com.vn/'),
('HYU', 'HYUNDAI', 'logo-hyundai.png', 'Korea', 'https://hyundaivn.com/'),
('ISU', 'ISUZU', 'logo-isuzu.png', 'Japan', 'https://isuzu-vietnam.com/'),
('JAG', 'JAGUAR', 'logo-jaguar.png', 'England', 'https://www.Jaguar.com'),
('KIA', 'KIA', 'logo-kia.png', 'Korea', 'https://www.kiamotorsvietnam.com.vn/\r\n'),
('LAN', 'LAND ROVER', 'logo-landrover.png', 'England', 'https://www.LandRover.com/'),
('LEX', 'LEXUS', 'logo-lexus.png', 'Japan', 'https://www.lexus.com/'),
('LUX', 'LUXGEN', 'logo-luxgen.png', 'China', 'https://www.luxgen.com/'),
('MAZ', 'MAZDA', 'logo-mazda.png', 'Japan', 'https://www.mazda.com/'),
('MER', 'MERCEDES', 'logo-mercedesbenz.png', 'Germary', 'https://www.mercedes-benz.com.vn/'),
('MIT', 'MITSUBISHI', 'logo-mitsubishi.png', 'Japan', 'https://www.mitsubishi.com/'),
('MOR', 'MORRIS GARAGES', 'logo-mg.png', 'England', 'http://www.morrisgarages.com/'),
('NIS', 'NISSAN', 'logo-nissan.png', 'Japan', 'https://www.nissan-global.com/'),
('PEU', 'PEUGEOT', 'logo-peugeot.png', 'France', 'https://www.peugeotvietnam.vn/'),
('POS', 'PORSCHE', 'logo-porsche.png', 'Germary', 'https://porsche-vietnam.vn/'),
('REN', 'RENAULT', 'logo-renault.png', 'France', 'https://www.renault.vn/'),
('RII', 'RIICH', 'logo-riich.png', 'England', 'http://www.riich.cn/'),
('SSA', 'SSANGYONG', 'logo-ssangyong.png', 'Korea', 'http://www.ssangyong.com.vn/'),
('SUB', 'SUBARU', 'logo-subaru.png', 'Japan', 'https://www.subaru.asia/'),
('SUZ', 'SUZUKI', 'logo-suzuki.png', 'Japan', 'https://suzuki.com.vn/'),
('TES', 'TESLA', 'logo-tesla.png', 'USA', 'http://www.tesla.vn'),
('TOY', 'TOYOTA', 'logo-toyota.png', 'Japan', 'https://www.toyota.com.vn/'),
('UAZ', 'UAZ', 'logo-uaz.png', 'Russia', 'http://www.uazauto.com/'),
('VIN', 'VINFAST', 'logo-vinfast.png', 'Vietnames', 'https://www.VinFast.com/'),
('VOL', 'VOLKSWAGGEN', 'logo-vw.png', 'Germary', 'https://www.vw.com.vn/'),
('ZOT', 'ZOTYE', 'logo-Zotye.png', 'China', 'http://www.zotype.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_car_pic`
--

CREATE TABLE `tb_car_pic` (
  `pic_id` bigint(10) UNSIGNED NOT NULL,
  `car_id` bigint(10) UNSIGNED DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_left` varchar(255) DEFAULT NULL,
  `image_right` varchar(255) DEFAULT NULL,
  `image_behind` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_car_pic`
--

INSERT INTO `tb_car_pic` (`pic_id`, `car_id`, `image`, `image_left`, `image_right`, `image_behind`, `created_at`, `updated_at`) VALUES
(1, 1, 'k33IE9zvkQZ-CcSr8gF_7g.jpg', 'Cpj0ztKiWXtdvpVLtcMi9A.jpg', 'dR_hV18_Ml9r1gj4fp5ytg.jpg', '89Tz03_1x4BvvpclcuEnAw.jpg', '2021-07-31 00:24:12', '2021-07-31 00:24:12'),
(2, 2, '7Ja1eqOdSIeICuOpwuvKNg.jpg', 'FsHx_C5_4IzchawlrHy8YQ.jpg', 'G775tVToa0uthYcV0nPHKA.jpg', 'QzWIybgF3xC7-crVLjjjWg.jpg', '2021-07-31 00:51:36', '2021-07-31 00:51:36'),
(3, 3, 'Am6hLaWzqemc06CFDt96FA.jpg', 'dtexhpvRD718B8u1X87pYw.jpg', 'G8H2cn1d8Jwna_zgEJzSPg.jpg', '3mBUbynks0JbjEJdsUtcCg.jpg', '2021-07-31 01:02:01', '2021-07-31 01:02:01'),
(4, 4, 'kxr5I5spxLlJoXDzrP2KJw.jpg', 'mDVEdp5I4LENgq98i14L_A.jpg', 'p3UEJZy77DPvgyBxe0YSvg.jpg', 'r3-hK56PXA7sTCONTrOcIA.jpg', '2021-07-31 01:07:49', '2021-07-31 01:07:49'),
(5, 5, 'rgREBK3QGqsqgzN8BbA1iw.jpg', 'hOHjukeBWpRN7halzdcbXQ.jpg', 'NENFToE07V_njkVIVZ_jmQ.jpg', 'VOOT1GOziUuV0LfV_yQbcQ.jpg', '2021-07-31 01:16:37', '2021-07-31 01:16:37'),
(6, 6, '7lAfC3y1bPaP4OKwwvL3mA.jpg', 'cT74UUsl8qMGDeRLuvUXjQ.jpg', 'i6F4mbWLsoaui7gCbvNnXA.jpg', 'zBI6Ctq2gYONaLuVxCpHig.jpg', '2021-07-31 03:34:13', '2021-07-31 03:34:13'),
(7, 7, 'FnZFXPMXlM8H6k8qr32u7g.jpg', 'l1EYtpbUZd8RP2AeKnOYUA.jpg', 'EPOE8nBFqcrWbLmDYjJJTQ.jpg', '-LnYYnpXC2myocYVqqEfkA.jpg', '2021-07-31 03:39:01', '2021-07-31 03:39:01'),
(8, 8, 'WxZ0fKvoKdLHMGwdGPcmig.jpg', 'PVX1TXyPQ1EV-l40v7FfVA.jpg', 'Hm5ZIuieCyiVqV0_c-kubg.jpg', '67YycVts5V1YY1iRVpoilQ.jpg', '2021-07-31 03:43:52', '2021-07-31 03:43:52'),
(9, 9, 'oM3POMFOoyEaVqXHinnSkQ.jpg', 'TZu_t_OxnHMTQ2tuEYkysQ.jpg', 'iHHJuk0oi4wrfgdUEHTspw.jpg', '7A-Bd3u36fCjvkBLEcOq3Q.jpg', '2021-07-31 03:48:01', '2021-07-31 03:48:01'),
(10, 10, 'iCr1ycJUwAh_A2jNOsRqBQ.jpg', 'WCVU5O2Itd2IgDU5PIDTwg.jpg', 'AAqreO9rrGkzGRG8Gwb6JQ.jpg', '1q8yzInjGvGMscljiBcrZA.jpg', '2021-07-31 03:51:47', '2021-07-31 03:51:47'),
(11, 11, 'Hc_G1uWX5Y4gvIxjXJ8_pg.jpg', 'J6NdlHmk2boi1OyxHwCiYg.jpg', 'aa9t-0wxXWlox7y2suYnWw.jpg', 'gG9jzDzS0zEFjHFGOV8Mmw.jpg', '2021-07-31 04:24:26', '2021-07-31 04:24:26'),
(12, 12, 'WXRJUwmH-VdBFMTAWNdTPg.jpg', 'OusfJkHusSlmBabNuFFXbg.jpg', 'GTJV8IaIXCFCbO5CgYWfYQ.jpg', 'LrBDH-AV16DzTmaN-yi7Pw.jpg', '2021-07-31 04:32:30', '2021-07-31 04:32:30'),
(13, 13, 'DVhnOXl2LggbEkd2t2xwng.jpg', 'GluHmVbPRy_y-qO7NleuKA.jpg', 'J1uYi605htmINEg0ly1OqA.jpg', 'AcgXFHmhN5BIuiHRmKbPsw.jpg', '2021-07-31 04:47:25', '2021-07-31 04:47:25'),
(14, 14, '705ElwRMTFAadDpfXw88Ug.jpg', 'BaXXjDYkk3nlld7hlfc1Jw.jpg', '7CMXIIW9SQcPk6Ohjn94sw.jpg', 'rvpo9l32ObvChIPrRlPPOA.jpg', '2021-08-01 00:46:51', '2021-08-01 00:46:51'),
(15, 15, '79r_jL1Mh1JtCGXTr_DVrA.jpg', 'FR-WLMAmskAGHlpv8CE4-g.jpg', 'idu3S6WN4HeJc9eabP0c9w.jpg', 'Y5EAcGQnYP3_u3PpitpFkg.jpg', '2021-08-01 01:03:30', '2021-08-01 01:03:30'),
(16, 16, 'JCxwqxydFEpHhwqB0SQRHQ.jpg', 'HPpuTBIPTGs3Y2BybK1KdQ.jpg', 'HVED4C21pFtvKofifuR2xg.jpg', 'oENgtoXdHozmIT6U8V-ECQ.jpg', '2021-08-01 01:07:05', '2021-08-01 01:07:05'),
(17, 17, 'mjhZseS_1KphesLk6D4HeA.jpg', 'A22oCm6cGOdqb6K8EoC4ew.jpg', 'y1ltatD5eV76Q6doFad0yA.jpg', 'kzJN8lewcFLkj0UiIEbwNQ.jpg', '2021-08-01 01:11:20', '2021-08-01 01:11:20'),
(18, 18, 'KDgpte9BoKIdUb8-yjVI4w.jpg', 'ZineqtuSXzlhW54KIrQuJw.jpg', '3Iz1NI7dvL_FbuoEiwWrSA.jpg', 'fJOVlfnANCGRpMW-Rq2gbg.jpg', '2021-08-01 01:15:03', '2021-08-01 01:15:03'),
(19, 19, 'RnnJ8bs-lutzzHkF6zydaw.jpg', 'sARvNsdG5TJTjzyeb0wChA.jpg', 'AL-i5hczlDh80gftYW99KA.jpg', 'O_x1fyajiWUbGl7mEpp2SA.jpg', '2021-08-01 01:19:22', '2021-08-01 01:19:22'),
(20, 20, 'Kvl_5p_KcD6yE2txlIgpLw.jpg', 'zRNheMo3Fc1iFSSswUX_gg.jpg', 'MM1-FbDS4_W1qu6LDTboHA.jpg', 'QI3h97eMKckXauzZLnVpQQ.jpg', '2021-08-01 01:23:59', '2021-08-01 01:23:59'),
(21, 21, 'hLJOP97hSGcf_RJOlebkMA.jpg', 'KjBXQmNtic20IYaSUA8Rnw.jpg', 'J8rRk_clCm4ot0Uv1vvUnw.jpg', 'NeANzGHGvQTqhcThgD3Abw.jpg', '2021-08-01 01:44:46', '2021-08-01 01:44:46'),
(22, 22, '5LTLgu4dyHaS0aPjOTdVXQ.jpg', '1jyvoy0FhhABjiyG9XPp0Q.jpg', '9EFM9xXZz48VRgQVl69izQ.jpg', 'U5V-lhusraP88ljey_9mkQ.jpg', '2021-08-01 01:47:22', '2021-08-01 01:47:22'),
(23, 23, 'SrFPBh37dwyFzfU2rzMxkA.jpg', 'AUAsocM9YTztyFMQU5ahqw.jpg', '_86Wd0ycjuu3lNnp9_ipHw.jpg', 'sX5HGTDZxlOqKZ3K1oL9HA.jpg', '2021-08-01 01:50:39', '2021-08-01 01:50:39'),
(24, 24, 'DHGeHE7VEgyqPlqvrTzYBA.jpg', 'gKYhWjDToGMFjgNdnHsrHg.jpg', 'QtUVYWlVs6t-oSrWcDx0Lw.jpg', 'TPeS90JRdspldwXbmv41QQ.jpg', '2021-08-01 01:53:07', '2021-08-01 01:53:07'),
(25, 25, 'CK5ivin5pP3_7xYa_IeeDQ.jpg', 'TmwDOiofd1mdfyI_hytWeQ.jpg', 'lhQuHMBNfwgukgTwMEl8hQ.jpg', 'kDiS_D2PBc9dBw3PYDgJaw.jpg', '2021-08-01 01:56:41', '2021-08-01 01:56:41'),
(26, 26, 'O6gM6VtChqNyZCRQsSe9GA.jpg', 'cG4sy_l6ccJ86kJ3W__XVw.jpg', 'sB4lqaqFsBJSm0q61ao6yQ.jpg', 'vbbFPInMKK49h4CRAxUE1g.jpg', '2021-08-01 02:00:34', '2021-08-01 02:00:34'),
(27, 27, 'fU3nLP8urkymmn72ES2Egg.jpg', 'H_j1myRjzCgaQR3CAq6_oQ.jpg', 'I7AoaKiqfNJWGXaykDy3jw.jpg', 'nv4sAAhWi5F9LqjfF9TJ6w.jpg', '2021-08-01 02:04:28', '2021-08-01 02:04:28'),
(28, 28, 'QYbRoONlGViOiKxXu9l8uw (1).jpg', 'Bnas6BPZFnFdKNmS9VXu9A.jpg', 'QYbRoONlGViOiKxXu9l8uw (1).jpg', 'AxDzZDVhyl86LYO4ke85tw.jpg', '2021-08-01 02:09:24', '2021-08-01 02:09:24'),
(29, 29, 'j_3S8XHICmfwKOt987ZAWQ.jpg', 'QhOW3wccLkh89IXoIxyxaA.jpg', 'qSQ4PXd-xVR65O21dyNCwA.jpg', 'xI_6A5e9AigpFW48jA1UxQ.jpg', '2021-08-01 02:15:03', '2021-08-01 02:15:03'),
(30, 30, 'MnxbdRMjBhOcJTaVNxn0kw.jpg', 'QSJ1eo-fygncOwlBGZdUhA.jpg', 'Rb00MObaubmm3Z3vjawqFg.jpg', 's0dvDC5Fa_1pOOVkZt0kyw.jpg', '2021-08-01 02:26:57', '2021-08-01 02:26:57'),
(31, 31, 'qracb8rGJGAnkZ3DAXb2TQ.jpg', 'gdYV4H_7Ec9SnUGqbuakww.jpg', 'E7At5DWQie5QM-I2WLLHyA.jpg', 'NhbCFIhgXvP5N-s0pfs1cg.jpg', '2021-08-01 02:51:09', '2021-08-01 02:51:09'),
(32, 32, 'pouoDHHCqLKdtU2Pm9hRZA.jpg', 'CDAyL_HiwWaf_a1dWg2D6w.jpg', 'MysCinVWHR89gW7kCVB0fg.jpg', 'VDiRb8Imwd-UQVRbB7DsQQ.jpg', '2021-08-01 02:57:05', '2021-08-01 02:57:05'),
(33, 33, 'g8_NO-x_ScJQJxwdG6XY2w.jpg', 'ceRMXh2293bbZxlDf9ZUWA.jpg', 'hiShqH6AYUr7oKjfTyAvpg.jpg', 'Ys_m7Dfp9lDOCYLaFXvl0A.jpg', '2021-08-01 03:04:43', '2021-08-01 03:04:43'),
(34, 34, 'GSGe9_lqMSJ7Yu6935FHxA.jpg', 'PnjR8Z6KwB1YHCqa98o2Kw.jpg', '2xWK3lPOha84bqkCLMirPQ.jpg', 'TfFYdm3DmIO3XFiBIKFFqg.jpg', '2021-08-01 03:10:13', '2021-08-01 03:10:13'),
(35, 35, 'UUX7X2ZD1Lh6Ipn6-WbKDw.jpg', 'U2vw0Y68iKMDBc-OLD4WvA.jpg', '95W5wtOCfb5zM_VSSm50MQ.jpg', 'UzVeTLr14NBR63J0-XzGfw.jpg', '2021-08-01 03:16:32', '2021-08-01 03:16:32'),
(36, 36, 'xxI0eI2WZM06KXyg8C8ssQ.jpg', 'iakfQ52sadn9FXGynF8CBQ.jpg', 'i2qPT7A6BdV5pdJuX4dKwg.jpg', 'vD47yvrRZKyUwABOQilpuQ.jpg', '2021-08-01 03:20:04', '2021-08-01 03:20:04'),
(37, 37, 'nWReCaqtxQju12wwNKROBw.jpg', 'E7xIDUlRUyH2ACG8GLJLEA.jpg', '6X65koNC1pTpznpP0F_cWA.jpg', 'zUYYbUmivLyb-XDlFgXsnQ.jpg', '2021-08-01 03:26:52', '2021-08-01 03:26:52'),
(38, 38, 'jpd2ohzimommlrfB_pHgLw.jpg', '-jU5djUg2R_qDGbwPU56rw.jpg', 'my6nv3SavASJAL9cdq4N4A.jpg', 'YiWqMZyfDfPJE78mOLCypQ.jpg', '2021-08-01 03:29:30', '2021-08-01 03:29:30'),
(39, 40, 'iBXGbFn971i8dyPTOVPnDQ.jpg', '9Z5uClbHtbRWJ-b1-gSYMQ.jpg', 'sS_sJrvsxcZU0p8Gpk01kQ.jpg', '8ckKuC8vJj0kMZTWrYEngg.jpg', '2021-08-01 09:15:54', '2021-08-01 09:15:54'),
(40, 41, 'sWEtheruPZj2YRcBy_597w.jpg', 'eADpf9sa7M0RvVG4fLN3AA (1).jpg', 'AQbi1y8wT2VZvYHfbEIq2Q.jpg', 'eADpf9sa7M0RvVG4fLN3AA.jpg', '2021-08-01 09:19:43', '2021-08-01 09:19:43'),
(41, 42, 'nqoGAn2vGmhuasM6bo0g_w.jpg', '2Jw3wqsLgF4PLwKSlb8EGQ.jpg', 'crrUEqi8vva_Xz6k5c1pvw.jpg', 'pQwwN4CavcqKJKU8OVrEgw.jpg', '2021-08-01 09:22:33', '2021-08-01 09:22:33'),
(42, 43, '54AjlDzxPr78wLxulqPmDA.jpg', 'knwV5-RX7UEyq5Tsb4BUvQ.jpg', '6t1utC-GvEAh48pQz9iNng.jpg', '8sSsHrQDhUk1Unq2qYE4gQ.jpg', '2021-08-01 09:27:43', '2021-08-01 09:27:43'),
(43, 44, '1cS3bepL225nYP1SR657nw.jpg', '1xTIzSsV0u3HbfVuW_gDhQ.jpg', 'fW6z7GGQPjWUX7eDmmwZsw.jpg', 'nE6F8CI9fUe4Sc0NZvVtZA.jpg', '2021-08-01 09:31:28', '2021-08-01 09:31:28'),
(44, 45, 'AdEqfs8Iuelqrvhy1EmYVA.jpg', 'R_xd-oHzygCJOeLzsfBosg.jpg', 'cE9-n_67KiClOT6B08fEfw.jpg', 'TCf_3m6X11iFtVvWms_OeQ.jpg', '2021-08-01 09:36:33', '2021-08-01 09:36:33'),
(45, 46, 'DakDitQfDFZspTJdxMzGZg.jpg', 'CcR48w6YsKj7Y61S_GGLqw.jpg', 'X8JWyPvHNwU8tDAmdTVSOg.jpg', '3xNIKoinaY7hBdag5-P-FQ.jpg', '2021-08-01 09:41:34', '2021-08-01 09:41:34'),
(46, 47, 'vXWfg2Uz03H_HFW03uurbw.jpg', '-dMjX0y6X054yJyNnaa7Kw.jpg', 'AVwMtgLa4inPOOY5otQYsw.jpg', 'se1WpkUMoBfyGGLa7Milkw.jpg', '2021-08-01 09:57:52', '2021-08-01 09:57:52'),
(47, 48, 'zjtq6Hh5haSttZgjh9FBeQ.jpg', 'MleapAaTiZ4iOGti4J7W7g.jpg', 'Zeah2Z4oiR4vQhojUOdWyQ.jpg', '1OE4qTmX_fgff3FIbnblSw.jpg', '2021-08-01 10:00:42', '2021-08-01 10:00:42'),
(48, 49, 'PorL_e3gp67B_SXEg1EMcA.jpg', 'i7rvh3lRrZ9xCD99aslYew.jpg', 'ffqgYe4vc1Lz_ML2rIAYOQ.jpg', 'lKu1yZpreAqmH4PJWdnHwA.jpg', '2021-08-01 10:04:03', '2021-08-01 10:04:03'),
(49, 50, 'O1gEQ1M239ssOVlV0GEjAg.jpg', 'vpU4E_xhZgsnXmDLAbJHXw.jpg', '1TkoLoDnWvCNpKhKZygquA.jpg', 'wFIN5SGjpOwVbzK2VrpbFw.jpg', '2021-08-01 10:08:36', '2021-08-01 10:08:36'),
(50, 39, 'a1u9ySMNKgYuYr0thz_RCQ.jpg', '1RiZMuNHGoel4P6UUhTmpg.jpg', 'r7GTNz2k1HDwCZozfab93A.jpg', 'dK29Ng16vQ7zK8d6adb6_g.jpg', '2021-08-01 10:08:36', '2021-08-01 10:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_car_rental`
--

CREATE TABLE `tb_car_rental` (
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` int(11) NOT NULL,
  `plate_id` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `seatnum` tinyint(4) DEFAULT NULL,
  `auto` tinyint(4) DEFAULT NULL,
  `fuel` tinyint(4) DEFAULT NULL,
  `consumption` tinyint(4) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `model_year` int(10) UNSIGNED DEFAULT NULL,
  `rent_price` int(11) NOT NULL,
  `convertible` tinyint(4) DEFAULT NULL,
  `bluetooth` tinyint(4) DEFAULT NULL,
  `gps` tinyint(4) DEFAULT NULL,
  `usb` tinyint(4) DEFAULT NULL,
  `kid_chair` tinyint(4) DEFAULT NULL,
  `map` tinyint(4) DEFAULT NULL,
  `camera` tinyint(4) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL,
  `discount_weekly` tinyint(4) DEFAULT NULL,
  `discount_monthly` tinyint(4) DEFAULT NULL,
  `free_ship_distance` tinyint(4) DEFAULT NULL,
  `max_ship_distance` tinyint(4) DEFAULT NULL,
  `shipping_price_km` int(11) DEFAULT NULL,
  `max_travel_distance` smallint(6) DEFAULT NULL,
  `over_max_travel_cost` int(11) DEFAULT NULL,
  `rules` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `approval` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_car_rental`
--

INSERT INTO `tb_car_rental` (`car_id`, `user_id`, `type_id`, `plate_id`, `brand`, `name`, `seatnum`, `auto`, `fuel`, `consumption`, `description`, `model_year`, `rent_price`, `convertible`, `bluetooth`, `gps`, `usb`, `kid_chair`, `map`, `camera`, `address`, `lat`, `lng`, `discount_weekly`, `discount_monthly`, `free_ship_distance`, `max_ship_distance`, `shipping_price_km`, `max_travel_distance`, `over_max_travel_cost`, `rules`, `status`, `approval`, `created_at`, `updated_at`) VALUES
(1, 1, 290, '51H - 1000', 'TOY', 'TOYOTA VIOS E', 4, 2, 1, 5, '<p>\r\nTOYOTA VIOS 2016 mới v&agrave; đẹp</p>', 2016, 650, NULL, 1, 1, 1, NULL, NULL, NULL, 'Đ. Lê Lợi, phường Bến Thành, Quận 1, Thành phố Hồ Chí Minh 700000, Việt Nam', '10.7736154', '106.7000035', 35, 35, 10, 35, 10, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-07-31 00:22:47', '2021-07-31 00:22:47'),
(2, 1, 91, '51H - 1121', 'HYU', 'HYUNDAI KONA', 4, 1, 1, 8, '<p>\r\nKona 2.0 Special AT, đăng k&yacute; th&aacute;ng 08.2020, nhiều option:</p>\r\n<p>- Camera 360 cho lưu th&ocirc;ng trong phố an to&agrave;n</p>\r\n<p>- Cảnh b&aacute;o điểm m&ugrave; tr&ecirc;n gương chiếu hậu</p>\r\n<p>- Cảnh b&aacute;o &aacute;p suất lốp</p>\r\n<p>- Cruise Control ga tự động</p>\r\n<p>-3 chế độ chạy (Comfort - Eco - Sport)</p>\r\n<p>- Apple/ Android Carplay</p>\r\n<p>- Bậc l&ecirc;n xuống cho người gi&agrave; &amp; trẻ em</p>\r\n<p>- K&iacute;nh cửa xe mờ từ h&atilde;ng cho sự ri&ecirc;ng tư</p>\r\n<p>- Miễn ph&iacute; nước suối - Pocari - khăn lạnh để sẵn tr&ecirc;n xe</p>', 2020, 750, NULL, 1, 1, 1, NULL, NULL, 1, '300a Nguyễn Tất Thành, phường 13, Quận 4, Thành phố Hồ Chí Minh 70000, Việt Nam', '10.7610355', '106.7104952', 35, 35, 10, 30, 5, 349, 5, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-07-31 00:50:44', '2021-07-31 00:50:44'),
(3, 1, 274, '51H - 1232', 'TOY', 'TOYOTA FORTUNER G', 7, 2, 2, 10, '<p>\r\nTOYOTA FORTUNER 2016 mới v&agrave; đẹp</p>', 2016, 1100, NULL, 1, 1, 1, NULL, NULL, 1, '27 Thống Nhất, p. Dĩ An, Dĩ An, Bình Dương, Việt Nam', '10.896613', '106.7523696', 35, 35, 15, 29, 6, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-07-31 01:00:57', '2021-07-31 01:00:57'),
(4, 1, 117, '51H - 1343', 'KIA', 'KIA MORNING SI', 4, 1, 1, 8, '<p>\r\nKia Morning SI-2017 số tự động, C&oacute; camera h&agrave;nh tr&igrave;nh &amp; camera l&ugrave;i , full option, bảo hiểm 2 chiều. </p>\r\n<p>Hệ thống dẫn đường Vietmap &amp; cảnh b&aacute;o tốc độ, Hệ thống xem dvd , bluetooth nghe nhạc &amp; điện thoại,..</p>', 2017, 500, NULL, 1, 1, 1, NULL, NULL, 1, 'Đ. 22 Tháng 12, An Phú, Thuận An, Bình Dương, Việt Nam', '10.9484643', '106.732302', 35, 35, 20, 30, 5, 350, 5, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-07-31 01:07:08', '2021-07-31 01:07:08'),
(5, 1, 10, '51H - 1454', 'BMW', 'BMW 320i', 4, 1, 1, 10, '<p>\r\nBMW 320i 2013</p>', 2013, 1100, NULL, 1, 1, 1, NULL, NULL, 1, '394 Phạm Văn Hai, phường 5, Tân Bình, Thành phố Hồ Chí Minh, Việt Nam', '10.789903', '106.661076', 57, 35, 12, 25, 13, 350, 4, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-07-31 01:15:33', '2021-07-31 01:15:33'),
(6, 1, 125, '51H - 1565', 'KIA', 'KIA SELTOS LUXURY', 4, 1, 1, 7, '<p>&nbsp;</p>\r\n\r\n<p>\r\nKIA Soluto Luxury 2020- xe gia đ&igrave;nh số tự động với 5 chỗ ngồi rộng r&atilde;i, cốp sau dung t&iacute;ch 475L. Những t&iacute;nh năng nổi bật :</p>\r\n<p>Cốp mở tự động</p>\r\n<p>Gương chiếu hậu gập điện</p>\r\n<p>Hệ thống ga tự động Cruise Control</p>\r\n<p>Hệ thống c&acirc;n bằng điện tử</p>\r\n<p>Khởi động bằng n&uacute;t bấm, ch&igrave;a kh&oacute;a th&ocirc;ng minh</p>', 2020, 700, NULL, 1, 1, 1, NULL, NULL, 1, '1 Lý Thường Kiệt, Tân Bình, Thành phố Hồ Chí Minh 700000, Việt Nam', '10.775731', '106.656396', 35, 35, 5, 30, 20, 350, 5, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-07-31 03:33:28', '2021-07-31 03:33:28'),
(7, 1, 290, '51H - 1676', 'TOY', 'TOYOTA VIOS E', 4, 2, 1, 5, '<p>\r\nXe vios năm sản xuất 2017 bản E số s&agrave;n , xe gia đ&igrave;nh sử dụng , xe lu&ocirc;n lu&ocirc;n sạch sẽ tho&aacute;ng m&aacute;t m&aacute;y lạnh, động cơ im ru nội thất sạch sẽ đẹp ko c&oacute; m&ugrave;i h&ocirc;i n&agrave;o tr&ecirc;n xe lu&ocirc;n trang bị l&aacute; dứa hoặc kh&oacute;m m&ugrave;i tự nhien ko phải nước hoa n&ecirc;n kh&ocirc;ng hại sức khoẻ , n&ecirc;n vậy mọi ace ai thu&ecirc; xe m&igrave;nh c&aacute;i cần nhất l&agrave; giữ xe tr&ocirc;ng t&igrave;nh trạng như bạn đầu cẩn thận hết mức c&oacute; thể cảm ơn c&aacute;c bạn nhiều lắm</p>', 2017, 650, NULL, 1, NULL, 1, NULL, NULL, NULL, '266 Lý Thường Kiệt, phường 14, Quận 10, Thành phố Hồ Chí Minh, Việt Nam', '10.7694392', '106.6585975', 35, 35, 7, 35, 20, 350, 4, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-07-31 03:38:26', '2021-07-31 03:38:26'),
(8, 1, 213, '51H - 1787', 'MIT', 'MITSUBISHI XPANDER', 7, 2, 1, 5, '<p>&nbsp;</p>\r\n\r\n<p>Xe gia đ&igrave;nh sạch sẽ tiện nghi xe (trang bị zestes 500 )vietmap s1 bản quyền ,nghe nhac xem phim ....&nbsp;</p>', 2019, 800, NULL, 1, 1, 1, NULL, NULL, 1, '792 Nguyễn Kiệm, Phường 3, Gò Vấp, Thành phố Hồ Chí Minh, Việt Nam', '10.8259072', '106.6801168', 35, 35, 5, 25, 10, 400, 5, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-07-31 03:43:23', '2021-07-31 03:43:23'),
(9, 1, 301, '51H - 1898', 'VIN', 'VINFAST FADIL', 4, 1, 1, 6, '<p>&nbsp;</p>\r\n\r\n<p>Vinfast Fadil 1.4, xe mới đăng k&yacute; 02/2021 được trang bị m&agrave;n h&igrave;nh Androi 9 inch , internet , xem youtube , camera h&agrave;nh tr&igrave;nh , camera l&ugrave;i , l&oacute;t s&agrave;n da 6D to&agrave;n xe , d&aacute;n k&iacute;nh 3M full xe , ghế da , rửa xe sạch sẽ trước khi giao xe cho qu&yacute; kh&aacute;ch</p>', 2021, 580, NULL, 1, 1, 1, NULL, NULL, 1, '336 Hai Bà Trưng, Tân Định, Quận 1, Thành phố Hồ Chí Minh, Việt Nam', '10.7901572', '106.6899514', 35, 35, 6, 30, 13, 300, 5, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-07-31 03:47:19', '2021-07-31 03:47:19'),
(10, 1, 150, '51H - 2009', 'MAZ', 'MAZDA CX5', 5, 1, 1, 8, '<p>\r\nMadaz CX5 2020 bản Premium</p>\r\n<p>Nội thất sạch đẹp. </p>\r\n<p>NHI&Ecirc;N LIỆU ĐẦY KHI NHẬN XE</p>\r\n<p>Tiện &iacute;ch: </p>\r\n<p>-Cab sạc nhanh Quick Charge</p>\r\n<p>-Khăn lạnh, nước suối.</p>\r\n<p>- Bản đồ, hệ thống cảnh b&aacute;o tốc độ.</p>\r\n<p>Hỗ trợ giao xe tận nh&agrave;</p>', 2020, 1000, NULL, 1, 1, 1, NULL, NULL, 1, '48 Hoa Sứ, Phường 7 Phú Nhuận, Phú Nhuận, Thành phố Hồ Chí Minh, Việt Nam', '10.7988545', '106.6892817', 35, 35, 7, 33, 15, 350, 5, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-07-31 03:50:58', '2021-07-31 03:50:58'),
(11, 3, 24, '51H - 2120', 'CHE', 'CHEVROLET AVEO', 4, 2, 1, 12, '<p>\r\nCHEVROLET AVEO 2016 số s&agrave;n. </p>', 2016, 3330, NULL, 1, 1, 1, NULL, NULL, 1, '127 Cống Quỳnh, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh, Việt Nam', '10.7658471', '106.6895351', 35, 35, 5, 23, 20, 300, 5, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-07-31 04:22:44', '2021-07-31 04:22:44'),
(12, 3, 145, '51H - 2231', 'MAZ', 'MAZDA 6', 5, 1, 1, 6, '<p>\r\nMazda 6.2.0 Prenium bản full option m&acirc;m 19&quot;, năm sản xuất 2017, biển số Quận 3, TP.HCM.</p>\r\n<p>Xe gia đ&igrave;nh &iacute;t sử dụng, đẹp như mới, nội thất nguy&ecirc;n bản, rất sạch sẽ, bảo dưỡng thường xuy&ecirc;n.</p>\r\n<p>Xe rất rộng r&atilde;i, an to&agrave;n, đầy đủ tiện nghi: M&agrave;n h&igrave;nh cảm ứng, m&agrave;n h&igrave;nh HUB hỗ trợ l&aacute;i xe, </p>\r\n<p>hệ thống giải tr&iacute; kết nối USB, bluetooth, 11 loa Bose &acirc;m thanh nổi, kết nối điện thoại rảnh tay, bản đồ, ghế l&aacute;i chỉnh điện, </p>\r\n<p>nhớ vị tr&iacute;, r&egrave;m che nắng ph&iacute;a sau chỉnh điện, cửa sổ trời chỉnh điện...</p>\r\n<p>Xe trang bị rất nhiều option: Cảnh b&aacute;o lệch l&agrave;n, cảnh b&aacute;o va chạm trước sau, cảnh b&aacute;o điểm m&ugrave;, </p>\r\n<p>cảm biến &aacute;p suất lốp, bơm b&aacute;nh xe tự động, camera l&ugrave;i, gạt mưa tự động, đ&egrave;n pha tự động, phanh tay điện tử,</p>\r\n<p> cần sang số tr&ecirc;n v&ocirc; lăng, kiểm so&aacute;t tốc độ tự động Cruiser Control... tất cả đều c&ograve;n mới v&agrave; \r\nhoạt động rất tốt.</p>', 2017, 1100, 1, 1, 1, 1, NULL, NULL, 1, 'Bùi Viện, phường Phạm Ngũ Lão, Quận 1, Thành phố Hồ Chí Minh, Việt Nam', '10.7667463', '106.6924759', 35, 35, 10, 25, 15, 300, 5, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-07-31 04:30:57', '2021-07-31 04:30:57'),
(13, 3, 130, '51H - 2342', 'KIA', 'KIA SORENTO', 7, 1, 1, 8, '<p>&nbsp;</p>\r\n\r\n<p>Xe số tự động đăng k&iacute; 2014</p>', 2014, 1100, 1, 1, 1, 1, NULL, NULL, 1, '45 Nguyễn Khắc Nhu, phường Cô Giang, Quận 1, Thành phố Hồ Chí Minh 700000, Việt Nam', '10.762747', '106.6932404', 35, 35, 6, 27, 12, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-07-31 04:46:53', '2021-07-31 04:46:53'),
(14, 3, 47, '51H - 2453', 'FOR', 'FORD ECOSPORT', 4, 1, 1, 7, '<p>&nbsp;</p>\r\n\r\n<p>FORD ECOSPORT 2019</p>', 2019, 750, 1, 1, 1, 1, NULL, NULL, 1, '214/B2 Nguyễn Trãi, Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh, Việt Nam', '10.765297', '106.686425', 35, 35, 3, 33, 15, 400, 5, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 00:46:04', '2021-08-01 00:46:04'),
(15, 3, 65, '51H - 2564', 'FOR', 'FORD XLS', 5, 1, 1, 10, '<p>\r\nFord Ranger AT 2021 full chức năng, đa phương tiện nghe nh&igrave;n. Xe gia đ&igrave;nh mới đẹp, nội thất sạch sẽ, nguy&ecirc;n bản, tiết kiệm nhi&ecirc;n liệu. Xe rộng r&atilde;i, tiện nghi, ph&ugrave; hợp cho gia đ&igrave;nh chở người, chở h&agrave;ng v&agrave; đi du lịch. Xe trang bị hệ thống camera l&ugrave;i, camera h&agrave;nh tr&igrave;nh t&iacute;ch hợp v&agrave; hệ thống đa phương tiện giải tr&iacute; nghe nh&igrave;n tr&ecirc;n xe trong suốt qu&aacute; tr&igrave;nh chuyến đi. </p>', 2021, 860, 1, 1, 1, 1, 1, NULL, NULL, '268 Đ. Trần Hưng Đạo, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh 700000, Việt Nam', '10.7595987', '106.6871951', 35, 35, 5, 33, 15, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 01:02:36', '2021-08-01 01:02:36'),
(16, 3, 260, '51H - 2675', 'SUZ', 'SUZUKI ERTIGA', 7, 1, 1, 6, '<p>\r\nXe Ertiga Số tự động, sản xuất 2016. Nội thất thoải m&aacute;i cho 7 người lớn với chuyến đi d&agrave;i; c&oacute; m&aacute;y x&ocirc;ng tinh dầu kh&ocirc; gi&uacute;p khử m&ugrave;i mang lại cảm gi&aacute;c dễ chịu. Đặc biệt xe tiết kiệm xăng</p>', 2016, 770, NULL, 1, NULL, 1, NULL, NULL, NULL, 'Đường D4, Tân Hưng, Quận 7, Thành phố Hồ Chí Minh, Việt Nam', '10.745051', '106.6987251', 35, 35, 10, 40, 17, 500, 4, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 01:06:22', '2021-08-01 01:06:22'),
(17, 3, 281, '51H - 2786', 'TOY', 'TOYOTA INNOVA E', 7, 2, 1, 8, '<p>\r\nTOYOTA INNOVA E 2018 Đẳng cấp doanh nh&acirc;n nội thất si&ecirc;u mới Đầy đủ tiện nghi giải tr&iacute; cho chuyến đi chơi xa c&ugrave;ng gia đ&igrave;nh v&agrave; người th&acirc;n</p>', 2018, 880, NULL, 1, 1, 1, NULL, NULL, 1, '324 Chu Văn An, phường 12, Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam', '10.8124002', '106.702409', 35, 35, 5, 30, 20, 300, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 01:10:27', '2021-08-01 01:10:27'),
(18, 3, 57, '51H - 2897', 'FOR', 'FORD FOCUS', 4, 1, 1, 5, '<p>\r\nFORD FOCUS 2019</p>\r\n\r\n<p>Xe mới năm 2019</p>\r\n<p>Xe gia đ&igrave;nh, mới, mạnh, &ecirc;m mượt, an to&agrave;n, c&aacute;ch &acirc;m rất tốt.</p>', 2019, 720, NULL, 1, 1, NULL, NULL, NULL, 1, '12 Nguyễn Ngọc Phương, phường 19, Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam', '10.790835', '106.707415', 35, 35, 10, 30, 7, 432, 2, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 01:14:18', '2021-08-01 01:14:18'),
(19, 3, 213, '51H - 3008', 'MIT', 'MITSUBISHI XPANDER', 7, 2, 1, 6, '<p>\r\nXe Xpander số s&agrave;n đăng k&yacute; 12/2019, xe gia đ&igrave;nh mới đẹp, nội thất nguy&ecirc;n bản, sạch sẽ, bảo dưỡng thường xuy&ecirc;n. Xe rộng r&atilde;i, an to&agrave;n tiện nghi. Ph&ugrave; hợp cho gia đ&igrave;nh du lịch, xe trang bị camera h&agrave;nh tr&igrave;nh, camera l&ugrave;i c&ugrave;ng nhiều tiện nghi kh&aacute;c...</p>', 2019, 800, NULL, 1, 1, 1, NULL, NULL, 1, '630 Điện Biên Phủ, Phường 22, Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam', '10.798744', '106.7185761', 35, 35, 10, 30, 10, 350, 5, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 01:18:46', '2021-08-01 01:18:46'),
(20, 3, 161, '51H - 3119', 'MER', 'MERCEDES C200', 4, 1, 1, 6, '<p>\r\nMecedes C200 2016độ C63 AMG</p>', 2016, 1880, NULL, 1, 1, 1, NULL, NULL, 1, '220 Nguyễn Hữu Cảnh, Phường 22, Bình Thạnh, Thành phố Hồ Chí Minh 700000, Việt Nam', '10.7961943', '106.7197322', 29, 35, 8, 31, 13, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 01:23:26', '2021-08-01 01:23:26'),
(21, 4, 291, '51H - 3230', 'TOY', 'TOYOTA VIOS G', 4, 1, 1, 8, '<p>\r\nTOYOTA VIOS G 2019</p>', 2019, 700, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '24 Lương Định Của, An Khánh, Quận 2, Thành phố Hồ Chí Minh, Việt Nam', '10.774915', '106.71061', 35, 35, 8, 25, 10, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 01:44:08', '2021-08-01 01:44:08'),
(22, 4, 31, '51H - 3341', 'CHE', 'CHEVROLET CRUZE', 4, 1, 1, 6, '<p>\r\nChevolet 2018 std \r\nXe đẹp cứng</p>', 2018, 700, 1, 1, 1, 1, NULL, NULL, 1, '2 Đường số 45, phường 6, Quận 4, Thành phố Hồ Chí Minh, Việt Nam', '10.757613', '106.7007605', 35, 35, 7, 31, 20, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 01:46:44', '2021-08-01 01:46:44'),
(23, 4, 187, '51H - 3452', 'MER', 'MERCEDES GLK 250', 4, 1, 1, 5, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;30t) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 30 triệu.</p>', 2013, 1550, NULL, 1, 1, 1, NULL, NULL, 1, '368c Đường Trần Não, Bình Khánh, An Lợi Đông, Quận 2, Thành phố Hồ Chí Minh, Việt Nam', '10.777106', '106.7272089', 35, 35, 7, 25, 10, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 01:49:56', '2021-08-01 01:49:56'),
(24, 4, 302, '51H - 3563', 'VIN', 'VINFAST LUX A 2.0', 5, 1, 1, 7, '<p>\r\nVINFAST LUX A 2.0 2021</p>', 2021, 1100, 1, 1, 1, 1, NULL, NULL, 1, '62 Hoàng Thế Thiện, An Lợi Đông, Quận 2, Thành phố Hồ Chí Minh, Việt Nam', '10.7740379', '106.72787', 35, 35, 7, 36, 15, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 01:52:30', '2021-08-01 01:52:30'),
(25, 4, 150, '51H - 3674', 'MAZ', 'MAZDA CX5', 5, 1, 1, 10, '\r\n<p>MAZDA CX5 AWD 2015</p>\r\n<p>Xe 5 chỗ rộng r&atilde;i, gầm cao, cốp đểđồ thoải m&aacute;i. Xe tiết kiệm xăng, hoạt đ&ocirc;ng tốt, bảo dưỡng thường xuy&ecirc;n, sạch sẽ, kh&ocirc;ng m&ugrave;i</p>', 2015, 1000, 1, 1, 1, 1, NULL, NULL, 1, '51 Đ. Quốc Hương, Thảo Điền, Quận 2, Thành phố Hồ Chí Minh, Việt Nam', '10.8052475', '106.7312977', 35, 35, 10, 28, 10, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 01:56:08', '2021-08-01 01:56:08'),
(26, 4, 274, '51H - 3785', 'TOY', 'TOYOTA FORTUNER G', 7, 1, 1, 7, '<p>\r\nXe fortuner rộng r&atilde;i sạch sẽ,m&aacute;y lạnh ko m&ugrave;i h&ocirc;i</p>', 2013, 1100, NULL, 1, 1, 1, 1, NULL, 1, '57 Xuân Thủy, Thảo Điền, Quận 2, Thành phố Hồ Chí Minh 700000, Việt Nam', '10.8037045', '106.7327935', 35, 35, 10, 25, 15, 381, 2, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 02:00:00', '2021-08-01 02:00:00'),
(27, 4, 208, '51H - 3896', 'MIT', 'MITSUBISHI OUTLANDER', 7, 1, 1, 8, '<p>\r\nMITSUBISHI OUTLANDER 2020</p>', 2020, 970, NULL, 1, 1, 1, NULL, NULL, 1, 'Đường Số 66, Thảo Điền, Quận 2, Thành phố Hồ Chí Minh, Việt Nam', '10.8138534', '106.7278206', 35, 35, 5, 23, 10, 416, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 02:03:54', '2021-08-01 02:03:54'),
(28, 4, 209, '51H - 4007', 'MIT', 'MITSUBISHI PAJERO SPORT', 7, 2, 1, 8, '<p>&nbsp;</p>\r\n\r\n<p>Xe mới, đẹp, m&agrave;u trắng v&agrave; đ&atilde; được trang bị tất cả tiện nghi. V&igrave; xe gđ n&ecirc;n m&aacute;y &ecirc;m, động cơ mạnh, xe đ&atilde; d&aacute;n phim c&aacute;ch nhiệt, kh&ocirc;ng sợ nắng hắt v&agrave;o xe</p>', 2017, 880, NULL, 1, 1, 1, 1, NULL, 1, '159 Xa lộ Hà Nội, Thảo Điền, Quận 2, Thành phố Hồ Chí Minh, Việt Nam', '10.8027441', '106.7425427', 35, 35, 9, 28, 5, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 02:08:42', '2021-08-01 02:08:42'),
(29, 4, 63, '51H - 4118', 'FOR', 'FORD RANGER WILDTRAK', 5, 1, 2, 8, '<p>&nbsp;</p>\r\n\r\n<p>Ford Ranger Wildtrack bản 2 cầu 2021 mới</p>\r\n\r\n<p>Xe gia đ&igrave;nh đi , sạch sẽ . Đầy đủ tiện nghi , c&oacute; rửa xe miền ph&iacute; cho kh&aacute;ch h&agrave;ng</p>\r\n\r\n<p>Xe gia đ&igrave;nh , bảo dưỡng định kỳ .</p>\r\n\r\n<p>Đ&atilde; n&acirc;ng cấp &acirc;m thanh, kết nối Apple Carplay, Android Auto, xem videos qua usb M&aacute;y dầu , tiết kiệm nhi&ecirc;n liệu</p>', 2021, 950, NULL, 1, 1, NULL, NULL, NULL, 1, 'Đường Phạm Văn Chí, phường 8, Quận 6, Thành phố Hồ Chí Minh 700000, Việt Nam', '10.7404114', '106.638771', 35, 35, 5, 25, 15, 300, 5, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 02:14:01', '2021-08-01 02:14:01');
INSERT INTO `tb_car_rental` (`car_id`, `user_id`, `type_id`, `plate_id`, `brand`, `name`, `seatnum`, `auto`, `fuel`, `consumption`, `description`, `model_year`, `rent_price`, `convertible`, `bluetooth`, `gps`, `usb`, `kid_chair`, `map`, `camera`, `address`, `lat`, `lng`, `discount_weekly`, `discount_monthly`, `free_ship_distance`, `max_ship_distance`, `shipping_price_km`, `max_travel_distance`, `over_max_travel_cost`, `rules`, `status`, `approval`, `created_at`, `updated_at`) VALUES
(30, 4, 29, '51H - 4229', 'CHE', 'CHEVROLET COLORADO LTZ', 5, 2, 2, 7, '<p>&nbsp;</p>\r\n\r\n<p>Xe mới, đầy đủ tiện &iacute;ch , c&oacute; th&ugrave;ng chứa đồ rộng r&atilde;i, mức ti&ecirc;u thụ nhi&ecirc;n liệu thấp. Xe sạch sẽ v&agrave; đẹp</p>', 2018, 850, NULL, 1, NULL, 1, NULL, NULL, 1, '1646a Võ Văn Kiệt, phường 16, Quận 8, Thành phố Hồ Chí Minh 700000, Việt Nam', '10.7292212', '106.6234267', 35, 35, 10, 27, 8, 340, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 02:26:21', '2021-08-01 02:26:21'),
(31, 5, 266, '51H - 4340', 'TOY', 'TOYOTA CAMRY', 5, 1, 1, 7, '<p>&nbsp;</p>\r\n\r\n<p>TOYOTA CAMRY 2020</p>', 2020, 1250, NULL, 1, 1, 1, NULL, NULL, 1, '425 Kinh Dương Vương, An Lạc, Bình Tân, Thành phố Hồ Chí Minh 70000, Việt Nam', '10.7393288', '106.6171763', 35, 35, 12, 25, 12, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 02:50:28', '2021-08-01 02:50:28'),
(32, 5, 111, '51H - 4451', 'KIA', 'KIA CARENS', 7, 2, 1, 5, '<p>&nbsp;</p>\r\n\r\n<p>m&agrave;n h&igrave;nh DVD 9 inchs, camera360 thuận tiện đi đường n&ocirc;ng th&ocirc;n miền T&acirc;y, 6 cảm biến trước sau, c&oacute; k&iacute;ch b&igrave;nh, bơm lốp, kh&ocirc;ng giao xe t&acirc;̣n nơi nhưng có th&ecirc;̉ giao xe trước giờ thu&ecirc; 01 giờ đ&ecirc;̉ quý khách kh&ocirc;ng bị đ&ocirc;̣ng thời gian. Thanh to&aacute;n tiền mặt hoặc qua t&agrave;i khoản ng&acirc;n h&agrave;ng Vietcombank, Vietinbank. kh&ocirc;ng phụ thu ph&iacute; rửa xe.</p>', 2012, 810, 1, 1, 1, 1, NULL, NULL, 1, '3 Đường Số 17A, Bình Trị Đông B, Bình Tân, Thành phố Hồ Chí Minh, Việt Nam', '10.7409663', '106.609145', 35, 35, 10, 25, 7, 500, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 02:56:28', '2021-08-01 02:56:28'),
(33, 5, 92, '51H - 4562', 'HYU', 'HYUNDAI SANTA FE', 7, 1, 1, 6, '<p>\r\nHYUNDAI SANTA FE 2020 full option bản cao cấp nhất, mới nhận xe th&aacute;ng 5/2020</p>', 2020, 1100, 1, 1, 1, 1, NULL, NULL, 1, '16 Đường số 2, Tân Tạo A, Bình Tân, Thành phố Hồ Chí Minh, Việt Nam', '10.7461038', '106.5902803', 35, 35, 9, 25, 10, 401, 4, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 03:04:00', '2021-08-01 03:04:00'),
(34, 5, 213, '51H - 4673', 'MIT', 'MITSUBISHI XPANDER', 7, 1, 1, 6, '<p><br />\r\n</p>\r\n\r\n<p>Xe Xpander Cross số tự động sx 2020, đăng k&yacute; t2/2021, xe gia đ&igrave;nh mới đẹp, nội thất sạch sẽ, bảo dưỡng định k&igrave;. Xe rộng r&atilde;i, an to&agrave;n, tiện nghi. Ph&ugrave; hợp cho gia đ&igrave;nh đi du lịch, phượt, cắm trại .v.v...</p>\r\n\r\n<p>Xe được trang bị camera h&agrave;nh tr&igrave;nh, camera l&ugrave;i, cảm biến l&ugrave;i, .v.v... v&agrave; nh&igrave;u tiện nghi kh&aacute;c.</p>', 2021, 800, NULL, 1, 1, 1, NULL, NULL, 1, '1231 Quốc lộ 1A, Bình Trị Đông B, Bình Tân, Thành phố Hồ Chí Minh, Việt Nam', '10.7329288', '106.6027879', 47, 35, 11, 31, 13, 342, 4, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 03:09:41', '2021-08-01 03:09:41'),
(35, 5, 73, '51H - 4784', 'HON', 'HONDA CIVIC', 5, 1, 1, 6, '<p>&nbsp;</p>\r\n\r\n<p>HONDA CIVIC 1.5 Turbo( full option)</p>', 2017, 1000, 1, 1, 1, 1, NULL, NULL, 1, '199 Đường số 7, Bình Trị Đông B, Bình Tân, Thành phố Hồ Chí Minh, Việt Nam', '10.7514106', '106.6145559', 35, 35, 20, 29, 10, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 03:15:49', '2021-08-01 03:15:49'),
(36, 5, 40, '51H - 4895', 'DAE', 'DAEWOO LACETTI', 5, 1, 1, 6, '<p>\r\nXe gia đ&igrave;nh, sạch sẽ, chủ xe nhiệt t&igrave;nh. Hoạt động &ecirc;m &aacute;i. Số tự động dễ vận h&agrave;nh</p>', 2011, 530, 1, 1, 1, 1, NULL, NULL, 1, 'Đường số 7A, Bình Hưng, Bình Chánh, Thành phố Hồ Chí Minh, Việt Nam', '10.7286685', '106.6894945', 35, 35, 10, 31, 5, 300, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 03:19:27', '2021-08-01 03:19:27'),
(37, 5, 113, '51H - 5006', 'KIA', 'KIA CERATO', 4, 1, 1, 5, '<p>&nbsp;</p>\r\n\r\n<p>D&ograve;ng xe tầm trung với nhiều t&iacute;nh năng option đầy đủ, kiểu d&aacute;ng sang chảnh thể thao c&aacute; t&iacute;nh</p>', 2017, 760, 1, 1, 1, 1, NULL, NULL, NULL, 'Đường số 7, Khu dân cư Trung Sơn, Bình Hưng, Bình Chánh, Thành phố Hồ Chí Minh, Việt Nam', '10.7357689', '106.6901407', 35, 35, 10, 25, 5, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 03:26:14', '2021-08-01 03:26:14'),
(38, 5, 145, '51H - 5117', 'MAZ', 'MAZDA 6', 4, 1, 1, 8, '<p>\r\nMazda 6 bản Full Options, m&agrave;u trắng, số tự động. Xe rộng r&atilde;i,sang trọng ph&ugrave; hợp cho những buổi gặp mặt đối t&aacute;c hoặc tiệc t&ugrave;ng.</p>', 2018, 1100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Khu dân cư 6B Intresco, Bình Hưng, Bình Chánh, Thành phố Hồ Chí Minh, Việt Nam', '10.7197625', '106.687347', 35, 35, 13, 30, 6, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 03:29:02', '2021-08-01 03:29:02'),
(39, 5, 62, '51H - 5228', 'FOR', 'FORD RANGER RAPTOR', 5, 1, 2, 8, '<p>\r\nXe đời 2020</p>\r\n<p>Số tự động</p>\r\n<p>Chạy dầu tiết kiệm nhi&ecirc;n liệu</p>\r\n<p>Đẳng cấp, &ecirc;m &aacute;i</p>', 2020, 1300, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9 Đ.Nguyễn Hữu Thọ, Phước Kiển, Nhà Bè, Thành phố Hồ Chí Minh, Việt Nam', '10.7101201', '106.7085957', 35, 35, 10, 28, 10, 360, 5, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 03:35:58', '2021-08-01 03:35:58'),
(40, 6, 226, '51H - 5339', 'NIS', 'NISSAN NAVARA EL', 4, 1, 2, 7, '<p>\r\nXe mới mua th&aacute;ng 4/2020, sử dụng c&aacute; nh&acirc;n n&ecirc;n mọi thứ c&ograve;n rất mới v&agrave; sạch</p>\r\n<p>Xe sử dụng hệ thống treo đa điểm thay cho phuộc nh&iacute;p n&ecirc;n &ecirc;m như xe 7 chổ, &acirc;m thanh cực chất.</p>\r\n<p>M&aacute;y mạnh, gầm cao, thể thao, c&aacute; t&iacute;nh!</p>', 2020, 830, NULL, 1, 1, 1, NULL, NULL, 1, 'Bình Hòa 3, Bình Hòa, Thuận An, Bình Dương, Việt Nam', '10.896207', '106.7126436', 35, 35, 10, 32, 20, 350, 5, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 09:15:11', '2021-08-01 09:15:11'),
(41, 6, 143, '51H - 5450', 'MAZ', 'MAZDA 3', 4, 1, 1, 5, '<p>\r\nMaz3-2018 facelit,thắng tay điện tử,m&agrave;u trắng.mẫu m&atilde; đẹp,tiết kiệm nhi&ecirc;n liệu.</p>', 2014, 800, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ngô Văn Sở, p. Dĩ An, Dĩ An, Bình Dương, Việt Nam', '10.901637', '106.7667779', 35, 35, 16, 29, 15, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 09:18:23', '2021-08-01 09:18:23'),
(42, 6, 82, '51H - 5561', 'HYU', 'HYUNDAI ACCENT', 5, 1, 1, 6, '<p>\r\nHuyndai accent số tự động. Lấy th&aacute;ng 8/2019.</p>\r\n<p>Xe gia đ&igrave;nh. Nội thất ghế bọc da sang trọng, sạch sẽ. C&oacute; tượng l&ograve;ng ch&uacute;a thương x&oacute;t được l&agrave;m ph&eacute;p ri&ecirc;ng.</p>\r\n<p>Nội thất xe hiện đại, tiện nghi với cảm biến &aacute;p suất lốp. Cảm biến l&ugrave;i. Đ&egrave;n pha tự động. Gạt mưa tự động. Đầu AV t&iacute;ch hợp nhiều t&iacute;nh năng n&ecirc;n nghe nhạc xem phim radio thoải m&aacute;i. M&aacute;y massage cổ. Camera h&agrave;nh tr&igrave;nh gương.</p>\r\n<p>Xe rộng r&atilde;i đủ chỗ cho 4 người lớn+1 t&agrave;i xế. Xe m&igrave;nh cấm h&uacute;t thuốc trong xe. Để cho xe kh&ocirc;ng bị &aacute;m m&ugrave;i v&agrave; lu&ocirc;n sạch cho người thu&ecirc; sau. N&ecirc;n ac vui l&ograve;ng lưu &yacute; gi&ugrave;m e nh&eacute;. E Xin cảm ơn. Ch&uacute;c ac c&oacute; chuyến đi an to&agrave;n vui vẻ</p>', 2019, 680, NULL, 1, 1, 1, NULL, NULL, 1, 'Lái Thiêu, Thuận An, Bình Dương, Việt Nam', '10.904865', '106.6999563', 35, 35, 10, 28, 12, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 09:21:47', '2021-08-01 09:21:47'),
(43, 6, 11, '51H - 5672', 'BMW', 'BMW 325i', 5, 1, 1, 6, '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>D&ugrave; đ&atilde; cũ BMW nhưng Series 3 đời E46 vẫn đủ cuốn h&uacute;t để nhắc nhở ch&uacute;ng ta định nghĩa đ&iacute;ch thực của cụm từ &ldquo;The Ultimate Driving Machine&rdquo;.</p>\r\n\r\n<p>Từng đường n&eacute;t đều l&agrave; một phần nhỏ g&oacute;p phần tạo n&ecirc;n một thiết kế tổng thể gọn g&agrave;ng v&agrave; thể thao. Bao quanh th&acirc;n xe l&agrave; một dải nhựa đen &ndash; thiết kế tương đồng với đ&agrave;n anh Series 5 E39, tạo vẻ đứng đắn, gọn g&agrave;ng cho chiếc 325i. T&ocirc;i gọi đường nẹp đen n&agrave;y l&agrave; một chiếc thắt lưng da cao cấp của một qu&yacute; &ocirc;ng gọn g&agrave;ng, chỉn chu. Phần đầu xe cũng rất gọn g&agrave;ng với mặt ca lăng quả thận m&agrave;u đen, 2 cụm đ&egrave;n pha xenon với c&aacute;c dải LED tr&ograve;n &ldquo;Angel Eyes&rdquo; đặc trưng. Sau 15 năm, đ&acirc;y vẫn l&agrave; 1 bộ mặt c&oacute; thể thu h&uacute;t sự ch&uacute; &yacute; tr&ecirc;n đường phố.</p>\r\n\r\n<p>Vậy khi bạn chỉ đơn giản l&agrave; l&aacute;i xe tr&ecirc;n cao tốc th&igrave; sao? Khả năng c&aacute;ch &acirc;m tương đối tốt của BMW 325i 2004 được thể hiện ở chỉ số độ ồn 65 dB ở tốc độ80 km/h. Đ&acirc;y l&agrave; một mức rất tốt so với 1 chiếc xe cũ. Kh&ocirc;ng chỉ c&aacute;ch &acirc;m tốt m&agrave; khung gầm cứng kết hợp với hệ thống treo tốt mang lại sự &ecirc;m &aacute;i rất dễ chịu, nhất l&agrave; đi đường xấu, v&iacute; dụ như cao tốc Long Th&agrave;nh - Dầu Gi&acirc;y. Kết th&uacute;c h&agrave;nh tr&igrave;nh trải nghiệm, chiếc BMW 325i n&agrave;y ti&ecirc;u thụ trung b&igrave;nh 11,6 l&iacute;t xăng/100 km, một con số chấp nhận được so với trải nghiệm n&oacute; mang lại</p>', 2002, 1200, 1, 1, 1, 1, 1, NULL, NULL, 'Đ. Tú Xương, Lái Thiêu, Thuận An, Bình Dương, Việt Nam', '10.902657', '106.7111104', 35, 35, 12, 37, 12, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 09:26:32', '2021-08-01 09:26:32'),
(44, 6, 49, '51H - 5783', 'FOR', 'FORD EVEREST', 7, 1, 2, 6, '<p>&nbsp;</p>\r\n\r\n<p>Ford Everest bản 2 cầu sản xuất năm 2020.Xe gia đ&igrave;nh sạch sẽ,tiện nghi,an to&agrave;n. C&oacute; bảo hiểm vật chất xe.</p>', 2020, 1180, 1, 1, 1, 1, 1, NULL, 1, 'ĐT743, Thuận An, Bình Dương, Việt Nam', '10.928708', '106.7418453', 35, 35, 10, 31, 5, 347, 5, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 09:31:00', '2021-08-01 09:31:00'),
(45, 6, 277, '51H - 5894', 'TOY', 'TOYOTA FORTUNER V', 7, 1, 1, 9, '<p>&nbsp;</p>\r\n\r\n<p>Fortuner V số tự động, xe gia đ&igrave;nh sạch sẽ, tiện nghi, trang bị m&agrave;n h&igrave;nh android, ph&ugrave; hợp cho gia đ&igrave;nh đi du lịch, cơ quan đi c&ocirc;ng t&aacute;c ngắn ng&agrave;y, d&agrave;i ng&agrave;y.</p>', 2012, 1100, NULL, 1, 1, 1, NULL, NULL, 1, 'phường Thống Nhất, thành phố Biên Hòa, Đồng Nai, Việt Nam', '10.9522153', '106.8335215', 35, 35, 20, 33, 9, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 09:35:51', '2021-08-01 09:35:51'),
(46, 6, 28, '51H - 6005', 'CHE', 'CHEVROLET COLORADO LT', 4, 2, 2, 6, '<p>&nbsp;</p>\r\n\r\n<p>CHEVROLET COLORADO LT 2017</p>', 2017, 850, NULL, 1, 1, 1, NULL, NULL, NULL, '20 Thống Nhất, KCN Sóng Thần, p. Dĩ An, Dĩ An, Bình Dương, Việt Nam', '10.896613', '106.7523696', 35, 35, 13, 32, 12, 364, 4, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 09:40:54', '2021-08-01 09:40:54'),
(47, 6, 63, '51H - 6116', 'FOR', 'FORD RANGER WILDTRAK', 5, 1, 2, 9, '<p>\r\nFORD RANGER WILDTRAK 2015</p>', 2015, 950, NULL, 1, 1, 1, NULL, NULL, 1, '3-9 Đường B, p. Dĩ An, Dĩ An, Bình Dương, Việt Nam', '10.8752555', '106.7529396', 35, 35, 14, 32, 6, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 09:57:14', '2021-08-01 09:57:14'),
(48, 6, 128, '51H - 6227', 'KIA', 'KIA SOLUTO DELUXE', 4, 1, 1, 6, '<p>&nbsp;</p>\r\n\r\n<p>Xe mới gia đ&igrave;nh sử dụng tiện nghi giải tr&iacute; đầy đủ.</p>', 2020, 630, NULL, 1, 1, 1, NULL, NULL, 1, '117/2F Đường Đông Minh, Đông Hòa, Dĩ An, Bình Dương, Việt Nam', '10.8975661', '106.7724793', 35, 35, 10, 36, 6, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 10:00:11', '2021-08-01 10:00:11'),
(49, 6, 91, '51H - 6338', 'HYU', 'HYUNDAI KONA', 5, 1, 1, 5, '<p>\r\nHyundai Kona 2.0 Special 2019.</p>\r\n<p>Xe gia đ&igrave;nh sử dụng, sạch sẽ, xe c&ograve;n rất mới th&iacute;ch hợp cho gia đ&igrave;nh du lịch.</p>', 2019, 750, NULL, 1, 1, 1, NULL, NULL, 1, '27 Đ. Số 11, Linh Xuân, Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '10.8818185', '106.7674341', 35, 35, 14, 28, 12, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 10:03:31', '2021-08-01 10:03:31'),
(50, 6, 100, '51H - 6449', 'ISU', 'ISUZU MUX', 7, 1, 2, 8, '<p>&nbsp;</p>\r\n\r\n<p>Xe ISUZU MUX số tự động m&aacute;y dầu. 7c r&ocirc;ng r&atilde;i. Hệ thống giải tr&iacute; 2 m&agrave;n h&igrave;nh. apple carplay kết nối điện thoại với m&agrave;n h&igrave;nh</p>', 2019, 1160, NULL, 1, 1, 1, NULL, NULL, 1, '5 Đường số 6, Linh Xuân, Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '10.8788122', '106.7673272', 35, 35, 13, 30, 7, 400, 3, '<p>\r\n1. Chấp nhận Hộ khẩu Th&agrave;nh phố/KT3 Th&agrave;nh phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)\r\nCMND v&agrave; GPLX đối chiếu</p>\r\n<p>2. T&agrave;i sản đặt cọc (1 trong 2 h&igrave;nh thức)</p>\r\n<p>- Xe m&aacute;y (gi&aacute; trị &gt;15triệu) + C&agrave; vẹt (bản gốc)</p>\r\n<p>- Hoặc cọc tiền mặt 15 triệu.</p>\r\n\r\n<p>* Qu&yacute; kh&aacute;ch lưu &yacute; một số qui định sau:\r\n<p>Kh&ocirc;ng sử dụng xe thu&ecirc; v&agrave;o mục đ&iacute;ch phi ph&aacute;p, tr&aacute;i ph&aacute;p luật</p>\r\n<p>Kh&ocirc;ng được sử dụng xe thu&ecirc; để cầm cố hay thế chấp, sử dụng đ&uacute;ng mục đ&iacute;ch</p>\r\n<p>Kh&ocirc;ng h&uacute;t thuốc,ăn kẹo cao su xả r&aacute;c trong xe</p>\r\n<p>Kh&ocirc;ng chở h&agrave;ng quốc cấm dễ ch&aacute;y nổ,hoa quả thưc phẩm lưu m&ugrave;i trong xe.</p>\r\n<p>Khi trả xe, kh&aacute;ch h&agrave;ng vui l&ograve;ng vệ sinh sạch sẽ hoặc gửi phụ thu th&ecirc;m ph&iacute; rửa xe, h&uacute;t bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)</p> \r\n<p>Tr&acirc;n trọng cảm ơn, ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; những chuyến đi tuyệt vời!</p>', 2, NULL, '2021-08-01 10:07:57', '2021-08-01 10:07:57');

-- --------------------------------------------------------

--
-- Table structure for table `tb_car_type`
--

CREATE TABLE `tb_car_type` (
  `type_id` int(11) NOT NULL,
  `mfg_id` varchar(20) DEFAULT NULL,
  `model` varchar(50) NOT NULL,
  `suggest_price` int(11) NOT NULL,
  `fuel_type` tinyint(4) NOT NULL,
  `seatnum` tinyint(11) NOT NULL,
  `car_style` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_car_type`
--

INSERT INTO `tb_car_type` (`type_id`, `mfg_id`, `model`, `suggest_price`, `fuel_type`, `seatnum`, `car_style`) VALUES
(1, 'AUD', 'AUDI A4', 1540, 0, 4, 'SEDAN'),
(2, 'AUD', 'AUDI A5', 1100, 0, 4, 'SEDAN'),
(3, 'AUD', 'AUDI A6', 3310, 0, 4, 'SEDAN'),
(4, 'AUD', 'AUDI TTS', 1880, 0, 5, 'SUV'),
(5, 'BAI', 'BAIC BEIJING X7', 760, 0, 5, 'SUV'),
(6, 'BAI', 'BAIC CHANGHE Q7', 750, 0, 4, 'SUV'),
(7, 'BAI', 'BAIC X55', 680, 0, 5, 'SUV'),
(8, 'BEN', 'BENTLEY CONTINENTAL', 2210, 0, 2, 'COUPE'),
(9, 'BEN', 'BENTLEY GT SPORT', 2210, 0, 2, 'COUPE'),
(10, 'BMW', 'BMW 320i', 1100, 0, 4, 'SEDAN'),
(11, 'BMW', 'BMW 325i', 1200, 0, 5, 'SEDAN'),
(12, 'BMW', 'BMW 335i SPORT', 3320, 0, 2, 'COUPE'),
(13, 'BMW', 'BMW 420i CABRIOLET', 2850, 0, 4, 'SEDAN'),
(14, 'BMW', 'BMW 520i', 2760, 0, 4, 'SEDAN'),
(15, 'BMW', 'BMW 523i', 3320, 0, 4, 'SEDAN'),
(16, 'BMW', 'BMW 530i', 1990, 0, 4, 'SEDAN'),
(17, 'BMW', 'BMW 730Li', 4210, 0, 4, 'SEDAN'),
(18, 'BMW', 'BMW 740Li', 8000, 0, 4, 'SEDAN'),
(19, 'BMW', 'BMW 760Li', 13680, 0, 4, 'SEDAN'),
(20, 'BMW', 'BMW i8', 3330, 0, 4, 'COUPE'),
(21, 'BMW', 'BMW X5', 2210, 0, 5, 'SUV'),
(22, 'BMW', 'BMW X6', 3540, 0, 4, 'SUV'),
(23, 'BMW', 'BMW Z4 SPORT', 3330, 0, 2, 'COUPE'),
(24, 'CHE', 'CHEVROLET AVEO', 3330, 0, 4, 'HATCHBACK'),
(25, 'CHE', 'CHEVROLET CAMARO', 3090, 0, 2, 'COUPE'),
(26, 'CHE', 'CHEVROLET CAPTIVA', 900, 0, 5, 'SUV'),
(27, 'CHE', 'CHEVROLET COLORADO HIGH COUNTRY', 950, 0, 4, 'PICK-UP'),
(28, 'CHE', 'CHEVROLET COLORADO LT', 850, 0, 4, 'PICK-UP'),
(29, 'CHE', 'CHEVROLET COLORADO LTZ', 850, 0, 4, 'PICK-UP'),
(30, 'CHE', 'CHEVROLET COLORADO STORM', 870, 0, 4, 'PICK-UP'),
(31, 'CHE', 'CHEVROLET CRUZE', 700, 0, 4, 'SEDAN'),
(32, 'CHE', 'CHEVROLET DUO (VAN)', 430, 0, 2, 'MINI'),
(33, 'CHE', 'CHEVROLET ORLANDO', 880, 0, 7, 'SUV'),
(34, 'CHE', 'CHEVROLET SPARK', 450, 0, 5, 'MINI'),
(35, 'CHE', 'CHEVROLET TRAILBLAZER', 990, 0, 5, 'SUV'),
(36, 'CHE', 'CHEVROLET TRAX', 750, 0, 4, 'HATCHBACK'),
(37, 'CHE', 'CHEVROLET VIVANT', 720, 0, 5, 'HATCHBACK'),
(38, 'DAE', 'DAEWOO DCX', 530, 0, 4, 'SEDAN'),
(39, 'DAE', 'DAEWOO GENTRA', 600, 0, 4, 'SEDAN'),
(40, 'DAE', 'DAEWOO LACETTI', 530, 0, 4, 'SEDAN'),
(41, 'DAE', 'DAEWOO LANOS', 700, 0, 4, 'SEDAN'),
(42, 'DAE', 'DAEWOO MAGNUS', 530, 0, 4, 'SEDAN'),
(43, 'DAE', 'DAEWOO MATIZ', 540, 0, 4, 'HATCHBACK'),
(44, 'DAI', 'DAIHATSU CHARADE', 350, 0, 5, 'HATCHBACK'),
(45, 'DON', 'DONGFENGH LINGZHI M3', 489, 0, 5, 'CUV'),
(46, 'FIA', 'FIAT ALBEA', 390, 0, 4, 'SEDAN'),
(47, 'FOR', 'FORD ECOSPORT', 750, 0, 5, 'SUV'),
(48, 'FOR', 'FORD ESCAPE', 830, 0, 5, 'SUV'),
(49, 'FOR', 'FORD EVEREST', 1180, 1, 7, 'SUV'),
(50, 'FOR', 'FORD EVEREST AMBIENTE', 1260, 1, 7, 'SUV'),
(51, 'FOR', 'FORD EVEREST TITANIUM', 1320, 1, 7, 'SUV'),
(52, 'FOR', 'FORD EVEREST TREND', 1260, 1, 7, 'SUV'),
(53, 'FOR', 'FORD EXPLORER', 2320, 0, 7, 'SUV'),
(54, 'FOR', 'FORD F-150 RAPTOR', 4000, 0, 4, 'PICK-UP'),
(55, 'FOR', 'FORD FIESTA', 750, 0, 4, 'SEDAN'),
(56, 'FOR', 'FORD FIESTA HATCHBACK', 720, 0, 5, 'HATCHBACK'),
(57, 'FOR', 'FORD FOCUS', 720, 0, 4, 'SEDAN'),
(58, 'FOR', 'FORD FOCUS HATCHBACK', 700, 0, 4, 'HATCHBACK'),
(59, 'FOR', 'FORD IMAX', 990, 0, 4, 'SEDAN'),
(60, 'FOR', 'FORD LASER', 500, 0, 4, 'SEDAN'),
(61, 'FOR', 'FORD MONDEO (FUSION)', 880, 0, 5, 'SEDAN'),
(62, 'FOR', 'FORD RANGER RAPTOR', 1300, 0, 4, 'PICK-UP'),
(63, 'FOR', 'FORD RANGER WILDTRAK', 950, 1, 4, 'PICK-UP'),
(64, 'FOR', 'FORD RANGER XL', 860, 1, 4, 'PICK-UP'),
(65, 'FOR', 'FORD XLS', 860, 0, 4, 'PICK-UP'),
(66, 'FOR', 'FORD XLT', 860, 0, 4, 'PICK-UP'),
(67, 'GEE', 'GEELY EMGRAND EC718', 550, 0, 5, 'HATCHBACK'),
(68, 'HAI', 'HAIMA 3', 720, 0, 5, 'SEDAN'),
(69, 'HON', 'HONDA ACCORD', 1370, 0, 5, 'SEDAN'),
(70, 'HON', 'HONDA BRIO G', 1370, 0, 5, 'HATCHBACK'),
(71, 'HON', 'HONDA BRIO RS', 520, 0, 5, 'HATCHBACK'),
(72, 'HON', 'HONDA CITY', 750, 0, 5, 'SEDAN'),
(73, 'HON', 'HONDA CIVIC', 1000, 0, 5, 'SEDAN'),
(74, 'HON', 'HONDA CRV', 1100, 0, 7, 'SUV'),
(75, 'HON', 'HONDA CRV-E', 1160, 0, 7, 'SUV'),
(76, 'HON', 'HONDA CRV-G', 1160, 0, 7, 'SUV'),
(77, 'HON', 'HONDA CRV-L', 1220, 0, 7, 'SUV'),
(78, 'HON', 'HONDA HRV G', 940, 0, 5, 'SUV'),
(79, 'HON', 'HONDA HRV L', 1050, 0, 5, 'SUV'),
(80, 'HON', 'HONDA JAZZ', 750, 0, 5, 'HATCHBACK'),
(81, 'HON', 'HONDA ODYSSEY', 1050, 0, 9, 'SUV'),
(82, 'HYU', 'HYUNDAI ACCENT', 680, 0, 5, 'SEDAN'),
(83, 'HYU', 'HYUNDAI AVANTE', 660, 0, 5, 'SEDAN'),
(84, 'HYU', 'HYUNDAI ELANTRA', 750, 0, 5, 'SEDAN'),
(85, 'HYU', 'HYUNDAI GETZ', 480, 0, 5, 'HATCHBACK'),
(86, 'HYU', 'HYUNDAI GRAND I10', 462, 0, 4, 'MINI'),
(87, 'HYU', 'HYUNDAI GRAND I10 SEDAN', 525, 0, 4, 'SEDAN'),
(88, 'HYU', 'HYUNDAI GRAND I20', 640, 0, 5, 'HATCHBACK'),
(89, 'HYU', 'HYUNDAI GRAND STAREX', 1160, 0, 9, 'SUV'),
(90, 'HYU', 'HYUNDAI I30 CW', 610, 0, 5, 'HATCHBACK'),
(91, 'HYU', 'HYUNDAI KONA', 750, 0, 5, 'SUV'),
(92, 'HYU', 'HYUNDAI SANTA FE', 1100, 1, 7, 'SUV'),
(93, 'HYU', 'HYUNDAI SONATA', 1050, 0, 5, 'SEDAN'),
(94, 'HYU', 'HYUNDAI TUCSON', 950, 0, 5, 'SUV'),
(95, 'HYU', 'HYUNDAI VERACRUZ', 890, 0, 7, 'SUV'),
(96, 'HYU', 'HYUNDAI VERNA', 360, 0, 5, 'SEDAN'),
(97, 'ISU', 'ISUZU D-MAX LS', 790, 1, 4, 'PICK-UP'),
(98, 'ISU', 'ISUZU D-MAX LS PRESTIGE', 880, 1, 4, 'PICK-UP'),
(99, 'ISU', 'ISUZU HI LANDER', 800, 0, 7, 'SUV'),
(100, 'ISU', 'ISUZU MUX', 1160, 1, 7, 'SUV'),
(101, 'JAG', 'ISUZU TROOPER', 850, 0, 7, 'SUP'),
(102, 'JAG', 'JAGUAR E-PACE R-DYNAMIC 2.0L', 2990, 0, 5, 'SUV'),
(103, 'JAG', 'JAGUAR E-PACE R-DYNAMIC S 2.0L', 2800, 0, 5, 'SUV'),
(104, 'JAG', 'JAGUAR E-PACE S 2.0L', 2800, 0, 5, 'SUV'),
(105, 'JAG', 'JAGUAR F-PACE PRESTIGE', 3350, 0, 7, 'SUV'),
(106, 'JAG', 'JAGUAR F-PACE PURE', 3050, 0, 7, 'SUV'),
(107, 'JAG', 'JAGUAR F-PACE R-SPORT', 3900, 0, 7, 'SUV'),
(108, 'JAG', 'JAGUAR XE', 2300, 0, 4, 'SEDAN'),
(109, 'JAG', 'JAGUAR XF', 3210, 0, 4, 'SEDAN'),
(110, 'JAG', 'JAGUAR XJL', 6500, 0, 4, 'SEDAN'),
(111, 'KIA', 'KIA CARENS', 810, 0, 5, 'HATCHBACK'),
(112, 'KIA', 'KIA CARNIVAL', 710, 0, 7, 'SUV'),
(113, 'KIA', 'KIA CERATO', 760, 0, 4, 'SEDAN'),
(114, 'KIA', 'KIA FORTE', 720, 0, 4, 'SEDAN'),
(115, 'KIA', 'KIA K3', 720, 0, 4, 'SEDAN'),
(116, 'KIA', 'KIA MORNING', 500, 0, 4, 'MINI'),
(117, 'KIA', 'KIA MORNING SI', 500, 0, 4, 'MINI'),
(118, 'KIA', 'KIA OPTIMA', 1100, 0, 4, 'SEDAN'),
(119, 'KIA', 'KIA PICANTO', 480, 0, 4, 'HATCHBACK'),
(120, 'KIA', 'KIA RIO', 720, 0, 4, 'SEDAN'),
(121, 'KIA', 'KIA RIO HATCHBACK', 700, 0, 4, 'HATCHBACK'),
(122, 'KIA', 'KIA RONDO', 790, 0, 5, 'HATCHBACK'),
(123, 'KIA', 'KIA SEDONA', 1400, 0, 7, 'HATCHBACK'),
(124, 'KIA', 'KIA SELTOS DELUXE', 650, 0, 5, 'SUV'),
(125, 'KIA', 'KIA SELTOS LUXURY', 700, 0, 5, 'SUV'),
(126, 'KIA', 'KIA SELTOS PREMIUM', 810, 0, 5, 'SUV'),
(127, 'KIA', 'KIA SOLUTO', 590, 0, 4, 'SEDAN'),
(128, 'KIA', 'KIA SOLUTO DELUXE', 630, 0, 4, 'SEDAN'),
(129, 'KIA', 'KIA SOLUTO LUXURY', 650, 0, 4, 'SEDAN'),
(130, 'KIA', 'KIA SORENTO', 1100, 0, 7, 'SUV'),
(131, 'KIA', 'KIA SOUL', 865, 0, 7, 'SUV'),
(132, 'KIA', 'KIA SPORTAGE', 950, 0, 7, 'SUV'),
(133, 'LAN', 'LAND ROVER RANGE ROVER EVOQUE 2.0 FIRST EDITION', 4520, 0, 7, 'SUV'),
(134, 'LAN', 'LAND ROVER RANGE ROVER EVOQUE 2.0 S', 4520, 0, 7, 'SUV'),
(135, 'LAN', 'LAND ROVER RANGE ROVER EVOQUE 2.0 R-DYNAMIC S', 3550, 0, 7, 'SUV'),
(136, 'LAN', 'LAND ROVER RANGE ROVER EVOQUE 2.0 R-DYNAMIC SE', 3950, 0, 7, 'SUV'),
(137, 'LEX', 'LEXUS ES 250', 2330, 0, 4, 'SEDAN'),
(138, 'LEX', 'LEXUS IS 250C', 1100, 0, 4, 'COUPE'),
(139, 'LEX', 'LEXUS SC 430', 3320, 0, 4, 'COUPE'),
(140, 'LUX', 'LUXGEN U7 22T', 900, 0, 5, 'SUV'),
(141, 'MAZ', 'MAZDA 2', 680, 0, 4, 'SEDAN'),
(142, 'MAZ', 'MAZDA 2 HATCHBACK', 640, 0, 4, 'HATCHBACK'),
(143, 'MAZ', 'MAZDA 3', 800, 0, 4, 'SEDAN'),
(144, 'MAZ', 'MAZDA 3 HATCHBACK', 760, 0, 4, 'HATCHBACK'),
(145, 'MAZ', 'MAZDA 6', 1100, 0, 4, 'SEDAN'),
(146, 'MAZ', 'MAZDA BT50 DELUXE', 800, 0, 4, 'PICK-UP'),
(147, 'MAZ', 'MAZDA BT50 LUXURY', 775, 0, 4, 'PICK-UP'),
(148, 'MAZ', 'MAZDA BT50 PREMIUM', 960, 0, 4, 'PICK-UP'),
(149, 'MAZ', 'MAZDA BT50 STANDARD', 800, 0, 4, 'PICK-UP'),
(150, 'MAZ', 'MAZDA CX5', 1000, 0, 5, 'SUV'),
(151, 'MAZ', 'MAZDA CX8', 1000, 0, 7, 'SUV'),
(152, 'MAZ', 'MAZDA CX9', 1800, 0, 7, 'SUV'),
(153, 'MAZ', 'MAZDA PREMACY', 720, 0, 7, 'SUV'),
(154, 'MER', 'MERCEDES A200', 1350, 0, 4, 'HATCHBACK'),
(155, 'MER', 'MERCEDES A250', 1700, 0, 4, 'SEDAN'),
(156, 'MER', 'MERCEDES AMG A45 4MATIC', 2200, 0, 5, 'SUV'),
(157, 'MER', 'MERCEDES AMG CLA 45 4MATIC', 2300, 0, 4, 'SEDAN'),
(158, 'MER', 'MERCEDES AMG GLA 45 4MATIC', 2300, 0, 5, 'SUV'),
(159, 'MER', 'MERCEDES AMG GLC 43 4MATIC', 3500, 0, 5, 'SUV'),
(160, 'MER', 'MERCEDES C180', 1400, 0, 4, 'SEDAN'),
(161, 'MER', 'MERCEDES C200', 1880, 0, 4, 'SEDAN'),
(162, 'MER', 'MERCEDES C200 CARBRIOLET', 2800, 0, 4, 'SEDAN'),
(163, 'MER', 'MERCEDES C200 EXCLUSIVE', 1890, 0, 4, 'SEDAN'),
(164, 'MER', 'MERCEDES C250', 2100, 0, 4, 'SEDAN'),
(165, 'MER', 'MERCEDES C300', 2210, 0, 4, 'SEDAN'),
(166, 'MER', 'MERCEDES C300 AMG', 2050, 0, 4, 'SEDAN'),
(167, 'MER', 'MERCEDES CLA 200', 1500, 0, 4, 'SEDAN'),
(168, 'MER', 'MERCEDES CLA 250', 2090, 0, 4, 'SEDAN'),
(169, 'MER', 'MERCEDES CLA 250 4MATIC', 1900, 0, 5, 'SEDAN'),
(170, 'MER', 'MERCEDES E200', 2320, 0, 4, 'SEDAN'),
(171, 'MER', 'MERCEDES E200 SPORT', 2300, 0, 4, 'SEDAN'),
(172, 'MER', 'MERCEDES E250', 2330, 0, 4, 'SEDAN'),
(173, 'MER', 'MERCEDES E300', 3200, 0, 4, 'SEDAN'),
(174, 'MER', 'MERCEDES E350 AMG', 3000, 0, 4, 'SEDAN'),
(175, 'MER', 'MERCEDES G63 AMG', 14700, 0, 7, 'SUV'),
(176, 'MER', 'MERCEDES GLA 200', 1700, 0, 5, 'SUV'),
(177, 'MER', 'MERCEDES GLA 250 4MATIC', 1800, 0, 5, 'SUV'),
(178, 'MER', 'MERCEDES GLC 200', 1880, 0, 5, 'SUV'),
(179, 'MER', 'MERCEDES GLC 250', 2560, 0, 5, 'SUV'),
(180, 'MER', 'MERCEDES GLC 250 4MATIC', 2110, 0, 4, 'SUV'),
(181, 'MER', 'MERCEDES GLC 300', 2430, 0, 4, 'SUV'),
(182, 'MER', 'MERCEDES GLC 300 4MATIC COUPE', 2900, 0, 4, 'COUPE'),
(183, 'MER', 'MERCEDES GLC 300 AMG', 2200, 0, 5, 'SUV'),
(184, 'MER', 'MERCEDES GLE 450 4MATIC', 4300, 0, 5, 'SUV'),
(185, 'MER', 'MERCEDES GLK 200', 1350, 0, 5, 'SUV'),
(186, 'MER', 'MERCEDES GLK 220', 1350, 0, 5, 'SUV'),
(187, 'MER', 'MERCEDES GLK 250', 1550, 0, 5, 'SUV'),
(188, 'MER', 'MERCEDES GLK 300', 1450, 0, 5, 'SUV'),
(189, 'MER', 'MERCEDES GLK 320', 1450, 0, 5, 'SUV'),
(190, 'MER', 'MERCEDES GLK 350', 1550, 0, 5, 'SUV'),
(191, 'MER', 'MERCEDES  MAYBACK S450 4MATIC', 7200, 0, 4, 'SEDAN'),
(192, 'MER', 'MERCEDES MAYBACK S600 PULLMAN', 21050, 0, 7, 'SEDAN'),
(193, 'MER', 'MERCEDES MAYBACH S650', 14700, 0, 4, 'SEDAN'),
(194, 'MER', 'MERCEDES S400 4MATIC COUPE', 6000, 0, 2, 'COUPE'),
(195, 'MER', 'MERCEDES  S400I', 3900, 0, 4, 'SEDAN'),
(196, 'MER', 'MERCEDES S450L', 4000, 0, 4, 'SEDAN'),
(197, 'MER', 'MERCEDES S450 L LUXURY', 5320, 0, 4, 'SEDAN'),
(198, 'MER', 'MERCEDES S450 L STAR', 3700, 0, 4, 'SEDAN'),
(199, 'MER', 'MERCEDES S500', 7200, 0, 4, 'SEDAN'),
(200, 'MER', 'MERCEDES S500 4MATIC COUPE', 10000, 0, 2, 'COUPE'),
(201, 'MER', 'MERCEDES S550', 1110, 0, 4, 'SEDAN'),
(202, 'MER', 'MERCEDES S560 4MATIC', 10500, 0, 4, 'SEDAN'),
(203, 'MIT', 'MITSUBISHI ATTRAGE', 590, 0, 0, 'SEDAN'),
(204, 'MIT', 'MITSUBISHI GRANDIS', 750, 0, 7, 'HATCHBACK'),
(205, 'MIT', 'MITSUBISHI  JOLIE', 510, 0, 5, 'SUV'),
(206, 'MIT', 'MITSUBISHI LANCER GALA GLX', 550, 0, 4, 'SEDAN'),
(207, 'MIT', 'MITSUBISHI MIRAGE', 460, 0, 4, 'MINI'),
(208, 'MIT', 'MITSUBISHI OUTLANDER', 970, 0, 7, 'SUV'),
(209, 'MIT', 'MITSUBISHI PAJERO SPORT', 880, 1, 7, 'SUV'),
(210, 'MIT', 'MITSUBISHI TRITON', 770, 1, 4, 'PICK-UP'),
(211, 'MIT', 'MITSUBISHI TRITON MIVEC', 820, 1, 4, 'PICK-UP'),
(212, 'MIT', 'MITSUBISHI TRITON MIVEC PREMIUM', 920, 1, 4, 'PICK-UP'),
(213, 'MIT', 'MITSUBISHI XPANDER', 800, 0, 7, 'SUV'),
(214, 'MIT', 'MITSUBISHI ZINGER', 680, 0, 7, 'SUV'),
(215, 'MOR', 'MORRIS GARAGES ZS SMART UP COM', 850, 0, 5, 'SUV'),
(216, 'MOR', 'MORRIS GARAGES HS 1.5T LUX TROPHY', 1000, 0, 5, 'SUV'),
(217, 'MOR', 'MORRIS GARAGES HS 1.5T STD SPORT', 800, 0, 5, 'SUV'),
(218, 'MOR', 'MORRIS GARAGES HS 2.0T LUX TROPHY', 1000, 0, 5, 'SUV'),
(219, 'MOR', 'MORRIS GARAGES ZS COMFORT', 800, 0, 5, 'SUV'),
(220, 'MOR', 'MORRIS GARAGES ZS LUXURY', 850, 0, 5, 'SUV'),
(221, 'MOR', 'MORRIS GARAGES ZS SMART UP LUX', 900, 0, 5, 'SUV'),
(222, 'MOR', 'MORRIS GARAGES ZS SMART UP STD', 800, 0, 5, 'SUV'),
(223, 'MOR', 'MORRIS GARAGES ZS STANDARD', 750, 0, 5, 'SUV'),
(224, 'NIS', 'NISSAN GRAND LIVINA', 600, 0, 7, 'SUV'),
(225, 'NIS', 'NISSAN NAVARA E', 750, 1, 5, 'PICK-UP'),
(226, 'NIS', 'NISSAN NAVARA EL', 830, 1, 5, 'PICK-UP'),
(227, 'NIS', 'NISSAN NAVARA LE', 690, 1, 5, 'PICK-UP'),
(228, 'NIS', 'NISSAN NAVARA SL', 910, 1, 5, 'PICK-UP'),
(229, 'NIS', 'NISSAN NAVARA VL', 900, 1, 5, 'PICK-UP'),
(230, 'NIS', 'NISSAN NAVARA XE', 368, 1, 5, 'PICK-UP'),
(231, 'NIS', 'NISSAN SUNNY', 750, 0, 4, 'SEDAN'),
(232, 'NIS', 'NISSAN TEANA', 1220, 0, 4, 'SEDAN'),
(233, 'NIS', 'NISSAN TERRA', 1220, 0, 7, 'SUV'),
(234, 'NIS', 'NISSAN X TRAIL', 990, 0, 5, 'SUV'),
(235, 'NIS', 'NISSAN Z350', 2220, 0, 5, 'HATCHBACK'),
(236, 'PEU', 'PEUGEOT 107', 900, 0, 4, 'HATCHBACK'),
(237, 'PEU', 'PEUGEOT 2008', 1155, 0, 5, 'SUV'),
(238, 'PEU', 'PEUGEOT 208', 1100, 0, 4, 'MINI'),
(239, 'PEU', 'PEUGEOT 3008', 1330, 0, 5, 'SUV'),
(240, 'PEU', 'PEUGEOT 308', 1380, 0, 5, 'SUV'),
(241, 'PEU', 'PEUGEOT 408', 704, 0, 4, 'SEDAN'),
(242, 'PEU', 'PEUGEOT 5008', 1430, 0, 7, 'SUV'),
(243, 'PEU', 'PEUGEOT 508', 1260, 0, 5, 'SEDAN'),
(244, 'CHE', 'PORSCHE CAYENNE GTS', 2760, 0, 4, 'SUV'),
(245, 'CHE', 'PORSCHE PANAMERA', 2220, 0, 4, 'SEDAN'),
(246, 'POS', 'RENAULT KOLEOS', 990, 0, 7, 'SUV'),
(247, 'RII', 'RIICH M1', 440, 0, 4, 'HATCHBACK'),
(248, 'SSA', 'SSANGYONG REXTON', 1000, 0, 7, 'SUV'),
(249, 'SSA', 'SSANGYONG STAVIC', 900, 0, 7, 'SUV'),
(250, 'SUB', 'SUBARU FORESTER 2.0I-L', 950, 0, 7, 'SUV'),
(251, 'SUB', 'SUBARU FORESTER 2.0I-S', 1000, 0, 5, 'SUV'),
(252, 'SUB', 'SUBARU FORESTER 2.0I-S EYESIGHT', 1100, 0, 5, 'SUV'),
(253, 'SUB', 'SUBARU LEVORG HATCHBACK', 1300, 0, 5, 'HATCHBACK'),
(254, 'SUB', 'SUBARU LEVORGE SEDAN', 1350, 0, 0, 'SEDAN'),
(255, 'SUB', 'SUBARU OUTBACK 2.5I-EYESIGHT', 1880, 0, 5, 'SEDAN'),
(256, 'SUB', 'SUBARU XV 2.0I-S EYESIGHT', 1450, 0, 5, 'SUV'),
(257, 'SUZ', 'SUZUKI APV', 660, 0, 8, 'SUV'),
(258, 'SUZ', 'SUZUKI CELERIO', 450, 0, 5, 'HATCHBACK'),
(259, 'SUZ', 'SUZUKI CIAZ', 680, 0, 4, 'SEDAN'),
(260, 'SUZ', 'SUZUKI ERTIGA', 770, 0, 7, 'SUV'),
(261, 'SUZ', 'SUZUKI SWIFT', 650, 0, 4, 'MINI'),
(262, 'SUZ', 'SUZUKI VITARA', 770, 0, 5, 'SUV'),
(263, 'SUZ', 'SUZUKI XL7', 800, 0, 7, 'SUV'),
(264, 'TOY', 'TOBE MCAR', 250, 0, 0, ''),
(265, 'TOY', 'TOYOTA AVANZA', 800, 0, 7, 'SUV'),
(266, 'TOY', 'TOYOTA CAMRY', 1250, 0, 5, 'SEDAN'),
(267, 'TOY', 'TOYOTA COROLLA ALTIS E', 860, 0, 5, 'SEDAN'),
(268, 'TOY', 'TOYOTA COROLLA ALTIS G', 910, 0, 5, 'SEDAN'),
(269, 'TOY', 'TOYOTA COROLLA ALTIS V', 960, 0, 5, 'SEDAN'),
(270, 'TOY', 'TOYOTA CROSS G', 760, 0, 5, 'SUV'),
(271, 'TOY', 'TOYOTA CROSS HV', 910, 0, 5, 'SUV'),
(272, 'TOY', 'TOYOTA CROSS V', 820, 0, 5, 'SUV'),
(273, 'TOY', 'TOYOTA FORTUNER', 1080, 0, 7, 'SUV'),
(274, 'TOY', 'TOYOTA FORTUNER G', 1100, 1, 7, 'SUV'),
(275, 'TOY', 'TOYOTA FORTUNER LEGENDER 2.4 AT', 1370, 1, 7, 'SUV'),
(276, 'TOY', 'TOYOTA FORTUNER LEGENDER 2.8 AT', 1650, 1, 7, 'SUV'),
(277, 'TOY', 'TOYOTA FORTUNER V', 1100, 0, 7, 'SUV'),
(278, 'TOY', 'TOYOTA HILUX E', 900, 0, 4, 'PICK-UP'),
(279, 'TOY', 'TOYOTA HILUX G', 1020, 0, 4, 'PICK-UP'),
(280, 'TOY', 'TOYOTA INNOVA', 860, 0, 7, 'SUV'),
(281, 'TOY', 'TOYOTA INNOVA E', 880, 0, 7, 'SUV'),
(282, 'TOY', 'TOYOTA INNOVA G', 900, 0, 7, 'SUV'),
(283, 'TOY', 'TOYOTA  INNOVA J', 870, 0, 7, 'SUV'),
(284, 'TOY', 'TOYOTA INNOVA V', 940, 0, 7, 'SUV'),
(285, 'TOY', 'TOYOTA INNOVA VENTURER', 1000, 0, 7, 'SUV'),
(286, 'TOY', 'TOYOTA LAND CRUISER', 1100, 0, 7, 'SUV'),
(287, 'TOY', 'TOYOTA RUSH', 900, 0, 5, 'SUV'),
(288, 'TOY', 'TOYOTA SIENNA', 1000, 0, 7, 'SUV'),
(289, 'TOY', 'TOYOTA VENZA', 1100, 0, 5, 'SUV'),
(290, 'TOY', 'TOYOTA VIOS E', 650, 0, 4, 'SEDAN'),
(291, 'TOY', 'TOYOTA VIOS G', 700, 0, 4, 'SEDAN'),
(292, 'TOY', 'TOYOTA VIOS J', 650, 0, 4, 'SEDAN'),
(293, 'TOY', 'TOYOTA VIOS LIMO', 720, 0, 4, 'SEDAN'),
(294, 'TOY', 'TOYOTA VIOS TRD SPORTIVO', 810, 0, 4, 'SEDAN'),
(295, 'TOY', 'TOYOTA WIGO', 500, 0, 4, 'MINI'),
(296, 'TOY', 'TOYOTA YARIS ATIV', 683, 0, 2, 'MINI'),
(297, 'TOY', 'TOYOTA YARIS G HATCHBACK', 760, 0, 2, 'HATCHBACK'),
(298, 'TOY', 'TOYOTA YARIS HATCHBACK', 720, 0, 2, 'MINI'),
(299, 'TOY', 'TOYOTA ZACE', 430, 0, 2, 'PICK-UP'),
(300, 'UAZ', 'UAZ PATRIOT', 720, 0, 5, 'SUV'),
(301, 'VIN', 'VINFAST FADIL', 580, 0, 4, 'MINI'),
(302, 'VIN', 'VINFAST LUX A 2.0', 1100, 0, 0, 'SEDAN'),
(303, 'VIN', 'VINFAST LUX SA 2.0', 1450, 0, 7, 'SUV'),
(304, 'VOL', 'VOLKSWAGGEN BEETLE', 2210, 0, 2, 'HATCHBACK'),
(305, 'VOL', 'VOLKSWAGGEN POLO HATCHBACK', 700, 0, 2, 'HATCHBACK'),
(306, 'VOL', 'VOLKSWAGGEN POLO SEDAN', 780, 0, 4, 'SEDAN'),
(307, 'ZOT', 'ZOTYE T600', 800, 0, 5, 'SUV'),
(308, 'ZOT', 'ZOTYE T600S', 810, 0, 5, 'SUV'),
(309, 'ZOT', 'ZOTYE T800', 1050, 0, 5, 'SUV'),
(310, 'ZOT', 'ZOTYE Z3 (T300)', 770, 0, 0, ''),
(311, 'ZOT', 'ZOTYE Z300', 630, 0, 4, 'SEDAN'),
(312, 'ZOT', 'ZOTYE Z500', 683, 0, 4, 'SEDAN'),
(313, 'ZOT', 'ZOTYE Z8 (T700)', 780, 0, 5, 'SUV');

-- --------------------------------------------------------

--
-- Table structure for table `tb_question_answer`
--

CREATE TABLE `tb_question_answer` (
  `qa_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rental_contract`
--

CREATE TABLE `tb_rental_contract` (
  `contract_id` int(11) NOT NULL,
  `user_id` bigint(11) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `contract_date` timestamp NULL DEFAULT NULL,
  `pickup_date` timestamp NULL DEFAULT NULL,
  `return_date` timestamp NULL DEFAULT NULL,
  `rental_price` int(11) NOT NULL,
  `service_cost` int(11) NOT NULL,
  `pickup_address` varchar(200) NOT NULL,
  `shipping_cost` int(11) NOT NULL,
  `contract_value` int(11) NOT NULL,
  `deposit` int(11) NOT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rental_contract`
--

INSERT INTO `tb_rental_contract` (`contract_id`, `user_id`, `car_id`, `contract_date`, `pickup_date`, `return_date`, `rental_price`, `service_cost`, `pickup_address`, `shipping_cost`, `contract_value`, `deposit`, `status`, `comment`) VALUES
(1, 7, 5, '2021-08-02 15:59:32', '2021-08-02 14:00:00', '2021-08-04 02:00:00', 2200000, 154000, '590 Cách Mạng Tháng Tám, phường 11, Quận 3, Thành phố Hồ Chí Minh, Việt Nam', 0, 2354000, 706200, 'Đã hoàn thành', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rental_schedule`
--

CREATE TABLE `tb_rental_schedule` (
  `schedule_id` int(11) NOT NULL,
  `id_rental_contract` int(11) NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `note` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_review`
--

CREATE TABLE `tb_review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `star_num` tinyint(4) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_review`
--

INSERT INTO `tb_review` (`id`, `car_id`, `contract_id`, `user_id`, `star_num`, `comment`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 7, 5, 'Dịch vụ tốt', '2021-08-02 14:12:18', '2021-08-02 14:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `profile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `driver_id` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `driver_id_image_approval` tinyint(4) NOT NULL DEFAULT 0,
  `driver_id_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar_image` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT 'default-user-2.png',
  `joined_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `profile_id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `mobile`, `gender`, `dob`, `driver_id`, `driver_id_image_approval`, `driver_id_image`, `avatar_image`, `joined_date`, `status`, `remember_token`, `created_at`, `updated_at`, `facebook_id`, `google_id`) VALUES
(1, NULL, 'Thien', 'nguyenngocthien@gmail.com', NULL, NULL, '$2y$10$1MYidIVayA28LztCizVz.e1d4m1898R9VDgAaajcxkPh7AUTPDI7u', '0989096911', 1, '1993-09-14', '270170002051', 0, NULL, 'default-user-2.png', NULL, 0, NULL, '2021-07-30 23:58:15', '2021-07-30 23:58:15', NULL, NULL),
(2, NULL, 'Nguyễn Ngọc Thiện', 'thien@travelmobile.com', NULL, 1, '$2y$10$mNPcQQCy8A4eAZulurU/uuvV3jmuKpT1T8SVHG4fr36b6SB1Bcds.', NULL, NULL, NULL, NULL, 0, NULL, 'default-user-2.png', NULL, 0, NULL, '2021-07-31 00:28:08', '2021-07-31 00:28:08', NULL, NULL),
(3, NULL, 'Lê Nguyễn Thành Nhân', 'lenguyenthanhnhan@gmaill.com', NULL, NULL, '$2y$10$o7LlrsmpCWaDqR2zMvWMsuZNYF9jcNz74pNYPmDRcSgbITJT61VhK', NULL, NULL, NULL, NULL, 0, NULL, 'default-user-2.png', NULL, 0, NULL, '2021-07-31 04:02:23', '2021-07-31 04:02:23', NULL, NULL),
(4, NULL, 'Phạm Viết Vương', 'phamvietvuong@gmail.com', NULL, NULL, '$2y$10$q49XXZoZiHAIWS72IRdvJu6X/OXo20sYG41Y7oqlB3aHp7u8Dkvnm', NULL, NULL, NULL, NULL, 0, NULL, 'default-user-2.png', NULL, 0, NULL, '2021-08-01 01:40:07', '2021-08-01 01:40:07', NULL, NULL),
(5, NULL, 'Lê Hữu Tâm', 'Lehuutam@gmail.com', NULL, NULL, '$2y$10$thTUQWIdghZtHY9UluFVEe37HMdim1vstJJzVBxKrGaOX4MpD5026', NULL, NULL, NULL, NULL, 0, NULL, 'default-user-2.png', NULL, 0, NULL, '2021-08-01 02:46:21', '2021-08-01 02:46:21', NULL, NULL),
(6, NULL, 'Phạm Quốc Toàn', 'phamquoctoan@gmail.com', NULL, NULL, '$2y$10$YhGqWnSTbEinucI0JeN9fO91qliPEVyoBs3IG6PgXFwijqBJ.riAG', NULL, NULL, NULL, NULL, 0, NULL, 'default-user-2.png', NULL, 0, NULL, '2021-08-01 09:05:38', '2021-08-01 09:05:38', NULL, NULL),
(7, NULL, 'Thành Nhân', 'thanhnhanle@gmail.com', NULL, NULL, '$2y$10$g3GO8seIzlpufwRGdCq72OrvuJVlrsupI5PFxBUM8vro/Txcys9xG', '0375515819', 1, '2002-10-04', '9846785736', 1, '197225839_1169131763566603_3013798318839820731_n.jpg', 'a5d0dfd35d44a11af855.jpg', NULL, 0, NULL, '2021-08-02 08:56:55', '2021-08-02 08:56:55', NULL, NULL),
(8, NULL, 'Thien', 'khanonline35@yahoo.com', NULL, NULL, '$2y$10$IUBP8/FGznRHRHixukwClusnx/byfHs.A6pRw3BHIHzmnERvsmeMG', NULL, NULL, NULL, NULL, 0, NULL, 'default-user-2.png', NULL, 0, 'kl41qjDVDaahRQv12KpMDGZhb8SNtRNzFl96L1YeAEv61Or1bGgbbf7itfU1', '2021-08-02 13:48:38', '2021-08-02 13:50:44', NULL, NULL),
(9, NULL, 'lê nguyễn thành nhân', 'lenhannhan123@gmail.com', NULL, NULL, '$2y$10$Y7KKqJDja5JSILAVpnlwquf6uNNHTs.z3phm3N06vBH11kOMo7WnS', NULL, NULL, NULL, NULL, 0, NULL, 'default-user-2.png', NULL, 0, NULL, '2021-08-02 14:04:39', '2021-08-02 14:04:39', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tb_car_mfg`
--
ALTER TABLE `tb_car_mfg`
  ADD PRIMARY KEY (`mfg_id`);

--
-- Indexes for table `tb_car_pic`
--
ALTER TABLE `tb_car_pic`
  ADD PRIMARY KEY (`pic_id`),
  ADD KEY `FK_car_id_car_pic` (`car_id`);

--
-- Indexes for table `tb_car_rental`
--
ALTER TABLE `tb_car_rental`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `FK_user_id_car_rental` (`user_id`),
  ADD KEY `FK_type_id_car_rental` (`type_id`);

--
-- Indexes for table `tb_car_type`
--
ALTER TABLE `tb_car_type`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `car_style_id` (`car_style`),
  ADD KEY `FK_mfg_id_car_type` (`mfg_id`);

--
-- Indexes for table `tb_rental_contract`
--
ALTER TABLE `tb_rental_contract`
  ADD PRIMARY KEY (`contract_id`),
  ADD KEY `FK_user_id_rental_contract` (`user_id`),
  ADD KEY `FK_car_id_rental_contract` (`car_id`);

--
-- Indexes for table `tb_rental_schedule`
--
ALTER TABLE `tb_rental_schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `FK_car_id_rental_schedule` (`car_id`),
  ADD KEY `FK_rental_contract` (`id_rental_contract`);

--
-- Indexes for table `tb_review`
--
ALTER TABLE `tb_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_car_id_review` (`car_id`),
  ADD KEY `FK_user_id_review` (`user_id`),
  ADD KEY `FK_contract_id` (`contract_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `FK_profile_id_user` (`profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_car_pic`
--
ALTER TABLE `tb_car_pic`
  MODIFY `pic_id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_car_rental`
--
ALTER TABLE `tb_car_rental`
  MODIFY `car_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_car_type`
--
ALTER TABLE `tb_car_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT for table `tb_rental_contract`
--
ALTER TABLE `tb_rental_contract`
  MODIFY `contract_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_rental_schedule`
--
ALTER TABLE `tb_rental_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_review`
--
ALTER TABLE `tb_review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_car_pic`
--
ALTER TABLE `tb_car_pic`
  ADD CONSTRAINT `FK_car_id_car_pic` FOREIGN KEY (`car_id`) REFERENCES `tb_car_rental` (`car_id`);

--
-- Constraints for table `tb_car_rental`
--
ALTER TABLE `tb_car_rental`
  ADD CONSTRAINT `FK_type_id_car_rental` FOREIGN KEY (`type_id`) REFERENCES `tb_car_type` (`type_id`),
  ADD CONSTRAINT `FK_user_id_car_rental` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);

--
-- Constraints for table `tb_car_type`
--
ALTER TABLE `tb_car_type`
  ADD CONSTRAINT `FK_mfg_id_car_type` FOREIGN KEY (`mfg_id`) REFERENCES `tb_car_mfg` (`mfg_id`);

--
-- Constraints for table `tb_rental_contract`
--
ALTER TABLE `tb_rental_contract`
  ADD CONSTRAINT `FK_car_id_rental_contract` FOREIGN KEY (`car_id`) REFERENCES `tb_car_rental` (`car_id`),
  ADD CONSTRAINT `FK_user_id_rental_contract` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);

--
-- Constraints for table `tb_rental_schedule`
--
ALTER TABLE `tb_rental_schedule`
  ADD CONSTRAINT `FK_car_id_rental_schedule` FOREIGN KEY (`car_id`) REFERENCES `tb_car_rental` (`car_id`),
  ADD CONSTRAINT `FK_rental_contract` FOREIGN KEY (`id_rental_contract`) REFERENCES `tb_rental_contract` (`contract_id`);

--
-- Constraints for table `tb_review`
--
ALTER TABLE `tb_review`
  ADD CONSTRAINT `FK_car_id` FOREIGN KEY (`car_id`) REFERENCES `tb_car_rental` (`car_id`),
  ADD CONSTRAINT `FK_contract_id` FOREIGN KEY (`contract_id`) REFERENCES `tb_rental_contract` (`contract_id`),
  ADD CONSTRAINT `FK_user_id_review` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
