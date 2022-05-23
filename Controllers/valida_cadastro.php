<?php
require_once("DB_Class.php");

$db = new Mysql();

if (!empty($_POST['user']) && !empty($_POST['passwrd'])){
    $user     = $_POST['user'];
    $password = md5($_POST['passwrd']);

    $result = $db->selectDB("nome", "usuarios", "nome='".$user."' and senha='".$password."';");

    if (isset($result[0])) {
        header("location:../registrar.php?status=2");
    } else {
        $db->insertDB("nome, senha", "usuarios", "'".$user."', '".$password."'");
        header("location:../index.php?status=3&senha=".$result[0]);
    }
} else {
    header("location:../registrar.php?status=1");
}

