<?php
// Lista de produtos
$produtos = [
    1 => ['titulo' => 'Produto 1', 'preco' => 50.00],
    2 => ['titulo' => 'Produto 2', 'preco' => 75.00],
    3 => ['titulo' => 'Produto 3', 'preco' => 100.00],
];

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Virtual</title>
</head>
<body>
    <h1>Produtos</h1>
    <ul>
        <?php foreach ($produtos as $id => $produto): ?>
            <li>
                <a href="produto.php?id=<?= $id; ?>">
                    <?= $produto['titulo']; ?> - R$ <?= number_format($produto['preco'], 2, ',', '.'); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>