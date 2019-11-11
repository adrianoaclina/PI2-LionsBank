<?php
include_once("../configs/conexao.php");

$nome_usuario = isset($_POST['cad_nome']) ? $_POST['cad_nome'] : null;
$email_usuario = isset($_POST['cad_email']) ? $_POST['cad_email'] : null;
$senha_usuario = isset($_POST['cad_senha']) ? $_POST['cad_senha'] : null;
$token = md5(uniqid(rand() . date('Y-m-d H:i:s'), true));
$saldoInicial = 0;
$hash = password_hash($senha_usuario, PASSWORD_DEFAULT);

if (empty($_POST['id'])) {
    $preparada = mysqli_prepare($db, '	INSERT INTO Usuarios
                                            ( nome, email, senha, token)
                                            VALUES
                                            ( ?, ?, ?, ?)');

    mysqli_stmt_bind_param(
        $preparada,
        'ssss',
        $nome_usuario,
        $email_usuario,
        $hash,
        $token
    );

    echo mysqli_stmt_error($preparada);



    if (mysqli_stmt_execute($preparada)) {
        $preparaConta = mysqli_prepare($db, 'INSERT INTO Conta
                                                        (saldo, token)
                                                        VALUES
                                                        (?,?)');
        mysqli_stmt_bind_param($preparaConta, 'ds', $saldoInicial, $token);
        if (mysqli_stmt_execute($preparaConta)) {
            echo "<script>alert('Successfuly Saved');</script>";
            header('Location: ../Views/LoginView.php');
        }
    } else {
        echo mysqli_stmt_error($preparada);
    }
}

$login = null;

if (isset($_POST['login_email']) && ($_POST['login_senha'])) {
    $p = mysqli_prepare($db, 'SELECT idUsuario, nome, senha, token FROM Usuarios WHERE email = ?');
    mysqli_stmt_bind_param($p, 's', $_POST['login_email']);
    mysqli_stmt_execute($p);
    $result = mysqli_stmt_get_result($p);
    $usuario = $result->fetch_assoc();

    $verifyPass = password_verify($_POST['login_senha'], $usuario['senha']);
    if ($verifyPass) {
        $login = true;
    } else {
        $login = false;
    }
}
if ($login === true) {
    session_start();

    $_SESSION['idUsuario'] = $usuario['idUsuario'];
    $_SESSION['token'] = $usuario['token'];
    $_SESSION['nome'] = $usuario['nome'];

    header('Location: ../Views/Dashboard.php');

    exit();
}

if ($login === false) {

    echo '<script> 
          alert("Login ou senha inválida");
          </script>';
    header('Location: ../Views/LoginView.php');
}
