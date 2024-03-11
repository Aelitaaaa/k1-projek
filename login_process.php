<?php

session_start();

include "config.php";


$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM Admin  WHERE username='$username' AND password='$password'";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    
    
    echo "<script>alert('Login berhasil!'); window.location='index.php';</script>";
} else {
    
    echo "<script>alert('Login gagal! Silakan coba lagi.'); window.location='login.php';</script>";
}


mysqli_close($con);
?>

