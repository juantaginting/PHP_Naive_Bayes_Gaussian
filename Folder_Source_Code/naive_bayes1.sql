-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Agu 2023 pada 11.18
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naive_bayes1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_training`
--

CREATE TABLE `data_training` (
  `id_data` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `matematika` int(3) NOT NULL,
  `ipa` int(3) NOT NULL,
  `ips` int(3) NOT NULL,
  `pkn` int(3) NOT NULL,
  `indo` int(3) NOT NULL,
  `agama` int(3) NOT NULL,
  `muatan_lokal` int(3) NOT NULL,
  `status` enum('Negeri','Swasta') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_training`
--

INSERT INTO `data_training` (`id_data`, `id`, `nama_pengguna`, `nama`, `matematika`, `ipa`, `ips`, `pkn`, `indo`, `agama`, `muatan_lokal`, `status`) VALUES
(4, 3, 'Juju', 'Reja Rifaldy Ginting', 65, 70, 70, 80, 70, 78, 78, 'Swasta'),
(7, 3, 'Juju', 'Jastra Wandi Nadeak', 73, 73, 73, 73, 72, 78, 77, 'Negeri'),
(8, 3, 'Juju', 'Franciscus Sihombing', 65, 70, 65, 70, 70, 72, 72, 'Negeri'),
(11, 2, 'Jojo', 'Nursyarifah Karo-Karo', 80, 85, 80, 85, 85, 85, 85, 'Negeri'),
(17, 2, 'Jojo', 'Emia Sembiring', 70, 75, 75, 80, 70, 75, 80, 'Negeri'),
(40, 3, 'Juju', 'Revan Situmorang', 65, 68, 68, 71, 70, 73, 80, 'Negeri'),
(42, 3, 'Juju', 'Aleksa Putra Karo-Karo', 68, 76, 70, 72, 72, 71, 80, 'Negeri'),
(43, 3, 'Juju', 'Andika Pratama Situmorang', 65, 70, 65, 68, 70, 75, 72, 'Negeri'),
(45, 3, 'Juju', 'Ronal Tondang', 61, 63, 65, 66, 67, 73, 66, 'Swasta'),
(63, 2, 'Jojo', 'Egi Lajorta Ginting', 73, 73, 75, 75, 70, 75, 76, 'Negeri'),
(67, 2, 'Jojo', 'Roulita Tondang', 77, 80, 78, 82, 78, 86, 88, 'Negeri'),
(69, 2, 'Jojo', 'Devi Anjelita Br Sembiring', 75, 78, 78, 79, 78, 80, 85, 'Negeri'),
(70, 2, 'Jojo', 'Dita Br Pinem', 77, 80, 82, 83, 80, 86, 88, 'Negeri'),
(72, 2, 'Jojo', 'Arhan Tarigan', 70, 85, 80, 79, 80, 72, 85, 'Negeri'),
(73, 2, 'Jojo', 'Elphyta Sauli Br Manalu', 78, 85, 81, 85, 85, 86, 85, 'Negeri'),
(75, 2, 'Jojo', 'Selin Erika Ginting', 72, 78, 81, 83, 80, 72, 85, 'Negeri'),
(81, 2, 'Jojo', 'Daniel Simamora', 80, 85, 85, 80, 85, 80, 80, 'Negeri'),
(83, 2, 'Jojo', 'Harta Sastra Pinem', 65, 70, 68, 68, 75, 75, 80, 'Negeri'),
(87, 2, 'Jojo', 'Monika Simbolon', 89, 87, 85, 85, 87, 85, 80, 'Negeri'),
(88, 2, 'Jojo', 'Erwina Limbong', 71, 75, 75, 74, 73, 76, 77, 'Swasta'),
(89, 2, 'Jojo', 'Daniel Sembiring', 71, 73, 79, 80, 76, 83, 74, 'Swasta'),
(90, 2, 'Jojo', 'Valerie Clariza Br Sebayang', 87, 88, 90, 87, 88, 89, 90, 'Negeri'),
(91, 2, 'Jojo', 'Gery Evan Nicolas Pinem', 82, 86, 88, 87, 86, 88, 89, 'Negeri'),
(92, 2, 'Jojo', 'Derel Kristian Sodipta Solin', 76, 78, 78, 81, 77, 79, 87, 'Swasta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(18, 'galeri1686007375.jpg', 'File Mentah Dataset', '2023-05-11 11:21:40', '2023-06-06 06:22:55'),
(22, 'galeri1686007287.jpg', 'File Mentah Dataset', '2023-06-03 11:48:34', '2023-06-06 06:21:27'),
(24, 'galeri1686007461.png', 'Database PhpMyAdmin', '2023-06-05 23:24:21', NULL),
(25, 'galeri1686007607.png', 'Tampilan Visual Studio', '2023-06-05 23:26:47', NULL),
(26, 'galeri1686007746.png', 'Foto Naive Bayes', '2023-06-05 23:29:06', '2023-06-06 13:47:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_prediksi`
--

CREATE TABLE `hasil_prediksi` (
  `id_hasil` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `total_prob_negeri` float NOT NULL,
  `total_prob_swasta` float NOT NULL,
  `hasil_prediksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hasil_prediksi`
--

INSERT INTO `hasil_prediksi` (`id_hasil`, `nama_siswa`, `total_prob_negeri`, `total_prob_swasta`, `hasil_prediksi`) VALUES
(174, 'Saka Pinem', 0.000000000357894, 0.0000000000000107136, 'Negeri'),
(175, 'Firman Alades Padang', 0.000000000552458, 0.000000000000242469, 'Negeri'),
(176, 'Zerikho Aditia Karo-Karo', 0.00000000219958, 0.0000000000601166, 'Negeri'),
(177, 'Meriati Kristina Solin', 0.00000000113622, 0.0000000000541429, 'Negeri'),
(178, 'Putri Pinem', 0.000000000450788, 0.00000000018057, 'Negeri'),
(179, 'Clara Spanya Padang', 0.000000000465129, 0.00000000000000706478, 'Negeri'),
(180, 'Brema Karo-Karo', 0.000000000193146, 0.000000000330274, 'Swasta'),
(181, 'Jona Cristian Ginting', 0.000000000313855, 0.00000000000000313352, 'Negeri'),
(182, 'Charissa Putri Pinem', 0.0000000000216746, 0.0000000000522511, 'Swasta'),
(183, 'Join Imanuel Depari', 0.0000000000591988, 0.0000000000111316, 'Negeri'),
(184, 'Rifky Aganta Pinem', 0.00000000135458, 0.0000000000143064, 'Negeri'),
(185, 'Brikzen Stiven Munthe', 0.00000000000019425, 0.000000000000440409, 'Swasta'),
(186, 'Selvi Br Tarigan', 0.000000000150624, 0.0000000000162178, 'Negeri'),
(189, 'Putra Septianta Ginting', 0.000000000211553, 0.000000000112874, 'Negeri'),
(190, 'Sifa Naila Azhari Berutu', 0.0000000000614898, 0.000000000827508, 'Swasta'),
(191, 'Angga Eddi Suranta Barus', 0.0000000000956541, 0.000000000228022, 'Swasta'),
(192, 'Cesia Br Solin', 0.000000000358294, 0.00000000262325, 'Swasta'),
(194, 'Rian Delon', 0.000000000108321, 0.0000000000178789, 'Negeri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_sebenarnya`
--

CREATE TABLE `hasil_sebenarnya` (
  `id_hasil` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `hasil_sebenarnya` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hasil_sebenarnya`
--

INSERT INTO `hasil_sebenarnya` (`id_hasil`, `nama_siswa`, `hasil_sebenarnya`) VALUES
(110, 'Firman Alades Padang', 'Negeri'),
(111, 'Zerikho Aditia Karo-Karo', 'Negeri'),
(112, 'Meriati Kristina Solin', 'Negeri'),
(133, 'Putri Pinem', 'Negeri'),
(134, 'Clara Spanya Padang', 'Negeri'),
(135, 'Saka Pinem', 'Negeri'),
(136, 'Brema Karo-Karo', 'Negeri'),
(137, 'Jona Cristian Ginting', 'Negeri'),
(138, 'Charissa Putri Pinem', 'Negeri'),
(139, 'Join Imanuel Depari', 'Negeri'),
(140, 'Rifky Aganta Pinem', 'Negeri'),
(141, 'Brikzen Stiven Munthe', 'Negeri'),
(142, 'Selvi br Tarigan', 'Negeri'),
(143, 'Ronal Sembiring', 'Negeri'),
(144, 'Rian Delon', 'Negeri'),
(145, 'Putra Septianta Ginting', 'Negeri'),
(146, 'Sifa Naila Azhari Berutu', 'Swasta'),
(147, 'Angga Eddi Suranta Barus', 'Swasta'),
(148, 'Cesia br Solin', 'Swasta'),
(149, 'Juanta Ginting', 'Negeri'),
(150, 'Randi Saragih', 'Negeri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `keterangan`, `gambar`, `created_at`, `updated_at`, `created_by`) VALUES
(4, 'Langkah-Langkah Pengklasifikasian Naive Bayes', '<p>a. Hitung nilai varians dan mean dari atribut numerik dalam data training.<br>b. Gunakan rumus Gaussian untuk menghitung probabilitas atribut numerik dalam setiap kelas.<br>c. Gunakan rumus Naive Bayes untuk menghitung probabilitas kelas diberikan atribut data uji.<br>d. Pilih kelas dengan probabilitas tertinggi sebagai hasil prediksi.</p>', 'informasi1686008515.png', '2023-03-13 10:11:36', '2023-06-06 06:48:00', 20),
(5, 'Bayes Gaussian', '<p>Metode Gaussian, atau lebih dikenal sebagai Gaussian Naive Bayes, adalah sebuah metode klasifikasi yang merupakan variasi dari algoritma Naive Bayes. Metode ini mengasumsikan bahwa fitur-fitur yang digunakan dalam klasifikasi memiliki distribusi normal (Gaussian).</p>\r\n<p style=\"text-align: justify;\">Dalam metode Gaussian Naive Bayes, diasumsikan bahwa setiap kelas memiliki distribusi normal independen. Dengan kata lain, setiap fitur dalam kelas tersebut mengikuti distribusi Gaussian, dan fitur-fitur tersebut dianggap saling independen.</p>', 'informasi1686008214.png', '2023-05-11 10:38:27', '2023-06-06 06:37:41', 20),
(7, 'Pengertian Bayes', '<p style=\"text-align: justify;\">Pengertian Bayes menurut ahli adalah sebuah metode statistika yang digunakan untuk menghitung probabilitas suatu kejadian berdasarkan informasi yang sudah ada sebelumnya. Metode Bayes ini berdasarkan pada teorema yang ditemukan oleh seorang matematikawan dan pendeta Inggris bernama Thomas Bayes.</p>\r\n<p style=\"text-align: justify;\">Thomas Bayes adalah seorang ahli matematika yang hidup pada abad ke-18. Ia dikenal atas kontribusinya dalam bidang probabilitas dan statistika. Penemuannya yang paling terkenal adalah teorema Bayes, yang menjadi dasar dari metode statistik yang dikenal dengan nama Naive Bayes. Teorema Bayes memberikan cara untuk memperbarui probabilitas suatu hipotesis dengan mempertimbangkan bukti baru atau informasi sebelumnya.</p>', 'informasi1686007969.png', '2023-06-05 23:32:49', '2023-06-06 06:34:07', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama_pengguna` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` enum('Super Admin','Admin') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_pengguna`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Juanta', 'jun', '202cb962ac59075b964b07152d234b70', 'Super Admin', '2023-05-29 20:53:08', '2023-05-29 22:52:39'),
(2, 'Jojo', 'admin1', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2023-05-29 20:54:04', NULL),
(3, 'Juju', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2023-06-06 00:12:47', '2023-06-06 07:12:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna_data_training`
--

CREATE TABLE `pengguna_data_training` (
  `id_pengguna_data_training` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `id_data` int(11) NOT NULL,
  `waktu_tambah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `probabilitas_negeri`
--

CREATE TABLE `probabilitas_negeri` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `prob_negeri_matematika` float NOT NULL,
  `prob_negeri_ipa` float NOT NULL,
  `prob_negeri_ips` float NOT NULL,
  `prob_negeri_pkn` float NOT NULL,
  `prob_negeri_indo` float NOT NULL,
  `prob_negeri_agama` float NOT NULL,
  `prob_negeri_muatan_lokal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `probabilitas_negeri`
--

INSERT INTO `probabilitas_negeri` (`id`, `nama_siswa`, `prob_negeri_matematika`, `prob_negeri_ipa`, `prob_negeri_ips`, `prob_negeri_pkn`, `prob_negeri_indo`, `prob_negeri_agama`, `prob_negeri_muatan_lokal`) VALUES
(173, 'Saka Pinem', 0.0488624, 0.0373869, 0.0265057, 0.0613005, 0.0453591, 0.052023, 0.0645441),
(174, 'Firman Alades Padang', 0.0488624, 0.0613432, 0.0507157, 0.0583595, 0.0583335, 0.0345814, 0.0389943),
(175, 'Zerikho Aditia Karo-Karo', 0.0557895, 0.0613432, 0.0507157, 0.0628056, 0.0613054, 0.0644143, 0.0645441),
(176, 'Meriati Kristina Solin', 0.0468714, 0.0572254, 0.0476932, 0.0539447, 0.0553333, 0.058234, 0.0645441),
(177, 'Putri Pinem', 0.0405217, 0.0370841, 0.0537974, 0.0311031, 0.0553333, 0.0572628, 0.0714712),
(178, 'Clara Spanya Padang', 0.0557895, 0.0533173, 0.0309448, 0.0613005, 0.0340857, 0.0473293, 0.0645441),
(179, 'Brema Karo-Karo', 0.0285723, 0.0530843, 0.0380412, 0.0539447, 0.0403845, 0.0271571, 0.0714712),
(180, 'Jona Cristian Ginting', 0.0405217, 0.0373869, 0.0309448, 0.0541927, 0.0340857, 0.0640542, 0.0714712),
(181, 'Charissa Putri Pinem', 0.0552123, 0.0530843, 0.0309448, 0.0254666, 0.0346834, 0.0620668, 0.00550639),
(182, 'Join Imanuel Depari', 0.0488624, 0.0259227, 0.0398792, 0.0539447, 0.0403845, 0.0215976, 0.0314631),
(183, 'Rifky Aganta Pinem', 0.0405217, 0.0533173, 0.0507157, 0.0613005, 0.0553333, 0.0644143, 0.0714712),
(184, 'Brikzen Stiven Munthe', 0.0285723, 0.00952128, 0.0106861, 0.00644956, 0.00847799, 0.0215976, 0.0714712),
(185, 'Selvi Br Tarigan', 0.0552123, 0.0485083, 0.0380412, 0.0254666, 0.0553333, 0.0271571, 0.0487984),
(187, 'Ronal Sembiring', 0.0468714, 0.0259227, 0.0507157, 0.043054, 0.0606613, 0.0215976, 0.0239036),
(188, 'Rian Delon', 0.0504891, 0.0613432, 0.0398792, 0.0370525, 0.0346834, 0.0215976, 0.0399131),
(189, 'Putra Septianta Ginting', 0.0560512, 0.0370841, 0.0462162, 0.0373694, 0.0290923, 0.0396423, 0.0645441),
(193, 'Sifa Naila Azhari Berutu', 0.02403, 0.0259227, 0.0246945, 0.0254666, 0.0403845, 0.0640542, 0.0766468),
(194, 'Angga Eddi Suranta Barus', 0.02403, 0.0530843, 0.0537974, 0.0254666, 0.0290923, 0.0332507, 0.0714712),
(195, 'Cesia Br Solin', 0.0380704, 0.0259227, 0.0335595, 0.0539447, 0.0553333, 0.0640542, 0.0714712),
(197, 'Juanta Ginting', 0.00207926, 0.00698428, 0.020598, 0.0581686, 0.0233065, 0.0284027, 0.0000000423266);

-- --------------------------------------------------------

--
-- Struktur dari tabel `probab_swasta`
--

CREATE TABLE `probab_swasta` (
  `id` float NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `prob_swasta_matematika` float NOT NULL,
  `prob_swasta_ipa` float NOT NULL,
  `prob_swasta_ips` float NOT NULL,
  `prob_swasta_pkn` float NOT NULL,
  `prob_swasta_indo` float NOT NULL,
  `prob_swasta_agama` float NOT NULL,
  `prob_swasta_muatan_lokal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `probab_swasta`
--

INSERT INTO `probab_swasta` (`id`, `nama_siswa`, `prob_swasta_matematika`, `prob_swasta_ipa`, `prob_swasta_ips`, `prob_swasta_pkn`, `prob_swasta_indo`, `prob_swasta_agama`, `prob_swasta_muatan_lokal`) VALUES
(179, 'Saka Pinem', 0.0162445, 0.00279183, 0.00422151, 0.0562161, 0.00215491, 0.0842913, 0.0263053),
(180, 'Firman Alades Padang', 0.0162445, 0.0374215, 0.034444, 0.0491806, 0.0148345, 0.00560939, 0.0135823),
(181, 'Zerikho Aditia Karo-Karo', 0.03779, 0.0374215, 0.034444, 0.0622909, 0.0374054, 0.0966542, 0.0263053),
(182, 'Meriati Kristina Solin', 0.0743073, 0.015475, 0.0265914, 0.0688078, 0.0871124, 0.0539038, 0.0263053),
(183, 'Putri Pinem', 0.00770713, 0.0779593, 0.0673494, 0.0462153, 0.0871124, 0.103973, 0.051169),
(184, 'Clara Spanya Padang', 0.03779, 0.0106806, 0.00656111, 0.0562161, 0.000414922, 0.0208698, 0.0263053),
(185, 'Brema Karo-Karo', 0.0661055, 0.0641506, 0.0685879, 0.0688078, 0.105878, 0.0146211, 0.051169),
(186, 'Jona Cristian Ginting', 0.00770713, 0.00279183, 0.00656111, 0.0417082, 0.000414922, 0.120315, 0.051169),
(187, 'Charissa Putri Pinem', 0.0552661, 0.0641506, 0.00656111, 0.038709, 0.0977885, 0.0755497, 0.0377023),
(188, 'Join Imanuel Depari', 0.0162445, 0.0733341, 0.0142074, 0.0688078, 0.105878, 0.00751132, 0.0576919),
(189, 'Rifky Aganta Pinem', 0.00770713, 0.0106806, 0.034444, 0.0562161, 0.0871124, 0.0966542, 0.051169),
(190, 'Brikzen Stiven Munthe', 0.0661055, 0.0410171, 0.015226, 0.0100089, 0.0133107, 0.00751132, 0.051169),
(191, 'Selvi Br Tarigan', 0.0552661, 0.00709516, 0.0685879, 0.038709, 0.0871124, 0.0146211, 0.0587076),
(193, 'Ronal Sembiring', 0.0743073, 0.0733341, 0.034444, 0.0600094, 0.0532962, 0.00751132, 0.0553495),
(194, 'Rian Delon', 0.0698308, 0.0374215, 0.0142074, 0.0534878, 0.0977885, 0.00751132, 0.0588358),
(195, 'Putra Septianta Ginting', 0.046543, 0.0779593, 0.0759563, 0.0211097, 0.0840214, 0.0421339, 0.0263053),
(199, 'Sifa Naila Azhari Berutu', 0.0585944, 0.0733341, 0.0447785, 0.038709, 0.105878, 0.120315, 0.0418643),
(200, 'Angga Eddi Suranta Barus', 0.0585944, 0.0641506, 0.0673494, 0.038709, 0.0840214, 0.0259788, 0.051169),
(201, 'Cesia Br Solin', 0.0754017, 0.0733341, 0.061709, 0.0688078, 0.0871124, 0.120315, 0.051169),
(203, 'Juanta Ginting', 0.00382056, 0.0322386, 0.0361151, 0.0703219, 0.000059839, 0.00253616, 0.000247463);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_training`
--
ALTER TABLE `data_training`
  ADD PRIMARY KEY (`id_data`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_prediksi`
--
ALTER TABLE `hasil_prediksi`
  ADD PRIMARY KEY (`id_hasil`),
  ADD UNIQUE KEY `nama_siswa` (`nama_siswa`);

--
-- Indeks untuk tabel `hasil_sebenarnya`
--
ALTER TABLE `hasil_sebenarnya`
  ADD PRIMARY KEY (`id_hasil`) USING BTREE,
  ADD UNIQUE KEY `nama_siswa` (`nama_siswa`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna_data_training`
--
ALTER TABLE `pengguna_data_training`
  ADD PRIMARY KEY (`id_pengguna_data_training`),
  ADD KEY `id` (`id`),
  ADD KEY `id_data` (`id_data`);

--
-- Indeks untuk tabel `probabilitas_negeri`
--
ALTER TABLE `probabilitas_negeri`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama_siswa`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `probab_swasta`
--
ALTER TABLE `probab_swasta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_training`
--
ALTER TABLE `data_training`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `hasil_prediksi`
--
ALTER TABLE `hasil_prediksi`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT untuk tabel `hasil_sebenarnya`
--
ALTER TABLE `hasil_sebenarnya`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengguna_data_training`
--
ALTER TABLE `pengguna_data_training`
  MODIFY `id_pengguna_data_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `probabilitas_negeri`
--
ALTER TABLE `probabilitas_negeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT untuk tabel `probab_swasta`
--
ALTER TABLE `probab_swasta`
  MODIFY `id` float NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hasil_prediksi`
--
ALTER TABLE `hasil_prediksi`
  ADD CONSTRAINT `fk_hasil_sebenarnya` FOREIGN KEY (`nama_siswa`) REFERENCES `hasil_sebenarnya` (`nama_siswa`),
  ADD CONSTRAINT `fk_probabilitas_negeri` FOREIGN KEY (`nama_siswa`) REFERENCES `probabilitas_negeri` (`nama_siswa`),
  ADD CONSTRAINT `fk_probabilitas_swasta` FOREIGN KEY (`nama_siswa`) REFERENCES `probab_swasta` (`nama_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
