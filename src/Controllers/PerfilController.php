<?php

include_once("../Configs/validaSession.php");
include_once("../Configs/conexao.php");
// Seleciona todos os usuarios da tabela "Usuarios e atribui a um array"
$consulta = "SELECT * FROM usuarios where idUsuario = {$_SESSION['idUsuario']}";
$consultaConta = "SELECT * FROM Conta where idConta = {$_SESSION['idUsuario']}";
$con = $db->query($consulta) or die($db->error);
$conta = $db->query($consultaConta) or die($db->error);

