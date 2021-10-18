<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:regislogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Welcome to Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">SMA Harapan Bangsa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="dashboard.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#datasiswa">Data Siswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang Sekolah</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="#enkripsi">Enkripsi</a></li>
                    <li class="nav-item"><a class="nav-link" href="loguot.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header - set the background image for the header in the line below-->
    <header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
        <div class="text-center my-5">
            <img class="img-fluid rounded-circle mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0RUIvi8kDor_qReV8y0qGn9KCOJJBrvTHe3v2AORPhs_sQjxSTZ6DCviJd_cHKL_zTh8&usqp=CAU" alt="..." />
            <h1 class="text-white fs-3 fw-bolder">Selamat Datang <?php echo $_SESSION['username']; ?></h1>
            <p class="text-white-50 mb-0">Website Sekolah Harapan Bangsa</p>
        </div>
    </header>


        <!-- Content section-->
        <section class="py-5" id="kontak">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 id="kontak">SMA HARAPAN BANGSA</h2>
                    <p class="lead">Jl. Bunga Bangsa No. 153, Medan Petisah, Kota Medan, Provinsi Sumatera Utara - Indonesia </p>
                    <p class="mb-0">Kode POS : 76126 Telepon : 0542 – 8830033</p>
                </div>
            </div>
        </div>
    </section>


    <div class="py-5 bg-image-full" id="datasiswa" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
        <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
        <div style="height: 5rem"></div>
        <section class="cta" id="">
            <div class="cta-content">
                <div class="container px-5" align="center">
                    <h2 class="text-white display-1 lh-1 mb-4">
                        Data Siswa
                    </h2>
                    <p></p>
                    <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="datasiswa.php" target="_blank">Data Siswa</a>
                </div>
            </div>
        </section>
    </div>

            <!-- Content section-->
            <section class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2>Kita bisa</h2>
                    <p class="lead">ketika kita percaya dan berpikir jika kita bisa seiring dengan konsistensi usaha.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Image element - set the background image for the header in the line below-->

    <div class="py-5 bg-image-full" id="tentang" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
        <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
        <div style="height: 15rem"></div>
    </div>
    <!-- Content section-->
    <section class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2>Motto</h2>
                    <p class="lead">Tidak ada hal yang sia-sia dalam belajar karena ilmu akan bermanfaat pada waktunya.</p>
                </div>
                <div class="col-lg-6">
                    <h2>Visi</h2>
                    <p class="mb-0">Terwujudnya Peserta Didik yang Beriman, Cerdas, Terampil, Mandiri dan Berwawasan Global</p>
                </div>
            </div>
        </div>
    </section>

    <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
        <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
        <div style="height: 15rem"></div>
    </div>

    <!-- Content section-->
    <section class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2>Motto</h2>
                    <p class="lead">Tidak ada hal yang sia-sia dalam belajar karena ilmu akan bermanfaat pada waktunya.</p>
                </div>
                <div class="col-lg-6">
                    <h2>Visi</h2>
                    <p class="mb-0">Terwujudnya Peserta Didik yang Beriman, Cerdas, Terampil, Mandiri dan Berwawasan Global</p>
                </div>
            </div>
        </div>
    </section>

    <div class="py-5 bg-image-full" id="enkripsi" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
        <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
        <div style="height: 5rem"></div>
        <section class="cta" id="enkripsi">
            <div class="cta-content">
                <div class="container px-5" align="center">
                    <h2 class="text-white display-1 lh-1 mb-4">
                        Belajar Enkripsi
                    </h2>
                    <p></p>
                    <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="vigenere.php" target="_blank">Vigenere Cipher</a>
                    <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="caesar.php" target="_blank">Caesar Cipher</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Content section-->
    <section class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
            <div class="col-lg-6">
                    <h2>Kesuksesan itu bukan ditunggu</h2>
                    <p class="mb-0">tetapi diwujudkan lewat usaha dan kegigihan</p>
                </div>
            </div>
        </div>
    </section>

    <div class="py-5 bg-image-full">
        <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
        <div style="height: 2rem"></div>
    </div>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Harapan Bangsa - Mika 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>