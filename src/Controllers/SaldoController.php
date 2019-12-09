<?php
include_once("../Configs/validaSession.php");
include_once("../Configs/conexao.php");


$conSaldo = "SELECT saldo FROM Conta where idConta = {$_SESSION['idUsuario']}";
$conS = $db->query($conSaldo) or die($db->error);


while($listaT = $conS->fetch_array()){
    $saldo[] = array_map('utf8_encode', $listaT);
}
echo json_encode($saldo);