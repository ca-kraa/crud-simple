<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $query_update = "UPDATE sekolah SET nama = '$nama', kelas = '$kelas', alamat = '$alamat' WHERE id = $id";
    $result_update = mysqli_query($link, $query_update);

    if ($result_update) {
        header("Location: index.php");
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($link);
    }
}
