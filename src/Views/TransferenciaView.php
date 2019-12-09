<?php
require_once('../Configs/validaSession.php');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Transferência - Lions Bank</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleGeral.css" type="text/css">
    <link rel='stylesheet' type='text/css' media='screen' href='css/TransferenciaStyle.css'>
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
    <section>
        <h1>Transferência bancária</h1>
        <form class="container" method="POST" action="">
            <div class="form-group">
                <label for="usr">Nome do Depositante</label>
                <input type="text" class="form-control" placeholder="<?php echo $_SESSION['nome']; ?>"
                    name="contaDepositante" disabled />
            </div>
            <hr>
            <div class="form-group">
                <label for="contaRecebedor">Conta do Recebedor:</label>
                <input type="text" class="form-control" id="contaR" placeholder="Ex: 1" name="contaRecebedor"/>
            </div>
            <div class="form-group">
                <label for="nomeRecebedor">Nome do Recebedor:</label>
                <input type="text" class="form-control" id="nomeR" placeholder="Ex: Adriano" name="nomeRecebedor"/>
            </div>
            <div class="form-group">
                <label for="cpfRecebedor">CPF do Recebedor:</label>
                <input type="text" class="form-control cpf" id="cpfR" placeholder="CPF do recebedor:" min-width="11" max-width="11" name="cpfRecebedor"/>
            </div>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control valor" id="valor" placeholder="Valor:" name="valor"/>
            </div>
            <div class="form-button">
                <input type="submit" id="submit" class="btn btn-primary" value="Transferir">
                <a class="btn btn-primary" href="Dashboard.php">Voltar</a>
            </div>
            <p id="mssg-cad-error">Não foi possível efetuar a transferência, preencha os campos corretamente!</p>
            <p id="mssg-cad-sucess">Transferencia efetuada com sucesso!</p>
        </form>
    </section>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/transferencia.js"></script>
</body>

</html>