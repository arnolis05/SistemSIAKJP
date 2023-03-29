-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for siakjp
CREATE DATABASE IF NOT EXISTS `siakjp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `siakjp`;

-- Dumping structure for table siakjp.tb_assettetap
CREATE TABLE IF NOT EXISTS `tb_assettetap` (
  `id` int(11) NOT NULL,
  `nama_aset` varchar(40) DEFAULT NULL,
  `tahun_perolehan` varchar(4) DEFAULT NULL,
  `tarif_penyusutan` int(11) DEFAULT NULL,
  `metode_penyusutan` varchar(30) DEFAULT NULL,
  `beban_penyusutan` int(11) DEFAULT NULL,
  `akun_penyusutan` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_assettetap: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_assettetap` DISABLE KEYS */;
REPLACE INTO `tb_assettetap` (`id`, `nama_aset`, `tahun_perolehan`, `tarif_penyusutan`, `metode_penyusutan`, `beban_penyusutan`, `akun_penyusutan`) VALUES
	(1, 'Mobil', '2023', 130000000, '-', 140000000, '-');
/*!40000 ALTER TABLE `tb_assettetap` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_bayargajitunai
CREATE TABLE IF NOT EXISTS `tb_bayargajitunai` (
  `id` int(11) NOT NULL,
  `id_jenispengeluaranKas` int(11) DEFAULT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `jumlah_Gapok` int(11) DEFAULT NULL,
  `id_kategoriTunjangan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_bayargajitunai: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_bayargajitunai` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_bayargajitunai` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_inventaris
CREATE TABLE IF NOT EXISTS `tb_inventaris` (
  `id` int(11) NOT NULL,
  `nama_institusi` varchar(30) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `keterangan` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_inventaris: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_inventaris` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_inventaris` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_jadwalpiket
CREATE TABLE IF NOT EXISTS `tb_jadwalpiket` (
  `id` int(11) NOT NULL,
  `hari` varchar(30) DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `id_userdetail` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_jadwalpiket: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_jadwalpiket` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_jadwalpiket` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_jenisminyak
CREATE TABLE IF NOT EXISTS `tb_jenisminyak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namaMinyak` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_jenisminyak: ~3 rows (approximately)
/*!40000 ALTER TABLE `tb_jenisminyak` DISABLE KEYS */;
REPLACE INTO `tb_jenisminyak` (`id`, `namaMinyak`) VALUES
	(1, 'Pertalite'),
	(2, 'Pertamax'),
	(3, 'Pertamax Turbo'),
	(34, 'Dexlite');
/*!40000 ALTER TABLE `tb_jenisminyak` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_jenispengeluarankas
CREATE TABLE IF NOT EXISTS `tb_jenispengeluarankas` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_jenispengeluarankas: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_jenispengeluarankas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_jenispengeluarankas` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_jurnalumum
CREATE TABLE IF NOT EXISTS `tb_jurnalumum` (
  `id` int(11) NOT NULL,
  `no_bukti` varchar(30) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `item_ket` varchar(40) DEFAULT NULL,
  `ref` varchar(30) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `kredit` int(11) DEFAULT NULL,
  `ket_informasi` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_jurnalumum: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_jurnalumum` DISABLE KEYS */;
REPLACE INTO `tb_jurnalumum` (`id`, `no_bukti`, `tgl`, `item_ket`, `ref`, `debit`, `kredit`, `ket_informasi`) VALUES
	(1, 'NOBKT001', '2023-03-24', '-', '-', 100000000, 100000000, '-');
/*!40000 ALTER TABLE `tb_jurnalumum` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_kategoritunjangan
CREATE TABLE IF NOT EXISTS `tb_kategoritunjangan` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_kategoritunjangan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_kategoritunjangan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_kategoritunjangan` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_lainlain
CREATE TABLE IF NOT EXISTS `tb_lainlain` (
  `id` int(11) NOT NULL,
  `nama_institusi` varchar(30) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `keterangan` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_lainlain: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_lainlain` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_lainlain` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_laporanharian
CREATE TABLE IF NOT EXISTS `tb_laporanharian` (
  `id` int(11) NOT NULL,
  `laporan_operator` int(20) DEFAULT NULL,
  `topenjulperjenis` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_laporanharian: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_laporanharian` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_laporanharian` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_laporankeuangan
CREATE TABLE IF NOT EXISTS `tb_laporankeuangan` (
  `id` int(11) NOT NULL,
  `periode` date DEFAULT NULL,
  `laporan_posisiKeuangan` int(11) DEFAULT NULL,
  `laporan_salodLaba` int(11) DEFAULT NULL,
  `laporan_lr` int(11) DEFAULT NULL,
  `laporan_arusKas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_laporankeuangan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_laporankeuangan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_laporankeuangan` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_operator
CREATE TABLE IF NOT EXISTS `tb_operator` (
  `id` int(11) NOT NULL,
  `id_userdetail` int(11) DEFAULT NULL,
  `jam_input` time DEFAULT NULL,
  `id_jenisminyak` int(11) DEFAULT NULL,
  `totalisator_awal` int(11) DEFAULT NULL,
  `totalisator_akhir` int(11) DEFAULT NULL,
  `jumlah_liter` int(11) DEFAULT NULL,
  `harga_liter` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_operator: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_operator` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_operator` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_pembelian
CREATE TABLE IF NOT EXISTS `tb_pembelian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noBukti` varchar(20) DEFAULT NULL,
  `id_jenisminyak` int(11) DEFAULT NULL,
  `id_supplier` int(11) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_pembelian: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_pembelian` DISABLE KEYS */;
