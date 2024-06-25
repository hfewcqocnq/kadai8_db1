-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-06-25 14:47:50
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kadai08_db1`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai08_db1_table`
--

CREATE TABLE `kadai08_db1_table` (
  `id` int(12) NOT NULL,
  `kikkake` varchar(20) NOT NULL,
  `motomeru` varchar(20) NOT NULL,
  `kako` text NOT NULL,
  `sonota` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `kadai08_db1_table`
--

INSERT INTO `kadai08_db1_table` (`id`, `kikkake`, `motomeru`, `kako`, `sonota`, `date`) VALUES
(1, '紹介', 'どんなアイデアがあるのか見てみたい', 'dddddddddddd', 'dddddddddddddddddddd', '2024-06-24 23:00:20');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kadai08_db1_table`
--
ALTER TABLE `kadai08_db1_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kadai08_db1_table`
--
ALTER TABLE `kadai08_db1_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
