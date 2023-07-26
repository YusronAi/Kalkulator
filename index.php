<?php
$hasil = 0;
$operator;
if (isset($_POST['hasil'])) {
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
   
    // ambil niali operator

    if (isset($_POST['tambah'])) {
        $operator = "+";
    } elseif (isset($_POST['kurang'])) {
        $operator = "-";
    } elseif (isset($_POST['kali'])) {
        $operator = "x";
    } elseif (isset($_POST['bagi'])) {
        $operator = ":";
    }
    

    switch ($operator) {
        case "+":
            $hasil = $nilai1 + $nilai2;
            break;
        
        case "-";
            $hasil = $nilai1 - $nilai2;
            break;
        case "x";
           $hasil = $nilai1 * $nilai2;
           break;
        case ":";
            $hasil = $nilai1 / $nilai2;
            break;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<h1 class="text-success" style="--bs-text-opacity: .7;">Kalkulator Sederhana</h1><hr>
    <form action="" method="post">
        <label for="nilai1">Masukkan nilai pertama : </label>
        <input type="text" name="nilai1" id="nilai1">
        <br>
        <label for="nilai1">Masukkan nilai kedua : </label>
        <input type="text" name="nilai2" id="nilai2">
        <br><br>
        <label for="tambah">+</label>
        <input type="radio" name="tambah" id="tambah" >
        <label for="kurang">| -</label>
        <input type="radio" name="kurang" id="kurang">
        <label for="kali">| x</label>
        <input type="radio" name="kali" id="kali">
        <label for="bagi">| :</label>
        <input type="radio" name="bagi" id="bagi"><br><hr>
        <button type="submit" name="hasil">Hasil </button>
        <strong>= <?= $hasil ?></strong>
    </form>
<script src="js/bootstrap.js"></script>
</body>
</html>
