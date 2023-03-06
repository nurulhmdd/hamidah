<?php 
//variabel scope / lingkup variabel
// $x = 10;

// function tampilx () {
//     global $x;
//     echo $x;
// }
// tampilx();
// variabel superglobals
// variabel variabel yang sudah di miliki php yang bisa di akses dimanapun dan kapanpu di dalam halaman php kita
// variabel yang sudah di miliki php
// $_GET
// $_POST
// $_REQUEST
// $_COOKIE
// $_SERVER
// $_ENV
// semuanya adalah array assosiative
// $_GET
//cara penulisanya adalah dengnan meletakan (?) di belakang nama dokumen pada url
// ($_GET);
//  cara menulis pada url:http://localhost:8080/hamidah/pertemuan7_GET&POST/latihan1.php?nama=nurul%20hamidah&nisn=21,5946
$mahasiswa = [
    [
        "nama"=>"sandika galih",
        "nrp"=>"09876008",
        "email"=>"sandikagalih@unpas.ac.id",
        "jurusan"=>"teknik informatika",
        "gambar"=>"cwe.png"
         
    ] ,
    [
        "nama"=>"dody prasetyo",
        "nrp"=>"0978675005",
        "email"=>"dody@gmail.com",
        "jurusan"=>"teknik industri",
        "gambar"=>"cwo.png"
       
    ] 


];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=d">
    <title>get</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul> 
        <?php foreach($mahasiswa as $mhs):?>
     <li>
      <a href="latihan2.php?nama=<?=$mhs["nama"]; ?>&nrp=<?= $mhs ["nrp"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs ["jurusan"];?>&gambar=<?=$mhs ["gambar"];?>"><?= $mhs["nama"];?></a>  
    </li>
        <?php endforeach;?>
    </ul>
</body>
</html>