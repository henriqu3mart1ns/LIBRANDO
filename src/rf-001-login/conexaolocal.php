<?php

$host = "localhost";
$porta = 3306;
$usuario = "root";
$senha = "";
$banco = "librando";

$conexao = new mysqli(
    $host,
    $usuario,
    $senha,
    $banco,
    $porta
);

if ($conexao->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");
