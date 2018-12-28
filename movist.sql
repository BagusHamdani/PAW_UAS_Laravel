-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 08:07 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movist`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(100) DEFAULT NULL,
  `isi_artikel` text,
  `penulis_artikel` varchar(250) DEFAULT NULL,
  `photo_artikel` varchar(250) DEFAULT NULL,
  `tgl_artikel` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `penulis_artikel`, `photo_artikel`, `tgl_artikel`, `kategori`) VALUES
(2, 'Spider-Man: Homecoming', 'Peter Parker balances his life as an ordinary high school student in Queens with his superhero alter-ego Spider-Man, and finds himself on the trail of a new menace prowling the skies of New York City.<br></br>\r\nRelease : 7 July 2017 (USA)<br>\r\nDuration : 2h 13min<br>\r\nGenre :  Action, Adventure, Sci-Fi <br>\r\nRating : 7.5<br>\r\nDirector: Jon Watts<br>\r\nWriters: Jonathan Goldstein (screenplay by), John Francis Daley (screenplay by)\r\n', 'comon', 's.jpg', '2018-05-29 12:47:45', ''),
(3, 'John Wick: Chapter 2', 'After returning to the criminal underworld to repay a debt, John Wick discovers that a large bounty has been put on his life.\r\n<br></br>\r\nRelease : 10 February 2017 (USA)\r\n<br>\r\nDuration :  2h 2min\r\n<br>\r\nGenres :  Action, Crime, Thriller\r\n<br>\r\nRating : 7.5\r\n<br>\r\nDirector: Chad Stahelski\r\n<br>\r\nWriters: Derek Kolstad, Derek Kolstad (based on characters created by)\r\n<br>\r\nStars: Keanu Reeves, Riccardo Scamarcio, Ian McShane', 'comon', 'jw2.jpg', '2018-05-28 15:04:56', ''),
(5, 'X-Men', 'Two mutants come to a private academy for their kind whose resident superhero team must oppose a terrorist organization with similar powers.\r\n<br></br>\r\nRelease : 14 July 2000 (USA)\r\n<br>\r\nDuration :  1h 44min\r\n<br>\r\nGenres : Action, Adventure, Sci-Fi \r\n<br>\r\nRating : 7.5\r\n<br>\r\nDirector: Bryan Singer\r\n<br>\r\nWriters: Tom DeSanto (story), Bryan Singer (story)\r\n<br>\r\nStars: Patrick Stewart, Hugh Jackman, Ian McKellen', 'comon', 'movie1.jpg', '2018-05-27 14:47:48', ''),
(6, 'Spider-Man 2', 'Peter Parker is beset with troubles in his failing personal life as he battles a brilliant scientist named Doctor Otto Octavius.\r\n<br></br>\r\nRelease : 30 June 2004 (USA)\r\n<br>\r\nDuration :  2h 7min\r\n<br>\r\nGenres : Action, Adventure, Sci-Fi \r\n<br>\r\nRating : 7.3\r\n<br>\r\nDirector: Sam Raimi\r\n<br>\r\nWriters: Stan Lee (comic book), Steve Ditko (comic book)\r\n<br>\r\nStars: Tobey Maguire, Kirsten Dunst, Alfred Molina ', 'comon', 'movie2.jpg', '2018-05-27 14:56:24', ''),
(7, 'Eagle Eye', 'Jerry and Rachel are two strangers thrown together by a mysterious phone call from a woman they have never met. Threatening their lives and family, she pushes Jerry and Rachel into a series of increasingly dangerous situations, using the technology of everyday life to track and control their every move.\r\n<br></br>\r\nRelease : 26 September 2008 (USA)\r\n<br>\r\nDuration :  1h 58min\r\n<br>\r\nGenres : Action, Mystery, Thriller\r\n<br>\r\nRating : 7.3\r\n<br>\r\nDirector: D.J. Caruso\r\n<br>\r\nWriters: John Glenn (screenplay), Travis Wright (screenplay) (as Travis Adam Wright) \r\n<br>\r\nStars: Shia LaBeouf, Michelle Monaghan, Rosario Dawson', 'comon', 'movie10.jpg', '2018-05-27 14:59:19', ''),
(8, 'Kung Fu Panda', 'The Dragon Warrior has to clash against the savage Tai Lung as China''s fate hangs in the balance: However, the Dragon Warrior mantle is supposedly mistaken to be bestowed upon an obese panda who is a tyro in martial arts.\r\n<br></br>\r\nRelease : 6 June 2008 (USA)\r\n<br>\r\nDuration :  1h 32min\r\n<br>\r\nGenres : Animation, Action, Adventure\r\n<br>\r\nRating : 7.6\r\n<br>\r\nDirectors: Mark Osborne, John Stevenson\r\n<br>\r\nWriters: Jonathan Aibel (screenplay), Glenn Berger (screenplay)\r\n<br>\r\nStars: Jack Black, Ian McShane, Angelina Jolie', 'Jack', 'movie9.jpg', '2018-05-27 12:52:24', ''),
(12, 'LOGAN', 'In the near future, a weary Logan cares for an ailing Professor X, somewhere on the Mexican border. However, Logan''s attempts to hide from the world, and his legacy, are upended when a young mutant arrives, pursued by dark forces.\r\n<br></br>\r\nRelease : 3 March 2017 (USA)<br>\r\nDuration :  2h 17min<br>\r\nGenres : Action, Drama, Sci-Fi<br>\r\nRating : 8.1<br>\r\nDirector: James Mangold<br>\r\nWriters: James Mangold (story by), Scott Frank (screenplay by)<br>\r\nStars: Hugh Jackman, Patrick Stewart, Dafne Keen', 'comon', 'logan.jpg', '2018-06-03 21:23:25', 'Action'),
(14, 'The Dark Knight', 'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham. The Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.\r\n<br></br>\r\nRelease : 18 July 2008 (USA)\r\n<br>\r\nDuration :  2h 32min\r\n<br>\r\nGenres :   Action, Crime, Drama\r\n<br>\r\nRating : 9.0\r\n<br>\r\nDirector: Christopher Nolan\r\n<br>\r\nWriters: Jonathan Nolan (screenplay), Christopher Nolan (screenplay)\r\n<br>\r\nStars: Christian Bale, Heath Ledger, Aaron Eckhart | See full cast & crew', 'comon', 'tdk.jpg', '2018-05-27 15:11:30', ''),
(15, 'Transformers', 'An ancient struggle between two Cybertronian races, the heroic Autobots and the evil Decepticons, comes to Earth, with a clue to the ultimate power held by a teenager.\r\n<br></br>\r\nRelease : 3 July 2007 (USA)\r\n<br>\r\nDuration : 2h 24min\r\n<br>\r\nGenres : Action, Adventure, Sci-Fi\r\n<br>\r\nRating : 7.1\r\n<br>\r\nDirector: Michael Bay\r\n<br>\r\nWriters: Roberto Orci (screenplay), Alex Kurtzman (screenplay)\r\n<br>\r\nStars: Shia LaBeouf, Megan Fox, Josh Duhamel', 'comon', 'tf.jpg', '2018-05-19 15:17:16', '');

-- --------------------------------------------------------

--
-- Table structure for table `artikel2`
--

CREATE TABLE `artikel2` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `konten` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel2`
--

INSERT INTO `artikel2` (`id`, `judul`, `konten`, `tanggal`) VALUES
(1, 'maman', 'maman abdurahman', '2018-05-09'),
(2, 'aaa', 'aaaaa', '2018-05-01'),
(3, 'aa', 'aaaaa', '2018-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(5) NOT NULL,
  `nama_film` varchar(300) NOT NULL,
  `isi_film` text NOT NULL,
  `tgl_film` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `nama_film`, `isi_film`, `tgl_film`) VALUES
(1, 'Spiderman', 'Spiderman mantap', '2018-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Action'),
(2, 'Comedy'),
(3, 'Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(5) NOT NULL,
  `id_artikel` int(5) NOT NULL,
  `nama_komentar` varchar(100) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `artikel2`
--
ALTER TABLE `artikel2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `artikel2`
--
ALTER TABLE `artikel2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
