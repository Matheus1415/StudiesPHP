<?php
$host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'wordpress';

$conn = new mysqli($host, $db_user, $db_password, $db_name);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$usuario_id = 1;
$data_hoje = date('Y-m-d');

$check_sql = "SELECT * FROM investimento 
              WHERE usuario_id = $usuario_id 
              AND data_investimento = '$data_hoje'";

$check_result = $conn->query($check_sql);

if ($check_result->num_rows === 0) {
    // Pega o último valor total registrado
    $ultimo_sql = "SELECT valor_total FROM investimento 
                   WHERE usuario_id = $usuario_id 
                   ORDER BY data_investimento DESC LIMIT 1";
    $ultimo_result = $conn->query($ultimo_sql);

    if ($ultimo_result && $ultimo_result->num_rows > 0) {
        $ultimo = $ultimo_result->fetch_assoc();
        $valor_investido = $ultimo['valor_total'];
    } else {
        $valor_investido = 1000.00;
    }

    $rendimento = $valor_investido * 0.06;
    $valor_total = $valor_investido + $rendimento;

    $insere_sql = "INSERT INTO investimento 
                  (usuario_id, valor_investido, valor_rendimento, valor_total, data_investimento) 
                  VALUES ($usuario_id, $valor_investido, $rendimento, $valor_total, '$data_hoje')";

    if (!$conn->query($insere_sql)) {
        echo "Erro ao inserir: " . $conn->error;
    }
}

$sql = "SELECT * FROM investimento WHERE usuario_id = $usuario_id ORDER BY data_investimento DESC";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Investimentos do Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        table {
            width: 90%;
            margin: 0 auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .no-data {
            text-align: center;
            margin-top: 40px;
            color: #888;
        }
    </style>
</head>

<h2>Investimentos do Usuário #<?php echo $usuario_id; ?></h2>

<?php if ($result && $result->num_rows > 0): ?>
    <table>
        <thead>
            <tr>
                <th>Data</th>
                <th>Valor Investido</th>
                <th>Valor do Rendimento</th>
                <th>Valor Total</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo date("d/m/Y", strtotime($row["data_investimento"])); ?></td>
                    <td>R$ <?php echo number_format($row["valor_investido"], 2, ',', '.'); ?></td>
                    <td>R$ <?php echo number_format($row["valor_rendimento"], 2, ',', '.'); ?></td>
                    <td>R$ <?php echo number_format($row["valor_total"], 2, ',', '.'); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
<?php else: ?>
    <p class="no-data">Nenhum investimento encontrado para este usuário.</p>
<?php endif; ?>

<?php
$conn->close();
?>
</body>

</html>