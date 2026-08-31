<?php

$host = "mysql-baa4d2f-tutoriaisgameshd-bf6a.c.aivencloud.com";
$porta = 20179;
$usuario = "avnadmin";
$senha = "AVNS_dPSGvYcV_spdSgeWM5E";
$banco = "defaultdb";

$conn = mysqli_init();

mysqli_ssl_set(
    $conn,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);

if (!mysqli_real_connect(
    $conn,
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

$conn->set_charset("utf8mb4");
