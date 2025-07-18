<?php
require 'Conn.php';

function gerarToken($tamanho = 32) {
    return bin2hex(random_bytes($tamanho / 2));
}

$token = gerarToken();
$agora = date('Y-m-d H:i:s');
$expira = date('Y-m-d H:i:s', strtotime('+10 minutes'));

$sql = "INSERT INTO tokens (token, criado_em, expirado_em) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$token, $agora, $expira]);

echo "Token gerado com sucesso:<br><br>";
echo "<strong>$token</strong><br><br>";
echo "<a href='validar.php?token=$token'>Clique aqui para validar</a>";
?>
