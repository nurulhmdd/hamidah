<!-- <?php
//array
//membuat array
$hari = array("senin","selasa","rabu");
$bulan =["january","februari","maret"];
$arr =[7876,"teks", true];
//menampilkan array
//versi debugging/developer
var_dump($hari);
echo "<br>";
print_r($bulan);
//menampilkan satu elemen pada array
echo "<br>";
echo $arr[0];
 
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #bada55;
            text-align:center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
       .clear {
        clear :both;
    }
        
           
        
    </style>
</head>
<body>
    <?php
    $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ]; 
    ?>
    <?php foreach ($angka as $a):?>
        <?php foreach ( $a as $b):?>
            <div class="kotak"> <?= $b; ?></div>
        <?php endforeach ;?>
        <div class="clear"></div>
        <?php endforeach ;?>
    <!-- jika ingin menampil kan satu elemen di dalam satu elemen -->
    <!-- <?php
    $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ]; 
     echo $angka[2][2];
    ?>  -->
    

    
</body>
</html>