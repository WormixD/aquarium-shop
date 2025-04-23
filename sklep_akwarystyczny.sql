-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Lut 2024, 08:44
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep akwarystyczny`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci_tab`
--

CREATE TABLE `klienci_tab` (
  `id_klienta` int(11) NOT NULL,
  `adres_email` varchar(40) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `adres` varchar(50) NOT NULL,
  `nr_telefonu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klienci_tab`
--

INSERT INTO `klienci_tab` (`id_klienta`, `adres_email`, `imie`, `nazwisko`, `adres`, `nr_telefonu`) VALUES
(19, 'j.mazur@gmail.com', 'Jarosław', 'Mazur', '', ''),
(20, 'J.nowak@gmail.com', 'Jakub', 'Nowak', '', ''),
(22, 'A.stepien@onet.pl', 'Alexander', 'Stępień', 'Opole', '123324567');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty_tab`
--

CREATE TABLE `produkty_tab` (
  `id_produktu` int(11) NOT NULL,
  `nazwa` int(11) NOT NULL,
  `kategoria` varchar(30) NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ryby_tab`
--

CREATE TABLE `ryby_tab` (
  `id_ryby` int(11) NOT NULL,
  `Gatunek` varchar(50) NOT NULL,
  `Kolor` varchar(20) NOT NULL,
  `Wiek` varchar(20) NOT NULL,
  `Płeć` tinyint(1) NOT NULL,
  `Zachowanie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wiadomości_tab`
--

CREATE TABLE `wiadomości_tab` (
  `id_wiadomosci` int(11) NOT NULL,
  `id_klienta` int(11) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `tytul` varchar(30) NOT NULL,
  `wiadomosc` text NOT NULL,
  `zgoda_przetwarzanie_danych` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wiadomości_tab`
--

INSERT INTO `wiadomości_tab` (`id_wiadomosci`, `id_klienta`, `imie`, `nazwisko`, `email`, `tytul`, `wiadomosc`, `zgoda_przetwarzanie_danych`) VALUES
(13, 19, '', '', '', 'Problem z filtrem', 'Dzień dobry mam problem z filtrem mianowicie...', 0),
(14, 20, '', '', 'J.nowak@gmail.com', 'Zamówienie', 'Mam problem z zamówieniem ...', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia_tab`
--

CREATE TABLE `zamowienia_tab` (
  `id_zamowienia` int(11) NOT NULL,
  `id_klienta` int(11) NOT NULL,
  `data_zamowienia` date NOT NULL,
  `kwota` double NOT NULL,
  `stan` varchar(20) NOT NULL,
  `komentarz` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zamowienia_tab`
--

INSERT INTO `zamowienia_tab` (`id_zamowienia`, `id_klienta`, `data_zamowienia`, `kwota`, `stan`, `komentarz`) VALUES
(7, 19, '2024-02-15', 233, 'U nadawcy', 'Zadzwonić przed dostarczeniem');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci_tab`
--
ALTER TABLE `klienci_tab`
  ADD PRIMARY KEY (`id_klienta`),
  ADD KEY `id_klienta` (`id_klienta`);

--
-- Indeksy dla tabeli `produkty_tab`
--
ALTER TABLE `produkty_tab`
  ADD PRIMARY KEY (`id_produktu`);

--
-- Indeksy dla tabeli `ryby_tab`
--
ALTER TABLE `ryby_tab`
  ADD PRIMARY KEY (`id_ryby`);

--
-- Indeksy dla tabeli `wiadomości_tab`
--
ALTER TABLE `wiadomości_tab`
  ADD PRIMARY KEY (`id_wiadomosci`),
  ADD KEY `id_klienta` (`id_klienta`);

--
-- Indeksy dla tabeli `zamowienia_tab`
--
ALTER TABLE `zamowienia_tab`
  ADD PRIMARY KEY (`id_zamowienia`),
  ADD KEY `id_klienta` (`id_klienta`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `klienci_tab`
--
ALTER TABLE `klienci_tab`
  MODIFY `id_klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT dla tabeli `produkty_tab`
--
ALTER TABLE `produkty_tab`
  MODIFY `id_produktu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `ryby_tab`
--
ALTER TABLE `ryby_tab`
  MODIFY `id_ryby` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `wiadomości_tab`
--
ALTER TABLE `wiadomości_tab`
  MODIFY `id_wiadomosci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT dla tabeli `zamowienia_tab`
--
ALTER TABLE `zamowienia_tab`
  MODIFY `id_zamowienia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `wiadomości_tab`
--
ALTER TABLE `wiadomości_tab`
  ADD CONSTRAINT `wiadomości_tab_ibfk_1` FOREIGN KEY (`id_klienta`) REFERENCES `klienci_tab` (`id_klienta`);

--
-- Ograniczenia dla tabeli `zamowienia_tab`
--
ALTER TABLE `zamowienia_tab`
  ADD CONSTRAINT `zamowienia_tab_ibfk_1` FOREIGN KEY (`id_klienta`) REFERENCES `klienci_tab` (`id_klienta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
