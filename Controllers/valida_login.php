<?php 
require_once("DB_Class.php");

$db = new MySql();

if (isset($_POST['user']) && isset($_POST['passwrd'])){
    $user     = $_POST['user'];
    $password = md5($_POST['passwrd']);
} 

if (empty($user) || empty($password))
{
    header("location:../index.php?status=4");
} else {
    $result = $db->selectDB("id, nome, senha", "usuarios", "nome = '".$user."' and senha = '".$password."';");
}

if (isset($result[0])){

    session_start();

    foreach($result as $user){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['nome'];
    }
    header("location:../Views/home.php?status=1");
} else 
{
    header("location:../index.php?status=4");
}
