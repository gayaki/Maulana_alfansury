create database d_siswa;

use d_siswa;

CREATE TABLE `Mahasiswa` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `NPM` varchar(100),
  `Kelas` varchar(15),
  `Jurusan` varchar(30),
  PRIMARY KEY  (`id`)
);