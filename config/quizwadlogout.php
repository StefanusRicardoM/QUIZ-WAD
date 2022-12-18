<?php 
unset($_COOKIE['emailadmin']);
unset($_COOKIE['emailcustomer']);
unset($_COOKIE['nama']);
unset($_COOKIE['passwordadmin']);
unset($_COOKIE['passwordcustomer']);
unset($_COOKIE['email']);
unset($_COOKIE['password']);

setcookie('emailadmin', '', time() - 3600, '/');
setcookie('emailcustomer', '', time() - 3600, '/');
setcookie('nama', '', time() - 3600, '/');
setcookie('passwordadmin', '', time() - 3600, '/');
setcookie('passwordcustomer', '', time() - 3600, '/');
setcookie('email', '', time() - 3600, '/');
setcookie('password', '', time() - 3600, '/');


header("Location:quizwadindex.php");
?>