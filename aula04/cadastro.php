<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro - Processamento</title>
</head>
<body>
    <?php
        //captura os valores do formulário

        $nome = $_GET['nome'];
        $endereco = $_GET['endereco'];
        $cidade = $_GET['cidade'];

        echo "<h1> Dados Recebidos: </h1>";
        echo "<p><strong>Nome:</strong> $nome </p>";
        echo "<p><strong>Endereço:</strong> $endereco </p>";
        echo "<p><strong>Cidade:</strong> $cidade </p>";
    ?>  
    
</body>
</html>