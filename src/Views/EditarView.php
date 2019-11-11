<?php
include_once("../Controllers/EditarController.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/EditarStyle.css">
    <title>Editar Usuarios</title>
</head>

<body>
    <header>
        <nav class="menu">
            <ul>
                <li>
                    <a href="#"><img src="img/ic_compare_arrows_white_24dp.png" alt="Transferencia bancaria" title="Transferencia bancaria"></a>
                </li>
                <li>
                    <a href="PerfilView.php"><img src="img/ic_account_box_white_24dp.png" alt="Perfil" title="Perfil"></a>
                </li>
                <li>
                    <a href="../Configs/logout.php"><img src="img/ic_exit_to_app_white_24dp.png" alt="Logout" title="Logout"></a>
                </li>
            </ul>
        </nav>
    </header>
    <h1>Edite seus dados</h1>
    <!-- <form method="POST" action="../Controllers/SalvarEditar.php">
        <input type="hidden" value="<?php echo $id; ?>" name="id" />
        <input type="text" value="<?php echo $row['nome']; ?>" name="nome" />
        <input type="text" value="<?php echo $row['sobrenome']; ?>" name="sobrenome" />
        <input type="email" value="<?php echo $row['email']; ?>" name="email" />
        <input type="password" value="<?php echo $row['senha']; ?>" name="senha" />
        <input type="text" value="<?php echo $row['cpf']; ?>" name="cpf" />
        <input type="tel" value="<?php echo $row['telefone']; ?>" name="telefone" />
        <input type="submit" value="editar" />
    </form> -->
    <form class="container form-editar" method="POST" action="../Controllers/SalvarEditar.php">
        <input type="hidden" value="<?php echo $id; ?>" name="id" />
        <div class="form-group">
            <label for="usr">Nome:</label>
            <input type="text" class="form-control" value="<?php echo $row['nome']; ?>" name="nome" />
        </div>
        <div class="form-group">
            <label for="usr">Sobrenome:</label>
            <input type="text" class="form-control" value="<?php echo $row['sobrenome']; ?>" name="sobrenome" />
        </div>
        <div class="form-group">
            <label for="usr">Email:</label>
            <input type="text" class="form-control" value="<?php echo $row['email']; ?>" name="email" />
        </div>
        <div class="form-group">
            <label for="pwd">Senha:</label>
            <input type="password" class="form-control" value="<?php echo $row['senha']; ?>" name="senha" />
        </div>
        <div class="form-group">
            <label for="usr">CPF:</label>
            <input type="text" class="form-control" value="<?php echo $row['cpf']; ?>" name="cpf" />
        </div>
        <div class="form-group">
            <label for="usr">Telefone:</label>
            <input type="text" class="form-control" value="<?php echo $row['telefone']; ?>" name="telefone" />
        </div>
        <div class="form-button justify-content-end">
            <input type="submit" class="btn btn-primary" value="Editar">
            <input type="button" class="btn btn-primary" value="Voltar">
        </div>
    </form>

</body>

</html>