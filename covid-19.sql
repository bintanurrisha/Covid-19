-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 07:55 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid-19`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutcorona_section`
--

CREATE TABLE `aboutcorona_section` (
  `aboutcorona_id` int(11) NOT NULL,
  `aboutcorona_title` varchar(200) NOT NULL,
  `aboutcorona_Description` varchar(400) NOT NULL,
  `aboutcorona_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutcorona_section`
--

INSERT INTO `aboutcorona_section` (`aboutcorona_id`, `aboutcorona_title`, `aboutcorona_Description`, `aboutcorona_image`) VALUES
(2, 'Coronaviruses Are A Group Of Related Viruses', 'Coronaviruses (CoV) are a large family of viruse transmitting between animals and people that cause illness ranging from the common colds to more severe diseases such as Middle East respiratory syndromed (MERS-CoV) and severe syndrome (SARS-CoV).', '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `about_section`
--

CREATE TABLE `about_section` (
  `Id` int(11) NOT NULL,
  `about_title` varchar(50) NOT NULL,
  `about_text` varchar(5000) NOT NULL,
  `about_image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_section`
--

INSERT INTO `about_section` (`Id`, `about_title`, `about_text`, `about_image`) VALUES
(4, 'CoronaVirus', 'In late December 2019, a previous unidentified coronavirus, currently named as the 2019 novel coronavirus#, emerged from Wuhan, China, and resulted in a formidable outbreak in many cities in China and expanded globally, including Thailand, Republic of Korea, Japan, United States, Philippines, Viet Nam, and our country (as of 2/6/2020 at least 25 countries). <br>COVID-19 is a potential zoonotic disease with low to moderate (estimated 2%–5%) mortality rate. Person-to-person transmission may occur through droplet or contact transmission and if there is a lack of stringent infection control or if no proper personal protective equipment available, it may jeopardize the first-line healthcare workers. Currently.', 'corona.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `avoid_section`
--

CREATE TABLE `avoid_section` (
  `Avoid_id` int(11) NOT NULL,
  `Avoid_Title` varchar(50) NOT NULL,
  `Avoid_description` varchar(80) NOT NULL,
  `Avoid_span_1` varchar(100) NOT NULL,
  `Avoid_span_2` varchar(200) NOT NULL,
  `Avoid_span_3` varchar(300) NOT NULL,
  `Avoid_span_4` varchar(400) NOT NULL,
  `Avoid_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `avoid_section`
--

INSERT INTO `avoid_section` (`Avoid_id`, `Avoid_Title`, `Avoid_description`, `Avoid_span_1`, `Avoid_span_2`, `Avoid_span_3`, `Avoid_span_4`, `Avoid_image`) VALUES
(2, 'Avoid', 'Avoid Close Contac', 'Avoid close contact', 'with people who are sick <br> Put', 'distance between yourself and other people', ' if COVID-19 is spreading in your community. This is especially important for people who are at higher risk of getting very sick.', 'group.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `contact_Id` int(11) NOT NULL,
  `firstdName` varchar(20) NOT NULL,
  `lastdName` varchar(20) NOT NULL,
  `fldEmail` varchar(20) NOT NULL,
  `fldPhone` varchar(20) NOT NULL,
  `fldMessage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`contact_Id`, `firstdName`, `lastdName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES
(11, '', '', '', '', 'dfgsfg'),
(14, 'Binta Nur', 'Risha', 'risha@gmail.com', '01234678', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, consequuntur.'),
(15, 'mim', '', 'mim@gmail.com', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, consequuntur.');

-- --------------------------------------------------------

--
-- Table structure for table `hero_section`
--

CREATE TABLE `hero_section` (
  `id` int(11) NOT NULL,
  `hero_sub_title` varchar(30) NOT NULL,
  `hero_title` varchar(60) NOT NULL,
  `hero_title_span` varchar(20) NOT NULL,
  `hero_Description` varchar(300) NOT NULL,
  `hero_Button` varchar(30) NOT NULL,
  `hero_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hero_section`
--

INSERT INTO `hero_section` (`id`, `hero_sub_title`, `hero_title`, `hero_title_span`, `hero_Description`, `hero_Button`, `hero_image`) VALUES
(1, 'Covid-19', 'Stay Home<br> Stay', 'Safe', 'The Coronavirus (COVID-19) was first reported in Wuhan, Hubei, China in December 2019, the outbreak was later recognized as a pandemic by the World Health Organization (WHO) on 11 March 2020.', 'Covid-19 update news', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `prevent_section`
--

CREATE TABLE `prevent_section` (
  `Prevent_id` int(11) NOT NULL,
  `Prevent_image` varchar(50) NOT NULL,
  `Prevent_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prevent_section`
--

INSERT INTO `prevent_section` (`Prevent_id`, `Prevent_image`, `Prevent_title`) VALUES
(1, 'Vector Smart Object Image (4).png', 'Desinfections'),
(2, 'j.png', 'Wash Your Hands'),
(3, 'stay_home.png', 'Stay Home'),
(4, '3339087-200.png', 'Wear Mask');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `username`, `email`, `password`) VALUES
(8, 'Risha', 'risha@gmail.com', '123'),
(9, 'dsf', 'dfa@gmail.com', '123'),
(10, 'risha1232', 'risha123@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `title`, `image`) VALUES
(4, 'Cough Or Sneeze', 'Icon-s2.png'),
(8, 'Cough Or Sneeze', 'Icon-s.png'),
(9, 'Air Transmission', 'Iocn-s (4).png'),
(10, 'Contaminated Object', 'Icon-s (3).png');

-- --------------------------------------------------------

--
-- Table structure for table `subcriber_table`
--

CREATE TABLE `subcriber_table` (
  `subscribe_Id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcriber_table`
--

INSERT INTO `subcriber_table` (`subscribe_Id`, `name`, `email`) VALUES
(4, 'mim', 'mim@gmail.com'),
(6, 'Risha', 'risha9851@gmail.com'),
(8, 'Umama', 'umama@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `symtoms_section`
--

CREATE TABLE `symtoms_section` (
  `Symtoms_id` int(10) NOT NULL,
  `Symtoms_Title` varchar(40) NOT NULL,
  `Symtoms_description` varchar(100) NOT NULL,
  `Symtoms_Title_one` varchar(100) NOT NULL,
  `Symtoms_description_one` varchar(200) NOT NULL,
  `Symtoms_Title_two` varchar(100) NOT NULL,
  `Symtoms_description_two` varchar(200) NOT NULL,
  `Symtoms_Title_three` varchar(100) NOT NULL,
  `Symtoms_description_three` varchar(200) NOT NULL,
  `Symtoms_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `symtoms_section`
--

INSERT INTO `symtoms_section` (`Symtoms_id`, `Symtoms_Title`, `Symtoms_description`, `Symtoms_Title_one`, `Symtoms_description_one`, `Symtoms_Title_two`, `Symtoms_description_two`, `Symtoms_Title_three`, `Symtoms_description_three`, `Symtoms_image`) VALUES
(1, 'Symtoms', 'Covid-2019 Infected People Symtoms', 'Headache & Sore Throat', 'On average it takes 5–6 days from when someone is infected with the virus for symptoms to show 14 days.', 'Fever & Cough', 'On average it takes 5–6 days from when someone is infected with the virus for symptoms to show 14 days.', 'Shortness Of Breath', 'On average it takes 5–6 days from when someone is infected with the virus for symptoms to show 14 days.', 'Covid-2019 Infected People Symtoms.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutcorona_section`
--
ALTER TABLE `aboutcorona_section`
  ADD PRIMARY KEY (`aboutcorona_id`);

--
-- Indexes for table `about_section`
--
ALTER TABLE `about_section`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `avoid_section`
--
ALTER TABLE `avoid_section`
  ADD PRIMARY KEY (`Avoid_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`contact_Id`);

--
-- Indexes for table `hero_section`
--
ALTER TABLE `hero_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prevent_section`
--
ALTER TABLE `prevent_section`
  ADD PRIMARY KEY (`Prevent_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcriber_table`
--
ALTER TABLE `subcriber_table`
  ADD PRIMARY KEY (`subscribe_Id`);

--
-- Indexes for table `symtoms_section`
--
ALTER TABLE `symtoms_section`
  ADD PRIMARY KEY (`Symtoms_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutcorona_section`
--
ALTER TABLE `aboutcorona_section`
  MODIFY `aboutcorona_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `about_section`
--
ALTER TABLE `about_section`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `avoid_section`
--
ALTER TABLE `avoid_section`
  MODIFY `Avoid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `contact_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hero_section`
--
ALTER TABLE `hero_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prevent_section`
--
ALTER TABLE `prevent_section`
  MODIFY `Prevent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subcriber_table`
--
ALTER TABLE `subcriber_table`
  MODIFY `subscribe_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `symtoms_section`
--
ALTER TABLE `symtoms_section`
  MODIFY `Symtoms_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
