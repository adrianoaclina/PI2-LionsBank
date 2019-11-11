 <?php
    require_once('../Controllers/DashboardController.php');

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
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="css/styleGeral.css">
     <link rel="stylesheet" type="text/css" href="css/DashboardStyle.css">
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
     <main class="cont">
         <section>
             <section class="historicoTranf">
                 <h4 style="text-align: center;">Histórico de Transferencias</h4>
                 <form method="post">
                     <table class="table">
                         <thead class="thead-dark">
                             <tr>
                                 <th scope="col-1">#</th>
                                 <th scope="col-1">Recebedor</th>
                                 <th scope="col-1">Valor</th>
                                 <th scope="col-1">Data</th>
                                 <th scope="col-1">Excluir</th>
                             </tr>
                         </thead>
                         <?php while ($dado = $con->fetch_array()) { ?>
                             <tbody>
                                 <tr>
                                     <th scope="row"><?= $dado['idTransferencia']; ?></th>
                                     <td><?= $dado['destinatario'];?></td>
                                     <td><?= $dado['valor']; ?></td>
                                     <td><?= $dado['dataT']; ?></td>
                                     <td>
                                         <button class="btn" style="padding: 0rem .75rem;" name="deletar" value="<?= $dado['idTransferencia']; ?>">
                                             <i class="material-icons">
                                                 delete_forever
                                             </i>
                                         </button>
                                     </td>
                                 </tr>
                             </tbody>
                         <?php } ?>
                     </table>
                 </form>
             </section>
             <section>

             </section>
         </section>

     </main>
 </body>

 </html>