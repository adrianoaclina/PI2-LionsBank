<?php
session_start();
include_once("../Configs/validaSession.php");
include_once("../Configs/conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

$hash = password_hash($senha, PASSWORD_DEFAULT);

    $preparada = mysqli_prepare($db, '	UPDATE usuarios
                                                SET
                                                nome = ?,
                                                sobrenome = ?,
                                                email = ?,
                                                senha = ?,
                                                cpf = ?,
                                                telefone = ?
                                                WHERE
                                                idUsuario = ?');
    mysqli_stmt_bind_param($preparada,
                            'ssssssi',
                            $nome,
                            $sobrenome,
                            $email,
                            $hash,
                            $cpf,
                            $telefone,
                            $id
                          );
    if (mysqli_stmt_execute($preparada)) {
        echo "Dados de $nome atualizados com sucesso";
        
    }
    // sleep(3);
    header("Location: ../Views/PerfilView.php");
