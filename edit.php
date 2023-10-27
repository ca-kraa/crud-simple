<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
</head>

<body>
    <h1>Edit Data Siswa</h1>
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
            echo "Data telah diupdate. <a href='index.php'>Kembali ke halaman utama</a>";
        } else {
            echo "Gagal mengupdate data: " . mysqli_error($link);
        }
    } else {
        $id = $_GET['id']; // Ambil ID dari URL
        $query_select = "SELECT * FROM sekolah WHERE id = $id";
        $result_select = mysqli_query($link, $query_select);
        $row = mysqli_fetch_assoc($result_select);
    ?>

        <form action="edit_proses.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
            <br>

            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" value="<?php echo $row['kelas']; ?>" required>
            <br>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required>
            <br>

            <input type="submit" value="Update">
        </form>
    <?php
    }
    ?>
</body>

</html>
