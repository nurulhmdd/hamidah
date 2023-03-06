<?php
//cek apakah tidak ada data di $_GET
if(!isset($_GET["nama"])||
    !isset($_GET["nrp"])||
    !isset($_GET["email"])||
    !isset($_GET["gambar"])){
    //redirec
    header("Location: latihan1.php");
    exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"];?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>
    <a href="latihan1.php">kembali ke daftar mahasiswa </a>
</body>
</html>