<?php
include "koneksi.php";

$username = 'user';
$password = md5('user');  // Hash password 'adminweb!' dengan MD5

$query = "UPDATE user SET password = '$password' WHERE username = '$username'";
$result = mysqli_query($connect, $query);

if ($result) {
    echo "Password berhasil diperbarui.";
} else {
    echo "Gagal memperbarui password: " . mysqli_error($connect);
}

mysqli_close($connect);
?>
