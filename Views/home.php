<?php
require_once('../template/header.php');

if (isset($_GET['status']) == 1){
    $msg = "Bem Vindo(a) {$_SESSION['user_name']}";
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
                data: [10,20]
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
                data: [10,10,10]
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