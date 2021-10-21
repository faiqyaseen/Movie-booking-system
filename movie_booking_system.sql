-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 02:36 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `number_of_seats` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `user_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(20) NOT NULL,
  `country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `country`) VALUES
(1, 'Karachi', 170);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(20) NOT NULL,
  `contact_email` varchar(30) NOT NULL,
  `contact_message` text NOT NULL,
  `contact_subject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_message`, `contact_subject`) VALUES
(2, 'faras', 'faras@mail.com', 'please update the website', 'request');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `phone_code` int(5) NOT NULL,
  `country_code` char(2) NOT NULL,
  `country_name` varchar(80) NOT NULL,
  `id` int(11) NOT NULL,
  `continent_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`phone_code`, `country_code`, `country_name`, `id`, `continent_name`) VALUES
(93, 'AF', 'Afghanistan', 1, 'Asia'),
(358, 'AX', 'Aland Islands', 2, 'Europe'),
(355, 'AL', 'Albania', 3, 'Europe'),
(213, 'DZ', 'Algeria', 4, 'Africa'),
(1684, 'AS', 'American Samoa', 5, 'Oceania'),
(376, 'AD', 'Andorra', 6, 'Europe'),
(244, 'AO', 'Angola', 7, 'Africa'),
(1264, 'AI', 'Anguilla', 8, 'North America'),
(672, 'AQ', 'Antarctica', 9, 'Antarctica'),
(1268, 'AG', 'Antigua and Barbuda', 10, 'North America'),
(54, 'AR', 'Argentina', 11, 'South America'),
(374, 'AM', 'Armenia', 12, 'Asia'),
(297, 'AW', 'Aruba', 13, 'North America'),
(61, 'AU', 'Australia', 14, 'Oceania'),
(43, 'AT', 'Austria', 15, 'Europe'),
(994, 'AZ', 'Azerbaijan', 16, 'Asia'),
(1242, 'BS', 'Bahamas', 17, 'North America'),
(973, 'BH', 'Bahrain', 18, 'Asia'),
(880, 'BD', 'Bangladesh', 19, 'Asia'),
(1246, 'BB', 'Barbados', 20, 'North America'),
(375, 'BY', 'Belarus', 21, 'Europe'),
(32, 'BE', 'Belgium', 22, 'Europe'),
(501, 'BZ', 'Belize', 23, 'North America'),
(229, 'BJ', 'Benin', 24, 'Africa'),
(1441, 'BM', 'Bermuda', 25, 'North America'),
(975, 'BT', 'Bhutan', 26, 'Asia'),
(591, 'BO', 'Bolivia', 27, 'South America'),
(599, 'BQ', 'Bonaire, Sint Eustatius and Saba', 28, 'North America'),
(387, 'BA', 'Bosnia and Herzegovina', 29, 'Europe'),
(267, 'BW', 'Botswana', 30, 'Africa'),
(55, 'BV', 'Bouvet Island', 31, 'Antarctica'),
(55, 'BR', 'Brazil', 32, 'South America'),
(246, 'IO', 'British Indian Ocean Territory', 33, 'Asia'),
(673, 'BN', 'Brunei Darussalam', 34, 'Asia'),
(359, 'BG', 'Bulgaria', 35, 'Europe'),
(226, 'BF', 'Burkina Faso', 36, 'Africa'),
(257, 'BI', 'Burundi', 37, 'Africa'),
(855, 'KH', 'Cambodia', 38, 'Asia'),
(237, 'CM', 'Cameroon', 39, 'Africa'),
(1, 'CA', 'Canada', 40, 'North America'),
(238, 'CV', 'Cape Verde', 41, 'Africa'),
(1345, 'KY', 'Cayman Islands', 42, 'North America'),
(236, 'CF', 'Central African Republic', 43, 'Africa'),
(235, 'TD', 'Chad', 44, 'Africa'),
(56, 'CL', 'Chile', 45, 'South America'),
(86, 'CN', 'China', 46, 'Asia'),
(61, 'CX', 'Christmas Island', 47, 'Asia'),
(672, 'CC', 'Cocos (Keeling) Islands', 48, 'Asia'),
(57, 'CO', 'Colombia', 49, 'South America'),
(269, 'KM', 'Comoros', 50, 'Africa'),
(242, 'CG', 'Congo', 51, 'Africa'),
(242, 'CD', 'Congo, Democratic Republic of the Congo', 52, 'Africa'),
(682, 'CK', 'Cook Islands', 53, 'Oceania'),
(506, 'CR', 'Costa Rica', 54, 'North America'),
(225, 'CI', 'Cote D\'Ivoire', 55, 'Africa'),
(385, 'HR', 'Croatia', 56, 'Europe'),
(53, 'CU', 'Cuba', 57, 'North America'),
(599, 'CW', 'Curacao', 58, 'North America'),
(357, 'CY', 'Cyprus', 59, 'Asia'),
(420, 'CZ', 'Czech Republic', 60, 'Europe'),
(45, 'DK', 'Denmark', 61, 'Europe'),
(253, 'DJ', 'Djibouti', 62, 'Africa'),
(1767, 'DM', 'Dominica', 63, 'North America'),
(1809, 'DO', 'Dominican Republic', 64, 'North America'),
(593, 'EC', 'Ecuador', 65, 'South America'),
(20, 'EG', 'Egypt', 66, 'Africa'),
(503, 'SV', 'El Salvador', 67, 'North America'),
(240, 'GQ', 'Equatorial Guinea', 68, 'Africa'),
(291, 'ER', 'Eritrea', 69, 'Africa'),
(372, 'EE', 'Estonia', 70, 'Europe'),
(251, 'ET', 'Ethiopia', 71, 'Africa'),
(500, 'FK', 'Falkland Islands (Malvinas)', 72, 'South America'),
(298, 'FO', 'Faroe Islands', 73, 'Europe'),
(679, 'FJ', 'Fiji', 74, 'Oceania'),
(358, 'FI', 'Finland', 75, 'Europe'),
(33, 'FR', 'France', 76, 'Europe'),
(594, 'GF', 'French Guiana', 77, 'South America'),
(689, 'PF', 'French Polynesia', 78, 'Oceania'),
(262, 'TF', 'French Southern Territories', 79, 'Antarctica'),
(241, 'GA', 'Gabon', 80, 'Africa'),
(220, 'GM', 'Gambia', 81, 'Africa'),
(995, 'GE', 'Georgia', 82, 'Asia'),
(49, 'DE', 'Germany', 83, 'Europe'),
(233, 'GH', 'Ghana', 84, 'Africa'),
(350, 'GI', 'Gibraltar', 85, 'Europe'),
(30, 'GR', 'Greece', 86, 'Europe'),
(299, 'GL', 'Greenland', 87, 'North America'),
(1473, 'GD', 'Grenada', 88, 'North America'),
(590, 'GP', 'Guadeloupe', 89, 'North America'),
(1671, 'GU', 'Guam', 90, 'Oceania'),
(502, 'GT', 'Guatemala', 91, 'North America'),
(44, 'GG', 'Guernsey', 92, 'Europe'),
(224, 'GN', 'Guinea', 93, 'Africa'),
(245, 'GW', 'Guinea-Bissau', 94, 'Africa'),
(592, 'GY', 'Guyana', 95, 'South America'),
(509, 'HT', 'Haiti', 96, 'North America'),
(0, 'HM', 'Heard Island and Mcdonald Islands', 97, 'Antarctica'),
(39, 'VA', 'Holy See (Vatican City State)', 98, 'Europe'),
(504, 'HN', 'Honduras', 99, 'North America'),
(852, 'HK', 'Hong Kong', 100, 'Asia'),
(36, 'HU', 'Hungary', 101, 'Europe'),
(354, 'IS', 'Iceland', 102, 'Europe'),
(91, 'IN', 'India', 103, 'Asia'),
(62, 'ID', 'Indonesia', 104, 'Asia'),
(98, 'IR', 'Iran, Islamic Republic of', 105, 'Asia'),
(964, 'IQ', 'Iraq', 106, 'Asia'),
(353, 'IE', 'Ireland', 107, 'Europe'),
(44, 'IM', 'Isle of Man', 108, 'Europe'),
(972, 'IL', 'Israel', 109, 'Asia'),
(39, 'IT', 'Italy', 110, 'Europe'),
(1876, 'JM', 'Jamaica', 111, 'North America'),
(81, 'JP', 'Japan', 112, 'Asia'),
(44, 'JE', 'Jersey', 113, 'Europe'),
(962, 'JO', 'Jordan', 114, 'Asia'),
(7, 'KZ', 'Kazakhstan', 115, 'Asia'),
(254, 'KE', 'Kenya', 116, 'Africa'),
(686, 'KI', 'Kiribati', 117, 'Oceania'),
(850, 'KP', 'Korea, Democratic People\'s Republic of', 118, 'Asia'),
(82, 'KR', 'Korea, Republic of', 119, 'Asia'),
(381, 'XK', 'Kosovo', 120, 'Europe'),
(965, 'KW', 'Kuwait', 121, 'Asia'),
(996, 'KG', 'Kyrgyzstan', 122, 'Asia'),
(856, 'LA', 'Lao People\'s Democratic Republic', 123, 'Asia'),
(371, 'LV', 'Latvia', 124, 'Europe'),
(961, 'LB', 'Lebanon', 125, 'Asia'),
(266, 'LS', 'Lesotho', 126, 'Africa'),
(231, 'LR', 'Liberia', 127, 'Africa'),
(218, 'LY', 'Libyan Arab Jamahiriya', 128, 'Africa'),
(423, 'LI', 'Liechtenstein', 129, 'Europe'),
(370, 'LT', 'Lithuania', 130, 'Europe'),
(352, 'LU', 'Luxembourg', 131, 'Europe'),
(853, 'MO', 'Macao', 132, 'Asia'),
(389, 'MK', 'Macedonia, the Former Yugoslav Republic of', 133, 'Europe'),
(261, 'MG', 'Madagascar', 134, 'Africa'),
(265, 'MW', 'Malawi', 135, 'Africa'),
(60, 'MY', 'Malaysia', 136, 'Asia'),
(960, 'MV', 'Maldives', 137, 'Asia'),
(223, 'ML', 'Mali', 138, 'Africa'),
(356, 'MT', 'Malta', 139, 'Europe'),
(692, 'MH', 'Marshall Islands', 140, 'Oceania'),
(596, 'MQ', 'Martinique', 141, 'North America'),
(222, 'MR', 'Mauritania', 142, 'Africa'),
(230, 'MU', 'Mauritius', 143, 'Africa'),
(269, 'YT', 'Mayotte', 144, 'Africa'),
(52, 'MX', 'Mexico', 145, 'North America'),
(691, 'FM', 'Micronesia, Federated States of', 146, 'Oceania'),
(373, 'MD', 'Moldova, Republic of', 147, 'Europe'),
(377, 'MC', 'Monaco', 148, 'Europe'),
(976, 'MN', 'Mongolia', 149, 'Asia'),
(382, 'ME', 'Montenegro', 150, 'Europe'),
(1664, 'MS', 'Montserrat', 151, 'North America'),
(212, 'MA', 'Morocco', 152, 'Africa'),
(258, 'MZ', 'Mozambique', 153, 'Africa'),
(95, 'MM', 'Myanmar', 154, 'Asia'),
(264, 'NA', 'Namibia', 155, 'Africa'),
(674, 'NR', 'Nauru', 156, 'Oceania'),
(977, 'NP', 'Nepal', 157, 'Asia'),
(31, 'NL', 'Netherlands', 158, 'Europe'),
(599, 'AN', 'Netherlands Antilles', 159, 'North America'),
(687, 'NC', 'New Caledonia', 160, 'Oceania'),
(64, 'NZ', 'New Zealand', 161, 'Oceania'),
(505, 'NI', 'Nicaragua', 162, 'North America'),
(227, 'NE', 'Niger', 163, 'Africa'),
(234, 'NG', 'Nigeria', 164, 'Africa'),
(683, 'NU', 'Niue', 165, 'Oceania'),
(672, 'NF', 'Norfolk Island', 166, 'Oceania'),
(1670, 'MP', 'Northern Mariana Islands', 167, 'Oceania'),
(47, 'NO', 'Norway', 168, 'Europe'),
(968, 'OM', 'Oman', 169, 'Asia'),
(92, 'PK', 'Pakistan', 170, 'Asia'),
(680, 'PW', 'Palau', 171, 'Oceania'),
(970, 'PS', 'Palestinian Territory, Occupied', 172, 'Asia'),
(507, 'PA', 'Panama', 173, 'North America'),
(675, 'PG', 'Papua New Guinea', 174, 'Oceania'),
(595, 'PY', 'Paraguay', 175, 'South America'),
(51, 'PE', 'Peru', 176, 'South America'),
(63, 'PH', 'Philippines', 177, 'Asia'),
(64, 'PN', 'Pitcairn', 178, 'Oceania'),
(48, 'PL', 'Poland', 179, 'Europe'),
(351, 'PT', 'Portugal', 180, 'Europe'),
(1787, 'PR', 'Puerto Rico', 181, 'North America'),
(974, 'QA', 'Qatar', 182, 'Asia'),
(262, 'RE', 'Reunion', 183, 'Africa'),
(40, 'RO', 'Romania', 184, 'Europe'),
(70, 'RU', 'Russian Federation', 185, 'Asia'),
(250, 'RW', 'Rwanda', 186, 'Africa'),
(590, 'BL', 'Saint Barthelemy', 187, 'North America'),
(290, 'SH', 'Saint Helena', 188, 'Africa'),
(1869, 'KN', 'Saint Kitts and Nevis', 189, 'North America'),
(1758, 'LC', 'Saint Lucia', 190, 'North America'),
(590, 'MF', 'Saint Martin', 191, 'North America'),
(508, 'PM', 'Saint Pierre and Miquelon', 192, 'North America'),
(1784, 'VC', 'Saint Vincent and the Grenadines', 193, 'North America'),
(684, 'WS', 'Samoa', 194, 'Oceania'),
(378, 'SM', 'San Marino', 195, 'Europe'),
(239, 'ST', 'Sao Tome and Principe', 196, 'Africa'),
(966, 'SA', 'Saudi Arabia', 197, 'Asia'),
(221, 'SN', 'Senegal', 198, 'Africa'),
(381, 'RS', 'Serbia', 199, 'Europe'),
(381, 'CS', 'Serbia and Montenegro', 200, 'Europe'),
(248, 'SC', 'Seychelles', 201, 'Africa'),
(232, 'SL', 'Sierra Leone', 202, 'Africa'),
(65, 'SG', 'Singapore', 203, 'Asia'),
(1, 'SX', 'Sint Maarten', 204, 'North America'),
(421, 'SK', 'Slovakia', 205, 'Europe'),
(386, 'SI', 'Slovenia', 206, 'Europe'),
(677, 'SB', 'Solomon Islands', 207, 'Oceania'),
(252, 'SO', 'Somalia', 208, 'Africa'),
(27, 'ZA', 'South Africa', 209, 'Africa'),
(500, 'GS', 'South Georgia and the South Sandwich Islands', 210, 'Antarctica'),
(211, 'SS', 'South Sudan', 211, 'Africa'),
(34, 'ES', 'Spain', 212, 'Europe'),
(94, 'LK', 'Sri Lanka', 213, 'Asia'),
(249, 'SD', 'Sudan', 214, 'Africa'),
(597, 'SR', 'Suriname', 215, 'South America'),
(47, 'SJ', 'Svalbard and Jan Mayen', 216, 'Europe'),
(268, 'SZ', 'Swaziland', 217, 'Africa'),
(46, 'SE', 'Sweden', 218, 'Europe'),
(41, 'CH', 'Switzerland', 219, 'Europe'),
(963, 'SY', 'Syrian Arab Republic', 220, 'Asia'),
(886, 'TW', 'Taiwan, Province of China', 221, 'Asia'),
(992, 'TJ', 'Tajikistan', 222, 'Asia'),
(255, 'TZ', 'Tanzania, United Republic of', 223, 'Africa'),
(66, 'TH', 'Thailand', 224, 'Asia'),
(670, 'TL', 'Timor-Leste', 225, 'Asia'),
(228, 'TG', 'Togo', 226, 'Africa'),
(690, 'TK', 'Tokelau', 227, 'Oceania'),
(676, 'TO', 'Tonga', 228, 'Oceania'),
(1868, 'TT', 'Trinidad and Tobago', 229, 'North America'),
(216, 'TN', 'Tunisia', 230, 'Africa'),
(90, 'TR', 'Turkey', 231, 'Asia'),
(7370, 'TM', 'Turkmenistan', 232, 'Asia'),
(1649, 'TC', 'Turks and Caicos Islands', 233, 'North America'),
(688, 'TV', 'Tuvalu', 234, 'Oceania'),
(256, 'UG', 'Uganda', 235, 'Africa'),
(380, 'UA', 'Ukraine', 236, 'Europe'),
(971, 'AE', 'United Arab Emirates', 237, 'Asia'),
(44, 'GB', 'United Kingdom', 238, 'Europe'),
(1, 'US', 'United States', 239, 'North America'),
(1, 'UM', 'United States Minor Outlying Islands', 240, 'North America'),
(598, 'UY', 'Uruguay', 241, 'South America'),
(998, 'UZ', 'Uzbekistan', 242, 'Asia'),
(678, 'VU', 'Vanuatu', 243, 'Oceania'),
(58, 'VE', 'Venezuela', 244, 'South America'),
(84, 'VN', 'Viet Nam', 245, 'Asia'),
(1284, 'VG', 'Virgin Islands, British', 246, 'North America'),
(1340, 'VI', 'Virgin Islands, U.s.', 247, 'North America'),
(681, 'WF', 'Wallis and Futuna', 248, 'Oceania'),
(212, 'EH', 'Western Sahara', 249, 'Africa'),
(967, 'YE', 'Yemen', 250, 'Asia'),
(260, 'ZM', 'Zambia', 251, 'Africa'),
(263, 'ZW', 'Zimbabwe', 252, 'Africa');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `hows_our_service` varchar(50) NOT NULL,
  `do_you_like_the_facilities_of_theater` varchar(50) NOT NULL,
  `do_you_like_environment` varchar(50) NOT NULL,
  `do_you_like_the_facilities_of_canteen` varchar(50) NOT NULL,
  `do_you_like_security_of_cinema` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `hows_our_service`, `do_you_like_the_facilities_of_theater`, `do_you_like_environment`, `do_you_like_the_facilities_of_canteen`, `do_you_like_security_of_cinema`) VALUES
(1, 'good', 'yes', 'yes', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `gen_id` int(11) NOT NULL,
  `genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`gen_id`, `genre`) VALUES
