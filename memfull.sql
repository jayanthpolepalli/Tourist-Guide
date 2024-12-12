-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 02:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `memfull`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `username` varchar(1000) NOT NULL,
  `comment` mediumtext NOT NULL,
  `place` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`username`, `comment`, `place`) VALUES
('j@g', 'I had visited the tirumala many times which is best place in the world for me I wil visit tirumala once in a year and we will enjoy many free facilities', 'Tirumala'),
('j@g', 'I had visited the kapila theertham every time i visit tirumala it is famous shiva temple', 'Kapila Theertham');

-- --------------------------------------------------------

--
-- Table structure for table `image_user`
--

CREATE TABLE `image_user` (
  `filename` varchar(1000) NOT NULL,
  `place` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image_user`
--

INSERT INTO `image_user` (`filename`, `place`) VALUES
('1798550_485189331587829_378865846_n.jpg', 'Tirumala'),
('2.png', 'Tirumala'),
('sarva-darshan-1.webp', 'Tirumala'),
('Garuda_cliff_in_Tirumala.jpg', 'Tirumala'),
('k3.jpeg', 'Kapila Theertham'),
('k2.jpeg', 'Kapila Theertham'),
('k1.jpeg', 'Kapila Theertham');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('j@g', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `filename` mediumtext NOT NULL,
  `name` varchar(1000) NOT NULL,
  `history` longtext NOT NULL,
  `speciality` longtext NOT NULL,
  `near` longtext NOT NULL,
  `way` longtext NOT NULL,
  `category` varchar(1000) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`filename`, `name`, `history`, `speciality`, `near`, `way`, `category`, `latitude`, `longitude`) VALUES
('tirumala.avif', 'Tirumala', 'The Sri Venkateswara Swami Temple is a Hindu temple situated in the hills of Tirumala at Tirupati in Tirupati district of Andhra Pradesh, India. The temple is dedicated to Venkateswara, a form of Vishnu, who is believed to have appeared on the earth to save mankind from trials and troubles of Kali Yuga. Hence the place is also known by the name Kaliyuga Vaikuntha and the deity here is referred to as Kaliyuga Prathyaksha Daivam. The temple is also known by other names like Tirumala Temple, Tirupati Temple and Tirupati Balaji Temple. Venkateswara is known by many other names: Balaji, Govinda, and Srinivasa.[4] The temple is run by Tirumala Tirupati Devasthanams (TTD), which is under control of Andhra Pradesh Government. The head of TTD is appointed by Andhra Pradesh Government.', 'The word Tirumala is of Dravidian origin. The term “Tiru”, means sacred or holy and “Mala”, means mountain or hill.Tirumala is located 980 metres (3,200 ft) above sea level and covers an area of approximately 26.8 square kilometres (10.33 sq mi). Surrounding the hills are seven peaks of Seshachalam range, Eastern Ghats namely Seshadri, Neeladri, Garudadri, Anjanadri, Vrushabadri, Narayanadri, and Venkatadri. The temple of Venkateswara[7] is on the seventh peak (Venkatadri).', 'Tirupati', 'Tirupati railway station is the nearest railway station to tirumala and we can reach the tiurmala from tiurpati through buses and by the footpath Alipiri mettlu and Srivari mettlu', 'temples', '13.683255720331957', '79.34727239180336'),
('kapila.jpg', 'Kapila Theertham', 'The temple received very good patronage from the Kings of Vijayanagara in the 13th thru 16th centuries, especially Saluva Narasimha Deva Raya, and the eternally not so famous Sri Krishna Deva Raya, and some of the later rulers like Venkatapathi Raya, and Aliya Ramaraya, Sri Krishna Deva Raya s Son-in-law.', 'The temple and Theertham had derived its name from Kapila MuniDuring  Kartika  month on the occasion of its  mukkoti  on the  Purnima  (full moon) day, all the teerthas situated in the three world s merge into this Kapila Teertham at noon for ten  Ghatikas  (one ghatika is equivalent to 24 minutes).[1] It is believed that persons bathing in it at that auspicious time will attain salvation from the cycle of birth and death ( Brahmaloka ).[citation needed] Moreover, those who have never offered Pindam (thidhi or thadhhina) to their departed ancestor souls can do it here and wash off your sins for non performance of it in past', 'Tirupati', 'Tirupati railway station is the nearest railway station to visit the kapila theertham we can reach the kapila theertham through the autos or by walk it about 3km form railway station', 'temples', '13.655164060296414', '79.42076716458587'),
('gootyfort.jpg', 'Gooty Fort', 'The Gooty Fort, also know as Ravadurg and Gutti Kota, is a ruined fort located on a hill inthe gooty town of Andhra pradesh India. The town of gooty (originally, Gutti ) is located in the Ananthapur district of Andhara Pradesh. It is one of the Centrally protechted monuments of national importance', 'The Gooty Fort, also know as Ravadurg and Gutti Kota, is a ruined fort located on a hill inthe gooty town of Andhra pradesh India. The town of gooty (originally, Gutti ) is located in the Ananthapur district of Andhara Pradesh. It is one of the Centrally protechted monuments of national importance', 'Gooty,Anantaput,Guntakal', 'Gooty railway station', 'historical', '15.112911370406522', '77.65151846748404'),
('mahabalipuram.jpg', 'mahabalipuram', 'Mamallapuram (also known as Mahabalipuram[3]), is a town in Chengalpattu district in the southeastern Indian state of Tamil Nadu, best known for the UNESCO World Heritage Site of 7th- and 8th-century Hindu Group of Monuments at Mahabalipuram. It is one of the famous tourist sites in India.[1] The ancient name of the place is Thirukadalmallai. It is a part of Chennai Metropolitan Area. It is a satellite town of Chennai\r\nNeolithic burial urn, cairn circles and jars with burials dating to the 1st century BCE have been discovered near Mahabalipuram. The Sangam age poem Perumpāṇāṟṟuppadai relates the rule of King Thondaiman Ilam Thiraiyar at Kanchipuram of the Tondai Nadu port Nirppeyyaru which scholars identify with the present-day Mahabalipuram. Chinese coins and Roman coins of Theodosius I in the 4th century CE have been found at Mahabalipuram revealing the port as an active hub of global trade in the late classical period. Two Pallava coins bearing legends read as Srihari and Srinidhi have been found at Mahabalipuram. The Pallava kings ruled Mahabalipuram from Kanchipuram; the capital of the Pallava dynasty from the 3rd century to 9th century CE, and used the port to launch trade and diplomatic missions to Sri Lanka and Southeast Asia. An 8th-century Tamil text written by Thirumangai Alvar described this place as Sea Mountain  where the ships rode at anchor bent to the point of breaking laden as they were with wealth, big trunked elephants and gems of nine varieties in heaps .[8]', 'The earliest mention of the city is found in the 1st century work called Periplus of the Erythraean Sea by an unknown Greek navigator. Ptolemy, the Greek geographer refers this place as Malange. Mahabalipuram is also known by other names such as Mamallapattana and Mamallapuram. The term Mamallapuram means the city of Mamalla, the other name of the famous Pallava Emperor Narasimhavarman I (630-670 CE) who built the famous temples in the city. Thirumangai Alvar, the famous Vaishnavite saint mentions this place as Thirukadalmallai, referring to the Sthalasayana Perumal Temple.[6] Another name by which Mahabalipuram has been known to mariners, at least since Marco Polo s time is  Seven Pagodas  alluding to the Seven Pagodas of Mahabalipuram that stood on the shore, of which one, the Shore Temple, survives.[7]', 'Chennai', 'you can reach the mahabalipuram form the chennai you will have buses', 'historical', '12.61650170511301', '80.19919095041206'),
('tajmahal.webp', 'Taj mahal', 'The Taj mahal is is an ivory-white marble mausoleum on the right bank of the river Yamuna in Agra, Uttar Pradesh, India. It was commissioned in 1631 by the fifth Mughal emperor, Shah Jahan (r. 1628–1658) to house the tomb of his beloved wife, Mumtaz Mahal; it also houses the tomb of Shah Jahan himself. The tomb is the centrepiece of a 17-hectare (42-acre) complex, which includes a mosque and a guest house, and is set in formal gardens bounded on three sides by a crenellated wall.', 'The name  Taj Mahal  is of Urdu origin, and believed to be derived from Arabic and Persian, with the words tāj mahall meaning  crown  (tāj)  palace  (mahall).[4][5][6] Abdul Hamid Lahori, in his book from 1636 Padshahnama, refers to the Taj Mahal as rauza-i munawwara meaning the illumined or illustrious tomb.[7] The name  Taj  might have been derived from the corruption of the second syllable of  Mumtaz ', 'Agra', 'you can reach it through the Agra railway station', 'historical', '27.186371332406935', '78.018138721132'),
('goa.jpg', 'Goa', 'After the bahmani-Bijapuri city of goa was capturred by Afonso de Albuquerque in 1510, and made the capital of the Estado da india, the city gave its name to the contiguous territoriess The origin fo the city name  Goa  is unclear. in  ancient loiterature,  Gao was known by many names, such as gomanchala ', 'After the bahmani-Bijapuri city of goa was capturred by Afonso de Albuquerque in 1510, and made the capital of the Estado da india, the city gave its name to the contiguous territoriess The origin fo the city name  Goa  is unclear. in  ancient loiterature,  Gao was known by many names, such as gomanchala ', 'Goa ', 'Goa', 'beaches', '15.308934737406886', '73.97281740442821'),
('church.jpg', 'Basilica of Born Jesus', 'Construction work on the church began in 1594 , but still no one was able to put a cross upon the church. The church was consecrated in May 1605 by the archbishop, Dom Fr. Aleixo de Menezes. This world heritage monument has emerged as a landmark in the history of Christianity. It contains the body of St. Francis Xavier, a very close friend of St. Ignatius Loyola with whom he founded the Society of Jesus (the Jesuits). Francis Xavier died on Sancian Island, Chuandao Taishan while en route to continental China on 3 December 1552. It is also believed that the body is of Thotagamuwe Sri Rahula Thera, a Sri Lankan Buddhist monk.\r\nThe body of Francis Xavier was first taken to Portuguese Malacca and two years later shipped back to Goa. It is said that the saint s body was as fresh as the day it was buried.[4] The remains of the saint still attract a huge number of tourists (Christian and non-Christian alike) from all over the world, especially during the public viewing of his body every ten years (last held in 2016). The saint is said to have miraculous powers of healing.', 'Pope Pius XII raised this sanctuary to the status of basilica via the Pontifical decree “Priscam Goae” on 20 March 1946. The decree was signed and notarized by Cardinal Giovanni Battista Montini.', 'goa', 'goa', 'church', '15.486640859530922', '73.82514834425132'),
('masjid.jpeg', 'Jama Masjid', 'The mosque is located within the historic city of Shahjahanabad, today known as the locality of Old Delhi. Across from the mosque are the Red Fort and Sunehri Masjid.[4] As one of the focal points of Old Delhi, Jama Masjid is surrounded by various commercial centres, such as the historic Chandni Chowk.[5] The tomb of Abul Kalam Azad, Indian independence activist, is located adjacent to the mosque.The mosque is located within the historic city of Shahjahanabad, today known as the locality of Old Delhi. Across from the mosque are the Red Fort and Sunehri Masjid.[4] As one of the focal points of Old Delhi, Jama Masjid is surrounded by various commercial centres, such as the historic Chandni Chowk.[5] The tomb of Abul Kalam Azad, Indian independence activist, is located adjacent to the mosque.', 'The mosque is located within the historic city of Shahjahanabad, today known as the locality of Old Delhi. Across from the mosque are the Red Fort and Sunehri Masjid.[4] As one of the focal points of Old Delhi, Jama Masjid is surrounded by various commercial centres, such as the historic Chandni Chowk.[5] The tomb of Abul Kalam Azad, Indian independence activist, is located adjacent to the mosque.The mosque is located within the historic city of Shahjahanabad, today known as the locality of Old Delhi. Across from the mosque are the Red Fort and Sunehri Masjid.[4] As one of the focal points of Old Delhi, Jama Masjid is surrounded by various commercial centres, such as the historic Chandni Chowk.[5] The tomb of Abul Kalam Azad, Indian independence activist, is located adjacent to the mosque.', 'Delhi,India gate,Rastrapati bhavan', 'Delhi', 'mosque', '28.600010639995247', '77.20250129041193'),
('indiagate.webp', 'India Gate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error aut, animi, magni cupiditate rem porro ipsam nulla temporibus blanditiis vitae distinctio, labore rerum explicabo sapiente! Quam, recusandae magnam alias architecto, nulla officia sint saepe commodi ratione aut unde eaque, libero consequatur rerum asperiores enim inventore. Quo natus quasi, delectus ratione molestiae unde tempora facilis voluptate voluptatem quam, reprehenderit magnam provident corporis blanditiis iure impedit numquam quisquam commodi placeat reiciendis, qui labore hic nobis sequi? Quam voluptatem ratione odio nam id?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error aut, animi, magni cupiditate rem porro ipsam nulla temporibus blanditiis vitae distinctio, labore rerum explicabo sapiente! Quam, recusandae magnam alias architecto, nulla officia sint saepe commodi ratione aut unde eaque, libero consequatur rerum asperiores enim inventore. Quo natus quasi, delectus ratione molestiae unde tempora facilis voluptate voluptatem quam, reprehenderit magnam provident corporis blanditiis iure impedit numquam quisquam commodi placeat reiciendis, qui labore hic nobis sequi? Quam voluptatem ratione odio nam id?', 'Delhi,Rastrapati bhavan,', 'Delhi', 'historical', '28.633836271976378', '77.18611651904905');

-- --------------------------------------------------------

--
-- Table structure for table `popular`
--

CREATE TABLE `popular` (
  `filename` mediumtext NOT NULL,
  `name` varchar(1000) NOT NULL,
  `speciality` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popular`
--

INSERT INTO `popular` (`filename`, `name`, `speciality`) VALUES
('tirumala.avif', 'Tirumala', 'The word Tirumala is of Dravidian origin. The term “Tiru”, means sacred or holy and “Mala”, means mountain or hill.[6]'),
('gootyfort.jpg', 'Gooty Fort', 'The Gooty Fort, also know as Ravadurg and Gutti Kota, is a ruined fort located on a hill inthe gooty town of Andhra pradesh India. The town of gooty (originally, Gutti ) is located in the Ananthapur district of Andhara Pradesh. It is one of the Centrally protechted monuments of national importance'),
('tajmahal.webp', 'Taj mahal', 'The name Taj Mahal is of Urdu origin, and believed to be derived from Arabic and Persian, with the words tāj mahall meaning crown (tāj) palace (mahall).[4][5][6] Abdul Hamid Lahori, in his book from 1636 Padshahnama, refers to the Taj Mahal as rauza-i munawwara meaning the illumined or illustrious tomb.[7] The name Taj might have been derived from the corruption of the second syllable of Mumtaz'),
('church.jpg', 'Basilica of Born Jesus', 'Pope Pius XII raised this sanctuary to the status of basilica via the Pontifical decree “Priscam Goae” on 20 March 1946. The decree was signed and notarized by Cardinal Giovanni Battista Montini.'),
('masjid.jpeg', 'Jama Masjid', 'The mosque is located within the historic city of Shahjahanabad, today known as the locality of Old Delhi. Across from the mosque are the Red Fort and Sunehri Masjid.[4] As one of the focal points of Old Delhi, Jama Masjid is surrounded by various commercial centres, such as the historic Chandni Chowk.[5] The tomb of Abul Kalam Azad, Indian independence activist, is located adjacent to the mosque.The mosque is located within the historic city of Shahjahanabad,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `unique` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
