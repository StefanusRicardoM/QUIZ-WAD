<?php
include('quizwadconnector.php');
$emailcustomer = $_POST['emailcustomer'];
$passwordcustomer = $_POST['passwordcustomer'];

$query = "SELECT * FROM akun where emailcustomer = '$emailcustomer' and passwordcustomer = '$passwordcustomer'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);

    if($row){
        if(isset($_POST['remember'])){
            $remember = $_POST['remember'];
            setcookie('remember', $remember, time() + (86400 * 30), "/");
        }
        setcookie('nama', $row['nama'], time() + (86400 * 30), "/");
        setcookie('emailcustomer',$row['emailcustomer'], time() + (86400 * 30), "/");
        setcookie('passwordcustomer', $row['passwordcustomer'], time() + (86400 * 30), "/");
        header("Location:../quizwadindex.php?page=Home");
    }
    else{
        $message = "periksa kembali email anda";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location:../quizwadindex.php?page=Home");
   }


?>