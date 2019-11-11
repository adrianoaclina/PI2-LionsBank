<?php
require_once("../Controllers/PerfilController.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/PerfilStyle.css">
    <title>Perfil de <?php echo $_SESSION['nome']; ?></title>
</head>

<body>
    <header>
        <nav class="menu">
            <ul>
                <li>
                    <a href="TransferenciaView.php"><img src="img/ic_compare_arrows_white_24dp.png" alt="Transferencia bancaria" title="Transferencia bancaria"></a>
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

    <section class="cont">
        <table border="1" width=100%>
            <tr>
                <td>Conta</td>
                <td>Nome</td>
                <td>Sobrenome</td>
                <td>Email</td>
                <td>CPF</td>
                <td>Telefone</td>
                <td>Ações</td>
            </tr>
            <?php while ($dado = $con->fetch_array()) { ?>
                <tr>
                    <td><?php $arrayConta = $conta->fetch_array();
                            if ($arrayConta['token'] == $dado['token']) {
                                echo $arrayConta['idConta'];
                            } else {
                                echo "Erro ao localizar o idConta";
                            }
                            ?></td>
                    <td><?= $dado['nome']; ?></td>
                    <td><?= $dado['sobrenome']; ?></td>
                    <td><?= $dado['email']; ?></td>
                    <td><?= $dado['cpf']; ?></td>
                    <td><?= $dado['telefone']; ?></td>

                    <td>
                        <a href="../Views/EditarView.php?id=<?php echo $dado['idUsuario']; ?>">Editar</a>
                        <a href="Dashboard.php">Voltar</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </section>
</body>

</html>