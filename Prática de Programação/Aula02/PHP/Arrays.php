<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        
        h1 {
            color: #0056b3;
            border-bottom: 2px solid #0056b3;
            padding-bottom: 10px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            color: #007bff;
        }
        /* pre {
            background: #eee;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 4px;
            overflow: auto;
        } */
        .code-output {
            font-family: monospace;
            background: #fafafa;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 4px;
        }
        .code-output pre {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Exemplo de Código PHP</h1>
        <!-- Seção para Array de Cidades -->
        <div class="section">
            <h2>Array de Cidades</h2>
            <?php
                $cidades = array(1 => "Palhoça", 2 => "Floripa", 3 => "Jurerê");
                echo "<pre class='code-output'>"; 
                var_dump($cidades); 
                echo "</pre>";
                echo "<pre class='code-output'>";
                print_r($cidades);
                echo "</pre>";
            ?>
        </div>

        <!-- Seção para Cálculo da Circunferência -->
        <div class="section">
            <h2>Cálculo da Circunferência</h2>
            <?php
                $raio = 2;
                define("pi", 3.141559265356);
                $circunferencia = 2 * pi * $raio;
                echo "<div class='code-output'>Circunferência: " . number_format($circunferencia, 2) . "</div>";
            ?>
        </div>

        <!-- Seção para Manipulação de Strings -->
        <div class="section">
            <h2>Manipulação de Strings</h2>
            <?php
                $nome = "faculdade municipal de palhoça";
                $nome1 = "vitor";
                echo "<div class='code-output'>"
                    . "Maiúsculas: " . strtoupper($nome) . "<br>"
                    . "Minúsculas: " . strtolower($nome) . "<br>"
                    . "Cada Palavra Capitalizada: " . ucwords($nome) . "<br>"
                    . "Primeira Palavra Capitalizada: " . ucfirst($nome1) . "<br>";
                
                $nome = str_replace("e", "&", $nome);
                echo "Substituição de 'e' por '&': " . $nome . "</div>";
            ?>
        </div>
    </div>
</body>
</html>
