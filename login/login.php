<?php
// cek apakah tombol submit sudah di tekan atau belum 
if( isset( $_POST["submit"])) {
// cek usernamen $password
if($_POST["username"]=="admin"&& $_POST["password"]=="123"){
//jika benar, redirect ke halaman admin
header("location: admin.php");
exit;
}  else {
//jika salah ,tampilkan pesan kesalahan
    $error =true;
    }
}  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if (isset($error)):?>
    <p style="color :red; font-style:italic;">username/password salah!</p>
    <?php endif;?>
     
    <form action="" method="POST">
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">login</button>
        </li>

    </form>
</body>
</html>