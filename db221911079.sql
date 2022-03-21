-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `databaseanggota`;
CREATE TABLE `databaseanggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(50) CHARACTER SET latin1 NOT NULL,
  `reasons` text CHARACTER SET latin1 NOT NULL,
  `role` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `databaseanggota` (`id`, `picture`, `name`, `birthdate`, `email`, `password`, `gender`, `reasons`, `role`) VALUES
(45,	'57045413_875817562768645_783855437307969536_n.jpg',	'Renata Putri Henessa',	'2001-10-19',	'Renataputri19@gmail.com',	'$2y$10$rnC7vFjYf5q5YemuPHEd3Og5o3o9.JZuVRiB2FMCWYROy08iglJ9S',	'Female',	'She is my childhood ',	'admin'),
(47,	'130860730_1097423987354041_1303820525681112600_n.jpg',	'Chandler Bing',	'2001-06-06',	'Chandler.bazinga.biz@com',	'$2y$10$3QA/5EQFcGgIlDGRaBYGF.S2zx/BJ1rmzqVbQhirqXaInN6x3/9eK',	'Male',	'She make my jokes better.  ',	'user'),
(49,	'136052138_1329454777409262_6342905822922207929_n(1).jpg',	'Rianda Kusuma',	'2001-05-19',	'rianda@gmail.com',	'$2y$10$kV1.LMLXCE2YtVd8tN65.efP8JXvhTK.5PPSsQ2ZDjorEXwOv/1qi',	'Male',	'My girlfriend love her, and me as well',	'admin'),
(50,	'164058440_1589952478060387_1531069954964974560_n.jpg',	'Olivia Rodrigro',	'2006-02-09',	'olivia@gmail.com',	'$2y$10$Eh0B5VxuhjuCX4ADk0b4/OmqES4Wbe5sl92Dc2LPN3iuXLv/YNLZq',	'Prefer not to say',	' She is her child, Apperantly. ',	'user'),
(51,	'148400285_1109897416123624_7182460294866758187_n.jpg',	'Farah Siska',	'2003-07-02',	'farah@gmail.com',	'$2y$10$rOR55wIumwN2nM4SM1TgoenD5BzY5y9Zg4ysHV/l8qQA1fAkWQk0K',	'Female',	'She is everything to me',	'user'),
(58,	'167164811_930417241094142_7502300200992965574_n.jpg',	'Felix',	'2010-11-11',	'felix@gmail.com',	'$2y$10$2q1ZZgYzNdFrIK8EC/MSOe9C49R6QcKv8QfTbYFAauSbf8Uzw8Sre',	'Prefer not to say',	'She is my sister',	'user'),
(59,	'130218025_1034764147027263_1380696755812120743_n.jpg',	'Alvina Indah',	'2008-05-07',	'alvina@gmail.com',	'$2y$10$kO8C4sBeC41.JBKyP4LAIuxWwloJZtnDybA/di80s/I8ZYCffolzu',	'Prefer not to say',	'She is my bestfriends',	'user'),
(60,	'148154706_444447136972084_5863707944957656710_n.jpg',	'Fatir',	'2007-02-07',	'fatir@gmail.com',	'$2y$10$E4OWX41ckfn1ixWD1OGfduNuciSVGon.XD..8IIaLC4zdes6KBolS',	'Prefer not to say',	'who wouldn`t like her',	'user'),
(61,	'130860730_1097423987354041_1303820525681112600_n.jpg',	'Benjamin',	'2007-06-06',	'benjamin@yahoo.com',	'$2y$10$JXoeTcuFsYnpaZoYtHeR/e0fmwQqFrx7nRDKKqua7Nwg5xR/8ZeLK',	'Prefer not to say',	'you`ll be crazy not to',	'user'),
(62,	'hai hai.jpg',	'Sheldon Cooper',	'2004-02-11',	'sheldon@bazinga.com',	'$2y$10$quTqLaRUxvGRNCnO20ZT1.Chrd51hkelmPnj.EPwtNpZCLJ67zhhW',	'Prefer not to say',	'Taylor`s right, hatters gonna hate hate hate',	'user');

