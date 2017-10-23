-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 11:41 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(24, 'amien', 'amien@gmail.com', 'Nulla vestibulum massa at urna porta interdum. Nulla suscipit, dui a ullamcorper auctor, justo urna maximus purus, eu elementum velit nisl id tellus. Phasellus eget velit porttitor, cursus magna vel, egestas orci. Aliquam et nibh ac leo gravida semper. Phasellus non mattis arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique, odio at pharetra vestibulum, eros velit fringilla ex, vitae feugiat leo sem vel augue. Etiam mollis in magna vel porta. Proin eget aliquam risus, id tincidunt elit. Phasellus ipsum sem, finibus placerat mauris et, semper feugiat mi. Phasellus sagittis eget velit eget accumsan. Nam aliquam risus sed eros laoreet faucibus. Mauris sed molestie lorem. Phasellus suscipit ligula vitae scelerisque facilisis. Nulla rutrum, augue et lobortis pharetra, diam velit varius ex, eget mattis nisi sem sed dolor.', '459bf36ba680fe3d9ebf324e6a363a7a', '007b213bd0f5d0c590f6ff9a3495028a', 0, '2017-10-22 19:52:41'),
(25, 'amri', 'amri@gmail.com', 'vestibulum massa at urna porta interdum. Nulla suscipit, dui a ullamcorper auctor, justo urna maximus purus, eu elementum velit nisl id tellus. Phasellus eget velit porttitor, cursus magna vel, egestas orci. Aliquam et nibh ac leo gravida semper. Phasellus non mattis arcu', '2ac77443d2c8163e636c89f60a3de07d', '007b213bd0f5d0c590f6ff9a3495028a', 0, '2017-10-22 21:41:33'),
(26, 'mantap', 'mantap@gmail.com', 'mantap', '79f839d85ebe9c2518729419c17a40c2', '9a45676a3fe9b962416a6e43753afeae', 0, '2017-10-23 02:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `fungsi_kewenangan`
--

CREATE TABLE `fungsi_kewenangan` (
  `id` int(11) NOT NULL,
  `fungsi` text NOT NULL,
  `kewenangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fungsi_kewenangan`
--

INSERT INTO `fungsi_kewenangan` (`id`, `fungsi`, `kewenangan`) VALUES
(1, '<p>Berdasarkan pada Pasal 3 Peraturan MWA No.4 Tahun 2016, fungsi MWA adalah :\r\n    	</p><ol>\r\n    		<li>Melaksanakan Pengawasan Pengelolaan Undip dalam bidang non Akademik (Pasal 74, ayat 4 PP 52 Tahun 2015)</li>\r\n    		<li>Dalam melaksanakan fungsi Pengawasan sebagaimana dimaksud pada ayat 1, MWA melakukan fungsi legislasi dengan membuat peraturan-peraturan yang disebut Peraturan MWA.</li></ol><ol>\r\n    	</ol>\r\n	<p></p>', '<p>Berdasarkan pada Pasal 3 Peraturan MWA No.4 Tahun 2016, fungsi MWA adalah :\r\n    	</p><ol>\r\n    		<li>Menetapkan Peraturan MWA</li>\r\n			<li>Menetapkan kebijakan umum Undip dan mengawasi pelaksanaannya.</li>\r\n       		<li>Mengangkat dan memberhentikan Rektor</li>\r\n 	   		<li>Mengangkat dan memberhentikan Anggota KA</li>\r\n	   		<li>Mengangkat dan memberhentikan Anggota Kehormatan MWA</li>\r\n       		<li>Mengesahkan norma dan tolok ukur penyelenggaraan Undip.</li>\r\n       		<li>Mengesahkan rencana strategis, rencana operasional, dan anggaran tahunan</li>\r\n       		<li>Melaksanakan pengawasan dan pengendalian umum atas pengelolaan non akademik Undip</li>\r\n       		<li>Mengesahkan rencana induk pengembangan yang diusulkan oleh Rektor.</li>\r\n         	<li>Melakukan penilaian terhadap kinerja Rektor.</li>\r\n		 	<li>Membuat keputusan tertinggi terhadap permasalahan yang tidak dapat diselesaikan oleh Rektor dan SA.</li>\r\n         	<li>Membina jejaring dengan institusi dan / atau individu di luar Undip.</li>\r\n         	<li>Memberikan pertimbangan dan melakukan pengawasan dalam rangka mengembangkan kekayaan dan menjaga kesehatan keuangan; dan</li>\r\n         	<li>Bersama Rektor menyusun dan menyampaikan laporan tahunan kepada Menteri.</li>\r\n    	</ol>\r\n	<p></p>');

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

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `attachments`, `received_at`, `hash`, `save`, `hapus`, `status`) VALUES
(1, 'amien', 'amienthescene@yahoo.co.id', 'Peraturan yang jrimbet', '<p>\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n<br></p>', '231017-amien.jpg,231017-amien1.jpg', '2017-10-23 08:00:12', '600187347567063700589', 1, 0, 'read');

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
(2, 'KOMUNIKASI', '<ul><li>Konsolidasi Internal Anggota MWA Studi banding</li></ul><br><br>');

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
(16, '<p>reply</p>', '459bf36ba680fe3d9ebf324e6a363a7a', '2017-10-22 20:57:17'),
(18, '<p>enak sekali<small></small></p>', '79f839d85ebe9c2518729419c17a40c2', '2017-10-23 03:00:21'),
(19, '<p>laparrrr</p>', '79f839d85ebe9c2518729419c17a40c2', '2017-10-23 03:00:42'),
(20, '<p>\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n<br></p>', '459bf36ba680fe3d9ebf324e6a363a7a', '2017-10-23 08:03:19');

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
(6, 'peraturan', '12', '0000-00-00', 'sdfa', '12-sdfa.pdf'),
(7, 'sk', '12', '0000-00-00', '12', '12-12.pdf');

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
-- Indexes for table `fungsi_kewenangan`
--
ALTER TABLE `fungsi_kewenangan`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `fungsi_kewenangan`
--
ALTER TABLE `fungsi_kewenangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id_reply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `sk_peraturan`
--
ALTER TABLE `sk_peraturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
