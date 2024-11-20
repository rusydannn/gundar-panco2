-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2024 pada 14.40
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gundarpanco`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `idgaleri` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`idgaleri`, `judul`, `foto`, `deskripsi`, `tanggal`) VALUES
(1, '1', '21.png', 'Lorem Ipsum', '2024-11-19 18:17:45'),
(2, '2', '22.png', 'Lorem Ipsum', '2024-11-19 18:17:45'),
(3, '3', '27.png', 'Lorem Ipsum', '2024-11-19 18:17:45'),
(4, '4', '24.png', 'Lorem Ipsum', '2024-11-19 18:17:45'),
(5, '5', '25.png', 'Lorem Ipsum', '2024-11-19 18:17:45'),
(6, '6', '26.png', 'Lorem Ipsum', '2024-11-19 18:17:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `idnews` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `foto` text NOT NULL,
  `penulis` text NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `hot_news` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`idnews`, `judul`, `isi`, `foto`, `penulis`, `tanggal`, `hot_news`) VALUES
(1, 'JADWAL PERTANDINGAN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '3.png', 'Admin', '2024-11-19', 1),
(2, 'ALDI TAHIR KEOK', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2.png', 'Admin', '2024-11-19', 1),
(3, 'ARMWESTLING', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1.png', 'Admin', '2024-11-19', 1),
(4, 'KEJUARAAN PANCO', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '5.png', 'Admin', '2024-11-19', 0),
(5, 'PERAYAAN SUMPAH PEMUDA', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '4.png', 'ADMIN', '2024-11-19', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rules`
--

