<?php


session_destroy();

session_start();

header('Location: ../Views/LoginView.php');
?>