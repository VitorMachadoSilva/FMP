<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "banco_atividade";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
  }

  $matricula = $_POST['matricula_atualizar'];
  $nova_carga_horaria = $_POST['nova_carga_horaria'];

  $sql = "SELECT carga_horaria FROM alunos WHERE matricula='$matricula'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $carga_horaria_atual = $row['carga_horaria'];
    $carga_horaria_total = $carga_horaria_atual + $nova_carga_horaria;

    $sql = "UPDATE alunos SET carga_horaria=$carga_horaria_total WHERE matricula='$matricula'";

    if ($conn->query($sql) === TRUE) {
      echo "Carga horária atualizada com sucesso!";
    } else {
      echo "Erro: " . $sql . "<br>" . $conn->error;
    }
  } else {
    echo "Matrícula não encontrada.";
  }

  $conn->close();
?>