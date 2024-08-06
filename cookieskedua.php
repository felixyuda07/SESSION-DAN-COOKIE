<?php
    if(isset($_COOKIE['nama'])){
        echo "ini untuk mengecek dari cookies 'nama' adalah " . $_COOKIE['nama'];
    }else{
        echo "cookies 'nama belum ada'";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Cookies kedua</title>
</head>
<body>
    <h1>Ini cookies</h1>
    <?php
        echo "ini dari cookies 'nama' adalah" . $_COOKIE['nama'];
    ?>
</body>
</html>