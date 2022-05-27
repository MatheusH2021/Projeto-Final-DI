<?php
require_once('../template/header.php');

$db = new Mysql();

$result = $db->selectDB("titulo, categoria, status, data_prazo, data_cadastro", "tarefas", "usuario_id={$_SESSION['user_id']};");
$table = '';
if (isset($result[0])){
    foreach($result as $info){
        $table .= "<tr>";
        $table .= "<td>{$info['titulo']}</td>";
        $table .= "<td>{$info['categoria']}</td>";
        $table .= "<td>{$info['status']}</td>";
        $table .= "<td>{$info['data_prazo']}</td>";
        $table .= "<td>{$info['data_cadastro']}</td>";
        $table .= "</tr>";
    }
} else {
    $table = "<tr><td>Nenhuma Tarefa cadastrada</td></tr>";
}

?>
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