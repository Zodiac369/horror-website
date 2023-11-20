-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 nov. 2023 à 09:22
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `devils_palace`
--

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(5, 'United States of America'),
(6, 'China'),
(7, 'Australia'),
(8, 'Canada'),
(9, 'Argentina'),
(10, 'Colombia'),
(11, 'Sweden'),
(12, 'Germany'),
(13, 'Japan'),
(14, 'Spain'),
(15, 'Ireland'),
(16, 'Italy'),
(17, 'France');

-- --------------------------------------------------------

--
-- Structure de la table `director`
--

CREATE TABLE `director` (
  `director_id` int(11) NOT NULL,
  `director_name` varchar(255) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `director`
--

INSERT INTO `director` (`director_id`, `director_name`, `profile_pic`) VALUES
(9, 'Emma Tammi', 'bgHkkhd81myw0AifoLNSmlyxFoG.jpg'),
(10, 'Kevin Greutert', '3DH6nYVFih0E1boJiR6jysFTM59.jpg'),
(11, 'Ben Wheatley', 'd9MEfHUzizFSB5IdrsGxG8vYBLK.jpg'),
(12, 'Michael Chaves', 'uS8waIEPA4N2llVZO1su1cIo0sW.jpg'),
(13, 'David Gordon Green', 'fJqIVaVwLeFBlZKQTDbzbcvV4XZ.jpg'),
(14, 'Michael Philippou', 'mRoll1HB1fdsSE8lquSgFzX3NqG.jpg'),
(15, 'Kyle Edward Ball', 'vXEAFhmRSsIGmR1phahz7VDD7aX.jpg'),
(16, 'Demián Rugna', 'f1H00UaLvTwDYG614SJWdVLy1SZ.jpg'),
(17, 'Andres Beltran', ''),
(18, 'Patrik Eklund', 'g7FbCejLVOsWP3XIwBCpS7PoKxt.jpg'),
(19, 'Darin Scott', 'pSw8E0N7Nxfrds5S2G5wvf81F0i.jpg'),
(20, 'André Øvredal', 'mVx5y0gVhqGDGsOTsxSSR8bUvGL.jpg'),
(21, 'Bishal Dutta', 'smkZob9oM57YcD5hmvG1IQu3HJu.jpg'),
(22, 'Matt Bettinelli-Olpin', 'gVb02wTpNfD2YN5oyJL2AgeFP8x.jpg'),
(23, 'Justin Simien', '4yjUQDZ7zbC6MmqkimA8htXikKF.jpg'),
(24, 'James Wan', 'bNJccMIKzCtYnndcOKniSKCzo5Y.jpg'),
(25, 'Matt Duffer', 'kXO5CnSxC0znMAICGxnPeuGP73U.jpg'),
(26, 'Eiichirō Hasumi', 'sl7WntgppW1GAaSyTZF1fIGkGuv.jpg'),
(27, 'Julius Avery', 'nK9ITHGuAWABC0q3fQUD4JQ9yQ1.jpg'),
(30, 'Brian Duffield', 'pHHDdgbwhKkzbimR4ErOrh1oZWi.jpg'),
(32, 'Patrick Wilson', 'tc1ezEfIY8BhCy85svOUDtpBFPt.jpg'),
(33, 'Damien Leone', 'nX2kkYD32x2PC9rRU7DrYCRPjFE.jpg'),
(34, 'Corin Hardy', 'p1ggxloo9MMOS72BLGuM3NOzhxQ.jpg'),
(35, 'Lee Cronin', '9OIp9eF17h87lOCEe76vTBVOjVN.jpg'),
(36, 'Nahnatchka Khan', 'lIr3fOt0OZgDlVBvyvIdWhzz2.jpg'),
(37, 'Paco Plaza', '7STjUYAbJyr3gMKm9Qvfy5ESpIt.jpg'),
(38, 'Patrick Lussier', 'iDVSGsOz8PewY4SCAEDCDaobi4.jpg'),
(40, 'Lindsey Anderson Beer', 'Ia1rhIZ5jpCAuqg9tVleszh1SH.jpg'),
(41, 'Darren Lynn Bousman', '7cphExMhm74Y5ELqKCq4lR3fGn8.jpg'),
(42, 'David Slade', '9jL9OasecqvhQFvGYQtB4K6omGf.jpg'),
(43, 'Gerard Johnstone', 'cdvpfGKHLchtOtoN8gtVWhSHabN.jpg'),
(44, 'Mickey Keating', 'gZGiY2RGq7UYPEJzcv2jDkBtMg8.jpg'),
(45, 'Riccardo Chemello', 'ilJgHM77nE0Jj0DPKOjZLXLPgDK.jpg'),
(46, 'Egor Baranov', 'yErbByP5EtLVlHFUnNax0aWQAYt.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `favorites`
--

CREATE TABLE `favorites` (
  `id_users` int(11) NOT NULL,
  `id_movies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `horror_movies`
--

CREATE TABLE `horror_movies` (
  `movies_id` int(11) NOT NULL,
  `movies_name` varchar(255) NOT NULL,
  `date_of_release` date NOT NULL,
  `synopsis` text NOT NULL,
  `average_rate` decimal(10,0) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `id_movies_horror_genre` int(11) NOT NULL,
  `id_director` int(11) NOT NULL,
  `id_country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `horror_movies`
--

INSERT INTO `horror_movies` (`movies_id`, `movies_name`, `date_of_release`, `synopsis`, `average_rate`, `cover`, `id_movies_horror_genre`, `id_director`, `id_country`) VALUES
(10, 'Five Nights at Freddy\'s', '2023-10-25', 'Recently fired and desperate for work, a troubled young man named Mike agrees to take a position as a night security guard at an abandoned theme restaurant: Freddy Fazbear\'s Pizzeria. But he soon discovers that nothing at Freddy\'s is what it seems.', 8, 'A4j8S6moJS2zNtRR8oWF08gRnL5.jpg', 27, 9, 5),
(11, 'Saw X', '2023-09-26', 'Between the events of \'Saw\' and \'Saw II\', a sick and desperate John Kramer travels to Mexico for a risky and experimental medical procedure in hopes of a miracle cure for his cancer, only to discover the entire operation is a scam to defraud the most vulnerable. Armed with a newfound purpose, the infamous serial killer returns to his work, turning the tables on the con artists in his signature visceral way through devious, deranged, and ingenious traps.', 7, 'aQPeznSu7XDTrrdCtT5eLiu52Yu.jpg', 27, 10, 5),
(12, 'Meg 2: The Trench', '2023-08-02', 'An exploratory dive into the deepest depths of the ocean of a daring research team spirals into chaos when a malevolent mining operation threatens their mission and forces them into a high-stakes battle for survival.', 7, '4m1Au3YkjqsxF8iwQy0fPYSxE0h.jpg', 28, 11, 6),
(13, 'The Nun II', '2023-09-06', 'In 1956 France, a priest is violently murdered, and Sister Irene begins to investigate. She once again comes face-to-face with a powerful evil.', 7, '5gzzkR7y3hnY8AD1wXjCnVlHba5.jpg', 27, 12, 5),
(14, 'The Exorcist: Believer', '2023-10-04', 'When two girls disappear into the woods and return three days later with no memory of what happened to them, the father of one girl seeks out Chris MacNeil, who\'s been forever altered by what happened to her daughter fifty years ago.', 6, 'qVKirUdmoex8SdfUk8WDDWwrcCh.jpg', 27, 13, 5),
(15, 'Talk to Me', '2023-07-26', 'When a group of friends discover how to conjure spirits using an embalmed hand, they become hooked on the new thrill, until one of them goes too far and unleashes terrifying supernatural forces.', 7, 'kdPMUMJzyYAc4roD52qavX0nLIC.jpg', 27, 14, 7),
(16, 'Skinamarink', '2023-01-13', 'Two children wake up in the middle of the night to find their father is missing, and all the windows and doors in their home have vanished.', 6, 'o942912KFh89SGhqWuKXuT0SXzN.jpg', 27, 15, 8),
(17, 'When Evil Lurks', '2023-10-05', 'Residents of a small rural town discover that a demon is about to be born among them. They desperately try to escape before the evil is born, but it may be too late.', 8, 'iQ7G9LhP7NRRIUM4Vlai3eOxBAc.jpg', 27, 16, 9),
(18, 'Arenas Mortales', '2023-08-31', 'A married couple on the brink of divorce becomes trapped in quicksand while hiking through a Colombian rainforest. It’s a struggle for survival as they battle the elements of the jungle and must work together in order to escape.', 7, 'cVLfO3CbVg8p5Qcaifq6AidOe2w.jpg', 53, 17, 10),
(19, 'The Conference', '2023-10-13', 'A team-building conference for municipal employees turns into a nightmare when accusations of corruption begin to circulate and plague the work environment. At the same time, a mysterious figure begins murdering the participants.', 5, 'uLH5rUkRNwAUt6YqR86f8ewXZEY.jpg', 27, 18, 11),
(20, 'American Horror House', '2012-10-13', 'On Halloween night, a sorority house is overrun with ghosts, while a vengeful housemother goes on a killing spree.', 6, 'sZzJwqbrfKvGXTIhXGDwlJUEtM5.jpg', 27, 19, 5),
(21, 'The Last Voyage of the Demeter', '2023-08-09', 'The crew of the merchant ship Demeter attempts to survive the ocean voyage from Carpathia to London as they are stalked each night by a merciless presence onboard the ship.', 7, 'nrtbv6Cew7qC7k9GsYSf5uSmuKh.jpg', 53, 20, 12),
(22, 'It Lives Inside', '2023-09-06', 'Desperate to fit in at school, Sam rejects her East Indian culture and family to be like everyone else. However, when a mythological demonic spirit latches onto her former best friend, she must come to terms with her heritage to defeat it.', 6, '73gIfV8gDwkVgUrFDzt4TfZC9Zc.jpg', 27, 21, 8),
(23, 'Scream VI', '2023-03-08', 'Following the latest Ghostface killings, the four survivors leave Woodsboro behind and start a fresh chapter.', 7, 'wDWwtvkRRlgTiUr6TyLSMX8FCuZ.jpg', 27, 22, 5),
(24, 'Haunted Mansion', '2023-07-26', 'A woman and her son enlist a motley crew of so-called spiritual experts to help rid their home of supernatural squatters.', 7, '8Im6DknDVxRiGXc5t8rVOJyzuNx.jpg', 14, 23, 5),
(25, 'Saw', '2004-10-01', 'Two men wake up to find themselves shackled in a grimy, abandoned bathroom. As they struggle to comprehend their predicament, they discover a disturbing tape left behind by the sadistic mastermind known as Jigsaw. With a chilling voice and cryptic instructions, Jigsaw informs them that they must partake in a gruesome game in order to secure their freedom.', 7, '4da0TS3iQ1IzuyhDS8elgkmOfrN.jpg', 27, 24, 5),
(26, 'Hidden', '2015-09-15', 'A family takes refuge in a fallout shelter to avoid a dangerous outbreak.', 7, 'oiNc4aTeaUMVNkxL0UWnezmKJgM.jpg', 53, 25, 5),
(27, 'Resident Evil: Death Island', '2023-06-22', 'In San Francisco, Jill Valentine is dealing with a zombie outbreak and a new T-Virus, Leon Kennedy is on the trail of a kidnapped DARPA scientist, and Claire Redfield is investigating a monstrous fish that is killing whales in the bay. Joined by Chris Redfield and Rebecca Chambers, they discover the trail of clues from their separate cases all converge on the same location, Alcatraz Island, where a new evil has taken residence and awaits their arrival.', 8, 'qayga07ICNDswm0cMJ8P3VwklFZ.jpg', 16, 26, 13),
(28, 'The Pope\'s Exorcist', '2023-04-05', 'Father Gabriele Amorth, Chief Exorcist of the Vatican, investigates a young boy\'s terrifying possession and ends up uncovering a centuries-old conspiracy the Vatican has desperately tried to keep hidden.', 7, 'jFC4LS5qTAT3PinzdEzINfu1CV9.jpg', 27, 27, 14),
(29, 'No One Will Save You', '2023-09-22', 'An exiled anxiety-ridden homebody must battle an alien who\'s found its way into her home.', 7, 'ehGIDAMaYy6Eg0o8ga0oqflDjqW.jpg', 27, 30, 5),
(30, 'Insidious: The Red Door', '2023-07-05', 'To put their demons to rest once and for all, Josh Lambert and a college-aged Dalton Lambert must go deeper into The Further than ever before, facing their family\'s dark past and a host of new and more horrifying terrors that lurk behind the red door.', 7, 'd07phJqCx6z5wILDYqkyraorDPi.jpg', 27, 32, 5),
(31, 'Terrifier 2', '2022-10-06', 'After being resurrected by a sinister entity, Art the Clown returns to Miles County where he must hunt down and destroy a teenage girl and her younger brother on Halloween night.  As the body count rises, the siblings fight to stay alive while uncovering the true nature of Art\'s evil intent.', 7, '8gLhu8UFPZfH2Hv11JhTZkb9CVl.jpg', 27, 33, 5),
(32, 'The Nun', '2018-09-05', 'A priest with a haunted past and a novice on the threshold of her final vows are sent by the Vatican to investigate the death of a young nun in Romania and confront a malevolent force in the form of a demonic nun.', 6, 'sFC1ElvoKGdHJIWRpNB3xWJ9lJA.jpg', 27, 34, 5),
(33, 'Evil Dead Rise', '2023-04-12', 'A reunion between two estranged sisters gets cut short by the rise of flesh-possessing demons, thrusting them into a primal battle for survival as they face the most nightmarish version of family imaginable.', 7, '5ik4ATKmNtmJU6AYD0bLm56BCVM.jpg', 27, 35, 15),
(34, 'Totally Killer', '2023-09-28', 'When the infamous \"Sweet Sixteen Killer\" returns 35 years after his first murder spree to claim another victim, 17-year-old Jamie accidentally travels back in time to 1987, determined to stop the killer before he can start.', 7, '52YBwGJ3cJs54fpBzwnT1lnqgTo.jpg', 35, 36, 5),
(35, 'Sister Death', '2023-10-05', 'Spain, 1949. Narcisa, a novice, arrives at an old convent, converted into a girls\' school, to work as a teacher.', 6, 'zfVdFJGGgHDM3RFZdTPhZqy1WEi.jpg', 18, 37, 14),
(36, 'Trick', '2019-10-18', 'A detective tries to track down a masked killer who reappears every Halloween to wreak bloody havoc.', 6, '2rhuScKVjQng9HfXgCyA65ZP5pq.jpg', 53, 38, 5),
(37, 'Pet Sematary: Bloodlines', '2023-09-23', 'In 1969, a young Jud Crandall has dreams of leaving his hometown of Ludlow, Maine behind, but soon discovers sinister secrets buried within and is forced to confront a dark family history that will forever keep him connected to Ludlow.', 6, 'yqnNLn24shYnZ6kqGpbwuB3NJ0D.jpg', 27, 40, 8),
(38, 'Spiral: From the Book of Saw', '2021-05-12', 'Working in the shadow of an esteemed police veteran, brash Detective Ezekiel “Zeke” Banks and his rookie partner take charge of a grisly investigation into murders that are eerily reminiscent of the city’s gruesome past.  Unwittingly entrapped in a deepening mystery, Zeke finds himself at the center of the killer’s morbid game.', 6, '8rORNBvvxiE9lq0Swbpar8iQNW8.jpg', 27, 41, 5),
(39, 'The Conjuring: The Devil Made Me Do It', '2021-05-25', 'Paranormal investigators Ed and Lorraine Warren encounter what would become one of the most sensational cases from their files. The fight for the soul of a young boy takes them beyond anything they\'d ever seen before, to mark the first time in U.S. history that a murder suspect would claim demonic possession as a defense.', 8, 'xbSuFiJbbBWCkyCCKIMfuDCA4yV.jpg', 27, 12, 5),
(40, 'Dark Harvest', '2023-10-11', 'In a small Midwestern town, a deadly annual ritual unfolds when the mythical nightmare, Sawtooth Jack, rises from the cornfields and challenges the town’s teenage boys in a bloody battle of survival.', 6, 'sFBDjWdw8gHSI2dMivP7H52iwvp.jpg', 27, 42, 5),
(41, 'Saw 3D', '2010-10-22', 'As a deadly battle rages over Jigsaw\'s brutal legacy, a group of Jigsaw survivors gathers to seek the support of self-help guru and fellow survivor Bobby Dagen, a man whose own dark secrets unleash a new wave of terror.', 6, 'oY7ZLUftMCTku7lQVrKdLS4skuv.jpg', 27, 10, 5),
(42, 'M3GAN', '2022-12-28', 'A brilliant toy company roboticist uses artificial intelligence to develop M3GAN, a life-like doll programmed to emotionally bond with her newly orphaned niece. But when the doll\'s programming works too well, she becomes overprotective of her new friend with terrifying results.', 7, 'd9nBoowhjiiYc4FBNtQkPY7c11H.jpg', 878, 43, 5),
(43, 'Ritual', '2013-12-31', 'A long time ago Tom loved Lovely. They were married and everything was perfect, at least for a little while. But that was then and this is now. Lovely has just killed a man in cold blood after he tried to drug and kidnap her in a motel. She calls Tom to help but now they\'ve found a VHS tape that depicts a satanic ritual in which a woman is murdered. Lovely desperately wants to leave and they do, but Tom forgot his engraved lighter in the room, and when they go back to find it, the dead body appears missing.', 5, 'astvvy4aRD4meXdGEjO9SlzShDy.jpg', 27, 44, 5),
(44, 'Dampyr', '2022-10-28', 'In war-torn Balkans, bogus monster hunter Harlan Draka is hired by soldiers who happen to be under attack by an army of actual vampires, uncovering the hidden truth about his past in the process: he is half-human and half-vampire... a Dampyr.', 7, 'xdWjqmX4x0ObKIPqkr8Vptj99AZ.jpg', 27, 45, 16),
(45, 'Resurrected', '2023-04-27', 'In the nearest future, the Catholic Church learnt how to resurrect people. The whole process is kept secret and follows strict rules: only sinless believers under the age of 65 can be resurrected. The film is set on the computer of Stanley, an on-line church priest who helps those who were brought back to life. He is divorced and his son lives with his ex-wife, so he can chat with him only on-line. Stanley\'s son was the first person to be resurrected after he died in a car accident that Stanley caused. Soon Stanley learns that there is a huge conspiracy behind the resurrection process.', 6, 'iCPm0mfcOdpLgtfFFkWoq62ko0i.jpg', 27, 46, 17);

-- --------------------------------------------------------

--
-- Structure de la table `movies_horror_genre`
--

CREATE TABLE `movies_horror_genre` (
  `movies_genre_id` int(11) NOT NULL,
  `movies_genre_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `movies_horror_genre`
--

INSERT INTO `movies_horror_genre` (`movies_genre_id`, `movies_genre_name`) VALUES
(12, 'Adventure'),
(14, 'Fantasy'),
(16, 'Animation'),
(18, 'Drama'),
(27, 'Horror'),
(28, 'Action'),
(35, 'Comedy'),
(36, 'History'),
(37, 'Western'),
(53, 'Thriller'),
(80, 'Crime'),
(99, 'Documentary'),
(878, 'Science Fiction'),
(9648, 'Mystery'),
(10402, 'Music'),
(10749, 'Romance'),
(10751, 'Family'),
(10752, 'War'),
(10770, 'TV Movie');

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `reviews_id` int(11) NOT NULL,
  `id_movies` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `txt_reviews` text NOT NULL,
  `rate_of_movies` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_firstname` varchar(255) NOT NULL,
  `users_lastname` varchar(255) NOT NULL,
  `users_adress` varchar(255) DEFAULT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_cellphone` varchar(255) DEFAULT NULL,
  `users_username` varchar(255) DEFAULT NULL,
  `users_password` varchar(255) NOT NULL,
  `profile_photo` varchar(255) NOT NULL,
  `users_is_activated` tinyint(1) DEFAULT NULL,
  `id_country` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`users_id`, `users_firstname`, `users_lastname`, `users_adress`, `users_email`, `users_cellphone`, `users_username`, `users_password`, `profile_photo`, `users_is_activated`, `id_country`) VALUES
(7, 'Emre', 'Ay', NULL, 'eee@hotmail.fr', NULL, NULL, '$2y$10$Aq6xdwazU8ND1Z.s0RDVpO18mak6bdXzLKdYrbCrwcpFAquM8Y/LS', '', NULL, NULL),
(8, '', '', NULL, 'emre.ogk@hotmail.fr', NULL, NULL, '$2y$10$Y2I/nd82dioxHYg.MzAzVe1dAIJyKRZSeENPIITqAgTKT5.atMJJq', '', NULL, NULL),
(11, '', '', NULL, 'test@hotmail.fr', NULL, NULL, '$2y$10$EdpYTI0qS7IqAwMa1ze8y.t8d1T8L2FRh1PSdgSwd732CrSsu45U6', '', NULL, NULL),
(17, 'test', 'test', NULL, 'test2@hotmail.fr', NULL, NULL, '$2y$10$Bge3cNwl7RbVziktuXZWWuD9IuKIPCvMLVn.MvvNoOVJ6ekNr/c2O', '', NULL, NULL),
(19, '', '', NULL, 'test3@hotmail.fr', NULL, NULL, '$2y$10$QTZbUHfD6uKfPER86ZzAROHoItdva2vfGULBxU24zlNOcZpaC9iH.', '', NULL, NULL),
(21, '', '', NULL, 'test4@gmail.com', NULL, NULL, '$2y$10$P6VT9T1yh31ofYaBLshst.0h0GaURWPI8h76x8ixPUunezdoiS6H.', '', NULL, NULL),
(22, '', '', NULL, 'test5@gmail.com', NULL, NULL, '$2y$10$tAAlKEHcBXPHUQ9RMwWe2e8bmtZJ6/kt6txR25UccCjMDDSW8p/7.', '', NULL, NULL),
(23, '', '', NULL, 'test6@gmail.com', NULL, NULL, '$2y$10$vzUqipr4m750hII6lI9USe3ZuADqSpnBajchv0TYMAHrEat5kRG62', '', NULL, NULL),
(24, '', '', NULL, 'emre69@spam.com', NULL, NULL, '$2y$10$5XMqrdXMLyxDaahfUxYGo.zuWXtFdqYj6RzlDO8vcvv8n0hPAKt6C', '', NULL, NULL),
(25, '', '', NULL, 'test7@gmail.com', NULL, NULL, '$2y$10$wFHx7rRT6dBO/36B.lDT1.8IuAr7ss0Vg9fwyqokj6DH.uv3qwyVO', '', NULL, NULL),
(26, '', '', NULL, 'test8@gmail.com', NULL, NULL, '$2y$10$nCoPD77HEAHeCYgEmrAs6upds3JbgtiirIldJLcoFTWQCxL48gnSu', '', NULL, NULL),
(27, '', '', NULL, 'lucas@gmail.com', NULL, NULL, '$2y$10$gAtgwW8fOz3aiDGCWNRS9.0DAjqUhPnHw3DO9wIEkq2RE1jOkb5fW', '', NULL, NULL),
(28, '', '', NULL, 'CLEMCLEM@GMAIL.COM', NULL, NULL, '$2y$10$s0XK1AIHXgzyVBpvuAJPCujOwY/pYeYPGunE8JvY0oLrr2/OfImD2', '', NULL, NULL),
(29, '', '', NULL, 'test9@gmail.com', NULL, NULL, '$2y$10$djVt.h3DPtlB.DDiw2yJReKR1KQ9qPvLRsbriRIQD9Ebx62.mdHOO', '', NULL, NULL),
(30, '', '', NULL, 'test10@gmail.com', NULL, NULL, '$2y$10$2zgaZAUHH5AKLWNjmnK5u.rWQ52V9WW/yAGKEeDdn2mrVGLJ7qcdu', '', NULL, NULL),
(31, '', '', NULL, 'site@gmail.com', NULL, NULL, '$2y$10$OB9i3Qs/bTbVX0.uy/MNgeCWAr4prLIfG9CNgToUh8tCog5/L7CkS', '', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Index pour la table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`director_id`),
  ADD UNIQUE KEY `profile_pic` (`profile_pic`);

--
-- Index pour la table `favorites`
--
ALTER TABLE `favorites`
  ADD KEY `id_movies` (`id_movies`),
  ADD KEY `id_users` (`id_users`);

--
-- Index pour la table `horror_movies`
--
ALTER TABLE `horror_movies`
  ADD PRIMARY KEY (`movies_id`),
  ADD UNIQUE KEY `cover` (`cover`),
  ADD KEY `id_director` (`id_director`),
  ADD KEY `id_movies_horror_genre` (`id_movies_horror_genre`),
  ADD KEY `id_country` (`id_country`);

--
-- Index pour la table `movies_horror_genre`
--
ALTER TABLE `movies_horror_genre`
  ADD PRIMARY KEY (`movies_genre_id`);

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviews_id`),
  ADD KEY `id_movies` (`id_movies`),
  ADD KEY `id_users` (`id_users`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD UNIQUE KEY `users_email` (`users_email`),
  ADD UNIQUE KEY `users_cellphone` (`users_cellphone`),
  ADD KEY `id_country` (`id_country`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `director`
--
ALTER TABLE `director`
  MODIFY `director_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `horror_movies`
--
ALTER TABLE `horror_movies`
  MODIFY `movies_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `movies_horror_genre`
--
ALTER TABLE `movies_horror_genre`
  MODIFY `movies_genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10771;

--
-- AUTO_INCREMENT pour la table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviews_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`id_movies`) REFERENCES `horror_movies` (`movies_id`),
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`users_id`);

--
-- Contraintes pour la table `horror_movies`
--
ALTER TABLE `horror_movies`
  ADD CONSTRAINT `horror_movies_ibfk_1` FOREIGN KEY (`id_director`) REFERENCES `director` (`director_id`),
  ADD CONSTRAINT `horror_movies_ibfk_2` FOREIGN KEY (`id_movies_horror_genre`) REFERENCES `movies_horror_genre` (`movies_genre_id`),
  ADD CONSTRAINT `horror_movies_ibfk_3` FOREIGN KEY (`id_country`) REFERENCES `country` (`country_id`);

--
-- Contraintes pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`id_movies`) REFERENCES `horror_movies` (`movies_id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`users_id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_country`) REFERENCES `country` (`country_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
