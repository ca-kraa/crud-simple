<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>

<body>
    <h1>Tambah Data Siswa</h1>
    <form action="proses_tambah.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br>

        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" required>
        <br>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>
        <br>

        <input type="submit" value="Tambah">
    </form>
</body>

</html>
