<?php

require_once "conexao.php";

$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";

if (empty($email) || empty($senha)) {
    die("Preencha todos os campos.");
}

$sql = "SELECT id, nome, email, senha FROM usuarios WHERE email = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {

    $usuario = $resultado->fetch_assoc();

    if (password_verify($senha, $usuario["senha"])) {

        echo "Login efetuado com sucesso!";

    } else {

        echo "E-mail ou senha inválidos.";

    }

} else {

    echo "E-mail ou senha inválidos.";

}

$stmt->close();
$conexao->close();