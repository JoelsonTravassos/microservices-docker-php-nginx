<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=utf-8');

$servername = getenv('DB_HOST') ?: 'db';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASS') ?: 'rootpass';
$database = getenv('DB_NAME') ?: 'meubanco';

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = rand(1, 999);
$val = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host = gethostname();

$stmt = $conn->prepare("INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssss", $id, $val, $val, $val, $val, $host);

if ($stmt->execute()) {
    echo "Novo registro criado com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>