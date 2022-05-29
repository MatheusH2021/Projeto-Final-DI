<?php
require_once('../template/header.php');
if (isset($_GET['status'])){
    $status = $_GET['status'];
} else {
    $status = '';
}
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

switch($status){
    case 1:
        $msg = "Por favor preencha todos os campos! OBS: Prazo não é obrigatótorio!";
        break;
}
?>

<div class="wrapper">
    <?php if (isset($msg)){ ?>
        <div class="alert alert-danger show" role="alert">
            <?php echo $msg; ?><button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
        </div>
    <?php } ?>    
    <div class="Form-add container text-center">
        <div class="card text-center">
            <div class="title-home">
                <h2>Adicionar Tarefas:</h2>
            </div>
            <form class="form-control" action="../Controllers/add_tarefa.php" method="post" autocomplete="off">
                <div class="input">
                    <label class="ajust-titulo" for="title">Titulo:</label>
                    <input class="form-control" type="text" name="title" id="title" placeholder="Insira o titulo de sua tarefa">
                </div>
                <div class="input">
                    <label for="description">Descrição:</label>
                    <input class="form-control" type="text" name="description" placeholder="Insira a descrição para sua tarefa">
                </div>
                <div class="input">
                    <label for="category">Categoria:</label>
                    <select class="ajust-categoria form-control" name="category" id="category">
                        <option class="form-control" value="Escola">Escola</option>
                        <option class="form-control" value="Trabalho">Trabalho</option>
                        <option class="form-control" value="Independente">Independente</option>
                    </select>                    
                </div>
                <div class="input">
                    <label class="ajust-data" for="data">Prazo: </label>
                    <input class="form-control" type="date" name="data">
                </div>
                <button class="btn btn-primary">Adicionar</button>
            </form>
        </div>
    </div>
</div>

<?php require_once('../template/footer.php'); ?>