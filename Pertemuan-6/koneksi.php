<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$namaDb = 'karyawan';
$port = 3306;

// $koneksi = mysqli_connect($server, $user, $pass, $namaDb, $port);   // Koneksi ke database

// if(!$koneksi) {
//     die('Gagal terhubung ke database: ' . mysqli_connect_error());
// } else {
//     echo 'Berhasil terhubung ke database';
// };

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $koneksi = mysqli_connect($server, $user, $pass, $namaDb, $port);   // Koneksi ke database
    echo 'Berhasil terhubung ke database';
} catch (mysqli_sql_exception $e) {
    echo 'Gagal terhubung ke database: ' . $e->getMessage();
}
