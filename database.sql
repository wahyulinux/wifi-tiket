CREATE DATABASE tiket_wifi;
USE tiket_wifi;

CREATE TABLE pelanggan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    alamat VARCHAR(200),
    no_hp VARCHAR(20)
);

CREATE TABLE tiket (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_pelanggan INT,
    deskripsi TEXT,
    status ENUM('Baru', 'Diproses', 'Selesai') DEFAULT 'Baru',
    FOREIGN KEY (id_pelanggan) REFERENCES pelanggan(id)
);


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'teknisi') NOT NULL
);
