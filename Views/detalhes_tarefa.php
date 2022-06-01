<?php 
require_once("../template/header.php");

$db = new MySql();

if (isset($_GET['status'])){
    $status = $_GET['status'];
} else {
    $status = '';
}

switch($status){
    case 1:
        $msg = "Tarefa Concluida com sucesso!";
        break;
    case 2:
        $msg = "Tarefa Editada com sucesso!";
        break;
    case 3:
        $msg = "Esta tarefa já está concluída!";
        break;
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
        if ($info['data_prazo'] == ''){
            $deadline = "Sem Prazo";
        } else {
            $deadline = $info['data_prazo'];
        }
        $date_created = $info['data_cadastro'];
    }
}
?>

<div class="wrapper">
    <?php if (isset($msg)){ ?>
        <?php if ($status > 1){ ?>
        <div class="alert alert-success text-center" role="alert">
            <?php echo $msg; ?><button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
        </div>
        <?php } else { ?>
            <div class="alert alert-danger text-center" role="alert">
            <?php echo $msg; ?><button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
        </div>
        <?php } ?>
    <?php } ?>
    <div class="title-home text-center">
        <h2>Detalhes da Tarefa:</h2>
    </div>
    <div class="detail-task container-fluid">
        <div class="task card">
            <div class="task-title">
                <h3><?php echo $title; ?> #<?php echo $task_id; ?></h3>
            </div>
            <div class="info">
                <span>Status: <?php echo $status; ?></span>
                <span>Categoria: <?php echo $category; ?></span>
                <span>Prazo: <?php echo $deadline; ?></span>
                <span>Data de Criação: <?php echo $date_created; ?></span>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="description">
                        <p>Descrição:</p>
                        <p><?php echo $description; ?></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top">
                                <a type="button" class="btn btn-success w-75" href="../Controllers/atualizar.php?id_tarefa=<?php echo $task_id; ?>&status=2"> <i class="bx bx-check"></i>Concluir</a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="display-buttons">
                                <a type="button" class="btn btn-primary" href="editar_tarefa.php?id_tarefa=<?php echo $task_id; ?>"> <i class="bx bx-pencil"></i>Editar</a>
                                <a type="button" class="btn btn-danger" href="../Controllers/deletar.php?id=<?php echo $task_id; ?>"> <i class="bx bx-trash"></i>Eliminar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once("../template/footer.php"); ?>