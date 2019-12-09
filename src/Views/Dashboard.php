 <?php
 require_once('../Configs/validaSession.php');
 ?>
 <!DOCTYPE html>
 <html>

 <head>
     <meta charset='utf-8'>
     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
     <title>Dashboard - Lions Bank</title>
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="css/styleGeral.css">
     <link rel="stylesheet" type="text/css" href="css/DashboardStyle.css">
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
     <div class="modal fade" id="modalDetalhes" tabindex="-1" role="dialog" aria-labelledby="modalDetalhes"
         aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="modalDetalhesTitle"></h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div id="modalDetalhesBody" class="modal-body">

                 </div>
             </div>
         </div>
     </div>
     <main class="container-fluid">
         <div class="alinhaTitulo">
             <div></div>
             <div><h2 class="card-title">Histórico de Transferencias</h2></div>
         </div>
     
         <section class="principal">

             <section class="sections card text-white bg-secondary mb-3">
                 <div class="card-header">Saldo Atual</div>
                 <div class="card-body">
                     <h5 class="card-title" id="saldo"></h5>
                 </div>
             </section>
             <section class="sections" id="historico">
                 
                 <table class="table table-modal">
                     <p id="mssg-cad-error">Não foi possível excluir do histórico a transferência, tente novamente mais
                         tarde!
                     </p>
                     <p id="mssg-cad-sucess"></p>
                     <thead class="thead-dark">
                         <tr>
                             <th scope="col-1">#</th>
                             <th scope="col-1">Valor</th>
                             <th scope="col-1">Data da Transferencia</th>
                             <th scope="col-1">Excluir</th>
                             <th scope="col-1">Detalhes</th>
                         </tr>
                     </thead>
                     <tbody id="tbody">
                        
                     </tbody>

                 </table>
             </section>
             <section id="feedback" class="feedback card text-white">
                 <h3>Tem um feedback? Envie abaixo</h4>
                     <form class="form-feedback form-group" action="" method="post">
                         <input type="text" class="form-control" name="text_feedback" id="text_feedback"
                             placeholder="Escreva seu feedback aqui">
                         <input type="submit" class="btn btn-primary" id="enviarFeedback" value="Enviar">
                     </form>
             </section>
             <button type="button" id="btnFeedback" class="button btn pmd-btn-fab btn-primary pmd-ripple-effect"
                 title="Feedback" alt="Feedback"><i class="material-icons pmd-sm">feedback</i></button>
     </main>
     <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
         integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
         integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
     </script>
     <script src="js/dashboard.js"></script>
     <script src="js/deletar.js"></script>
     <script src="js/detalhes.js"></script>

 </body>

 </html>