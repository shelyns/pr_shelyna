<?php
include 'koneksi.php';

$nama  = $_POST['nama'];
$kelas = $_POST['kelas'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];

// ambil data foto
$foto = $_FILES['foto']['name'];
$tmp  = $_FILES['foto']['tmp_name'];

// pindahkan foto ke folder foto/
move_uploaded_file($tmp, "foto/" . $foto);

$query = "INSERT INTO datasiswa VALUES (NULL, '$nama', '$kelas','$tanggal_lahir','$alamat', '$foto')";
mysqli_query($koneksi, $query);

header("location:tampil.php");
