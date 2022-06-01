<?php
require_once("DB_Class.php");
session_start();

$db = new MySql();

if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['category'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $user_id = $_SESSION['user_id'];
    $status = "Pendente";
    
    if (!empty($_POST['data'])){
        $date = $_POST['data'];
    } 
      
} else {
    header("location:../Views/add_tarefa.php?status=1");
}
if (isset($date)){
    $db->insertDB("titulo, descricao, categoria, status, data_prazo, usuario_id", "tarefas", "'{$title}', '{$description}', '{$category}', '{$status}', '{$date}', {$user_id}");

    header('location:../Views/minhas_tarefas.php?status=1');
} else {
    $db->insertDB("titulo, descricao, categoria, status, usuario_id", "tarefas", "'{$title}', '{$description}', '{$category}', '{$status}', {$user_id}");
    
    header('location:../Views/minhas_tarefas.php?status=1');
}