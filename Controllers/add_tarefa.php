<?php
require_once("DB_Class.php");

if (empty($_POST['titulo']) && empty($_POST['descricao']) && empty($_POST['categoria'])){
    $title = $_POST['titulo'];
    $description = $_POST['descricao'];
    $category = $_POST['descricao'];
    $doe_date = $_POST['data'];
} else {
    header("location:../Views/add_tarefa.php?erro=camposvazios");
}