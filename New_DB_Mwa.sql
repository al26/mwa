-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 12:06 PM
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
(2, 'Event'),
(5, 'amien kurniawan');

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
  `time_publish` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `belong_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `nama`, `email`, `comment`, `hash`, `hash_post`, `hapus`, `time_publish`, `belong_to`) VALUES
(15, 'amienkurniawan', 'amienthescene@yahoo.co.id', 'amien lipsum lipsum', '5cedaf0f43675acb6d6e33f43d2d0fd3', 'eac82a444f8b186a2c1697a19b968bc1', 0, '2017-12-25 09:14:39', 4);

-- --------------------------------------------------------

--
-- Table structure for table `fungsi_kewenangan`
--

CREATE TABLE `fungsi_kewenangan` (
  `id` int(11) NOT NULL,
  `fungsi` text NOT NULL,
  `kewenangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(5, 'AAA', 'aa@jmail.vv', 'aasasas', '<p>asahkgkgkgagsdad</p>', '', '2017-11-22 12:18:41', '2003766639895588277527099', 0, 0, 'read'),
(6, 'lala', 'lala@mail.l', 'ada lah pokoknya', '<p>\r\n\r\n</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat eget ipsum nec consectetur. Vestibulum eget fringilla quam, quis dignissim ex. Cras a mi eu eros sodales scelerisque. Donec sodales blandit turpis, ac laoreet velit tempus sed. Nullam lacus lacus, volutpat in scelerisque non, dictum eget mi. Etiam faucibus est in quam feugiat dignissim. Phasellus faucibus mi et diam accumsan posuere. Proin accumsan arcu a mi rutrum semper. Donec non finibus tortor, at ultricies lacus.</p><p>Morbi ac facilisis dolor, ut tincidunt lectus. Ut malesuada nec sem quis iaculis. Sed fringilla, eros quis posuere interdum, elit magna commodo arcu, id aliquam nisl nulla cursus massa. Quisque volutpat cursus nulla, quis laoreet lectus ultricies et. Vestibulum finibus consectetur ligula et viverra. Donec fermentum massa vitae erat sollicitudin, et condimentum est porta. Cras ipsum nisl, auctor ac mi viverra, aliquet convallis quam. Phasellus ultrices eu sapien a dignissim. Phasellus id nisi ex.</p><p>Pellentesque et felis libero. Nam sit amet fringilla orci. In hac habitasse platea dictumst. Morbi malesuada tempus lacus, quis interdum est mattis a. Phasellus ac ex scelerisque, eleifend urna pellentesque, pharetra risus. Donec ac laoreet lectus. Cras rhoncus vehicula arcu, quis fermentum nunc fringilla volutpat. Aliquam porta ex in nibh viverra lobortis. Etiam aliquam ullamcorper odio, non consequat libero laoreet quis. Suspendisse pharetra ultrices eros, sit amet tincidunt mauris consequat a. Sed rhoncus posuere felis, a sodales nibh feugiat feugiat. Fusce augue metus, condimentum ac pretium gravida, facilisis a arcu. Nam vitae consequat nisi, a pellentesque risus. Sed vitae leo sodales, scelerisque velit in, semper enim.</p><p>Mauris egestas erat ut nunc fringilla, nec mattis augue sollicitudin. In hac habitasse platea dictumst. Vestibulum dictum, diam vitae posuere tempus, lectus eros facilisis neque, non consectetur elit odio ac eros. Donec tristique tristique bibendum. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dolor non pharetra blandit. Maecenas non leo lacus. Integer malesuada ipsum ac nunc tincidunt, in efficitur turpis finibus. Etiam nec enim hendrerit est faucibus luctus at a massa. In fermentum, mi sit amet posuere porttitor, lectus tellus maximus sapien, in malesuada urna magna at elit.</p><p>Integer tincidunt metus vitae tempor cursus. Integer pretium odio in felis rutrum, id porta orci consectetur. Proin vitae mauris sem. Vivamus mattis leo ac arcu scelerisque, ac euismod nunc placerat. Aenean lobortis, massa at aliquet ultricies, lorem nulla posuere dui, in efficitur est dui fringilla elit. Nulla at erat urna. Aenean dignissim massa in sem faucibus scelerisque. Curabitur vel blandit justo, in tristique erat. Nunc sed mi non erat rutrum ultricies. Ut cursus, arcu id vulputate efficitur, enim sapien molestie urna, sed congue tortor risus at lacus. Quisque sed purus eleifend, pellentesque lacus ut, maximus diam. Donec pharetra, ligula nec congue finibus, magna erat euismod ligula, ac bibendum lectus libero in dui. Aenean a ultrices nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam aliquet placerat diam a facilisis. Cras semper facilisis justo sit amet volutpat.</p>\r\n\r\n<br><p></p>', '', '2017-12-21 11:53:07', '107476266151415905', 0, 0, 'read');

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
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `is_ka` enum('yes','no') NOT NULL,
  `foto` varchar(255) NOT NULL,
  `bio` text,
  `tahun` varchar(10) NOT NULL,
  `status` enum('aktif','nonaktif','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personalia`
--

INSERT INTO `personalia` (`id`, `nama`, `jabatan`, `unsur`, `email`, `alamat`, `telp`, `facebook`, `twitter`, `instagram`, `is_ka`, `foto`, `bio`, `tahun`, `status`) VALUES
(4, 'mommy shark', 'biyung', 'hiu', 'mommy@mail.xx', '', '0893341411414', '', '', 'mommy.shark', 'no', '1508709375-mommy-shark.JPG', NULL, '2017/2018', 'aktif'),
(5, 'aaaa', 'bbbbb', 'aaaaaa', 'aa@jmail.vv', '', '089334113451', 'amriluthfi', '@aamri', 'amri', 'yes', '1508709647-aaaa.jpg', NULL, '2017/2018', 'aktif'),
(6, 'luthfi', 'mahasiswa', 'mahasiswa', 'luthfi@mwa.undip.ac.id', 'Jalan Gondang Timur III No. 15A, Kelurahan Bulusan, Kecamatan Tembalang, Kota ', '08999966677', 'https://www.facebook.com/amriluthfi', 'luthfi', 'luthfi', 'no', '1514178946-luthfi.jpg', 'Contrary to popular belief', '2017/2018', 'aktif'),
(7, 'luthfi a', 'mahasiswa', 'mahasiswa', 'aluthfi@mwa.undip.ac.id', 'Jalan Gondang Timur III No. 15A, Kelurahan Bulusan, Kecamatan Tembalang, Kota Semarang, Jawa Tengah, Indonesia\r\nKode Pos 55555', '089999666775', 'aluthfi', 'aluthfi', 'aluthfi', 'no', 'aluthfi.jpg', NULL, '2016/2017', 'nonaktif'),
(8, 'admin', '', '', '', '', '', '', '', '', 'no', '', NULL, '', ''),
(9, 'amienk', 'mahasiswa', 'Mahasiswa', 'akurniawan@ce.undip.ac.id', 'jl kebon sawit v no 13                  ', '098888687', 'amien kurniawan', 'amienk', 'amien', 'yes', '1514193177-amienk.jpg', 'seorang mahasiswa biasa                  ', '2020/2015', 'aktif');

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
  `hash` varchar(255) NOT NULL,
  `author` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `slug`, `body`, `category`, `image`, `created_at`, `hash`, `author`) VALUES