DROP TABLE IF EXISTS `databasecontent`;
CREATE TABLE `databasecontent` (
  `title` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `prg1` longtext NOT NULL,
  `prg2` longtext NOT NULL,
  `prg3` longtext NOT NULL,
  `prg4` longtext NOT NULL,
  `prg5` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `databasecontent` (`title`, `picture`, `prg1`, `prg2`, `prg3`, `prg4`, `prg5`) VALUES
('Why she is the best musician of our time. Here`s some reasons why',	'162064645_493173371863865_5942819197532803063_n.jpg',	'Taylor Alison Swift (born December 13, 1989) is an American singer-songwriter. Her narrative lyricism, which often takes inspiration from her personal life, has received widespread critical praise and media coverage.\r\nBorn in West Reading, Pennsylvania, Swift relocated to Nashville, Tennessee in 2004, to pursue a career in country music. She broke into the country music scene with her eponymous debut studio album in 2006, which included the singles \"Teardrops on My Guitar\" and \"Our Song\". Swift rose to mainstream prominence with her second studio album, Fearless (2008), a country pop record with crossover appeal. Aided by the top-five singles \"Love Story\" and \"You Belong with Me\", Fearless was certified Diamond by the Recording Industry Association of America (RIAA). Swift`s third studio album, Speak Now (2010), blended country pop with elements of rock and featured the top-ten singles \"Mine\" and \"Back to December\".\r\n',	'1. She develops a support network.',	'Taylor Swift has her fans and fellow artists in the music industry that support her. Selena Gomez, Camila Cabello, Halsey and Sara Bareilles are some of the singers who have spoken out in support of her stand in this dispute. Despite her rise to stardom, Swift continues to show appreciation of the people that support her. She also recognizes the power of a support network. In this latest feud, she asks for her network`s help. When people feel appreciative, they are more willing to support you. If you want to increase your influence, nurture your relationships. It may not be on the same mega-scale of Taylor Swift, but if you stay in-touch with your friends and colleagues, they in turn will support you. If you want people to listen to you, listen to them. Let people know you are listening.',	'2. She owns her power.',	'Not only does Taylor Swift have power, but she owns her power. She uses her power, including her massive social media following that allows her to amplify her voice exponentially. She is not afraid to use some of her capital to influence change, particularly when it impacts her worth and that of her fellow artists. In her Twitter statement on the current dispute, Swift writes that the label will allow her to use her past music on the condition that she stops talking about Scooter Braun and Scott Borchetta, the two men behind the record label. “The message being sent to me is very clear. Basically, be a good little girl and shut up. Or you`ll be punished,” she writes. Taylor Swift is not afraid to risk her reputation or suffer the consequences for something she feels is unfair. If you have power, have the courage to use it. In some cases, staying silent might jeopardize your opportunity to lead a project or for a promotion or raise, as examples. Own your power, and use the tools available to you to amplify your voice.'),
('She just release Fearless (Taylor`s Version)',	'160304948_270414781198490_4990785466652604395_n.jpg',	'Thursday, April 8, U.S. time, Taylor Swift re-released the album Fearless (Taylor`s Version), a remake of the original version in 2008. After failing to get a master of her songs from her old label, Big Machine, Swift was not allowed to perform songs she wrote herself. Fans understand why she does this. The album became Taylor Swift`s way of keeping the work she wrote. In Fearless (Taylor`s Version), there are 26 songs including `from the vault`, some of which have never been released publicly. \"My version of Fearless has 26 songs because I`m going to add songs from the vault, songs that almost go to Fearless`s original album, but I go back and record them so that everyone hears not only the album that`s on the album, but the songs that are almost in: the big picture\", she said when first announcing the re-release. These songs don`t differ much from the original version but Swift`s voice sounds more mature and the quality of the instruments is also better.',	'The selection of Fearless (Taylor`s Version) as the first album to be re-recorded was due to swift`s many hits, such as Love Story, You Belong With Me, and Fifteen. In addition, it became Swift`s most-sold album and was awarded a Grammy in 2010.Musicians such as Colbie Caillat, Maren Morris, and Keith Urban participated as Taylor Swift`s collaborators. Fearless album (Taylor`s Version) can be listened to streaming and physical.',	'Fearless (Taylor`s Version) was preceded by three singles, all of which entered the top 10 of the Billboard Hot Country Songs chart: \"Love Story (Taylor`s Version)\" topped the chart, \"You All Over Me\" landed at number six, followed by \"Mr. Perfectly Fine\" reaching number two. The album received critical acclaim, with emphasis on its nostalgic sentiment, Swift`s matured vocals, and crisper production. It reached number one in Australia, Canada, Ireland, New Zealand, Scotland',	'',	''),
('Taylor Swift Landing A Movie With Margot Robbie and Others',	'136052138_1329454777409262_6342905822922207929_n(1).jpg',	'What`s the definition of, “Too much of a good thing?” It might apply to the ensemble David O. Russell is compiling for his upcoming, untitled film, which apparently already has wrapped production. Names already on the roster for this film include Christian Bale, John David Washington, Rami Malek, Anna Taylor-Joy, Michael Shannon and Zoe Saldana, in addition to Mike Myers, Chris Rock and Robert De Niro. But it`s the team up of beautiful, blonde costars Margot Robbie and Taylor Swift that has the Internet ablaze with hilarious reactions.',	'Taylor Swift`s casting in the new David O. Russell movie was first reported by Showbiz411, and it begs the question, “Was Jennifer Lawrence not available?” Lawrence has been a mainstay of Russell`s films as of late, co-starring in Silver Linings Playbook (which earned her an Oscar), American Hustle, and Joy (the latter two earning her Oscar nominations). Instead, Russell is going with Margot Robbie and Taylor Swift -- with a dash of Anya Taylor Joy -- and that has Princess_Elna over the moon.',	'But we will all be able to go, when the movie eventually opens in theaters. If David O. Russell`s movie is wrapped production, there`s a chance it could be ready to screen by the end of the year. His last four films, dating back to 2010`s The Fighter, have been awards plays, and with the cast he has assembled, there`s no reason to believe that he doesn`t have his sights set on Oscar gold with whatever this movie is going to end up being. No matter the film`s awards potential, it feels like the movie will get off to a very fast start simply because of the casting of Margot Robbie, Taylor Swift and Anya Taylor-Joy.',	'',	''),
('coba',	'Picture1.jpg',	'goko',	'',	'',	'',	'');

-- 2021-06-07 20:49:21
