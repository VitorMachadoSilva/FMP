<?php  
$nota = 85;  
if ($nota >= 60) {  
    echo "Você passou no exame.";  
}  
echo "<br>";

?>  

<?php  
$tempo = "Chuvoso";  
if ($tempo == "ensolarado") {  
    echo "Vamos à praia hoje.";  
} else {  
    echo "Melhor ficar em casa hoje.";  
}  
echo "<br>";
echo "<br>";

?>  

<?php  
$nota = 75;  
if ($nota >= 90) {  
    echo "Parabéns, você tirou uma nota excelente!";  
} elseif ($nota >= 70) {  
    echo "Bom trabalho!";  
} else {  
    echo "Você pode melhorar.";  
}
echo "<br>";
echo "<br>";

?>  

<?php  
$idade = 25;  
if ($idade < 18) {  
    echo "Criança.";  
} elseif ($idade < 60) {  
    echo "Adulto.";  
} else {  
    echo "Idoso.";  
}  
echo "<br>";
echo "<br>";

?>



<?php  
$numero = 7;  
if ($numero % 2 == 0) {  
    echo "$numero é um número par.";  
} else {  
    echo "$numero é um número ímpar.";  
}  
echo "<br>";
echo "<br>";

?>  

<?php  
$name = "Alice";  
if ($name == "Alice") {  
    echo "Olá, Alice!";  
} elseif ($name == "Bob") {  
    echo "Olá, Bob!";  
} else {  
    echo "Olá, visitante!";  
}  
echo "<br>";
echo "<br>";

?>  

 

<?php  
$logado = true; // Simula um login válido  
if ($logado) {  
    echo "Acesso permitido.";  
} else {  
    echo "Acesso negado.";  
}  
?>