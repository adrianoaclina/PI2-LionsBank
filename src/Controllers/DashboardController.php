<?php
include_once("../Configs/validaSession.php");
include_once("../Configs/conexao.php");

$consulta = "SELECT * FROM Transferencia where depositante = {$_SESSION['idUsuario']} or recebedor = {$_SESSION['idUsuario']}";
$con = $db->query($consulta) or die($db->error);
// $listaT = $con->fetch_assoc();
while($listaT = $con->fetch_array()){
    $vetor[] = array_map('utf8_encode', $listaT);
    $vetor[] = $_SESSION['idUsuario'];
}

echo json_encode($vetor);

if (isset($_POST['deletar'])) {
    $preparada = mysqli_prepare($db, 'DELETE FROM Transferencia WHERE idTransferencia = ?');
    mysqli_stmt_bind_param($preparada,'i',$_POST['deletar']);
    if (mysqli_stmt_execute($preparada)) {
        header("Location: ../Views/Dashboard.php");
    }
} 

