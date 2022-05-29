<?php

require_once('DB_Class.php');

$db = new MySql();

if (isset($_GET['status'])){
    $tarefa_id = $_GET['id'];
    if ($status == 1){
        $db->updateDB("tarefas", "status = 'Concluido'", "id={$tarefa_id};");
        header('location:../Views/minhas_tarefas.php');
    } else {
        $db->updateDB("tarefas", "status = 'Concluido'", "id={$tarefa_id};");
        header('location:../Views/detalhes_tarefa.php');
    }
} else {
    $tarefa_id = $_GET['id'];

    $db->updateDB("tarefas", "", "id={$tarefa_id};");
}