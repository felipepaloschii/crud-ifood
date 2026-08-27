<?php

$host = "localhost";
$user = "root";
$password = "root";
$database = "ifood_crud";

$conexao = new mysqli($host, $user, $password, $database);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

?>