<?php
include_once("../configs/conexao.php");

$json =  file_get_contents('php://input');
$usuario = json_decode ($json);


$token = md5(uniqid(rand() . date('Y-m-d H:i:s'), true));
$saldoInicial = 50;
$hash = password_hash($usuario->senha, PASSWORD_DEFAULT);

if (!empty($usuario->nome) && ($usuario->sobrenome) && ($usuario->email) && ($usuario->senha) && ($usuario->cpf) && ($usuario->telefone) ) {
    if (empty($usuario->id)) {
        $preparada = mysqli_prepare($db, '	INSERT INTO Usuarios ( nome, sobrenome, email, senha, cpf, telefone, token) VALUES ( ?, ?, ?, ?, ?, ?, ?)');
        mysqli_stmt_bind_param($preparada,'sssssss', $usuario->nome, $usuario->sobrenome, $usuario->email, $hash, $usuario->cpf, $usuario->telefone,$token);
        echo mysqli_stmt_error($preparada);
        if (mysqli_stmt_execute($preparada)) {
            $preparaConta = mysqli_prepare($db, 'INSERT INTO Conta (saldo, token) VALUES (?,?)');
            mysqli_stmt_bind_param($preparaConta, 'ds', $saldoInicial, $token);
            if (mysqli_stmt_execute($preparaConta)) {
                echo "1";      
            }else {
                echo "0";
            }
        } else {
            echo "0";
        }
    }else{
        echo "0";
    }
}else{
    echo "0";
}
?>