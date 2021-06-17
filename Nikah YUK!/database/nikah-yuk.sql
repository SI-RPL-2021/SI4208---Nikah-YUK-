-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1

-- Generation Time: May 27, 2021 at 04:54 PM

-- Generation Time: Jun 17, 2021 at 10:17 AM

-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikah-yuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idcart` int(11) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `tglorder` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'Cart'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`idcart`, `orderid`, `userid`, `tglorder`, `status`) VALUES
(10, '15wKVT0nej25Y', 2, '2020-03-16 12:10:42', 'Selesai'),

(11, '15Swf8Ye0Fm.M', 2, '2020-03-16 12:17:34', 'Cart'),
(12, '15PzF03ejd8W2', 1, '2020-05-13 02:40:48', 'Pengiriman');

(11, '15Swf8Ye0Fm.M', 2, '2020-03-16 12:17:34', 'Selesai'),
(12, '15PzF03ejd8W2', 1, '2020-05-13 02:40:48', 'Selesai'),
(15, '16vz6xY7/NycM', 2, '2021-06-12 14:44:54', 'Selesai'),
(16, '16Z87B2Gw.vIQ', 2, '2021-06-15 02:43:28', 'Selesai'),
(17, '166Dil0u8uBAI', 2, '2021-06-15 13:28:45', 'Selesai'),
(18, '16iEZbYlK2VYA', 2, '2021-06-15 14:15:22', 'Cart'),
(19, '169vZoJwbblrc', 5, '2021-06-16 15:32:29', 'Selesai'),
(20, '16rIHrkrw3tMg', 6, '2021-06-17 08:06:02', 'Payment');

-- --------------------------------------------------------

--
-- Table structure for table `cart_package`
--

CREATE TABLE `cart_package` (
  `id` int(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `namaBrg` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_package`
--

INSERT INTO `cart_package` (`id`, `userid`, `namaBrg`, `price`) VALUES
(419, 2, 'Platinum', 35000),
(422, 2, 'Platinum', 35000),
(423, 2, 'Gold', 18000);


-- --------------------------------------------------------

--
-- Table structure for table `detailorder`
--

