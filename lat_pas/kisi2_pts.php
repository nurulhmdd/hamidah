<?php 
$jam_kerja =">8jam";
if($jam_kerja == ">8jam"){
    echo "mendapat gaji lembur";
}
else{
    echo "tidak mendapatkan gaji lembur";
}


?>
<br>``
<?php
$nasabah ="kelas2";
if($nasabah == "vip"){
    echo "atm,buku tabungan,M-Banking,menjadi prioritas";
}
elseif($nasabah ="kelas1"){
    echo "atm,buku tabungan,M-Banking";
}
elseif($nasabah ="kelas2"){
    echo "atm,buku tabungan";
}
?>
<br>
<?php
for($i=21;$i<=30;$i++){
    echo "$i";
}
?>
<br>
<?php
for($i =3; $i <= 60; $i=$i+3){
    echo $i;
    echo ",";
    
}
?>
<br>
<?php
$perusahaan =array('Toyota','Daihatsu','Honda','Ford','Ferari');
echo $perusahaan[3]."<br>";
echo $perusahaan[1]."dan".$perusahaan[2]

?>