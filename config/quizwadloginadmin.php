<?php
include('quizwadconnector.php');
$emailadmin = $_POST['emailadmin'];
$passwordadmin = $_POST['passwordadmin'];

$query = "SELECT * FROM akun where emailadmin = '$emailadmin' and passwordadmin = '$passwordadmin'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);


    if($row){
        if(isset($_POST['remember'])){
            $remember = $_POST['remember'];
            setcookie('remember', $remember, time() + (86400 * 30), "/");
        }
        setcookie('nama', $row['nama'], time() + (86400 * 30), "/");
        setcookie('emailadmin',$row['emailadmin'], time() + (86400 * 30), "/");
        setcookie('passwordcustomer', $row['passwordadmin'], time() + (86400 * 30), "/");
        header("Location:../quizwadindex.php?page=Home");
    }
    else{
        echo '<script type="text/javascript">';
        echo ' alert("Periksa kembali email dan password anda")';
        echo '</script>';
        header("Location:../quizwadindex.php?page=Loginadmin");
   }


?>