<?php

require_once('DB_Class.php');

$db = new MySql();

if (isset($_GET['status'])){
    $tarefa_id = $_GET['id_tarefa'];
    $status = $_GET['status'];
    /*-Pagina Minhas Tarefas-*/
    if ($status == 1){
        $result = $db->selectDB("titulo", "tarefas", "id={$tarefa_id} and status = 'Concluido';");
        if (isset($result[0])){
            header('location:../Views/minhas_tarefas.php?status=5');
        } else {
            $db->updateDB("tarefas", "status = 'Concluido'", "id={$tarefa_id};");
            header('location:../Views/minhas_tarefas.php?status=2');
        }
    } else {
    /*-Pagina Detalhes Tarefa-*/
        $result = $db->selectDB('titulo', 'tarefas', "id={$tarefa_id} and status = 'Concluido';");
        if (isset($result[0])){
            header("location:../Views/detalhes_tarefa.php?id_tarefa={$tarefa_id}&status=3");
        } else {
            $db->updateDB("tarefas", "status = 'Concluido'", "id={$tarefa_id};");
            header("location:../Views/detalhes_tarefa.php?id_tarefa={$tarefa_id}&status=1");
        }
    }
} else {
    $tarefa_id = $_GET['id_tarefa'];
    if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['category'])){
    
        $title = $_POST['title'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        
        if (!empty($_POST['data'])){
            $date = $_POST['data'];
        }
        if ($date != ''){
            $db->updateDB("tarefas", "titulo='{$title}', descricao='{$description}', categoria='{$category}', data_prazo='{$date}'", "id={$tarefa_id};");
            header("location:../Views/detalhes_tarefa.php?id_tarefa={$tarefa_id}&status=2");
        } else {
            $db->updateDB("tarefas", "titulo='{$title}', descricao='{$description}', categoria='{$category}'", "id={$tarefa_id};");
            header("location:../Views/detalhes_tarefa.php?id_tarefa={$tarefa_id}&status=2");
        }
    }
}