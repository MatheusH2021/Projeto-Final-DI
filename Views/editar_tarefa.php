<?php
require_once('../template/header.php');

$db = new MySql();

if (isset($_GET['id_tarefa'])){
    $id_tarefa = $_GET['id_tarefa'];
}

$result = $db->selectDB("id, titulo, descricao, categoria, status, data_prazo, data_cadastro", "tarefas", "id={$id_tarefa}");

if(isset($result[0])){
    foreach($result as $info){
        $task_id = $info['id'];
        $title = $info['titulo'];
        $description = $info['descricao'];
        $category = $info['categoria'];
        $status = $info['status'];
        $deadline = $info['data_prazo'];
        $date_created = $info['data_cadastro'];
    }
}

?>

<div class="wrapper">   
    <div class="Form-add container text-center">
        <div class="card text-center">
            <div class="title-home">
                <h2>Atualizar Tarefas:</h2>
            </div>
            <form class="form-control" action="../Controllers/atualizar.php?id_tarefa=<?php echo $task_id; ?>" method="post" autocomplete="off">
                <div class="input">
                    <label class="ajust-titulo" for="title">Titulo:</label>
                    <input class="form-control" type="text" name="title" id="title" placeholder="Insira o titulo de sua tarefa" value="<?php echo $title; ?>">
                </div>
                <div class="input">
                    <label for="description">Descrição:</label>
                    <input class="form-control" type="text" name="description" placeholder="Insira a descrição para sua tarefa" value="<?php echo $description; ?>">
                </div>
                <div class="input">
                    <label for="category">Categoria:</label>
                    <select class="ajust-categoria form-control" name="category" id="category" value="<?php echo $category; ?>">
                        <option class="form-control" value="Escola">Escola</option>
                        <option class="form-control" value="Trabalho">Trabalho</option>
                        <option class="form-control" value="Independente">Independente</option>
                    </select>                    
                </div>
                <div class="input">
                    <label class="ajust-data" for="data">Prazo: </label>
                    <input class="form-control" type="date" name="data" value="<?php echo $deadline; ?>">
                </div>
                <button class="btn btn-primary">Atualizar</button>
            </form>
        </div>
    </div>
</div>

<?php require_once('../template/footer.php'); ?>