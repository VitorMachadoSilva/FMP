<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08 - Média Final</title>
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
    <h1>Cálculo da Média Final</h1>

    <form method="post" action="">
        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1" step="any" required>
        <br>
        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2" step="any" required>
        <br>
        <label for="nota3">Nota 3:</label>
        <input type="number" id="nota3" name="nota3" step="any" required>
        <br>
        <button type="submit">Calcular Média</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3)) {
            $notas = [$nota1, $nota2, $nota3];
            $media = (($nota1 * 2) + ($nota2 * 2) + ($nota3 * 1)) / 5;

            echo "<p>Média Final: $media</p>";
            if ($media >= 7) {
                echo "<p>Situação: Aprovado</p>";
            } else {
                echo "<p>Situação: Reprovado</p>";
            }
        } else {
            echo "<p>Por favor, insira notas válidas.</p>";
        }
    }
    ?>
</body>
</html>
