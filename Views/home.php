<?php
require_once('../template/header.php');

$db = new MySql();

if (isset($_GET['status']) == 1){
    $msg = "Bem Vindo(a) {$_SESSION['user_name']}";
}

$result  = $db->selectDB("count(id) as 'qtd_pendentes'", "tarefas", "usuario_id={$_SESSION['user_id']} and status='Pendente';");
$result2 = $db->selectDB("count(id) as 'qtd_concluidos'", "tarefas", "usuario_id={$_SESSION['user_id']} and status='Concluida';");
$result3 = $db->selectDB("count(id) as 'qtd_escola'", "tarefas", "usuario_id={$_SESSION['user_id']} and categoria='Escola';");
$result4 = $db->selectDB("count(id) as 'qtd_trabalho'", "tarefas", "usuario_id={$_SESSION['user_id']} and categoria='Trabalho';");
$result5 = $db->selectDB("count(id) as 'qtd_independente'", "tarefas", "usuario_id={$_SESSION['user_id']} and categoria='Independente';");

if (isset($result[0])){
    $pendente = $result[0]['qtd_pendentes'];
} else {
    $pendente = 0;
}
if (isset($result2[0])){
    $concluidos = $result2[0]['qtd_concluidos'];
} else {
    $concluidos = 0;
}
if (isset($result3[0])){
    $escola = $result3[0]['qtd_escola'];
} else {
    $escola = 0;
}
if (isset($result4[0])){
    $trabalho = $result4[0]['qtd_trabalho'];
} else {
    $trabalho = 0;
}
if (isset($result5[0])){
    $independente = $result5[0]['qtd_independente'];
} else {
    $independente = 0;
}

?>

<div class="wrapper">
    <?php if(isset($msg)){ ?>
        <div class="alert alert-success text-center" role="alert">
            <?php echo $msg; ?><button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <div class="Charts container text-center">
        <h3 class="title-home">Resumo de Tarefas:</h3>
        <div class="row">
            <div class="col-lg-6">
                <div class="chart-frame">
                    <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="chart-frame">
                    <canvas id="myChart2" style="width:100%;max-width:500px"></canvas>  
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    new Chart("myChart", {
        type: "pie",
        data: {
            labels: ['Concluídas', 'Pendentes'],
            datasets: [{
                backgroundColor: ['green', 'blue'],
                data: [ <?php echo $concluidos; ?> , <?php echo $pendente; ?> ]
        }]
        },
        options: {
            title: {
                display: true,
                text: "Tarefas: Concluídas x Pendentes:"
            }
        }
    });

    new Chart("myChart2", {
        type: "bar",
        data: {
            labels: ["Escola", "Trabalho", "Independente"],
            datasets: [{
                backgroundColor: ["yellow", "red","blue"],
                data: [<?php echo $escola; ?>,<?php echo $trabalho; ?>,<?php echo $independente; ?>]
            }]
    },
    options: {
        title: {
            display: true,
            text: "Quantidade de tarefas por categoria:",
        }
    }
    }); 
</script>

<?php require_once('../template/footer.php'); ?>