CREATE TABLE `rules` (
  `idrules` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rules`
--

INSERT INTO `rules` (`idrules`, `judul`, `isi`, `tanggal`) VALUES
(1, 'Aturan Setup Grip', 'Genggamannya telapak tangan ke telapak tangan, genggaman pada ibu jari,buku jari ibu jari harus terlihat. Tangan yang dicengkeram seharusnya menjadi rata di dataran pada jari telunjuk. Tangan yang bebas akan menggenggam pasak tangan yang disediakan di meja tepian. Lengan ini mungkin menyentuh bagian atas meja atau tidak. Kuku jari tangan sebaiknya dipangkas agar tidak untuk melukai lawanmu. Stickum/ rosin/ kapur diperbolehkan. Akan ada lebar tangan antara bahu dan lengan masing-masing peserta juga antara dagu dan tangan sebelum memulai\r\n\r\nBahu akan dijaga tetap sejajar dengan meja. Mereka mungkin miring ke kedua sisi sebelum memulai.\r\n\r\nIsyarat yang diberikan oleh Wasit Pertama adalah “READY...GO!” dalam irama yang tidak ditentukan. Pada akhirnya\r\npertandingan wasit akan mengatakan “Berhenti” dan menunjukkan pemenang dengan mengangkat tangannya ke arah\r\ndia. Segala upaya harus dilakukan oleh wasit agar para peserta mengetahui pertandingan tersebut\r\nberhenti.\r\nPin adalah ketika bagian mana pun dari garis alami pergelangan tangan hingga ujung jari, menyentuh atau berada di bawah sentuhan\r\nbantalan.\r\n\r\nKaki peserta dapat dililitkan pada kaki meja atau disangga pada kaki meja yang berlawanan\r\nsebelum pertandingan dimulai, asalkan mereka tidak mengganggu lawannya. Kaki bisa tidak menyentuh tanah selama kompetisi dan kaki dapat digerakkan dengan cara apa pun asalkan\r\njangan mengganggu lawan mereka.', '2024-11-19 17:51:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shop`
--

CREATE TABLE `shop` (
  `idshop` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `rating` text NOT NULL,
  `link_pembelian` text NOT NULL,
  `tanggal` datetime DEFAULT current_timestamp(),
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `shop`
--

INSERT INTO `shop` (`idshop`, `nama_produk`, `deskripsi`, `rating`, `link_pembelian`, `tanggal`, `foto`) VALUES
(1, 'Multispinner Arm Wrestling Handle Devon Larrat | Alat Equipment Latihan Panco ', 'Alat Latihan Panco   Pegangan yang benar-benar UNIK untuk melatih kekuatan Cupping & jari yang TIDAK DAPAT dibandingkan dengan pegangan lain.  Pegangan dengan diameter 75mm (3″) terbuat dari besi yang ringan. Jika Anda pernah menggunakan pegangan ini dan membandingkannya dengan produk serupa atau varian buatan sendiri, Anda akan memahami perbedaannya! Untuk cara pakai dan kegunaannya anda dapat melihat Video YouTube \" Devon Larrat Multispinner \". Alat ini benar2 selalu dia pakai untuk latihan. Dan akan sangat berguna bagi anda sendiri untuk cepat menjadi pemanco Yang kuat!', '5', 'https://id.shp.ee/6saXGwu', '2024-11-19 18:34:15', '31.png'),
(2, 'UPGRADE!!! STRAP ARM WRESTLING TALI PANCO ', 'Strap Arm Wrestling Fungsi Untuk mengikat tangan ketika bertanding panco agar tangan tidak terlepas. ukuran lebar 2,5cm panjang 1m Lebih Buckle Terbuat dari besi campur jadi kuat tidak akan patah..', '4,9', 'https://id.shp.ee/6saXGwu', '2024-11-19 18:42:10', '32.png'),
(3, 'STRAP GYM FITNES | ANGKAT BEBAN LOADING PIN | TRICEP | ARm WRESTLING HANDLE ', 'Strap Gym yang bisa digunakan untuk berbagai Aktifitas Gym Fitnes, Seperti : Angkat Loading pin, Latihan Tricep, Latihan Arm Wrestling (Panco) dan lain lain.  - Lebar tali : 3,8cm - Panjang : 29cm - Terdapat Busa Setebal 3mm agar tangan tidak sakit', '4,9', 'https://id.shp.ee/2Dbr1Y7', '2024-11-19 18:42:10', '33.png'),
(4, 'Meja Panco | Bongkar Pasang | Arm Wrestling Table Portable   ⭐4,9', 'Kuat dan kokoh. Cocok Untuk Latihan Dan Kompetisi. Jika Kompetisi harap disediakan Lantai bordes agar meja Bisa terkunci dan .tidak terangkat Ukuran sesuai Ukuran WAF Dalam Paket Berisi : - Satu set meja - Elbow Pad - Karet Kaki - Baut2  Cocok Untuk Yang memiliki Hoby Panco atau gulat tangan. Dengan Menggunakan Meja Khusus panco akan meminimalilis terjadi nya cedera tangan.   ', '4,9', 'https://id.shp.ee/zTeBNuq', '2024-11-19 18:42:10', '34.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tutorial`
--

CREATE TABLE `tutorial` (
  `idtutorial` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `foto` text NOT NULL,
  `url_video` text NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tutorial`
--

INSERT INTO `tutorial` (`idtutorial`, `judul`, `isi`, `foto`, `url_video`, `tanggal`) VALUES
(1, 'TUTORIAL 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '10.png', 'https://youtu.be/SXDqrBojJys?si=pBKaIKFwIfwpZYPV', '2024-11-19'),
(2, 'TUTORIAL 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '12.png', 'https://youtu.be/SXDqrBojJys?si=pBKaIKFwIfwpZYPV', '2024-11-19'),
(3, 'TUTORIAL 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '13.png', 'https://youtu.be/SXDqrBojJys?si=pBKaIKFwIfwpZYPV', '2024-11-19'),
(4, 'TUTORIAL 4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '14.png', 'https://youtu.be/SXDqrBojJys?si=pBKaIKFwIfwpZYPV', '2024-11-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `tempatlahir` text NOT NULL,
  `tanggallahir` date NOT NULL,
  `nohp` text NOT NULL,
  `alamat` text NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `nama`, `email`, `password`, `tempatlahir`, `tanggallahir`, `nohp`, `alamat`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '-', '2024-07-08', '0', 'asd', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`idgaleri`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idnews`);

--
-- Indeks untuk tabel `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`idrules`);

--
-- Indeks untuk tabel `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`idshop`);

--
-- Indeks untuk tabel `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`idtutorial`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `idgaleri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `idnews` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `rules`
--
ALTER TABLE `rules`
  MODIFY `idrules` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `shop`
--
ALTER TABLE `shop`
  MODIFY `idshop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `idtutorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
