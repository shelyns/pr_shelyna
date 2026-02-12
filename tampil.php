<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM datasiswa");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Siswa</title>
</head>

<body>

    <h2>Data Siswa</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($data)) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['kelas']; ?></td>
                <td><?= $row['tanggal_lahir']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td>
                    <img src="foto/<?= $row['foto']; ?>" width="80">
                </td>

                <td> <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                    |
                    <a href="hapus.php?id=<?= $row['id']; ?>"
                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus
                    </a>
                </td>

            </tr>
        <?php endwhile; ?>

    </table>

    <br>
    <a href="index.php">Tambah Data</a>

</body>

</html>