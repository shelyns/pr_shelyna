<?php
$koneksi = mysqli_connect("localhost", "root", "", "pr_shelyna");

if (!$koneksi) {
    die("Koneksi database gagal");
}
