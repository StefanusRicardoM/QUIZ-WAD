<?php
include 'quizwadconnector.php';
$idproduct = $_GET['idproduct'];
$pemesan = $_COOKIE['nama'];
$pesanan = $_POST['pesanan'];
$jumlah  = $_POST['jumlah'];
$harga   = $_POST['harga'];
$total   = $_POST['jumlah'] * $_POST['harga'];
$payment = $_POST['payment'];
$query = mysqli_query($connect, "INSERT INTO pesanancust(pemesan,pesanan,jumlah,harga,total,payment)
                                 VALUES('$pemesan', '$pesanan', '$jumlah', '$harga', '$total', '$payment')");
   if($query){
      header('Location:../quizwadindex.php?page=menu');  
   }
?>
