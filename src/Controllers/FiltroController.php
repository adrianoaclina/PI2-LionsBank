<?php 
include_once("../Configs/validaSession.php");
include_once("../Configs/conexao.php");

$digitado = $_GET['digitado'];
$consulta = "SELECT destinatario FROM Transferencia where destinatario = {$digitado}";
$con = $db->query($consulta) or die($db->error);

while($listaT = $con->fetch_array()){
    $vetor[] = array_map('utf8_encode', $listaT);
}
echo json_encode($vetor);

