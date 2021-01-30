-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2020 pada 19.55
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1. admin 2.guru 3.siswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 1),
(11, 'guru', 'guru', 2),
(12, 'siswa', 'siswa', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_guru_mapel`
--

CREATE TABLE `data_guru_mapel` (
  `nip` int(11) NOT NULL,
  `nama_guru` varchar(30) NOT NULL,
  `umur` int(2) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `bidang_ilmu` varchar(30) NOT NULL,
  `golongan` varchar(30) NOT NULL,
  `statuspengajar` varchar(30) NOT NULL,
  `gurukelas` varchar(30) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_guru_mapel`
--

INSERT INTO `data_guru_mapel` (`nip`, `nama_guru`, `umur`, `jenis_kelamin`, `bidang_ilmu`, `golongan`, `statuspengajar`, `gurukelas`, `notelp`, `email`) VALUES
(151001, 'Amir', 40, 'Laki-laki', 'Fisika', 'GOLONGAN I', 'Pegawai Negeri Sipil', 'X', '08123773733', 'amir@gmail.com'),
(151002, 'Hadi', 43, 'Laki-laki', 'Biologi', 'GOLONGAN II', 'Pegawai Negeri Sipil', 'XI', '082942474004', 'hadi@gmail.com'),
(151003, 'Indah', 46, 'Perempuan', 'Matematika', 'GOLONGAN II', 'Pegawai Negeri Sipil', 'XI', '08664747344', 'indah@gmail.com'),
(151004, 'Aisyah', 39, 'Perempuan', 'Agama', '', 'Honorer', 'X', '08937377373', 'aisyah@gmail.com'),
(151005, 'Andy', 58, 'Laki-laki', 'Kimia', 'GOLONGAN III', 'Pegawai Negeri Sipil', 'XI', '08262636363', 'andy@gmail.com'),
(151007, 'Susi', 35, 'Perempuan', 'Bahasa Indonesia', 'GOLONGAN II', 'Pegawai Negeri Sipil', 'X', '0836363622', 'susi@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kelas`
--

CREATE TABLE `data_kelas` (
  `no_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `tahun_pelajaran` varchar(20) NOT NULL,
  `program_studi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kelas`
--

INSERT INTO `data_kelas` (`no_kelas`, `nama_kelas`, `semester`, `tahun_pelajaran`, `program_studi`) VALUES
(1, 'X', 'I (SATU)', '2019/2020', 'IPA'),
(2, 'XI', 'I (SATU)', '2019/2020', 'IPA'),
(3, 'XII', 'I (SATU)', '2019/2020', 'IPA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mapel`
--

CREATE TABLE `data_mapel` (
  `kode_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL,
  `semester_mapel` varchar(20) NOT NULL,
  `tahun_pelajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_mapel`
--

INSERT INTO `data_mapel` (`kode_mapel`, `nama_mapel`, `semester_mapel`, `tahun_pelajaran`) VALUES
(8, 'Seni Budaya', 'I (SATU)', '2019/2020'),
(11, 'Fisika ', 'I (SATU)', '2019/2020'),
(22, 'Biologi', 'I (SATU)', '2019/2020'),
(33, 'Matematika', 'I (SATU)', '2019/2020'),
(44, 'Agama', 'I (SATU)', '2019/2020'),
(55, 'Kimia', 'I (SATU)', '2019/2020'),
(66, 'English', 'I (SATU)', '2019/2020'),
(77, 'Bahasa Indonesia', 'I (SATU)', '2019/2020'),
(99, 'Kewarganegaraan', 'I (SATU)', '2019/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_nilai_harian`
--

CREATE TABLE `data_nilai_harian` (
  `id` int(11) NOT NULL,
  `no_absen` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `programstudi` varchar(30) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `tahun_pelajaran` varchar(20) NOT NULL,
  `kode_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL,
  `nilai_ulangan1` double NOT NULL,
  `nilai_ulangan2` double NOT NULL,
  `nila_ulangan3` double NOT NULL,
  `rata_rata_ulangan` double NOT NULL,
  `nilai_tugas1` double NOT NULL,
  `nilai_tugas2` double NOT NULL,
  `nilai_tugas3` double NOT NULL,
  `nilai_harian` double NOT NULL,
  `rata_rata_tugas` double NOT NULL,
  `nama_guru` varchar(30) NOT NULL,
  `nip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_nilai_harian`
--

INSERT INTO `data_nilai_harian` (`id`, `no_absen`, `nis`, `nama_siswa`, `kelas`, `programstudi`, `semester`, `tahun_pelajaran`, `kode_mapel`, `nama_mapel`, `nilai_ulangan1`, `nilai_ulangan2`, `nila_ulangan3`, `rata_rata_ulangan`, `nilai_tugas1`, `nilai_tugas2`, `nilai_tugas3`, `nilai_harian`, `rata_rata_tugas`, `nama_guru`, `nip`) VALUES
(11, 1, 121001, 'Akbar', 'X', 'IPA', 'I (SATU)', '2019/2020', 11, 'Fisika ', 80, 70, 80, 76, 60, 79, 60, 80, 66, 'Amir', 151001),
(12, 1, 121001, 'Akbar', 'X', 'IPA', 'I (SATU)', '2019/2020', 22, 'Biologi', 80, 78, 89, 82, 76, 78, 90, 75, 81, 'Hadi', 151002),
(13, 1, 121001, 'Akbar', 'X', 'IPA', 'I (SATU)', '2019/2020', 33, 'Matematika', 70, 60, 80, 70, 88, 76, 77, 78, 80, 'Indah', 151003),
(14, 1, 121001, 'Akbar', 'X', 'IPA', 'I (SATU)', '2019/2020', 44, 'Agama', 79, 70, 85, 78, 81, 82, 88, 89, 83, 'Aisyah', 151004),
(15, 1, 121001, 'Akbar', 'X', 'IPA', 'I (SATU)', '2019/2020', 55, 'Kimia', 78, 88, 77, 81, 67, 89, 88, 78, 81, 'Andy', 151005),
(16, 1, 121001, 'Akbar', 'X', 'IPA', 'I (SATU)', '2019/2020', 66, 'English', 87, 88, 77, 84, 87, 67, 89, 90, 81, 'Sri', 121006),
(17, 1, 121001, 'Akbar', 'X', 'IPA', 'I (SATU)', '2019/2020', 77, 'Bahasa Indonesia', 89, 87, 65, 80, 76, 90, 87, 88, 84, 'Susi', 151007);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_nilai_siswa_permapel`
--

CREATE TABLE `data_nilai_siswa_permapel` (
  `id` int(11) NOT NULL,
  `no_absen` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `kode_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL,
  `nilaiharian` double NOT NULL,
  `nilai_uts` double NOT NULL,
  `nilai_uas` double NOT NULL,
  `nilaiakhir_permapel` double NOT NULL,
  `standar_nilai_kriteria` double NOT NULL,
  `nama_guru` varchar(30) NOT NULL,
  `nip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_nilai_siswa_permapel`
--

INSERT INTO `data_nilai_siswa_permapel` (`id`, `no_absen`, `nis`, `nama_siswa`, `kelas`, `semester`, `tahun_ajaran`, `kode_mapel`, `nama_mapel`, `nilaiharian`, `nilai_uts`, `nilai_uas`, `nilaiakhir_permapel`, `standar_nilai_kriteria`, `nama_guru`, `nip`) VALUES
(6, 1, 121001, 'Akbar', 'X', 'I (SATU)', '2019/2020', 33, 'Matematika', 78, 69, 80, 75, 75, 'Indah', 151003),
(7, 1, 121001, 'Akbar', 'X', 'I (SATU)', '2019/2020', 55, 'Kimia', 78, 87, 90, 85, 75, 'Andy', 151005),
(8, 1, 121001, 'Akbar', 'X', 'I (SATU)', '2019/2020', 44, 'Agama', 89, 78, 88, 85, 75, 'Aisyah', 151004),
(9, 1, 121001, 'Akbar', 'X', 'I (SATU)', '2019/2020', 77, 'Bahasa Indonesia', 88, 67, 86, 80, 75, 'Susi', 151007),
(10, 1, 121001, 'Akbar', 'X', 'I (SATU)', '2019/2020', 22, 'Biologi', 75, 78, 84, 79, 70, 'Hadi', 151002),
(11, 1, 121001, 'Akbar', 'X', 'I (SATU)', '2019/2020', 11, 'Fisika', 80, 79, 68, 75, 75, 'Amir', 151001);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `noabsen` int(4) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `jenis_kelamin_siswa` varchar(25) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `notelp_siswa` varchar(13) NOT NULL,
  `email_siswa` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`noabsen`, `nis`, `nama_siswa`, `jenis_kelamin_siswa`, `kelas`, `semester`, `tahun_ajaran`, `tempat_lahir`, `tgl_lahir`, `alamat`, `notelp_siswa`, `email_siswa`) VALUES
(1, 121001, 'Akbar', 'Laki-laki', 'X', 'I (SATU)', '2019/2020', 'Sungguminasa', '2002-08-21', 'Jl Kusuma', '0839373737', 'akbar@gmail.com'),
(2, 121002, 'Basri', 'Laki-laki', 'X', 'I (SATU)', '2019/2020', 'Gowa', '2003-03-02', 'Jalan no 2', '0827277233', 'Basri@gmail.com'),
(3, 121003, 'Budi', 'Laki-laki', 'X', 'I (SATU)', '2019/2020', 'Makassar', '2000-12-30', 'Jl no 4', '08219912873', 'Budi@gmail.com'),
(4, 121004, 'Fadil', 'Laki-laki', 'X', 'I (SATU)', '2019/2020', 'Makassar', '2002-08-16', 'Jl no 9', '08363663272', 'fadil@gmail.com'),
(5, 121005, 'Ayu', 'Perempuan', 'X', 'I (SATU)', '2019/2020', 'Gowa', '2000-12-20', 'Jalan No 9', '0826263636', 'ayu@gmail.com'),
(6, 121006, 'Ana', 'Perempuan', 'X', 'I (SATU)', '2019/2020', 'Maros', '2002-06-19', 'Jalan No 55', '0836363727', 'ana@gmail.com'),
(7, 121007, 'Lisa', 'Perempuan', 'X', 'I (SATU)', '2019/2020', 'Takalar', '2002-06-03', 'Jalan Mekar 06', '08285756543', 'Lisa@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_walikelas`
--

CREATE TABLE `data_walikelas` (
  `nip` int(11) NOT NULL,
  `nama_guru_walikelas` varchar(30) NOT NULL,
  `statuspengajar` varchar(30) NOT NULL,
  `jenis_kelamin_guru` varchar(25) NOT NULL,
  `kelas_yang_diwakilkan` varchar(30) NOT NULL,
  `programstudi` varchar(30) NOT NULL,
  `notelp_walikelas` varchar(12) NOT NULL,
  `email_walikelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `nama_sekolah` varchar(30) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `nis` int(11) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `tahun_pelajaran` varchar(20) NOT NULL,
  `programstudi` varchar(30) NOT NULL,
  `kode_mapel` int(7) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL,
  `kriteria` varchar(7) NOT NULL,
  `nilai_hasil_belajar` double NOT NULL,
  `kognitif` varchar(30) NOT NULL,
  `psikomotorik` varchar(30) NOT NULL,
  `afektif` varchar(30) NOT NULL,
  `pengembangan_diri` varchar(30) NOT NULL,
  `pribadi` varchar(30) NOT NULL,
  `tidak_hadir` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `data_guru_mapel`
--
ALTER TABLE `data_guru_mapel`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `nama_guru` (`nama_guru`),
  ADD KEY `statuspengajar` (`statuspengajar`),
  ADD KEY `gurukelas` (`gurukelas`),
  ADD KEY `notelp` (`notelp`);

--
-- Indeks untuk tabel `data_kelas`
--
ALTER TABLE `data_kelas`
  ADD PRIMARY KEY (`no_kelas`),
  ADD KEY `nama_kelas` (`nama_kelas`),
  ADD KEY `program_studi` (`program_studi`);

--
-- Indeks untuk tabel `data_mapel`
--
ALTER TABLE `data_mapel`
  ADD PRIMARY KEY (`kode_mapel`),
  ADD KEY `nama_mapel` (`nama_mapel`),
  ADD KEY `semester_mapel` (`semester_mapel`,`tahun_pelajaran`);

--
-- Indeks untuk tabel `data_nilai_harian`
--
ALTER TABLE `data_nilai_harian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_absen` (`no_absen`),
  ADD KEY `kelas` (`kelas`),
  ADD KEY `kode_mapel` (`kode_mapel`),
  ADD KEY `nama_mapel` (`nama_mapel`),
  ADD KEY `nama_guru` (`nama_guru`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nilai_harian` (`nilai_harian`),
  ADD KEY `semester` (`semester`),
  ADD KEY `tahun_pelajaran` (`tahun_pelajaran`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `data_nilai_siswa_permapel`
--
ALTER TABLE `data_nilai_siswa_permapel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_siswa` (`nama_siswa`),
  ADD KEY `kelas` (`kelas`),
  ADD KEY `semester` (`semester`),
  ADD KEY `nama_mapel` (`nama_mapel`),
  ADD KEY `nilaiharian` (`nilaiharian`),
  ADD KEY `tahun_ajaran` (`tahun_ajaran`),
  ADD KEY `nama_guru` (`nama_guru`),
  ADD KEY `nip` (`nip`),
  ADD KEY `no_absen` (`no_absen`),
  ADD KEY `kode_mapel` (`kode_mapel`),
  ADD KEY `nilaiakhir_permapel` (`nilaiakhir_permapel`),
  ADD KEY `standar_nilai_kriteria` (`standar_nilai_kriteria`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `nama_siswa` (`nama_siswa`),
  ADD KEY `noabsen` (`noabsen`),
  ADD KEY `kelas` (`kelas`),
  ADD KEY `semester` (`semester`),
  ADD KEY `tahun_ajaran` (`tahun_ajaran`);

--
-- Indeks untuk tabel `data_walikelas`
--
ALTER TABLE `data_walikelas`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `nama_guru_walikelas` (`nama_guru_walikelas`),
  ADD KEY `statuspengajar` (`statuspengajar`),
  ADD KEY `notelp_walikelas` (`notelp_walikelas`),
  ADD KEY `programstudi` (`programstudi`),
  ADD KEY `kelas_yang_diwakilkan` (`kelas_yang_diwakilkan`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `nama_siswa` (`nama_siswa`),
  ADD KEY `kelas` (`kelas`,`semester`,`tahun_pelajaran`,`kode_mapel`,`nama_mapel`,`kriteria`,`nilai_hasil_belajar`),
  ADD KEY `programstudi` (`programstudi`),
  ADD KEY `semester` (`semester`),
  ADD KEY `tahun_pelajaran` (`tahun_pelajaran`),
  ADD KEY `nama_mapel` (`nama_mapel`),
  ADD KEY `kode_mapel` (`kode_mapel`),
  ADD KEY `nilai_hasil_belajar` (`nilai_hasil_belajar`),
  ADD KEY `kriteria` (`kriteria`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `data_nilai_harian`
--
ALTER TABLE `data_nilai_harian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `data_nilai_siswa_permapel`
--
ALTER TABLE `data_nilai_siswa_permapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
