<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .h1{
            text-align: center;
            background-color: blue;
        }
    </style>
<?php
$idade = 19;
$nome = "Vitor";
echo "Idade: ". $idade. "<br>"."Nome: ". $nome;


$cores = array("vermelho, preto, cinza, branco, rosa");
$numeros = [1,2,3,4,5,6];

$posicao = 3;
echo "A posição: ". $posicao . "Representa a cor: " . $cores[$posicao];
?>
</body>
</html>