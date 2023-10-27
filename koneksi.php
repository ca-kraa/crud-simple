<?php

$host = "localhost"; // Nama host database
$user = "root"; // Nama pengguna database (default biasanya "root" untuk MySQL)
$pass = ""; // Kata sandi pengguna database
$name = "contoh_crud"; // Nama database yang digunakan

$link = mysqli_connect($host, $user, $pass, $name);

// Mengirim pesan jika error disaat mengkoneksikan database

if (!$link) {
    die("Koneksi Dengan Database Gagal : " . mysqli_connect_errno() .
        " - " . mysqli_connect_error());
}
