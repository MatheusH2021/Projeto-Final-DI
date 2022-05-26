<?php
require_once('../template/header.php');
?>

<div class="wrapper">
    <div class="Form-add container text-center">
        <div class="card text-center">
            <div class="title-home">
                <h2>Adicionar Tarefas:</h2>
            </div>    
            <form class="form-control" action="../Controllers/add_tarefa.php" method="post" autocomplete="off">
                <div class="input">
                    <label class="ajust-titulo" for="titulo">Titulo:</label>
                    <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Insira o titulo de sua tarefa">
                </div>
                <div class="input">
                    <label for="descricao">Descrição:</label>
                    <input class="form-control" type="text" name="descricao" placeholder="Insira a descrição para sua tarefa">
                </div>
                <div class="input">
                    <label for="categoria">Categoria:</label>
                    <select class="ajust-categoria form-control" name="categoria" id="cateforia">
                        <option class="form-control" value="Escola">Escola</option>
                        <option class="form-control" value="Trabalho">Trabalho</option>
                        <option class="form-control" value="Independente">Independente</option>
                    </select>                    
                </div>
                <div class="input">
                    <label class="ajust-data" for="titulo">Data: </label>
                    <input class="form-control" type="date" name="data" placeholder="Insira a data limite de sua tarefa, Não obrigatorio">
                </div>
                <button class="btn btn-primary">Adicionar</button>
            </form>
        </div>
    </div>
</div>

<?php require_once('../template/footer.php'); ?>