(1, 'thriller'),
(3, 'horror'),
(4, 'action'),
(5, 'Fictional'),
(6, 'Romantic');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_title` varchar(30) NOT NULL,
  `movie_description` text NOT NULL,
  `movie_duration` time NOT NULL,
  `movie_language` varchar(20) NOT NULL,
  `release_date` date NOT NULL,
  `country` int(20) NOT NULL,
  `gen_id` int(11) NOT NULL,
  `images` varchar(200) NOT NULL,
  `trailer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_title`, `movie_description`, `movie_duration`, `movie_language`, `release_date`, `country`, `gen_id`, `images`, `trailer`) VALUES
(16, 'The Conjuring: The Devil Made ', 'There’s hardly a dull moment in ‘The Conjuring: The Devil Made Me Do It.’ This one takes the franchise to newer highs revealing a chilling story of terror, murders and the unknown evil.', '02:04:00', 'English', '2021-08-13', 239, 3, '1628832488-the-conjuring.jpg', 'https://www.youtube.com/embed/h9Q4zZS2v1k'),
(17, 'Fast & Furious 9', 'Fast & Furious 9 is a English movie released on 5 Aug, 2021. The movie is directed by Justin Lin and featured Vin Diesel, Jordana Brewster, Lucas Black and Charlize Theron as lead characters. Other popular actors who were roped in for Fast & Furious 9 are Jim Parrack, john cena, Helen Mirren, Michel', '02:10:00', 'English', '2021-08-05', 239, 4, '1628832696-fast-furious9.jpg', 'https://www.youtube.com/embed/FqAjVAf5fNA'),
(18, 'Hitman\'s Wife\'s Bodyguard', '‘Hitman’s Wife’s Bodyguard’ is a busy sequel with too many moving parts and stars, so some of it is bound to hit the marquee and it does.', '01:40:00', 'English', '2021-08-06', 239, 4, '1628833307-hitman.jfif', 'https://www.youtube.com/embed/9C0l31YcahQ'),
(19, 'The Suicide Squad', 'The Suicide Squad is a English movie released on 5 Aug, 2021. The movie is directed by James Gunn and featured Margot Robbie, Taika Waititi, Idris Elba and Jai Courtney as lead characters. Other popular actors who were roped in for The Suicide Squad are Joel Kinnaman, David Dastmalchian, Viola Davis', '02:14:00', 'English', '2021-08-05', 239, 4, '1628833586-suicide-squad.jfif', 'https://www.youtube.com/embed/JuDLepNa7hw'),
(20, 'Five Feet Apart ', 'Seventeen-year-old Stella spends most of her time in the hospital as a cystic fibrosis patient. Her life is full of routines, boundaries and self-control -- all of which get put to the test when she meets Will, an impossibly charming teen who has the same illness.', '02:20:00', 'English', '2019-02-05', 239, 6, '1628854446-five-feet.jfif', 'https://www.youtube.com/embed/XtgCqMZofqM'),
(21, 'Bhuj: The Pride Of India', 'Bhuj: The Pride Of India is a Hindi movie released on 13 Aug, 2021. The movie is directed by Abhishek Dudhaiya and featured Ajay Devgn, Parineeti Chopra, Sonakshi Sinha and Rana Daggubati as lead characters. Other popular actors who were roped in for Bhuj: The Pride Of India are Ammy Virk, Sanjay Du', '02:35:00', 'Hindi', '2021-08-13', 103, 4, '1628854764-bhuj.jpg', 'https://www.youtube.com/embed/YngLZzBuzHA'),
(22, 'Atrangi Re', 'Atrangi Re is a Hindi movie released on 6 Aug, 2021. The movie is directed by Aanand L Rai and featured Akshay Kumar, Sara Ali Khan and Dhanush as lead characters.', '02:10:00', 'Hindi', '2021-08-11', 103, 4, '1628855026-YE1gRWdRew.jpg', 'https://www.youtube.com/embed/FqAjVAf5fNA'),
(23, 'Attack', 'Attack is a Hindi movie released on 13 Aug, 2021. The movie is directed by Lakshya Raj Anand and featured John Abraham, Jacqueline Fernandez and Rakul Preet Singh as lead characters.', '02:40:00', 'Hindi', '2021-08-18', 103, 1, '1628855088-YE1jQ2FbdA.jpg', 'https://www.youtube.com/embed/XtgCqMZofqM'),
(24, 'Half Widow', 'Half Widow\r\nSynopsis\r\nHalf Widow is a Urdu movie released on 6 Jan, 2020. The movie is directed by Danish Renzu and featured Neelofar Hamid, Shahnawaz Bhat, Mir Sarwar and Haseena Sofi as lead characters', '02:20:00', 'Urdu', '2021-08-18', 170, 1, '1628855184-Yk1gSWpRcA.jpg', 'https://www.youtube.com/embed/JuDLepNa7hw'),
(25, 'Teefa In Trouble', 'Teefa In Trouble is a Urdu movie released on 20 Jul, 2018. The movie is directed by Ahsan Rahim and featured ali zafar, Maya Ali, Javed Sheikh and Tom Coulston as lead characters. Other popular actors who were roped in for Teefa In Trouble are Mehmood Aslam and Nayyar Ejaz.', '02:40:00', 'Urdu', '2021-08-18', 170, 5, '1628855249-YENqQmNacw.jpg', 'https://www.youtube.com/embed/XtgCqMZofqM'),
(26, 'Kashmir Daily', 'Kashmir Daily is a Urdu movie released on 5 Jan, 2018. The movie is directed by Hussein Khan and featured Mir Sarwar and Neelam Singh as lead characters.', '02:10:00', 'Urdu', '2021-08-09', 170, 4, '1628855334-YkBmRmNedw.jpg', 'https://www.youtube.com/embed/YngLZzBuzHA'),
(27, 'Maa Ka Laadla', 'Maa Ka Laadla is a Urdu movie released on 5 Jun, 2019. The movie is directed by LV Siva and featured Gullu Dada, Farukh Khan and Akbar Bin Tabar as lead characters.', '02:10:00', 'Urdu', '2021-08-24', 170, 1, '1628855401-YEJiQGpZeg.jpg', 'https://www.youtube.com/embed/9C0l31YcahQ'),
(28, 'Well Done Baby', 'On the verge of ending their marriage, Aditya and Meera decide to give the relationship another shot after discovering that they are going to be parents. But does it work?', '02:10:00', 'Hindi', '2021-08-18', 103, 4, '1628855559-YkBqQGBd.jpg', 'https://www.youtube.com/embed/9C0l31YcahQ');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `timestamp` datetime NOT NULL,
  `discount_coupen_id` int(11) NOT NULL,
  `remote_transaction` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `amount`, `timestamp`, `discount_coupen_id`, `remote_transaction`, `booking_id`) VALUES
(3, 112.12, '2021-08-03 01:28:34', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seat_type`
--

