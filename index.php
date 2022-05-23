<?php
if (isset($_GET['status'])){
    $status = $_GET['status'];
} else {
    $status = '';
}

switch($status){
    case 1:
        $msg = "Login bem sucedido!";
        break;
    case 2:
        $msg = "Logout realizado com sucesso!";
        break;
    case 3:
        $msg = "Cadastro realizado com sucesso! Faça login para começar!";
        break;
    case 4:
        $msg = "Usuário ou senha inválida! Por favor, Informe um usuário valido!";
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
            <?php if (isset($msg)){ 
                    if ($status <= 3){   ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $msg; ?>
                </div>
            <?php } else { ?> 
                <div class="alert alert-danger" role="alert">
                    <?php echo $msg; ?>
                </div>
            <?php  } 
              } ?> 
            <form class="form-control" action="Controllers/valida_login.php" method="post" autocomplete="off">
                <div class="sub-title">
                    <h4>
                        Login
                    </h4>
                </div>
                <div class="input">
                    <label  for="user">Nome: <label>
                    <input class="form-control" type="text" name="user" id="user">
                </div>
                <div class="input">
                    <label  for="passwrd">Senha: <label>
                    <input class="form-control" type="password" name="passwrd" id="passwrd">
                </div>
                <div class="button-display text-center">
                    <button class="btn btn-primary">Entrar</button>
                </div>                       
            </form>
            <div class="register">
                <p>Não possui conta? <a href="registrar.php">Cadastre-se!</a></p>
            </div>
        </div>
    </div>
</body>
</html>