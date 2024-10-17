<?php
// Dados dos produtos (normalmente, isso seria retirado de um banco de dados)
$produtos = [
    1 => ['titulo' => 'Produto 1', 'preco' => 50.00, 'descricao' => 'Descrição do Produto 1'],
    2 => ['titulo' => 'Produto 2', 'preco' => 75.00, 'descricao' => 'Descrição do Produto 2'],
    3 => ['titulo' => 'Produto 3', 'preco' => 100.00, 'descricao' => 'Descrição do Produto 3'],
];

$id = $_GET['id'];
$produto = $produtos[$id];
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $produto['titulo']; ?></title>
</head>
<body>
    <h1><?= $produto['titulo']; ?></h1>
    <p><?= $produto['descricao']; ?></p>
    <p>Preço: R$ <?= number_format($produto['preco'], 2, ',', '.'); ?></p>
    
    <a href="checkout.php?id=<?= $id; ?>">Comprar</a>
</body>
</html>