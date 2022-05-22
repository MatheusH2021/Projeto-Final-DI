<?php 

$user     = $_POST['user'];
$password = $_POST['passwrd'];

if ($user == 'Matheus' && $password == "1234"){
    header("location:index.php?status=1");
} else {
    header("location:index.php?status=2");
}


