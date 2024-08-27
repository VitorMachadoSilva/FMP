<?php  
$a = 10;  
$b = 10;  

if ($a != $b) {  
    echo "$a é diferente de $b";  
} else {  
    echo "$a não é igual a $b";  
}  

if ($a > $b) {  
    echo "$a é maior do que $b";  
} else {  
    echo "$a é menor ou igual ao valor à direita.";  
}  

echo "<br>";
echo "<br>";

$a = 5;  
$b = 10;  

if ($a < $b) {  
    echo "$a é menor do que $b";  
} else {  
    echo "$a não é menor do que $b";  
}  
echo "<br>";
echo "<br>";

if ($a <= $b) {  
    echo "$a é menor ou igual a $b";  
} else {  
    echo "$a não é menor ou igual a $b";  
}  
echo "<br>";
echo "<br>";

$idade = 25;  
$temCarteiraMotorista = true;  

if ($idade >= 18 && $temCarteiraMotorista) {  
    echo "Pode dirigir.";  
} else {  
    echo "Não pode dirigir.";  
}  
?>