REPLACE INTO `tb_pembelian` (`id`, `noBukti`, `id_jenisminyak`, `id_supplier`, `tgl`) VALUES
	(1, 'NBKSPBU202303272114', 1, 1, '2023-03-27 21:15:03');
/*!40000 ALTER TABLE `tb_pembelian` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_pengelolaandispenser
CREATE TABLE IF NOT EXISTS `tb_pengelolaandispenser` (
  `id` int(11) NOT NULL,
  `nama_institusi` varchar(30) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `keterangan` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_pengelolaandispenser: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_pengelolaandispenser` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pengelolaandispenser` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_pengeluaran
CREATE TABLE IF NOT EXISTS `tb_pengeluaran` (
  `id` int(11) NOT NULL,
  `uraian` varchar(30) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `kas_disetor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_pengeluaran: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_pengeluaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pengeluaran` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_pengeluarankas
CREATE TABLE IF NOT EXISTS `tb_pengeluarankas` (
  `id` int(11) NOT NULL,
  `id_jenisPengeluaranKas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_pengeluarankas: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_pengeluarankas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pengeluarankas` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_penyesuaian
CREATE TABLE IF NOT EXISTS `tb_penyesuaian` (
  `id` int(11) NOT NULL,
  `tgl` date DEFAULT NULL,
  `item_ket` varchar(40) DEFAULT NULL,
  `ref` varchar(30) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `kredit` int(11) DEFAULT NULL,
  `ket_informasi` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_penyesuaian: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_penyesuaian` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_penyesuaian` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_persediaan
CREATE TABLE IF NOT EXISTS `tb_persediaan` (
  `id` int(11) NOT NULL,
  `stock_awal` int(11) DEFAULT NULL,
  `penerimaan` int(11) DEFAULT NULL,
  `penjualan` int(11) DEFAULT NULL,
  `stock_akhir` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_persediaan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_persediaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_persediaan` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_supplier
CREATE TABLE IF NOT EXISTS `tb_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noBukti` varchar(50) DEFAULT NULL,
  `nama_supplier` varchar(30) DEFAULT NULL,
  `npwp_sup` int(11) DEFAULT NULL,
  `alamat` varchar(40) DEFAULT NULL,
  `kontak_pic` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `id_jenisminyak` int(11) DEFAULT NULL,
  `jumlah_liter` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_supplier: ~1 rows (approximately)
/*!40000 ALTER TABLE `tb_supplier` DISABLE KEYS */;
REPLACE INTO `tb_supplier` (`id`, `noBukti`, `nama_supplier`, `npwp_sup`, `alamat`, `kontak_pic`, `email`, `id_jenisminyak`, `jumlah_liter`) VALUES
	(1, 'NBKSPBU202303272114', 'Arnolis', 232322, 'Jl. Mawar', '6782284703870', 'arnolis321@gmail.com', 1, 20);
/*!40000 ALTER TABLE `tb_supplier` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_token
CREATE TABLE IF NOT EXISTS `tb_token` (
  `kode` varchar(20) NOT NULL DEFAULT '',
  `token_access` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `ip_address` varchar(30) DEFAULT NULL,
  `hak_akses` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_token: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_token` DISABLE KEYS */;
REPLACE INTO `tb_token` (`kode`, `token_access`, `status`, `ip_address`, `hak_akses`) VALUES
	('KD001', 'TKN001A#EDS', 'online', '127.0.0.1', 'Administrator');
/*!40000 ALTER TABLE `tb_token` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `token_access` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
REPLACE INTO `tb_user` (`id`, `username`, `password`, `token_access`) VALUES
	(1, 'admin', 'admin', 'TKN001A#EDS');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

-- Dumping structure for table siakjp.tb_userdetail
CREATE TABLE IF NOT EXISTS `tb_userdetail` (
  `kode` varchar(20) NOT NULL DEFAULT '',
  `nama_lengkap` varchar(30) DEFAULT NULL,
  `jenis_kelamin` char(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `noHp` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `token_access` varchar(30) DEFAULT NULL,
  `id_jadwalPiket` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table siakjp.tb_userdetail: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_userdetail` DISABLE KEYS */;
REPLACE INTO `tb_userdetail` (`kode`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `noHp`, `email`, `token_access`, `id_jadwalPiket`) VALUES
	('KD001', 'Arnolis', 'Laki-Laki', 'Jl. Garuda Ujung', '82284703870', 'arnolis321@gmail.com', 'TKN001A#EDS', 1);
/*!40000 ALTER TABLE `tb_userdetail` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
