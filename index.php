<?php
if (isset($_GET['status'])){
    $status = $_GET['status'];
    $msg = "Pegou o status";
} else {
    $status = '';
}

switch($status){
    case 1:
        $msg = "Login bem sucedido!";
        break;
    case 2:
        $msg = "Login Invalido";
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
    <link rel="stylesheet" href="assets/css/style.css">
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
                <h3>
                    Get it done!
                </h3>
            </div>
            <?php if (isset($msg)){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $msg; ?>
                </div>
            <?php } ?>
            <form class="form-control" action="valida_login.php" method="post" autocomplete="off">
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
                <p>Não possui conta? <a href="register.php">Cadastre-se</a></p>
            </div>
        </div>
    </div>
</body>
</html>