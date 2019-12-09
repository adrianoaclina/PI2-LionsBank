<?php
include_once("../Controllers/EditarController.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styleGeral.css">
    <link rel="stylesheet" href="css/EditarStyle.css">
    <title>Editar usuário - Lions Bank</title>
</head>

<body>
    <header>
         <nav class="navbar navbar-expand-lg bg-secondary">
             <div class="navbar navbar-collapse " id="navbarTogglerDemo02">
                 <ul class="navbar-nav mr-auto mt-2 mt-lg-2">
                     <li class="nav-item active">
                         <a href="TransferenciaView.php"><img src="img/ic_compare_arrows_white_24dp.png"
                                 alt="Transferencia bancaria" title="Transferencia bancaria"></a>
                     </li>
                 </ul>

                 <ul class="navbar-nav my-2 my-lg-0">
                     <li class="nav-item">
                         <a href="PerfilView.php"><img src="img/ic_account_box_white_24dp.png" alt="Perfil"
                                 title="Perfil"></a>
                     </li>
                     <li class="nav-item">
                         <a href="../Configs/logout.php"><img src="img/ic_exit_to_app_white_24dp.png" alt="Logout"
                                 title="Logout"></a>
                     </li>
                 </ul>
                 <div class="brand-centered">
                     <a class="navbar-brand"><img src="img/logo-banco-header.png" width="290px" height="100px"
                             alt="Lions Bank">
                     </a>
                 </div>

             </div>
         </nav>
     </header>
    <h1>Edite seus dados</h1>
    <form class="container form-editar" method="POST" action="../Controllers/SalvarEditar.php">
        <input type="hidden" value="<?php echo $id; ?>" name="id" />
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" value="<?php echo $row['nome']; ?>" name="nome" />
        </div>
        <div class="form-group">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" class="form-control" value="<?php echo $row['sobrenome']; ?>" name="sobrenome" />
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" value="<?php echo $row['email']; ?>" name="email" />
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" value="" name="senha" />
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control cpf" value="<?php echo $row['cpf']; ?>" name="cpf" />
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control tel" value="<?php echo $row['telefone']; ?>" name="telefone" />
        </div>
        <div class="form-button justify-content-end">
            <input type="submit" class="btn btn-primary" value="Salvar">
            <a  class="btn btn-primary"  href="PerfilView.php">Voltar</a>

        </div>
    </form>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/editar.js"></script>
</body>

</html>