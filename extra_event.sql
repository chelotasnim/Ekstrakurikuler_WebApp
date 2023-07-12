-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 09:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `extra_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Organisasi'),
(5, 'Kesenian'),
(7, 'Olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

CREATE TABLE `extra` (
  `id` int(11) NOT NULL,
  `nama_extra` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `Gambar` varchar(1000) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nama_pembina` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extra`
--

INSERT INTO `extra` (`id`, `nama_extra`, `deskripsi`, `Gambar`, `kategori`, `nama_pembina`) VALUES
(3, 'Paskibra', 'Paskibra atau Pasukan Pengibar Bendera adalah ekstrakurikuler untuk menampung para siswa yang memiliki keinginan berdiri di barisan pengibar bendera merah putih', 'paskibra.png', 'Organisasi', 'Mohammad Ghandy Yudha'),
(4, 'Palang Merah Remaja', 'Palang Merah Remaja biasa disingkat PMR merupakan ekstrakurikuler yang menampung peserta yang memiliki minat dibidang kesehatan', 'pmr.jpeg', 'Organisasi', 'Nanang Kristanto'),
(5, 'Basket', 'Ekstrakurikuler basket, melengkapi aktivitas olahraga jasmani, melatih peserta bermain secara fair, kompak dan kompetitif', 'basket.jpeg', 'Olahraga', 'Didik Cahyono'),
(6, 'Paduan Suara', 'Serempak ensembel - ensembel musik mengiringi. Ekskul ini berfokus pada peserta yang berbakat pada bidang ini. Ekskul ini banyak digunakan sebagai pengiring musik di event sekolah', 'paduanSuara.jpg', 'Kesenian', 'Pepi Wichaksono'),
(7, 'Sepak Bola', 'Tak lengkap jika tak ada sepak bola, ekstrakurikuler yang terfokus di satu bidang olahraga dengan tujuan melatih sifat kompetitif dan sportif, bahkan terjun dalam kompetisi', 'sepakBola.jpg', 'Olahraga', 'Dwi Ariyanto'),
(10, 'Futsal', 'Permainan sepak bola dalam ruangan, ekstrakurikuler ini cocok bagi peserta yang meminati sepak bola namun dalam lingkup ruang lebih kecil', 'futsal.jpg', 'Olahraga', 'Dwi Ariyanto'),
(11, 'Voli', 'Permainan bola besar yang lebih santai dengan lingkup ruang yang kecil, ekstrakurikuler ini lebih mengedepankan kesenangan dalam permainan', 'voli.jpg', 'Olahraga', 'Didik Cahyono'),
(12, 'Teater', 'Ekstrakurikuler teater adalah tempat dimana peserta yang memiliki bakat dalam menyusun hingga memainkan peran akan mendalami lebih jauh pengetahuannya', 'teater.jpg', 'Kesenian', 'Pepi Wichaksono'),
(14, 'Remaja Masjid', 'Remaja Masjid tempat para peserta remaja yang berpartisipasi di bidang religius. Peserta akan menjadi pengurus masjid dan pondasi awal mendalami agama', 'remajaMasjid.jpg', 'Organisasi', 'Akhmad Salehudin');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `username`, `perihal`, `keterangan`) VALUES
(5, 'Rizkyy', 'Masukan lain', 'Saya rasa halaman utama dari website ini masih kurang terisi, ayo isi dengan konten konten menarik kakak'),
(6, 'Alif Zaky', 'Akun dan Registrasi', 'Saya lupa password mas, tolong direset kan ya password saya jadi &quot;00000000&quot; jangan ubah username nya soalnya dah bagus, makasih'),
(7, 'Ariel  Benni', 'Pendaftaran dan Kepesertaan', 'Tolong tambahkan fitur cetak bukti pendaftaran mas, soalnya saya pengen dapet card kepesertaan ekstrakurikuler'),
(8, 'Machruss', 'Akun dan Registrasi', 'Saya baru punya device mas, gimana cara ubah password setelah saya login, password saya yang lama kurang keren soalnya'),
(9, 'Muhammad Davilah', 'Masukan lain', 'Bisa buat versi mobile app nya ga? Agak ribet sih bolak balik input url di browser, padahal butuh cepet'),
(11, 'Radhitia Pratama', 'Masukan lain', 'qiwhoidhoqoidlloremsaidhiashfihahfoaljfopasaaaaaaaaaaaaaaa'),
(13, 'Ahmad Abdillah Faza', 'Akun dan Registrasi', 'qaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(14, 'Abhista Farrel', 'Akun dan Registrasi', '1111111111111111111111111111111111111111111111111111111111111'),
(15, 'Ahmad Abdillah Faza', 'Masukan lain', '1111111111111111111111111111111111111111111111111111111'),
(16, 'Ahmad Abdillah Faza', 'Akun dan Registrasi', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(17, 'Fronnnnn', 'Masukan lain', 'Test 123 ini hanyalab suatu editan untuk mencoba dari apa ayng menjadi suatu suatu jika kamu maka kami kita akan kelar jika apa sa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'TyphonAdmin', '$2y$10$aVws1LkU7yhpZMrsnEML1Oe5dR76x8wd3HsT5suMPWkneCmfCNThK', 'admin'),
(2, 'Farrel A', '$2y$10$.JooBDxFpWmKmOQ8G1z//ul.8LVtPNECAitExRxu4/xuQ8UkJpz9e', 'user'),
(3, 'Ahmad Faza', '$2y$10$JhPCR5nsTrj.HzCJsInGRuH4gZaEj.efdmIkJqeBxQpkoxWPZxqbq', 'user'),
(4, 'Alifakky', '$2y$10$UJiU41Xo81iYG/ap9tkGzeNUTOgkHdSLeToOSh7eH41lXOv8IXksO', 'user'),
(5, 'Benni', '$2y$10$X483fLo9EiJ0BOUwLbTQUel1IfAATq53UjFZqznoR7NMUkhrdklKS', 'user'),
(6, 'Chelos', '$2y$10$Xht47i7QeA2XtJze319Dc.4qzgEUPzQSaxE2V1fnmKE.5DhLwzpjG', 'user'),
(7, 'Nezar', '$2y$10$gNo8.6a1TMPyW1EUXJ1hDO5V2dg3KlK1Z.XTLVTVtNWqbbpSjlICq', 'user'),
(8, 'Demm', '$2y$10$qOVH1C1U4jUK.qZTiQ7pnOHoioq8NXKJREF4RrVZc0uW0p3VCQZh.', 'user'),
(9, 'Ishak', '$2y$10$wqdHUq82hf5epao3ZdE2Uenf1gn1fpzMRSXEAxQRvmN7QW4TGDr2a', 'user'),
(10, 'Sutanto', '$2y$10$sSRMk.etF3dMeC4Nb9dRzua4AXCCHpIYB/IEo/FXujIJsqaEX9cFi', 'user'),
(11, 'Davil', '$2y$10$9pljWEh2IzQAux.YAqe1d.T9qmncU7FDpb3E/oLZxG3fLyRMnnFMW', 'user'),
(12, 'Jidad', '$2y$10$JzUww80oRSqIzePrmFVL9eHyYnC.bUm7UsSMSJsMXs8HgIv0gairC', 'user'),
(13, 'GufronErPiEl', '$2y$10$431QLesL8dGUQOjFJnk07.7vu/NrPLz75oUgxI2bAnlFgxB7694RW', 'user'),
(14, 'Kremez', '$2y$10$wUFNw2PyA3aJeEqBAvlyYukUR8Rc4rR4zJn5GN3pojPbZLPOn20eK', 'user'),
(15, 'Irfan', '$2y$10$j4uiYtO1Yxzb7YOa5JS8j.ZETjATDcw2FhmkfxGyRfRb/Jm9HOZGa', 'user'),
(16, 'Mascrush', '$2y$10$fYJQzGjc8KsgCJQspe649Oag1hzdZkvrsSUdaHgLzReLwvrKkBNbu', 'user'),
(17, 'Putraa', '$2y$10$SRsL3d2Rzf.FeCAOMqctcu4qB1xfvwaQRjvh0xZXki3G87BwFjEjO', 'user'),
(18, 'Tama', '$2y$10$zv4gLN00y13oFrymnz05j.1oWf8webKSnjCnG45H9f.AX83HEKcRy', 'user'),
(19, 'Yuda', '$2y$10$/Qhx1.8H57BYiKL2uQOkGObeyw4pkAzTrend10DV7t75cUeIvGjI.', 'user'),
(20, 'Apis', '$2y$10$bxSZQf.fPkNZIBaNOJbuLeesTrseOEhtnih8dDMr10agZ2g5H2hZ6', 'user'),
(22, 'Dia', '$2y$10$ag62VYkYJCwMYAN8Pl5OFOhps0x48HDKT6ClC7e2FgVcZSXxkCLpu', 'user'),
(23, 'Ina', '$2y$10$MdCHebIWJlFOJetFLxxM5e9gUH2dZj8Z9ouBe6AcQM9I3TmY5a16S', 'user'),
(24, 'Teegoh', '$2y$10$uNFfgBZYoysP0B.IkjaiWeF4neTVR4BbLMTxUPAza5cmWlQNFsRF2', 'user'),
(25, 'Amali', '$2y$10$DLTbPJyDhAwP.FW110HameKv5OXTlcmfX9krqVVbMRJWLfLvgnLvu', 'user'),
(26, 'Yuviar', '$2y$10$Vzvx0kanaxqdMTptccahsevd9SM04xCMfPdIy090Zws4kl3/cZWDK', 'user'),
(29, 'Jono', '$2y$10$6X5vVzaWYXTA8THRt0AVzeAa/KVDBG0J611pJqcEsFMWdZ7KrwEta', 'user'),
(30, 'Muhfad Dm', '$2y$10$JMcyBaj.scqozPJYpz5oMeWAawHoENJwE6kFfbO6bShczv9yTTUEK', 'user'),
(31, 'PikirKeri', '$2y$10$bV0ZBrphoFSXJev45HuTJOsjYNj3ct8qVT4YlIgyzNbCeaTkDmMz6', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_extra`
--

