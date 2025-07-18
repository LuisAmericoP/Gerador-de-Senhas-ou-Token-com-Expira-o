<?php
require 'Conn.php';

if (!isset($_GET['token'])) {
    die("Token não fornecido.");
}

$token = $_GET['token'];

$sql = "SELECT * FROM tokens WHERE token = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$token]);
$dados = $stmt->fetch();

if (!$dados) {
    echo "❌ Token inválido.";
    exit;
}

$dataAtual = date('Y-m-d H:i:s');
if ($dataAtual > $dados['expirado_em']) {
    echo "⚠️ Token expirado.";
} else {
    echo "✅ Token válido!<br>Expira às: " . $dados['expirado_em'];
}
?>
