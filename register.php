<?php
include 'koneksi.php';
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirm_password=$_POST["confirm_password"];

$sql="INSERT INTO data (name,email,password,confirm_password)
      VALUES ('$name','$email','$password','$confirm_password')";
if(mysqli_query($connect, $sql))
{ header("location: index.html"); 
} else{ echo "Gagal membuat Database Baru :".mysqli_error($conn);
}
mysqli_close($connect);
?>
