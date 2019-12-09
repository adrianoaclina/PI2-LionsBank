<?php
include_once("../Configs/validaSession.php");
include_once("../Configs/conexao.php");

$json =  file_get_contents('php://input');
$deletar = json_decode ($json);

if (isset($deletar->id)) {
    $preparada = mysqli_prepare($db, 'DELETE FROM Transferencia WHERE idTransferencia = ?');
    mysqli_stmt_bind_param($preparada,'i',$deletar->id);
    if (mysqli_stmt_execute($preparada)) {
        echo "1";
    }else{
        echo "0";
    }
} 
