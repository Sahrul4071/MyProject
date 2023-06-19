<?php
include 'koneksi.php';
$name=$_POST["name"];
$password=$_POST["password"];

$sql="SELECT * FROM data 
    WHERE name='$name' AND password='$password'";

    $result=mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0) {
        header("location:dashboard.html"); 
    } else {
        header("location:error.html"); 
        //echo "<br><center><h2>nama dan password yang anda masukkan salah</h2>";
    }
?>
