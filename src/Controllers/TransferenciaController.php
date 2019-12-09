<?php
require_once("../Configs/ValidaSession.php");
require_once("../Configs/Conexao.php");

$json =  file_get_contents('php://input');
$transferencia = json_decode ($json);
$contaDepositante = $_SESSION['idUsuario'];
$today = date("Y-m-d H:i:s");

$consulta2 = "SELECT * FROM Conta where idConta = {$contaDepositante}";
$con2 = $db->query($consulta2) or die($db->error);
$contaD = $con2->fetch_array();

$consulta4 = "SELECT * FROM Conta where idConta = {$transferencia->contaR}";
$con4 = $db->query($consulta4) or die($db->error);
$contaR = $con4->fetch_array();

if(isset($contaDepositante) && ($transferencia->contaR) && ($transferencia->nomeR) && ($transferencia->cpfR) && ($transferencia->valor)) {  
  $pTransferencia = mysqli_prepare($db, 'INSERT INTO Transferencia (depositante, recebedor, valor, dataT) VALUES (?,?,?,?)');
  mysqli_stmt_bind_param($pTransferencia, 'ssds', $contaDepositante, $transferencia->contaR, $transferencia->valor, $today);
  if (mysqli_stmt_execute($pTransferencia)) {
    $saldoAtualizadoR = $contaR['saldo'] + $transferencia->valor;
    $saldoAtualizadoD = $contaD['saldo'] - $transferencia->valor;
    $pUpdateR = mysqli_prepare($db, 'UPDATE Conta set saldo = ? WHERE idConta = ?');
    mysqli_stmt_bind_param($pUpdateR, 'di', $saldoAtualizadoR, $transferencia->contaR);
      if (mysqli_stmt_execute($pUpdateR)) {
        $pUpdateD = mysqli_prepare($db, 'UPDATE Conta set saldo = ? WHERE idConta = ?');
        mysqli_stmt_bind_param($pUpdateD, 'di', $saldoAtualizadoD, $contaDepositante);
        if (mysqli_stmt_execute($pUpdateD)) {
          echo "1";
        }else {
          echo "0";
        }
      }else {
        echo "0";
      }      
  }else {
    echo "0";
  }
}else {
  echo "0";
}