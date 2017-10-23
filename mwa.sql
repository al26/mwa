-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2017 at 07:09 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Bussiness'),
(2, 'Technology'),
(3, 'Entertaintment');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `hash` varchar(255) NOT NULL,
  `hash_post` varchar(255) NOT NULL,
  `hapus` int(11) NOT NULL,
  `time_publish` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `nama`, `email`, `comment`, `hash`, `hash_post`, `hapus`, `time_publish`) VALUES
(19, 'amien', 'amien@gmail.com', 'amien kurniawan', 'b2aac5063e17f4e9693cc0d7e54fb7e1', '', 1, '2017-10-22 15:23:43'),
(20, 'amri', 'amri@gmail.com', 'amri lagi Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '4811d8517489da3ed0d029b7df02edaa', '007b213bd0f5d0c590f6ff9a3495028a', 1, '2017-10-22 16:17:53'),
(21, 'amri', 'amri@gmail.com', 'amri lagi Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '4a1a0452464aedafb08274c4b474d464', '007b213bd0f5d0c590f6ff9a3495028a', 0, '2017-10-22 15:36:04'),
(22, 'galih', 'amien@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.v Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'c95c4b9730d01ba319bf0262427df9d3', '007b213bd0f5d0c590f6ff9a3495028a', 1, '2017-10-22 15:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `attachments` varchar(255) NOT NULL,
  `received_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hash` varchar(255) NOT NULL,
  `save` int(11) NOT NULL,
  `hapus` int(11) NOT NULL,
  `status` enum('read','not read yet','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`) VALUES
(1, 'Beranda', 'Majelis Wali Amanat (MWA) merupakan organ tertinggi Universitas dari 3 organ Undip sesuai Pasal 27, PP No. 52 tahun 2015 yaitu MWA, Rektor dan Senat Akademik. MWA mewakili kepentingan Pemerintah, Masyarakat, dan Universitas itu sendiri, yang bertanggung-jawab kepada Menteri dan mengemban tugas mem-berdayakan Universitas dalam menjalankan misi untuk mewujudkan visinya.\r\n\r\nMWA menetapkan, memberi pertimbangan pelaksanaan kebijakan umum, dan melaksanakan pengawasan di bidang nonakademik (Pasal 30, ayat 1g; Pasal 74, ayat 4 , PP No. 52 Tahun 2015).'),
(2, 'Penjelasan Umum', 'Majelis Wali Amanat (MWA) merupakan organ tertinggi Universitas dari 3 organ Undip sesuai Pasal 27, PP No. 52 tahun 2015 yaitu MWA, Rektor dan Senat Akademik. MWA mewakili kepentingan Pemerintah, Masyarakat, dan Universitas itu sendiri, yang bertanggung-jawab kepada Menteri dan mengemban tugas mem-berdayakan Universitas dalam menjalankan misi untuk mewujudkan visinya.\r\n\r\nMWA menetapkan, memberi pertimbangan pelaksanaan kebijakan umum, dan melaksanakan pengawasan di bidang nonakademik (Pasal 30, ayat 1g; Pasal 74, ayat 4 , PP No. 52 Tahun 2015).'),
(3, 'Personalia', 'MWA Undip aliquam ornare massa a pulvinar malesuada. In in lacinia tortor. Vestibulum efficitur sollicitudin ipsum a volutpat. Quisque sollicitudin non lectus vitae pellentesque. Morbi ultricies posuere sapien. Aliquam erat volutpat. Donec sollicitudin dui enim, ut facilisis mauris interdum ut. In dui tellus, vulputate luctus vehicula eget, convallis vel nisl. Nulla ante erat, mattis at dolor nec, faucibus commodo orci'),
(4, 'Komite Audit', 'Komite Audit ( KA ) adalah perangkat MWA yang melaksanakan tugas membantu MWA dalam melakukan fungsi pengawasan di bidang non akademik terhadap penyelenggaraan Undip. Mengawasi proses audit internal dan eksternal atas penyelenggaraan Undip di bidang non akademik, Menilai hasil audit internal maupun eksternal untuk disampaikan kepada MWA, Melakukan pengawasan penyelenggaraan sistem akuntansi, evaluasi sistem pengendalian internal, dan audit atas laporan keuangan'),
(5, 'MWA UM', ''),
(6, 'surat keputusan dan peraturan mwa undip', 'MWA Undip aliquam ornare massa a pulvinar malesuada. In in lacinia tortor. Vestibulum efficitur sollicitudin ipsum a volutpat. Quisque sollicitudin non lectus vitae pellentesque. Morbi ultricies posuere sapien. Aliquam erat volutpat. Donec sollicitudin dui enim, ut facilisis mauris interdum ut. In dui tellus, vulputate luctus vehicula eget, convallis vel nisl. Nulla ante erat, mattis at dolor nec, faucibus commodo orci.'),
(7, 'program kerja mwa undip', 'MWA Undip aliquam ornare massa a pulvinar malesuada. In in lacinia tortor. Vestibulum efficitur sollicitudin ipsum a volutpat. Quisque sollicitudin non lectus vitae pellentesque. Morbi ultricies posuere sapien. Aliquam erat volutpat. Donec sollicitudin dui enim, ut facilisis mauris interdum ut. In dui tellus, vulputate luctus vehicula eget, convallis vel nisl. Nulla ante erat, mattis at dolor nec, faucibus commodo orci.');

-- --------------------------------------------------------

--
-- Table structure for table `personalia`
--

CREATE TABLE `personalia` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `unsur` varchar(255) NOT NULL,
  `is_ka` enum('yes','no') NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personalia`
--

INSERT INTO `personalia` (`id`, `nama`, `jabatan`, `unsur`, `is_ka`, `foto`) VALUES
(1, 'baby shark', 'anak', 'hiu', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `slug`, `body`, `category`, `image`, `created_at`, `hash`) VALUES
(25, 'post baru', 'post-baru', 'post baru baru baru', '1', '', '2017-10-17 15:57:25', '9a45676a3fe9b962416a6e43753afeae'),
(26, 'Post Kedua', 'post-kedua', '<p>Ini post kedua sob</p>\r\n', '2', '171017-post-kedua.png,171017-post-kedua1.png', '2017-10-17 18:02:36', '9b61777998609dd1cc46113f2e844f9c'),
(27, 'Post ketiga', 'post-ketiga', '<p>Ini ppost ke tiga sob, mltiple kategori yak</p>\r\n', '2,3', '171017-post-ketiga.png,171017-post-ketiga1.png,171017-post-ketiga2.png', '2017-10-17 18:18:24', '007b213bd0f5d0c590f6ff9a3495028a');

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id` int(11) NOT NULL,
  `judul_program` varchar(255) NOT NULL,
  `jenis_kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id`, `judul_program`, `jenis_kegiatan`) VALUES
(1, 'KESEKRETARIATAN MWA', '<ul><li>Membentuk Kesekretariatan MWA : tempat, tenaga (staff), sarana, administrasi.</li><li>Tertib Administrasi</li><ul>'),
(2, 'KOMUNIKASI', '<ul><li>Konsolidasi Internal Anggota MWA Studi banding</li><li>Membuat Web MWA</li><li>Sosialisasi</li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id_reply` int(11) NOT NULL,
  `reply` text NOT NULL,
  `id_comment` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id_reply`, `reply`, `id_comment`, `timestamp`) VALUES
(8, '<p>balas ke adi</p>', 'dd2223bacbfb27555b8079b04d0c08a2', '2017-10-22 10:02:32'),
(9, '<p>balas ke adi 2</p>', 'dd2223bacbfb27555b8079b04d0c08a2', '2017-10-22 10:03:18'),
(10, '<p>test</p>', 'dd2223bacbfb27555b8079b04d0c08a2', '2017-10-22 11:45:18'),
(11, '<p>test\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n\r\n</p>', 'dd2223bacbfb27555b8079b04d0c08a2', '2017-10-22 15:40:21'),
(12, '<p>test amri reply </p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida felis sit amet dignissim blandit. Cras tempor sapien id tortor iaculis elementum. Aenean tempor elementum rhoncus. Quisque in elementum risus. Donec eu porttitor felis, eget porta nibh. Maecenas pretium, ipsum ut volutpat condimentum, massa elit auctor est, a pellentesque lorem nisi quis metus. Nam nisi mi, dapibus eget nisi eget, aliquet ultricies mi. Pellentesque massa metus, feugiat vitae vehicula eu, dignissim eu orci. Suspendisse nec sapien lorem. Etiam tellus eros, sollicitudin viverra scelerisque in, rutrum sit amet mi. Etiam nec massa massa. In vitae ipsum hendrerit, maximus purus non, auctor nisl. Integer lobortis orci turpis, eu finibus quam malesuada malesuada. Praesent sollicitudin ex sit amet est tristique tristique. Suspendisse porttitor justo eget hendrerit placerat. Morbi pulvinar, tortor at interdum egestas, erat velit convallis odio, in ornare lorem nunc non mi.\r\n\r\nSed rutrum justo at velit venenatis, non eleifend velit vulputate. Phasellus a risus ut leo facilisis convallis. Vivamus euismod arcu non sem lobortis, ut convallis nibh dignissim. Donec cursus libero eget condimentum laoreet. Curabitur sed fringilla lorem. Nulla consequat, justo dapibus malesuada consequat, nibh lacus convallis lectus, quis vestibulum neque sapien quis ante. In at nisi aliquam, lacinia justo in, vehicula erat. Nunc pellentesque lectus a placerat sodales. Fusce egestas nulla lacinia, iaculis sapien et, consectetur turpis. Sed euismod vestibulum fermentum. Curabitur dolor massa, euismod nec orci vitae, tincidunt interdum felis. Fusce tellus odio, maximus vitae turpis sit amet, aliquet suscipit dui.\r\n\r\nDonec mollis metus in orci finibus, vel vehicula purus dictum. Maecenas sit amet nulla nec tellus maximus ornare sed sed dolor. Quisque gravida nulla a nibh ornare feugiat. Cras a sem augue. Suspendisse sollicitudin vitae ipsum et efficitur. Maecenas eget erat neque. Donec non dui vulputate est pulvinar sagittis. Aenean tristique, libero in maximus aliquet, dui nulla aliquam sapien, et fermentum magna mauris a metus. Nullam volutpat ultricies varius. Nunc sagittis ut nisi non fringilla. Nulla faucibus porta eleifend. In lobortis turpis et aliquet sodales. Etiam sit amet ante non purus blandit bibendum sed eget sem. Nullam a hendrerit lectus, a euismod metus.\r\n\r\nIn vitae dictum velit, non placerat sapien. Fusce imperdiet libero nec ante lobortis posuere. Vestibulum tristique maximus sapien, vitae egestas massa consectetur et. Suspendisse potenti. Proin efficitur et enim a tempor. Donec faucibus, velit at ullamcorper finibus, nisl justo hendrerit arcu, vitae ornare mauris ligula a nibh. Aenean sagittis sit amet justo sit amet commodo. Morbi vestibulum laoreet nisi ac lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id urna lorem. Nam id ligula pulvinar, pretium dui sed, posuere tellus. Etiam tristique tempus nisi, quis mattis ligula posuere consequat. Pellentesque laoreet in arcu nec scelerisque. Praesent sed consectetur augue. In vitae odio libero. Sed id lectus eros.\r\n\r\nVestibulum at tempor risus, faucibus vulputate diam. Cras aliquam dictum nulla nec porta. Quisque rutrum non leo nec ullamcorper. Sed hendrerit massa vel sollicitudin ornare. Integer molestie sapien eget velit vulputate, id consequat sapien bibendum. Cras in ullamcorper ipsum, vitae laoreet est. Quisque metus ipsum, cursus ac molestie eget, suscipit at massa. Integer lobortis placerat rutrum. Nulla est risus, mattis sit amet condimentum at, convallis sit amet nisl.', '4a1a0452464aedafb08274c4b474d464', '2017-10-22 17:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `sk_peraturan`
--

CREATE TABLE `sk_peraturan` (
  `id` int(11) NOT NULL,
  `kategori` enum('sk','peraturan','','') NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_peraturan`
--

INSERT INTO `sk_peraturan` (`id`, `kategori`, `nomor`, `tanggal`, `tentang`, `file`) VALUES
(1, 'sk', '12 tahun 2017', '2017-10-10', 'baby shark', 'babyshark.pdf'),
(2, 'sk', '13 tahun 2016', '2016-05-24', 'dady shark', 'dadyshark.pdf'),
(3, 'peraturan', '12 tahun 2017', '2017-10-10', 'mommy shark', 'mommyshark.pdf'),
(4, 'peraturan', '13 tahun 2016', '2016-05-24', 'grandma shark', 'grandmashark.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '16998f20fc488ca3cdbd2399e0b10ca8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personalia`
--
ALTER TABLE `personalia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id_reply`);

--
-- Indexes for table `sk_peraturan`
--
ALTER TABLE `sk_peraturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personalia`
--
ALTER TABLE `personalia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id_reply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sk_peraturan`
--
ALTER TABLE `sk_peraturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
