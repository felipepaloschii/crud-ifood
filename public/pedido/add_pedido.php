<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Novo Pedido</title>
</head>
<body>

    <h2>Adicionar Novo Pedido</h2>
    <form method="POST">
        <select name="cliente_id" id="cliente">
            <option value="">Selecione um cliente </option>
            <?php
            $sql = "SELECT nome, id FROM cliente";
            $cliente = $conexao->query($sql);
            while ($cliente = $cliente->fetch_assoc()) {
            ?>
                <option value="<?php echo $cliente['id']; ?>"><?php echo $cliente['nome']; ?></option>
            
            <?php
            }
            ?>

        </select>
        <br><br>


       <label for="restaurante">Restaurante:</label>
        <select name="restaurante" >
            <option value="">Selecione um restaurante</option>
            <?php
            $sql = "SELECT nome, id FROM restaurante";
            $restaurante = $conexao->query($sql);
            while ($restaurante = $restaurante->fetch_assoc()) {

            ?>
                <option value="<?php echo $restaurante['id']; ?>"><?php echo $restaurante['nome']; ?></option>
            <?php
            }
            ?>
        </select>
        <br><br>

        <label for="data_pedido">Data do Pedido:</label>
        <input type="date" id="data_pedido" name="data_pedido" required>
        <br><br>

        <label for="valor_total">Valor Total:</label>
        <input type="number" id="valor_total" name="valor_total"  required>
        <br><br>

        <button type="submit">Cadastrar Pedido</button>
    </form>
    <br>
    <button type="button" onclick="location.href='../../index.php'">Voltar</button>

</body>
</html>
