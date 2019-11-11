<?php
require('../Configs/validaSession.php');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bank Account</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleGeral.css" type="text/css">
    <link rel='stylesheet' type='text/css' media='screen' href='css/TransferenciaStyle.css'>
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
    <section>
        <h1>Transferência bancária</h1>
        <form class="container" method="POST" action="../Controllers/TransferenciaController.php">
            <div class="form-group">
                <label for="usr">Nome do Depositante</label>
                <input type="text" class="form-control" placeholder="<?php echo $_SESSION['nome']; ?>" name="contaDepositante" disabled />
            </div>
            <hr>
            <div class="form-group">
                <label for="contaRecebedor">Conta do Recebedor:</label>
                <input type="text" class="form-control" placeholder="Ex: 1" name="contaRecebedor"/>
            </div>
            <div class="form-group">
                <label for="nomeRecebedor">Nome do Recebedor:</label>
                <input type="text" class="form-control" placeholder="Ex: Adriano" name="nomeRecebedor"/>
            </div>
            <div class="form-group">
                <label for="cpfRecebedor">CPF do Recebedor:</label>
                <input type="text" class="form-control" placeholder="Ex: 12345678901" name="cpfRecebedor"/>
            </div>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control" placeholder="Ex: 0.0" name="valor"/>
            </div>
            <div class="form-button">
                <input type="submit" class="btn btn-primary" value="Transferir">
                <input type="button" class="btn btn-primary" value="Voltar">
            </div>
        </form>
    </section>
</body>

</html>