<?php
include 'koneksi.php';

$id = $_GET['id'];

// ambil data siswa
$data = mysqli_query($koneksi, "SELECT * FROM datasiswa WHERE id='$id'");
$siswa = mysqli_fetch_assoc($data);

// hapus file foto
if ($siswa['foto'] != "" && file_exists("foto/" . $siswa['foto'])) {
    unlink("foto/" . $siswa['foto']);
}

// hapus data dari database
mysqli_query($koneksi, "DELETE FROM datasiswa WHERE id='$id'");

// kembali ke halaman tampil
header("location:tampil.php");
