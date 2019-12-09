<?php
include_once("../Configs/validaSession.php");
include_once("../Configs/conexao.php");

$id = $_GET['id'];


$consulta = "SELECT * FROM Transferencia where idTransferencia = {$id}";
$con2 = $db->query($consulta) or die($db->error);
$transferencias = $con2->fetch_assoc();

$consultaNome1 = "SELECT nome FROM Usuarios where idUsuario = {$transferencias['depositante']}";
$consN = $db->query($consultaNome1) or die($db->error);
$nome1 = $consN->fetch_assoc();
$consultaNome2 = "SELECT nome FROM Usuarios where idUsuario = {$transferencias['recebedor']}";
$consN2 = $db->query($consultaNome2) or die($db->error);
$nome2 = $consN2->fetch_assoc();

$array = array($transferencias['idTransferencia'], $nome1['nome'], $nome2['nome'], $transferencias['valor'],$transferencias['dataT']);

echo json_encode($array);

