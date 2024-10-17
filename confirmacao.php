<?php
$produto_id = $_POST['produto_id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];

$produtos = [
    1 => ['titulo' => 'Produto 1', 'preco' => 50.00],
    2 => ['titulo' => 'Produto 2', 'preco' => 75.00],
    3 => ['titulo' => 'Produto 3', 'preco' => 100.00],
];

$produto = $produtos[$produto_id];
$to = "ronald28int@gmail.com";
$subject = "Novo Pedido de " . $nome;
$message = "Produto: " . $produto['titulo'] . "\n";
$message .= "Preço: R$ " . number_format($produto['preco'], 2, ',', '.') . "\n";
$message .= "Nome: " . $nome . "\n";
$message .= "Endereço: " . $endereco . "\n";

// Simulação de link de pagamento (gerar um link real conforme o gateway de pagamento)
$link_pagamento = "https://pagamento.com/checkout?produto_id=$produto_id&nome=$nome&endereco=$endereco";

// Enviar e-mail
mail($to, $subject, $message);

// Exibir confirmação com link de pagamento
echo "<h1>Pedido Confirmado!</h1>";
echo "<p>Nome: $nome</p>";
echo "<p>Endereço: $endereco</p>";
echo "<p><a href='$link_pagamento'>Clique aqui para pagar</a></p>";
?>