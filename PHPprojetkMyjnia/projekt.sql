-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Maj 2023, 21:22
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `czas` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `auth`
--

INSERT INTO `auth` (`id`, `login`, `pass`, `czas`) VALUES
(21, 'ania', '9f7f73748fd8e4881e9a8678ecb4c0b0e66f3245', '2022-12-27 18:59:52'),
(23, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2023-05-15 09:34:08');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `odwolane`
--

CREATE TABLE `odwolane` (
  `id_wizyty` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `naziwsko` int(11) NOT NULL,
  `powod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uslugi`
--

CREATE TABLE `uslugi` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wizyty`
--

CREATE TABLE `wizyty` (
  `id_wizyty` int(11) NOT NULL,
  `data` date NOT NULL,
  `nr_uslugi` int(11) NOT NULL,
  `Nazwisko` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wizyty`
--

INSERT INTO `wizyty` (`id_wizyty`, `data`, `nr_uslugi`, `Nazwisko`) VALUES
(1, '0000-00-00', 3, 'Kowal'),
(2, '2023-05-14', 2, 'Kowalksa'),
(3, '2023-05-14', 2, 'Kowalksa'),
(7, '2023-06-02', 1, 'Rzeźnik'),
(8, '2023-05-11', 2, 'Rzeźnik'),
(10, '2023-05-22', 4, 'Rzeźnik');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indeksy dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wizyty`
--
ALTER TABLE `wizyty`
  ADD PRIMARY KEY (`id_wizyty`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `wizyty`
--
ALTER TABLE `wizyty`
  MODIFY `id_wizyty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
