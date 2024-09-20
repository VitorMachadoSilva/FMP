<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 01</title>
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
    <div class="container">
        <h1>Verifique se o número é positivo, negativo ou zero</h1>

        <form method="post" action="">
            <label for="numero">Digite um número:</label>
            <input type="text" id="numero" name="numero" required>
            <button type="submit">Verificar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];

            if (is_numeric($numero)) {
                if ($numero > 0) {
                    $message = "<p class='result'>Valor Positivo</p>";
                } elseif ($numero < 0) {
                    $message = "<p class='result'>Valor Negativo</p>";
                } else {
                    $message = "<p class='result'>Igual a Zero</p>";
                }
            } else {
                $message = "<p class='result'>Por favor, digite um número válido.</p>";
            }

            // Output the message
            echo $message;
        }
        ?>
    </div>
</body>
</html>