<?php
include 'quizwadconnector.php';
$idproduct = $_POST['idproduct'];
$namaproduct = $_POST['namaproduct'];
$Deskripsi = $_POST['Deskripsi'];
$harga = $_POST['harga'];
$fotoproduct = $_FILES['fotoproduct']['name'];
$file_tmp = $_FILES['fotoproduct']['tmp_name'];

    if ($file_tmp){
        move_uploaded_file($file_tmp,'../style/'.$fotoproduct);
        $query = "UPDATE menu SET namaproduct = '$namaproduct', Deskripsi = '$Deskripsi', fotoproduct = '$fotoproduct', harga = '$harga' WHERE idproduct = '$idproduct'";
        $result = mysqli_query($connect, $query);
        header('Location:../quizwadindex.php?page=menu');
    } else {
        $query = "UPDATE menu SET namaproduct = '$namaproduct', Deskripsi = '$Deskripsi', harga = '$harga' WHERE idproduct = '$idproduct'";
        $result = mysqli_query($connect, $query);
        header('Location:../quizwadindex.php?page=menu');
    }

?>