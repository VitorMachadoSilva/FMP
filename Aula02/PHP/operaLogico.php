<?php  
$idade = 25;  
$stemPermissao = true;  

if ($idade >= 18) {  
    echo "Pode entrar na festa!";  
} else {  
    echo "Não pode entrar na festa.";  
}  

echo "<br>";
echo "<br>";

$stemIngresso = false;  
$stemConvite = true;  

if ($stemIngresso || $stemConvite) {  
    echo "Pode entrar no evento.";  
} else {  
    echo "Não pode entrar no evento.";  
}  


echo "<br>";
echo "<br>";



$usuarioLogado = false;  

if (!$usuarioLogado) {  
    echo "Por favor, faça o login para continuar.";  
}  


if ($idade >= 18 && $temAutorizacao) {  
    echo "Pode acessar o conteúdo restrito.";  
} else {  
    echo "Não pode acessar o conteúdo restrito.";  
}  
?>


