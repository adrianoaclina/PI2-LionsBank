<?php
require_once("../Configs/ValidaSession.php");
require_once("../Configs/Conexao.php");


$contaDepositante = $_SESSION['idUsuario'];
$contaReceptor = $_POST['contaRecebedor'];
$nomeReceptor = $_POST['nomeRecebedor'];
$cpfReceptor = $_POST['cpfRecebedor'];
$valorDepositado = $_POST['valor'];
$today = date("Y-m-d H:i:s");




if (isset($_POST['contaRecebedor']) && ($_POST['nomeRecebedor']) && ($_POST['cpfRecebedor']) && ($_POST['valor'])) {
    
    $pTransferencia = mysqli_prepare($db, 'INSERT INTO Transferencia
                                            (remetente, destinatario, valor, dataT)
                                            VALUES
                                            (?,?,?,?)');

    mysqli_stmt_bind_param($pTransferencia, 'ssds', $contaDepositante, $contaReceptor, $valorDepositado, $today);

    if (mysqli_stmt_execute($pTransferencia)) {
        
        $pUpdateRecebedor = mysqli_prepare($db, 'UPDATE Usuarios set saldo = ?');        
        header('Location: ../Views/Dashboard.php');
    }
} else{
    echo "Preencha todos os campos corretamente!!!";
}
