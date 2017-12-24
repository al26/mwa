-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Des 2017 pada 16.52
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

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
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'Event'),
(5, 'amien kurniawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
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
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id`, `nama`, `email`, `comment`, `hash`, `hash_post`, `hapus`, `time_publish`) VALUES
(2, 'amien', 'amienkurniawan@gmail.com', 'amien', '6ca900da686c27afe7d870e5318216c8', '1d80610da8732f3d3ccbfb006dc42b8f', 0, '2017-11-04 14:12:59'),
(3, 'amri', 'amri@gmail.com', 'amri tester', 'ee4b3bed459b43b326e4732b68a459df', '1d80610da8732f3d3ccbfb006dc42b8f', 0, '2017-11-04 14:13:45'),
(4, 'ameiii', 'amienthescene@yahoo.co.id', 'afasdfasdfkjl l', '0272b1d5a6c976236808a9a25a96e15a', '1d80610da8732f3d3ccbfb006dc42b8f', 0, '2017-11-04 14:19:45'),
(5, 'kjsdhfkjh', 'fasdf@gmail.com', 'khkjh uh jk g iukbkj', 'a99b70b395ee45fd7f637224c95cf5cd', '1d80610da8732f3d3ccbfb006dc42b8f', 0, '2017-11-04 14:19:58'),
(6, 'testtttt', 'test@gmail.com', 'sdkjflkasj ljjs dlfhfalsd fnlasdfoasdlfmno', '5e813229d47ffe1f11a177dc244c2faf', '1d80610da8732f3d3ccbfb006dc42b8f', 0, '2017-11-04 14:20:23'),
(7, 'kakaak', 'kakaak@kk.k', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'bd67d863deb19bb450d33f6b4048947a', '13131313131313', 0, '2017-12-24 10:33:14'),
(8, 'lalal', 'lala@mail.l', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1e38d6d86bff53982e446ef878509f18', '44806614689e72584b2e8a764790b913', 0, '2017-12-24 10:33:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fungsi_kewenangan`
--

CREATE TABLE `fungsi_kewenangan` (
  `id` int(11) NOT NULL,
  `fungsi` text NOT NULL,
  `kewenangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
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
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `attachments`, `received_at`, `hash`, `save`, `hapus`, `status`) VALUES
(5, 'AAA', 'aa@jmail.vv', 'aasasas', '<p>asahkgkgkgagsdad</p>', '', '2017-11-22 12:18:41', '2003766639895588277527099', 0, 0, 'read'),
(6, 'lala', 'lala@mail.l', 'ada lah pokoknya', '<p>\r\n\r\n</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat eget ipsum nec consectetur. Vestibulum eget fringilla quam, quis dignissim ex. Cras a mi eu eros sodales scelerisque. Donec sodales blandit turpis, ac laoreet velit tempus sed. Nullam lacus lacus, volutpat in scelerisque non, dictum eget mi. Etiam faucibus est in quam feugiat dignissim. Phasellus faucibus mi et diam accumsan posuere. Proin accumsan arcu a mi rutrum semper. Donec non finibus tortor, at ultricies lacus.</p><p>Morbi ac facilisis dolor, ut tincidunt lectus. Ut malesuada nec sem quis iaculis. Sed fringilla, eros quis posuere interdum, elit magna commodo arcu, id aliquam nisl nulla cursus massa. Quisque volutpat cursus nulla, quis laoreet lectus ultricies et. Vestibulum finibus consectetur ligula et viverra. Donec fermentum massa vitae erat sollicitudin, et condimentum est porta. Cras ipsum nisl, auctor ac mi viverra, aliquet convallis quam. Phasellus ultrices eu sapien a dignissim. Phasellus id nisi ex.</p><p>Pellentesque et felis libero. Nam sit amet fringilla orci. In hac habitasse platea dictumst. Morbi malesuada tempus lacus, quis interdum est mattis a. Phasellus ac ex scelerisque, eleifend urna pellentesque, pharetra risus. Donec ac laoreet lectus. Cras rhoncus vehicula arcu, quis fermentum nunc fringilla volutpat. Aliquam porta ex in nibh viverra lobortis. Etiam aliquam ullamcorper odio, non consequat libero laoreet quis. Suspendisse pharetra ultrices eros, sit amet tincidunt mauris consequat a. Sed rhoncus posuere felis, a sodales nibh feugiat feugiat. Fusce augue metus, condimentum ac pretium gravida, facilisis a arcu. Nam vitae consequat nisi, a pellentesque risus. Sed vitae leo sodales, scelerisque velit in, semper enim.</p><p>Mauris egestas erat ut nunc fringilla, nec mattis augue sollicitudin. In hac habitasse platea dictumst. Vestibulum dictum, diam vitae posuere tempus, lectus eros facilisis neque, non consectetur elit odio ac eros. Donec tristique tristique bibendum. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dolor non pharetra blandit. Maecenas non leo lacus. Integer malesuada ipsum ac nunc tincidunt, in efficitur turpis finibus. Etiam nec enim hendrerit est faucibus luctus at a massa. In fermentum, mi sit amet posuere porttitor, lectus tellus maximus sapien, in malesuada urna magna at elit.</p><p>Integer tincidunt metus vitae tempor cursus. Integer pretium odio in felis rutrum, id porta orci consectetur. Proin vitae mauris sem. Vivamus mattis leo ac arcu scelerisque, ac euismod nunc placerat. Aenean lobortis, massa at aliquet ultricies, lorem nulla posuere dui, in efficitur est dui fringilla elit. Nulla at erat urna. Aenean dignissim massa in sem faucibus scelerisque. Curabitur vel blandit justo, in tristique erat. Nunc sed mi non erat rutrum ultricies. Ut cursus, arcu id vulputate efficitur, enim sapien molestie urna, sed congue tortor risus at lacus. Quisque sed purus eleifend, pellentesque lacus ut, maximus diam. Donec pharetra, ligula nec congue finibus, magna erat euismod ligula, ac bibendum lectus libero in dui. Aenean a ultrices nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam aliquet placerat diam a facilisis. Cras semper facilisis justo sit amet volutpat.</p>\r\n\r\n<br><p></p>', '', '2017-12-21 11:53:07', '107476266151415905', 0, 0, 'read');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pages`
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
-- Struktur dari tabel `personalia`
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
-- Dumping data untuk tabel `personalia`
--

INSERT INTO `personalia` (`id`, `nama`, `jabatan`, `unsur`, `email`, `alamat`, `telp`, `facebook`, `twitter`, `instagram`, `is_ka`, `foto`, `bio`, `tahun`, `status`) VALUES
(4, 'mommy shark', 'biyung', 'hiu', 'mommy@mail.xx', '', '0893341411414', '', '', 'mommy.shark', 'no', '1508709375-mommy-shark.JPG', NULL, '2017/2018', 'aktif'),
(5, 'aaaa', 'bbbbb', 'aaaaaa', 'aa@jmail.vv', '', '089334113451', 'amriluthfi', '@aamri', 'amri', 'yes', '1508709647-aaaa.jpg', NULL, '2017/2018', 'aktif'),
(6, 'luthfi', 'mahasiswa', 'mahasiswa', 'luthfi@mwa.undip.ac.id', 'Jalan Gondang Timur III No. 15A, Kelurahan Bulusan, Kecamatan Tembalang, Kota Semarang, Jawa Tengah, Indonesia\r\nKode Pos 55555', '08999966677', 'https://www.facebook.com/amriluthfi', 'luthfi', 'luthfi', 'no', 'luthfi.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2017/2018', 'aktif'),
(7, 'luthfi a', 'mahasiswa', 'mahasiswa', 'aluthfi@mwa.undip.ac.id', 'Jalan Gondang Timur III No. 15A, Kelurahan Bulusan, Kecamatan Tembalang, Kota Semarang, Jawa Tengah, Indonesia\r\nKode Pos 55555', '089999666775', 'aluthfi', 'aluthfi', 'aluthfi', 'no', 'aluthfi.jpg', NULL, '2016/2017', 'nonaktif'),
(8, 'admin', '', '', '', '', '', '', '', '', 'no', '', NULL, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
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
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `title`, `slug`, `body`, `category`, `image`, `created_at`, `hash`, `author`) VALUES
(1, 'kegiatan upload web mwa live server hore duduhu hmm', 'kegiatan-upload-web-mwa-live-server-hore-duduhu-hmm', '<p>yeyyy akhirnya bisa live juga, lagi testing nih... butuh koment hahahaha wkwk</p>\r\n', '2', '041117-kegiatan-upload-web-mwa-live-server-hore-duduhu-hmm.jpg', '2017-10-23 14:50:07', 'e3fdc5c7f33ef602345776c694769589', 1),
(2, 'Post Baru ', 'post-baru', '<p>Ini isi post baru</p>\r\n', '2', '041117-post-baru.png', '2017-10-31 03:59:22', '5344760fe919af22b8d1fc3448232e3e', 1),
(4, 'Post Baru banget', 'post-baru-banget', '<p>ahdladagdlaldlagdlagdlaldglagdlagdlagldgalgdladg wewewewew</p>\r\n', '2', '041117-post-baru-banget.jpg', '2017-11-04 14:42:02', '', 1),
(5, 'dududududududu', 'dududududududu', '<p>hdaldhhaldadglagdadgaldglagdlagdlagldglagdlagdlaldalgdlad</p>\r\n', '2', '', '2017-11-04 14:53:33', '', 1),
(6, 'popopos', 'popopos', '<p>aposaposaodpadoadao</p>\r\n', '2', '', '2017-11-04 15:15:31', '', 1),
(7, 'hello hell0', 'hello-hell0', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada felis eu arcu congue sollicitudin. Nullam mollis, massa vitae fringilla volutpat, odio mi euismod leo, vitae pulvinar ligula enim vel diam. Vestibulum sed sapien et erat bibendum ultricies. Mauris in nunc orci. Maecenas dignissim egestas purus, bibendum faucibus risus sodales at. Curabitur convallis id purus ut convallis. Vivamus lobortis nulla justo, et consectetur ex molestie at. Quisque cursus purus sit amet risus semper, blandit placerat eros feugiat. Integer euismod ligula sed nunc accumsan interdum. Sed luctus ante eget orci gravida, vitae tristique tellus malesuada.</p>\r\n\r\n<p>Praesent sodales nunc eget orci ornare, sed imperdiet dolor suscipit. Donec vestibulum dictum convallis. Cras vel dolor neque. Etiam eget pretium nisi. Curabitur facilisis ligula laoreet fringilla bibendum. Vestibulum quis erat eu leo faucibus pretium nec ac massa. Nulla scelerisque interdum semper. Duis ut nibh at sem rutrum dapibus.</p>\r\n\r\n<p>Donec vitae bibendum orci, nec ultricies mauris. Donec tristique arcu nec felis molestie molestie. Donec non tortor sodales, tincidunt urna rhoncus, imperdiet nibh. Vestibulum nunc ipsum, tempus et imperdiet ac, faucibus eu quam. Nulla malesuada varius arcu, quis rhoncus quam. Etiam nec magna nulla. Duis vitae condimentum dolor, sit amet luctus ex. Etiam commodo urna non enim hendrerit eleifend. Vestibulum tristique, urna quis rutrum volutpat, libero nisl hendrerit urna, et luctus tortor enim non odio. Integer eget tellus eget lacus sodales dictum ut a sem. Donec vel ligula at ex lacinia pulvinar.</p>\r\n\r\n<p>Proin mollis orci quam, ut eleifend nibh accumsan non. Nullam bibendum lectus in diam dignissim, sed blandit metus porttitor. Nunc sollicitudin vitae ipsum id pulvinar. Maecenas ultrices tincidunt blandit. Vestibulum a elit nisi. Suspendisse sollicitudin eu dolor pellentesque dignissim. In hac habitasse platea dictumst. In ut libero faucibus elit convallis fringilla.</p>\r\n\r\n<p>Sed viverra leo lorem, id vehicula odio bibendum sed. Donec maximus feugiat ante, sit amet pharetra magna consequat sit amet. Suspendisse volutpat cursus convallis. Nulla posuere dignissim purus vel fermentum. Quisque congue tempus orci. Curabitur vel leo at risus aliquet imperdiet. In eget sapien ex. Donec augue turpis, mollis eu tristique vitae, consequat at quam. Maecenas sagittis est id ligula porttitor pellentesque. Morbi feugiat dui sit amet lorem laoreet, sed dapibus ipsum malesuada. Cras fermentum sed massa sed fermentum. Nullam pellentesque euismod enim vitae tempus. Donec ultrices ex quis elit dapibus, et tempor nibh posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>\r\n', '2', '191217-hello.jpg', '2017-12-19 13:03:04', '44806614689e72584b2e8a764790b913', 2),
(8, 'lalalala', 'lala-lala', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2,5', '', '2017-12-24 10:27:44', '13131313131313', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker`
--

CREATE TABLE `proker` (
  `id` int(11) NOT NULL,
  `judul_program` varchar(255) NOT NULL,
  `jenis_kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proker`
--

INSERT INTO `proker` (`id`, `judul_program`, `jenis_kegiatan`) VALUES
(5, 'amie kurniawan', '<p>amien&nbsp;</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reply`
--

CREATE TABLE `reply` (
  `id_reply` int(11) NOT NULL,
  `reply` text NOT NULL,
  `id_comment` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reply`
--

INSERT INTO `reply` (`id_reply`, `reply`, `id_comment`, `timestamp`) VALUES
(3, '<p>iyaa perlu diperbaikin </p>', '7a57b07e7f617cb96825fbb29f154d91', '2017-10-23 15:14:56'),
(5, '<p>ini dibales yaa</p>', '7292ce81d8a74352b088be769842c21d', '2017-10-29 11:52:10'),
(6, '<p>ini udah dibales yaa</p>', '55c3285429ad4fb684ef8bb4ccd89108', '2017-10-29 11:53:03'),
(7, '<p>Oke, saudara <b>Tester,</b> komen kamu<u> masuk</u></p>', 'cd8b43dac844f3834b903f2bba399d4d', '2017-10-30 13:24:00'),
(8, '<p>oke komen kamu sudah ada</p>', '6ca900da686c27afe7d870e5318216c8', '2017-11-04 14:13:20'),
(9, '<p>oke amri tester sudah bisa jalan</p>', 'ee4b3bed459b43b326e4732b68a459df', '2017-11-04 14:14:09'),
(10, '<p>reply jjalad</p>', 'a99b70b395ee45fd7f637224c95cf5cd', '2017-11-22 12:19:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_peraturan`
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
-- Dumping data untuk tabel `sk_peraturan`
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
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` enum('admin','user','','') NOT NULL,
  `id_personalia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `id_personalia`) VALUES
(1, 'admin', '16998f20fc488ca3cdbd2399e0b10ca8', 'admin', 8),
(2, 'amri', 'amri', 'user', 6);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id_reply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sk_peraturan`
--
ALTER TABLE `sk_peraturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`author`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_personalia` FOREIGN KEY (`id_personalia`) REFERENCES `personalia` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
