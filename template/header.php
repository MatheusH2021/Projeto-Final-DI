<?php 

require_once('../Controllers/DB_Class.php');

session_start();

if (!isset($_SESSION['user_id'])){
    header("location:../index.php?status=5");
}


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Local-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <script src="../assets/js/scrypt.js"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!------------->
    <!--CHARTS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <!---------->
    <title>Get it Done! - Organize suas Tarefas</title>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a style="text-decoration: none;"href="../Views/home.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Get it Done!</span></a>
                <div class="nav_list"> 
                    <a style="text-decoration: none;" href="../Views/home.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                    <a style="text-decoration: none;" href="../Views/minhas_tarefas.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Minhas Tarefas</span> </a> 
                    <a style="text-decoration: none;" href="../Views/add_tarefa.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Adicionar Tarefa</span> </a> 
                </div>
            </div> <a style="text-decoration: none;" href="../Controllers/logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>