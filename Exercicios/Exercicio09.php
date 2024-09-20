<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09 - Verificação de Maioridade</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #3e8e41;
        }
        .result {
            font-size: 18px;
            font-weight: bold;
            color: #666;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Verificar Maioridade</h1>

    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <br>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        if (is_numeric($idade)) {
            if ($idade >= 18) {
                echo "<p>$nome é maior de 18 e tem $idade anos</p>";
            } else {
                echo "<p>$nome não é maior de 18 e tem $idade anos</p>";
            }
        } else {
            echo "<p>Por favor, insira uma idade válida.</p>";
        }
    }
    ?>
</body>
</html>
