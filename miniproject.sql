/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.1.37-MariaDB : Database - miniproject
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`miniproject` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `miniproject`;

/*Table structure for table `belmawa` */

DROP TABLE IF EXISTS `belmawa`;

CREATE TABLE `belmawa` (
  `id_belmawa` varchar(20) DEFAULT NULL,
  `nama_belmawa` char(100) DEFAULT NULL,
  `deskripsi` blob,
  `tgl_pelaksanaan` datetime DEFAULT NULL,
  `batas` datetime DEFAULT NULL,
  `lampiran` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `belmawa` */

insert  into `belmawa`(`id_belmawa`,`nama_belmawa`,`deskripsi`,`tgl_pelaksanaan`,`batas`,`lampiran`) values 
('NUDC','NUDC','Debat Bahasa Inggris/National University Debate Champhionship (NUDC).\r\n- Mahasiswa semester 4 atau lebih\r\n- Mahasiswa aktif\r\n- Mahasiswa STMIK Bandung','2023-08-25 08:00:00','2023-08-24 23:59:00','631560.jpg'),
('MIPAPT','MIPAPT','jospjdasojdpsdpsjdposdsd','2023-08-09 20:03:00','2023-08-08 20:03:00','112.jpg');

/*Table structure for table `daftar_bel` */

DROP TABLE IF EXISTS `daftar_bel`;

CREATE TABLE `daftar_bel` (
  `id_daftar` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nama` char(100) DEFAULT NULL,
  `prodi` char(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_belmawa` varchar(20) DEFAULT NULL,
  `nama_belmawa` char(100) DEFAULT NULL,
  `tgl_pelaksanaan` datetime DEFAULT NULL,
  `batas` datetime DEFAULT NULL,
  `waktu_daftar` datetime DEFAULT NULL,
  `tanskrip` varchar(200) DEFAULT NULL,
  `surat` varchar(200) DEFAULT NULL,
  `cv` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `daftar_bel` */

insert  into `daftar_bel`(`id_daftar`,`username`,`nama`,`prodi`,`email`,`id_belmawa`,`nama_belmawa`,`tgl_pelaksanaan`,`batas`,`waktu_daftar`,`tanskrip`,`surat`,`cv`) values 
('64ca224aeaa40','123123','Anti','Teknik Informatika','Anti@gmail.com','KDMI','KDMI','2023-08-05 15:22:00','2023-08-04 15:22:00','2023-08-02 16:30:50','Zahra_5B9.pdf','Zahra_5B7.pdf','Zahra_5B8.pdf'),
('64cf60963c254','3221001','Rina','Teknik Informatika','rina@gmail.com','NUDC','NUDC','2023-08-12 08:00:00','2023-08-11 23:59:00','2023-08-06 15:57:58','Zahra_5B.pdf','Zahra_5B.pdf','Zahra_5B.pdf'),
('64cfb0d381934','1223001','Beni','Teknik Informatika','beni123@gmail.com','NUDC','NUDC','2023-08-12 08:00:00','2023-08-11 23:59:00','2023-08-06 21:40:19','STMIKTALK___Laporan.pdf','STMIKTALK___Laporan.pdf','STMIKTALK___Laporan.pdf'),
('64d38d94d72f0','141414','Yani','Teknik Informatika','yaniyul2712@gmail.co','NUDC','NUDC','2023-08-12 08:00:00','2023-08-11 23:59:00','2023-08-09 19:59:00','STMIKTALK___Laporan1.pdf','STMIKTALK___Laporan1.pdf','STMIKTALK___Laporan1.pdf'),
('64d49cf5b85b5','121212','Yani','Sistem Informasi','yaniyul2712@gmail.co','NUDC','NUDC','2023-08-12 08:00:00','2023-08-11 23:59:00','2023-08-10 15:16:53','STMIKTALK___Laporan.pdf','STMIKTALK___Laporan.pdf','STMIKTALK___Laporan.pdf'),
('64dde88060033','122111','Lani','Teknik Informatika','lani123@gmail.com','NUDC','NUDC','2023-08-25 08:00:00','2023-08-24 23:59:00','2023-08-17 16:29:36','Tanskrip_Nilai.pdf','Surat_Rekomendasi.pdf','CV.pdf');

/*Table structure for table `daftar_kom` */

DROP TABLE IF EXISTS `daftar_kom`;

CREATE TABLE `daftar_kom` (
  `id_daftar` varchar(50) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `nama` char(100) DEFAULT NULL,
  `prodi` char(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_kegiatan` varchar(50) DEFAULT NULL,
  `nama_kegiatan` char(100) DEFAULT NULL,
  `nama_ukm` char(100) DEFAULT NULL,
  `tgl_pelaksanaan` datetime DEFAULT NULL,
  `batas` datetime DEFAULT NULL,
  `waktu_daftar` datetime DEFAULT NULL,
  `alasan` blob,
  PRIMARY KEY (`id_daftar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `daftar_kom` */

insert  into `daftar_kom`(`id_daftar`,`username`,`nama`,`prodi`,`email`,`id_kegiatan`,`nama_kegiatan`,`nama_ukm`,`tgl_pelaksanaan`,`batas`,`waktu_daftar`,`alasan`) values 
('64ca25218f9f4','123123','Anti','Teknik Informatika','Anti@gmail.com','keg-01','Maulid Nabi','Lembaga Dakwah Kampus As-Salaam','2023-08-04 15:58:00','2023-08-03 15:57:00','2023-08-02 16:42:57','ksjdkjsldjsld'),
('64cb3e25405be','123456','Citra','Teknik Informatika','cit123@gmail.com','keg-01','Maulid Nabi','Lembaga Dakwah Kampus As-Salaam','2023-08-04 15:58:00','2023-08-03 15:57:00','2023-08-03 12:41:57','karena saya mau'),
('64cf619ef22ed','3221001','Rina','Teknik Informatika','rina@gmail.com','keg-03','Maulid Nabi 1445H (2023)','Lembaga Dakwah Kampus As-Salaam','2023-08-12 09:00:00','2023-08-11 20:00:00','2023-08-06 16:02:22','Ingin menambah pengalaman'),
('64cfb16cf3966','1223001','Beni','Teknik Informatika','beni123@gmail.com','keg-03','Maulid Nabi 1445H (2023)','Lembaga Dakwah Kampus As-Salaam','2023-08-12 09:00:00','2023-08-11 20:00:00','2023-08-06 21:42:52','Ingin menambah pengalaman'),
('64d38f3e19c54','141414','Yani','Teknik Informatika','yaniyul2712@gmail.co','keg-02','PSPT 2024','Badan Eksekutif Mahasiswa (BEM)','2023-08-12 19:45:00','2023-08-11 19:45:00','2023-08-09 20:06:06','Karena saya ingin menambah pengalaman'),
('64dde9377a4bd','122111','Lani','Teknik Informatika','lani123@gmail.com','keg-01','10 Muharram','Lembaga Dakwah Kampus As-Salaam','2023-08-19 09:00:00','2023-08-18 20:00:00','2023-08-17 16:32:39','Karena ingin menambah pengalaman');

/*Table structure for table `daftar_web` */

DROP TABLE IF EXISTS `daftar_web`;

CREATE TABLE `daftar_web` (
  `id_daftar` varchar(100) NOT NULL,
  `username` int(50) DEFAULT NULL,
  `nama` char(100) DEFAULT NULL,
  `prodi` char(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `id_webinar` varchar(30) DEFAULT NULL,
  `nama_webinar` char(100) DEFAULT NULL,
  `nama_mitra` char(50) DEFAULT NULL,
  `narasumber` char(100) DEFAULT NULL,
  `tgl_pelaksanaan` datetime DEFAULT NULL,
  `batas` datetime DEFAULT NULL,
  `waktu_daftar` datetime DEFAULT NULL,
  `link` char(100) DEFAULT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `daftar_web` */

insert  into `daftar_web`(`id_daftar`,`username`,`nama`,`prodi`,`email`,`id_webinar`,`nama_webinar`,`nama_mitra`,`narasumber`,`tgl_pelaksanaan`,`batas`,`waktu_daftar`,`link`) values 
('64ca25f87fd98',123123,'Anti','Teknik Informatika','Anti@gmail.com','web-03','Pendahuluan','RevoU','Yani','2023-08-05 16:05:00','2023-08-04 16:05:00','2023-08-02 16:46:32','https://google.meet'),
('64cb3decb54c8',123456,'Citra','Teknik Informatika','cit123@gmail.com','web-03','Pendahuluan','RevoU','Yani','2023-08-05 16:05:00','2023-08-04 16:05:00','2023-08-03 12:41:00','https://google.meet'),
('64cf62961e407',3221001,'Rina','Teknik Informatika','rina@gmail.com','web-01','Make Data Analyst','Infinite','Vira, M.Kom','2023-08-11 08:00:00','2023-08-10 09:00:00','2023-08-06 16:06:30','meet.google.com/bnd-bnv-nmb'),
('64cfb20e01180',1223001,'Beni','Teknik Informatika','beni123@gmail.com','web-01','Make Data Analyst','Infinite','Vira, M.Kom','2023-08-11 08:00:00','2023-08-10 09:00:00','2023-08-06 21:45:34','meet.google.com/bnd-bnv-nmb'),
('64d36ef730eed',121212,'reno','Sistem Informasi','reno123@gmail.com','web-01','Make Data Analyst','Infinite','Vira, M.Kom','2023-08-11 08:00:00','2023-08-10 09:00:00','2023-08-09 17:48:23','meet.google.com/bnd-bnv-nmb'),
('64d38f89018b9',141414,'Yani','Teknik Informatika','yaniyul2712@gmail.co','web-01','Make Data Analyst','Infinite','Vira, M.Kom','2023-08-11 08:00:00','2023-08-10 09:00:00','2023-08-09 20:07:21','meet.google.com/bnd-bnv-nmb'),
('64dde9bba0d9e',122111,'Lani','Teknik Informatika','lani123@gmail.com','web-03','Business Webinar','RevoU','Vira, M.Kom','2023-08-19 08:00:00','2023-08-18 20:00:00','2023-08-17 16:34:51','meet.google.com/bnd-bnv-nmb');

/*Table structure for table `komunitas` */

DROP TABLE IF EXISTS `komunitas`;

CREATE TABLE `komunitas` (
  `id_kegiatan` varchar(50) NOT NULL,
  `nama_kegiatan` char(150) DEFAULT NULL,
  `nama_ukm` char(100) DEFAULT NULL,
  `batas` datetime DEFAULT NULL,
  `tgl_pelaksanaan` datetime DEFAULT NULL,
  `lampiran` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `komunitas` */

insert  into `komunitas`(`id_kegiatan`,`nama_kegiatan`,`nama_ukm`,`batas`,`tgl_pelaksanaan`,`lampiran`) values 
('keg-01','10 Muharram','Lembaga Dakwah Kampus As-Salaam','2023-08-18 20:00:00','2023-08-19 09:00:00','IMG-20230430-WA0007.jpg'),
('keg-02','PSPT 2024','Badan Eksekutif Mahasiswa (BEM)','2023-08-11 23:59:00','2023-08-12 08:00:00','IMG-20230503-WA0027.jpg');

/*Table structure for table `mitra_webinar` */

DROP TABLE IF EXISTS `mitra_webinar`;

CREATE TABLE `mitra_webinar` (
  `id_mitra` varchar(50) NOT NULL,
  `nama_mitra` char(100) DEFAULT NULL,
  `alamat` char(200) DEFAULT NULL,
  PRIMARY KEY (`id_mitra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mitra_webinar` */

insert  into `mitra_webinar`(`id_mitra`,`nama_mitra`,`alamat`) values 
('mitra - 11','Dicoding','Bandung'),
('mitra-01','Infinite','Batam'),
('mitra-010','RevoU','Jakarta');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` char(20) DEFAULT NULL,
  `prodi` char(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `rpassword` varchar(255) DEFAULT NULL,
  `tnc` char(10) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`username`,`password`,`nama`,`prodi`,`email`,`rpassword`,`tnc`) values 
('111111','111111','Anti Nur Ilmi','Teknik Informatika','Anti@gmail.com','123','on'),
('122111','lani','Lani','Teknik Informatika','lani123@gmail.com','lani123','on');

/*Table structure for table `webinar` */

DROP TABLE IF EXISTS `webinar`;

CREATE TABLE `webinar` (
  `id_webinar` varchar(15) NOT NULL,
  `nama_webinar` char(100) DEFAULT NULL,
  `nama_mitra` char(50) DEFAULT NULL,
  `narasumber` char(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `tgl_pelaksanaan` datetime DEFAULT NULL,
  `batas` datetime DEFAULT NULL,
  `lampiran` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_webinar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `webinar` */

insert  into `webinar`(`id_webinar`,`nama_webinar`,`nama_mitra`,`narasumber`,`link`,`tgl_pelaksanaan`,`batas`,`lampiran`) values 
('web-01','Make Data Analyst','Infinite','Vira, M.Kom','meet.google.com/bnd-bnv-nmb','2023-08-11 08:00:00','2023-08-10 09:00:00','mp.jpg'),
('web-02','Back End Developer','Infinite','Vira, M.Kom','meet.google.com/bnd-bnv-nmb','2023-08-25 08:00:00','2023-08-24 23:59:00','16919798573121.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
