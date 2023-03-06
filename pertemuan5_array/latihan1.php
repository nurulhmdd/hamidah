<?php
//array
//fariabel yang dapat memiliki banyak nilai
//membuat array
//elemen pada array boleh memiliki tipe data yang berbeda
//cth:
$arr1 = [123, "tulisan",false];
//array adlh:
//pasangan antara key dan value
//key nya adalah index ,yang di mulai dari o
//cara lama
$hari = array("senin","selasa","rabu");
//cara baru
$bulan = ["januari","februari","maret"];

//menampilkan array
//tidak bisa menggunakan echo
//cth;
// echo $hari[]
//mengunakan var_dump() /print_r()
// var_dump($hari);
// echo"<br>";
// print_r($bulan);
// echo "<br>";

//menampilkan 1 elemen pada array
//boleh menggunakan echo
//khusus untuk satu elemen
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

//menabahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] ="jum'at";
echo "<br>";
var_dump($hari);




?>