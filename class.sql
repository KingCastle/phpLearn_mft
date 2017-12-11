-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 02:14 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_category`
--

CREATE TABLE `t_category` (
  `id` int(10) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `parent_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_category`
--

INSERT INTO `t_category` (`id`, `title`, `parent_id`) VALUES
(1, 'خبری', 0),
(2, 'اجتماعی', 0),
(3, 'ورزشی', 0),
(4, 'سیاسی', 0),
(5, 'هنری', 0),
(6, 'اقتصادی', 0),
(7, 'والیبال', 3),
(8, 'فوتبال', 3),
(9, 'شطرنج', 3),
(10, 'ایران', 1),
(11, 'بین الملل', 1),
(12, 'بورس ایران', 6),
(13, 'ارز', 6);

-- --------------------------------------------------------

--
-- Table structure for table `t_news`
--

CREATE TABLE `t_news` (
  `id` int(10) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `id_cat` int(10) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `text` text,
  `create_time` datetime(6) DEFAULT NULL,
  `delete` int(1) DEFAULT '0',
  `visit` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_news`
--

INSERT INTO `t_news` (`id`, `title`, `user_id`, `id_cat`, `summary`, `text`, `create_time`, `delete`, `visit`) VALUES
(1, 'خبر شماره  1', 4, 1, 'مدیر هیات عامل سازمان گسترش و نوسازی صنایع (ایدرو) اظهار کرد: تا پایان سال در حوزه خودرو قرارداد جدیدی نخواهیم داشت تا بتوانیم با شش خودروساز بزرگی که قرارداد بسته‌ایم به مرحله اجرا برسیم.', 'مدیر هیات عامل سازمان گسترش و نوسازی صنایع (ایدرو) اظهار کرد: تا پایان سال در حوزه خودرو قرارداد جدیدی نخواهیم داشت تا بتوانیم با شش خودروساز بزرگی که قرارداد بسته‌ایم به مرحله اجرا برسیم.مدیر هیات عامل سازمان گسترش و نوسازی صنایع (ایدرو) اظهار کرد: تا پایان سال در حوزه خودرو قرارداد جدیدی نخواهیم داشت تا بتوانیم با شش خودروساز بزرگی که قرارداد بسته‌ایم به مرحله اجرا برسیم.مدیر هیات عامل سازمان گسترش و نوسازی صنایع (ایدرو) اظهار کرد: تا پایان سال در حوزه خودرو قرارداد جدیدی نخواهیم داشت تا بتوانیم با شش خودروساز بزرگی که قرارداد بسته‌ایم به مرحله اجرا برسیم.مدیر هیات عامل سازمان گسترش و نوسازی صنایع (ایدرو) اظهار کرد: تا پایان سال در حوزه خودرو قرارداد جدیدی نخواهیم داشت تا بتوانیم با شش خودروساز بزرگی که قرارداد بسته‌ایم به مرحله اجرا برسیم.مدیر هیات عامل سازمان گسترش و نوسازی صنایع (ایدرو) اظهار کرد: تا پایان سال در حوزه خودرو قرارداد جدیدی نخواهیم داشت تا بتوانیم با شش خودروساز بزرگی که قرارداد بسته‌ایم به مرحله اجرا برسیم.مدیر هیات عامل سازمان گسترش و نوسازی صنایع (ایدرو) اظهار کرد: تا پایان سال در حوزه خودرو قرارداد جدیدی نخواهیم داشت تا بتوانیم با شش خودروساز بزرگی که قرارداد بسته‌ایم به مرحله اجرا برسیم.', '2017-11-07 07:06:54.000000', 0, 33),
(2, 'خبر شماره 2', 4, 2, 'خبرگزاری ایسنا: مدیر هیات عامل سازمان گسترش و نوسازی صنایع (ایدرو) اظهار کرد: تا پایان سال در حوزه خودرو قرارداد جدیدی نخواهیم داشت تا بتوانیم با شش خودروساز بزرگی که قرارداد بسته‌ایم به مرحله اجرا برسیم.', 'خبرگزاری ایسنا: مدیر هیات عامل سازمان گسترش و نوسازی صنایع (ایدرو) اظهار کرد: تا پایان سال در حوزه خودرو قرارداد جدیدی نخواهیم داشت تا بتوانیم با شش خودروساز بزرگی که قرارداد بسته‌ایم به مرحله اجرا برسیم.خبرگزاری ایسنا: مدیر هیات عامل سازمان گسترش و نوسازی صنایع (ایدرو) اظهار کرد: تا پایان سال در حوزه خودرو قرارداد جدیدی نخواهیم داشت تا بتوانیم با شش خودروساز بزرگی که قرارداد بسته‌ایم به مرحله اجرا برسیم.خبرگزاری ایسنا: مدیر هیات عامل سازمان گسترش و نوسازی صنایع (ایدرو) اظهار کرد: تا پایان سال در حوزه خودرو قرارداد جدیدی نخواهیم داشت تا بتوانیم با شش خودروساز بزرگی که قرارداد بسته‌ایم به مرحله اجرا برسیم.خبرگزاری ایسنا: مدیر هیات عامل سازمان گسترش و نوسازی صنایع (ایدرو) اظهار کرد: تا پایان سال در حوزه خودرو قرارداد جدیدی نخواهیم داشت تا بتوانیم با شش خودروساز بزرگی که قرارداد بسته‌ایم به مرحله اجرا برسیم.', '2017-10-29 07:07:17.000000', 1, 3),
(3, 'خبر شماره  3', 5, 3, '\r\nمنصور معظمی - معاون وزیر صنعت، معدن و تجارت اظهار کرد: تاکنون با شش خودروساز بزرگ دنیا به عقد قرارداد پرداخته‌ایم و لزومی ندارد که بیش از این قراردادی امضا شود.\r\n', '\r\nمنصور معظمی - معاون وزیر صنعت، معدن و تجارت اظهار کرد: تاکنون با شش خودروساز بزرگ دنیا به عقد قرارداد پرداخته‌ایم و لزومی ندارد که بیش از این قراردادی امضا شود.\r\n\r\nمنصور معظمی - معاون وزیر صنعت، معدن و تجارت اظهار کرد: تاکنون با شش خودروساز بزرگ دنیا به عقد قرارداد پرداخته‌ایم و لزومی ندارد که بیش از این قراردادی امضا شود.\r\n\r\nمنصور معظمی - معاون وزیر صنعت، معدن و تجارت اظهار کرد: تاکنون با شش خودروساز بزرگ دنیا به عقد قرارداد پرداخته‌ایم و لزومی ندارد که بیش از این قراردادی امضا شود.\r\n', '2017-12-13 07:07:21.000000', 0, 1),
(4, 'خبر شماره  33333333334', 7, 4, 'وی ادامه داد: اکنون تاکید ما بر آن است که هر چه زودتر این قراردادها اجرایی شوند تا بتوانیم محصولات مرتبط با این قراردادها را وارد بازار کنیم.', 'وی ادامه داد: اکنون تاکید ما بر آن است که هر چه زودتر این قراردادها اجوی ادامه داد: اکنون تاکید ما بر آن است که هر چه زودتر این قراردادها اجرایی شوند تا بتوانیم محصولات مرتبط با این قراردادها را وارد بازار کنیم.وی ادامه داد: اکنون تاکید ما بر آن است که هر چه زودتر این قراردادها اجرایی شوند تا بتوانیم محصولات مرتبط با این قراردادها را وارد بازار کنیم.رایی شوند تا بتوانیم محصولات مرتبط با این قراردادها را وارد بازار کنیم.', '2017-10-29 07:07:26.000000', 0, 7),
(5, 'خبر شماره  5', 8, 5, '\r\nمدیر هیات عامل سازمان گسترش و نوسازی صنایع (ایدرو) در ادامه در پاسخ به سوالی مبنی بر آخرین وضع', '\r\nمدیر هیات عامل سازمان گسترش و نوسازی صنایع (ایدرو) در ادامه در پاسخ به سوالی مبنی بر آخرین وضع\r\nمدیر هیات عامل سازمان گسترش و نوسازی صنایع (ایدرو) در ادامه در پاسخ به سوالی مبنی بر آخرین وضع', '2017-10-10 07:07:29.000000', 0, 1),
(6, 'خبر شماره  6', 6, 6, 'معظمی با اشاره به سرمایه‌گذاری ۱۰ هزار میلیارد تومانی برای گسترش صنایع در سال جاری عنوان کرد: برای دریافت این رقم، بنگاه‌هایی که در بخش فناوری اشتغال داشته یا اشتغال بیشتری ایجاد کرده‌اند و سودآوری بیشتری دارند، در اولویت قرار می‌گیرند. بر همین اساس منابع', 'معظمی با اشاره به سرمایه‌گذاری ۱۰ هزار میلیارد تومانی برای گسترش صنایع در سال جاری عنوان کرد: برای دریافت این رقم، بنگاه‌هایی که در بخش فناوری اشتغال داشته یا اشتغال بیشتری ایجاد کرده‌اند و سودآوری بیشتری دارند، در اولویت قرار می‌گیرند. بر همین اساس منابع مالی بیشتری به این بخش‌ها اختصاص یافته و بهره کمتری از آنها دریافت می‌شود.معظمی با اشاره به سرمایه‌گذاری ۱۰ هزار میلیارد تومانی برای گسترش صنایع در سال جاری عنوان کرد: برای دریافت این رقم، بنگاه‌هایی که در بخش فناوری اشتغال داشته یا اشتغال بیشتری ایجاد کرده‌اند و سودآوری بیشتری دارند، در اولویت قرار می‌گیرند. بر همین اساس منابع مالی بیشتری به این بخش‌ها اختصاص یافته و بهره کمتری از آنها دریافت می‌شود.', '2017-10-27 07:07:37.000000', 0, 1),
(7, 'خبر شماره  7', 6, 6, ' همچنین عنوان کرد: سال گذشته در بخش صنعت، به طور کلی ۱۷ هزار میلیارد تومان سرمایه‌گذاری شد اما امسال فقط برای بازسازی و نوسازی صنایع ۱۰ هزار میلیارد تومان تخصیص داده شده است، چرا که رشد صنعتی ما می‌تواند به مراتب بیش از حد فعلی باشد.', ' همچنین عنوان کرد: سال گذشته در بخش صنعت، به طور کلی ۱۷ هزار میلیارد تومان سرمایه‌گذاری شد اما امسال فقط برای بازسازی و نوسازی صنایع ۱۰ هزار میلیارد تومان تخصیص داده شده است، چرا که رشد صنعتی ما می‌تواند به مراتب بیش از حد فعلی باشد. همچنین عنوان کرد: سال گذشته در بخش صنعت، به طور کلی ۱۷ هزار میلیارد تومان سرمایه‌گذاری شد اما امسال فقط برای بازسازی و نوسازی صنایع ۱۰ هزار میلیارد تومان تخصیص داده شده است، چرا که رشد صنعتی ما می‌تواند به مراتب بیش از حد فعلی باشد.', '2017-10-30 07:07:34.000000', 0, 1),
(8, 'خبر شماره  8', 11, 4, '\r\nمدیر هیات عامل سازمان گسترش  و نوسازی صنایع (ایدرو) یکی از دلایلی را که مانع از رش', '\r\nمدیر هیات عامل سازمان گسترش  و نوسازی صنایع (ایدرو) یکی از دلایلی را که م\r\nمدیر هیات عامل سازمان گسترش  و نوسازی صنایع (ایدرو) یکی از دلایلی را که مانع از رش\r\nمدیر هیات عامل سازمان گسترش  و نوسازی صنایع (ایدرو) یکی از دلایلی را که مانع از رشانع از رش', '2017-10-27 08:07:42.000000', 1, 1),
(9, 'خبر شماره  9', 10, 3, 'ما عقب مانده هستند و بر همین اساس یکی از ', 'ما عقب مانده هستند و بر همین اساس یکی از ما عقب مانده هستند و بر همین اساس یکی از ', '2017-11-14 07:07:47.000000', 1, 1),
(10, 'خبر شماره  10', 8, 10, 'خ به این سوال که در شش ماه اول سال جاری چه میزا', 'خ به این سوال که در شش ماه اول سال جاری چه میزاخ به این سوال که در شش ماه اول سال جاری چه میزاخ به این سوال که در شش ماه اول سال جاری چه میزاخ به این سوال که در شش ماه اول سال جاری چه میزا', '2017-11-14 07:07:50.000000', 0, 1),
(11, 'خبر شماره  11', 5, 9, ' دارند، در اولویت قرار می‌گیرند. بر همین اساس منابع مالی بیشتری به این بخش‌ها اختصاص یافته و بهره کمتری از آنها دریافت می‌شود.', ' دارند، در اولویت قرار می‌گیرند. بر همین اساس منابع مالی بیشتری به این بخش‌ها اختصاص یافته و بهره کمتری از آنها دریافت می‌شود. دارند، در اولویت قرار می‌گیرند. بر همین اساس منابع مالی بیشتری به این بخش‌ها اختصاص یافته و بهره کمتری از آنها دریافت می‌شود. دارند، در اولویت قرار می‌گیرند. بر همین اساس منابع مالی بیشتری به این بخش‌ها اختصاص یافته و بهره کمتری از آنها دریافت می‌شود. دارند، در اولویت قرار می‌گیرند. بر همین اساس منابع مالی بیشتری به این بخش‌ها اختصاص یافته و بهره کمتری از آنها دریافت می‌شود.', '2017-11-23 07:07:53.000000', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(10) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `id_grp` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `fullname`, `username`, `password`, `age`, `gender`, `id_grp`) VALUES
(4, 'علی محمدی', 'alim', '123', 20, 'male', 1),
(5, 'عباس ابراهیمی', 'abas', '222', 21, 'male', 0),
(6, 'حمید ریاحی', 'hamid.r', '333', 19, 'male', 0),
(7, 'زهرا بازرگان', 'zbazargan', '444', 32, 'female', 0),
(8, 'حمیده عباسی', 'hamide-a', '555', 43, 'female', 0),
(9, 'حسین معروف', 'hossein', NULL, 15, 'male', 0),
(10, 'حسن جاویدان', 'hasanjavid', NULL, 22, 'male', 0),
(11, 'اشکان امیدی', 'ashkan', NULL, 29, 'male', 0),
(19, 'محسن محسنی', 'mohsen', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 20, 'male', 0),
(20, 'زهرا ماهینی', 'zhr', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 20, 'female', 0),
(21, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 22222, 'male', 0),
(22, 'aaaa', 'bbb', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 3434, 'male', 0),
(23, '11', '111', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 111, 'male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_user_group`
--

CREATE TABLE `t_user_group` (
  `id` int(10) NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `access` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `t_user_group`
--

INSERT INTO `t_user_group` (`id`, `title`, `access`) VALUES
(1, 'مدیران اصلی ( دسترسی کامل به کلیه امکانات )', '{\"article\":false,\"news\":true}'),
(2, 'دسترسی نویسنده', '{\"news\":true}'),
(4, 'ویراستار', '{\"article\":true}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_category`
--
ALTER TABLE `t_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_news`
--
ALTER TABLE `t_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `t_user_group`
--
ALTER TABLE `t_user_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_category`
--
ALTER TABLE `t_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_news`
--
ALTER TABLE `t_news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `t_user_group`
--
ALTER TABLE `t_user_group`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
