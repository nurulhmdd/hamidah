<?php
// menampilkan array ke user 
//pengulangan pada array
//for /forech
$angka = [3,2,15,20] 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
    <style>
        div{
            height: 50px;
            width: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;

        }

    </style>
</head>
<body>
    <?php for ($i=0; $i < count($angka); $i++  ){ ?>
        
    <div><?php echo $angka[$i]; ?></div>
    <?php } ?>
    <!-- mrnggunakan foreeach -->
    <div class="clear"></div>

    <?php foreach( $angka as $a) :?>
        <div class="kotak"><?php echo $a;?></div>
<?php endforeach; ?>
    

</body>
</html>
<?php
//jika nilai pada array bertambah atau ada elemen yang di kurangi
//menggunakan count($)
// menggunakan foreeach
?>