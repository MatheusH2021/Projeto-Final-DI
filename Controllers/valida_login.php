<?php 

$user     = $_POST['user'];
$password = $_POST['passwrd'];

if ($user == 'Matheus' && $password == "M@TT2021"){
    header("location:../Views/home.php");
} else {
    header("location:../index.php?status=3 ");
}


