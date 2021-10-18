<?php 

// session_start();

// if( !isset($_SESSION["login"]) ) {
// 	header("Location: login.php");
// 	exit;
// }

require 'fungsidata.php';
$siswa = query("SELECT * FROM `datasiswa`");

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Input Data Siswa</title>
</head>
<body style="background-image: url(https://png.pngtree.com/thumb_back/fw800/background/20210130/pngtree-textured-solid-color-texture-background-image_543658.jpg)">
    <div class="container mt-3">
<br>
        <h1 class="mb-3" align="center">Data Siswa</h1>
        <br>
        <br>
        <div class="d-flex justify-content-between">
            <a href="tambahdata.php" class="btn btn-primary">Tambah data siswa</a>
            <a href="dashboard.php" class="btn btn-info">kembali ke dashboard</a>
        </div>

        <hr>

        <table class="table table-hover">
            <tr>
                <th class="text-center">No.</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th class="text-center">Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach( $siswa as $row ) : ?>
            <tr>
                <td class="align-middle text-center"><?= $i; ?></td>
                <td class="align-middle"><?= $row["nama"]; ?></td>
                <td class="align-middle"><?= dekripsi($row["tgl"]); ?></td>
                <td class="align-middle"><?= dekripsi($row["alamat"]); ?></td>
                <td class="align-middle"><?= dekripsi($row["nomor"]); ?></td>
                <td class="align-middle text-center">
                    <a class="btn btn-success" href="ubahdata.php?id=<?= $row["id"]; ?>">Ubah</a>
                    <a class="btn btn-danger" href="hapusdata.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah Anda Yakin ingin Mengahpus Data ini?');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>