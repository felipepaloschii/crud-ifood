<?php

include '../../infra/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $sql = "UPDATE restaurante SET nome='$nome', categoria='$categoria', telefone='$telefone', endereco='$endereco' WHERE id=$id";

    if ($conexao->query($sql) === TRUE) {
        echo "Restaurante atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar restaurante: " . $conexao->error;
    }
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Restaurante</title>
</head>
<body>
    <h2>Editar Restaurante</h2>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>
        <br><br>
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>
        <br><br>

        <button type="submit">Atualizar Restaurante</button>
    </form>
    <br>
    <button type="button" onclick="location.href='../../index.php'">Voltar</button>
</body>
</html>