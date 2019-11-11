<?php
include_once("../Configs/validaSession.php");
include_once("../Configs/conexao.php");


$consulta = "SELECT * FROM Transferencia";
$con = $db->query($consulta) or die($db->error);

if (isset($_POST['deletar'])) {
    $preparada = mysqli_prepare($db, 'DELETE FROM 
                                          Transferencia
                                          WHERE 
                                          idTransferencia = ?');

    mysqli_stmt_bind_param(
        $preparada,
        'i',
        $_POST['deletar']
    );

    if (mysqli_stmt_execute($preparada)) {
        header("Location: ../Views/Dashboard.php");
    }
} 
