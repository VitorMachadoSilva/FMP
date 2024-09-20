<?php

if (isset($_POST['nome']) && isset($_POST['matricula']) && isset($_POST['curso']) &&
    isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['endereco']) &&
    isset($_POST['cep']) && isset($_POST['cidade']) && isset($_POST['uf']) &&
    isset($_POST['curso_horas']) && isset($_POST['carga_horaria'])) {

    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $curso = $_POST['curso'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $curso_horas = $_POST['curso_horas'];
    $carga_horaria = $_POST['carga_horaria'];

    $conexao = mysqli_connect("localhost", "root", "", "banco_atividade");

    if (!$conexao) {
        die("Erro de conexão com o Banco: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO alunos (nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, curso_horas, carga_horaria)
            VALUES ('$nome', '$matricula', '$curso', '$email', '$telefone', '$endereco', '$cep', '$cidade', '$uf', '$curso_horas', $carga_horaria)";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        echo "<h1>Registro inserido com sucesso!</h1>";
    } else {
        echo "<h1>Erro ao inserir registro: " . mysqli_error($conexao) . "</h1>";
    }

    
    mysqli_close($conexao);

} else {
    echo "<h1>Erro: Todos os campos são obrigatórios</h1>";
}

?>
