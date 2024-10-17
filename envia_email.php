<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];

    $to = "ronald28int@gmail.com";
    $subject = "Novo Pedido Confirmado";
    $message = "
    <html>
    <head>
    <title>Pedido Confirmado</title>
    </head>
    <body>
    <h1>Pedido Confirmado!</h1>
    <p><strong>Produto:</strong> $produto</p>
    <p><strong>Preço:</strong> R$ $preco</p>
    <p><strong>Nome:</strong> $nome</p>
    <p><strong>Endereço de Entrega:</strong> $endereco</p>
    </body>
    </html>
    ";

    // Definindo o cabeçalho do e-mail
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: no-reply@seusite.com.br" . "\r\n";

    // Enviando o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Pedido enviado com sucesso!";
    } else {
        echo "Erro ao enviar o pedido.";
    }
}
?>