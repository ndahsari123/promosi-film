<?php
$host ='localhost';
$user ='root';
$pass ='';
$db   ='db_indahhh4';

//Buat koneksi
$conn = new mysqli($host,$user,$pass,$db);

//pemeriksaan koneksi
if ($conn->connect_error){
    die ("koneksi gagal:" . $conn->connect_error);
}
?>