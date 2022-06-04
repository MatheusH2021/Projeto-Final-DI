<?php
if (isset($_GET['status'])){
    $status = $_GET['status'];
} else {
    $status = '';
}

switch($status){
    case 1:
        $msg = "Por Favor, preencha todos os campos para realizar cadastro!";
        break;
    case 2:
        $msg = "Ususário já cadastrado, insira outro nome de usuário!";
        break;
    case 3:
        $msg = "As senhas não coincidem, Por favor confirme sua senha!(OBS: Sua senha deve possuir mais que 6 caracteres)";
        break;
    case 4:
        $msg = "Usuario deve possuir mais que 3 e menos que 10 caracteres, por favor digite um usuário Válido";
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Local-->
    <link rel="stylesheet" href="assets/css/login-page.css">
    <script src="assets/js/scrypt.js"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!------------->
    <title>Get it Done! - Organizador de Tarefas</title>
</head>
<body>
    <div class="wrapper">
        <div class="card text-center">
            <div class="title">
                <h1>
                    Get it done!
                </h1>
            </div>
            <?php if (isset($msg)){ ?> 
                <div class="alert alert-danger" role="alert">
                    <?php echo $msg; ?><button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
                </div>
            <?php  } ?> 
            <form class="form-control" action="Controllers/valida_cadastro.php" method="post" autocomplete="off">
                <div class="sub-title">
                    <h4>
                    Criar Conta
                    </h4>
                </div>
                <div class="input">
                    <div class="input-group">
                        <span class="input-group-text btn btn-primary" id="basic-addon1"><i class="bx bx-user"></i></span>
                        <input class="form-control" type="text" name="user" id="user" placeholder="Usuário">
                    </div>
                </div>
                <div class="input">
                    <div class="input-group">
                        <span class="input-group-text btn btn-primary" id="basic-addon1"><i class="bx bx-lock-open"></i></span>
                        <input class="form-control" type="password" name="passwrd" id="passwrd" placeholder="Senha">
                    </div>
                </div>
                <div class="input">
                    <div class="input-group">
                        <span class="input-group-text btn btn-primary" id="basic-addon1"><i class="bx bx-lock"></i></span>
                        <input class="form-control" type="password" name="confirm_passwrd" id="confirm_passwrd" placeholder="Confirmar Senha">
                    </div>
                </div>
                <div class="button-display text-center">
                    <button class="btn btn-primary">Cadastrar</button>
                </div>                       
            </form>
            <div class="register">
                <p>Já possui uma conta? <a href="index.php">Faça Login!</a></p>
            </div>
        </div>
    </div>
</body>
</html>