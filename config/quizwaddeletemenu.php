<?php
include 'quizwadconnector.php';
$idproduct = $_GET['idproduct'];
$img = mysqli_query($connect, "SELECT fotoproduct FROM menu WHERE idproduct = $idproduct");
$row = mysqli_fetch_assoc($img);
unlink("../style/".$row['fotoproduct']);
$query = "DELETE FROM menu WHERE idproduct = $idproduct";
$result = mysqli_query($connect, $query);
header("Location:../quizwadindex.php?page=menu");;
?>