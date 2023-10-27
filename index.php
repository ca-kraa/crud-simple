<?php
include 'koneksi.php'; // Untuk menyertakan (include) file koneksi.php ke dalam script PHP

$query = "SELECT * FROM sekolah"; // Untuk Memanggil data sesuai tabel

if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'delete') {
        // Untuk Menghapus sesuai data & ID
        $id = $_GET['id'];
        $query_delete = "DELETE FROM sekolah WHERE id = $id";
        $result_delete = mysqli_query($link, $query_delete);

        if ($result_delete) {
            echo "Data telah dihapus.";
        } else {
            echo "Gagal menghapus data: " . mysqli_error($link);
        }
    }
}

$result = mysqli_query($link, $query);
//  digunakan untuk menjalankan query SQL yang didefinisikan dalam variabel $query
//  menggunakan koneksi database yang didefinisikan dalam variabel $link
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Crud</title>
</head>

<body>
    <h1>Data Siswa</h1>
    <a href="tambah.php">Tambahkan Data</a>
    <table border='1'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['kelas'] . "</td>";
            echo "<td>" . $row['alamat'] . "</td>";
            echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='?aksi=delete&id=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
