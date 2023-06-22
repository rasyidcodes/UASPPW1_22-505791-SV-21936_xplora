-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 05:57 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xplora`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `comment` varchar(140) NOT NULL,
  `commentOn` int(11) NOT NULL,
  `commentBy` int(11) NOT NULL,
  `commentAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `comment`, `commentOn`, `commentBy`, `commentAt`) VALUES
(1, 'Interested', 3, 5, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `followID` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `followOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`followID`, `sender`, `receiver`, `followOn`) VALUES
(1, 4, 3, '2021-04-28 09:45:14'),
(2, 5, 4, '2021-04-28 09:47:51'),
(3, 5, 3, '2021-04-28 09:48:47'),
(4, 4, 5, '2021-04-28 09:49:25');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `likeID` int(11) NOT NULL,
  `likeBy` int(11) NOT NULL,
  `likeOn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`likeID`, `likeBy`, `likeOn`) VALUES
(1, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageID` int(11) NOT NULL,
  `message` text NOT NULL,
  `messageTo` int(11) NOT NULL,
  `messageFrom` int(11) NOT NULL,
  `messageOn` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageID`, `message`, `messageTo`, `messageFrom`, `messageOn`, `status`) VALUES
(1, 'Hii....How are you', 4, 5, '2021-04-28 09:48:33', 1),
(2, 'Hey, I am good', 5, 4, '2021-04-28 09:49:57', 0),
(3, 'what\'s about you', 5, 4, '2021-04-28 09:50:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `ID` int(11) NOT NULL,
  `notificationFor` int(11) NOT NULL,
  `notificationFrom` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `type` enum('follow','repost','like','mention') NOT NULL,
  `time` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`ID`, `notificationFor`, `notificationFrom`, `target`, `type`, `time`, `status`) VALUES
(1, 3, 4, 4, 'follow', '2021-04-28 09:45:14', 0),
(2, 4, 5, 4, 'mention', '2021-04-28 09:47:45', 1),
(3, 4, 5, 5, 'follow', '2021-04-28 09:47:52', 1),
(4, 4, 5, 3, 'like', '2021-04-28 09:48:01', 1),
(5, 3, 5, 5, 'follow', '2021-04-28 09:48:47', 1),
(6, 5, 4, 4, 'follow', '2021-04-28 09:49:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postID` int(11) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `postBy` int(11) NOT NULL,
  `repostID` int(11) NOT NULL,
  `repostBy` int(11) NOT NULL,
  `postImage` varchar(255) NOT NULL,
  `likesCount` int(11) NOT NULL,
  `repostCount` int(11) NOT NULL,
  `postedOn` datetime NOT NULL,
  `repostMsg` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `status`, `postBy`, `repostID`, `repostBy`, `postImage`, `likesCount`, `repostCount`, `postedOn`, `repostMsg`) VALUES
