<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gráfico de Produtos Mais Vendidos</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Produtos Mais Vendidos</h2>
    <canvas id="graficoPizza" width="400" height="400"></canvas>

    <?php
    $sql = "SELECT produto, SUM(quantidade) AS total FROM vendas GROUP BY produto";
    $resultado = $conn->query($sql);

    $produtos = [];
    $quantidades = [];

    while($row = $resultado->fetch_assoc()) {
        $produtos[] = $row['produto'];
        $quantidades[] = $row['total'];
    }
    ?>

    <script>
        const ctx = document.getElementById('graficoPizza').getContext('2d');
        const grafico = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($produtos); ?>,
                datasets: [{
                    label: 'Produtos Vendidos',
                    data: <?php echo json_encode($quantidades); ?>,
                    backgroundColor: [
                        '#ff6384', '#36a2eb', '#ffce56', '#cc65fe', '#ff9f40',
                        '#4bc0c0', '#9966ff', '#c9cbcf', '#3cba9f', '#e8c3b9'
                    ]
                }]
            }
        });
    </script>
</body>
</html>
