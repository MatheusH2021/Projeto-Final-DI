<?php
require_once("DB_Class.php");
session_start();

$db = new MySql();

if (!empty($_POST['titulo']) && !empty($_POST['descricao']) && !empty($_POST['categoria'])){
    $title = $_POST['titulo'];
    $description = $_POST['descricao'];
    $category = $_POST['categoria'];
    $user_id = $_SESSION['user_id'];
    $status = "pendente";
    
    if (!empty($_POST['data'])){
        $date = $_POST['data'];
    } 
      
} else {
    header("location:../Views/add_tarefa.php?erro=camposvazios");
}
if (isset($date)){
    $db->insertDB("titulo, descricao, categoria, status, data_limite, usuario_id", "tarefas", "'{$title}', '{$description}', '{$category}', '{$status}', '{$date}', {$user_id}");

    header('location:../Views/minhas_tarefas.php?status=sucesso');
} else {
    $db->insertDB("titulo, descricao, categoria, status, data_limite, usuario_id", "tarefas", "'{$title}', '{$description}', '{$category}', '{$status}', {$user_id}");
    
    header('location:../Views/minhas_tarefas.php?status=sucesso');
}