CREATE TABLE `detailorder` (
  `detailid` int(11) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailorder`
--

INSERT INTO `detailorder` (`detailid`, `orderid`, `idproduk`, `qty`) VALUES

(13, '15wKVT0nej25Y', 1, 100),
(14, '15PzF03ejd8W2', 2, 1);

(23, '15Swf8Ye0Fm.M', 4, 10),
(24, '15Swf8Ye0Fm.M', 5, 3),
(25, '15Swf8Ye0Fm.M', 11, 5),
(27, '16vz6xY7/NycM', 4, 1),
(28, '16Z87B2Gw.vIQ', 10, 50),
(29, '16Z87B2Gw.vIQ', 13, 1),
(31, '166Dil0u8uBAI', 14, 1),
(32, '166Dil0u8uBAI', 5, 1),
(33, '166Dil0u8uBAI', 12, 1),
(37, '16iEZbYlK2VYA', 17, 1),
(38, '169vZoJwbblrc', 18, 1),
(39, '169vZoJwbblrc', 4, 1),
(40, '169vZoJwbblrc', 11, 1),
(41, '169vZoJwbblrc', 7, 1),
(42, '169vZoJwbblrc', 14, 1),
(43, '16iEZbYlK2VYA', 8, 1),
(44, '16iEZbYlK2VYA', 11, 1),
(45, '16iEZbYlK2VYA', 5, 1),
(46, '16iEZbYlK2VYA', 13, 1),
(47, '16rIHrkrw3tMg', 9, 1),
(48, '16rIHrkrw3tMg', 11, 1),
(49, '16rIHrkrw3tMg', 6, 1),
(50, '16rIHrkrw3tMg', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `file`) VALUES
(1, 'Axelos-Aquila-Heywood.pdf'),
(2, 'ppt seminar sag.pptx'),
(3, '[IND] MODUL 4 EA_TECHNOLOGY ARCHITECTURE.pdf'),
(4, 'Technological changes, marketing testing and agenc'),
(5, 'Tubes Part 2 - SI4208 - Group3.xlsx'),
(6, 'Tubes Part 2 - SI4208 - Group3.xlsx'),
(7, 'Tubes Part 1 - SI4208 - Group3.xlsx'),
(8, 'Tubes Part 2 - SI4208 - Group3.xlsx'),
(9, '[IND] Test Akhir Tipe B (2).docx'),
(10, '[M4] Tugas Pendahuluan-converted.docx'),
(11, 'main leptop.jpg'),
(12, 'main leptop.jpg'),
(13, 'main leptop.jpg'),
(14, 'main leptop.jpg'),
(15, 'main leptop.jpg'),
(16, 'main leptop.jpg'),
(17, ''),
(18, 'main leptop.jpg'),
(19, 'main leptop.jpg'),
(20, 'main leptop.jpg'),
(21, 'main leptop.jpg'),
(22, 'main leptop.jpg'),
(23, 'main leptop.jpg'),
(24, 'main leptop.jpg'),
(25, 'main leptop.jpg'),
(26, 'main leptop.jpg');


-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `namakategori` varchar(20) NOT NULL,
  `tgldibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`, `tgldibuat`) VALUES

(1, 'Bunga Tangkai', '2019-12-20 07:28:34'),
(2, 'Bunga Papan', '2019-12-20 07:34:17'),
(3, 'Bunga Hidup', '2020-03-16 12:15:40');

(4, 'Venue', '2021-05-27 23:03:30'),
(5, 'Wardrobe', '2021-06-02 16:10:31'),
(6, 'Catering', '2021-06-02 16:10:51'),
(7, 'Wedding Car', '2021-06-02 16:11:03'),
(8, 'Gold', '2021-06-15 15:33:05'),
(9, 'Silver', '2021-06-15 15:33:13'),
(10, 'Platinum', '2021-06-15 15:33:21');


-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `idkonfirmasi` int(11) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `payment` varchar(10) NOT NULL,
  `namarekening` varchar(25) NOT NULL,
  `tglbayar` date NOT NULL,
  `tglsubmit` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `tgljoin` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(7) NOT NULL DEFAULT 'Member',

  `lastlogin` timestamp NULL DEFAULT NULL

  `lastlogin` timestamp NULL DEFAULT NULL,
  `alamat` varchar(255) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--


INSERT INTO `login` (`userid`, `namalengkap`, `email`, `password`, `notelp`, `tgljoin`, `role`, `lastlogin`) VALUES
(1, 'Admin', 'admin', '$2y$10$GJVGd4ji3QE8ikTBzNyA0uLQhiGd6MirZeSJV1O6nUpjSVp1eaKzS', '01234567890', '2020-03-16 11:31:17', 'Admin', NULL),
(2, 'Guest', 'guest', '$2y$10$xXEMgj5pMT9EE0QAx3QW8uEn155Je.FHH5SuIATxVheOt0Z4rhK6K', '01234567890', '2020-03-16 11:30:40', 'Member', NULL),
(4, 'Ardy Rikardo', 'info@sagconsulting.com', '$2y$10$.BkKwbzQy5gypJ8sQhIXru7hN4uwk0nMhhNN7MZhzBYrUqnw/HwvK', '022754108', '2021-05-26 19:26:09', 'Member', NULL);

INSERT INTO `login` (`userid`, `namalengkap`, `email`, `password`, `notelp`, `tgljoin`, `role`, `lastlogin`, `alamat`) VALUES
(1, 'Admin', 'admin', '$2y$10$GJVGd4ji3QE8ikTBzNyA0uLQhiGd6MirZeSJV1O6nUpjSVp1eaKzS', '01234567890', '2020-03-16 11:31:17', 'Admin', NULL, ''),
(2, 'Guest', 'guest', '$2y$10$xXEMgj5pMT9EE0QAx3QW8uEn155Je.FHH5SuIATxVheOt0Z4rhK6K', '01234567890815', '2020-03-16 11:30:40', 'Member', NULL, 'Bojongsoang, Bandung'),
(4, 'Ardy Rikardo', 'info@sagconsulting.com', '$2y$10$.BkKwbzQy5gypJ8sQhIXru7hN4uwk0nMhhNN7MZhzBYrUqnw/HwvK', '022754108', '2021-05-26 19:26:09', 'Member', NULL, ''),
(5, 'Bonyfasius ', 'bony@gmail.com', '$2y$10$E3XFmvBBTIG6K3DUMUUK1umfvx0jQOVAmC.OEgmNPkLRAEa2TrJ5m', '082214741917', '2021-06-16 15:20:54', 'Member', NULL, ''),
(6, 'Ardy Rikardo', 'ardyrikardo4@gmail.com', '$2y$10$B3XW0GKIxdzfVdjISrk14uPqhHQFtccjXrRZPbb6gNlIFXACM2KxW', '082214741918', '2021-06-17 07:56:45', 'Member', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `name1` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(15) NOT NULL,
  `major` varchar(20) NOT NULL,
  `work` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`name1`, `name2`, `address`, `email`, `number`, `major`, `work`, `id`) VALUES
('claery', 'jessica', 'jl rawasari vii rt 42 rw 05 no 27 c kec banjarmasin tengah kelurahan teluk dalam kota banjarmasin provinsi kalimantan selatan', 'claeryjessica01@gmail.com', 5678, 'High School', '', 29),
('claery', 'jessicaaaaaaaaaaaa', 'jl rawasari vii rt 42 rw 05 no 27 c kec banjarmasin tengah kelurahan teluk dalam kota banjarmasin provinsi kalimantan selatan', 'claeryjessica01@gmail.com', 5678, 'High School', '', 30),
('Ardy', 'Rikardo', 'Bandung', 'ardyrikardo4@gmail.com', 2147483647, 'Bachelor Degree', '', 32);


-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `no` int(11) NOT NULL,
  `metode` varchar(25) NOT NULL,
  `norek` varchar(25) NOT NULL,
  `logo` text DEFAULT NULL,
  `an` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`no`, `metode`, `norek`, `logo`, `an`) VALUES

(1, 'Bank BCA', '13131231231', 'images/bca.jpg', 'Tokopekita'),
(2, 'Bank Mandiri', '943248844843', 'images/mandiri.jpg', 'Tokopekita'),
(3, 'DANA', '0882313132123', 'images/dana.png', 'Tokopekita');

(1, 'Bank BCA', '13131231231', 'img/bca.jpg', 'Nikah-YUK!'),
(2, 'Bank Mandiri', '943248844843', 'img/mandiri.jpg', 'Nikah-YUK!'),
(3, 'DANA', '0882313132123', 'img/dana.png', 'Nikah-YUK!'),
(4, 'Bank BRi', '456789123', 'img/bri.png', 'Nikah-YUK!');


-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `namaproduk` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `rate` int(11) NOT NULL,
  `hargabefore` int(11) NOT NULL,
  `hargaafter` int(11) NOT NULL,
  `tgldibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `idkategori`, `namaproduk`, `gambar`, `deskripsi`, `rate`, `hargabefore`, `hargaafter`, `tgldibuat`) VALUES

