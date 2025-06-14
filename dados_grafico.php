<?php
include 'conexao.php';

$sql = "SELECT produto, SUM(quantidade) AS total FROM vendas GROUP BY produto";
$resultado = $conn->query($sql);

$dados = [];

while ($row = $resultado->fetch_assoc()) {
    $dados[] = [
        'produto' => $row['produto'],
        'total' => $row['total']
    ];
}

header('Content-Type: application/json');
echo json_encode($dados);
?>
