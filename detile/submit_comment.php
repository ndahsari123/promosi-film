<?php

//memanggil database di dalam koneksi
include 'koneksi.php';

//pemeriksaan form
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $comment =$_POST['comment'];

   // pencegahan SQL injection
   $stmt =$conn->prepare("INSERT INTO comments (name, comment, created_at) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $name, $comment);

    if ($stmt->execute()){
        header('location: detail 2.php');
        exit(); 

    }else{
        echo "gagal" . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>
<?php

//memanggil database di dalam koneksi 
include 'koneksi php';

//pemeriksaan form
if($_SERVER ["REQUEST_METHOD"]== "POST"){
    $name=$_POST['name'];
    $comment=$_POST['comment'];

    // pencegahan SQL injection
   $stmt =$conn->prepare("INSERT INTO comments (name, comment, created_at) VALUES (?, ?, NOW())");
   $stmt->bind_param("ss", $name, $comment);

   if ($stmt->execute()){
       header('location: detail-1.php');
       exit(); 

   }else{
       echo "gagal" . $stmt->error;
   }
   $stmt->close();

$conn->close();
?>
<?php
}