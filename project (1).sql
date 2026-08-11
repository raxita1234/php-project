-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2025 at 10:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `caretips`
--

CREATE TABLE `caretips` (
  `id` int(12) NOT NULL,
  `tipsname` varchar(100) NOT NULL,
  `tipsdescription` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caretips`
--

INSERT INTO `caretips` (`id`, `tipsname`, `tipsdescription`, `image`) VALUES
(3, 'WATERING', 'Water your plants regularly but avoid overwatering. Let the soil dry slightly between watering.', '1762339624_tips1-removebg-preview (1).png'),
(4, 'SUNLIGHT', 'Provide adequate sunlight depending on the plant type — some prefer direct, others indirect.', '1760813149_tips2.jpg'),
(5, 'POTTING', 'Use well-draining soil and pots with drainage holes to prevent root rot and promote healthy growth.', '1762339584_tips3-removebg-preview (1).png'),
(6, 'TEMPERATURE', 'Keep plants within their ideal temperature range, away from heating vents or cold drafts.', '1762339537_tips4-removebg-preview.png'),
(7, 'PRUNING', 'Regularly remove dead leaves and trim overgrown branches to encourage healthy growth.', '1760813512_tips5.jpg'),
(8, 'FERTILIZING', 'Feed your plants with appropriate fertilizer based on their type and growth stage.', '1762338360_tips6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `catname` varchar(100) NOT NULL,
  `catdescription` text NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catname`, `catdescription`, `image`) VALUES
