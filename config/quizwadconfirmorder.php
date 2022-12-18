<?php
include 'quizwadconnector.php';
$idpesanan = $_GET['idpesanan'];
$query = "DELETE FROM pesanancust WHERE idpesanan = $idpesanan";
$result = mysqli_query($connect, $query);
header("Location:../quizwadindex.php?page=dashboard");;
?>