<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("atv_fmp", "Programação em PHP");
        echo "<h1>" . atv_fmp ."</h1>";
        $valor1 = 10;
        $valor2 = 16;

        $soma = $valor1 + $valor2;

        echo "<h1> Adição </h1>";
        echo "Valor 1: " . $valor1 ;
        echo "Valor 2: " . $valor2;
        echo "Soma é: " . $soma . "<br>";

        $valor3 = 110;
        $valor4 = 136;

        //SUBTRAÇÃO
        $sub = $valor3 - $valor4;

        echo "<h1> Subtração </h1>";
        echo "Valor 1: " . $valor3 ;
        echo "Valor 2: " . $valor4;
        echo "Subtração é: " . $sub . "<br>";

        //DIVISÃO
        $valor5 = 1;
        $valor6 = 6;

        $div = $valor5 / $valor6;

        echo "<h1> Adição </h1>";
        echo "Valor 1: " . $valor5 ;
        echo "Valor 2: " . $valor6;
        echo "Divisão é: " . $div . "<br>";


        //MULTIPLICAÇÃO
        $valor7 = 99;
        $valor8 = 128;

        $mult = $valor7 * $valor8;

        echo "<h1> Adição </h1>";
        echo "Valor 1: " . $valor7 ;
        echo "Valor 2: " . $valor8;
        echo "Soma é: " . $mult . "<br>";

        
    ?>
    
</body>
</html>