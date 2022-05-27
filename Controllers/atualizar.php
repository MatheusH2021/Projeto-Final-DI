<?php

require_once('DB_Class.php');

$db = new MySql();

if (isset($_GET['status'])){
    $tarefa_id = $_GET['id'];

    $db->updateDB("tarefas", "status = 'Concluido'", "id={$tarefa_id};");
    header('location:../Views/minhas_tarefas.php');
} else {
    $tarefa_id = $_GET['id'];

    $db->updateDB("tarefas", "", "id={$tarefa_id};");
}