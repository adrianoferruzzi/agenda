<?php
$conn = new mysqli("localhost", "agenda", "12345678", "agendadb");
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$sql = "SELECT e.id, e.titulo, e.descricao, e.data, u.nome AS usuario 
        FROM eventos e 
        JOIN usuarios u ON e.usuario_id = u.id 
        ORDER BY e.data ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Eventos</title>
    <li><a href="index.html">Home</a></li>
</head>
<body>
    <h1>Lista de Eventos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Usuário</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['titulo'] ?></td>
            <td><?= $row['descricao'] ?></td>
            <td><?= $row['data'] ?></td>
            <td><?= $row['usuario'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
