-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2023 at 09:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcqfea`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblmcq`
--

CREATE TABLE `tblmcq` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `type` varchar(15) NOT NULL,
  `correct_option` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblmcq`
--

INSERT INTO `tblmcq` (`id`, `question`, `type`, `correct_option`) VALUES
(1, 'मुझे कारों पर काम करना पसंद है...', 'R', 1),
(2, 'मुझे पहेलियाँ सुलझाना पसंद है...', 'I', 1),
(3, 'मुझे स्वतंत्र रूप से काम करना पसंद है...', 'A', 1),
(4, 'मुझे टीमों में काम करना पसंद है...', 'S', 1),
(5, 'मैं एक महत्वाकांक्षी व्यक्ति हूँ,\r\nमैंने अपने लिए लक्ष्य निर्धारित किए हैं...\r\n', 'E', 1),
(6, 'मुझे चीजों को व्यवस्थित करना पसंद है, (फाइलें, डेस्क/कार्यालय)...', 'C', 1),
(7, 'मुझे चीजें बनाना पसंद है...', 'R', 1),
(8, 'मुझे कला और संगीत के बारे में पढ़ना पसंद है...', 'A', 1),
(9, 'मुझे स्पष्ट निर्देश पसंद हैं काम करने के लिए...', 'C', 1),
(10, 'मुझे प्रभावित करने की कोशिश करना पसंद है या लोगों को राजी करना...', 'E', 1),
(11, 'मुझे प्रयोग करना पसंद है...', 'I', 1),
(12, 'मुझे लोगों को पढ़ाना या प्रशिक्षित करना पसंद है...', 'S', 1),
(13, 'मुझे लोगों की मदद करना पसंद है उनकी समस्याएँ हल करने में...', 'S', 1),
(14, 'मुझे जानवरों की देखभाल करना पसंद है...', 'R', 1),
(15, 'मुझे 8 घंटे काम करने में कोई आपत्ति नहीं होगी एक कार्यालय में प्रति दिन...', 'C', 1),
(16, 'मुझे चीजें बेचना पसंद है...', 'E', 1),
(17, 'मुझे रचनात्मक (Creative) लेखन में मजा आता है...', 'A', 1),
(18, 'मुझे विज्ञान पसंद है...', 'I', 1),
(19, 'में जल्दी नई ज़िम्मेदारिया ले सकता हूँ...', 'E', 1),
(20, 'मुझे लोगों को ठीक (Heal) करने में दिलचस्पी है...', 'S', 1),
(21, 'मुझे यह पता लगाने में मज़ा आता है कि कैसे चीजें काम करती हैं...', 'I', 1),
(22, 'मुझे चीजों को एक साथ रखना या चीजों को जोड़ना पसंद है...', 'R', 1),
(23, 'मैं एक रचनात्मक व्यक्ति हूं...', 'A', 1),
(24, 'मैं विवरण (Details) पर ध्यान देता हूं...', 'C', 1),
(25, 'मुझे फाइलिंग या टाइपिंग करना पसंद है...', 'C', 1),
(26, 'मुझे चीजों का विश्लेषण करना पसंद है (समस्याएं/स्थितियां)...', 'I', 1),
(27, 'मुझे संगीत वाद्ययंत्र बजाना या गाना पसंद है...', 'A', 1),
(28, 'मुझे अन्य संस्कृतियों के बारे में जानने में मज़ा आता है...', 'S', 1),
(29, 'मैं अपना खुद का व्यापार शुरू करना चाहूंगा...', 'E', 1),
(30, 'मुझे खाना बनाना पसंद है...', 'R', 1),
(31, 'मुझे नाटकों में अभिनय करना पसंद है...', 'A', 1),
(32, 'मैं एक व्यावहारिक (Practical) व्यक्ति हूं...', 'R', 1),
(33, 'मुझे नंबरों या चार्ट के साथ काम करना पसंद है...', 'I', 1),
(34, 'मुझे मुद्दों के बारे में चर्चा करना पसंद है...', 'S', 1),
(35, 'मैं अपने काम का रिकॉर्ड रखने में अच्छा हूं...', 'C', 1),
(36, 'मुझे नेतृत्व करना पसंद है...', 'E', 1),
(37, 'मुझे बाहर काम करना पसंद है...', 'R', 1),
(38, 'मैं एक कार्यालय में काम करना चाहूंगा...', 'C', 1),
(39, 'मैं गणित में अच्छा हूँ...', 'I', 1),
(40, 'मुझे लोगों की मदद करना अच्छा लगता है...', 'S', 1),
(41, 'मुझे चित्रकारी पसंद है...', 'A', 1),
(42, 'मुझे भाषण देना पसंद है...', 'E', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblmcq`
--
ALTER TABLE `tblmcq`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblmcq`
--
ALTER TABLE `tblmcq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
