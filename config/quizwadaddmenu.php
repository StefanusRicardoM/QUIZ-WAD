<?php
include 'quizwadconnector.php';
$namaproduct = $_POST['namaproduct'];
$Deskripsi = $_POST['Deskripsi'];
$harga = $_POST['harga'];
$fotoproduct = $_FILES['fotoproduct']['name'];
$file_tmp = $_FILES['fotoproduct']['tmp_name'];
move_uploaded_file($file_tmp, '../style/'.$fotoproduct);
$query = mysqli_query($connect, "INSERT INTO menu(namaproduct,deskripsi,harga,fotoproduct)
                                 VALUES('$namaproduct', '$Deskripsi', '$harga', '$fotoproduct')");
   if($query){
      header('Location:../quizwadindex.php?page=menu');  
   }
?>
