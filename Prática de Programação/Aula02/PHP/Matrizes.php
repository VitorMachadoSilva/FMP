<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //ARRAY SIMPLES

    $numeros = array(1, 2, 3, 4, 5);

    echo $numeros[0] . "<br>";
    echo $numeros[1] . "<br>";
    echo $numeros[2] . "<br>";

    //SINTAXE ALTERNATIVA
    $palavra = array('p', 'h', 'p');
    echo $palavra[1] . "<br>";


    //DIFERENÇAS ENTRE PRINT_R E ECHO

    $DADOS = ["nome" => "João", "Idade" => 30];
    echo "Nome: " . $DADOS["nome"] . ", Idade: " . $DADOS["idade"];
    
    echo "<pre>";
    print_r($DADOS);
    echo "</pre>";


    //ARRAY ASSOCIATIVO

    $pessoa = array(
        "nome" => "João",
        "cpf" => "123.456.789-00",
        "email" => "joao@gmail.com"
    );

    echo $pessoa["nome"];
    echo $pessoa["cpf"];
    echo $pessoa["email"];

    $pessoa["nome"] = "Roberto";
    $pessoa["cpf"] = "123.453.873-99";
    $pessoa["nome"] = "robeto@gmail.com";

    echo $pessoa["nome"];
    echo $pessoa["cpf"];
    echo $pessoa["email"];

    //PERCORRENDO ARRAYS

    $letras = ["A", "B", "C", "D", "E", "F","G"];

     for($i = 0; $i < 3; $i++){
        echo $letras[$i]. " ";
     }

     $numeros = [1, 2, 3, 4, 5];

     foreach ($numeros as $numero){
        echo $numero . " ";
     }

     $array1 = ["Faculdade", "Municipal", "de", "Palhoça", "-", "A", "D", "S"];
     $numeroElementos = count($array1);
     echo "O array possui " . $numeroElementos . " elementos";

     $array1 = ["PHP", "HTML", "JavaScript"];  

        $array2 = ["Python", "Java", "C++"];  

        // Imprime cada elemento do array1 usando um loop for.  
        for ($i = 0; $i < count($array1); $i++) {  
            echo $array1[$i] . "<br>";  
        }  

        // Imprime cada elemento do array2 usando um loop for.  
        for ($i = 0; $i < count($array2); $i++) {  
            echo $array2[$i] . "<br>";  
        }  

        // Combina dois arrays usando a função array_merge().  
        $combinedArray = array_merge($array1, $array2);  
        echo "Array Combinado:<br>";  
        foreach ($combinedArray as $element) {  
            echo $element . "<br>";  
        }  


        $array = [  
            "nome" => "João",  
            "idade" => 30,  
            "cidade" => "São Paulo"  
        ];  
        
        // Imprime o array original  
        echo "Array Original:<br>";  
        foreach ($array as $key => $value) {  
            echo "$key: $value<br>";  
        }  
        
        // Obtém um array com as chaves usando a função array_keys()  
        $chaves = array_keys($array);  
        echo "Array de Chaves:<br>";  
        foreach ($chaves as $chave) {  
            echo "$chave<br>";  
        }  


        $matriz = [  
            "Maçã", "Banana", "Cereja",  
            "Laranja", "Uva", "Pera",  
            "Abacaxi", "Morango", "Melancia",  
        ];  
        
        echo $matrizP[1][2]; // Saída: Pera  
        
        // Exibindo a matriz completa usando print_r()  
        echo "<pre>";  
        print_r($matrizP);  
        echo "</pre>";  


        
        $matriz = [  
            "Python", "Java", "C++",  
            "JavaScript", "Ruby", "PHP",  
            "Swift", "Kotlin", "C#"  
        ];  
        
        // Percorrendo a matriz usando um loop for  
        for ($linha = 0; $linha < count($matriz); $linha++) {  
            for ($coluna = 0; $coluna < count($matriz[$linha]); $coluna++) {  
                echo $matriz[$linha][$coluna] . " ";  
            }  
            echo "<br>";  
        } 
        







    ?>
    
</body>
</html>