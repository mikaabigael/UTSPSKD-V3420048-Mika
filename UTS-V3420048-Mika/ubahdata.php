<?php
// session_start();

// if( !isset($_SESSION["login"]) ) {
// 	header("Location: login.php");
// 	exit;
// }

require 'fungsidata.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$siswa = query("SELECT * FROM `datasiswa` WHERE `id` = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'datasiswa.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'datasiswa.php';
			</script>
		";
	}


}
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
        <div class="col-md-5">
            
            <h1 class="mb-3">Ubah Data Siswa</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $siswa["nama"]; ?>" id="nama" placeholder="Nama siswa">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="<?= dekripsi($siswa["tgl"]); ?>" id="tanggal" placeholder="Tanggal lahir siswa">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?= dekripsi($siswa["alamat"]); ?>" id="alamat" placeholder="Alamat siswa">
                </div>
                <div class="mb-3">
                    <label for="nomor" class="form-label">Nomor Telepon</label>
                    <input type="text" name="nomor" class="form-control" value="<?= dekripsi($siswa["nomor"]); ?>" id="nomor" placeholder="Nomor siswa">
                </div>
                
                <button class="btn btn-success" type="submit" name="submit">Ubah Data</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>