CREATE TABLE `user_extra` (
  `id_user` int(11) NOT NULL,
  `peserta` varchar(50) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `Gambar` varchar(1000) NOT NULL,
  `id_extra1` varchar(50) NOT NULL,
  `id_extra2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_extra`
--

INSERT INTO `user_extra` (`id_user`, `peserta`, `notelp`, `alamat`, `Gambar`, `id_extra1`, `id_extra2`) VALUES
(2, 'Abhista Farrel', '089765432654', 'Jln Sukowiriyo', 'Avatar-No-Background.png', 'Pramuka', 'Palang Merah Remaja'),
(3, 'Ahmad Abdillah Faza', '089765234543', 'Jln Tasnan', 'Avatar-No-Background.png', 'Pramuka', 'Palang Merah Remaja'),
(4, 'Alif Zaky', '0854677899976', 'Jl Kiyai Coding', 'Avatar-No-Background.png', 'Basket', 'Sepak Bola'),
(5, 'Ariel  Benni', '0897654326548', 'Jln Seroben', 'Avatar-No-Background.png', 'Pramuka', 'Futsal'),
(6, 'Cleo Tasnim', '089543621321', 'Jln Seroben', 'Avatar-No-Background.png', 'Pramuka', 'Futsal'),
(7, 'Dava Faranezar', '089654765213', 'Jln Mangkas', 'Avatar-No-Background.png', 'Pramuka', 'Paskibra'),
(8, 'Dimas Rega', '087456872321', 'Jln Jijoko', 'Avatar-No-Background.png', 'Pramuka', 'Palang Merah Remaja'),
(9, 'Haris Ishak', '085432543879', 'Jln Ishak Bonjourr', 'Avatar-No-Background.png', 'Pramuka', 'Basket'),
(10, 'Wahidan Sutanto', '087657432514', 'Jln Santosa', 'Avatar-No-Background.png', 'Pramuka', 'Paduan Suara'),
(11, 'Muhammad Davilah', '087324765123', 'Jln jajan', 'Avatar-No-Background.png', 'Pramuka', 'Voli'),
(12, 'Rayhan JIdad', '087536728932', 'Jln Rayahaho', 'Avatar-No-Background.png', 'Pramuka', 'Voli'),
(13, 'Fronnnnn', '089765432123', 'Jln Gugup', 'Avatar-No-Background.png', 'Pramuka', 'Teater'),
(14, 'Ikromm', '086732476176', 'Jln KremezLur', 'Avatar-No-Background.png', 'Pramuka', 'Remaja Masjid'),
(15, 'Irfan Abdillah', '089765453123', 'Jln Abdillah', 'Avatar-No-Background.png', 'Pramuka', 'Remaja Masjid'),
(16, 'Machruss', '087654876987', 'Jln MascrushHOHO', 'Avatar-No-Background.png', 'Pramuka', 'Palang Merah Remaja'),
(17, 'Putra Aditya', '087534123765', 'Jln hobiro', 'Avatar-No-Background.png', 'Pramuka', 'Paskibra'),
(18, 'Radhitia Pratama', '089546786432', 'Jln Imam Bonjol', 'Avatar-No-Background.png', 'Pramuka', 'Basket'),
(19, 'Ghaniyya Yuda', '089675432123', 'Jln juya', 'Avatar-No-Background.png', 'Pramuka', 'Remaja Masjid'),
(20, 'Riski Apis', '089654786543', 'Jln yuujii', 'Avatar-No-Background.png', 'Pramuka', 'Sepak Bola'),
(21, 'Rizkyy', '087652341565', 'Jln Yagesya', 'Avatar-No-Background.png', 'Pramuka', 'Paskibra'),
(22, 'Dia Siti', '089768976213', 'Jln rumput', 'Avatar-No-Background.png', 'Pramuka', 'Paduan Suara'),
(23, 'Tabina', '089789435654', 'Jln anjayyo', 'Avatar-No-Background.png', 'Pramuka', 'Voli'),
(24, 'Teguh Wichaksono', '087666543232', 'Jln Royooo', 'Avatar-No-Background.png', 'Pramuka', 'Sepak Bola'),
(25, 'Wildan Anomali', '087999032432', 'Jln Anomali', 'Avatar-No-Background.png', 'Pramuka', 'Paskibra'),
(26, 'Yuviar Nuzul', '087654765123', 'Jln Nuzul', 'Avatar-No-Background.png', 'Pramuka', 'Sepak Bola'),
(29, 'Jono Gans', '0854344567890', 'Jl. Wangy Wangy', 'Avatar-No-Background.png', 'Palang Merah Remaja', 'Futsal'),
(30, 'Marmuhdah Dahlim', '0856777651243', 'Jl. Subsidi BBQ', 'Avatar-No-Background.png', 'Basket', 'Sepak Bola'),
(31, 'Destam Regyan', '082222222222', 'Jl. RK De Preen', 'module_table_top.png', 'Informatika', 'Sepak Bola');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_extra`
--
ALTER TABLE `user_extra`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `extra`
--
ALTER TABLE `extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_extra`
--
ALTER TABLE `user_extra`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
