-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 05:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaidik`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `sl_no` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `content` text NOT NULL,
  `location` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`sl_no`, `title`, `author`, `content`, `location`, `time`, `views`) VALUES
(1, 'bbbb', 'boss', 'gjsjtsrrrrrrrrrrrrrrrrrrrrrrr', '../assets/upload/blogs/bg4.88963029.jpg', '2021-11-06 16:17:35', 1),
(2, 'Agriculture', 'Vaidik_01', 'Agriculture is the practice of cultivating plants and livestock.[1] Agriculture was the key development in the rise of sedentary human civilization, whereby farming of domesticated species created food surpluses that enabled people to live in cities. The history of agriculture began thousands of years ago. After gathering wild grains beginning at least 105,000 years ago, nascent farmers began to plant them around 11,500 years ago. Pigs, sheep, and cattle were domesticated over 10,000 years ago. Plants were independently cultivated in at least 11 regions of the world. Industrial agriculture based on large-scale monoculture in the twentieth century came to dominate agricultural output, though about 2 billion people still depended on subsistence agriculture.', 'assets/upload/articles/dd.jfif', '2021-10-13 11:39:00', 2),
(3, 'engineering', 'anand', 'tajajq', 'assets/upload/articles/bootstrap_7.png', '2021-11-05 03:35:04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `sl_no` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `content` text NOT NULL,
  `location` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`sl_no`, `title`, `author`, `content`, `location`, `time`, `views`) VALUES
(1, 'fruits', 'anand', 'aaaaaaaddddddddddddgggggggggg', '../assets/upload/blogs/boostrap_9.jpg', '2021-11-06 06:56:49', 2),
(2, 'Best Way to Do Eco and Agriculture', 'Vaidik_01', 'Unlike our current broken industrial agriculture model, eco-farming answers these questions as a food system, with people and farmers at its heart.\r\n\r\nEco-farming combines modern science and innovation with respect for nature and biodiversity. It ensures healthy farming and healthy food. It protects the soil, the water and the climate. It does not contaminate the environment with chemical inputs or use genetically engineered crops. And it places people and farmers—consumers and producers, rather than the corporations who control our food now—at its very heart.\r\n\r\nIt is a vision of sustainability and food sovereignty in which food is grown with health and safety first and where control over food and farming rests with local communities, rather than transnational corporations.\r\n\r\nSeven Basic Principles of Eco-Farming\r\nFood sovereignty: Producers and consumers, not corporations, should control the food chain and determine how food is produced.\r\nRewarding rural livelihoods: Eco-agriculture is instrumental in rural development, food security and fighting poverty.\r\nSmarter food production and yields: Eco-agriculture can create higher yields to help feed the world.\r\nBiodiversity: Promoting diversity in crops, instead of monocultures like corn and soy, is essential to protecting nature.\r\nSustainable soil: Soil fertility can improve using eco-farming methods and refraining from chemical fertilizers and inputs.\r\nEcological pest protection: Farmers can control pest damage and weeds effectively through natural means instead of chemical pesticides.\r\nFood Resilience: Diverse and resilient agriculture, not monoculture crops, is the best way to protect communities from shocks from climate and food prices.', 'assets/upload/blogs/blog-1.png', '2021-10-13 11:57:44', 3),
(3, 'Best Way to Do Eco and Agriculture', 'Vaidik_02', 'Unlike our current broken industrial agriculture model, eco-farming answers these questions as a food system, with people and farmers at its heart.\r\n\r\nEco-farming combines modern science and innovation with respect for nature and biodiversity. It ensures healthy farming and healthy food. It protects the soil, the water and the climate. It does not contaminate the environment with chemical inputs or use genetically engineered crops. And it places people and farmers—consumers and producers, rather than the corporations who control our food now—at its very heart.\r\n\r\nIt is a vision of sustainability and food sovereignty in which food is grown with health and safety first and where control over food and farming rests with local communities, rather than transnational corporations.\r\n\r\nSeven Basic Principles of Eco-Farming\r\nFood sovereignty: Producers and consumers, not corporations, should control the food chain and determine how food is produced.\r\nRewarding rural livelihoods: Eco-agriculture is instrumental in rural development, food security and fighting poverty.\r\nSmarter food production and yields: Eco-agriculture can create higher yields to help feed the world.\r\nBiodiversity: Promoting diversity in crops, instead of monocultures like corn and soy, is essential to protecting nature.\r\nSustainable soil: Soil fertility can improve using eco-farming methods and refraining from chemical fertilizers and inputs.\r\nEcological pest protection: Farmers can control pest damage and weeds effectively through natural means instead of chemical pesticides.\r\nFood Resilience: Diverse and resilient agriculture, not monoculture crops, is the best way to protect communities from shocks from climate and food prices.', 'assets/upload/blogs/blog-2.png', '2021-10-12 12:56:50', 1),
(4, 'Agriculture', 'Vaidik_02', 'Agriculture, with its allied sectors, is unquestionably the largest livelihood provider in India, more so in the vast rural areas. It also contributes a significant figure to the Gross Domestic Product (GDP). Sustainable agriculture, in terms of food security, rural employment, and environmentally sustainable technologies such as soil conservation, sustainable natural resource management and biodiversity protection, are essential for holistic rural development. Indian agriculture and allied activities have witnessed a green revolution, a white revolution, a yellow revolution and a blue revolution.\r\nThis section provides the information on agriculture produces; machineries, research etc. Detailed information on the government policies, schemes, agriculture loans, market prices, animal husbandry, fisheries, horticulture, loans & credit, sericulture etc. is also available.\r\n\r\nAgriculture, with its allied sectors, is unquestionably the largest livelihood provider in India, more so in the vast rural areas. It also contributes a significant figure to the Gross Domestic Product (GDP). Sustainable agriculture, in terms of food security, rural employment, and environmentally sustainable technologies such as soil conservation, sustainable natural resource management and biodiversity protection, are essential for holistic rural development. Indian agriculture and allied activities have witnessed a green revolution, a white revolution, a yellow revolution and a blue revolution.\r\nThis section provides the information on agriculture produces; machineries, research etc. Detailed information on the government policies, schemes, agriculture loans, market prices, animal husbandry, fisheries, horticulture, loans & credit, sericulture etc. is also available.\r\n\r\nAgriculture, with its allied sectors, is unquestionably the largest livelihood provider in India, more so in the vast rural areas. It also contributes a significant figure to the Gross Domestic Product (GDP). Sustainable agriculture, in terms of food security, rural employment, and environmentally sustainable technologies such as soil conservation, sustainable natural resource management and biodiversity protection, are essential for holistic rural development. Indian agriculture and allied activities have witnessed a green revolution, a white revolution, a yellow revolution and a blue revolution.\r\nThis section provides the information on agriculture produces; machineries, research etc. Detailed information on the government policies, schemes, agriculture loans, market prices, animal husbandry, fisheries, horticulture, loans & credit, sericulture etc. is also available.', 'assets/upload/blogs/unnamed-1.jpg', '2021-10-12 13:04:42', 2),
(5, 'Agriculture 02', 'Vaidik_03', 'Agriculture, with its allied sectors, is unquestionably the largest livelihood provider in India, more so in the vast rural areas. It also contributes a significant figure to the Gross Domestic Product (GDP). Sustainable agriculture, in terms of food security, rural employment, and environmentally sustainable technologies such as soil conservation, sustainable natural resource management and biodiversity protection, are essential for holistic rural development. Indian agriculture and allied activities have witnessed a green revolution, a white revolution, a yellow revolution and a blue revolution.\r\nThis section provides the information on agriculture produces; machineries, research etc. Detailed information on the government policies, schemes, agriculture loans, market prices, animal husbandry, fisheries, horticulture, loans & credit, sericulture etc. is also available.\r\n\r\nAgriculture, with its allied sectors, is unquestionably the largest livelihood provider in India, more so in the vast rural areas. It also contributes a significant figure to the Gross Domestic Product (GDP). Sustainable agriculture, in terms of food security, rural employment, and environmentally sustainable technologies such as soil conservation, sustainable natural resource management and biodiversity protection, are essential for holistic rural development. Indian agriculture and allied activities have witnessed a green revolution, a white revolution, a yellow revolution and a blue revolution.\r\nThis section provides the information on agriculture produces; machineries, research etc. Detailed information on the government policies, schemes, agriculture loans, market prices, animal husbandry, fisheries, horticulture, loans & credit, sericulture etc. is also available.\r\n\r\nAgriculture, with its allied sectors, is unquestionably the largest livelihood provider in India, more so in the vast rural areas. It also contributes a significant figure to the Gross Domestic Product (GDP). Sustainable agriculture, in terms of food security, rural employment, and environmentally sustainable technologies such as soil conservation, sustainable natural resource management and biodiversity protection, are essential for holistic rural development. Indian agriculture and allied activities have witnessed a green revolution, a white revolution, a yellow revolution and a blue revolution.\r\nThis section provides the information on agriculture produces; machineries, research etc. Detailed information on the government policies, schemes, agriculture loans, market prices, animal husbandry, fisheries, horticulture, loans & credit, sericulture etc. is also available.\r\n\r\nAgriculture, with its allied sectors, is unquestionably the largest livelihood provider in India, more so in the vast rural areas. It also contributes a significant figure to the Gross Domestic Product (GDP). Sustainable agriculture, in terms of food security, rural employment, and environmentally sustainable technologies such as soil conservation, sustainable natural resource management and biodiversity protection, are essential for holistic rural development. Indian agriculture and allied activities have witnessed a green revolution, a white revolution, a yellow revolution and a blue revolution.\r\nThis section provides the information on agriculture produces; machineries, research etc. Detailed information on the government policies, schemes, agriculture loans, market prices, animal husbandry, fisheries, horticulture, loans & credit, sericulture etc. is also available.', 'assets/upload/blogs/photo.jpg', '2021-10-12 13:04:33', 1),
(6, 'AAAA', 'AAAAAAAAAAA', 'Agriculture is the practice of cultivating plants and livestock.[1] Agriculture was the key development in the rise of sedentary human civilization, whereby farming of domesticated species created food surpluses that enabled people to live in cities. The history of agriculture began thousands of years ago. After gathering wild grains beginning at least 105,000 years ago, nascent farmers began to plant them around 11,500 years ago. Pigs, sheep, and cattle were domesticated over 10,000 years ago. Plants were independently cultivated in at least 11 regions of the world. Industrial agriculture based on large-scale monoculture in the twentieth century came to dominate agricultural output, though about 2 billion people still depended on subsistence agriculture.\r\n\r\nModern agronomy, plant breeding, agrochemicals such as pesticides and fertilizers, and technological developments have sharply increased crop yields, while causing widespread ecological and environmental damage. Selective breeding and modern practices in animal husbandry have similarly increased the output of ', 'assets/upload/blogs/SSSSS.jpg', '2021-10-13 11:09:17', 0),
(7, 'test blog', 'anand', 'test one to see where it is adding\r\n', 'assets/upload/blogs/', '2021-11-01 04:07:39', 0),
(8, 'test', 'anand', 'test one blog to see where it si addign', 'assets/upload/blogs/boostrap_9.jpg', '2021-11-01 04:08:26', 0),
(9, 'tra', 'fa', 'fa', 'assets/upload/blogs/bootstrap_5.png', '2021-11-05 02:11:23', 0),
(10, 'hey', 'anand', 'asdfg', 'assets/upload/blogs/bg4.88963029.jpg', '2021-11-05 02:13:19', 0),
(11, 'hey', 'anand', 'asdfg', '../assets/upload/blogs/bg4.88963029.jpg', '2021-11-05 02:14:16', 0),
(12, 'hey', 'annand', 'hreyq', '../assets/upload/blogs/boostrap_9.jpg', '2021-11-05 15:11:45', 0),
(13, 'testing blog', 'anand', 'tis is the testing blog', '../assets/upload/blogs/mallu 1.jpeg', '2021-11-05 15:18:34', 0),
(14, 'fruits', 'boss', 'fruits are very good for our health and also keep in mind that health is wealth!!', '../assets/upload/blogs/gig3.png', '2021-11-06 06:38:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `sl_no` int(11) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone_number` int(13) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`sl_no`, `full_name`, `email`, `phone_number`, `message`, `time`) VALUES
(2, 'Vaidik', 'vaidik123@gmail.com', 2147483647, 'Agriculture, with its allied sectors, is unquestionably the largest livelihood provider in India, more so in the vast rural areas.', '2021-10-07 04:32:12'),
(3, 'Robin Patra', 'vaidik123@gmail.com', 2147483647, 'hello there', '2021-10-12 13:08:17'),
(4, 'andy', 'anand@anand.com', 2147483647, 'dummy message', '2021-10-31 06:52:38'),
(5, 'andy', 'anand@anand.com', 2147483647, 'dummy message', '2021-10-31 06:52:39'),
(6, 'andy', 'anand@anand.com', 2147483647, 'dummy message', '2021-10-31 06:55:56'),
(7, 'andy', 'anand@anand.com', 2147483647, 'dummy message', '2021-10-31 06:55:56'),
(8, 'andy', 'anand@anand.com', 2147483647, 'dummy message', '2021-10-31 06:57:25'),
(9, 'andy', 'anand@anand.com', 2147483647, 'dummy message', '2021-10-31 06:57:25'),
(10, 'Anand Reddy', 'anand@anand.com', 2147483647, 'fdfgdhj', '2021-10-31 06:58:07'),
(11, 'Anand Reddy', 'ram@gmail.com', 2147483647, 'fdsf', '2021-10-31 07:09:25'),
(12, 'Anand Reddy', 'anandredddynaskante@gmail.com', 2147483647, 'hi bro', '2021-10-31 07:30:29'),
(13, 'Anand Reddy', 'anandredddynaskante@gmail.com', 2147483647, 'hi bro', '2021-10-31 07:32:39'),
(14, 'Anand Reddy', 'anand@anand.com', 2147483647, 'hey bro', '2021-10-31 07:36:06'),
(15, 'Anand Reddy', 'sita@gmail.com', 2147483647, 'hey bro', '2021-10-31 07:42:29'),
(16, 'Anand Reddy', 'sita@gmail.com', 2147483647, 'e sala cup numde', '2021-10-31 07:51:10'),
(17, 'Anand Reddy', 'anand@anand.coms', 2147483647, 'fdsf', '2021-10-31 07:51:51'),
(18, 'Anand Reddy', 'anand@anand.coms', 2147483647, 'fdfgdhj', '2021-10-31 07:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `sl_no` int(11) NOT NULL,
  `author` text NOT NULL,
  `location` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`sl_no`, `author`, `location`, `time`) VALUES
(1, '123', '../assets/upload/images/bootstrap_3.png', '2021-11-05 15:12:22'),
(4, 'anand reddy', '../assets/upload/images/bootstrap_6.png', '2021-11-05 09:07:56'),
(6, 'Anand Reddy', '../assets/upload/images/bg4.88963029.jpg', '2021-11-05 15:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sl_no` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sl_no`, `username`, `email`, `password`) VALUES
(1, 'vaidik', 'vaidik123@gmail.com', 'Vaidik@1234');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `location` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `location`, `time`) VALUES
(5, 'anand', '../assets/upload/videos/1. Welcome To The Course.mp4', '2021-11-06 15:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `videos2`
--

CREATE TABLE `videos2` (
  `sl_no` int(11) NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos2`
--

INSERT INTO `videos2` (`sl_no`, `name`, `location`, `time`) VALUES
(1, 'Vim Editor Fundamentals', 'assets/video/Vim Editor Fundamentals.mp4', '2021-10-07 13:08:54'),
(2, 'clients', 'assets/video/clients.mp4', '2021-10-07 13:09:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos2`
--
ALTER TABLE `videos2`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `videos2`
--
ALTER TABLE `videos2`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
