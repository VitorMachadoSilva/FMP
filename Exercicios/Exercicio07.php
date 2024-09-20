<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07 - Comparação de Valores</title>
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
    <h1>Comparar Valores</h1>

    <form method="post" action="">
        <label for="valorA">Valor A:</label>
        <input type="number" id="valorA" name="valorA" step="any" required>
        <br>
        <label for="valorB">Valor B:</label>
        <input type="number" id="valorB" name="valorB" step="any" required>
        <br>
        <button type="submit">Comparar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        if (is_numeric($valorA) && is_numeric($valorB)) {
            if ($valorA > $valorB) {
                echo "<p>A maior que B</p>";
            } elseif ($valorA < $valorB) {
                echo "<p>A menor que B</p>";
            } else {
                echo "<p>A é igual a B</p>";
            }
        } else {
            echo "<p>Por favor, insira números válidos.</p>";
        }
    }
    ?>
</body>
</html>
