<?php
require_once('../Configs/validaSession.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styleGeral.css">
    <link rel="stylesheet" type="text/css" href="css/PerfilStyle.css">
    <title>Perfil de <?= $_SESSION['nome']; ?> - Lions Bank</title>
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

    <section class="cont">
        <h1 class="h1P"></h1>
        <div class="table-responsive-md">
            <table class="table">
                <thead>
                </thead>
                <tbody class="tbody">
                </tbody>
            </table>
            <div class="form-button justify-content-end">
                    <a class="btn btn-primary" href="EditarView.php">Editar</a>
                    <a class="btn btn-primary"  href="Dashboard.php">Voltar</a>
                </div>
        </div>
    </section>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
         integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
         integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
     </script>
     <script src="js/perfil.js"></script>
</body>

</html>