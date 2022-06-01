<?php

require_once("DB_Class.php");

$db = new MySql();

if (isset($_GET['id'])){
    
    $tarefas_id = $_GET['id'];

    $db->deleteDB("tarefas", "id={$tarefas_id};");

    header('location:../Views/minhas_tarefas.php?status=3');

} else {
    
    header('location:../Views/minhas_tarefas.php?status=4');

}