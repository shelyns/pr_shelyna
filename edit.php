<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM datasiswa WHERE id='$id'");
$siswa = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Siswa</title>
</head>

<body>

    <h2>Edit Data Siswa</h2>

    <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
        <input type="hidden" name="foto_lama" value="<?= $siswa['foto']; ?>">

        Nama:<br>
        <input type="text" name="nama" value="<?= $siswa['nama']; ?>" required><br><br>

        Kelas:<br>
        <input type="text" name="kelas" value="<?= $siswa['kelas']; ?>" required><br><br>

        Foto Lama:<br>
        <img src="foto/<?= $siswa['foto']; ?>" width="100"><br><br>

        Ganti Foto (opsional):<br>
        <input type="file" name="foto"><br><br>

        <button type="submit">Update</button>
        <a href="tampil.php">Batal</a>
    </form>

</body>

</html>