(1, 1, 'Mawar Merah', 'produk/7443a12318c5f4f29059d243fd14f447.png', 'Setangkai mawar merah', 5, 23000, 19000, '2019-12-20 09:10:26'),
(2, 1, 'Mawar Putih', 'produk/15kwuDMbYtraw.png', 'Setangkai mawar putih', 4, 24000, 19500, '2019-12-20 09:24:13'),
(3, 3, 'Bunga Hidup', 'produk/15Ak7lFMfvuJc.jpg', 'Bunga Hidup', 5, 25000, 15000, '2020-03-16 12:16:53');

(4, 4, 'Zambrud Ballroom', 'produk/ballroom1.JPEG', 'Ballroom penataan yang sangak estetik', 4, 15000000, 10000000, '2021-05-27 23:54:54'),
(5, 6, 'Buffet A', 'produk/Catering1.png', 'Nasi putih, Sop, Ayam, Kakap asam manis, Sayuran, Krupuk udang, Aneka puding, Air mineral', 4, 25000000, 20000000, '2021-06-02 16:29:47'),
(6, 6, 'Buffet B', 'produk/Catering2.png', 'Nasi putih, Mie goreng, Bihun goreng, Sop, Ayam goreng mentega, Ayam bumbu bali, Kakap asam manis, Sayuran, Capcay, Asinan jakarta, Kerupuk, Puding, Buah potong, Air mineral', 5, 35000000, 30000000, '2021-06-02 16:36:38'),
(7, 6, 'Buffet C', 'produk/Catering3.png', 'Nasi putih, Nasi goreng, Mie goreng, Bihun goreng, Sop, Ayam goreng mentega, Ayam panggang bali, Ayam rica-rica, Daging teriyaki, Dagin rolade, Daging lada hitam, Kakap asalm manis, Macaroni scotell, ', 5, 45000000, 40000000, '2021-06-02 16:36:38'),
(8, 4, 'Aston Ballroom', 'produk/gedung2.jpg', 'Aston Hotel memiliki ballroom terbesar di kota, hotel kami merupakan pilihan yang tepat untuk pernikahan, rapat dan pertemuan dengan kapasitas mulai dari 20 sampai 2,000 orang. Dengan tinggi atap hing', 5, 20000000, 15000000, '2021-06-02 16:48:50'),
(9, 4, 'Swiss Bell Ballroom', 'produk/gedung3.jpeg', 'Hotel menyediakan rangkaian fasilitas dan pelayanan termasuk, delapan ruang pertemuan dan satu ballroom dengan kapasitas sampai dengan 400 tamu yang tersedia untuk bisnis dan pertemuan di Jakarta. Den', 5, 35000000, 30000000, '2021-06-02 16:54:14'),
(10, 5, 'Anpasuha MUA', 'produk/wardrobe1.jpg', 'MUA yang sering dijuluki The Most Wanted MUA ini namanya sudah nggak asing lagi di dunia make-up Indonesia. Pasalnya Anpasuha sudah berkecimpung cukup lama di bidang tata rias, sehingga kepiawaiannya ', 3, 10000000, 7000000, '2021-06-02 16:58:03'),
(11, 5, 'Bubah Alfian MUA', 'produk/wardrobe2.jpg', 'Berawal dari kolaborasinya dengan acara American Next Top Model yang dibawakan oleh Tyra Banks, nama Bubah langsung masuk jejeran MUA top yang jadi incaran. Bubah yang piawai menyulap wajah kliennya m', 4, 12000000, 8000000, '2021-06-02 17:03:01'),
(12, 5, 'Bennu Sorumba MUA', 'produk/wardrobe3.jpg', 'MUA yang jago menutupi kekurangan wajah ini bisa membuat wajahmu jadi super glamor dan cetar membahana', 5, 15000000, 10000000, '2021-06-02 17:04:09'),
(13, 7, 'Rolls Royce', 'produk/car1.jpg', 'Mobil buatan Inggris', 5, 15000000, 10000000, '2021-06-02 17:08:06'),
(14, 7, 'Lamborghini', 'produk/car3.jpg', 'Mobil buatan Italy', 4, 15000000, 12000000, '2021-06-02 17:10:40'),
(15, 7, 'Alphard', 'produk/car2.jpg', 'Mobil buatan japan', 3, 7000000, 5000000, '2021-06-02 17:10:40'),
(16, 9, 'Silver', 'produk/silver.png', 'venue\r\ncathering\r\nwardrobe\r\nphotographer', 3, 154000000, 140000000, '2021-06-15 15:47:31'),
(17, 8, 'Gold', 'produk/gold.png', 'Venue\r\nCathering\r\nWardrobe\r\nPhotographer\r\nMusic\r\nWedding Car', 4, 280000000, 250000000, '2021-06-15 15:47:31'),
(18, 10, 'Platinum', 'produk/platinum.png', 'Venue\r\nCathering\r\nWardrobe\r\nPhotographer\r\nMusic\r\nWedding Car\r\nPhotobooth\r\nHoneymoon', 5, 560000000, 490000000, '2021-06-15 15:49:21');


