<?php

include_once("../Configs/validaSession.php");
include_once("../Configs/conexao.php");
// Seleciona todos os usuarios da tabela "Usuarios e atribui a um array"
$consulta = "SELECT * FROM usuarios where idUsuario = {$_SESSION['idUsuario']}";
$con = $db->query($consulta) or die($db->error);
$usuario = $con->fetch_assoc();

echo json_encode($usuario); 
// $array = array($usuario['idUsuario'], $usuario['nome'], $usuario['sobrenome'], $usuario['email'],$usuario['cpf'],$usuario['telefone']);