(28, 'Indoor plant', 'Indoor plants are easy-to-care plants that grow well inside homes. They make the air fresh, add natural beauty, and create a calm and healthy environment.', '1759382297_img-cat.jpg1.webp'),
(29, 'Outdoor plant', 'Outdoor plants are grown outside in natural sunlight and fresh air. They are usually stronger and need more space to ower.', '1757680559_impossible-to-kill-outdoor-plants-1-2000-f513b0574cb04674a1bce40b832b28dd.webp'),
(30, 'Medicinal plant', 'Medicinal plants are natural plants used in traditional and modern medicine to treat different health problems. ', '1757680261_perennialherbs-1200x800-253492_60222ebd-baf0-4ec6-939a-b60aa532c6b9-410529_1080x.webp'),
(31, 'Succulent plant', 'Succulent plants are special plants that store water in their thick leaves, stems, or roots. ', '1757680318_types-of-succulents.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `rating`, `message`, `submitted_at`, `photo`) VALUES
(5, 'Shivani Agarwal', 'shivani.agarwal@example.com', 5, '“Loved the sleek design! Makes plant care super easy 🌱”', '2025-10-09 12:40:43', '1760013643_fb1.jpg'),
(6, 'Ishita Shah', 'ishita.shah@example.com', 5, '“Beautiful website with a modern vibe. Plant care tips are amazing!”', '2025-10-09 12:42:35', '1760013755_fb2.jpg'),
(7, 'Tara Malhotra', 'tara.malhotra@example.com', 5, '“Easy to navigate, beautiful design, and helpful tips 🌸”', '2025-10-09 12:45:50', '1760013950_fb3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `plantinformation`
--

CREATE TABLE `plantinformation` (
  `id` int(20) NOT NULL,
  `plantname` varchar(100) NOT NULL,
  `plantdescription` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plantinformation`
--

INSERT INTO `plantinformation` (`id`, `plantname`, `plantdescription`, `image`) VALUES
(2, 'Philodendron Brasil', 'Philodendron Brasil ek popular tropical indoor plant hai jo Araceae family se belong karti hai. Iske heart-shaped patte vibrant green aur yellow variegation ke saath hote hain, jo is plant ko visually striking aur decorative banate hain. Yeh low to medium indirect light me easily grow kar sakta hai, aur moderate watering ki zarurat hoti hai, soil ko slightly moist rakhna kaafi hota hai. Philodendron Brasil ek climbing plant hai, aur support structure ya moss pole ke saath vertically grow karna iske liye ideal hai. Yeh plant low maintenance aur air-purifying qualities ke liye bhi kaafi popular hai, jo indoor décor ke liye perfect banata hai.', '1759906356_image1.jpg'),
(3, 'Ginny Monstera', 'The Monstera Ginny, also known as Mini Monstera or Rhaphidophora tetrasperma, is a small, tropical climbing vine prized for its attractive, fenestrated leaves that resemble the classic Monstera. \r\n Native to Southern Thailand and Malaysia, this plant thrives in bright, indirect light but can tolerate medium light, although growth may slow and leaf patterns may become less distinct.', '1759906443_image2.jpg'),
(4, 'Topiary Plant', 'Topiary Plant ek decorative gardening technique ka part hai jisme plants ko specific shapes aur designs mein trim aur sculpt kiya jata hai. Yeh technique primarily evergreen shrubs aur trees, jaise Boxwood, Ficus, aur Juniper par use hoti hai, kyunki inke dense foliage se precise shapes banana aasan hota hai. Topiary plants ko formal gardens, patios, aur indoor décor ke liye kaafi pasand kiya jata hai, kyunki yeh aesthetic appeal aur elegance provide karte hain. Inhe healthy aur attractive banaye rakhne ke liye regular pruning aur shaping zaruri hai, saath hi moderate watering aur sunlight ki requirement hoti hai, plant ki species ke hisaab se.', '1759906501_image3.jpg'),
(5, 'Rhaphidophora', 'Rhaphidophora ek tropical climbing plant genus hai jo Araceae family se belong karti hai aur Southeast Asia aur Australasia mein naturally grow hoti hai. Iske patte heart-shaped aur glossy hote hain, aur mature plants mein patte mein natural splits aur fenestrations develop ho jate hain, jo isse visually striking banate hain. Yeh plant climbing habit rakhta hai aur aerial roots ke through support structures ko cling karta hai, jisse vertical growth possible hoti hai. Rhaphidophora ko bright indirect light aur warm, humid environment pasand hai, aur soil ko evenly moist rakhna chahiye, lekin overwatering se bachna zaruri hai.', '1759906546_image4.jpg'),
(6, 'Monstera Deliciosa', 'Monstera Deliciosa, jise commonly “Swiss Cheese Plant” bhi kaha jata hai, ek tropical evergreen vine hai jo Central America se originate hui hai. Iske bade, glossy, heart-shaped patte distinctive natural splits aur holes ke saath hote hain, jo is plant ko unique aur decorative banate hain. Monstera Deliciosa ko indoor aur outdoor dono jagah grow kiya ja sakta hai, lekin yeh bright indirect light mein sabse acchi tarah thrive karti hai. Yeh moderate watering pasand karti hai, aur soil ko evenly moist rakhna chahiye, lekin overwatering se bachna zaruri hai. Yeh plant humidity aur warm temperature ko prefer karta hai, aur occasional pruning se healthy growth aur attractive shape maintain ki ja sakti hai.', '1759906603_image5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sitesettings`
--

CREATE TABLE `sitesettings` (
  `id` int(10) NOT NULL,
  `sitename` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sitesettings`
--

INSERT INTO `sitesettings` (`id`, `sitename`, `address`, `phoneno`, `email`, `image`) VALUES
(1, 'bloombuddy plant ', 'To:Nani Monpari , Ta:Visavadar', '6354499311', 'raxita@2gmail.com', '1760104552_logo3-removebg-preview (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(5) NOT NULL,
  `catid` int(10) NOT NULL,
  `subcatname` varchar(100) NOT NULL,
  `subcatdescription` text NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `catid`, `subcatname`, `subcatdescription`, `image`) VALUES
(6, 28, 'Spider Plant', 'Spider Plant (Chlorophytum comosum) ek popular indoor plant hai jo easy-to-grow aur low-maintenance qualities ke liye jaana jata hai. Iske long, arching patte green aur white stripes ke saath hote hain, jo isse visually appealing banate hain. Spider Plant chhote “pups” ya offshoots produce karta hai, jisse naye plants easily propagate kiye ja sakte hain. Yeh plant bright, indirect light pasand karta hai lekin low light conditions me bhi survive kar sakta hai. ', '1757680937_Spider-Plant-1-1024x683_0b499b99-2477-4931-b532-256e3441e9e0.webp'),
(7, 29, 'Asparagus ferm', 'Asparagus Fern (Asparagus setaceus) ek elegant ornamental plant hai jo feathery, delicate green foliage ke liye jaana jata hai. Yeh plant tropical aur subtropical regions se belong karta hai aur indoor aur outdoor dono jagah grow kiya ja sakta hai. Asparagus Fern bright, indirect light pasand karta hai, aur moderate watering ki zarurat hoti hai — soil ko slightly moist rakhna ideal hai, lekin overwatering se bachna chahiye. ', '1759382884_1757681647_1757681044_asparagus_480x480.jpg'),
(8, 30, 'Tulsi', 'Tulsi (Ocimum sanctum), jise Holy Basil bhi kaha jata hai, ek sacred aur medicinal herb hai jo India me traditional homes aur gardens me commonly grow hoti hai. Iske aromatic green patte na sirf herbal remedies aur teas ke liye use hote hain, balki spiritual aur religious practices me bhi kaafi mahatvapurn hain. Tulsi ko full sunlight aur well-drained soil pasand hai, aur regular watering ki zarurat hoti hai, lekin overwatering se bachna chahiye. ', '1759384588_Screenshot 2025-09-12 182012.png'),
(9, 31, 'Aloe vera', 'Aloe Vera ek succulent plant hai jo thick, fleshy leaves ke liye jaana jata hai, jinme medicinal gel hota hai. Yeh plant dry aur arid conditions me easily grow karta hai aur low-maintenance nature ke liye kaafi popular hai. Aloe Vera bright, indirect sunlight pasand karta hai aur soil ko well-drained rakhna zaruri hai, overwatering se bachna chahiye. Iske gel ka use skin care, minor burns, aur natural remedies me hota hai, aur yeh indoor air-purifying qualities ke liye bhi famous hai.', '1757681531_Aloe-vera.jpg'),
(10, 28, 'Snake Plant', 'Snake Plant (Sansevieria trifasciata), jise Mother-in-Law’s Tongue bhi kaha jata hai, ek hardy aur low-maintenance indoor plant hai. Iske upright, sword-shaped patte thick aur fleshy hote hain, aur green ke shades aur yellow edges ke saath aate hain. Snake Plant low light conditions me bhi grow kar sakta hai aur overwatering ke liye kaafi tolerant hai, isliye beginners ke liye perfect hai.', '1757824429_Snake-Plant-1024x683_3aca64e5-5f49-4a05-8ff7-7f5098d365c4.webp'),
(11, 28, 'Baby Rubber Plant', 'Baby Rubber Plant (Peperomia obtusifolia) ek compact aur low-maintenance indoor plant hai jo glossy, thick, oval-shaped patton ke liye jaana jata hai. Iska slow-growing nature aur small size ise apartments, desks, aur shelves ke liye perfect banata hai. Yeh plant bright, indirect light pasand karta hai aur moderate watering ki zarurat hoti hai — soil ko slightly moist rakhna ideal hai, lekin overwatering se bachna chahiye.', '1757849998_Rubber-Plant-1024x683_edacff74-0fa3-41db-9ad4-df643c6a8597.webp'),
(13, 29, 'Ophiopogon', 'Ophiopogon, commonly known as Mondo Grass ya Dwarf Lilyturf, ek low-growing ornamental plant hai jo dense, grass-like foliage ke liye popular hai. Yeh plant shade-tolerant hai aur garden borders, ground cover, aur pots me easily grow karta hai. Ophiopogon slow-growing aur low-maintenance plant hai jo moderate watering aur well-drained soil pasand karta hai. Iske narrow, arching patte lush green carpet create karte hain, aur occasional small flowers aur berries bhi produce hote hain.', '1757850396_Ophiopogon_Black_Mondo_Grass_480x480.webp'),
(15, 29, 'Ipomoea', 'Ipomoea, commonly known as Morning Glory, ek fast-growing climbing plant hai jo vibrant, trumpet-shaped flowers ke liye popular hai. Yeh plant tropical aur subtropical regions se belong karta hai aur trellises, fences, aur pergolas par easily grow karta hai. Ipomoea full sunlight pasand karta hai aur well-drained soil me accha grow hota hai, saath hi moderate watering ki zarurat hoti hai.', '1757850615_download_67353ac7-288e-49aa-a7d2-4b0f0b116118_480x480.webp'),
(17, 30, ' Lemon Grass', 'Lemongrass (Cymbopogon citratus) ek aromatic perennial herb hai jo apne fresh, lemony scent ke liye jaana jata hai. Yeh herb tropical aur subtropical regions me naturally grow hota hai aur culinary, medicinal, aur aromatherapy purposes ke liye kaafi popular hai. Lemongrass full sunlight pasand karta hai aur well-drained soil me accha grow karta hai, saath hi regular watering se plant healthy aur lush rahta hai.', '1757850784_nurserylive-lemon-grass-plant47_9fd962c2-7643-47f5-8a08-031d9d204dfa_480x480.jpg'),
(18, 30, 'Sagargota', 'Sagargota (scientific name: Caesalpinia bonduc or Caesalpinia bonducella), also known as Fever Nut, is a thorny shrub native to tropical regions of the Indian subcontinent. This plant is highly valued for its medicinal properties and has a significant place in Ayurveda. The seeds of Sagargota are used to treat fever, inflammation, stomach pain, and joint ailments.', '1757850878_8677435688_9055ecf9b6_b_480x480.webp'),
(19, 31, 'Chinese Jade', 'Chinese Jade (scientific name: Crassula ovata), commonly known as Jade Plant, ek popular succulent houseplant hai jo thick, fleshy, oval-shaped green leaves ke liye jaana jata hai. Yeh plant low-maintenance aur hardy nature ke liye famous hai, aur indoor décor me prosperity aur positive energy laane ke liye Feng Shui me bhi use kiya jata hai.', '1757850969_Sinocrassula-yunnanensis-1536x864.jpg'),
(21, 31, 'Crown of Thorns', 'Crown of Thorns (scientific name: Euphorbia milii) ek popular ornamental succulent plant hai jo thorny stems aur bright, small flowers ke liye jaana jata hai. Yeh plant tropical aur subtropical regions se belong karta hai aur indoor aur outdoor dono jagah grow kiya ja sakta hai. Crown of Thorns full sunlight pasand karta hai aur well-drained soil me accha grow hota hai, saath hi moderate watering ki zarurat hoti hai — overwatering se bachna zaruri hai.', '1757851129_Euphorbia-milii-1536x864.jpg'),
(24, 28, 'Pothos', 'The Pothos Plant is a fast-growing indoor plant with green and golden heart-shaped leaves. It is very easy to care for, needs little water, and grows well in low or bright light. Pothos is perfect for beginners and adds a fresh, natural touch to any room.', '1759150426_Golden-Pothos-1024x683_ca21e0ef-8763-4599-89dc-e41017edfc35.webp'),
(26, 29, ' Vernonia', 'The Vernonia Plant is a flowering plant known for its beautiful purple blooms and medicinal properties. It grows well in warm and sunny areas with well-draining soil. Vernonia is often used in traditional medicine for treating fever, stomach pain, and skin problems. It also attracts butterflies and bees, making it a great choice for gardens. ', '1759152177_Vernonia_Summer_s_Swan_Song_PP28556___Stonehouse_Nursery_480x480.webp'),
(27, 30, 'Rosemary', 'The Rosemary Plant (Salvia rosmarinus) is a fragrant herb known for its needle-like green leaves and pleasant aroma. It grows best in sunny areas with well-draining soil and needs only moderate watering. Rosemary is widely used in cooking for its unique flavor and in medicine for improving memory and reducing stress.', '1759152039_Rosemary-Sprigs-Close-Up_0c9a522d-142c-4e56-a6b0-91ea23436dba_480x480.webp'),
(29, 31, 'Moonstone Plant', 'The Moonstone Plant (Pachyphytum oviferum) is a beautiful succulent known for its round, plump leaves that look like smooth stones. The leaves come in soft shades of pink, blue, or gray, giving the plant a unique and elegant look.', '1759152681_Pachyphytum-oviferum-1536x864.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'raxita', '98189abee0087c941760fde7926ece15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caretips`
--
ALTER TABLE `caretips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plantinformation`
--
ALTER TABLE `plantinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesettings`
--
ALTER TABLE `sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caretips`
--
ALTER TABLE `caretips`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `plantinformation`
--
ALTER TABLE `plantinformation`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
