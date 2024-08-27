<?php  
// Captura os valores dos campos de entrada do formulário e armazena em variáveis  
$num1 = filter_input(INPUT_POST, "txtNumero1");  
$num2 = filter_input(INPUT_POST, "txtNumero2");  
// Calcula o valor do campo txtNumero1 + txtNumero2  
$result = $num1 + $num2;  
// Calcula a soma dos números e armazena em $result  
?>  

<!DOCTYPE html>  
<html>  
<head>  
    <title>Formulário PHP</title>  
</head>  
<body>  
    <h1>Exemplo de Formulário PHP</h1>  
    <!-- Formulário para Inserir dois números -->  
    <form method="POST">  
        <label>Número 1: <input type="text" name="txtNumero1"></label><br>  
        <label>Número 2: <input type="text" name="txtNumero2"></label><br>  
        <input type="submit" name="btnCalcular" value="Calcular">  
    </form>  
    <h2>Resultado</h2>  
    <?php  
    // Exibe o resultado da soma  
    echo $result;  
    ?>  
</body>  
</html>