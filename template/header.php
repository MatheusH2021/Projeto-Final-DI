<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Local-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/scrypt.js"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!------------->
    <!--CHARTS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <!---------->
    <title>Get it Done! - Organize suas Tarefas</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="Pages container-fluid">
            <div>
                <a class="navbar-brand" style="color: white;" href="#">Get it Done!   </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" style="color: white;" aria-current="page" href="../Views/home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="color: white;" aria-current="page" href="../Views/minhas_tarefas.php">Minhas Tarefas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="color: white;" href="../Views/add_tarefa.php">Adicionar Tarefa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="color: white;" href="../Controllers/logout.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>