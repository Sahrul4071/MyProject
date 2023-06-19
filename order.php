<?php
include 'koneksi.php';
    $nama_pelanggan =$_POST["nama_pelanggan"];
    $nama_kantin = $_POST["nama_kantin"];
    $nama_pesanan = $_POST["nama_pesanan"];
    $jumlah_pesanan = $_POST["jumlah_pesanan"];
    $alamat = $_POST["alamat"];

    $sql="INSERT INTO orders (nama_pelanggan,nama_kantin,nama_pesanan,jumlah_pesanan,alamat)
      VALUES ('$nama_pelanggan','$nama_kantin','$nama_pesanan','$jumlah_pesanan','$alamat')";
if(mysqli_query($connect, $sql))
{ header("location: sukses.html"); 
} else{ echo "Gagal menambahkan order makanan:".mysqli_error($conn);
}
mysqli_close($connect);
?>