(1, 'Perjalanan kami dimulai di pagi hari yang cerah. Kami berangkat menuju destinasi liburan yang dinanti-nantikan dengan semangat yang tinggi.', 4, 0, 0, 'users/code.jpg', 0, 0, '2021-04-28 09:33:19', ''),
(2, 'Setelah perjalanan yang panjang, kami akhirnya tiba di tujuan liburan kami yang indah. Udara segar dan pemandangan menakjubkan menyambut kedatangan kami', 4, 0, 0, 'users/google.png', 0, 0, '2021-04-28 09:43:21', ''),
(3, 'Kami memutuskan untuk menjelajahi tempat-tempat wisata terkenal di daerah tersebut. Mulai dari museum hingga taman bermain, kami mencoba mengalami segala sesuatu yang ditawarkan oleh destinasi kami.', 4, 0, 0, '', 1, 0, '2021-04-28 09:44:49', ''),
(4, 'Salah satu momen terbaik dalam perjalanan ini adalah saat kami memutuskan untuk menjelajahi alam liar. Kami berjalan-jalan di hutan, melintasi sungai yang mengalir deras, dan melihat binatang liar dalam habitat aslinya.', 5, 0, 0, '', 0, 0, '2021-04-28 09:47:45', ''),
(5, 'Kami juga meluangkan waktu untuk bersantai di pantai. Menyusuri pasir putih dan merasakan angin laut yang segar membuat kami merasa tenang dan damai.', 0, 0, 0, '', 0, 0, '0000-00-00 00:00:00', ''),
(6, 'sadbsandbmnsaPerjalanan kami tidak hanya melibatkan aktivitas di darat, tetapi juga di air. Kami mencoba olahraga air seperti selancar, menyelam, dan berlayar di atas perahu.', 0, 0, 0, '', 0, 0, '0000-00-00 00:00:00', ''),
(7, 'Makanan lokal menjadi salah satu hal yang paling kami nikmati dalam perjalanan ini. Kami mencoba hidangan khas setiap tempat yang kami kunjungi dan merasakan cita rasa yang autentik.', 1, 0, 0, '', 0, 0, '0000-00-00 00:00:00', ''),
(9, 'Salah satu momen paling romantis adalah saat kami menyaksikan matahari terbenam di tepi pantai. Warna-warni langit senja menciptakan pemandangan yang begitu indah dan mengesankan.', 1, 0, 0, '', 0, 0, '0000-00-00 00:00:00', ''),
(10, 'Selama perjalanan, kami juga mengunjungi tempat-tempat bersejarah yang memberikan wawasan mendalam tentang budaya dan sejarah daerah tersebut.', 1, 0, 0, '', 0, 0, '0000-00-00 00:00:00', ''),
(13, 'Untuk mengabadikan momen-momen berharga, kami sering mengambil foto di setiap tempat yang kami kunjungi. Foto-foto ini akan menjadi kenang-kenangan yang berharga dari perjalanan kami', 2, 0, 0, '', 0, 0, '0000-00-00 00:00:00', ''),
(14, 'Kami juga menyempatkan diri untuk berbelanja oleh-oleh khas daerah tersebut. Barang-barang unik dan kerajinan tangan lokal menjadi kenang-kenangan yang sempurna untuk keluarga dan teman-teman kami.', 2, 0, 0, '', 0, 0, '0000-00-00 00:00:00', ''),
(15, 'Selama perjalanan ini, kami bertemu dengan orang-orang yang ramah dan hangat. Mereka memberikan saran dan informasi yang berharga tentang tempat-tempat tersembunyi yang layak dikunjungi.', 2, 0, 0, '', 0, 0, '0000-00-00 00:00:00', ''),
(16, 'Salah satu pengalaman paling menarik adalah menginap di akomodasi yang unik, seperti vila di atas air atau pondok di tengah hutan.', 2, 0, 0, '', 0, 0, '0000-00-00 00:00:00', ''),
(17, 'Kami juga mencoba kegiatan petualangan seperti hiking, rafting, atau menyusuri gua yang menantang. Adrenalin kami meningkat saat kami melewati rintangan dan menantang diri kami sendiri.', 42, 0, 0, '', 0, 0, '0000-00-00 00:00:00', ''),
(18, 'Saat malam tiba, kami menikmati pertunjukan budaya setempat, seperti tarian tradisional dan musik khas daerah tersebut.', 42, 0, 0, '', 0, 0, '0000-00-00 00:00:00', ''),
(19, 'Perjalanan ini juga memberi kami kesempatan untuk mencoba makanan eksotis yang sebelumnya belum pernah kami coba. Rasa yang berbeda-beda dan bumbu yang khas memberikan pengalaman kuliner yang tak terlupakan.', 43, 0, 0, '', 0, 0, '0000-00-00 00:00:00', ''),
(20, 'Salah satu momen paling menyenangkan adalah saat kami bermain-main dengan hewan-hewan lucu di taman satwa setempat. Kami mengamati mereka dari dekat dan berinteraksi dengan mereka.', 45, 0, 0, '', 0, 0, '0000-00-00 00:00:00', ''),
(24, 'Kami juga memanfaatkan waktu luang untuk bersantai di spa atau berendam di kolam air panas. Ini adalah cara yang sempurna untuk menghilangkan kelelahan setelah berkeliling sepanjang hari.', 47, 0, 0, '', 0, 0, '0000-00-00 00:00:00', ''),
(25, 'Saat menjelajahi kota, kami mengunjungi museum seni yang mengagumkan dan galeri yang dipenuhi dengan karya seni yang menginspirasi.', 48, 0, 0, '', 0, 0, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `trends`
--

CREATE TABLE `trends` (
  `trendID` int(11) NOT NULL,
  `hashtag` varchar(140) NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trends`
--

INSERT INTO `trends` (`trendID`, `hashtag`, `createdOn`) VALUES
(1, '100daysofcode', '2021-04-28 13:03:19'),
(6, 'GoogleIO', '2021-04-28 13:13:22'),
(8, 'IndiaFacultySummit', '2021-04-28 13:14:49'),
(10, 'posts', '2021-04-28 13:17:45');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `trip_name` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `trip_date` date DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `slots_available` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `trip_name`, `destination`, `trip_date`, `cost`, `slots_available`, `description`) VALUES
(1, 'Trip 1', 'Destination 1', '2023-07-01', 1000, 10, 'Lorem ipsum dolor sit amet'),
(2, 'Trip 2', 'Destination 2', '2023-08-15', 1500, 15, 'Consectetur adipiscing elit'),
(3, 'Trip 3', 'Destination 3', '2023-09-20', 1200, 8, 'Sed do eiusmod tempor incididunt'),
(4, 'Trip 4', 'Destination 4', '2023-10-05', 1800, 12, 'Ut enim ad minim veniam'),
(5, 'Trip 5', 'Destination 5', '2023-11-12', 900, 20, 'Duis aute irure dolor in reprehenderit'),
(6, 'Trip 6', 'Destination 6', '2023-12-25', 2000, 5, 'Excepteur sint occaecat cupidatat non proident');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `screenName` varchar(40) NOT NULL,
  `profileImage` varchar(255) NOT NULL,
  `profileCover` varchar(255) NOT NULL,
  `following` int(11) NOT NULL,
  `followers` int(11) NOT NULL,
  `bio` varchar(140) NOT NULL,
  `country` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `screenName`, `profileImage`, `profileCover`, `following`, `followers`, `bio`, `country`, `website`) VALUES
(1, 'chaurasia20', 'chaurasia@gmail.com', 'ab84e1ad31337246d6d98e3ca709eeaf', 'Yash Chaurasia', 'users/eat-sleep-code-repeat-saying-t-shirt-for-coder-vector-31386255.jpg', 'users/coding.png', 0, 0, 'Full Stack Developer | Freelancer', 'India', 'www.chaurasia.com'),
(2, 'kartik001', 'kartik@gmail.com', 'c8d39cdb56a46ad807969ee04c4e660b', 'Kartik Choubey', 'users/download.png', 'users/Dev wallpaper 1.jpg', 0, 0, 'BCA Student | Freelancer', 'India', 'www.kartik.com'),
(3, 'naman1999', 'naman@gmail.com', '98c8bc837481b93acfb0deef65e50127', 'Naman Jain', 'users/avtar2.jpg', 'users/Dev wallpaper 2.jpg', 0, 2, 'UI/UX Designer | Website Designer', 'India', 'www.naman.com'),
(4, 'nikhil01', 'nikhil@gmail.com', '350d89c1cd6592bbbd1ed2e8a4f3ddba', 'Nikhil Yadav', 'users/avtar.png', 'users/code.jpg', 2, 1, 'Software Developer | Freelancer', 'India', 'www.nikhil.com'),
(5, 'yashgaur908', 'yash@gmail.com', 'e76eb8a75988cb07c8428733a5dd4684', 'Yash Gaur', 'users/avtar1.jpg', 'users/Dev wallpaper.jpg', 2, 1, 'Software Developer | Website Designer', 'India', 'www.yashgaur.tk'),
(7, 'rasyid', 'rasyid@gmail.com', '123', 'Rasyid', '.', '.', 0, 0, 'New User!', 'ID', ''),
(8, '123', 'ra@gmail.com', '$2y$10$lopNmo7tY1cTNQDQCDfjz.R63', 'raa', '', '', 0, 0, '', '', ''),
(9, '1233', 'aa@gmail.com', '$2y$10$YurD11nOkraZ3Gv.VWCNNeZBO', 'aaa', '', '', 0, 0, '', '', ''),
(10, '324', 'sandjnas@gh.com', '$2y$10$oHOV90RL6h0oaOmPXvDu9ON4M', 'sad,mnndkjasn', '', '', 0, 0, '', '', ''),
(11, 'eefw', 'jsahdjah@gmai.com', '$2y$10$Ljc.GXKgXSw.drt3vIcgn.Bc4', 'sajashjsa', '', '', 0, 0, '', '', ''),
(12, '21332', 'kjasndbkjbnds@d.v', '$2y$10$S7ARxJRR5CKesuGNIaAFYOV4A', 'dsbnds,nfk', '', '', 0, 0, '', '', ''),
(13, 'askjdnk', 'JSBAK@GMAIL.COM', '$2y$10$mk6QLXF3hvCbtcvNARYpvuTKK', 'BJAbaKJ', '', '', 0, 0, '', '', ''),
(14, '213', 'masndmn@ajh.com', '$2y$10$HweJVAG80.n5Kn8NDETW3.FMo', 'as,mdmbnas,', '', '', 0, 0, '', '', ''),
(15, 'alksdnl', 'sa@gm.c', '$2y$10$Y1zy75bKqV9XHWtw1gFkd.g.m', 'as,mdnas,', '', '', 0, 0, '', '', ''),
(16, '', '', '$2y$10$62XnS8F.1CKbHo5I.DcjGetuW', '', '', '', 0, 0, '', '', ''),
(17, '3234324', 'asdasd@gmail.com', '$2y$10$T4knVa30L6W2B0t5dw.o0.dCF', 'msanf,sdnq', '', '', 0, 0, '', '', ''),
(18, '23434', 'klasdnl@gmail.com', '$2y$10$tfrY/txhYm/se0J2mwllU.Dax', 'asnlsand', '', '', 0, 0, '', '', ''),
(19, '1235', 'a@a.com', '$2y$10$22aJvylS2l0uy3P.I.6MYOxFK', 'rasyid', '', '', 0, 0, '', '', ''),
(20, 'haha', 'haha@gmail.com', '$2y$10$ADxh47yF5/VIcY.iBLYoBOU3b', 'haha', '', '', 0, 0, '', '', ''),
(21, 'bong', 'admin@gmail.com', '$2y$10$Rh3Nr1txF1s3qMRhKONTgeoks', 'haha', '', '', 0, 0, '', '', ''),
(22, 'x', 'x@x.com', '$2y$10$Y4TYVmbB0yMgJ.AMe2Bvw.H3t', 'jj', '', '', 0, 0, '', '', ''),
(23, 'rasyidx', '', '$2y$12$eVw.qHUPsFIXai7FIUrfD.WdT', '', '', '', 0, 0, '', '', ''),
(24, 'x', '', '$2y$12$9Jz8IfwF2npb7YlH/zqKAOi4m', '', '', '', 0, 0, '', '', ''),
(25, 'c', '', '$2y$12$qjnpJVJfdnStHBJz5INvuOpNC', '', '', '', 0, 0, '', '', ''),
(26, 'as', '', '$2y$12$FPHM1Ilse/naSE5pfJ0rHOtae', '', '', '', 0, 0, '', '', ''),
(27, 'x', '', '9dd4e461268c8034f5c8564e155c67a6', '', '', '', 0, 0, '', '', ''),
(28, 'ccc', '', '9df62e693988eb4e1e1444ece0578579', '', '', '', 0, 0, '', '', ''),
(29, 'ccc', '', '9df62e693988eb4e1e1444ece0578579', '', '', '', 0, 0, '', '', ''),
(30, 'ccc', '', '9df62e693988eb4e1e1444ece0578579', '', '', '', 0, 0, '', '', ''),
(31, 'ui', 'ui@gmail.com', '7d5c009e4eb8bbc78647caeca308e61b', 'ui', '', '', 0, 0, '', '', ''),
(32, '$name', '$email', '', '', '', '', 0, 0, '', '', ''),
(33, 'bnabab', 'hsdb@gmail.com', '', '', '', '', 0, 0, '', '', ''),
(34, '', '', '', '', '', '', 0, 0, '', '', ''),
(35, '', '', '', '', '', '', 0, 0, '', '', ''),
(36, 'name', 'email', '', '', '', '', 0, 0, '', '', ''),
(37, '', '', '', '', '', '', 0, 0, '', '', ''),
(38, '123x', '78@gmail.com', '202cb962ac59075b964b07152d234b70', 'aas', '', '', 0, 0, '', '', ''),
(39, 'ras', 'ras@gmail.com', '1c28067048213d48f168efc6d6685406', 'rass', '', '', 0, 0, '', '', ''),
(40, 'lkasjlksadjlkdsa', 'lkasdlk@a.com', '9511c82cb9b98db7a7c8645357660a17', 'akmaskl', '', '', 0, 0, '', '', ''),
(41, 'lasdjlsjaldk', 'lasdal@gmail.com', 'f652c11f1e86f1c09a03bb3166f35cfd', 'am,sndn', '', '', 0, 0, '', '', ''),
(42, 'aslkdj', 'lskmlakmd@h.com', '6a5bd1628a9b2dde22b03209e0547b1a', 'sadlksmdklam', '', '', 0, 100, 'kasjhkjhsak', '', ''),
(43, '123xxx', 'names@gmail.com', '202cb962ac59075b964b07152d234b70', 'name', '', '', 0, 0, '', '', ''),
(44, 'n', 'sydcloneofficial@gmail.com', '363b122c528f54df4a0446b6bab05515', 'name', '', '', 0, 0, '', '', ''),
(45, 'naha', 'kjksj@gmail.com', '202cb962ac59075b964b07152d234b70', 'akakj', '', '', 0, 0, '', '', ''),
(46, 'jaja', 'jkhaskj@gmail.com', '202cb962ac59075b964b07152d234b70', 'kasjhjskadh', '', '', 0, 0, '', '', ''),
(47, 'admin2', 'admin2@gmail.com', 'c84258e9c39059a89ab77d846ddab909', 'admin', '', '', 0, 0, '', '', ''),
(48, 'rasyid2', 'rasyid2@gmail.com', '97beac0eaa2d00830e1263cfbecb4bb4', 'rasyid', '', '', 0, 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`followID`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`likeID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `trends`
--
ALTER TABLE `trends`
  ADD PRIMARY KEY (`trendID`),
  ADD UNIQUE KEY `createdOn` (`createdOn`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `followID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `likeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `trends`
--
ALTER TABLE `trends`
  MODIFY `trendID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
