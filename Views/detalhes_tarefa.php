<?php 
require_once("../template/header.php");

$db = new MySql();

if (isset($_GET['id_tarefa'])){
    $id_tarefa = $_GET['id_tarefa'];
}
?>

<div class="wrapper">
    <div class="title-home">
        <h2>Detalhes da Tarefa:</h2>
    </div>
    <div class="detail-task container-fluid">
        <div class="task card">
            <div class="task-title">
                <h3>Tarefa #1</h3>
            </div>
            <div class="informations">
                <span>Status: Pendete</span>
                <span>Categoria: Escola</span>
                <span>Prazo: 31/05/2022</span>
                <span>Data de Criação: 01/05/2022</span>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident minima ab quae voluptas eos libero repellendus error aperiam rem esse, vitae doloremque optio ratione vel officia aliquid omnis nesciunt</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top">
                                <button class="btn btn-success w-75"> <i class="bx bx-check"></i>Concluir</button>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="display-buttons">
                                <button class="btn btn-primary"> <i class="bx bx-pencil"></i>Editar</button>
                                <button class="btn btn-danger"> <i class="bx bx-trash"></i>Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