CREATE TABLE `seat_type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat_type`
--

INSERT INTO `seat_type` (`type_id`, `type`) VALUES
(1, 'Gold'),
(2, 'Platinum'),
(3, 'Box');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `footer` varchar(150) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `websitename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `footer`, `icon`, `logo`, `websitename`) VALUES
(1, ' All Rights Reserved by Movie Booking System. Designed and Developed by <a href=\"https://faiqyaseen.com\">Faiq Yaseen</a>.                             ', '1627147651-favicon.png', '1627147661-logo-icon.png', 'Movie Booking');

-- --------------------------------------------------------

--
-- Table structure for table `show_seat`
--

CREATE TABLE `show_seat` (
  `show_seat_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `price` int(11) NOT NULL,
  `th_seat_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp`
--

CREATE TABLE `tbl_emp` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(40) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_emp`
--

INSERT INTO `tbl_emp` (`id`, `first_name`, `last_name`, `username`, `dob`, `password`, `image`, `status`, `role`) VALUES
(4, 'raza', 'samoo', 'razasamoo', '2021-07-03', '202cb962ac59075b964b07152d234b70', '1627911019-YkdmQw.jpg', 'Pending', 1),
(14, 'Faiq', 'Yaseen', 'faiqyaseen', '2000-09-13', '21232f297a57a5a743894a0e4a801fc3', '1628852898-YE1hQWpfew.jpg', 'Pending', 1),
(15, 'Syed', 'Faras', 'syedafaras', '2021-08-17', '21232f297a57a5a743894a0e4a801fc3', '1628853184-images.jpeg', 'Pending', 1),
(16, 'Muhammad', 'Sufiyan', 'sufiyanansari', '2002-09-02', '21232f297a57a5a743894a0e4a801fc3', '1628853128-akVr.jpg', 'Pending', 1);

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `th_id` int(11) NOT NULL,
  `th_name` varchar(64) NOT NULL,
  `total_theater_halls` int(11) NOT NULL,
  `cityid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`th_id`, `th_name`, `total_theater_halls`, `cityid`) VALUES
