<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06 - Ordem Crescente</title>
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
    <h1>Imprimir Valores em Ordem Crescente</h1>

    <form method="post" action="">
        <label for="numeroA">Número A:</label>
        <input type="number" id="numeroA" name="numeroA" step="any" required>
        <br>
        <label for="numeroB">Número B:</label>
        <input type="number" id="numeroB" name="numeroB" step="any" required>
        <br>
        <button type="submit">Ordenar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeroA = $_POST['numeroA'];
        $numeroB = $_POST['numeroB'];

        if (is_numeric($numeroA) && is_numeric($numeroB)) {
            if ($numeroA < $numeroB) {
                echo "<p>Ordem Crescente: $numeroA, $numeroB</p>";
            } else {
                echo "<p>Ordem Crescente: $numeroB, $numeroA</p>";
            }
        } else {
            echo "<p>Por favor, insira números válidos.</p>";
        }
    }
    ?>
</body>
</html>
