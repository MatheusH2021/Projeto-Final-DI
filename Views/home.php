<?php
require_once('../template/header.php');
?>

<div class="wrapper">
    <?php if(isset($_SESSION['user_id'])){ ?>
        <div class="alert alert-success" role="alert">
            Bem-Vindo <?php echo $_SESSION['user_name']; ?>
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
            labels: ["Italy", "France", "Spain"],
            datasets: [{
                backgroundColor: ["red", "green","blue"],
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