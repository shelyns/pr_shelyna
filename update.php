<?php
include 'koneksi.php';

$id         = $_POST['id'];
$nama       = $_POST['nama'];
$kelas      = $_POST['kelas'];
$foto_lama  = $_POST['foto_lama'];

$foto_baru = $_FILES['foto']['name'];
$tmp       = $_FILES['foto']['tmp_name'];

if ($foto_baru != "") {
    // hapus foto lama
    if (file_exists("foto/" . $foto_lama)) {
        unlink("foto/" . $foto_lama);
    }

    // upload foto baru
    move_uploaded_file($tmp, "foto/" . $foto_baru);

    // update dengan foto baru
    $query = "UPDATE datasiswa SET 
              nama='$nama',
              kelas='$kelas',
              foto='$foto_baru'
              WHERE id='$id'";
} else {
    // update tanpa ganti foto
    $query = "UPDATE datasiswa SET 
              nama='$nama',
              kelas='$kelas'
              WHERE id='$id'";
}

mysqli_query($koneksi, $query);
header("location:tampil.php");
