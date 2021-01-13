-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2021 at 02:34 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.34-8+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `case_study_module3`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `name`, `created_at`, `updated_at`, `image`, `country`, `year`) VALUES
(2, 'RYAN REYNOLDS', '2021-01-10 21:45:09', '2021-01-11 06:54:47', 'uploads/1610373287.jpg', 'Canada', '1976-10-23'),
(3, 'NICOLAS CAGE', '2021-01-11 06:53:09', '2021-01-11 06:53:09', 'uploads/1610373189.jpg', 'Mỹ', '1964-01-07'),
(4, 'EMMA STONE', '2021-01-11 06:56:42', '2021-01-11 06:56:42', 'uploads/1610373402.jpg', 'Mỹ', '1988-11-06'),
(5, 'GAL GADOT', '2021-01-11 06:59:17', '2021-01-11 06:59:17', 'uploads/1610373557.jpg', 'Israel', '1985-04-30'),
(6, 'Trấn Thành', '2021-01-11 10:34:42', '2021-01-11 10:34:42', 'uploads/1610386482.png', 'Việt Nam', '1987-02-05'),
(7, 'Kaity Nguyễn', '2021-01-11 10:48:44', '2021-01-11 10:48:44', 'uploads/1610387324.jpg', 'Việt Nam', '1999-04-09'),
(8, 'THÀNH LONG', '2021-01-11 10:59:18', '2021-01-11 10:59:18', 'uploads/1610387958.jpg', 'Trung Quốc', '1954-04-07'),
(9, 'KWON SANG-WOO', '2021-01-11 11:07:56', '2021-01-11 11:07:56', 'uploads/1610388476.jpg', 'Hàn Quốc', '1976-08-05'),
(10, 'Elizabeth Banks', '2021-01-11 19:07:20', '2021-01-11 19:07:20', 'uploads/1610417240.jpg', 'Mỹ', '1974-02-10'),
(11, 'Tiến Luật', '2021-01-11 19:36:22', '2021-01-11 19:36:22', 'uploads/1610418982.jpg', 'Việt Nam', '1968-08-08'),
(12, 'Jared Leto', '2021-01-12 23:59:23', '2021-01-12 23:59:23', 'uploads/1610521163.jpg', 'Mỹ', '1971-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Viễn Tưởng', NULL, NULL),
(3, 'Hài Hước', NULL, NULL),
(4, 'Võ Thuật', NULL, NULL),
(5, 'Hoạt Hình', NULL, NULL),
(6, 'Kinh Dị', NULL, NULL),
(7, 'Hành Động', '2021-01-11 10:27:21', '2021-01-11 10:27:21'),
(8, 'Tâm Lý', '2021-01-11 10:55:19', '2021-01-11 10:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Mỹ', NULL, NULL),
(2, 'Hàn Quốc', NULL, NULL),
(3, 'Nhật Bản', NULL, NULL),
(4, 'Thái Lan', NULL, NULL),
(5, 'Việt Nam', NULL, NULL),
(6, 'Trung Quốc', NULL, NULL),
(7, 'Quốc gia khác', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'PETE DOCTER', '2021-01-10 21:42:11', '2021-01-11 08:02:58'),
(2, 'Anthony Russo', '2021-01-11 00:58:42', '2021-01-11 00:58:42'),
(3, 'JOEL CRAWFORD', '2021-01-11 06:37:31', '2021-01-11 06:37:31'),
(4, 'Vũ Ngọc Đãng', '2021-01-11 10:35:22', '2021-01-11 10:35:22'),
(5, 'Nam Cito', '2021-01-11 10:50:15', '2021-01-11 10:50:15'),
(6, 'OLEG STEPCHENKO', '2021-01-11 10:57:25', '2021-01-11 10:57:25'),
(7, 'CHOI WON-SUB', '2021-01-11 11:05:55', '2021-01-11 11:05:55'),
(8, 'David Yarovesky', '2021-01-11 19:08:06', '2021-01-11 19:08:06'),
(9, 'Daniel Espinosa', '2021-01-13 00:00:06', '2021-01-13 00:00:06');

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
(1, '2020_12_28_075903_create_movies_table', 1),
(2, '2020_12_28_075938_create_countries_table', 1),
(3, '2020_12_28_080109_create_categories_table', 1),
(4, '2020_12_28_080203_create_actors_table', 1),
(5, '2020_12_28_080302_create_directors_table', 1),
(6, '2020_12_28_080521_create_movie_categories_table', 1),
(7, '2020_12_28_082430_create_movie_actors_table', 1),
(8, '2021_01_06_032500_create_users_table', 1),
(9, '2021_01_06_102714_add_column_image', 2),
(10, '2021_01_07_022911_add_column_is_admin_to_users_table', 2),
(11, '2021_01_07_031325_add_column_to_actors_table', 2),
(12, '2021_01_11_043319_add_column_director_id_to_table_movies', 3),
(13, '2021_01_11_043439_add_column_country_id_to_table_movies', 4),
(14, '2021_01_11_043558_add_column_actor_id_to_table_movie_actors', 5),
(15, '2021_01_11_043702_add_column_movie_id_to_table_movie_actors', 6),
(16, '2021_01_11_043757_add_column_category_id_to_tabl_movie_categories', 7),
(17, '2021_01_11_043919_add_column_movie_id_to_table_movie_categories', 8),
(18, '2021_01_11_040517_add_colummn_description_to_movies_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `director_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `year`, `time`, `image`, `video`, `created_at`, `updated_at`, `director_id`, `country_id`, `description`) VALUES
(5, 'Croods 2', '2020', '1h 35m', '1610383394.jpg', '1610383962.mp4', '2021-01-11 07:10:23', '2021-01-11 09:52:42', 3, 1, 'Sinh tồn trong một thế giới tiền sử luôn rình rập hiểm nguy từ đủ loài quái thú hung dữ cho tới thảm họa ngày tận thế, Nhà Croods chưa từng một lần chùn bước. Nhưng giờ đây họ sẽ phải đối mặt với thử thách lớn nhất từ trước tới nay: chung sống với một gia đình khác. Để tìm kiếm một mái nhà an toàn hơn, Nhà Croods bắt đầu hành trình khám phá thế giới tiến tới những vùng đất xa xôi đầy tiềm năng. Một ngày nọ, họ tình cờ lạc vào một nơi yên bình có đầy đủ mọi tiện nghi hiện đại và biệt lập với tường vây bao quanh. Tưởng rằng mọi vấn đề trong cuộc sống sẽ được giải quyết thì Nhà Croods lại phải chấp nhận với sự thật rằng đã có một gia đình khác định cư ở đây đó chính là Nhà Bettermans.'),
(6, 'Wonder Woman 1984', '2020', '1h 51m', '1610374831.jpg', '1610389813.mp4', '2021-01-11 07:20:31', '2021-01-11 11:30:13', 2, 1, 'Wonder Woman 1984 sẽ lấy bối cảnh năm 1984, khi Mỹ và Liên Xô đối đầu trong thời kỳ Chiến tranh Lạnh. Đặc biệt cũng hé lộ sự trở lại bí ẩn của Steve Trevor – người đã hy sinh anh dũng nhằm ngăn chặn kế hoạch phát tán chất độc của Đức quốc xã.'),
(7, 'Avengers 4: Endgame', '2019', '1h 81m', '1610377138.jpg', '1610377138.mp4', '2021-01-11 07:58:58', '2021-01-11 07:58:58', 2, 1, 'Biệt Đội Siêu Anh Hùng 4: Tàn Cuộc (Avengers 4: Endgame) ra mắt vào tháng 4/2019 sẽ giải quyết triệt để những khúc mắc đã vạch ra suốt 22 bộ phim trước đó của Vụ trụ điện ảnh Marvel (MCU). Hai tháng sau đó, Người Nhện 2 là khởi đầu hoàn toàn mới dành cho MCU.\r\n\r\nSau sự kiện Thanos làm cho một nửa vũ trụ tan biến và khiến cho biệt đội Avengers thảm bại, những siêu anh hùng sống sót phải tham gia trận chiến cuối cùng trong Avengers: Endgame.'),
(8, 'Avengers 3: Infinity War', '2018', '1h 49m', '1610377287.jpg', '1610377287.mp4', '2021-01-11 08:01:27', '2021-01-11 08:01:27', 2, 1, 'Sau chuyến hành trình độc nhất vô nhị không ngừng mở rộng và phát triển vụ trũ điện ảnh Marvel, bộ phim Avengers: Cuộc Chiến Vô Cực sẽ mang đến màn ảnh trận chiến cuối cùng khốc liệt nhất mọi thời đại. Biệt đội Avengers và các đồng minh siêu anh hùng của họ phải chấp nhận hy sinh tất cả để có thể chống lại kẻ thù hùng mạnh Thanos trước tham vọng hủy diệt toàn bộ vũ trụ của hắn.'),
(9, 'Soul', '2020', '1h 30m', '1610377529.jpg', '1610377529.mp4', '2021-01-11 08:05:29', '2021-01-11 08:05:29', 1, 1, 'Điều gì khiến bạn là chính bạn? Cuối năm nay, hãng phim hoạt hình danh tiếng Pixar sẽ trình làng một tác phẩm mới mang tên SOUL – CUỘC SỐNG NHIỆM MÀU với nhân vật chính là Joe Gardner một giáo viên dạy nhạc ở trường trung học. Anh vừa nhận được một cơ hội duy nhất trong đời khi có thể được tham gia chơi Jazz cho một ban nhạc nổi nhất thành phố.\r\n\r\nNhưng một bước chân sai lầm đã đưa anh từ thành phố New York hoa lệ đến Cõi Trước – một nơi kỳ diệu mà ở đó các linh hồn được nhận tính cách, sở thích trước khi họ đi đến Trái Đất. Quyết tâm trở về cuộc đời của chính mình, Joe hợp tác với một linh hồn bất hảo mang tên 22 (lồng tiếng bởi Tina Fey) - người chưa bao giờ hiểu được sự hấp dẫn của cuộc sống loài người. Joe cố gắng hết mình để cho 22 thấy cuộc sống này nhiệm màu như thế nào, đồng thời anh ấy cũng khám phá ra câu trả lời quan trọng cho đời người'),
(10, 'Bố Già', '2021', '1h 20m', '1610420029.png', '1610419700.mp4', '2021-01-11 10:38:43', '2021-01-11 19:53:49', 4, 5, 'Phim thuộc thể loại tâm lý, tình cảm hài. Bố già lấy bối cảnh một con hẻm lao động nghèo ở Sài Gòn và những con người sống tại đó. Chủ đề của phim là sự khác biệt giữa cha mẹ - con cái trong gia đình và kêu gọi sự cảm thông giữa các thế hệ.Trấn Thành cho biết: \"Để web drama có khoảng 30 triệu lượt xem mỗi tập, hẳn khán giả đã xem đi xem lại và nhớ hết các nhân vật, tình tiết. Nhưng chúng tôi muốn xóa ký ức trong khán giả về web drama. Bố già điện ảnh sẽ là một câu chuyện mới, diện mạo mới.'),
(12, 'Journey to China: The Iron Mask Mystery', '2019', '1h20m', '1610388175.jpg', '1610388175.mp4', '2021-01-11 11:02:55', '2021-01-11 11:02:55', 6, 6, 'Nhà thám hiểm Jonathan Green nhận lệnh từ Peter Đại Đế phải hoàn thành bản đồ miền Đông nước Nga. Trong cuộc hành trình ẩn chứa nhiều điều bất ngờ, anh đã đặt chân đến Trung Quốc và đối mặt với nhiều sinh vật kỳ quái.'),
(13, 'Hitman: Agent Jun (2020)', '2020', '1h 10m', '1610388703.jpg', '1610388703.mp4', '2021-01-11 11:11:43', '2021-01-11 11:11:43', 7, 2, 'Xoay quanh Joon, chàng cựu điệp viên của NIS, \"dứt áo ra đi\" khỏi tổ chức, ngày đêm cống hiến với sở thích truyện tranh. Vòng xoáy \"cơm áo gạo tiền\" nào phải dễ, truyện anh sáng tác, chẳng mấy ai quan tâm, cho đến khi, anh tự kể lại trải nghiệm điệp viên của mình, kể chậm rãi, từng từ một, lượt view tăng lên, nhưng kéo theo đó, là bao rắc rối ập đến khi thông tin mật đều được phơi bày.'),
(14, 'Brightburn', '2019', '90 m', '1610417510.jpg', '1610417510.mp4', '2021-01-11 19:11:50', '2021-01-11 19:11:50', 8, 1, 'Điều gì sẽ xảy ra nếu một đứa trẻ từ thế giới khác rơi xuống Trái đất, nhưng thay vì trở thành người hùng cho nhân loại, cậu bé đã chứng tỏ mình là một thứ gì đó độc ác hơn nhiều? Với \'Brightburn - Đứa Con Của Bóng Tối\', đạo diễn tài năng của \'Guardians of the Galaxy\' và \'Slither\' - James Gunn - sẽ khiến chúng ta sợ hãi và đầy ngạc nhiên với một thể loại phim mới: siêu anh hùng - kinh dị...'),
(15, 'Chị Mười Ba ( Ba Ngày Sinh Tử )', '2021', '1h 35m', '1610419243.png', '1610419243.mp4', '2021-01-11 19:40:43', '2021-01-11 19:40:43', 4, 5, 'Nội dung Chị Mười Ba: 3 ngày sinh tử lấy bối cảnh khi Kẽm Gai (Anh Tú) vừa ra tù và được chị Mười Ba (Thu Trang) mời về làm việc tại một chi nhánh bảo trì xe mới mở tại Đà Lạt. Tại đây, anh tình cờ gặp gỡ và nảy sinh tình cảm với Lyn (Châu Bùi) .Rắc rối ở chỗ cô gái lại là người yêu cũ của Đức Mát (Phát La) - người em trai bị tâm thần của tay trùm Thắng Khùng (Kiều Minh Tuấn). Điều này khiến Đức Mát và Kẽm Gai liên tục nảy sinh mâu thuẫn.Trong một lần xô xát, cả hai truy đuổi nhau tới tận khu rừng, với kết quả là Đức Mát bị đâm chết còn Kẽm Gai thì bỏ trốn. Trước cơn thịnh nộ của Thắng Khùng, chị Mười Ba xin thời hạn ba ngày để tìm cách minh oan, bằng không sẽ thế mạng cho đàn em.'),
(20, 'Gái Già Lắm Chiêu V', '2021', '1h 81m', '1610521968.jpeg', '1610521968.mp4', '2021-01-13 00:12:48', '2021-01-13 00:12:48', 5, 5, 'Gái già lắm chiêu 5 muốn khai thác hình ảnh xứ Huế qua lăng kính lộng lẫy, vương giả, được tiết lộ có kinh phí 2 triệu USD (46 tỉ đồng), quay tại các bối cảnh hoành tráng thuộc Quần thể di tích Cố đô Huế - Di sản văn hóa thế giới được UNESCO công nhận, như Cung An Định, Đại nội Huế, Điện Long An, nay là Bảo tàng Cổ vật Cung đình Huế...'),
(21, 'Lật Mặt', '2021', '1h 35m', '1610522204.jpg', '1610522204.mp4', '2021-01-13 00:16:44', '2021-01-13 00:16:44', 4, 5, 'Kết quả hình ảnh cho lật mặt nội dung\r\nLật mặt: Nhà có khách có nội dung khá đơn giản xoay quanh một nhóm bạn cùng nhau trải qua một kì nghỉ \"không êm đềm\" tại vùng quê đẹp đẽ nhưng xa xôi, hẻo lánh của Vy - một thành viên trong nhóm. Ở nơi đây có nhiều giai thoại được \"đồn đại\" về ma quỷ - mà người dân địa phương thường gọi là \"khách\"');

-- --------------------------------------------------------

--
-- Table structure for table `movie_actors`
--

CREATE TABLE `movie_actors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `actor_id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie_actors`
--

INSERT INTO `movie_actors` (`id`, `created_at`, `updated_at`, `actor_id`, `movie_id`) VALUES
(7, NULL, NULL, 2, 5),
(8, NULL, NULL, 5, 6),
(9, NULL, NULL, 2, 5),
(10, NULL, NULL, 2, 7),
(11, NULL, NULL, 2, 8),
(12, NULL, NULL, 2, 9),
(13, NULL, NULL, 2, 5),
(14, NULL, NULL, 2, 5),
(15, NULL, NULL, 2, 5),
(16, NULL, NULL, 2, 5),
(17, NULL, NULL, 2, 5),
(18, NULL, NULL, 2, 5),
(19, NULL, NULL, 2, 5),
(20, NULL, NULL, 2, 5),
(21, NULL, NULL, 2, 5),
(22, NULL, NULL, 2, 5),
(23, NULL, NULL, 2, 5),
(24, NULL, NULL, 2, 5),
(25, NULL, NULL, 2, 5),
(26, NULL, NULL, 2, 5),
(27, NULL, NULL, 6, 10),
(28, NULL, NULL, 2, 5),
(30, NULL, NULL, 8, 12),
(31, NULL, NULL, 9, 13),
(32, NULL, NULL, 2, 6),
(33, NULL, NULL, 2, 6),
(34, NULL, NULL, 2, 6),
(35, NULL, NULL, 8, 14),
(36, NULL, NULL, 9, 14),
(37, NULL, NULL, 10, 14),
(38, NULL, NULL, 11, 15),
(39, NULL, NULL, 6, 10),
(40, NULL, NULL, 6, 10),
(41, NULL, NULL, 6, 10),
(59, NULL, NULL, 6, 20),
(60, NULL, NULL, 8, 20),
(61, NULL, NULL, 11, 20),
(62, NULL, NULL, 6, 21),
(63, NULL, NULL, 7, 21),
(64, NULL, NULL, 11, 21);

-- --------------------------------------------------------

--
-- Table structure for table `movie_categories`
--

CREATE TABLE `movie_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie_categories`
--

INSERT INTO `movie_categories` (`id`, `created_at`, `updated_at`, `category_id`, `movie_id`) VALUES
(7, NULL, NULL, 5, 5),
(8, NULL, NULL, 2, 6),
(9, NULL, NULL, 2, 5),
(10, NULL, NULL, 2, 7),
(11, NULL, NULL, 2, 8),
(12, NULL, NULL, 5, 9),
(13, NULL, NULL, 2, 5),
(14, NULL, NULL, 2, 5),
(15, NULL, NULL, 2, 5),
(16, NULL, NULL, 2, 5),
(17, NULL, NULL, 2, 5),
(18, NULL, NULL, 2, 5),
(19, NULL, NULL, 2, 5),
(20, NULL, NULL, 2, 5),
(21, NULL, NULL, 2, 5),
(22, NULL, NULL, 2, 5),
(23, NULL, NULL, 2, 5),
(24, NULL, NULL, 2, 5),
(25, NULL, NULL, 2, 5),
(26, NULL, NULL, 2, 5),
(27, NULL, NULL, 3, 10),
(28, NULL, NULL, 5, 5),
(30, NULL, NULL, 2, 12),
(31, NULL, NULL, 7, 13),
(32, NULL, NULL, 2, 6),
(33, NULL, NULL, 2, 6),
(34, NULL, NULL, 2, 6),
(35, NULL, NULL, 6, 14),
(36, NULL, NULL, 7, 15),
(37, NULL, NULL, 3, 10),
(38, NULL, NULL, 3, 10),
(39, NULL, NULL, 7, 10),
(56, NULL, NULL, 3, 20),
(57, NULL, NULL, 8, 20),
(58, NULL, NULL, 3, 21),
(59, NULL, NULL, 6, 21);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isAdmin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `isAdmin`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$C8oZmV4CBIXlqfH30YZnxu/TwWz0.GLEuauNWd/jobWaDF11oCaJa', NULL, NULL, '1'),
(2, 'duong', 'duong@gmail.com', '$2y$10$I8D/A4HJ9tv20Tel8WAQ.evE7Gd4Hw9wPo9alPo.mC5tBFPjpgtIO', NULL, NULL, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_director_id_foreign` (`director_id`),
  ADD KEY `movies_country_id_foreign` (`country_id`);

--
-- Indexes for table `movie_actors`
--
ALTER TABLE `movie_actors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_actors_actor_id_foreign` (`actor_id`),
  ADD KEY `movie_actors_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `movie_categories`
--
ALTER TABLE `movie_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_categories_category_id_foreign` (`category_id`),
  ADD KEY `movie_categories_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `movie_actors`
--
ALTER TABLE `movie_actors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `movie_categories`
--
ALTER TABLE `movie_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movies_director_id_foreign` FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie_actors`
--
ALTER TABLE `movie_actors`
  ADD CONSTRAINT `movie_actors_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_actors_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie_categories`
--
ALTER TABLE `movie_categories`
  ADD CONSTRAINT `movie_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_categories_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
