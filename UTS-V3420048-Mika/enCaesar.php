<!DOCTYPE html>
<html>

<head>
    <title>enkripsi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPMo3xlpxeiuL6RRJkqFKrmsKErh54Q_NejA&usqp=CAU)">
    <?php
    $kalimat = $_GET["kata"];
    $key = $_GET["key"];
    for ($i = 0; $i < strlen($kalimat); $i++) {
        $kode[$i] = ord($kalimat[$i]); //rubah ASCII ke desimal
        $b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi
        $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
    }
    $hsl = '';
    for ($i = 0; $i < strlen($kalimat); $i++) {
        $c[$i];
        $hsl = $hsl . $c[$i];
    }
    //simpan data di file
    $fp = fopen("enkripsi.txt", "w");
    fputs($fp, $hsl);
    fclose($fp);
    ?>
    <div class="container">
        <br>
        <p></p>
        <br>
        <h1 align="center">Hasil - Enkripsi</h1>
        <hr>
        <form action="dekindexCaesar.php" method="get" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
            <label for="basic">Cipherteks :</label>
            <textarea class="form-control" name="kata" id="textarea-a">
            <?php
            for ($i = 0; $i < strlen($kalimat); $i++) {
                echo $kalimat[$i];
            } ?>
            </textarea>
            <label for="basic">Masukkan Kunci :</label>
            <textarea class="form-control" name="key" id="textarea-a">
            <?php $hsl = '';
            for ($i = 0; $i < strlen($kalimat); $i++) {
                echo $c[$i];
                $hsl = $hsl . $c[$i];
            }
            ?>
            </textarea><br>
            <a class="btn btn-success" href="dekIndexCaesar.php" target="_blank">dekripsi</a>
        </form>
    </div>
</body>

</html>