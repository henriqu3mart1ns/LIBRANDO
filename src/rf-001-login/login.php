<?php

header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    http_response_code(204);
    exit;
}

require_once "conexao.php";


$email = trim($_POST["email"] ?? "");
$senha = $_POST["senha"] ?? "";

if ($email === "" || $senha === "") {
    http_response_code(400);
    echo json_encode(["sucesso" => false, "mensagem" => "Preencha todos os campos."]);
    exit;
}

$sql = "SELECT id, nome, email, senha FROM usuarios WHERE email = ?";
$stmt = $conexao->prepare($sql);

if (!$stmt) {
    http_response_code(500);
    echo json_encode(["sucesso" => false, "mensagem" => "Erro interno do servidor."]);
    exit;
}

$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $usuario = $resultado->fetch_assoc();

    if (password_verify($senha, $usuario["senha"])) {
        http_response_code(200);
        echo json_encode([
            "sucesso" => true,
            "mensagem" => "Login efetuado com sucesso!",
            "nome" => $usuario["nome"]
        ]);
    } else {
        http_response_code(401);
        echo json_encode(["sucesso" => false, "mensagem" => "E-mail ou senha inválidos."]);
    }
} else {
    http_response_code(401);
    echo json_encode(["sucesso" => false, "mensagem" => "E-mail ou senha inválidos."]);
}

$stmt->close();
$conexao->close();
