<?php
$conn = mysqli_connect("localhost", "root", "", "banco_atividade");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$buscar_criterio = $_POST['buscar_criterio'];
$buscar_valor = $_POST['buscar_valor'];

$query = "SELECT * FROM alunos WHERE $buscar_criterio LIKE '%$buscar_valor%'";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

echo "<style>";
echo "table { border-collapse: collapse; width: 100%; }";
echo "th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }";
echo "th { background-color: #f0f0f0; }";
echo "</style>";

echo "<table>";
echo "<tr><th>Nome do Aluno</th><th>Matrícula</th><th>Curso</th><th>E-mail Institucional</th><th>Telefone</th><th>Endereço</th><th>CEP</th><th>Cidade</th><th>UF</th><th>Curso para Horas Complementares</th><th>Carga Horária</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['nome'] . "</td>";
    echo "<td>" . $row['matricula'] . "</td>";
    echo "<td>" . $row['curso'] . "</td>";
    echo "<td>" . (isset($row['email_institucional']) ? $row['email_institucional'] : '') . "</td>";
    echo "<td>" . $row['telefone'] . "</td>";
    echo "<td>" . $row['endereco'] . "</td>";
    echo "<td>" . $row['cep'] . "</td>";
    echo "<td>" . $row['cidade'] . "</td>";
    echo "<td>" . $row['uf'] . "</td>";
    echo "<td>" . (isset($row['curso_horas_complementares']) ? $row['curso_horas_complementares'] : '') . "</td>";
    echo "<td>" . $row['carga_horaria'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>