(9, 'amien ', 'amien', '<p>test koment</p>\r\n', '2', '251217-amien.jpg', '2017-12-25 09:00:16', 'a4c76ec5760d9a1c41a4cda432fb2635', 1),
(10, 'amienk posting 1', 'amienk-posting-1', '<p>amienk&nbsp;</p>\r\n', '', '251217-amienk-posting-1.jpg', '2017-12-25 09:08:32', '6db2611c1cbbca5246895f1df08afcff', NULL),
(11, 'amienk', 'amienk', '<p>first postingan</p>\r\n', '', '251217-amienk.jpg', '2017-12-25 09:14:12', 'eac82a444f8b186a2c1697a19b968bc1', 4);

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
(5, 'amie kurniawan', '<p>amien&nbsp;</p>');

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
(13, '<p>wes dibales</p>', '73371d67ed87c2337eb80d18ef4e4fab', '2017-12-25 10:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `sk_peraturan`
--

CREATE TABLE `sk_peraturan` (
  `id` int(11) NOT NULL,
  `kategori` enum('sk','peraturan','','') NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_peraturan`
--

INSERT INTO `sk_peraturan` (`id`, `kategori`, `nomor`, `tanggal`, `tentang`, `file`) VALUES
(3, 'peraturan', '30', '01/11/2030', 'wewe asd', ''),
(4, 'sk', '9022', '30/10/2017', 'peternakan', 'sk-9022-peternakan.pdf'),
(5, 'peraturan', '80', '30/11/2016', 'pendidikan', 'peraturan-80-pendidikan.pdf'),
(7, 'sk', '7898787', '30/10/2017', 'amien', 'sk-7898787-amien.pdf'),
(8, 'peraturan', '12', '20/10/2018', 'perijinan', 'peraturan-12-perijinan.pdf'),
(9, 'sk', 'pengajian', '12/12/2017', 'Peraturan Lama', 'sk-30-tahun-2017-peraturan-lama1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` enum('admin','user','','') NOT NULL,
  `id_personalia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `id_personalia`) VALUES
(1, 'admin', '16998f20fc488ca3cdbd2399e0b10ca8', 'admin', 8),
(2, 'amri', 'amri', 'user', 6),
(4, 'amienk', '9148b3c7f7f44e9dab82ae132d6d1317', 'user', 9);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`author`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_personalia` (`id_personalia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `fungsi_kewenangan`
--
ALTER TABLE `fungsi_kewenangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `personalia`
--
ALTER TABLE `personalia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id_reply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `sk_peraturan`
--
ALTER TABLE `sk_peraturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`author`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_personalia` FOREIGN KEY (`id_personalia`) REFERENCES `personalia` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
