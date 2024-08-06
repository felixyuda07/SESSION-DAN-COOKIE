<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <h1>belajar session</h1>
    <?php
    $_SESSION['nama']="dino";
    $_SESSION['id']="009";
    $_SESSION['akses']="admin";
    ?>
</body>
</html>