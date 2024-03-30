<?php
require_once './actions/config.php';
$sql = "SELECT * FROM usuarios";
$stmt = $conn->query($sql);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1'>";
echo "<tr><th>Nome</th><th>CPF</th><th>Email</th><th>Calendario</th><th>Telefone</th><th>Horario</th></tr>";

foreach($usuarios as $usuario){
    echo "<tr>";
    echo "<td>" . $usuario['nome'] . "</td>";
    echo "<td>" . $usuario['cpf'] . "</td>";
    echo "<td>" . $usuario['email'] . "</td>";
    echo "<td>" . $usuario['calendario'] . "</td>";
    echo "<td>" . $usuario['telefone'] . "</td>";
    echo "<td>" . $usuario['horario'] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>



