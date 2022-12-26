CREATE DATABASE fakultas;

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);


CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum('laki-laki','perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

 -- insert jurusan
    insert into jurusan (kode, nama) values ("APBL", "Administrasi Publik");

 -- insert mahasiswa
    insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir,
     alamat) value (1, "44412030", "Bagas Pramudya", "Laki-laki", "Serang" , "2000-9-10" , 
     "Jl. Bukit Gedung Merah");

 -- update mahasiswa
    update mahasiswa set tempat_lahir = "Jakarta";

 -- delete mahasiswa
    delete from mahasiswa where id = 1;
    