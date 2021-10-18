<!DOCTYPE html>
<html>

<head>
    <title>enkripsi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPMo3xlpxeiuL6RRJkqFKrmsKErh54Q_NejA&usqp=CAU)">
    <?php
    $key = $_GET["key"];
    $nmfile = "enkripsi.txt";
    $fp = fopen($nmfile, "r"); // buka file hasil enkripsi
    $isi = fread($fp, filesize($nmfile));
    for ($i = 0; $i < strlen($isi); $i++) {
        $kode[$i] = ord($isi[$i]); // rubah ASII ke desimal
        $b[$i] = ($kode[$i] - $key) % 256; // proses dekripsi Caesar
        $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
    }
    ?>
    <div class="container">
        <br>
        <p></p>
        <br>
        <h1 align="center">Hasil - Dekripsi</h1>
        <hr>
        <form action="caesar.php" method="get" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
            <label for="basic">Plainteks :</label>
            <textarea class="form-control" name="kata" id="textarea-a">
            <?php for ($i = 0; $i < strlen($isi); $i++) {
                    echo $isi[$i];
                }
                ?>
            </textarea>
            <label for="basic">Masukkan Kunci :</label>
            <textarea class="form-control" name="key" id="textarea-a">
            <?php for ($i = 0; $i < strlen($isi); $i++) {
                    echo $c[$i];
                }
                ?>
            </textarea><br>
            <a class="btn btn-success" href="dashboard.php" target="_blank">Dashboard</a>
        </form>
    </div>
</body>

</html>