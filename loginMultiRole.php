
<?php

include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
$result = mysqli_query($connect, $query);

$fechResult = mysqli_fetch_assoc($result);

if ($fechResult) {
    if ($fechResult['role'] == 'admin') {
        echo "Anda berhasil login";
        echo "<a href='adminDasboard.html'>Admin</a>";
    } elseif ($fechResult['role'] == 'user') {
        echo "Anda berhasil login";
        echo "<a href='userDasboard.html'>User</a>";
    } else {
        echo "Anda gagal login";
        echo "<a href='loginForm.html'>Login Form</a>";
    }
}
mysqli_close($connect);

?>