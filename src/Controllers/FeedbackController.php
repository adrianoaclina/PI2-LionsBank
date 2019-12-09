<?php 
include_once("../Configs/validaSession.php");
include_once("../Configs/conexao.php");

$text = $_POST['text_feedback'];

if (isset($text) && !empty($text)) {
    $p = mysqli_prepare($db, 'INSERT INTO Feedbacks (texto) values (?)');
    mysqli_stmt_bind_param($p, 's', $text);
    if (mysqli_stmt_execute($p)) {
        echo "1";
    } else {
        echo "0";
    }
}