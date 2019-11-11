<?php

if ($db = mysqli_connect(
    'localhost',
    'root',
    '',
    'bankaccount',
    3307
)) {
} else {
    die("Problema ao conectar ao SGDB");
}