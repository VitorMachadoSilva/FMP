<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Calculadora</title>
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
    <h1>Calculadora Simples</h1>

    <form method="post" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" step="any" required>
        <br>
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" step="any" required>
        <br>
        <br>
        <label for="operacao">Operação:</label>
        <select id="operacao" name="operacao" required>
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select>
        <br>
        
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacao = $_POST['operacao'];

        if (is_numeric($numero1) && is_numeric($numero2)) {
            switch ($operacao) {
                case 'soma':
                    $resultado = $numero1 + $numero2;
                    echo "<p>Resultado: $numero1 + $numero2 = $resultado</p>";
                    break;
                case 'subtracao':
                    $resultado = $numero1 - $numero2;
                    echo "<p>Resultado: $numero1 - $numero2 = $resultado</p>";
                    break;
                case 'multiplicacao':
                    $resultado = $numero1 * $numero2;
                    echo "<p>Resultado: $numero1 * $numero2 = $resultado</p>";
                    break;
                case 'divisao':
                    if ($numero2 != 0) {
                        $resultado = $numero1 / $numero2;
                        echo "<p>Resultado: $numero1 / $numero2 = $resultado</p>";
                    } else {
                        echo "<p>Erro: Divisão por zero não é permitida.</p>";
                    }
                    break;
                default:
                    echo "<p>Operação inválida.</p>";
                    break;
            }
        } else {
            echo "<p>Por favor, insira números válidos.</p>";
        }
    }
    ?>
</body>
</html>
