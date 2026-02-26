<?php

$db_name = "aulateste";   // Nome do banco de dados
$db_host = "localhost";   // Servidor (no seu caso, o próprio computador)
$db_user = "root";        // Usuário do MySQL
$db_pass = "";            // Usuário do MySQL

$conn = new PDO("mysql:dbname=". $db_name .";host=". $db_host, $db_user, $db_pass);
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>