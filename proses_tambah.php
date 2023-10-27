<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    // Query untuk menambahkan data ke dalam tabel
    $query = "INSERT INTO sekolah (nama, kelas, alamat) VALUES ('$nama', '$kelas', '$alamat')";

    $result = mysqli_query($link, $query);

    if ($result) {
        header("Location: index.php"); // Redirect ke halaman utama setelah data ditambahkan
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($link);
    }
}
