<?php

$user = $_POST['user'];
$password = $_POST['passwrd'];

if ($user == "Matheus" && $password == "M@TT2021"){
    header("location:../index.php?status=3");
} else {
    header("location:../registrar.php?status=2");
}