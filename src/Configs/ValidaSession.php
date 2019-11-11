<?php
if(session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}

if (!isset($_SESSION['idUsuario'])) {
    header('Location: ../Views/LoginView.php');

    exit();
}