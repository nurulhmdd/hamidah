<?php
// Array Assiciative 
//definisinya sama seperti array numerik,kecuali 
//key nya adalah string yang kita buat sendiri 
//****** 
// $mahasiswa = [
//     [
//         "nama"=> "sandika galih",
//         "nrp"=>"09876008",
//         "email"=>"sandikagalih@unpas.ac.id",
//         "jurusan"=>"teknik informatika"
//     ] ,
//     [
//         "nama"=> "dody prasetyo",
//         "nrp"=>"0978675005",
//         "email"=>"dody@gmail.com",
//         "jurusan"=>"teknik industri",
//         "nilai"=>[89,90,100]
//     ] 


// ];
//     echo $mahasiswa [1] ["nilai"][2];

//####

    $mahasiswa = [
        [
            "nama"=> "sandika galih",
            "nrp"=>"09876008",
            "email"=>"sandikagalih@unpas.ac.id",
            "jurusan"=>"teknik informatika",
            "gambar"=>"cwe.png"
             
        ] ,
        [
            "nama"=> "dody prasetyo",
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
    <meta name="viewport" content="width=z, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiwa</h1>
    <?php foreach($mahasiswa as $mhs):?>
    <ul>
        <li>
            <img src="img/</=$mhs["gambar"];?>
        </li>
        <li>nama : <?=$mhs ["nama"]; ?></li>
        <li>nrp : <?=$mhs ["nrp"]; ?></li>
        <li>jurusan : <?=$mhs ["email"]; ?></li>
        <li>email : <?=$mhs ["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>