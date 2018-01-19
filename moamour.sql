-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-09-29 00:37:58
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moamour`
--

-- --------------------------------------------------------

--
-- 表的结构 `bangdan`
--

CREATE TABLE `bangdan` (
  `bd_id` int(10) NOT NULL,
  `bd_name` varchar(50) NOT NULL,
  `bd_pic` varchar(100) NOT NULL,
  `bd_size1` varchar(50) NOT NULL,
  `bd_size2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bangdan`
--

INSERT INTO `bangdan` (`bd_id`, `bd_name`, `bd_pic`, `bd_size1`, `bd_size2`) VALUES
(1, '美沫艾莫尔正品马鞭草酮迷迭香纯 补水露去黑头去闭合 爽肤水花水', 'img/面膜 (1).jpg', '保湿', '所有肤质'),
(2, '美沫艾莫尔 清洁毛孔透亮肌肤醒肤吸盘洁面夜茉莉洁面泡沫', 'img/面膜 (2).jpg', '控油', '油性肤质'),
(3, '美沫艾莫尔 水润饱满补水修护肌肤柔软肌肤夜茉莉分体面贴膜', 'img/面膜 (3).jpg', '补水', '所有肤质'),
(4, '美沫艾莫尔白玫瑰喷雾 秋季必备补水保湿喷雾', 'img/面膜 (4).jpg', '补水', '干燥肤质'),
(5, '美沫艾莫尔白玫瑰分体纯露免洗面膜 补水保湿提亮肤色 睡眠面贴膜', 'img/面膜 (5).jpg', '美白', '所有肤质'),
(6, '美沫艾莫尔玫瑰氨基酸洗面奶女 深层清洁毛孔提亮肤色 控油洁面乳', 'img/面膜 (6).jpg', '祛痘', '所有肤质'),
(7, '美沫艾莫尔正品 初榨椰子油护发精油损伤修复 护肤舒缓肌肤卸妆', 'img/面膜 (7).jpg', '修复', '所有肤质');

-- --------------------------------------------------------

--
-- 表的结构 `liangfu`
--

CREATE TABLE `liangfu` (
  `lf_id` int(10) NOT NULL,
  `lf_name` varchar(50) NOT NULL,
  `lf_pic` varchar(100) NOT NULL,
  `lf_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `liangfu`
--

INSERT INTO `liangfu` (`lf_id`, `lf_name`, `lf_pic`, `lf_price`) VALUES
(1, '美沫艾莫尔白玫瑰喷雾', 'img/liangfu1.jpg', 79),
(2, '白玫瑰分体纯露免洗面膜', 'img/liangfu2.jpg', 99),
(3, '玫瑰氨基酸洗面奶', 'img/liangfu3.jpg', 136),
(4, '夜茉莉慕斯面膜清洁毛孔面膜膏', 'img/liangfu5.jpg', 168),
(5, '夜茉莉分体面膜贴', 'img/liangfu4.jpg', 99),
(6, '白玫瑰纯露', 'img/liangfu6.jpg', 198),
(7, '纯露慕斯面膜套装', 'img/liangfu7.jpg', 329),
(8, '白玫瑰匀净净肤面霜', 'img/liangfu9.jpg', 168),
(9, '白玫瑰套装四件套', 'img/liangfu8.jpg', 456),
(10, '夜茉莉纯露', 'img/liangfu10.jpg', 168),
(11, '夜茉莉精华', 'img/liangfu11.jpg', 168),
(12, '白玫瑰亮肤修护精华粉', 'img/liangfu12.jpg', 268);

-- --------------------------------------------------------

--
-- 表的结构 `mask`
--

CREATE TABLE `mask` (
  `mask_id` int(10) NOT NULL,
  `mask_name` varchar(50) NOT NULL,
  `mask_pic` varchar(100) NOT NULL,
  `mask_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mask`
--

INSERT INTO `mask` (`mask_id`, `mask_name`, `mask_pic`, `mask_price`) VALUES
(1, '马鞭草酮迷迭香火山泥面膜霜', 'img/mianmo1.png', 129),
(2, '白玫瑰分体纯露免洗面膜', 'img/mianmo2.png', 99),
(3, '夜茉莉分体面贴膜', 'img/mianmo3.png', 99),
(4, '夜茉莉慕斯面膜清洁毛孔面膜膏', 'img/mianmo4.png', 198),
(5, '马鞭草酮迷迭香火山泥面膜霜', 'img/mianmo5.png', 129),
(6, '纯露慕斯面膜搭档套装', 'img/mianmo6.png', 329),
(8, '柔顺护发秀发喷雾', 'img/mianmo7.png', 377);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pwd`) VALUES
(1, '18222340168', '123'),
(2, 'Leeseol', 'wuliao102399');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangdan`
--
ALTER TABLE `bangdan`
  ADD PRIMARY KEY (`bd_id`);

--
-- Indexes for table `liangfu`
--
ALTER TABLE `liangfu`
  ADD PRIMARY KEY (`lf_id`);

--
-- Indexes for table `mask`
--
ALTER TABLE `mask`
  ADD PRIMARY KEY (`mask_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `bangdan`
--
ALTER TABLE `bangdan`
  MODIFY `bd_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `liangfu`
--
ALTER TABLE `liangfu`
  MODIFY `lf_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用表AUTO_INCREMENT `mask`
--
ALTER TABLE `mask`
  MODIFY `mask_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
