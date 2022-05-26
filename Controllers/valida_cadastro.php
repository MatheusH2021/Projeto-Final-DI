<?php
require_once("DB_Class.php");

$db = new Mysql();

if (!empty($_POST['user']) && !empty($_POST['passwrd']) && !empty($_POST['confirm_passwrd'])){
    $user     = $_POST['user'];
    $password = md5($_POST['passwrd']);
    $confirm_password = md5($_POST['confirm_passwrd']);
    
    $result = $db->selectDB("nome", "usuarios", "nome='".$user."';");

    if (isset($result[0])) {
        
        header("location:../registrar.php?status=2");
    
    } else if ($password != $confirm_password){
            
        header("location:../registrar.php?status=3");
    
    } else if (strlen($user) < 3 || strlen($user) > 10) {
        
        header("location:../registrar.php?status=4");        
    
    } else {

        $db->insertDB("nome, senha", "usuarios", "'".$user."', '".$password."'");
        header("location:../index.php?status=3");

    }
} else {
    
    header("location:../registrar.php?status=1");

}

