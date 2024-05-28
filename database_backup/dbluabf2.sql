-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 11:13 AM
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
-- Database: `dbluabf2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblgamesbought`
--

CREATE TABLE `tblgamesbought` (
  `transactionID` int(5) NOT NULL,
  `userID` int(200) NOT NULL,
  `gameBought` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblgamesbought`
--

INSERT INTO `tblgamesbought` (`transactionID`, `userID`, `gameBought`) VALUES
(4, 72, 1),
(5, 72, 2),
(6, 72, 3),
(7, 72, 4),
(8, 73, 1),
(9, 73, 2),
(10, 73, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblpublishgame`
--

CREATE TABLE `tblpublishgame` (
  `gameID` int(5) NOT NULL,
  `nameofgame` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` int(20) NOT NULL,
  `developer` text NOT NULL,
  `publisher` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpublishgame`
--

INSERT INTO `tblpublishgame` (`gameID`, `nameofgame`, `description`, `price`, `developer`, `publisher`) VALUES
(5, 'Poppy Playtime - Chapter 1\r\n', 'You must stay alive in this horror/puzzle adventure. Try to survive the vengeful toys waiting for you in the abandoned toy factory. Use your GrabPack to hack electrical circuits or nab anything from afar. Explore the mysterious facility... and don\'t get caught.', 0, 'Mob Entertainment', 'Mob Entertainment'),
(6, 'Poppy Playtime - Chapter 2', 'This content requires the base game Poppy Playtime on Pixel Pulse Games in order to play.', 289, 'Mob Entertainment', 'Mob Entertainment'),
(7, 'Poppy Playtime - Chapter 3', 'This content requires the base game Poppy Playtime on Pixel Pulse Games in order to play.', 121212, 'Mob Entertainment', 'Mob Entertainment'),
(8, 'RimWorld', 'A sci-fi colony sim driven by an intelligent AI storyteller. Generates stories by simulating psychology, ecology, gunplay, melee combat, climate, biomes, diplomacy, interpersonal relationships, art, medicine, trade, and more.', 900, 'Ludeon Studios', 'Ludeon Studios'),
(9, 'Stardew Valley', 'You\'ve inherited your grandfather\'s old farm plot in Stardew Valley. Armed with hand-me-down tools and a few coins, you set out to begin your new life. Can you learn to live off the land and turn these overgrown fields into a thriving home?', 419, 'ConcernedApe', 'ConcernedApe'),
(11, 'Kingdom Two Crowns', 'In Kingdom Two Crowns, players must work in the brand-new solo or co-op campaign mode to build their kingdom and secure it from the threat of the Greed. Experience new technology, units, enemies, mounts, and secrets in the next evolution of the award-winning micro strategy franchise!', 615, 'Stumpy🐙Squid, Fury Studios, Coatsink', 'Raw Fury'),
(12, 'Men of War II', 'Experience warfare like never before! Men of War II, the anticipated sequel to the highly acclaimed RTS franchise is here with all-new units, locations, campaigns, game modes and true trademarks of the series: historical fidelity and action-filled gameplay on the Eastern and Western Fronts of WWII.', 1250, 'Best Way', 'Fulqrum Publishing'),
(15, 'Valheim', 'A brutal exploration and survival game for 1-10 players, set in a procedurally-generated purgatory inspired by viking culture. Battle, build, and conquer your way to a saga worthy of Odin’s patronage!', 449, 'Iron Gate AB', 'Coffee Stain Publishing'),
(16, 'Stranded Deep\r\n', 'Take the role of a plane crash survivor stranded somewhere in the Pacific Ocean. Come face to face with some of the most life threatening scenarios that will result in a different experience each time you play. Scavenge. Discover. Survive.', 449, 'Beam Team Games', 'Beam Team Games'),
(17, 'Borderlands 2', 'The Ultimate Vault Hunter’s Upgrade lets you get the most out of the Borderlands 2 experience.', 499, 'Gearbox Software', 'Gearbox Software'),
(18, 'Apex Legend\r\n', 'Apex Legends is the award-winning, free-to-play Hero Shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities, and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.', 0, 'Respawn', 'Electronic Arts'),
(19, 'EA SPORTS FC™ 24', 'EA SPORTS FC™ 24 welcomes you to The World’s Game: the most true-to-football experience ever with HyperMotionV, PlayStyles optimised by Opta, and an enhanced Frostbite™ Engine.', 2999, 'EA Canada & EA Romania', 'Electronic Arts'),
(20, 'Tom Clancy\'s Rainbow Six® Siege\r\n', 'Tom Clancy\'s Rainbow Six® Siege is an elite, tactical team-based shooter where superior planning and execution triumph.', 799, 'Ubisoft Montreal', 'Ubisoft Montreal'),
(21, 'Albion Online\r\n', 'Albion Online is a fantasy sandbox MMORPG featuring a player-driven economy, classless combat system, and intense PvP battles. Explore a vast open world full of danger and opportunity. Grow your wealth, forge alliances, and leave your mark on the', 0, 'Sandbox Interactive GmbH', 'Sandbox Interactive GmbH'),
(22, 'Destiny 2\r\n', 'Destiny 2 is an action MMO with a single evolving world that you and your friends can join anytime, anywhere, absolutely free.', 0, 'Bungie', 'Bungie'),
(23, 'Watch_Dogs® 2\r\n', 'Welcome to San Francisco. Play as Marcus, a brilliant young hacker, and join the most notorious hacker group, DedSec. Your objective: execute the biggest hack of history.', 2200, 'Ubisoft', 'Ubisoft'),
(24, 'Watch_Dogs™', 'In today\'s hyper-connected world, Chicago operates under ctOS, the most advanced computer network in America.', 799, 'Ubisoft', 'Ubisoft'),
(25, 'Fallout 4\r\n', 'Bethesda Game Studios, the award-winning creators of Fallout 3 and The Elder Scrolls V: Skyrim, welcome you to the world of Fallout 4 – their most ambitious game ever, and the next generation of open-world gaming.', 874, 'Bethesda Game Studios', 'Bethesda Softworks'),
(26, 'Fallout Shelter\r\n', 'Fallout Shelter puts you in control of a state-of-the-art underground Vault from Vault-Tec. Build the perfect Vault, keep your Dwellers happy, and protect them from the dangers of the Wasteland.', 0, 'Bethesda Game Studios', 'Bethesda Game Studios'),
(27, 'Raft', 'Raft™ throws you and your friends into an epic oceanic adventure! Alone or together, players battle to survive a perilous voyage across a vast sea! Gather debris, scavenge reefs and build your own floating home, but be wary of the man-eating sharks!', 499, 'Redbeet Interactive', 'Axolot Games'),
(28, 'Grounded', 'The world is a vast, beautiful and dangerous place – especially when you have been shrunk to the size of an ant. Can you thrive alongside the hordes of giant insects, fighting to survive the perils of the backyard?', 1990, 'Obsidian Entertainment', 'Xbox Game Studios'),
(29, 'Subnautica', 'Descend into the depths of an alien underwater world filled with wonder and peril. Craft equipment, pilot submarines and out-smart wildlife to explore lush coral reefs, volcanoes, cave systems, and more - all while trying to survive.', 1299, 'Unknown Worlds Entertainment', 'Unknown Worlds Entertainment'),
(30, 'Don\'t Starve Together\r\n', 'Fight, Farm, Build and Explore Together in the standalone multiplayer expansion to the uncompromising wilderness survival game, Don\'t Starve.', 389, 'Klei Entertainment', 'Klei Entertainment'),
(31, 'Don\'t Starve: Shipwrecked\r\n', 'Fight, Farm, Build and Explore Together in the standalone multiplayer expansion to the uncompromising wilderness survival game, Don\'t Starve.', 389, 'Klei Entertainment', 'Klei Entertainment'),
(32, 'Mind Over Magic\r\n', 'Design, build and manage your magic school to explore what lies below. Study lost arcana, grow exotic plants, brew potions, and raise undead servants -- only you can prepare your fragile students to harness their Mind Over Magic.', 549, 'Sparkypants', 'Klei Publishing'),
(33, 'F1® Manager 2023\r\n', 'The intense world of Formula 1® comes alive for a new season in F1® Manager 2023. 23 races, six F1® Sprint events, new cars, new circuits including the Las Vegas Strip Circuit, new drivers, new challenges… Your legacy begins here.', 1950, 'Frontier Developments\r\n', 'Frontier Developments\r\n'),
(34, 'Forza Motorsport\r\n', 'Out-build the competition in the all-new career. Race your friends in adjudicated multiplayer events. Compete in over 500 cars on world-famous tracks with cutting edge AI, advanced physics, and tire and fuel strategy.', 3490, 'Turn 10', 'Xbox Game Studios'),
(35, 'Payday 2\r\n', 'PAYDAY 2 is an action-packed, four-player co-op shooter that once again lets gamers don the masks of the original PAYDAY crew - Dallas, Hoxton, Wolf and Chains - as they descend on Washington DC for an epic crime spree.', 335, 'OVERKILL - a Starbreeze Studio.', 'Starbreeze Publishing AB'),
(36, 'The Long Dark\r\n', 'THE LONG DARK is a thoughtful, exploration-survival experience that challenges solo players to think for themselves as they explore an expansive frozen wilderness in the aftermath of a geomagnetic disaster. There are no zombies -- only you, the cold, and all the threats Mother Nature can muster.', 615, 'Hinterland Studio Inc.', 'Hinterland Studio Inc.'),
(37, 'Nightingale', 'Set out on a journey of survival and adventure, into the mysterious and dangerous Fae Realms of Nightingale! Become an intrepid Realmwalker, and venture forth alone or with friends - as you explore, craft, build and fight across a visually stunning Gaslamp Fantasy world.', 910, 'Inflexion Games', 'Inflexion Games'),
(38, 'Overcooked', 'Overcooked returns with a brand-new helping of chaotic cooking action! Journey back to the Onion Kingdom and assemble your team of chefs in classic couch co-op or online play for up to four players. Hold onto your aprons… it’s time to save the world again!', 795, 'Ghost Town Games Ltd., Team17', 'Team17'),
(39, 'Overcooked! 2\r\n', 'Overcooked returns with a brand-new helping of chaotic cooking action! Journey back to the Onion Kingdom and assemble your team of chefs in classic couch co-op or online play for up to four players. Hold onto your aprons… it’s time to save the world again!', 795, 'Ghost Town Games Ltd., Team17', 'Team17'),
(40, 'Moving Out\r\n', 'Moving Out is a ridiculous physics-based moving simulator that brings new meaning to \"couch co-op\"! Are you ready for an exciting career in furniture? As a newly certified Furniture Arrangement & Relocation Technician, you’ll take on moving jobs all across the busy town of Packmore.', 795, 'SMG Studio, Devm Games', 'Team17'),
(41, 'Ship of Fools\r\n', 'Ship of Fools is a seafaring cooperative roguelite. Set sail, man the cannons and battle sea monsters through the tempestuous seas of the Archipelago. Are you fool enough to stop the Aquapocalypse?', 840, 'Fika Productions', 'Team17'),
(42, 'Feed the Cups', 'Feed the Cups is a Roguelite multiplayer online cooperative game. Run a Drink Shop, stocking up, preparing ingredients, taking orders, crafting drinks, cleaning up, and checking equipment. Join your friends together!', 509, 'Vambear Games', 'IndieArk'),
(43, 'Adventure Time: Pirates of the Enchiridion\r\n', 'Ahoy! The Land of Ooo is underwater and it’s up to Finn and Jake to find out why. Join our heroes as they explore the high seas, search for hidden clues, interrogate shady suspects and fight pirates to solve the mystery and save their waterlogged world!', 549, 'Climax Studios', 'Outright Games Ltd.'),
(44, 'JoJo\'s Bizarre Adventure: All-Star Battle R\r\n', 'Hirohiko Araki\'s masterpiece, brought to life as a fighting game! Battle with 50 colorful characters, wielding Stands, Hamon, and more! See how characters who could never meet in the story interact when they come face to face!', 1999, 'CyberConnect2 Co. Ltd.', 'Bandai Namco Entertainment'),
(45, 'Oddsparks: An Automation Adventure\r\n', 'Oddsparks is a blend of Automation and Real Time Strategy for both the die-hard fans of the Automation genre and the Automation-curious. Explore a strange fantasy world, uncover the mysteries of the past, automate your workshops, and go on adventures with your odd & adorable Sparks!', 795, 'Massive Miniteam', 'HandyGames\r\n'),
(46, 'One Hand Clapping\r\n', 'One Hand Clapping is a vocal 2D platformer. Solve puzzles, by singing or humming into your microphone, and find confidence in the power of your voice as it changes the world around you.', 485, 'Bad Dream Games', 'Bad Dream Games'),
(47, 'Celeste', 'Help Madeline survive her inner demons on her journey to the top of Celeste Mountain, in this super-tight platformer from the creators of TowerFall. Brave hundreds of hand-crafted challenges, uncover devious secrets, and piece together the mystery of the mountain.', 615, 'Maddy Makes Games Inc.', 'Maddy Makes Games Inc.');

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `acctid` int(5) NOT NULL,
  `emailadd` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`acctid`, `emailadd`, `username`, `password`, `usertype`) VALUES
(38, 'test@gmail.com', 'theChis!', '$2y$10$qMyxP8oq28DrPXN8NGPxj.BuVApZVE92aFBR5abktaVQ.MYkDLJRe', ''),
(39, 'tester@gmail.com', 'Vsucram', '$2y$10$fkcygv.eS/kc5q6zY9WmhOXCUdKJs3zEcgJ02ADdYsbVNS0BvijCG', ''),
(40, 'asdasd@gmail.com', 'Vsu', '$2y$10$gg2tFOUEbPprDqWihmB.PenvnoZinpgiEib23EFwH5Qg.tvQrZo/2', ''),
(41, 'asdasdad@gmail.com', 'Vtest', '$2y$10$kESom2M8./tIlnuU1TPI4.FYT/sh4/3/GlPbhFFclOSa.abAjJZES', ''),
(42, 'asdasd@gmail.com', 'Vcrum', '$2y$10$81Ftjhe.3kLXAnRGfPItsOZLHekA0Y7p1FuPdUs5oxm3PU4D2pFGi', ''),
(43, 'asdasd', 'Vasdasd', '$2y$10$UIoepkoe9sva1V9EI7bPr.S6H7aDcIWBQbt0VfZNtGbpk/gwqIami', ''),
(44, 'asdad', 'asdfad', '$2y$10$mW7ivwYg6ZCo7I40nU3dauVTfbcRDhTBrjRES279FInks.l3mfApW', ''),
(45, 'asdasd', 'Vraa', '$2y$10$JnKogdFQsWmuno0EM0cib.niGmw5fh9BDMP13/QB/LfOjEor6/.ty', ''),
(46, 'sadad', 'asdasd', '$2y$10$r2uKmkl9bNNt7M2xtsnsHONYXJG0XM3jX1NX4gAOpVam7GzqyTO8e', ''),
(47, '1212asd', 'Vasda', '$2y$10$zwih5zArdF765ULWtvZKhe1r/U3G6xAPz.WSgi1zcj8GeUgBmBBLu', ''),
(48, 'asdasd', 'Vasd', '$2y$10$8qmJTJBs9yZApTy6ae8Zk.z/P/Em.onRavxfJvXsSofWzeTyNKdYm', ''),
(49, 'chase@gmail.com', 'ChaseOsoria', '$2y$10$vdbHRlW7aAwKQ1.8az3yWOitnT1akUfLWF8UZelBjsmfhYzsLQ3tu', ''),
(50, 'ma@gmail.com', 'KahitSandaliiiii', '$2y$10$UHOKAaNkaQPJEjFjzwwKRuTz/3LJDASNbWlSq29iXrmD2gVOK5Eom', ''),
(51, 'sm@gmail.com', 'Mark', '$2y$10$VsuFJBMDJZLb.dNlUbnmWu6OVNoWcgVpi/qtr/1Okm4EJi51T0JIi', ''),
(52, 'asda', 'asdad', '$2y$10$AuVVgSv49dwWESyWgaBri.rG/N8AxpsNPk5.jjIxBYjLOr2mr0n0e', ''),
(53, 'as', 'as', '$2y$10$T7pKQXGsQrRbfQm0fV.maetXYqFRcI5yWa/FakSVSNF4x4k2SNhm2', ''),
(54, '1234', 'asasa', '$2y$10$7Qf4ZPSvGAGDOlMvqK98eONeYIlkt/UY975fLmGcU8fBRpFGtBddG', ''),
(55, 'as', 'asas', '$2y$10$WLzCL5VXxzsHeNiCUml9L.NgknHvi1MPAaWGdEG6mbUdwVlOMOVtm', ''),
(56, 'asdas', 'any and every', '$2y$10$gMNTvZE.kqPIuw64saQZjOLaTD3zo7c0sFzK0EScJ5sb5D1JPXP76', ''),
(57, 'asd', 'asa', '$2y$10$kAatv86OLdtbLx8gFopamuDibcBgDgNzOq3KfCx1cELs0YLph9.My', ''),
(58, 'asda', 'tears', '$2y$10$Bgflc/tTZTh7uaMoBPJdiOgRVdXh8WrBl/UnusCnx8c8iJ4kNp4cy', ''),
(59, '1234', 'asdaddddd', '$2y$10$LfzcA2nCSVqgJsTW.nSopuHR4rda7oKpWo8PxTe5j7ulzD3oTopya', ''),
(60, '1242314', 'tasasa', '$2y$10$rv0zcSIf7XDT8Enf19V1e.5vmwpogZUhTWGdiuoifqLll9ipzDMCK', ''),
(61, '12', '12', '$2y$10$SrCGOBSUpbqUT1m2cUCsfeUtV/OW6vGI.EgwidasHGbFUQL.HQ0bS', ''),
(62, '12qdsf', '1234', '$2y$10$CY7D45RcjPT5fUIysZRqcuiWGca3gR/uW.iTyeiI3akb8A.hKqJXm', ''),
(63, 'asdas', 'testy', '$2y$10$l.khhyOPSvnC8rtOCdiXeOdKOAqmH67Udv3tnHXPAXQRD2q1pU/BC', ''),
(64, '12sda', 'stars', '$2y$10$Fa1kfWSWjaJNTsLEDLKFbO5HT9ktJdf9BQogeiW0m5XrDPaNJpwde', ''),
(65, 'asda', 'agaaaa', '$2y$10$1olQODU4m0IOA7eGrvLESuwtAbrRcVcidZ8ixCPsrAPSRB2sC/wna', ''),
(66, 'asda', 'agaaaar', '$2y$10$PaIqGxanh3hCcN3OPd13PeG5yvA2MFVW6uJHKN3SN5M4Ol36yBVtG', ''),
(67, 'asda', 'agaaaarasd', '$2y$10$sbafNxTDoI2OqkNuNBOCy.BCcT32tVu6Sw4/0dEQIMCDVdoLa1pTW', ''),
(68, 'asda', 'agaaaarasds', '$2y$10$RIFBrsLgexucWO90hWWSZO2mGUDLGHJLK4YdXzK6J1qX5XV4Bj/X.', ''),
(69, 'asdasd', 'weare', '$2y$10$iAIRM6MLOXx/xGvxDMHPpuj4YpH6nOvli9XTGw.z.q1gbvkN2cHaW', ''),
(70, 'waeea', 'asdasdsd', '$2y$10$OKofgP22SGtdogLD3u3hheIwfyLrCqdE0RShe4tkEh9gvWT8Xr7Va', ''),
(71, 'sdfsdf', 'chaser', '$2y$10$2r9zSgycJUsvECAfOBfRyu8v1Dv4s7YKmDdv1FeiVEKFimcb7bL7y', ''),
(72, 'testdeveloper@gmail.com', 'TestDeveloper', '$2y$10$.UIEENawflFXoLS1T.rnWu2.TBOcNayOtWR/Uu9dY9ZT1qYOR7NlK', ''),
(73, 'LabExercise12Kisteria@gmail.com', 'LabExercise12Kisteria', '$2y$10$3fT9dcHA3Uxy0REhuRIOCuedqoQJqB4Zss7v7tMEOqZVOaD7nP.76', ''),
(74, 'feche@gmail.com', 'ohmygod', '$2y$10$faCVFQa2jLsqRic9QVcWienRokD3Isncx.SbspfzDhgkaWVVKgl4G', ''),
(75, 'markfeche@gmail.com', 'MarkFeche', '$2y$10$JVqaYjuNYnNrocZNxNkogeI4E82XBp6VQX4m.KcHSS5NSEtp/.xIy', ''),
(76, 'newacc@gmail.com', 'NewAcc', '$2y$10$/MUolXKQezPQzjMJYRJ7l.QQGZPmEm9ISwSCTEiyMzU44fy8yB1Xe', ''),
(77, 'al@gmail.com', 'local', '$2y$10$MLOJzO.YrfoYHTAvGaT8FOakAZ4PeGgfkQFe19xsD0pdeCqh4Nfqy', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbluserprofile`
--

CREATE TABLE `tbluserprofile` (
  `userid` int(5) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `acctid` int(5) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluserprofile`
--

INSERT INTO `tbluserprofile` (`userid`, `firstname`, `lastname`, `gender`, `acctid`, `birthday`) VALUES
(38, 'Slamm', 'Luab', 'Male', 38, '2024-04-06'),
(39, 'Carl ', 'Veloso', 'Male', 39, '2024-04-06'),
(40, 'test', 'test', 'Female', 40, '2024-04-06'),
(41, 'Vsu', 'Cram', 'Male', 41, '2024-04-06'),
(42, 'TEster', 'adfkjllajk', 'Male', 42, '2024-04-06'),
(43, 'SAD', 'asdasd', 'Male', 43, '2024-04-06'),
(44, 'asdasd', 'asdasd', 'Other', 44, '2024-04-22'),
(45, 'asas', 'asas', 'Male', 45, '2024-04-06'),
(46, 'asdasd', 'asdasd', 'Female', 46, '2024-04-06'),
(47, 'SAD', 'asdasd', 'Male', 47, '2024-04-06'),
(48, 'SADA', 'aASDAS', 'Female', 48, '2024-04-06'),
(49, 'Cchase', 'Osoria', 'Prefer not to say', 49, '2024-04-08'),
(50, 'main', 'main', 'Prefer not to say', 50, '2024-04-08'),
(51, 'Baring', 'Baring', 'Prefer not to say', 51, '2024-04-08'),
(52, 'asdasd', 'asdasd', 'Male', 52, '2024-05-10'),
(53, 'as', 'as', 'Male', 53, '2024-04-08'),
(54, 'asadasd', 'sdad', 'Female', 54, '2024-04-08'),
(55, 'asas', 'asas', 'Other', 55, '2024-04-18'),
(56, '1212', 'asdasd', 'Male', 56, '2024-04-09'),
(57, 'asa', 'asas', 'Female', 57, '2024-04-09'),
(58, 'asad', 'asda', 'Female', 58, '2024-04-09'),
(59, 'asdasd', 'asdasd', 'Female', 59, '2024-04-09'),
(60, 'asa', 'asasd', 'Female', 60, '2024-04-09'),
(61, '12', '12', 'Female', 61, '2024-04-09'),
(62, '12', '123rwe', 'Female', 62, '2024-04-09'),
(63, 'asdfas', 'asdasd', 'Female', 63, '2024-04-09'),
(64, 'asdasd', 'asdasd', 'Other', 64, '2024-04-09'),
(65, 'asdasd', 'asdasd', 'Male', 65, '2024-04-09'),
(66, 'asdasd', 'asdasd', 'Male', 66, '2024-04-09'),
(67, 'asdasd', 'asdasd', 'Male', 67, '2024-04-09'),
(68, 'asdasd', 'asdasd', 'Male', 68, '2024-04-09'),
(69, 'asdfasd', 'asdasd', 'Male', 69, '2024-04-09'),
(70, 'asasd', 'asdasd', 'Male', 70, '2024-04-09'),
(71, 'sdfsdf', 'sdfsdf', 'Prefer not to say', 71, '2024-04-09'),
(72, 'Test', 'Developer', 'Prefer not to say', 72, '2024-04-13'),
(73, 'Lab', '12', 'Female', 73, '2024-04-13'),
(74, 'Mark', 'Baring', 'Prefer not to say', 74, '2024-04-19'),
(75, 'mark', 'feche', 'Prefer not to say', 75, '2024-04-19'),
(76, 'New', 'Acc', 'Prefer not to say', 76, '2024-05-03'),
(77, 'local', 'local', 'Female', 77, '2002-12-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblgamesbought`
--
ALTER TABLE `tblgamesbought`
  ADD PRIMARY KEY (`transactionID`);

--
-- Indexes for table `tblpublishgame`
--
ALTER TABLE `tblpublishgame`
  ADD PRIMARY KEY (`gameID`);

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`acctid`);

--
-- Indexes for table `tbluserprofile`
--
ALTER TABLE `tbluserprofile`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `acctid` (`acctid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblgamesbought`
--
ALTER TABLE `tblgamesbought`
  MODIFY `transactionID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblpublishgame`
--
ALTER TABLE `tblpublishgame`
  MODIFY `gameID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `acctid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tbluserprofile`
--
ALTER TABLE `tbluserprofile`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
