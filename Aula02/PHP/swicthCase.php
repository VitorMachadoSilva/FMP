<?php  
$diaDaSemana = "quarta";  

switch ($diaDaSemana) {  
    case "segunda":  
        echo "Hoje é segunda-feira.";  
        break;  
    case "terça":  
        echo "Hoje é terça-feira.";  
        break;  
    case "quarta":  
        echo "Hoje é quarta-feira.";  
        break;  
    default:  
        echo "Dia inválido.";  
}  
echo "<br>";
echo "<br>";
?>  

<?php  
$nota = 8;  

switch (true) {  
    case ($nota >= 7):  
        echo "Você foi muito bem!";  
        break;  
    case ($nota >= 5):  
        echo "Você pode estudar mais para a próxima vez.";  
        break;  
    default:  
        echo "Você precisa estudar mais.";  
}  
echo "<br>";
echo "<br>";

?>  

<?php  
switch (true) {  
    case ($hora >= 6 && $hora < 18):  
        echo "Bom dia!";  
        break;  
    default:  
        echo "Boa noite!";  
}  
?>