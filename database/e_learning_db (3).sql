-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 01:40 PM
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
-- Database: `e_learning_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `title`, `description`, `image`) VALUES
(1, 'IT', 'English', '017c63b8db235aab10210f8164aa4623.jpg'),
(8, 'Yaya', 'I love', '06.jpg'),
(9, 'Design', 'hehe', 'd38fe5a0955d48f297c350161bc8dc81.jpg'),
(10, 'Love', 'Love is the beautiful life', 'e5f77ffc17da5597b28fda8659ecf2fc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `price` varchar(100) DEFAULT NULL,
  `image_courses` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `title`, `description`, `user_id`, `category_id`, `price`, `image_courses`) VALUES
(145, 'hhhh', 'Hello', 39, 1, '1000$', '06.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cs`
--

CREATE TABLE `cs` (
  `course_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cs`
--

INSERT INTO `cs` (`course_id`, `title`) VALUES
(1, 'test'),
(2, 'Ea ut voluptatibus d');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `enrollment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lesson_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `title`, `description`, `course_id`, `video`) VALUES
(3, 'Lesson 1: What is the love ?', 'Love is the good thing for all the people.', 145, 'https://www.youtube.com/embed/XqZsoesa55w?si=zT7FWfFiXUA8oALF'),
(27, 'Lesson 2: I love it.', 'Wheels on the Bus, Old Mac Donald\r\n', 145, 'https://www.youtube.com/embed/Ser69-nsRNs?si=MjqpDAFCwvKOiGSL'),
(28, 'Lesson 3: I am here To be your', 'Check', 145, 'https://www.youtube.com/embed/hX04qBTeNFQ?si=pzzxoG1rjmA2Xmgx');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `quiz_id` int(11) NOT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `content` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`quiz_id`, `lesson_id`, `content`) VALUES
(2, 3, 'https://docs.google.com/forms/d/e/1FAIpQLSe0vD9TC7s3laObBxrdYh7UvoLUeL2spHHkl3P4D-pe8o9H-Q/viewform?usp=sf_link'),
(4, 27, 'https://docs.google.com/forms/d/e/1FAIpQLSe0vD9TC7s3laObBxrdYh7UvoLUeL2spHHkl3P4D-pe8o9H-Q/viewform?usp=sf_link'),
(9, 28, 'https://docs.google.com/forms/d/e/1FAIpQLSe0vD9TC7s3laObBxrdYh7UvoLUeL2spHHkl3P4D-pe8o9H-Q/viewform?usp=sf_link');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_sumit`
--

CREATE TABLE `quiz_sumit` (
  `sumit_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_sumit`
--

INSERT INTO `quiz_sumit` (`sumit_id`, `user_id`, `lesson_id`, `image`) VALUES
(6, 1, 3, 'BgOfMe.png');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roles_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roles_id`, `name`) VALUES
(1, 'admin'),
(2, 'trainer'),
(3, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `profile_image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `gender`, `roles_id`, `phone`, `profile_image`) VALUES
(1, 'Chhaiya Soplorn', 'chhaiya.sophorn@student.passerellesnumeriques.org', '123@Pnc', '', 3, '0969678884', 'Untitled design (1).png'),
(2, 'Chhaiya Sophorn', 'chhaiya.sophorn@student.asserellesnumeriques.org', '1234', 'Female', 3, '0969678884', '015a0c9e6538e8bdd8f415276a92a926 (1).jpg'),
(3, 'Chhaiya Sophorn', 'chhaiya.sophon@student.passerellesnumeriques.org', '123', 'Male', 3, '0969678884', 'photo_2022-08-25_07-50-15.jpg'),
(4, 'Yaya', 'chhaiya.sophor@student.passerellesnumeriques.org', '123', 'Male', 3, '0969678884', 'photo_2023-09-28_21-13-43.jpg'),
(5, 'Yaa', 'chhaiya.sophorn@studnt.passerellesnumeriques.org', '123', 'Male', 3, '0969678884', '017c63b8db235aab10210f8164aa4623.jpg'),
(6, 'fuck you', 'him@gmail.com', 'him', 'Male', 3, '0982456', 'Screenshot 2024-02-22 142549.png'),
(7, 'vuvimebeku@mailinator.com', 'codiz@mailinator.com', 'Pa$$w0rd!', 'Female', 3, 'veqe@mailinator.com', 'Screenshot 2024-02-22 152631.png'),
(8, 'fuck you', 'codiz@maiinator.com', 'Pa$$w0d!', 'Male', 3, 'sdf', 'koeuk_4.jpg'),
(9, 'tynyfy@mailinator.com', 'gamag@mailinator.com', 'Pa$$w0rd!', 'Male', 3, 'fobulyw@mailinator.com', 'koeuk_4.jpg'),
(10, 'Colt Kinney', 'naqywbi@mailinator.com', '7876', 'Male', 3, '0973329000', 'koeuk_4.jpg'),
(11, 'Chhaiya Sophorn', 'chhaiya.sophorn@sudent.passerellesnumeriques.org', '132', 'Female', 3, '0969678884', 'WIN_20231120_07_39_30_Pro.jpg'),
(12, 'Vany', 'chhaiya.sophorn@student.renumeriques.org', '123', 'Male', 3, '0969678884', 'e5f77ffc17da5597b28fda8659ecf2fc.jpg'),
(13, 'Love', 'ya@haoa.org', '123', 'Female', 3, '096369896', 'Untitled design (1).png'),
(14, 'YaYa', 'chhaiya.sorn@student.passerellesnumeriques.org', '123', 'Female', 3, '0969678884', '017c63b8db235aab10210f8164aa4623.jpg'),
(15, 'Chhaiya Sophorn', 'chhaiya.sophorn@student.esnumeriques.org', '123', 'Female', 3, '0969678884', 'Untitled design (1).png'),
(16, 'Kouk', 'mange@haha.org', '123', 'Female', 3, '0969678884', '017c63b8db235aab10210f8164aa4623.jpg'),
(17, 'Chhaiya Sophorn', 'chhaiya.sophorn@student.parellesnumeriques.org', '', 'Female', 3, '0969678884', '07.jpg'),
(18, 'Yaya', 'chhaiya.sophorn@student.ellesnumeriques.org', '123', 'Male', 3, '0969678884', '05.jpg'),
(19, 'Yaya', 'chhaiya.sophorn@student.eeriques.org', '', 'Male', 3, '0969678884', '05.jpg'),
(20, 'Chhaiya Sophorn', 'ya@hahgggga.org', '123', 'Female', 3, '0969678884', '015a0c9e6538e8bdd8f415276a92a926 (1).jpg'),
(21, 'Chhaiya Sophorn', 'chhaiya.sophorn@sdent.passerellesnumeriques.org', '123', 'Female', 3, '0969678', '10.jpg'),
(22, 'Chhaiya Sophorn', 'chhaiya.sophorn@ddent.passerellesnumeriques.org', '123', 'Female', 3, '0969678884', '05.jpg'),
(23, 'YaYa', 'chhaiya.sophorn@snt.passerellesnumeriques.org', '123', 'Female', 3, '0969678884', 'non.webp'),
(24, 'Chhaiya Sophorn', 'chhaiya.sophorn@student.lesnumeriques.org', '123', 'Female', 3, '12345', '06.jpg'),
(25, 'Jhaha', 'chhaiya.hahaadorn@student.passerellesnumeriques.org', '123', 'Male', 3, '0969678884', 'non.webp'),
(26, 'YaYa', 'chhaiya.sophorn@student.ggeriques.org', '123', 'Female', 3, '0969678884', '05.jpg'),
(27, 'Chhaiya Sophorn', 'chhaiya.sophorn@student.pjjesnumeriques.org', '123', 'Female', 3, '0969678884', 'non.webp'),
(28, 'Chhaiya Sophorn', 'chhaiya.sophorn@student.pyyyellesnumeriques.org', '123', 'Male', 3, '0969678884', '07.jpg'),
(29, 'Chhaiya Sophorn', 'chhaiya.sophorn@student.pjjumeriques.org', '123', 'Female', 3, '0969678884', 'non.webp'),
(30, 'Chhaiya', 'chhaffffrn@student.passerellesnumeriques.org', '123', 'Female', 3, '0969678884', 'non.webp'),
(31, 'Chhaiya Sophorn', 'chhaiya.sophorn@student.es.org', '123', 'Female', 3, '0969678884', 'non.webp'),
(32, 'Chhaiya Sophorn', 'chhaiya.sophorn@student.pahhhgfumeriques.org', '123', 'Female', 3, '0969678884', 'non.webp'),
(33, 'Chhaiya Sophorn', 'chhaiya.sophorn@student.passerggeriques.org', '123', 'Male', 3, '0969678884', 'non.webp'),
(34, 'Chhaiya Sophorn', 'chhaiya.sophorn@stude.esnumeriques.org', '123', 'Female', 3, '0969678884', '015a0c9e6538e8bdd8f415276a92a926 (1).jpg'),
(35, 'Chhaiya Sophorn', 'chhaiya@student.passeesnumeriques.org', '123', 'Female', 3, '0969678884', '015a0c9e6538e8bdd8f415276a92a926 (1).jpg'),
(36, 'Chhaiya Sophorn', 'chhaiya@student.psnumeriques.org', '123', 'Female', 3, '0969678884', '015a0c9e6538e8bdd8f415276a92a926 (1).jpg'),
(37, 'YaYa', 'chnt@gg.passerellesnumeriques.org', '123@Pnc', 'Female', 3, '0969678884', 'non.webp'),
(38, 'Chhaiya Sophorn', 'chhaiya.sophorn@studen.llesnumeriques.org', '123@Pnc', 'Female', 3, '0969678884', 'non.webp'),
(39, 'Chhaiya', 'chhaiya@example.com', 'password1', 'Male', 2, '123456789', 'uploading/Untitled design (1).png'),
(40, 'Sokunthea', 'sokunthea@example.com', 'password2', 'Female', 2, '987654321', 'uploading/koeuk_4.jpg'),
(41, 'Kouk', 'kouk@example.com', 'password3', 'Male', 2, '555555555', '6262794953545595754_121.jpg'),
(42, 'Chhaiya Sophorn', 'chhaiya.sophorn@student.umeriques.org', '123@Pnc', 'Female', 3, '0969678884', 'ebcaede226bb4a75611d61723efe7e10.jpg'),
(43, 'Chhaiya Sophorn', 'chhaiya.sophorn@student.hfttlesnumeriques.org', '123@Chh', 'Male', 3, '0969678884', 'd38fe5a0955d48f297c350161bc8dc81.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `cs`
--
ALTER TABLE `cs`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`quiz_id`),
  ADD KEY `lesson_id` (`lesson_id`);

--
-- Indexes for table `quiz_sumit`
--
ALTER TABLE `quiz_sumit`
  ADD PRIMARY KEY (`sumit_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `lesson_id` (`lesson_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roles_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `unique_email` (`email`),
  ADD KEY `roles_id` (`roles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `cs`
--
ALTER TABLE `cs`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `enrollment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `quiz_sumit`
--
ALTER TABLE `quiz_sumit`
  MODIFY `sumit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roles_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `enrollments_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_ibfk_1` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`);

--
-- Constraints for table `quiz_sumit`
--
ALTER TABLE `quiz_sumit`
  ADD CONSTRAINT `quiz_sumit_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `quiz_sumit_ibfk_2` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`roles_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
