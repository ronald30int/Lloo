<?php
$id = $_GET['id'];
$produtos = [
    1 => ['titulo' => 'Produto 1', 'preco' => 50.00],
    2 => ['titulo' => 'Produto 2', 'preco' => 75.00],
    3 => ['titulo' => 'Produto 3', 'preco' => 100.00],
];

$produto = $produtos[$id];
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - <?= $produto['titulo']; ?></title>
</head>
<body>
    <h1>Checkout - <?= $produto['titulo']; ?></h1>
    <form action="confirmacao.php" method="POST">
        <input type="hidden" name="produto_id" value="<?= $id; ?>">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="endereco">Endereço de Entrega:</label><br>
        <input type="text" id="endereco" name="endereco" required><br><br>

        <button type="submit">Finalizar Compra</button>
    </form>
</body>
</html><?php
$id = $_GET['id'];
$produtos = [
    1 => ['titulo' => 'Produto 1', 'preco' => 50.00],
    2 => ['titulo' => 'Produto 2', 'preco' => 75.00],
    3 => ['titulo' => 'Produto 3', 'preco' => 100.00],
];

$produto = $produtos[$id];
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - <?= $produto['titulo']; ?></title>
</head>
<body>
    <h1>Checkout - <?= $produto['titulo']; ?></h1>
    <form action="confirmacao.php" method="POST">
        <input type="hidden" name="produto_id" value="<?= $id; ?>">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="endereco">Endereço de Entrega:</label><br>
        <input type="text" id="endereco" name="endereco" required><br><br>

        <button type="submit">Finalizar Compra</button>
    </form>
</body>
</html>