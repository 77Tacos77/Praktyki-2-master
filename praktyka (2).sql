-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 21, 2026 at 01:29 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktyka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `postcode` varchar(20) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `firstName`, `lastName`, `street`, `postcode`, `city`, `country`, `phone`, `user_id`) VALUES
(3, 'Jakub', 'Noc', 'Murowana 14', '63-620', 'Laski', 'Polska', '555 555 555', 2),
(4, 'Jan', 'Dzień', 'Jana Pawla 2', '63-620', 'Trzcinica', 'Polska', '123 456 789', 2),
(5, 'Jan', 'Kot', 'Mickiewicza 21', '67-620', 'Warszawa', 'Polska', '048 149 458', 1),
(6, 'Gienek', 'Giermek', 'Grysma', '12-045', 'Grad', 'Polska', '621-234-521', 3),
(9, 'Jakub', 'Noc', 'Mickiewicza 21', '63-620', 'Laski', 'Polska', '432 463 244', 3),
(10, 'Jakub', 'Noc', 'Murowana 14', '63-620', 'Laski', 'Polska', 'dddddddddd', 4),
(11, 'Jan', 'Kot', 'Murowana 14', '67-620', 'Trzcinica', 'Polska', '432 127 542', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `productimage`
--

CREATE TABLE `productimage` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `alt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productimage`
--

INSERT INTO `productimage` (`id`, `product_id`, `alt`) VALUES
(14, 20, '1779345593_Zrzut ekranu 2026-05-21 083946.png'),
(16, 31, '1779360350_Zrzut ekranu 2026-05-14 083510.png'),
(20, 30, '1779362587_Zrzut ekranu 2026-05-21 132233.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `description`) VALUES
(20, 'Meble', 'Chleb', 'Mebel \n        \n        \n        \n        \n        '),
(30, 'Biurko', 'Biurko narożne Heron', 'Biurko narożne Heron to mebel zaprojektowany z myślą o efektywnym i maksymalnym zagospodarowaniu trudnej w aranżacji przestrzeni. Sprawdzi się szczególnie w pomieszczeniach o ograniczonym metrażu, zapewniając idealne miejsce do pracy bądź nauki. Dzięki sw'),
(31, 'Czegos', 'chleb', 'ORka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `productvariant`
--

CREATE TABLE `productvariant` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_name` varchar(255) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `ean13` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productvariant`
--

INSERT INTO `productvariant` (`id`, `product_id`, `variant_name`, `price`, `ean13`) VALUES
(6, 20, 'Domyślny wariant', 5, '0000000000000'),
(8, 30, 'Domyślny', 200, '0000000000000'),
(9, 31, 'Domyślny', 26, '0000000000000');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `imie` varchar(255) DEFAULT NULL,
  `nazwisko` varchar(255) DEFAULT NULL,
  `ulica` varchar(255) DEFAULT NULL,
  `kod_pocztowy` varchar(50) DEFAULT NULL,
  `miasto` varchar(255) DEFAULT NULL,
  `kraj` varchar(255) DEFAULT NULL,
  `numer_telefonu` varchar(50) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `imie`, `nazwisko`, `ulica`, `kod_pocztowy`, `miasto`, `kraj`, `numer_telefonu`, `user_id`) VALUES
(1, 'Jakub', 'Noculak', 'Norweska 4', '63-679', 'Warszawa', 'Polska', '999 998 997', 2),
(2, 'Jan', 'Dzieńd', 'Norweska 4', '63-679', 'Warszawa', 'Polska', '999 998 997', 1),
(3, 'Łukasz', 'Łukaszowski', 'Armi Krajowej 17', '12-045', 'Szczecin', 'Polska', '621-234-521', 3),
(4, 'Jan', 'Noculak', 'Grymsa', '63-679', 'Warszawa', 'Polska', '999 998 997', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` varchar(180) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) DEFAULT 0,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `email`, `password`, `active`, `createdAt`, `updatedAt`) VALUES
(1, 'ktos123', 'ktos123@gmail.com', '$2y$10$ffsJfBQL/F6A8OnKJiK3hOzFszSwcGkPMOfcEwQD58gCGnXwGs1qq', 0, '2026-05-14 10:17:32', '2026-05-19 10:12:07'),
(2, 'ktos1234', 'ktos1234@gmail.com', '$2y$10$BASCr73kasjgJym.cImTgevcRXSMSKfqhiknDbj6jTyIqrYUUXveW', 0, '2026-05-14 12:40:43', '2026-05-19 09:15:58'),
(3, 'Geniusz', 'janusz@gmail.com', '$2y$10$wHBixAnIQ1f8dnRJ3cxbF.Jiwqmqmu/9o2uIzFhLYkBd3lrYQrg1a', 1, '2026-05-19 10:18:52', '2026-05-19 10:32:21'),
(4, 'Geniusz1', 'jakub.noculak@meblemirjan.pl', '$2y$10$55rUh8QnOw..qyVXikEPd.U8oMh77RsOc9A0o5Vvrq/bRrb1iIxN.', 1, '2026-05-20 10:03:11', '2026-05-21 09:38:00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `productimage`
--
ALTER TABLE `productimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `productvariant`
--
ALTER TABLE `productvariant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `productimage`
--
ALTER TABLE `productimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `productvariant`
--
ALTER TABLE `productvariant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `productimage`
--
ALTER TABLE `productimage`
  ADD CONSTRAINT `fk_productimage_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `productvariant`
--
ALTER TABLE `productvariant`
  ADD CONSTRAINT `productvariant_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
