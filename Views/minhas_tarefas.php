<?php
require_once('../template/header.php');

$db = new Mysql();

$result = $db->selectDB("id, titulo, categoria, status, data_prazo, data_cadastro", "tarefas", "usuario_id={$_SESSION['user_id']};");
$table = '';
if (isset($result[0])){
    foreach($result as $info){
        $table .= "<tr>";
        $table .= "<td>{$info['titulo']}</td>";
        if ($info['categoria'] == 'Escola'){
            $table .= "<td><span style='color: white;' class='btn btn-warning btn-sm'>{$info['categoria']}</span></td>";    
        } else if ($info['categoria'] == "Trabalho"){
            $table .= "<td><span style='color: white;' class='btn btn-info btn-sm'>{$info['categoria']}</span></td>";    
        } else {
            $table .= "<td><span class='btn btn-secondary btn-sm'>{$info['categoria']}</span></td>";    
        }
        if ($info['status'] == "Pendente"){
            $table .= "<td style='color: red;'>{$info['status']}</td>";
        } else {
            $table .= "<td style='color: green;'>{$info['status']}</td>";
        }
        if ($info['data_prazo'] == ''){
            $table .= "<td>Sem prazo</td>";
        } else {
            $table .= "<td>{$info['data_prazo']}</td>";
        }
        $table .= "<td>{$info['data_cadastro']}</td>";
        $table .= "<td><a type='button' class='action btn btn-success btn-sm' href='../Controllers/atualizar.php?id={$info['id']}&status=1'><i class='bx bx-check'></i></a>";
        $table .= "<a type='button' class='action btn btn-danger btn-sm' href='../Controllers/deletar.php?id={$info['id']}'><i class='bx bx-trash'></i></a>";
        $table .= "<a type='button' class='action btn btn-primary btn-sm' href=''><i class='bx bx-pencil'></i></a>";
        $table .= "<a type='button' class='action btn btn-info btn-sm' href='../Views/detalhes_tarefa.php'><i class='bx bx-detail'></i></a></td>";
        $table .= "</tr>";
    }
} else {
    $table = "<tr><td colspan=6>Nenhuma Tarefa cadastrada</td></tr>";
}
?>
<!-- <a type="button" class="btn btn-success" href=""><i class="bx bx-check"></i></a> -->
<div class="wrapper">
    <div class="table-frame text-center">
        <div class="title-home">
            <h2>Minhas Tarefas:</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Status</th>
                    <th scope="col">Prazo</th>
                    <th scope="col">Data de Criação</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
        <tbody>
            <?php echo $table; ?>
        </tbody>
</table>
    </div>

</div>
<?php require_once('../template/footer.php'); ?>