-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 02:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

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
(1, 'aaaaaaaa', 'Arun Das', 'Agriculture is the practice of cultivating plants and livestock.[1] Agriculture was the key development in the rise of sedentary human civilization, whereby farming of domesticated species created food surpluses that enabled people to live in cities. The history of agriculture began thousands of years ago. After gathering wild grains beginning at least 105,000 years ago, nascent farmers began to plant them around 11,500 years ago. Pigs, sheep, and cattle were domesticated over 10,000 years ago. Plants were independently cultivated in at least 11 regions of the world. Industrial agriculture based on large-scale monoculture in the twentieth century came to dominate agricultural output, though about 2 billion people still depended on subsistence agriculture.\r\n\r\nModern agronomy, plant breeding, agrochemicals such as pesticides and fertilizers, and technological developments have sharply increased crop yields, while causing widespread ecological and environmental damage. Selective breeding and modern practices in animal husbandry have similarly increased the output of \r\n', 'assets/upload/articles/SSSSS.jpg', '2021-10-13 11:38:56', 1),
(2, 'Agriculture', 'Vaidik_01', 'Agriculture is the practice of cultivating plants and livestock.[1] Agriculture was the key development in the rise of sedentary human civilization, whereby farming of domesticated species created food surpluses that enabled people to live in cities. The history of agriculture began thousands of years ago. After gathering wild grains beginning at least 105,000 years ago, nascent farmers began to plant them around 11,500 years ago. Pigs, sheep, and cattle were domesticated over 10,000 years ago. Plants were independently cultivated in at least 11 regions of the world. Industrial agriculture based on large-scale monoculture in the twentieth century came to dominate agricultural output, though about 2 billion people still depended on subsistence agriculture.', 'assets/upload/articles/dd.jfif', '2021-10-13 11:39:00', 2);

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
(1, 'Vegetables', 'Vaidik_01', 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds. An alternate definition of the term is applied somewhat arbitrarily, often by culinary and cultural tradition. It may exclude foods derived from some plants that are fruits, flowers, nuts, and cereal grains, but include savoury fruits such as tomatoes and courgettes, flowers such as broccoli, and seeds such as pulses.\r\n\r\nOriginally, vegetables were collected from the wild by hunter-gatherers and entered cultivation in several parts of the world, probably during the period 10,000 BC to 7,000 BC, when a new agricultural way of life developed. At first, plants which grew locally would have been cultivated, but as time went on, trade brought exotic crops from elsewhere to add to domestic types. Nowadays, most vegetables are grown all over the world as climate permits, and crops may be cultivated in protected environments in less suitable locations. China is the largest producer of vegetables, and global trade in agricultural products allows consumers to purchase vegetables grown in faraway countries. The scale of production varies from subsistence farmers supplying the needs of their family for food, to agribusinesses with vast acreages of single-product crops. Depending on the type of vegetable concerned, harvesting the crop is followed by grading, storing, processing, and marketing.\r\n\r\nVegetables can be eaten either raw or cooked and play an important role in human nutrition, being mostly low in fat and carbohydrates, but high in vitamins, minerals and dietary fiber. Many nutritionists encourage people to consume plenty of fruit and vegetables, five or more portions a day often being recommended.', 'assets/upload/blogs/a.jpg', '2021-10-13 11:57:36', 2),
(2, 'Best Way to Do Eco and Agriculture', 'Vaidik_01', 'Unlike our current broken industrial agriculture model, eco-farming answers these questions as a food system, with people and farmers at its heart.\r\n\r\nEco-farming combines modern science and innovation with respect for nature and biodiversity. It ensures healthy farming and healthy food. It protects the soil, the water and the climate. It does not contaminate the environment with chemical inputs or use genetically engineered crops. And it places people and farmers—consumers and producers, rather than the corporations who control our food now—at its very heart.\r\n\r\nIt is a vision of sustainability and food sovereignty in which food is grown with health and safety first and where control over food and farming rests with local communities, rather than transnational corporations.\r\n\r\nSeven Basic Principles of Eco-Farming\r\nFood sovereignty: Producers and consumers, not corporations, should control the food chain and determine how food is produced.\r\nRewarding rural livelihoods: Eco-agriculture is instrumental in rural development, food security and fighting poverty.\r\nSmarter food production and yields: Eco-agriculture can create higher yields to help feed the world.\r\nBiodiversity: Promoting diversity in crops, instead of monocultures like corn and soy, is essential to protecting nature.\r\nSustainable soil: Soil fertility can improve using eco-farming methods and refraining from chemical fertilizers and inputs.\r\nEcological pest protection: Farmers can control pest damage and weeds effectively through natural means instead of chemical pesticides.\r\nFood Resilience: Diverse and resilient agriculture, not monoculture crops, is the best way to protect communities from shocks from climate and food prices.', 'assets/upload/blogs/blog-1.png', '2021-10-13 11:57:44', 3),
(3, 'Best Way to Do Eco and Agriculture', 'Vaidik_02', 'Unlike our current broken industrial agriculture model, eco-farming answers these questions as a food system, with people and farmers at its heart.\r\n\r\nEco-farming combines modern science and innovation with respect for nature and biodiversity. It ensures healthy farming and healthy food. It protects the soil, the water and the climate. It does not contaminate the environment with chemical inputs or use genetically engineered crops. And it places people and farmers—consumers and producers, rather than the corporations who control our food now—at its very heart.\r\n\r\nIt is a vision of sustainability and food sovereignty in which food is grown with health and safety first and where control over food and farming rests with local communities, rather than transnational corporations.\r\n\r\nSeven Basic Principles of Eco-Farming\r\nFood sovereignty: Producers and consumers, not corporations, should control the food chain and determine how food is produced.\r\nRewarding rural livelihoods: Eco-agriculture is instrumental in rural development, food security and fighting poverty.\r\nSmarter food production and yields: Eco-agriculture can create higher yields to help feed the world.\r\nBiodiversity: Promoting diversity in crops, instead of monocultures like corn and soy, is essential to protecting nature.\r\nSustainable soil: Soil fertility can improve using eco-farming methods and refraining from chemical fertilizers and inputs.\r\nEcological pest protection: Farmers can control pest damage and weeds effectively through natural means instead of chemical pesticides.\r\nFood Resilience: Diverse and resilient agriculture, not monoculture crops, is the best way to protect communities from shocks from climate and food prices.', 'assets/upload/blogs/blog-2.png', '2021-10-12 12:56:50', 1),
(4, 'Agriculture', 'Vaidik_02', 'Agriculture, with its allied sectors, is unquestionably the largest livelihood provider in India, more so in the vast rural areas. It also contributes a significant figure to the Gross Domestic Product (GDP). Sustainable agriculture, in terms of food security, rural employment, and environmentally sustainable technologies such as soil conservation, sustainable natural resource management and biodiversity protection, are essential for holistic rural development. Indian agriculture and allied activities have witnessed a green revolution, a white revolution, a yellow revolution and a blue revolution.\r\nThis section provides the information on agriculture produces; machineries, research etc. Detailed information on the government policies, schemes, agriculture loans, market prices, animal husbandry, fisheries, horticulture, loans & credit, sericulture etc. is also available.\r\n\r\nAgriculture, with its allied sectors, is unquestionably the largest livelihood provider in India, more so in the vast rural areas. It also contributes a significant figure to the Gross Domestic Product (GDP). Sustainable agriculture, in terms of food security, rural employment, and environmentally sustainable technologies such as soil conservation, sustainable natural resource management and biodiversity protection, are essential for holistic rural development. Indian agriculture and allied activities have witnessed a green revolution, a white revolution, a yellow revolution and a blue revolution.\r\nThis section provides the information on agriculture produces; machineries, research etc. Detailed information on the government policies, schemes, agriculture loans, market prices, animal husbandry, fisheries, horticulture, loans & credit, sericulture etc. is also available.\r\n\r\nAgriculture, with its allied sectors, is unquestionably the largest livelihood provider in India, more so in the vast rural areas. It also contributes a significant figure to the Gross Domestic Product (GDP). Sustainable agriculture, in terms of food security, rural employment, and environmentally sustainable technologies such as soil conservation, sustainable natural resource management and biodiversity protection, are essential for holistic rural development. Indian agriculture and allied activities have witnessed a green revolution, a white revolution, a yellow revolution and a blue revolution.\r\nThis section provides the information on agriculture produces; machineries, research etc. Detailed information on the government policies, schemes, agriculture loans, market prices, animal husbandry, fisheries, horticulture, loans & credit, sericulture etc. is also available.', 'assets/upload/blogs/unnamed-1.jpg', '2021-10-12 13:04:42', 2),
(5, 'Agriculture 02', 'Vaidik_03', 'Agriculture, with its allied sectors, is unquestionably the largest livelihood provider in India, more so in the vast rural areas. It also contributes a significant figure to the Gross Domestic Product (GDP). Sustainable agriculture, in terms of food security, rural employment, and environmentally sustainable technologies such as soil conservation, sustainable natural resource management and biodiversity protection, are essential for holistic rural development. Indian agriculture and allied activities have witnessed a green revolution, a white revolution, a yellow revolution and a blue revolution.\r\nThis section provides the information on agriculture produces; machineries, research etc. Detailed information on the government policies, schemes, agriculture loans, market prices, animal husbandry, fisheries, horticulture, loans & credit, sericulture etc. is also available.\r\n\r\nAgriculture, with its allied sectors, is unquestionably the largest livelihood provider in India, more so in the vast rural areas. It also contributes a significant figure to the Gross Domestic Product (GDP). Sustainable agriculture, in terms of food security, rural employment, and environmentally sustainable technologies such as soil conservation, sustainable natural resource management and biodiversity protection, are essential for holistic rural development. Indian agriculture and allied activities have witnessed a green revolution, a white revolution, a yellow revolution and a blue revolution.\r\nThis section provides the information on agriculture produces; machineries, research etc. Detailed information on the government policies, schemes, agriculture loans, market prices, animal husbandry, fisheries, horticulture, loans & credit, sericulture etc. is also available.\r\n\r\nAgriculture, with its allied sectors, is unquestionably the largest livelihood provider in India, more so in the vast rural areas. It also contributes a significant figure to the Gross Domestic Product (GDP). Sustainable agriculture, in terms of food security, rural employment, and environmentally sustainable technologies such as soil conservation, sustainable natural resource management and biodiversity protection, are essential for holistic rural development. Indian agriculture and allied activities have witnessed a green revolution, a white revolution, a yellow revolution and a blue revolution.\r\nThis section provides the information on agriculture produces; machineries, research etc. Detailed information on the government policies, schemes, agriculture loans, market prices, animal husbandry, fisheries, horticulture, loans & credit, sericulture etc. is also available.\r\n\r\nAgriculture, with its allied sectors, is unquestionably the largest livelihood provider in India, more so in the vast rural areas. It also contributes a significant figure to the Gross Domestic Product (GDP). Sustainable agriculture, in terms of food security, rural employment, and environmentally sustainable technologies such as soil conservation, sustainable natural resource management and biodiversity protection, are essential for holistic rural development. Indian agriculture and allied activities have witnessed a green revolution, a white revolution, a yellow revolution and a blue revolution.\r\nThis section provides the information on agriculture produces; machineries, research etc. Detailed information on the government policies, schemes, agriculture loans, market prices, animal husbandry, fisheries, horticulture, loans & credit, sericulture etc. is also available.', 'assets/upload/blogs/photo.jpg', '2021-10-12 13:04:33', 1),
(6, 'AAAA', 'AAAAAAAAAAA', 'Agriculture is the practice of cultivating plants and livestock.[1] Agriculture was the key development in the rise of sedentary human civilization, whereby farming of domesticated species created food surpluses that enabled people to live in cities. The history of agriculture began thousands of years ago. After gathering wild grains beginning at least 105,000 years ago, nascent farmers began to plant them around 11,500 years ago. Pigs, sheep, and cattle were domesticated over 10,000 years ago. Plants were independently cultivated in at least 11 regions of the world. Industrial agriculture based on large-scale monoculture in the twentieth century came to dominate agricultural output, though about 2 billion people still depended on subsistence agriculture.\r\n\r\nModern agronomy, plant breeding, agrochemicals such as pesticides and fertilizers, and technological developments have sharply increased crop yields, while causing widespread ecological and environmental damage. Selective breeding and modern practices in animal husbandry have similarly increased the output of ', 'assets/upload/blogs/SSSSS.jpg', '2021-10-13 11:09:17', 0);

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
(3, 'Robin Patra', 'vaidik123@gmail.com', 2147483647, 'hello there', '2021-10-12 13:08:17');

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
(2, 'Vaidik_01', 'assets/upload/images/a.jpg', '2021-10-06 20:16:39'),
(3, 'Vaidik_02', 'assets/upload/images/b.jpg', '2021-10-06 20:17:00'),
(4, 'Vaidik_03', 'assets/upload/images/c.jpg', '2021-10-06 20:17:11');

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
(1, 'Badmintion', 'assets/upload/videos/qq.mp4', '2021-10-06 18:57:26');

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
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos2`
--
ALTER TABLE `videos2`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
