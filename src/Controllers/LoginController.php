<?php
include_once("../configs/conexao.php");

    $login = $_POST['login'];	//Pegando dados passados por AJAX
    $senha = $_POST['senha'];


    $p = mysqli_prepare($db, 'SELECT idUsuario, nome, senha, token FROM Usuarios WHERE email = ?');
    mysqli_stmt_bind_param($p, 's', $_POST['login']);
    mysqli_stmt_execute($p);
    $result = mysqli_stmt_get_result($p);
    $usuario = $result->fetch_assoc();
    $verifyPass = password_verify($_POST['senha'], $usuario['senha']);
    if ($verifyPass) {
        $loginA = true;
    } else {
        $loginA = false;
    }
   
	if (mysqli_num_rows($result) != 0 && $loginA == true){
		echo 1;	//Responde sucesso
		if(!isset($_SESSION)) 	//verifica se há sessão aberta
		session_start();		//Inicia seção
		//Abrindo seções
        $_SESSION['idUsuario'] = $usuario['idUsuario'];
        $_SESSION['token'] = $usuario['token'];
        $_SESSION['nome'] = $usuario['nome'];	
		exit;	
	}
	else{
		echo 0;
	}
?>