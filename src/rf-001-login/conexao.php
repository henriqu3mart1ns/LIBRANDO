<?php

$host = "mysql-baa4d2f-tutoriaisgameshd-bf6a.c.aivencloud.com";
$porta = 20179;
$usuario = "avnadmin";
$senha = "AVNS_dPSGvYcV_spdSgeWM5E";
$banco = "defaultdb";

$conexao = mysqli_init();

mysqli_ssl_set(
    $conexao,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);

if (!mysqli_real_connect(
    $conexao,
    $host,
    $usuario,
    $senha,
    $banco,
    $porta,
    NULL,
    MYSQLI_CLIENT_SSL
)) {
    die("Erro ao conectar ao banco de dados.");
}

$conexao->set_charset("utf8mb4");