-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `nilai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `name`, `message`, `email`, `nilai`) VALUES
(34, 'MARSHA &amp; DANIEL', 'Sempet ragu juga awalnya karena takutnya ga sesuai sama yang kita mau tapi ternyata sebagus itu gaun sama jas nya dibuat terimakasih banyak buat NIKAH-YUK!!!!', 'marsha@gmail.com', 5),
(35, 'SARAH &amp; JULIAN', 'Buat undangannya bagus banget sih desainnya unik harganya juga terjangkau banget buat aku dan yang pasti vendornya cepet seleseinnyaa', 'sarah@gmail.com', 5),
(36, 'MELISA &amp; RENDI', 'Mesen souvenirnya disini vendornya baik banget ga masalah kita minta ganti terus dan souvenirnya bagus banget temen temen pada bilang bagus juga', 'melisa@gmail', 5),
(37, 'RARA &amp; DIMAS', 'terimakasih yaaa nikah yukk seneng banget sama vendor dan pelayannnya sebagus itu next kalo ada yang mau nikah bakal aku suruh cek NIKAH-YUK!!', 'rara@gmail.com', 5),
(38, 'MELI &amp; RENALDI', 'Mesen makanannya disini vendornya baik banget ga masalah kita minta ganti terus dan makanannya enak banget temen temen pada bilang enak juga', 'meli@gmail.com', 5),

(40, 'Rini &amp; riko', 'puas sekali vendor nya ramah', 'rini@gmail.com', 5);

(40, 'Rini &amp; riko', 'puas sekali vendor nya ramah', 'rini@gmail.com', 5),
(47, 'Ardy Rikardo', 'Trusted', 'ardyrikardo@365.telkomuniversi', 5);


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `password`) VALUES
(21, 'Ardy Rikardo', 'ardyrikardo@365.telkomuniversity.ac.id', '082214741918', '123456'),
(25, 'Bonyfasius', 'bony@gmail.com', '082214741918', '456123'),
(30, 'Ardy Rikardo', 'info@sagconsulting.com', '022754108', '123456'),
(32, 'Ardy Rikardo', 'admin@jogja.id', '123456', '123456'),
(33, 'Ardy Rikardo', 'info@sagconsulting.com', '022754108', '789456'),
(34, 'naufal', 'naufal@gmail.com', '456789', '456123'),
(35, 'Mamah', 'mamah@gmail.com', '456789', '123456'),
(36, 'deva', 'deva@gmail.com', '456789', '123456'),
(37, 'bobon', 'bobon@gmail.com', '456789', '123456'),
(38, 'Ardy Rikardo', 'info@sagconsulting.com', '022754108', '456789'),
(39, 'lala', 'lala@gmail.com', '456123', '123456'),
(40, 'mama', 'mamah@gmail.com', '456789', '123456'),
(41, 'Cley', 'cleyapip@gmail.com', '082214741918', '123456'),
(42, 'Ramadhanu', 'dh0anu@gmail.com', '082214741918', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idcart`),
  ADD UNIQUE KEY `orderid` (`orderid`),
  ADD KEY `orderid_2` (`orderid`);

