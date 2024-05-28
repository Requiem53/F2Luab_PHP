-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 03:57 PM
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
  `birthday` date NOT NULL,
  `description` varchar(500) NOT NULL DEFAULT 'Dedededededescription'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `acctid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbluserprofile`
--
ALTER TABLE `tbluserprofile`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
