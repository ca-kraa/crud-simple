<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO sekolah (nama, kelas, alamat) VALUES ('$nama', '$kelas', '$alamat')";

    $result = mysqli_query($link, $query);

    if ($result) {
        header("Location: index.php"); 
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($link);
    }
}