(1, 'capri cinema', 1, 1),
(2, 'Cinepax', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `theater_hall`
--

CREATE TABLE `theater_hall` (
  `th_hall_id` int(11) NOT NULL,
  `hall_name` varchar(64) NOT NULL,
  `total_seats` int(11) NOT NULL,
  `theaterid` int(11) NOT NULL,
  `location` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater_hall`
--

INSERT INTO `theater_hall` (`th_hall_id`, `hall_name`, `total_seats`, `theaterid`, `location`) VALUES
(4, 'Capri 3', 3, 1, 'M.A Jinnah Road First Floor Room no.4'),
(6, 'Cinepex1', 1, 2, 'M.A Jinnah Road First Floor Room no.8');

-- --------------------------------------------------------

--
-- Table structure for table `theater_seat`
--

CREATE TABLE `theater_seat` (
  `th_seat_id` int(11) NOT NULL,
  `seat_number` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `theater_hall_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater_seat`
--

INSERT INTO `theater_seat` (`th_seat_id`, `seat_number`, `type`, `theater_hall_id`) VALUES
(7, 2, 1, 4),
(10, 1, 2, 4),
(11, 3, 2, 4),
(12, 1, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `th_show`
--

CREATE TABLE `th_show` (
  `show_id` int(11) NOT NULL,
  `show_date` date NOT NULL,
  `show_starttime` time NOT NULL,
  `show_endtime` time NOT NULL,
  `th_hall_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `th_show`
--

INSERT INTO `th_show` (`show_id`, `show_date`, `show_starttime`, `show_endtime`, `th_hall_id`, `movie_id`) VALUES
(3, '2021-08-25', '13:23:00', '15:11:00', 4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_password`) VALUES
(1, 'ali', 'ali@gmail.com', '15205151212', '123'),
(4, 'raza samoo', 'raza@gmail.com', '03082854205', '202cb962ac59075b964b07152d234b70'),
(5, 'fahad', 'fahad@mail.com', '121562202560', '202cb962ac59075b964b07152d234b70'),
(6, 'Murtaza', 'murtaza@gmail.com', '03082854205', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `show_id` (`show_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `country` (`country`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`gen_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `country` (`country`),
  ADD KEY `gen_id` (`gen_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `seat_type`
--
ALTER TABLE `seat_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `show_seat`
--
ALTER TABLE `show_seat`
  ADD PRIMARY KEY (`show_seat_id`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `show_id` (`show_id`),
  ADD KEY `th_seat_id` (`th_seat_id`);

--
-- Indexes for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`th_id`),
  ADD KEY `cityid` (`cityid`);

--
-- Indexes for table `theater_hall`
--
ALTER TABLE `theater_hall`
  ADD PRIMARY KEY (`th_hall_id`),
  ADD KEY `theaterid` (`theaterid`);

--
-- Indexes for table `theater_seat`
--
ALTER TABLE `theater_seat`
  ADD PRIMARY KEY (`th_seat_id`),
  ADD KEY `theater_hall_id` (`theater_hall_id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `th_show`
--
ALTER TABLE `th_show`
  ADD PRIMARY KEY (`show_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `gen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seat_type`
--
ALTER TABLE `seat_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `show_seat`
--
ALTER TABLE `show_seat`
  MODIFY `show_seat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `th_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `theater_hall`
--
ALTER TABLE `theater_hall`
  MODIFY `th_hall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `theater_seat`
--
ALTER TABLE `theater_seat`
  MODIFY `th_seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `th_show`
--
ALTER TABLE `th_show`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `th_show` (`show_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`country`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_2` FOREIGN KEY (`country`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_ibfk_3` FOREIGN KEY (`gen_id`) REFERENCES `genre` (`gen_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `show_seat`
--
ALTER TABLE `show_seat`
  ADD CONSTRAINT `show_seat_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `show_seat_ibfk_2` FOREIGN KEY (`show_id`) REFERENCES `th_show` (`show_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `show_seat_ibfk_3` FOREIGN KEY (`th_seat_id`) REFERENCES `theater_seat` (`th_seat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `theater`
--
ALTER TABLE `theater`
  ADD CONSTRAINT `theater_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `theater_hall`
--
ALTER TABLE `theater_hall`
  ADD CONSTRAINT `theater_hall_ibfk_1` FOREIGN KEY (`theaterid`) REFERENCES `theater` (`th_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `theater_seat`
--
ALTER TABLE `theater_seat`
  ADD CONSTRAINT `theater_seat_ibfk_1` FOREIGN KEY (`theater_hall_id`) REFERENCES `theater_hall` (`th_hall_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `theater_seat_ibfk_2` FOREIGN KEY (`type`) REFERENCES `seat_type` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
