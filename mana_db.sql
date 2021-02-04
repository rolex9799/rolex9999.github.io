-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 04, 2021 at 10:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mana_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `surname` varchar(256) NOT NULL,
  `location` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `message` text NOT NULL,
  `sent at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `surname`, `location`, `email`, `message`, `sent at`) VALUES
(1, ' Rolands', 'Repetto', 'Latvia', 'rolandsrepetto@gmail.com', 'Hello, Worlds!', '2021-01-31 17:03:57'),
(2, ' Viktorija', 'Pobegusa', 'Latvia', 'vipdent@inbox.lv', 'Kā tev iet Lugano?', '2021-01-31 17:50:16'),
(3, ' Elijs', 'Robalts', 'Swansea', 'elijs@inbox.lv', 'Give me some LSO!', '2021-01-31 18:08:31'),
(4, ' Sigurds', 'Skangals', 'Salaspils', 'vipdent@inbox.lv', 'Hello, mein Fuhrer!', '2021-02-03 17:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `Title` varchar(256) NOT NULL,
  `Body` text NOT NULL,
  `Introtext` varchar(256) DEFAULT NULL,
  `Image` varchar(256) DEFAULT NULL,
  `Created at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Updated at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `Title`, `Body`, `Introtext`, `Image`, `Created at`, `Updated at`) VALUES
(1, 'Title 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu enim metus. Vestibulum mattis lectus a sapien pretium ornare. Pellentesque posuere, tortor vitae luctus malesuada, tellus neque molestie elit, vel tristique tellus ligula sit amet elit. Nunc rhoncus fringilla sem sit amet convallis. Fusce a dolor eu purus ultrices eleifend. Duis luctus imperdiet elit quis tincidunt. Duis sollicitudin nibh quis massa laoreet, eu placerat orci molestie.\r\n\r\nFusce nec ex mi. Suspendisse varius ultrices elementum. Morbi sit amet mauris in dui malesuada condimentum. Praesent sed sapien eu enim vestibulum fringilla. Curabitur congue convallis est, vel lobortis eros feugiat at. Nullam congue vel tellus quis eleifend. Fusce id sagittis arcu. Ut imperdiet nisl vitae dui venenatis, sed scelerisque orci vehicula. Curabitur eget nisl imperdiet, maximus tortor sit amet, lobortis nulla. Nunc hendrerit odio a mi finibus, sed volutpat metus eleifend. Vestibulum est urna, porta id felis sed, laoreet rhoncus dui.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'https://images.unsplash.com/photo-1511447333015-45b65e60f6d5?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max', '2021-01-31 10:04:53', '2021-01-31 10:04:53'),
(3, 'Lugano Hockey Club', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nulla neque, malesuada posuere justo et, faucibus condimentum quam. Aliquam ut ex id nunc convallis tincidunt ac a arcu. Curabitur semper, nunc in sollicitudin gravida, erat orci commodo ligula, vel tempor purus est semper metus. Duis luctus pulvinar nisi, eu tempor est scelerisque in. Etiam pellentesque, diam ut faucibus volutpat, nulla lacus dignissim arcu, a cursus mauris quam vitae ex. Nunc ac pellentesque massa, vitae eleifend tellus. Integer non tellus lectus.\r\n\r\nMorbi bibendum convallis urna. Morbi gravida ex id condimentum ultricies. Praesent sit amet massa eu tortor varius lacinia. Fusce vitae mauris laoreet, malesuada nulla vel, volutpat lectus. Proin finibus, turpis a luctus blandit, felis lorem sagittis tellus, ac pretium quam lorem id ligula. Integer tincidunt ornare scelerisque. Vivamus hendrerit quam risus, sit amet placerat turpis sagittis id. Aliquam placerat dapibus lectus vitae consectetur. Curabitur semper sapien at dui elementum, ac convallis tortor commodo. Sed mi mi, malesuada sed leo non, commodo varius tortor. Quisque at facilisis lectus.\r\n\r\nPraesent et eros eget urna sollicitudin faucibus. Aenean ex orci, aliquet eget euismod ac, placerat a erat. Nulla facilisi. Ut lectus odio, faucibus eget sollicitudin eu, pretium sit amet mauris. Nulla bibendum porta risus, at consectetur velit posuere sit amet. Phasellus in augue id nisl tempor tincidunt ut eget odio. Etiam magna turpis, tincidunt non libero at, finibus cursus ante. In vel metus nec risus semper viverra. Proin id turpis vel magna sollicitudin bibendum eu vitae quam. Aenean posuere lectus sit amet mi consectetur, eu suscipit odio euismod. Cras auctor neque nec auctor egestas. Quisque dui dolor, pellentesque ut volutpat quis, auctor quis dui. Donec vitae pharetra nisi. Phasellus ac mauris non turpis faucibus mollis. Maecenas tincidunt consectetur sodales.\r\n\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'https://www.hclugano.ch/wp-content/uploads/2020/02/News-Derby-HC-Lugano-vs-HC-Ambri-Piotta-1920x960.jpg', '2021-01-31 11:49:37', '2021-01-31 11:49:37'),
(16, ' Blogs 1Feb 2021', 'This is going to be a very exciting month and I am looking forward towards it. My wishes for this month - have a great health!!!\r\n\r\nThis is going to be a cool month, really :D', 'Hm, Ne month and feeling very excited!', 'https://www.dictionary.com/e/wp-content/uploads/2014/02/1000x700-february.jpg', '2021-01-31 23:23:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
