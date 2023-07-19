<?php

include 'connect.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($db, "SELECT * FROM admin where 
        email='$email' 
        and password='$password'");

$cek_login = mysqli_num_rows($login);

if($cek_login>0){
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    header("location:../public/index-admin.php");
}else{
    echo "<script>alert('Password mu salah')</script>";
    header("location:../public/index.php");
}


?>