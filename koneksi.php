<?php
$servername="localhost";
$database="tsa_web";
$username="root";
$password="";

$connect= new mysqli($servername, $username, $password, $database);

if($connect->connect_error){
    die("koneksi gagal : " .$connect->connect_error);
}
echo "koneksi berhasil";
?>