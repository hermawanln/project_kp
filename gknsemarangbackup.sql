/*
SQLyog Enterprise v12.4.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - gknsemarangbackup
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gknsemarangbackup` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gknsemarangbackup`;

/*Table structure for table `akun_domain` */

DROP TABLE IF EXISTS `akun_domain`;

CREATE TABLE `akun_domain` (
  `kode_ad` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nip` int(10) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `jabatan` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `telp` int(15) NOT NULL,
  `hp` int(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `nama_pgw` varchar(50) NOT NULL,
  `nip_pgw` int(10) NOT NULL,
  `unker` varchar(50) NOT NULL,
  `jbtn` varchar(45) NOT NULL,
  `telpon` int(15) NOT NULL,
  `hendphone` int(15) NOT NULL,
  `alamat_email` varchar(50) NOT NULL,
  `username` varchar(45) NOT NULL,
  `alasan` varchar(45) NOT NULL,
  `dibuat` date DEFAULT NULL,
  `eslon` varchar(45) DEFAULT NULL,
  `nip_eslon` int(10) DEFAULT NULL,
  `tiket` varchar(10) DEFAULT NULL,
  `cetak` date DEFAULT NULL,
  `is_confirm` enum('Belum Diterima','Diterima','Selesai') NOT NULL DEFAULT 'Belum Diterima',
  PRIMARY KEY (`kode_ad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `akun_domain` */

insert  into `akun_domain`(`kode_ad`,`nama`,`nip`,`unit_kerja`,`jabatan`,`alamat`,`telp`,`hp`,`email`,`nama_pgw`,`nip_pgw`,`unker`,`jbtn`,`telpon`,`hendphone`,`alamat_email`,`username`,`alasan`,`dibuat`,`eslon`,`nip_eslon`,`tiket`,`cetak`,`is_confirm`) values 
(1,'dvdsvsv',21414,'svdvsdsasdvsdsafvsdv','dvdsvsdv','vdvsdvsdvsd',2412,12424,'dsvsvsdv@segsgsg.egeg','safsaf',241,'dsasfasf','safsafasf',24214,1412,'safasf@safsaas.fsafasf','afaasf','Pensiun',NULL,NULL,NULL,NULL,NULL,'Belum Diterima'),
(2,'Njajal',12412,'safaf','asfsaf','asfsa',2412,3121,'fvvv@svsvsdsdv','wgwegwe',232234,'dgddsg','wewsv',34,341,'wegewg','wegwegewg','Pensiun,Meninggal,Mengundurkan Diri,Lainnya','2019-06-03','wwewrew',421412,'dvdvvds','2019-06-12','Diterima');

/*Table structure for table `akunindividu` */

DROP TABLE IF EXISTS `akunindividu`;

CREATE TABLE `akunindividu` (
  `kode_akun` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) NOT NULL,
  `ttl` date DEFAULT NULL,
  `jenkel` varchar(50) NOT NULL,
  `status` varchar(35) NOT NULL,
  `masa_laku` date DEFAULT NULL,
  `nip` int(10) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` int(15) NOT NULL,
  `hp` int(15) NOT NULL,
  `nama_akun` varchar(70) NOT NULL,
  `layanan` varchar(50) NOT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `kepala` varchar(50) DEFAULT NULL,
  `eslon` varchar(50) DEFAULT NULL,
  `nip_eslon` int(10) DEFAULT NULL,
  `tiket` varchar(10) DEFAULT NULL,
  `dibuat` date DEFAULT NULL,
  `petugas` varchar(50) DEFAULT NULL,
  `is_confirm` enum('Belum Diterima','Diterima','Selesai') NOT NULL DEFAULT 'Belum Diterima',
  PRIMARY KEY (`kode_akun`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `akunindividu` */

insert  into `akunindividu`(`kode_akun`,`nama`,`ttl`,`jenkel`,`status`,`masa_laku`,`nip`,`pangkat`,`jabatan`,`unit_kerja`,`alamat`,`telp`,`hp`,`nama_akun`,`layanan`,`lokasi`,`kepala`,`eslon`,`nip_eslon`,`tiket`,`dibuat`,`petugas`,`is_confirm`) values 
(2,'Anto','2019-02-12','Perempuan','Lainnya','2019-02-13',987654321,'jendral','ad','daa','<p>\n	wwew</p>\n',2147483647,2147483647,'Anto','Internet','','','',0,'',NULL,'','Belum Diterima'),
(3,'Anto','2019-02-12','Perempuan','Lainnya','2019-02-13',987654321,'jendral','ad','daa','<p>\n	ddfdfd</p>\n',2147483647,2147483647,'Anto','Surat Elektronik,Internet','','','',0,'',NULL,'','Belum Diterima'),
(4,'assasa','2019-03-19','Laki - Laki','Pegawai','2019-03-20',121221,'dsdssd','sdsdds','sdssd','<p>\n	sddssddssdsdsd</p>\n',21121212,211212,'sdsdsd','Internet',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Belum Diterima'),
(5,'Njajal','2019-06-06','Laki - Laki','Pegawai','2019-06-12',241242,'dsddsc','sacsacsc','assac','<p>\r\n	ascsacascsac</p>\r\n',24142,124124,'assasc','Internet','sdvsdvsd','sdvsdv','sdvsdvd',341412,'sdvdsvsd','2019-06-25','dsvdsv','Selesai');

/*Table structure for table `akunkhusus` */

DROP TABLE IF EXISTS `akunkhusus`;

CREATE TABLE `akunkhusus` (
  `kode_khusu` int(10) NOT NULL AUTO_INCREMENT,
  `usulan_akun` varchar(50) NOT NULL,
  `layanan` varchar(30) NOT NULL,
  `masa` date DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` int(10) NOT NULL,
  `jabatan` varchar(45) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` int(15) NOT NULL,
  `hp` int(15) NOT NULL,
  `surat_elk` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `lokasi` varchar(70) DEFAULT NULL,
  `pemohon` varchar(70) DEFAULT NULL,
  `nip_pmhn` int(10) DEFAULT NULL,
  `kepala` varchar(35) DEFAULT NULL,
  `nm_kpl` varchar(50) DEFAULT NULL,
  `nip_kpl` int(10) DEFAULT NULL,
  `tiket` varchar(10) DEFAULT NULL,
  `dibuat` date DEFAULT NULL,
  `petugas` varchar(50) DEFAULT NULL,
  `is_confirm` enum('Belum Diterima','Diterima','Selesai') NOT NULL DEFAULT 'Belum Diterima',
  PRIMARY KEY (`kode_khusu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `akunkhusus` */

insert  into `akunkhusus`(`kode_khusu`,`usulan_akun`,`layanan`,`masa`,`nama`,`nip`,`jabatan`,`unit_kerja`,`alamat`,`telp`,`hp`,`surat_elk`,`keterangan`,`lokasi`,`pemohon`,`nip_pmhn`,`kepala`,`nm_kpl`,`nip_kpl`,`tiket`,`dibuat`,`petugas`,`is_confirm`) values 
(1,'asassa','Surat Elektronik','2019-03-13','assa',232332,'dssdds','dssddsd','<p>\n	dsmkksdkdskdsjkdkdksjdskdjs</p>\n',22332323,232332,'dsndsdsknds','<p>\n	dsjkdsjkdskjdsjkdjksds</p>\n',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Belum Diterima'),
(2,'','Internet',NULL,'',0,'','','',0,0,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Belum Diterima'),
(3,'Njajal','Internet','2023-06-15','brsdds',213212,'sddvdvsd','dsvdsv','<p>\r\n	vsddsvsdvdvdsdv</p>\r\n',2341,1412421,'sdvsvdv','<p>\r\n	sdvdsvsdv</p>\r\n','fsasasasa','sacsacas',24124,'assasafsaf','fsafsafsassaf',21412,'asfsafasf','2019-06-07','asfsafsaf','Diterima');

/*Table structure for table `akunvideo` */

DROP TABLE IF EXISTS `akunvideo`;

CREATE TABLE `akunvideo` (
  `kode_vid` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(70) NOT NULL,
  `nip` int(10) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `mulai` date DEFAULT NULL,
  `selesai` date DEFAULT NULL,
  `telp` int(15) NOT NULL,
  `hp` int(15) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_akun` varchar(70) NOT NULL,
  `lokasi` varchar(70) DEFAULT NULL,
  `pemohon` varchar(70) DEFAULT NULL,
  `nip_pmhn` int(10) DEFAULT NULL,
  `tiket` varchar(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `ptgs` varchar(50) DEFAULT NULL,
  `is_confirm` enum('Belum Diterima','Diterima','Selesai') NOT NULL DEFAULT 'Belum Diterima',
  PRIMARY KEY (`kode_vid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `akunvideo` */

insert  into `akunvideo`(`kode_vid`,`nama`,`nip`,`pangkat`,`jabatan`,`unit_kerja`,`mulai`,`selesai`,`telp`,`hp`,`ket`,`email`,`nama_akun`,`lokasi`,`pemohon`,`nip_pmhn`,`tiket`,`tanggal`,`ptgs`,`is_confirm`) values 
(1,'kjsjkk',2332332,'sdkdsjdsjk','jdsksddsj','ksjdskjdsk','2638-06-16','2019-03-19',2332322,232332,'jkdsjkkds','kdkdfjjkfd','kfdfdjkfdfd',NULL,NULL,NULL,NULL,NULL,NULL,'Belum Diterima'),
(2,'Njajal',876876,'jvhvvjhvj','hvvjvjhvhvj','vjhvjhvjhv','2019-06-25','2019-06-26',8587,876876,'jhvvjhvjhvjhv','jhvjhvjhvjv@dvvdv.sdvsdvds','sdvsdvdvdv','gsggdsgdsgdsg','dsggsdgdgd',3412414,'dsgsddgsdg','2019-06-04','sdgsdgsdgd','Diterima');

/*Table structure for table `anggota` */

DROP TABLE IF EXISTS `anggota`;

CREATE TABLE `anggota` (
  `kode_agt` varchar(10) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `nip` int(10) NOT NULL,
  `akun` varchar(70) NOT NULL,
  PRIMARY KEY (`kode_agt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `anggota` */

/*Table structure for table `app` */

DROP TABLE IF EXISTS `app`;

CREATE TABLE `app` (
  `kode_app` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nip` int(10) NOT NULL,
  `unker` varchar(45) NOT NULL,
  `jabatan` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `telp` int(15) NOT NULL,
  `hp` int(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `nm_pgw` varchar(45) NOT NULL,
  `nip_pgw` int(10) NOT NULL,
  `unit_kerja` varchar(45) NOT NULL,
  `jbtn` varchar(45) NOT NULL,
  `telpon` int(10) NOT NULL,
  `henphone` int(10) NOT NULL,
  `email_dinas` varchar(45) NOT NULL,
  `aplikasi` varchar(35) NOT NULL,
  `lokasi` varchar(70) DEFAULT NULL,
  `kepala` varchar(45) DEFAULT NULL,
  `nm_kpl` varchar(45) DEFAULT NULL,
  `nip_kpl` int(10) DEFAULT NULL,
  `tiket` varchar(35) DEFAULT NULL,
  `cetak` date DEFAULT NULL,
  `is_confirm` enum('Belum Diterima','Diterima','Selesai') NOT NULL DEFAULT 'Belum Diterima',
  PRIMARY KEY (`kode_app`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `app` */

insert  into `app`(`kode_app`,`nama`,`nip`,`unker`,`jabatan`,`alamat`,`telp`,`hp`,`email`,`nm_pgw`,`nip_pgw`,`unit_kerja`,`jbtn`,`telpon`,`henphone`,`email_dinas`,`aplikasi`,`lokasi`,`kepala`,`nm_kpl`,`nip_kpl`,`tiket`,`cetak`,`is_confirm`) values 
(1,'Anto',987654321,'ada','ad','as',2147483647,2147483647,'jk.kudo28@gmail.com','werwrw',121212,'daa','dadada',2147483647,2147483647,'jk.kudo28@gmail.com','Nadine',NULL,NULL,NULL,NULL,NULL,NULL,'Belum Diterima'),
(2,'jek',123456,'','pimpinan','ssemarang',2147483647,0,'jk.kudo28@gmail.com','sasa',1234432,'tik','direktur',8921,97743,'jekk@gmail.com','Persuratan',NULL,NULL,NULL,NULL,NULL,NULL,'Belum Diterima'),
(3,'hjsaghjds',23132,'sdsdds','dsds','dsdsds',233232,22323,'eweewew','ewewew',233232,'eeweew','wewweew',323232,323232,'ewewew','Persuratan',NULL,NULL,NULL,NULL,NULL,NULL,'Belum Diterima'),
(4,'',12412424,'wekjwek','kbkjbjbjkbj','kbjkbjkbjk',2414,898969,'bkbkb@kabfkjb.efef','',866,'jvhjhvjvj','vjhvjhvjhv',8767687,76767,'rereg@ehkkjbkj.gewg','Nadine',NULL,NULL,NULL,NULL,NULL,NULL,'Belum Diterima'),
(5,'',65678,'jhkbnjvh','hvhvhv','jhvjvjhv',54747,675675,'vvkhkkb@kjbkb.com','gxfhgvjbk',6567576,'jvjhvjv','jhvjhvjhv',875875,5875875,'jhvhjvjh@kjbkjb.cihih','DAMS',NULL,NULL,NULL,NULL,NULL,NULL,'Belum Diterima'),
(7,'',354676,'hgvhghg','jhjhvhv','vjhvjhv',7476476,564654,'jhfhjhvjh@aaaad.dq','tfyjghkl',64758,'gjhgkh','fghbnm,',65478,536478,'vjhvjhv@efsefe.efaf','Persuratan',NULL,NULL,NULL,NULL,NULL,NULL,'Belum Diterima'),
(8,'Hermawan',14045,'afjnfnjnkn','jknkkbjkbj','kbjkbjkbjkb',876786,87676767,'hjjvh@fwff.afaf','yuvhv',213123,'iugj jhvjv','kgkgkgjh',55667,567575675,'jhvjhvjh@afasada.ada','Persuratan',NULL,NULL,NULL,NULL,NULL,NULL,'Diterima'),
(9,'Testing',65877,'yhjvbk','kjkjvjm','vmnvmnvv',76767,2147483647,'hvmvm@bjbb.igkj','kjgjkk',78876,'8678687687','gghjhv',8876,876876876,'vvv@kbkveee.weewe','DAMS',NULL,NULL,NULL,NULL,NULL,NULL,'Diterima'),
(10,'Tes',476467,'hfghffghfhgf','hgfghfhgfghfhg','ghfghfhgf',654654,54654,'hvgfhfhf@ecrer.rcrec','jhfjfjhf',747647,'jhghjjhfjh','jfjhfjhfjh',654654,674674674,'jhgjhgjhg@rvtrvrtv.rtvrtv','Persuratan','jhfhjfjfhjf','jhfjhfjhf','jhfjhfhjfjh',654654654,'jjffffvbcn','2019-06-20','Selesai');

/*Table structure for table `dekstop` */

DROP TABLE IF EXISTS `dekstop`;

CREATE TABLE `dekstop` (
  `kode_dktp` varchar(10) NOT NULL,
  `kebutuhan` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `nip` int(10) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` int(15) NOT NULL,
  `hp` int(15) NOT NULL,
  `surat_elektronik` varchar(50) NOT NULL,
  `lokasi` varchar(70) DEFAULT NULL,
  `pemohon` varchar(50) DEFAULT NULL,
  `nip_pmhn` int(10) DEFAULT NULL,
  `pelapor` varchar(50) DEFAULT NULL,
  `nip_plpr` int(10) DEFAULT NULL,
  `ptgs` varchar(50) DEFAULT NULL,
  `nip_ptgs` int(10) DEFAULT NULL,
  `tiket` varchar(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `is_confirm` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kode_dktp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dekstop` */

/*Table structure for table `dukungan_kegiatan` */

DROP TABLE IF EXISTS `dukungan_kegiatan`;

CREATE TABLE `dukungan_kegiatan` (
  `kode_dkg` varchar(10) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `nip` int(10) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `telp` int(15) NOT NULL,
  `hp` int(24) NOT NULL,
  `alamat_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_srt` date DEFAULT NULL,
  `jadwal_kegiatan` varchar(40) NOT NULL,
  `perihal` varchar(70) NOT NULL,
  `keterangan` varchar(70) NOT NULL,
  `petugas_penerima` varchar(70) NOT NULL,
  `nip_pnrm` int(10) NOT NULL,
  `kegiatan1` varchar(30) NOT NULL,
  `penilaian1` varchar(40) NOT NULL,
  `kegiatan2` varchar(30) NOT NULL,
  `penilaian2` varchar(40) NOT NULL,
  `kegiatan3` varchar(30) NOT NULL,
  `penilaian3` varchar(40) NOT NULL,
  `kegiatan4` varchar(30) NOT NULL,
  `penilaian4` varchar(40) NOT NULL,
  `penilaian5` varchar(40) NOT NULL,
  `kegiatan5` varchar(30) NOT NULL,
  `lokasi` varchar(70) DEFAULT NULL,
  `is_confirm` enum('Belum Diterima','Diterima','Selesai') NOT NULL DEFAULT 'Belum Diterima',
  PRIMARY KEY (`kode_dkg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dukungan_kegiatan` */

insert  into `dukungan_kegiatan`(`kode_dkg`,`nama_pemohon`,`nip`,`jabatan`,`unit_kerja`,`telp`,`hp`,`alamat_surat`,`nomor_surat`,`tanggal_srt`,`jadwal_kegiatan`,`perihal`,`keterangan`,`petugas_penerima`,`nip_pnrm`,`kegiatan1`,`penilaian1`,`kegiatan2`,`penilaian2`,`kegiatan3`,`penilaian3`,`kegiatan4`,`penilaian4`,`penilaian5`,`kegiatan5`,`lokasi`,`is_confirm`) values 
('A36','Njajal',41,'vdsvdsvsdvdsv','sdvdsvv',124124,124124,'sdvvdvdsvds','sdvdvdv','2019-06-04','pagi','dfbfdbfdb','fdbfbfdbfd','bfdbfdbfdbfdb',124122414,'Sangat Baik','joss','Sangat Baik','mantab','Sangat Baik','mantul','Sangat Baik','wkwkland','huahah','Sangat Baik','Semarang','Diterima'),
('D123','Bung Jek',1997120111,'Ketua','Barang Milik Negara',9241234,987654321,'smg_barat','gkn/01/09','2019-01-02','pagi','senam','lebih awal','',0,'','','','','','','','','','','','Belum Diterima');

/*Table structure for table `dukungan_pimpinan` */

DROP TABLE IF EXISTS `dukungan_pimpinan`;

CREATE TABLE `dukungan_pimpinan` (
  `kode_pmp` varchar(12) NOT NULL,
  `nama_ptgs` varchar(70) NOT NULL,
  `nip` int(10) NOT NULL,
  `pangkat` varchar(30) NOT NULL,
  `jabatan` varchar(45) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `lokasi` varchar(45) NOT NULL,
  `kedatangan` time DEFAULT NULL,
  `jenis_keg` varchar(45) NOT NULL,
  `tanggal_keg` varchar(50) NOT NULL,
  `kendala` varchar(70) NOT NULL,
  `resolusi` varchar(70) NOT NULL,
  `pernyataan` varchar(70) NOT NULL,
  `catatan` varchar(70) NOT NULL,
  `kepala` varchar(50) DEFAULT NULL,
  `atasan` varchar(50) DEFAULT NULL,
  `nip_atsn` int(10) DEFAULT NULL,
  `pejabat` varchar(70) DEFAULT NULL,
  `nm_pjbt` varchar(50) DEFAULT NULL,
  `nip_pjbt` int(10) DEFAULT NULL,
  `is_confirm` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kode_pmp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dukungan_pimpinan` */

/*Table structure for table `kegiatan_khusus` */

DROP TABLE IF EXISTS `kegiatan_khusus`;

CREATE TABLE `kegiatan_khusus` (
  `kode_kgtn` varchar(10) NOT NULL,
  `kegiatan` varchar(70) NOT NULL,
  `lokasi` varchar(70) NOT NULL,
  `mulai` date DEFAULT NULL,
  `selesai` date DEFAULT NULL,
  `jenis_prngkt` varchar(70) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `nama_pmhn` varchar(70) NOT NULL,
  `nip` int(10) NOT NULL,
  `unit_kerja` varchar(70) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `telp` int(15) NOT NULL,
  `hp` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `eslon` varchar(50) DEFAULT NULL,
  `nip_eslon` int(10) DEFAULT NULL,
  `nm_petugas` varchar(70) DEFAULT NULL,
  `nip_ptgs` int(10) DEFAULT NULL,
  `tiket` varchar(20) DEFAULT NULL,
  `cetak` date DEFAULT NULL,
  `is_confirm` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kode_kgtn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kegiatan_khusus` */

/*Table structure for table `kouta_mail` */

DROP TABLE IF EXISTS `kouta_mail`;

CREATE TABLE `kouta_mail` (
  `kode_km` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nip` int(10) NOT NULL,
  `pangkat` varchar(45) NOT NULL,
  `jabatan` varchar(45) NOT NULL,
  `unit_kerja` varchar(45) NOT NULL,
  `telp` int(15) NOT NULL,
  `hp` int(15) NOT NULL,
  `alasan` text NOT NULL,
  `kapasitas` int(5) NOT NULL,
  `kepala` varchar(50) DEFAULT NULL,
  `nama_kpl` varchar(50) DEFAULT NULL,
  `nip_kpl` int(10) DEFAULT NULL,
  `nomor` varchar(35) DEFAULT NULL,
  `cetak` date DEFAULT NULL,
  `oleh` varchar(45) DEFAULT NULL,
  `hal` varchar(45) DEFAULT NULL,
  `tiket` varchar(35) DEFAULT NULL,
  `petugas` varchar(50) DEFAULT NULL,
  `is_confirm` enum('Belum Diterima','Diterima','Selesai') NOT NULL DEFAULT 'Belum Diterima',
  PRIMARY KEY (`kode_km`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `kouta_mail` */

insert  into `kouta_mail`(`kode_km`,`nama`,`nip`,`pangkat`,`jabatan`,`unit_kerja`,`telp`,`hp`,`alasan`,`kapasitas`,`kepala`,`nama_kpl`,`nip_kpl`,`nomor`,`cetak`,`oleh`,`hal`,`tiket`,`petugas`,`is_confirm`) values 
(1,'fdbdfdfb',232414,'dsdsdsd','vdsvdsvdsv','dsvdsvsdvds',2147483647,214124,'<p>\r\n	dvsdvsdv</p>\r\n',2112,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Belum Diterima'),
(2,'Njajal',8787,'jkbk','yuihkjbjk','kjbkjbjb',986986,8996896,'<p>\r\n	Saya tidak tahu</p>\r\n',124124,'sdsdsfs','sdfdsfdsfs',214214,'dsfdsfdf','2019-06-18','dfdsfsdf','sdfdsf','sfsfs','dsdsfsd','Diterima');

/*Table structure for table `layanan_gangguan` */

DROP TABLE IF EXISTS `layanan_gangguan`;

CREATE TABLE `layanan_gangguan` (
  `kode_gangguan` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` int(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `telp` int(20) NOT NULL,
  `hp` int(15) NOT NULL,
  `alamat_surat` varchar(40) NOT NULL,
  `keluhan` varchar(70) NOT NULL,
  `nama_ptgs` varchar(70) DEFAULT NULL,
  `nip_ptgs` int(15) DEFAULT NULL,
  `rencana` datetime DEFAULT NULL,
  `realisasi` datetime DEFAULT NULL,
  `durasi_tindak` varchar(45) NOT NULL,
  `solusi` varchar(70) NOT NULL,
  `penanganan` varchar(70) NOT NULL,
  `ptgs_kptik` varchar(50) DEFAULT NULL,
  `nip_kptik` int(20) DEFAULT NULL,
  `is_confirm` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kode_gangguan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `layanan_gangguan` */

/*Table structure for table `lisensi_perangkat` */

DROP TABLE IF EXISTS `lisensi_perangkat`;

CREATE TABLE `lisensi_perangkat` (
  `kode_lyn` varchar(10) NOT NULL,
  `jenis_layanan` varchar(70) NOT NULL,
  `no_tiket` varchar(10) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `nip` int(10) NOT NULL,
  `telp` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `eslondua` varchar(70) NOT NULL,
  `eslontiga` varchar(70) NOT NULL,
  `eslonempat` varchar(70) NOT NULL,
  `merk` varchar(70) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `nomorbmn` varchar(50) NOT NULL,
  `nama_perangkat` varchar(70) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `helpdesk` varchar(50) DEFAULT NULL,
  `nip_hlpd` int(10) DEFAULT NULL,
  `petugas` varchar(50) DEFAULT NULL,
  `nip_ptgs` int(10) DEFAULT NULL,
  `atasan` varchar(50) DEFAULT NULL,
  `nip_atsn` int(10) DEFAULT NULL,
  `is_confirm` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kode_lyn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lisensi_perangkat` */

/*Table structure for table `narasumber` */

DROP TABLE IF EXISTS `narasumber`;

CREATE TABLE `narasumber` (
  `kode_nrsm` varchar(10) NOT NULL,
  `kebutuhan_narasumber` varchar(50) NOT NULL,
  `keterangan` varchar(70) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `nip` int(10) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `telp` int(12) NOT NULL,
  `hp` int(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `lokasi` varchar(70) NOT NULL,
  `pelapor` varchar(70) DEFAULT NULL,
  `nip_plp` int(10) DEFAULT NULL,
  `ptgs` varchar(50) DEFAULT NULL,
  `nip_ptgs` int(10) DEFAULT NULL,
  `pemohon` varchar(50) DEFAULT NULL,
  `nip_pmhn` int(10) DEFAULT NULL,
  `tiket` varchar(25) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `is_confirm` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kode_nrsm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `narasumber` */

/*Table structure for table `pemberdayaan` */

DROP TABLE IF EXISTS `pemberdayaan`;

CREATE TABLE `pemberdayaan` (
  `kode_pmb` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` int(20) NOT NULL,
  `jabatan` varchar(35) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `telp` int(20) NOT NULL,
  `hp` int(15) NOT NULL,
  `peminjaman` datetime DEFAULT NULL,
  `ket_peminjaman` varchar(50) NOT NULL,
  `pemenuhan` datetime DEFAULT NULL,
  `ket_pemenuhan` varchar(50) NOT NULL,
  `pelaksanaan` datetime DEFAULT NULL,
  `ket_pelaksanaan` varchar(50) NOT NULL,
  `jenis_bmn` varchar(70) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `ptgs_kptik` varchar(50) DEFAULT NULL,
  `nip_kptik` int(10) DEFAULT NULL,
  `is_confirm` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kode_pmb`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pemberdayaan` */

/*Table structure for table `pendampingan` */

DROP TABLE IF EXISTS `pendampingan`;

CREATE TABLE `pendampingan` (
  `kode_pndm` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(70) NOT NULL,
  `nip` int(10) NOT NULL,
  `pangkat` varchar(35) NOT NULL,
  `jabatan` varchar(45) NOT NULL,
  `unit_kerja` varchar(45) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` int(15) NOT NULL,
  `hp` int(15) NOT NULL,
  `email_kemenkeu` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `mulai` time DEFAULT NULL,
  `selesai` time DEFAULT NULL,
  `tempat` varchar(50) NOT NULL,
  `agenda` varchar(50) NOT NULL,
  `pemohon` varchar(50) DEFAULT NULL,
  `nip_pmhn` int(10) DEFAULT NULL,
  `tiket` varchar(10) DEFAULT NULL,
  `diterima` date DEFAULT NULL,
  `petugas` varchar(35) DEFAULT NULL,
  `is_confirm` enum('Belum Diterima','Diterima','Selesai') NOT NULL DEFAULT 'Belum Diterima',
  PRIMARY KEY (`kode_pndm`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `pendampingan` */

insert  into `pendampingan`(`kode_pndm`,`nama`,`nip`,`pangkat`,`jabatan`,`unit_kerja`,`alamat`,`telp`,`hp`,`email_kemenkeu`,`tanggal`,`mulai`,`selesai`,`tempat`,`agenda`,`pemohon`,`nip_pmhn`,`tiket`,`diterima`,`petugas`,`is_confirm`) values 
(1,'Anto',987654321,'jendral','sassa/sasa','sasas','sasassa',2147483647,2147483647,'sdvdssdv@srgsgs.sssd','2019-03-27','00:01:00','01:00:00','Jakarta','assasa','dgvdvv',142142412,'sdgdsgdsgd','2019-06-18','dsgdsg','Diterima'),
(2,'Njajal',14124,'afafa','fasafsafsafasfa','fsafsafsaf','safsafsa',21414,124124,'asafaf@vassasa.savsav','2019-06-12','00:00:00','12:00:00','dsvsdvs','vdsvdsvd','wefewfewe',1242,'sdvsdvdsv','2019-06-10','dfddff','Diterima');

/*Table structure for table `peningkatan_komp` */

DROP TABLE IF EXISTS `peningkatan_komp`;

CREATE TABLE `peningkatan_komp` (
  `kode_komp` varchar(10) NOT NULL,
  `kebutuhan` varchar(70) NOT NULL,
  `keterangan` varchar(70) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `nip` int(12) NOT NULL,
  `unit_ker` varchar(70) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `telp` int(12) NOT NULL,
  `hp` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dibuat` varchar(45) DEFAULT NULL,
  `pelapor` varchar(70) DEFAULT NULL,
  `nip_plp` int(10) DEFAULT NULL,
  `nm_ptgs` varchar(70) DEFAULT NULL,
  `nip_ptgs` int(10) DEFAULT NULL,
  `eslon` varchar(45) DEFAULT NULL,
  `nip_eslon` int(10) DEFAULT NULL,
  `tiket` varchar(20) DEFAULT NULL,
  `cetak` date DEFAULT NULL,
  `is_confirm` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kode_komp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `peningkatan_komp` */

/*Table structure for table `perangkat` */

DROP TABLE IF EXISTS `perangkat`;

CREATE TABLE `perangkat` (
  `kode_prngkt` varchar(10) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `nomorbmn` varchar(10) NOT NULL,
  `perangkat` varchar(50) NOT NULL,
  `is_confirm` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kode_prngkt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `perangkat` */

/*Table structure for table `permintaangrup` */

DROP TABLE IF EXISTS `permintaangrup`;

CREATE TABLE `permintaangrup` (
  `kode_grup` int(10) NOT NULL AUTO_INCREMENT,
  `usulan` varchar(45) NOT NULL,
  `berlaku` date DEFAULT NULL,
  `nama` varchar(70) NOT NULL,
  `nip` int(10) NOT NULL,
  `jabatan` varchar(45) NOT NULL,
  `unit_kerja` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `telp` int(15) NOT NULL,
  `hp` int(15) NOT NULL,
  `surat_elektronik` varchar(45) NOT NULL,
  `nm_agt` text NOT NULL,
  `nip_agt` text NOT NULL,
  `akun` text NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `kepala` varchar(45) DEFAULT NULL,
  `eslon` varchar(45) DEFAULT NULL,
  `nip_eslon` int(10) DEFAULT NULL,
  `pemohon` varchar(45) DEFAULT NULL,
  `nip_pmhn` int(10) DEFAULT NULL,
  `tiket` varchar(10) DEFAULT NULL,
  `cetak` date DEFAULT NULL,
  `is_confirm` enum('Belum Diterima','Diterima','Selesai') NOT NULL DEFAULT 'Belum Diterima',
  PRIMARY KEY (`kode_grup`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `permintaangrup` */

insert  into `permintaangrup`(`kode_grup`,`usulan`,`berlaku`,`nama`,`nip`,`jabatan`,`unit_kerja`,`alamat`,`telp`,`hp`,`surat_elektronik`,`nm_agt`,`nip_agt`,`akun`,`keterangan`,`lokasi`,`kepala`,`eslon`,`nip_eslon`,`pemohon`,`nip_pmhn`,`tiket`,`cetak`,`is_confirm`) values 
(1,'ggg','2019-04-04','hhh',898898,'hh','hhh','hhhh',9898988,989898,'hjhjhh','7777','777','jhh','8988',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Belum Diterima'),
(2,'Njajal','2019-06-29','dsssddcsd',12412424,'sdvsdvdsvsd','ssvdsvds','vdsvdsv',12412,2112,'sdvsdv','<ol>\r\n	<li>\r\n		sdvdsvdv</li>\r\n	<li>\r\n		sdvsdv</li>\r\n	<li>\r\n		sdvsd</li>\r\n</ol>\r\n','<ol>\r\n	<li>\r\n		2141241</li>\r\n	<li>\r\n		124124</li>\r\n	<li>\r\n		21424124</li>\r\n</ol>\r\n','<ol>\r\n	<li>\r\n		ddsvsdvdv@gmail.com</li>\r\n	<li>\r\n		sdvdsvsdv@gmail.com</li>\r\n	<li>\r\n		sdvsdvdvsd@gmail.com</li>\r\n</ol>\r\n','WkwkLand','weffewewfwf','wefewefewf','fewfewfewf',34324234,'wvvdvdsvsdvsd',12312312,'dssddssdv','2019-06-27','Selesai');

/*Table structure for table `rumahtangga` */

DROP TABLE IF EXISTS `rumahtangga`;

CREATE TABLE `rumahtangga` (
  `kode_rmt` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pmhn` varchar(50) NOT NULL,
  `nip` int(10) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `telp` int(20) NOT NULL,
  `hp` int(15) NOT NULL,
  `surat_elektronik` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_ptgs` varchar(70) DEFAULT NULL,
  `nip_ptgs` int(20) DEFAULT NULL,
  `rencana` date DEFAULT NULL,
  `realisasi` date DEFAULT NULL,
  `investigasi` text NOT NULL,
  `solusi` text NOT NULL,
  `petugas_kptik` varchar(50) DEFAULT NULL,
  `nip_kptik` int(20) DEFAULT NULL,
  `is_confirm` enum('Belum Diterima','Diterima','Selesai') NOT NULL DEFAULT 'Belum Diterima',
  PRIMARY KEY (`kode_rmt`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `rumahtangga` */

insert  into `rumahtangga`(`kode_rmt`,`nama_pmhn`,`nip`,`jabatan`,`unit_kerja`,`telp`,`hp`,`surat_elektronik`,`deskripsi`,`nama_ptgs`,`nip_ptgs`,`rencana`,`realisasi`,`investigasi`,`solusi`,`petugas_kptik`,`nip_kptik`,`is_confirm`) values 
(1,'ewewgewgewg',4124214,'gdsgdsgd','gdsgdsgdsgsd',1242142,14214,'dgdsvdsvd','sdvdvsdvsdgsdvdvvvdsvsdvdsvdsv\r\ndsvsdvdsvs\r\ndvsdv\r\ndsv\r\nsdv','sdsdsvdsv',421412412,'2019-06-03','2019-06-25','<p>\r\n	ssvdsvdsvsdv</p>\r\n','<p>\r\n	sdvdsvdsvdsvdvdsv</p>\r\n','wefewfefefwefef',21213,'Diterima');

/*Table structure for table `sharing` */

DROP TABLE IF EXISTS `sharing`;

CREATE TABLE `sharing` (
  `kode_sh` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nip` int(10) NOT NULL,
  `pangkat` varchar(45) NOT NULL,
  `jabatan` varchar(45) NOT NULL,
  `unker` varchar(45) NOT NULL,
  `telp` int(15) NOT NULL,
  `hp` int(15) NOT NULL,
  `nama_file` varchar(45) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `media` varchar(45) NOT NULL,
  `server` varchar(45) NOT NULL,
  `nm_user` text NOT NULL,
  `akses` text NOT NULL,
  `dibuat` varchar(45) DEFAULT NULL,
  `kepala` varchar(45) DEFAULT NULL,
  `nm_kepala` varchar(45) DEFAULT NULL,
  `nip_kpl` int(10) DEFAULT NULL,
  `nomor` varchar(10) DEFAULT NULL,
  `cetak` date DEFAULT NULL,
  `oleh` varchar(45) DEFAULT NULL,
  `hal` varchar(45) DEFAULT NULL,
  `tiket` varchar(10) DEFAULT NULL,
  `petugas` varchar(45) DEFAULT NULL,
  `is_confirm` enum('Belum Diterima','Diterima','Selesai') NOT NULL DEFAULT 'Belum Diterima',
  PRIMARY KEY (`kode_sh`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `sharing` */

insert  into `sharing`(`kode_sh`,`nama`,`nip`,`pangkat`,`jabatan`,`unker`,`telp`,`hp`,`nama_file`,`platform`,`media`,`server`,`nm_user`,`akses`,`dibuat`,`kepala`,`nm_kepala`,`nip_kpl`,`nomor`,`cetak`,`oleh`,`hal`,`tiket`,`petugas`,`is_confirm`) values 
(1,'Anto',987654321,'jendral','asa','assa',2147483647,2147483647,'sasasa','Linux','sasa','sasa','sasa','sasa','','','',0,'',NULL,'','','','','Belum Diterima'),
(2,'kjjdkjdw',33232,'kjjkkds','kjjkdsds','kdjskd',23232,233223,'kjkjsdjkds','Windows','dskjdskjsd','jkdsjsdkjds','kjsdksdjkds','sdjjdskkjds',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Belum Diterima'),
(3,'frgjhk',4678,'hgvnbmvn','hbhbb','kbjbkkj',85876,45678,'khklblkb','lainnya','gkhgk','gkggjgj','kjgkjgg','kjgkjg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Belum Diterima'),
(4,'Njajal',14124,'jkbkjjbjb','kbbkjbkj','bkbjkbjkb',87578,578578,'jkbjkbkb','Linux','jkbkjkjkb','jkbjkbk','<ol>\r\n	<li>\r\n		Haha</li>\r\n	<li>\r\n		Hihi</li>\r\n	<li>\r\n		Hoho</li>\r\n</ol>\r\n','<ol>\r\n	<li>\r\n		Admin</li>\r\n	<li>\r\n		Member</li>\r\n	<li>\r\n		User</li>\r\n</ol>\r\n','ewfewf','wfwefw','wefwef',2412,'vdsdssdds','2019-06-12','sdsddv','dsvdsvd/sdvdsv/sdsd','wfffafsaf','afasfsafasf','Diterima');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(24) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(4) NOT NULL,
  `status` int(4) NOT NULL,
  `userfoto` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`email`,`password`,`level`,`status`,`userfoto`) values 
(1,'zakiy','zakiy@gmail.com','21232f297a57a5a743894a0e4a801fc3',4,1,''),
(2,'dannu','dannu@gmail.com','21232f297a57a5a743894a0e4a801fc3',0,1,'8fcfc-image.png'),
(3,'dannu','dannu@gmail.com','21232f297a57a5a743894a0e4a801fc3',0,1,'42fc8-text5764.png'),
(6,'dannu','dannu@gmail.com','21232f297a57a5a743894a0e4a801fc3',0,1,'d44e8-image-1-.png'),
(10,'dannu','limbat@gmail.com','21232f297a57a5a743894a0e4a801fc3',0,1,'5ecf9-image-4-.png'),
(11,'dannu','dannu@gmail.com','21232f297a57a5a743894a0e4a801fc3',1,1,'476b3-whatsapp-image-2018-10-27-at-02.46.33-3-.jpeg'),
(12,'dian','dian@gmail.com','f7953ed435f9fb3009128e280748a1c4',0,1,NULL),
(15,'wawan','wawan@gmail.com','c68acc0ee0f89ca360c6566a72b45dc3',1,1,NULL),
(16,'mas jak','jak@123','202cb962ac59075b964b07152d234b70',1,0,'4950b-5-sea-sparkle-ap681810229427.jpg'),
(17,'','','',0,0,NULL),
(18,'jek','jekmaning@gmail.com','202cb962ac59075b964b07152d234b70',0,1,NULL),
(19,'tes','tes@email.com','827ccb0eea8a706c4c34a16891f84e7b',0,1,'d8ce5-print.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
