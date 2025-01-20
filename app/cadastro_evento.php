<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $usuario_id = $_POST['usuario_id'];

    $conn = new mysqli("localhost", "agenda", "12345678", "agendadb");
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO eventos (titulo, descricao, data, usuario_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $titulo, $descricao, $data, $usuario_id);
    if ($stmt->execute()) {
        echo "Evento cadastrado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Eventos</title>
    <li><a href="index.html">Home</a></li>
</head>
<body>
    <h1>Cadastro de Eventos</h1>
    <form method="post" action="">
        <label>Título:</label><br>
        <input type="text" name="titulo" required><br>
        <label>Descrição:</label><br>
        <textarea name="descricao"></textarea><br>
        <label>Data:</label><br>
        <input type="date" name="data" required><br>
        <label>ID do Usuário:</label><br>
        <input type="number" name="usuario_id" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
