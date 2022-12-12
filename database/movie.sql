-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2022 pada 17.04
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berlangganan`
--

CREATE TABLE `berlangganan` (
  `kode_pelanggan` int(11) NOT NULL,
  `nama_langganan` varchar(50) NOT NULL,
  `jenis_paket` varchar(50) NOT NULL,
  `tgl_langganan` date NOT NULL,
  `tgl_habis` date NOT NULL,
  `harga` varchar(50) NOT NULL,
  `kota_langganan` varchar(50) NOT NULL,
  `negara_langganan` varchar(50) NOT NULL,
  `pembayaran` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `bukti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berlangganan`
--

INSERT INTO `berlangganan` (`kode_pelanggan`, `nama_langganan`, `jenis_paket`, `tgl_langganan`, `tgl_habis`, `harga`, `kota_langganan`, `negara_langganan`, `pembayaran`, `status`, `bukti`) VALUES
(1, 'weng', 'Paket Basic', '2022-12-10', '2023-01-10', 'Rp 50.000', 'tarakan', 'indonesia', 'Shoopepay', 'selesai', ''),
(2, 'rizki', 'Paket Premium', '2022-12-12', '2023-12-12', 'Rp 190.000', 'tarakan', 'indonesia', 'Alfamart&Alfamidi', 'selesai', ''),
(3, 'rizki', 'Paket Basic', '2022-12-12', '2023-01-12', 'Rp 50.000', 'tarakan', 'Indonesia', 'Ovo', 'Konfirmasi', ''),
(4, 'weng', 'Paket Basic', '2022-12-12', '2023-01-12', 'Rp 50.000', 'bandung', 'Indonesia', 'Dana', 'Konfirmasi', ''),
(5, 'rizki', 'Paket Basic', '2022-12-12', '2023-01-12', 'Rp 50.000', 'jakarta', 'Indonesia', 'Ovo', 'Konfirmasi', ''),
(6, 'rizki', 'Paket Basic', '2022-12-12', '2023-01-12', 'Rp 50.000', 'jakarta', 'Indonesia', 'Ovo', 'Konfirmasi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `kode_pelanggan` int(11) NOT NULL,
  `judul_film` varchar(128) NOT NULL,
  `genre_film` varchar(50) NOT NULL,
  `tahun_film` year(4) NOT NULL,
  `cover_film` varchar(128) NOT NULL,
  `sinopsis_film` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`kode_pelanggan`, `judul_film`, `genre_film`, `tahun_film`, `cover_film`, `sinopsis_film`) VALUES
(1, 'Boboiboy The Movie 2', 'animasi', 2019, 'film1.jpg', 'BoBoiBoy Movie 2 adalah sebuah film komedi pahlawan super animasi komputer Malaysia tahun 2019 garapan Nizam Razak. Film tersebut mengisahkan BoBoiBoy dan para temannya saat mereka berjuang melawan seorang penjahat kuno bernama Retak\'ka yang ingin mengambil alih kekuatan BoBoiBoy.'),
(2, 'danur:i can see ghost', 'Horror', 2017, 'film3.jpg', 'Mengikuti kisah Risa yang bisa berkomunikasi dengan hantu. Masalah timbul saat sang adik, Riri, secara misterius hilang tanpa jejak. Ia pun meminta bantuan pada teman-teman hantunya untuk mencarinya.'),
(3, 'Break Through', 'action', 2021, 'film2.jpg', 'Darong sebelumnya adalah pengawal terbaik di Asia Tenggara. Ketika menjalankan tugasnya, dia terlibat dalam konflik dengan penjaja narkoba besar beserta penembak jitu bawahannya, Chalong. Chalong melakukan balas dendam yang mengakibatkan kematian sahabat dan istri Darong. Darong yang terpukul memilih untuk mengundurkan diri dan bersembunyi. Lima tahun kemudian, putri Darong, Qiqi telah tumbuh dewasa, dan tanpa sengaja terlibat dalam suatu perdagangan narkoba dan diculik. Demi menyelamatkan putrinya, Darong kembali beraksi dan menemukan pelakunya, yang ternyata merupakan penjaja narkoba musuh bebuyutannya beserta bawahannya, Chalong! Kedua belah pihak bertemu kembali bagaikan takdir, dan pertempuran besar akan segera dimulai!'),
(4, 'love you my arrogance', 'Romance', 2020, 'film4.png', 'Sun adalah seorang YouTuber yang terkenal akan paras tampannya, namun memiliki sifat sombong. Kesombongannya itu sebenarnya berasal dari kemampuan istimewanya yang bisa mendengar ataupun membaca pikiran orang lain.'),
(5, 'MyDaughter\'s Psycho Friend', 'Thriller', 2020, 'film5.jpg', 'A devious and psychotic student tries to frame a new girl at school for the death of a teenager at a party.'),
(6, 'gara gara warisan', 'comedy', 2022, 'film6.jpg', 'Tiga bersaudara yang tidak pernah akur terpaksa bersaing memperebutkan warisan berupa sebuah guest house milik Dahlan, ayah mereka. Adam, anak sulung yang menyalahkan sikap keras ayahnya untuk kegagalan-kegagalan hidupnya. Laras, anak tengah yang berjiwa independen dan idealis. Dan Dicky, anak bungsu kesayangan ayahnya yang dimanja sejak kecil dan tumbuh sebagai pemuda yang bengal. Siapakah yang akan menjadi ahli waris pilihan?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(8, 'MOCHAMAD RIZKI TEGUH ESA PRATANTIO', 'raveryzx@gmail.com', 'default.jpg', '$2y$10$iR.Iz2/pjQwYxrLSOb7w3eko4gkw16dO07TYmrJ9k1jJjOIpYQFKi', 2, 1, 1669703433),
(9, 'MOCHAMAD', 'rzbndct@gmail.com', 'default.jpg', '$2y$10$dR63hopQV6.ZlL1C4sQm2.I2POcItRtv8b2eWdF80mW3JYM/9U5Hy', 1, 1, 1669703478),
(12, 'MOCHAMAD RIZKI', 'admin@gmail.com', 'default.jpg', '$2y$10$nQnHgIH4j8GA8VISY6K/SeQNNHg8I8RPZjSM2FnFzX.2Kr4GR/Fki', 1, 1, 1669706534),
(14, 'bejo', 'bejo@gmail.com', 'default.jpg', '$2y$10$2gQaaDxySopYs7APadgvtu87GTK3AHBj2esKI3b4CYkXy0DFRzdO.', 2, 1, 1670852757);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berlangganan`
--
ALTER TABLE `berlangganan`
  ADD PRIMARY KEY (`kode_pelanggan`);

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`kode_pelanggan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berlangganan`
--
ALTER TABLE `berlangganan`
  MODIFY `kode_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `kode_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
