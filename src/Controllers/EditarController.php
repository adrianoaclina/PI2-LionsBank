<?php

include_once("../Configs/validaSession.php");
include_once("../Configs/conexao.php");

$id = $_GET['id'];

$busca = "SELECT * FROM usuarios where idUsuario = $id";
$con = $db->query($busca) or die($db->error);
$row = $con->fetch_array();
?>