--


-- Indexes for table `cart_package`
--
ALTER TABLE `cart_package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`userid`);

--

-- Indexes for table `detailorder`
--
ALTER TABLE `detailorder`
  ADD PRIMARY KEY (`detailid`),
  ADD KEY `orderid` (`orderid`),
  ADD KEY `idproduk` (`idproduk`);

--


-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--

-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`idkonfirmasi`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--


-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id`);

--

-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`),
  ADD KEY `idkategori` (`idkategori`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`

  MODIFY `idcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

  MODIFY `idcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cart_package`
--
ALTER TABLE `cart_package`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=424;


--
-- AUTO_INCREMENT for table `detailorder`
--
ALTER TABLE `detailorder`

  MODIFY `detailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

  MODIFY `detailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;


--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`

  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`

  MODIFY `idkonfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

  MODIFY `idkonfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`

  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;


--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`

  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`

  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;


--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;


--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--


-- Constraints for table `cart_package`
--
ALTER TABLE `cart_package`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`userid`) REFERENCES `login` (`userid`);

--

-- Constraints for table `detailorder`
--
ALTER TABLE `detailorder`
  ADD CONSTRAINT `idproduk` FOREIGN KEY (`idproduk`) REFERENCES `produk` (`idproduk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderid` FOREIGN KEY (`orderid`) REFERENCES `cart` (`orderid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `userid` FOREIGN KEY (`userid`) REFERENCES `login` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `idkategori` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
