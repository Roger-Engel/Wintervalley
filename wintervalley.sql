-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 feb 2023 om 20:05
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wintervalley`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artists`
--

CREATE TABLE `artists` (
  `titel_event_1` varchar(255) DEFAULT NULL,
  `artiest_1_event_1` varchar(255) DEFAULT NULL,
  `artiest_1_event_1_namen_artiesten` varchar(255) DEFAULT NULL,
  `artiest_1_event_1_speeltijd` varchar(255) DEFAULT NULL,
  `artiest_1_event_1_datum` varchar(255) DEFAULT NULL,
  `artiest_1_event_1_genre` varchar(255) DEFAULT NULL,
  `artiest_2_event_1` varchar(255) DEFAULT NULL,
  `artiest_2_event_1_namen_artiesten` varchar(255) DEFAULT NULL,
  `artiest_2_event_1_speeltijd` varchar(255) DEFAULT NULL,
  `artiest_2_event_1_datum` varchar(255) DEFAULT NULL,
  `artiest_2_event_1_genre` varchar(255) DEFAULT NULL,
  `artiest_3_event_1` varchar(255) DEFAULT NULL,
  `artiest_3_event_1_namen_artiesten` varchar(255) DEFAULT NULL,
  `artiest_3_event_1_speeltijd` varchar(255) DEFAULT NULL,
  `artiest_3_event_1_datum` varchar(255) DEFAULT NULL,
  `artiest_3_event_1_genre` varchar(255) DEFAULT NULL,
  `artiest_4_event_1` varchar(255) DEFAULT NULL,
  `artiest_4_event_1_namen_artiesten` varchar(255) DEFAULT NULL,
  `artiest_4_event_1_speeltijd` varchar(255) DEFAULT NULL,
  `artiest_4_event_1_datum` varchar(255) DEFAULT NULL,
  `artiest_4_event_1_genre` varchar(255) DEFAULT NULL,
  `titel_event_2` varchar(255) DEFAULT NULL,
  `artiest_1_event_2` varchar(255) DEFAULT NULL,
  `artiest_1_event_2_namen_artiesten` varchar(255) DEFAULT NULL,
  `artiest_1_event_2_speeltijd` varchar(255) DEFAULT NULL,
  `artiest_1_event_2_datum` varchar(255) DEFAULT NULL,
  `artiest_1_event_2_genre` varchar(255) DEFAULT NULL,
  `artiest_2_event_2` varchar(255) DEFAULT NULL,
  `artiest_2_event_2_namen_artiesten` varchar(255) DEFAULT NULL,
  `artiest_2_event_2_speeltijd` varchar(255) DEFAULT NULL,
  `artiest_2_event_2_datum` varchar(255) DEFAULT NULL,
  `artiest_2_event_2_genre` varchar(255) DEFAULT NULL,
  `artiest_3_event_2` varchar(255) DEFAULT NULL,
  `artiest_3_event_2_namen_artiesten` varchar(255) DEFAULT NULL,
  `artiest_3_event_2_speeltijd` varchar(255) DEFAULT NULL,
  `artiest_3_event_2_datum` varchar(255) DEFAULT NULL,
  `artiest_3_event_2_genre` varchar(255) DEFAULT NULL,
  `artiest_4_event_2` varchar(255) DEFAULT NULL,
  `artiest_4_event_2_namen_artiesten` varchar(255) DEFAULT NULL,
  `artiest_4_event_2_speeltijd` varchar(255) DEFAULT NULL,
  `artiest_4_event_2_datum` varchar(255) DEFAULT NULL,
  `artiest_4_event_2_genre` varchar(255) DEFAULT NULL,
  `titel_event_3` varchar(255) DEFAULT NULL,
  `artiest_1_event_3` varchar(255) DEFAULT NULL,
  `artiest_1_event_3_namen_artiesten` varchar(255) DEFAULT NULL,
  `artiest_1_event_3_speeltijd` varchar(255) DEFAULT NULL,
  `artiest_1_event_3_datum` varchar(255) DEFAULT NULL,
  `artiest_1_event_3_genre` varchar(255) DEFAULT NULL,
  `artiest_2_event_3` varchar(255) DEFAULT NULL,
  `artiest_2_event_3_namen_artiesten` varchar(255) DEFAULT NULL,
  `artiest_2_event_3_speeltijd` varchar(255) DEFAULT NULL,
  `artiest_2_event_3_datum` varchar(255) DEFAULT NULL,
  `artiest_2_event_3_genre` varchar(255) DEFAULT NULL,
  `artiest_3_event_3` varchar(255) DEFAULT NULL,
  `artiest_3_event_3_namen_artiesten` varchar(255) DEFAULT NULL,
  `artiest_3_event_3_speeltijd` varchar(255) DEFAULT NULL,
  `artiest_3_event_3_datum` varchar(255) DEFAULT NULL,
  `artiest_3_event_3_genre` varchar(255) DEFAULT NULL,
  `artiest_4_event_3` varchar(255) DEFAULT NULL,
  `artiest_4_event_3_namen_artiesten` varchar(255) DEFAULT NULL,
  `artiest_4_event_3_speeltijd` varchar(255) DEFAULT NULL,
  `artiest_4_event_3_datum` varchar(255) DEFAULT NULL,
  `artiest_4_event_3_genre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `artists`
--

INSERT INTO `artists` (`titel_event_1`, `artiest_1_event_1`, `artiest_1_event_1_namen_artiesten`, `artiest_1_event_1_speeltijd`, `artiest_1_event_1_datum`, `artiest_1_event_1_genre`, `artiest_2_event_1`, `artiest_2_event_1_namen_artiesten`, `artiest_2_event_1_speeltijd`, `artiest_2_event_1_datum`, `artiest_2_event_1_genre`, `artiest_3_event_1`, `artiest_3_event_1_namen_artiesten`, `artiest_3_event_1_speeltijd`, `artiest_3_event_1_datum`, `artiest_3_event_1_genre`, `artiest_4_event_1`, `artiest_4_event_1_namen_artiesten`, `artiest_4_event_1_speeltijd`, `artiest_4_event_1_datum`, `artiest_4_event_1_genre`, `titel_event_2`, `artiest_1_event_2`, `artiest_1_event_2_namen_artiesten`, `artiest_1_event_2_speeltijd`, `artiest_1_event_2_datum`, `artiest_1_event_2_genre`, `artiest_2_event_2`, `artiest_2_event_2_namen_artiesten`, `artiest_2_event_2_speeltijd`, `artiest_2_event_2_datum`, `artiest_2_event_2_genre`, `artiest_3_event_2`, `artiest_3_event_2_namen_artiesten`, `artiest_3_event_2_speeltijd`, `artiest_3_event_2_datum`, `artiest_3_event_2_genre`, `artiest_4_event_2`, `artiest_4_event_2_namen_artiesten`, `artiest_4_event_2_speeltijd`, `artiest_4_event_2_datum`, `artiest_4_event_2_genre`, `titel_event_3`, `artiest_1_event_3`, `artiest_1_event_3_namen_artiesten`, `artiest_1_event_3_speeltijd`, `artiest_1_event_3_datum`, `artiest_1_event_3_genre`, `artiest_2_event_3`, `artiest_2_event_3_namen_artiesten`, `artiest_2_event_3_speeltijd`, `artiest_2_event_3_datum`, `artiest_2_event_3_genre`, `artiest_3_event_3`, `artiest_3_event_3_namen_artiesten`, `artiest_3_event_3_speeltijd`, `artiest_3_event_3_datum`, `artiest_3_event_3_genre`, `artiest_4_event_3`, `artiest_4_event_3_namen_artiesten`, `artiest_4_event_3_speeltijd`, `artiest_4_event_3_datum`, `artiest_4_event_3_genre`) VALUES
('WinterValley Sweden', 'The Neighbourhood', 'Jesse Rutherford, Jeremy Freedman, Zach Abels, Mikey Margott', '16:00-18:00', '28th January 2023', 'Genre: Alternative rock, indie rock, pop rock', 'Taylor Swift', 'Niet van toepassing', '18:00-20:00', '28th January 2023', 'Genre: Pop', 'Ariana Grande', 'Niet van toepassing', '20:00-22:00', '28th January 2023', 'Genre: Pop, country', 'Robbie Williams', 'Niet van toepassing', '22:00-00:00', '28th January 2023', 'Genre: Pop, pop rock, alternative rock', 'WinterValley Finland', 'Sarah Brightman', 'Niet van toepassing', '16:00-18:00', '25th February 2023', 'Genre: Classical crossover, operatic pop', 'Ed Sheeran', 'Niet van toepassing', '18:00-20:00', '25th February 2023', 'Genre: Pop', 'Kate Bush', 'Niet van toepassing', '20:00-22:00', '25th February 2023', 'Genre: Art pop, art rock, progressive pop', 'Linkin park', 'Mike Shinoda, Brad Delson, Rob Bourdon, Joe Hahn, Dave Farrell', '22:00-00:00', '25th February 2023', 'Genre: Alternative rock, pop rock, rap rock', 'WinterValley Austria', 'Mariah Carey', 'Niet van toepassing', '16:00-18:00', '25th March 2022', 'Genre: Pop', 'Imagine Dragons', 'Dan Reynolds, Wayne Sermon, Ben McKee, Daniel Platzman', '18:00-20:00', '25th March 2022', 'Genre: pop, rock', 'Michael Bublé', 'Niet van toepassing', '20:00-22:00', '25th March 2022', 'Genre: jazz, pop', 'Aurora', 'Aurora Aksnes', '22:00-24:00', '25th March 2022', 'Genre: Pop, rock');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `event_tickets_austria`
--

CREATE TABLE `event_tickets_austria` (
  `event_id` int(11) NOT NULL,
  `tickets` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `event_tickets_austria`
--

INSERT INTO `event_tickets_austria` (`event_id`, `tickets`) VALUES
(1, 1846);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `event_tickets_finland`
--

CREATE TABLE `event_tickets_finland` (
  `event_id` int(11) NOT NULL,
  `tickets` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `event_tickets_finland`
--

INSERT INTO `event_tickets_finland` (`event_id`, `tickets`) VALUES
(1, 1672);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `event_tickets_sweden`
--

CREATE TABLE `event_tickets_sweden` (
  `event_id` int(11) NOT NULL,
  `tickets` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `event_tickets_sweden`
--

INSERT INTO `event_tickets_sweden` (`event_id`, `tickets`) VALUES
(1, 897);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`password`, `id`, `voornaam`, `achternaam`, `email`, `username`) VALUES
('$2y$10$Blcu6v32o8NCpiJNu.dSq.xFVK8Q/L7x.d4A141so0xea5BR.hJf6', 1, 'Jannes', 'Groot', 'jannesgroot0@gmail.com', 'Jannesje'),
('$2y$10$0D4InxmPG7fsT8jMT2Djpea6s3bnTYjveK0DDZemsP8818pcCdHZC', 2, 'Joris', 'Kaas', 'kaasje@gmail.com', 'Joris911'),
('$2y$10$0GGyQ8n0DNm4F5bdCn0cLeIlDO.qf1ZUCeQY5KtHH4cBGQKEJOES6', 3, 'jan', 'wilem', 'janwillem@gmail.com', 'Jantje'),
('$2y$10$hu6wQp9tlQPEaYHqT8z8lOxMaQfefZQJxoVQTwLhBVKhuxzyT3vr.', 5, 'Bruno', 'Dijkhuis', 'Brunodijkhuis@gmail.com', 'Bruno'),
('$2y$10$5472HtxV/R80xUic.EV89uQANHfys64ag7QYd7/oG0VzJ9dqq3S/C', 7, 'Michel', 'Ruiter', 'michel2003@hotmail.nl', 'Matt'),
('$2y$10$6OnxW.7Gc38QjLXqtIlHB.LWygwKVx1ZI33hyqhAfMAgwpToRW/Za', 10, 'Jeffry', 'Visser', 'jeffryvisser@gmail.com', 'jeffry.3');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `house_rules`
--

CREATE TABLE `house_rules` (
  `tickets_info` longtext DEFAULT NULL,
  `forbidden_info` longtext DEFAULT NULL,
  `lockers_info` longtext DEFAULT NULL,
  `own_risk_info` longtext DEFAULT NULL,
  `minimum_age_legitimation_info` longtext DEFAULT NULL,
  `promotion_selling_trading_info` longtext DEFAULT NULL,
  `toilets_info` longtext DEFAULT NULL,
  `smoking_info` longtext DEFAULT NULL,
  `deposit_recycle_system_info` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `house_rules`
--

INSERT INTO `house_rules` (`tickets_info`, `forbidden_info`, `lockers_info`, `own_risk_info`, `minimum_age_legitimation_info`, `promotion_selling_trading_info`, `toilets_info`, `smoking_info`, `deposit_recycle_system_info`) VALUES
('All attendees must present a valid, purchased-in-advance ticket upon entry to WinterValley Festival. Any person found to be in possession of an invalid or non-purchased ticket will be denied entry.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'This is a list of all the forbidden things at WinterValley: Soft & hard drugs, laughing gas, joints,\r\n          food,\r\n          lollipops, chewing gum, (alcoholic) beverages, glassware,\r\n          (plastic) bottles, cans, flags, sticks, umbrellas, grinders, walking sticks (medical crutches and aids\r\n          excepted), animals, banners, balaclavas, (partially) face-covering masks, loose metal chains\r\n          (incorporated\r\n          into clothing or accessories is allowed), objects with discriminatory and/or provocative texts and/or\r\n          expressions, polarizing or group-specific clothing, sports club clothing, weapons or objects that could\r\n          be\r\n          used as weapons, objects that could negatively affect the safety, health or well-being of visitors,\r\n          aerosols, sprays, atomizers, fireworks, flares and transport vehicles. It is forbidden to climb stages, tents, trees, buildings, fences or other objects on the festival\r\n          grounds. It is also not allowed to take objects and/or objects from the festival grounds.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, 'All attendees of WinterValley Festival are encouraged to use our secure locker service for the safekeeping of their personal belongings. Locker rental can be purchased in advance with your festival ticket or on site at the festival grounds. Each rental includes a specified rental period, usually for the duration of the festival. To access the locker, attendees must present a valid rental confirmation and a government-issued ID. The lockers are accessible at all times during the festival hours, however, the festival organizers are not responsible for lost or stolen items.', NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, 'All attendees of WinterValley Festival acknowledge and agree that their participation in the festival is at their own risk. The festival organizers will not be held liable for any injuries, damages, or losses incurred during the festival. This includes, but is not limited to, any injuries sustained while participating in activities or using facilities on the festival grounds, or any loss or damage to personal property. Attendees are encouraged to take all necessary precautions to ensure their own safety, including following all festival rules and guidelines.', NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, 'All attendees must be 18 years of age or older, and must present a valid government-issued ID or passport upon entry to the festival. Any attendees under 18 years of age must be accompanied by a parent or guardian and present a signed consent form. Any attendees found to be under the minimum age without proper identification or accompaniment will be denied entry and will not be eligible for a refund.', NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL, 'It is forbidden to sell or offer goods on and/or around the event grounds and parking lots without permission from the organization. As well as reselling our merchandise around the venue. It is not allowed to promote other events on or around the event site without permission.', NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL, NULL, 'It is not allowed for multiple people to enter 1 toilet cubicle at the same time. Urinating in public is\r\n          forbidden on the terrain and one will be removed from the terrain when detected.', NULL, NULL),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Smoking is strictly prohibited within the festival grounds. This includes traditional cigarettes, e-cigarettes, and other smoking devices. Any attendees found smoking within the festival grounds will be subject to removal without refund.', NULL),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WinterValley festival promotes a recycling and environmentally friendly culture, therefore, we have implemented a deposit recycling system. Every attendee will be given a deposit cup at the time of entry, and they must use this cup throughout the festival for all their beverage purchases. Attendees will receive a deposit refund of $1 for every cup returned to designated deposit stations. Any attendee found littering or not using the deposit cup system will be subject to removal without refund.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `merch`
--

CREATE TABLE `merch` (
  `id` int(11) NOT NULL,
  `landen` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `amount` int(11) NOT NULL CHECK (`amount` <= 1500)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `merch`
--

INSERT INTO `merch` (`id`, `landen`, `price`, `amount`) VALUES
(1, 'Wintervalley', '29.99', 1500),
(2, 'Finland', '29.99', 1500),
(3, 'Netherlands', '29.99', 1500),
(4, 'Norway', '29.99', 1500);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news`
--

CREATE TABLE `news` (
  `id` mediumint(9) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `tekst` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `news`
--

INSERT INTO `news` (`id`, `titel`, `tekst`) VALUES
(1, 'Announcing WinterValley Austria', 'WinterValley, one of the most popular winter festivals in the world, has announced its next event, WinterValley Austria. The festival, which is set to take place in the picturesque Austrian Alps, will feature a wide variety of activities, entertainment, and culinary delights for visitors to enjoy.<br>\r\n            <br>\r\n            The festival will kick off with a grand opening ceremony, featuring a spectacular light show and a performance by a renowned Austrian folk band. Visitors will be able to explore the many vendors and exhibitors showcasing the latest winter sports equipment, fashion, and accessories.<br>\r\n            <br>\r\n            In addition to the shopping and entertainment, WinterValley Austria will also feature a variety of winter sports competitions, including skiing, snowboarding, and ice skating. Professional athletes and amateurs alike will be able to test their skills on the slopes and compete for prizes.<br>\r\n            <br>\r\n            The festival will also feature a wide range of culinary delights, including traditional Austrian dishes, international cuisine, and an extensive selection of local wines and beers. Visitors will be able to sample the delicious food and drink while enjoying the beautiful alpine scenery.<br>\r\n            <br>\r\n            The organizers of WinterValley Austria have also announced that a portion of the proceeds from the festival will be donated to local charities and organizations that support winter sports and the preservation of the Austrian Alps.<br>\r\n            <br>\r\n            WinterValley Austria is set to take place from December 15th to December 20th, 2023. It is expected to attract thousands of visitors from around the world and promises to be a truly unforgettable winter experience.<br>\r\n            <br>\r\n            In conclusion, WinterValley Austria is the next big event for winter festival enthusiasts. With a wide range of activities, entertainment, and delicious food, visitors will be able to enjoy the picturesque Austrian Alps while also supporting local charities. Mark your calendars and book your tickets today to be a part of this wonderful winter celebration.'),
(2, 'WinterValley Norway, It Was Awesome!\r\n', 'The annual WinterValley festival, which was held in Norway this year, has been declared a resounding success by both organizers and attendees. The festival, which is known for its diverse array of winter sports, entertainment, and culinary delights, attracted thousands of visitors from around the world.<br>\r\n            <br>                     \r\n            One of the highlights of the festival was the professional skiing and snowboarding competitions, which featured some of the worlds top athletes. The competitions were held on the pristine slopes of the Norwegian mountains, providing a spectacular backdrop for the thrilling action.<br>\r\n            <br>\r\n            In addition to the sports events, the festival also featured a wide variety of entertainment, including live music performances, comedy shows, and cultural exhibitions. Visitors were able to enjoy traditional Norwegian folk music, as well as international acts, in cozy and intimate venues throughout the festival.<br>\r\n            <br>\r\n            The food and drink offerings at WinterValley Norway were also a major draw for visitors. The festival featured an extensive selection of traditional Norwegian dishes, as well as international cuisine and a wide range of local beers and wines. The festival’s culinary delights were praised by visitors and food critics alike for its great taste and quality.<br>\r\n            <br>\r\n            The organizers of WinterValley Norway also announced that a portion of the proceeds from the festival would be donated to local charities and organizations that support winter sports and the preservation of the Norwegian mountains.<br>\r\n            <br>\r\n            In conclusion, WinterValley Norway was a huge success and a true celebration of winter sports, entertainment, and culinary delights. Visitors from around the world enjoyed the beautiful landscapes of Norway and the diverse range of activities that the festival had to offer. The festivals organizers are already planning for the next WinterValley event and are looking forward to welcoming visitors once again next year.\r\n'),
(3, 'WinterValley Norway, Its Tomorrow!', 'The highly anticipated WinterValley festival, set to take place in Norway tomorrow, has caused quite a stir as all the tickets have been sold out. The festival, which features a diverse array of winter sports, entertainment, and culinary delights, was expected to attract thousands of visitors from around the world. Unfortunately, due to high demand and limited capacity, no more tickets will be available for purchase.<br>\r\n            <br>\r\n            Despite this, the festival will still feature a wide range of activities for visitors to enjoy, including professional skiing and snowboarding competitions, live music performances, comedy shows, and cultural exhibitions. Traditional Norwegian folk music, as well as international acts, will be performed in cozy and intimate venues throughout the festival.<br>\r\n            <br>\r\n            The food and drink offerings at WinterValley Norway will also be a major draw for visitors. The festival will feature an extensive selection of traditional Norwegian dishes, as well as international cuisine and a wide range of local beers and wines. The festival’s culinary delights will be praised by visitors and food critics alike for its great taste and quality.<br>\r\n            <br>\r\n            The organizers of WinterValley Norway have also announced that a portion of the proceeds from the festival will be donated to local charities and organizations that support winter sports and the preservation of the Norwegian mountains.<br>\r\n            <br>\r\n            In conclusion, WinterValley Norway is happening tomorrow, but unfortunately, all the tickets have been sold out. Organizers apologize for any inconvenience this may cause and encourage those who were unable to secure a ticket to follow the event coverage through various media. Hopefully, next years WinterValley event will have more tickets available for purchase and will be able to welcome more visitors.'),
(4, 'Thank You!', 'The WinterValley festival, which is held annually in different locations, has been announced as the \"Best Festival of the Year\" by leading industry experts. The festival, which features a diverse array of winter sports, entertainment, and culinary delights, has been praised for its ability to provide a truly unique and unforgettable experience for visitors.<br>\r\n            <br>\r\n            The festival has received high praise for its professional skiing and snowboarding competitions, which feature some of the worlds top athletes. The competitions are held on the pristine slopes of various mountainous locations, providing a spectacular backdrop for the thrilling action.<br>\r\n            <br>\r\n            In addition to the sports events, the festival also features a wide variety of entertainment, including live music performances, comedy shows, and cultural exhibitions. Visitors are able to enjoy traditional folk music as well as international acts, in cozy and intimate venues throughout the festival.<br>\r\n            <br>\r\n            The food and drink offerings at WinterValley also receive high praise from visitors and critics. The festival features an extensive selection of traditional dishes, as well as international cuisine and a wide range of local beers and wines. The festivals culinary delights are praised for its great taste and quality.<br>\r\n            <br>\r\n            The organizers of WinterValley also announced that a portion of the proceeds from the festival will be donated to local charities and organizations that support winter sports and the preservation of the mountainous locations.<br>\r\n            <br>\r\n            In conclusion, WinterValley has been announced as the best festival of the year for its unique and unforgettable experience it provides to visitors with a combination of winter sports, entertainment, and culinary delights. The festival promises to offer an exciting and enjoyable experience for visitors and make a positive impact in the local communities it is held in.\r\n'),
(5, 'Happy New Year!', 'As the year comes to a close and we look forward to a new one, the organizers of the WinterValley festival would like to extend warm wishes to all of our past, present and future visitors. WinterValley is known for its diverse array of winter sports, entertainment, and culinary delights, and has become a favorite among winter festival enthusiasts.<br>\r\n            <br>\r\n            We would like to thank everyone who attended our previous events and made them such a success. Your support and enthusiasm are what makes WinterValley the best winter festival. We look forward to welcoming you back in the future and creating more unforgettable winter experiences together.<br>\r\n            <br>\r\n            As we welcome the New Year, we are excited to announce that we are already planning for the next WinterValley event, which will take place in a new location, and will be bigger and better than ever before. We promise to bring the same level of excitement, entertainment and culinary delights that you have come to expect from us.<br>\r\n            <br>\r\n            Finally, we would like to take this opportunity to remind everyone to stay safe and healthy during these challenging times. We look forward to celebrating the New Year together, and creating unforgettable memories at WinterValley. Happy New Year to everyone!\r\n\r\n\r\n'),
(6, 'WinterValley Norway, Sold Out!\r\n', 'The highly anticipated WinterValley festival, set to take place in Norway, has caused quite a stir as all the tickets have been sold out. The festival, which features a diverse array of winter sports, entertainment, and culinary delights, was expected to attract thousands of visitors from around the world.<br>\r\n            <br>\r\n            Unfortunately, due to high demand and limited capacity, no more tickets will be available for purchase. The organizers of the festival have issued a statement apologizing for the inconvenience and disappointment this may cause for those who were unable to secure a ticket. They have also announced that they are already planning for the next WinterValley event and will be working to make more tickets available for purchase in the future.<br>\r\n            <br>\r\n            Despite this, the festival will still feature a wide range of activities for visitors to enjoy, including professional skiing and snowboarding competitions, live music performances, comedy shows, and cultural exhibitions. Traditional Norwegian folk music, as well as international acts, will be performed in cozy and intimate venues throughout the festival.<br>\r\n            <br>\r\n            The food and drink offerings at WinterValley Norway will also be a major draw for visitors. The festival will feature an extensive selection of traditional Norwegian dishes, as well as international cuisine and a wide range of local beers and wines. The festival’s culinary delights will be praised by visitors and food critics alike for its great taste and quality.<br>\r\n            <br>\r\n            The organizers of WinterValley Norway have also announced that a portion of the proceeds from the festival will be donated to local charities and organizations that support winter sports and the preservation of the Norwegian mountains.<br>\r\n            <br>\r\n            In conclusion, WinterValley Norway tickets have sold out, the organizers apologize for any inconvenience this may cause and encourage those who were unable to secure a ticket to follow the event coverage through various media. Hopefully, next years WinterValley event will have more tickets available for purchase and will be able to welcome more visitors.\r\n'),
(7, 'WinterValley Netherlands, Best Event Ever!\r\n', 'The WinterValley festival, which was recently held in Netherlands, has been declared one of the best events ever by both organizers and attendees. The festival, which is known for its diverse array of winter sports, entertainment, and culinary delights, attracted thousands of visitors from around the world.<br>\r\n            <br>\r\n            The festival featured professional skiing and snowboarding competitions, which were held on the pristine slopes of the Dutch mountains. The competitions were a major highlight of the festival, featuring some of the worlds top athletes and providing a spectacular backdrop for the thrilling action.<br>\r\n            <br>\r\n            In addition to the sports events, the festival also featured a wide variety of entertainment, including live music performances, comedy shows, and cultural exhibitions. Visitors were able to enjoy traditional Dutch folk music, as well as international acts, in cozy and intimate venues throughout the festival.<br>\r\n            <br>\r\n            The food and drink offerings at WinterValley Netherlands were also a major draw for visitors. The festival featured an extensive selection of traditional Dutch dishes, as well as international cuisine and a wide range of local beers and wines. The festival’s culinary delights were praised by visitors and food critics alike for its great taste and quality.<br>\r\n            <br>\r\n            The organizers of WinterValley Netherlands also announced that a portion of the proceeds from the festival were donated to local charities and organizations that support winter sports and the preservation of the Dutch mountains.<br>\r\n            <br>\r\n            In conclusion, WinterValley Netherlands was declared as one of the best events ever by both organizers and attendees. The festival provided a unique and unforgettable experience for visitors with a combination of winter sports, entertainment, and culinary delights. The festivals organizers are already planning for the next WinterValley event and are looking forward to welcoming visitors once again next year.\r\n\r\n\r\n'),
(8, 'No New Merch\r\n', 'The WinterValley festival organizers have recently announced that due to the ongoing COVID-19 pandemic, they will not be releasing any new merchandise for the upcoming festival. The festival, which features a diverse array of winter sports, entertainment, and culinary delights, had previously planned to release a new line of merchandise for attendees to purchase.<br>\r\n            <br>\r\n            The organizers of the festival have issued a statement citing safety concerns and logistical challenges as the reason for their decision. They emphasized that the health and safety of their attendees, staff, and volunteers are their top priority, and that the current situation does not allow them to execute the release of new merchandise in a way that would ensure the safety of everyone involved.<br>\r\n            <br>\r\n            However, they reassured the public that the festival will still feature a wide range of activities for visitors to enjoy, including professional skiing and snowboarding competitions, live music performances, comedy shows, and cultural exhibitions. They also assure that traditional folk music, as well as international acts, will be performed in cozy and intimate venues throughout the festival.<br>\r\n            <br>\r\n            The food and drink offerings at WinterValley will also be a major draw for visitors. The festival will feature an extensive selection of traditional dishes, as well as international cuisine and a wide range of local beers and wines. The festival’s culinary delights will be praised by visitors and food critics alike for its great taste and quality.<br>\r\n            <br>\r\n            In conclusion, WinterValley festival organizers announced that they wont release new merchandise due to the ongoing COVID-19 pandemic, they assure that the festival will still feature a wide range of activities for visitors to enjoy and that the safety of everyone involved is their top priority.\r\n\r\n\r\n\r\n'),
(9, '1 Day Left For WinterValley Netherlands\r\n\r\n', 'The highly anticipated WinterValley festival, set to take place in Netherlands, is only one day away and excitement is building among attendees and organizers alike. The festival, which features a diverse array of winter sports, entertainment, and culinary delights, is expected to attract thousands of visitors from around the world. Unfortunately, due to high demand and limited capacity, all the tickets have been sold out.<br>\r\n            <br>\r\n            The organizers of the festival have issued a statement apologizing for the inconvenience and disappointment this may cause for those who were unable to secure a ticket. They also remind the public that the festival will still feature a wide range of activities for visitors to enjoy, including professional skiing and snowboarding competitions, live music performances, comedy shows, and cultural exhibitions. Traditional Dutch folk music, as well as international acts, will be performed in cozy and intimate venues throughout the festival.<br>\r\n            <br>\r\n            The food and drink offerings at WinterValley Netherlands will also be a major draw for visitors. The festival will feature an extensive selection of traditional Dutch dishes, as well as international cuisine and a wide range of local beers and wines. The festival’s culinary delights will be praised by visitors and food critics alike for its great taste and quality.<br>\r\n            <br>\r\n            The organizers of WinterValley Netherlands also announced that a portion of the proceeds from the festival will be donated to local charities and organizations that support winter sports and the preservation of the Dutch mountains.<br>\r\n            <br>\r\n            In conclusion, WinterValley Netherlands is happening tomorrow, but unfortunately, all the tickets have been sold out. Organizers apologize for any inconvenience this may cause and encourage those who were unable to secure a ticket to follow the event coverage through various media. Hopefully, next years WinterValley event will have more tickets available for purchase and will be able to welcome more visitors.\r\n\r\n\r\n\r\n\r\n'),
(10, 'Announcing WinterValley Sweden\r\n\r\n\r\n', 'The organizers of the highly-anticipated WinterValley festival have just announced their newest addition to the festival series, \"WinterValley Sweden\". The festival, which features a diverse array of winter sports, entertainment, and culinary delights, is set to take place in the beautiful mountainous region of Sweden and is expected to attract thousands of visitors from around the world.<br>\r\n            <br>\r\n            One of the main highlights of the festival will be the professional skiing and snowboarding competitions, which will feature some of the worlds top athletes. The competitions will be held on the pristine slopes of the Swedish mountains, providing a spectacular backdrop for the thrilling action.<br>\r\n            <br>\r\n            In addition to the sports events, the festival will also feature a wide variety of entertainment, including live music performances, comedy shows, and cultural exhibitions. Visitors will be able to enjoy traditional Swedish folk music, as well as international acts, in cozy and intimate venues throughout the festival.<br>\r\n            <br>\r\n            The food and drink offerings at WinterValley Sweden will also be a major draw for visitors. The festival will feature an extensive selection of traditional Swedish dishes, as well as international cuisine and a wide range of local beers and wines. The festival’s culinary delights will be praised by visitors and food critics alike for its great taste and quality.<br>\r\n            <br>\r\n            The organizers of WinterValley Sweden also announced that a portion of the proceeds from the festival will be donated to local charities and organizations that support winter sports and the preservation of the Swedish mountains.<br>\r\n            <br>\r\n            In conclusion, WinterValley Sweden is the newest addition to the festival series and promises to offer an exciting and enjoyable experience for visitors with a combination of winter sports, entertainment, and culinary delights. The festival is set to take place in the beautiful mountainous region of Sweden and tickets for the event will be available soon. Dont miss this opportunity and mark your calendars for the next WinterValley Sweden.\r\n\r\n\r\n\r\n\r\n\r\n'),
(11, 'Announcing WinterValley Netherlands\r\n', 'The organizers of the highly-anticipated WinterValley festival have just announced their newest addition to the festival series, \"WinterValley Netherlands\". The festival, which features a diverse array of winter sports, entertainment, and culinary delights, is set to take place in the beautiful country of Netherlands and is expected to attract thousands of visitors from around the world.<br>\r\n            <br>\r\n            One of the main highlights of the festival will be the professional skiing and snowboarding competitions, which will feature some of the worlds top athletes. The competitions will be held on the pristine slopes of the Dutch mountains, providing a spectacular backdrop for the thrilling action.<br>\r\n            <br>\r\n            In addition to the sports events, the festival will also feature a wide variety of entertainment, including live music performances, comedy shows, and cultural exhibitions. Visitors will be able to enjoy traditional Dutch folk music, as well as international acts, in cozy and intimate venues throughout the festival.<br>\r\n            <br>\r\n            The food and drink offerings at WinterValley Netherlands will also be a major draw for visitors. The festival will feature an extensive selection of traditional Dutch dishes, as well as international cuisine and a wide range of local beers and wines. The festival’s culinary delights will be praised by visitors and food critics alike for its great taste and quality.<br>\r\n            <br>\r\n            The organizers of WinterValley Netherlands also announced that a portion of the proceeds from the festival will be donated to local charities and organizations that support winter sports and the preservation of the Dutch mountains.<br>\r\n            <br>\r\n            In conclusion, WinterValley Netherlands is the newest addition to the festival series and promises to offer an exciting and enjoyable experience for visitors with a combination of winter sports, entertainment, and culinary del\r\n'),
(12, 'Welcome To WinterValley\r\n\r\n', 'A new winter festival is coming to town and it is creating a lot of buzz among locals and winter enthusiasts alike. The festival, named WinterValley, promises to offer a unique and unforgettable experience with a combination of winter sports, entertainment, and culinary delights.<br>\r\n            <br>\r\n            The organizers of the festival have announced that the first WinterValley event will take place soon. The festival will feature professional skiing and snowboarding competitions, live music performances, comedy shows, and cultural exhibitions. Visitors will be able to enjoy traditional folk music as well as international acts, in cozy and intimate venues throughout the festival.<br>\r\n            <br>\r\n            The food and drink offerings at WinterValley will also be a major draw for visitors. The festival will feature an extensive selection of traditional dishes, as well as international cuisine and a wide range of local beers and wines. The festivals culinary delights will be praised for its great taste and quality.<br>\r\n            <br>\r\n            The organizers of WinterValley have also announced that a portion of the proceeds from the festival will be donated to local charities and organizations that support winter sports and the preservation of the mountainous locations the festival will be held.<br>\r\n            <br>\r\n            In conclusion, WinterValley is a new winter festival in town that promises to offer a unique and unforgettable experience with a combination of winter sports, entertainment, and culinary delights. The first WinterValley event will take place soon and tickets for the event will be available for purchase soon. Dont miss this opportunity and mark your calendars for the first WinterValley festival.<br>\r\n');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `event_tickets_austria`
--
ALTER TABLE `event_tickets_austria`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexen voor tabel `event_tickets_finland`
--
ALTER TABLE `event_tickets_finland`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexen voor tabel `event_tickets_sweden`
--
ALTER TABLE `event_tickets_sweden`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `merch`
--
ALTER TABLE `merch`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `merch`
--
ALTER TABLE `merch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
