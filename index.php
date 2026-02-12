<!DOCTYPE html>
<html>

<head>
    <title>Input Data Siswa</title>
</head>

<body>

    <h2>Input Data Siswa</h2>

    <form action="simpan.php" method="post" enctype="multipart/form-data">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" required><br><br>

        <label>Alamat:</label><br>
        <input type="text" name="alamat" required><br><br>

        <label>Foto:</label><br>
        <input type="file" name="foto" required><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="tampil.php">Lihat Data Siswa</a>

</body>

</html>