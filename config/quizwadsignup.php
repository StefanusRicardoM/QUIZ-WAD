<?php
include('quizwadconnector.php');
$nama = $_POST['nama'];
$emailcustomer = $_POST['emailcustomer'];
$passwordcustomer = $_POST['passwordcustomer'];
$cpassword = $_POST['cpassword'];
$customer = $_POST['customer'];


if($passwordcustomer == $cpassword){
    $sql = "INSERT INTO akun (nama, emailcustomer, passwordcustomer, customer) VALUES ('$nama', '$emailcustomer', '$passwordcustomer', 'Y')";
    $sqlquery = mysqli_query($connect, $sql);
    
    if($sqlquery){
        setcookie('emailcustomer', $row['emailcustomer'], time() + (86400 * 30), "/");
        setcookie('nama', $row['nama'], time() + (86400 * 30), "/");
        setcookie('passwordcustomer', $row['passwordcustomer'], time() + (86400 * 30), "/");

        header("Location:../quizwadindex.php?page=Home");
    }
    else{
        $message = "Signup Gagal";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location:../quizwadindex.php?page=menu");
    }  
}
else{
    $message = "Periksa kembali password anda";
        echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:../quizwadindex.php?page=Login");
}
?>