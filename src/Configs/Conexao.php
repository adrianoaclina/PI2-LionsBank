<?php

if ($db = mysqli_connect(
    'localhost',
    'root',
    '',
    'Lionsbank',
    3306
)) {
} else {
    die("Problema ao conectar ao SGDB");
}